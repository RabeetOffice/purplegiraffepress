<?php
/**
 * Developer settings: sensitive site configuration editable from the studio.
 *
 * Writes the SAME admin/data/settings-overrides.json that settings.php uses,
 * but owns a DIFFERENT set of keys (SMTP, database, reCAPTCHA, analytics IDs,
 * raw injected scripts). Every write reads the whole file and changes ONLY this
 * page's keys, so settings.php's keys (contact, social, leads) are never lost.
 *
 * includes/config.php reads these exact override keys via pgp_setting(), so a
 * value saved here changes the live site immediately. Secrets are masked in the
 * UI and only overwritten when a new value is actually typed.
 */

require_once __DIR__ . '/includes/auth.php';

$user = admin_require_module('developer'); // super-admin gets this via '*'

$OVR_PATH = ADMIN_DATA_DIR . '/settings-overrides.json';

/* Keys this page owns, grouped by section. Every write touches ONLY these. */
$SECTION_KEYS = [
    'smtp'      => ['smtp_host', 'smtp_port', 'smtp_secure', 'smtp_user', 'smtp_pass', 'smtp_from_email', 'smtp_from_name'],
    'database'  => ['db_host', 'db_port', 'db_name', 'db_user', 'db_pass'],
    'recaptcha' => ['recaptcha_site_key', 'recaptcha_secret_key', 'recaptcha_min_score'],
    'analytics' => ['analytics_ga4_id', 'analytics_gtm_id', 'analytics_clarity_id', 'analytics_search_console'],
    'scripts'   => ['script_head', 'script_body_open', 'script_footer'],
];

/* Effective fallbacks (must mirror includes/config.php) - shown as placeholders
   and as the value when no override is stored. Secrets are intentionally NOT
   listed here so they are never revealed in the page. */
$DEFAULTS = [
    'smtp_host'                => 'smtp.gmail.com',
    'smtp_port'                => 587,
    'smtp_secure'              => 'tls',
    'smtp_user'                => 'support@purplegiraffepress.com',
    'smtp_from_email'          => 'support@purplegiraffepress.com',
    'smtp_from_name'           => 'Purple Giraffe Press',
    'db_host'                  => '127.0.0.1',
    'db_port'                  => 3306,
    'db_name'                  => 'purplegiraffepress',
    'db_user'                  => 'root',
    'db_pass'                  => '',
    'recaptcha_min_score'      => 0.5,
    'analytics_ga4_id'         => 'G-G4SN1LWFY1',
    'analytics_gtm_id'         => '',
    'analytics_clarity_id'     => 'x8wn0x7tuj',
    'analytics_search_console' => '',
];

/* Which keys are secrets: never rendered back, only replaced when re-typed. */
$SECRET_KEYS = ['smtp_pass', 'db_pass', 'recaptcha_secret_key'];

/* ---------------------------------------------------------------- actions */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    admin_verify_csrf();
    $section = (string) ($_POST['section'] ?? '');

    if (!isset($SECTION_KEYS[$section])) {
        admin_flash('err', 'Unknown developer section.');
        admin_redirect('dev.php');
    }

    $ovr = admin_json_read($OVR_PATH, []);
    if (!is_array($ovr)) { $ovr = []; }

    /* Reset: drop only THIS section's keys so config defaults apply again. */
    if (!empty($_POST['reset'])) {
        foreach ($SECTION_KEYS[$section] as $k) { unset($ovr[$k]); }
        if (admin_json_write($OVR_PATH, $ovr)) {
            admin_flash('ok', 'That section is back to the config defaults.');
        } else {
            admin_flash('err', 'Could not write the settings file. Check folder permissions on admin/data.');
        }
        admin_redirect('dev.php');
    }

    /* Helper: keep a masked secret unless a new value was actually typed. */
    $secret = static function (string $key, array $ovr): string {
        $typed = (string) ($_POST[$key] ?? '');
        if ($typed !== '') { return $typed; }               // admin typed a new secret
        return (string) ($ovr[$key] ?? '');                 // blank submit keeps the saved value
    };

    if ($section === 'smtp') {
        $host   = trim(strip_tags((string) ($_POST['smtp_host'] ?? '')));
        $port   = (int) ($_POST['smtp_port'] ?? 0);
        $secure = (string) ($_POST['smtp_secure'] ?? 'tls');
        $sUser  = trim(strip_tags((string) ($_POST['smtp_user'] ?? '')));
        $from   = trim(strip_tags((string) ($_POST['smtp_from_email'] ?? '')));
        $fName  = trim(strip_tags((string) ($_POST['smtp_from_name'] ?? '')));

        if ($port < 1 || $port > 65535) {
            admin_flash('err', 'SMTP port must be a number between 1 and 65535. Nothing was saved.');
            admin_redirect('dev.php');
        }
        if (!in_array($secure, ['tls', 'ssl'], true)) {
            admin_flash('err', 'SMTP security must be TLS or SSL. Nothing was saved.');
            admin_redirect('dev.php');
        }
        if ($from !== '' && !filter_var($from, FILTER_VALIDATE_EMAIL)) {
            admin_flash('err', 'The "from" email address is not valid. Nothing was saved.');
            admin_redirect('dev.php');
        }

        $ovr['smtp_host']       = $host;
        $ovr['smtp_port']       = $port;
        $ovr['smtp_secure']     = $secure;
        $ovr['smtp_user']       = $sUser;
        $ovr['smtp_pass']       = $secret('smtp_pass', $ovr);
        $ovr['smtp_from_email'] = $from;
        $ovr['smtp_from_name']  = $fName;

        if (admin_json_write($OVR_PATH, $ovr)) {
            admin_flash('ok', 'SMTP settings saved. The site sends email with these now.');
        } else {
            admin_flash('err', 'Could not write the settings file. Check folder permissions on admin/data.');
        }
        admin_redirect('dev.php');
    }

    if ($section === 'database') {
        $host = trim(strip_tags((string) ($_POST['db_host'] ?? '')));
        $port = (int) ($_POST['db_port'] ?? 0);
        $name = trim(strip_tags((string) ($_POST['db_name'] ?? '')));
        $dUsr = trim(strip_tags((string) ($_POST['db_user'] ?? '')));

        if ($port < 1 || $port > 65535) {
            admin_flash('err', 'Database port must be a number between 1 and 65535. Nothing was saved.');
            admin_redirect('dev.php');
        }

        $ovr['db_host'] = $host;
        $ovr['db_port'] = $port;
        $ovr['db_name'] = $name;
        $ovr['db_user'] = $dUsr;
        // db_pass may legitimately be empty; keep the empty override so the
        // config default ('') is not silently reverted to. Only a blank submit
        // when a secret IS already stored keeps the stored one.
        $ovr['db_pass'] = $secret('db_pass', $ovr);

        if (admin_json_write($OVR_PATH, $ovr)) {
            admin_flash('ok', 'Database settings saved. The site connects with these now.');
        } else {
            admin_flash('err', 'Could not write the settings file. Check folder permissions on admin/data.');
        }
        admin_redirect('dev.php');
    }

    if ($section === 'recaptcha') {
        $site  = trim(strip_tags((string) ($_POST['recaptcha_site_key'] ?? '')));
        $score = (float) ($_POST['recaptcha_min_score'] ?? 0.5);
        if ($score < 0 || $score > 1) {
            admin_flash('err', 'The minimum score must be between 0 and 1. Nothing was saved.');
            admin_redirect('dev.php');
        }

        $ovr['recaptcha_site_key']   = $site;
        $ovr['recaptcha_secret_key'] = $secret('recaptcha_secret_key', $ovr);
        $ovr['recaptcha_min_score']  = $score;

        if (admin_json_write($OVR_PATH, $ovr)) {
            admin_flash('ok', 'reCAPTCHA settings saved.');
        } else {
            admin_flash('err', 'Could not write the settings file. Check folder permissions on admin/data.');
        }
        admin_redirect('dev.php');
    }

    if ($section === 'analytics') {
        $ga4     = trim((string) ($_POST['analytics_ga4_id'] ?? ''));
        $gtm     = trim((string) ($_POST['analytics_gtm_id'] ?? ''));
        $clarity = trim((string) ($_POST['analytics_clarity_id'] ?? ''));
        $gsc     = trim(strip_tags((string) ($_POST['analytics_search_console'] ?? '')));

        foreach (['GA4 measurement ID' => $ga4, 'GTM container ID' => $gtm, 'Clarity ID' => $clarity] as $label => $val) {
            if ($val !== '' && !preg_match('~^[A-Za-z0-9_-]*$~', $val)) {
                admin_flash('err', 'The ' . $label . ' may only contain letters, numbers, hyphens and underscores. Nothing was saved.');
                admin_redirect('dev.php');
            }
        }

        $ovr['analytics_ga4_id']         = $ga4;
        $ovr['analytics_gtm_id']         = $gtm;
        $ovr['analytics_clarity_id']     = $clarity;
        $ovr['analytics_search_console'] = $gsc;

        if (admin_json_write($OVR_PATH, $ovr)) {
            admin_flash('ok', 'Analytics and tag settings saved. They load on the live site only.');
        } else {
            admin_flash('err', 'Could not write the settings file. Check folder permissions on admin/data.');
        }
        admin_redirect('dev.php');
    }

    if ($section === 'scripts') {
        // Stored verbatim ON PURPOSE - this is a deliberate developer capability.
        $ovr['script_head']      = (string) ($_POST['script_head'] ?? '');
        $ovr['script_body_open'] = (string) ($_POST['script_body_open'] ?? '');
        $ovr['script_footer']    = (string) ($_POST['script_footer'] ?? '');

        if (admin_json_write($OVR_PATH, $ovr)) {
            admin_flash('ok', 'Custom scripts saved. They inject on every page (including localhost, so you can test them).');
        } else {
            admin_flash('err', 'Could not write the settings file. Check folder permissions on admin/data.');
        }
        admin_redirect('dev.php');
    }

    admin_flash('err', 'Unknown developer section.');
    admin_redirect('dev.php');
}

/* ------------------------------------------------------------------- view */

$ovr = admin_json_read($OVR_PATH, []);
if (!is_array($ovr)) { $ovr = []; }

/* Map each key to the resolved config constant so $cur() returns the TRUE
   effective value already in force on the site (pgp_setting has baked any
   override into these constants). This is what pre-fills every field, including
   the secrets, so the page shows exactly what is currently connected. */
$CONST = [
    'smtp_host' => 'SMTP_HOST', 'smtp_port' => 'SMTP_PORT', 'smtp_secure' => 'SMTP_SECURE',
    'smtp_user' => 'SMTP_USER', 'smtp_pass' => 'SMTP_PASS',
    'smtp_from_email' => 'SMTP_FROM_EMAIL', 'smtp_from_name' => 'SMTP_FROM_NAME',
    'db_host' => 'DB_HOST', 'db_port' => 'DB_PORT', 'db_name' => 'DB_NAME',
    'db_user' => 'DB_USER', 'db_pass' => 'DB_PASS',
    'recaptcha_site_key' => 'RECAPTCHA_SITE_KEY', 'recaptcha_secret_key' => 'RECAPTCHA_SECRET_KEY',
    'recaptcha_min_score' => 'RECAPTCHA_MIN_SCORE',
];

/** Effective value: override if present, else the live config constant, else default. */
$cur = static function (string $key) use ($ovr, $DEFAULTS, $CONST): string {
    if (array_key_exists($key, $ovr)) { return (string) $ovr[$key]; }
    if (isset($CONST[$key]) && defined($CONST[$key])) { return (string) constant($CONST[$key]); }
    return array_key_exists($key, $DEFAULTS) ? (string) $DEFAULTS[$key] : '';
};

/* ---- Live connection / configuration status (drives the "connected" badges) -- */

$dbConnected = false;
$dbError = '';
try {
    $__pdo = new PDO(
        'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=utf8mb4',
        DB_USER, DB_PASS,
        [PDO::ATTR_TIMEOUT => 3, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $dbConnected = true;
    $__pdo = null;
} catch (Throwable $e) {
    $dbError = $e->getMessage();
}

$smtpReady      = SMTP_HOST !== '' && SMTP_USER !== '' && (string) SMTP_PASS !== '';
$recaptchaReady = RECAPTCHA_SITE_KEY !== '' && RECAPTCHA_SECRET_KEY !== '';
$analyticsOn    = array_values(array_filter([
    'GA4'            => trim($cur('analytics_ga4_id')),
    'GTM'            => trim($cur('analytics_gtm_id')),
    'Clarity'       => trim($cur('analytics_clarity_id')),
    'Search Console' => trim($cur('analytics_search_console')),
], static fn ($v) => $v !== ''));

/** Render a status chip: green (with dot) when active, else a muted/red chip. */
$statusChip = static function (bool $ok, string $okText, string $offText, bool $offIsError = false): string {
    if ($ok) {
        return '<span class="adm-chip chip-green"><span class="adm-dot"></span>' . e($okText) . '</span>';
    }
    return '<span class="adm-chip ' . ($offIsError ? 'chip-red' : 'chip-gray') . '">' . e($offText) . '</span>';
};

/** True when a secret is currently in force (non-empty effective value). */
$secretSet = static function (string $key) use ($cur): bool {
    return trim($cur($key)) !== '';
};

/** Placeholder for a secret input. */
$secretPh = static function (bool $set): string {
    return $set ? 'Saved value in place — edit to change' : 'Not set';
};

/** True when ANY of a section's keys is currently overridden. */
$sectionCustom = static function (string $section) use ($SECTION_KEYS, $ovr): bool {
    foreach ($SECTION_KEYS[$section] as $k) {
        if (array_key_exists($k, $ovr)) { return true; }
    }
    return false;
};

admin_layout_start('Developer', 'developer');
?>

<div class="adm-page-head">
  <div>
    <h1>Developer</h1>
    <p class="adm-page-sub">Sensitive site configuration, pre-filled with what the site is using right now. The badges show what is connected.</p>
  </div>
</div>

<div class="adm-dev-warn" role="alert">
  <strong>These settings change how the live site behaves.</strong>
  They control how email is sent, how the site connects to its database, how
  forms are verified, and what tracking or scripts are injected onto every page.
  A wrong value here can break email delivery, break the database connection, or
  add broken scripts to the whole public site. Changes take effect immediately on
  the live site, so double-check every value before saving.
</div>

<!-- ------------------------------------------------------------ SMTP card -->
<section class="adm-card">
  <div class="adm-card-head">
    <h2>Email (SMTP)</h2>
    <?php echo $statusChip($smtpReady, 'Configured', 'Incomplete'); ?>
    <?php if ($sectionCustom('smtp')): ?><span class="adm-chip chip-gray">custom</span><?php endif; ?>
  </div>
  <p class="adm-help">The outgoing mail server used for every lead notification and form email. Wrong values here silently stop the site from sending mail.</p>
  <form method="post" action="dev.php">
    <?php echo admin_csrf_field(); ?>
    <input type="hidden" name="section" value="smtp">
    <div class="adm-field-row">
      <label class="adm-field">
        <span>SMTP host</span>
        <input type="text" name="smtp_host" value="<?php echo e($cur('smtp_host')); ?>" placeholder="<?php echo e($DEFAULTS['smtp_host']); ?>" spellcheck="false">
      </label>
      <label class="adm-field">
        <span>Port</span>
        <input type="number" name="smtp_port" min="1" max="65535" value="<?php echo e($cur('smtp_port')); ?>" placeholder="<?php echo e((string) $DEFAULTS['smtp_port']); ?>">
      </label>
      <label class="adm-field">
        <span>Security</span>
        <select name="smtp_secure">
          <?php $sec = $cur('smtp_secure'); ?>
          <option value="tls"<?php echo $sec === 'tls' ? ' selected' : ''; ?>>TLS (587)</option>
          <option value="ssl"<?php echo $sec === 'ssl' ? ' selected' : ''; ?>>SSL (465)</option>
        </select>
      </label>
    </div>
    <div class="adm-field-row">
      <label class="adm-field">
        <span>Username</span>
        <input type="text" name="smtp_user" value="<?php echo e($cur('smtp_user')); ?>" placeholder="<?php echo e($DEFAULTS['smtp_user']); ?>" spellcheck="false" autocomplete="off">
      </label>
      <label class="adm-field">
        <span>Password</span>
        <span class="adm-secret-wrap">
          <input type="password" name="smtp_pass" value="<?php echo e($cur('smtp_pass')); ?>" placeholder="<?php echo e($secretPh($secretSet('smtp_pass'))); ?>" autocomplete="new-password" spellcheck="false">
          <button type="button" class="adm-secret-toggle" aria-label="Show or hide password">show</button>
        </span>
      </label>
    </div>
    <div class="adm-field-row">
      <label class="adm-field">
        <span>From email</span>
        <input type="email" name="smtp_from_email" value="<?php echo e($cur('smtp_from_email')); ?>" placeholder="<?php echo e($DEFAULTS['smtp_from_email']); ?>">
      </label>
      <label class="adm-field">
        <span>From name</span>
        <input type="text" name="smtp_from_name" value="<?php echo e($cur('smtp_from_name')); ?>" placeholder="<?php echo e($DEFAULTS['smtp_from_name']); ?>">
      </label>
    </div>
    <div class="adm-field-row">
      <button class="adm-btn adm-btn-primary" type="submit">Save SMTP settings</button>
      <button class="adm-btn adm-btn-light" type="submit" name="reset" value="1" data-confirm="Remove the custom SMTP settings and go back to the config defaults?">Reset section to defaults</button>
    </div>
  </form>
</section>

<!-- -------------------------------------------------------- Database card -->
<section class="adm-card">
  <div class="adm-card-head">
    <h2>Database</h2>
    <?php echo $statusChip($dbConnected, 'Connected', 'Not reachable', true); ?>
    <?php if ($sectionCustom('database')): ?><span class="adm-chip chip-gray">custom</span><?php endif; ?>
  </div>
  <p class="adm-help">The MySQL connection used to store leads. Wrong values here stop the site connecting to its database.</p>
  <form method="post" action="dev.php">
    <?php echo admin_csrf_field(); ?>
    <input type="hidden" name="section" value="database">
    <div class="adm-field-row">
      <label class="adm-field">
        <span>Host</span>
        <input type="text" name="db_host" value="<?php echo e($cur('db_host')); ?>" placeholder="<?php echo e($DEFAULTS['db_host']); ?>" spellcheck="false">
      </label>
      <label class="adm-field">
        <span>Port</span>
        <input type="number" name="db_port" min="1" max="65535" value="<?php echo e($cur('db_port')); ?>" placeholder="<?php echo e((string) $DEFAULTS['db_port']); ?>">
      </label>
    </div>
    <div class="adm-field-row">
      <label class="adm-field">
        <span>Database name</span>
        <input type="text" name="db_name" value="<?php echo e($cur('db_name')); ?>" placeholder="<?php echo e($DEFAULTS['db_name']); ?>" spellcheck="false">
      </label>
      <label class="adm-field">
        <span>User</span>
        <input type="text" name="db_user" value="<?php echo e($cur('db_user')); ?>" placeholder="<?php echo e($DEFAULTS['db_user']); ?>" spellcheck="false" autocomplete="off">
      </label>
    </div>
    <label class="adm-field">
      <span>Password</span>
      <span class="adm-secret-wrap">
        <input type="password" name="db_pass" value="<?php echo e($cur('db_pass')); ?>" placeholder="<?php echo e($secretSet('db_pass') ? $secretPh(true) : 'Empty (XAMPP default)'); ?>" autocomplete="new-password" spellcheck="false">
        <button type="button" class="adm-secret-toggle" aria-label="Show or hide password">show</button>
      </span>
    </label>
    <div class="adm-field-row">
      <button class="adm-btn adm-btn-primary" type="submit">Save database settings</button>
      <button class="adm-btn adm-btn-light" type="submit" name="reset" value="1" data-confirm="Remove the custom database settings and go back to the config defaults?">Reset section to defaults</button>
    </div>
  </form>
</section>

<!-- ------------------------------------------------------- reCAPTCHA card -->
<section class="adm-card">
  <div class="adm-card-head">
    <h2>reCAPTCHA v3</h2>
    <?php echo $statusChip($recaptchaReady, 'Active', 'Keys missing'); ?>
    <?php if ($sectionCustom('recaptcha')): ?><span class="adm-chip chip-gray">custom</span><?php endif; ?>
  </div>
  <p class="adm-help">Protects the public forms from spam. Keys come from <a href="https://www.google.com/recaptcha/admin" target="_blank" rel="noopener">google.com/recaptcha</a>. The site key is public; keep the secret key private.</p>
  <form method="post" action="dev.php">
    <?php echo admin_csrf_field(); ?>
    <input type="hidden" name="section" value="recaptcha">
    <label class="adm-field">
      <span>Site key</span>
      <input type="text" name="recaptcha_site_key" value="<?php echo e($cur('recaptcha_site_key')); ?>" placeholder="6Lf..." spellcheck="false" autocomplete="off">
    </label>
    <div class="adm-field-row">
      <label class="adm-field">
        <span>Secret key</span>
        <span class="adm-secret-wrap">
          <input type="password" name="recaptcha_secret_key" value="<?php echo e($cur('recaptcha_secret_key')); ?>" placeholder="<?php echo e($secretPh($secretSet('recaptcha_secret_key'))); ?>" autocomplete="new-password" spellcheck="false">
          <button type="button" class="adm-secret-toggle" aria-label="Show or hide secret key">show</button>
        </span>
      </label>
      <label class="adm-field">
        <span>Minimum score (0–1)</span>
        <input type="number" name="recaptcha_min_score" step="0.1" min="0" max="1" value="<?php echo e($cur('recaptcha_min_score')); ?>" placeholder="<?php echo e((string) $DEFAULTS['recaptcha_min_score']); ?>">
      </label>
    </div>
    <div class="adm-field-row">
      <button class="adm-btn adm-btn-primary" type="submit">Save reCAPTCHA settings</button>
      <button class="adm-btn adm-btn-light" type="submit" name="reset" value="1" data-confirm="Remove the custom reCAPTCHA settings and go back to the config defaults?">Reset section to defaults</button>
    </div>
  </form>
</section>

<!-- ------------------------------------------------------- Analytics card -->
<section class="adm-card">
  <div class="adm-card-head">
    <h2>Analytics &amp; tags</h2>
    <?php echo $statusChip(count($analyticsOn) > 0, count($analyticsOn) . ' active', 'Off'); ?>
    <?php if ($sectionCustom('analytics')): ?><span class="adm-chip chip-gray">custom</span><?php endif; ?>
  </div>
  <p class="adm-help">Tracking IDs and the Search Console verification token. These load on the <strong>live site only</strong>, never on localhost. Leave a field empty to disable that tag.</p>
  <form method="post" action="dev.php">
    <?php echo admin_csrf_field(); ?>
    <input type="hidden" name="section" value="analytics">
    <div class="adm-field-row">
      <label class="adm-field">
        <span>GA4 measurement ID</span>
        <input type="text" name="analytics_ga4_id" value="<?php echo e($cur('analytics_ga4_id')); ?>" placeholder="G-XXXXXXXXXX" spellcheck="false">
      </label>
      <label class="adm-field">
        <span>GTM container ID</span>
        <input type="text" name="analytics_gtm_id" value="<?php echo e($cur('analytics_gtm_id')); ?>" placeholder="GTM-XXXXXXX (empty = off)" spellcheck="false">
      </label>
    </div>
    <div class="adm-field-row">
      <label class="adm-field">
        <span>Microsoft Clarity ID</span>
        <input type="text" name="analytics_clarity_id" value="<?php echo e($cur('analytics_clarity_id')); ?>" placeholder="abc123 (empty = off)" spellcheck="false">
      </label>
      <label class="adm-field">
        <span>Search Console verification</span>
        <input type="text" name="analytics_search_console" value="<?php echo e($cur('analytics_search_console')); ?>" placeholder="meta content token (empty = off)" spellcheck="false">
      </label>
    </div>
    <div class="adm-field-row">
      <button class="adm-btn adm-btn-primary" type="submit">Save analytics settings</button>
      <button class="adm-btn adm-btn-light" type="submit" name="reset" value="1" data-confirm="Remove the custom analytics settings and go back to the config defaults?">Reset section to defaults</button>
    </div>
  </form>
</section>

<!-- --------------------------------------------------------- Scripts card -->
<section class="adm-card">
  <div class="adm-card-head">
    <h2>Custom scripts</h2>
    <?php if ($sectionCustom('scripts')): ?><span class="adm-chip">custom values</span><?php endif; ?>
  </div>
  <p class="adm-help">Raw HTML/JS injected into every page, <strong>including localhost</strong> so you can test it. Use for verification meta tags, chat widgets, or extra tracking. Stored and output verbatim, so a broken tag here affects every public page. Handle with care.</p>
  <form method="post" action="dev.php">
    <?php echo admin_csrf_field(); ?>
    <input type="hidden" name="section" value="scripts">
    <label class="adm-field">
      <span>Head — injected before <code>&lt;/head&gt;</code></span>
      <div class="adm-code-field">
        <textarea name="script_head" rows="5" spellcheck="false" placeholder="&lt;meta name=&quot;...&quot; content=&quot;...&quot;&gt;"><?php echo e($cur('script_head')); ?></textarea>
      </div>
    </label>
    <label class="adm-field">
      <span>Body open — injected right after <code>&lt;body&gt;</code></span>
      <div class="adm-code-field">
        <textarea name="script_body_open" rows="5" spellcheck="false" placeholder="&lt;!-- e.g. GTM noscript --&gt;"><?php echo e($cur('script_body_open')); ?></textarea>
      </div>
    </label>
    <label class="adm-field">
      <span>Footer — injected before <code>&lt;/body&gt;</code></span>
      <div class="adm-code-field">
        <textarea name="script_footer" rows="5" spellcheck="false" placeholder="&lt;!-- e.g. chat widget --&gt;"><?php echo e($cur('script_footer')); ?></textarea>
      </div>
    </label>
    <div class="adm-field-row">
      <button class="adm-btn adm-btn-primary" type="submit">Save custom scripts</button>
      <button class="adm-btn adm-btn-light" type="submit" name="reset" value="1" data-confirm="Remove all custom injected scripts?">Reset section to defaults</button>
    </div>
  </form>
</section>

<script>
/* Reveal control for masked secret fields: swap password <-> text. */
document.querySelectorAll('.adm-secret-toggle').forEach(function (btn) {
  btn.addEventListener('click', function () {
    var input = btn.parentNode.querySelector('input');
    if (!input) return;
    var show = input.type === 'password';
    input.type = show ? 'text' : 'password';
    btn.textContent = show ? 'hide' : 'show';
  });
});
</script>

<?php admin_layout_end(); ?>

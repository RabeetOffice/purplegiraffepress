<?php
/**
 * Site settings: safe, non-secret site values editable from the admin studio.
 *
 * Saves admin/data/settings-overrides.json, which includes/config.php merges
 * over its hardcoded defaults on every request. Empty strings are honoured on
 * purpose so a field (or a social platform) can be deliberately blanked.
 * Secrets (SMTP, database, reCAPTCHA) are NOT editable here by design.
 */

require_once __DIR__ . '/includes/auth.php';

$user = admin_require_module('settings');

$OVR_PATH = ADMIN_DATA_DIR . '/settings-overrides.json';

$CONTACT_KEYS = ['site_phone', 'site_email', 'site_address', 'site_trading_address', 'site_hours'];

/* Defaults duplicated from includes/config.php so the social form can show the
   raw override-or-default map. */
$SOCIAL_DEFAULTS = [
    'Facebook'  => 'https://www.facebook.com/PurpleGiraffePress',
    'Instagram' => 'https://www.instagram.com/purplegiraffepress',
    'YouTube'   => 'https://www.youtube.com/@PurpleGiraffePress',
    'LinkedIn'  => 'https://www.linkedin.com/company/purple-giraffe-press',
    'X'         => 'https://x.com/purplegiraffep',
    'Pinterest' => 'https://www.pinterest.com/PurpleGiraffePress/',
    'TikTok'    => 'https://www.tiktok.com/@purplegiraffepress',
];

/* ---------------------------------------------------------------- actions */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    admin_verify_csrf();
    $section = (string) ($_POST['section'] ?? '');

    $ovr = admin_json_read($OVR_PATH, []);
    if (!is_array($ovr)) { $ovr = []; }

    if ($section === 'contact') {
        if (!empty($_POST['reset'])) {
            foreach ($CONTACT_KEYS as $k) { unset($ovr[$k]); }
            admin_json_write($OVR_PATH, $ovr);
            admin_flash('ok', 'Contact details are back to the site defaults.');
            admin_redirect('settings.php');
        }
        $vals = [];
        foreach ($CONTACT_KEYS as $k) {
            $vals[$k] = trim(strip_tags((string) ($_POST[$k] ?? '')));
        }
        if ($vals['site_email'] !== '' && !filter_var($vals['site_email'], FILTER_VALIDATE_EMAIL)) {
            admin_flash('err', 'That public email address does not look valid. Nothing was saved.');
            admin_redirect('settings.php');
        }
        foreach ($vals as $k => $v) { $ovr[$k] = $v; } // empty strings kept on purpose
        if (admin_json_write($OVR_PATH, $ovr)) {
            admin_flash('ok', 'Contact details saved. They are live on the site now.');
        } else {
            admin_flash('err', 'Could not write the settings file. Check folder permissions on admin/data.');
        }
        admin_redirect('settings.php');
    }

    if ($section === 'social') {
        if (!empty($_POST['reset'])) {
            unset($ovr['social_links']);
            admin_json_write($OVR_PATH, $ovr);
            admin_flash('ok', 'Social links are back to the site defaults.');
            admin_redirect('settings.php');
        }
        $links = [];
        foreach (array_keys($SOCIAL_DEFAULTS) as $platform) {
            $url = trim((string) ($_POST['social'][$platform] ?? ''));
            if ($url !== '' && strpos($url, 'https://') !== 0) {
                admin_flash('err', $platform . ' needs a full https:// link, or leave it empty to hide that platform. Nothing was saved.');
                admin_redirect('settings.php');
            }
            $links[$platform] = $url; // '' kept: that platform is deliberately hidden
        }
        $ovr['social_links'] = $links;
        if (admin_json_write($OVR_PATH, $ovr)) {
            admin_flash('ok', 'Social links saved. Blank platforms are hidden from the site.');
        } else {
            admin_flash('err', 'Could not write the settings file. Check folder permissions on admin/data.');
        }
        admin_redirect('settings.php');
    }

    if ($section === 'leads') {
        if (!empty($_POST['reset'])) {
            unset($ovr['lead_recipients']);
            admin_json_write($OVR_PATH, $ovr);
            admin_flash('ok', 'Lead recipients are back to the site defaults.');
            admin_redirect('settings.php');
        }
        $lines  = preg_split('~\R~', (string) ($_POST['recipients'] ?? '')) ?: [];
        $emails = [];
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') { continue; }
            if (!filter_var($line, FILTER_VALIDATE_EMAIL)) {
                admin_flash('err', '"' . $line . '" is not a valid email address. Nothing was saved.');
                admin_redirect('settings.php');
            }
            $emails[] = strtolower($line);
        }
        $emails = array_values(array_unique($emails));
        if (count($emails) < 1) {
            admin_flash('err', 'At least one valid email address is needed, or leads would go nowhere.');
            admin_redirect('settings.php');
        }
        $ovr['lead_recipients'] = $emails;
        if (admin_json_write($OVR_PATH, $ovr)) {
            admin_flash('ok', 'Lead recipients saved. New enquiries will go to ' . count($emails) . ' inbox' . (count($emails) === 1 ? '' : 'es') . '.');
        } else {
            admin_flash('err', 'Could not write the settings file. Check folder permissions on admin/data.');
        }
        admin_redirect('settings.php');
    }

    admin_flash('err', 'Unknown settings section.');
    admin_redirect('settings.php');
}

/* ------------------------------------------------------------------- view */

$ovr = admin_json_read($OVR_PATH, []);
if (!is_array($ovr)) { $ovr = []; }

/* Contact + leads show the EFFECTIVE values (config already merged the JSON). */
$contactCurrent = [
    'site_phone'           => SITE_PHONE,
    'site_email'           => SITE_EMAIL,
    'site_address'         => SITE_ADDRESS,
    'site_trading_address' => SITE_TRADING_ADDRESS,
    'site_hours'           => SITE_HOURS,
];
$leadCurrent = (array) ($GLOBALS['LEAD']['recipients'] ?? []);

/* Social shows the raw override-or-default map INCLUDING blanked entries,
   because config drops blanks before rendering and we must still edit them. */
$hasSocialOvr  = isset($ovr['social_links']) && is_array($ovr['social_links']);
$socialCurrent = [];
foreach ($SOCIAL_DEFAULTS as $platform => $def) {
    $socialCurrent[$platform] = $hasSocialOvr ? (string) ($ovr['social_links'][$platform] ?? '') : $def;
}

$contactOverridden = false;
foreach ($CONTACT_KEYS as $k) {
    if (array_key_exists($k, $ovr)) { $contactOverridden = true; break; }
}

admin_layout_start('Site Settings', 'settings');
?>

<div class="adm-page-head">
  <div>
    <h1>Site Settings</h1>
    <p class="adm-page-sub">Safe site-wide values. Saving here updates the live website straight away.</p>
  </div>
</div>

<div class="adm-grid cols-2">

  <!-- ------------------------------------------------------ contact card -->
  <section class="adm-card">
    <h2>Contact details</h2>
    <p class="adm-help">Shown in the footer, on the contact page and inside the site's schema markup. Leave a field empty to hide it on the site.<?php if ($contactOverridden): ?> <span class="adm-chip">custom values</span><?php endif; ?></p>
    <form method="post" action="settings.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="section" value="contact">
      <div class="adm-field-row">
        <label class="adm-field">
          <span>Phone number</span>
          <input type="text" name="site_phone" value="<?php echo e($contactCurrent['site_phone']); ?>" placeholder="+61 7 5690 2990">
        </label>
        <label class="adm-field">
          <span>Public email</span>
          <input type="email" name="site_email" value="<?php echo e($contactCurrent['site_email']); ?>" placeholder="info@purplegiraffepress.com">
        </label>
      </div>
      <label class="adm-field">
        <span>Registered address (Australia)</span>
        <input type="text" name="site_address" value="<?php echo e($contactCurrent['site_address']); ?>">
      </label>
      <label class="adm-field">
        <span>Trading address (United States)</span>
        <input type="text" name="site_trading_address" value="<?php echo e($contactCurrent['site_trading_address']); ?>">
      </label>
      <label class="adm-field">
        <span>Opening hours</span>
        <input type="text" name="site_hours" value="<?php echo e($contactCurrent['site_hours']); ?>" placeholder="Monday to Friday, 9:00 AM to 5:00 PM AEST">
      </label>
      <div class="adm-field-row">
        <button class="adm-btn adm-btn-primary" type="submit">Save contact details</button>
        <button class="adm-btn btn-ghost" type="submit" name="reset" value="1" data-confirm="Throw away the custom contact details and go back to the defaults in config?">Reset to defaults</button>
      </div>
    </form>
  </section>

  <!-- ------------------------------------------------------- social card -->
  <section class="adm-card">
    <h2>Social links</h2>
    <p class="adm-help">Rendered in the site footer and in the organisation schema. Leave a platform empty and it disappears from the site, no code edit needed.</p>
    <form method="post" action="settings.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="section" value="social">
      <?php foreach ($socialCurrent as $platform => $url): ?>
        <label class="adm-field">
          <span><?php echo e($platform); ?><?php if ($url === ''): ?> <span class="adm-chip chip-gray">hidden</span><?php endif; ?></span>
          <input type="url" name="social[<?php echo e($platform); ?>]" value="<?php echo e($url); ?>" placeholder="https://&hellip; (empty = hidden)">
        </label>
      <?php endforeach; ?>
      <div class="adm-field-row">
        <button class="adm-btn adm-btn-primary" type="submit">Save social links</button>
        <button class="adm-btn btn-ghost" type="submit" name="reset" value="1" data-confirm="Throw away the custom social links and go back to the defaults in config?">Reset to defaults</button>
      </div>
    </form>
  </section>

  <!-- -------------------------------------------------------- leads card -->
  <section class="adm-card">
    <h2>Lead notifications</h2>
    <p class="adm-help">Every enquiry, submission and contact form email is delivered to these inboxes (one address per line). At least one is required.</p>
    <form method="post" action="settings.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="section" value="leads">
      <label class="adm-field">
        <span>Recipient inboxes</span>
        <textarea name="recipients" rows="4" spellcheck="false" placeholder="info@purplegiraffepress.com&#10;support@purplegiraffepress.com"><?php echo e(implode("\n", $leadCurrent)); ?></textarea>
      </label>
      <div class="adm-field-row">
        <button class="adm-btn adm-btn-primary" type="submit">Save recipients</button>
        <button class="adm-btn btn-ghost" type="submit" name="reset" value="1" data-confirm="Throw away the custom recipient list and go back to the defaults in config?">Reset to defaults</button>
      </div>
    </form>
  </section>

  <!-- ---------------------------------------------------- read-only card -->
  <section class="adm-card">
    <h2>Everything else</h2>
    <p class="adm-help">Some settings stay out of the browser on purpose.</p>
    <p>SMTP credentials, the database login and the reCAPTCHA keys live in <code>includes/config.php</code> on the server and are deliberately not editable from this panel. If any of those could be changed from a web page, anyone who ever got into an admin session could quietly redirect the site's email or capture form traffic.</p>
    <p>To change them, edit <code>includes/config.php</code> over SFTP or ask the developer. Everything on this page, by contrast, is safe to change as often as needed.</p>
  </section>

</div>

<?php admin_layout_end(); ?>

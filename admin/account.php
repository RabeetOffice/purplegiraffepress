<?php
/**
 * My Account (any logged-in user): change own password, and manage own
 * two-factor authentication (TOTP enrolment with QR + manual key, one-time
 * backup codes, regenerate codes, turn off).
 *
 * Backup codes are shown in PLAIN exactly once (carried across the PRG
 * redirect in a one-shot session key); only bcrypt hashes are stored.
 */

require_once __DIR__ . '/includes/auth.php';

$user = admin_require_login();

/* ---------------------------------------------------------------- helpers */

/** Apply $fn to my own users.json row and save. */
function pgpa_update_me(string $username, callable $fn): bool {
    $users = admin_users();
    foreach ($users as $i => $u) {
        if (($u['username'] ?? '') === $username) {
            $users[$i] = $fn($u);
            return admin_save_users($users);
        }
    }
    return false;
}

/**
 * 8 fresh backup codes. Plain form XXXX-XXXX for the user; bcrypt hashes of
 * the dash-less form for storage (the login flow strips non-alphanumerics
 * before password_verify, so codes work typed with or without the dash).
 */
function pgpa_new_backup_codes(): array {
    $plain  = [];
    $hashes = [];
    for ($i = 0; $i < 8; $i++) {
        $raw      = strtoupper(bin2hex(random_bytes(4)));            // 8 hex chars
        $plain[]  = substr($raw, 0, 4) . '-' . substr($raw, 4, 4);   // XXXX-XXXX
        $hashes[] = password_hash($raw, PASSWORD_BCRYPT);
    }
    return [$plain, $hashes];
}

function pgpa_me_fail(string $msg): void {
    admin_flash('err', $msg);
    admin_redirect('account.php');
}

function pgpa_me_done(string $msg): void {
    admin_flash('ok', $msg);
    admin_redirect('account.php');
}

/* ---------------------------------------------------------------- actions */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    admin_verify_csrf();
    $action   = (string) ($_POST['action'] ?? '');
    $username = (string) ($user['username'] ?? '');
    $me       = admin_get_user($username);
    if ($me === null) { pgpa_me_fail('Your account could not be loaded. Log in again.'); }

    /* -------------------------------------------------- change password */
    if ($action === 'password') {
        $current = (string) ($_POST['current'] ?? '');
        $new1    = (string) ($_POST['new1'] ?? '');
        $new2    = (string) ($_POST['new2'] ?? '');
        if (!password_verify($current, (string) ($me['password'] ?? ''))) {
            pgpa_me_fail('Your current password is not right. Nothing was changed.');
        }
        if (strlen($new1) < 10) {
            pgpa_me_fail('The new password needs at least 10 characters.');
        }
        if (!hash_equals($new1, $new2)) {
            pgpa_me_fail('The two new passwords do not match.');
        }
        $ok = pgpa_update_me($username, static function (array $u) use ($new1) {
            $u['password'] = password_hash($new1, PASSWORD_BCRYPT);
            return $u;
        });
        if (!$ok) { pgpa_me_fail('Could not write users.json. Check folder permissions.'); }
        pgpa_me_done('Password changed. Use the new one next time you log in.');
    }

    /* -------------------------------------------------- 2FA: enrolment */
    if ($action === 'totp_start') {
        if (!empty($me['totp_secret'])) {
            pgpa_me_fail('Two-factor authentication is already on for this account.');
        }
        $_SESSION['adm_totp_pending'] = totp_new_secret();
        admin_redirect('account.php');
    }

    if ($action === 'totp_cancel') {
        unset($_SESSION['adm_totp_pending']);
        pgpa_me_done('Two-factor setup cancelled. Nothing was changed.');
    }

    if ($action === 'totp_confirm') {
        if (!empty($me['totp_secret'])) {
            pgpa_me_fail('Two-factor authentication is already on for this account.');
        }
        $secret = (string) ($_SESSION['adm_totp_pending'] ?? '');
        if ($secret === '') {
            pgpa_me_fail('The setup session expired. Start again with "Turn on 2FA".');
        }
        if (!totp_verify($secret, (string) ($_POST['code'] ?? ''))) {
            pgpa_me_fail('That code is not right. Wait for the next code in your app and try again.');
        }
        list($plain, $hashes) = pgpa_new_backup_codes();
        $ok = pgpa_update_me($username, static function (array $u) use ($secret, $hashes) {
            $u['totp_secret'] = $secret;
            $u['totp_backup'] = $hashes;
            return $u;
        });
        if (!$ok) { pgpa_me_fail('Could not write users.json. Check folder permissions.'); }
        unset($_SESSION['adm_totp_pending']);
        $_SESSION['adm_backup_once'] = $plain;   // one-shot: shown once, then gone
        pgpa_me_done('Two-factor authentication is on. Save your backup codes below right now.');
    }

    /* ----------------------------------------- 2FA: regenerate backups */
    if ($action === 'totp_regen') {
        if (empty($me['totp_secret'])) {
            pgpa_me_fail('Two-factor authentication is not on for this account.');
        }
        if (!totp_verify((string) $me['totp_secret'], (string) ($_POST['code'] ?? ''))) {
            pgpa_me_fail('That code is not right. Backup codes were not changed.');
        }
        list($plain, $hashes) = pgpa_new_backup_codes();
        $ok = pgpa_update_me($username, static function (array $u) use ($hashes) {
            $u['totp_backup'] = $hashes;
            return $u;
        });
        if (!$ok) { pgpa_me_fail('Could not write users.json. Check folder permissions.'); }
        $_SESSION['adm_backup_once'] = $plain;
        pgpa_me_done('New backup codes generated. The old ones no longer work. Save the new set below.');
    }

    /* ------------------------------------------------- 2FA: turn off */
    if ($action === 'totp_off') {
        if (empty($me['totp_secret'])) {
            pgpa_me_fail('Two-factor authentication is not on for this account.');
        }
        if (!password_verify((string) ($_POST['current'] ?? ''), (string) ($me['password'] ?? ''))) {
            pgpa_me_fail('Your current password is not right. Two-factor stays on.');
        }
        if (!totp_verify((string) $me['totp_secret'], (string) ($_POST['code'] ?? ''))) {
            pgpa_me_fail('That code is not right. Two-factor stays on.');
        }
        $ok = pgpa_update_me($username, static function (array $u) {
            unset($u['totp_secret'], $u['totp_backup']);
            return $u;
        });
        if (!$ok) { pgpa_me_fail('Could not write users.json. Check folder permissions.'); }
        unset($_SESSION['adm_totp_pending']);
        pgpa_me_done('Two-factor authentication is off. Your account now relies on the password alone.');
    }

    pgpa_me_fail('Unknown action.');
}

/* ------------------------------------------------------------------- view */

$me       = admin_get_user((string) ($user['username'] ?? '')) ?? $user;
$enrolled = !empty($me['totp_secret']);
$pending  = $enrolled ? '' : (string) ($_SESSION['adm_totp_pending'] ?? '');

/* One-shot plain backup codes surviving the PRG redirect; shown once. */
$onceCodes = $_SESSION['adm_backup_once'] ?? null;
unset($_SESSION['adm_backup_once']);
if (!is_array($onceCodes)) { $onceCodes = null; }

$roleLabel = (string) (admin_get_role((string) ($me['role'] ?? ''))['label'] ?? $me['role'] ?? '');

admin_layout_start('My Account', 'account');
?>

<div class="adm-page-head">
  <div>
    <h1>My Account</h1>
    <p class="adm-page-sub">Signed in as <strong><?php echo e((string) ($me['username'] ?? '')); ?></strong> (<?php echo e($roleLabel); ?>). Your password and two-factor settings live here.</p>
  </div>
</div>

<?php if ($onceCodes !== null): ?>
<section class="adm-card">
  <h2>Your backup codes</h2>
  <p class="adm-help"><strong>Save these somewhere safe right now.</strong> Each code logs you in once if you ever lose your phone. They are shown this one time only and can never be displayed again.</p>
  <div class="adm-backup-codes">
    <?php foreach ($onceCodes as $code): ?>
      <code><?php echo e((string) $code); ?></code>
    <?php endforeach; ?>
  </div>
  <p class="adm-help">Print them or put them in a password manager. When one is used it stops working.</p>
</section>
<?php endif; ?>

<div class="adm-grid cols-2">

  <!-- ---------------------------------------------------- password card -->
  <section class="adm-card">
    <h2>Change my password</h2>
    <p class="adm-help">At least 10 characters. A short sentence you can remember beats a jumble you have to write down.</p>
    <form method="post" action="account.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="password">
      <label class="adm-field">
        <span>Current password</span>
        <input type="password" name="current" autocomplete="current-password" required>
      </label>
      <div class="adm-field-row">
        <label class="adm-field">
          <span>New password</span>
          <input type="password" name="new1" minlength="10" autocomplete="new-password" required>
        </label>
        <label class="adm-field">
          <span>New password again</span>
          <input type="password" name="new2" minlength="10" autocomplete="new-password" required>
        </label>
      </div>
      <button class="adm-btn adm-btn-primary" type="submit">Change password</button>
    </form>
  </section>

  <!-- --------------------------------------------------------- 2FA card -->
  <section class="adm-card">
    <h2>Two-factor authentication</h2>

    <?php if ($enrolled): ?>
      <p class="adm-help"><span class="adm-chip chip-green">2FA is on</span> Logging in asks for a 6-digit code from your authenticator app after the password.</p>

      <h3>Regenerate backup codes</h3>
      <p class="adm-help">Makes 8 fresh codes and kills every old one. Enter a current code from your app to prove it is you.</p>
      <form method="post" action="account.php">
        <?php echo admin_csrf_field(); ?>
        <input type="hidden" name="action" value="totp_regen">
        <label class="adm-field">
          <span>Code from your app</span>
          <input type="text" name="code" inputmode="numeric" pattern="[0-9]{6}" maxlength="6" placeholder="123456" autocomplete="one-time-code" required>
        </label>
        <button class="adm-btn btn-ghost" type="submit">Regenerate backup codes</button>
      </form>

      <h3>Turn off 2FA</h3>
      <p class="adm-help">Needs your password and a current code. Your account is much easier to steal without it.</p>
      <form method="post" action="account.php">
        <?php echo admin_csrf_field(); ?>
        <input type="hidden" name="action" value="totp_off">
        <div class="adm-field-row">
          <label class="adm-field">
            <span>Current password</span>
            <input type="password" name="current" autocomplete="current-password" required>
          </label>
          <label class="adm-field">
            <span>Code from your app</span>
            <input type="text" name="code" inputmode="numeric" pattern="[0-9]{6}" maxlength="6" placeholder="123456" autocomplete="one-time-code" required>
          </label>
        </div>
        <button class="adm-btn btn-danger" type="submit" data-confirm="Turn off two-factor authentication? Your account will rely on the password alone.">Turn off 2FA</button>
      </form>

    <?php elseif ($pending !== ''): ?>
      <p class="adm-help"><strong>Step 1.</strong> Scan this QR code with Google Authenticator, 1Password, Authy or any TOTP app. No camera handy? Type the manual key instead.</p>

      <div class="adm-qr">
        <div id="totpQr" aria-label="Two-factor enrolment QR code"></div>
        <p class="adm-help">Manual key:<br><code><?php echo e(trim(chunk_split($pending, 4, ' '))); ?></code></p>
      </div>

      <p class="adm-help"><strong>Step 2.</strong> Enter the 6-digit code the app shows to prove the pairing worked.</p>
      <form method="post" action="account.php">
        <?php echo admin_csrf_field(); ?>
        <input type="hidden" name="action" value="totp_confirm">
        <label class="adm-field">
          <span>Code from your app</span>
          <input type="text" name="code" inputmode="numeric" pattern="[0-9]{6}" maxlength="6" placeholder="123456" autocomplete="one-time-code" required autofocus>
        </label>
        <div class="adm-field-row">
          <button class="adm-btn adm-btn-primary" type="submit">Verify and turn on 2FA</button>
        </div>
      </form>
      <form method="post" action="account.php">
        <?php echo admin_csrf_field(); ?>
        <input type="hidden" name="action" value="totp_cancel">
        <button class="adm-btn btn-ghost" type="submit">Cancel setup</button>
      </form>

      <script src="assets/vendor/qrcode.min.js?v=<?php echo is_file(__DIR__ . '/assets/vendor/qrcode.min.js') ? filemtime(__DIR__ . '/assets/vendor/qrcode.min.js') : '1'; ?>"></script>
      <script>
        new QRCode(document.getElementById('totpQr'), {
          text: <?php echo json_encode(totp_uri($pending, (string) ($me['username'] ?? ''), SITE_NAME)); ?>,
          width: 180,
          height: 180
        });
      </script>

    <?php else: ?>
      <p class="adm-help"><span class="adm-chip chip-gray">off</span> Right now a password alone opens this account. Two-factor adds a 6-digit code from your phone, so a leaked password on its own gets an attacker nowhere.</p>
      <form method="post" action="account.php">
        <?php echo admin_csrf_field(); ?>
        <input type="hidden" name="action" value="totp_start">
        <button class="adm-btn adm-btn-primary" type="submit">Turn on 2FA</button>
      </form>
    <?php endif; ?>
  </section>

</div>

<?php admin_layout_end(); ?>

<?php
require_once __DIR__ . '/includes/auth.php';
require_once dirname(__DIR__) . '/includes/recaptcha.php';

/* Already in? Straight to the user's first accessible page. */
if (!empty($_SESSION['adm_auth_ok']) && admin_current_user()) {
    admin_redirect(admin_home_url());
}

$need2fa = !empty($_SESSION['adm_need_2fa']) && !empty($_SESSION['adm_user']);
$error   = null;
$useCaptcha = !admin_is_loopback() && defined('RECAPTCHA_SITE_KEY') && RECAPTCHA_SITE_KEY !== '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    admin_verify_csrf();

    if (($_POST['step'] ?? '') === 'totp') {
        $error = admin_login_totp((string) ($_POST['code'] ?? ''));
        if ($error === null) admin_redirect(admin_home_url());
        $need2fa = !empty($_SESSION['adm_need_2fa']);
    } else {
        /* reCAPTCHA v3 gate - skipped only for true loopback peers. */
        if ($useCaptcha) {
            $rc = recaptcha_verify((string) ($_POST['recaptcha_token'] ?? ''), admin_client_ip(), (float) RECAPTCHA_MIN_SCORE);
            if (!$rc['ok'] && in_array($rc['reason'], ['low-score', 'not-success'], true)) {
                $error = 'Verification failed. Please try again.';
            }
        }
        if ($error === null) {
            $error = admin_login_password((string) ($_POST['username'] ?? ''), (string) ($_POST['password'] ?? ''));
            if ($error === null) {
                if (!empty($_SESSION['adm_need_2fa'])) {
                    admin_redirect('login.php');
                }
                admin_redirect(admin_home_url());
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title>Log in · <?php echo e(SITE_NAME); ?> Admin</title>
  <link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500;600;700&family=Fraunces:opsz,wght,SOFT,WONK@9..144,400..900,40..100,0..1&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/admin.css?v=<?php echo is_file(__DIR__ . '/assets/admin.css') ? filemtime(__DIR__ . '/assets/admin.css') : 1; ?>">
  <?php if ($useCaptcha): ?>
  <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(RECAPTCHA_SITE_KEY); ?>" async defer></script>
  <?php endif; ?>
</head>
<body class="adm adm-login-page">
  <main class="adm-login-wrap">
    <form class="adm-login-card" method="post" action="login.php" id="admLoginForm">
      <?php echo admin_csrf_field(); ?>
      <div class="adm-login-brand">
        <img src="../assets/images/logo.webp" alt="<?php echo e(SITE_NAME); ?> logo">
      </div>
      <p class="adm-login-script">Welcome back to the studio</p>

      <?php if ($need2fa): ?>
        <h1>Two-step check</h1>
        <p class="adm-login-sub">Enter the 6-digit code from your authenticator app, or one of your backup codes.</p>
        <?php if ($error): ?><div class="adm-flash adm-flash-err" role="alert"><?php echo e($error); ?></div><?php endif; ?>
        <input type="hidden" name="step" value="totp">
        <label class="adm-field">
          <span>Authentication code</span>
          <input type="text" name="code" inputmode="numeric" autocomplete="one-time-code" maxlength="14" autofocus required>
        </label>
        <button class="adm-btn adm-btn-primary adm-btn-block" type="submit">Verify &amp; continue</button>
        <p class="adm-login-alt"><a href="logout.php">Start over</a></p>
      <?php else: ?>
        <h1>Log in</h1>
        <p class="adm-login-sub">The private studio for <?php echo e(SITE_NAME); ?>.</p>
        <?php if ($error): ?><div class="adm-flash adm-flash-err" role="alert"><?php echo e($error); ?></div><?php endif; ?>
        <label class="adm-field">
          <span>Username</span>
          <input type="text" name="username" autocomplete="username" autofocus required>
        </label>
        <label class="adm-field">
          <span>Password</span>
          <input type="password" name="password" autocomplete="current-password" required>
        </label>
        <button class="adm-btn adm-btn-primary adm-btn-block" type="submit" id="admLoginBtn">Log in</button>
      <?php endif; ?>
    </form>
  </main>
  <?php if ($useCaptcha && !$need2fa): ?>
  <script>
  (function () {
    var form = document.getElementById('admLoginForm');
    var done = false;
    form.addEventListener('submit', function (ev) {
      if (done || !window.grecaptcha) return;
      ev.preventDefault();
      grecaptcha.ready(function () {
        grecaptcha.execute('<?php echo e(RECAPTCHA_SITE_KEY); ?>', { action: 'admin_login' }).then(function (token) {
          var input = document.createElement('input');
          input.type = 'hidden';
          input.name = 'recaptcha_token';
          input.value = token;
          form.appendChild(input);
          done = true;
          form.submit();
        }).catch(function () { done = true; form.submit(); });
      });
    });
  })();
  </script>
  <?php endif; ?>
</body>
</html>

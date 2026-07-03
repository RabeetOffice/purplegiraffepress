<?php
/**
 * Admin shell: sidebar built from the current user's accessible modules,
 * top bar for mobile, flash messages. Wrap pages with:
 *   admin_layout_start('Page title', 'moduleKey');  ...  admin_layout_end();
 */

if (!defined('PGP_ADMIN')) { http_response_code(404); exit; }

function admin_asset_v(string $rel): string {
    $abs = ADMIN_DIR . '/' . $rel;
    return $rel . '?v=' . (is_file($abs) ? filemtime($abs) : '1');
}

function admin_layout_start(string $title, string $active = ''): void {
    $user = admin_current_user();
    $mods = admin_user_modules($user);
    $all  = admin_modules();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <title><?php echo e($title); ?> · <?php echo e(SITE_NAME); ?> Admin</title>
  <link rel="icon" href="../assets/images/favicon-32x32.png" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500;600;700&family=Fraunces:opsz,wght,SOFT,WONK@9..144,400..900,40..100,0..1&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(admin_asset_v('assets/admin.css')); ?>">
  <script>window.ADM_CSRF = <?php echo json_encode(admin_csrf_token()); ?>;</script>
</head>
<body class="adm">
  <a class="adm-skip" href="#adm-main">Skip to content</a>

  <header class="adm-topbar">
    <button class="adm-burger" id="admBurger" type="button" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <span class="adm-topbar-title"><?php echo e($title); ?></span>
    <a class="adm-topbar-site" href="../" target="_blank" rel="noopener">View site ↗</a>
  </header>

  <div class="adm-shell">
    <aside class="adm-sidebar" id="admSidebar">
      <div class="adm-brand">
        <img src="../assets/images/logo.webp" alt="<?php echo e(SITE_NAME); ?> logo">
        <span class="adm-brand-script">Admin Studio</span>
      </div>

      <nav class="adm-nav" aria-label="Admin navigation">
        <?php foreach ($all as $key => $mod): ?>
          <?php if (!in_array($key, $mods, true)) continue; ?>
          <a href="<?php echo e($mod['page']); ?>" class="adm-nav-link<?php echo $active === $key ? ' is-active' : ''; ?>">
            <?php echo admin_nav_icon($mod['icon']); ?>
            <span><?php echo e($mod['label']); ?></span>
          </a>
        <?php endforeach; ?>

        <?php if (admin_is_super($user)): ?>
          <div class="adm-nav-rule" aria-hidden="true"></div>
          <a href="users.php" class="adm-nav-link<?php echo $active === 'users' ? ' is-active' : ''; ?>">
            <?php echo admin_nav_icon('users'); ?>
            <span>Roles &amp; Users</span>
          </a>
        <?php endif; ?>
        <a href="account.php" class="adm-nav-link<?php echo $active === 'account' ? ' is-active' : ''; ?>">
          <?php echo admin_nav_icon('user'); ?>
          <span>My Account</span>
        </a>
      </nav>

      <div class="adm-side-foot">
        <a class="adm-view-site" href="../" target="_blank" rel="noopener">View website ↗</a>
        <div class="adm-user-chip">
          <span class="adm-user-avatar" aria-hidden="true"><?php echo e(mb_strtoupper(mb_substr((string) ($user['username'] ?? '?'), 0, 1))); ?></span>
          <span class="adm-user-meta">
            <strong><?php echo e($user['username'] ?? ''); ?></strong>
            <small><?php echo e(admin_get_role((string) ($user['role'] ?? ''))['label'] ?? $user['role'] ?? ''); ?></small>
          </span>
          <a class="adm-logout" href="logout.php" title="Log out" aria-label="Log out">⎋</a>
        </div>
      </div>
    </aside>
    <div class="adm-scrim" id="admScrim" hidden></div>

    <main class="adm-main" id="adm-main">
<?php
    foreach (['ok' => 'adm-flash-ok', 'err' => 'adm-flash-err'] as $key => $cls) {
        $msg = admin_flash($key);
        if ($msg !== null) {
            echo '<div class="adm-flash ' . $cls . '" role="status">' . e($msg) . '</div>';
        }
    }
}

function admin_layout_end(): void {
?>
    </main>
  </div>
  <script src="<?php echo e(admin_asset_v('assets/admin.js')); ?>"></script>
</body>
</html>
<?php
}

/** Small inline SVG icon set (stroke inherits currentColor). */
function admin_nav_icon(string $key): string {
    $paths = [
        'dash'  => '<rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/>',
        'posts' => '<path d="M4 4h13a3 3 0 0 1 3 3v13H7a3 3 0 0 1-3-3V4z"/><path d="M8 9h8M8 13h8M8 17h5"/>',
        'inbox' => '<path d="M3 13l3-8h12l3 8v6H3v-6z"/><path d="M3 13h5l2 3h4l2-3h5"/>',
        'book'  => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V3H6.5A2.5 2.5 0 0 0 4 5.5v14z"/><path d="M4 19.5A2.5 2.5 0 0 0 6.5 22H20v-5"/>',
        'quote' => '<path d="M7 7h4v4a4 4 0 0 1-4 4V7zM15 7h4v4a4 4 0 0 1-4 4V7z"/>',
        'pen'   => '<path d="M12 20h9"/><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"/>',
        'cog'   => '<circle cx="12" cy="12" r="3"/><path d="M19 12a7 7 0 0 0-.1-1.2l2-1.6-2-3.4-2.4 1a7 7 0 0 0-2-1.2L14 3h-4l-.5 2.6a7 7 0 0 0-2 1.2l-2.4-1-2 3.4 2 1.6A7 7 0 0 0 5 12c0 .4 0 .8.1 1.2l-2 1.6 2 3.4 2.4-1a7 7 0 0 0 2 1.2L10 21h4l.5-2.6a7 7 0 0 0 2-1.2l2.4 1 2-3.4-2-1.6c.1-.4.1-.8.1-1.2z"/>',
        'users' => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0"/><circle cx="17.5" cy="9.5" r="2.5"/><path d="M15.5 14.5a5 5 0 0 1 6 4.9"/>',
        'user'  => '<circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/>',
        'code'  => '<path d="M8 6l-5 6 5 6M16 6l5 6-5 6M13.5 4l-3 16"/>',
    ];
    $d = $paths[$key] ?? $paths['dash'];
    return '<svg class="adm-ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $d . '</svg>';
}

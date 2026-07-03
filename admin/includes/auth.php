<?php
/**
 * Admin auth: hardened session, users + roles (RBAC), CSRF, login throttle
 * and the two-step TOTP login flow. Every admin page starts by requiring
 * this file and calling one of the admin_require_*() guards.
 */

define('PGP_ADMIN', 1);

require_once dirname(__DIR__, 2) . '/includes/config.php';
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/totp.php';
require_once __DIR__ . '/layout.php';

/* ------------------------------------------------------------- session */

if (session_status() !== PHP_SESSION_ACTIVE) {
    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
        || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
    session_name('pgp_admin');
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => $https,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

/* Admin pages must never be indexed, framed or sniffed. */
header('X-Robots-Tag: noindex, nofollow');
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: same-origin');
header('Cache-Control: no-store');

/* ------------------------------------------------------------- modules */

/**
 * Module registry - ONLY features this brand's site actually has.
 * Key => [label, nav icon key, page]. users.php is super-admin only and
 * account.php is any-login; neither is a grantable module.
 */
function admin_modules(): array {
    return [
        'dashboard'    => ['label' => 'Dashboard',    'page' => 'dashboard.php',    'icon' => 'dash'],
        'posts'        => ['label' => 'Blog Posts',   'page' => 'posts.php',        'icon' => 'posts'],
        'submissions'  => ['label' => 'Submissions',  'page' => 'submissions.php',  'icon' => 'inbox'],
        'portfolio'    => ['label' => 'Portfolio',    'page' => 'portfolio.php',    'icon' => 'book'],
        'testimonials' => ['label' => 'Testimonials', 'page' => 'testimonials.php', 'icon' => 'quote'],
        'authors'      => ['label' => 'Authors',      'page' => 'authors.php',      'icon' => 'pen'],
        'settings'     => ['label' => 'Settings',     'page' => 'settings.php',     'icon' => 'cog'],
        'developer'    => ['label' => 'Developer',    'page' => 'dev.php',          'icon' => 'code'],
    ];
}

function admin_module_keys(): array {
    return array_keys(admin_modules());
}

/* --------------------------------------------------------------- roles */

function admin_roles_path(): string { return ADMIN_DATA_DIR . '/roles.json'; }
function admin_users_path(): string { return ADMIN_DATA_DIR . '/users.json'; }

function admin_roles(): array {
    $roles = admin_json_read(admin_roles_path(), []);
    // The locked super-admin role always exists, even if the file is damaged.
    $hasSuper = false;
    foreach ($roles as $r) {
        if (($r['name'] ?? '') === 'admin') { $hasSuper = true; break; }
    }
    if (!$hasSuper) {
        array_unshift($roles, ['name' => 'admin', 'label' => 'Super Admin', 'modules' => ['*'], 'locked' => true]);
    }
    return $roles;
}

function admin_get_role(string $name): ?array {
    foreach (admin_roles() as $r) {
        if (($r['name'] ?? '') === $name) return $r;
    }
    return null;
}

function admin_users(): array {
    return admin_json_read(admin_users_path(), []);
}

function admin_get_user(string $username): ?array {
    foreach (admin_users() as $u) {
        if (($u['username'] ?? '') === $username) return $u;
    }
    return null;
}

function admin_save_users(array $users): bool {
    return admin_json_write(admin_users_path(), array_values($users));
}

function admin_save_roles(array $roles): bool {
    return admin_json_write(admin_roles_path(), array_values($roles));
}

/* ------------------------------------------------------------ RBAC gate */

function admin_current_user(): ?array {
    if (empty($_SESSION['adm_user'])) return null;
    return admin_get_user((string) $_SESSION['adm_user']);
}

function admin_is_super(?array $user = null): bool {
    $user = $user ?? admin_current_user();
    if (!$user) return false;
    $role = admin_get_role((string) ($user['role'] ?? ''));
    return $role && in_array('*', (array) ($role['modules'] ?? []), true);
}

/** Modules this user can access. Unknown role => zero modules (fail closed). */
function admin_user_modules(?array $user = null): array {
    $user = $user ?? admin_current_user();
    if (!$user) return [];
    $role = admin_get_role((string) ($user['role'] ?? ''));
    if (!$role) return [];
    $mods = (array) ($role['modules'] ?? []);
    if (in_array('*', $mods, true)) return admin_module_keys();
    return array_values(array_intersect($mods, admin_module_keys()));
}

function admin_can(string $module, ?array $user = null): bool {
    return in_array($module, admin_user_modules($user), true);
}

/** First page this user may open after login (never a 403). */
function admin_home_url(?array $user = null): string {
    $mods = admin_user_modules($user);
    $all  = admin_modules();
    foreach ($mods as $key) {
        if (isset($all[$key])) return $all[$key]['page'];
    }
    return 'account.php';
}

function admin_require_login(): array {
    $user = admin_current_user();
    if (!$user || empty($_SESSION['adm_auth_ok'])) {
        admin_redirect('login.php');
    }
    return $user;
}

function admin_require_module(string $module): array {
    $user = admin_require_login();
    if (!admin_can($module, $user)) {
        http_response_code(403);
        require __DIR__ . '/forbidden.php';
        exit;
    }
    return $user;
}

function admin_require_admin(): array {
    $user = admin_require_login();
    if (!admin_is_super($user)) {
        http_response_code(403);
        require __DIR__ . '/forbidden.php';
        exit;
    }
    return $user;
}

/* ----------------------------------------------------------------- CSRF */

function admin_csrf_token(): string {
    if (empty($_SESSION['adm_csrf'])) {
        $_SESSION['adm_csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['adm_csrf'];
}

function admin_csrf_field(): string {
    return '<input type="hidden" name="csrf" value="' . e(admin_csrf_token()) . '">';
}

function admin_verify_csrf(): void {
    $sent = $_POST['csrf'] ?? ($_SERVER['HTTP_X_CSRF_TOKEN'] ?? '');
    if (empty($_SESSION['adm_csrf']) || !is_string($sent) || !hash_equals($_SESSION['adm_csrf'], $sent)) {
        /* 403 (not the Laravel-ism 419) so Apache/XAMPP never remaps an unknown
           status to a 500. Clients key off the JSON body, not the code. */
        http_response_code(403);
        header('Content-Type: application/json');
        echo json_encode(['ok' => false, 'error' => 'Your session expired. Reload the page and try again.']);
        exit;
    }
}

/* -------------------------------------------------------------- throttle */

function admin_throttle_path(): string { return ADMIN_DATA_DIR . '/login-attempts.json'; }

function admin_client_ip(): string {
    return (string) ($_SERVER['REMOTE_ADDR'] ?? '');
}

/** True when the actual TCP peer is loopback - NOT the spoofable Host header. */
function admin_is_loopback(): bool {
    return in_array(admin_client_ip(), ['127.0.0.1', '::1', '::ffff:127.0.0.1'], true);
}

function admin_throttle_key(string $username, string $stage = 'pw'): string {
    return $stage . '|' . admin_client_ip() . '|' . strtolower($username);
}

function admin_throttle_blocked(string $key): int {
    $data = admin_json_read(admin_throttle_path(), []);
    $row  = $data[$key] ?? null;
    if (!$row) return 0;
    if (($row['fails'] ?? 0) >= 5 && time() - ($row['last'] ?? 0) < 900) {
        return 900 - (time() - $row['last']);
    }
    return 0;
}

function admin_throttle_hit(string $key, bool $success): void {
    $data = admin_json_read(admin_throttle_path(), []);
    if ($success) {
        unset($data[$key]);
    } else {
        $row = $data[$key] ?? ['fails' => 0, 'last' => 0];
        if (time() - ($row['last'] ?? 0) > 900) $row['fails'] = 0;
        $row['fails']++;
        $row['last'] = time();
        $data[$key] = $row;
    }
    // Prune stale entries so the file never grows unbounded.
    foreach ($data as $k => $row) {
        if (time() - ($row['last'] ?? 0) > 3600) unset($data[$k]);
    }
    admin_json_write(admin_throttle_path(), $data);
}

/* ------------------------------------------------------------ login flow */

/** Step 1: password (+ reCAPTCHA on non-loopback). Returns error or null. */
function admin_login_password(string $username, string $password): ?string {
    $key = admin_throttle_key($username, 'pw');
    if (($wait = admin_throttle_blocked($key)) > 0) {
        return 'Too many attempts. Try again in ' . ceil($wait / 60) . ' minutes.';
    }
    $user = admin_get_user($username);
    $hash = $user['password'] ?? '$2y$10$invalidinvalidinvalidinvalidinvalidinvalid';
    $ok   = password_verify($password, $hash) && $user !== null && !empty($user['active'] ?? true);
    admin_throttle_hit($key, $ok);
    if (!$ok) return 'Wrong username or password.';

    session_regenerate_id(true);
    if (!empty($user['totp_secret'])) {
        // Password accepted - park the login until the TOTP step passes.
        $_SESSION['adm_user']    = $user['username'];
        $_SESSION['adm_auth_ok'] = false;
        $_SESSION['adm_need_2fa'] = true;
        return null;
    }
    $_SESSION['adm_user']    = $user['username'];
    $_SESSION['adm_auth_ok'] = true;
    unset($_SESSION['adm_need_2fa']);
    return null;
}

/** Step 2: TOTP code or a single-use backup code. Returns error or null. */
function admin_login_totp(string $code): ?string {
    $username = (string) ($_SESSION['adm_user'] ?? '');
    if ($username === '' || empty($_SESSION['adm_need_2fa'])) {
        return 'Start again from the login page.';
    }
    $key = admin_throttle_key($username, '2fa');
    if (($wait = admin_throttle_blocked($key)) > 0) {
        return 'Too many attempts. Try again in ' . ceil($wait / 60) . ' minutes.';
    }
    $user = admin_get_user($username);
    if (!$user || empty($user['totp_secret'])) return 'Start again from the login page.';

    $ok = totp_verify((string) $user['totp_secret'], $code);

    // Backup code path: 8+ char codes, bcrypt-hashed, single use.
    if (!$ok && strlen(preg_replace('~\s~', '', $code)) >= 8) {
        $clean = strtoupper(preg_replace('~[^A-Za-z0-9]~', '', $code));
        $codes = (array) ($user['totp_backup'] ?? []);
        foreach ($codes as $i => $hash) {
            if (password_verify($clean, (string) $hash)) {
                unset($codes[$i]);
                $users = admin_users();
                foreach ($users as $j => $u) {
                    if (($u['username'] ?? '') === $username) {
                        $users[$j]['totp_backup'] = array_values($codes);
                    }
                }
                admin_save_users($users);
                $ok = true;
                break;
            }
        }
    }

    admin_throttle_hit($key, $ok);
    if (!$ok) return 'That code is not right. Try the next one from your app.';

    session_regenerate_id(true);
    $_SESSION['adm_auth_ok'] = true;
    unset($_SESSION['adm_need_2fa']);
    return null;
}

function admin_logout(): void {
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $p = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
    }
    session_destroy();
}

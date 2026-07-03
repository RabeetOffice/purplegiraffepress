<?php
/**
 * Roles & Users (super-admin only).
 *
 * Roles live in admin/data/roles.json, users in admin/data/users.json.
 * Guardrails, all enforced server-side:
 *   - module lists are always intersected with admin_module_keys(): the '*'
 *     wildcard can never arrive from input; only the built-in locked 'admin'
 *     role carries it.
 *   - the 'admin' role is locked: no rename, edit or delete.
 *   - a role still assigned to a user cannot be deleted.
 *   - the LAST ACTIVE super admin can never be demoted, deactivated or deleted.
 *   - you cannot delete your own account.
 */

require_once __DIR__ . '/includes/auth.php';

$user = admin_require_admin();

/* ---------------------------------------------------------------- helpers */

function pgpa_is_super_role(?array $role): bool {
    return $role !== null && in_array('*', (array) ($role['modules'] ?? []), true);
}

/** How many ACTIVE users hold a role whose modules contain '*'. */
function pgpa_active_super_count(): int {
    $n = 0;
    foreach (admin_users() as $u) {
        if (empty($u['active'])) { continue; }
        if (pgpa_is_super_role(admin_get_role((string) ($u['role'] ?? '')))) { $n++; }
    }
    return $n;
}

function pgpa_fail(string $msg): void {
    admin_flash('err', $msg);
    admin_redirect('users.php');
}

function pgpa_done(string $msg): void {
    admin_flash('ok', $msg);
    admin_redirect('users.php');
}

/* ---------------------------------------------------------------- actions */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    admin_verify_csrf();
    $action = (string) ($_POST['action'] ?? '');

    /* ------------------------------------------------------------- roles */

    if ($action === 'role_add') {
        $name = admin_slugify((string) ($_POST['name'] ?? ''));
        if (!preg_match('~^[a-z0-9-]{2,24}$~', $name)) {
            pgpa_fail('Role names are 2 to 24 characters: lowercase letters, numbers and dashes.');
        }
        if (admin_get_role($name) !== null) {
            pgpa_fail('A role called "' . $name . '" already exists.');
        }
        $label = trim(strip_tags((string) ($_POST['label'] ?? '')));
        if ($label === '') { $label = ucwords(str_replace('-', ' ', $name)); }
        // '*' can never come from input: only real module keys survive this.
        $modules = array_values(array_intersect((array) ($_POST['modules'] ?? []), admin_module_keys()));
        $roles   = admin_roles();
        $roles[] = ['name' => $name, 'label' => $label, 'modules' => $modules];
        if (!admin_save_roles($roles)) { pgpa_fail('Could not write roles.json. Check folder permissions.'); }
        pgpa_done('Role "' . $label . '" created.');
    }

    if ($action === 'role_update') {
        $name = (string) ($_POST['name'] ?? '');
        $role = admin_get_role($name);
        if ($role === null) { pgpa_fail('That role does not exist.'); }
        if ($name === 'admin' || !empty($role['locked'])) {
            pgpa_fail('The Super Admin role is locked and cannot be edited.');
        }
        $label   = trim(strip_tags((string) ($_POST['label'] ?? '')));
        $modules = array_values(array_intersect((array) ($_POST['modules'] ?? []), admin_module_keys()));
        $roles   = admin_roles();
        foreach ($roles as $i => $r) {
            if (($r['name'] ?? '') === $name) {
                if ($label !== '') { $roles[$i]['label'] = $label; }
                $roles[$i]['modules'] = $modules;
            }
        }
        if (!admin_save_roles($roles)) { pgpa_fail('Could not write roles.json. Check folder permissions.'); }
        pgpa_done('Role "' . ($label !== '' ? $label : $name) . '" updated.');
    }

    if ($action === 'role_delete') {
        $name = (string) ($_POST['name'] ?? '');
        $role = admin_get_role($name);
        if ($role === null) { pgpa_fail('That role does not exist.'); }
        if ($name === 'admin' || !empty($role['locked'])) {
            pgpa_fail('The Super Admin role is locked and cannot be deleted.');
        }
        foreach (admin_users() as $u) {
            if (($u['role'] ?? '') === $name) {
                pgpa_fail('Some users still have the "' . $name . '" role. Move them to another role first.');
            }
        }
        $roles = array_values(array_filter(admin_roles(), static function ($r) use ($name) {
            return ($r['name'] ?? '') !== $name;
        }));
        if (!admin_save_roles($roles)) { pgpa_fail('Could not write roles.json. Check folder permissions.'); }
        pgpa_done('Role "' . $name . '" deleted.');
    }

    /* ------------------------------------------------------------- users */

    if ($action === 'user_add') {
        $username = strtolower(trim((string) ($_POST['username'] ?? '')));
        if (!preg_match('~^[a-z0-9_-]{3,20}$~', $username)) {
            pgpa_fail('Usernames are 3 to 20 characters: lowercase letters, numbers, dashes and underscores.');
        }
        if (admin_get_user($username) !== null) {
            pgpa_fail('The username "' . $username . '" is already taken.');
        }
        $password = (string) ($_POST['password'] ?? '');
        if (strlen($password) < 10) {
            pgpa_fail('Passwords need at least 10 characters.');
        }
        $roleName = (string) ($_POST['role'] ?? '');
        if (admin_get_role($roleName) === null) {
            pgpa_fail('Pick a real role for the new user.');
        }
        $users   = admin_users();
        $users[] = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'role'     => $roleName,
            'active'   => true,
            'created'  => date('c'),
        ];
        if (!admin_save_users($users)) { pgpa_fail('Could not write users.json. Check folder permissions.'); }
        pgpa_done('User "' . $username . '" created.');
    }

    if ($action === 'user_password') {
        $username = (string) ($_POST['username'] ?? '');
        if (admin_get_user($username) === null) { pgpa_fail('That user does not exist.'); }
        $password = (string) ($_POST['password'] ?? '');
        if (strlen($password) < 10) { pgpa_fail('Passwords need at least 10 characters.'); }
        $users = admin_users();
        foreach ($users as $i => $u) {
            if (($u['username'] ?? '') === $username) {
                $users[$i]['password'] = password_hash($password, PASSWORD_BCRYPT);
            }
        }
        if (!admin_save_users($users)) { pgpa_fail('Could not write users.json. Check folder permissions.'); }
        pgpa_done('Password for "' . $username . '" updated.');
    }

    if ($action === 'user_role') {
        $username = (string) ($_POST['username'] ?? '');
        $target   = admin_get_user($username);
        if ($target === null) { pgpa_fail('That user does not exist.'); }
        $roleName = (string) ($_POST['role'] ?? '');
        $newRole  = admin_get_role($roleName);
        if ($newRole === null) { pgpa_fail('That role does not exist.'); }
        $curRole = admin_get_role((string) ($target['role'] ?? ''));
        if (!empty($target['active'])
            && pgpa_is_super_role($curRole)
            && !pgpa_is_super_role($newRole)
            && pgpa_active_super_count() <= 1) {
            pgpa_fail('"' . $username . '" is the last active super admin. Promote someone else first.');
        }
        $users = admin_users();
        foreach ($users as $i => $u) {
            if (($u['username'] ?? '') === $username) {
                $users[$i]['role'] = $roleName;
            }
        }
        if (!admin_save_users($users)) { pgpa_fail('Could not write users.json. Check folder permissions.'); }
        pgpa_done('"' . $username . '" is now ' . (string) ($newRole['label'] ?? $roleName) . '.');
    }

    if ($action === 'user_toggle') {
        $username = (string) ($_POST['username'] ?? '');
        $target   = admin_get_user($username);
        if ($target === null) { pgpa_fail('That user does not exist.'); }
        $makeActive = !empty($_POST['on']);
        if (!$makeActive
            && !empty($target['active'])
            && pgpa_is_super_role(admin_get_role((string) ($target['role'] ?? '')))
            && pgpa_active_super_count() <= 1) {
            pgpa_fail('"' . $username . '" is the last active super admin and cannot be deactivated.');
        }
        $users = admin_users();
        foreach ($users as $i => $u) {
            if (($u['username'] ?? '') === $username) {
                $users[$i]['active'] = $makeActive;
            }
        }
        if (!admin_save_users($users)) { pgpa_fail('Could not write users.json. Check folder permissions.'); }
        pgpa_done('"' . $username . '" is now ' . ($makeActive ? 'active' : 'deactivated') . '.');
    }

    if ($action === 'user_reset_2fa') {
        $username = (string) ($_POST['username'] ?? '');
        if (admin_get_user($username) === null) { pgpa_fail('That user does not exist.'); }
        $users = admin_users();
        foreach ($users as $i => $u) {
            if (($u['username'] ?? '') === $username) {
                unset($users[$i]['totp_secret'], $users[$i]['totp_backup']);
            }
        }
        if (!admin_save_users($users)) { pgpa_fail('Could not write users.json. Check folder permissions.'); }
        pgpa_done('Two-factor authentication reset for "' . $username . '". They can enrol again from My Account.');
    }

    if ($action === 'user_delete') {
        $username = (string) ($_POST['username'] ?? '');
        if ($username === (string) ($user['username'] ?? '')) {
            pgpa_fail('You cannot delete your own account while logged in with it.');
        }
        $target = admin_get_user($username);
        if ($target === null) { pgpa_fail('That user does not exist.'); }
        if (!empty($target['active'])
            && pgpa_is_super_role(admin_get_role((string) ($target['role'] ?? '')))
            && pgpa_active_super_count() <= 1) {
            pgpa_fail('"' . $username . '" is the last active super admin and cannot be deleted.');
        }
        $users = array_values(array_filter(admin_users(), static function ($u) use ($username) {
            return ($u['username'] ?? '') !== $username;
        }));
        if (!admin_save_users($users)) { pgpa_fail('Could not write users.json. Check folder permissions.'); }
        pgpa_done('User "' . $username . '" deleted.');
    }

    pgpa_fail('Unknown action.');
}

/* ------------------------------------------------------------------- view */

$roles      = admin_roles();
$users      = admin_users();
$allModules = admin_modules();

$userCounts = [];
foreach ($users as $u) {
    $rn = (string) ($u['role'] ?? '');
    $userCounts[$rn] = ($userCounts[$rn] ?? 0) + 1;
}

/** Checkbox per grantable module (label + key). '*' is never offered. */
function pgpa_module_boxes(array $checked): void {
    foreach (admin_modules() as $key => $mod) {
        echo '<label class="adm-chip"><input type="checkbox" name="modules[]" value="' . e($key) . '"'
            . (in_array($key, $checked, true) ? ' checked' : '')
            . '> ' . e($mod['label']) . ' <code>' . e($key) . '</code></label> ';
    }
}

admin_layout_start('Roles & Users', 'users');
?>

<div class="adm-page-head">
  <div>
    <h1>Roles &amp; Users</h1>
    <p class="adm-page-sub">Who can log in, and which parts of the studio each of them can open.</p>
  </div>
  <div class="adm-page-actions">
    <button class="adm-btn adm-btn-primary" data-modal-open="addRoleModal">New role</button>
    <button class="adm-btn adm-btn-primary" data-modal-open="addUserModal">New user</button>
  </div>
</div>

<!-- --------------------------------------------------------------- roles -->
<section class="adm-card">
  <h2>Roles</h2>
  <p class="adm-help">A role is a named set of modules. The Super Admin role is built in, sees everything and cannot be changed.</p>

  <div class="adm-table-wrap">
    <table class="adm-table">
      <thead>
        <tr><th>Role</th><th>Modules</th><th>Users</th><th>Actions</th></tr>
      </thead>
      <tbody>
        <?php foreach ($roles as $r):
            $rName   = (string) ($r['name'] ?? '');
            $rLabel  = (string) ($r['label'] ?? $rName);
            $rMods   = (array) ($r['modules'] ?? []);
            $rLocked = $rName === 'admin' || !empty($r['locked']);
            $rCount  = (int) ($userCounts[$rName] ?? 0);
        ?>
        <tr>
          <td>
            <strong><?php echo e($rLabel); ?></strong>
            <code><?php echo e($rName); ?></code>
            <?php if ($rLocked): ?><span class="adm-chip chip-gray">&#128274; locked</span><?php endif; ?>
          </td>
          <td>
            <?php if (in_array('*', $rMods, true)): ?>
              <span class="adm-chip chip-green">&#11088; everything</span>
            <?php elseif (!$rMods): ?>
              <span class="adm-chip chip-gray">no modules</span>
            <?php else: foreach ($rMods as $m): ?>
              <span class="adm-chip"><?php echo e($allModules[$m]['label'] ?? $m); ?></span>
            <?php endforeach; endif; ?>
          </td>
          <td><?php echo $rCount; ?></td>
          <td>
            <?php if ($rLocked): ?>
              <span class="adm-help">built in</span>
            <?php else: ?>
              <button type="button" class="adm-btn btn-ghost btn-sm" data-modal-open="editRole<?php echo e(md5($rName)); ?>">Edit</button>
              <form method="post" action="users.php" style="display:inline">
                <?php echo admin_csrf_field(); ?>
                <input type="hidden" name="action" value="role_delete">
                <input type="hidden" name="name" value="<?php echo e($rName); ?>">
                <button class="adm-btn btn-danger btn-sm" type="submit"
                        <?php echo $rCount > 0 ? 'disabled title="Move its users to another role first"' : ''; ?>
                        data-confirm="Delete the role &quot;<?php echo e($rLabel); ?>&quot;? This cannot be undone.">Delete</button>
              </form>
            <?php endif; ?>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</section>

<!-- --------------------------------------------------------------- users -->
<section class="adm-card">
  <h2>Users</h2>
  <p class="adm-help">Passwords are bcrypt-hashed, two-factor is per user, and the last active super admin is protected from lock-out.</p>

  <div class="adm-table-wrap">
    <table class="adm-table">
      <thead>
        <tr><th>User</th><th>Role</th><th>2FA</th><th>Active</th><th>Created</th><th>Actions</th></tr>
      </thead>
      <tbody>
        <?php foreach ($users as $u):
            $uName    = (string) ($u['username'] ?? '');
            $uRole    = admin_get_role((string) ($u['role'] ?? ''));
            $uActive  = !empty($u['active']);
            $uHas2fa  = !empty($u['totp_secret']);
            $uCreated = (string) ($u['created'] ?? '');
            $uIsMe    = $uName === (string) ($user['username'] ?? '');
        ?>
        <tr>
          <td>
            <span class="adm-user-avatar" aria-hidden="true"><?php echo e(mb_strtoupper(mb_substr($uName, 0, 1))); ?></span>
            <strong><?php echo e($uName); ?></strong>
            <?php if ($uIsMe): ?><span class="adm-chip">you</span><?php endif; ?>
          </td>
          <td>
            <form method="post" action="users.php">
              <?php echo admin_csrf_field(); ?>
              <input type="hidden" name="action" value="user_role">
              <input type="hidden" name="username" value="<?php echo e($uName); ?>">
              <select class="adm-select" name="role" onchange="this.form.submit()" aria-label="Role for <?php echo e($uName); ?>">
                <?php foreach ($roles as $r): ?>
                  <option value="<?php echo e((string) ($r['name'] ?? '')); ?>"<?php echo ($r['name'] ?? '') === ($u['role'] ?? '') ? ' selected' : ''; ?>>
                    <?php echo e((string) ($r['label'] ?? $r['name'] ?? '')); ?>
                  </option>
                <?php endforeach; ?>
              </select>
              <noscript><button class="adm-btn btn-ghost btn-sm" type="submit">Apply</button></noscript>
            </form>
          </td>
          <td>
            <?php if ($uHas2fa): ?>
              <span class="adm-chip chip-green">2FA on</span>
            <?php else: ?>
              <span class="adm-chip chip-gray">off</span>
            <?php endif; ?>
          </td>
          <td>
            <form method="post" action="users.php">
              <?php echo admin_csrf_field(); ?>
              <input type="hidden" name="action" value="user_toggle">
              <input type="hidden" name="username" value="<?php echo e($uName); ?>">
              <label class="adm-toggle">
                <input type="checkbox" name="on" value="1"<?php echo $uActive ? ' checked' : ''; ?> onchange="this.form.submit()" aria-label="<?php echo e($uName); ?> active">
                <span aria-hidden="true"></span>
              </label>
              <noscript><button class="adm-btn btn-ghost btn-sm" type="submit">Apply</button></noscript>
            </form>
          </td>
          <td><?php echo e($uCreated !== '' ? date('j M Y', strtotime($uCreated) ?: time()) : '-'); ?></td>
          <td>
            <button type="button" class="adm-btn btn-ghost btn-sm" data-modal-open="setPass<?php echo e(md5($uName)); ?>">Set password</button>
            <?php if ($uHas2fa): ?>
              <form method="post" action="users.php" style="display:inline">
                <?php echo admin_csrf_field(); ?>
                <input type="hidden" name="action" value="user_reset_2fa">
                <input type="hidden" name="username" value="<?php echo e($uName); ?>">
                <button class="adm-btn btn-ghost btn-sm" type="submit"
                        data-confirm="Reset two-factor for &quot;<?php echo e($uName); ?>&quot;? They will log in with only their password until they enrol again.">Reset 2FA</button>
              </form>
            <?php endif; ?>
            <?php if (!$uIsMe): ?>
              <form method="post" action="users.php" style="display:inline">
                <?php echo admin_csrf_field(); ?>
                <input type="hidden" name="action" value="user_delete">
                <input type="hidden" name="username" value="<?php echo e($uName); ?>">
                <button class="adm-btn btn-danger btn-sm" type="submit"
                        data-confirm="Delete the user &quot;<?php echo e($uName); ?>&quot;? This cannot be undone.">Delete</button>
              </form>
            <?php endif; ?>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</section>

<!-- ------------------------------------------------------------- modals -->
<div class="adm-modal" id="addRoleModal" hidden>
  <div class="adm-modal-card is-wide">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&times;</button>
    <h2>New role</h2>
    <form method="post" action="users.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="role_add">
      <div class="adm-field-row">
        <label class="adm-field">
          <span>Name (slug, 2-24 chars)</span>
          <input type="text" name="name" pattern="[a-z0-9-]{2,24}" placeholder="content-team" required>
        </label>
        <label class="adm-field">
          <span>Label</span>
          <input type="text" name="label" placeholder="Content Team" required>
        </label>
      </div>
      <div class="adm-field">
        <span>Modules this role can open</span>
        <?php pgpa_module_boxes([]); ?>
      </div>
      <div class="adm-modal-foot">
        <button type="button" class="adm-btn adm-btn-light" data-modal-close>Cancel</button>
        <button class="adm-btn adm-btn-primary" type="submit">Create role</button>
      </div>
    </form>
  </div>
</div>

<div class="adm-modal" id="addUserModal" hidden>
  <div class="adm-modal-card is-wide">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&times;</button>
    <h2>New user</h2>
    <form method="post" action="users.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="user_add">
      <div class="adm-field-row">
        <label class="adm-field">
          <span>Username (3-20 chars)</span>
          <input type="text" name="username" pattern="[a-z0-9_-]{3,20}" autocomplete="off" placeholder="jane-editor" required>
        </label>
        <label class="adm-field">
          <span>Password (min 10 chars)</span>
          <input type="password" name="password" minlength="10" autocomplete="new-password" required>
        </label>
        <label class="adm-field">
          <span>Role</span>
          <select name="role" required>
            <?php foreach ($roles as $r): ?>
              <option value="<?php echo e((string) ($r['name'] ?? '')); ?>"><?php echo e((string) ($r['label'] ?? $r['name'] ?? '')); ?></option>
            <?php endforeach; ?>
          </select>
        </label>
      </div>
      <div class="adm-modal-foot">
        <button type="button" class="adm-btn adm-btn-light" data-modal-close>Cancel</button>
        <button class="adm-btn adm-btn-primary" type="submit">Create user</button>
      </div>
    </form>
  </div>
</div>

<?php foreach ($roles as $r):
    $rName   = (string) ($r['name'] ?? '');
    $rLabel  = (string) ($r['label'] ?? $rName);
    $rMods   = (array) ($r['modules'] ?? []);
    $rLocked = $rName === 'admin' || !empty($r['locked']);
    if ($rLocked) { continue; }
?>
<div class="adm-modal" id="editRole<?php echo e(md5($rName)); ?>" hidden>
  <div class="adm-modal-card is-wide">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&times;</button>
    <h2>Edit role</h2>
    <form method="post" action="users.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="role_update">
      <input type="hidden" name="name" value="<?php echo e($rName); ?>">
      <label class="adm-field">
        <span>Label</span>
        <input type="text" name="label" value="<?php echo e($rLabel); ?>" required>
      </label>
      <div class="adm-field">
        <span>Modules</span>
        <?php pgpa_module_boxes($rMods); ?>
      </div>
      <div class="adm-modal-foot">
        <button type="button" class="adm-btn adm-btn-light" data-modal-close>Cancel</button>
        <button class="adm-btn adm-btn-primary" type="submit">Save role</button>
      </div>
    </form>
  </div>
</div>
<?php endforeach; ?>

<?php foreach ($users as $u):
    $uName = (string) ($u['username'] ?? '');
?>
<div class="adm-modal" id="setPass<?php echo e(md5($uName)); ?>" hidden>
  <div class="adm-modal-card">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&times;</button>
    <h2>Set password</h2>
    <form method="post" action="users.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="user_password">
      <input type="hidden" name="username" value="<?php echo e($uName); ?>">
      <label class="adm-field">
        <span>New password for <strong><?php echo e($uName); ?></strong> (min 10 chars)</span>
        <input type="password" name="password" minlength="10" autocomplete="new-password" required>
      </label>
      <div class="adm-modal-foot">
        <button type="button" class="adm-btn adm-btn-light" data-modal-close>Cancel</button>
        <button class="adm-btn adm-btn-primary" type="submit">Save password</button>
      </div>
    </form>
  </div>
</div>
<?php endforeach; ?>

<?php admin_layout_end(); ?>

<?php
/**
 * Authors manager: the byline profiles behind the "About the Author" box on
 * every article (includes/blog-author.php). The Editorial profile is the
 * site-wide fallback and can never be deleted. Writes are surgical and
 * PHP-linted before anything replaces the live file.
 */

require_once __DIR__ . '/includes/auth.php';
$user = admin_require_module('authors');
require_once __DIR__ . '/includes/content-store.php';
require_once __DIR__ . '/includes/layout.php';

define('ADM_AUTHOR_FALLBACK', 'Purple Giraffe Press Editorial');

/** Avatar initials, same recipe as the live author box (max two letters). */
function adm_author_initials(string $name): string {
    $initials = '';
    foreach (preg_split('/\s+/', trim($name)) ?: [] as $part) {
        if ($part !== '') { $initials .= mb_substr($part, 0, 1); }
    }
    return mb_strtoupper(mb_substr($initials, 0, 2));
}

/* -------------------------------------------------------------- POST (PRG) */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    admin_verify_csrf();

    $action   = (string) ($_POST['action'] ?? '');
    $profiles = adm_authors_read();

    $name = trim(strip_tags((string) ($_POST['name'] ?? '')));
    $role = trim(strip_tags((string) ($_POST['role'] ?? '')));
    $bio  = trim(strip_tags((string) ($_POST['bio'] ?? '')));
    $orig = trim((string) ($_POST['orig'] ?? ''));

    switch ($action) {

        case 'add': {
            if ($name === '' || $role === '' || $bio === '') {
                admin_flash('err', 'Name, role and bio are all needed.');
                break;
            }
            if (isset($profiles[$name])) {
                admin_flash('err', 'An author with that name already exists.');
                break;
            }
            $profiles[$name] = ['role' => $role, 'bio' => $bio];
            [$ok, $msg] = adm_authors_write($profiles);
            admin_flash($ok ? 'ok' : 'err', $ok ? 'Author profile added.' : $msg);
            break;
        }

        case 'update': {
            if (!isset($profiles[$orig])) {
                admin_flash('err', 'That author profile no longer exists.');
                break;
            }
            if ($name === '' || $role === '' || $bio === '') {
                admin_flash('err', 'Name, role and bio are all needed.');
                break;
            }
            if ($name !== $orig && isset($profiles[$name])) {
                admin_flash('err', 'Another author already uses that name.');
                break;
            }
            if ($orig === ADM_AUTHOR_FALLBACK && $name !== $orig) {
                admin_flash('err', 'The Editorial profile is the site-wide fallback - its name cannot change.');
                break;
            }
            /* Rebuild the map in place so the file order never shuffles. */
            $next = [];
            foreach ($profiles as $n => $d) {
                if ($n === $orig) {
                    $next[$name] = ['role' => $role, 'bio' => $bio, '_raw' => $d['_raw'] ?? ''];
                } else {
                    $next[$n] = $d;
                }
            }
            [$ok, $msg] = adm_authors_write($next);
            admin_flash($ok ? 'ok' : 'err', $ok ? 'Author profile updated.' : $msg);
            break;
        }

        case 'delete': {
            if ($name === ADM_AUTHOR_FALLBACK) {
                admin_flash('err', 'The Editorial profile is the fallback for every unmatched byline - it cannot be deleted.');
                break;
            }
            if (!isset($profiles[$name])) {
                admin_flash('err', 'That author profile no longer exists.');
                break;
            }
            unset($profiles[$name]);
            [$ok, $msg] = adm_authors_write($profiles);
            admin_flash($ok ? 'ok' : 'err', $ok ? 'Author profile deleted. Posts by that name now show the Editorial bio.' : $msg);
            break;
        }

        default:
            admin_flash('err', 'Unknown action.');
    }

    admin_redirect('authors.php');
}

/* --------------------------------------------------------------------- GET */

$profiles = adm_authors_read();

/* Post counts per byline, from the blog registry + drafts. */
$post_counts = [];
foreach (post_admin_index() as $post) {
    $byline = trim((string) ($post['registry']['author'] ?? ''));
    if ($byline === '') continue;
    $post_counts[$byline] = ($post_counts[$byline] ?? 0) + 1;
}

admin_layout_start('Authors', 'authors');
?>

<div class="adm-page-head">
  <div>
    <h1>Authors</h1>
    <p class="adm-sub">Bylines and the About-the-Author box on every article.</p>
  </div>
  <div class="adm-page-actions">
    <button class="adm-btn adm-btn-primary" data-modal-open="addAuthorModal">Add author</button>
  </div>
</div>

<?php if (!$profiles): ?>
  <section class="adm-card adm-empty">
    <p>No author profiles found. If the list should not be empty, the data file could not be parsed - nothing will be overwritten until it can be.</p>
  </section>
<?php endif; ?>

<?php foreach ($profiles as $pname => $p): ?>
  <?php $pname = (string) $pname; $count = (int) ($post_counts[$pname] ?? 0); ?>
  <article class="adm-card adm-author">
    <div class="adm-author-head">
      <span class="adm-user-avatar" aria-hidden="true"><?php echo e(adm_author_initials($pname)); ?></span>
      <div class="adm-author-meta">
        <h3><?php echo e($pname); ?> <span class="adm-author-role"><?php echo e($p['role']); ?></span></h3>
        <span class="adm-chip"><?php echo $count; ?> post<?php echo $count === 1 ? '' : 's'; ?></span>
        <?php if ($pname === ADM_AUTHOR_FALLBACK): ?>
          <span class="adm-chip adm-chip-note">fallback profile</span>
        <?php endif; ?>
      </div>
    </div>
    <p class="adm-author-bio"><?php echo e($p['bio']); ?></p>

    <div class="adm-row-actions">
      <button type="button" class="adm-btn adm-btn-ghost" data-modal-open="editAuthor<?php echo e(md5($pname)); ?>">Edit</button>
      <?php if ($pname !== ADM_AUTHOR_FALLBACK): ?>
        <form method="post" action="authors.php" class="adm-inline-form">
          <?php echo admin_csrf_field(); ?>
          <input type="hidden" name="action" value="delete">
          <input type="hidden" name="name" value="<?php echo e($pname); ?>">
          <button type="submit" class="adm-btn adm-btn-danger" data-confirm="Delete this author profile? Posts with this byline will show the Editorial bio instead.">Delete</button>
        </form>
      <?php endif; ?>
    </div>
  </article>
<?php endforeach; ?>

<!-- ------------------------------------------------------------- modals -->
<div class="adm-modal" id="addAuthorModal" hidden>
  <div class="adm-modal-card is-wide">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&times;</button>
    <h2>Add author</h2>
    <form method="post" action="authors.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="add">
      <div class="adm-field-row">
        <div class="adm-field">
          <label for="a-name">Name</label>
          <input id="a-name" name="name" type="text" required placeholder="e.g. Maya Holloway">
        </div>
        <div class="adm-field">
          <label for="a-role">Role</label>
          <input id="a-role" name="role" type="text" required placeholder="e.g. Senior Editor">
        </div>
      </div>
      <div class="adm-field">
        <label for="a-bio">Bio</label>
        <textarea id="a-bio" name="bio" rows="4" required placeholder="Two or three sentences shown under every article this person writes."></textarea>
      </div>
      <div class="adm-modal-foot">
        <button type="button" class="adm-btn adm-btn-light" data-modal-close>Cancel</button>
        <button type="submit" class="adm-btn adm-btn-primary">Add author</button>
      </div>
    </form>
  </div>
</div>

<?php foreach ($profiles as $pname => $p): ?>
  <?php $pname = (string) $pname; ?>
<div class="adm-modal" id="editAuthor<?php echo e(md5($pname)); ?>" hidden>
  <div class="adm-modal-card is-wide">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&times;</button>
    <h2>Edit author</h2>
    <form method="post" action="authors.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="update">
      <input type="hidden" name="orig" value="<?php echo e($pname); ?>">
      <div class="adm-field-row">
        <div class="adm-field">
          <label for="a-name-<?php echo e(md5($pname)); ?>">Name</label>
          <input id="a-name-<?php echo e(md5($pname)); ?>" name="name" type="text" required value="<?php echo e($pname); ?>" <?php echo $pname === ADM_AUTHOR_FALLBACK ? 'readonly' : ''; ?>>
          <?php if ($pname !== ADM_AUTHOR_FALLBACK): ?>
            <p class="adm-help">Renaming is allowed &mdash; existing posts that still reference the old name fall back to the Editorial bio until you update their byline.</p>
          <?php endif; ?>
        </div>
        <div class="adm-field">
          <label for="a-role-<?php echo e(md5($pname)); ?>">Role</label>
          <input id="a-role-<?php echo e(md5($pname)); ?>" name="role" type="text" required value="<?php echo e($p['role']); ?>">
        </div>
      </div>
      <div class="adm-field">
        <label for="a-bio-<?php echo e(md5($pname)); ?>">Bio</label>
        <textarea id="a-bio-<?php echo e(md5($pname)); ?>" name="bio" rows="4" required><?php echo e($p['bio']); ?></textarea>
      </div>
      <div class="adm-modal-foot">
        <button type="button" class="adm-btn adm-btn-light" data-modal-close>Cancel</button>
        <button type="submit" class="adm-btn adm-btn-primary">Save changes</button>
      </div>
    </form>
  </div>
</div>
<?php endforeach; ?>

<?php admin_layout_end(); ?>

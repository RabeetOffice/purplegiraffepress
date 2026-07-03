<?php
/**
 * Blog posts listing: every post the admin knows about (JSON drafts, admin
 * published posts and registry-only legacy posts), with live filtering.
 */

require_once __DIR__ . '/includes/auth.php';
$user = admin_require_module('posts');
require_once __DIR__ . '/includes/post-store.php';

$CAT_FILE = ADMIN_DATA_DIR . '/blog-categories.json';

/* Category management (add / delete) - writes admin/data/blog-categories.json,
   which blog_categories() reads, so the editor's dropdown updates instantly. */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    admin_verify_csrf();
    $catAction = (string) ($_POST['action'] ?? '');

    // Current list as label => tone (from the effective category set).
    $list = [];
    foreach (blog_categories() as $c) { $list[$c['label']] = $c['tone']; }
    $tones = blog_category_tones();

    $writeCats = static function (array $list) use ($CAT_FILE): bool {
        $out = [];
        foreach ($list as $label => $tone) { $out[] = ['label' => $label, 'tone' => $tone]; }
        return admin_json_write($CAT_FILE, $out);
    };

    if ($catAction === 'cat_add') {
        $label = trim((string) ($_POST['label'] ?? ''));
        $tone  = (string) ($_POST['tone'] ?? 'note-purple');
        if (!isset($tones[$tone])) { $tone = 'note-purple'; }
        if ($label === '' || !preg_match("~^[A-Za-z0-9 &'-]{2,40}$~", $label)) {
            admin_flash('err', 'Give the category a short name (letters, numbers and spaces, 2 to 40 characters).');
        } elseif (isset($list[$label])) {
            admin_flash('err', 'A category called "' . $label . '" already exists.');
        } else {
            $list[$label] = $tone;
            $ok = $writeCats($list);
            admin_flash($ok ? 'ok' : 'err', $ok ? 'Category "' . $label . '" added.' : 'Could not save the categories file.');
        }
        admin_redirect('posts.php');
    }

    if ($catAction === 'cat_delete') {
        $label = trim((string) ($_POST['label'] ?? ''));
        $used  = 0;
        foreach (post_admin_index() as $p) {
            if ((string) (($p['registry']['category'] ?? '')) === $label) { $used++; }
        }
        if (!isset($list[$label])) {
            admin_flash('err', 'That category no longer exists.');
        } elseif (count($list) <= 1) {
            admin_flash('err', 'Keep at least one category.');
        } elseif ($used > 0) {
            admin_flash('err', 'Cannot delete "' . $label . '": ' . $used . ' post(s) still use it. Move them to another category first.');
        } else {
            unset($list[$label]);
            $ok = $writeCats($list);
            admin_flash($ok ? 'ok' : 'err', $ok ? 'Category "' . $label . '" removed.' : 'Could not save the categories file.');
        }
        admin_redirect('posts.php');
    }

    admin_redirect('posts.php');
}

$posts = post_admin_index();

$publishedCount = 0;
$draftCount     = 0;
foreach ($posts as $p) {
    if (($p['status'] ?? '') === 'published') { $publishedCount++; } else { $draftCount++; }
}

$categories = array_keys(blog_categories());

admin_layout_start('Blog Posts', 'posts');
?>

<div class="adm-page-head">
  <div>
    <h1>Blog Posts</h1>
    <p class="adm-page-sub"><?php echo (int) $publishedCount; ?> published &middot; <?php echo (int) $draftCount; ?> drafts</p>
  </div>
  <div class="adm-page-actions">
    <button type="button" class="adm-btn adm-btn-light" data-modal-open="catModal">Categories</button>
    <a class="adm-btn adm-btn-primary" href="post-edit.php">New post</a>
  </div>
</div>

<div class="adm-card">
  <div class="adm-toolbar">
    <input class="adm-search" id="postSearch" type="search" placeholder="Search title or slug" aria-label="Search posts">
    <select id="postCat" aria-label="Filter by category">
      <option value="">All categories</option>
      <?php foreach ($categories as $cat): ?>
        <option value="<?php echo e($cat); ?>"><?php echo e($cat); ?></option>
      <?php endforeach; ?>
    </select>
    <select id="postStatus" aria-label="Filter by status">
      <option value="">All statuses</option>
      <option value="published">Published</option>
      <option value="draft">Draft</option>
    </select>
  </div>

  <?php if (!$posts): ?>
    <div class="adm-empty">
      <span class="adm-empty-glyph" aria-hidden="true">&#10022;</span>
      <p>No posts yet. Write your first one.</p>
      <a class="adm-btn adm-btn-primary" href="post-edit.php">New post</a>
    </div>
  <?php else: ?>
    <div class="adm-table-wrap">
      <table class="adm-table">
        <thead>
          <tr>
            <th></th>
            <th>Title</th>
            <th>Status</th>
            <th>Category</th>
            <th>Date</th>
            <th>Read</th>
            <th></th>
          </tr>
        </thead>
        <tbody id="postRows">
          <?php foreach ($posts as $p):
              $reg      = (array) ($p['registry'] ?? []);
              $slug     = (string) $p['slug'];
              $title    = (string) ($reg['title'] ?? $slug);
              $image    = (string) ($reg['image'] ?? '');
              $glyph    = (string) ($reg['glyph'] ?? '✦');
              $category = (string) ($reg['category'] ?? '');
              $status   = (string) ($p['status'] ?? 'draft');
              $isLive   = $status === 'published';
          ?>
          <tr
            data-title="<?php echo e(mb_strtolower($title . ' ' . $slug)); ?>"
            data-category="<?php echo e($category); ?>"
            data-status="<?php echo e($status); ?>"
          >
            <td>
              <span class="adm-thumb">
                <?php if ($image !== ''): ?>
                  <img src="<?php echo e('../' . $image); ?>" alt="" loading="lazy">
                <?php else: ?>
                  <span aria-hidden="true"><?php echo e($glyph); ?></span>
                <?php endif; ?>
              </span>
            </td>
            <td>
              <a href="post-edit.php?slug=<?php echo e(rawurlencode($slug)); ?>"><strong><?php echo e($title); ?></strong></a>
              <br><small class="adm-help"><?php echo e($slug); ?></small>
            </td>
            <td>
              <span class="adm-chip <?php echo $isLive ? 'chip-green' : 'chip-amber'; ?>"><?php echo $isLive ? 'Published' : 'Draft'; ?></span>
              <?php if (($p['source'] ?? '') === 'legacy'): ?>
                <span class="adm-chip chip-gray">legacy</span>
              <?php endif; ?>
            </td>
            <td><?php echo e($category); ?></td>
            <td><?php echo e((string) ($reg['date'] ?? '')); ?></td>
            <td><?php echo e((string) ($reg['read'] ?? '')); ?></td>
            <td>
              <a class="adm-btn adm-btn-light adm-btn-sm" href="post-edit.php?slug=<?php echo e(rawurlencode($slug)); ?>">Edit</a>
              <?php if ($isLive): ?>
                <a class="adm-btn adm-btn-light adm-btn-sm" href="<?php echo e('../blogs/' . $slug . '.php'); ?>" target="_blank" rel="noopener">View &#8599;</a>
              <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="adm-empty" id="postNoMatch" hidden>
      <span class="adm-empty-glyph" aria-hidden="true">&#10022;</span>
      <p>No posts match those filters.</p>
    </div>
  <?php endif; ?>
</div>

<script>
(function () {
  'use strict';
  var search  = document.getElementById('postSearch');
  var cat     = document.getElementById('postCat');
  var status  = document.getElementById('postStatus');
  var body    = document.getElementById('postRows');
  var noMatch = document.getElementById('postNoMatch');
  if (!search || !cat || !status || !body) return;

  var rows = Array.prototype.slice.call(body.querySelectorAll('tr'));

  function apply() {
    var term = (search.value || '').toLowerCase().trim();
    var c = cat.value;
    var s = status.value;
    var shown = 0;
    rows.forEach(function (row) {
      var ok = (!term || (row.getAttribute('data-title') || '').indexOf(term) !== -1)
        && (!c || row.getAttribute('data-category') === c)
        && (!s || row.getAttribute('data-status') === s);
      row.hidden = !ok;
      if (ok) shown++;
    });
    if (noMatch) noMatch.hidden = shown > 0;
  }

  search.addEventListener('input', apply);
  cat.addEventListener('change', apply);
  status.addEventListener('change', apply);
})();
</script>

<!-- ----------------------------------------------------- categories modal -->
<div class="adm-modal" id="catModal" hidden>
  <div class="adm-modal-card">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&times;</button>
    <h2>Blog categories</h2>
    <p class="adm-help">These fill the category dropdown when you write or edit a post. A category still used by a post cannot be deleted until those posts move to another category.</p>

    <div class="adm-table-wrap">
      <table class="adm-table">
        <thead><tr><th>Category</th><th>Colour</th><th>Posts</th><th></th></tr></thead>
        <tbody>
          <?php
          $catTones = blog_category_tones();
          foreach (blog_categories() as $c):
              $used = 0;
              foreach ($posts as $p) {
                  if ((string) (($p['registry']['category'] ?? '')) === $c['label']) { $used++; }
              }
          ?>
          <tr>
            <td><strong><?php echo e($c['label']); ?></strong></td>
            <td><span class="adm-chip"><?php echo e($catTones[$c['tone']] ?? 'Purple'); ?></span></td>
            <td><?php echo (int) $used; ?></td>
            <td>
              <form method="post" action="posts.php" class="adm-inline-form">
                <?php echo admin_csrf_field(); ?>
                <input type="hidden" name="action" value="cat_delete">
                <input type="hidden" name="label" value="<?php echo e($c['label']); ?>">
                <button type="submit" class="adm-btn adm-btn-danger adm-btn-sm"<?php echo $used > 0 ? ' disabled title="In use by ' . (int) $used . ' post(s)"' : ' data-confirm="Delete this category?"'; ?>>Delete</button>
              </form>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <h3 style="margin-top:18px;">Add a category</h3>
    <form method="post" action="posts.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="cat_add">
      <div class="adm-field-row">
        <label class="adm-field">
          <span>Name</span>
          <input type="text" name="label" maxlength="40" required placeholder="e.g. Marketing">
        </label>
        <label class="adm-field">
          <span>Colour</span>
          <select name="tone">
            <?php foreach (blog_category_tones() as $k => $v): ?>
              <option value="<?php echo e($k); ?>"><?php echo e($v); ?></option>
            <?php endforeach; ?>
          </select>
        </label>
      </div>
      <div class="adm-modal-foot">
        <button type="button" class="adm-btn adm-btn-light" data-modal-close>Close</button>
        <button type="submit" class="adm-btn adm-btn-primary">Add category</button>
      </div>
    </form>
  </div>
</div>

<?php admin_layout_end(); ?>

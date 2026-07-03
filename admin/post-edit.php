<?php
/**
 * Blog post editor. One page covers new posts, drafts, published posts and
 * legacy imports. Persistence is all AJAX against post-actions.php; the editor
 * engine lives in assets/admin.js and reads its state from window.ADM_POST.
 */

require_once __DIR__ . '/includes/auth.php';
$user = admin_require_module('posts');
require_once __DIR__ . '/includes/post-store.php';

/* Authors come from the authors module when installed; degrade gracefully. */
if (is_file(__DIR__ . '/includes/content-store.php')) {
    require_once __DIR__ . '/includes/content-store.php';
}
$authors = function_exists('adm_authors_read') ? adm_authors_read() : [];
if (!is_array($authors) || !$authors) {
    $authors = ['Purple Giraffe Press Editorial' => []];
}

$slug = trim((string) ($_GET['slug'] ?? ''));
$src  = null;

if ($slug !== '') {
    $src = post_source($slug);
    if (!$src && pgp_token_valid_slug($slug)) {
        /* Legacy hand-built post: pull it into the admin on first open. */
        $src = post_import($slug);
    }
    if (!$src) {
        admin_flash('err', 'That post could not be found or imported.');
        admin_redirect('posts.php');
    }
} else {
    $src = [
        'slug'      => '',
        'status'    => 'draft',
        'source'    => 'admin',
        'registry'  => [
            'title'    => '',
            'excerpt'  => '',
            'date'     => date('Y-m-d'),
            'category' => 'Publishing',
            'author'   => 'Purple Giraffe Press Editorial',
            'read'     => '',
            'image'    => '',
            'glyph'    => '✦',
        ],
        'seo'       => ['page_title' => '', 'page_description' => '', 'page_keywords' => ''],
        'body'      => '',
        'faqs'      => [],
        'read_auto' => true,
    ];
}

$reg = array_merge([
    'title' => '', 'excerpt' => '', 'date' => date('Y-m-d'), 'category' => 'Publishing',
    'author' => 'Purple Giraffe Press Editorial', 'read' => '', 'image' => '', 'glyph' => '✦',
], (array) ($src['registry'] ?? []));
$seo = array_merge([
    'page_title' => '', 'page_description' => '', 'page_keywords' => '',
], (array) ($src['seo'] ?? []));

$published = ($src['status'] ?? '') === 'published';
$isNew     = (string) $src['slug'] === '';
$readAuto  = !empty($src['read_auto']);

$categories = array_keys(blog_categories());
if ($reg['category'] !== '' && !in_array($reg['category'], $categories, true)) {
    $categories[] = $reg['category'];
}

$authorNames = array_keys($authors);
if ($reg['author'] !== '' && !in_array($reg['author'], $authorNames, true)) {
    array_unshift($authorNames, $reg['author']);
}

$glyphs = ['✦', '✎', '★', '❋', '☾', '✿'];
if ($reg['glyph'] !== '' && !in_array($reg['glyph'], $glyphs, true)) {
    array_unshift($glyphs, $reg['glyph']);
}

/* Internal link picker targets: site pages (nav + service pages) and every
   published post, as validated placeholder tokens. */
$linkPages = [];
foreach ((array) ($GLOBALS['nav_menu'] ?? []) as $label => $file) {
    $linkPages[(string) $label] = (string) $file;
}
foreach ((array) ($GLOBALS['footer_menu_services'] ?? []) as $label => $file) {
    if (!in_array((string) $file, $linkPages, true)) {
        $linkPages[(string) $label] = (string) $file;
    }
}
$linkPosts = [];
foreach (post_admin_index() as $p) {
    if (($p['status'] ?? '') === 'published' && (string) $p['slug'] !== (string) $src['slug']) {
        $linkPosts[(string) $p['slug']] = (string) (($p['registry']['title'] ?? '') !== '' ? $p['registry']['title'] : $p['slug']);
    }
}

$pageTitle = $isNew ? 'New post' : ($reg['title'] !== '' ? $reg['title'] : (string) $src['slug']);

admin_layout_start($pageTitle, 'posts');
?>

<a href="posts.php" class="adm-back"><span aria-hidden="true">&larr;</span> All posts</a>

<div class="adm-page-head adm-ed-head">
  <div>
    <h1><?php echo e($pageTitle); ?></h1>
    <p class="adm-page-sub">
      <span id="statusChip" class="adm-chip <?php echo $published ? 'chip-green' : 'chip-amber'; ?>"><?php echo $published ? 'Published' : 'Draft'; ?></span>
      <?php if (($src['source'] ?? '') === 'imported'): ?>
        <span class="adm-chip chip-gray">imported</span>
      <?php endif; ?>
      <span id="savedAt" class="adm-help"></span>
    </p>
  </div>
  <div class="adm-page-actions">
    <button type="button" id="btnPreview" class="adm-btn adm-btn-light">Preview</button>
    <button type="button" id="btnSave" class="adm-btn adm-btn-light">Save draft</button>
    <button type="button" id="btnPublish" class="adm-btn adm-btn-primary"><?php echo $published ? 'Update' : 'Publish'; ?></button>
    <button type="button" id="btnUnpublish" class="adm-btn adm-btn-light"<?php echo $published ? '' : ' hidden'; ?> data-confirm="Unpublish this post? The live page moves to /trash and the post returns to draft.">Unpublish</button>
    <button type="button" id="btnDelete" class="adm-btn adm-btn-danger adm-btn-sm">Delete</button>
  </div>
</div>

<div class="adm-editor-layout">

  <div>
    <div class="adm-card adm-ed-card">
      <input type="text" id="f_title" class="adm-ed-title" value="<?php echo e($reg['title']); ?>" placeholder="Add title" autocomplete="off" aria-label="Post title">

      <div class="adm-ed-toolbar" id="edToolbar" role="toolbar" aria-label="Formatting">
        <button type="button" class="adm-ed-btn" data-cmd="p" title="Paragraph">&para;</button>
        <button type="button" class="adm-ed-btn" data-cmd="h2" title="Heading 2">H2</button>
        <button type="button" class="adm-ed-btn" data-cmd="h3" title="Heading 3">H3</button>
        <button type="button" class="adm-ed-btn" data-cmd="h4" title="Heading 4">H4</button>
        <button type="button" class="adm-ed-btn" data-cmd="bold" title="Bold (Ctrl+B)"><strong>B</strong></button>
        <button type="button" class="adm-ed-btn" data-cmd="italic" title="Italic (Ctrl+I)"><em>I</em></button>
        <button type="button" class="adm-ed-btn" data-cmd="ul" title="Bulleted list">&bull; List</button>
        <button type="button" class="adm-ed-btn" data-cmd="ol" title="Numbered list">1. List</button>
        <button type="button" class="adm-ed-btn" data-cmd="blockquote" title="Quote with attribution">&#10077;</button>
        <button type="button" class="adm-ed-btn" data-cmd="table" title="Insert table">&#8862; Table</button>
        <button type="button" class="adm-ed-btn" data-cmd="rowadd" title="Add table row">+ Row</button>
        <button type="button" class="adm-ed-btn" data-cmd="rowdel" title="Delete table row">- Row</button>
        <button type="button" class="adm-ed-btn" data-cmd="link" title="Insert link">Link</button>
        <button type="button" class="adm-ed-btn" data-cmd="unlink" title="Remove link">Unlink</button>
        <button type="button" class="adm-ed-btn" data-cmd="img" title="Insert image">Image</button>
        <button type="button" class="adm-ed-btn" data-cmd="hr" title="Horizontal rule">HR</button>
        <button type="button" class="adm-ed-btn" data-cmd="undo" title="Undo (Ctrl+Z)">&#8630;</button>
        <button type="button" class="adm-ed-btn" data-cmd="redo" title="Redo (Ctrl+Y)">&#8631;</button>
        <button type="button" class="adm-ed-btn" data-cmd="html" id="btnSource" title="Edit HTML source">&lt;/&gt;</button>
      </div>

      <div id="edSurface" class="adm-ed-content adm-ed-surface" contenteditable="true" spellcheck="true" aria-label="Article body" data-placeholder="Start writing your story here. Use the toolbar above for headings, lists, links, tables and images."></div>
      <textarea id="edSource" class="adm-ed-source" hidden spellcheck="false" aria-label="Article HTML source"></textarea>
    </div>

    <div class="adm-card">
      <h2>FAQs (accordion + schema)</h2>
      <p class="adm-help">Shown as an accordion under the article and emitted as FAQPage schema. Plain text only.</p>
      <div id="faqList"></div>
      <button type="button" id="btnAddFaq" class="adm-btn adm-btn-light">Add FAQ</button>
    </div>
  </div>

  <aside class="adm-seo-panel">

    <div class="adm-card">
      <h2>Publish</h2>
      <label class="adm-field">
        <span>Slug (link)</span>
        <input type="text" id="f_slug" value="<?php echo e((string) $src['slug']); ?>" autocomplete="off"<?php echo $published ? ' disabled' : ''; ?>>
        <small class="adm-help">Locked after publish</small>
      </label>
      <div class="adm-grid cols-2">
        <label class="adm-field">
          <span>Date</span>
          <input type="date" id="f_date" value="<?php echo e($reg['date']); ?>">
        </label>
        <label class="adm-field">
          <span>Category <button type="button" class="adm-link-btn" id="btnNewCat">+ New</button></span>
          <select id="f_category">
            <?php foreach ($categories as $cat): ?>
              <option value="<?php echo e($cat); ?>"<?php echo $cat === $reg['category'] ? ' selected' : ''; ?>><?php echo e($cat); ?></option>
            <?php endforeach; ?>
          </select>
        </label>
      </div>
      <div class="adm-newcat" id="newCatBox" hidden>
        <input type="text" id="newCatName" maxlength="40" placeholder="New category name" autocomplete="off">
        <select id="newCatTone" class="adm-select" aria-label="Category colour">
          <?php foreach (blog_category_tones() as $tk => $tv): ?>
            <option value="<?php echo e($tk); ?>"><?php echo e($tv); ?></option>
          <?php endforeach; ?>
        </select>
        <button type="button" class="adm-btn adm-btn-primary adm-btn-sm" id="newCatAdd">Add</button>
      </div>
      <label class="adm-field">
        <span>Author</span>
        <select id="f_author">
          <?php foreach ($authorNames as $name): ?>
            <option value="<?php echo e($name); ?>"<?php echo $name === $reg['author'] ? ' selected' : ''; ?>><?php echo e($name); ?></option>
          <?php endforeach; ?>
        </select>
      </label>
      <div class="adm-field">
        <span>Card glyph</span>
        <div class="adm-glyph-pick" id="glyphPick">
          <?php foreach ($glyphs as $g): ?>
            <button type="button" data-glyph="<?php echo e($g); ?>" class="<?php echo $g === $reg['glyph'] ? 'is-on' : ''; ?>" aria-label="Glyph <?php echo e($g); ?>"><?php echo e($g); ?></button>
          <?php endforeach; ?>
        </div>
        <input type="hidden" id="f_glyph" value="<?php echo e($reg['glyph']); ?>">
      </div>
      <div class="adm-field-row">
        <label class="adm-field">
          <span>Read time</span>
          <input type="text" id="f_read" value="<?php echo e($reg['read']); ?>"<?php echo $readAuto ? ' readonly' : ''; ?>>
        </label>
        <label class="adm-toggle">
          <input type="checkbox" id="f_read_auto"<?php echo $readAuto ? ' checked' : ''; ?>>
          <span>auto</span>
        </label>
      </div>
    </div>

    <div class="adm-card">
      <h2>Cover image</h2>
      <div class="adm-drop" id="coverDrop" role="button" tabindex="0">
        Drag a cover here or click. It is saved as assets/images/blog/&lt;slug&gt;.webp
      </div>
      <input type="file" id="coverFile" accept="image/*" hidden>
      <div class="adm-cover-preview" id="coverPreview"<?php echo $reg['image'] !== '' ? '' : ' hidden'; ?>>
        <?php if ($reg['image'] !== ''): ?>
          <img src="<?php echo e('../' . $reg['image']); ?>" alt="Cover preview">
        <?php endif; ?>
      </div>
    </div>

    <div class="adm-card">
      <h2>Search appearance (SEO)</h2>
      <label class="adm-field">
        <span>Title tag <span class="adm-charcount" data-for="f_seo_title">0 chars</span></span>
        <input type="text" id="f_seo_title" value="<?php echo e($seo['page_title']); ?>" autocomplete="off">
      </label>
      <label class="adm-field">
        <span>Meta description <span class="adm-charcount" data-for="f_seo_description">0 chars</span></span>
        <textarea id="f_seo_description" rows="3"><?php echo e($seo['page_description']); ?></textarea>
      </label>
      <label class="adm-field">
        <span>Keywords</span>
        <input type="text" id="f_seo_keywords" value="<?php echo e($seo['page_keywords']); ?>" autocomplete="off">
        <small class="adm-help">Comma separated. The first keyword drives the checklist.</small>
      </label>
      <label class="adm-field">
        <span>Excerpt <span class="adm-charcount" data-for="f_excerpt">0 chars</span></span>
        <textarea id="f_excerpt" rows="3"><?php echo e($reg['excerpt']); ?></textarea>
        <small class="adm-help">Card text on the blog listing and the fallback description.</small>
      </label>
    </div>

    <div class="adm-card">
      <h2>SEO checklist</h2>
      <div class="adm-seo-score">
        <div class="adm-score-ring" id="seoScore" style="--score: 0"><span>0</span></div>
        <ul class="adm-checklist" id="seoChecklist">
          <li data-check="title">Title tag is 35 to 60 characters</li>
          <li data-check="desc">Meta description is 110 to 160 characters</li>
          <li data-check="excerpt">Excerpt is written</li>
          <li data-check="words">Body is at least 600 words</li>
          <li data-check="h2">At least two H2 headings</li>
          <li data-check="faqs">At least two FAQs</li>
          <li data-check="internal">At least one internal link</li>
          <li data-check="cover">Cover image is set</li>
          <li data-check="keyword">Keyword appears in title and body</li>
        </ul>
      </div>
    </div>

  </aside>
</div>

<template id="faqTpl">
  <div class="adm-faq-item">
    <span class="adm-faq-grip" aria-hidden="true">&#8942;&#8942;</span>
    <div>
      <input type="text" class="faq-q" placeholder="Question" autocomplete="off">
      <textarea class="faq-a" rows="3" placeholder="Answer (plain text, no HTML)"></textarea>
    </div>
    <div>
      <button type="button" class="adm-btn adm-btn-light adm-btn-sm faq-up" title="Move up" aria-label="Move up">&uarr;</button>
      <button type="button" class="adm-btn adm-btn-light adm-btn-sm faq-down" title="Move down" aria-label="Move down">&darr;</button>
      <button type="button" class="adm-btn adm-btn-danger adm-btn-sm faq-del" title="Remove" aria-label="Remove">&#10005;</button>
    </div>
  </div>
</template>

<div class="adm-modal" id="linkPicker" hidden>
  <div class="adm-modal-card">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&#10005;</button>
    <h2>Insert link</h2>

    <h3>Site pages &amp; posts</h3>
    <div class="adm-linkpicker" id="linkInternal">
      <?php foreach ($linkPages as $label => $file): ?>
        <button type="button" data-href="@@asset:<?php echo e($file); ?>@@"><?php echo e($label); ?></button>
      <?php endforeach; ?>
      <?php foreach ($linkPosts as $pslug => $ptitle): ?>
        <button type="button" data-href="@@post:<?php echo e($pslug); ?>@@"><?php echo e($ptitle); ?></button>
      <?php endforeach; ?>
    </div>

    <h3>External URL</h3>
    <div class="adm-field-row">
      <label class="adm-field">
        <span>URL</span>
        <input type="url" id="linkUrl" placeholder="https://example.com/page" autocomplete="off">
      </label>
    </div>
    <label class="adm-toggle">
      <input type="checkbox" id="linkBlank" checked>
      <span>opens in new tab</span>
    </label>
    <div class="adm-page-actions">
      <button type="button" id="linkInsert" class="adm-btn adm-btn-primary">Insert</button>
    </div>
  </div>
</div>

<?php
$admPost = [
    'slug'      => (string) $src['slug'],
    'status'    => (string) ($src['status'] ?? 'draft'),
    'source'    => (string) ($src['source'] ?? 'admin'),
    'registry'  => $reg,
    'seo'       => $seo,
    'body'      => (string) ($src['body'] ?? ''),
    'faqs'      => array_values((array) ($src['faqs'] ?? [])),
    'read_auto' => $readAuto,
];
?>
<script>
window.ADM_POST = <?php echo json_encode($admPost, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG); ?>;
</script>

<script>
/* Create a blog category without leaving the editor, then select it. */
(function () {
  'use strict';
  var btn  = document.getElementById('btnNewCat');
  var box  = document.getElementById('newCatBox');
  var name = document.getElementById('newCatName');
  var tone = document.getElementById('newCatTone');
  var add  = document.getElementById('newCatAdd');
  var sel  = document.getElementById('f_category');
  if (!btn || !box || !add || !sel) return;

  function toggle(show) {
    box.hidden = (show === undefined) ? !box.hidden : !show;
    if (!box.hidden) { name.focus(); }
  }
  btn.addEventListener('click', function () { toggle(); });

  function submit() {
    var label = (name.value || '').trim();
    if (label === '') { name.focus(); return; }
    add.disabled = true;
    var fd = new FormData();
    fd.append('action', 'cat_add');
    fd.append('csrf', window.ADM_CSRF);
    fd.append('label', label);
    fd.append('tone', tone.value);
    fetch('post-actions.php', {
      method: 'POST', body: fd,
      headers: { 'X-CSRF-Token': window.ADM_CSRF },
      credentials: 'same-origin'
    }).then(function (r) { return r.json(); }).then(function (res) {
      add.disabled = false;
      if (!res || !res.ok) { alert((res && res.error) || 'Could not add the category.'); return; }
      var exists = Array.prototype.some.call(sel.options, function (o) { return o.value === res.added; });
      if (!exists) {
        var opt = document.createElement('option');
        opt.value = res.added; opt.textContent = res.added;
        sel.appendChild(opt);
      }
      sel.value = res.added;
      sel.dispatchEvent(new Event('change', { bubbles: true }));
      name.value = '';
      toggle(false);
    }).catch(function () { add.disabled = false; alert('Network error while adding the category.'); });
  }
  add.addEventListener('click', submit);
  name.addEventListener('keydown', function (e) {
    if (e.key === 'Enter') { e.preventDefault(); submit(); }
  });
})();
</script>

<?php admin_layout_end(); ?>

<?php
/**
 * AJAX endpoint for the blog editor: save / preview / publish / unpublish /
 * delete / image uploads / legacy import. JSON in, JSON out, CSRF on every hit.
 */

require_once __DIR__ . '/includes/auth.php';
$user = admin_require_module('posts');
require_once __DIR__ . '/includes/post-store.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'POST only.']);
    exit;
}
admin_verify_csrf();

function pa_out(bool $ok, array $extra = []): void {
    echo json_encode(array_merge(['ok' => $ok], $extra), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    exit;
}

$action = (string) ($_POST['action'] ?? '');
$slug   = strtolower(trim((string) ($_POST['slug'] ?? '')));

/* ------------------------------------------------------------------ save */

function pa_collect_and_save(string $slug): array {
    /* The editor sends the currently-saved slug separately so a draft rename
       moves the JSON source instead of orphaning it. Fall back to the plain
       slug field for callers that do not send orig_slug. */
    $origSlug = admin_slugify((string) ($_POST['orig_slug'] ?? ''));
    if ($origSlug === '' && $slug !== '' && post_source($slug)) {
        $origSlug = $slug;
    }
    $existing = $origSlug !== '' ? post_source($origSlug) : null;

    /* Slug rules: derive from title when empty; locked once published. */
    $requested = admin_slugify((string) ($_POST['slug'] ?? ''));
    if ($requested === '') {
        $requested = admin_slugify((string) ($_POST['title'] ?? ''));
    }
    if ($requested === '') {
        return [null, 'Give the post a title first - the link (slug) comes from it.'];
    }

    if ($existing && ($existing['status'] ?? '') === 'published' && $requested !== $origSlug) {
        return [null, 'This post is live - its link is locked. Unpublish first if you really need to change it.'];
    }

    if (!$existing) {
        /* New post: the slug must not collide with a live page or source. */
        if (post_source($requested) || is_file(SITE_BLOGS_DIR . '/' . $requested . '.php')) {
            return [null, 'A post with that link already exists. Pick a different title or slug.'];
        }
        $slug = $requested;
    } elseif (($existing['status'] ?? '') !== 'published' && $requested !== $origSlug) {
        /* Draft rename: move the JSON source if the slug changed. */
        if (post_source($requested) || is_file(SITE_BLOGS_DIR . '/' . $requested . '.php')) {
            return [null, 'A post with that link already exists.'];
        }
        @unlink(post_source_path($origSlug));
        $slug = $requested;
    } else {
        $slug = $origSlug;
    }

    $faqs = json_decode((string) ($_POST['faqs'] ?? '[]'), true);
    if (!is_array($faqs)) $faqs = [];
    $cleanFaqs = [];
    foreach ($faqs as $faq) {
        $q = pgp_sanitize_faq_text((string) ($faq['q'] ?? ''));
        $a = pgp_sanitize_faq_text((string) ($faq['a'] ?? ''));
        if ($q !== '' && $a !== '') $cleanFaqs[] = ['q' => $q, 'a' => $a];
    }

    $body = ukph_sanitize_body((string) ($_POST['body'] ?? ''));

    $readAuto = ($_POST['read_auto'] ?? '1') === '1';
    $readManual = trim((string) ($_POST['read'] ?? ''));
    if (!$readAuto && !preg_match('~^\d{1,3} min read$~', $readManual)) {
        $readManual = admin_read_time_label(max(3, (int) $readManual));
    }
    $read = $readAuto ? admin_read_time_label(admin_read_time_minutes($body)) : $readManual;

    $date = trim((string) ($_POST['date'] ?? ''));
    if (!preg_match('~^\d{4}-\d{2}-\d{2}$~', $date)) $date = date('Y-m-d');

    $category = (string) ($_POST['category'] ?? '');
    if (!isset(blog_categories()[$category])) $category = 'Publishing';

    $glyph = trim((string) ($_POST['glyph'] ?? ''));
    if ($glyph === '' || mb_strlen($glyph) > 2) $glyph = '✦';

    $src = $existing ?: [
        'slug'      => $slug,
        'status'    => 'draft',
        'source'    => 'admin',
        'brief_raw' => '',
        'created'   => date('c'),
    ];
    $src['slug'] = $slug;
    $src['registry'] = [
        'title'    => trim(pgp_sanitize_faq_text((string) ($_POST['title'] ?? ''))),
        'excerpt'  => trim(pgp_sanitize_faq_text((string) ($_POST['excerpt'] ?? ''))),
        'date'     => $date,
        'category' => $category,
        'author'   => trim(pgp_sanitize_faq_text((string) ($_POST['author'] ?? ''))) ?: SITE_NAME . ' Editorial',
        'read'     => $read,
        'image'    => $src['registry']['image'] ?? ($existing['registry']['image'] ?? ''),
        'glyph'    => $glyph,
    ];
    $src['seo'] = [
        'page_title'       => trim(pgp_sanitize_faq_text((string) ($_POST['seo_title'] ?? ''))),
        'page_description' => trim(pgp_sanitize_faq_text((string) ($_POST['seo_description'] ?? ''))),
        'page_keywords'    => trim(pgp_sanitize_faq_text((string) ($_POST['seo_keywords'] ?? ''))),
    ];
    $src['body'] = $body;
    $src['faqs'] = $cleanFaqs;
    $src['read_auto'] = $readAuto;

    if (!post_source_save($src)) {
        return [null, 'Could not save the draft (admin/data/posts not writable?).'];
    }
    return [$src, null];
}

switch ($action) {

    case 'save': {
        [$src, $err] = pa_collect_and_save($slug);
        if ($err) pa_out(false, ['error' => $err]);
        pa_out(true, [
            'slug'   => $src['slug'],
            'status' => $src['status'],
            'read'   => $src['registry']['read'],
            'saved'  => date('H:i:s'),
        ]);
    }

    case 'preview': {
        [$src, $err] = pa_collect_and_save($slug);
        if ($err) pa_out(false, ['error' => $err]);
        [$ok, $msg] = post_preview($src);
        pa_out($ok, $ok ? ['url' => $msg, 'slug' => $src['slug']] : ['error' => $msg]);
    }

    case 'publish': {
        [$src, $err] = pa_collect_and_save($slug);
        if ($err) pa_out(false, ['error' => $err]);
        [$ok, $msg] = post_publish($src['slug']);
        pa_out($ok, $ok
            ? ['message' => $msg, 'slug' => $src['slug'], 'status' => 'published']
            : ['error' => $msg]);
    }

    case 'unpublish': {
        if (!pgp_token_valid_slug($slug)) pa_out(false, ['error' => 'Bad slug.']);
        [$ok, $msg] = post_unpublish($slug);
        pa_out($ok, $ok ? ['message' => $msg, 'status' => 'draft'] : ['error' => $msg]);
    }

    case 'delete': {
        if (!pgp_token_valid_slug($slug)) pa_out(false, ['error' => 'Bad slug.']);
        [$ok, $msg] = post_delete($slug);
        pa_out($ok, $ok ? ['message' => $msg] : ['error' => $msg]);
    }

    case 'import': {
        if (!pgp_token_valid_slug($slug)) pa_out(false, ['error' => 'Bad slug.']);
        if (post_source($slug)) pa_out(true, ['slug' => $slug]);
        $src = post_import($slug);
        $src ? pa_out(true, ['slug' => $slug]) : pa_out(false, ['error' => 'Could not import that post.']);
    }

    case 'upload_featured': {
        if (!pgp_token_valid_slug($slug)) pa_out(false, ['error' => 'Save the draft once before adding a cover.']);
        $src = post_source($slug);
        if (!$src) pa_out(false, ['error' => 'Save the draft once before adding a cover.']);
        [$ok, $res] = admin_upload_image_webp($_FILES['image'] ?? [], 'assets/images/blog', $slug);
        if (!$ok) pa_out(false, ['error' => $res]);
        $src['registry']['image'] = $res;
        post_source_save($src);
        if (($src['status'] ?? '') === 'published') {
            registry_upsert(array_merge(['slug' => $slug], $src['registry']));
        }
        pa_out(true, ['image' => $res, 'url' => '../' . $res]);
    }

    case 'upload_inline': {
        $hint = $slug !== '' ? $slug . '-' . substr(bin2hex(random_bytes(3)), 0, 5) : 'inline-' . substr(bin2hex(random_bytes(3)), 0, 5);
        [$ok, $res] = admin_upload_image_webp($_FILES['image'] ?? [], 'assets/images/blog', $hint);
        $ok ? pa_out(true, ['image' => $res, 'token' => '@@asset:' . $res . '@@', 'url' => '../' . $res])
            : pa_out(false, ['error' => $res]);
    }

    case 'cat_add': {
        /* Create a blog category from inside the editor, then return the full
           list so the dropdown can refresh and select the new one. */
        $label = trim((string) ($_POST['label'] ?? ''));
        $tone  = (string) ($_POST['tone'] ?? 'note-purple');
        $tones = blog_category_tones();
        if (!isset($tones[$tone])) { $tone = 'note-purple'; }
        if ($label === '' || !preg_match("~^[A-Za-z0-9 &'-]{2,40}$~", $label)) {
            pa_out(false, ['error' => 'Category name must be 2 to 40 letters, numbers or spaces.']);
        }
        $list = [];
        foreach (blog_categories() as $c) { $list[$c['label']] = $c['tone']; }
        if (isset($list[$label])) {
            pa_out(false, ['error' => 'A category called "' . $label . '" already exists.']);
        }
        $list[$label] = $tone;
        $out = [];
        foreach ($list as $l => $t) { $out[] = ['label' => $l, 'tone' => $t]; }
        if (!admin_json_write(ADMIN_DATA_DIR . '/blog-categories.json', $out)) {
            pa_out(false, ['error' => 'Could not save the categories file (admin/data not writable?).']);
        }
        pa_out(true, ['added' => $label, 'categories' => array_keys($list)]);
    }

    default:
        pa_out(false, ['error' => 'Unknown action.']);
}

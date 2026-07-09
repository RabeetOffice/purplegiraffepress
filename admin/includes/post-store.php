<?php
/**
 * Blog post store + publish pipeline.
 *
 * - JSON sources in admin/data/posts/<slug>.json are the admin's truth.
 * - Publishing generates blogs/<slug>.php from a template derived verbatim
 *   from the brand's newest hand-built post, and surgically upserts one entry
 *   in includes/blog-data.php (every untouched entry stays byte-identical).
 * - sitemap.xml carries an auto-managed Blog block: publish and unpublish
 *   rewrite it (sitemap_sync_blog) so the sitemap always lists the blog index
 *   plus every published post. Blog pages are indexable like the rest of the site.
 * - Internal links use placeholder tokens in stored bodies:
 *     @@asset:page.php@@  ->  <?php echo e(asset('page.php')); ?>
 *     @@post:slug@@       ->  <?php echo e(blog_post_url('slug')); ?>
 *   so stored HTML never contains live PHP, and imports round-trip exactly.
 */

if (!defined('PGP_ADMIN')) { http_response_code(404); exit; }

require_once SITE_ROOT . '/includes/blog-data.php';

define('ADMIN_POSTS_DIR', ADMIN_DATA_DIR . '/posts');
define('SITE_BLOGS_DIR', SITE_ROOT . '/blogs');
define('SITE_TRASH_DIR', SITE_ROOT . '/trash');
define('SITE_REGISTRY_FILE', SITE_ROOT . '/includes/blog-data.php');
define('ADMIN_PREVIEW_FILE', SITE_BLOGS_DIR . '/admin-preview.php');
define('SITE_SITEMAP_FILE', SITE_ROOT . '/sitemap.xml');

/* ================================================================ PHP guard */

/**
 * Remove every PHP open/close sequence from a string. Belt-and-braces pass on
 * top of the DOM sanitizer's processing-instruction removal.
 * (Note: the close tag is spelled with a dot below because a literal one would
 * end this PHP file - never put a real close tag in a line comment.)
 */
function ukph_strip_php(string $s): string {
    /* Remove complete <? ... ?.> blocks, then any dangling <? opener. */
    $s = preg_replace('~<\?(?:php|=)?[\s\S]*?\?' . '>~i', '', $s);
    $s = preg_replace('~<\?[\s\S]*$~', '', (string) $s);
    return (string) $s;
}

/* ============================================================== link tokens */

function pgp_token_valid_asset(string $path): bool {
    return $path !== ''
        && strpos($path, '..') === false
        && (bool) preg_match('~^[a-zA-Z0-9][a-zA-Z0-9./_\-]*$~', $path);
}

function pgp_token_valid_slug(string $slug): bool {
    return (bool) preg_match('~^[a-z0-9][a-z0-9\-]*$~', $slug);
}

/** Stored-body tokens -> live PHP echoes (run LAST, after ukph_strip_php). */
function pgp_tokens_to_php(string $html): string {
    $html = preg_replace_callback('~@@asset:([^@\s"\'<>]*)@@~', function ($m) {
        return pgp_token_valid_asset($m[1])
            ? "<?php echo e(asset('" . $m[1] . "')); ?>"
            : '#';
    }, $html);
    $html = preg_replace_callback('~@@post:([^@\s"\'<>]*)@@~', function ($m) {
        return pgp_token_valid_slug($m[1])
            ? "<?php echo e(blog_post_url('" . $m[1] . "')); ?>"
            : '#';
    }, $html);
    return (string) $html;
}

/** Live PHP echoes -> stored-body tokens (import path). */
function pgp_php_to_tokens(string $php): string {
    $php = preg_replace_callback(
        "~<\\?php echo e\\(asset\\('((?:[^'\\\\]|\\\\.)*)'\\)\\); \\?>~",
        function ($m) { return '@@asset:' . stripcslashes($m[1]) . '@@'; },
        $php
    );
    $php = preg_replace_callback(
        "~<\\?php echo e\\(blog_post_url\\('((?:[^'\\\\]|\\\\.)*)'\\)\\); \\?>~",
        function ($m) { return '@@post:' . stripcslashes($m[1]) . '@@'; },
        $php
    );
    return (string) $php;
}

/* ================================================================ sanitizer */

/**
 * Hard whitelist sanitizer for article bodies coming from the editor.
 * Keeps only element + text nodes (comments, CDATA and PHP processing
 * instructions are dropped - a PI left in place would be re-emitted into the
 * generated .php file and execute). Unknown tags are unwrapped, heading levels
 * outside h2-h4 are demoted, attributes are per-tag whitelisted, URLs are
 * scheme-checked and inline event handlers can never survive.
 */
function ukph_sanitize_body(string $html): string {
    if (trim($html) === '') return '';

    $allowedTags = [
        'p','h2','h3','h4','ul','ol','li','table','thead','tbody','tr','td','th',
        'blockquote','cite','figure','figcaption','hr','a','img','b','strong','i',
        'em','u','br','span','sub','sup','div',
    ];
    $allowedAttrs = [
        'a'    => ['href','target','rel','class'],
        'img'  => ['src','alt','width','height','loading','class'],
        'td'   => ['colspan','rowspan'],
        'th'   => ['colspan','rowspan'],
        'div'  => ['class'],
        'span' => ['class'],
        'p'    => ['class'],
        'table'=> ['class'],
        'ul'   => ['class'],
        'ol'   => ['class'],
        'blockquote' => ['class'],
    ];
    $dropWithContent = ['script','style','iframe','object','embed','form','input','button','textarea','select','link','meta','base'];

    $prev = libxml_use_internal_errors(true);
    $dom  = new DOMDocument('1.0', 'UTF-8');
    $dom->loadHTML(
        '<?xml encoding="utf-8"?><html><body><div id="__adm_root">' . $html . '</div></body></html>',
        LIBXML_NOERROR | LIBXML_NOWARNING
    );
    libxml_clear_errors();
    libxml_use_internal_errors($prev);

    $root = $dom->getElementById('__adm_root');
    if (!$root) return '';

    ukph_walk_sanitize($root, $dom, $allowedTags, $allowedAttrs, $dropWithContent);

    $out = '';
    foreach ($root->childNodes as $child) {
        $out .= $dom->saveHTML($child);
    }

    /* saveHTML entity-encodes non-ASCII text; put real UTF-8 back while keeping
       the four structural entities encoded so markup can never be smuggled. */
    $out = preg_replace_callback('~&(#\d+|#x[0-9a-fA-F]+|[a-zA-Z][a-zA-Z0-9]{1,31});~', function ($m) {
        $keep = ['amp', 'lt', 'gt', 'quot', '#039', '#39', 'apos'];
        if (in_array(strtolower($m[1]), $keep, true)) return $m[0];
        $decoded = html_entity_decode($m[0], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        if ($decoded === $m[0]) return $m[0];
        if (strpbrk($decoded, '<>"') !== false || $decoded === '&') return $m[0];
        return $decoded;
    }, $out);

    return trim(ukph_strip_php((string) $out));
}

function ukph_walk_sanitize(DOMNode $node, DOMDocument $dom, array $allowedTags, array $allowedAttrs, array $dropWithContent): void {
    $children = [];
    foreach ($node->childNodes as $child) { $children[] = $child; }

    foreach ($children as $child) {
        /* CRITICAL: keep only element + text nodes. Comments, CDATA and PHP
           processing instructions are removed outright. */
        if ($child->nodeType !== XML_ELEMENT_NODE && $child->nodeType !== XML_TEXT_NODE) {
            $node->removeChild($child);
            continue;
        }
        if ($child->nodeType === XML_TEXT_NODE) continue;

        $tag = strtolower($child->nodeName);

        if (in_array($tag, $dropWithContent, true)) {
            $node->removeChild($child);
            continue;
        }

        /* Demote out-of-range headings to the house range h2-h4. */
        if ($tag === 'h1' || $tag === 'h5' || $tag === 'h6') {
            $newTag = $tag === 'h1' ? 'h2' : 'h4';
            $repl = $dom->createElement($newTag);
            while ($child->firstChild) { $repl->appendChild($child->firstChild); }
            $node->replaceChild($repl, $child);
            $child = $repl;
            $tag = $newTag;
        }

        if (!in_array($tag, $allowedTags, true)) {
            /* Unwrap: keep children, drop the tag itself. */
            while ($child->firstChild) {
                $node->insertBefore($child->firstChild, $child);
            }
            $node->removeChild($child);
            continue;
        }

        /* Attribute whitelist. */
        if ($child->hasAttributes()) {
            $attrs = [];
            foreach ($child->attributes as $attr) { $attrs[] = $attr->nodeName; }
            $keep = $allowedAttrs[$tag] ?? [];
            foreach ($attrs as $name) {
                $lname = strtolower($name);
                if (!in_array($lname, $keep, true) || strncmp($lname, 'on', 2) === 0) {
                    $child->removeAttribute($name);
                    continue;
                }
                $value = (string) $child->getAttribute($name);
                if ($lname === 'href' || $lname === 'src') {
                    if (!pgp_safe_url($value, $lname === 'src')) {
                        $child->removeAttribute($name);
                        continue;
                    }
                }
                if ($lname === 'class') {
                    $clean = trim(preg_replace('~[^a-zA-Z0-9 _\-]~', '', $value));
                    if ($clean === '') { $child->removeAttribute($name); continue; }
                    $child->setAttribute($name, $clean);
                }
                if ($lname === 'target' && $value !== '_blank') {
                    $child->removeAttribute($name);
                }
                if (($lname === 'colspan' || $lname === 'rowspan' || $lname === 'width' || $lname === 'height')
                    && !preg_match('~^\d{1,4}$~', $value)) {
                    $child->removeAttribute($name);
                }
            }
            /* target=_blank must always carry rel=noopener. */
            if ($tag === 'a' && $child->getAttribute('target') === '_blank') {
                $rel = $child->getAttribute('rel');
                if (strpos($rel, 'noopener') === false) {
                    $child->setAttribute('rel', trim($rel . ' noopener'));
                }
            }
        }

        ukph_walk_sanitize($child, $dom, $allowedTags, $allowedAttrs, $dropWithContent);
    }
}

/** Allow http(s), mailto, tel, anchors, relative paths and our @@ tokens. */
function pgp_safe_url(string $url, bool $isImage = false): bool {
    $url = trim($url);
    if ($url === '') return false;
    if (strncmp($url, '@@', 2) === 0) {
        /* Link tokens must be fully valid or they are dropped outright. */
        if (preg_match('~^@@asset:([^@]*)@@$~', $url, $m)) return pgp_token_valid_asset($m[1]);
        if (preg_match('~^@@post:([^@]*)@@$~', $url, $m)) return pgp_token_valid_slug($m[1]);
        return false;
    }
    if (preg_match('~^(https?:)?//~i', $url)) return true;
    if (!$isImage && preg_match('~^(mailto|tel):~i', $url)) return true;
    if ($url[0] === '#') return !$isImage;
    if (preg_match('~^[a-zA-Z][a-zA-Z0-9+.\-]*:~', $url)) return false; // any other scheme (javascript:, data:, ...)
    if (strpos($url, '..') !== false) return false;
    return true; // relative path
}

/** FAQ q/a are plain text in this brand's posts: strip tags + PHP. */
function pgp_sanitize_faq_text(string $s): string {
    $s = ukph_strip_php($s);
    $s = strip_tags($s);
    $s = str_replace(["\r", "\n"], ' ', $s);
    return trim(preg_replace('~\s{2,}~u', ' ', $s));
}

/* ============================================================= JSON sources */

function post_source_path(string $slug): string {
    return ADMIN_POSTS_DIR . '/' . $slug . '.json';
}

function post_source(string $slug): ?array {
    if (!pgp_token_valid_slug($slug)) return null;
    $data = admin_json_read(post_source_path($slug), null);
    return is_array($data) ? $data : null;
}

function post_source_save(array $src): bool {
    if (!is_dir(ADMIN_POSTS_DIR)) { @mkdir(ADMIN_POSTS_DIR, 0775, true); }
    $src['updated'] = date('c');
    return admin_json_write(post_source_path((string) $src['slug']), $src);
}

/** All posts the admin knows about: JSON sources + registry-only legacy posts. */
function post_admin_index(): array {
    $out = [];
    foreach (glob(ADMIN_POSTS_DIR . '/*.json') ?: [] as $file) {
        $src = admin_json_read($file, null);
        if (is_array($src) && !empty($src['slug'])) {
            $out[$src['slug']] = [
                'slug'     => $src['slug'],
                'status'   => $src['status'] ?? 'draft',
                'source'   => $src['source'] ?? 'admin',
                'registry' => $src['registry'] ?? [],
                'updated'  => $src['updated'] ?? '',
            ];
        }
    }
    foreach (blog_all_posts() as $post) {
        if (!isset($out[$post['slug']])) {
            $out[$post['slug']] = [
                'slug'     => $post['slug'],
                'status'   => 'published',
                'source'   => 'legacy',
                'registry' => $post,
                'updated'  => '',
            ];
        }
    }
    /* Sort: drafts first (recently updated on top), then published by date. */
    uasort($out, function ($a, $b) {
        $da = $a['registry']['date'] ?? '';
        $db = $b['registry']['date'] ?? '';
        return strcmp($db . $a['slug'], $da . $b['slug']);
    });
    return $out;
}

/* =========================================================== literal parsing */

/** Decode one PHP string literal token ('...' or "..."). */
function pgp_decode_literal(string $lit): string {
    $q = $lit[0] ?? '';
    $inner = substr($lit, 1, -1);
    if ($q === "'") {
        return str_replace(["\\\\", "\\'"], ['\\', "'"], $inner);
    }
    return stripcslashes($inner);
}

/**
 * Find the [ ... ] region that starts at $openPos (the '[') using a
 * bracket-depth scan where string literals are atomic - so a "];" inside an
 * answer can never end the scan early.
 */
function pgp_scan_bracket_region(string $code, int $openPos): ?array {
    $depth = 0;
    $len = strlen($code);
    for ($i = $openPos; $i < $len; $i++) {
        $c = $code[$i];
        if ($c === "'" || $c === '"') {
            $q = $c;
            $i++;
            while ($i < $len) {
                if ($code[$i] === '\\') { $i += 2; continue; }
                if ($code[$i] === $q) break;
                $i++;
            }
            continue;
        }
        if ($c === '[') { $depth++; }
        if ($c === ']') {
            $depth--;
            if ($depth === 0) {
                return [$openPos, $i];
            }
        }
    }
    return null;
}

/** Extract ['q' => ..., 'a' => ...] pairs from a $page_faqs array literal. */
function pgp_parse_faq_literal(string $arrayCode): array {
    $lit = "('(?:[^'\\\\]|\\\\.)*'|\"(?:[^\"\\\\]|\\\\.)*\")";
    $faqs = [];
    if (preg_match_all("~\\[\\s*'q'\\s*=>\\s*{$lit}\\s*,\\s*'a'\\s*=>\\s*{$lit}\\s*,?\\s*\\]~s", $arrayCode, $m, PREG_SET_ORDER)) {
        foreach ($m as $row) {
            $faqs[] = ['q' => pgp_decode_literal($row[1]), 'a' => pgp_decode_literal($row[2])];
        }
    }
    return $faqs;
}

/** Parse 'key' => literal pairs out of one registry entry block. */
function pgp_parse_entry_fields(string $block): array {
    $lit = "('(?:[^'\\\\]|\\\\.)*'|\"(?:[^\"\\\\]|\\\\.)*\")";
    $fields = [];
    if (preg_match_all("~'([a-z_]+)'\\s*=>\\s*{$lit}~s", $block, $m, PREG_SET_ORDER)) {
        foreach ($m as $row) {
            $fields[$row[1]] = pgp_decode_literal($row[2]);
        }
    }
    return $fields;
}

/* ============================================================ registry file */

/**
 * Parse includes/blog-data.php into [prefix, entries, suffix] where each entry
 * keeps its raw block verbatim. Untouched entries are written back unchanged.
 */
function registry_parse(): ?array {
    $code = @file_get_contents(SITE_REGISTRY_FILE);
    if ($code === false) return null;

    $marker = '$blog_posts = [';
    $start = strpos($code, $marker);
    if ($start === false) return null;
    $open = $start + strlen($marker) - 1;
    $region = pgp_scan_bracket_region($code, $open);
    if ($region === null) return null;
    [$openPos, $closePos] = $region;

    $prefix = substr($code, 0, $openPos + 1);
    $inner  = substr($code, $openPos + 1, $closePos - $openPos - 1);
    $suffix = substr($code, $closePos);

    /* Split the inner region into top-level [ ... ], entry blocks. */
    $entries = [];
    $len = strlen($inner);
    $i = 0;
    while ($i < $len) {
        $c = $inner[$i];
        if ($c === '[') {
            $reg = pgp_scan_bracket_region($inner, $i);
            if ($reg === null) break;
            [$s, $e] = $reg;
            $end = $e;
            if (isset($inner[$end + 1]) && $inner[$end + 1] === ',') $end++;
            /* Include the line's leading indentation in the raw block. */
            $lineStart = $s;
            while ($lineStart > 0 && ($inner[$lineStart - 1] === ' ' || $inner[$lineStart - 1] === "\t")) {
                $lineStart--;
            }
            $raw = substr($inner, $lineStart, $end - $lineStart + 1);
            $fields = pgp_parse_entry_fields($raw);
            if (!empty($fields['slug'])) {
                $entries[] = ['slug' => $fields['slug'], 'raw' => $raw, 'data' => $fields];
            }
            $i = $end + 1;
            continue;
        }
        $i++;
    }

    return ['prefix' => $prefix, 'entries' => $entries, 'suffix' => $suffix];
}

/** Render one registry entry in the file's house style. */
function registry_render_entry(array $d): string {
    $lines = ["    ["];
    $keys = ['slug', 'title', 'excerpt', 'date', 'category', 'author', 'read', 'image', 'glyph'];
    foreach ($keys as $key) {
        $value = (string) ($d[$key] ?? '');
        if ($value === '' && ($key === 'image' || $key === 'glyph')) continue;
        $pad = str_pad("'" . $key . "'", 11);
        $lines[] = "        " . $pad . "=> '" . admin_php_sq($value) . "',";
    }
    $lines[] = "    ],";
    return implode("\n", $lines);
}

/** Rebuild the registry file from parsed pieces; lint before replacing. */
function registry_write(array $parsed): array {
    $blocks = [];
    foreach ($parsed['entries'] as $entry) {
        $blocks[] = $entry['raw'];
    }
    $inner = $blocks ? ("\n" . implode("\n", $blocks) . "\n") : "\n";
    $code  = $parsed['prefix'] . $inner . $parsed['suffix'];

    if (!php_check_syntax_string($code)) {
        return [false, 'The regenerated blog index failed PHP lint - nothing was written.'];
    }
    if (!admin_replace_site_file(SITE_REGISTRY_FILE, $code)) {
        return [false, 'Could not write includes/blog-data.php (permissions?).'];
    }
    return [true, 'ok'];
}

/** Insert or update one entry; identical data leaves the file untouched. */
function registry_upsert(array $data): array {
    $parsed = registry_parse();
    if ($parsed === null) {
        return [false, 'Could not parse includes/blog-data.php - registry format not recognised.'];
    }

    $slug = (string) $data['slug'];
    $rendered = registry_render_entry($data);
    $found = false;

    foreach ($parsed['entries'] as $i => $entry) {
        if ($entry['slug'] === $slug) {
            $found = true;
            $same = true;
            foreach (['slug','title','excerpt','date','category','author','read','image','glyph'] as $key) {
                if ((string) ($entry['data'][$key] ?? '') !== (string) ($data[$key] ?? '')) { $same = false; break; }
            }
            if ($same) return [true, 'unchanged'];
            $parsed['entries'][$i]['raw'] = $rendered;
            $parsed['entries'][$i]['data'] = $data;
            break;
        }
    }

    if (!$found) {
        /* Keep the file ordered newest first, matching the house style. */
        $inserted = false;
        foreach ($parsed['entries'] as $i => $entry) {
            if (strcmp((string) ($entry['data']['date'] ?? ''), (string) ($data['date'] ?? '')) <= 0) {
                array_splice($parsed['entries'], $i, 0, [['slug' => $slug, 'raw' => $rendered, 'data' => $data]]);
                $inserted = true;
                break;
            }
        }
        if (!$inserted) {
            $parsed['entries'][] = ['slug' => $slug, 'raw' => $rendered, 'data' => $data];
        }
    }

    return registry_write($parsed);
}

function registry_delete(string $slug): array {
    $parsed = registry_parse();
    if ($parsed === null) {
        return [false, 'Could not parse includes/blog-data.php.'];
    }
    $before = count($parsed['entries']);
    $parsed['entries'] = array_values(array_filter($parsed['entries'], function ($e) use ($slug) {
        return $e['slug'] !== $slug;
    }));
    if (count($parsed['entries']) === $before) return [true, 'unchanged'];
    return registry_write($parsed);
}

/* ============================================================ post template */

/**
 * The generated-post template, byte-derived from
 * blogs/why-every-childrens-story-deserves-custom-illustration.php.
 * Only %%...%% placeholders vary per post; every other byte is verbatim.
 */
function post_template(): string {
    return <<<'TPL'
<?php
$GLOBALS['asset_base'] = '../';
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/blog-data.php';

%%BRIEF%%

$current_slug = '%%SLUG%%';
$post = blog_get_post($current_slug);

$page_title       = "%%PAGE_TITLE%%";
$page_description = "%%PAGE_DESC%%";
$canonical_path   = blog_post_path($current_slug);
$canonical_url    = page_url($canonical_path);
$share_url        = $canonical_url;
$breadcrumbs = [
    ['name' => 'Home', 'url' => page_url('index.php')],
    ['name' => 'Blog', 'url' => page_url('blogs/')],
    ['name' => $post['title'], 'url' => $canonical_url],
];

/* Per-post FAQs power both the accordion and FAQPage schema in <head>. */
$page_faqs = [
%%FAQS%%
];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/blog-schema.php';
require __DIR__ . '/../includes/blog-post-header.php';
?>

<section class="section section-white blog-single">
  <div class="container blog-layout">
    <div class="blog-main">
    <article class="blog-content">

%%BODY%%

      <?php require __DIR__ . '/../includes/blog-inline-cta.php'; ?>
      </article>

      <?php $faq_mode = 'column'; require __DIR__ . '/../includes/blog-faq.php'; ?>
      <?php require __DIR__ . '/../includes/blog-author.php'; ?>
    </div>

    <?php require __DIR__ . '/../includes/blog-sidebar.php'; ?>
  </div>
</section>

<?php require __DIR__ . '/../includes/blog-recent.php'; ?>
<?php require __DIR__ . '/../includes/cta.php'; ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>

TPL;
}

/** FAQ array lines in the house one-line-per-entry style. */
function post_faqs_literal(array $faqs): string {
    $lines = [];
    foreach ($faqs as $faq) {
        $q = pgp_sanitize_faq_text((string) ($faq['q'] ?? ''));
        $a = pgp_sanitize_faq_text((string) ($faq['a'] ?? ''));
        if ($q === '' || $a === '') continue;
        $lines[] = "    ['q' => '" . admin_php_sq($q) . "', 'a' => '" . admin_php_sq($a) . "'],";
    }
    return implode("\n", $lines);
}

/** Editors' content-brief comment for new posts (imported posts keep theirs). */
function post_default_brief(array $src): string {
    $seo = $src['seo'] ?? [];
    $reg = $src['registry'] ?? [];
    $keyword = trim((string) ($seo['page_keywords'] ?? ''));
    $lines = [
        '/* ----------------------------------------------------------------------------',
        ' * CONTENT BRIEF (for editors, not rendered)',
    ];
    if ($keyword !== '') {
        $parts = array_map('trim', explode(',', $keyword));
        $lines[] = ' *   Target keyword:  ' . str_replace('*/', '', $parts[0]);
        if (count($parts) > 1) {
            $lines[] = ' *   Secondary:       ' . str_replace('*/', '', implode(', ', array_slice($parts, 1)));
        }
    }
    $lines[] = ' *   Meta title:      ' . str_replace('*/', '', (string) ($seo['page_title'] ?? $reg['title'] ?? ''));
    $lines[] = ' *   Meta desc:       see $page_description below (~155 chars)';
    $lines[] = ' *   Author:          ' . str_replace('*/', '', (string) ($reg['author'] ?? '')) . ' (published via the admin studio)';
    $lines[] = ' * ------------------------------------------------------------------------- */';
    return implode("\n", $lines);
}

/** Build the final blogs/<slug>.php content for a post source. */
function post_generate(array $src): string {
    $slug = (string) $src['slug'];
    $seo  = $src['seo'] ?? [];
    $body = (string) ($src['body'] ?? '');

    /* PHP can never ride in on content: strip any tag sequences first, then
       swap the validated link tokens for the house PHP echoes. */
    $body = ukph_strip_php($body);
    $body = pgp_tokens_to_php($body);
    $body = rtrim($body);

    $brief = trim((string) ($src['brief_raw'] ?? ''));
    /* brief_raw is only ever an editor's content-brief block copied verbatim
       from an imported post file (never editor POST input). Belt-and-braces:
       accept it only when it is a pure /* ... *​/ comment with no PHP tags, so
       it can never smuggle executable code into the generated file. */
    if ($brief === '' || !preg_match('~^/\*[\s\S]*\*/$~', $brief) || ukph_strip_php($brief) !== $brief) {
        $brief = post_default_brief($src);
    }

    $tpl = post_template();
    return str_replace(
        ['%%BRIEF%%', '%%SLUG%%', '%%PAGE_TITLE%%', '%%PAGE_DESC%%', '%%FAQS%%', '%%BODY%%'],
        [
            $brief,
            admin_php_sq($slug),
            admin_php_dq(pgp_sanitize_faq_text((string) ($seo['page_title'] ?? ''))),
            admin_php_dq(pgp_sanitize_faq_text((string) ($seo['page_description'] ?? ''))),
            post_faqs_literal((array) ($src['faqs'] ?? [])),
            $body,
        ],
        $tpl
    );
}

/* ================================================================== import */

/**
 * Parse a hand-built blogs/<slug>.php into an admin JSON source. Bodies keep
 * their exact bytes (with PHP link echoes swapped for tokens), so regenerating
 * an unedited import reproduces the original file byte for byte.
 */
function post_import(string $slug): ?array {
    if (!pgp_token_valid_slug($slug)) return null;
    $file = SITE_BLOGS_DIR . '/' . $slug . '.php';
    $code = @file_get_contents($file);
    if ($code === false) return null;
    $code = str_replace("\r\n", "\n", $code);

    /* Preamble scalars. */
    $title = $desc = '';
    if (preg_match('~\$page_title\s+=\s+("(?:[^"\\\\]|\\\\.)*"|\'(?:[^\'\\\\]|\\\\.)*\');~', $code, $m)) {
        $title = pgp_decode_literal($m[1]);
    }
    if (preg_match('~\$page_description\s*=\s*("(?:[^"\\\\]|\\\\.)*"|\'(?:[^\'\\\\]|\\\\.)*\');~', $code, $m)) {
        $desc = pgp_decode_literal($m[1]);
    }

    /* Content brief comment - stored verbatim so regeneration is exact. */
    $brief = '';
    if (preg_match("~includes/blog-data\\.php';\n\n(.*?)\n\n\\\$current_slug~s", $code, $m)) {
        $brief = $m[1];
    }

    /* $page_faqs via bracket-depth scan (an answer may contain "];"). */
    $faqs = [];
    $pos = strpos($code, '$page_faqs = [');
    if ($pos !== false) {
        $open = $pos + strlen('$page_faqs = ') ;
        $region = pgp_scan_bracket_region($code, $open);
        if ($region !== null) {
            $faqs = pgp_parse_faq_literal(substr($code, $region[0], $region[1] - $region[0] + 1));
        }
    }

    /* Article body: exact bytes between the article opener and the inline CTA. */
    $bodyStart = strpos($code, "<article class=\"blog-content\">\n\n");
    $bodyEndMarker = "\n\n      <?php require __DIR__ . '/../includes/blog-inline-cta.php'; ?>";
    $bodyEnd = strpos($code, $bodyEndMarker);
    if ($bodyStart === false || $bodyEnd === false || $bodyEnd <= $bodyStart) return null;
    $bodyStart += strlen("<article class=\"blog-content\">\n\n");
    $body = substr($code, $bodyStart, $bodyEnd - $bodyStart);
    $body = pgp_php_to_tokens($body);

    $registry = blog_get_post($slug) ?: [];

    $src = [
        'slug'      => $slug,
        'status'    => 'published',
        'registry'  => [
            'title'    => $registry['title'] ?? $title,
            'excerpt'  => $registry['excerpt'] ?? '',
            'date'     => $registry['date'] ?? date('Y-m-d'),
            'category' => $registry['category'] ?? 'Publishing',
            'author'   => $registry['author'] ?? SITE_NAME . ' Editorial',
            'read'     => $registry['read'] ?? '',
            'image'    => $registry['image'] ?? '',
            'glyph'    => $registry['glyph'] ?? '✦',
        ],
        'seo'       => [
            'page_title'       => $title,
            'page_description' => $desc,
            'page_keywords'    => '',
        ],
        'body'      => $body,
        'faqs'      => $faqs,
        'brief_raw' => $brief,
        'read_auto' => false, // imported posts keep their hand-set read time
        'source'    => 'imported',
        'created'   => date('c'),
        'updated'   => date('c'),
    ];

    return post_source_save($src) ? $src : null;
}

/* ================================================================= publish */

/**
 * Rewrite the auto-managed Blog block in sitemap.xml from the registry, so the
 * sitemap always lists the blog index plus every published post. The block sits
 * between the marker comments below; everything outside them is left untouched.
 * Fail-soft by design: a sitemap hiccup must never block a publish/unpublish.
 */
function sitemap_sync_blog(): array {
    $beginTag = '<!-- Blog (auto-managed: publishing from the admin studio rewrites this block) -->';
    $endTag   = '<!-- /Blog -->';

    if (!is_file(SITE_SITEMAP_FILE)) return [false, 'sitemap.xml not found'];
    $xml = file_get_contents(SITE_SITEMAP_FILE);
    if ($xml === false) return [false, 'sitemap.xml could not be read'];

    $begin = strpos($xml, $beginTag);
    $end   = strpos($xml, $endTag, $begin === false ? 0 : $begin);
    if ($begin === false || $end === false) {
        return [false, 'Blog markers missing from sitemap.xml'];
    }

    $parsed = registry_parse();
    if ($parsed === null) return [false, 'could not parse includes/blog-data.php'];

    /* Always the clean live URLs (matching the hand-written entries), never
       page_url(), so a publish from localhost cannot leak .php-style links. */
    $base  = rtrim(SITE_CANONICAL_URL, '/');
    $lines = ['  <url><loc>' . $base . '/blogs/</loc><changefreq>weekly</changefreq><priority>0.7</priority></url>'];
    foreach ($parsed['entries'] as $entry) {
        $slug = (string) $entry['slug'];
        if (!pgp_token_valid_slug($slug)) continue;
        $lines[] = '  <url><loc>' . $base . '/blogs/' . $slug . '/</loc><changefreq>monthly</changefreq><priority>0.6</priority></url>';
    }

    $block = $beginTag . "\n" . implode("\n", $lines) . "\n  " . $endTag;
    $xml   = substr($xml, 0, $begin) . $block . substr($xml, $end + strlen($endTag));

    if (!admin_replace_site_file(SITE_SITEMAP_FILE, $xml)) {
        return [false, 'sitemap.xml could not be written (permissions?)'];
    }
    return [true, 'ok'];
}

function post_validate_for_publish(array $src): ?string {
    $reg = $src['registry'] ?? [];
    if (trim((string) ($reg['title'] ?? '')) === '') return 'The post needs a title before publishing.';
    if (trim((string) ($reg['excerpt'] ?? '')) === '') return 'Write a short excerpt - it is the card text and fallback description.';
    if (trim((string) ($src['seo']['page_title'] ?? '')) === '') return 'Set the SEO title tag before publishing.';
    if (trim((string) ($src['seo']['page_description'] ?? '')) === '') return 'Set the meta description before publishing.';
    if (!preg_match('~^\d{4}-\d{2}-\d{2}$~', (string) ($reg['date'] ?? ''))) return 'The date must be YYYY-MM-DD.';
    if (!isset(blog_categories()[(string) ($reg['category'] ?? '')])) return 'Pick one of the blog categories.';
    if (trim((string) ($src['body'] ?? '')) === '') return 'The article body is empty.';
    return null;
}

function post_publish(string $slug): array {
    $src = post_source($slug);
    if (!$src) return [false, 'Post source not found.'];

    if ($err = post_validate_for_publish($src)) return [false, $err];

    /* Auto read time (unless the editor overrode it). */
    if (!empty($src['read_auto'])) {
        $src['registry']['read'] = admin_read_time_label(admin_read_time_minutes((string) $src['body']));
    }
    if (trim((string) $src['registry']['read']) === '') {
        $src['registry']['read'] = admin_read_time_label(admin_read_time_minutes((string) $src['body']));
    }

    $registryData = array_merge(['slug' => $slug], $src['registry']);

    /* Generate + lint BOTH files before either write. */
    $postCode = post_generate($src);
    if (!php_check_syntax_string($postCode)) {
        return [false, 'The generated post failed PHP lint - nothing was published.'];
    }

    [$ok, $msg] = registry_upsert($registryData);
    if (!$ok) return [false, $msg];

    if (!admin_replace_site_file(SITE_BLOGS_DIR . '/' . $slug . '.php', $postCode)) {
        return [false, 'Could not write blogs/' . $slug . '.php (permissions?).'];
    }

    $src['status'] = 'published';
    post_source_save($src);

    [$smOk, $smMsg] = sitemap_sync_blog();
    return [true, 'Published. The article is live at blogs/' . $slug . '.php'
        . ($smOk ? ' and listed in sitemap.xml.' : '. Heads up: sitemap.xml was not updated (' . $smMsg . ').')];
}

function post_unpublish(string $slug): array {
    $src = post_source($slug);
    if (!$src) {
        /* Legacy post without a JSON source: import it first so nothing is lost. */
        $src = post_import($slug);
        if (!$src) return [false, 'Post not found.'];
    }

    [$ok, $msg] = registry_delete($slug);
    if (!$ok) return [false, $msg];

    $live = SITE_BLOGS_DIR . '/' . $slug . '.php';
    if (is_file($live)) {
        if (!is_dir(SITE_TRASH_DIR)) { @mkdir(SITE_TRASH_DIR, 0775, true); }
        $ht = SITE_TRASH_DIR . '/.htaccess';
        if (!is_file($ht)) { @file_put_contents($ht, "Require all denied\n"); }
        @rename($live, SITE_TRASH_DIR . '/' . $slug . '.' . date('Ymd-His') . '.php');
    }

    $src['status'] = 'draft';
    post_source_save($src);

    [$smOk, $smMsg] = sitemap_sync_blog();
    return [true, 'Unpublished. The file was moved to /trash and the index entry removed.'
        . ($smOk ? '' : ' Heads up: sitemap.xml was not updated (' . $smMsg . ').')];
}

function post_delete(string $slug): array {
    $src = post_source($slug);
    if ($src && ($src['status'] ?? '') === 'published') {
        [$ok, $msg] = post_unpublish($slug);
        if (!$ok) return [false, $msg];
    }
    $path = post_source_path($slug);
    if (is_file($path)) {
        if (!is_dir(SITE_TRASH_DIR)) { @mkdir(SITE_TRASH_DIR, 0775, true); }
        @copy($path, SITE_TRASH_DIR . '/' . $slug . '.' . date('Ymd-His') . '.json');
        @unlink($path);
    }
    return [true, 'Deleted. A copy of the draft was kept in /trash.'];
}

/* ================================================================= preview */

/**
 * Session-guarded preview file. Returns 404 to anyone without an authed admin
 * session; drafts not yet in the registry get an inline $post stub.
 */
function post_preview(array $src): array {
    $code = post_generate($src);

    $guard = "<?php\n"
        . "/* Admin-only preview - invisible to the public and to robots. */\n"
        . "session_name('pgp_admin');\n"
        . "session_start();\n"
        . "if (empty(\$_SESSION['adm_auth_ok'])) { http_response_code(404); exit; }\n"
        . "header('X-Robots-Tag: noindex, nofollow');\n"
        . "?>";

    $code = $guard . "\n" . $code;

    /* Drafts are not in the registry yet - inject the metadata stub. */
    $reg = array_merge(['slug' => $src['slug']], (array) ($src['registry'] ?? []));
    if (empty($reg['read'])) {
        $reg['read'] = admin_read_time_label(admin_read_time_minutes((string) ($src['body'] ?? '')));
    }
    $stub = '$post = blog_get_post($current_slug) ?: ' . var_export($reg, true) . ';';
    $code = str_replace('$post = blog_get_post($current_slug);', $stub, $code);

    if (!php_check_syntax_string($code)) {
        return [false, 'Preview failed PHP lint.'];
    }
    if (!admin_atomic_write(ADMIN_PREVIEW_FILE, $code)) {
        return [false, 'Could not write the preview file.'];
    }
    return [true, '../blogs/admin-preview.php'];
}

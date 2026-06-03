<?php
define('SITE_NAME', 'Purple Giraffe Press Publishing');
define('SITE_TAGLINE', 'Where little stories become big adventures');
define('SITE_LOGO', 'assets/images/logo.webp');
define('SITE_MASCOT', 'assets/images/mascot.webp');
define('SITE_PHONE', '(07) 5690 2990');
define('SITE_EMAIL', 'info@purplegiraffepress.com');
define('SITE_ADDRESS', 'Level 9 Corporate Ct, Bundall QLD 4217, Australia');
define('SITE_TRADING_ADDRESS', '60 E 42nd St #4600, New York, NY 10165, United States');
define('SITE_HOURS', 'Monday to Friday, 9:00 AM to 5:00 PM AEST');
define('SITE_CANONICAL_URL', 'https://purplegiraffepress.com/');
define('MAIN_CTA_TEXT', 'Start Publishing');
define('MAIN_CTA_LINK', 'contact.php');

$social_links = [
    'Instagram' => 'https://instagram.com/purplegiraffepress',
    'Facebook' => 'https://www.facebook.com/people/Purple-Giraffe-Press/61575292427308/',
    // 'TikTok' => 'https://tiktok.com/@purplegiraffepress',
    // 'YouTube' => 'https://youtube.com/purplegiraffepress',
];

$nav_menu = [
    'Home' => 'index.php',
    'About' => 'about-us.php',
    'Portfolio' => 'portfolio.php',
    'Services' => 'services.php',
    'Pricing' => 'pricing.php',
    'Submissions' => 'submissions.php',
    'Blog' => 'blogs/',
    'Contact' => 'contact.php',
];

$footer_menu_company = [
    'About Us' => 'about-us.php',
    'Portfolio' => 'portfolio.php',
    'Partners' => 'partners.php',
    'Artists' => 'artists.php',
    'Submissions' => 'submissions.php',
    'Blog' => 'blogs/',
];

$footer_menu_services = [
    'Book Publishing'      => 'book-publishing.php',
    'Editing'              => 'editing.php',
    'Custom Illustrations' => 'custom-illustrations.php',
    'Book Cover Design'    => 'book-cover-design.php',
    'Marketing & Publicity' => 'marketing-publicity.php',
    'Author Websites'      => 'author-websites.php',
];

$legal_menu = [
    'Privacy Policy' => 'privacy-policy.php',
    'Terms & Conditions' => 'terms-and-conditions.php',
];

define('COPYRIGHT_TEXT', 'Copyright ' . date('Y') . ' ' . SITE_NAME . '. All rights reserved.');

/* ---- Outbound email (Gmail SMTP) ----
   NOTE: keep this app password private — do not commit to a public repo. */
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_SECURE', 'tls');                              // 'tls' (587) or 'ssl' (465)
define('SMTP_USER', 'support@purplegiraffepress.com');
define('SMTP_PASS', 'qkwo ochl ukia jrzi');                // Gmail app password
define('SMTP_FROM_EMAIL', 'support@purplegiraffepress.com');
define('SMTP_FROM_NAME', SITE_NAME);

/* Where lead/form notifications are delivered. Sent FROM the SMTP account
   above; can be delivered to any inbox(es). */
$LEAD = ['recipients' => ['info@purplegiraffepress.com', 'support@purplegiraffepress.com']];

/*
 * Clean URLs (no ".php") on the LIVE site only.
 *
 * On localhost we keep ".php" so local navigation and editing work with no
 * rewrite rules. On the live domain, links and canonicals drop ".php" and a
 * root .htaccess maps the clean URLs back to the real .php files (and 301s any
 * ".php" request to its clean form). Detection is by host, so the same code
 * behaves correctly in both places with no manual switch.
 */
$__pgp_host = strtolower($_SERVER['HTTP_HOST'] ?? '');
define('IS_LOCAL',
    $__pgp_host === ''                                   // CLI
    || strncmp($__pgp_host, 'localhost', 9) === 0
    || strncmp($__pgp_host, '127.0.0.1', 9) === 0
    || strpos($__pgp_host, '::1') !== false
    || substr($__pgp_host, -6) === '.local'
    || substr($__pgp_host, -5) === '.test'
);
define('CLEAN_URLS', !IS_LOCAL);

/* Minify CSS/JS/HTML on the LIVE site; keep everything readable on localhost for
 * debugging. Source files are never touched: minified CSS/JS are generated on
 * demand into assets/cache/ (rebuilt automatically when the source changes), and
 * HTML is minified in the output buffer. */
define('MINIFY', !IS_LOCAL);

/* Filesystem path to the web root (this file lives in /includes). */
define('SITE_ROOT', dirname(__DIR__));

unset($__pgp_host);

function e($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/**
 * Output-buffer filter (LIVE only): rewrite internal href/src/action URLs to
 * their canonical clean form -> ROOT-RELATIVE, extension-less, with a trailing
 * slash on page URLs (e.g. "../services.php" -> "/services/", "index.php" ->
 * "/", "../assets/x.webp" -> "/assets/x.webp"). Root-relative output is what
 * makes trailing-slash URLs safe: a plain relative link would otherwise resolve
 * against "/page/" and break. Asset URLs keep their filename (just made
 * root-relative). Absolute URLs, //protocol-relative, #anchors and
 * scheme links (mailto:/tel:/data:) are left untouched. The matching root
 * .htaccess maps the clean URLs back to the real .php files. Never runs on
 * localhost, so local ".php" editing is unaffected.
 */
function pgp_clean_html_links($html) {
    return preg_replace_callback('~\s(href|src|action)="([^"]*)"~i', function ($m) {
        $attr = $m[1];
        $url  = $m[2];

        // Leave external / protocol-relative / anchor / scheme URLs untouched.
        if ($url === '' || preg_match('~^(?:[a-z][a-z0-9+.\-]*:|//|#)~i', $url)) {
            return $m[0];
        }

        // Separate the path from any ?query or #hash so we only touch the path.
        $suffix = '';
        if (preg_match('~^([^?#]*)([?#].*)$~', $url, $s)) {
            $path   = $s[1];
            $suffix = $s[2];
        } else {
            $path = $url;
        }

        // Drop ./ and ../ depth prefixes: live runs at the domain root, so every
        // internal link resolves from "/".
        $path = preg_replace('~^(?:\./|\.\./)+~', '', $path);

        // index.php -> directory; page.php -> page/ ; assets keep their name.
        if (preg_match('~(^|/)index\.php$~', $path)) {
            $path = preg_replace('~(^|/)index\.php$~', '$1', $path);
        } elseif (preg_match('~\.php$~', $path)) {
            $path = preg_replace('~\.php$~', '/', $path);
        }

        // Force root-relative so trailing-slash pages resolve links correctly.
        $path = '/' . ltrim($path, '/');

        return ' ' . $attr . '="' . $path . $suffix . '"';
    }, $html);
}

/**
 * Minify the rendered HTML: strip HTML comments and collapse whitespace runs to
 * a single space (which the browser renders identically). Blocks whose
 * whitespace is significant — <pre>, <textarea>, <script>, <style> — are pulled
 * out first and restored untouched, so inline JS/CSS and JSON-LD are never
 * mangled. Conditional comments (<!--[if ...]>) are preserved.
 */
function pgp_minify_html($html) {
    $store = [];
    $html = preg_replace_callback(
        '~<(pre|textarea|script|style)\b[^>]*>[\s\S]*?</\1\s*>~i',
        function ($m) use (&$store) {
            $key = "\x01PGP" . count($store) . "\x01";
            $store[$key] = $m[0];
            return $key;
        },
        $html
    );

    // Drop HTML comments, but keep IE conditional comments.
    $html = preg_replace('~<!--(?!\[if)(?!<!\[endif)[\s\S]*?-->~', '', $html);

    // Collapse every whitespace run to a single space (HTML collapses these when
    // rendering, so this is visually lossless for normal flow content).
    $html = preg_replace('~\s+~', ' ', $html);

    if ($store) {
        $html = strtr($html, $store);
    }
    return $html;
}

/**
 * Output-buffer callback used on the live site: first rewrite internal links to
 * their canonical clean form, then minify the HTML. Both steps are no-ops unless
 * enabled (the buffer is only started on live — see header.php).
 */
function pgp_optimize_output($html) {
    $html = pgp_clean_html_links($html);
    if (defined('MINIFY') && MINIFY) {
        $html = pgp_minify_html($html);
    }
    return $html;
}

/**
 * Apply the environment's URL style to a site-root-relative path.
 * On the live site, "page.php" becomes "page/" (extension dropped, canonical
 * trailing slash added) and "index.php" collapses to its directory ("index.php"
 * -> "", "blogs/index.php" -> "blogs/"). On localhost, paths are returned
 * unchanged so ".php" navigation keeps working. Asset paths (.css/.js/images)
 * and directories are never altered.
 */
function clean_path($path) {
    $path = ltrim((string) $path, '/');
    if (defined('CLEAN_URLS') && CLEAN_URLS) {
        if (preg_match('~(^|/)index\.php$~', $path)) {
            // index.php collapses to its directory (root index.php -> "").
            $path = preg_replace('~(^|/)index\.php$~', '$1', $path);
        } elseif (preg_match('~\.php$~', $path)) {
            // page.php -> page/  (extension-less, with a canonical trailing slash).
            $path = preg_replace('~\.php$~', '/', $path);
        }
    }
    return $path;
}

function page_url($path = '') {
    return rtrim(SITE_CANONICAL_URL, '/') . '/' . clean_path($path);
}

/**
 * Resolve a site-root-relative path against the current page's depth, and
 * apply the environment's URL style.
 *
 * Pages at the web root leave $GLOBALS['asset_base'] unset, so the depth prefix
 * is empty. Pages in a subfolder (e.g. /blogs/) set $GLOBALS['asset_base'] =
 * '../' before including config/header, so every asset, nav link and internal
 * URL resolves correctly. Absolute URLs, anchors and tel:/mailto: links are
 * passed through untouched.
 */
function asset($path = '') {
    if ($path === '' || preg_match('~^([a-z][a-z0-9+.\-]*:|//|#)~i', $path)) {
        return $path;
    }
    $out = ($GLOBALS['asset_base'] ?? '') . clean_path($path);
    return $out === '' ? './' : $out;
}

/**
 * Safe, conservative CSS minifier. Strips comments (keeps /*! ... *​/), collapses
 * whitespace to a single space (so calc()/clamp()/shorthand values stay valid),
 * and tightens whitespace around structural punctuation. Never touches the inside
 * of data: URIs (no {};/* and their spaces are already single).
 */
function pgp_minify_css($css) {
    $css = preg_replace('~/\*(?!!)[\s\S]*?\*/~', '', $css);   // comments (keep /*! */)
    $css = preg_replace('~\s+~', ' ', $css);                  // whitespace -> single space
    $css = preg_replace('~ ?([{};,]) ?~', '$1', $css);        // tighten around braces/semis/commas
    $css = preg_replace('~: ~', ':', $css);                   // "prop: val" -> "prop:val" (after-colon only)
    $css = str_replace(';}', '}', $css);                      // drop the last semicolon in a block
    return trim($css);
}

/**
 * Safe JS minifier. Removes // and /* *​/ comments with a string-aware scanner
 * (so quotes and escapes are never misread), then trims each line and drops blank
 * lines while KEEPING line breaks — so Automatic Semicolon Insertion can never
 * break, and no in-line tokens are merged. Assumes no multi-line template
 * literals (the project has none); add backtick handling before introducing one.
 */
function pgp_minify_js($js) {
    $len = strlen($js);
    $out = '';
    $i = 0;
    while ($i < $len) {
        $c    = $js[$i];
        $next = $i + 1 < $len ? $js[$i + 1] : '';

        if ($c === '/' && $next === '/') {                 // line comment
            $i += 2;
            while ($i < $len && $js[$i] !== "\n") { $i++; }
            continue;
        }
        if ($c === '/' && $next === '*') {                 // block comment
            $i += 2;
            while ($i < $len && !($js[$i] === '*' && ($i + 1 < $len) && $js[$i + 1] === '/')) { $i++; }
            $i += 2;
            continue;
        }
        if ($c === '"' || $c === "'" || $c === '`') {      // string literal
            $quote = $c;
            $out  .= $c;
            $i++;
            while ($i < $len) {
                $ch   = $js[$i];
                $out .= $ch;
                if ($ch === '\\' && $i + 1 < $len) {       // copy the escaped char too
                    $out .= $js[$i + 1];
                    $i   += 2;
                    continue;
                }
                $i++;
                if ($ch === $quote) { break; }
            }
            continue;
        }
        $out .= $c;
        $i++;
    }

    $lines = preg_split('~\r\n|\r|\n~', $out);
    $kept  = [];
    foreach ($lines as $line) {
        $t = trim($line);
        if ($t !== '') { $kept[] = $t; }
    }
    return implode("\n", $kept);
}

/**
 * Return the URL for a CSS/JS asset, minified on the live site. The minified copy
 * is generated on demand into assets/cache/<name>.min.<ext> and rebuilt whenever
 * the source changes (cache-busted with ?v=<source mtime>). On localhost (or if
 * the cache dir is not writable) the original, readable source is served instead.
 * Source files are never modified.
 */
function asset_min($webPath) {
    $rootFs = defined('SITE_ROOT') ? SITE_ROOT : dirname(__DIR__);
    $srcFs  = $rootFs . '/' . ltrim($webPath, '/');
    if (!is_file($srcFs)) {
        return asset($webPath);                            // unknown file: best effort
    }
    $srcMtime = filemtime($srcFs);
    $ext      = strtolower(pathinfo($webPath, PATHINFO_EXTENSION));

    if (!defined('MINIFY') || !MINIFY || ($ext !== 'css' && $ext !== 'js')) {
        return asset($webPath) . '?v=' . $srcMtime;        // readable source, versioned
    }

    $cacheDir = $rootFs . '/assets/cache';
    $name     = pathinfo($webPath, PATHINFO_FILENAME) . '.min.' . $ext;
    $cacheFs  = $cacheDir . '/' . $name;
    $cacheWeb = 'assets/cache/' . $name;

    if (!is_file($cacheFs) || filemtime($cacheFs) < $srcMtime) {
        if (!is_dir($cacheDir)) { @mkdir($cacheDir, 0775, true); }
        $code = (string) file_get_contents($srcFs);
        $min  = ($ext === 'css') ? pgp_minify_css($code) : pgp_minify_js($code);
        if (@file_put_contents($cacheFs, $min, LOCK_EX) === false) {
            return asset($webPath) . '?v=' . $srcMtime;    // not writable: serve source
        }
        @touch($cacheFs, $srcMtime);                       // tie cache mtime to source
    }
    return asset($cacheWeb) . '?v=' . $srcMtime;
}
?>

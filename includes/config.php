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
    'Facebook' => 'https://facebook.com/purplegiraffepress',
    'TikTok' => 'https://tiktok.com/@purplegiraffepress',
    'YouTube' => 'https://youtube.com/purplegiraffepress',
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
unset($__pgp_host);

function e($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/**
 * Output-buffer filter (LIVE only): strip ".php" from internal href/action
 * URLs so every page, including hardcoded links we have not touched, renders
 * clean URLs. Absolute URLs, anchors and mailto:/tel: are left alone. The
 * matching root .htaccess maps the clean URLs back to the real .php files.
 * Never runs on localhost, so local editing is unaffected.
 */
function pgp_clean_html_links($html) {
    return preg_replace_callback('~\s(href|action)="([^"]*)"~i', function ($m) {
        $url = $m[2];
        if ($url === '' || preg_match('~^([a-z][a-z0-9+.\-]*:|//|#)~i', $url)) {
            return $m[0];                                  // external / anchor / mailto / tel
        }
        $new = preg_replace('~\.php(?=$|[?#])~', '', $url); // drop the extension
        $new = preg_replace('~(^|/)index(?=$|[?#])~', '$1', $new); // index -> directory
        if ($new === '' || $new[0] === '?' || $new[0] === '#') {
            $new = './' . $new;
        }
        return ' ' . $m[1] . '="' . $new . '"';
    }, $html);
}

/**
 * Apply the environment's URL style to a site-root-relative path.
 * On the live site, "page.php" becomes "page" and "index.php" collapses to the
 * containing directory. On localhost, paths are returned unchanged.
 * Asset paths (.css/.js/images) and directories are never altered.
 */
function clean_path($path) {
    $path = ltrim((string) $path, '/');
    if (defined('CLEAN_URLS') && CLEAN_URLS) {
        $path = preg_replace('~(^|/)index\.php$~', '$1', $path);
        $path = preg_replace('~\.php$~', '', $path);
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
?>

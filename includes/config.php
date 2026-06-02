<?php
define('SITE_NAME', 'Purple Giraffe Press');
define('SITE_TAGLINE', 'Where little stories become big adventures');
define('SITE_LOGO', 'assets/images/logo.webp');
define('SITE_MASCOT', 'assets/images/mascot.webp');
define('SITE_PHONE', '(03) 9001 2008');
define('SITE_EMAIL', 'hello@purplegiraffepress.com');
define('SITE_ADDRESS', '14 Paperbark Lane, Fitzroy, Melbourne VIC 3065, Australia');
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
    'Contact' => 'contact.php',
];

$footer_menu_company = [
    'About Us' => 'about-us.php',
    'Portfolio' => 'portfolio.php',
    'Partners' => 'partners.php',
    'Artists' => 'artists.php',
    'Submissions' => 'submissions.php',
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

function e($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function page_url($path = '') {
    return rtrim(SITE_CANONICAL_URL, '/') . '/' . ltrim($path, '/');
}
?>

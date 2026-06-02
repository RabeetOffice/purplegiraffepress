<?php
/**
 * Emits BlogPosting JSON-LD for a single blog post.
 *
 * BreadcrumbList and FAQPage schema are emitted globally by includes/header.php
 * (from $breadcrumbs and $page_faqs), so they are intentionally NOT repeated
 * here to avoid duplicate structured data.
 *
 * Expects: $post (array), $canonical_url (string), $page_description (string).
 */
if (!isset($post) || !is_array($post)) return;

$base       = rtrim(SITE_CANONICAL_URL, '/');
$image_abs  = !empty($post['image'])
    ? (preg_match('#^https?://#', $post['image']) ? $post['image'] : $base . '/' . ltrim($post['image'], '/'))
    : page_url(SITE_LOGO);
$date_pub   = date('c', strtotime($post['date'] ?? 'now'));
$author     = $post['author'] ?? (SITE_NAME . ' Editorial');
$desc       = $page_description ?? ($post['excerpt'] ?? '');

$article_schema = [
    '@context'      => 'https://schema.org',
    '@type'         => 'BlogPosting',
    'headline'      => $post['title'] ?? '',
    'description'   => $desc,
    'image'         => [$image_abs],
    'datePublished' => $date_pub,
    'dateModified'  => $date_pub,
    'articleSection'=> $post['category'] ?? 'Children\'s Books',
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id'   => $canonical_url ?? $base,
    ],
    'author' => [
        '@type' => 'Person',
        'name'  => $author,
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name'  => SITE_NAME,
        'logo'  => [
            '@type' => 'ImageObject',
            'url'   => page_url(SITE_LOGO),
        ],
    ],
];
?>
<script type="application/ld+json"><?php echo json_encode($article_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

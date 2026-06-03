<?php
/**
 * Central blog INDEX for Purple Giraffe Press (metadata only).
 *
 * Each published article is a self-contained page at blogs/<slug>.php that
 * holds its own body copy and FAQs. This file is the lightweight index those
 * pages, the listing (blogs/index.php), the homepage strip, schema and the
 * sitemap all read from.
 *
 * To publish a new article:
 *   1. Add one metadata entry to $blog_posts below.
 *   2. Copy an existing blogs/<slug>.php, rename it to match the new slug,
 *      and write its body + FAQs.
 *
 * Entry fields:
 *   slug      Unique, URL-safe id. Must match the filename blogs/<slug>.php.
 *   title     Headline (plain text).
 *   excerpt   1-2 sentence summary used on cards and as the meta description.
 *   date      ISO date (YYYY-MM-DD). Posts sort newest first.
 *   category  One of the keys in blog_categories().
 *   author    Must match a name in includes/blog-author.php for a full bio.
 *   read      Reading-time label, e.g. "7 min read".
 *   image     Cover image URL (or site-root-relative path). Optional.
 *   glyph     Decorative mark shown on the card/cover corner.
 */

require_once __DIR__ . '/config.php';

if (!function_exists('blog_categories')) {
    /** Category metadata: display label + the cover/chip colour class. */
    function blog_categories(): array {
        return [
            'Writing'      => ['label' => 'Writing',      'tone' => 'note-purple'],
            'Reading'      => ['label' => 'Reading',      'tone' => 'note-gold'],
            'Illustration' => ['label' => 'Illustration', 'tone' => 'note-lavender'],
            'Publishing'   => ['label' => 'Publishing',   'tone' => 'note-purple'],
        ];
    }
}

$blog_posts = [
    [
        'slug'     => 'why-every-childrens-story-deserves-custom-illustration',
        'title'    => "Why Every Children's Story Deserves a Custom Illustration",
        'excerpt'  => 'Bespoke art does more than decorate a page. It helps children understand, remember and fall in love with your story. Here is why custom illustration is worth it.',
        'date'     => '2026-06-02',
        'category' => 'Illustration',
        'author'   => 'Purple Giraffe Press Editorial',
        'read'     => '9 min read',
        'image'    => 'assets/images/blog/why-every-childrens-story-deserves-custom-illustration.webp',
        'glyph'    => '✦',
    ],
    [
        'slug'     => 'step-by-step-journey-publishing-your-first-childrens-book',
        'title'    => 'The Step-by-Step Journey of Publishing Your First Children\'s Book',
        'excerpt'  => 'From a finished manuscript to a printed book in a reader\'s hands, here is the full path explained in plain language, plus how to keep 100% of your royalties.',
        'date'     => '2026-05-28',
        'category' => 'Publishing',
        'author'   => 'Purple Giraffe Press Editorial',
        'read'     => '10 min read',
        'image'    => 'assets/images/blog/step-by-step-journey-publishing-your-first-childrens-book.webp',
        'glyph'    => '✎',
    ],
    [
        'slug'     => 'power-of-storytelling-how-childrens-books-shape-young-minds',
        'title'    => 'The Power of Storytelling: How Children\'s Books Shape Young Minds',
        'excerpt'  => 'The stories we read to children do quiet, lasting work on growing minds. A look at the real benefits and how to choose books that educate and entertain.',
        'date'     => '2026-05-21',
        'category' => 'Reading',
        'author'   => 'Purple Giraffe Press Editorial',
        'read'     => '9 min read',
        'image'    => 'assets/images/blog/power-of-storytelling-how-childrens-books-shape-young-minds.webp',
        'glyph'    => '★',
    ],
];

/* Sort newest first. */
usort($blog_posts, static function ($a, $b) {
    return strcmp($b['date'], $a['date']);
});

if (!function_exists('blog_all_posts')) {
    function blog_all_posts(): array {
        global $blog_posts;
        return $blog_posts;
    }
}

if (!function_exists('blog_get_post')) {
    function blog_get_post(string $slug): ?array {
        global $blog_posts;
        foreach ($blog_posts as $post) {
            if ($post['slug'] === $slug) return $post;
        }
        return null;
    }
}

if (!function_exists('blog_get_recent')) {
    function blog_get_recent(int $limit = 3, ?string $excludeSlug = null): array {
        global $blog_posts;
        $out = [];
        foreach ($blog_posts as $post) {
            if ($excludeSlug !== null && $post['slug'] === $excludeSlug) continue;
            $out[] = $post;
            if (count($out) >= $limit) break;
        }
        return $out;
    }
}

if (!function_exists('blog_post_path')) {
    /**
     * Site-root-relative path for a post, e.g. "blogs/<slug>" on the live site
     * or "blogs/<slug>.php" on localhost (see clean_path()). Use this for
     * absolute URLs, canonicals, schema and the sitemap.
     */
    function blog_post_path(string $slug): string {
        return clean_path('blogs/' . $slug . '.php');
    }
}

if (!function_exists('blog_post_url')) {
    /**
     * Link to a post, resolved for the current page depth and URL style
     * (see asset()). Use this for href attributes.
     */
    function blog_post_url(string $slug): string {
        return asset('blogs/' . $slug . '.php');
    }
}

if (!function_exists('blog_index_url')) {
    /** Link to the blog listing (/blogs/), resolved for the current page depth. */
    function blog_index_url(): string {
        return asset('blogs/');
    }
}

if (!function_exists('blog_format_date')) {
    function blog_format_date(string $iso): string {
        $ts = strtotime($iso);
        return $ts ? date('j F Y', $ts) : $iso;
    }
}

if (!function_exists('blog_category_tone')) {
    function blog_category_tone(?string $category): string {
        $cats = blog_categories();
        return $cats[$category]['tone'] ?? 'note-purple';
    }
}

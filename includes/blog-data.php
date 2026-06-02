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
        'slug'     => 'how-to-write-a-picture-book-children-love',
        'title'    => 'How to Write a Picture Book Children Ask For Again and Again',
        'excerpt'  => 'The picture books that get read until the spine gives way share a handful of quiet craft decisions. Here is what they have in common.',
        'date'     => '2026-05-20',
        'category' => 'Writing',
        'author'   => 'Maya Holloway',
        'read'     => '8 min read',
        'image'    => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=1200&q=80',
        'glyph'    => '★',
    ],
    [
        'slug'     => 'reading-aloud-guide-for-parents-and-teachers',
        'title'    => 'Reading Aloud: A Simple Guide for Parents and Teachers',
        'excerpt'  => 'Reading aloud is the single most powerful thing you can do for a young reader. A few small habits make it richer for everyone.',
        'date'     => '2026-05-06',
        'category' => 'Reading',
        'author'   => 'Purple Giraffe Press Editorial',
        'read'     => '6 min read',
        'image'    => 'https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?auto=format&fit=crop&w=1200&q=80',
        'glyph'    => '◆',
    ],
    [
        'slug'     => 'choosing-the-right-book-for-your-childs-age',
        'title'    => "Choosing the Right Book for Your Child's Age",
        'excerpt'  => 'Board book, picture book, early reader or chapter book? A clear, stage-by-stage guide to matching books to growing readers.',
        'date'     => '2026-04-22',
        'category' => 'Reading',
        'author'   => 'Maya Holloway',
        'read'     => '7 min read',
        'image'    => 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&fit=crop&w=1200&q=80',
        'glyph'    => '■',
    ],
    [
        'slug'     => 'what-makes-a-childrens-book-illustration-work',
        'title'    => "What Makes a Children's Book Illustration Truly Work",
        'excerpt'  => 'Great picture book art is not just pretty. It tells, paces and deepens the story. A look behind the easel at what we look for.',
        'date'     => '2026-04-08',
        'category' => 'Illustration',
        'author'   => 'Tom Beddoe',
        'read'     => '7 min read',
        'image'    => 'https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?auto=format&fit=crop&w=1200&q=80',
        'glyph'    => '✦',
    ],
    [
        'slug'     => 'submitting-your-childrens-manuscript',
        'title'    => "Submitting Your Children's Manuscript: What Publishers Look For",
        'excerpt'  => 'What actually happens when your manuscript lands on an editor\'s desk, and how to give your story its best possible first impression.',
        'date'     => '2026-03-18',
        'category' => 'Publishing',
        'author'   => 'Purple Giraffe Press Editorial',
        'read'     => '9 min read',
        'image'    => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=1200&q=80',
        'glyph'    => '✎',
    ],
    [
        'slug'     => 'why-diverse-stories-matter-in-childrens-books',
        'title'    => "Why Diverse Stories Matter in Children's Books",
        'excerpt'  => 'Children need to see themselves in books, and to see lives unlike their own. Why representation is craft, not box-ticking.',
        'date'     => '2026-03-02',
        'category' => 'Publishing',
        'author'   => 'Maya Holloway',
        'read'     => '6 min read',
        'image'    => 'https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=1200&q=80',
        'glyph'    => '✿',
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

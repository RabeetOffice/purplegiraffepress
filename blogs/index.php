<?php
$GLOBALS['asset_base'] = '../';
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/blog-data.php';

$page_title       = "The Purple Giraffe Press Blog | Tips for Authors & Families";
$page_description = "Practical advice on writing, illustrating, reading and publishing children's books, from the editorial team at Purple Giraffe Press.";
$canonical_path   = 'blogs/';
$breadcrumb_name  = 'Blog';
$breadcrumbs = [
    ['name' => 'Home', 'url' => page_url('index.php')],
    ['name' => 'Blog', 'url' => page_url('blogs/')],
];

/* Listing FAQ powers both the accordion below and FAQPage schema in <head>. */
$page_faqs = [
    ['q' => 'How often do you publish new articles?', 'a' => 'We add new pieces regularly, covering writing, illustration, reading and the realities of children\'s publishing. The newest stories appear first, and the archive scrolls back from there.'],
    ['q' => 'Who writes the Purple Giraffe Press blog?', 'a' => 'Articles are written by our in-house editorial team, including editors and our art director, all of whom work on children\'s books every day. Many of us are former teachers and lifelong readers.'],
    ['q' => 'Can I suggest a topic or ask a question?', 'a' => 'Yes, we would love to hear it. Get in touch through our contact form and tell us what you would like us to write about, or what is puzzling you about publishing your book.'],
    ['q' => 'Can I share or quote these articles?', 'a' => 'Please do. Short quotes with a link back to the original article are very welcome. For anything more, just email us first and we will sort it out quickly.'],
];

require __DIR__ . '/../includes/header.php';

/* Blog + ItemList JSON-LD for the listing. */
$base = rtrim(SITE_CANONICAL_URL, '/');
$blog_schema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'Blog',
    'url'         => $canonical_url,
    'name'        => SITE_NAME . ' Blog',
    'description' => $page_description,
    'publisher'   => ['@type' => 'Organization', 'name' => SITE_NAME, 'logo' => ['@type' => 'ImageObject', 'url' => page_url(SITE_LOGO)]],
    'blogPost'    => array_map(static function ($bp) use ($base) {
        return [
            '@type'         => 'BlogPosting',
            'headline'      => $bp['title'],
            'url'           => $base . '/' . blog_post_path($bp['slug']),
            'datePublished' => date('c', strtotime($bp['date'])),
            'author'        => ['@type' => 'Person', 'name' => $bp['author'] ?? SITE_NAME],
        ];
    }, $blog_posts),
];
?>
<script type="application/ld+json"><?php echo json_encode($blog_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- HERO -->
<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="<?php echo e(asset('index.php')); ?>">Home</a> / Blog</div>
      <h1>Field notes &amp; <em>stories.</em></h1>
      <p class="lead">Practical, warm-hearted advice on writing, illustrating, reading and publishing children&apos;s books, from the people who make them.</p>
    </div>
    <img src="<?php echo e(asset(SITE_MASCOT)); ?>" alt="Purple giraffe mascot reading a book">
  </div>
</section>

<!-- GRID + CATEGORY FILTER -->
<section class="section figma-cream">
  <div class="container">
    <?php
    $cats_in_use = [];
    foreach ($blog_posts as $bp) {
        if (!empty($bp['category'])) $cats_in_use[$bp['category']] = true;
    }
    $cats_in_use = array_keys($cats_in_use);
    ?>
    <div class="blog-filter" role="tablist" aria-label="Filter articles by category">
      <button type="button" class="blog-filter-chip active" data-filter="all">All</button>
      <?php foreach ($cats_in_use as $cat): ?>
        <button type="button" class="blog-filter-chip" data-filter="<?php echo e($cat); ?>"><?php echo e($cat); ?></button>
      <?php endforeach; ?>
    </div>

    <div class="notes-grid blog-archive-grid" id="blogGrid">
      <?php foreach ($blog_posts as $post): ?>
        <?php $tone = blog_category_tone($post['category'] ?? null); ?>
        <article class="note-card reveal" data-category="<?php echo e($post['category'] ?? ''); ?>">
          <a class="note-art <?php echo e($tone); ?><?php echo !empty($post['image']) ? ' has-img' : ''; ?>" href="<?php echo e(blog_post_url($post['slug'])); ?>" aria-label="<?php echo e($post['title']); ?>">
            <?php if (!empty($post['image'])): ?>
              <img src="<?php echo e(asset($post['image'])); ?>" alt="<?php echo e($post['title']); ?>" loading="lazy" decoding="async">
            <?php endif; ?>
          </a>
          <p class="note-category"><?php echo e($post['category'] ?? 'Story'); ?></p>
          <h3><a href="<?php echo e(blog_post_url($post['slug'])); ?>"><?php echo e($post['title']); ?></a></h3>
          <p><?php echo e($post['excerpt']); ?></p>
          <a href="<?php echo e(blog_post_url($post['slug'])); ?>">Read more &rarr;</a>
        </article>
      <?php endforeach; ?>
    </div>
    <p class="blog-empty" hidden>No articles in this category yet. Check back soon.</p>
  </div>
</section>

<script>
/* Category filter for the blog archive grid. */
(function () {
  var grid = document.getElementById('blogGrid');
  if (!grid) return;
  var chips = Array.prototype.slice.call(document.querySelectorAll('.blog-filter-chip'));
  var cards = Array.prototype.slice.call(grid.querySelectorAll('.note-card'));
  var empty = document.querySelector('.blog-empty');

  chips.forEach(function (chip) {
    chip.addEventListener('click', function () {
      chips.forEach(function (c) { c.classList.remove('active'); });
      chip.classList.add('active');
      var filter = chip.getAttribute('data-filter');
      var visible = 0;
      cards.forEach(function (card) {
        var show = filter === 'all' || card.getAttribute('data-category') === filter;
        card.hidden = !show;
        if (show) { card.classList.add('in'); visible++; }
      });
      if (empty) empty.hidden = visible !== 0;
    });
  });
})();
</script>

<?php
/* Listing FAQ (shared renderer, with listing-specific copy). */
$faq_eyebrow = '- about the blog';
$faq_heading = 'Good to <em>know.</em>';
$faq_lede    = 'A few questions readers ask about how the blog is written, updated and shared. If yours is not here, just get in touch.';
require __DIR__ . '/../includes/blog-faq.php';
?>

<?php require __DIR__ . '/../includes/cta.php'; ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>

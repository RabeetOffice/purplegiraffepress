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
<style>
  .blog-toolbar{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px 24px;margin-bottom:30px;}
  .blog-toolbar .blog-filter{margin:0;}
  .blog-search-wrap{position:relative;flex:1 1 260px;max-width:360px;}
  .blog-search-wrap::before{content:"";position:absolute;left:16px;top:50%;transform:translateY(-50%);width:18px;height:18px;background-repeat:no-repeat;background-size:contain;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='%237b35d0' stroke-width='2' stroke-linecap='round'%3E%3Ccircle cx='11' cy='11' r='7'/%3E%3Cpath d='M21 21l-4.3-4.3'/%3E%3C/svg%3E");pointer-events:none;}
  .blog-search{width:100%;font:inherit;font-size:1rem;color:#25123f;background:#fff;border:1.5px solid rgba(82,32,143,.16);border-radius:999px;padding:13px 18px 13px 44px;box-shadow:0 8px 22px -14px rgba(82,32,143,.45);transition:border-color .2s ease,box-shadow .2s ease;}
  .blog-search::placeholder{color:#9a8cb3;}
  .blog-search:focus{outline:none;border-color:#7b35d0;box-shadow:0 0 0 4px rgba(123,53,208,.14);}
  @media(max-width:640px){.blog-search-wrap{max-width:none;flex-basis:100%;}}
</style>
<section class="section figma-cream">
  <div class="container">
    <?php
    /* Filter chips come from the MANAGED category list (blog_categories, which
       the admin studio edits), so every category you create shows here. Any
       category a post uses that is not in that list is appended so nothing is
       ever unfilterable. */
    $filter_cats = array_keys(blog_categories());
    foreach ($blog_posts as $bp) {
        $c = (string) ($bp['category'] ?? '');
        if ($c !== '' && !in_array($c, $filter_cats, true)) { $filter_cats[] = $c; }
    }
    ?>
    <div class="blog-toolbar">
      <div class="blog-search-wrap">
        <input type="search" id="blogSearch" class="blog-search" placeholder="Search articles&hellip;" aria-label="Search articles" autocomplete="off">
      </div>
      <div class="blog-filter" role="tablist" aria-label="Filter articles by category">
        <button type="button" class="blog-filter-chip active" data-filter="all">All</button>
        <?php foreach ($filter_cats as $cat): ?>
          <button type="button" class="blog-filter-chip" data-filter="<?php echo e($cat); ?>"><?php echo e($cat); ?></button>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="notes-grid blog-archive-grid" id="blogGrid">
      <?php foreach ($blog_posts as $post): ?>
        <?php $tone = blog_category_tone($post['category'] ?? null); ?>
        <article class="note-card reveal" data-category="<?php echo e($post['category'] ?? ''); ?>" data-search="<?php echo e(mb_strtolower(($post['title'] ?? '') . ' ' . ($post['excerpt'] ?? '') . ' ' . ($post['category'] ?? ''))); ?>">
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
/* Category filter + text search for the blog archive grid (combined). */
(function () {
  var grid = document.getElementById('blogGrid');
  if (!grid) return;
  var chips  = Array.prototype.slice.call(document.querySelectorAll('.blog-filter-chip'));
  var cards  = Array.prototype.slice.call(grid.querySelectorAll('.note-card'));
  var empty  = document.querySelector('.blog-empty');
  var search = document.getElementById('blogSearch');
  var activeFilter = 'all';

  function apply() {
    var term = (search && search.value ? search.value : '').toLowerCase().trim();
    var visible = 0;
    cards.forEach(function (card) {
      var okCat = activeFilter === 'all' || card.getAttribute('data-category') === activeFilter;
      var okTerm = term === '' || (card.getAttribute('data-search') || '').indexOf(term) !== -1;
      var show = okCat && okTerm;
      card.hidden = !show;
      if (show) { card.classList.add('in'); visible++; }
    });
    if (empty) {
      empty.hidden = visible !== 0;
      empty.textContent = term !== ''
        ? 'No articles match your search. Try different words.'
        : 'No articles in this category yet. Check back soon.';
    }
  }

  chips.forEach(function (chip) {
    chip.addEventListener('click', function () {
      chips.forEach(function (c) { c.classList.remove('active'); });
      chip.classList.add('active');
      activeFilter = chip.getAttribute('data-filter');
      apply();
    });
  });
  if (search) {
    search.addEventListener('input', apply);
    search.addEventListener('search', apply); // clearing the field (native "x")
  }
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

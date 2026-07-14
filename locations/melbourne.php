<?php
/* Melbourne location hub. Lives one level deep (/locations/melbourne/), so it
   sets the asset depth prefix and includes shared partials by absolute path,
   exactly like the /blogs/ section. All internal links use asset() with a full
   site-root-relative path so the live link-rewriter maps them correctly. */
$GLOBALS['asset_base'] = '../';
require_once __DIR__ . '/../includes/config.php';

$page_title       = "Children's Book Services in Melbourne | Purple Giraffe Press";
$page_description = "Children's book editing, design and publishing help for Melbourne and Victoria authors. Explore the Purple Giraffe Press services available to Melbourne writers.";
$canonical_path   = 'locations/melbourne.php';
$breadcrumb_name  = 'Melbourne';
$breadcrumbs = [
    ['name' => 'Home',      'url' => page_url('index.php')],
    ['name' => 'Locations', 'url' => page_url('locations/')],
    ['name' => 'Melbourne', 'url' => page_url('locations/melbourne.php')],
];

/* City LocalBusiness schema (see includes/header.php). streetAddress is left out
   until we have a Melbourne address. */
$location_business = [
    'locality'   => 'Melbourne',
    'region'     => 'VIC',
    'postalCode' => '3000',
    'country'    => 'AU',
];

require __DIR__ . '/../includes/header.php';

/* Services offered to Melbourne authors. Each service becomes its own Melbourne
   page over time; add an entry here when the page exists. Icons reuse the
   site's set. */
$melb_services = [
    ['title' => 'Book Editing', 'href' => 'childrens-book-editing-services-in-melbourne.php', 'accent' => ['#4fd1b0', '#19b890', '#053a2c'],
     'short' => 'Developmental, line and copy editing, proofreading and manuscript assessment for picture books, early readers and junior fiction.',
     'icon'  => '<path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path>'],
    ['title' => 'Book Design', 'href' => 'childrens-book-designer-in-melbourne.php', 'accent' => ['#ff9f7d', '#ff7a59', '#4a1500'],
     'short' => 'Illustration, page layout, cover design and KDP-ready formatting, built around your story for picture books and beyond.',
     'icon'  => '<path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle>'],
    ['title' => 'Ghostwriting', 'href' => 'ghostwriting-services-in-melbourne.php', 'accent' => ['#9b8cff', '#6f5bdc', '#1b1147'],
     'short' => 'Share your idea and we write the whole manuscript in your voice, for children\'s books, fiction and personal family stories.',
     'icon'  => '<path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path>'],
    ['title' => 'Book Marketing', 'href' => 'book-promotion-services-in-melbourne.php', 'accent' => ['#6ec8ff', '#3aa0ff', '#042a4a'],
     'short' => 'Promotion plans that get your book seen, from Amazon and Kindle visibility to local Melbourne bookshops, schools and reviews.',
     'icon'  => '<path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path>'],
    ['title' => 'Book Formatting', 'href' => 'childrens-book-formatting-in-melbourne.php', 'accent' => ['#5fd0c4', '#1fb5a6', '#043a34'],
     'short' => 'Interior layout, fonts, image placement and print-ready and KDP files, formatted specifically for children\'s books.',
     'icon'  => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path>'],
    ['title' => 'Fiction Ghostwriting', 'href' => 'childrens-fiction-ghostwriter-in-melbourne.php', 'accent' => ['#c9b4ef', '#7a3dd1', '#2a0f52'],
     'short' => 'You bring the idea, the characters, and the world. We write the full novel in your voice, from first chapter to last page.',
     'icon'  => '<path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path>'],
    ['title' => 'Custom Illustrations', 'href' => 'custom-childrens-book-illustrations-in-melbourne.php', 'accent' => ['#f7c948', '#f7a324', '#4a2e00'],
     'short' => 'Character design, full page art, spot illustrations and cover art, matched to the mood, pacing and age group of your book.',
     'icon'  => '<path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle>'],
    ['title' => 'Proofreading', 'href' => 'childrens-book-proofreading-services-in-melbourne.php', 'accent' => ['#5ec6a8', '#19b890', '#053a2c'],
     'short' => 'A careful final check of spelling, grammar, punctuation, layout and consistency before your book goes to print or online.',
     'icon'  => '<path d="M20 6 9 17l-5-5"></path>'],
    ['title' => 'Audiobook Production', 'href' => 'childrens-audiobook-production-services-melbourne.php', 'accent' => ['#7fd0ff', '#2f8fe6', '#042a4a'],
     'short' => 'Professional narration, editing and mastering that turns your finished manuscript into an audiobook people want to listen to.',
     'icon'  => '<path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v3"></path>'],
    ['title' => 'Author Websites', 'href' => 'childrens-book-website-development-in-melbourne.php', 'accent' => ['#f08fe4', '#d957c9', '#4a0640'],
     'short' => 'Creative, easy-to-navigate author websites that show off your books and help parents, teachers and librarians find you.',
     'icon'  => '<rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path>'],
];

/* Centre the grid when a handful of services exist, so cards do not sit
   awkwardly against the left edge. 4 cards read best as a balanced 2x2. */
$n = count($melb_services);
$grid_style = $n === 1 ? 'grid-template-columns:minmax(0,400px);justify-content:center;'
            : ($n === 2 ? 'grid-template-columns:repeat(2,minmax(0,360px));justify-content:center;'
            : ($n === 4 ? 'grid-template-columns:repeat(2,minmax(0,340px));justify-content:center;' : ''));
?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="<?php echo e(asset('index.php')); ?>">Home</a> / <a href="<?php echo e(asset('locations/')); ?>">Locations</a> / Melbourne</div>
      <h1>Children's <em>Book Services</em> in Melbourne</h1>
      <p class="lead">From first draft to finished book, Purple Giraffe Press helps Melbourne and Victoria authors bring their children's stories to life. Explore the services we offer near you, all handled online so distance is never a barrier.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="<?php echo e(asset('contact.php')); ?>" data-quote-open>Start Your Book</a>
        <a class="btn btn-light" href="<?php echo e(asset('contact.php')); ?>" data-quote-open>Get a Free Estimate</a>
      </div>
    </div>
    <img src="<?php echo e(asset(SITE_MASCOT)); ?>" alt="Purple Giraffe Press mascot helping Melbourne authors">
  </div>
</section>

<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- melbourne services</p>
    <h2>Services for Melbourne Authors</h2>
    <p>Pick the help your book needs. We work with authors across Melbourne and Victoria, so you get children's book specialists close to home.</p>
  </div>
  <div class="container">
    <div class="services-grid" style="<?php echo $grid_style; ?>">
      <?php $i = 0; foreach ($melb_services as $s): $a = $s['accent'];
        $style = sprintf('--accent:%s;--accent-2:%s;--accent-ink:%s;--i:%d;', $a[0], $a[1], $a[2], $i); ?>
      <article class="service-card reveal" style="<?php echo e($style); ?>">
        <span class="service-shine" aria-hidden="true"></span>
        <span class="service-num" aria-hidden="true"><?php echo sprintf('%02d', $i + 1); ?></span>
        <div class="service-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?php echo $s['icon']; ?></svg>
        </div>
        <h3><?php echo e($s['title']); ?></h3>
        <p><?php echo e($s['short']); ?></p>
        <a class="card-link" href="<?php echo e(asset($s['href'])); ?>">
          <span class="card-link-label">Learn more</span>
          <span class="card-link-arrow" aria-hidden="true">&rarr;</span>
          <span class="sr-only"> about <?php echo e($s['title']); ?> in Melbourne</span>
        </a>
      </article>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/cta.php'; ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>

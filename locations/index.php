<?php
/* Locations hub (/locations/). Lists the cities we serve. New cities are added
   as their own file under /locations/ (e.g. locations/sydney.php) plus an entry
   in $locations below. Same subfolder include pattern as /blogs/. */
$GLOBALS['asset_base'] = '../';
require_once __DIR__ . '/../includes/config.php';

$page_title       = "Children's Book Services by Location | Purple Giraffe Press";
$page_description = "Purple Giraffe Press works with children's authors right across Australia. Find your city to see the editing, design and publishing services we offer near you.";
$canonical_path   = 'locations/';
$breadcrumb_name  = 'Locations';
$breadcrumbs = [
    ['name' => 'Home',      'url' => page_url('index.php')],
    ['name' => 'Locations', 'url' => page_url('locations/')],
];

require __DIR__ . '/../includes/header.php';

/* Add a new city here plus its page under /locations/. Each card shows the
   city photo as its background, so give every entry an 'image' URL. */
$locations = [
    [
        'name'   => 'Melbourne',
        'region' => 'Victoria',
        'href'   => 'locations/melbourne.php',
        'image'  => 'https://images.unsplash.com/photo-1545044846-351ba102b6d5?auto=format&fit=crop&w=900&q=72',
        'short'  => "Children's book editing, design and publishing support for authors across Melbourne and Victoria.",
    ],
    [
        'name'   => 'London',
        'region' => 'United Kingdom',
        'href'   => 'locations/london.php',
        'image'  => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=900&q=72',
        'short'  => "Children's book editing, design and publishing support for authors across London and the UK.",
    ],
];
?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="<?php echo e(asset('index.php')); ?>">Home</a> / Locations</div>
      <h1>Children's Book Services, <em>City by City</em></h1>
      <p class="lead">Purple Giraffe Press works with children's authors right across Australia and beyond. Find your city below to see the services we offer near you, from editing and cover design to full publishing support.</p>
    </div>
    <img src="<?php echo e(asset(SITE_MASCOT)); ?>" alt="Purple Giraffe Press mascot pointing at a map">
  </div>
</section>

<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- where we work</p>
    <h2>Choose Your Location</h2>
    <p>More cities are on the way. If you do not see yours yet, get in touch, we work with authors Australia-wide.</p>
  </div>
  <div class="container">
    <div class="location-grid">
      <?php foreach ($locations as $loc): ?>
      <a class="location-card reveal" href="<?php echo e(asset($loc['href'])); ?>">
        <img class="location-card-img" src="<?php echo e($loc['image']); ?>" alt="<?php echo e($loc['name'] . ', ' . $loc['region']); ?>" loading="lazy" decoding="async">
        <div class="location-card-body">
          <h3><?php echo e($loc['name']); ?><small><?php echo e($loc['region']); ?></small></h3>
          <p><?php echo e($loc['short']); ?></p>
          <span class="location-card-cta">View <?php echo e($loc['name']); ?> services <span aria-hidden="true">&rarr;</span></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/cta.php'; ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>

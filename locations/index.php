<?php
/* Locations hub (/locations/). Cities are grouped by country. New cities are
   added as their own file under /locations/ (e.g. locations/sydney.php) plus an
   entry in the matching country block below. Same subfolder include pattern as
   /blogs/. */
$GLOBALS['asset_base'] = '../';
require_once __DIR__ . '/../includes/config.php';

$page_title       = "Children's Book Services by Location | Purple Giraffe";
$page_description = "Explore Purple Giraffe Press's children's book services across every location. Editing, illustration, publishing and more, wherever you're based.";
$canonical_path   = 'locations/';
$breadcrumb_name  = 'Locations';
$breadcrumbs = [
    ['name' => 'Home',      'url' => page_url('index.php')],
    ['name' => 'Locations', 'url' => page_url('locations/')],
];

require __DIR__ . '/../includes/header.php';

/* Add a new city to the country it belongs to, or add a new country block with
   its own 'flag' code (see site_flag() in includes/config.php). Each card shows
   the city photo as its background, so give every entry an 'image' URL. */
$location_groups = [
    [
        'country' => 'Australia',
        'flag'    => 'au',
        'cities'  => [
            [
                'name'   => 'Melbourne',
                'region' => 'Victoria',
                'href'   => 'locations/melbourne.php',
                'image'  => 'https://images.unsplash.com/photo-1545044846-351ba102b6d5?auto=format&fit=crop&w=900&q=72',
                'short'  => "Children's book editing, design and publishing support for authors across Melbourne and Victoria.",
            ],
            [
                'name'   => 'Sydney',
                'region' => 'New South Wales',
                'href'   => 'locations/sydney.php',
                'image'  => 'https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?auto=format&fit=crop&w=900&q=72',
                'short'  => "Children's book editing, design and publishing support for authors across Sydney and New South Wales.",
            ],
            [
                'name'   => 'Queensland',
                'region' => 'Brisbane and regional QLD',
                'href'   => 'locations/queensland.php',
                'image'  => 'https://images.unsplash.com/photo-1548661625-a30d197ce439?auto=format&fit=crop&w=900&q=72',
                'short'  => "Children's book editing, design and publishing support for authors from Brisbane to regional Queensland.",
            ],
        ],
    ],
    [
        'country' => 'United Kingdom',
        'flag'    => 'gb',
        'cities'  => [
            [
                'name'   => 'London',
                'region' => 'Greater London',
                'href'   => 'locations/london.php',
                'image'  => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=900&q=72',
                'short'  => "Children's book editing, design and publishing support for authors across London and the UK.",
            ],
        ],
    ],
    [
        'country' => 'Ireland',
        'flag'    => 'ie',
        'cities'  => [
            [
                'name'   => 'Dublin',
                'region' => 'County Dublin',
                'href'   => 'locations/dublin.php',
                'image'  => 'https://images.unsplash.com/photo-1549918864-48ac978761a4?auto=format&fit=crop&w=900&q=72',
                'short'  => "Children's book editing, design and publishing support for authors across Dublin and Ireland.",
            ],
        ],
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
    <p>We work with authors in Australia, the United Kingdom and Ireland. More cities are on the way, so if you do not see yours yet, get in touch and we will look after you from wherever you write.</p>
  </div>
  <div class="container">
    <?php foreach ($location_groups as $group): ?>
    <?php $city_count = count($group['cities']); ?>
    <div class="location-country" id="<?php echo e(strtolower(str_replace(' ', '-', $group['country']))); ?>">
      <div class="location-country-head">
        <?php echo site_flag($group['flag']); ?>
        <h3><?php echo e($group['country']); ?></h3>
        <span class="location-country-rule" aria-hidden="true"></span>
        <span class="location-country-count"><?php echo (int) $city_count; ?> <?php echo $city_count === 1 ? 'location' : 'locations'; ?></span>
      </div>
      <div class="location-grid">
        <?php foreach ($group['cities'] as $loc): ?>
        <a class="location-card reveal" href="<?php echo e(asset($loc['href'])); ?>">
          <img class="location-card-img" src="<?php echo e($loc['image']); ?>" alt="<?php echo e($loc['name'] . ', ' . $group['country']); ?>" loading="lazy" decoding="async">
          <div class="location-card-body">
            <h3><?php echo e($loc['name']); ?><small><?php echo e($loc['region']); ?></small></h3>
            <p><?php echo e($loc['short']); ?></p>
            <span class="location-card-cta">View <?php echo e($loc['name']); ?> services <span aria-hidden="true">&rarr;</span></span>
          </div>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php require __DIR__ . '/../includes/cta.php'; ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>

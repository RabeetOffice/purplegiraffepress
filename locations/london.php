<?php
/* London location hub. Lives one level deep (/locations/london/), so it
   sets the asset depth prefix and includes shared partials by absolute path,
   exactly like the /blogs/ section. All internal links use asset() with a full
   site-root-relative path so the live link-rewriter maps them correctly. */
$GLOBALS['asset_base'] = '../';
require_once __DIR__ . '/../includes/config.php';

$page_title       = "Children's Book Services in London | Purple Giraffe Press";
$page_description = "Children's book editing, design and publishing help for London authors. Explore the Purple Giraffe Press services available to London writers.";
$canonical_path   = 'locations/london.php';
$breadcrumb_name  = 'London';
$breadcrumbs = [
    ['name' => 'Home',      'url' => page_url('index.php')],
    ['name' => 'Locations', 'url' => page_url('locations/')],
    ['name' => 'London',    'url' => page_url('locations/london.php')],
];

/* City LocalBusiness schema (see includes/header.php). UK country code and a
   central-London placeholder postcode until we have a real London address. */
$location_business = [
    'locality'   => 'London',
    'region'     => 'London',
    'postalCode' => 'EC1V 2NX',
    'country'    => 'GB',
];

require __DIR__ . '/../includes/header.php';

/* Services offered to London authors. Sourced from the shared city services
   data (includes/location-services-data.php) so the hub and every London
   service page stay in sync from one place. */
require_once __DIR__ . '/../includes/location-services-data.php';
$lon_services = pgp_location_services('london')['services'];

/* Centre the grid when a handful of services exist, so cards do not sit
   awkwardly against the left edge. */
$n = count($lon_services);
$grid_style = $n === 1 ? 'grid-template-columns:minmax(0,400px);justify-content:center;'
            : ($n === 2 ? 'grid-template-columns:repeat(2,minmax(0,360px));justify-content:center;'
            : ($n === 4 ? 'grid-template-columns:repeat(2,minmax(0,340px));justify-content:center;' : ''));
?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="<?php echo e(asset('index.php')); ?>">Home</a> / <a href="<?php echo e(asset('locations/')); ?>">Locations</a> / London</div>
      <h1>Children's <em>Book Services</em> in London</h1>
      <p class="lead">From first draft to finished book, Purple Giraffe Press helps London authors bring their children's stories to life. Explore the services we offer near you, all handled online so distance is never a barrier.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="<?php echo e(asset('contact.php')); ?>" data-quote-open>Start Your Book</a>
        <a class="btn btn-light" href="<?php echo e(asset('contact.php')); ?>" data-quote-open>Get a Free Estimate</a>
      </div>
    </div>
    <img src="<?php echo e(asset(SITE_MASCOT)); ?>" alt="Purple Giraffe Press mascot helping London authors">
  </div>
</section>

<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- london services</p>
    <h2>Services for London Authors</h2>
    <p>Pick the help your book needs. We work with authors across London and the UK, so you get children's book specialists close to home.</p>
  </div>
  <div class="container">
    <div class="services-grid" style="<?php echo $grid_style; ?>">
      <?php $i = 0; foreach ($lon_services as $s): $a = $s['accent'];
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
          <span class="sr-only"> about <?php echo e($s['title']); ?> in London</span>
        </a>
      </article>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../includes/cta.php'; ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>

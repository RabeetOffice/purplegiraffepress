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

<?php
/* Service cards come from the shared city renderer, so adding a London page to
   includes/location-services-data.php surfaces it here automatically. */
$location_city             = 'london';
$location_services_limit   = 0;   // the city index links to every London service; service pages show a rotating 6
$location_services_eyebrow = '- explore more services';
$location_services_heading = 'Services for London Authors';
$location_services_intro   = "Pick the help your book needs. We work with authors across London and the UK, so you get children's book specialists close to home.";
$location_services_section = 'section section-white';
require __DIR__ . '/../includes/location-services.php';
?>

<?php require __DIR__ . '/../includes/cta.php'; ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>

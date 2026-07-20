<?php
/* Sydney location hub. Lives one level deep (/locations/sydney/), so it sets
   the asset depth prefix and includes shared partials by absolute path, exactly
   like the /blogs/ section. All internal links use asset() with a full
   site-root-relative path so the live link-rewriter maps them correctly. */
$GLOBALS['asset_base'] = '../';
require_once __DIR__ . '/../includes/config.php';

$page_title       = "Children's Book Services Sydney | Purple Giraffe";
$page_description = "Explore Purple Giraffe Press's children's book services in Sydney. Editing, illustration, publishing and more, tailored to local authors.";
$canonical_path   = 'locations/sydney.php';
$breadcrumb_name  = 'Sydney';
$breadcrumbs = [
    ['name' => 'Home',      'url' => page_url('index.php')],
    ['name' => 'Locations', 'url' => page_url('locations/')],
    ['name' => 'Sydney',    'url' => page_url('locations/sydney.php')],
];

/* City LocalBusiness schema (see includes/header.php). streetAddress is left out
   until we have a Sydney address. */
$location_business = [
    'locality'   => 'Sydney',
    'region'     => 'NSW',
    'postalCode' => '2000',
    'country'    => 'AU',
];

require __DIR__ . '/../includes/header.php';
?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="<?php echo e(asset('index.php')); ?>">Home</a> / <a href="<?php echo e(asset('locations/')); ?>">Locations</a> / Sydney</div>
      <h1>Children's <em>Book Services</em> in Sydney</h1>
      <p class="lead">From first draft to finished book, Purple Giraffe Press helps Sydney and New South Wales authors bring their children's stories to life. Explore the services we offer near you, all handled online so distance is never a barrier.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="<?php echo e(asset('contact.php')); ?>" data-quote-open>Start Your Book</a>
        <a class="btn btn-light" href="<?php echo e(asset('contact.php')); ?>" data-quote-open>Get a Free Estimate</a>
      </div>
    </div>
    <img src="<?php echo e(asset(SITE_MASCOT)); ?>" alt="Purple Giraffe Press mascot helping Sydney authors">
  </div>
</section>

<?php
/* Service cards come from the shared city renderer, so adding a Sydney page to
   includes/location-services-data.php surfaces it here automatically. */
$location_city             = 'sydney';
$location_services_limit   = 0;   // the city index links to every Sydney service; service pages show a rotating 6
$location_services_eyebrow = '- explore more services';
$location_services_heading = 'Services for Sydney Authors';
$location_services_intro   = "Pick the help your book needs. We work with authors across Sydney and New South Wales, so you get children's book specialists close to home.";
$location_services_section = 'section section-white';
require __DIR__ . '/../includes/location-services.php';
?>

<?php require __DIR__ . '/../includes/cta.php'; ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>

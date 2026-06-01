<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Services - Purple Giraffe Press';
$page_description = 'Children\'s book publishing services including editing, illustration, cover design, formatting, global distribution, marketing, and author websites.';
$canonical_path = 'services.php';
$faq_category = 'general';
$load_faqs_only = true;
include 'includes/faqs.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Services</div>
      <h1>Full-service publishing for children's authors.</h1>
      <p class="lead">Choose one creative service or build a complete publishing path from manuscript to launch.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot surrounded by publishing service ideas">
  </div>
</section>

<section class="section section-white">
  <div class="container center">
    <?php $services_detail = true; include 'includes/services.php'; ?>
  </div>
</section>

<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow">Author experience</p>
    <h2>Creative support with a calm process</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<section class="section section-white">
  <div class="container narrow center">
    <p class="eyebrow">Questions</p>
    <h2>Service questions authors ask first</h2>
    <?php unset($load_faqs_only); include 'includes/faqs.php'; ?>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

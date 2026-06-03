<?php include 'includes/config.php'; ?>
<?php
$page_title = "Testimonials | Purple Giraffe Press";
$page_description = "Read what authors say about publishing their children's books with Purple Giraffe Press: editing, illustration, design, royalties, and global distribution.";
$canonical_path = 'testimonials.php';
require_once __DIR__ . '/includes/testimonials-data.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Testimonials</div>
      <h1>Loved by <em>authors.</em></h1>
      <p class="lead">Hundreds of authors have brought their children&apos;s books to life with us. Here is what a few of them had to say.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple Giraffe Press mascot beside author testimonials">
  </div>
</section>

<section class="section t-page">
  <div class="container">
    <div class="t-grid">
      <?php foreach ($testimonials as $i => $t) echo pgp_testimonial_card($t, $i); ?>
    </div>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

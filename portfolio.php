<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Portfolio - Purple Giraffe Press';
$page_description = 'Explore a playful sample catalog of picture books, early readers, and chapter books from Purple Giraffe Press.';
$canonical_path = 'portfolio.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Portfolio</div>
      <h1>Books with color, courage, and character.</h1>
      <p class="lead">Our catalog celebrates picture books, early readers, and chapter books with rich illustrations and careful editorial support.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot presenting the portfolio">
  </div>
</section>

<section class="section section-white">
  <div class="container">
    <?php $portfolio_mode = 'grid'; include 'includes/portfolio.php'; ?>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

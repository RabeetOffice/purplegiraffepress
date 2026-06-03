<?php include 'includes/config.php'; ?>
<?php
$page_title = "Our Children's Book Portfolio | Purple Giraffe Press";
$page_description = 'Explore a playful sample catalog of picture books, early readers, and chapter books from Purple Giraffe Press.';
$canonical_path = 'portfolio.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Portfolio</div>
      <h1>Our Portfolio</h1>
      <p class="lead">Explore some of the incredible children's books we've helped bring to life. From whimsical picture books to life-changing lessons, our authors create magic on every page.</p>
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

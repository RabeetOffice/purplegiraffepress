<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Contact - Purple Giraffe Press';
$page_description = 'Contact Purple Giraffe Press for children\'s book publishing, illustration, editing, distribution, and free project estimates.';
$canonical_path = 'contact.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Contact</div>
      <h1>Let us talk about your book.</h1>
      <p class="lead">Ask a question, request an estimate, or tell us what you are writing. We will reply with a friendly next step.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot ready to answer publishing questions">
  </div>
</section>

<section class="section section-white">
  <div class="container contact-grid">
    <div class="info-card">
      <p class="eyebrow">Contact details</p>
      <h2>We are here for story questions.</h2>
      <ul class="check-list">
        <li><a href="tel:<?php echo e(preg_replace('/[^0-9]/', '', SITE_PHONE)); ?>"><?php echo e(SITE_PHONE); ?></a></li>
        <li><a href="mailto:<?php echo e(SITE_EMAIL); ?>"><?php echo e(SITE_EMAIL); ?></a></li>
        <li><?php echo e(SITE_ADDRESS); ?></li>
        <li><?php echo e(SITE_HOURS); ?></li>
      </ul>
    </div>
    <?php include 'includes/forms/contact-form.php'; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

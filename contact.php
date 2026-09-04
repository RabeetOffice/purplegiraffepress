<?php include 'includes/config.php'; ?>
<?php
$page_title = "Contact Purple Giraffe Press | Children's Book Publisher";
$page_description = 'Contact Purple Giraffe Press for children\'s book publishing, illustration, editing, distribution, and free project estimates.';
$canonical_path = 'contact.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Contact</div>
      <h1>Let us talk about your book.</h1>
      <p class="lead">Tell us what you are writing and the kind of book you have in mind. Our publishing team will come back to you within one business day with a friendly, personalised plan.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot ready to answer publishing questions">
  </div>
</section>

<section class="section section-white">
  <div class="container contact-grid">
    <div class="info-card">
      <p class="eyebrow">Contact details</p>
      <h2>We are here for story questions.</h2>
      <p class="info-lead">Prefer to reach out directly? Call, email, or drop by the studio. We read every message ourselves.</p>
      <ul class="check-list">
        <?php foreach (site_phones() as $phone): ?>
          <li><a href="tel:<?php echo e(tel_href($phone['number'])); ?>"><span class="phone-region"><?php echo e($phone['short']); ?></span><?php echo e($phone['number']); ?></a></li>
        <?php endforeach; ?>
        <li><a href="mailto:<?php echo e(SITE_EMAIL); ?>"><?php echo e(SITE_EMAIL); ?></a></li>
        <li><a href="<?php echo e(SITE_REVIEW_URL); ?>" target="_blank" rel="noopener"><?php echo e(SITE_ADDRESS); ?></a></li>
        <li><?php echo e(SITE_HOURS); ?></li>
      </ul>
    </div>
    <?php include 'includes/forms/publishing-enquiry-form.php'; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

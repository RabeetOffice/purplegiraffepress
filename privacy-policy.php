<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Privacy Policy - Purple Giraffe Press';
$page_description = 'Read the Purple Giraffe Press privacy policy for website visitors, authors, and submission inquiries.';
$canonical_path = 'privacy-policy.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Privacy Policy</div>
      <h1>Privacy Policy</h1>
      <p class="lead">How we collect, use, and protect information shared with Purple Giraffe Press.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot beside privacy information">
  </div>
</section>

<section class="section section-white">
  <div class="container narrow rich-text">
    <h2>Information We Collect</h2>
    <p>We may collect your name, email address, phone number, manuscript details, project goals, and messages when you contact us, request an estimate, subscribe to updates, or submit a story for review.</p>
    <h2>How We Use Information</h2>
    <p>We use information to respond to inquiries, review submissions, prepare publishing estimates, provide requested services, send project updates, and improve the website experience.</p>
    <h2>Manuscripts and Creative Work</h2>
    <p>Manuscripts, summaries, illustrations, and creative materials sent to us are treated as confidential review materials. We do not sell or share author submissions for unrelated marketing.</p>
    <h2>Email Updates</h2>
    <p>If you join our email list, we may send occasional publishing tips, announcements, and service updates. You can unsubscribe at any time.</p>
    <h2>Third-Party Services</h2>
    <p>We may use reputable tools for email, analytics, forms, payment processing, publishing distribution, and project communication. These providers only receive information needed to perform their services.</p>
    <h2>Data Security</h2>
    <p>We use reasonable administrative and technical safeguards to protect submitted information, but no internet transmission is completely secure.</p>
    <h2>Contact</h2>
    <p>For privacy questions, contact us at <a href="mailto:<?php echo e(SITE_EMAIL); ?>"><?php echo e(SITE_EMAIL); ?></a>.</p>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

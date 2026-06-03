<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Terms and Conditions | Purple Giraffe Press Publishing';
$page_description = 'Review the terms and conditions for using the Purple Giraffe Press website and publishing inquiry process.';
$canonical_path = 'terms-and-conditions.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Terms and Conditions</div>
      <h1>Terms and Conditions</h1>
      <p class="lead">The terms for using this website and contacting Purple Giraffe Press.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot beside terms information">
  </div>
</section>

<section class="section section-white">
  <div class="container narrow rich-text">
    <h2>Website Use</h2>
    <p>This website provides general information about Purple Giraffe Press, our publishing services, and our submission process. By using the website, you agree to use it lawfully and respectfully.</p>
    <h2>No Guaranteed Acceptance</h2>
    <p>Submitting a manuscript, inquiry, or project summary does not guarantee acceptance, publication, representation, or a specific estimate. We review projects based on creative fit, production needs, and availability.</p>
    <h2>Author Rights</h2>
    <p>Authors retain ownership of manuscripts, characters, copyrights, and creative materials unless a separate written agreement says otherwise. Service terms, fees, rights, and deliverables are confirmed in project agreements.</p>
    <h2>Service Estimates</h2>
    <p>Pricing shown on the website is informational and may vary depending on manuscript length, illustration scope, production format, timeline, and marketing needs.</p>
    <h2>Website Content</h2>
    <p>Text, graphics, design elements, logos, and mascot artwork on this website belong to Purple Giraffe Press or their respective owners and may not be copied without permission.</p>
    <h2>External Links</h2>
    <p>This website may link to third-party platforms, distributors, or social media pages. We are not responsible for the content, policies, or practices of external websites.</p>
    <h2>Contact</h2>
    <p>For terms questions, contact us at <a href="mailto:<?php echo e(SITE_EMAIL); ?>"><?php echo e(SITE_EMAIL); ?></a>.</p>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

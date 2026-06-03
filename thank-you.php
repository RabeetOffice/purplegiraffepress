<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'includes/config.php';

// Show the "NDA ready" card when the submission that landed here requested one.
// Gated on the ?nda=1 redirect flag (set by form-submission.php) plus the saved
// payload — so it shows on an NDA submit, survives refresh, and never lingers on
// a submission made without the NDA box ticked. Data stays in the session for
// nda-download.php to regenerate the PDF.
$nda     = $_SESSION['pgp_nda'] ?? null;
$has_nda = isset($_GET['nda']) && is_array($nda) && trim((string) ($nda['name'] ?? '')) !== '';

$page_title = "Thank You | Purple Giraffe Press | Children's Books";
$page_description = 'Thanks for getting in touch with Purple Giraffe Press. We will reply within one business day.';
$canonical_path = 'thank-you.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Thank You</div>
      <span class="thanks-check" aria-hidden="true">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
      </span>
      <h1>Thank you, your message is <em>on its way!</em></h1>
      <p class="lead">We&apos;ve received your details and a member of our publishing team will be in touch within one business day. Keep an eye on your inbox (and your spam folder, just in case).</p>

      <?php if ($has_nda): ?>
      <div class="nda-ready" role="group" aria-label="Your signed NDA is ready">
        <span class="nda-ready-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7 3v5c0 4.4-2.9 8.3-7 9-4.1-.7-7-4.6-7-9V6l7-3z"/><path d="m9 12 2 2 4-4"/></svg>
        </span>
        <h2 class="nda-ready-title">Your Signed NDA is Ready</h2>
        <p class="nda-ready-text">We&apos;ve generated a professional Mutual Non-Disclosure Agreement pre-populated with your details. Download your copy below. A signed copy is also attached to the enquiry our team received, so your idea stays strictly confidential.</p>
        <a class="btn btn-primary nda-ready-btn" href="<?php echo e(asset('nda-download.php')); ?>">
          <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v11"/><path d="m7.5 11.5 4.5 4.5 4.5-4.5"/><path d="M5 19h14"/></svg>
          Download My NDA
        </a>
        <?php if (!empty($nda['email'])): ?>
        <p class="nda-ready-inbox">Keep an eye on your inbox at <strong><?php echo e($nda['email']); ?></strong></p>
        <?php endif; ?>
      </div>
      <?php endif; ?>

      <div class="button-row" style="justify-content:center;">
        <a class="btn btn-primary" href="index.php">Back to home</a>
        <a class="btn btn-light" href="portfolio.php">Explore our books</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

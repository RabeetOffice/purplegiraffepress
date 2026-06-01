<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Submissions - Purple Giraffe Press';
$page_description = 'Submit your children\'s book manuscript to Purple Giraffe Press for review and a customized publishing estimate.';
$canonical_path = 'submissions.php';
$faq_category = 'submissions';
$load_faqs_only = true;
include 'includes/faqs.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Submissions</div>
      <h1>Send us the story you cannot stop thinking about.</h1>
      <p class="lead">We review picture books, early readers, and middle grade chapter books for children.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot holding a manuscript submission">
  </div>
</section>

<section class="section section-white">
  <div class="container split-grid">
    <div>
      <p class="eyebrow">Guidelines</p>
      <h2>What to include with your submission</h2>
      <p class="lead">Send the manuscript, your target reader age, a short author note, and any artwork or references you already have.</p>
      <div class="feature-grid" style="grid-template-columns: 1fr; margin-top: 28px;">
        <article class="feature-card"><div class="icon">PB</div><h3>Picture Books</h3><p>Ages 2 to 8, usually under 1,000 words, with strong page-turn potential.</p></article>
        <article class="feature-card"><div class="icon">ER</div><h3>Early Readers</h3><p>Ages 5 to 9, built around clear vocabulary, rhythm, humor, and confidence.</p></article>
        <article class="feature-card"><div class="icon">MG</div><h3>Chapter Books</h3><p>Ages 8 to 12, with memorable characters, emotional stakes, and a strong hook.</p></article>
      </div>
    </div>
    <?php include 'includes/forms/submission-form.php'; ?>
  </div>
</section>

<section class="section section-soft">
  <div class="container narrow center">
    <p class="eyebrow">Submission FAQ</p>
    <h2>Before you send your manuscript</h2>
    <?php unset($load_faqs_only); include 'includes/faqs.php'; ?>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

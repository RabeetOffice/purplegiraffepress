<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Pricing - Purple Giraffe Press';
$page_description = 'Review Purple Giraffe Press publishing package options for children\'s book authors, with flat fees and 100% author royalties.';
$canonical_path = 'pricing.php';
$faq_category = 'pricing';
$load_faqs_only = true;
include 'includes/faqs.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Pricing</div>
      <h1>Clear packages, author-owned royalties.</h1>
      <p class="lead">Flat project pricing keeps the model simple: you pay for professional production, then keep 100% of your book royalties.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot beside publishing pricing cards">
  </div>
</section>

<section class="section section-white">
  <div class="container center">
    <div class="pricing-grid">
      <article class="price-card reveal">
        <span class="badge">Starter</span>
        <h3>Story Polish</h3>
        <div class="price">From $1,800</div>
        <p>For authors who need professional editing and publishing guidance before artwork begins.</p>
        <ul class="check-list">
          <li>Manuscript assessment</li>
          <li>Developmental editing notes</li>
          <li>Line editing and proofreading</li>
          <li>Publishing roadmap</li>
        </ul>
        <a class="btn btn-light" href="contact.php">Ask for estimate</a>
      </article>
      <article class="price-card featured reveal">
        <span class="badge">Most popular</span>
        <h3>Picture Book Launch</h3>
        <div class="price">From $6,500</div>
        <p>A complete path for illustrated children's books from manuscript to print and ebook setup.</p>
        <ul class="check-list">
          <li>Editing and proofreading rounds</li>
          <li>Custom illustration direction</li>
          <li>Cover and interior design</li>
          <li>ISBN and distribution setup</li>
          <li>Launch copy and marketing checklist</li>
        </ul>
        <a class="btn btn-sun" href="submissions.php">Start publishing</a>
      </article>
      <article class="price-card reveal">
        <span class="badge">Premium</span>
        <h3>Author Platform</h3>
        <div class="price">Custom</div>
        <p>For authors who want publishing plus marketing assets, outreach, and a storybook-style website.</p>
        <ul class="check-list">
          <li>Everything in Picture Book Launch</li>
          <li>Author website</li>
          <li>School and library outreach kit</li>
          <li>Reviewer and podcast pitch support</li>
        </ul>
        <a class="btn btn-light" href="contact.php">Plan my project</a>
      </article>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container narrow center">
    <p class="eyebrow">Pricing FAQ</p>
    <h2>Simple answers about fees and royalties</h2>
    <?php unset($load_faqs_only); include 'includes/faqs.php'; ?>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

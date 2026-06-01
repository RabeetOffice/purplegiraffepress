<?php
include 'includes/config.php';

/* =====================================================================
   Distribution - self-contained service page. All copy lives here.
   ===================================================================== */
$page_title       = 'Children\'s Book Distribution Services | Purple Giraffe Press';
$page_description = 'Global children\'s book distribution. We list your print and ebook with major retailers, schools, and libraries, and handle the metadata that makes it sell.';
$canonical_path   = 'distribution.php';

$hero_heading = 'Your book, available <em>everywhere</em> <strong>readers shop</strong>';
$hero_lead    = 'A book families cannot find is a book they cannot buy. We get your print and ebook listed with major retailers, schools, and libraries around the world.';

$block1 = array (
  'h' => 'From your files to the world\'s bookshelves',
  'p' => 
  array (
    0 => 'Distribution is the quiet engine of publishing. It is how your book becomes orderable in a bookstore, searchable online, and available to schools and libraries.',
    1 => 'We handle the setup and metadata that make your book easy to find and order, across print and ebook.',
  ),
  'points' => 
  array (
    0 => 'Print and ebook listed with major stores',
    1 => 'Access to school and library channels',
    2 => 'Metadata that helps readers find you',
  ),
  'img' => 'https://images.unsplash.com/photo-1502920917128-1aa500764cbd?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Distribution for children\'s books at Purple Giraffe Press',
);
$block2 = array (
  'h' => 'The quiet engine behind every sale',
  'p' => 
  array (
    0 => 'A book families cannot find is a book they cannot buy. Distribution is how your story becomes orderable, searchable, and stocked.',
    1 => 'We set up and maintain the listings and metadata, across print and ebook, so the readers who want your book can get it.',
  ),
  'img' => 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Purple Giraffe Press Distribution',
);

$steps = array (
  0 => 
  array (
    't' => 'Prepare',
    'd' => 'We finalise your files for each format and sales channel. Getting the basics right prevents headaches later. We confirm specifications for print and ebook. Clean files mean smooth listings.',
  ),
  1 => 
  array (
    't' => 'Set metadata',
    'd' => 'We write the categories, keywords, and descriptions that help readers find you. Discovery is half the battle. We choose terms real buyers actually search. Good metadata keeps working long after launch.',
  ),
  2 => 
  array (
    't' => 'List',
    'd' => 'Your book is submitted to retail and library channels. We handle the forms and the fiddly details. We make sure every required field is right. Submission is where small mistakes cost weeks.',
  ),
  3 => 
  array (
    't' => 'Verify',
    'd' => 'We confirm your listings appear correctly and completely. Nothing is left half set up. We check titles, prices, covers, and descriptions. What readers see is what you intended.',
  ),
  4 => 
  array (
    't' => 'Go live',
    'd' => 'Your book becomes orderable around the world, in print and ebook. Readers can finally buy it. Availability spreads across the channels you chose. The store doors are open.',
  ),
  5 => 
  array (
    't' => 'Maintain',
    'd' => 'We help keep prices, details, and availability accurate over time. Your listings stay healthy as things change. We update when you add formats or editions. Maintenance protects your long term sales.',
  ),
);

$page_faqs = array (
  0 => 
  array (
    'q' => 'Where will my book be available?',
    'a' => 'We distribute to major online retailers and the wholesale channels used by bookstores, schools, and libraries, in print and ebook, across many countries.',
  ),
  1 => 
  array (
    'q' => 'Do I keep my royalties through distribution?',
    'a' => 'Yes. Retail royalties are paid to you. We set up and maintain the distribution so your book stays available and discoverable.',
  ),
  2 => 
  array (
    'q' => 'How long until my book is available?',
    'a' => 'Listings usually appear within a few days to a couple of weeks, depending on the channel.',
  ),
  3 => 
  array (
    'q' => 'Can my book reach bookstores?',
    'a' => 'Yes. We use the wholesale channels that bookstores, schools, and libraries order from.',
  ),
  4 => 
  array (
    'q' => 'Will my book be available internationally?',
    'a' => 'Yes. We distribute across many countries in print and ebook.',
  ),
);

$top_services = array (
  0 => 'editing',
  1 => 'book-cover-design',
  2 => 'marketing-publicity',
  3 => 'book-publishing',
  4 => 'custom-illustrations',
  5 => 'author-websites',
);

include 'includes/header.php';
?>

<!-- 1 · HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Distribution</div>
      <h1><?php echo $hero_heading; ?></h1>
      <p class="lead"><?php echo e($hero_lead); ?></p>
      <div class="button-row">
        <a class="btn btn-sun" href="submissions.php">Start Your Book</a>
        <a class="btn btn-light" href="portfolio.php">See Our Work</a>
      </div>
    </div>
    <div class="svc-hero-form reveal"><?php include 'includes/forms/contact-form.php'; ?></div>
  </div>
</section>

<!-- 2 · LOGO SLIDER -->
<?php include 'includes/logo-slider.php'; ?>

<!-- 3 · LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what it is</p>
      <h2><?php echo e($block1['h']); ?></h2>
      <?php foreach ($block1['p'] as $bi => $para): ?>
        <p class="<?php echo $bi === 0 ? 'lead' : ''; ?>"><?php echo e($para); ?></p>
      <?php endforeach; ?>
      <ul class="svc-points">
        <?php foreach ($block1['points'] as $pt): ?>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><?php echo e($pt); ?></span></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="<?php echo e($block1['img']); ?>" alt="<?php echo e($block1['alt']); ?>" loading="lazy"></figure>
  </div>
</section>

<!-- 4 · PORTFOLIO CAROUSEL (full width) -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 5 · SIX STEPS (scrollable) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Your Distribution journey, step by step</h2>
    <p class="lead" style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <?php foreach ($steps as $sn => $st): ?>
        <article class="svc-step reveal">
          <div class="svc-step-head">
            <div class="num"><?php echo $sn + 1; ?></div>
            <h3><?php echo e($st['t']); ?></h3>
          </div>
          <div class="svc-step-body"><p><?php echo e($st['d']); ?></p></div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6 · RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="<?php echo e($block2['img']); ?>" alt="<?php echo e($block2['alt']); ?>" loading="lazy"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2><?php echo e($block2['h']); ?></h2>
      <?php foreach ($block2['p'] as $bi => $para): ?>
        <p class="<?php echo $bi === 0 ? 'lead' : ''; ?>"><?php echo e($para); ?></p>
      <?php endforeach; ?>
      <div class="button-row"><a class="btn btn-primary" href="contact.php">Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 7 · TESTIMONIALS -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 8 · TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Our most popular services</h2>
  </div>
  <div class="container">
    <?php $services_only = $top_services; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 9 · FAQ (FAQPage schema emitted in head via $page_faqs) -->
<section class="section section-white">
  <div class="container narrow center">
    <p class="eyebrow script-mark">- good to know</p>
    <h2>Distribution questions, answered</h2>
    <div class="faq-list">
      <?php foreach ($page_faqs as $fi => $faq): ?>
        <article class="faq-item reveal">
          <button class="faq-question" type="button" aria-expanded="false" aria-controls="svc-faq-<?php echo $fi; ?>">
            <span><?php echo e($faq['q']); ?></span>
            <span aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="svc-faq-<?php echo $fi; ?>"><p><?php echo e($faq['a']); ?></p></div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 10 · FOOTER -->
<?php include 'includes/footer.php'; ?>

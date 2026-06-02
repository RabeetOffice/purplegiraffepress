<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Distribution Services | Purple Giraffe Press';
$page_description = 'Global children\'s book distribution. We list your print and ebook with major retailers, schools, and libraries, and handle the metadata that makes it sell.';
$canonical_path   = 'distribution.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
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

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Distribution</div>
      <h1>Your book, available <em>everywhere</em> <strong>readers shop</strong></h1>
      <p class="lead">A book families cannot find is a book they cannot buy. We get your print and ebook listed with major retailers, schools, and libraries around the world.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Book</a>
        <a class="btn btn-light" href="contact.php" data-quote-open>Get a Free Estimate</a>
      </div>
    </div>
    <div class="svc-hero-form reveal"><?php include 'includes/forms/contact-form.php'; ?></div>
  </div>
</section>

<!-- 2 - LOGO SLIDER -->
<?php include 'includes/logo-slider.php'; ?>

<!-- 3 - LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what it is</p>
      <h2>From your files to the world's bookshelves</h2>
      <p class="lead">Distribution is the quiet engine of publishing. It is how your book becomes orderable in a bookstore, searchable online, and available to schools and libraries.</p>
      <p>We handle the setup and metadata that make your book easy to find and order, across print and ebook.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Print and ebook listed with major stores</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Access to school and library channels</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Metadata that helps readers find you</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1502920917128-1aa500764cbd?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Distribution for children&#039;s books at Purple Giraffe Press" loading="lazy"></figure>
  </div>
</section>

<!-- 4 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 5 - SIX STEPS -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Your Distribution journey, step by step</h2>
    <p class="lead" style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Prepare</h3></div>
        <div class="svc-step-body"><p>We finalise your files for each format and sales channel. Getting the basics right prevents headaches later. We confirm specifications for print and ebook. Clean files mean smooth listings.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Set metadata</h3></div>
        <div class="svc-step-body"><p>We write the categories, keywords, and descriptions that help readers find you. Discovery is half the battle. We choose terms real buyers actually search. Good metadata keeps working long after launch.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>List</h3></div>
        <div class="svc-step-body"><p>Your book is submitted to retail and library channels. We handle the forms and the fiddly details. We make sure every required field is right. Submission is where small mistakes cost weeks.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Verify</h3></div>
        <div class="svc-step-body"><p>We confirm your listings appear correctly and completely. Nothing is left half set up. We check titles, prices, covers, and descriptions. What readers see is what you intended.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Go live</h3></div>
        <div class="svc-step-body"><p>Your book becomes orderable around the world, in print and ebook. Readers can finally buy it. Availability spreads across the channels you chose. The store doors are open.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Maintain</h3></div>
        <div class="svc-step-body"><p>We help keep prices, details, and availability accurate over time. Your listings stay healthy as things change. We update when you add formats or editions. Maintenance protects your long term sales.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Purple Giraffe Press Distribution" loading="lazy"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>The quiet engine behind every sale</h2>
      <p class="lead">A book families cannot find is a book they cannot buy. Distribution is how your story becomes orderable, searchable, and stocked.</p>
      <p>We set up and maintain the listings and metadata, across print and ebook, so the readers who want your book can get it.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 7 - TESTIMONIALS -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 8 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Our most popular services</h2>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'marketing-publicity', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 9 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions authors ask us most. If yours is not here, a quick consultation will cover it.</p>
      <a class="btn btn-sun" href="contact.php" data-quote-open>Book a Free Consultation &rarr;</a>
    </div>
    <div class="svc-faq-list">
      <?php foreach ($page_faqs as $fi => $faq): ?>
        <details class="svc-faq-item"<?php echo $fi === 0 ? ' open' : ''; ?>>
          <summary>
            <span class="qnum"><?php echo str_pad($fi + 1, 2, '0', STR_PAD_LEFT); ?></span>
            <span class="qtxt"><?php echo e($faq['q']); ?></span>
            <span class="toggle" aria-hidden="true">+</span>
          </summary>
          <div class="answer"><p><?php echo e($faq['a']); ?></p></div>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 10 - FOOTER -->
<?php include 'includes/footer.php'; ?>

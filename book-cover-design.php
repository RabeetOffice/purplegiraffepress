<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Cover Design | Purple Giraffe Press';
$page_description = 'Custom children\'s book cover design for paperback, hardcover, and ebook. Front, back, spine, and typography built to stand out in print and as a thumbnail.';
$canonical_path   = 'book-cover-design.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 => 
  array (
    'q' => 'Do you design hardcover and paperback?',
    'a' => 'Yes. We prepare covers for paperback, hardcover with or without a dust jacket, and ebook, each at the correct specification.',
  ),
  1 => 
  array (
    'q' => 'Can you use my existing illustrations?',
    'a' => 'Absolutely. We can build the cover from your book\'s art, or create new key art if the cover needs its own standout image.',
  ),
  2 => 
  array (
    'q' => 'Do you design the full cover or just the front?',
    'a' => 'The full cover: front, back, spine, blurb area, and barcode, set up for your print specification.',
  ),
  3 => 
  array (
    'q' => 'What if I do not have illustrations yet?',
    'a' => 'We can create key cover art, or work alongside our illustration service to develop it.',
  ),
  4 => 
  array (
    'q' => 'Will my cover work as a thumbnail?',
    'a' => 'Yes. We test the design at small sizes so the title and character read clearly in online stores.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Book Cover Design</div>
      <h1>A cover children <em>want</em> to <strong>pick up</strong></h1>
      <p class="lead">Your cover is your book's first hello. We design a front, back, and spine that look great in hand, on a shelf, and as a tiny online thumbnail.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="submissions.php">Start Your Book</a>
        <a class="btn btn-light" href="portfolio.php">See Our Work</a>
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
      <h2>Designed to sell from every angle</h2>
      <p class="lead">Most readers meet your book as a small image on a screen before they ever hold it. A cover has to read clearly at thumbnail size and still feel special in print.</p>
      <p>We balance character, color, and title typography, then prepare production ready files for paperback, hardcover, and ebook so nothing breaks at the printer.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A front cover built around bold, age right art</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Back, spine, blurb, and barcode handled</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Files ready for paperback, hardcover, and ebook</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Book Cover Design for children&#039;s books at Purple Giraffe Press" loading="lazy"></figure>
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
    <h2>Your Book Cover Design journey, step by step</h2>
    <p class="lead" style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Brief</h3></div>
        <div class="svc-step-body"><p>We learn your story, your audience, and any artwork you already have. The cover starts with what the book is really about. We talk about the feeling a reader should get at first glance. That brief guides every design choice.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Concepts</h3></div>
        <div class="svc-step-body"><p>We explore a few distinct cover directions for look and feel. You see real options, not a single take it or leave it design. Each concept solves the brief in a different way. You compare before committing.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Direction</h3></div>
        <div class="svc-step-body"><p>You choose the concept that feels right for your book. We lock the direction together before refining. This keeps the process focused and on budget. From here we go deep on one idea.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Design</h3></div>
        <div class="svc-step-body"><p>We build the full front, back, and spine to print specification. Typography and layout are crafted, not generic. We make sure the title reads clearly and the character shines. Every element is placed with intent.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Refine</h3></div>
        <div class="svc-step-body"><p>We polish details and adjust with your feedback. Small tweaks make a big difference at thumbnail size. We test the cover both small and large. The final design works everywhere your book appears.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Deliver</h3></div>
        <div class="svc-step-body"><p>You receive print and ebook ready cover files. Everything is sized correctly for each format and printer. We include the exact versions you will need. Nothing breaks when it reaches production.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1519682337058-a94d519337bc?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Purple Giraffe Press Book Cover Design" loading="lazy"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>First impressions that earn a second look</h2>
      <p class="lead">A cover has seconds to make a parent or a child stop and look. We balance character, color, and title so it works in hand and as a tiny thumbnail.</p>
      <p>We design for every format you need and deliver production ready files, so nothing shifts or breaks at the printer.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php">Get a Free Estimate &rarr;</a></div>
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
      <a class="btn btn-sun" href="contact.php">Book a Free Consultation &rarr;</a>
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

<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Publishing Services | Purple Giraffe Press';
$page_description = 'End to end children\'s book publishing: editing, illustration, design, print and ebook setup, ISBN, and global distribution. Keep 100% of your royalties.';
$canonical_path   = 'book-publishing.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 => 
  array (
    'q' => 'Do I keep my rights and royalties?',
    'a' => 'Yes. You keep your copyright, characters, and 100% of the royalties paid by retail platforms. We charge flat production fees, not a cut of your sales.',
  ),
  1 => 
  array (
    'q' => 'How long does publishing take?',
    'a' => 'Most picture books take about four to seven months from accepted manuscript to launch, depending on illustration scope and your review pace.',
  ),
  2 => 
  array (
    'q' => 'What formats will my book be available in?',
    'a' => 'We prepare paperback, hardcover, and ebook, and can add an audiobook edition. You choose the formats that fit your story and budget.',
  ),
  3 => 
  array (
    'q' => 'Do I have to use every service?',
    'a' => 'No. You can take the full path from manuscript to launch, or pick only the parts you need, such as editing or illustration.',
  ),
  4 => 
  array (
    'q' => 'What ages do you publish for?',
    'a' => 'We focus on picture books, early readers, and middle grade chapter books, from toddlers through about age twelve.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Book Publishing</div>
      <h1>Children's book publishing, <em>handled</em> <strong>end to end</strong></h1>
      <p class="lead">We take your manuscript from a rough draft to a finished book families can buy, and we stay beside you the whole way. You keep your rights and 100% of your royalties.</p>
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
      <h2>One team for every step of your book</h2>
      <p>Publishing a children's book touches a dozen crafts, from editing and illustration to formatting, printing, and distribution. Coordinating all of that alone is where most first time authors stall.</p>
      <p>Purple Giraffe Press runs the whole journey under one roof, with a single calm point of contact and a clear plan from first draft to launch day.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A single point of contact from draft to launch</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A clear timeline and a fixed, honest budget</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Print and ebook prepared for every major store</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-publishing.webp" alt="Book Publishing for children&#039;s books at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
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
    <h2>Your Book Publishing journey, step by step</h2>
    <p style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Plan</h3></div>
        <div class="svc-step-body"><p>We begin with a relaxed call to learn your story, your goals, and your readers. Together we map the scope, set an honest budget, and pick a realistic launch date. You leave with a clear written plan and a timeline you can follow. No jargon, and no surprises later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Edit</h3></div>
        <div class="svc-step-body"><p>Your manuscript enters structured editing rounds with a children's book editor. We shape structure, pacing, and age fit first, then polish line by line. Your voice is always protected as we work. You approve every meaningful change before we move on.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Illustrate</h3></div>
        <div class="svc-step-body"><p>We pair you with an illustrator whose style suits your characters and tone. You see early sketches and guide the look before final art begins. Each spread is painted to match the rhythm of your text. Nothing is finalised until it feels right to you.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Design</h3></div>
        <div class="svc-step-body"><p>Cover and interior are typeset for young readers, with care for type and spacing. We design the front, back, and spine as one considered package. Everything is built to your printer's exact specification. The finished book looks shelf ready.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Produce</h3></div>
        <div class="svc-step-body"><p>We prepare press ready print files and properly formatted ebooks for every store. Each format is checked so nothing is rejected at upload. We handle ISBNs, copyright pages, and the small details. You receive clean, final files ready to publish.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Launch</h3></div>
        <div class="svc-step-body"><p>We publish, set up distribution, and support your first weeks of sales. You get guidance on what to expect and how to talk about your book. We stay reachable for questions throughout. Launch day feels exciting, not overwhelming.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/why-purple-giraffe.webp" alt="Purple Giraffe Press Book Publishing" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>A boutique press that puts authors first</h2>
      <p>We take on only a handful of books each season, so your story gets real attention instead of a place in a queue. You work directly with the people doing the work.</p>
      <p>You keep your copyright and 100% of your royalties. We earn our fee by doing great work, not by taking a cut of your sales forever.</p>
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

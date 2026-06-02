<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Proofreading Services | Purple Giraffe Press';
$page_description = 'Final proofreading for children\'s books after layout. We catch typos, spacing, hyphenation, and consistency errors so your book prints clean.';
$canonical_path   = 'proofreading.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 => 
  array (
    'q' => 'When should proofreading happen?',
    'a' => 'After editing and after the book is laid out. Proofreading is the final step before print, when the text and design are locked.',
  ),
  1 => 
  array (
    'q' => 'Do I still need editing if I proofread?',
    'a' => 'They do different jobs. Editing improves the writing, proofreading catches errors in the finished pages. We recommend both for a polished book.',
  ),
  2 => 
  array (
    'q' => 'How is this different from editing?',
    'a' => 'Editing improves the writing. Proofreading is the final error check on the finished, laid out pages.',
  ),
  3 => 
  array (
    'q' => 'Can you proofread a PDF from my designer?',
    'a' => 'Yes. We work directly on the designed pages and mark corrections your designer can apply quickly.',
  ),
  4 => 
  array (
    'q' => 'How long does proofreading take?',
    'a' => 'Most picture books take a few days, depending on length and how many rounds are needed after corrections.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Proofreading</div>
      <h1>The <em>last</em> set of eyes <strong>before you print</strong></h1>
      <p class="lead">Proofreading is the careful final check after your book is designed. We catch the small errors that slip past everyone, so your printed book looks truly professional.</p>
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
      <h2>Small errors, big difference</h2>
      <p class="lead">A single typo on a printed page is hard to forgive and expensive to fix. Once a book is laid out, fresh mistakes can appear in spacing, hyphenation, and page breaks.</p>
      <p>Our proofreaders review the designed pages, not just the text, so what you send to the printer is clean, consistent, and ready for little hands.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A careful read of every word in its final place</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Spacing, hyphenation, and line breaks checked</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A clean go ahead before files reach the printer</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Proofreading for children&#039;s books at Purple Giraffe Press" loading="lazy"></figure>
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
    <h2>Your Proofreading journey, step by step</h2>
    <p class="lead" style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Receive</h3></div>
        <div class="svc-step-body"><p>We take in your final, designed files exactly as they will print. Proofreading always happens on the real pages, not loose text. We confirm we have the latest version before we start. This is the last quality gate before print.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>First pass</h3></div>
        <div class="svc-step-body"><p>We read every word for typos, grammar, and punctuation. This is the slow, careful read that catches the small things. We work at the pace accuracy needs, not speed. Fresh eyes spot what authors stop seeing.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Layout check</h3></div>
        <div class="svc-step-body"><p>We check spacing, hyphenation, and line and page breaks. Errors love to hide where text meets design. We watch for awkward breaks, stray spaces, and shifted text. The pages are reviewed exactly as a reader will see them.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Consistency</h3></div>
        <div class="svc-step-body"><p>Names, capitalisation, and style are kept uniform throughout. Little inconsistencies are quietly tracked and fixed. We keep a style sheet so choices stay the same everywhere. Consistency is what makes a book feel professional.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Mark up</h3></div>
        <div class="svc-step-body"><p>Every correction is flagged clearly for your designer to apply. We make each change easy to find and act on. Nothing is left ambiguous or buried. Your designer can work through them quickly.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Sign off</h3></div>
        <div class="svc-step-body"><p>We confirm the corrections were made before anything goes to print. A final check makes sure no new errors crept in. You get a clean, confident green light. Then the file is safe to send.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Purple Giraffe Press Proofreading" loading="lazy"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>The polish readers notice without knowing why</h2>
      <p class="lead">A single typo can pull a young reader, and a parent, right out of the story. Proofreading is the quiet step that keeps your book feeling professional.</p>
      <p>We review the designed pages, not just the text, so what reaches the printer is clean and consistent.</p>
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

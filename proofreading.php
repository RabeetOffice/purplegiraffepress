<?php
include 'includes/config.php';

/* =====================================================================
   Proofreading - self-contained service page. All copy lives here.
   ===================================================================== */
$page_title       = 'Children\'s Book Proofreading Services | Purple Giraffe Press';
$page_description = 'Final proofreading for children\'s books after layout. We catch typos, spacing, hyphenation, and consistency errors so your book prints clean.';
$canonical_path   = 'proofreading.php';

$hero_heading = 'The <em>last</em> set of eyes <strong>before you print</strong>';
$hero_lead    = 'Proofreading is the careful final check after your book is designed. We catch the small errors that slip past everyone, so your printed book looks truly professional.';

$block1 = array (
  'h' => 'Small errors, big difference',
  'p' => 
  array (
    0 => 'A single typo on a printed page is hard to forgive and expensive to fix. Once a book is laid out, fresh mistakes can appear in spacing, hyphenation, and page breaks.',
    1 => 'Our proofreaders review the designed pages, not just the text, so what you send to the printer is clean, consistent, and ready for little hands.',
  ),
  'points' => 
  array (
    0 => 'A careful read of every word in its final place',
    1 => 'Spacing, hyphenation, and line breaks checked',
    2 => 'A clean go ahead before files reach the printer',
  ),
  'img' => 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Proofreading for children\'s books at Purple Giraffe Press',
);
$block2 = array (
  'h' => 'The polish readers notice without knowing why',
  'p' => 
  array (
    0 => 'A single typo can pull a young reader, and a parent, right out of the story. Proofreading is the quiet step that keeps your book feeling professional.',
    1 => 'We review the designed pages, not just the text, so what reaches the printer is clean and consistent.',
  ),
  'img' => 'https://images.unsplash.com/photo-1532012197267-da84d127e765?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Purple Giraffe Press Proofreading',
);

$steps = array (
  0 => 
  array (
    't' => 'Receive',
    'd' => 'We take in your final, designed files exactly as they will print. Proofreading always happens on the real pages, not loose text. We confirm we have the latest version before we start. This is the last quality gate before print.',
  ),
  1 => 
  array (
    't' => 'First pass',
    'd' => 'We read every word for typos, grammar, and punctuation. This is the slow, careful read that catches the small things. We work at the pace accuracy needs, not speed. Fresh eyes spot what authors stop seeing.',
  ),
  2 => 
  array (
    't' => 'Layout check',
    'd' => 'We check spacing, hyphenation, and line and page breaks. Errors love to hide where text meets design. We watch for awkward breaks, stray spaces, and shifted text. The pages are reviewed exactly as a reader will see them.',
  ),
  3 => 
  array (
    't' => 'Consistency',
    'd' => 'Names, capitalisation, and style are kept uniform throughout. Little inconsistencies are quietly tracked and fixed. We keep a style sheet so choices stay the same everywhere. Consistency is what makes a book feel professional.',
  ),
  4 => 
  array (
    't' => 'Mark up',
    'd' => 'Every correction is flagged clearly for your designer to apply. We make each change easy to find and act on. Nothing is left ambiguous or buried. Your designer can work through them quickly.',
  ),
  5 => 
  array (
    't' => 'Sign off',
    'd' => 'We confirm the corrections were made before anything goes to print. A final check makes sure no new errors crept in. You get a clean, confident green light. Then the file is safe to send.',
  ),
);

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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Proofreading</div>
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
    <h2>Your Proofreading journey, step by step</h2>
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
    <h2>Proofreading questions, answered</h2>
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

<?php
include 'includes/config.php';

/* =====================================================================
   Custom Illustrations - self-contained service page. All copy lives here.
   ===================================================================== */
$page_title       = 'Custom Children\'s Book Illustration | Purple Giraffe Press';
$page_description = 'Original children\'s book illustration: character design, color studies, full page spreads, and print ready art matched to your story and age group.';
$canonical_path   = 'custom-illustrations.php';

$hero_heading = 'Illustrations that make your story <em>feel</em> <strong>alive</strong>';
$hero_lead    = 'Our artists design characters and full page art that fit your voice and your reader\'s age, so every spread invites the next page turn.';

$block1 = array (
  'h' => 'Art made for your story, not pulled from a template',
  'p' => 
  array (
    0 => 'The pictures are half of a children\'s book. They set the mood, carry the humor, and give young readers a reason to ask for the story again at bedtime.',
    1 => 'We start with who your characters are and who they are for, then build a visual world around them. Every page is drawn for your book.',
  ),
  'points' => 
  array (
    0 => 'Characters designed from scratch to fit your voice',
    1 => 'Color palettes tested for mood and age fit',
    2 => 'High resolution files ready for print and ebook',
  ),
  'img' => 'https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Custom Illustrations for children\'s books at Purple Giraffe Press',
);
$block2 = array (
  'h' => 'Illustrators who understand children\'s books',
  'p' => 
  array (
    0 => 'Our artists draw for young eyes, with the warmth, humor, and clarity that make a picture book work. You see sketches early and guide the look at every stage.',
    1 => 'Nothing is recycled. Every spread is created for your book, and you own the final artwork outright.',
  ),
  'img' => 'https://images.unsplash.com/photo-1532012197267-da84d127e765?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Purple Giraffe Press Custom Illustrations',
);

$steps = array (
  0 => 
  array (
    't' => 'Brief',
    'd' => 'We start by learning your characters, your world, and the age you write for. We talk through mood, tone, and the feeling each page should carry. This shapes every visual choice that follows. You set the direction before we pick up a pencil.',
  ),
  1 => 
  array (
    't' => 'Sketch',
    'd' => 'Rough character sketches explore looks, expressions, and personality. We try several takes so you can compare and react. You help choose the direction before any colour goes down. It is quick, playful, and fully collaborative.',
  ),
  2 => 
  array (
    't' => 'Style',
    'd' => 'We agree on a palette and visual style that fit the mood of your story. We test how colours feel for your reader\'s age. This becomes the visual rulebook for the whole book. Consistency from here keeps every spread feeling like one world.',
  ),
  3 => 
  array (
    't' => 'Illustrate',
    'd' => 'Full page spreads are painted to match the rhythm and page turns of your text. Each image is composed to invite the next page. We balance character, background, and space for words. The art carries as much of the story as the words do.',
  ),
  4 => 
  array (
    't' => 'Review',
    'd' => 'You review every spread and we refine together until it feels right. Small tweaks to expression or colour often make the biggest difference. Nothing is finalised without your sign off. Your reactions guide each round.',
  ),
  5 => 
  array (
    't' => 'Finalize',
    'd' => 'Artwork is colour corrected and packaged at full print resolution. We prepare versions suited to both print and ebook. Files are named and organised so production runs smoothly. You receive art ready to drop straight into the book.',
  ),
);

$page_faqs = array (
  0 => 
  array (
    'q' => 'Can I choose my illustrator?',
    'a' => 'We match you with an illustrator whose style fits your story, and you can review portfolios before we begin. You are involved at every approval point.',
  ),
  1 => 
  array (
    'q' => 'How many revision rounds are included?',
    'a' => 'Each stage includes review rounds so the characters and spreads land the way you imagined before we move forward.',
  ),
  2 => 
  array (
    'q' => 'Do I own the illustrations?',
    'a' => 'Yes. On completion the final artwork and its rights are yours to use for your book and promotion.',
  ),
  3 => 
  array (
    'q' => 'What styles can you work in?',
    'a' => 'From soft watercolor to bold cartoon and everything between. We match the style to your story and reader age.',
  ),
  4 => 
  array (
    'q' => 'Can you illustrate a series?',
    'a' => 'Absolutely. We keep characters and style consistent across multiple books so your series feels like one world.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Custom Illustrations</div>
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
    <h2>Your Custom Illustrations journey, step by step</h2>
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
    <h2>Custom Illustrations questions, answered</h2>
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

<?php
include 'includes/config.php';

/* =====================================================================
   Editing - self-contained service page. All copy lives here.
   ===================================================================== */
$page_title       = 'Children\'s Book Editing Services | Purple Giraffe Press';
$page_description = 'Developmental and line editing for children\'s books. We sharpen structure, pacing, age fit, and read aloud rhythm while keeping your voice intact.';
$canonical_path   = 'editing.php';

$hero_heading = 'Editing that <em>sharpens</em> the story, <strong>not your voice</strong>';
$hero_lead    = 'From big picture structure to line by line polish, our editors help your manuscript read smoothly, sound right out loud, and land with its age group.';

$block1 = array (
  'h' => 'Two kinds of editing, one stronger book',
  'p' => 
  array (
    0 => 'Children\'s books live or die on rhythm and clarity. A story can have a wonderful heart and still trip on pacing, an unclear arc, or words that do not fit the reader\'s age.',
    1 => 'We work in layers. Developmental editing shapes structure and flow, then line editing tunes the language so every sentence earns its place and reads beautifully aloud.',
  ),
  'points' => 
  array (
    0 => 'Developmental notes on structure, arc, and pacing',
    1 => 'Line editing for clarity, rhythm, and word choice',
    2 => 'A read aloud pass for the cadence storytime needs',
  ),
  'img' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Editing for children\'s books at Purple Giraffe Press',
);
$block2 = array (
  'h' => 'Your voice, made clearer and stronger',
  'p' => 
  array (
    0 => 'Good editing is invisible. Readers should feel the story flow, not the work behind it. We sharpen what is already yours and explain every suggestion.',
    1 => 'You stay in control. Every change is yours to accept, and the final manuscript still sounds unmistakably like you.',
  ),
  'img' => 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Purple Giraffe Press Editing',
);

$steps = array (
  0 => 
  array (
    't' => 'Read',
    'd' => 'Your editor reads the entire manuscript with fresh, careful eyes. We get to know the story, the characters, and the voice before suggesting anything. First impressions matter, so we note what works as well as what does not. Only then do we plan the edit.',
  ),
  1 => 
  array (
    't' => 'Assess',
    'd' => 'You receive an editorial letter mapping the book\'s strengths and what it needs. It is honest, specific, and easy to act on. We explain the why behind each suggestion, not just the what. You always know the reasoning before you decide.',
  ),
  2 => 
  array (
    't' => 'Develop',
    'd' => 'We work on structure, arc, and pacing together across focused rounds. This is where a good story becomes a strong one. We look at how each page turn lands for a young reader. The biggest improvements usually happen here.',
  ),
  3 => 
  array (
    't' => 'Line edit',
    'd' => 'We tune clarity, rhythm, and word choice line by line. Every sentence is checked for how it reads aloud. We trim what slows the story and sharpen what carries it. The text starts to sing.',
  ),
  4 => 
  array (
    't' => 'Polish',
    'd' => 'A final pass cleans up consistency and any lingering rough edges. We check names, tenses, and small repeated habits. The manuscript is left smooth, confident, and consistent. It is ready for the next stage.',
  ),
  5 => 
  array (
    't' => 'Handover',
    'd' => 'You receive the fully edited manuscript, ready for design. We include clear notes so the next steps are obvious. Any open questions are flagged for you. Nothing is left ambiguous.',
  ),
);

$page_faqs = array (
  0 => 
  array (
    'q' => 'What is the difference between editing and proofreading?',
    'a' => 'Editing improves the writing itself, from structure down to sentences. Proofreading is the final check for typos and errors after the book is laid out. Many authors use both.',
  ),
  1 => 
  array (
    'q' => 'Will you change my voice?',
    'a' => 'No. Our job is to make your voice clearer and stronger, not to replace it. You approve every change.',
  ),
  2 => 
  array (
    'q' => 'How many rounds of edits are included?',
    'a' => 'Editing runs in structured rounds so you can respond to notes and we can refine, rather than a single pass.',
  ),
  3 => 
  array (
    'q' => 'Can you edit rhyming text?',
    'a' => 'Yes. Rhyme and meter are their own craft, and we check scansion so the story reads smoothly out loud.',
  ),
  4 => 
  array (
    'q' => 'Is my manuscript kept private?',
    'a' => 'Always. Your work is confidential and never shared outside the team working on it.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Editing</div>
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
    <h2>Your Editing journey, step by step</h2>
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
    <h2>Editing questions, answered</h2>
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

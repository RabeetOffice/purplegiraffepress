<?php
include 'includes/config.php';

/* =====================================================================
   Audiobooks - self-contained service page. All copy lives here.
   ===================================================================== */
$page_title       = 'Children\'s Audiobook Production | Purple Giraffe Press';
$page_description = 'Children\'s audiobook production: professional narration, clean editing and mastering, and distribution to Audible, Apple, and other listening platforms.';
$canonical_path   = 'audiobooks.php';

$hero_heading = 'Your story, <em>read aloud</em> <strong>beautifully</strong>';
$hero_lead    = 'Audiobooks let kids enjoy your story in the car, at bedtime, and on the move. We produce a warm, professional narration and get it onto the platforms families use.';

$block1 = array (
  'h' => 'A listening edition that does your words justice',
  'p' => 
  array (
    0 => 'More families are listening than ever, and children\'s stories are perfect for it. A good audiobook is more than a reading. It has pacing, character, and warmth.',
    1 => 'We match your book with the right narrator, record and master clean audio, and handle the setup so your audiobook reaches the major platforms.',
  ),
  'points' => 
  array (
    0 => 'A narrator matched to your story',
    1 => 'Clean, warm studio recording',
    2 => 'Delivery to Audible, Apple, and more',
  ),
  'img' => 'https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Audiobooks for children\'s books at Purple Giraffe Press',
);
$block2 = array (
  'h' => 'Stories for the car, the crib, and everywhere',
  'p' => 
  array (
    0 => 'Families listen more than ever, and children\'s stories suit it perfectly. A good audiobook has pacing, character, and warmth that invites kids back.',
    1 => 'We handle casting, recording, mastering, and setup, so your story sounds wonderful and reaches the major platforms.',
  ),
  'img' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Purple Giraffe Press Audiobooks',
);

$steps = array (
  0 => 
  array (
    't' => 'Prepare',
    'd' => 'We prepare your text for narration, marking tone and pacing. A great recording starts before the microphone. We note character voices and emphasis. Preparation is what makes the read feel effortless.',
  ),
  1 => 
  array (
    't' => 'Cast',
    'd' => 'We choose a narrator and a voice that fit your story. You help pick the sound of your book. We share samples so you can hear the fit. The right voice brings characters to life.',
  ),
  2 => 
  array (
    't' => 'Record',
    'd' => 'The narration is recorded at studio quality. Performance and clarity both matter for young listeners. We direct for warmth and natural pacing. Every line is captured cleanly.',
  ),
  3 => 
  array (
    't' => 'Edit',
    'd' => 'We clean and shape the recording, removing noise and tightening pacing. The result feels effortless to listen to. We smooth breaths, gaps, and stumbles. Listeners hear only the story.',
  ),
  4 => 
  array (
    't' => 'Master',
    'd' => 'Audio is mastered to meet the major platforms\' technical standards. This keeps your book from being rejected on upload. We balance levels for comfortable listening. The files are delivery ready.',
  ),
  5 => 
  array (
    't' => 'Publish',
    'd' => 'We deliver your audiobook to listening platforms. Families can press play wherever they listen. We handle the setup and requirements. Your story reaches ears as well as eyes.',
  ),
);

$page_faqs = array (
  0 => 
  array (
    'q' => 'Can I narrate my own book?',
    'a' => 'If you would like to, we can guide and direct your recording. Otherwise we match you with a professional narrator who suits your story.',
  ),
  1 => 
  array (
    'q' => 'Which platforms will it be on?',
    'a' => 'We prepare your audiobook to the standards required by the major platforms such as Audible and Apple Books, and help with distribution.',
  ),
  2 => 
  array (
    'q' => 'How long does an audiobook take?',
    'a' => 'A short children\'s title can be ready in a few weeks, depending on narrator scheduling and review.',
  ),
  3 => 
  array (
    'q' => 'Can it include music or sounds?',
    'a' => 'Yes. Light music or gentle sound touches can be added where they suit the story.',
  ),
  4 => 
  array (
    'q' => 'Do I keep the audiobook rights?',
    'a' => 'Yes. The recording and its rights are yours, and royalties are paid to you.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Audiobooks</div>
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
    <h2>Your Audiobooks journey, step by step</h2>
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
    <h2>Audiobooks questions, answered</h2>
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

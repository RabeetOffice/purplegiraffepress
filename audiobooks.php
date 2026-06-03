<?php
include 'includes/config.php';

$page_title       = 'Children\'s Audiobook Production | Purple Giraffe Press';
$page_description = 'Children\'s audiobook production: professional narration, clean editing and mastering, and distribution to Audible, Apple, and other listening platforms.';
$canonical_path   = 'audiobooks.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
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

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Audiobooks</div>
      <h1>Your story, <em>read aloud</em> <strong>beautifully</strong></h1>
      <p class="lead">Audiobooks let kids enjoy your story in the car, at bedtime, and on the move. We produce a warm, professional narration and get it onto the platforms families use.</p>
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
      <h2>A listening edition that does your words justice</h2>
      <p>More families are listening than ever, and children's stories are perfect for it. A good audiobook is more than a reading. It has pacing, character, and warmth.</p>
      <p>We match your book with the right narrator, record and master clean audio, and handle the setup so your audiobook reaches the major platforms.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A narrator matched to your story</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Clean, warm studio recording</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Delivery to Audible, Apple, and more</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/audiobooks.webp" alt="Audiobooks for children&#039;s books at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
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
    <h2>Your Audiobooks journey, step by step</h2>
    <p style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Prepare</h3></div>
        <div class="svc-step-body"><p>We prepare your text for narration, marking tone and pacing. A great recording starts before the microphone. We note character voices and emphasis. Preparation is what makes the read feel effortless.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Cast</h3></div>
        <div class="svc-step-body"><p>We choose a narrator and a voice that fit your story. You help pick the sound of your book. We share samples so you can hear the fit. The right voice brings characters to life.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Record</h3></div>
        <div class="svc-step-body"><p>The narration is recorded at studio quality. Performance and clarity both matter for young listeners. We direct for warmth and natural pacing. Every line is captured cleanly.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Edit</h3></div>
        <div class="svc-step-body"><p>We clean and shape the recording, removing noise and tightening pacing. The result feels effortless to listen to. We smooth breaths, gaps, and stumbles. Listeners hear only the story.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Master</h3></div>
        <div class="svc-step-body"><p>Audio is mastered to meet the major platforms' technical standards. This keeps your book from being rejected on upload. We balance levels for comfortable listening. The files are delivery ready.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Publish</h3></div>
        <div class="svc-step-body"><p>We deliver your audiobook to listening platforms. Families can press play wherever they listen. We handle the setup and requirements. Your story reaches ears as well as eyes.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/why-purple-giraffe.webp" alt="Purple Giraffe Press Audiobooks" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>Stories for the car, the crib, and everywhere</h2>
      <p>Families listen more than ever, and children's stories suit it perfectly. A good audiobook has pacing, character, and warmth that invites kids back.</p>
      <p>We handle casting, recording, mastering, and setup, so your story sounds wonderful and reaches the major platforms.</p>
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

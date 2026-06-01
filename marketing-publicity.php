<?php
include 'includes/config.php';

/* =====================================================================
   Marketing & Publicity - self-contained service page. All copy lives here.
   ===================================================================== */
$page_title       = 'Children\'s Book Marketing & Publicity | Purple Giraffe Press';
$page_description = 'Children\'s book marketing and publicity: reviewer outreach, school and library positioning, podcast pitches, and social launch support for first time authors.';
$canonical_path   = 'marketing-publicity.php';

$hero_heading = 'Help your book <em>find</em> the <strong>families it is for</strong>';
$hero_lead    = 'A finished book is only half the job. We build a launch that puts your story in front of reviewers, educators, and the parents who buy children\'s books.';

$block1 = array (
  'h' => 'A launch plan, not just a press release',
  'p' => 
  array (
    0 => 'The hardest part of publishing is rarely making the book. It is helping the right readers discover it among the thousands of titles released every month.',
    1 => 'We plan a launch around your story and audience, with the materials, outreach, and messaging that get children\'s books noticed.',
  ),
  'points' => 
  array (
    0 => 'A press kit, blurbs, and sales copy that travel',
    1 => 'Outreach to reviewers and children\'s book voices',
    2 => 'Positioning for schools, libraries, and social',
  ),
  'img' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Marketing & Publicity for children\'s books at Purple Giraffe Press',
);
$block2 = array (
  'h' => 'Honest marketing built around your book',
  'p' => 
  array (
    0 => 'We will not promise viral fame or guaranteed sales. We will build a focused, professional launch aimed at the readers who actually buy children\'s books.',
    1 => 'From reviewers who need lead time to launch week social, we plan the steps that give your book its best chance to be found.',
  ),
  'img' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Purple Giraffe Press Marketing & Publicity',
);

$steps = array (
  0 => 
  array (
    't' => 'Position',
    'd' => 'We define exactly who your book is for and the hook that makes it stand out. Clear positioning makes every other step easier. We find the angle that gets attention from the right people. This becomes the spine of your launch.',
  ),
  1 => 
  array (
    't' => 'Plan',
    'd' => 'We map a launch timeline and a target list of the right people. You see the plan before we start reaching out. We sequence activity so it builds rather than fizzles. Everyone knows what happens and when.',
  ),
  2 => 
  array (
    't' => 'Prepare',
    'd' => 'We build a press kit, blurbs, and sales copy that travel well. Strong, ready made materials open more doors. We make it easy for others to say yes and share. Good assets do half the work.',
  ),
  3 => 
  array (
    't' => 'Pitch',
    'd' => 'We reach reviewers, educators, and relevant outlets for your book. Outreach is targeted, not scattered. We tailor each pitch to who is receiving it. Relevance is what earns replies.',
  ),
  4 => 
  array (
    't' => 'Launch',
    'd' => 'We support your release week with coordinated activity. Momentum matters most in the first days. We help you show up consistently without burning out. The goal is steady visibility, not a single spike.',
  ),
  5 => 
  array (
    't' => 'Follow up',
    'd' => 'We keep the push going after launch day. A book\'s life does not end on release. We chase the slower yes and the later coverage. The long tail is where many sales come from.',
  ),
);

$page_faqs = array (
  0 => 
  array (
    'q' => 'Do you guarantee reviews or sales?',
    'a' => 'No honest partner can guarantee reviews or sales. We can promise a focused plan, professional materials, and outreach to the right people for your book.',
  ),
  1 => 
  array (
    'q' => 'When should marketing start?',
    'a' => 'Ideally a couple of months before launch. Early planning lets us reach reviewers who need lead time and build momentum before release day.',
  ),
  2 => 
  array (
    'q' => 'Will my book go viral?',
    'a' => 'No honest partner can promise that. We focus on steady, real visibility with the right readers and reviewers.',
  ),
  3 => 
  array (
    'q' => 'Do you run paid ads?',
    'a' => 'We can advise on and set up sensible paid promotion, but the core of our work is positioning, outreach, and strong materials.',
  ),
  4 => 
  array (
    'q' => 'Can you help with school and library sales?',
    'a' => 'Yes. We prepare materials and outreach aimed at educators and librarians, who are major buyers of children\'s books.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Marketing & Publicity</div>
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
    <h2>Your Marketing & Publicity journey, step by step</h2>
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
    <h2>Marketing & Publicity questions, answered</h2>
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

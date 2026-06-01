<?php
include 'includes/config.php';

/* =====================================================================
   Author Websites - self-contained service page. All copy lives here.
   ===================================================================== */
$page_title       = 'Children\'s Author Website Design | Purple Giraffe Press';
$page_description = 'Custom author websites for children\'s book writers: book showcase, buy links, newsletter signup, events, and a friendly storybook feel that builds your audience.';
$canonical_path   = 'author-websites.php';

$hero_heading = 'A <em>home online</em> for you and <strong>your book</strong>';
$hero_lead    = 'A simple, charming website gives readers a place to find your book, join your list, and book you for events. We design and build it for you.';

$block1 = array (
  'h' => 'Your book deserves more than a sales page',
  'p' => 
  array (
    0 => 'Families, teachers, and event organizers look you up online. A friendly author website turns that curiosity into newsletter signups, sales, and school visit requests.',
    1 => 'We design a storybook style site that matches your book\'s world, with the pages you actually need and nothing you do not.',
  ),
  'points' => 
  array (
    0 => 'Beautiful pages for your titles and buy links',
    1 => 'A newsletter signup to grow real fans',
    2 => 'Events and an easy contact form',
  ),
  'img' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Author Websites for children\'s books at Purple Giraffe Press',
);
$block2 = array (
  'h' => 'A friendly home you can actually manage',
  'p' => 
  array (
    0 => 'Families, teachers, and event hosts look you up. A warm author site turns that interest into signups, sales, and school visits.',
    1 => 'We build it to match your book\'s world and to be easy to update, so you are never stuck waiting on a developer.',
  ),
  'img' => 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Purple Giraffe Press Author Websites',
);

$steps = array (
  0 => 
  array (
    't' => 'Plan',
    'd' => 'We map the pages and features your site actually needs. No bloat, just what helps you connect and sell. We focus on books, buy links, and a way to stay in touch. A clear plan keeps the build fast.',
  ),
  1 => 
  array (
    't' => 'Design',
    'd' => 'We design a storybook style that matches your book\'s world. The look feels like an extension of your story. We keep it warm, friendly, and easy to navigate. First impressions matter for families and schools.',
  ),
  2 => 
  array (
    't' => 'Build',
    'd' => 'We develop the site to be fast and mobile friendly. Most families will visit on a phone, so that comes first. We build it cleanly so it loads quickly. Speed and clarity keep visitors around.',
  ),
  3 => 
  array (
    't' => 'Fill',
    'd' => 'We add your books, artwork, and details. Your site launches looking complete, not empty. We set up buy links and a newsletter signup. Everything a visitor needs is ready on day one.',
  ),
  4 => 
  array (
    't' => 'Launch',
    'd' => 'We publish the site and connect your domain. You go live without the technical headaches. We check it works across phones and browsers. The handover is smooth and stress free.',
  ),
  5 => 
  array (
    't' => 'Support',
    'd' => 'We show you how to keep it fresh, or handle updates for you. The site grows easily as you add books and news. You are never stuck waiting on a developer. Help is there when you want it.',
  ),
);

$page_faqs = array (
  0 => 
  array (
    'q' => 'Will I be able to update it myself?',
    'a' => 'Yes. We build your site so you can add new books, events, and news easily, and we are here if you would rather we handle updates.',
  ),
  1 => 
  array (
    'q' => 'Do you handle the domain and hosting?',
    'a' => 'We can guide you through domain and hosting setup, or handle it for you, so your site is live without the technical headaches.',
  ),
  2 => 
  array (
    'q' => 'Will my site work on phones?',
    'a' => 'Yes. Every site we build is mobile friendly, since most families will visit on a phone.',
  ),
  3 => 
  array (
    'q' => 'Can you connect my newsletter?',
    'a' => 'Yes. We integrate popular newsletter tools so you can collect and reach your readers.',
  ),
  4 => 
  array (
    'q' => 'Can it grow with more books?',
    'a' => 'Definitely. We build with your future catalog in mind, so adding new titles is simple.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Author Websites</div>
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
    <h2>Your Author Websites journey, step by step</h2>
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
    <h2>Author Websites questions, answered</h2>
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

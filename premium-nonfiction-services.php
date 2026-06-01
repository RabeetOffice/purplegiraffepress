<?php
include 'includes/config.php';

/* =====================================================================
   Premium Nonfiction Services - self-contained service page. All copy lives here.
   ===================================================================== */
$page_title       = 'Premium Nonfiction Book Services | Purple Giraffe Press';
$page_description = 'Premium nonfiction services for children\'s and educational books: structure, fact checking, age appropriate explanation, references, and clear visual layout.';
$canonical_path   = 'premium-nonfiction-services.php';

$hero_heading = 'Nonfiction for kids, done with <em>real</em> <strong>rigor</strong>';
$hero_lead    = 'Educational and nonfiction children\'s books carry extra responsibility. We help you explain real things clearly, accurately, and at exactly the right age.';

$block1 = array (
  'h' => 'Accurate, clear, and genuinely fun to read',
  'p' => 
  array (
    0 => 'Children\'s nonfiction has to be two things at once: trustworthy and delightful. Facts must be correct, but they also have to land for a young reader.',
    1 => 'Our support covers structure, fact checking, age appropriate language, references, and the visual layout that helps complex ideas make sense.',
  ),
  'points' => 
  array (
    0 => 'Content structured so it builds clearly for kids',
    1 => 'Facts reviewed and sourced for accuracy',
    2 => 'Visuals and layout that make ideas click',
  ),
  'img' => 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Premium Nonfiction Services for children\'s books at Purple Giraffe Press',
);
$block2 = array (
  'h' => 'Trustworthy nonfiction children love',
  'p' => 
  array (
    0 => 'Children\'s nonfiction has to be correct and delightful at once. We keep the facts solid while keeping the reading a joy.',
    1 => 'From science to history, we help you explain real things at exactly the right age, with references handled properly.',
  ),
  'img' => 'https://images.unsplash.com/photo-1532012197267-da84d127e765?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Purple Giraffe Press Premium Nonfiction Services',
);

$steps = array (
  0 => 
  array (
    't' => 'Scope',
    'd' => 'We define the topic, the angle, and the exact reader age. Good nonfiction starts with a sharp focus. We decide what to include and, just as importantly, what to leave out. A clear scope keeps the book tight.',
  ),
  1 => 
  array (
    't' => 'Outline',
    'd' => 'We shape the material into a clear path that builds knowledge step by step. Structure is what makes facts stick. We sequence ideas so each one prepares the next. The outline becomes the book\'s backbone.',
  ),
  2 => 
  array (
    't' => 'Write',
    'd' => 'We develop or refine the text so it is correct and a pleasure to read. Accuracy and delight are not opposites. We explain ideas in plain, age right language. Curiosity is the goal on every page.',
  ),
  3 => 
  array (
    't' => 'Fact check',
    'd' => 'Every claim is reviewed and sourced appropriately for the age group. Trust is the whole point of nonfiction. We verify figures, names, and statements carefully. Where sources differ, we flag it.',
  ),
  4 => 
  array (
    't' => 'Design',
    'd' => 'We plan visuals and layout that make complex ideas click. Diagrams do real teaching, not just decoration. We pair words and images so they reinforce each other. The page becomes a learning tool.',
  ),
  5 => 
  array (
    't' => 'Finalize',
    'd' => 'We complete references and back matter to a high standard. The finished book stands up to scrutiny. We include the notes a curious reader or teacher will want. Everything is checked one last time.',
  ),
);

$page_faqs = array (
  0 => 
  array (
    'q' => 'What subjects do you work with?',
    'a' => 'We support a wide range of nonfiction for children, from science and nature to history, biography, and how things work. If a topic is right for young readers, we can help shape it.',
  ),
  1 => 
  array (
    'q' => 'Do you handle references and sources?',
    'a' => 'Yes. Where a book makes factual claims, we help organize references and back matter appropriate for the age group.',
  ),
  2 => 
  array (
    'q' => 'Can you work with an expert author?',
    'a' => 'Yes. We often partner with subject experts, handling structure, clarity, and age fit while you guard the facts.',
  ),
  3 => 
  array (
    'q' => 'Do you create diagrams and infographics?',
    'a' => 'Yes. Clear visuals are central to children\'s nonfiction, and we design them to fit the page and the reader.',
  ),
  4 => 
  array (
    'q' => 'What age groups do you cover?',
    'a' => 'From simple early readers to middle grade nonfiction, with language and depth matched to each.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Premium Nonfiction Services</div>
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
    <h2>Your Premium Nonfiction Services journey, step by step</h2>
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
    <h2>Premium Nonfiction Services questions, answered</h2>
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

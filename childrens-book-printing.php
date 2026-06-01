<?php
include 'includes/config.php';

/* =====================================================================
   Children's Book Printing - self-contained service page. All copy lives here.
   ===================================================================== */
$page_title       = 'Children\'s Book Printing Services | Purple Giraffe Press';
$page_description = 'Quality children\'s book printing: board books, paperback, and hardcover, with the right paper, sturdy binding, and a physical proof before your full run.';
$canonical_path   = 'childrens-book-printing.php';

$hero_heading = 'Printing <em>built</em> for <strong>little hands</strong>';
$hero_lead    = 'Children\'s books get loved hard. We help you print on the right paper, with sturdy binding and rich color, and you approve a physical proof before any full run.';

$block1 = array (
  'h' => 'The format and finish your story deserves',
  'p' => 
  array (
    0 => 'A children\'s book is a physical object that gets carried, dropped, and read a hundred times. The paper, binding, and finish matter as much as the art on the page.',
    1 => 'We help you choose the right format, from board books for toddlers to hardcovers for gifting, and send a real printed proof before any full run.',
  ),
  'points' => 
  array (
    0 => 'Board, paperback, or hardcover guidance',
    1 => 'Durable paper and binding for real use',
    2 => 'A physical proof before any full run',
  ),
  'img' => 'https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Children\'s Book Printing for children\'s books at Purple Giraffe Press',
);
$block2 = array (
  'h' => 'Made to survive a thousand bedtimes',
  'p' => 
  array (
    0 => 'Children\'s books are handled hard. We help you choose paper, binding, and finish that hold up to daily love.',
    1 => 'You approve a real printed proof before the full run, so the book in your hands is the book you imagined.',
  ),
  'img' => 'https://images.unsplash.com/photo-1519682337058-a94d519337bc?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Purple Giraffe Press Children\'s Book Printing',
);

$steps = array (
  0 => 
  array (
    't' => 'Specify',
    'd' => 'We choose the format, paper, and finish that suit your story and reader. Board, paperback, and hardcover each have their place. We weigh durability, feel, and budget together. The right choice protects both your art and your wallet.',
  ),
  1 => 
  array (
    't' => 'Prepare files',
    'd' => 'We check your files meet print requirements for colour and bleed. Catching issues now avoids costly reprints later. We confirm resolution, margins, and trim. Your files leave correct and print ready.',
  ),
  2 => 
  array (
    't' => 'Proof',
    'd' => 'A real physical proof of your book is produced. You see and feel the actual object, not a screen. Colour, paper, and binding can finally be judged in your hands. This is the moment surprises get caught.',
  ),
  3 => 
  array (
    't' => 'Approve',
    'd' => 'You review the printed sample and approve it before the run. Nothing prints in volume until you are happy. We note any final adjustments together. Your sign off protects the whole order.',
  ),
  4 => 
  array (
    't' => 'Print',
    'd' => 'We run the full order on quality stock with accurate colour. Your art stays warm and true to the proof. Binding is built to survive real use. The result is a book made to be loved hard.',
  ),
  5 => 
  array (
    't' => 'Fulfill',
    'd' => 'Books are prepared for shipping or onward distribution. We make sure they are packed to arrive in great shape. You decide where the copies go. The finished books are ready to reach readers.',
  ),
);

$page_faqs = array (
  0 => 
  array (
    'q' => 'Can you print board books?',
    'a' => 'Yes. We print board books, paperbacks, and hardcovers, and we will recommend the format that fits your story and reader age.',
  ),
  1 => 
  array (
    'q' => 'Do I get to see a proof first?',
    'a' => 'Always. You approve a physical printed proof before we run the full quantity, so there are no surprises.',
  ),
  2 => 
  array (
    'q' => 'What is the minimum print run?',
    'a' => 'We can arrange both short runs and larger quantities, and will recommend what fits your launch and budget.',
  ),
  3 => 
  array (
    'q' => 'Can you print in color throughout?',
    'a' => 'Yes. Full color interiors are standard for picture books, and we tune the printing to keep your art warm and true.',
  ),
  4 => 
  array (
    'q' => 'Do you offer hardcover with a dust jacket?',
    'a' => 'Yes. We print paperback, board books, and hardcovers with or without a jacket.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Children's Book Printing</div>
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
    <h2>Your Children's Book Printing journey, step by step</h2>
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
    <h2>Children's Book Printing questions, answered</h2>
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

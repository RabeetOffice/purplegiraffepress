<?php
include 'includes/config.php';

/* =====================================================================
   Book Coaching - self-contained service page. All copy lives here.
   ===================================================================== */
$page_title       = 'Children\'s Book Coaching for Authors | Purple Giraffe Press';
$page_description = 'One on one children\'s book coaching. Personal guidance, accountability, and expert feedback to help you write and finish your manuscript with confidence.';
$canonical_path   = 'book-coaching.php';

$hero_heading = 'Write your book with <em>an expert</em> <strong>in your corner</strong>';
$hero_lead    = 'Some authors want to do the writing themselves, just with guidance. Coaching pairs you with a children\'s book pro for feedback, structure, and steady momentum.';

$block1 = array (
  'h' => 'Support that keeps you writing',
  'p' => 
  array (
    0 => 'Writing a children\'s book is deceptively hard, and most drafts stall somewhere in the middle. What gets authors to the finish line is structure, honest feedback, and a little accountability.',
    1 => 'Coaching gives you a personal guide who reads your pages, answers your questions, and helps you make confident decisions.',
  ),
  'points' => 
  array (
    0 => 'Regular one on one sessions on your manuscript',
    1 => 'Honest, practical feedback you can use',
    2 => 'Goals and check ins that keep you moving',
  ),
  'img' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Book Coaching for children\'s books at Purple Giraffe Press',
);
$block2 = array (
  'h' => 'You write the book, we keep you on track',
  'p' => 
  array (
    0 => 'Most drafts stall in the middle. A coach gives you structure, momentum, and honest feedback so you actually finish.',
    1 => 'The book stays entirely yours. We guide the craft and the process, and you keep the writing and the credit.',
  ),
  'img' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=1000&q=80',
  'alt' => 'Purple Giraffe Press Book Coaching',
);

$steps = array (
  0 => 
  array (
    't' => 'Match',
    'd' => 'We pair you with a coach who knows your kind of book. The right guide makes all the difference. We consider your goals, genre, and stage. A good match keeps you motivated.',
  ),
  1 => 
  array (
    't' => 'Plan',
    'd' => 'We set clear goals and a writing schedule that fits your life. Momentum comes from a realistic plan. We break the book into manageable steps. Small wins add up to a finished draft.',
  ),
  2 => 
  array (
    't' => 'Write',
    'd' => 'You write between sessions, with your coach a message away. The book stays yours at every word. You build a steady, sustainable habit. Progress becomes the norm, not the exception.',
  ),
  3 => 
  array (
    't' => 'Review',
    'd' => 'Your coach reads your pages and gives honest, useful notes. You always know what is working and what is next. Feedback is practical, never vague. You leave each session clear on your next move.',
  ),
  4 => 
  array (
    't' => 'Refine',
    'd' => 'You revise with clear guidance instead of guesswork. Confusion turns into confident decisions. We help you see your story as a reader will. The draft gets noticeably stronger.',
  ),
  5 => 
  array (
    't' => 'Finish',
    'd' => 'You reach a complete manuscript you are proud of. From there, you can publish with us or anywhere. We celebrate the milestone with you. The hard part is done, on your terms.',
  ),
);

$page_faqs = array (
  0 => 
  array (
    'q' => 'How is coaching different from ghostwriting?',
    'a' => 'With coaching you do the writing and we guide you. With ghostwriting we do the writing for you. Coaching is for authors who want the craft and the credit of writing it themselves.',
  ),
  1 => 
  array (
    'q' => 'How often will we meet?',
    'a' => 'We set a rhythm that fits your schedule and goals, commonly every couple of weeks, with feedback on your pages between sessions.',
  ),
  2 => 
  array (
    'q' => 'Do I need writing experience?',
    'a' => 'No. Coaching meets you where you are, whether it is your first story or your fifth.',
  ),
  3 => 
  array (
    'q' => 'What happens after I finish?',
    'a' => 'If you like, we can move straight into editing, illustration, and publishing, or you can take your manuscript anywhere you choose.',
  ),
  4 => 
  array (
    'q' => 'Is coaching done online?',
    'a' => 'Yes. Sessions are held by video call, so you can work with us from anywhere.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Book Coaching</div>
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
    <h2>Your Book Coaching journey, step by step</h2>
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
    <h2>Book Coaching questions, answered</h2>
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

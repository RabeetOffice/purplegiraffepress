<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Ghostwriting Services | Purple Giraffe Press';
$page_description = 'Professional children\'s book ghostwriting. Share your idea, characters, or outline and we write a polished manuscript in your voice, with full credit to you.';
$canonical_path   = 'ghostwriting.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 => 
  array (
    'q' => 'Will anyone know I used a ghostwriter?',
    'a' => 'No. Ghostwriting is confidential. You are the author of record, and the finished book is credited entirely to you.',
  ),
  1 => 
  array (
    'q' => 'How involved do I need to be?',
    'a' => 'As involved as you like. At minimum we need your idea and a few conversations. Many authors enjoy reviewing each draft along the way.',
  ),
  2 => 
  array (
    'q' => 'Who owns the finished book?',
    'a' => 'You do, completely. The manuscript, characters, and rights belong to you.',
  ),
  3 => 
  array (
    'q' => 'Can you write in rhyme?',
    'a' => 'Yes. If your story calls for rhyme or a particular voice, we write to match it.',
  ),
  4 => 
  array (
    'q' => 'What if I only have a rough idea?',
    'a' => 'That is enough to start. Many of our authors begin with a character or a single scene, and we build the rest together.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Ghostwriting</div>
      <h1>Your idea, <em>written</em> into a <strong>finished story</strong></h1>
      <p class="lead">If the story is clear in your head but hard to get onto the page, our ghostwriters do the writing for you, in your voice, and you keep full authorship.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="submissions.php">Start Your Book</a>
        <a class="btn btn-light" href="portfolio.php">See Our Work</a>
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
      <h2>From a spark of an idea to a real manuscript</h2>
      <p class="lead">Plenty of wonderful children's books start as a bedtime story, a lesson a parent wants to share, or a character a child dreamed up. Not everyone is a writer, and that is perfectly fine.</p>
      <p>We interview you, learn your voice and intent, then write and revise the manuscript with you until it sounds like you wrote it.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>We capture your idea, voice, and intent</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A full manuscript written and revised with you</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Your name on the cover, the rights all yours</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Ghostwriting for children&#039;s books at Purple Giraffe Press" loading="lazy"></figure>
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
    <h2>Your Ghostwriting journey, step by step</h2>
    <p class="lead" style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Brief</h3></div>
        <div class="svc-step-body"><p>We interview you to capture your idea, your voice, and what you want the book to do. We ask about the feeling and the lesson, not just the plot. This is where your story really takes shape. The more you share, the more it sounds like you.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Outline</h3></div>
        <div class="svc-step-body"><p>We turn your idea into a clear arc with characters and a beginning, middle, and end. You see the plan and approve it before any writing begins. Changes are easy and cheap at this stage. We only write once you are happy with the shape.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Draft</h3></div>
        <div class="svc-step-body"><p>We write the full manuscript in a voice that sounds like you. We keep your phrasing, humour, and intent front and centre. You are never handed something generic. The first draft is built to feel like yours.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review</h3></div>
        <div class="svc-step-body"><p>You read the draft and tell us what feels right and what does not. Your honest reactions guide everything next. We welcome notes on tone, pacing, and detail. This is your book, and your voice leads.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Revise</h3></div>
        <div class="svc-step-body"><p>We refine the story through rounds until it feels truly yours. We adjust voice, pacing, and any moments that do not land. Nothing is final until you are happy. You stay in control throughout.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Deliver</h3></div>
        <div class="svc-step-body"><p>You receive a finished manuscript, ready for editing or publishing. The credit and the rights are entirely yours. Our involvement stays completely confidential. You can take it anywhere from here.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Purple Giraffe Press Ghostwriting" loading="lazy"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>A confidential partnership, start to finish</h2>
      <p class="lead">Ghostwriting is a quiet craft. We do the writing, you make the decisions, and the finished book is credited entirely to you.</p>
      <p>You are involved as much or as little as you like, from a single brief to reviewing every draft along the way.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php">Get a Free Estimate &rarr;</a></div>
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
      <a class="btn btn-sun" href="contact.php">Book a Free Consultation &rarr;</a>
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

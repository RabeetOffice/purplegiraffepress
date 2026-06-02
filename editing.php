<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Editing Services | Purple Giraffe Press';
$page_description = 'Developmental and line editing for children\'s books. We sharpen structure, pacing, age fit, and read aloud rhythm while keeping your voice intact.';
$canonical_path   = 'editing.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
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

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Editing</div>
      <h1>Editing that <em>sharpens</em> the story, <strong>not your voice</strong></h1>
      <p class="lead">From big picture structure to line by line polish, our editors help your manuscript read smoothly, sound right out loud, and land with its age group.</p>
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
      <h2>Two kinds of editing, one stronger book</h2>
      <p class="lead">Children's books live or die on rhythm and clarity. A story can have a wonderful heart and still trip on pacing, an unclear arc, or words that do not fit the reader's age.</p>
      <p>We work in layers. Developmental editing shapes structure and flow, then line editing tunes the language so every sentence earns its place and reads beautifully aloud.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Developmental notes on structure, arc, and pacing</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Line editing for clarity, rhythm, and word choice</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A read aloud pass for the cadence storytime needs</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Editing for children&#039;s books at Purple Giraffe Press" loading="lazy"></figure>
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
    <h2>Your Editing journey, step by step</h2>
    <p class="lead" style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Read</h3></div>
        <div class="svc-step-body"><p>Your editor reads the entire manuscript with fresh, careful eyes. We get to know the story, the characters, and the voice before suggesting anything. First impressions matter, so we note what works as well as what does not. Only then do we plan the edit.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Assess</h3></div>
        <div class="svc-step-body"><p>You receive an editorial letter mapping the book's strengths and what it needs. It is honest, specific, and easy to act on. We explain the why behind each suggestion, not just the what. You always know the reasoning before you decide.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Develop</h3></div>
        <div class="svc-step-body"><p>We work on structure, arc, and pacing together across focused rounds. This is where a good story becomes a strong one. We look at how each page turn lands for a young reader. The biggest improvements usually happen here.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Line edit</h3></div>
        <div class="svc-step-body"><p>We tune clarity, rhythm, and word choice line by line. Every sentence is checked for how it reads aloud. We trim what slows the story and sharpen what carries it. The text starts to sing.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Polish</h3></div>
        <div class="svc-step-body"><p>A final pass cleans up consistency and any lingering rough edges. We check names, tenses, and small repeated habits. The manuscript is left smooth, confident, and consistent. It is ready for the next stage.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Handover</h3></div>
        <div class="svc-step-body"><p>You receive the fully edited manuscript, ready for design. We include clear notes so the next steps are obvious. Any open questions are flagged for you. Nothing is left ambiguous.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Purple Giraffe Press Editing" loading="lazy"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>Your voice, made clearer and stronger</h2>
      <p class="lead">Good editing is invisible. Readers should feel the story flow, not the work behind it. We sharpen what is already yours and explain every suggestion.</p>
      <p>You stay in control. Every change is yours to accept, and the final manuscript still sounds unmistakably like you.</p>
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

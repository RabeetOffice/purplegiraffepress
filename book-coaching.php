<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Coaching for Authors | Purple Giraffe Press';
$page_description = 'One on one children\'s book coaching. Personal guidance, accountability, and expert feedback to help you write and finish your manuscript with confidence.';
$canonical_path   = 'book-coaching.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
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

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Book Coaching</div>
      <h1>Write your book with <em>an expert</em> <strong>in your corner</strong></h1>
      <p class="lead">Some authors want to do the writing themselves, just with guidance. Coaching pairs you with a children's book pro for feedback, structure, and steady momentum.</p>
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
      <h2>Support that keeps you writing</h2>
      <p>Writing a children's book is deceptively hard, and most drafts stall somewhere in the middle. What gets authors to the finish line is structure, honest feedback, and a little accountability.</p>
      <p>Coaching gives you a personal guide who reads your pages, answers your questions, and helps you make confident decisions.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Regular one on one sessions on your manuscript</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Honest, practical feedback you can use</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Goals and check ins that keep you moving</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-coaching.webp" alt="Book Coaching for children&#039;s books at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
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
    <h2>Your Book Coaching journey, step by step</h2>
    <p style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Match</h3></div>
        <div class="svc-step-body"><p>We pair you with a coach who knows your kind of book. The right guide makes all the difference. We consider your goals, genre, and stage. A good match keeps you motivated.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Plan</h3></div>
        <div class="svc-step-body"><p>We set clear goals and a writing schedule that fits your life. Momentum comes from a realistic plan. We break the book into manageable steps. Small wins add up to a finished draft.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Write</h3></div>
        <div class="svc-step-body"><p>You write between sessions, with your coach a message away. The book stays yours at every word. You build a steady, sustainable habit. Progress becomes the norm, not the exception.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review</h3></div>
        <div class="svc-step-body"><p>Your coach reads your pages and gives honest, useful notes. You always know what is working and what is next. Feedback is practical, never vague. You leave each session clear on your next move.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Refine</h3></div>
        <div class="svc-step-body"><p>You revise with clear guidance instead of guesswork. Confusion turns into confident decisions. We help you see your story as a reader will. The draft gets noticeably stronger.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Finish</h3></div>
        <div class="svc-step-body"><p>You reach a complete manuscript you are proud of. From there, you can publish with us or anywhere. We celebrate the milestone with you. The hard part is done, on your terms.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/why-purple-giraffe.webp" alt="Purple Giraffe Press Book Coaching" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>You write the book, we keep you on track</h2>
      <p>Most drafts stall in the middle. A coach gives you structure, momentum, and honest feedback so you actually finish.</p>
      <p>The book stays entirely yours. We guide the craft and the process, and you keep the writing and the credit.</p>
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
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
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
<?php include 'includes/contact-section.php'; ?>

<?php include 'includes/footer.php'; ?>

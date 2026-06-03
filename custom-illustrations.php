<?php
include 'includes/config.php';

$page_title       = 'Custom Children\'s Book Illustration | Purple Giraffe Press';
$page_description = 'Original children\'s book illustration: character design, color studies, full page spreads, and print ready art matched to your story and age group.';
$canonical_path   = 'custom-illustrations.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 => 
  array (
    'q' => 'Can I choose my illustrator?',
    'a' => 'We match you with an illustrator whose style fits your story, and you can review portfolios before we begin. You are involved at every approval point.',
  ),
  1 => 
  array (
    'q' => 'How many revision rounds are included?',
    'a' => 'Each stage includes review rounds so the characters and spreads land the way you imagined before we move forward.',
  ),
  2 => 
  array (
    'q' => 'Do I own the illustrations?',
    'a' => 'Yes. On completion the final artwork and its rights are yours to use for your book and promotion.',
  ),
  3 => 
  array (
    'q' => 'What styles can you work in?',
    'a' => 'From soft watercolor to bold cartoon and everything between. We match the style to your story and reader age.',
  ),
  4 => 
  array (
    'q' => 'Can you illustrate a series?',
    'a' => 'Absolutely. We keep characters and style consistent across multiple books so your series feels like one world.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Custom Illustrations</div>
      <h1>Illustrations that make your story <em>feel</em> <strong>alive</strong></h1>
      <p class="lead">Our artists design characters and full page art that fit your voice and your reader's age, so every spread invites the next page turn.</p>
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
      <h2>Art made for your story, not pulled from a template</h2>
      <p>The pictures are half of a children's book. They set the mood, carry the humor, and give young readers a reason to ask for the story again at bedtime.</p>
      <p>We start with who your characters are and who they are for, then build a visual world around them. Every page is drawn for your book.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Characters designed from scratch to fit your voice</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Color palettes tested for mood and age fit</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>High resolution files ready for print and ebook</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Custom Illustrations for children&#039;s books at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
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
    <h2>Your Custom Illustrations journey, step by step</h2>
    <p style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Brief</h3></div>
        <div class="svc-step-body"><p>We start by learning your characters, your world, and the age you write for. We talk through mood, tone, and the feeling each page should carry. This shapes every visual choice that follows. You set the direction before we pick up a pencil.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Sketch</h3></div>
        <div class="svc-step-body"><p>Rough character sketches explore looks, expressions, and personality. We try several takes so you can compare and react. You help choose the direction before any colour goes down. It is quick, playful, and fully collaborative.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Style</h3></div>
        <div class="svc-step-body"><p>We agree on a palette and visual style that fit the mood of your story. We test how colours feel for your reader's age. This becomes the visual rulebook for the whole book. Consistency from here keeps every spread feeling like one world.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Illustrate</h3></div>
        <div class="svc-step-body"><p>Full page spreads are painted to match the rhythm and page turns of your text. Each image is composed to invite the next page. We balance character, background, and space for words. The art carries as much of the story as the words do.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Review</h3></div>
        <div class="svc-step-body"><p>You review every spread and we refine together until it feels right. Small tweaks to expression or colour often make the biggest difference. Nothing is finalised without your sign off. Your reactions guide each round.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Finalize</h3></div>
        <div class="svc-step-body"><p>Artwork is colour corrected and packaged at full print resolution. We prepare versions suited to both print and ebook. Files are named and organised so production runs smoothly. You receive art ready to drop straight into the book.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/why-purple-giraffe.webp" alt="Purple Giraffe Press Custom Illustrations" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>Illustrators who understand children's books</h2>
      <p>Our artists draw for young eyes, with the warmth, humor, and clarity that make a picture book work. You see sketches early and guide the look at every stage.</p>
      <p>Nothing is recycled. Every spread is created for your book, and you own the final artwork outright.</p>
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

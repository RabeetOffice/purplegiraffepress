<?php include 'includes/config.php'; ?>
<?php
$page_title = "Children's Book Publisher for First-Time Authors | Purple Giraffe Press";
$page_description = "A boutique children's book publisher that helps first-time authors write, illustrate, edit, and publish picture books and chapter books. You keep 100% of your royalties.";
$canonical_path = 'index.php';
$faq_category = 'general';
$load_faqs_only = true;
include 'includes/faqs.php';
?>
<?php include 'includes/header.php'; ?>

<section class="hero figma-hero">
  <video class="hero-video" autoplay muted loop playsinline preload="none" poster="assets/images/background.webp" aria-hidden="true">
    <source data-src="assets/videos/background-video.mp4" type="video/mp4">
  </video>
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container hero-layout">
    <div class="hero-copy">
      <p class="eyebrow script-mark">Boutique Children's Book Publisher</p>
      <h1>Bring Your <em>Children's Book</em> to Life</h1>
      <p class="lead">We help first-time authors write, edit, illustrate, and publish children's books that families love. We're with you from the first draft all the way to launch day, and you keep 100% of the royalties.</p>
      <div class="button-row hero-actions">
        <a class="btn btn-sun" href="submissions.php">Submit Your Story</a>
        <a class="btn btn-light" href="contact.php">Get a Free Estimate</a>
      </div>
      <div class="trust-row" aria-label="Why authors choose Purple Giraffe Press">
        <span>100% author royalties</span>
        <span>Award-winning illustrators</span>
        <span>Global distribution</span>
      </div>
    </div>
    <div class="mascot-stage" aria-label="Purple giraffe mascot in a storybook scene">
      <span class="float-card one">Custom illustrations</span>
      <span class="float-card two">Print + ebook</span>
      <span class="float-card three">School &amp; library ready</span>
      <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple Giraffe Press mascot for children's book publishing">
    </div>
  </div>
</section>

<?php include 'includes/logo-slider.php'; ?>

<section class="section about-home" id="about">
  <div class="container about-home-layout">
    <figure class="about-home-figure reveal">
      <span class="about-home-glow" aria-hidden="true"></span>
      <img src="./assets/images/about.png" alt="<?php echo e(SITE_NAME); ?> logo" loading="lazy">
      <span class="about-home-pill"><span aria-hidden="true">★</span> 100% author royalties</span>
    </figure>
    <div class="about-home-copy reveal">
      <p class="eyebrow script-mark">- about us</p>
      <h2>A tiny press with big <em>storybook dreams.</em></h2>
      <p>Purple Giraffe Press is a boutique children&apos;s book publisher in Portland, Oregon. We help first-time authors turn a rough draft into a finished book that kids ask for at bedtime, again and again.</p>
      <p>We only take on a few stories each season, so every author works closely with our editors, illustrators, and designers. You keep full ownership of your work and 100% of your royalties, and we stay beside you from the first draft all the way to launch day.</p>
      <ul class="about-home-points">
        <li><span aria-hidden="true">✓</span> Boutique, author-first care on every book</li>
        <li><span aria-hidden="true">✓</span> Award-winning illustration handled in-house</li>
        <li><span aria-hidden="true">✓</span> Global print and ebook distribution</li>
      </ul>
      <div class="button-row">
        <a class="btn btn-primary" href="about-us.php">More about our story →</a>
        <a class="text-link" href="submissions.php">Submit your story</a>
      </div>
    </div>
  </div>
</section>



<section class="section figma-cream services-showcase">
  <div class="container section-heading">
    <p class="eyebrow script-mark">- what we do</p>
    <h2>Everything your children&apos;s book needs.</h2>
    <p class="lead">From the first manuscript polish to launch week, our small team handles editing, illustration, cover design, publishing, and marketing. The process stays clear, creative, and friendly the whole way through.</p>
  </div>
  <div class="container">
    <?php include 'includes/services.php'; ?>
  </div>
</section>

<section class="section figma-cream catalog-section">
  <div class="container section-heading split-heading">
    <div>
      <p class="eyebrow script-mark">- our catalog</p>
      <h2>Stories we&apos;ve <em>brought to life.</em></h2>
    </div>
    <a class="text-link" href="portfolio.php">View full catalog →</a>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why purple giraffe?</p>
      <h2>The children&apos;s book publisher that puts <em>authors first.</em></h2>
      <p>We&apos;re not a publishing factory. We&apos;re a small, close-knit team that takes on just a handful of stories each season, and we treat every manuscript like it&apos;s our own.</p>
      <div class="founder-mini">
        <img src="<?php echo e(SITE_MASCOT); ?>" alt="Small Purple Giraffe Press mascot">
        <span><strong>- Maya Okafor</strong><small>Founder &amp; Publisher</small></span>
      </div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>100% Royalties</h3><p>You keep every cent your book earns, on every platform, forever.</p></article>
      <article><span>✓</span><h3>Boutique Attention</h3><p>A small slate each season means real care, not a conveyor belt.</p></article>
      <article><span>✓</span><h3>Award-Winning Illustrators</h3><p>In-house artists with Caldecott nods and library favorites.</p></article>
      <article><span>✓</span><h3>Global Distribution</h3><p>Print and ebook in 40+ countries, plus schools and libraries.</p></article>
    </div>
  </div>
</section>

<section class="section figma-cream process-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the journey</p>
    <h2>From manuscript to <em>masterpiece</em>, in five simple steps.</h2>
  </div>
  <div class="container">
    <div class="journey-line mobile-swiper swiper">
      <div class="swiper-wrapper">
        <article class="swiper-slide reveal"><span>1</span><h3>Submit</h3><p>Send us your manuscript or story idea.</p></article>
        <article class="swiper-slide reveal"><span>2</span><h3>Edit</h3><p>Three editing rounds with your editor.</p></article>
        <article class="swiper-slide reveal"><span>3</span><h3>Illustrate</h3><p>Hand-paired with the perfect illustrator.</p></article>
        <article class="swiper-slide reveal"><span>4</span><h3>Design</h3><p>Cover and interior typeset for young readers.</p></article>
        <article class="swiper-slide reveal"><span>5</span><h3>Launch</h3><p>Global distribution, reviews, and press.</p></article>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<section class="stats-band">
  <div class="container stats-grid">
    <div><strong>500+</strong><span>Books Published</span></div>
    <div><strong>40+</strong><span>Countries Shipped</span></div>
    <div><strong>98%</strong><span>Author Satisfaction</span></div>
    <div><strong>12</strong><span>Award Wins</span></div>
  </div>
</section>

<section class="section figma-cream">
  <div class="container section-heading">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said <em>yes</em>, and never looked back.</h2>
  </div>
  <div class="container">
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<section class="section figma-lavender notes-section">
  <div class="container section-heading split-heading">
    <div>
      <p class="eyebrow script-mark">- from the studio</p>
      <h2>Field notes &amp; <em>insights.</em></h2>
    </div>
    <a class="text-link" href="services.php">All articles →</a>
  </div>
  <div class="container">
    <div class="notes-grid mobile-swiper swiper">
      <div class="swiper-wrapper">
        <article class="note-card swiper-slide reveal">
          <div class="note-art">
            <img src="https://images.unsplash.com/photo-1519682337058-a94d519337bc?auto=format&fit=crop&w=900&q=80" alt="Stack of children's books and reading materials">
            <span>★</span>
          </div>
          <p class="note-category">Craft</p>
          <h3>The hand-drawn art comeback in children&apos;s books</h3>
          <p>Why families are reaching for paint, pencil, and texture in picture books again.</p>
          <a href="custom-illustrations.php">Read more →</a>
        </article>
        <article class="note-card swiper-slide reveal">
          <div class="note-art">
            <img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=900&q=80" alt="Writer planning a manuscript at a desk">
            <span>■</span>
          </div>
          <p class="note-category">Industry</p>
          <h3>Publishing a children&apos;s book in 2026: a first-time author&apos;s guide</h3>
          <p>Royalties, rights, and the real story most brochures leave out.</p>
          <a href="pricing.php">Read more →</a>
        </article>
        <article class="note-card swiper-slide reveal">
          <div class="note-art">
            <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?auto=format&fit=crop&w=900&q=80" alt="Art supplies for illustration and creative work">
            <span>◆</span>
          </div>
          <p class="note-category">Illustration</p>
          <h3>How to find your illustration style in 6 sketches</h3>
          <p>A studio exercise we run with every illustrator we sign.</p>
          <a href="artists.php">Read more →</a>
        </article>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<section class="section figma-cream">
  <div class="container narrow center">
    <p class="eyebrow script-mark">- questions</p>
    <h2>Children&apos;s book publishing questions, answered.</h2>
    <?php unset($load_faqs_only); include 'includes/faqs.php'; ?>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

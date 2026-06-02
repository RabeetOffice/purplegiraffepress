<?php include 'includes/config.php'; ?>
<?php require_once 'includes/blog-data.php'; ?>
<?php
$page_title = "Australian Children's Book Publisher Since 2008 | Purple Giraffe Press";
$page_description = "Purple Giraffe Press is an independent Australian children's book publisher founded in 2008. We publish picture books, chapter books, and middle grade stories children love to read again and again.";
$canonical_path = 'index.php';
$page_faqs = [
  ["q" => "How do I get my children's book published in Australia?", "a" => "Start by sending us your manuscript, or even a rough idea. We read it, talk through your goals, and map a clear path from editing and illustration to design, printing, and distribution. You stay involved at every step and keep full ownership of your book. The whole process is built to feel guided rather than overwhelming, especially if this is your first book."],
  ["q" => "Do I keep the rights and royalties to my book?", "a" => "Yes. You keep your copyright, your characters, and 100% of the royalties paid by retail platforms. We charge clear, flat fees for the work we do, such as editing, illustration, and design, and we never take an ongoing cut of your sales. Your book stays yours, for good."],
  ["q" => "What kinds of children's books do you publish?", "a" => "We publish picture books for the very young, early readers, and middle grade chapter books for confident readers. We work across fiction and nonfiction, rhyme and prose, gentle bedtime stories and laugh out loud adventures. If it is written for children, there is a good chance it is a fit."],
  ["q" => "I am a first-time author. Can you still help me?", "a" => "Absolutely, and most of the authors we work with are publishing for the first time. We explain each stage in plain language, handle the technical parts, and guide the creative decisions with you. You do not need any publishing experience to end up with a book you are proud of."],
  ["q" => "How long does it take to publish a children's book?", "a" => "A typical picture book takes around four to seven months from an accepted manuscript to launch day. The biggest factor is illustration, since original art takes time to develop properly. Chapter books and nonfiction can move faster. We give you a realistic timeline at the start, so there are no surprises."],
  ["q" => "How much does it cost to publish with Purple Giraffe Press?", "a" => "It depends on what your book needs. A full path with editing, illustration, design, and distribution is a larger investment than a single service like formatting. We price each project around the actual work involved rather than a one size fits all package. The first consultation is free and comes with an honest breakdown."],
  ["q" => "Will my book be available in shops and online?", "a" => "Yes. We set up distribution so your book is orderable in print and ebook through major retailers, and available to bookshops, schools, and libraries. Your story can reach readers across Australia and in more than 40 countries, depending on the plan you choose."],
  ["q" => "Do you provide illustrations, or do I need my own illustrator?", "a" => "We have illustrators in house and match you with an artist whose style suits your story and your reader's age. You see early sketches and guide the look before any final art begins. If you already have an illustrator you love, we are happy to work with them too."],
  ["q" => "What makes Purple Giraffe Press different from other publishers?", "a" => "We are an independent Australian press that has been doing this since 2008, and we take on only a handful of books each season. That means real attention from the people actually doing the work, full creative control for you, and 100% of your royalties. We treat every manuscript like it is our own."],
  ["q" => "How do I start, and is the first chat really free?", "a" => "Yes, the first consultation is genuinely free and there is no pressure. Tell us about your book using the quick form, or send your manuscript, and we will come back with friendly, practical next steps. You decide if and when you want to move forward."],
];
?>
<?php include 'includes/header.php'; ?>

<section class="hero figma-hero">
  <video class="hero-video" autoplay muted loop playsinline preload="none" poster="assets/images/background.webp" aria-hidden="true">
    <source data-src="assets/videos/background-video.mp4" type="video/mp4">
  </video>
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container hero-layout">
    <div class="hero-copy">
      <p class="eyebrow script-mark">Independent Australian Children's Book Publisher</p>
      <h1>Bring Your <em>Children's Book</em> to Life</h1>
      <p class="lead">Since 2008, Purple Giraffe Press has helped authors and illustrators bring children's books to life. We are with you from the first draft to launch day, and you keep 100% of your royalties.</p>
      <div class="button-row hero-actions">
        <a class="btn btn-sun" href="contact.php">Submit Your Story</a>
        <a class="btn btn-light" href="contact.php" data-quote-open>Get a Free Estimate</a>
      </div>
      <div class="trust-row" aria-label="Why authors choose Purple Giraffe Press">
        <span>Australian, since 2008</span>
        <span>Award-winning illustrators</span>
        <span>100% author royalties</span>
      </div>
    </div>
    <div class="mascot-stage" aria-label="Purple giraffe mascot in a storybook scene">
      <span class="float-card one">Custom illustrations</span>
      <span class="float-card two">Print + ebook</span>
      <span class="float-card three">School &amp; library ready</span>
      <img src="./assets/images/hero-character-left.webp" alt="Purple Giraffe Press mascot for children's book publishing">
    </div>
  </div>
</section>

<?php include 'includes/logo-slider.php'; ?>

<section class="section about-home" id="about">
  <div class="container about-home-layout">
    <figure class="about-home-figure reveal">
      <span class="about-home-glow" aria-hidden="true"></span>
      <img src="./assets/images/about.webp" alt="<?php echo e(SITE_NAME); ?> logo" loading="lazy">
      <span class="about-home-pill"><span aria-hidden="true">★</span> Australian, est. 2008</span>
    </figure>
    <div class="about-home-copy reveal">
      <p class="eyebrow script-mark">- about us</p>
      <h2>An Australian press with big <em>storybook dreams.</em></h2>
      <p>Purple Giraffe Press is an independent children&apos;s book publisher, born in Australia in 2008. We turn manuscripts into finished books that children ask for at bedtime, again and again.</p>
      <p>Our authors work closely with our editors, illustrators, and designers on every book. You keep full ownership of your work and 100% of your royalties, and we stay beside you from the first draft all the way to launch day.</p>
      <ul class="about-home-points">
        <li><span aria-hidden="true">✓</span> Author-first care on every book</li>
        <li><span aria-hidden="true">✓</span> Award-winning illustration handled in-house</li>
        <li><span aria-hidden="true">✓</span> Global print and ebook distribution</li>
      </ul>
      <div class="button-row">
        <a class="btn btn-primary" href="about-us.php">More about our story →</a>
        <a class="text-link" href="contact.php">Submit your story</a>
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
    <?php $services_limit = 6; include 'includes/services.php'; ?>
    <div class="center" style="margin-top: 38px;">
      <a class="btn btn-primary" href="<?php echo e(asset('services.php')); ?>">View all services <span aria-hidden="true">&rarr;</span></a>
    </div>
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
      <p>We&apos;re not a publishing factory. We&apos;re a close-knit Australian team that treats every manuscript like it&apos;s our own, from debut storytellers to beloved names.</p>
      <div class="founder-mini">
        <img src="<?php echo e(SITE_MASCOT); ?>" alt="Small Purple Giraffe Press mascot">
        <span><strong>- Maya Okafor</strong><small>Founder &amp; Publisher</small></span>
      </div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>100% Royalties</h3><p>You keep every cent your book earns, on every platform, forever.</p></article>
      <article><span>✓</span><h3>Proudly Australian</h3><p>Born in 2008, with stories set from the bush to the reef and far beyond.</p></article>
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
    <div><strong>10k+</strong><span>Books Donated</span></div>
    <div><strong>2008</strong><span>Australian, Established</span></div>
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

<?php
/* Field notes — same carousel as the blog "More from the blog" section. */
$recent_eyebrow = '- from the studio';
$recent_heading = 'Field notes &amp; <em>insights.</em>';
$recent_limit   = 6;
require 'includes/blog-recent.php';
?>

<section class="section figma-cream">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- questions</p>
      <h2>Children's book publishing, <em>answered.</em></h2>
      <p>The questions first time authors ask us most, answered honestly. If yours is not here, a quick consultation will cover it.</p>
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

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

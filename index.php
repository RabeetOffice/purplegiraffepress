<?php include 'includes/config.php'; ?>
<?php require_once 'includes/blog-data.php'; ?>
<?php
$page_title = "Purple Giraffe Press | Children's Book Publishers";
$page_description = "Purple Giraffe Press helps authors publish engaging children's books with expert guidance, quality production, and a seamless publishing experience.";
$canonical_path = 'index.php';
$page_faqs = [
  ["q" => "How much does it cost to publish a children's book in Australia?", "a" => "There's no honest flat rate. A 32-page illustrated picture book and a text-heavy chapter book are entirely different challenges. We review your manuscript first, then provide a written quote based on its actual condition, with every service named and no vague \"starting from\" figures."],
  ["q" => "How long does children's book publishing take?", "a" => "Most projects take several months from start to launch. The biggest variable is illustration; a fully illustrated picture book naturally takes longer than a text-based chapter book. We'll give you a realistic timeline upfront so you always know what to expect next."],
  ["q" => "Can Purple Giraffe Press work with my existing illustrations?", "a" => "Absolutely. If you already have artwork you love, we'll build the layout and design around it. If you need an artist, we'll match you with one who understands your characters and work through sketches together before any final painting begins."],
  ["q" => "Can you help if my manuscript is not finished?", "a" => "Yes. If you have a great idea but need help with the words, our ghostwriting service can draft the story with you in a voice that stays authentically yours. You'll still guide every decision and give approval at each stage."],
  ["q" => "Can my book be made available to Australian bookshops?", "a" => "Yes. We set up your book with the correct metadata so retailers can order it and list it through your chosen channels. We'll also be honest about how distribution works and what it takes to encourage bookshops to actually stock your title."],
  ["q" => "Do I need an ISBN?", "a" => "Yes, an ISBN is essential for your book to be identified, listed, and ordered by the trade. You don't need to learn the technicalities yourself; we handle the ISBN registration and platform setup as part of our publishing management."],
  ["q" => "Can you publish an ebook as well as a printed book?", "a" => "Yes. We can prepare your book for both print and digital formats, and we also coordinate audiobooks with professional narration if you'd like to reach families who prefer to listen at bedtime or during commutes."],
  ["q" => "Do you provide marketing support?", "a" => "We do. Our focus is practical groundwork, retailer descriptions, social media graphics, and assets aimed at schools and libraries. Publishing makes your book exist; this support helps make it findable and gives your launch a strong start."],
  ["q" => "Will I approve the book before it is published?", "a" => "Always. Nothing goes to print without your written approval. Every stage has a built-in review point where you see the work, give feedback, and sign off before we move forward, so the finished book matches your vision."],
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
      <p class="eyebrow script-mark">Purple Giraffe Press</p>
      <h1>Publish Your <em>Children's Book</em> with Clarity and Professional Support</h1>
      <p class="lead" style="font-weight : 800;">The People Who Explain Every Step Before They Take It</p>
      <p class="lead">Writing a story is a massive achievement, but the technical work that follows, the editing, the artwork briefs, the layout design, and the mountain of distribution paperwork, is where most authors feel stuck. This often leads to budgets climbing without a clear plan. Purple Giraffe Press exists to change that experience for authors across Australia. We ensure you understand the entire roadmap before a single task begins. You receive a defined project scope, a realistic timeline, and a quote tailored specifically for your book. You stay in control of the creative decisions that matter, from the illustration style to the final proofs, while we handle the mechanics of professional production. </p>
      <div class="button-row hero-actions">
        <a class="btn btn-sun" href="javascript:;" data-quote-open>Submit Your Story</a>
        <a class="btn btn-light" href="javascript:;" data-quote-open>Get a Free Manuscript Assessment</a>
      </div>
      <!-- <div class="trust-row" aria-label="Why authors choose Purple Giraffe Press">
        <span>Australian, since <?php echo e(SITE_FOUNDED_YEAR); ?></span>
        <span>Award-winning illustrators</span>
        <span>100% author royalties</span>
      </div> -->
    </div>
    <div class="mascot-stage" aria-label="Purple giraffe mascot in a storybook scene">
      <span class="float-card one">Custom illustrations</span>
      <span class="float-card two">Print + ebook</span>
      <span class="float-card three">School &amp; library ready</span>
      <img src="./assets/images/hero-character-left.webp" alt="Purple Giraffe Press mascot for children's book publishing" fetchpriority="high" decoding="async" width="509" height="663">
    </div>
  </div>
</section>

<?php include 'includes/logo-slider.php'; ?>

<section class="section about-home" id="about">
  <div class="container about-home-layout">
    <figure class="about-home-figure reveal">
      <span class="about-home-glow" aria-hidden="true"></span>
      <img src="./assets/images/home-about.webp" alt="<?php echo e(SITE_NAME); ?> logo" loading="lazy">
      <span class="about-home-pill"><span aria-hidden="true">★</span> Australian, est. <?php echo e(SITE_FOUNDED_YEAR); ?></span>
    </figure>
    <div class="about-home-copy reveal">
      <!-- <p class="eyebrow script-mark">- about us</p> -->
      <h2>About Us</h2>
      <p>We aren’t a traditional house that takes your rights and disappears for two years, nor are we a simple printer. We work as a dedicated children's book publisher that keeps you involved in every meaningful choice. Our team coordinates all the specialists needed to make a book properly: editors, illustrators, designers, and distribution experts. We work with writers who want a high-end finish while keeping their creative independence. Because we explain every stage upfront, you always know exactly what you are paying for and what to expect next. This transparency is why we are considered one of the most reliable publishers for independent authors today.</p>
      <p>At our children's book publishing house, we focus entirely on what makes a story work for a younger audience. We coordinate the people and processes involved in preparing a book for publication, from the first editorial pass through to final production files.</p>
      <!-- <ul class="about-home-points">
        <li><span aria-hidden="true">✓</span> Author-first care on every book</li>
        <li><span aria-hidden="true">✓</span> Award-winning illustration handled in-house</li>
        <li><span aria-hidden="true">✓</span> Global print and ebook distribution</li>
      </ul> -->
      <div class="button-row">
        <a class="btn btn-primary" href="about-us.php">More about our story →</a>
        <a class="text-link" href="javascript:;" data-quote-open>Submit your story</a>
      </div>
    </div>
  </div>
</section>



<section class="section figma-cream services-showcase">
  <div class="container section-heading">
    <p class="eyebrow script-mark">- what we do</p>
    <h2>Complete Book Publishing Services for Authors at Every Stage</h2>
    <p>What your project includes depends on your goals. We offer a full suite of professional services tailored to the specific needs of children’s literature.</p>
  </div>
  <div class="container">
    <?php $services_limit = 6; include 'includes/services.php'; ?>
    <div class="center" style="margin-top: 38px;">
      <a class="btn btn-primary" href="<?php echo e(asset('services.php')); ?>">View all services <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<section class="section section-white formats-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; formats</p>
    <h2>Age Categories and Book Formats</h2>
    <p>The target reader shapes every production choice. Getting this right early prevents expensive changes later.</p>
  </div>
  <div class="container">
    <div class="format-grid">
      <article class="format-card reveal"><h3>Board Books</h3><p>Simple language and durable construction for toddlers.</p></article>
      <article class="format-card reveal"><h3>Picture Books</h3><p>We welcome picture book submissions Australia-wide, where the relationship between art and text is the heart of the project.</p></article>
      <article class="format-card reveal"><h3>Early Readers</h3><p>Controlled vocabulary and clear layouts to help children build confidence in their reading.</p></article>
      <article class="format-card reveal"><h3>Chapter Books</h3><p>Longer arcs with occasional spot illustrations to keep readers engaged as they transition to longer stories.</p></article>
      <article class="format-card reveal"><h3>Middle-Grade Books</h3><p>Sustained plotting and character depth for older children, with a design that feels closer to a standard novel.</p></article>
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
      <h2>Why Our Publishing Companies for <em>Children's Books</em> Approach Works Better for Modern Authors</h2>
      <p>We&apos;re not a publishing factory. We&apos;re a close-knit Australian team that treats every manuscript like it&apos;s our own, from debut storytellers to beloved names.</p>
      <div class="founder-mini">
        <img src="<?php echo e(SITE_MASCOT); ?>" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children&apos;s Publisher</small></span>
      </div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Child Reading Expertise</h3><p>A book for a child isn’t just a shorter version of a novel for adults. The reading level, the rhythm of page turns, and the way text sits alongside an image all dictate whether a story succeeds. Every choice we make is filtered through this understanding. Choosing hybrid publishing for children's books means you maintain your financial stake while benefiting from the editorial expertise usually reserved for traditional houses.</p></article>
      <article><span>✓</span><h3>Custom Publishing Plans</h3><p>We don’t believe in forcing authors into rigid packages. The right publisher children's books deserve is one that reads the manuscript first, then builds a plan that fits. This ensures you only invest in the services your story actually needs to stand out in a competitive market.</p></article>
      <article><span>✓</span><h3>Clear Publishing Process</h3><p>Every stage of the process has a built-in review point. You see the work, provide your feedback, and give your approval before we move to the next step. This collaborative loop prevents any confusion about the project’s direction and ensures the finished product meets your expectations.</p></article>
      <article><span>✓</span><h3>Author Creative Control</h3><p>You never hand over the wheel. You review the editorial notes before they are locked in and check the character sketches before the illustrator moves to final colours. Your name sits on a book that looks and sounds exactly how you imagined it would when you first started writing.</p></article>
      <article><span>✓</span><h3>Transparent Pricing</h3><p>Vague pricing is one of the most frustrating parts of this industry. We avoid the “starting from” figures that often hide the true cost of production. Our written quotes name every included service and specify revision rounds, allowing you to plan your budget with total confidence.</p></article>
    </div>
  </div>
</section>

<section class="section figma-cream process-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the journey</p>
    <h2>Publishers Working Together to Create Your Successful <em>Publishing Journey</em></h2>
    <p>Success in this industry happens when books and publishers work in total alignment. We follow a defined sequence:</p>
  </div>
  <div class="container">
    <div class="journey-line journey-7">
      <article class="reveal"><span>1</span><h3>Initial Discussion</h3><p>We chat about your goals and look at your manuscript.</p></article>
      <article class="reveal"><span>2</span><h3>Written Proposal</h3><p>You receive a full scope and costings before anything starts.</p></article>
      <article class="reveal"><span>3</span><h3>Editing</h3><p>Your story is polished through agreed revision rounds.</p></article>
      <article class="reveal"><span>4</span><h3>Visuals</h3><p>We settle the art direction and approve character designs.</p></article>
      <article class="reveal"><span>5</span><h3>Layout</h3><p>The text and art are placed into the final design for your sign-off.</p></article>
      <article class="reveal"><span>6</span><h3>Setup</h3><p>Files are prepared for the trade with correct metadata.</p></article>
      <article class="reveal"><span>7</span><h3>Launch</h3><p>Your book goes live through your chosen channels with planned support.</p></article>
    </div>
  </div>
</section>

<section class="section figma-lavender insight-section">
  <div class="container">
    <div class="editorial-rows">
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">01</span><h2>The Real Cost of Publishing in Australia</h2></div>
        <div class="er-body"><p>There is no honest flat rate for a book. A 32-page illustrated title and a text-heavy chapter book are different challenges. Comparing book publishing companies without looking at the specific needs of your manuscript often leads to unexpected costs. As one of the more transparent Australian children’s book publishers, we provide a breakdown based on the actual condition of your work.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">02</span><h2>Printing, Distribution, and Availability</h2></div>
        <div class="er-body"><p>You don’t need a physical children’s books service in Australia to get a world-class result. We work remotely with authors across the country, using digital tools to share proofs and stay in touch. We help you choose between print-on-demand for flexibility or bulk printing for better margins. We also ensure your book is listed correctly so retailers can order it. Distribution makes your book available; we’ll be honest about how to encourage bookshops to actually stock it.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">03</span><h2>Australian Publishing Administration: Understanding Modern Global Publishing Access</h2></div>
        <div class="er-body"><p>The administrative side of the industry is often the most important. If you have been searching for book publishing companies and only found local printers, you likely realised you need an administrator to manage the book trade data. We handle the ISBN registration, legal deposits, and the complex mechanics that publishing companies’ children’s books rely on to ensure titles are listed correctly. We manage the metadata that other publishing companies’ children’s books often overlook.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">04</span><h2>Rights, Ownership, and Full Creative Control for Every Author</h2></div>
        <div class="er-body"><p>We keep the legal side simple: you own your work. Our agreements state plainly that you retain the rights to your manuscript and the commissioned design files. We also break down exactly how retailer discounts and printing costs work, so you understand your earnings from every sale. There are no hidden fees or rights grabs here.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">05</span><h2>Children’s Book Marketing That Builds Long-Term Reader Visibility</h2></div>
        <div class="er-body"><p>Publishing makes your book exist; marketing makes it findable. We help you prepare the materials you need to reach schools, libraries, and bookshops. Our focus is on practical groundwork, like retailer descriptions and social media graphics, that helps you build a real audience over time.</p></div>
      </article>
    </div>
  </div>
</section>

<section class="stats-band">
  <div class="container stats-grid">
    <div><strong>500+</strong><span>Books Published</span></div>
    <div><strong>40+</strong><span>Countries Shipped</span></div>
    <div><strong>10k+</strong><span>Books Donated</span></div>
    <div><strong><?php echo e(SITE_FOUNDED_YEAR); ?></strong><span>Australian, Established</span></div>
  </div>
</section>

<section class="section figma-cream t-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said <em>yes</em>, and never looked back.</h2>
  </div>
  <?php include 'includes/testimonials-marquee.php'; ?>
  <div class="container center t-section-cta">
    <div class="t-trustpilot"><?php echo pgp_trustpilot_badge(); ?></div>
    <a class="btn btn-light" href="<?php echo e(asset('testimonials.php')); ?>">Read all reviews &rarr;</a>
  </div>
</section>

<?php
/* Field notes / blog carousel is hidden on the home page per request.
   To restore it, uncomment the block below.

$recent_eyebrow = '- from the studio';
$recent_heading = 'Field notes &amp; <em>insights.</em>';
$recent_limit   = 6;
require 'includes/blog-recent.php';
*/
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

<section class="section section-white start-project">
  <div class="container narrow center">
    <p class="eyebrow script-mark">- start your project</p>
    <h2>Start Your Project</h2>
    <p>If you are ready to see your story in print, we want to hear from you. Send us your manuscript, tell us who your reader is, and let us know what you hope to achieve. We will give you an honest read on the best way to move forward.</p>
    <div class="button-row center-row">
      <a class="btn btn-sun" href="<?php echo e(asset('contact.php')); ?>">Send Your Manuscript <span aria-hidden="true">&rarr;</span></a>
      <a class="btn btn-light" href="<?php echo e(asset('contact.php')); ?>" data-quote-open>Get a Free Consultation</a>
    </div>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

<?php
include 'includes/config.php';

$page_title       = 'Premium Nonfiction Book Services | Purple Giraffe Press';
$page_description = 'Premium nonfiction services for children\'s and educational books: structure, fact checking, age appropriate explanation, references, and clear visual layout.';
$canonical_path   = 'premium-nonfiction-services.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
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

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Premium Nonfiction Services</div>
      <h1>Nonfiction for kids, done with <em>real</em> <strong>rigor</strong></h1>
      <p class="lead">Educational and nonfiction children's books carry extra responsibility. We help you explain real things clearly, accurately, and at exactly the right age.</p>
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
      <h2>Accurate, clear, and genuinely fun to read</h2>
      <p class="lead">Children's nonfiction has to be two things at once: trustworthy and delightful. Facts must be correct, but they also have to land for a young reader.</p>
      <p>Our support covers structure, fact checking, age appropriate language, references, and the visual layout that helps complex ideas make sense.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Content structured so it builds clearly for kids</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Facts reviewed and sourced for accuracy</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Visuals and layout that make ideas click</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Premium Nonfiction Services for children&#039;s books at Purple Giraffe Press" loading="lazy"></figure>
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
    <h2>Your Premium Nonfiction Services journey, step by step</h2>
    <p class="lead" style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Scope</h3></div>
        <div class="svc-step-body"><p>We define the topic, the angle, and the exact reader age. Good nonfiction starts with a sharp focus. We decide what to include and, just as importantly, what to leave out. A clear scope keeps the book tight.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Outline</h3></div>
        <div class="svc-step-body"><p>We shape the material into a clear path that builds knowledge step by step. Structure is what makes facts stick. We sequence ideas so each one prepares the next. The outline becomes the book's backbone.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Write</h3></div>
        <div class="svc-step-body"><p>We develop or refine the text so it is correct and a pleasure to read. Accuracy and delight are not opposites. We explain ideas in plain, age right language. Curiosity is the goal on every page.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Fact check</h3></div>
        <div class="svc-step-body"><p>Every claim is reviewed and sourced appropriately for the age group. Trust is the whole point of nonfiction. We verify figures, names, and statements carefully. Where sources differ, we flag it.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Design</h3></div>
        <div class="svc-step-body"><p>We plan visuals and layout that make complex ideas click. Diagrams do real teaching, not just decoration. We pair words and images so they reinforce each other. The page becomes a learning tool.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Finalize</h3></div>
        <div class="svc-step-body"><p>We complete references and back matter to a high standard. The finished book stands up to scrutiny. We include the notes a curious reader or teacher will want. Everything is checked one last time.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="Purple Giraffe Press Premium Nonfiction Services" loading="lazy"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>Trustworthy nonfiction children love</h2>
      <p class="lead">Children's nonfiction has to be correct and delightful at once. We keep the facts solid while keeping the reading a joy.</p>
      <p>From science to history, we help you explain real things at exactly the right age, with references handled properly.</p>
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

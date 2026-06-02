<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Pricing - Purple Giraffe Press';
$page_description = 'Review Purple Giraffe Press publishing package options for children\'s book authors, with flat fees and 100% author royalties.';
$canonical_path = 'pricing.php';
$page_faqs = [
  ["q" => "How much does it cost to publish a children's book?", "a" => "It depends entirely on what your book needs. A full service path covering editing, illustration, design, printing, and distribution is a bigger investment than a single job like formatting and upload. We price every project around your manuscript and your goals, not a fixed one size fits all fee. The consultation is free and includes a clear, honest breakdown."],
  ["q" => "How do your fees work?", "a" => "We charge flat, upfront fees for the services you choose, agreed before any work begins. There are no hidden costs and no surprise invoices later. You always know exactly what you are paying for and why."],
  ["q" => "Do I really keep 100% of my royalties?", "a" => "Yes. Royalties paid by retail platforms go directly to you, in full, forever. We earn from the flat production fees for our work, not from an ongoing share of your sales. Your book keeps earning for you, not for us."],
  ["q" => "Do you offer payment plans?", "a" => "Yes. Qualified projects can be split into interest free installments, commonly three or six payments, with work beginning after the first deposit. We want the cost to be manageable rather than a barrier to publishing your book."],
  ["q" => "What is included in a full publishing package?", "a" => "A complete package typically includes editing, custom illustration, cover and interior design, print and ebook file setup, ISBN, distribution, and launch support. We tailor exactly what is included to your book, so you are not paying for things you do not need."],
  ["q" => "Why do prices vary so much between books?", "a" => "Illustration is the biggest factor. A 32 page full colour picture book needs far more original art than a text driven chapter book, so it costs more to produce. Length, format, and the services you choose all play a part too."],
  ["q" => "Are there any ongoing or hidden fees?", "a" => "No. Once your flat fees are agreed, that is the cost of the work. We do not charge ongoing platform fees or take a cut of your royalties. If something falls outside the original scope, we discuss and agree it with you first."],
  ["q" => "Can I start with one service and add more later?", "a" => "Yes. You can begin with a single service, such as editing or a cover, and add others whenever you are ready. There is no obligation to buy a full package, and your earlier work carries straight into the next stage."],
  ["q" => "Do you price audiobooks, printing, and distribution separately?", "a" => "Yes. Each can be quoted on its own or bundled into a package. We will recommend what makes sense for your launch and your budget, and explain the trade offs clearly so you can decide."],
  ["q" => "How do I get an exact quote for my book?", "a" => "Tell us about your book using the quick form, or send your manuscript, and we will come back with a tailored quote and a recommended plan. The consultation is free, and there is no pressure to proceed until you are ready."],
];
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Pricing</div>
      <h1>Clear packages, author-owned royalties.</h1>
      <p class="lead">Flat project pricing keeps the model simple: you pay for professional production, then keep 100% of your book royalties.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot beside publishing pricing cards">
  </div>
</section>

<section class="section section-white">
  <div class="container center">
    <div class="pricing-grid">
      <article class="price-card reveal">
        <span class="badge">Starter</span>
        <h3>Story Polish</h3>
        <div class="price">From $1,800</div>
        <p>For authors who need professional editing and publishing guidance before artwork begins.</p>
        <ul class="check-list">
          <li>Manuscript assessment</li>
          <li>Developmental editing notes</li>
          <li>Line editing and proofreading</li>
          <li>Publishing roadmap</li>
        </ul>
        <a class="btn btn-light" href="contact.php">Ask for estimate</a>
      </article>
      <article class="price-card featured reveal">
        <span class="badge">Most popular</span>
        <h3>Picture Book Launch</h3>
        <div class="price">From $6,500</div>
        <p>A complete path for illustrated children's books from manuscript to print and ebook setup.</p>
        <ul class="check-list">
          <li>Editing and proofreading rounds</li>
          <li>Custom illustration direction</li>
          <li>Cover and interior design</li>
          <li>ISBN and distribution setup</li>
          <li>Launch copy and marketing checklist</li>
        </ul>
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start publishing</a>
      </article>
      <article class="price-card reveal">
        <span class="badge">Premium</span>
        <h3>Author Platform</h3>
        <div class="price">Custom</div>
        <p>For authors who want publishing plus marketing assets, outreach, and a storybook-style website.</p>
        <ul class="check-list">
          <li>Everything in Picture Book Launch</li>
          <li>Author website</li>
          <li>School and library outreach kit</li>
          <li>Reviewer and podcast pitch support</li>
        </ul>
        <a class="btn btn-light" href="contact.php">Plan my project</a>
      </article>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- pricing questions</p>
      <h2>Fees and royalties, <em>made clear.</em></h2>
      <p>Honest answers about what publishing costs and how our fees work. If yours is not here, the free consultation will cover it.</p>
      <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Quote &rarr;</a>
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

<?php
include 'includes/config.php';

$page_title       = 'Custom Children\'s Book Cover Art That Sells Stories';
$page_description = 'Custom children\'s book cover design that\'s playful, professional & eye-catching. Make your story stand out on shelves and online stores today!';
$canonical_path   = 'book-cover-design.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need to have a finished manuscript before I contact you?',
    'a' => 'No. You can reach out with a rough draft, an outline, or even just an idea. We can guide you on what to prepare next.',
  ),
  1 =>
  array (
    'q' => 'Can you illustrate my book if I already have a written story but no artwork?',
    'a' => 'Yes. This is one of the most common projects we take on. We will discuss your characters and setting, then develop illustrations that match your vision.',
  ),
  2 =>
  array (
    'q' => 'Do you offer services for authors self-publishing through Amazon KDP?',
    'a' => 'Yes. As a children’s book designer for Amazon KDP, we prepare files that meet KDP’s technical requirements, including correct sizing, bleed, and file formats, so your upload goes smoothly.',
  ),
  3 =>
  array (
    'q' => 'How long does a full picture book project usually take?',
    'a' => 'It depends on the length and how many illustrations are needed. We will give you a realistic timeframe as part of your quote, based on your specific project.',
  ),
  4 =>
  array (
    'q' => 'Can you design a colouring book if I only have rough sketches?',
    'a' => 'Yes. We can turn rough sketches into clean, print-ready line art suitable for a colouring book aimed at kids.',
  ),
  5 =>
  array (
    'q' => 'What if I only need a cover, not the full interior design?',
    'a' => 'That is completely fine. Many authors come to us just for cover design. We can quote for cover work alone, or combine it with interior layout if you need both.',
  ),
  6 =>
  array (
    'q' => 'Will I get to see drafts before the final files are delivered?',
    'a' => 'Yes. We share drafts throughout the process so you can request changes before anything is finalised.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Book Cover Design</div>
      <h1>Children's <em>Book Cover Design</em>, Made for <strong> Little Readers</strong></h1>
      <p class="lead">Your story deserves a cover that makes people stop scrolling and look. A lot of authors spend months writing a beautiful children’s story, then rush the cover at the end. That is a mistake. The cover is the first thing a reader sees, whether they are standing in a bookshop or scrolling through Amazon KDP on their phone.</p>
      <p class="lead">At Purple Giraffe Press, we work with authors, parents, and small publishers across Australia who want their children’s books to look as good as they read. We are a children's book design team that focuses only on kids’ books. We do not split our time between corporate reports and picture books. Children’s books are all we do.</p>
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

<!-- 3 - INTRO: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- before you begin</p>
      <h2>We take the technical side off your plate</h2>
      <p>Whether you have a finished manuscript that needs a proper edit or a cover that needs artwork and layout, we can help. Below, we explain exactly what we offer, how the process works, and what to expect along the way.</p>
      <p>We know that self-publishing a children’s book can feel overwhelming, especially if this is your first one. There are file formats to think about, print specifications, and a hundred small decisions about fonts and colours. You do not need to figure all of that out on your own. Our job is to take the technical side off your plate, so you can focus on the parts of the project you enjoy most, which is telling your story.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-cover-design-fold.webp" alt="Purple Giraffe Press team helping authors self-publish children's books" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE OFFER (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>What We Offer Across Every Stage of Your Book's Journey</h2>
    <p style="margin:14px auto 0;">We break our service into clear parts, so you only pay for what you actually need.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Cover Design</h3>
        <p>Your cover needs to work at any size, from a full print jacket to a tiny thumbnail on a phone screen. We design covers that are bright, clear, and easy to read even when small. As a children’s book cover designer, we think about title placement, font choice, and colour balance so your book stands out on a shelf or in a search result.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Book Illustration Services</h3>
        <p>Not every author can draw, and that is completely fine. This part of our work covers full-page illustrations, spot illustrations for chapter breaks, and character design. We work closely with you so the characters look the way you imagined them, not just the way we imagined them.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Interior Layout and Formatting</h3>
        <p>A good story can still feel messy if the pages are laid out badly. We work as a children’s book layout designer, setting margins, spacing, and text flow so the book reads smoothly from the first page to the last. This matters just as much for a picture book as it does for a chapter book.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Manuscript and design</h3>
        <p>Before any design work starts, we can also check your manuscript for spelling, grammar, and flow. This is not a full rewrite. It is a careful pass to make sure your story reads clearly and is free of the small errors that pull young readers out of the story.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Colouring Book Design</h3>
        <p>If you are working on an activity book, we can act as your colouring book designer for kids. This includes clean line art, age-appropriate detail levels, and page layouts that print well at home or through print-on-demand services. We can also add simple themes across a set of pages, such as animals, seasons, or everyday routines, so the finished book feels put together rather than random.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"></path><rect x="7" y="14" width="10" height="7" rx="1"></rect></svg></div>
        <h3>File Preparation for Print and Digital</h3>
        <p>Once the design work is finished, files still need to be set up correctly for wherever the book is going. We prepare print-ready files with the right bleed and margins, along with digital versions sized for ebook platforms and websites. This step is easy to get wrong if you are doing it for the first time, and small errors here can cause real problems at the printing stage.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/love-section.webp" alt="Authors, parents, and small publishers Purple Giraffe Press works with" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>The Authors, Parents, and Publishers We Love Working With</h2>
      <p>We work with a wide range of people, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents writing a personal story for their own children</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers who need extra design capacity</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors preparing a book for Amazon KDP or other print-on-demand platforms</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and educators creating classroom resources</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who need help with layout, even if they draw their own art</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Grandparents and family members creating a one-off keepsake story for a child</span></li>
      </ul>
      <p>No project is too small. We are just as happy helping with a single custom storybook made for one child as we are working on a title heading for wide release.</p>
    </div>
  </div>
</section>

<!-- 6 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- choosing well</p>
      <h2>How to Choose a Good Children’s Book Designer</h2>
      <p>Not every designer understands what makes a children’s book different from other kinds of books. Here is what to look for when you are comparing options.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Experience with kids’ books specifically.</strong> A designer who mostly works on business reports may not understand pacing, page turns, or how young readers read images.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>A clear process.</strong> You should know what happens at each stage and roughly how long it will take.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Sample work you can actually see.</strong> Ask to see finished children’s book covers or interior layouts, not just concept sketches.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Willingness to explain their choices.</strong> A good children’s book illustrator or designer should be able to tell you why they picked a certain colour palette or font, not just hand over a file.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Honest pricing.</strong> You should get a quote before any work starts, with no surprise costs later.</span></li>
      </ul>
      <p>If you are searching for the best children's book designer for your project, these points matter more than flashy portfolios alone.</p>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="Comparing children's book designers before choosing the right one" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY IT MATTERS MORE (cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Cover Design Matter More for Children’s Books</h2>
  </div>
  <div class="container narrow center">
    <p>Children’s books carry more pressure per page than most adult books. A single spread often needs to carry the whole emotional weight of a scene, with very few words to help it along. That means small design choices have a big impact.</p>
    <p style="margin-top:14px;">Here is what we think about on every project:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Reading age.</strong> A board book for toddlers needs simple shapes and strong colours. A chapter book for eight-year-olds can carry more detail and quieter colours.</li>
      <li><strong>Page turns.</strong> In picture books, we think about what happens right before and after each page turn, since that is often where the excitement or surprise lives.</li>
      <li><strong>Character consistency.</strong> If a character wears a red jumper on page two, they need to still be wearing it on page twelve, unless the story says otherwise.</li>
      <li><strong>Text and image balance.</strong> Too much text on a page can overwhelm a young reader. Too little can leave the story feeling thin.</li>
      <li><strong>Cultural and age-appropriate content.</strong> We check that illustrations and colouring pages suit the age group they are written for.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This is also why design should not be treated as separate, unrelated jobs. A great cover on a poorly edited book, or a beautifully edited manuscript with a flat cover, both let the reader down. We try to treat the whole book as one project.</p>
  </div>
</section>

<!-- 8 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Process, Step by Step</h2>
    <p style="margin:14px auto 0;">We keep our process simple, so you always know what is happening next.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript or Brief</h3></div>
        <div class="svc-step-body"><p>Tell us what you need. This might be a full manuscript ready for design, a rough draft that needs a cover concept, or just an idea for a colouring book. The more detail you give us, the better we can help.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Quote</h3></div>
        <div class="svc-step-body"><p>We look at your project and send you a clear quote. This covers what is included, an estimated timeframe, and the cost. Nothing starts until you are happy with the quote.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Do the Work</h3></div>
        <div class="svc-step-body"><p>Our team gets started on designing, illustration, cover design, or layout, depending on what you have asked for. If your project involves multiple stages, we will usually complete them in a logical order, for example, design before final layout.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review and Discuss</h3></div>
        <div class="svc-step-body"><p>We send you drafts along the way, not just a finished file at the end. This gives you the chance to ask for changes while the project is still in progress, rather than after everything is locked in.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Polish and Delivery</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we finalise the files in the formats you need. This might include print-ready PDFs, KDP-compatible files, or web-friendly images for your website or social media.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 9 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 10 - BENEFITS OF A SPECIALIST -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Benefits of Working With a Specialist</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You save time.</strong> We already understand the standard requirements for print and Amazon KDP, so you do not have to research file formats and specifications yourself.</li>
      <li><strong>Your book looks consistent.</strong> When illustration, and layout are handled together, the finished book feels like one cohesive piece, not several mismatched parts.</li>
      <li><strong>You get honest feedback.</strong> If something in your manuscript or cover concept is not working, we will tell you, along with a suggestion for how to fix it.</li>
      <li><strong>You avoid common mistakes.</strong> Things like low-resolution images, incorrect bleed settings, or inconsistent character details are easy to miss if you have not done this before.</li>
      <li><strong>You keep creative control.</strong> We guide the process, but the story and the final decisions are always yours.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>Why Choose <em>Purple Giraffe Press</em></h2>
      <p>Children’s books are the only type of book we work on, so every choice we make is shaped by what actually works for young readers.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise; we do not generalise</h3><p>Children’s books are the only type of book we work on, so every decision we make is shaped by what actually works for young readers.</p></article>
      <article><span>✓</span><h3>Upfront pricing, every time</h3><p>You will always get a quote before we start, so there are no surprises.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>We understand the local self-publishing market, along with the requirements for platforms like Amazon KDP.</p></article>
      <article><span>✓</span><h3>We treat your story with care</h3><p>This is often a personal project for authors and parents, and we do not treat it like just another job on a list.</p></article>
      <article><span>✓</span><h3>Simple, clear communication</h3><p>You will always know what stage your project is at and what happens next.</p></article>
    </div>
  </div>
</section>

<!-- 12 - TESTIMONIALS -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 13 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="Clear, itemised quote for children's book design" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Children’s Book Design Cost?</h2>
      <p>Pricing depends on a few things, including the length of your manuscript, how many illustrations you need, and how much editing your text requires. A short board book with a handful of illustrations will cost less than a fully illustrated picture book with twenty or more custom spreads.</p>
      <p>We always send a clear, itemised quote before any work begins, so you know exactly what you are paying for. There is no obligation to proceed once you receive a quote, and no hidden fees are added later.</p>
      <p>If you are working to a set budget, let us know upfront. We can often suggest ways to adjust the scope, such as fewer full-page illustrations or a lighter edit, so the project still fits what you can spend.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 14 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Our most popular services</h2>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 15 - CLOSING CTA -->
<?php include 'includes/contact-section.php'; ?>

<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- one page at a time</p>
      <h2>Let’s Bring Your Book to Life, <em>One Page at a Time</em></h2>
      <p>If you have a children’s story that deserves a cover and layout to match, we would love to help. Send us your manuscript or your idea, and we will put together a clear quote with no pressure to commit straight away.</p>
      <p>Get in touch with Purple Giraffe Press today, and let’s talk about your book.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to help with your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 16 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 17 - FOOTER -->
<?php include 'includes/footer.php'; ?>

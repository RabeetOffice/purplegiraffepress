<?php
include 'includes/config.php';

$page_title       = 'Meet Australia\'s Children\'s Book Illustration Experts';
$page_description = 'Expert children\'s book illustration services in Australia. We create colourful, engaging artwork that brings your story to life for young readers.';
$canonical_path   = 'custom-illustrations.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need a finished manuscript before I contact you?',
    'a' => 'No. We are happy to talk with you even if you only have a rough idea or a partial draft. We can work out the illustration plan alongside your writing process.',
  ),
  1 =>
  array (
    'q' => 'Can you match a specific art style I already have in mind?',
    'a' => 'Yes. Show us examples of styles you like, and we will develop something similar, while still making sure it fits your story and characters.',
  ),
  2 =>
  array (
    'q' => 'How many illustrations will my book need?',
    'a' => 'This depends on your book length and format. A standard picture book usually needs one illustration per spread, but some books also need extra artwork for the cover, the title page, or the back cover. We will confirm exact numbers once we see your manuscript.',
  ),
  3 =>
  array (
    'q' => 'Do you illustrate books for older children, not just picture books?',
    'a' => 'Yes. We work across different age groups, from board books for toddlers through to illustrated chapter books for older readers.',
  ),
  4 =>
  array (
    'q' => 'What if I want to change something after seeing the first drafts?',
    'a' => 'That is completely normal and expected. We build feedback rounds into our process so you can request changes before final files are delivered.',
  ),
  5 =>
  array (
    'q' => 'Will I own the rights to the illustrations?',
    'a' => 'Yes, once the project is complete and paid for, you own the rights to the artwork created for your book. We can talk through the specific terms when we send your quote.',
  ),
  6 =>
  array (
    'q' => 'Do you help with self-publishing as well as illustration?',
    'a' => 'Our main focus is illustration, but we understand the self-publishing process and can guide you on how illustrations fit into it, including file formats for print and digital platforms, cover sizing, and how to prepare your files for whichever printer or platform you choose.',
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
      <h1>Australia’s <em>Creative Children’s Book Illustrations</em> That Make Every Page <strong>Memorable</strong></h1>
      <p class="lead">You have written a story. Maybe it took you months. Maybe it has been sitting in a drawer for years, waiting for the right moment. Either way, you know it needs pictures before it can become a real book.</p>
      <p class="lead">This is where a lot of authors get stuck. Good illustration book work is not just about drawing something pretty. It is about matching the tone of your story, the age of your readers, and the feeling you want the book to leave behind.</p>
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
      <p class="eyebrow script-mark">- what it is</p>
      <h2>Illustration is what we do every day</h2>
      <p>At Purple Giraffe Press, illustration is what we do every day. We work with authors, parents, teachers, and small publishers across Australia who want their picture book to look as good as it reads. Whether you have a full manuscript or just an idea, we can help you design your own picture book from the ground up.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Custom children's book illustration at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE DO (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we do</p>
    <h2>Illustration Support From First Sketch to Final Book</h2>
    <p style="margin:14px auto 0;">We offer a full range of illustration services, built around what children’s books actually need. Here is how we break it down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21a8 8 0 0 1 16 0"></path></svg></div>
        <h3>Character Design</h3>
        <div class="fc-body">
          <p>Before a single page is illustrated, we develop your main characters. We sketch different versions, test expressions, and work with you until the character feels right. We think about how the character moves, how they show emotion, and how they will look from different angles across the book. This step matters because young readers connect with characters they recognise from page to page, so getting the design right early saves time and confusion later.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"></rect><path d="M3 9h18M9 21V9"></path></svg></div>
        <h3>Full Page Illustrations</h3>
        <div class="fc-body">
          <p>Once characters are locked in, we move to full illustrations for each page or spread. This includes backgrounds, colour, and layout that match the pacing of your story. We think carefully about where the text will sit on each page, so the words and pictures work together instead of fighting for space.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Cover Illustration</h3>
        <div class="fc-body">
          <p>Your cover is the first thing people see. We design a cover that stands out on a shelf or online, while staying true to the story inside. A strong cover gives a reader a quick sense of the tone of your book, whether that is playful, gentle, or adventurous, before they even open the first page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Illustration Books and Series Work</h3>
        <div class="fc-body">
          <p>If you are working on more than one book, we can help keep the illustration books consistent across the series. Same characters, same style, same feel, book after book. This is especially useful for authors building a brand around one set of characters, since readers come to expect a familiar look.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Digital and Print Ready Files</h3>
        <div class="fc-body">
          <p>Every illustration book illustrator project we finish is delivered in the file formats you need, ready for print or for digital publishing platforms. We can prepare files for local Australian printers, print-on-demand services, or ebook platforms, depending on how you plan to publish.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - VISUAL STYLES (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- visual style</p>
    <h2>Choose the Visual Style That Fits Your Story Best</h2>
    <p style="margin:14px auto 0;">Every story has a different feel, so we do not force one single look onto every project. Some of the styles we commonly work in include:</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Hand-Drawn and Painterly</h3>
        <div class="fc-body">
          <p>Soft, textured illustrations that feel warm and personal. This style often suits gentle stories, bedtime books, and stories about nature or family.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Bright Digital Illustration</h3>
        <div class="fc-body">
          <p>Clean, bold, colourful artwork made digitally. This style works well for energetic stories, adventure books, and books aimed at slightly older readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m12 2 9 5-9 5-9-5 9-5Z"></path><path d="m3 12 9 5 9-5M3 17l9 5 9-5"></path></svg></div>
        <h3>Mixed Media</h3>
        <div class="fc-body">
          <p>A combination of hand-drawn textures and digital finishing. This gives a book a unique look that still feels warm and human.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:30px;">
    <p>We are happy to talk through which style might suit your story best, based on the tone, the age group, and what you picture in your head when you read your own manuscript. Our illustration children’s book process is built around your story first, so the style always serves the words rather than the other way around.</p>
    <p style="margin-top:14px;">If you would like to see examples of our children’s books' illustration work before deciding, just ask, and we can share samples that suit your genre.</p>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Authors, parents, teachers, and small publishers we help with illustration" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping Authors, Parents, Teachers, and Small Publishers</h2>
      <p>We work with a wide range of people who need children's book illustration done properly, and everyone comes to us at a different stage of their project. This includes:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing their first picture book, often with no idea where to start</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents who want to make their own children’s book as a gift or keepsake for a child in their life</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers creating classroom resources or reading materials for a specific lesson or age group</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers who need a reliable illustrator on a project-by-project basis, without hiring someone full-time</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors with a finished manuscript looking for the right visual style to match the story they have already written</span></li>
      </ul>
      <p>Wherever you are starting from, we can meet you there and help you work out the next step.</p>
    </div>
  </div>
</section>

<!-- 7 - WHAT TO LOOK FOR: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>What to Look For Before Hiring a Book Illustrator</h2>
      <p>Not every illustrator suits every story. Here is what we think matters when you are choosing help for illustrations for children's books.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Style match.</strong> The art style should suit the tone of your story, not just look nice on its own.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Experience with the age group.</strong> Illustration for toddlers looks very different from illustration for primary school readers.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Clear communication.</strong> You should always know what stage the project is at and what is coming next.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>A process you can follow.</strong> Good book illustrators show you drafts along the way, not just a finished product at the end.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Respect for your story.</strong> The pictures should support what you wrote, not take over from it.</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/why-purple-giraffe.webp" alt="What to look for before hiring a children's book illustrator" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY ILLUSTRATION MATTERS (content list) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Illustration Matters More in Children’s Books</h2>
  </div>
  <div class="container narrow center">
    <p>In a children’s book, the pictures often carry as much weight as the words, sometimes more. Young readers who cannot read yet are following the story entirely through the illustrations. Older kids look to the pictures to understand emotion, humour, and pacing.</p>
    <p style="margin-top:14px;">A good book illustration does a few things at once:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>It shows what the words do not say directly</li>
      <li>It helps a child follow the story even before they can read</li>
      <li>It sets the mood, whether that is funny, gentle, exciting, or calm</li>
      <li>It gives the book a personality that readers remember</li>
      <li>It supports diversity and representation where that matters to your story</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Getting this right takes more than artistic skill. It takes an understanding of how children actually read a picture book, page by page, and what keeps them turning to the next one.</p>
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

<!-- 10 - PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How We Turn Your Story Into Finished Artwork</h2>
    <p style="margin:14px auto 0;">We keep our process simple and easy to follow, from your first message to the final files.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Story</h3></div>
        <div class="svc-step-body"><p>Send through your manuscript, or a rough idea if you do not have a full script yet. Tell us about your characters, the age group, and the feeling you want the book to have.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Quote</h3></div>
        <div class="svc-step-body"><p>We look at the length of your book, the number of illustrations needed, and the style you are after. Then we send you a clear quote before any work begins.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Character and Style Development</h3></div>
        <div class="svc-step-body"><p>We sketch your main characters and share a few style options. This is where we lock in the look of your book before moving further.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Full Illustration Work</h3></div>
        <div class="svc-step-body"><p>Once the style is approved, we illustrate each page or spread. We share drafts along the way so you can give feedback early, not just at the end.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Review and Delivery</h3></div>
        <div class="svc-step-body"><p>After your final approval, we prepare print-ready and digital files and send everything through, ready for publishing.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - BENEFITS (content list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Why Specialist Children’s Illustrators Save Time and Improve Quality</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You get consistency.</strong> Every character and colour choice stays the same from the first page to the last, so the book feels like one connected story rather than a set of separate pictures.</li>
      <li><strong>You save time.</strong> A specialist already understands picture book pacing and layout, so there is less back and forth explaining the basics of how a children’s book works.</li>
      <li><strong>You get a book that looks professional.</strong> Readers and buyers, notice the difference between amateur and polished work, especially if you plan to sell the book or submit it to a publisher.</li>
      <li><strong>You get support with tricky pages.</strong> Some spreads are harder to illustrate than others, whether that is a big action scene or a page with lots of small details, and experience helps here.</li>
      <li><strong>You get a partner who understands children’s books.</strong> Not just illustration in general, but this specific type of storytelling, where pacing, page turns, and visual jokes all matter.</li>
    </ul>
  </div>
</section>

<!-- 12 - WHY AUSTRALIAN AUTHORS TRUST US -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Australian Authors Trust <em>Purple Giraffe Press</em></h2>
      <p>A few simple things keep authors coming back to us.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children’s books</h3><p>This is not a side project for us. It is the only thing we do.</p></article>
      <article><span>✓</span><h3>Upfront pricing</h3><p>You will always get a clear quote before we start any illustration work.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>You are working with a local team that understands the Australian publishing market.</p></article>
      <article><span>✓</span><h3>We treat every story with care</h3><p>Your book matters to you, so it matters to us too.</p></article>
      <article><span>✓</span><h3>Simple communication</h3><p>No confusing jargon, no long email chains you cannot follow.</p></article>
    </div>
  </div>
</section>

<!-- 13 - TESTIMONIALS -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 14 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear quote for your children's book illustration" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Children’s Book Illustration Pricing: What Affects the Cost?</h2>
      <p>The cost of illustrating a picture book depends on a few things. These include the number of pages, how detailed each illustration is, whether you need a cover design, how many characters need to be developed, and how many rounds of feedback you expect to need.</p>
      <p>A simple book with a small number of characters and a clean, uncluttered style will usually cost less than a book with detailed backgrounds, a large cast of characters, or lots of small scenes on each page. The format matters too. A short board book for toddlers is a different job from a longer picture book with thirty or more pages.</p>
      <p>Because every book is different, we do not use a fixed price list. Instead, we ask you a few questions about your project, including your manuscript length, your preferred style, and your timeline, then send through a clear quote before any work starts. That way, you know exactly what you are paying for, with no surprises later on.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 15 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Our most popular services</h2>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'ghostwriting', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- the artwork it deserves</p>
      <h2>Let’s Give Your Children’s Book the <em>Artwork It Deserves</em></h2>
      <p>If you are ready to move forward with your book, get in touch with Purple Giraffe Press today. Send us your manuscript or your idea, and we will talk you through what comes next. Your story has waited long enough. Let’s give it the pictures it deserves.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to illustrate your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 18 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 19 - FOOTER -->
<?php include 'includes/footer.php'; ?>

<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Illustrations Melbourne | Custom Art';
$page_description = 'Get custom children\'s book illustrations in Melbourne. Unique, hand-drawn artwork bringing your kids\' stories to life. Contact us for a free quote today!';
$canonical_path   = 'custom-childrens-book-illustrations-in-melbourne.php';
$breadcrumb_name  = 'Illustrations in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'Melbourne',   'url' => page_url('locations/melbourne.php')],
    ['name' => 'Illustrations', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need a finished manuscript before I contact you in Melbourne?',
    'a' => 'No. A draft is fine. If you are based in Melbourne, we just need enough of your story to understand the characters, tone, and age group before guiding you on the next step.',
  ),
  1 =>
  array (
    'q' => 'How long does a children’s book illustration take in Melbourne?',
    'a' => 'It depends on the length and detail of your book. Once we see your manuscript, we can give you a realistic timeframe for your Melbourne children’s book illustration project.',
  ),
  2 =>
  array (
    'q' => 'Can I ask for changes during the illustration process in Melbourne?',
    'a' => 'Yes. Our Melbourne children’s book illustration process includes review stages where you can ask for changes before the artwork is finalised.',
  ),
  3 =>
  array (
    'q' => 'Do you only illustrate books, or can you help with the cover too in Melbourne?',
    'a' => 'We do both. For Melbourne authors, we can create the inside illustrations as well as the front cover artwork, with the cover treated as its own important part of the project.',
  ),
  4 =>
  array (
    'q' => 'What if I do not have a specific art style in mind for my Melbourne children’s book?',
    'a' => 'That is completely fine. We can show you different illustration style options and help you choose a look that suits your Melbourne children’s book and its target readers.',
  ),
  5 =>
  array (
    'q' => 'Do you work with first-time children’s book authors in Melbourne?',
    'a' => 'Yes, often. Many Melbourne authors we work with are creating their first children’s book, and we are happy to guide them through the illustration process step by step.',
  ),
  6 =>
  array (
    'q' => 'Is children’s book illustration pricing fixed or custom in Melbourne?',
    'a' => 'Pricing is custom for each Melbourne children’s book illustration project. It depends on page count, art style, and the mix of full-page and spot illustrations. We always give a clear quote before starting.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). streetAddress omitted
   until we have a Melbourne address. */
$location_business = [
    'locality'   => 'Melbourne',
    'region'     => 'VIC',
    'postalCode' => '3000',
    'country'    => 'AU',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Illustrations</div>
      <h1>Custom <em>Children’s Book Illustrations</em> in Melbourne</h1>
      <p class="lead">Get warm, professional children's book illustrations in Melbourne from a team that understands what makes young readers fall in love with a story.</p>
      <p class="lead">You have a story. Maybe it is sitting in a notebook, or maybe it is still mostly in your head. Either way, you know it needs pictures to really come alive. That is where we come in.</p>
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
      <!-- <p class="eyebrow script-mark">- what it is</p> -->
      <p>At Purple Giraffe Press, we work with parents, grandparents, teachers, and first-time authors across Melbourne who want to turn their words into a real illustrated book in Melbourne that feels finished and professional. We know that a picture book lives or dies by its art. The words might be lovely, but if the pictures do not match the tone and feel of the story, the whole thing falls flat. That is why so many local writers search for children's book illustrations in Melbourne before they even start looking for a printer or a publisher. The pictures come first, because they are what a young reader notices before a single word is read to them.</p>
      <p>We have spent years working only in this space. We are not a general design studio that also does book covers on the side. Children's books are what we do every day.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Custom children's book illustrations in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - ILLUSTRATION SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Melbourne Children’s Book Illustrations, Made With Heart</h2>
    <p style="margin:14px auto 0;">Our illustration services cover every stage of bringing a picture book to life. Here is how we break it down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.6-6.5 8-6.5s8 2.5 8 6.5"></path></svg></div>
        <h3>Character Design</h3>
        <p>Before a single scene is drawn, we sit down and work out who your characters actually are. What do they look like? How do they move? What makes them feel real to a five-year-old reader? We sketch a few options, get your feedback, and lock in a final look before moving further.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Full Page Illustrations</h3>
        <p>This is the heart of the job. Each page of your story gets its own custom illustration, matched to the mood, pacing, and age group of your book. We think about where the eye should land first, how the colours support the story, and how each page flows into the next.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Spot Illustrations</h3>
        <p>Not every page needs a full scene. Sometimes a small illustration in the corner, or a simple image next to a paragraph, is exactly what a page needs. We offer this as a lighter option for books that mix text-heavy pages with visual ones.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Cover Art</h3>
        <p>Your cover is the first thing anyone sees. We treat it as its own project, separate from the inside pages, so it grabs attention on a shelf or a screen and gives a true sense of what is inside.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Style Matching and Development</h3>
        <p>If you already have a style in mind, tell us, and we will work towards it. If you are not sure yet, we can show you a few different approaches, from soft watercolour looks to bold, flat colour styles, so you can pick what suits your story best.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO NEEDS AN ILLUSTRATOR: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about.webp" alt="The Melbourne storytellers who need a children's book illustrator" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Needs a Children’s Book Illustrator in Melbourne?</h2>
      <p>We work with a wide range of people who all share one thing. They want their story told properly.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents writing a book for their own kids or grandkids</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers creating classroom resources or school project books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors chasing a dream of publishing their own picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small businesses or organisations that need a custom story for branding or education</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers who already have a manuscript and just need the right book illustrator in Melbourne to match it</span></li>
      </ul>
      <p>No matter where you are starting from, we meet you there.</p>
    </div>
  </div>
</section>

<!-- 6 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Children’s Book Illustrator</h2>
      <p>Not every illustrator suits every story. Before you commit to anyone, it helps to know what to look for.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask to see a full range of past work, not just their favourite three pieces</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Check if they have worked on children's books before, not just posters or logos</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Look for someone who asks questions about your story, not someone who just wants a brief and disappears</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Find out how many rounds of changes are included before extra costs kick in</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Make sure they explain their process clearly, so you know what happens at each stage</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Compare a few different book illustrators in Melbourne before deciding, so you get a feel for different styles and prices</span></li>
      </ul>
      <p>Taking a bit of time on this step now saves a lot of frustration later. A rushed choice often leads to a book that does not look or feel the way you pictured it.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing the right children's book illustrator in Melbourne" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY QUALITY ILLUSTRATIONS MATTER -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Quality Children’s Book Illustrations Matter</h2>
  </div>
  <div class="container narrow center">
    <p>A children's book is often a young reader’s first real experience with story and art together. That is a big responsibility, and it changes how illustration should be approached.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Illustrations need to match the reading age, not just look pretty</li>
      <li>Colours and expressions need to carry emotion, since young readers pick up on mood through pictures more than words</li>
      <li>Pacing across the page turns matters, since each page needs to lead the reader to turn to the next</li>
      <li>Consistency in character look is critical, so a character has to look like themselves on every single page</li>
      <li>Cultural and safety sensitivity matters, especially in stories aimed at very young children</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Getting all of this right takes real skill and experience. It is not something you want to leave to guesswork.</p>
    <p style="margin-top:14px;">We have seen manuscripts where the writing was strong, but the early illustration drafts did not match the story’s age group at all. A book written for four-year-olds needs simpler shapes and clearer expressions than one aimed at eight-year-olds. Part of our job is spotting this early, before pages are finalised, so the whole book feels right for the reader it is written for.</p>
  </div>
</section>

<!-- 8 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children’s Book Illustration Process</h2>
    <p style="margin:14px auto 0;">We keep our process simple, so you always know where things stand.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Send through your story, even in draft form. We just need enough to understand the tone, the characters, and the age group you are writing for.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Quote</h3></div>
        <div class="svc-step-body"><p>We look at your manuscript and give you a clear quote based on page count, style, and how detailed the illustrations need to be. No hidden extras.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Character and Style Sketches</h3></div>
        <div class="svc-step-body"><p>We share early sketches of your main characters and a sample page or two, so you can see the direction before we go further.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Full Illustration Work</h3></div>
        <div class="svc-step-body"><p>Once you are happy with the direction, we move through the full book, page by page, keeping you updated along the way. We usually share batches of pages as we go, rather than disappearing until the whole book is done, so you are never left wondering what is happening with your story.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Review and Final Delivery</h3></div>
        <div class="svc-step-body"><p>You get a full review round to ask for changes, then we deliver final, print-ready files once everything is approved.</p></div>
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

<!-- 10 - BENEFITS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Benefits of Hiring a Children’s Book Illustration Specialist</h2>
  </div>
  <div class="container narrow center">
    <p>Working with someone who focuses only on children's books, rather than a general designer, gives you real advantages.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li><strong>You get an illustrator who understands children’s books,</strong> not someone learning on your project</li>
      <li><strong>Your story gets pictures that actually match its tone,</strong> rather than generic stock-style art</li>
      <li><strong>You save time,</strong> since we already know the common pitfalls in picture book layout and pacing</li>
      <li><strong>You get consistency across every page,</strong> so characters and colours stay true from cover to end</li>
      <li><strong>You get honest feedback,</strong> including when something in the brief might not work well visually</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Choose <em>Purple Giraffe Press</em></h2>
      <p>There are a lot of options out there for illustrators and studios in Melbourne. Here is why authors choose us.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise; we do not generalise</h3><p>Children's books are our only focus, not a side project.</p></article>
      <article><span>✓</span><h3>We give upfront pricing</h3><p>You will know your costs before any work starts, with no surprise fees later.</p></article>
      <article><span>✓</span><h3>We are based in Australia</h3><p>You can talk to a real person in your own time zone, without language or time delays.</p></article>
      <article><span>✓</span><h3>We treat every story with care</h3><p>Whether it is your first book or your fifth, we take the work seriously.</p></article>
      <article><span>✓</span><h3>We keep communication simple</h3><p>No confusing jargon, just clear updates at every step.</p></article>
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

<!-- 13 - DESIGN YOUR OWN PICTURE BOOK: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-soft">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- your book, your way</p>
      <h2>Design Your Own Picture Book With Professional Support</h2>
      <p>One thing we hear a lot is that people want to design their own picture book in Melbourne without losing control over their own story. We understand that. This is your book, not ours. We are here to bring your vision to life, not replace it with our own ideas. Every sketch and every page we send you is a chance to give feedback, ask for changes, or steer things in a new direction.</p>
      <p>Some of our clients come to us with a full manuscript and a clear idea of what they want. Others come with just a rough idea and a wish to make their own children’s book in Melbourne for a birthday, a school project, or simply because they have always wanted to write one. Both starting points are completely fine. We adjust how much guidance we give based on where you are.</p>
      <p>If you are not sure where to start with the visual side, that is exactly the gap we fill. You bring the story and the ideas; we bring the skills to turn it into finished art. There is no such thing as a silly question at this stage. We would rather you ask than stay unsure about how the process works.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/love-section.webp" alt="Design your own picture book in Melbourne with professional support" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 14 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's book illustrations in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does a Children’s Book Illustration Cost in Melbourne?</h2>
      <p>Pricing for illustrated children’s books in Melbourne depends on a few things. Page count is the biggest factor, since a 12-page book takes less work than a 32-page one. Style also plays a part, since highly detailed illustrations take longer than simpler, flatter styles. The number of full-page illustrations versus spot illustrations changes the cost too.</p>
      <p>Rather than guess at numbers that might not suit your project, we prefer to look at your manuscript first and give you a proper quote. That way you know exactly what you are paying for, with no guesswork on either side.</p>
      <p>We also try to explain what drives the cost up or down, so you can make choices that suit your budget. For example, a simpler style with fewer full-page scenes will usually cost less than a highly detailed book with a full illustration on every single page. There is no wrong choice here. It is about finding a balance that fits your story and your budget.</p>
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
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Hire a Children’s Book Illustrator in <em>Melbourne?</em></h2>
      <p>If you have been sitting on a story and wondering how to find the right illustrations for children's books in Melbourne, we would love to hear from you. Send us your manuscript, tell us a bit about your vision, and we will take it from there. Purple Giraffe Press is ready when you are.</p>
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
      <p>Honest answers to the questions Melbourne authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

<?php
include 'includes/config.php';

$page_title       = 'Children\'s Author Website Development in Australia';
$page_description = 'Purple Giraffe Press develops websites for children\'s authors in Australia. Simple builds, easy updates, and pages that showcase your books to readers.';
$canonical_path   = 'author-websites.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need a website if I already have social media?',
    'a' => 'Social media is useful, but it is not something you own or control. A website gives readers, schools, and publishers one proper place to find you, and it will not disappear if a platform changes its rules.',
  ),
  1 =>
  array (
    'q' => 'Can you build a page for just one new book?',
    'a' => 'Yes. A focused landing page works well for a launch, a pre-order period, or directing people from social media to one clear action.',
  ),
  2 =>
  array (
    'q' => 'Do you build sites for illustrators as well as authors?',
    'a' => 'Yes. If your artwork needs to be the main focus, we build portfolio-style pages that let your images do the talking.',
  ),
  3 =>
  array (
    'q' => 'Will my website work properly on phones?',
    'a' => 'Yes. Most visitors will find you through a phone, so every site we build needs to work well on a small screen, not just a desktop.',
  ),
  4 =>
  array (
    'q' => 'What happens if I publish a new book after the site is built?',
    'a' => 'We can add new book pages and update your site as your catalogue grows, so it never falls out of date.',
  ),
  5 =>
  array (
    'q' => 'Do you help with content, or just the design?',
    'a' => 'We can help guide your content and structure, though you know your books and your voice best. We will work with what you already have and help fill any gaps.',
  ),
  6 =>
  array (
    'q' => 'How long does building a website usually take?',
    'a' => 'It depends on how many pages you need and how quickly feedback comes back to us during the review stage. We will give you a clear timeframe as part of your quote.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Author Websites</div>
      <h1>Your Stories Deserve a <em>Home Online</em>: Website Development for <strong>Children's Authors</strong></h1>
      <p class="lead">If you have written a children’s book, people are going to look you up. A parent at a school visit, a librarian planning an author talk, a publisher checking you out before a meeting, they will all type your name into Google at some point. What they find matters.</p>
      <p class="lead">A good website gives readers, schools, and publishers a proper place to learn about you and your books. It should feel warm and inviting, show off your covers and illustrations properly, and make it easy for someone to buy your book or book you for an event.</p>
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
      <h2>More than a bare contact form</h2>
      <p>At Purple Giraffe Press, we build a children’s book author website Australia families, schools, and publishers can find easily, one that actually shows off your books properly, not just a bare contact form.</p>
      <p>We have spent years working on website design for children’s authors, illustrators and small publishers, so we know the small details that matter for this kind of site, like how a picture book cover should be shown, or how to make a page feel friendly to a young reader without looking childish to the adults buying the book.</p>
      <p>A children’s book is a bit different from most products people sell online. The buyer is often a parent, grandparent, or teacher, but the reader is a child. Your website needs to speak to both at once, looking professional enough for a school librarian while still feeling warm and welcoming. That balance does not happen by accident. It comes from understanding how children’s publishing actually works, from cover reveals to school visit bookings to keeping a backlist looking fresh years after release.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/author-websites.webp" alt="Children's author website design at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE OFFER (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we do</p>
    <h2>Children’s Author Website Design Services We Offer</h2>
    <p style="margin:14px auto 0;">Every author's website needs a few key things done well. Here is how we approach each part of the build.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>A Homepage That Introduces You Properly</h3>
        <div class="fc-body">
          <p>Your homepage is often the first thing anyone sees. We design it to show your latest book clearly, introduce you as the author, and guide visitors toward what they actually want, whether that is buying a book, booking an event, or reading your latest news.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Children’s Book Website Design Australia Readers Remember</h3>
        <div class="fc-body">
          <p>Every book deserves its own page, not just a single line buried in a list. We build individual book pages with your cover art, a short blurb, age range, and clear links to where the book can be bought. This kind of book page should feel simple to use, not cluttered with too much going on at once, so young readers and busy parents can find what they need straight away.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="5"></circle><circle cx="12" cy="12" r="1"></circle></svg></div>
        <h3>A Landing Page Built Around One Book</h3>
        <div class="fc-body">
          <p>Sometimes you just need a single, focused page for a new release or a launch event. A children’s book landing page design like this works well for pre-orders, competitions, or directing people from social media straight to one clear call to action, without distracting them with the rest of your site.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="m21 15-5-5L5 21"></path></svg></div>
        <h3>Illustrator Pages That Actually Show Off the Art</h3>
        <div class="fc-body">
          <p>If you illustrate as well as write, or you are an illustrator looking for your own site, we know your artwork needs to be the star. Good children’s book illustrator website design means large, clear images, fast-loading pages, and galleries that let the pictures speak for themselves.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m8 9-3 3 3 3M16 9l3 3-3 3"></path></svg></div>
        <h3>Built by Real Developers Who Understand Books</h3>
        <div class="fc-body">
          <p>We are author website developers in Australia; writers can talk to us directly, not a call centre reading from a script. You deal with people who understand publishing, school visits, and how children’s books actually get sold, alongside the technical side of building your site.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 0 1 15-6.7L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-15 6.7L3 16"></path><path d="M3 21v-5h5"></path></svg></div>
        <h3>Ongoing Updates as Your Career Grows</h3>
        <div class="fc-body">
          <p>A website is never really finished. New books come out, events get booked, and reviews come in. Our book author website development Australia service includes support after launch, so your site keeps growing alongside your writing career instead of sitting untouched for years.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/home-about.webp" alt="Children's writers and illustrators we build author websites for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Custom Author Websites for Children’s Writers and Illustrators</h2>
      <p>We work with a range of people connected to children’s publishing.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Picture book authors releasing their first title</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who want a portfolio that matches their style</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Middle-grade and young adult authors building a readership</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers who need a simple site for their author list</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>School visit presenters who need bookings handled easily</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors who want to look as polished as anyone else</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 6 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Best Children’s Author Website Designer</h2>
      <p>Not every web designer understands children’s books, and that gap shows up quickly once a site goes live.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Ask to see real examples.</strong> Look for custom author websites Australia authors are already using, not just generic templates dressed up differently.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Check that they understand the book pages.</strong> A good author site needs proper book pages with covers, blurbs, and buy links, not just a single paragraph on a homepage.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Ask about mobile friendliness.</strong> Most people will find your site on their phone, often through a social media link, so it needs to work well on a small screen.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Find out what happens after launch.</strong> Ask if updates, new book pages, and small changes are included, or if every tweak comes with a fresh invoice.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Look for someone who explains things simply.</strong> You should not need to learn technical jargon just to understand what you are paying for.</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/why-purple-giraffe.webp" alt="Choosing the right children's author website designer" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY EVERY AUTHOR NEEDS A WEBSITE (content list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Every Children’s Author Needs a Professional Website</h2>
  </div>
  <div class="container narrow center">
    <p>It is easy to think a Facebook page or an Instagram profile is enough, but a proper website does things social media cannot.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You control the content.</strong> Social platforms can change their rules or algorithms overnight. Your own website is yours, and nobody can bury your posts or shut down your account.</li>
      <li><strong>It builds trust with schools and publishers.</strong> A proper website looks professional when someone is deciding whether to book you for a visit or take a meeting.</li>
      <li><strong>It gives readers one clear place to buy.</strong> Instead of scattering links across different platforms, your website can point people straight to where your books are sold.</li>
      <li><strong>It works for you around the clock.</strong> A website keeps introducing you and your books to new readers even when you are busy writing, illustrating, or at school visits.</li>
      <li><strong>It grows with your career.</strong> Every new book, award, or event can be added, building a proper record of your work over time.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>A lot of authors put this off, thinking a website is something to sort out once they are more established. In reality, the opposite tends to be true. Having somewhere professional to send people early on, even with just one book listed, makes every school enquiry, media request, or publisher conversation a little easier from the start.</p>
  </div>
</section>

<!-- 8 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children’s Author Website Design Process</h2>
    <p style="margin:14px auto 0;">Building your website is a clear process from start to finish.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>We Learn About You and Your Books</h3></div>
        <div class="svc-step-body"><p>We start by talking through your books, your goals for the site, and who you want to reach, whether that is readers, schools, publishers, or all three.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Plan the Structure</h3></div>
        <div class="svc-step-body"><p>We map out the pages your site actually needs, from your homepage to individual book pages, so nothing important gets left out or buried.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Design and Build</h3></div>
        <div class="svc-step-body"><p>Our team builds your site, using your covers, photos, and any branding you already have, or helping you pull those pieces together if you do not have them yet.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>You Review Everything</h3></div>
        <div class="svc-step-body"><p>You check the site before it goes live, and we make changes based on your feedback so it feels right to you, not just to us.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>We Launch and Support You</h3></div>
        <div class="svc-step-body"><p>Once your site is live, we stay available to help with updates, new book pages, or anything else that comes up as your writing career moves forward.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 10 - BENEFITS (content list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Benefits of a Custom Children’s Author Website</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You save time.</strong> You do not need to learn website building yourself. We handle the technical side so you can focus on writing and illustrating.</li>
      <li><strong>You get a site that fits children’s publishing.</strong> We already understand book pages, age ranges, cover display, and school visit bookings, so we are not learning on your project.</li>
      <li><strong>You avoid a generic template look.</strong> Your site is built around your books and your style, not stretched from a one-size-fits-all theme.</li>
      <li><strong>You get ongoing support.</strong> Your website does not sit forgotten after launch. We help you keep it updated as your career grows.</li>
      <li><strong>You get a professional first impression.</strong> Parents, schools, and publishers see a site that reflects the quality of your work.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Choose Purple Giraffe Press for <em>Author Website Design</em></h2>
      <p>A few simple things make us a good fit for your author site.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We understand children’s books, not just websites</h3><p>As a publishing house, we know what readers, parents, and schools actually look for on an author site.</p></article>
      <article><span>✓</span><h3>Clear pricing from the start</h3><p>You get a proper quote before any work begins, so you know what to expect.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>You are working with a local team that understands the local children’s publishing scene and school visit culture.</p></article>
      <article><span>✓</span><h3>We treat your project with care</h3><p>Your website reflects your books, and we take that seriously rather than treating it as just another job.</p></article>
      <article><span>✓</span><h3>Simple, honest communication</h3><p>We explain your options in plain language and keep you updated as the build progresses.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, honest quote for your children's author website" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Children’s Author Website Cost in Australia</h2>
      <p>The cost of your website depends on a few things, including how many pages you need, whether you want a full site or a single landing page, and how much design and content support you need along the way. A simple site for a first picture book will usually cost less than a larger site covering a full backlist, illustration portfolio, and event bookings.</p>
      <p>We do not believe in quoting a price before understanding your project properly. Tell us about your books and what you want your website to do, and we will put together a clear, honest quote so you know exactly what is included before any work starts. If your needs change later, whether you publish a new book or want to add an events page, we can talk through what an update would involve at that point too.</p>
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
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'ghostwriting']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- your books online</p>
      <h2>Ready to Build a Website for Your <em>Children’s Books?</em></h2>
      <p>You have already put the work into writing and illustrating your books. Now let your website do them justice. Get in touch with Purple Giraffe Press, and we will talk through what a site built around your books could look like.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to build your author website" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 18 - FOOTER -->
<?php include 'includes/footer.php'; ?>

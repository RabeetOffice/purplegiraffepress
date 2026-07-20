<?php
include 'includes/config.php';

/* Page meta and breadcrumbs; includes/header.php turns these into the <head>. */
$page_title       = 'Children\'s Author Websites, Designed in Queensland';
$page_description = 'Bring your author brand to life with a beautiful website built in Queensland. Custom designs for children\'s authors that engage readers and parents.';
$canonical_path   = 'childrens-book-website-design-and-development-services-in-queensland.php';
$breadcrumb_name  = 'Author Websites in Queensland';
$breadcrumbs = [
    ['name' => 'Home',            'url' => page_url('index.php')],
    ['name' => 'Locations',       'url' => page_url('locations/')],
    ['name' => 'Queensland',      'url' => page_url('locations/queensland.php')],
    ['name' => 'Author Websites', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to build an author website?',
    'a' => 'Most author websites take between two and four weeks from our first chat to launch, depending on how many pages you need and how quickly we get your content and images.',
  ),
  1 =>
  array (
    'q' => 'Do you build websites for authors outside of Queensland?',
    'a' => 'Our main focus is Queensland authors, but we do work with authors from other parts of Australia too. If you are unsure, just ask us when you get in touch.',
  ),
  2 =>
  array (
    'q' => 'Can you build a simple landing page instead of a full website?',
    'a' => 'Yes. Not every author needs a large site straight away. We also offer children’s book landing page design in Queensland for authors who just want one strong page to promote a new release or a launch event.',
  ),
  3 =>
  array (
    'q' => 'Will my website work well on mobile phones?',
    'a' => 'Yes. Every site we build is designed to work properly on phones and tablets first, since most parents and teachers browse on their phones.',
  ),
  4 =>
  array (
    'q' => 'Do I need to know how to code or use a website builder myself?',
    'a' => 'No. We handle the technical side and show you how to make small updates once your site is live. You do not need any coding knowledge.',
  ),
  5 =>
  array (
    'q' => 'Can you add my book to an online shop or bookstore link?',
    'a' => 'Yes. We can link directly to Amazon, your publisher’s page, or your own online shop, whichever suits your book best.',
  ),
  6 =>
  array (
    'q' => 'What if I only have one book out so far?',
    'a' => 'That is completely fine. Many of the children’s book website design projects we take on in Queensland are for debut authors with just one title. We build the site to grow with you as you publish more.',
  ),
  7 =>
  array (
    'q' => 'Do you offer support after the website is finished?',
    'a' => 'Yes. We are happy to help with small tweaks after launch, and we are only a call or email away if something bigger comes up, like adding a new book or setting up an events calendar for the first time.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). Brisbane is the state
   capital and stands in as the locality for the Queensland-wide pages. */
$location_business = [
    'locality'   => 'Brisbane',
    'region'     => 'QLD',
    'postalCode' => '4000',
    'country'    => 'AU',
];
/* The service-list key is the state, not the locality above. */
$location_city = 'queensland';

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Author Websites</div>
      <h1>Built for Storytellers, Made to Stand Out, <em>Children's Author Website Design and Development</em> in <strong>Queensland</strong></h1>
      <p class="lead">If you write or illustrate children’s books, your website should reflect the warmth, imagination and personality of your stories. It should be easy to explore, simple to read, and designed so parents, teachers, librarians, and publishers can quickly understand who you are, what you create, and where they can find your books.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Website</a>
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
      <p>Purple Giraffe Press provides children’s author website design in Queensland for picture book writers, chapter book authors, illustrators and author-illustrator teams. We create welcoming, mobile-friendly websites that help schools discover you for author visits, guide families towards your books, and give publishers or agents a strong first impression of your work.</p>
      <p>You do not need any technical experience to get started. We handle the design, structure, and setup while keeping the process straightforward and collaborative. The result is a polished author website that supports your books, builds your credibility, and gives you more time to focus on writing and illustrating your next story.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Website &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/author-websites.webp" alt="Children's author website design and development in Queensland at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT THE SERVICE INCLUDES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>What Our Children’s Author Website <em>Design Service Includes</em></h2>
    <p style="margin:14px auto 0;">Every children’s book author website we build in Queensland starts with a conversation, not a template. We ask about your books, your readers, and what you actually want the site to do for you. Then we design around that.</p>
    <p style="margin:14px auto 0;">Here is what is usually included:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>A homepage that introduces you and your books clearly, without clutter</li>
      <li>A book page for each title, with cover images, blurbs, and buy links</li>
      <li>An “about the author” page that sounds like you, not like a corporate bio</li>
      <li>A contact form that goes straight to your inbox</li>
      <li>A page for schools and libraries to book author visits or events</li>
      <li>Simple navigation that works on phones, tablets, and laptops</li>
    </ul>
  </div>
  <div class="container" style="margin-top:34px;">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>For Illustrators and Author-Illustrator Teams</h3>
        <div class="fc-body">
          <p>We create fast, visually strong websites that showcase both your books and illustrations. Organised galleries and clear book pages keep your artwork sharp across phones, tablets and computers without slowing down the site.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>For Series Authors</h3>
        <div class="fc-body">
          <p>We build clear series pages that show readers where to start, what comes next, and which titles are coming soon. The layout can grow easily as you publish more books, keeping the full series organised.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>For Debut Authors</h3>
        <div class="fc-body">
          <p>A debut author website should feel confident, complete, and focused on your first book. We use strong imagery, a clear author introduction, and simple purchase links to create a professional first impression.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>For Established Authors With a Growing Backlist</h3>
        <div class="fc-body">
          <p>We organise your books through clear archive, genre, and series pages so readers can find new and previous titles easily. Awards, reviews, and publishing achievements can also be displayed without overcrowding the site.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>For Authors Who Offer School Visits</h3>
        <div class="fc-body">
          <p>We create dedicated pages for school visits, workshops, and festival appearances. These can include your session topics, preferred age groups, resources, and booking details, helping teachers and librarians contact you quickly.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - DESIGN FOR EVERY READING AGE -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Website Design for Every <em>Children’s Book Reading Age</em></h2>
    <p style="margin:14px auto 0;">Children’s authors often write for very different reading stages, and each audience needs a website experience that feels suitable for them. We shape the colours, layout, imagery, text and navigation around the age group your books are written for, while keeping the website easy for parents, teachers, librarians and publishers to explore.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 0–3: Warm Websites for Board Book Authors</h3>
        <div class="fc-body">
          <p>Board book websites should feel gentle, colourful, and easy to understand at a glance. We use clear book imagery, simple page layouts, and parent-focused information that explains the themes, learning benefits, and reading experience. The result is a welcoming website that helps families and early-learning centres quickly understand what your books offer.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 3–5: Playful Websites for Picture Book Creators</h3>
        <div class="fc-body">
          <p>Picture book authors and illustrators need websites that make their characters and artwork memorable without overwhelming visitors. We create bright but balanced layouts, clear book pages, and engaging visual sections that showcase your stories. Parents, teachers, and publishers can easily view your books, discover your themes, and find purchase or contact information.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Ages 6–8: Clear Websites for Early Reader Authors</h3>
        <div class="fc-body">
          <p>Early reader websites need to appeal to children while still giving adults the information they need. We organise book series, reading levels, classroom resources, and activity downloads in a simple structure. Clear navigation helps parents and educators find suitable titles, while colourful design elements keep the website connected to the personality of your stories.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Ages 8–12: Engaging Websites for Middle-Grade Authors</h3>
        <div class="fc-body">
          <p>Middle-grade readers respond to stronger characters, detailed story worlds, and exciting series content. We create websites that can include character profiles, book trailers, series reading orders, downloadable activities, and upcoming release information. The design feels more mature than a picture book website while remaining imaginative, accessible, and appropriate for younger audiences.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE DESIGN FOR: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Queensland picture book writers, illustrators and self-published authors we design websites for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Children’s Author <em>Websites Are Designed For</em></h2>
      <p>Our clients across Queensland include:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Picture book writers publishing their first or fifth title</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Chapter book and middle grade authors building a readership</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who want their portfolio and their books in one place</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Author-illustrator teams who need one site that covers both</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors who want a professional home online</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Traditionally published authors whose publisher does not build them a site</span></li>
      </ul>
      <p>If you fit into any of these groups, or somewhere in between, we can help.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right <em>Children’s Author Website Designer</em></h2>
      <p>Not every web designer understands children’s publishing. Before you hire anyone for author website developers in Queensland, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they built websites for authors or illustrators before, or only for general small businesses?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand how book buy links, ISBNs, and publisher pages actually work?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you own your website and domain, or are you locked into their platform forever?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can you update the site yourself later, or will you need to pay them for every small change?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they show you real examples of author sites they have built, not just generic templates?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is the pricing clear from the start, or do extra costs keep appearing?</span></li>
      </ul>
      <p>A good provider will answer all of these without hesitation. If someone dodges the question about ownership, walk away.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/home-about.webp" alt="Choosing a children's author website designer in Queensland" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY A STRONG AUTHOR WEBSITE MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why a Strong Author Website <em>Supports Your Writing Career</em></h2>
  </div>
  <div class="container narrow center">
    <p>A website is not just a nice-to-have for an author. It changes real outcomes.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Schools can find you.</strong> Teachers and librarians search online before booking an author visit. No website often means no booking. A clear visits page with your topics and contact details makes that decision easy for them.</li>
      <li><strong>Parents can buy your book.</strong> A clear link to your book’s page removes the guesswork. Parents browsing on their phones at a school gate should be able to find and buy your book in a few taps.</li>
      <li><strong>Publishers take you seriously.</strong> A tidy, professional site signals that you treat your writing as a career, not a hobby. Agents and publishers often look up an author before replying to a submission.</li>
      <li><strong>You control your own story.</strong> Social media accounts can disappear, get hacked, or change their rules overnight. Your website is yours, and nobody can take it away or bury it under a new algorithm.</li>
      <li><strong>You look consistent.</strong> One place that matches your book covers, your voice, and your brand builds trust with new readers, rather than sending them to a scattered mix of old profiles and outdated pages.</li>
      <li><strong>You save yourself repeated work.</strong> Instead of explaining your books over and over by email, you can simply send people to one page that answers most of their questions already.</li>
    </ul>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children’s Author Website Design <em>Process From Start to Launch</em></h2>
    <p style="margin:14px auto 0;">We keep book author website development in Queensland simple, with no jargon and no long waiting around.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: We Talk About Your Books</h3></div>
        <div class="svc-step-body"><p>We start with a call or a video chat, wherever you are in Queensland. We ask about your books, your goals, and what has frustrated you about websites in the past, if you have tried one before. There is no obligation at this stage. It is simply a chance for us to understand what you actually need.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: We Plan the Site Together</h3></div>
        <div class="svc-step-body"><p>We map out the pages you need and show you a simple plan before any design work begins. This might be a short list of pages for a debut author, or a fuller plan with a shop, an events calendar, and a series page for someone further along in their career. You approve the plan before we move forward, so there are no surprises later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: We Design and Build</h3></div>
        <div class="svc-step-body"><p>We build your site using your book covers, your photos, and your words. If you do not have professional photos or a written bio yet, we can guide you through what you need and help tidy up what you already have. We send you drafts along the way so you can give feedback early, not just at the end.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: You Review, and We Refine</h3></div>
        <div class="svc-step-body"><p>You get a proper look at the finished site before it goes live. We make changes based on your notes until you are happy. This is your book and your career, so we would rather take an extra round of changes than launch something that does not feel right to you.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: We Launch and Show You the Ropes</h3></div>
        <div class="svc-step-body"><p>Once your site is live, we walk you through how to make small updates yourself, like adding a new event or swapping a photo. You are never locked out of your own website, and you can reach out any time you need a hand with something bigger.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 10 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Queensland Children’s Authors Choose <em>Purple Giraffe Press</em></h2>
      <p>If you are searching for author website design services in Queensland and want a team that actually understands what a children’s book needs, that is us.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We know children’s publishing.</h3><p>We are not a general web design shop that also does author sites on the side. Books are what we know.</p></article>
      <article><span>✓</span><h3>We write with your voice, not ours.</h3><p>Your bio, your book blurbs, and your about page sound like you.</p></article>
      <article><span>✓</span><h3>We keep things simple.</h3><p>No confusing dashboards, no jargon, no ten-step logins just to change a photo.</p></article>
      <article><span>✓</span><h3>We are upfront about cost.</h3><p>You will know what you are paying before we start, not after.</p></article>
      <article><span>✓</span><h3>We are based in Australia.</h3><p>You are talking to real people in your own time zone, not a call centre overseas.</p></article>
    </div>
  </div>
</section>
<!-- 13 - TESTIMONIALS -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 14 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, written quote for a children's author website in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Clear Website Design Pricing for <em>Queensland Children’s Authors</em></h2>
      <p>Every author’s needs are different, so we do not offer one flat price for every project. A simple site for a debut picture book author costs less than a full site with a shop, a series page, and an events calendar for a well-established author. Factors like the number of pages, whether you need a shop or booking system, and how much content you already have ready all affect the final cost.</p>
      <p>Once we know what you need, we will give you a clear, written quote before any work begins. No surprise invoices, no hidden add-ons, and no charges for things we did not agree on together. If your budget is tight, tell us. We can often suggest a smaller starting version of your site that still covers the essentials, with room to add more later as your books and your budget grow.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- explore more services';
$location_services_heading = 'More Services for Children’s Authors Across Queensland';
$location_services_intro   = 'We built our service list around the real gaps that stop authors from finishing and launching their books. Here is what falls under our roof.';
$location_services_section = 'section figma-cream';
include 'includes/location-services.php';
?>

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Build a Children’s Author Website <em>That Grows With You</em></h2>
      <p>You have already done the hard part. You wrote the book. Let us handle the website.</p>
      <p>If you are ready for a website that actually reflects your books and your voice, get in touch with Purple Giraffe Press today. Tell us about your books, and we will show you what your site could look like.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to build your author website" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 18 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions Queensland authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

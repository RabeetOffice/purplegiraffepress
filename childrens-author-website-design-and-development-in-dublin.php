<?php
include 'includes/config.php';

$page_title       = 'Dublin Web Design for Children\'s Book Authors';
$page_description = 'Custom website design for children\'s book authors in Dublin. Beautifully crafted sites that showcase your stories and connect with young readers.';
$canonical_path   = 'childrens-author-website-design-and-development-in-dublin.php';
$breadcrumb_name  = 'Author Websites in Dublin';
$breadcrumbs = [
    ['name' => 'Home',            'url' => page_url('index.php')],
    ['name' => 'Locations',       'url' => page_url('locations/')],
    ['name' => 'Dublin',          'url' => page_url('locations/dublin.php')],
    ['name' => 'Author Websites', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to build a children\'s author website?',
    'a' => 'Most straightforward author websites take between three and six weeks from our first chat to launch, depending on how much content you already have ready and how quickly we get feedback from you along the way.',
  ),
  1 =>
  array (
    'q' => 'Do you only work with authors based in Dublin, or can you help authors in London too?',
    'a' => 'We are based in Dublin and work with authors here, but we also build sites for children\'s authors and illustrators in London and further afield. Most of our work happens over calls and email, so location rarely gets in the way.',
  ),
  2 =>
  array (
    'q' => 'Can you help if I already have a website but it looks outdated?',
    'a' => 'Yes. We often update or rebuild existing sites rather than starting from scratch, and we can usually keep your existing content, book covers, and branding while giving the site a fresher, more usable design.',
  ),
  3 =>
  array (
    'q' => 'Do I need to already have a publisher to get a website built?',
    'a' => 'No. We work with self-published authors just as often as with authors with publishing deals. If you have books to share, whether printed, self-published, or still on the way, we can build a site around them.',
  ),
  4 =>
  array (
    'q' => 'Will I be able to add new books or events myself after the site is finished?',
    'a' => 'Yes. We build sites that are easy for you to update, and we show you how during handover, so you are not stuck waiting on us every time you want to add a new title or a school visit date.',
  ),
  5 =>
  array (
    'q' => 'How much does a children\'s author website cost?',
    'a' => 'It depends on what you need. A simple landing page costs less than a full site with a shop and blog. We always give you a clear quote after understanding your goals, rather than a generic price that may not fit your project.',
  ),
  6 =>
  array (
    'q' => 'Do you build websites for authors in London as well as Dublin?',
    'a' => 'Yes, alongside our Dublin clients, we regularly work with authors and illustrators in London. Distance is not usually a problem, since most of the planning and feedback happens by call or email.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). Real Dublin office
   address, kept in step with SITE_ADDRESS_IE in includes/config.php. */
$location_business = [
    'streetAddress' => 'Canon Hall, North Wall',
    'locality'   => 'Dublin',
    'region'     => 'Dublin',
    'postalCode' => 'D03 WP86',
    'country'    => 'IE',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Author Websites</div>
      <h1>Children's <em>Author Website Design and Development</em> in <strong>Dublin</strong> for Authors Who Want to Stand Out</h1>
      <p class="lead">If you write or illustrate children's books, your website is often the first place a parent, teacher, publisher, or literary agent will look you up. A tired old template, or worse, no website at all, does not do your work justice. Purple Giraffe Press helps you fix that.</p>
      <p class="lead">We build children's author website designs in Dublin that feel as warm and inviting as the stories you write. No stiff templates. Just a website that shows off your books, your characters, and your voice, and makes it easy for people to find out more, get in touch, or buy your book.</p>
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
      <h2>An extension of your books, not a generic online brochure</h2>
      <p>Whether you have written one picture book or twenty, whether you are just starting out or you already have a following, we build the site around you. We keep the process simple, and we explain everything in plain English, so you always know what you are getting and why.</p>
      <p>Good website design for children's authors in Dublin should feel like an extension of your books, not a generic online brochure. That is the standard we hold every project to.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Website &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/author-websites.webp" alt="Children's author website design and development in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT A PROJECT INCLUDES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Custom Children’s Website Solutions Designed Around Your Children’s Books</h2>
    <p style="margin:14px auto 0;">A website for a children's book creator is not the same as a website for a regular business. It needs colour, personality and a sense of fun, while still being easy for parents and teachers to use on a phone or a tablet. Here is what a typical project includes.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Children’s Author Websites Built Around Your Unique Stories</h3>
        <div class="fc-body">
          <p>We start with your books. Every title gets its own page, with a short blurb, sample illustrations (with your permission from your publisher, if needed), age range, and links to buy. If you have a series, we group them so readers can see the whole collection at a glance.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="m4 17 4.5-6 4 5 3.5-5 4 6"></path><circle cx="8.5" cy="8.5" r="1.5"></circle></svg></div>
        <h3>Illustrator Portfolios That Do Justice To The Art</h3>
        <div class="fc-body">
          <p>If you illustrate as well as write, or if you are an illustrator looking for your own site, we treat your artwork as the star. A children's book illustrator website design in Dublin from us usually includes a gallery that loads quickly, image protection so your artwork is not easily copied, and a simple way for art directors or publishers to see your full body of work.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 3 14h8l-1 8 10-12h-8Z"></path></svg></div>
        <h3>High-Converting Book Landing Pages Designed For Authors</h3>
        <div class="fc-body">
          <p>Sometimes you do not need a full website. You might just need one strong page for a book launch, a school visit tour, or a new title that is about to be published. We can put together a children's book landing page design in Dublin that does one job well, with a clear call to action, whether that is signing up for a newsletter or buying the book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M3 9h18M7 4v5"></path></svg></div>
        <h3>Complete Author Websites Built To Grow Your Audience</h3>
        <div class="fc-body">
          <p>Some authors only need one or two pages. Others want a full children's book website design in Dublin, with a homepage, a books section, an about page, an events page, a blog, and a contact form. We build both, and we will tell you honestly which one suits your situation, rather than upselling you on pages you do not need.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="m3 7 9 6 9-6"></path></svg></div>
        <h3>Connect Readers Through Events, Schools, and Email Lists</h3>
        <div class="fc-body">
          <p>Many children's authors do school visits, library talks, and festival readings. We add an events page that is easy for you to update yourself, plus a newsletter sign-up form so you can build a mailing list of parents, teachers, and fans over time.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="20" r="1.4"></circle><circle cx="18" cy="20" r="1.4"></circle><path d="M2 3h3l2.6 11.2a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 2-1.5L21 8H6"></path></svg></div>
        <h3>Make It Easier For Readers To Buy Your Books</h3>
        <div class="fc-body">
          <p>We can link out to Amazon, your publisher, or a local bookshop, or set up a small online shop if you sell signed copies directly. We keep the buying journey short because every extra click loses a sale.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHAT MAKES A CHILDREN'S BOOK WEBSITE ACTUALLY WORK (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>What Makes A Children's Book Website Actually Work</h2>
  </div>
  <div class="container narrow center">
    <p>There is more to this than picking a nice colour scheme. A few things matter more than people expect.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Readability for two audiences at once.</strong> Parents and teachers are usually reading the text, while children are looking at the pictures. The layout needs to work for both without feeling cluttered.</li>
      <li><strong>Fast-loading pages.</strong> Illustrations and cover images can be large files. If a page loads slowly, people leave before they even see your book.</li>
      <li><strong>Clear navigation.</strong> A confusing menu is frustrating for anyone, but especially for a parent quickly checking if a book suits their child's age before buying it.</li>
      <li><strong>Age ranges are shown clearly.</strong> Parents and teachers often decide within seconds whether a book is right for a child, so age guidance should never be hidden away.</li>
      <li><strong>A tone that matches your books.</strong> A website for a gentle bedtime story picture book should not look and feel the same as one for a spooky middle-grade adventure series.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>We keep all of this in mind from the very first sketch, not as an afterthought once the site is built.</p>
  </div>
</section>

<!-- 6 - AGE GROUPS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Designing A Website For Your Children's Book Audience</h2>
    <p style="margin:14px auto 0;">Every children's book website needs to connect with the right readers and buyers. The design, content, visuals, and navigation should reflect the age group your books are created for while making it easy for parents, teachers, and children to explore your work.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Picture Books (Ages 0–7)</h3>
        <div class="fc-body">
          <p>Websites for picture books focus on colourful visuals, simple navigation, illustrations, and clear information that helps parents quickly understand the story.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Early Readers And Chapter Books (Ages 5–10)</h3>
        <div class="fc-body">
          <p>These websites highlight book collections, characters, and reading levels while helping parents and teachers discover suitable stories for young readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Middle Grade Books (Ages 8–12)</h3>
        <div class="fc-body">
          <p>For older children's books, websites often focus more on themes, adventures, series information, and engaging content that builds a connection with growing readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Young Adult Books (Ages 13–18)</h3>
        <div class="fc-body">
          <p>Young adult author websites need a style that feels modern and relatable while showcasing books, author identity, and updates for teenage audiences.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Understanding your target age group helps us create a website design that matches your stories, attracts the right audience, and supports your goals as a children's author.</p>
  </div>
</section>

<!-- 7 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin children's book authors and illustrators we design websites for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Children’s Book Creators We Design Websites For</h2>
      <p>We have worked with, and would love to work with, people such as:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Picture book authors publishing their first title</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who want a portfolio that is separate from their author's site</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Middle-grade and young adult authors building a readership</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors who need a shop as well as a website</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who already have a publisher but want more control over their own online presence</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and school visit speakers who write on the side</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 8 - WHY EVERY CHILDREN'S AUTHOR NEEDS A PROFESSIONAL WEBSITE (list) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Every Children’s Author Needs A Professional Website</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of authors put this off for years, using only a Facebook page or an Instagram account. That can work for a while, but it has limits.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Social media platforms change their rules, and posts get buried in a feed. A website is yours, and it stays put.</li>
      <li>Publishers, agents, and festival organisers usually check your website before they check anything else.</li>
      <li>Parents searching for age-appropriate books often find new authors through search engines, not social media.</li>
      <li>A website lets you sell books, collect email addresses, and share news in one place, instead of scattered across five different apps.</li>
      <li>It gives you something solid to point to on a business card, in an email signature, or at a school visit.</li>
    </ul>
  </div>
</section>

<!-- 9 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose Someone to Build Your Site in Dublin</h2>
      <p>Whether you choose us or not, here are honest questions worth asking anyone before you hire them.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they show examples of real author or illustrator websites they have built, not just generic business sites?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you be able to update the site yourself later, or are you stuck paying them every time you want to change a word?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain hosting and domain costs clearly, with no hidden extras?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will the site work properly on a phone, since a lot of parents will browse on one?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand copyright around book covers and illustrations, and how to use them properly online?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they tell you roughly how long the project will take, and stick to it?</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's author website designer in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 10 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Process For Building Your Author Website</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>A Chat About Your Books And Your Goals</h3></div>
        <div class="svc-step-body"><p>We start with a short call or email chat. We want to know about your books, your readers, and what you actually want the website to do for you, whether that is selling books, getting school visit bookings, or simply looking professional to publishers.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>A Simple Plan And Quote</h3></div>
        <div class="svc-step-body"><p>We put together a plan showing the pages you need, roughly how the site will look, and a clear quote. No vague pricing and no surprise bills later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Design And Build</h3></div>
        <div class="svc-step-body"><p>This is where the site actually comes together. As author website developers in Dublin, we handle the layout, the colours, the fonts, and the technical side, while keeping you updated with drafts to look at along the way.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Your Content Goes In</h3></div>
        <div class="svc-step-body"><p>We add your book covers, blurbs, illustrations, biography, and any other content you provide. If you need help writing any of this, we can guide you, though the words should always sound like you, not like us.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Testing On Phones, Tablets, and Computers</h3></div>
        <div class="svc-step-body"><p>Before anything goes live, we check the site on different screens and browsers, so it looks right whether someone is on a laptop in an office or a phone on the school run.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Launch And A Short Handover</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we launch the site and show you how to make small updates yourself, such as adding a new event or a new book.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Children’s Authors In Dublin Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We understand children's books, not just websites</h3><p>We know the difference between a picture book audience and a young adult audience, and we design accordingly.</p></article>
      <article><span>✓</span><h3>We speak plainly</h3><p>No confusing technical terms are thrown at you to sound clever. You will always understand what we are doing and why.</p></article>
      <article><span>✓</span><h3>You stay in control</h3><p>We build sites you can update yourself afterwards, without needing to call us for every small change.</p></article>
      <article><span>✓</span><h3>Honest, quote-based pricing</h3><p>Every project is different, so we quote based on what you actually need, not a one-size-fits-all price list.</p></article>
      <article><span>✓</span><h3>Local and easy to reach</h3><p>As an author website design services in Dublin, we are happy to meet in person or hop on a call whenever it suits you.</p></article>
    </div>
  </div>
</section>

<!-- 13 - CLEAR PRICING -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- clear pricing</p>
    <h2>Affordable Children’s Author Website Design With Clear Pricing</h2>
  </div>
  <div class="container narrow center">
    <p>Every author's needs are different. A simple landing page for a single book launch costs less than a full site with a shop, a blog and an events calendar. Because of that, we do not publish a flat price list. Instead, we ask about your books and your goals first, then send you a clear, written quote with no hidden extras. You will always know the full cost before any work begins.</p>
  </div>
</section>

<!-- 14 - TESTIMONIALS -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 15 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, written quote for a children's author website in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does A Children's Author Website Cost?</h2>
      <p>The cost of a children's author website depends on the features, number of pages, design requirements, and functionality you need. A simple book landing page will have different requirements compared to a complete author website with book sections, events, newsletters, and online shop features.</p>
      <p>We create personalised website solutions based on your goals and provide a clear quote before starting any work. Our team will guide you through the best options to create a professional website that represents your books, brand, and audience.</p>
      <p>Share your ideas with us, and we will help you build a website that brings your children's stories to life online.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 16 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 17 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 18 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Give Your <em>Children’s Books A Website</em> They Deserve</h2>
      <p>If you have been putting off getting a proper website, or if your current one no longer fits the books you write now, we would love to help. We build custom author websites in Dublin that are made around your stories, not squeezed into someone else's template.</p>
      <p>Get in touch for a friendly chat and a straightforward quote. There is no pressure and no jargon, just a conversation about your books and what you need.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to build your children's author website in Dublin" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 19 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions Dublin authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

<!-- 20 - FOOTER -->
<?php include 'includes/footer.php'; ?>

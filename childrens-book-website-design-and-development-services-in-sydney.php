<?php
include 'includes/config.php';

$page_title       = 'Sydney Web Design for Children\'s Book Authors';
$page_description = 'Custom website design for children\'s book authors in Sydney. Beautifully crafted sites that showcase your stories and connect with young readers.';
$canonical_path   = 'childrens-book-website-design-and-development-services-in-sydney.php';
$breadcrumb_name  = 'Author Websites in Sydney';
$breadcrumbs = [
    ['name' => 'Home',            'url' => page_url('index.php')],
    ['name' => 'Locations',       'url' => page_url('locations/')],
    ['name' => 'Sydney',          'url' => page_url('locations/sydney.php')],
    ['name' => 'Author Websites', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Sydney?',
    'a' => 'Most of our clients are Sydney-based, but we can work with authors anywhere in Australia. Being local to Sydney just means we can meet in person if that is useful for you.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to build a website?',
    'a' => 'It depends on the size of the project. A simple landing page can be ready in a couple of weeks. A full site with several pages, a shop, and a blog usually takes longer. We will give you a realistic timeframe once we know what you need.',
  ),
  2 =>
  array (
    'q' => 'Can I update the website myself after it is finished?',
    'a' => 'Yes. We build sites so you can make simple changes yourself, like adding a new book, updating an events page, or swapping a photo. We also walk you through how to do this before we hand the site over.',
  ),
  3 =>
  array (
    'q' => 'I am an illustrator, not a writer. Can you still help?',
    'a' => 'Yes. Plenty of our clients are illustrators, and some do not write at all. We build portfolio-focused sites that show your artwork clearly and make it easy for publishers or clients to get in touch.',
  ),
  4 =>
  array (
    'q' => 'Do you offer a smaller option if I am not ready for a full website?',
    'a' => 'Yes. A single landing page for a book launch, school tour, or pre-order campaign is a good option if you are not ready for a full site. It is quicker to build and still gives you a strong online presence.',
  ),
  5 =>
  array (
    'q' => 'What if my website has a problem after it goes live?',
    'a' => 'We stay available after launch. If something breaks or stops working properly, get in touch and we will sort it out.',
  ),
  6 =>
  array (
    'q' => 'Do you work with small children\'s publishers as well as individual authors?',
    'a' => 'Yes. We have built simple, clear sites for small publishers who need somewhere to showcase their book list, alongside our work with individual authors and illustrators in Sydney.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). streetAddress is left
   out until we have a Sydney address. */
$location_business = [
    'locality'   => 'Sydney',
    'region'     => 'NSW',
    'postalCode' => '2000',
    'country'    => 'AU',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Author Websites</div>
      <h1>Give Your Books the Spotlight They Deserve, <em>Sydney Children's Website Design</em> and Development for <strong>Children's Authors</strong></h1>
      <p class="lead">If you write or illustrate children's books, your website is often the first thing a publisher, school, or parent sees before they ever open one of your books. It needs to feel warm, look professional, and be simple to update when you have a new release coming. That is what we build at Purple Giraffe Press.</p>
      <p class="lead">We work with picture book writers, junior fiction authors, and illustrators across Sydney who want a site that actually works for them. Not a template that looks the same as everyone else's. Not a clunky system that takes an IT degree to update. Just a clean, friendly website that shows off your books and makes it easy for people to buy them, book you for a school visit, or get in touch.</p>
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
      <p>Good children's book website design in Sydney should feel playful without losing the professional edge that publishers and schools look for. That balance is at the heart of everything we build.</p>
      <p>Our children's author website design in Sydney service covers everything from the first sketch of an idea through to a finished site that is live and working. We handle the design, the writing, the technical build, and the little details that make a site feel personal rather than generic.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Website &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/author-websites.webp" alt="Children's author website design and development in Sydney by Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT THE SERVICE INCLUDES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>What Our Children’s Author Website Design Service Includes</h2>
    <p style="margin:14px auto 0;">A website for a children's book author is not the same as one for a lawyer or a plumber. It needs colour, personality, and a bit of whimsy, while still being clear about what you do and how people can work with you. Here is how we break the work down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Sites Built Around Your Books, Not A Generic Layout</h3>
        <div class="fc-body">
          <p>Every children's book author website we build in Sydney starts with your books and your voice. We look at your covers, your illustration style, and the age group you write for, then design a layout that fits. A rhyming picture book about a grumpy koala should not look like a serious young adult thriller site. The colours, fonts, and spacing all need to match the feel of your work.</p>
          <p>We also make sure the site is easy for parents, teachers, and librarians to use. Big buttons, clear book pages, and a simple way to find out where to buy your books. Nobody should have to dig around to find your latest release.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 0 1 15.5-6.2L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-15.5 6.2L3 16"></path><path d="M3 21v-5h5"></path></svg></div>
        <h3>Full Development From Idea To Launch</h3>
        <div class="fc-body">
          <p>Some authors just want a few pages up quickly. Others want a bigger site with a blog, an events calendar, and a shop. Either way, our book author website development in Sydney work covers the full build, not just the pretty parts.</p>
          <p>That means:</p>
          <ul>
            <li>Setting up hosting and domain names</li>
            <li>Building the pages so they work properly on phones and tablets</li>
            <li>Making sure the site loads quickly, even with lots of images</li>
            <li>Testing everything before it goes live</li>
            <li>Handing over simple instructions so you can update them yourself later</li>
          </ul>
          <p>We do not disappear once the site is launched, either. If something needs a small tweak in six months, we are still here.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Website Design For Illustrators, Not Just Writers</h3>
        <div class="fc-body">
          <p>Plenty of the authors we work with are illustrators too, and some clients are illustrators who do not write at all. Our children's book illustrator website design in Sydney works is built around a strong portfolio first. Big, clear images of your artwork, organised so a publisher or art director can flick through quickly and see your range.</p>
          <p>We also add pages for licensing enquiries, commission requests, and any awards or credits you want to show off. A good illustrator site should feel like flipping through a beautifully laid-out sketchbook, not scrolling through a wall of thumbnails.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Landing Pages For A Single Book Or Launch</h3>
        <div class="fc-body">
          <p>Sometimes you do not need a whole new site. You just need one strong page to promote a new release, a school tour, or a pre-order campaign. Our children's book landing page design in Sydney service is built for exactly this. One focused page with a clear call to action, whether that is buying the book, joining your mailing list, or booking a visit.</p>
          <p>These pages work well alongside an existing website or as a quick standalone option if you are not ready for a full site yet.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Author Website Design Services Built Around How You Actually Work</h3>
        <div class="fc-body">
          <p>Not every author wants the same thing from their site. Some just need an online business card. Others want a full hub with a shop, a blog, and a newsletter sign-up. Our author website design services in Sydney are flexible enough to cover both ends of that scale and everything in between.</p>
          <p>We ask about your goals early on. Are you trying to land more school visits? Sell more books directly? Build a mailing list ahead of a launch? The answers shape what we build, rather than us pushing the same package on every client.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Author Website Design for Different Reader Age Groups</h2>
    <p style="margin:14px auto 0;">Not every children’s author needs the same type of website. A picture book author often needs bright visuals and simple navigation, while a middle-grade or young adult writer may need a more content-focused layout. We design every website around the audience you write for, helping parents, teachers, librarians, and readers quickly find the information they need.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-7-4.6-9.5-9A5.5 5.5 0 0 1 12 6.5 5.5 5.5 0 0 1 21.5 12C19 16.4 12 21 12 21Z"></path></svg></div>
        <h3>Ages 0–3: Websites for Early Learning and Board Book Authors</h3>
        <div class="fc-body">
          <p>Authors writing for babies and toddlers often benefit from simple, welcoming websites with large visuals and easy navigation. We focus on showcasing book covers, age recommendations, and key information in a clear format. The goal is to help parents, caregivers, and early learning educators quickly understand what your books offer.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 3–5: Picture Book Websites Full of Colour and Personality</h3>
        <div class="fc-body">
          <p>Picture book authors need websites that reflect the creativity and imagination found in their stories. We use engaging layouts, colourful design elements, and strong visual presentation to showcase books and illustrations. These websites are designed to appeal to both children and the adults making purchasing decisions.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg></div>
        <h3>Ages 6–8: Websites Designed for Growing Young Readers</h3>
        <div class="fc-body">
          <p>Authors of early reader books often need a balance between playful design and practical information. We create websites that highlight book series, reading levels, and educational value while remaining easy to explore. This helps parents, schools, and libraries quickly find the resources they need.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 8–12: Strong Online Homes for Middle-Grade Authors</h3>
        <div class="fc-body">
          <p>Middle-grade authors often have larger book collections, series pages, and character-driven stories to showcase. We design websites that make it easy for readers, teachers, and librarians to explore multiple titles. The focus is on organisation, discoverability, and creating a professional author presence.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2Z"></path></svg></div>
        <h3>Ages 13–17: Modern Websites for Young Adult Authors</h3>
        <div class="fc-body">
          <p>Young adult readers expect a more mature online experience. We create websites with stronger branding, cleaner layouts, and space for blogs, events and reader engagement. These sites help authors build a professional online presence while still reflecting the personality behind their books.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.6-6.5 8-6.5s8 2.5 8 6.5"></path></svg></div>
        <h3>Multi-Age and Family Authors: One Website for Multiple Audiences</h3>
        <div class="fc-body">
          <p>Some authors write across several age groups rather than focusing on one category. In these cases, we create flexible website structures that organise books clearly while keeping navigation simple. This allows parents, educators, and readers to quickly find the titles most relevant to them.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE BUILD FOR: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Sydney children's authors, illustrators and small publishers we build websites for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Sydney Author Website Services Are For</h2>
      <p>We work with a wide range of people in the children's book world, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Picture book authors self-publishing their first book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Junior fiction and middle grade writers with a backlist to show off</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators looking for publisher and agency attention</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Author-illustrators who both write and draw their own books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small children's publishers who need a simple site for their list</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who already have a site but find it outdated or hard to manage</span></li>
      </ul>
      <p>If that sounds like you, there is a good chance we can help. Good website design for children's authors in Sydney should flex to suit whichever of these groups you fall into, rather than forcing everyone into the same mould.</p>
    </div>
  </div>
</section>

<!-- 7 - DESIGNERS WHO UNDERSTAND CHILDREN'S PUBLISHING -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Work With Website Designers Who Understand Children’s Publishing</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of website builders will happily take on any job, from a plumber's site to an online store to a children's author page, without really understanding what makes a book-based site different. Working with author website developers in Sydney who actually read children's books and understand this market makes a real difference.</p>
    <p style="margin-top:14px;">We know that cover images need to be shown at their best, that age ranges and reading levels matter to parents and teachers, and that a school visit enquiry form needs different fields from a general contact form. These small details add up to a site that feels like it was built specifically for you, because it was.</p>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE A DEVELOPER -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what to look for</p>
    <h2>How To Choose A Sydney Website Developer</h2>
  </div>
  <div class="container narrow center">
    <p>Before you commit to anyone, including us, it is worth asking a few honest questions. A good developer should be happy to answer all of these clearly.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>Can I see other author or illustrator websites you have built?</li>
      <li>Will I be able to update the site myself once it is live, or do I need to come back to you for every change?</li>
      <li>What happens if my site breaks or goes down? Is support included or extra?</li>
      <li>How long does a typical build take, from start to finish?</li>
      <li>Will the site work properly on phones, since a lot of visitors will be on mobile?</li>
      <li>Is the pricing a fixed quote, or could extra costs turn up later?</li>
      <li>Do you understand how book pages, series pages, and author bios should be laid out?</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:24px;">
    <p>If a developer cannot answer these clearly, or dodges the question about ongoing costs, that is worth noticing.</p>
  </div>
</section>

<!-- 9 - WHAT A STRONG WEBSITE DOES FOR YOU -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Why a Strong Author Website Creates Better Opportunities</h2>
  </div>
  <div class="container narrow center">
    <p>It is easy to think of a website as just a nice-to-have. In practice, it does real work for you.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>A clear, professional site builds trust with publishers, agents, schools, and libraries before you even meet them.</li>
      <li>It gives you one place to send people, instead of scattered social media posts that disappear from feeds within a day.</li>
      <li>It makes it easier for schools and festivals to find your booking details and past events.</li>
      <li>It gives parents and teachers a simple way to check reading age, themes, and where to buy.</li>
      <li>It supports your other marketing, since a social post or interview link usually points people back to your site.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:24px;">
    <p>A website will not sell books on its own, but a poor one can quietly cost you opportunities you never hear about.</p>
  </div>
</section>

<!-- 10 - BUILT TO GROW: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- built to last</p>
      <h2>Author Websites Designed to Grow With Your Career</h2>
      <p>We are not fans of throwaway template sites that look fine on day one and fall apart the moment you want to add something new. Our custom author websites in Sydney are built with room to grow. A new book series, a shop section, an events calendar, or a blog can all be added later without rebuilding the whole thing from scratch.</p>
      <p>This matters more than people expect. Careers in children's publishing often stretch across many books and many years. A site built properly at the start saves you a rebuild down the track.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Website &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/home-about.webp" alt="A Sydney author website built with room to grow across a whole writing career" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 11 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How We Design and Launch Your Author Website</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step One: A Chat About Your Books And Your Goals</h3></div>
        <div class="svc-step-body"><p>We start with a conversation, not a sales pitch. We want to know about your books, your readers, and what you actually need the site to do for you.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step Two: Design Concepts</h3></div>
        <div class="svc-step-body"><p>We put together a design direction based on your books and your style. You will see layout ideas, colour choices, and how your covers and artwork will be shown before we build anything final.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step Three: Building The Site</h3></div>
        <div class="svc-step-body"><p>Once you are happy with the direction, we build the full site. This includes the technical setup, all the pages, and making sure everything works properly on different devices.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step Four: Review And Adjustments</h3></div>
        <div class="svc-step-body"><p>You get a chance to look through the site before it goes live and ask for changes. We would rather fix things now than after launch.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step Five: Launch And Handover</h3></div>
        <div class="svc-step-body"><p>We take the site live and walk you through how to make simple updates yourself, like adding a new book or updating your events page.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Step Six: Ongoing Support</h3></div>
        <div class="svc-step-body"><p>We stay available after launch for questions, small updates, or bigger changes down the track if your needs grow.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 12 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 13 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Sydney Children’s Authors Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children's books.</h3><p>This is not a side project alongside restaurant and tradie websites. It is our focus.</p></article>
      <article><span>✓</span><h3>We keep pricing clear.</h3><p>You get a quote up front, based on what you actually need, not a vague estimate that grows later.</p></article>
      <article><span>✓</span><h3>You are not left on your own after launch.</h3><p>We are still around if something needs fixing or updating.</p></article>
      <article><span>✓</span><h3>We design around your books, not a template.</h3><p>Your site should look like it belongs to you, not a stock layout with your name swapped in.</p></article>
      <article><span>✓</span><h3>We understand this industry.</h3><p>From reading ages to school visit enquiries, we know the details that matter to authors and illustrators.</p></article>
    </div>
  </div>
</section>

<!-- 14 - TESTIMONIALS -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>
<!-- 16 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for children's author website design in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Children’s Author Website Design Cost</h2>
      <p>Every author's needs are different, so we do not use a single flat rate for every project. A simple landing page for one book costs less than a full site with a shop, blog, and events calendar. Once we understand what you need, we will give you a clear, upfront quote with no hidden extras. There is no obligation to go ahead after that first chat.</p>
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
$location_services_heading = 'Additional Services for Sydney Children’s Book Authors';
$location_services_intro   = 'We built our service list around the real gaps that stop authors from finishing and launching their books. Here is what falls under our roof.';
$location_services_section = 'section figma-cream';
include 'includes/location-services.php';
?>

<!-- 18 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 19 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Build a Website for <em>Your Books?</em></h2>
      <p>If you are ready for a website that actually represents your work, we would love to hear from you. Get in touch with Purple Giraffe Press for a free, no-pressure conversation about what a new or updated site could look like for you. Bring your books, your ideas, and any questions, and we will take it from there.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to build your Sydney author website" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 20 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions Sydney authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

<!-- 21 - FOOTER -->
<?php include 'includes/footer.php'; ?>

<?php
include 'includes/config.php';

$page_title       = 'Children\'s Author Website Design Services in London';
$page_description = 'Looking for a website that reflects your storytelling? We design creative, easy-to-navigate websites for children\'s authors based in London and beyond.';
$canonical_path   = 'childrens-author-website-design-london.php';
$breadcrumb_name  = 'Author Websites in London';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'London',      'url' => page_url('locations/london.php')],
    ['name' => 'Author Websites', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in London?',
    'a' => 'No. Most of our clients are in London, but we work with authors and illustrators across the whole UK. Meetings can be done by video call if you are not local.',
  ),
  1 =>
  array (
    'q' => 'How long does a children’s book website take to build?',
    'a' => 'A single landing page can be ready within a couple of weeks. A full author site usually takes longer, depending on how many books and pages need to be included.',
  ),
  2 =>
  array (
    'q' => 'Can you help with children’s book website design in London if I already have a domain name?',
    'a' => 'Yes. If you already own a domain, we simply build the new site and point it there when you are ready to launch.',
  ),
  3 =>
  array (
    'q' => 'Do you write the text for the site as well as design it?',
    'a' => 'We can, if you would like help. Some authors prefer to write their own biography and book descriptions, and we are happy to work either way.',
  ),
  4 =>
  array (
    'q' => 'Will my website work well for school visits and events?',
    'a' => 'Yes. We usually include an events page where you can list school visits, festival appearances, or bookshop signings, along with contact details for bookings.',
  ),
  5 =>
  array (
    'q' => 'What happens after the website is finished?',
    'a' => 'We show you how to make basic updates yourself. If you would rather not deal with the technical side, we also offer ongoing maintenance support.',
  ),
  6 =>
  array (
    'q' => 'Do you offer support for authors preparing for a London book festival or event season?',
    'a' => 'Yes. Many of our London clients come to us ahead of a festival appearance or a local event season, wanting their site ready and up to date beforehand.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). UK country code and a
   central-London placeholder postcode until we have a real London address. */
$location_business = [
    'locality'   => 'London',
    'region'     => 'London',
    'postalCode' => 'EC1V 2NX',
    'country'    => 'GB',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Author Websites</div>
      <h1>Children’s Author <em>Website Design</em> London That Turns Stories Into <strong>Digital Experiences</strong></h1>
      <p class="lead">Writing a children’s book takes years of hard work. Your website should not feel like an afterthought bolted on at the end. It should feel like a small extension of the story itself, warm, playful, and easy for parents, teachers, and librarians to trust.</p>
      <p class="lead">At Purple Giraffe Press, we build websites for people who write and illustrate for young readers. We know that a picture book author needs something different from a business consultant or a solicitor. Your site needs colour, character, and charm, but it also needs to load fast, work on a phone, and make it simple for someone to buy your book or book you for a school visit.</p>
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
      <!-- <p class="eyebrow script-mark">- what it is</p> -->
      <p>The Website Is Often the Last Piece of the Puzzle, and the One That Gets Rushed.</p>
      <p>We work with authors across London and the wider UK who want a children’s book author website in London that actually helps their career, not just a page that sits online looking pretty. Whether you are self-published, working with a small press, or already signed to a publisher, we build sites that support what you are trying to do next.</p>
      <p>Many of the authors who come to us have spent years perfecting a manuscript, working with editors, and building relationships with schools and libraries. We think it deserves as much care as everything else you have already put into your books.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Website &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/author-websites.webp" alt="Children's author website design in London by Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - CUSTOM WEBSITE SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Custom Children’s Book Websites Built For Authors And Illustrators</h2>
    <p style="margin:14px auto 0;">A children’s book is a visual thing. Your website should show that off. We do not use generic templates dropped in from a stock library. Every project starts with your artwork, your characters, and your voice.</p>
    <p style="margin:14px auto 0;">We also think carefully about the reader on the other end of the screen. A parent looking for bedtime story recommendations behaves differently online than a teacher building a reading list or a librarian checking your availability for a class visit. A good site speaks to all three without confusing any of them.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Full Author Websites</h3>
        <p>This is our main service. We design and build a complete website for you, covering your books, your biography, events, press, and contact details. If you are looking for custom author websites in London, this is usually the starting point. We build the site around your existing books and leave room to add new titles as your list grows.</p>
        <p>We also add practical extras where they make sense, such as a newsletter sign-up box, links to buy your books from a retailer, and a simple press page with a photo and short biography that journalists or event organisers can use.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Illustrator Portfolio Sites</h3>
        <p>If you illustrate as well as write, or you illustrate for other authors, you need a site that shows your artwork properly. We handle children’s book illustrator website design in London with a focus on image quality, gallery layout, and fast loading times, so your pictures never look squashed or pixelated.</p>
        <p>We pay close attention to how artwork is cropped and framed on different screen sizes, since a spread that looks perfect on a laptop can lose its impact on a phone if it is not set up with care.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Book Launch Landing Pages</h3>
        <p>Sometimes you do not need a full site straight away. You need one strong page to support a launch. We build children’s book landing page designs in London projects for authors who want a single page with a countdown, a pre-order link, or a sign-up form ahead of a release date.</p>
        <p>This is a good option if you have a publication date coming up and want something live quickly, without committing to a full site build straight away. Many authors later expand this page into a fuller site once the launch has settled down.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 0 1 15.5-6.2L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-15.5 6.2L3 16"></path><path d="M3 21v-5h5"></path></svg></div>
        <h3>Website Rebuilds and Development</h3>
        <p>If you already have a site but it feels tired, slow, or hard to update, we can rebuild it. Our book author website development in London work includes moving old sites onto modern, easier-to-manage platforms, without losing your search rankings or your existing content.</p>
        <p>Before we start any rebuild, we look at what is already working on the old site, such as pages that get good traffic or backlinks from other websites, so we do not accidentally throw away things that are quietly doing their job.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE-FOCUSED WEBSITES (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Age-Focused Author Websites Designed For Every Young Reader</h2>
    <p style="margin:14px auto 0;">Every children’s book audience is different, and the way an author presents their work online should reflect the age of the readers they are trying to reach. We consider the reading level, visual style, and audience expectations behind your books to create a website that feels right for children, parents, teachers, and schools.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-7-4.6-9.5-9A5.5 5.5 0 0 1 12 6.5 5.5 5.5 0 0 1 21.5 12C19 16.4 12 21 12 21Z"></path></svg></div>
        <h3>Ages 0 To 3: Gentle Websites For Board Book Authors</h3>
        <p>Board books are often a child’s first introduction to stories, so the website should feel warm, simple, and visually engaging. We focus on bright artwork, clear navigation, and playful design elements that help parents quickly understand the book’s purpose, characters, and learning value.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 3 To 7: Story-Focused Websites For Picture Book Authors</h3>
        <p>Picture books rely heavily on imagination and illustrations. We create websites that showcase your artwork beautifully, highlight your characters, and make it easy for parents, teachers, and librarians to explore your stories, book details, and author journey.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg></div>
        <h3>Ages 5 To 8: Clear And Engaging Sites For Early Readers</h3>
        <p>Early readers need a balance between independence and support. We design websites that present your books clearly, with simple layouts, readable information, and features that help parents and educators discover books suitable for children building their reading confidence.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.6-6.5 8-6.5s8 2.5 8 6.5"></path></svg></div>
        <h3>Ages 8 To 12: Author Platforms For Middle Grade Writers</h3>
        <p>Middle-grade readers begin developing stronger connections with characters, series, and longer stories. We create websites that give your books more space to shine through detailed book pages, character introductions, series information, and engaging content for young readers and their families.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2Z"></path></svg></div>
        <h3>Ages 12+: Modern Websites For Young Adult Authors</h3>
        <p>Young adult readers expect a more mature online experience. We build author websites with a stronger focus on your brand, themes, upcoming releases, reviews, and community building, helping you connect with teenage readers, parents, educators, and book communities.</p>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE BUILD FOR: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/home-about.webp" alt="The London children's authors, illustrators and publishers we build websites for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping Children’s Authors, Illustrators, And Publishers Grow Online</h2>
      <p>We build sites for a wide range of people in the children’s book world, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Picture book authors, whether traditionally published or self-published</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Middle-grade and young adult authors writing for slightly older readers</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators building a portfolio to attract publishers or freelance work</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Author-illustrators who both write and draw their own books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small independent presses that publish a handful of children’s titles</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors preparing for a school visit season or a book tour</span></li>
      </ul>
      <p>If you write or draw for children and you need a website that reflects that, we can help. We have found that most of these authors share the same worry when they first get in touch. They are not sure whether a website is worth the cost or whether it will just sit there unused. Once it is live and doing its job quietly in the background, that worry usually disappears.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what to look for</p>
    <h2>How To Choose The Right Children’s Book Website Designer</h2>
  </div>
  <div class="container narrow center">
    <p>Not every web designer understands children’s publishing. Before you hire anyone, including us, it is worth asking a few honest questions.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>Have they built sites for authors or illustrators before, or only for shops and services?</li>
      <li>Can they show you real examples where images and artwork are the main focus?</li>
      <li>Do they explain how you will update the site yourself once it is live?</li>
      <li>Will the site work well on a phone, since many parents browse and buy on mobile?</li>
      <li>Do they include basic search visibility, so parents and teachers can actually find you?</li>
      <li>What happens if you want to add a new book in a year’s time? Is that easy or expensive?</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:24px;">
    <p>Any honest <strong>author website developers in London</strong> should be happy to answer these questions clearly, without dodging or overpromising.</p>
  </div>
</section>

<!-- 8 - WHY EVERY AUTHOR NEEDS A WEBSITE -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Every Children’s Author Needs A Professional Website in London</h2>
  </div>
  <div class="container narrow center">
    <p>Some authors put this off for years and get by with a Facebook page or nothing at all. That can work for a while, but a proper website earns its keep in a few clear ways.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>It gives you a place you fully own, rather than depending on a social platform that can change its rules overnight</li>
      <li>It makes you look established to publishers, agents, schools, and festival organisers</li>
      <li>It gives parents and teachers one clear place to find your books, your events, and how to contact you</li>
      <li>It supports your search visibility, so people searching for your book title or your name can find you directly</li>
      <li>It gives you room to grow, adding new books, translations, or merchandise as your career develops</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:24px;">
    <p>A website is not just decoration. For most authors, it becomes the hub that everything else points back to. Your social media posts, your publisher’s press release, your school visit booking form, and even the back cover of your book can all point to one place that you fully control.</p>
  </div>
</section>

<!-- 9 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Website Design Process From Idea To Launch</h2>
    <p style="margin:14px auto 0;">We keep the process simple and easy to follow, from the first message to launch day.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>A Free Chat About Your Books</h3></div>
        <div class="svc-step-body"><p>We start with a short call or email exchange. You tell us about your books, your readers, and what you are hoping the site will do for you.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>A Design Direction Based On Your Artwork</h3></div>
        <div class="svc-step-body"><p>We pull colours, characters, and style cues from your existing books or illustrations, so the site feels like a natural extension of your work rather than a separate brand. We will usually show you a couple of directions to choose from, rather than a single design with no alternative.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Building the Pages</h3></div>
        <div class="svc-step-body"><p>We build out your pages, including your books, your biography, events, contact details, and anything else you need, such as a newsletter sign-up or a shop link.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review and Adjustments</h3></div>
        <div class="svc-step-body"><p>You look through the site before it goes live. We make changes based on your feedback until you are happy with how it reads and looks.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Launch and Handover</h3></div>
        <div class="svc-step-body"><p>Once you approve it, we launch the site and show you how to make simple updates yourself, such as adding a new event or swapping an image.</p></div>
      </article>
    </div>
    <div class="container narrow center" style="margin-top:24px;">
      <p>We also offer <strong>website design for children’s authors in London</strong> who need ongoing help after launch, such as adding new titles each year or refreshing the site ahead of a big release.</p>
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
      <h2>Why Authors Choose <em>Purple Giraffe Press</em> For Websites</h2>
      <p>We offer genuine author website design services in London, built by people who take the time to read your books before we start designing.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We focus on children’s publishing</h3><p>We are not a general agency that happens to take on the odd book project. This is the work we choose to do.</p></article>
      <article><span>✓</span><h3>We understand how parents and teachers browse</h3><p>Many visitors will be on a school laptop or a parent’s phone, often in a hurry. We design with that in mind.</p></article>
      <article><span>✓</span><h3>We keep the site easy for you to manage</h3><p>You should not need to call us every time you want to add a new book or update an event date.</p></article>
      <article><span>✓</span><h3>We are upfront about cost and timing</h3><p>You will know what you are paying for and roughly how long it will take before any work begins.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, written quote for children's author website design in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Understanding Children’s Author Website Design Costs in London</h2>
      <p>Every author’s needs are different, so we do not publish a single fixed price. A landing page for a single book launch costs far less than a full multi-book author site with a shop and event calendar. Once we understand what you need, we will give you a clear, written quote before any work starts, so there are no surprises later.</p>
      <p>If the budget is tight, tell us early. We would rather scale the project to fit what you can spend now, with room to add features later, than build something you feel pressured into paying for all at once.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 14 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Complete Children’s Book Services Beyond Website Design</h2>
    <p style="margin:14px auto 0;">What your project includes depends on your goals. We offer a full suite of professional services tailored to the specific needs of children’s literature.</p>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'audiobooks']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Create A Website That Brings Your Stories To <em>Life</em></h2>
      <p>If you are ready for a website that actually looks and feels like your books, get in touch. Send us a message about your project, and we will arrange a short call to talk through what you need. There is no pressure and no obligation, just an honest conversation about your options.</p>
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
      <p>Honest answers to the questions London authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

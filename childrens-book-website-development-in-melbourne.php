<?php
include 'includes/config.php';

$page_title       = 'Website Design for Children\'s Authors in Melbourne';
$page_description = 'Looking for a website that captures your storytelling? Our Melbourne-based team designs creative, easy-to-navigate websites for children\'s authors.';
$canonical_path   = 'childrens-book-website-development-in-melbourne.php';
$breadcrumb_name  = 'Author Websites in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'Melbourne',   'url' => page_url('locations/melbourne.php')],
    ['name' => 'Author Websites', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you build websites for first-time children’s authors in Melbourne?',
    'a' => 'Yes. We work with first-time children’s authors in Melbourne, as well as published authors, self-published writers and illustrators at every stage of their careers.',
  ),
  1 =>
  array (
    'q' => 'Can you redesign my existing children’s author website in Melbourne?',
    'a' => 'Yes. If you already have a children’s author website in Melbourne that needs a refresh, better structure, updated pages or a more professional look, we can improve what you already have.',
  ),
  2 =>
  array (
    'q' => 'Will my children’s author website work well on phones and tablets in Melbourne?',
    'a' => 'Yes. Every children’s author website we build in Melbourne is designed to work smoothly on phones, tablets and desktop computers, since many parents, teachers and readers will visit your site from a mobile device.',
  ),
  3 =>
  array (
    'q' => 'Can I update my Melbourne author website after it goes live?',
    'a' => 'Yes. We show Melbourne children’s authors how to make simple updates themselves, such as adding a new book, event, blog post or school visit detail without needing to contact us every time.',
  ),
  4 =>
  array (
    'q' => 'Can my Melbourne children’s author website help me sell books online?',
    'a' => 'Yes. We can set up your Melbourne children’s author website with direct book sales, links to your publisher, links to booksellers or a mix of options depending on how you want readers to buy your books.',
  ),
  5 =>
  array (
    'q' => 'How long does a children’s author website design take in Melbourne?',
    'a' => 'The timeline for children’s author website design in Melbourne depends on the size of the site, the number of books, the pages required and any extra features you need. We will give you a realistic timeframe as part of your quote.',
  ),
  6 =>
  array (
    'q' => 'Do I need website content ready before starting my Melbourne author website?',
    'a' => 'Not necessarily. If you are planning a children’s author website in Melbourne but do not have all your content ready yet, we can help you plan your pages and guide you on what content will work best.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Author Websites</div>
      <h1>Children’s Author <em>Website Design</em> Melbourne That Gets You <strong>Found</strong></h1>
      <p class="lead">You wrote a book for kids. Maybe you have illustrated one too. Now you need somewhere online that shows off your work properly, and that parents, teachers, librarians, and publishers can find without any trouble.</p>
      <p class="lead">A plain template site will not do that job well. Kids’ books need colour, warmth and a bit of fun. They also need to load fast, look good on a phone, and make it simple for someone to buy your book or book you for a school visit.</p>
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
      <h2>We Are Not A General Web Design Shop That Also Happens To Build Author Sites.</h2>
      <p>At Purple Giraffe Press, we build a children’s book author website in Melbourne that does all of this. Children’s books are what we know, so your site will feel like it belongs to your story from the first click.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Website &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/author-websites.webp" alt="Children's author website design in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WEBSITE DESIGN SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Children’s Book Website Design Services in Melbourne</h2>
    <p style="margin:14px auto 0;">We do not believe in one size fits all. Your website should match your books, your readers, and how you actually work. Here is how we break the job down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Author Website Developers Melbourne Children’s Writers Trust</h3>
        <p>We know how the children’s book world works. We understand things like series pages, age ranges, teacher resource downloads, and links to booksellers or your publisher’s page. You will not need to explain the basics to us.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Children’s Book Website Design Melbourne Built to Sell Your Story</h3>
        <p>Every book gets its own space to shine. We design pages that show off your cover art, a short blurb kids and parents can actually read, age guidance, and links to buy or borrow the book. If you have more than one book or a series, we set up clear navigation so readers can find their way around without getting lost.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.6-6.5 8-6.5s8 2.5 8 6.5"></path></svg></div>
        <h3>Website Design for Children’s Authors Melbourne With Real Reader Appeal</h3>
        <p>A thriller writer’s website and a picture book author’s website should not look the same. We design with your actual audience in mind, which is often parents, teachers, and young readers browsing on a tablet or phone. That changes font choices, colours, button sizes, and how much text goes on each page.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Children’s Book Illustrator Website Design Melbourne That Showcases Your Art</h3>
        <p>If you illustrate as well as write, or you are an illustrator looking for author-style work, we build galleries that let your art breathe. No cramped thumbnails or slow-loading pages. We set up portfolios that are easy to browse and easy to update as you add new work.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Children’s Book Illustrator Website Design in Melbourne</h3>
        <p>Launching a new book, running a school tour, or promoting a reading event? We built a focused landing page just for that. One clear goal per page, whether that is book sales, event sign-ups, or newsletter subscribers, with nothing distracting the reader from taking the next step.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHAT MAKES A SITE ACTUALLY WORK -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the details</p>
    <h2>What Makes a Children’s Author Website Actually Work</h2>
  </div>
  <div class="container narrow center">
    <p>Beyond the pages themselves, a handful of practical details make the real difference between a website that just sits there and one that actually helps your career.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li><strong>Fast loading times.</strong> A parent scrolling on their phone between school pickup and dinner will not wait around for a slow page to load. We keep image sizes sensible and code clean so your site opens quickly.</li>
      <li><strong>Clear calls to action.</strong> Every page should tell the reader what to do next, whether that is buying the book, signing up for your newsletter, or contacting you about a school visit.</li>
      <li><strong>A simple contact method.</strong> Teachers, librarians, and event organisers need an easy way to reach you. We make sure this is never hidden away.</li>
      <li><strong>Space for your story as a person, not just your books.</strong> Readers, especially teachers and parents, often want to know a little about who wrote the story. A short, honest about page goes a long way.</li>
      <li><strong>Room for reviews or press mentions, if you have them.</strong> If a library, school newsletter, or reviewer has said something nice about your book, we can give it a proper place on your site.</li>
    </ul>
  </div>
</section>

<!-- 6 - WHO WE BUILD FOR: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/home-about.webp" alt="The children's authors, illustrators and story creators we build websites for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Website Design for Children’s Authors, Illustrators and Story Creators</h2>
      <p>We build sites for a wide range of people in the children’s book world, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Picture book authors and author-illustrators</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Middle-grade and young adult authors</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who want a standalone portfolio site</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors managing their own sales</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors signed with a publisher who still wants their own online home</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Educators who also write books for the classroom</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what to look for</p>
    <h2>How to Choose the Best Children’s Author Website Design Services in Melbourne</h2>
  </div>
  <div class="container narrow center">
    <p>Plenty of web designers can put a page online. Fewer understand what a children’s book author actually needs from a website. When you are comparing your options, look for a few things.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li><strong>A designer who asks about your books first.</strong> Not just colours and fonts, but your series, your age range, and how readers actually find you now.</li>
      <li><strong>Real examples of author or illustrator sites</strong>, not just general business websites.</li>
      <li><strong>A simple way to update your own content later</strong>, such as adding a new book or blog post, without needing to call the designer every time.</li>
      <li><strong>Mobile-friendly design as standard</strong>, since most parents and teachers will look at your site on a phone first.</li>
      <li><strong>Clear pricing before any work starts</strong>, so there are no surprises halfway through.</li>
    </ul>
  </div>
</section>

<!-- 8 - WHY YOUR WEBSITE NEEDS TO CONVERT -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Children’s Book Authors Need a Website That Converts</h2>
  </div>
  <div class="container narrow center">
    <p>A children’s book author website is not just a digital business card. It often does several jobs at once, and if it is set up badly, you lose chances without even knowing it.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li><strong>First impressions count with schools and libraries.</strong> A teacher checking your site before booking a visit will judge your professionalism from what they see there.</li>
      <li><strong>Parents want quick, clear information.</strong> Age range, themes, and where to buy the book should be easy to find in a few seconds.</li>
      <li><strong>Your site needs to work for two audiences at once.</strong> Adults are usually the ones booking events or buying the book, but kids might be the ones exploring the pages with them.</li>
      <li><strong>Search engines need to understand your site too.</strong> Clear page titles, simple structure, and fast loading times all help people find you through a search, not just through word of mouth.</li>
      <li><strong>Your site should grow with your career.</strong> As you release more books, run more events, or build a teaching resource library, your website needs a structure that can expand without a full rebuild every time.</li>
      <li><strong>A messy website can cost you bookings you never even hear about.</strong> If a teacher cannot find your event details or your book’s age range quickly, they will often move on to another author rather than send you a message asking.</li>
      <li><strong>Your website is often the first place a publisher or agent will check.</strong> Before a meeting or a submission, it is common for someone to search your name first. A clear, professional site backs up the work you have already put into your book.</li>
    </ul>
  </div>
</section>

<!-- 9 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children’s Author Website Design Process</h2>
    <p style="margin:14px auto 0;">We keep the process simple and easy to follow, from your first message to your site going live.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Share Your Books, Readers, and Website Goals</h3></div>
        <div class="svc-step-body"><p>We start with a chat about your books, your readers, and what you want your website to actually do for you. This might be selling books directly, getting more school bookings, or simply having a proper home online for your work.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Receive a Clear Website Design Quote</h3></div>
        <div class="svc-step-body"><p>Once we understand what you need, we give you a straightforward quote. No vague pricing and no pressure to add things you do not need.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Build Your Children’s Author Website</h3></div>
        <div class="svc-step-body"><p>This is where the book author's website development in Melbourne actually happens. We build your pages, set up your book listings, add your illustrations, and get everything working smoothly on desktop and mobile.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review Your Website Before Launch</h3></div>
        <div class="svc-step-body"><p>We show you the site before it goes live. You tell us what you love and what you want changed, and we make those adjustments together.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Launch Your Site With Simple Update Support</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we launch your site and show you how to make simple updates yourself, such as adding a new book, blog post, or event. We are also here afterwards if you need a hand or have questions once the site is live.</p></div>
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

<!-- 11 - BENEFITS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Why Work With a Specialist Children’s Book Website Designer</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Faster turnaround</strong>, because we are not learning the children’s book world from scratch on your project.</li>
      <li><strong>A site that actually looks like it belongs to a children’s author</strong>, not a generic business template with your book cover pasted on.</li>
      <li><strong>Fewer back-and-forth revisions</strong>, since we already understand what details matter for your audience.</li>
      <li><strong>Better structure for growth</strong>, so adding new books, events, or resources later is simple.</li>
      <li><strong>A site built to be found</strong>, with clear pages that help search engines and real readers understand what you offer.</li>
    </ul>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Children’s Authors Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children’s books, not everything under the sun</h3><p>This is genuinely all we focus on, so we understand your world without a long explanation.</p></article>
      <article><span>✓</span><h3>Custom author websites in Melbourne, built around you</h3><p>We do not force your books into a rigid template. Your site is built to fit your story and your readers.</p></article>
      <article><span>✓</span><h3>Upfront, honest pricing</h3><p>You will know the cost before we start any work, with no hidden extras added later.</p></article>
      <article><span>✓</span><h3>Based here in Australia</h3><p>You can talk to us directly, in your own time zone, without waiting days for a reply.</p></article>
      <article><span>✓</span><h3>We treat your work with care</h3><p>Your books matter to you, and we treat every project that way, from the first draft of your homepage to the final launch.</p></article>
      <article><span>✓</span><h3>Simple, clear communication</h3><p>No confusing tech jargon. We explain things plainly, so you always know what is happening with your site.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's author website design in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Children’s Author Website Design Cost in Melbourne</h2>
      <p>Pricing depends on a few things, such as how many books you need listed, whether you need an online shop, how much illustration work needs a gallery, and whether you want extra pages like teacher resources or an events calendar.</p>
      <p>A simple site with a handful of book pages and a contact form will cost less than a larger site with an online store, multiple series, and a resource library for schools. Illustration-heavy portfolios and custom galleries can also add to the build time, since we take care to get the artwork to look its best.</p>
      <p>We will never ask you to commit to anything before you have a clear, upfront quote in front of you. Once we understand what you need, we tell you exactly what it will cost, so you can decide with confidence. If your budget is tight, tell us what you have in mind, and we can talk through what is realistic within it.</p>
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
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'audiobooks']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Build a Children’s Author Website Readers Will <em>Remember</em></h2>
      <p>Your books deserve a website that feels as warm and welcoming as the stories themselves. Purple Giraffe Press would love to help you build it, from your very first page to your next book launch.</p>
      <p>Get in touch with Purple Giraffe Press today, and let’s talk about what your new author website could look like.</p>
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

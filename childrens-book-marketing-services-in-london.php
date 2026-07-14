<?php
include 'includes/config.php';

$page_title       = 'Expert Children\'s Book Marketing Services in London';
$page_description = 'Promote your children\'s book with our expert marketing services in London. We craft creative campaigns to help authors connect with many more readers.';
$canonical_path   = 'childrens-book-marketing-services-in-london.php';
$breadcrumb_name  = 'Book Marketing in London';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'London',        'url' => page_url('locations/london.php')],
    ['name' => 'Book Marketing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in London?',
    'a' => 'No. While we are based in London and know the local market well, we work with authors from across the UK. London simply happens to be where many of our events and contacts are based.',
  ),
  1 =>
  array (
    'q' => 'How much does book marketing cost?',
    'a' => 'It depends on your book and your goals. We give a clear quote after our first chat, based on the size and length of the campaign you need.',
  ),
  2 =>
  array (
    'q' => 'Can you help with a book that has already been published?',
    'a' => 'Yes. Many authors come to us after their launch, especially if sales have slowed or they want a fresh push around a new season or event.',
  ),
  3 =>
  array (
    'q' => 'Do you guarantee my book will become a bestseller?',
    'a' => 'No honest marketing company can promise that. What we can promise is a proper, tailored effort to reach the right readers for your book.',
  ),
  4 =>
  array (
    'q' => 'Do you help with school visits and local events in London?',
    'a' => 'Yes, particularly for children\'s authors. We can help plan and promote school visits, library events and local bookshop appearances across London.',
  ),
  5 =>
  array (
    'q' => 'What if I am not sure which services I need?',
    'a' => 'That is completely normal. During your free chat, we will talk through your book and suggest what makes sense, rather than selling you services you do not need.',
  ),
  6 =>
  array (
    'q' => 'How long does a typical campaign last?',
    'a' => 'This varies. Some authors want a focused push around launch week, while others prefer ongoing support over several months. We can discuss what suits you best during your free initial chat, and there is never any pressure to sign up for longer than you actually need.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Book Marketing</div>
      <h1>London <em>Children&rsquo;s Book Marketing Services</em> Built To Connect Authors With <strong>Readers</strong></h1>
      <p class="lead">Writing a book is hard work. Getting people to actually read it can feel even harder. You have poured months, maybe years, into your story, and now it is sitting on a shelf or a Kindle page, waiting for someone to find it. That is where we come in.</p>
      <p class="lead">Purple Giraffe Press works with authors across London who want their books to reach real readers, not just sit quietly online. We offer book promotion and marketing services in London that are built around your book, your budget, and your goals. No jargon, no empty promises. Just clear, practical marketing that authors can understand and trust.</p>
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
      <p>We work with first-time authors, small publishers, and independent writers who want proper support without a huge agency price tag.</p>
      <p>Whether you have written a picture book for young children, a novel, or a self-published title on Kindle, we can help you plan a campaign that fits your book and your budget.</p>
      <p>If you are looking for book promotion services for authors in London who actually listen to what you need, you are in the right place. Read on to see how we work, what we offer, and how to get started.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Children's book marketing and promotion for London authors at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - MARKETING SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>How Our Children&rsquo;s Book Marketing Services Grow Your Audience in London</h2>
    <p style="margin:14px auto 0;">Book marketing means different things to different people. For us, it means giving your book the best possible chance of being noticed, bought, and enjoyed. We build a plan around your book rather than pushing the same package to everyone.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Children's Book Promotion Services in London</h3>
        <p>Children's books need a different kind of promotion. Parents, teachers, librarians, and grandparents all make buying decisions in different ways. We help you reach the right audience through school and library outreach, local events, social media aimed at parents, and review campaigns with book bloggers who cover children's titles. We also support authors doing school visits and local reading events, since these often lead to strong word of mouth in London communities.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Kindle Book Promotion Services in London</h3>
        <p>Self-published authors on Kindle face a crowded market. We help you improve your book's visibility through better keywords, category selection, cover feedback, and timed promotional pushes. We also help plan review requests and email campaigns that bring genuine readers to your Kindle page, rather than empty clicks that do not lead to sales.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Amazon Children's Book Promotion Services in London</h3>
        <p>Amazon is often the biggest sales channel for children's authors, so getting your listing right matters. We look at your book description, keywords, categories, and pricing, then build a short campaign to push traffic towards your Amazon page at the right moment, such as a launch week or a seasonal push around half term or Christmas.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="3" width="6" height="11" rx="3"></rect><path d="M5 11a7 7 0 0 0 14 0M12 18v3"></path></svg></div>
        <h3>Book Launch and Ongoing Campaigns</h3>
        <p>Not every book needs the same length of campaign. Some authors want a focused push around launch week. Others want steady, ongoing support over several months. We build both short bursts and longer campaigns, depending on what suits your book and your budget.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Online Book Promotion Services in London</h3>
        <p>Much of book marketing now happens online, but that does not mean it should be impersonal. We run social media promotion, blogger outreach, newsletter placements, and online advertising, always tailored to your genre and audience rather than a generic template.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE-SPECIFIC STRATEGIES (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age by age</p>
    <h2>Age-Specific Children&rsquo;s Book Marketing Strategies For Different Readers</h2>
    <p style="margin:14px auto 0;">Children&rsquo;s books are created for different age groups, and the marketing approach needs to match the readers, parents, and buying decisions behind each category. A picture book for toddlers requires a different promotional strategy compared to a middle-grade adventure story. We help authors identify the right audience and create marketing campaigns that connect with the families, educators, and communities most likely to engage with their books.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21c-4.5-3.6-8-6.4-8-10a4.6 4.6 0 0 1 8-3 4.6 4.6 0 0 1 8 3c0 3.6-3.5 6.4-8 10Z"></path></svg></div>
        <h3>Ages 0 to 5: Picture Books and Early Childhood Readers</h3>
        <p>For younger children, parents, grandparents, nurseries, and early learning communities often play the biggest role in discovering new books. Our marketing focuses on reaching these audiences through targeted promotions, parenting communities, book reviews, and opportunities that help your story gain visibility among families.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19V5a2 2 0 0 1 2-2h13v16H6a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h13"></path></svg></div>
        <h3>Ages 5 to 8: Early Readers and Growing Independent Readers</h3>
        <p>At this stage, children begin developing their own reading preferences, while parents and teachers still influence purchasing decisions. We help position your book through reader-focused campaigns, school outreach, educational connections, and promotional activities designed to encourage early reading habits.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8Z"></path></svg></div>
        <h3>Ages 8 to 12: Chapter Books and Middle Grade Audiences</h3>
        <p>Middle-grade readers often look for stronger characters, exciting stories, and themes they can relate to. Marketing strategies for this age group focus on reaching young readers through book communities, schools, libraries, online platforms, and campaigns that highlight the story&rsquo;s unique appeal.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="5"></circle><circle cx="12" cy="12" r="1.2"></circle></svg></div>
        <h3>Genre-Focused Marketing For Children&rsquo;s Books</h3>
        <p>Every children&rsquo;s book has its own audience, whether it is a rhyming picture book, educational story, activity book, fantasy adventure, or a bilingual title. We create marketing campaigns based on your book&rsquo;s format, themes, and ideal readers rather than using the same promotional approach for every children&rsquo;s author.</p>
      </article>
    </div>
  </div>
</section>

<!-- 6 - ADDITIONAL SUPPORT (feature cards) -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- extra support</p>
    <h2>Additional Book Marketing Support To Strengthen Your Author Brand</h2>
    <p style="margin:14px auto 0;">Marketing a book rarely stops at one single activity, so we also offer a few extra services that often sit alongside a promotion campaign.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11v2l14 5V6L3 11Zm14-1.5A3.5 3.5 0 0 1 17 16M7 13.5V18a1.5 1.5 0 0 0 3 0v-3.4"></path></svg></div>
        <h3>Press and Media Outreach</h3>
        <p>We can reach out to local London press, book blogs and podcasts on your behalf, putting together a short press release and pitching your story where it fits. Coverage is never guaranteed, but a well-written pitch to the right outlet gives your book a fair chance.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Author Website and Social Media Support</h3>
        <p>Many authors do not have time to manage a website or social media page on top of writing. We can help set up or tidy up your online presence, so readers who search for you find something professional and up to date.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Review Campaigns</h3>
        <p>Genuine reviews help readers trust a new book. We can help organise honest review requests through bloggers, reading groups, and advance copy schemes, always following the rules set by Amazon and other platforms.</p>
      </article>
    </div>
  </div>
</section>

<!-- 7 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Authors and publishers we help promote children's books across London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping London Authors And Publishers Achieve Their Children&rsquo;s Book Goals</h2>
      <p>Every author's situation is different, and we try to treat each one that way rather than fitting everyone into the same box. We work with a wide range of authors and publishers, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors publishing their first book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Children's authors and illustrators</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers based in London</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors with a backlist who want a fresh push</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Non-fiction writers, including memoir and how-to books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors preparing for a book launch event in London</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to ask</p>
      <h2>How To Choose The Right Children&rsquo;s Book Marketing Company In London</h2>
      <p>Before you hire anyone to promote your book, it helps to ask a few honest questions. This applies whether you work with us or another company.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask what results they can realistically promise. Nobody can guarantee a bestseller.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask how they report progress and how often you will hear from them.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask whether the campaign is tailored to your book or copied from a template.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask about total costs upfront, including any extras that might come later.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask for examples of the type of work they do, even if full case studies are not available.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask who will actually be doing the work on your account.</span></li>
      </ul>
      <p>A good marketing partner will answer these questions clearly, without overpromising.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Comparing children's book marketing companies in London" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHY MARKETING MATTERS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Book Marketing Matters For Author Success</h2>
  </div>
  <div class="container narrow center">
    <p>Many authors assume that a good book will simply find its readers. Sadly, that is rarely true. Thousands of books are published every week, and most struggle to get noticed without some form of promotion. A book can be beautifully written and still sell poorly, simply because the right readers never hear about it. That is not a reflection on the writing itself; it is usually a sign that nobody told the right audience it exists.</p>
    <p style="margin-top:14px;">London has a large and varied community of readers, book clubs, schools, and libraries, which gives authors here plenty of opportunity, provided they know how to reach them. A local event, a well-placed review, or a simple social media post shared by the right person can make a real difference to how a book performs.</p>
    <p style="margin-top:14px;">Here is what proper marketing can do for your book:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Helps your book appear in front of readers who are actually interested in your genre</li>
      <li>Builds early reviews, which matter a great deal for future sales</li>
      <li>Gives your launch a proper send-off instead of a quiet release</li>
      <li>Supports long-term sales, not just a short spike in the first week</li>
      <li>Helps you build a relationship with readers for future books</li>
    </ul>
  </div>
</section>

<!-- 10 - PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Children&rsquo;s Book Marketing Process From Strategy To Results</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>A Free Chat About Your Book</h3></div>
        <div class="svc-step-body"><p>We start with a simple conversation. Tell us about your book, your goals, and your budget. We will ask questions about your genre, your audience, and what you have already tried, then give you honest feedback on what is realistic for a book like yours.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>A Tailored Plan</h3></div>
        <div class="svc-step-body"><p>Based on that chat, we put together a plan that fits your book. This might include social media, blogger outreach, Amazon optimisation, local events, or a mix of everything. We explain why each part of the plan is there, so you understand what you are paying for and why it matters.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Get to Work</h3></div>
        <div class="svc-step-body"><p>Once you approve the plan, we begin the campaign. You will hear from us regularly so you always know what is happening and why. We do not disappear for weeks at a time and then send a vague update; you will get proper, plain English progress reports.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review and Adjust</h3></div>
        <div class="svc-step-body"><p>Marketing is rarely perfect the first time. We check what is working, adjust where needed, and keep you informed throughout. If something is not performing as hoped, we will tell you honestly and suggest a change of direction rather than continuing with something that is not working.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Ongoing Support</h3></div>
        <div class="svc-step-body"><p>Many authors continue working with us after the first campaign, especially around new releases, seasonal pushes, or backlist titles that need a fresh boost. There is no pressure to continue; some authors simply want a single launch push, and that is entirely fine with us.</p></div>
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
      <h2>Why Authors Choose <em>Purple Giraffe Press</em> For Children&rsquo;s Book Marketing</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children&rsquo;s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>&#10003;</span><h3>We are based in London and understand the local market</h3><p>From school visits to local bookshops and events, we know how London audiences engage with books.</p></article>
      <article><span>&#10003;</span><h3>We are honest about what marketing can and cannot do</h3><p>We will never promise a guaranteed bestseller, because nobody can deliver that truthfully.</p></article>
      <article><span>&#10003;</span><h3>We tailor every campaign</h3><p>Your book is not the same as the next author's book, so your plan should not be either.</p></article>
      <article><span>&#10003;</span><h3>We keep pricing clear</h3><p>You will always know what you are paying for before any work begins.</p></article>
      <article><span>&#10003;</span><h3>We work with authors directly, not just publishers</h3><p>Independent and self-published authors get the same level of care as larger clients.</p></article>
    </div>
  </div>
</section>

<!-- 13 - WHY WE ARE CONSIDERED ONE OF THE BEST -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our reputation</p>
    <h2>Why We Are Considered One of the Best Children&rsquo;s Book Marketing Services in London</h2>
  </div>
  <div class="container narrow center">
    <p>We do not claim to be the biggest agency in the city, and we are not interested in empty titles. What we offer is straightforward: real attention to your book, clear communication, and a genuine effort to connect your story with readers who will enjoy it. Many authors tell us they chose us because we took the time to understand their book properly, rather than treating it as just another project on a list.</p>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for children's book marketing in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Children&rsquo;s Book Marketing Cost In London?</h2>
      <p>The cost of book marketing in London varies depending on your book, target audience, marketing goals, and the level of support your campaign requires. Every author has different objectives, so we create personalized marketing strategies rather than offering the same approach for every project. Factors such as your genre, launch plans, online presence, and desired reach all influence the type of campaign that will work best for your book.</p>
      <p>Our services can include promotional strategy, reader outreach, social media support, review campaigns, online visibility improvements, and launch assistance. We take the time to understand your book and recommend the right marketing direction based on your goals. At Purple Giraffe Press, we believe in transparent communication and making sure every author understands what their campaign includes before moving forward.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 16 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Other Children's Book Services Available for London Writers</h2>
    <p style="padding-top:20px">What your project includes depends on your goals. We offer a full suite of professional services tailored to the specific needs of children’s literature.</p>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-publishing', 'custom-illustrations', 'ghostwriting', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 17 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 18 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready To Promote Your Book And <em>Reach More Readers?</em></h2>
      <p>If you have a book you are proud of and you want more readers to find it, we would love to hear from you. Get in touch for a free, no-pressure chat about your book and what we might be able to do together. There is no obligation, just an honest conversation about your options.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to market your children's book in London" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 19 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 20 - FOOTER -->
<?php include 'includes/footer.php'; ?>

<?php
include 'includes/config.php';

$page_title       = 'Sydney Marketing for Children\'s Book Authors';
$page_description = 'Get your children\'s book in front of the right readers with expert marketing services in Sydney. Tailored strategies that help authors grow reach.';
$canonical_path   = 'childrens-book-marketing-services-in-sydney.php';
$breadcrumb_name  = 'Book Marketing in Sydney';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'Sydney',        'url' => page_url('locations/sydney.php')],
    ['name' => 'Book Marketing','url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with children\'s authors in Sydney?',
    'a' => 'No. While we have particular experience with children\'s titles, we also work with adult fiction, nonfiction, memoir, and business authors across Sydney and beyond.',
  ),
  1 =>
  array (
    'q' => 'How long does a typical marketing campaign run for?',
    'a' => 'It depends on your goals. A launch campaign might run for four to eight weeks, while ongoing visibility work is often set up as an ongoing monthly arrangement. We will recommend a timeframe based on your book and budget.',
  ),
  2 =>
  array (
    'q' => 'Can you help if my book has already been out for a while?',
    'a' => 'Yes. A lot of our work is with authors relaunching an older title. It is never too late to build a fresh promotional push around a book that never got the attention it deserved.',
  ),
  3 =>
  array (
    'q' => 'Do you guarantee a certain number of book sales?',
    'a' => 'No, and you should be wary of anyone who does. What we guarantee is honest, consistent work aimed at getting your book in front of more readers.',
  ),
  4 =>
  array (
    'q' => 'Is Purple Giraffe Press based in Sydney, or do you work remotely too?',
    'a' => 'We are based in Sydney and work with local authors directly, but we also support authors from other parts of Australia through phone and video calls.',
  ),
  5 =>
  array (
    'q' => 'What is the difference between your children\'s book promotion and your general author marketing?',
    'a' => 'Children\'s book marketing focuses heavily on schools, parents, teachers, and libraries, as well as picture-book-specific platforms. General author marketing for adult titles leans more on reader communities, book bloggers, and online retailer optimisation.',
  ),
  6 =>
  array (
    'q' => 'How do I get started?',
    'a' => 'Reach out through our contact page with a short description of your book and what you are hoping to achieve. We will set up a time to chat and go from there.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Book Marketing</div>
      <h1>Get Your Story into the Right Hands, <em>Sydney Children's Book</em> <strong>Marketing Service</strong></h1>
      <p class="lead">Writing the book is the hard part. Getting people to actually find it and read it is a different job altogether, and it is one that most authors were never taught how to do. That is where we come in.</p>
      <p class="lead">Purple Giraffe Press works with authors, self-publishers, and small publishing teams across Sydney to build a clear, honest plan for getting a book in front of the right readers. We do not promise overnight bestseller status, because nobody honestly can. What we do promise is steady, well-planned work that gives your book a real chance.</p>
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
      <p>Whether you have just published your first picture book, you are relaunching a backlist title, or you need help getting a new release noticed on Amazon, we can help. Our team offers book promotion and marketing services in Sydney that are built around your book, your budget, and your goals, not a one-size-fits-all package.</p>
      <p>If you have been searching for the best book promotion services in Sydney and feeling a bit lost with all the options out there, you are not alone. Below, we have laid out exactly what we do, how it works, and what you can expect from working with us.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Children's book marketing for Sydney authors at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT THE WORK INVOLVES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>How We Build Visibility Around Your Book in Sydney</h2>
    <p style="margin:14px auto 0;">Book marketing is not one task. It is a collection of smaller jobs that all work together. Depending on your book and your goals, our work might include some or all of the following.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Getting Your Book Ready for Readers</h3>
        <div class="fc-body">
          <p>Before any promotion starts, we check that your book listing, cover, and description are pulling their weight. A lot of authors spend money on ads while their book page is quietly turning readers away. We fix this first.</p>
          <p>This step often gets skipped by other agencies because it is not glamorous, but it matters more than almost anything else. A confusing blurb, a cover that does not suit the genre, or a weak sample chapter will undo even the best promotional campaign. We look at your listing the way a stranger would, with no attachment to the writing, and flag anything that might be quietly costing you sales.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Children's Book Promotion</h3>
        <div class="fc-body">
          <p>We offer dedicated children's book promotion services in Sydney, built for picture books, junior fiction, and early readers. This includes reaching out to parents, teachers, school librarians, and local family groups who are always on the hunt for new titles to share with kids. Children's books need a different approach from adult fiction or nonfiction, and we treat them that way.</p>
          <p>Picture books, in particular, live or die by word of mouth among parents and by whether teachers and school librarians pick them up. We spend time identifying the local schools, playgroups, and family-focused social pages that are genuinely likely to welcome your book, rather than sending generic pitches to a huge, uninterested list. It is slower work, but it tends to produce far better results than mass outreach.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Kindle and E-book Promotion</h3>
        <div class="fc-body">
          <p>If your book is on Kindle Direct Publishing, we run Kindle book promotion services in Sydney that are aimed at improving your visibility inside the Kindle store itself. This can include timed promotional pricing, review outreach, and category positioning so your book sits in front of the right readers when they are browsing.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Amazon Listing and Sales Support</h3>
        <div class="fc-body">
          <p>Amazon has its own rules, and getting a listing right takes more than uploading a file. We provide Amazon children's book promotion services in Sydney that cover keyword research for your book listing, category selection, and building the kind of listing that converts a browser into a buyer. We also keep an eye on how your listing compares to similar titles in your category, so you are not guessing at what a strong page in your genre actually looks like.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Author and Book Launch Campaigns</h3>
        <div class="fc-body">
          <p>For authors with a new release coming up, we build a launch plan that starts weeks before the book goes live and continues after. This is one of our core book promotion services for authors in Sydney, and it usually gets the strongest results because timing matters so much in publishing. A launch that is planned properly, with reviews, listings, and outreach lined up before the release date, almost always outperforms a scattered effort that only kicks off after the book is already live.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Online Visibility and Content</h3>
        <div class="fc-body">
          <p>We also run online book promotion services in Sydney covering social media content, author website support, blog outreach, and email newsletters. Readers today discover books in dozens of small ways, and we try to cover as many of those paths as your budget allows.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this needs to happen all at once. Some authors want a small, focused push around a single platform, while others want an ongoing presence across several channels. We build the mix around what you can realistically keep up with, because a burst of activity followed by silence tends to do more harm than good.</p>
  </div>
</section>

<!-- 5 - MARKETING BY READER AGE (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Book Promotion Strategies Built Around Every Reader's Age</h2>
    <p style="margin:14px auto 0;">Marketing a book successfully starts with understanding who the readers are. A picture book for toddlers needs a completely different promotional approach than a middle-grade adventure novel or a young adult title. We build every campaign around the age group your book is written for, helping it reach the people most likely to buy, recommend, and share it.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 0–3: Marketing Board Books and Early Learning Titles</h3>
        <div class="fc-body">
          <p>Books for babies and toddlers are usually purchased by parents, grandparents, and caregivers rather than the readers themselves. Our marketing focuses on parenting communities, family groups, childcare networks, and early learning audiences. The goal is to put your book in front of the adults making purchasing decisions for young children.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 3–5: Promoting Picture Books to Families and Educators</h3>
        <div class="fc-body">
          <p>Picture books perform best when they reach parents, teachers, librarians, and preschool educators. We focus on family-focused communities, school networks, and reading groups that actively look for new books to share with young children. This helps build awareness where recommendations carry the most influence.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 6–8: Reaching Early Readers and Growing Book Confidence</h3>
        <div class="fc-body">
          <p>Early reader books benefit from visibility within schools, libraries, and educational communities. Our campaigns focus on helping parents and educators discover books that encourage independent reading while remaining entertaining and age-appropriate. This audience responds well to trusted recommendations and educational value.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Ages 8–12: Marketing Middle Grade Books to Active Young Readers</h3>
        <div class="fc-body">
          <p>Middle-grade readers often develop strong interests in specific genres such as fantasy, mystery, adventure, and humour. We position books in front of reader communities, schools, libraries, and family audiences that actively search for engaging stories. The focus is on creating excitement and encouraging word-of-mouth recommendations.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Young Adult and Family Audience Book Marketing</h3>
        <div class="fc-body">
          <p>Young adult books require a broader marketing strategy that reaches both teenage readers and purchasing adults. We combine social media visibility, online reader communities, influencer outreach, and targeted promotional activity to help your book connect with the audience most likely to engage with it.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Sydney authors and small publishers the Purple Giraffe Press team markets for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping Sydney Authors at Every Stage of Their Journey</h2>
      <p>We work with a wide range of writers and small publishers, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors releasing their first or fifth book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishing houses</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Children's authors and illustrators</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Nonfiction writers, including memoir and business books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors relaunching an older title that never quite found its readers</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Local Sydney writing groups looking for shared marketing advice</span></li>
      </ul>
      <p>If you write it, we can usually help you get it out there. If we ever think a project is outside what we do well, we will tell you honestly rather than take your money for a job we cannot do properly.</p>
      <p>We also work with a fair number of first-time authors who have never done any marketing before and are not sure where to start. If that sounds like you, that is completely normal. Most authors are writers first, not marketers, and part of our job is explaining things in plain terms rather than assuming you already know the industry jargon.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose Sydney Book Marketing Support Without Costly Mistakes</h2>
      <p>The book marketing industry has its share of operators who promise big numbers and deliver very little. Before you hire anyone, including us, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they explain exactly what tasks they will do for your money, in plain language?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they guarantee sales figures or bestseller rankings? If so, be cautious, because nobody can honestly promise that.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they show you real examples of past work, not just testimonials?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand your genre, especially if you are writing for children?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are their prices based on the actual work involved, or a vague flat fee for "marketing"?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you get a single point of contact, or will you be passed between different people each time?</span></li>
      </ul>
      <p>A good service will answer these questions without getting defensive. If a company dodges specifics, that is worth noticing.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Choosing a book marketing partner in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY MARKETING MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Strong Book Marketing Gives Great Stories Better Chances</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of authors assume that a good book will find its readers on its own. In reality, thousands of new titles are published every week, and even a genuinely excellent book can disappear without a plan behind it.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Readers cannot buy a book they have never heard of, no matter how good it is</li>
      <li>Algorithms on Amazon and other stores favour books that already have activity, so early momentum matters</li>
      <li>Reviews and word of mouth rarely happen by accident; they need a nudge</li>
      <li>A clear plan saves you money compared to random, one-off promotional spending</li>
      <li>Local Sydney connections, like schools, libraries, and bookshops, respond better to a coordinated approach than scattered emails</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this guarantees a bestseller. It simply gives your book a fair shot, which is more than most books ever get.</p>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How Our Sydney Book Marketing Process Builds Lasting Visibility</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step One: A Straightforward Chat</h3></div>
        <div class="svc-step-body"><p>We start with a conversation about your book, your goals, and your budget. There is no pressure and no obligation. We just want to understand what you are trying to achieve.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step Two: A Plan Built Around Your Book</h3></div>
        <div class="svc-step-body"><p>Based on that chat, we put together a plan that suits your book and your budget. This might be a small, focused campaign around a launch date, or an ongoing monthly arrangement. We explain exactly what is included before you commit to anything.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step Three: The Work Begins</h3></div>
        <div class="svc-step-body"><p>Once you approve the plan, our team gets started. Depending on what we agreed, this could involve outreach, content creation, listing improvements, or a mix of everything above.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step Four: Regular Updates</h3></div>
        <div class="svc-step-body"><p>You will hear from us regularly with plain updates on what has been done and what is coming next. We do not disappear for a month and send a vague report at the end.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step Five: Review and Adjust</h3></div>
        <div class="svc-step-body"><p>Marketing is not a set-and-forget job. We check in on what is working, adjust what is not, and keep refining the approach as your book's campaign progresses.</p></div>
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
      <h2>Why Sydney Authors Trust Us With Their <em>Book Marketing</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We are honest about outcomes.</h3><p>We will never promise you a bestseller ranking or a specific number of sales, because nobody can guarantee that.</p></article>
      <article><span>✓</span><h3>We know children's publishing.</h3><p>Picture books and junior fiction need a different marketing approach to adult titles, and we treat them that way rather than using a generic template.</p></article>
      <article><span>✓</span><h3>You get straightforward pricing.</h3><p>No vague packages. You will know exactly what you are paying for before you commit.</p></article>
      <article><span>✓</span><h3>We are based here.</h3><p>Working with a Sydney-based team means we understand the local schools, bookshops, and writing community and can build genuine local connections for your book.</p></article>
      <article><span>✓</span><h3>One point of contact.</h3><p>You will not be shuffled between different staff members every time you have a question.</p></article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>We also offer affordable children's book promotion services in Sydney for authors working with a tighter budget, because we believe good marketing advice should not be locked behind an expensive package. We will always tell you which options give you the best return for your money, even if that means recommending a smaller plan than you originally asked for.</p>
    <p style="margin-top:14px;">We know that many authors are covering these costs out of their own pocket, often alongside a day job. That is part of why we would rather run a smaller, well-targeted campaign that actually fits your budget than push you towards a bigger package you will regret paying for.</p>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for book marketing in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Understanding the Cost of Book Marketing Services in Sydney</h2>
      <p>Every book is different, so we do not publish flat rate packages. Pricing depends on things like how much work your listing already needs, how many platforms we are promoting across, and how long the campaign runs. After our first chat, we will give you a clear quote with no hidden extras, and you can decide from there whether it is the right fit.</p>
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
$location_services_heading = 'Complete Support for Sydney Children’s Book Creators';
$location_services_intro   = 'We built our service list around the real gaps that stop authors from finishing and launching their books. Here is what falls under our roof.';
$location_services_section = 'section figma-cream';
include 'includes/location-services.php';
?>

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Put Your Book in <em>Front of Readers?</em></h2>
      <p>If you have a book that deserves more readers than it is currently getting, get in touch with Purple Giraffe Press. Tell us about your book, and we will talk you through what a realistic marketing plan could look like, with honest advice about what is worth spending on and what is not.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to market your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 18 - FOOTER -->
<?php include 'includes/footer.php'; ?>

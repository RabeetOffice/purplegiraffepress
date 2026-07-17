<?php
include 'includes/config.php';

$page_title       = 'Dublin Book Marketing Services for Authors';
$page_description = 'Get your book in front of the right readers with expert book marketing in Dublin. Tailored strategies that help authors grow their audience and sales.';
$canonical_path   = 'book-marketing-services-in-dublin.php';
$breadcrumb_name  = 'Book Marketing in Dublin';
$breadcrumbs = [
    ['name' => 'Home',           'url' => page_url('index.php')],
    ['name' => 'Locations',      'url' => page_url('locations/')],
    ['name' => 'Dublin',         'url' => page_url('locations/dublin.php')],
    ['name' => 'Book Marketing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Dublin?',
    'a' => 'No. Most of our clients are Dublin-based, but we work with authors right across Ireland and abroad too, including a number based in London.',
  ),
  1 =>
  array (
    'q' => 'Can you help if my book has already been out for a year or more?',
    'a' => 'Yes. A relaunch campaign can bring real attention back to a backlist title, especially around a seasonal tie-in or a new edition.',
  ),
  2 =>
  array (
    'q' => 'Do you offer book promotion services in London as well as Dublin?',
    'a' => 'Yes. While our roots are in Dublin, we also support authors in London who want the same honest, planned approach to marketing their book.',
  ),
  3 =>
  array (
    'q' => 'How long does a typical campaign take?',
    'a' => 'It depends on your goals, but most campaigns run somewhere between four and twelve weeks. We\'ll agree on a timeline together before starting.',
  ),
  4 =>
  array (
    'q' => 'Will you guarantee a certain number of sales?',
    'a' => 'No, and we\'d be wary of anyone who does. We can guarantee the work will be done properly and reported honestly, not a specific sales number.',
  ),
  5 =>
  array (
    'q' => 'Do I need to have a big marketing budget to start?',
    'a' => 'No. We work with authors on a range of budgets and will always suggest the plan that makes the most sense for what you have to spend.',
  ),
  6 =>
  array (
    'q' => 'What if I\'m not sure which service I need?',
    'a' => 'That\'s completely normal. Get in touch, tell us about your book and your goals, and we\'ll suggest the right starting point, whether that\'s Dublin or London-based.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). streetAddress is left out
   until we have a Dublin address; D01 is the city-centre postal district. */
$location_business = [
    'locality'   => 'Dublin',
    'region'     => 'Dublin',
    'postalCode' => 'D01',
    'country'    => 'IE',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Book Marketing</div>
      <h1>Book Marketing Services in <em>Dublin</em> for Authors Ready to Reach <strong>Real Readers</strong></h1>
      <p class="lead">Writing a book is hard work. Getting people to actually find it and read it is a different job altogether. That's where we come in.</p>
      <p class="lead">Purple Giraffe Press runs a book marketing service in Dublin built for authors who want real results, not just a fancy report at the end of the month. We work with picture book authors, chapter book writers, and anyone publishing for young readers who want their book to reach the right homes, schools, and libraries.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Campaign</a>
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
      <h2>Most books don't fail because they're bad</h2>
      <p>If you've published a book and it's sitting quietly on Amazon with barely any sales, you're not alone. Most books don't fail because they're bad. They fail because nobody knows they exist. Our children's book promotion services in Dublin are built to fix exactly that problem, with a plan that fits your budget and your goals.</p>
      <p>Whether you're self-published or working with a small press, we'll sit down with you, look at what you've got, and build a plan that actually makes sense for your book and your readers.</p>
      <p>Marketing a book isn't about shouting the loudest. It's about finding the right readers and putting your book in front of them at the right time, in the right place. That might mean a school visit, a well-timed Kindle promotion, a handful of genuine reviews, or a mix of all three.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Campaign &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Book marketing services in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT OUR SERVICES INCLUDE (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>What Our Dublin Children’s Book Marketing Services Include for Authors</h2>
    <p style="margin:14px auto 0;">We don't believe in one-size-fits-all packages. Every book is different, and every author has different goals. Some want more Amazon sales. Some want reviews. Some just want their local schools to know the book exists. Here's how we break our book promotion and marketing services in Dublin down into pieces that make sense.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Kindle Book Promotion Services in Dublin</h3>
        <div class="fc-body">
          <p>If your book is on Kindle, we help you get it seen. This includes setting up and running Kindle countdown deals, working on your book description and keywords so browsers can actually find it, and building a short promotional push around launch week or a relaunch. We also look at your categories on Amazon, since a lot of authors pick the wrong ones without knowing it, and this alone can quietly kill your visibility.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 6h15l-1.5 9h-12Z"></path><path d="M6 6 5 3H3"></path><circle cx="9" cy="19" r="1.4"></circle><circle cx="17" cy="19" r="1.4"></circle></svg></div>
        <h3>Amazon Children's Book Promotion Services in Dublin</h3>
        <div class="fc-body">
          <p>Amazon is where most parents and gift buyers go looking for a new book for their kids. This side of the work covers your product listing, your keywords, your pricing strategy around launches, and getting your book in front of reviewers who read and review children's books regularly. We also help with A+ content and cover thumbnail testing, since small changes here can make a real difference to click-through rates.</p>
          <p>A lot of authors set up their Amazon page once, at launch, and never look at it again. That's a missed chance. Your book description, your categories, and your keywords can all be improved months or years after publication, and doing so often brings a fresh bump in visibility without spending a cent on adverts. We take the time to go through your existing page line by line before suggesting any changes, so nothing gets altered without a good reason.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Social Media and Website Support</h3>
        <div class="fc-body">
          <p>Not every author wants to be glued to Instagram, and that's fine. We can run a simple, honest social media plan that fits around your schedule, or help you set up a basic author website that actually converts visitors into buyers. This includes newsletter sign-up forms, a clean bio page, and links that make sense for readers, teachers, and booksellers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3.5l2.5 5.2 5.7.8-4.1 4 1 5.6-5.1-2.7-5.1 2.7 1-5.6-4.1-4 5.7-.8Z"></path></svg></div>
        <h3>Reviews and Word of Mouth</h3>
        <div class="fc-body">
          <p>Reviews still matter more than almost anything else for a children's book. We help you build a small, genuine list of reviewers, bloggers, and bookstagrammers who cover your genre, and we send out review copies in a way that respects everyone's time. We never pay for fake reviews or use bots. It's not honest, and it usually backfires anyway.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"></rect><path d="m3 7 9 6 9-6"></path></svg></div>
        <h3>Email and Newsletter Marketing</h3>
        <div class="fc-body">
          <p>A newsletter list is one of the few things in publishing you actually own outright. Algorithms change, but an email list stays yours. We help you set up a simple newsletter, write a welcome sequence for new subscribers, and plan out launch emails that don't feel pushy or salesy. If you already have a list but haven't used it in a while, we can help you bring it back to life gently, rather than blasting old subscribers with a wall of promotion all at once.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11v2a1 1 0 0 0 1 1h3l5 4V6L7 10H4a1 1 0 0 0-1 1Z"></path><path d="M17 9a4 4 0 0 1 0 6"></path></svg></div>
        <h3>Local Press and Community Outreach</h3>
        <div class="fc-body">
          <p>Dublin has a strong network of local papers, parenting blogs, community radio, and school newsletters, and children's authors often overlook this route in favour of chasing big national coverage. We help you put together a short, honest pitch and send it to outlets that are actually likely to cover a local author, rather than firing the same generic press release at everyone and hoping something sticks.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 21V8l7-5 7 5v13"></path><path d="M9 21v-6h6v6"></path></svg></div>
        <h3>Launch and Relaunch Campaigns</h3>
        <div class="fc-body">
          <p>If you're about to publish, or you've got a book that's been out a while but never really took off, we can build a proper launch or relaunch plan. This covers timing, pre-orders, press outreach to local Dublin papers and parenting blogs, and a short burst of promotion designed to give your book its best shot.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Marketing Strategies For Different Children’s Age Groups</h2>
    <p style="margin:14px auto 0;">Every children's book reaches its audience differently. The marketing approach depends on the age of the readers, where parents and teachers discover books, and what helps each group connect with your story.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Baby And Toddler Books (Ages 0–3)</h3>
        <div class="fc-body">
          <p>Marketing focuses on reaching parents, carers, and early learning communities through parenting platforms, local groups, and family-focused promotions.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Books (Ages 3–7)</h3>
        <div class="fc-body">
          <p>Promotion often highlights illustrations, storytelling, and educational value to connect with parents, teachers, libraries, and young readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Early Readers And Chapter Books (Ages 5–10)</h3>
        <div class="fc-body">
          <p>Marketing focuses on reading development, school audiences, book reviewers, and families looking for engaging independent reading choices.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M7 4v16M17 4v16M3 12h18"></path></svg></div>
        <h3>Middle Grade Books (Ages 8–12)</h3>
        <div class="fc-body">
          <p>Campaigns can include stronger character-focused content, social media promotion, school outreach, and communities where older children discover new stories.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Understanding your target age group helps us create a marketing plan that places your book in front of the readers, parents, and educators most likely to connect with it.</p>
  </div>
</section>

<!-- 6 - WHO BENEFITS: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin authors, illustrators, and small publishers we market children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Benefits Most from Our Dublin Children’s Book Marketing Services</h2>
      <p>Our book promotion services for authors in Dublin work well for:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors who've just published and don't know where to start</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Experienced authors with a backlist that needs a fresh push</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers who need extra marketing hands without hiring full-time staff</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators and author-illustrators promoting picture books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents or teachers who've written a book for their local community and want it read more widely</span></li>
      </ul>
      <p>We also offer affordable children's book promotion services in Dublin for authors working with a tighter budget. You don't need a huge marketing spend to get real, honest results. Sometimes a focused three-week push does more than a scattered six-month plan.</p>
      <p>We've noticed that authors often wait far too long before asking for help, usually because they assume marketing support is only for big names with big budgets. That's simply not true. A short, well-planned campaign built around a modest budget can still bring a book to the attention of the reviewers, teachers, and parents who matter most for that particular title.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Trusted Children’s Book Marketing Agency in Dublin</h2>
      <p>Book marketing has grown into a busy little industry, and not everyone in it is straight with authors. There are a lot of people out there promising "guaranteed bestseller" status. That's not how publishing works, and any honest agency will tell you so. Before you hire anyone, whether it's us or somebody else, ask them these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do you promise specific sales numbers? (If yes, be careful. Nobody can guarantee this.)</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you show me exactly what work you're doing each week or month?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do you buy reviews, or do you only work with genuine reviewers?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can I see examples of real campaigns you've run, even without names attached?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if the first plan doesn't work? Is there a review point built in?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are your prices based on my actual book and goals, or a flat package regardless of size?</span></li>
      </ul>
      <p>If an agency dodges these questions, that's usually a sign to look elsewhere. A good marketing partner should be happy to explain their thinking, not hide behind vague talk of "algorithms" and "strategy" without ever telling you what they're actually doing with your time and money.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a trusted children's book marketing agency in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY IT MATTERS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Children’s Book Marketing Matters for Every Published Author</h2>
  </div>
  <div class="container narrow center">
    <p>Some authors feel a bit odd about marketing their own book, like it's boastful or unnecessary. It isn't. Writing the book is only half the job. Here's why the other half matters just as much:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>A good book with no marketing behind it often gets buried under thousands of new releases every week</li>
      <li>Parents, teachers, and librarians can only buy books they've actually heard of</li>
      <li>Reviews and word of mouth build trust with buyers who don't know your name yet</li>
      <li>A steady, well-planned push can turn a quiet release into a book that keeps selling for years</li>
      <li>Marketing done properly protects your time, so you can get back to writing the next one</li>
    </ul>
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

<!-- 10 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How Our Dublin Children’s Book Marketing Process Works Step by Step</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>A Chat About Your Book</h3></div>
        <div class="svc-step-body"><p>We start with a simple conversation, either by phone, video call, or email. We want to know your goals, your budget, what you've already tried, and what hasn't worked so far. There's no pressure and no sales pitch at this stage, just a proper chat about your book.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>A Plan Built Around Your Book</h3></div>
        <div class="svc-step-body"><p>Based on that conversation, we put together a plan with clear steps, realistic timelines, and honest expectations. No vague promises, just a straightforward outline of what we'll do, when we'll do it, and roughly what it will cost. You'll get the chance to ask questions and change anything before we begin.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Get to Work</h3></div>
        <div class="svc-step-body"><p>Once you're happy with the plan, we start running it. Depending on what's agreed, this might mean setting up Kindle promotions, reaching out to reviewers, tidying up your Amazon listing, or building a launch week schedule. You'll get regular updates so you always know what's happening and why, rather than waiting weeks to hear anything.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review and Adjust</h3></div>
        <div class="svc-step-body"><p>Marketing isn't a set-and-forget job. After the first stretch of work, we sit down again, look at what's working, and adjust anything that needs a change. If something isn't landing the way we hoped, we'll say so honestly and suggest a different approach rather than quietly repeating the same thing.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Choose <em>Purple Giraffe Press</em> for Children’s Book Marketing</h2>
      <p>If you're searching for the best book promotion services in Dublin, the real answer is usually the one that's honest with you from the first phone call, not the one with the flashiest website.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Local Dublin knowledge</h3><p>We understand the Irish book market, local schools, bookshops, and press, which helps your book connect with readers close to home as well as further afield.</p></article>
      <article><span>✓</span><h3>Honest reporting</h3><p>You'll always know exactly what work has been done and what results it brought, good or bad.</p></article>
      <article><span>✓</span><h3>No fake promises</h3><p>We won't tell you your book will hit any bestseller list. We will tell you the truth about what's realistic.</p></article>
      <article><span>✓</span><h3>Flexible plans</h3><p>Whether you need a small push around Kindle keywords or a full launch campaign, we scale the work to fit your book and your budget.</p></article>
      <article><span>✓</span><h3>Publishing background</h3><p>As a children's publishing house ourselves, we understand this market from the inside, not just from a marketing textbook.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's book marketing in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does a Dublin Children’s Book Marketing Service Cost?</h2>
      <p>The cost of book marketing depends on your goals, the current position of your book, and the level of support your campaign requires. A focused Amazon listing review will naturally involve different work from a complete launch campaign covering social media, reviewer outreach, email marketing, and local press. We assess your book, audience, and budget before recommending any services, so you are never charged for work that does not support your goals. Every proposal clearly explains what is included, how long the campaign will run, and what results will be measured. This gives you a practical marketing plan built around your book rather than a generic package.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 14 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Put Your Book in Front of <em>Readers?</em></h2>
      <p>Your book deserves more than a quiet spot on page ten of an Amazon search. Get in touch with Purple Giraffe Press today, tell us about your book, and let's build a marketing plan that actually gets it in front of readers.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to market your children's book in Dublin" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 18 - FOOTER -->
<?php include 'includes/footer.php'; ?>

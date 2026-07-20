<?php
/* Location service page: Queensland -> Book Marketing. Layout mirrors the
   other city service pages (see childrens-book-editing-services-in-melbourne.php). */
include 'includes/config.php';

$page_title       = 'Grow Your Readership with Queensland Book Marketing';
$page_description = 'Get your book in front of the right readers with expert marketing services in Queensland. Tailored strategies that help authors grow their audience.';
$canonical_path   = 'childrens-book-marketing-services-in-queensland.php';
$breadcrumb_name  = 'Book Marketing in Queensland';
$breadcrumbs = [
    ['name' => 'Home',         'url' => page_url('index.php')],
    ['name' => 'Locations',    'url' => page_url('locations/')],
    ['name' => 'Queensland',   'url' => page_url('locations/queensland.php')],
    ['name' => 'Book Marketing','url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Queensland?',
    'a' => 'Most of our clients are based in Queensland, but we also work with authors elsewhere in Australia. Being Queensland-based means we have strong local connections with bookshops, libraries and media contacts across the state, which is useful even if you are not local yourself.',
  ),
  1 =>
  array (
    'q' => 'Can you help with a children\'s picture book specifically?',
    'a' => 'Yes. Picture books need a different marketing approach from adult fiction, since parents, teachers, and librarians are usually the ones making the buying decision. We build campaigns with that in mind.',
  ),
  2 =>
  array (
    'q' => 'Do you work with authors in Brisbane and the Gold Coast, or just regional areas?',
    'a' => 'We work with authors right across Queensland, from Brisbane and the Gold Coast through to regional towns and smaller communities. Location does not limit what we can do for your book.',
  ),
  3 =>
  array (
    'q' => 'How long does a book marketing campaign usually run for?',
    'a' => 'It depends on your goals and budget. Some authors run a short, focused campaign around a launch, while others prefer an ongoing arrangement that builds over several months. We will talk through what suits your book during our first chat.',
  ),
  4 =>
  array (
    'q' => 'Do you guarantee a certain number of book sales?',
    'a' => 'No, and we would be cautious of anyone who does. What we can guarantee is honest work, clear communication, and a plan based on what genuinely helps books sell, rather than empty promises.',
  ),
  5 =>
  array (
    'q' => 'I am a first-time author and have no idea where to start. Can you still help?',
    'a' => 'Yes, this is one of the most common situations we see. Our first chat is designed to work out where you are starting from and what makes sense as a next step, whether you have already published or are still getting ready to.',
  ),
  6 =>
  array (
    'q' => 'Do you help with both print books and ebooks?',
    'a' => 'Yes. We work with authors publishing in print, through Kindle, or both. Your plan will reflect whichever format, or combination of formats, applies to your book.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Book Marketing</div>
      <h1>Reach Real Readers Who Are Ready to Buy, <em>Queensland Children’s Book Marketing</em> <strong>Services</strong></h1>
      <p class="lead">Writing a book is hard work. Getting people to actually read it is a different job altogether. Many Queensland authors finish a great book, publish it, and then watch it sit quietly on a shelf or a Kindle store page with barely any sales.</p>
      <p class="lead">That is where we come in. Purple Giraffe Press runs a book promotion and marketing service in Queensland built around real authors and real books, not a one-size-fits-all template that gets sent out to everyone on a list.</p>
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
      <p>Whether you have written a picture book for young kids, a junior fiction series, or a self-published novel for adults, we help you find the readers who will actually enjoy it. We work with writers across Brisbane, the Gold Coast, Sunshine Coast, Toowoomba, Cairns, Townsville and smaller regional towns right across the state.</p>
      <p>If you are after book promotion services for authors in Queensland that treat your book like it matters, and not just another job on a list, you have found the right team.</p>
      <p>We are honest about what marketing can and cannot do. No agency can turn a book into a bestseller overnight, and anyone who tells you otherwise is not being straight with you. What we can do is make sure your book is easier to find, easier to buy, and put in front of people who are actually looking for something like it.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Children's book marketing and promotion for Queensland authors at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT THE MARKETING PLAN CAN INCLUDE (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Complete Book Marketing Support Built Around Your Marketing Goals</h2>
    <p style="margin:14px auto 0;">We do not offer a single package that gets stretched to fit every author. Instead, we build a plan around your book, your budget, and your goals. Here is what that can include.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Getting Your Kids' Book Noticed</h3>
        <div class="fc-body">
          <p>Picture books and junior fiction need a different approach from adult novels. Parents, teachers, and librarians are the ones deciding what gets read, so the marketing has to speak to them too. Our affordable children's book promotion services in Queensland cover things like school holiday campaigns, library and bookshop outreach, parent-focused social media content, and simple review requests aimed at the right audience.</p>
          <p>We also look at practical things many authors miss, such as whether your book description reads well to a parent skimming on a phone, whether your cover works as a tiny thumbnail, and whether teachers or librarians would have an easy way to find out about it. Small details like these often make a bigger difference than a big spend on ads.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Kindle And Ebook Promotion</h3>
        <div class="fc-body">
          <p>Self-publishing through Kindle Direct Publishing opens up a huge market, but only if readers can find your book. We run Kindle book promotion services in Queensland for authors who publish digitally, covering things like listing optimisation, review campaigns, pricing strategy around promotional days, and simple ad testing so you are not guessing where your budget goes.</p>
          <p>We also help with the smaller things that get overlooked, such as making sure your author page is filled out properly, your series is linked together correctly, and your book description is easy to read rather than stuffed with buzzwords. These small fixes often cost nothing but make a real difference to how a browsing reader sees your book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Amazon Listings For Children's Authors</h3>
        <div class="fc-body">
          <p>Amazon works differently for kids' books than it does for adult fiction. Categories, keywords in your book description, and the way your cover looks as a small thumbnail all matter more than people realise. We run Amazon children's book promotion services in Queensland that focus on getting your book in front of parents who are actually browsing for something to read to their kids.</p>
          <p>This can include checking your book sits in the right age category, making sure the blurb speaks to a parent rather than a child, and testing whether your cover stands out among similar titles. We also keep an eye on reviews, since a handful of thoughtful reviews from real readers can matter more for a children's book than for most other genres.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Getting Found Online</h3>
        <div class="fc-body">
          <p>A book needs a home online, somewhere readers can learn more, sign up for updates, or find links to buy. We offer online book promotion services in Queensland that include author website support, newsletter setup, social media content planning, and simple blogger or podcast outreach where it suits your genre.</p>
          <p>None of this needs to be complicated. For many authors, a simple, well-kept website with a mailing list and a handful of active social accounts does more work than a dozen scattered profiles that never get updated. We help you work out what is actually worth your time.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11v2l14 5V6L3 11Zm14-1.5A3.5 3.5 0 0 1 17 16M7 13.5V18a1.5 1.5 0 0 0 3 0v-3.4"></path></svg></div>
        <h3>Local Queensland Reach</h3>
        <div class="fc-body">
          <p>We also work on the ground here in Queensland. That can mean pitching your book to local newspapers and radio, connecting with independent bookshops, or helping you get a spot at a school visit, writers' festival, or local market stall.</p>
          <p>Local coverage carries real weight, especially for children's books. A mention in a regional newspaper or a spot at a school book fair can introduce your book to exactly the readers who are likely to pick it up, in a way that a broad online ad often cannot match.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE-SPECIFIC STRATEGIES (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age by age</p>
    <h2>Targeted Book Marketing Strategies for Every Reader Age Group</h2>
    <p style="margin:14px auto 0;">Every age group discovers and chooses books differently. A campaign that works for a picture book will not necessarily work for middle-grade, young adult, or adult titles. We tailor each Queensland book marketing plan around the readers, parents, teachers, librarians, and communities most likely to connect with your book.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21c-4.5-3.6-8-6.4-8-10a4.6 4.6 0 0 1 8-3 4.6 4.6 0 0 1 8 3c0 3.6-3.5 6.4-8 10Z"></path></svg></div>
        <h3>Board Books and Picture Books for Ages (0-6)</h3>
        <div class="fc-body">
          <p>For younger children, parents, grandparents, childcare centres, teachers, and librarians usually make the buying decision. We promote these books through parent-focused content, school and library outreach, bookshop opportunities, seasonal campaigns, and messaging that clearly communicates the story’s educational or emotional value.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19V5a2 2 0 0 1 2-2h13v16H6a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h13"></path></svg></div>
        <h3>Early Readers and Junior Fiction for Ages (6-9)</h3>
        <div class="fc-body">
          <p>Children in this age group are beginning to choose books for themselves, but adults still strongly influence what they read. Our campaigns balance child-friendly excitement with clear information for parents and teachers, using engaging social content, reading challenges, school outreach, reviews, and age-appropriate Amazon positioning.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8Z"></path></svg></div>
        <h3>Middle Grade Books for Ages (9-12)</h3>
        <div class="fc-body">
          <p>Middle-grade readers respond to memorable characters, exciting plots, humour, adventure, and relatable challenges. We focus on genre positioning, reader communities, school and library connections, review outreach, series promotion, and content that encourages young readers to recommend the book to friends.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><circle cx="12" cy="12" r="5"></circle><circle cx="12" cy="12" r="1.2"></circle></svg></div>
        <h3>Young Adult Books for Teenage Readers</h3>
        <div class="fc-body">
          <p>Young adult readers often discover books through social media, online communities, recommendations, trailers, and visual content. We build campaigns around the book’s themes, characters, emotional appeal, and genre while helping the title reach teenagers, parents, educators, reviewers, and young adult reading groups.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Adult Fiction and Non-Fiction Books</h3>
        <div class="fc-body">
          <p>Adult books require marketing shaped around genre, reader interests, and purchasing habits. Whether you have written a novel, memoir, business book, self-help title, or educational guide, we can support Amazon optimisation, social media campaigns, email marketing, reviewer outreach, local publicity, and launch planning.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Queensland authors and publishers we help reach more readers" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Queensland Authors and Publishers: We Help Reach More Readers</h2>
      <p>We work with a wide mix of authors, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published children's authors with picture books or early reader series looking for the right audience</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Indie novelists publishing adult or young adult fiction who want more than a one-off social media post</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Kindle only authors who have never touched a print run and need their digital listing working harder</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small independent publishers managing a handful of titles with limited time to market each one</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors who are not sure where to start or what actually works</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Established authors launching a new title and wanting a fresh push without starting from scratch</span></li>
      </ul>
      <p>If you do not see your exact situation listed here, get in touch anyway. Most books do not fit neatly into a category, and we are used to working out a plan that suits you.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to ask</p>
      <h2>How to Choose the Right Queensland Book Marketing Service Confidently</h2>
      <p>Not every marketing agency is worth your money, and that is true no matter who you end up working with, us included. Before you sign up with anyone, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain exactly what tasks they will do each week or month, or is it vague?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they give you honest expectations about sales, rather than promising bestseller status?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they worked with your type of book before, such as children's picture books versus adult thrillers?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you get regular updates, or do you have to chase them for information?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are their prices clear upfront, with no surprise add-ons later?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand Amazon, Kindle, and the wider self-publishing world, not just general marketing?</span></li>
      </ul>
      <p>If an agency cannot answer these clearly, that is worth noticing before you commit any money.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Comparing book marketing services in Queensland" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY MARKETING MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Strategic Book Marketing Matters After You Publish</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of authors think the hard part is finished once the book is written and published. In reality, publishing is just the start. Here is why proper promotion changes the outcome:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Most readers only discover new books through recommendations, algorithms, or visibility, not by stumbling across them</li>
      <li>Amazon and Kindle both reward books that get early reviews and sales, so the first few weeks matter a great deal</li>
      <li>Children's books rely heavily on parents, teachers, and librarians hearing about them, which rarely happens on their own</li>
      <li>A book with no marketing behind it can be genuinely excellent and still sell almost nothing</li>
      <li>Good promotion also helps with future books, since it builds an audience that will come back for your next release</li>
    </ul>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How Our Queensland Book Marketing Process Works Step by Step</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step One: We Have A Free Chat About Your Book</h3></div>
        <div class="svc-step-body"><p>We start with a conversation, either on the phone or over video, about your book, your goals, and your budget. We will ask about your genre, your age group, if it is a children's book, what you have already tried, and what has and has not worked so far. There is no pressure and no obligation at this stage.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step Two: We Build Your Plan</h3></div>
        <div class="svc-step-body"><p>Based on that chat, we put together a plan that fits your book and your budget. This might be a small, focused campaign around a launch date, or a broader push across several channels over a few months, depending on what makes sense for your goals.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step Three: We Put The Plan Into Action</h3></div>
        <div class="svc-step-body"><p>Our team gets to work on the tasks agreed in your plan, whether that is Amazon listing changes, social content, outreach to bookshops and libraries, or a Kindle promotional push. You will know in advance what is happening and when.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step Four: We Track What Is Happening</h3></div>
        <div class="svc-step-body"><p>We keep an eye on how things are going, including sales, reviews, and engagement, so we know what is working and what needs adjusting. You will get plain, straightforward updates rather than a dense spreadsheet you need a degree to understand.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step Five: We Adjust As We Go</h3></div>
        <div class="svc-step-body"><p>Marketing is rarely a set-and-forget job. We check in with you and adjust the plan if something is not landing the way we hoped, or if we spot an opportunity worth chasing, such as a seasonal event or a relevant local festival.</p></div>
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
      <h2>Why Queensland Authors Choose <em>Purple Giraffe Press</em> for Marketing</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We are Queensland-based, and we know the local landscape.</h3><p>From Brisbane bookshops to regional libraries, we understand where Queensland readers actually spend their time.</p></article>
      <article><span>✓</span><h3>We are upfront about pricing.</h3><p>You will know what you are paying for before any work starts, with no hidden extras added later.</p></article>
      <article><span>✓</span><h3>We take on children's books seriously.</h3><p>Many marketing agencies treat kids' books as an afterthought. For us, it is a core part of what we do.</p></article>
      <article><span>✓</span><h3>We aim to run the best book promotion services Queensland can offer authors who want plain speaking over hype.</h3><p>That means honest updates, realistic expectations, and no empty promises about instant bestseller status.</p></article>
      <article><span>✓</span><h3>We stay hands-on.</h3><p>You will deal with the same small team throughout and not get passed between different people every time you have a question.</p></article>
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
<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- under our roof';
$location_services_heading = 'Other Services to Support Your Author Journey';
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
      <h2>Ready to Put Your Book Before <em>the Right Readers?</em></h2>
      <p>If your book deserves more attention than it is getting, we would like to help. Get in touch for a free, no-pressure chat about your book and what marketing could look like for it. There is no obligation and no pushy sales pitch, just an honest conversation about what might work.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to market your children's book in Queensland" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 18 - FOOTER -->
<?php include 'includes/footer.php'; ?>

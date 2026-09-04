<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Formatting Services in London';
$page_description = 'Need your children\'s book formatted for print or ebook? Our London team ensures clean layouts, proper spacing and a polished, professional finish.';
$canonical_path   = 'childrens-book-formatting-services-in-london.php';
$breadcrumb_name  = 'Formatting in London';
$breadcrumbs = [
    ['name' => 'Home',       'url' => page_url('index.php')],
    ['name' => 'Locations',  'url' => page_url('locations/')],
    ['name' => 'London',     'url' => page_url('locations/london.php')],
    ['name' => 'Formatting', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in London, or can anyone use your service?',
    'a' => 'We are based in London and love working with local authors, but we format books for clients across the whole of the UK. Everything is handled by email, so location is never a barrier.',
  ),
  1 =>
  array (
    'q' => 'How long does children\'s book formatting usually take?',
    'a' => 'It depends on the length and how many illustrations are involved. A simple picture book can often be turned around in one to two weeks, while longer or more complex books may take a little longer.',
  ),
  2 =>
  array (
    'q' => 'Can you format my book for Amazon KDP as well as for a printer in London?',
    'a' => 'Yes. We prepare separate files where needed, so your book meets the technical requirements of whichever platform or printer you use.',
  ),
  3 =>
  array (
    'q' => 'Do I need to send finished artwork before you start?',
    'a' => 'It helps if your illustrations are close to final, but we can begin planning the layout with draft artwork and update pages as final images come in.',
  ),
  4 =>
  array (
    'q' => 'Do you offer a children\'s book formatting service in London for first-time self-published authors?',
    'a' => 'Yes, and in fact, many of our clients are publishing their first book. We are happy to explain each step clearly and answer questions as you go.',
  ),
  5 =>
  array (
    'q' => 'What file formats will I receive at the end?',
    'a' => 'You will usually receive a print-ready PDF and, where needed, files formatted for digital platforms.',
  ),
  6 =>
  array (
    'q' => 'Can you help if my book has text in more than one language?',
    'a' => 'Yes. Bilingual books need careful spacing so neither language feels squeezed in. We format these regularly and can talk you through the options.',
  ),
  7 =>
  array (
    'q' => 'Do you offer printed proofs, or only digital ones?',
    'a' => 'Many clients are happy reviewing a digital proof on screen, but if you would like a physical printed proof before final approval, we can arrange this too.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). Real London office
   address, kept in step with SITE_ADDRESS_UK in includes/config.php. */
$location_business = [
    'streetAddress' => '20 Old Bailey',
    'locality'   => 'London',
    'region'     => 'London',
    'postalCode' => 'EC4M 7EN',
    'country'    => 'GB',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Formatting</div>
      <h1>Children&rsquo;s <em>Book Formatting in London</em> for Beautiful <strong>Picture and Story Books</strong></h1>
      <p class="lead">If you have written a children's book, you already know the hard part is done. Now comes the part most authors dread. Getting the pages to actually look like a real book.</p>
      <p class="lead">A children's book is not like a novel. The text sits next to pictures. Fonts need to feel playful but still be easy to read aloud. Page breaks have to land in the right place, especially in a picture book where one page turn can make or break a joke or a surprise. Get any of this wrong and even a brilliant story can feel messy on the page.</p>
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
      <!-- <p class="eyebrow script-mark">- what we do</p> -->
      <p>Wherever You Are in the Process, We Can Help</p>
      <p>At Purple Giraffe Press, we sort out all of this for authors and small publishers across London. We take your manuscript and your artwork and turn them into a clean, properly laid-out book, ready for print or for upload to Amazon and other platforms. Search online, and you will find plenty of choice, but few formatters who work only with children's stories rather than adult fiction with a few extra line breaks added in.</p>
      <p>You do not need a finished manuscript to come to us. Some authors arrive with rough text and no artwork yet. Others have a fully illustrated book that just needs the interior built.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-cover-design-fold.webp" alt="Children's book formatting services in London at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - FORMATTING SUPPORT OPTIONS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Choosing the Right Formatting Support for Your Children&rsquo;s Book</h2>
    <p style="margin:14px auto 0;">Not every manuscript needs the same kind of help. A picture book with finished art needs a different approach from a plain text chapter book. That is why we break our formatting work into clear parts, so you only pay for what your book actually needs.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Interior Children's Book Formatting Services in London</h3>
        <div class="fc-body">
          <p>This is where we place your text and artwork onto each page, choose fonts that suit the tone of your story, set the trim size, and make sure margins and bleeds are correct so nothing gets cut off during printing. We also check things authors often miss, such as widows and orphans, inconsistent spacing, and text that runs too close to an illustration.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Children's Book Formatting Layout Services in London, Done Right</h3>
        <div class="fc-body">
          <p>Layout is not just about making things look nice. It is about making a book that reads well out loud and holds a child's attention from one page to the next. We work through your manuscript page by page, thinking about where a page turn should land and whether the text needs to be bigger for a younger age group.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Trim Size and Print Ready Setup</h3>
        <div class="fc-body">
          <p>Every printer and every platform has its own technical requirements for bleed, margins, and file type. We set your book up correctly from the start, so it does not come back from the printer with pages cut in the wrong place.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"></path><rect x="7" y="14" width="10" height="7" rx="1"></rect></svg></div>
        <h3>Getting Your Book Ready for Amazon and Other Publishing Platforms</h3>
        <div class="fc-body">
          <p>Many of the authors we work with in London are self-publishing through Amazon KDP, IngramSpark, or similar platforms. Each one has its own rules for cover wrap dimensions and interior files. We prepare your files to match the exact specifications of whichever platform you are using, so your book uploads cleanly the first time.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Digital and Ebook Formatting</h3>
        <div class="fc-body">
          <p>If you also want an ebook version, we format a separate file that reflows properly on phones, tablets, and e-readers, without losing the feel of the print edition where that matters.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - PICTURE BOOKS: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/childrens-book-printing.webp" alt="Professional picture book formatting for London authors" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- picture books</p>
      <h2>Why Professional Formatting Matters Most for Picture Books</h2>
      <p>Picture books are their own category. A picture book manuscript is often under a thousand words, but every page still has to work as a unit of text and image together. There is no room for a clumsy page break or a line of text that fights with the artwork sitting next to it.</p>
      <p>Our work in this area focuses on the things that make picture books unique:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Getting the word count and pacing right across a thirty-two-page spread</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Making sure page turns land where a joke, surprise or emotional beat needs them to</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Leaving space in the layout for illustration, rather than crowding the page with text</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Choosing a type that feels playful but stays easy to read aloud</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Keeping spacing and margins consistent so the book feels calm rather than busy</span></li>
      </ul>
      <p>If you are looking for someone who has actually worked with picture books before, this is not the same skill as laying out a plain text novel. Every page is its own small design decision.</p>
    </div>
  </div>
</section>

<!-- 6 - WHO WE WORK WITH: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-soft">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping Authors, Illustrators, and Publishers Bring Stories Alive</h2>
      <p>We help all kinds of people bring children's books to life, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who have the artwork ready and need someone to build the interior</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small independent publishers working on a limited list of titles</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools, charities, and community groups producing books for a specific project</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents creating a personal or family storybook</span></li>
      </ul>
      <p>No project is too small. Some clients bring us a single storybook they have been writing for years. Others come to us with a whole series planned out. Either way, we treat the work with the same care.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The London authors, illustrators, and publishers our formatting team works with" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - AGE-APPROPRIATE FORMATTING (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Age-Appropriate Formatting From Board Books to Middle Grade</h2>
    <p style="margin:14px auto 0;">Children's books are not one single thing, and the formatting needs to shift depending on who the book is actually for.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 0 to 5, Board Books and Picture Books</h3>
        <div class="fc-body">
          <p>At this age, the book is often read aloud by an adult, so page turns, spacing, and how the text sits next to the artwork all matter more than word count. Board books also need a sturdier file setup for their thicker pages.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 5 to 8, Early Readers</h3>
        <div class="fc-body">
          <p>These are often the first books a child reads on their own. Font size, line spacing, and how much text sits on each page all need careful thought, since the child is decoding the words themselves.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Ages 8 to 12, Chapter Books and Middle Grade</h3>
        <div class="fc-body">
          <p>At this stage, there is more text and fewer pictures, so consistent chapter openers, page numbering, and a clean running layout matter more than illustration placement.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Genre-Specific Layout</h3>
        <div class="fc-body">
          <p>Whether your book is a rhyming story, an activity book full of puzzles, or a bilingual story with two languages side by side, we adjust the layout to suit the format rather than using one generic template for every book.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/home-about.webp" alt="Comparing children's book formatters in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Best Children&rsquo;s Book Formatter in London</h2>
      <p>Whether you work with us or someone else, it is worth knowing what to ask before you hand over your manuscript.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask to see previous children's book work, not just adult fiction or non-fiction layouts</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask how they handle image-heavy pages, since this is very different from formatting plain text</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask which file formats you will receive, and whether these match what your printer or platform needs</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask how many rounds of changes are included before extra charges apply</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask how long the process usually takes, so you can plan around it</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask if they can advise on trim size and paper type, not just typeset the pages you already chose</span></li>
      </ul>
      <p>A formatter who answers these clearly, without dodging the question, is usually one you can trust with your book.</p>
    </div>
  </div>
</section>

<!-- 9 - WHY EXPERT FORMATTING HELPS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>How Expert Formatting Helps Your Children&rsquo;s Book Stand Out</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of authors think formatting is just the finishing touch. It is much bigger than that. Here is what proper formatting actually does for your book.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>It helps a parent read the story aloud without stumbling over awkward page breaks</li>
      <li>It helps early readers follow along and build confidence with clear, well-sized fonts</li>
      <li>It makes a book feel calm and professional, rather than cramped</li>
      <li>It means fewer printing errors and fewer costly reprints</li>
      <li>It gives reviewers, bookshops, and readers confidence in the book from the first page</li>
    </ul>
  </div>
</section>

<!-- 10 - FORMATTING PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Children&rsquo;s Book Formatting Process From Start to Finish</h2>
    <p style="margin:14px auto 0;">We keep the process simple and clear from the first email to the finished file.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You send over your text and any artwork or illustrations you already have. If you are still deciding on trim size or paper type, we are happy to talk this through with you first.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Send You a Quote</h3></div>
        <div class="svc-step-body"><p>Once we can see the length of the book, the number of illustrations, and how you plan to publish it, we send a clear quote with no hidden extras.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Build the Interior</h3></div>
        <div class="svc-step-body"><p>Our team lays out every page, working through text placement, fonts, spacing and image positioning.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>You Review a Proof</h3></div>
        <div class="svc-step-body"><p>We send you a full proof of the book so you can check every page yourself and flag anything you want changed.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>We Make Revisions</h3></div>
        <div class="svc-step-body"><p>We adjust the layout based on your feedback. Most projects need one or two rounds of small changes before everything is right.</p></div>
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
      <h2>Why London Children's Authors Choose <em>Purple Giraffe Press</em></h2>
      <p>We only work on children's books. This is not a sideline alongside adult fiction formatting.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children&rsquo;s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>One team, start to finish</h3><p>The people who lay out your first page are the same ones who finish your last, so nothing gets lost between handovers.</p></article>
      <article><span>✓</span><h3>Clear, upfront quotes</h3><p>You get a fixed price before any work begins, based on your book's actual length and artwork.</p></article>
      <article><span>✓</span><h3>Feedback that respects your book</h3><p>Authors often tell us we give some of the best children's book formatting they have found in London, and we put that down to actually listening to what each story needs.</p></article>
      <article><span>✓</span><h3>Local to London, easy to reach</h3><p>Some clients like to meet in person to go through artwork and layout choices, and we are happy to arrange this.</p></article>
      <article><span>✓</span><h3>We understand UK printing standards</h3><p>From trim sizes to paper stock, we format your book to suit UK printers as well as international platforms.</p></article>
      <article><span>✓</span><h3>We read pages the way a child will hear them</h3><p>For picture books and early readers especially, pacing and read-aloud rhythm shape every layout choice we make.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for children's book formatting in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Children&rsquo;s Book Formatting Cost in London Explained Clearly</h2>
      <p>We do not believe in flat, one-size-fits-all pricing because no two books are the same. A thirty-two-page picture book with full colour illustrations takes a different approach from a longer chapter book with plain text.</p>
      <p>We quote based on:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>The total number of pages</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Whether the book is illustrated, and how many images need to be placed</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of changes do you expect to need</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Which platform or printer are you formatting for</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Any extra requests, such as bilingual layouts or special print finishes</span></li>
      </ul>
      <p>Once we see your manuscript, we can give you an honest, specific quote rather than a vague estimate. There is no obligation to go ahead once you receive it, and we are always happy to answer questions before you decide.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Transform Your Children&rsquo;s Book Into A <em>Finished Product?</em></h2>
      <p>You have put real work into writing your children's book. It deserves to be formatted with the same care. Send us your manuscript and any artwork you have, and we will come back to you with a friendly, no-pressure quote.</p>
      <p>Get in touch with Purple Giraffe Press today, and let's get your book ready for readers.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to format your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 18 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 19 - FOOTER -->
<?php include 'includes/footer.php'; ?>

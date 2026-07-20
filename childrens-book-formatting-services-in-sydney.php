<?php
include 'includes/config.php';

$page_title       = 'Sydney Formatting Service for First-Time Authors';
$page_description = 'Get your children\'s book print and digital ready with expert formatting in Sydney. Clean, polished layouts that make your story shine everywhere.';
$canonical_path   = 'childrens-book-formatting-services-in-sydney.php';
$breadcrumb_name  = 'Book Formatting in Sydney';
$breadcrumbs = [
    ['name' => 'Home',           'url' => page_url('index.php')],
    ['name' => 'Locations',      'url' => page_url('locations/')],
    ['name' => 'Sydney',         'url' => page_url('locations/sydney.php')],
    ['name' => 'Book Formatting','url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Sydney?',
    'a' => 'No. While we are well placed to support authors and small publishers across Sydney, we work with clients from anywhere in Australia. Files are sent and reviewed online, so location is not a barrier.',
  ),
  1 =>
  array (
    'q' => 'How long does formatting take once I send my files?',
    'a' => 'It depends on the length of your book and how many illustrations are involved. A shorter picture book usually takes less time than a longer chapter book with multiple images per page. We will give you a timeframe once we see your project.',
  ),
  2 =>
  array (
    'q' => 'Can you format a book I have already had printed once before if I want to fix some issues?',
    'a' => 'Yes. We regularly help authors who have an existing file that needs correcting, whether that is spacing issues, font problems, or getting a file ready for a different printer or platform.',
  ),
  3 =>
  array (
    'q' => 'Do I need to have my illustrations finished before I contact you?',
    'a' => 'Not necessarily. If your illustrations are close to finished, we can start planning the layout around them. If they are not ready yet, we can talk through timing so formatting fits in once the artwork is done.',
  ),
  4 =>
  array (
    'q' => 'What file formats do you deliver?',
    'a' => 'This depends on where your book is heading. Print files are usually delivered as press-ready PDFs, while ebook files are prepared in the format required by your chosen platform, such as Amazon KDP.',
  ),
  5 =>
  array (
    'q' => 'Do you offer a children\'s book formatting service in Sydney for both picture books and chapter books?',
    'a' => 'Yes. We work with both, and we adjust our approach depending on the age group and how text-heavy the book is.',
  ),
  6 =>
  array (
    'q' => 'Will I get to see my book before it is finalised?',
    'a' => 'Yes. You will always see a full proof before anything is locked in, and you get the chance to request changes before we deliver your final files.',
  ),
  7 =>
  array (
    'q' => 'Do you work with local Sydney printers as well as online platforms?',
    'a' => 'Yes. Some authors want to work with a local Sydney printer for a small run of physical copies, while others are only publishing digitally through a platform. We set your file up to match whichever route you are taking, and we can talk through the pros and cons of each if you are not sure yet.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Book Formatting</div>
      <h1>Sydney Children’s Book Formatting <em>That Makes Every Page Work</em></h1>
      <p class="lead">You have written your story. You have the illustrations sorted, or you are close to it. Now comes the part that trips up a lot of authors: getting everything into a file that actually works for print or for an ebook store.</p>
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
      <h2>This is where formatting comes in.</h2>
      <p>It is not just about making a document look neat. It is about margins that print correctly, text that sits well next to images, fonts that behave the same way on every device, and a file that a printer or a platform will actually accept without kicking it back.</p>
      <p>Purple Giraffe Press works with authors across Sydney who need a children's book formatting service in Sydney that they can trust with this exact job. We take your manuscript and your artwork and turn them into a clean, print-ready or ebook-ready file, without the back and forth that usually comes with getting this part wrong.</p>
      <p>Most authors do not get stuck because they have written a bad story. They get stuck because a printer sends back a file for the third time, or an ebook looks fine on a laptop but strange on a phone. Formatting is technical work, and it is easy to lose hours to it when writing a book is not your day job.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/childrens-book-printing.webp" alt="Children's book formatting in Sydney at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT GOES INTO FORMATTING -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we handle</p>
    <h2>What Goes Into Formatting a Children’s Book Properly</h2>
    <p style="margin:14px auto 0;">Formatting a children's book is different from formatting a novel. There are pictures to place, text that sometimes wraps around them, and a lot more decisions to make about how each page looks on its own and next to the page beside it.</p>
    <p style="margin:14px auto 0;">Here is what we handle as part of this work:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Setting up your page size and trim size to match your chosen printer or platform, so the file is accepted the first time</li>
      <li>Placing text and images together so nothing overlaps or gets cut off at the edges, even on a spread with a full-page illustration</li>
      <li>Checking bleed and margins so nothing important gets trimmed off during printing, which matters more than most authors expect</li>
      <li>Making sure fonts are embedded properly so they display the same way everywhere, rather than swapping to a default font on some devices</li>
      <li>Preparing separate files for print and for digital, since a file built for a printer will not usually work as an ebook without changes</li>
      <li>Building a table of contents, copyright page, and title page if your book needs them, matched to the style of the rest of the book</li>
    </ul>
  </div>
  <div class="container" style="margin-top:34px;">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Interior Formatting for Print and Digital</h3>
        <div class="fc-body">
          <p>Interior children's book formatting services in Sydney cover everything inside the front and back covers. This means every page of text and every illustration is laid out so the book reads smoothly from start to finish.</p>
          <p>For a picture book, this often means working closely with the artwork so the text sits in a spot that does not compete with the illustration. For a chapter book with occasional illustrations, it means keeping a consistent layout so the reading experience stays steady from chapter to chapter.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Layout Work for Picture Books and Chapter Books</h3>
        <div class="fc-body">
          <p>Good layout is one of those things readers do not notice when it is done well, but they notice straight away when it is not. Our children's book formatting layout services in Sydney focus on spacing, alignment, and flow, so every spread feels intentional rather than squeezed together.</p>
          <p>We also keep an eye on things like widows and orphans (a single word left alone at the top or bottom of a page), inconsistent spacing between paragraphs, and text that runs too close to the edge of the page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Professional Formatting for Every Age Group</h3>
        <div class="fc-body">
          <p>Whether your book is a board book for toddlers or a longer chapter book for early readers, professional children's book formatting in Sydney means adjusting the approach to suit the age group. Younger readers need larger text and simpler layouts. Older readers can handle denser pages with more text per spread.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Getting Your Book Ready for Amazon and Other Platforms</h3>
        <div class="fc-body">
          <p>Self-publishing through Amazon KDP has its own set of rules. File types, trim sizes, and cover wrap dimensions all need to match exactly what the platform expects, or your book gets rejected at upload.</p>
          <p>Our Amazon children's book formatting services in Sydney take care of this from the start. We build your file to the platform's current specifications, so you are not stuck troubleshooting a rejected upload the night before you planned to publish.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - FORMATTING FOR EVERY READING STAGE -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Book Formatting Designed for Every Children’s Reading Stage</h2>
    <p style="margin:14px auto 0;">No two children’s books are formatted the same way. The layout that works for a toddler’s board book would feel completely out of place in a chapter book for older readers. That is why we adjust every formatting decision around the age group your book is written for. From font size and page layout to illustration placement and text density, every element is designed to create the best possible reading experience.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 0–3: Board Books for Tiny Hands and Curious Minds</h3>
        <div class="fc-body">
          <p>Books for babies and toddlers rely heavily on visuals, repetition, and simplicity. We create clean, spacious layouts with larger text, clear image placement, and plenty of breathing room on each page. The focus is on making the book easy for parents to read aloud while keeping young children engaged through strong visual presentation.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 3–5: Picture Book Layouts That Spark Imagination</h3>
        <div class="fc-body">
          <p>Picture books need the right balance between storytelling and illustration. We carefully position text so it complements the artwork rather than competing with it, creating pages that feel natural and enjoyable to explore. Every spread is designed to maintain attention, support read-aloud experiences, and allow the illustrations to shine.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 6–8: Early Reader Formatting That Builds Confidence</h3>
        <div class="fc-body">
          <p>As children begin reading independently, formatting becomes even more important. We use clear typography, consistent spacing, and structured page layouts that make reading feel approachable and enjoyable. The goal is to help young readers focus on the story without being distracted by cluttered or confusing page design.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Ages 8–12: Chapter Book Formatting for Growing Readers</h3>
        <div class="fc-body">
          <p>Middle-grade readers are ready for longer stories, larger chapters, and more detailed narratives. We create professional chapter book layouts with carefully structured text flow, clear chapter openings, and balanced page design. This helps readers stay immersed in the story while providing a polished reading experience from beginning to end.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Young Adult Books and Advanced Children’s Titles</h3>
        <div class="fc-body">
          <p>For books aimed at older children and young adults, formatting often begins to resemble traditional trade publishing standards. We create clean, professional interiors that support more complex storytelling while maintaining readability and visual consistency. The result is a book that feels polished, credible, and ready for publication across print and digital platforms.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Sydney authors, parents and small publishers we format children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping Children’s Book Creators at Every Publishing Stage</h2>
      <p>We work with a range of authors and small publishers, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors publishing their first picture book, who often need the most guidance on what a printer or platform actually requires</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents who have written a story for their own children and want to share it more widely, sometimes starting with only a handful of printed copies</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small independent publishers with a handful of titles a year, who need consistency across their list without a large in-house team</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and educators creating books for classroom use, where a clear, simple layout matters more than decorative flourishes</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who already have a formatted book but need it updated or fixed, whether that is a new edition, a new platform, or a print run that did not go as planned</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - WHAT TO CHECK: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>What to Check Before Trusting Someone With Your Layout in Sydney</h2>
      <p>Not every formatting service is the same, and it pays to ask a few questions before you commit, whether you work with us or someone else.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they ask for your trim size and printer or platform before starting?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they show you a sample or a proof before the file is finalised?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain what bleed and margins mean, or just use the terms without context?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they offer both print and ebook files, or only one?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they give you a clear number of revision rounds, so you know what is included?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show examples of children's books they have actually formatted before?</span></li>
      </ul>
      <p>If a provider cannot answer these clearly, that is worth noticing before you send them your manuscript.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/home-about.webp" alt="Questions to ask a children's book formatting service in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY STRONG FORMATTING MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Strong Formatting Changes How a Book Feels</h2>
  </div>
  <div class="container narrow center">
    <p>A book that is formatted well reads better, plain and simple. Text that sits awkwardly next to an illustration, or a font that renders differently on a Kindle than it did on the author's laptop, pulls a reader out of the story.</p>
    <p style="margin-top:14px;">Good formatting also avoids problems further down the track:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Printers rejecting a file because bleed or margins are wrong</li>
      <li>An ebook that looks fine on one device and broken on another</li>
      <li>Pages that print out of order because of a mistake in the file setup</li>
      <li>A book that looks amateurish next to others in the same genre, even if the writing itself is strong</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Getting this part right the first time saves you the stress of fixing it after copies have already been printed or a book has already gone live on a platform. It also saves money. Reprinting a batch of books because of a formatting error is far more expensive than getting a proof checked properly before the first print run goes ahead.</p>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>From Raw Files to a Beautifully Finished Book: Step-by-Step Process</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: You Send Us Your Files</h3></div>
        <div class="svc-step-body"><p>You send through your manuscript and your artwork, along with any details about your chosen printer or publishing platform. If you are not sure yet, we can talk you through the options.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: We Set Up the Layout</h3></div>
        <div class="svc-step-body"><p>We build the interior layout, placing text and images to suit your book's age group and style. This includes trim size, margins, bleed, and font setup.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: You Review a Proof</h3></div>
        <div class="svc-step-body"><p>We send you a foolproof way to check. This is where you flag anything you would like changed, whether that is spacing, image placement, or a small text tweak.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: We Make Revisions</h3></div>
        <div class="svc-step-body"><p>We work through your feedback and send an updated proof. Most projects need one or two rounds of revisions before everything is settled.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: You Receive Your Final Files</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we deliver your final, print-ready and ebook-ready files, formatted to the specifications of your chosen printer or platform.</p></div>
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
      <h2>Why Authors Trust Us With <em>Every Page and Spread</em></h2>
      <p>We are considered among the best children's book formatting services in Sydney by authors who value clear communication over guesswork. We would rather explain something twice than leave you confused about what you are getting.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children's books, not general formatting.</h3><p>Picture books and chapter books have their own quirks, and we know them well because this is what we focus on.</p></article>
      <article><span>✓</span><h3>We are upfront about pricing and timelines.</h3><p>You get a clear quote before we start, so there are no surprises later.</p></article>
      <article><span>✓</span><h3>We work with you, not around you.</h3><p>You see proof before anything is finalised, and you get a genuine chance to ask for changes.</p></article>
      <article><span>✓</span><h3>We understand both print and digital.</h3><p>Many authors need both a print file and an ebook file, and we set both up properly rather than treating one as an afterthought.</p></article>
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
<!-- 14 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for children's book formatting in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Do Children's Book Formatting Services Cost in Sydney?</h2>
      <p>Pricing depends on a few things: the length of your book, how many illustrations need placing, whether you need both print and digital files, and how many rounds of revisions you expect to use.</p>
      <p>Because of this, we do not publish a flat rate. Instead, we ask a few questions about your project and give you a clear quote before any work begins. This way you know exactly what you are paying for, with nothing added on later.</p>
      <p>If you are comparing quotes from different providers, ask what is actually included in the price, such as the number of proof rounds, whether both print and ebook files are covered, and whether revisions beyond the first round cost extra.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- explore more';
$location_services_heading = 'More Services for Sydney Children’s Book Authors';
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
      <h2>Ready to See Your Story <em>Beautifully Laid Out?</em></h2>
      <p>If you have a manuscript and artwork ready, or even if you are still a little way off and just want to ask some questions first, get in touch with Purple Giraffe Press. Send through what you have, tell us about your book, and we will let you know how we can help and what it will cost.</p>
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

<!-- 19 - FOOTER -->
<?php include 'includes/footer.php'; ?>

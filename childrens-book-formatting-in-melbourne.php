<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Formatting in Melbourne, Print Ready';
$page_description = 'Children\'s Book Formatting in Melbourne done with care. From page layout to final proof, we get your manuscript ready for print or ebook without stress.';
$canonical_path   = 'childrens-book-formatting-in-melbourne.php';
$breadcrumb_name  = 'Book Formatting in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'Melbourne',     'url' => page_url('locations/melbourne.php')],
    ['name' => 'Book Formatting', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need to have my illustrations finished before contacting your Melbourne book formatting team?',
    'a' => 'No. You do not need final illustrations before getting in touch. Our Melbourne book formatting team can plan your layout with placeholder spacing and update the file once your finished artwork is ready. You can contact us at any stage of your children’s book project.',
  ),
  1 =>
  array (
    'q' => 'Can you format my book for print and Amazon KDP in Melbourne?',
    'a' => 'Yes. We can prepare your book for both print and Amazon Kindle Direct Publishing. Whether you are a Melbourne author preparing a print edition, an ebook, or both, we can create files that are properly set up for your chosen publishing platform.',
  ),
  2 =>
  array (
    'q' => 'How long does children’s book formatting take in Melbourne?',
    'a' => 'The timeframe depends on your book’s length, artwork, layout style, and the number of revision rounds required. Once we review your manuscript, our Melbourne formatting team will give you a realistic timeframe as part of your quote.',
  ),
  3 =>
  array (
    'q' => 'Do you also write or edit children’s books for Melbourne authors?',
    'a' => 'Our formatting service focuses on page layout, design, and file preparation. If you are a Melbourne author who also needs help with editing, proofreading, or improving the story, let us know, and we can guide you through the right service options.',
  ),
  4 =>
  array (
    'q' => 'What file formats do you deliver for Melbourne book formatting projects?',
    'a' => 'We typically provide a print-ready PDF and any digital files required by your chosen publishing platform, including Amazon KDP. If you are publishing from Melbourne and need a specific file format, just mention it when you send your manuscript.',
  ),
  5 =>
  array (
    'q' => 'Can you match the design of a children’s book series I already published?',
    'a' => 'Yes. If you are a Melbourne author with an existing children’s book series, send through your earlier books, and we can match the fonts, margins, layout style, and overall presentation so the full series feels consistent.',
  ),
  6 =>
  array (
    'q' => 'What if I am not happy with the first layout draft?',
    'a' => 'We include a review stage so you can check the first layout draft before anything is finalised. Melbourne authors can share feedback, request changes, and make sure the final formatted book feels polished, professional, and ready for publication.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Book Formatting</div>
      <h1>Melbourne's <em>Children's Book Formatting</em> Experts, Done Right the <strong>First Time</strong></h1>
      <p class="lead">You have written a lovely story. Maybe you have illustrations too. But a good manuscript is not the same thing as a finished book. The words and pictures need to sit on the page in a way that feels right for a young reader.</p>
      <p class="lead">This is where formatting comes in. It is the part of the process that turns a Word document or a folder of images into something you can actually hold, print, or upload for sale.</p>
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
      <h2>Why Your Manuscript Needs Professional Formatting Before It Goes to Print</h2>
      <p>At Purple Giraffe Press, we offer layout and design help for picture books and chapter books, working with authors, illustrators, and small publishers across Melbourne. We take care of the layout so your book looks as good as the story inside it.</p>
      <p>Many authors come to us after a difficult first attempt at formatting their own book. Word documents can do strange things with images. Margins shift when a file opens on a different computer. Text boxes move around on their own. It is frustrating, and it eats into time you would rather spend writing or promoting your book. We handle the technical side so you do not have to work it out through trial and error.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/childrens-book-printing.webp" alt="Children's book formatting in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - FORMATTING SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Our Children's Book Formatting Services in Melbourne</h2>
    <p style="margin:14px auto 0;">Every children's book is different. A rhyming picture book needs a different layout from a chapter book with black and white line drawings. That is why we break our service into parts, so you only pay for what your book actually needs.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Interior Layout and Page Design</h3>
        <p>This is the heart of interior children's book formatting services in Melbourne. We set up your page size, margins, and gutters so the book prints cleanly with no text cut off near the spine. We place your text and images on each page and make sure nothing feels cramped or crowded.</p>
        <p>We also think about how a book will actually be read. A picture book is often read aloud, page by page, so the layout needs to support that rhythm. A page turn should feel natural, not awkward. If your story has a big reveal or a funny moment, we think about where that lands on the page so the timing still works once it is printed.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Font Selection and Text Styling</h3>
        <p>Picture books often need a font that feels playful but is still easy to read aloud. Chapter books need a font that is comfortable for a child reading alone. We choose a type that suits the age group and the tone of your story, and we keep it consistent from the first page to the last.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Image Placement and Sizing</h3>
        <p>If your book has illustrations, we place them so they line up with the right page of text. We check the resolution so images do not look blurry or pixelated once printed. We also make sure images do not get cropped awkwardly near page edges or the spine.</p>
        <p>This part of the job takes patience. Illustrations are often drawn at different sizes and resolutions, especially if more than one illustrator has worked on a book, or if some artwork was drawn digitally and some by hand and scanned in later. We adjust and align everything so the finished book feels like one consistent piece of work, not a patchwork of different image sizes.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Front Matter and Back Matter</h3>
        <p>Every book needs the small details done properly. Title page, copyright page, dedication, and sometimes an “about the author” page at the back. We format all of this so it looks tidy and professional, not like an afterthought.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"></path><rect x="7" y="14" width="10" height="7" rx="1"></rect></svg></div>
        <h3>Print-Ready and Digital File Preparation</h3>
        <p>Once the layout is done, we prepare your files for whatever comes next. This might mean a print-ready PDF for a local printer, or files set up correctly for Kindle Direct Publishing. Our Amazon children's book formatting services in Melbourne make sure your file meets the platform’s technical requirements before you upload it.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Melbourne authors our formatting team works with" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Melbourne Formatting Team Works With</h2>
      <p>We format books for a wide mix of people, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors releasing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who have written their own story</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents turning a bedtime story into a keepsake book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small independent publishers with a growing list of titles</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and community groups producing a book as a class or group project</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Grandparents and family members putting together a personal story for the kids in their lives</span></li>
      </ul>
      <p>No project is too small. Whether you are printing ten copies for family or preparing a book for wide release, we treat the layout with the same level of care.</p>
    </div>
  </div>
</section>

<!-- 6 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Best Children's Book Formatter in Melbourne</h2>
      <p>Not every layout job is the same, and not every formatter understands children's books. If you are comparing the best children's book formatting services in Melbourne, here is what actually matters:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Experience with picture books specifically, not just general document formatting</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A clear process for handling images, since most children's books are image-heavy</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Knowledge of print specs, including bleed, trim size, and gutter margins</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Understanding of platform rules, such as file requirements for Amazon or IngramSpark</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A willingness to show you a sample layout before the whole book is finished</span></li>
      </ul>
      <p>A formatter who only works with novels may not think about how a two-page spread flows, or how text sits next to a full-page illustration. Children's books need someone who has actually done this kind of layout before.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/home-about.webp" alt="Comparing children's book formatters in Melbourne" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY LAYOUT MATTERS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Book Layout Can Make or Break a Children's Book</h2>
  </div>
  <div class="container narrow center">
    <p>It is easy to assume formatting is just a final step, something quick before the book goes to print. In reality, a poor layout can undo a great story.</p>
    <p style="margin-top:14px;">Here is what can go wrong without professional children's book formatting in Melbourne:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Text sitting too close to the spine, so words get lost when the book is opened</li>
      <li>Illustrations that are stretched or squashed to fit a space</li>
      <li>Inconsistent fonts or spacing that make the book look unfinished</li>
      <li>Page breaks that split a sentence or a joke in an awkward spot</li>
      <li>Files that get rejected by a printer or an online platform because they do not meet specs</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>For a children's book, presentation matters just as much as the story. Young readers respond to colour, rhythm, and how a page looks before they even read a word. A layout that supports the story, rather than fighting it, makes a real difference to how the book is received.</p>
  </div>
</section>

<!-- 8 - FIRST-TIME AUTHOR TIPS: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/why-purple-giraffe.webp" alt="What first-time Melbourne authors should know before formatting" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>What First-Time Authors Should Know Before Formatting Begins</h2>
      <p>Formatting a children's book involves a few details that are easy to miss if you have not done it before.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Trim size matters early on.</strong> The size you choose for your book affects how illustrations should be drawn or cropped, so it is worth deciding this before layout begins rather than after.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Spine width depends on page count.</strong> For printed books, the spine width changes depending on how many pages your book has and what paper stock is used. This needs to be calculated correctly, or the cover will not fit.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Colour printing changes the brief.</strong> A full-colour picture book has different production needs from a black-and-white chapter book, and pricing and printer requirements can differ as a result.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Digital and print layouts are not identical.</strong> A layout built for print does not always translate directly to a Kindle file, so some adjustment is usually needed between the two.</span></li>
      </ul>
      <p>We walk you through each of these as they become relevant to your project, so nothing catches you by surprise later on.</p>
    </div>
  </div>
</section>

<!-- 9 - FORMATTING PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children's Book Formatting Process, Step by Step</h2>
    <p style="margin:14px auto 0;">We keep the process simple and clear from start to finish.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript and Artwork</h3></div>
        <div class="svc-step-body"><p>You send us your text and any illustrations you already have. If you do not have illustrations yet, that is fine; we can still plan the layout around placeholder space.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Quote</h3></div>
        <div class="svc-step-body"><p>We look at your book’s length, page count, and complexity, then send you a clear quote. No surprises later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Build Your Layout</h3></div>
        <div class="svc-step-body"><p>Our team formats your interior pages, sets up fonts, and places your images. This is the children's book formatting layout services stage where your book really starts to take shape.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review and Feedback</h3></div>
        <div class="svc-step-body"><p>We send you a draft layout to look over. You tell us what you like and what needs changing, and we make revisions.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Files and Delivery</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we prepare your final print-ready and digital files, ready for your printer or publishing platform.</p></div>
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
    <h2>Benefits of Hiring a Children's Book Formatting Specialist</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Save yourself the guesswork.</strong> You do not need to learn design software or printing specifications yourself; we already know them.</li>
      <li><strong>Avoid costly reprints.</strong> Formatting mistakes that are only caught after a book has been printed can be expensive and slow to fix.</li>
      <li><strong>Get a book that looks professional.</strong> Readers, reviewers, and even bookshops do notice when a book has been laid out with care.</li>
      <li><strong>Free up your time.</strong> You can spend your energy on writing your next book or promoting this one, instead of wrestling with page layout software.</li>
      <li><strong>Peace of mind with technical requirements.</strong> We handle bleed, trim size, and file types correctly the first time, so your files are not rejected by a printer or platform.</li>
    </ul>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Melbourne Authors Choose <em>Purple Giraffe Press</em></h2>
      <p>A few simple things set our Melbourne children's book formatting apart.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children's books</h3><p>This is not a side service for us; it is what we focus on.</p></article>
      <article><span>✓</span><h3>Upfront pricing</h3><p>You get a quote before we start, with no hidden extras.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>We understand local printing options and Australian publishing standards.</p></article>
      <article><span>✓</span><h3>We treat every book with care</h3><p>Your story matters to you, and it matters to us too.</p></article>
      <article><span>✓</span><h3>Simple communication</h3><p>You will always know what stage your book is at and what happens next.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for children's book formatting in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Children's Book Formatting Cost in Melbourne?</h2>
      <p>Pricing for a children's book formatting service in Melbourne depends on a few things, including the length of your book, how many illustrations need placing, and whether you need both print and digital files prepared. A short picture book with a handful of images is a simpler job than a longer chapter book with detailed artwork throughout.</p>
      <p>Because of this, we do not offer a single flat price for every project. What we do offer is a clear quote before any work begins, based on your specific book. You will know exactly what you are paying for and what is included, with no guesswork on either side.</p>
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
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Turn Your Manuscript Into a <em>Finished Book?</em></h2>
      <p>Your story has already done the hard work of being written. Do not let a rushed or awkward layout hold it back. Get in touch with Purple Giraffe Press and let us help you turn your manuscript into a book you are proud to share, whether that is on a bookshelf or on Amazon.</p>
      <p>Send us your manuscript today, and we will start with a straightforward quote, no pressure and no obligation.</p>
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

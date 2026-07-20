<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Formatting Rooted in Queensland';
$page_description = 'Get your children\'s book print and digital ready with expert formatting in Queensland. Clean, polished layouts that make your story shine brightly.';
$canonical_path   = 'childrens-book-formatting-services-in-queensland.php';
$breadcrumb_name  = 'Book Formatting in Queensland';
$breadcrumbs = [
    ['name' => 'Home',           'url' => page_url('index.php')],
    ['name' => 'Locations',      'url' => page_url('locations/')],
    ['name' => 'Queensland',     'url' => page_url('locations/queensland.php')],
    ['name' => 'Book Formatting','url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only format books for authors based in Queensland?',
    'a' => 'No. While many of our clients are Queensland-based, we work with authors from anywhere. Queensland clients are welcome to meet or speak with us directly if that\'s easier.',
  ),
  1 =>
  array (
    'q' => 'How long does formatting usually take?',
    'a' => 'It depends on the length and complexity of your book, but most picture books take between one and three weeks from first draft to final files, including a round of your feedback.',
  ),
  2 =>
  array (
    'q' => 'Can you format a book that isn\'t finished yet?',
    'a' => 'Yes. We can start planning the layout around a draft manuscript, even before your illustrations are finished, as long as you have a rough idea of the page count.',
  ),
  3 =>
  array (
    'q' => 'Do you provide a children\'s book formatting service in Queensland for both print and eBooks?',
    'a' => 'Yes. We format for print platforms like Amazon KDP and IngramSpark, as well as eBook formats that reflow properly on phones and e-readers.',
  ),
  4 =>
  array (
    'q' => 'What file formats do you need from me?',
    'a' => 'We usually work from a Word document or PDF for your text and high-resolution image files, JPEG or PNG, for your illustrations. If you\'re not sure what you have, send what you\'ve got and we\'ll let you know if anything else is needed.',
  ),
  5 =>
  array (
    'q' => 'Will I get to see the book before it\'s printed?',
    'a' => 'Always. You\'ll receive a full proof to review, and we won\'t send final files anywhere until you\'ve approved them.',
  ),
  6 =>
  array (
    'q' => 'Do you help with printing as well as formatting?',
    'a' => 'We prepare your files to the exact specifications needed for whichever printer or platform you choose, whether that\'s a Queensland printer, Amazon KDP, or IngramSpark. We can point you in the right direction if you\'re not sure which to pick.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Book Formatting</div>
      <h1>Makes Every Page Worth Turning with <em>Children&rsquo;s Book Formatting Services</em> in the <strong>Queensland</strong></h1>
      <p class="lead">You have finished writing your children&rsquo;s book. The story is complete, the words are polished, and now it is time to turn your manuscript into a book that children can comfortably read, hold, and enjoy.</p>
      <p class="lead">Children&rsquo;s book formatting is very different from formatting a standard novel. Illustrations need to be positioned carefully, text must flow naturally across each page, and fonts need to be clear, engaging, and easy for young readers to follow. Every detail plays a part in how the final book looks and feels.</p>
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
      <p>Purple Giraffe Press provides professional children&rsquo;s book formatting services in Queensland for authors, illustrators, and independent publishers. Whether you are self-publishing your first picture book, creating an early reader, or preparing a chapter book for print, we make sure every page looks balanced, polished, and ready for publication.</p>
      <p>We format children&rsquo;s books for print, ebook, and Amazon KDP, helping you prepare a finished product that looks professional and stands confidently alongside traditionally published titles.</p>
      <p>From Brisbane and the Gold Coast to Townsville and regional Queensland, our process is simple and fully remote. We work with you through email and video calls, so you can access reliable formatting support wherever you are based.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/childrens-book-printing.webp" alt="Children's book formatting services in Queensland at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT FORMATTING ACTUALLY INCLUDES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what it includes</p>
    <h2>What Professional Children&rsquo;s Book Formatting Services Actually Include</h2>
    <p style="margin:14px auto 0;">A lot of people think formatting just means making the text look neat. For children's books, it's much more than that. Every page has to work as a whole picture, not just a block of words.</p>
  </div>
  <div class="container narrow center">
    <p>Here's what we look at when we format your book:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Where the text sits next to the illustration on each spread</li>
      <li>Font choice and size, so young readers can follow along easily</li>
      <li>Line spacing and word spacing for read-aloud pacing</li>
      <li>Page numbers, chapter breaks, and front matter</li>
      <li>Bleed and trim settings so nothing gets cut off at the printer</li>
      <li>Colour consistency between your images and the final print file</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Getting these details right matters more in a children's book than almost any other kind of book. A novel can survive an odd line break. A picture book cannot survive text that overlaps a character's face or a page turn that lands in the wrong spot and ruins the surprise in the story.</p>
  </div>
  <div class="container" style="margin-top:34px;">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Interior Formatting for Print and Digital</h3>
        <div class="fc-body">
          <p>Our interior children's book formatting services in Queensland cover both the print version and the eBook version of your story. These two formats work differently. A print book needs exact margins and bleed settings so your printer doesn't cut off part of a picture. An eBook needs to reflow properly across phones, tablets, and e-readers without the layout falling apart.</p>
          <p>We build your interior file with both in mind, so you're not paying twice for two separate jobs.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Amazon and KDP Ready Files</h3>
        <div class="fc-body">
          <p>If you're planning to publish through Amazon, your file needs to meet a specific set of technical rules. Margins, trim size, file type, and image resolution all have to match what Amazon's system expects, or your upload gets rejected or looks wrong once printed.</p>
          <p>Our Amazon children's book formatting services in Queensland are built around getting this right the first time. We test files against KDP's own specifications before you upload anything, so you're not stuck guessing why your proof looks off.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Layout and Design Support</h3>
        <div class="fc-body">
          <p>Sometimes a manuscript needs more than formatting. Maybe the illustrations don't quite fit the page count, or the text needs to be broken up differently across spreads. Our children's book formatting layout services in Queensland include this kind of hands-on layout adjustment, not just dropping text into a template.</p>
          <p>We'll look at your book page by page and suggest changes where the flow doesn't quite work, always checking with you before anything changes.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - COMMON MISTAKES -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what to avoid</p>
    <h2>Common Children&rsquo;s Book Formatting Mistakes Authors Should Avoid</h2>
  </div>
  <div class="container narrow center">
    <p>Before you send your manuscript off anywhere, it helps to know what tends to go wrong. We see the same handful of issues come up again and again with authors who have tried to format a book themselves or worked with someone who wasn't familiar with children's books specifically.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Text placed too close to the edge of the page.</strong> Once the book is trimmed at the printer, a word or letter can get cut off if it sits too close to the trim line.</li>
      <li><strong>Illustrations at the wrong resolution.</strong> An image that looks fine on a screen can turn out blurry or pixelated once it's printed at full page size.</li>
      <li><strong>Inconsistent fonts across the book.</strong> Switching fonts halfway through, even slightly, makes a book look unfinished.</li>
      <li><strong>Ignoring the gutter.</strong> The gutter is the inner margin near the spine. Text or images placed too close to it can disappear into the fold once the book is bound.</li>
      <li><strong>Uploading the wrong file type to Amazon.</strong> KDP has specific requirements for file format and colour profile, and getting this wrong is one of the most common reasons a proof comes back looking different from what was expected.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of these mistakes mean your book is doomed. They're just the reason formatting is worth doing properly rather than rushing through it the night before you upload your files.</p>
  </div>
</section>

<!-- 6 - EVERY AGE AND READING STAGE (feature cards) -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Formatting Children&rsquo;s Books for Every Age and Reading Stage</h2>
    <p style="margin:14px auto 0;">Children&rsquo;s books need different formatting depending on the reader&rsquo;s age, reading ability, and attention span. We adjust the font size, page layout, spacing, illustration placement, and amount of text so each book feels comfortable and engaging for its intended audience.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Board Books for Babies and Toddlers</h3>
        <div class="fc-body">
          <p>Board books need large, clear text, bold illustrations, and simple page layouts. We keep each spread uncluttered, so babies and toddlers can focus easily while parents read the story aloud.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Books for Young Children</h3>
        <div class="fc-body">
          <p>Picture books rely on a careful balance between words and illustrations. We position the text so it supports the artwork, creates a natural reading rhythm, and makes every page turn feel meaningful.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Early Readers for Developing Skills</h3>
        <div class="fc-body">
          <p>Early readers need larger fonts, short paragraphs, clear spacing, and predictable page structures. We format each page to help children follow sentences independently without feeling overwhelmed.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Chapter Books for Confident Young Readers</h3>
        <div class="fc-body">
          <p>Chapter books require clear chapter openings, readable typography, consistent spacing, and carefully placed illustrations. We create a structured layout that supports longer reading sessions while keeping the pages welcoming.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Middle Grade Books for Older Children</h3>
        <div class="fc-body">
          <p>Middle-grade books usually contain longer chapters and fewer illustrations. We use comfortable font sizes, balanced margins, clear headings, and professional chapter styling to create an enjoyable reading experience.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 7 - WHO WE SUPPORT: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Queensland authors, illustrators and publishers our formatting team supports" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Children&rsquo;s Authors and Publishers We Support Across Queensland</h2>
      <p>We work with a wide range of people across Queensland, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing a picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who have the art but need help with the text layout</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers with a handful of titles</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and educators writing books for classroom use</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents turning a bedtime story into a printed keepsake</span></li>
      </ul>
      <p>You don't need to have any design background to work with us. Most of our clients have never formatted a book before, and that's completely normal.</p>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-soft">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Queensland Book Formatter Without Getting It Wrong</h2>
      <p>Not every formatting service understands children's books specifically. Before you hire anyone, it's worth asking a few questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they formatted picture books or illustrated books before, not just novels?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they know the difference between KDP requirements and offset print requirements?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they show you a sample spread before finishing the whole book?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain bleed, trim, and margins in plain terms, or just use jargon?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is pricing based on your actual page count and complexity, or a vague flat fee?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they handle both the print file and the eBook file, or only one?</span></li>
      </ul>
      <p>A good formatter should be able to answer all of these clearly, without dodging the question or making it sound more complicated than it is.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/home-about.webp" alt="Comparing children's book formatters in Queensland" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHY PROFESSIONAL FORMATTING: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/why-purple-giraffe.webp" alt="A better reading experience through professional children's book formatting" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why it matters</p>
      <h2>Why Professional Formatting Creates a Better Reading Experience</h2>
      <p>It's easy to assume formatting is a small final step. In reality, it's often the difference between a book that reads smoothly and one that feels clunky, even if the writing itself is strong.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A well-formatted book keeps a child's attention because the text and pictures work together</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Print files that meet the right specs to avoid costly reprints and delays</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Consistent fonts and spacing make a book feel professional, which matters if you're selling it</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Proper eBook formatting means your story doesn't fall apart on a phone screen</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Good formatting protects illustrations from being cropped or misaligned at the printer</span></li>
      </ul>
      <p>None of this is about making the book look fancy for the sake of it. It's about making sure the story actually lands the way you intended.</p>
    </div>
  </div>
</section>

<!-- 10 - FORMATTING PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Children&rsquo;s Book Formatting Process from Start to Finish</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: Send Us Your Files</h3></div>
        <div class="svc-step-body"><p>You share your manuscript and any illustration files you have. If your art isn't finished yet, that's fine. We can start planning the layout around a rough draft.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: We Review Page Count and Trim Size</h3></div>
        <div class="svc-step-body"><p>We look at how your story breaks down into spreads and confirm what trim size and print method you're aiming for, whether that's Amazon KDP, IngramSpark, or a local Queensland printer.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: First Draft Layout</h3></div>
        <div class="svc-step-body"><p>We build out a full draft of your interior file, placing text and images according to your manuscript and any notes you've given us.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: Review and Adjustments</h3></div>
        <div class="svc-step-body"><p>You get a proof to look over. We make changes based on your feedback, whether that's moving text, adjusting spacing, or tweaking a font size.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: Final Files Delivered</h3></div>
        <div class="svc-step-body"><p>Once you're happy, we send final print-ready and digital-ready files, formatted to the specifications of whichever platform you're using.</p></div>
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
      <h2>Why Queensland Children&rsquo;s Authors Choose <em>Purple Giraffe Press</em></h2>
      <p>If you're searching for the best children's book formatting services in Queensland, what you're really looking for is someone who treats your book like their own project, not just another file in a queue. That's how we approach every manuscript that comes through.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children&rsquo;s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only work on children's and illustrated books.</h3><p>We're not a general formatting service that also does novels and textbooks. This is the one thing we focus on.</p></article>
      <article><span>✓</span><h3>We check your files against real platform specifications.</h3><p>No guessing whether your KDP upload will work. We test it before you do.</p></article>
      <article><span>✓</span><h3>You get to see and approve every stage.</h3><p>Nothing goes to print without your sign-off first.</p></article>
      <article><span>✓</span><h3>We explain things in plain English.</h3><p>You shouldn't need a design degree to understand what bleed or trim means, so we won't talk to you like you do.</p></article>
      <article><span>✓</span><h3>Queensland-based and easy to reach.</h3><p>You're not dealing with a call centre overseas. You can talk to the person actually working on your book.</p></article>
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
<!-- 15 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for children's book formatting in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Children&rsquo;s Book Formatting Cost in Queensland?</h2>
      <p>Pricing for children's book formatting services in Queensland depends on a few things: how many pages your book has, how many illustrations need to be placed, and whether you need both print and digital files or just one.</p>
      <p>We don't do flat, one-size-fits-all pricing because a 12-page board book and a 40-page illustrated picture book are very different jobs. What we do offer is a clear quote before any work starts, based on your actual manuscript and files. No surprise costs added on at the end.</p>
      <p>If you'd like to know what your specific project would cost, send through your manuscript and a rough page count, and we'll give you a straightforward number.</p>
      <p>Some things that tend to affect price include the number of illustrations that need placing, whether your images need any colour correction before they go into the layout, and how many rounds of changes you expect to want once you see the first draft. We'll always talk through this with you before starting, so there are no surprises when the invoice arrives.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- under our roof';
$location_services_heading = 'More Services to Support Your Queensland Book Journey';
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
      <h2>Ready to Format and Publish <em>Your Children&rsquo;s Book?</em></h2>
      <p>If you've got a finished manuscript and you're ready to see it turned into a real book, we'd love to help. Send us your files and tell us a bit about your project. We'll come back with a clear plan and a straightforward quote, no pressure and no confusing jargon.</p>
      <p>Whether you need professional children's book formatting in Queensland for a single picture book or ongoing support across several titles, we're here to help you get it right.</p>
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

<!-- 19 - FOOTER -->
<?php include 'includes/footer.php'; ?>

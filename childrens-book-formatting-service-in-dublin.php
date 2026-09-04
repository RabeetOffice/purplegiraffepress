<?php
include 'includes/config.php';

$page_title       = 'Dublin Formatting Service for Children\'s Book Authors';
$page_description = 'Expert book formatting for children\'s authors in Dublin. Clean, polished layouts that make your story shine in print and digital formats alike.';
$canonical_path   = 'childrens-book-formatting-service-in-dublin.php';
$breadcrumb_name  = 'Book Formatting in Dublin';
$breadcrumbs = [
    ['name' => 'Home',            'url' => page_url('index.php')],
    ['name' => 'Locations',       'url' => page_url('locations/')],
    ['name' => 'Dublin',          'url' => page_url('locations/dublin.php')],
    ['name' => 'Book Formatting', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Dublin?',
    'a' => 'No. While we are proud to support authors here in Dublin, we work with clients across Ireland and internationally, including authors based in London and the wider UK.',
  ),
  1 =>
  array (
    'q' => 'How long does formatting usually take?',
    'a' => 'It depends on the length and complexity of your book. A simple picture book might take a couple of weeks, while a longer illustrated book can take longer. We will give you a realistic timeline once we see your files.',
  ),
  2 =>
  array (
    'q' => 'Can you format a book that already has a cover but needs the inside done?',
    'a' => 'Yes. Plenty of authors come to us with a cover already sorted and just need the interior pages formatted properly.',
  ),
  3 =>
  array (
    'q' => 'Do you format books for authors in Dublin who want to publish on Amazon?',
    'a' => 'Yes. We regularly help authors in Dublin and elsewhere prepare their files for Kindle Direct Publishing, making sure everything meets Amazon\'s technical requirements.',
  ),
  4 =>
  array (
    'q' => 'What file formats do you need from me to get started?',
    'a' => 'We can usually work with your manuscript in a standard document file and your artwork as separate image files. If you are unsure what you have, send us what you\'ve got, and we will let you know.',
  ),
  5 =>
  array (
    'q' => 'Will I get to see my book before it\'s finalised?',
    'a' => 'Yes. We always send a proof copy first, so you can check everything and request changes before we deliver the final files.',
  ),
  6 =>
  array (
    'q' => 'Do you offer any support after the files are delivered?',
    'a' => 'If something needs a small tweak after delivery, such as a spelling correction spotted late, we are happy to help sort it out.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). Real Dublin office
   address, kept in step with SITE_ADDRESS_IE in includes/config.php. */
$location_business = [
    'streetAddress' => 'Canon Hall, North Wall',
    'locality'   => 'Dublin',
    'region'     => 'Dublin',
    'postalCode' => 'D03 WP86',
    'country'    => 'IE',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Book Formatting</div>
      <h1>Children's <em>Book Formatting Service</em> in <strong>Dublin</strong> for Authors Who Want It Done Right</h1>
      <p class="lead">Writing a children's book takes heart. Getting it ready to print or publish takes something else entirely. It takes patience with fiddly page layouts, an eye for where the pictures sit next to the words, and a good bit of technical know-how.</p>
      <p class="lead">That is where we come in. At Purple Giraffe Press, we handle the formatting side of things so your story looks as good on the page as it does in your head. Whether you have written a picture book, an early reader, or a longer chapter book for older kids, we will turn your manuscript into a properly laid out book file that is ready for print or for upload online.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Format My Book</a>
        <a class="btn btn-light" href="contact.php" data-quote-open>Get a Free Quote</a>
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
      <h2>How a children's book is meant to feel</h2>
      <p>We work with authors across Dublin and further afield who want their book to look the part. If you have been searching for children's book formatting services in Dublin, you have landed in the right place.</p>
      <p>Plenty of authors reach out to us after trying to format a book themselves and finding it harder than expected. Text software that is built for plain novels doesn't always cope well with picture books, where every page has its own layout, and the words have to sit just right next to the artwork. A wrong margin, a shifted line, or a font that doesn't match the tone of the story can throw the whole thing off. We have seen it happen more than once, and it is usually an easy fix once someone who does this every day takes a look.</p>
      <p>People searching for the best children's book formatting services in Dublin are often looking for more than just someone who can move text around. They want a team that understands how a children's book is meant to feel when a parent reads it aloud, or when a child looks at the pictures on their own. That understanding shapes every decision we make, from spacing to font choice to how a page turn lands.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Format My Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/childrens-book-printing.webp" alt="Children's book formatting service in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT POOR FORMATTING COSTS YOU -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what goes wrong</p>
    <h2>How Poor Formatting Can Weaken Your Children’s Book</h2>
  </div>
  <div class="container narrow center">
    <p>Anyone who has flicked through a badly put-together book knows the feeling. Text that spills too close to the picture. Pages that don't line up. Fonts that are too small for little eyes, or too big and awkward-looking. A gutter margin so tight the words get lost in the spine.</p>
    <p style="margin-top:14px;">These small things add up. Parents notice. Reviewers notice. And on Amazon, a poorly formatted preview can put a buyer off before they even read your blurb.</p>
    <p style="margin-top:14px;">Good formatting is not about making a book pretty for the sake of it. It is about making sure the story reads the way you meant it to read, page after page, without anything getting in the way.</p>
  </div>
</section>

<!-- 5 - WHAT WE FORMAT (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Complete Children’s Book Formatting Services for Every Publishing Format</h2>
    <p style="margin:14px auto 0;">We cover every part of getting a children's book ready for print or digital release. Here is what that looks like in practice.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M12 4v16M6 8h3M6 12h3M15 8h3M15 12h3"></path></svg></div>
        <h3>Interior Layout and Page Design</h3>
        <div class="fc-body">
          <p>This is the heart of the job. We lay out every page so the text and artwork work together instead of fighting each other. That means:</p>
          <ul>
            <li>Setting margins and gutters correctly for your chosen trim size</li>
            <li>Positioning text so it never crowds or overlaps illustrations</li>
            <li>Choosing readable, child-friendly fonts and sizing them for the right age group</li>
            <li>Keeping spacing, indents, and line breaks consistent from the first page to the last</li>
            <li>Adding page numbers, chapter headers, or scene breaks where needed</li>
          </ul>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h9l4 4v14H6z"></path><path d="M15 3v5h4"></path><path d="M9 13h6M9 17h4"></path></svg></div>
        <h3>Print Ready File Preparation</h3>
        <div class="fc-body">
          <p>Once the layout is done, we prepare the file for the printer you plan to use. That includes checking bleed, trim size, colour profiles, and image resolution so nothing looks blurry or cut off once it is physically printed. We can prepare files for local Irish printers or for print-on-demand services.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="6" y="2" width="12" height="20" rx="2"></rect><path d="M11 18h2"></path></svg></div>
        <h3>Digital and Ebook Formatting</h3>
        <div class="fc-body">
          <p>Not every book is destined for a shelf straight away. Plenty of authors want an ebook version too. We format for common ebook readers, making sure text reflows properly and images display clearly on tablets, phones, and e-readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h6a3 3 0 0 1 3 3v11a2.5 2.5 0 0 0-2.5-2.5H4z"></path><path d="M20 5h-6a3 3 0 0 0-3 3v11a2.5 2.5 0 0 1 2.5-2.5H20z"></path></svg></div>
        <h3>Amazon and KDP Formatting</h3>
        <div class="fc-body">
          <p>Publishing through Kindle Direct Publishing has its own set of rules, and children's books with illustrations can be tricky to get right on that platform. We handle Amazon children's book formatting services in Dublin, preparing your file so it meets KDP's technical requirements and displays properly in the preview tool before you hit publish.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="2"></rect><path d="M8 3v18"></path><circle cx="15" cy="10" r="2"></circle></svg></div>
        <h3>Cover Layout Support</h3>
        <div class="fc-body">
          <p>While our main focus is the interior, we can also help make sure your cover file lines up correctly with your spine width and back cover text, so the whole package feels finished.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>If you are after interior children's book formatting services in Dublin, this is the core of what we do every day.</p>
    <p style="margin-top:14px;">We also pay close attention to how a book flows from one spread to the next. A picture book is read two pages at a time, so we check how the left and right pages sit together, not just how each page looks on its own. That kind of attention is what separates a book that reads smoothly from one that feels disjointed, even if the individual pages look fine in isolation.</p>
    <p style="margin-top:14px;">Authors looking for children's book formatting layout services in Dublin often come to us partway through a project, sometimes with a manuscript that has already been through several rounds of edits and artwork that has arrived from an illustrator in a different file format than expected. Part of our job is pulling all of that together into one clean, workable file before the actual layout even begins.</p>
  </div>
</section>

<!-- 6 - AGE GROUPS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Formatting Books For Different Children’s Age Groups</h2>
    <p style="margin:14px auto 0;">Every children's book needs a layout that suits the way its audience reads and interacts with stories. We adjust fonts, spacing, page design, and illustration placement to create a smooth reading experience for each age group.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Baby And Toddler Books (Ages 0–3)</h3>
        <div class="fc-body">
          <p>These books need simple layouts, larger text, clear visuals, and durable designs that support early learning and shared reading.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Picture Books (Ages 3–7)</h3>
        <div class="fc-body">
          <p>Picture book formatting focuses on balancing words and illustrations, creating page layouts where artwork and storytelling work together naturally.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Early Readers And Chapter Books (Ages 5–10)</h3>
        <div class="fc-body">
          <p>These books require readable fonts, structured pages, and clear spacing to help children build confidence as independent readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Middle Grade Books (Ages 8–12)</h3>
        <div class="fc-body">
          <p>Longer stories need organised chapters, comfortable text layouts, and formatting that supports more advanced reading experiences.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Choosing the right formatting approach for your target age group helps your book look professional, remain easy to read, and connect better with young audiences.</p>
  </div>
</section>

<!-- 7 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin authors, illustrators, and small publishers we format children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Children’s Book Creators We Proudly Support Across Dublin</h2>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors publishing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who have written their own story and need it laid out properly</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents turning a bedtime story into a keepsake book for family</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers and education groups producing children's material</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who already have a manuscript and artwork but no idea how to combine them into a finished file</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Grandparents and family members putting together a personal story as a gift</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors with a series in progress who need consistent formatting across several books</span></li>
      </ul>
      <p>No matter where you are starting from, whether that's a rough draft with a few sketches or a finished manuscript and a full set of illustrations ready to go, we can pick up the project and carry it through to a finished file.</p>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Children’s Book Formatter in Dublin</h2>
      <p>Not every formatter understands the extra care that children's books need. Before you hire anyone, it is worth asking:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they formatted illustrated books before, not just plain text novels?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you sample pages or previous work?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand trim sizes and bleed for print, not just digital files?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they make revisions if something doesn't sit right on the page?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain pricing clearly before you commit?</span></li>
      </ul>
      <p>A good formatter should be happy to answer all of these without hesitation.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book formatter in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHY PROFESSIONAL FORMATTING MATTERS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Formatting Makes Children’s Books More Successful</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>It protects your story.</strong> Bad spacing or awkward page breaks can pull a young reader out of the moment.</li>
      <li><strong>It builds trust with buyers.</strong> A clean, professional layout signals that the whole book has been made with care.</li>
      <li><strong>It saves you money later.</strong> Fixing a poorly formatted file after printing is far more costly than getting it right the first time.</li>
      <li><strong>It gives your illustrations room to breathe.</strong> Artwork deserves proper placement, not squeezed margins.</li>
      <li>It makes your book look at home on any shelf, whether that's a local Dublin bookshop or an online storefront.</li>
    </ul>
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

<!-- 11 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Five-Step Children’s Book Formatting Process from Start to Finish</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>You Send Us Your Manuscript and Artwork</h3></div>
        <div class="svc-step-body"><p>Send over your text file and your illustrations, along with any preferences you already have in mind, such as a trim size or a particular font you like.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Review and Quote</h3></div>
        <div class="svc-step-body"><p>We look over your material and get back to you with a clear quote and a realistic timeline. No hidden extras added later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Build the Layout</h3></div>
        <div class="svc-step-body"><p>Our team lays out every page, positioning text and images together, checking spacing and consistency throughout.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>You Review a Proof</h3></div>
        <div class="svc-step-body"><p>We send you a proof copy so you can check everything before anything is finalised. If changes are needed, we make them.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Files Delivered</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we deliver your print-ready and digital files, formatted and ready to go.</p></div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Throughout the whole process, you can reach us with questions. We know that publishing a book, especially your first one, can feel like a lot to keep track of, so we try to keep communication simple and honest. If something is going to take longer than expected, we will tell you early rather than leaving you wondering.</p>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Dublin Children’s Authors Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children&rsquo;s Book Formatting Specialists</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Quote &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>&#10003;</span><h3>We specialise in illustrated and children's books</h3><p>Not just plain novels, so we understand the specific challenges these projects bring.</p></article>
      <article><span>&#10003;</span><h3>We keep you involved</h3><p>You will see a proof before anything is final, so there are no surprises.</p></article>
      <article><span>&#10003;</span><h3>We offer professional children's book formatting in Dublin with a personal touch</h3><p>Working directly with authors rather than passing your project between departments.</p></article>
      <article><span>&#10003;</span><h3>We are upfront about pricing and timelines</h3><p>So you always know where you stand.</p></article>
      <article><span>&#10003;</span><h3>We format for print, ebook, and Amazon</h3><p>So you only need one team for the whole job.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's book formatting in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Professional Children’s Book Formatting Cost in Dublin?</h2>
      <p>Every project is different. A short picture book with simple layouts costs less than a longer chapter book with detailed illustrations throughout, so we quote based on your specific manuscript rather than a flat rate. If you are wondering about children's book formatting services cost in Dublin, the honest answer is that it depends on page count, illustration complexity, and how many formats you need, such as print and ebook together. Get in touch, and we will give you a straightforward quote once we have seen your files.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Quote &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 15 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Give Your <em>Children’s Book</em> a Professional Finish?</h2>
      <p>You have put the work into writing your story. Let us take care of making it look right on the page. Get in touch with Purple Giraffe Press today for a free, no-obligation quote, and let's get your children's book formatting service in Dublin sorted properly, from first page to last.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Quote &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to format your children's book in Dublin" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 18 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 19 - FOOTER -->
<?php include 'includes/footer.php'; ?>

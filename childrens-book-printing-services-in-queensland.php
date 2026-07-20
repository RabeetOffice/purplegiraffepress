<?php
include 'includes/config.php';

$page_title       = 'Quality Printing for Children\'s Books | Queensland';
$page_description = 'Turn your children\'s book into a beautifully printed book in Queensland. Quality printing services that bring your story to life, page by page.';
$canonical_path   = 'childrens-book-printing-services-in-queensland.php';
$breadcrumb_name  = 'Book Printing in Queensland';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'Queensland',    'url' => page_url('locations/queensland.php')],
    ['name' => 'Book Printing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you print small quantities, or only large runs?',
    'a' => 'We can print small runs. You don\'t need to order hundreds of copies just to get started, though the per-copy price does come down at higher quantities.',
  ),
  1 =>
  array (
    'q' => 'How do I prepare my books for print in Queensland before sending them to you?',
    'a' => 'Ideally, as a print-ready PDF with correct bleed and margins. If you\'re not sure how to set this up, tell us what software you used, and we\'ll guide you through it.',
  ),
  2 =>
  array (
    'q' => 'Can I order just one hardback book in Queensland as a personal copy?',
    'a' => 'In most cases, yes, though very small orders like a single copy will have a higher per-unit cost than a standard run. Ask us for a quote, and we\'ll confirm what\'s possible for your project.',
  ),
  3 =>
  array (
    'q' => 'What\'s the difference between paperback and hardback for a first book?',
    'a' => 'Paperback is cheaper and lighter, and suits most first-time authors testing the market. Hardback costs more but suits gift editions, keepsakes, or a special print run once you know the book will sell.',
  ),
  4 =>
  array (
    'q' => 'Do prices for books printed in Queensland include delivery?',
    'a' => 'Delivery is generally quoted separately from the printing cost, since it depends on quantity and your location. We\'ll include it in your final quote so there are no surprises.',
  ),
  5 =>
  array (
    'q' => 'Can you help if my manuscript file isn\'t print-ready yet?',
    'a' => 'Yes. Send it through, and we\'ll tell you what needs adjusting before the file goes to print, whether that\'s margins, image resolution, or font embedding.',
  ),
  6 =>
  array (
    'q' => 'How long does a typical order take from quote to delivery?',
    'a' => 'It depends on binding type and quantity, but we\'ll give you a realistic timeframe as part of your quote, so you know when to expect your books before you commit.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Book Printing</div>
      <h1>Get Your Children's Book Printed the Right Way, <em>Children's Book Printing Service</em> in <strong>Queensland</strong></h1>
      <p class="lead">You've finished writing. Now you need someone to turn that file into an actual book you can hold, sell, or hand out at an event. That's the part a lot of authors get stuck on, and it's usually the part nobody warns you about when you start writing.</p>
      <p class="lead">Purple Giraffe Press handles printing books in Queensland for authors, small publishers, schools, community groups, and businesses who want a finished product that looks and reads like it came from a proper publisher, not a home printer or an overseas warehouse that never answers an email.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Print Your Book</a>
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
      <p>Maybe you need a hardback book in Queensland for a launch event, or a bigger run of booklets for a conference next month. Maybe it's just twenty copies for family and friends, with no plans to sell a single one. We can print any of that, and everything in between, then get it to you on time.</p>
      <p>We know Queensland isn't a small place, and getting books printed and delivered here shouldn't mean dealing with a printer interstate who treats your order like a number on a spreadsheet. You should be able to ask a question and get a real answer from someone who actually looked at your file.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Print Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/childrens-book-printing.webp" alt="Children's book printing in Queensland at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - PRINTING FORMATS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Explore Our Complete Book Printing Options Across Queensland</h2>
    <p style="margin:14px auto 0;">Not every book needs the same printing approach. A children’s picture book, business report, novel, and poetry collection each require different paper, binding, and finishing choices. We build every print job around the purpose, audience, and style of your book rather than forcing it into a standard package. Below are the main formats available, helping you understand which option may suit your project before requesting a detailed printing quote.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Paperback Book Printing in Queensland</h3>
        <div class="fc-body">
          <p>Paperback remains a popular choice for novels, memoirs, poetry collections, and most non-fiction books. It is lightweight, affordable to post, and familiar to readers browsing online or in bookshops. We print paperbacks in various trim sizes, from standard novel dimensions to larger formats for photography and art books. Our team can recommend a suitable size, paper stock, and binding based on your page count, genre, audience, and intended retail price.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Hardback and Hardbound Book Printing Options</h3>
        <div class="fc-body">
          <p>Hardback printing works well for special editions, keepsakes, anniversary releases, family histories, and business books that need a more substantial finish. The rigid cover protects the pages and gives the book a premium feel that suits gifts, events, and long-term use. We offer printed case binding, dust jackets, and cloth or linen-textured covers. Our team will explain the available options and help you select a finish that suits your content, budget, and intended audience.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Booklets, Chapbooks, and Shorter Printed Formats</h3>
        <div class="fc-body">
          <p>Shorter formats are ideal for event programmes, instruction manuals, poetry chapbooks, educational resources, and compact short story collections. Depending on the page count and intended use, your booklet can be saddle stitched, perfect bound, or produced with a more durable hardcover finish. We help you select a practical size, paper weight, and binding method that keeps the booklet easy to handle while still giving it a polished and professionally produced appearance.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Choosing the Right Finish for Your Book Cover</h3>
        <div class="fc-body">
          <p>Your cover creates the first impression of your book, so its material and finish should reflect the genre, audience, and purpose of the project. We offer matte and gloss lamination, foil stamping, spot UV highlights, and other custom finishing options. These additions are never compulsory, and a clean matte cover may be the strongest choice for many books. We will recommend finishes that improve the design without adding unnecessary production costs or distracting from the artwork.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"></path><rect x="7" y="14" width="10" height="7" rx="1"></rect></svg></div>
        <h3>Small, Custom, and Short-Run Book Printing</h3>
        <div class="fc-body">
          <p>Small print runs are suitable for personal copies, book launches, family gifts, local events, test sales, and independent distribution. You can begin with a manageable quantity without committing to hundreds of books before you understand demand. Once we know your preferred format, page count, and estimated quantity, we can compare practical printing options and explain how the cost changes at different volumes. This gives you greater control over your budget, storage, and future reprinting decisions.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - PRINTING BY READING AGE (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Children’s Book Printing Options for Every Reading Age Group</h2>
    <p style="margin:14px auto 0;">Children’s books need different printing choices depending on the reader’s age, how the book will be handled, and how much text or illustration appears on each page. We help authors choose suitable book sizes, paper stocks, bindings, and finishes so the final book feels appropriate, durable, and easy for children to enjoy.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"></rect><path d="M12 4v16"></path></svg></div>
        <h3>Ages 0–3: Durable Board Books for Babies and Toddlers</h3>
        <div class="fc-body">
          <p>Books for babies and toddlers need to withstand repeated handling, page turning, and the occasional spill. These projects usually benefit from thicker pages, strong binding, rounded corners, and bright, clear illustrations. We can discuss durable printing and finishing options based on your artwork, page count, and intended use.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 3–5: Colourful Picture Books for Preschool Readers</h3>
        <div class="fc-body">
          <p>Picture books for children aged three to five usually rely on full-colour illustrations, larger page sizes and clear text placement. We help you choose paper that reproduces colour accurately while remaining comfortable for young children to hold. Paperback and hardback options are available depending on your budget and how long you want the book to last.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Ages 6–8: Early Reader Books With Clear Layouts</h3>
        <div class="fc-body">
          <p>Early readers need books that feel manageable rather than crowded. Clear typography, comfortable spacing, shorter chapters, and well-positioned illustrations can make independent reading easier. We print early reader books in practical sizes with paper and binding options suited to classrooms, libraries, bookshops, and home reading.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 8–12: Middle-Grade Books Built for Longer Reading</h3>
        <div class="fc-body">
          <p>Books for readers aged eight to twelve often contain longer chapters, fewer illustrations, and higher page counts. Paperback printing is a popular and affordable choice for this age group, while hardback editions can work well for gifts, schools, or special releases. We help balance durability, readability, and production costs without making the finished book feel too heavy.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Not sure which printing format suits your target age group? Send us your page count, book size, artwork details, and preferred quantity. We can recommend suitable paper, binding, and finishing options before preparing your quote.</p>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Queensland authors, schools, and businesses we print books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who We Help With Book Printing Across Queensland</h2>
      <p>Book printing isn't only for people writing their first novel. We regularly print for:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time and established self-published authors</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools printing yearbooks, anthologies, or class books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Community groups and clubs producing histories or cookbooks</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Businesses printing reports, manuals, or client gift books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Photographers and artists producing portfolio books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Local writers' groups producing shared anthologies for the first time</span></li>
      </ul>
      <p>Paperback printing in Queensland is what most first-time authors ask about first, since it's the cheapest way to test whether a book sells before committing to a bigger or fancier run. There's nothing wrong with starting small and upgrading the format later if the book does well.</p>
      <p>If you're not sure whether your project fits, get in touch and describe it. If it's a bound book, there's a good chance we can help.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Queensland Book Printer</h2>
      <p>Not every printing job goes smoothly, and a lot of that comes down to picking the right printer from the start, before any file has even been sent through. When you're comparing book printing companies in Queensland, it's worth asking:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can I see a physical sample of their paper and binding before I commit to a full run?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if there's a printing fault, and who pays to fix it?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they charge extra for a printed proof, or is one included in the quote?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How long does a typical run actually take, from files approved to books delivered?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are there minimum order quantities, and what do they charge per copy at different volumes?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they handle the print-ready file setup, or do you need a designer first?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will someone actually explain the quote line by line if you ask, or just send a total?</span></li>
      </ul>
      <p>A printer who answers these clearly, without dodging or vague reassurance, is usually one worth trusting with your book. If a printer won't send a physical sample or won't put a turnaround time in writing, treat that as a warning sign rather than a small detail to overlook.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing the right book printer in Queensland" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PRINT QUALITY MATTERS (list) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why High-Quality Book Printing Protects Your Author Reputation</h2>
  </div>
  <div class="container narrow center">
    <p>A book is often the first physical thing a reader, client, or judge holds of your work. If the spine cracks after one read, the pages yellow within a year, or the cover peels at the corners, that reflects on the content too, fairly or not. Nobody separates the writing from the object it arrived in, at least not straight away.</p>
    <p style="margin-top:14px;">Good printing:</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>Protects the pages so the book lasts years, not months</li>
      <li>Makes the book easier to sell, since readers do judge a cover before they open the first page</li>
      <li>Gives you something you can actually be proud to hand someone at a launch or a meeting</li>
      <li>Avoids the cost and hassle of a reprint because the first run had faults nobody caught in time</li>
      <li>Means award submissions, review copies, and stockists all get a book that looks like it belongs on a shelf</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This matters just as much for a 40-page booklet as it does for a 400-page novel. A cheap-feeling program at a conference reflects on the event, the same way a flimsy paperback reflects on the story inside it.</p>
  </div>
</section>

<!-- 9 - OUR PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Queensland Book Printing Process: From File to Delivery</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: Tell Us About Your Project</h3></div>
        <div class="svc-step-body"><p>Send through your manuscript or design files, the quantity you're thinking of, and any binding preference. If you don't know what binding suits your book yet, that's fine; we'll talk it through and suggest options based on what the book is for.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: File Check and Quote</h3></div>
        <div class="svc-step-body"><p>We check that your books for printing in Queensland are set up correctly, meaning the right bleed, margins, resolution, and colour profile, and flag anything that needs fixing before it becomes a problem on the press. Then we send you a firm quote based on quantity, paper, and binding, broken down so you can see where the cost is coming from.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: Proof Approval</h3></div>
        <div class="svc-step-body"><p>Before we run the full job, you'll see a proof, either digital or physical depending on the run size, so you can check colours, spelling on the cover, and page order before anything is locked in. This is the point to catch mistakes, not after five hundred copies are already bound.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: Printing and Binding</h3></div>
        <div class="svc-step-body"><p>Once you approve the proof, we print and bind the full run. Turnaround depends on quantity and binding type, and we'll give you a realistic timeframe upfront, not an optimistic guess that slips by two weeks once the job actually starts.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: Delivery</h3></div>
        <div class="svc-step-body"><p>Finished books are packed and delivered to your address, or you can collect them if that suits you better. Either way, we'll confirm timing with you so you're not left guessing when a launch or event is coming up.</p></div>
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
      <h2>Why Queensland Authors Choose <em>Purple Giraffe Press</em> for Printing</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Straightforward pricing.</h3><p>You'll get a written quote before anything is printed, with no surprise charges added afterwards.</p></article>
      <article><span>✓</span><h3>We handle small and larger runs.</h3><p>You're not locked into printing hundreds of copies if you only need a few dozen.</p></article>
      <article><span>✓</span><h3>Real communication.</h3><p>You'll deal with an actual person who can answer questions about your specific job, not a generic ticket system.</p></article>
      <article><span>✓</span><h3>Australian spelling and formatting checked.</h3><p>If your manuscript has been through overseas editing, we'll flag anything that reads oddly for a Queensland audience before it goes to print.</p></article>
      <article><span>✓</span><h3>Paper and finish options explained plainly.</h3><p>We won't push you toward the most expensive paper or laminate if a simpler option suits your book just as well.</p></article>
      <article><span>✓</span><h3>Support if your file isn't ready.</h3><p>If you've written the book but never set up a print-ready file before, we'll tell you exactly what's needed rather than leaving you to figure it out from a technical manual.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for book printing in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Clear Book Printing Prices Based on Your Project in Queensland</h2>
      <p>Pricing depends on page count, trim size, paper stock, binding type, and how many copies you're ordering. There's no single flat rate that works fairly across a 40-page booklet and a 400-page hardback, so we quote each job individually once we know the details.</p>
      <p>As a general rule, larger quantities bring the per-copy cost down, since setup costs get spread across more books. Hardback, foil stamping, and spot UV finishes all cost more than a plain matte paperback, simply because they involve extra materials and an extra step on the press. None of that means you need the most expensive option. Plenty of books look and sell perfectly well with a straightforward paperback finish, and we'll tell you honestly if that's the better call for your budget and your goals.</p>
      <p>Ask for a quote, and we'll break the numbers down so you can see exactly what you're paying for, rather than a single total with no explanation behind it.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 15 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- explore more';
$location_services_heading = 'Additional Services to Support Your Book Beyond Printing';
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
      <h2>Ready to Print Your Book With <em>Queensland Experts?</em></h2>
      <p>If you've got a manuscript sitting on your desktop and you're ready to turn it into something real, get in touch with Purple Giraffe Press. Tell us about your project, and we'll walk you through paper, binding, and pricing so you know exactly what to expect before you commit to anything.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to print your book in Queensland" loading="lazy" decoding="async">
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

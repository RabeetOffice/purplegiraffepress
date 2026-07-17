<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Printing in Melbourne';
$page_description = 'High-quality children\'s book printing in Melbourne. Vibrant colours, durable binding, and fast turnaround for authors and publishers. Free quote today!';
$canonical_path   = 'childrens-book-printing-in-melbourne.php';
$breadcrumb_name  = 'Book Printing in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'Melbourne',     'url' => page_url('locations/melbourne.php')],
    ['name' => 'Book Printing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does Children’s book printing usually take in Melbourne?',
    'a' => 'Book printing turnaround in Melbourne depends on your order size, page count, paper type, and binding style. Once we review your project details, we can give you a clear and realistic timeframe before printing begins.',
  ),
  1 =>
  array (
    'q' => 'Can I order just one copy of my children’s book in Melbourne?',
    'a' => 'Yes. We offer single-copy book printing in Melbourne as well as larger print runs, so you do not need to commit to a large quantity if you only need one proof, personal copy, or sample book.',
  ),
  2 =>
  array (
    'q' => 'Do I need to supply a print-ready file for book printing in Melbourne?',
    'a' => 'A print-ready file is helpful, but it is not a problem if you are unsure. We can guide Melbourne authors, schools, and businesses through the correct file setup, formatting requirements, and print specifications.',
  ),
  3 =>
  array (
    'q' => 'What is the difference between hardback and paperback book printing?',
    'a' => 'Hardback book printing gives your book a strong, premium, and durable finish, which is ideal for special editions, keepsakes, and professional projects. Paperback printing is more flexible and affordable, making it a popular choice for novels, workbooks, and everyday reading copies in Melbourne.',
  ),
  4 =>
  array (
    'q' => 'Can you print booklets as well as full books in Melbourne?',
    'a' => 'Yes. We provide booklet printing and full book printing in Melbourne, including short projects, catalogues, manuals, yearbooks, paperback books, and hardback editions.',
  ),
  5 =>
  array (
    'q' => 'Will I see a proof before the full Melbourne print run?',
    'a' => 'Yes. We prepare a proof copy first, so you can review the layout, cover, colours, paper quality, and overall finish before approving the full book printing order.',
  ),
  6 =>
  array (
    'q' => 'Do you print books for Melbourne schools and businesses, not just authors?',
    'a' => 'Yes. We work with Melbourne authors, schools, businesses, and organisations. Along with novels and personal books, we can print yearbooks, catalogues, training manuals, corporate books, booklets, and community projects.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). streetAddress omitted
   until we have a Melbourne address. */
$location_business = [
    'locality'   => 'Melbourne',
    'region'     => 'VIC',
    'postalCode' => '3000',
    'country'    => 'AU',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Book Printing</div>
      <h1>Turning Your Story into a Real Book: Children's <em>Book Printing</em>, <strong>Melbourne</strong></h1>
      <p class="lead">There is something special about holding a finished book. The weight of it in your hands. The smell of fresh paper. The cover you designed is sitting right there on the shelf.</p>
      <p class="lead">If you are looking for book printing in Melbourne, you have probably already written the hard part. You have a manuscript, a story, a school project, or a business booklet ready to go. What you need now is someone who can turn that file into a proper, finished book without the stress.</p>
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
      <h2>Books you are proud of, printed properly</h2>
      <p>At Purple Giraffe Press, we help authors, small businesses, schools, and families across Melbourne print books they are proud of. We keep the process simple and the pricing honest, so you always know what you are paying for.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Print Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/childrens-book-printing.webp" alt="Children's book printing in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - PRINTING SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Children’s Book Printing Services We Offer in Melbourne</h2>
    <p style="margin:14px auto 0;">We offer a full range of printed books in Melbourne, from single copies to larger runs. Whatever stage your project is at, we can help you get it into print.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Hardback Books</h3>
        <div class="fc-body">
          <p>A hardback book in Melbourne gives your story a solid, lasting feel. The stiff cover protects the pages inside and gives your book a premium look on any shelf. This is a popular choice for memoirs, children’s books, and special editions you want to keep for years.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Hardbound Book Printing</h3>
        <div class="fc-body">
          <p>Hardbound book printing in Melbourne is similar to hardback, but we can talk you through the different binding styles so you get the strength and finish that suits your book best. Some binding methods work better for thicker books; others suit slim volumes with fewer pages.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Paperback Printing</h3>
        <div class="fc-body">
          <p>Paperback printing in Melbourne is the most common choice for novels, guides, workbooks, and self-published titles. It is lighter, cheaper to produce, and still looks sharp with the right cover design. Many first-time authors start here before moving on to hardback editions later.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"></path><rect x="7" y="14" width="10" height="7" rx="1"></rect></svg></div>
        <h3>Paperback Book Printing</h3>
        <div class="fc-body">
          <p>If you need paperback book printing in Melbourne for a larger order, such as a print run for a bookshop or a bulk order for a school, we can scale the job up while keeping the quality consistent across every copy.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"></rect><path d="M12 4v16"></path></svg></div>
        <h3>Booklet Hardcover Printing</h3>
        <div class="fc-body">
          <p>A booklet hardcover in Melbourne suits shorter works such as poetry collections, recipe books, or company histories. It gives a small book a bigger presence, without the cost of a full length hardback run.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Book Cover Hardcover Finishing</h3>
        <div class="fc-body">
          <p>If you already have printed pages and just need a stronger cover fitted, we can handle a book cover hardcover in Melbourne as a separate job. This is useful for schools and organisations that print in bulk and want a more durable final product without redoing the whole print run. It also suits authors who printed early copies through another service and now want a sturdier cover for a special edition or a gift copy.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5a2 2 0 0 1 2-2h13v16H6a2 2 0 0 0-2 2Z"></path><path d="M19 19H6"></path></svg></div>
        <h3>Hard Cover and Hard Back Options</h3>
        <div class="fc-body">
          <p>Whether you call it a hard cover book in Melbourne or a hard back book in Melbourne, the process is the same on our end. We will talk you through paper weight, cover finish, and binding so the final product matches what you had in mind.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Melbourne authors, schools, and businesses we print books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Children’s Book Printing for Melbourne Authors, Schools and Businesses</h2>
      <p>We work with a wide mix of people who need books for printing in Melbourne, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First time authors publishing their first novel or memoir</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents printing a personal storybook for their child</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small businesses printing catalogues, manuals or company histories</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools printing yearbooks, anthologies or class projects</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Poets and short story writers printing small collections</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Community groups printing local history or recipe books</span></li>
      </ul>
      <p>If you have books for print in Melbourne and are not sure which format suits your project, just tell us what the book is for. We will suggest the binding and paper that makes sense for your budget and your goals.</p>
      <p>Every project is a little different. A children’s picture book needs thicker paper and strong colour reproduction. A novel needs clean, readable text and a binding that will not fall apart after a few reads. A business manual might need to lie flat on a desk while someone follows the steps inside. We take the time to ask what your book is actually for, rather than pushing you towards a one-size-fits-all option.</p>
    </div>
  </div>
</section>

<!-- 6 - PAPER, COVER AND FINISH (list) -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- your options</p>
    <h2>Choose the Right Paper, Cover, and Finish for Your Book</h2>
  </div>
  <div class="container narrow center">
    <p>The look and feel of a finished book comes down to more than just the binding. A few other choices make a real difference to the end result.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li><strong>Paper weight.</strong> Heavier paper feels sturdier and works well for photo books or children’s titles. Lighter paper suits long novels where page count and weight matter.</li>
      <li><strong>Matte or gloss cover.</strong> A matte finish gives a soft, modern look and resists fingerprints. A gloss finish makes colours pop and gives a shinier, more polished feel.</li>
      <li><strong>Colour or black and white pages.</strong> Full colour suits picture books, cookbooks and photo-heavy projects. Black and white text is the standard choice for novels and keeps costs down.</li>
      <li><strong>Page size.</strong> Standard sizes keep costs lower, while custom sizes can suit a specific style of book, such as a square picture book or a slim poetry collection.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>We can talk you through each of these options when you send through your project details, so you are not left guessing what will suit your book best.</p>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Best Children’s Book Printing Company in Melbourne</h2>
      <p>There are a few book printing companies in Melbourne to choose from, so it helps to know what to look for before you commit to one.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask about paper stock. Cheap paper can make even a good design look flat. A decent paper weight makes a real difference to how the finished book feels.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Check binding options. Not every printer offers hardback, paperback, and booklet binding under one roof. Fewer options can mean more back and forth if your first choice does not suit the book.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Look for clear pricing. You should know roughly what your book will cost before you send a single file.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask about proofs. A proof copy lets you check the print quality before a full run goes ahead. Skipping this step is where a lot of printing mistakes happen.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Find out about turnaround time. Some printers take weeks; others can turn a small run around much faster. Ask early so you are not caught out by a deadline.</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book printing company in Melbourne" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PRINT QUALITY MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Children’s Book Printing Quality Matters</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of authors put months, sometimes years, into writing a book. Then the printing stage gets rushed at the end because it feels like the easy part. It is not always the easy part.</p>
    <p style="margin-top:14px;">Small details matter here. The wrong paper can make photos look muddy. A weak binding can mean pages fall out after a few reads. A cover that is not finished properly can peel or crease within weeks. These are the kinds of problems that only show up after the book is already printed, which is why getting it right the first time matters.</p>
    <p style="margin-top:14px;">Books on print in Melbourne need to hold up to real use, not just look good in a photo. A children’s book will be handled by small hands. A recipe book will get splashed in the kitchen. A business catalogue will be passed around the meeting room. The printing choices you make should match how the book will actually be used.</p>
    <p style="margin-top:14px;">Here is what we pay close attention to on every job:</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>Paper weight and finish, matched to the type of book</li>
      <li>Binding strength, so pages stay put with regular use</li>
      <li>Colour accuracy, especially for books with photos or illustrations</li>
      <li>Cover stock and lamination, so covers do not scuff or peel</li>
      <li>Print alignment, so text and margins line up correctly on every page</li>
    </ul>
  </div>
</section>

<!-- 9 - OUR PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Melbourne Children’s Book Printing Process, Step by Step</h2>
    <p style="margin:14px auto 0;">Getting a book printed with us is straightforward. Here is how it works from start to finish.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Files</h3></div>
        <div class="svc-step-body"><p>Send through your manuscript or design file, along with any details about the size, page count, and binding style you are after.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Clear Quote</h3></div>
        <div class="svc-step-body"><p>We look at your project and send back a straightforward quote. No surprise costs added later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Prepare a Proof</h3></div>
        <div class="svc-step-body"><p>Before printing your full order, we prepare a proof copy so you can check the layout, colours, and cover before anything goes to full print.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>You Approve the Proof</h3></div>
        <div class="svc-step-body"><p>Once you are happy with the proof, we move ahead with the full print run. If you want changes first, we make them before printing begins.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>We Print and Deliver</h3></div>
        <div class="svc-step-body"><p>Your books are printed, checked for quality, and delivered or made ready for pickup, depending on what suits you.</p></div>
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

<!-- 11 - WHY A LOCAL PRINTER (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why local</p>
    <h2>Why Choose a Local Melbourne Children’s Book Printer</h2>
  </div>
  <div class="container narrow center">
    <p>Working with a Melbourne based printer instead of an overseas or online only service has some real advantages.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li><strong>Faster communication.</strong> You can call or email and get a real answer, not a long wait through a support queue.</li>
      <li><strong>Local pickup options.</strong> No waiting weeks for international shipping if you need copies quickly.</li>
      <li><strong>Better quality control.</strong> We can check physical proofs in person rather than relying only on digital previews.</li>
      <li><strong>Support for small print runs.</strong> You are not forced into a huge minimum order just to get a reasonable price.</li>
      <li><strong>A team that understands the local market.</strong> From school projects to small business catalogues, we know what Melbourne clients typically need.</li>
    </ul>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Choose <em>Purple Giraffe Press</em> for Children’s Book Printing</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We focus on getting the details right</h3><p>From paper choice to binding, we do not treat printing as an afterthought.</p></article>
      <article><span>✓</span><h3>Pricing is upfront</h3><p>You get a clear quote before we start, so there are no surprises on your invoice.</p></article>
      <article><span>✓</span><h3>We are based here in Australia</h3><p>You are dealing with a local team, not a call centre on the other side of the world.</p></article>
      <article><span>✓</span><h3>We treat every project with care</h3><p>Whether it is one copy for a family member or a run of hundreds for a bookshop, the same attention goes into each job.</p></article>
      <article><span>✓</span><h3>Communication stays simple</h3><p>You will always know what stage your order is at and what happens next.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear quote for children's book printing in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Children’s Book Printing Costs in Melbourne</h2>
      <p>Pricing depends on a few things, including page count, paper weight, binding style, cover finish, and how many copies you need. A short paperback run will cost less than a full-colour hardback edition, and a single copy will cost more per book than a larger print run.</p>
      <p>We do not believe in vague pricing. Once we know the details of your project, we will give you a clear quote before any work begins, so you always know what to expect.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
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
      <h2>Ready to Print Your <em>Children’s Book in Melbourne?</em></h2>
      <p>If you have a manuscript sitting on your desktop or a design file ready to go, do not let it sit there any longer. Get in touch with Purple Giraffe Press and tell us about your project. We will talk you through your options, from paperback to hardback, and get you a straightforward quote so you can move ahead with confidence.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to print your children's book in Melbourne" loading="lazy" decoding="async">
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

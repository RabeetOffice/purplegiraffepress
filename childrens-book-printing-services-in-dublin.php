<?php
include 'includes/config.php';

$page_title       = 'Book Printing Services | Dublin Print Studio';
$page_description = 'Turn your manuscript into a beautifully printed book in Dublin. Quality book printing services that bring your story to life, page by page.';
$canonical_path   = 'childrens-book-printing-services-in-dublin.php';
$breadcrumb_name  = 'Book Printing in Dublin';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'Dublin',        'url' => page_url('locations/dublin.php')],
    ['name' => 'Book Printing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to get a book printed in Dublin?',
    'a' => 'It depends on the format and quantity, but most paperback runs take one to two weeks once you have approved a proof. Hardback jobs can take a little longer because of the extra binding steps. We will give you a realistic date once we see your specs.',
  ),
  1 =>
  array (
    'q' => 'Do you print books for authors outside Dublin, including London?',
    'a' => 'Yes. While we are based in Dublin, we regularly print for authors and publishers in London, and print-ready files can be sent, and delivery arranged wherever you are, so distance is rarely a problem.',
  ),
  2 =>
  array (
    'q' => 'Can you print just one copy of my book?',
    'a' => 'Yes, short runs and single copies are both possible, though the unit cost is higher than for a larger batch. It is a common choice for authors who want to see physical proof before ordering more.',
  ),
  3 =>
  array (
    'q' => 'What file format do you need my manuscript in?',
    'a' => 'A print-ready PDF is easiest for us to work with. If you only have a Word document or a design file from another programme, send it over, and we will let you know if it needs any changes before printing.',
  ),
  4 =>
  array (
    'q' => 'Is a proof copy included in the price?',
    'a' => 'Yes, a proof is part of our standard process before any full run goes ahead. It gives you a chance to catch mistakes while they cost nothing to fix.',
  ),
  5 =>
  array (
    'q' => 'Do you offer courier delivery to London or only collection in Dublin?',
    'a' => 'Both. You can collect from us in Dublin, or we can arrange courier delivery, including to London and other cities, once your order is packed and ready.',
  ),
  6 =>
  array (
    'q' => 'What is the difference between hardback and hardbound printing?',
    'a' => 'A hardback is a fully cased book with rigid board covers, often with a printed jacket. Hardbound sits in between paperback and full hardback, using a stiffer cover with a simpler binding method, which usually costs less while still feeling sturdy.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Book Printing</div>
      <h1>Children’s Book Printing Services in <strong>Dublin</strong>: From <em>Manuscript to Masterpiece</em></h1>
      <p class="lead">You have written the book, or your business needs a run of booklets, and now you need someone in Dublin who can actually print it properly. Not a big anonymous factory that treats your order like a number. A local team that picks up the phone, checks your files properly, and prints a book you will be proud to hold.</p>
      <p class="lead">That is what we do at Purple Giraffe Press. We work with first-time authors, small publishers, schools, and local businesses across Dublin who need printing books in Dublin done right, the first time.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Print Run</a>
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
      <p>Most people who come to us have never printed a book before, and that is completely fine. You do not need to know the difference between a matt cover and a gloss cover, or what page count works out cheapest. That is our job to explain, in plain terms, before you spend a penny.</p>
      <p>What you do need is someone who will look at your actual files, tell you honestly what will and will not work, and give you a proof to check before committing to a full print run. That is the standard we hold ourselves to on every job, big or small.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Print Run &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/childrens-book-printing.webp" alt="Children's book printing services in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - PRINTING FORMATS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Explore Premium Hardback, Paperback, and Custom Children’s Book Printing Options</h2>
    <p style="margin:14px auto 0;">Every book is different, so we do not force every job through the same machine and hope for the best. Below is a breakdown of the main formats we handle.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Hardback Book Printing</h3>
        <div class="fc-body">
          <p>If you want something that feels solid on a shelf, a hardback book in Dublin is usually the answer. We print cased hardbacks with proper board covers, options for a printed jacket or a printed case, and a choice of matt or gloss lamination. These suit memoirs, coffee table books, children's books, and anything you plan to keep for years.</p>
          <p>Board thickness and spine construction make the biggest difference to how a hardback feels in the hand. We can talk you through the options rather than defaulting to whatever is cheapest, so the finished copy actually matches what you had in mind when you started writing.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h16v14H4Z"></path><path d="M8 5v14"></path><path d="M12 9h5M12 13h5"></path></svg></div>
        <h3>Paperback Book Printing</h3>
        <div class="fc-body">
          <p>Most novels, non-fiction titles, and self-published books go out as paperbacks, and for good reason. Paperback book printing in Dublin from us gives you a lighter, cheaper unit cost without cutting corners on the actual print quality. We offer perfect binding as standard, with saddle stitching available for shorter page counts.</p>
          <p>Paper stock matters more than most people expect here. A cream, slightly heavier stock reads better for fiction and feels less see-through, while a brighter white works well for anything with photos or diagrams. We will point you toward the right stock once we know what your book actually contains.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="2"></rect><path d="M8 3v18M12 8h5M12 12h5"></path></svg></div>
        <h3>Hardbound Book Printing</h3>
        <div class="fc-body">
          <p>Some clients want the durability of a hardback without the full case-binding cost. Hardbound book printing in Dublin sits between the two, using a stiffer cover board with a sewn or glued spine that holds up to repeated handling. It is a good middle ground for reference books, workbooks, and anthologies.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4v16"></path><path d="M12 4 5 6v13l7-2 7 2V6Z"></path></svg></div>
        <h3>Booklets and Cover Options</h3>
        <div class="fc-body">
          <p>Not every job is a full-length book. We also handle shorter runs and specialist covers, including a booklet hardcover in Dublin for reports, portfolios, and school yearbooks. If you already have a manuscript but need advice on a book cover hardcover in Dublin, we can talk you through board weight, lamination, and foil options before you commit.</p>
          <p>We also print run-of-the-mill soft covers for anyone who just needs a straightforward, affordable finish. A hard-cover book in Dublin does not need to be complicated or expensive once you know what you actually need it for.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Choosing The Right Printing Style For Different Age Groups</h2>
    <p style="margin:14px auto 0;">Children's books require different printing choices depending on the age of the readers. From durable board books for toddlers to detailed hardbacks for older children, we help authors choose the right format, paper, and finish for their audience.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Baby And Toddler Books (Ages 0–3)</h3>
        <div class="fc-body">
          <p>These books often need stronger materials, thicker pages, and durable finishes that can handle frequent handling by young children.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Books (Ages 3–7)</h3>
        <div class="fc-body">
          <p>Picture books benefit from high-quality colour printing, premium paper options, and finishes that bring illustrations and storytelling to life.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Early Readers And Chapter Books (Ages 5–10)</h3>
        <div class="fc-body">
          <p>These books usually focus on comfortable reading formats with clear layouts, lightweight paper choices, and practical designs for young independent readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Middle Grade Books (Ages 8–12)</h3>
        <div class="fc-body">
          <p>Longer children's stories often suit paperback or hardback formats with professional covers and durable binding for repeated reading.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Understanding your target age group helps us recommend the right printing format, materials, and finishing options so your book feels suitable for the readers it is created for.</p>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin authors, schools, and businesses we print books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Trusted Children’s Book Printing Solutions For Authors, Schools and Businesses</h2>
      <p>There is no typical client here. Some people come to us with a finished manuscript and a clear idea of what they want. Others just know they need books for printing in Dublin and are not sure yet whether that means fifty copies or five hundred. Both are welcome.</p>
      <p>Our clients cover a wide range of needs, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published and first-time authors printing their debut novel or memoir</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers running short to medium print runs</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and colleges print yearbooks, workbooks, or booklets</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Local businesses and charities printing reports, brochures, or booklets</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Photographers and artists printing hardback portfolio or coffee table books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Anyone who wants a proper physical copy of their work, not just a digital file</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How To Choose The Children’s Book Printing Company In Dublin</h2>
      <p>There are a fair few book printing companies in Dublin, and choosing between them can feel confusing if you have never done this before. Before you commit to anyone, it is worth asking:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you a physical sample of their paper stock and binding before you pay?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they give you a proof copy to check before the full run goes to print?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is the quote clear about page count, paper weight, binding type, and cover finish, or is it vague?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if the files you send are not print-ready? Do they help fix them or reject the job outright?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What is the realistic turnaround time, including any busy periods like September or December?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they handle reprints easily if you need more copies later, without starting from scratch?</span></li>
      </ul>
      <p>A printer who answers these questions clearly, without dodging or overselling, is usually one worth trusting with your book. If a quote seems unusually cheap compared to everyone else you have asked, it is worth finding out why. Sometimes it means thinner paper or a weaker binding method that will not hold up over time.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book printing company in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PRINT QUALITY MATTERS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Children’s Book Printing Quality Makes A Difference</h2>
  </div>
  <div class="container narrow center">
    <p>It is tempting to think printing is printing, and any machine will do. In practice, the difference shows up the moment someone picks up the finished copy. A book that looks fine on a screen can still come out wrong on paper if nobody checked the file properly first.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>A properly bound book lies flatter and lasts longer, especially with regular use</li>
      <li>Correct paper weight stops text from showing through from the other side of the page</li>
      <li>Accurate colour matching means your cover looks the way you designed it, not a faded version</li>
      <li>A clean trim means every page line up, instead of a wobbly, uneven edge</li>
      <li>Good proofing before the full run catches mistakes while they are still cheap to fix</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this is about being fussy. It is the difference between a book that looks self-published in the wrong way and one that looks like it came from a proper publisher.</p>
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
    <h2>Our Simple Children’s Book Printing Process From Start To Finish</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Files</h3></div>
        <div class="svc-step-body"><p>Send your manuscript or design files, along with the format you are after, whether that is a cased hardback, a paperback, or a shorter booklet run. We will tell you straight away if anything looks off, such as low-resolution images or missing bleed.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Quote and Confirm Specs</h3></div>
        <div class="svc-step-body"><p>We work out page count, paper stock, binding, and cover finish, then send you a clear quote. No hidden extras added at the end. If you are not sure which paper or binding suits your book, we will suggest a couple of options at different price points so you can compare properly.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>You Approve a Proof</h3></div>
        <div class="svc-step-body"><p>Before we run your full order, you get a proof to check. This is your chance to catch typos, colour issues, or layout problems while it still costs nothing to fix.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>We Print and Bind</h3></div>
        <div class="svc-step-body"><p>Once you approve the proof, we move to the full print run. Paperback printing in Dublin usually moves faster through this stage than hardback work, simply because the binding process has fewer steps.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Collection or Delivery</h3></div>
        <div class="svc-step-body"><p>You can collect your finished books from us, or we can arrange delivery. Either way, we check a sample copy from the finished batch before it goes out the door, so any problem is caught by us rather than by you after opening the box.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Choose <em>Purple Giraffe Press</em> For Children’s Book Printing</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Real conversations, not a call centre</h3><p>You will speak to someone who actually understands binding, paper stock, and print files, not a script reader.</p></article>
      <article><span>✓</span><h3>Proofs as standard</h3><p>We do not send your full order to print without your sign-off on a proof copy first.</p></article>
      <article><span>✓</span><h3>Honest turnaround times</h3><p>We tell you the real timeline, including if you have picked a busy period, instead of promising something we cannot deliver.</p></article>
      <article><span>✓</span><h3>Small run friendly</h3><p>You do not need to print a thousand copies to get proper attention. We handle short runs of hardback books in Dublin projects just as carefully as bigger ones.</p></article>
      <article><span>✓</span><h3>Straightforward pricing</h3><p>No confusing add-ons buried in the small print. What we quote is what you pay, unless you change the spec yourself.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's book printing in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does A Children’s Book Printing Service Cost?</h2>
      <p>The cost of book printing depends on factors such as book format, page count, paper quality, binding style, finishing options, and the number of copies required. Every project is different, so we provide personalised recommendations based on your specific needs.</p>
      <p>Whether you need a single proof copy or a larger print run, our team will guide you through the best options and provide a clear quotation with no hidden surprises.</p>
      <p>Share your book details with us, and we will help you choose the right printing solution for your project.</p>
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
      <h2>Ready To Transform Your Manuscript Into A <em>Printed Children’s Book?</em></h2>
      <p>If you have a manuscript ready, or you are still working out the details, get in touch. Tell us roughly what you are after, whether that is one finished copy or several hundred, and we will guide you through the rest. Getting books for print in Dublin sorted does not need to be complicated, and we are happy to answer questions before you commit to anything.</p>
      <p>There is no pressure to decide on the spot. Send us what you have, ask whatever is on your mind, and take the quote away to think over if you need to.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to print your children's book in Dublin" loading="lazy" decoding="async">
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

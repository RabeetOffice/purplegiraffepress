<?php
include 'includes/config.php';

$page_title       = 'Professional Children\'s Book Printing Services London';
$page_description = 'Need high-quality printing for your children\'s book in London? We offer expert printing, binding and finishing services with great attention to detail.';
$canonical_path   = 'childrens-book-printing-services-london.php';
$breadcrumb_name  = 'Book Printing in London';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'London',      'url' => page_url('locations/london.php')],
    ['name' => 'Book Printing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How much does it cost to print a book in London?',
    'a' => 'It depends on page count, binding, paper, and quantity. Send us your details, and we will give you a proper itemised quote rather than a rough guess.',
  ),
  1 =>
  array (
    'q' => 'What is the minimum number of books I can order?',
    'a' => 'This varies by binding type, but we can usually accommodate small runs, including short print runs for authors printing their first book.',
  ),
  2 =>
  array (
    'q' => 'How long does book printing take in London?',
    'a' => 'Turnaround depends on your binding type and quantity, but we will always give you a realistic date before you place your order, and we will stick to it.',
  ),
  3 =>
  array (
    'q' => 'Can I collect my printed books in person in London?',
    'a' => 'Yes. Since we are based in London, collection is available if that suits you better than delivery.',
  ),
  4 =>
  array (
    'q' => 'Do you print both hardback and paperback books?',
    'a' => 'Yes. We offer hardback, paperback, and booklet printing, along with a range of cover finishes to suit your budget and the type of book you are producing.',
  ),
  5 =>
  array (
    'q' => 'Will you check my file before printing, or just print what I send?',
    'a' => 'We always check files properly before printing. If something looks likely to cause a problem, we will tell you and suggest a fix before your print run begins.',
  ),
  6 =>
  array (
    'q' => 'Can you help if I have never had a book printed before?',
    'a' => 'Yes, and most of our clients are in exactly that position. We will talk you through paper choices, binding options, and file setup in plain English, with no assumed knowledge.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). UK country code and a
   central-London placeholder postcode until we have a real London address. */
$location_business = [
    'locality'   => 'London',
    'region'     => 'London',
    'postalCode' => 'EC1V 2NX',
    'country'    => 'GB',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Book Printing</div>
      <h1>Premium <em>Children’s Book Printing Services</em> in London for Authors, Businesses &amp; Publishers</h1>
      <p class="lead">You have written your book. You have edited it, checked it, maybe read it out loud to yourself more times than you would like to admit. Now you need someone to turn that file into something you can actually hold, sell, or hand out.</p>
      <p class="lead">That is where we come in. Purple Giraffe Press has been printing books in London for years, working with authors, small publishers, schools, and local businesses who want a printed book that looks and feels right.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Print Run</a>
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
      <h2>We Are Not A Giant Faceless Print Factory.</h2>
      <p>We are a small team that answers the phone, checks your files properly, and tells you honestly if something will not work before you spend money on it.</p>
      <p>This page covers everything you need to know about our book printing service. What we offer, how the process works, what to ask any printer before you commit, and what our own pricing looks like. If you just want a quote, skip to the bottom and get in touch. If you want to understand the options first, read on.</p>
      <p>Being based in London matters more than people expect. It means you can come and see samples in person, drop off files rather than post them, and speak to someone who understands the deadlines that come with local school terms, book fairs, and launch events. You are not sending your manuscript off into the unknown. You are working with a team down the road.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Print Run &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/childrens-book-printing.webp" alt="Children's book printing services in London at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - PRINTING OPTIONS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Professional Children’s Book Printing Options For Every Publishing Project</h2>
    <p style="margin:14px auto 0;">Not every book needs the same treatment. A children's picture book, a wedding photo album, a business report, and a poetry pamphlet all need different paper, different binding, and a different finish. Here is how we break it down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V4a2 2 0 0 0-2-2H6.5A2.5 2.5 0 0 0 4 4.5v15Z"></path><path d="M4 19.5A2.5 2.5 0 0 0 6.5 22H20v-5"></path></svg></div>
        <h3>Hardback Book Printing for Authors and Publishers</h3>
        <p>A hardback book in London costs more to produce than a paperback, but it earns its keep. It survives being read again and again. It looks right on a shelf. It feels like a proper book, not a pamphlet.</p>
        <p>Our hardbound book printing in London service covers case-bound books with printed or laminated boards, a choice of paper stocks inside, and optional dust jackets. We work with picture books, memoirs, cookbooks, photo books and anything else that deserves a sturdy cover. If you are self-publishing and want your book to compete with what you see in a bookshop, hardback is usually the way to go.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Paperback Printing Done Properly</h3>
        <p>Most authors start with a paperback, and for good reason. It is cheaper, quicker to produce, and still perfectly professional if it is done well. Our paperback book printing in London service uses perfect binding as standard, which is the same method used by most commercial paperbacks. Pages are glued to a flexible cover along a flat spine, so the book opens and sits well on a shelf.</p>
        <p>We also offer saddle stitching for shorter paperback printing in London jobs, such as short story collections or slim poetry books, where a stapled spine makes more sense than glue.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Booklets and Softcover Print Runs</h3>
        <p>Not everything is a full-length book. We also handle booklet hardcovers in London jobs for schools, event organisers, and small businesses who need something between a leaflet and a full book. Think of school yearbooks, event programmes, training manuals or product catalogues. These usually use a lighter-weight cover and simpler binding, which keeps the cost down for a shorter print run.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v2M12 19v2M3 12h2M19 12h2M5.6 5.6l1.4 1.4M17 17l1.4 1.4M5.6 18.4 7 17M17 7l1.4-1.4"></path><circle cx="12" cy="12" r="4"></circle></svg></div>
        <h3>Cover Finishes and Materials</h3>
        <p>The cover is the first thing anyone touches, so it is worth getting right. We offer a book cover hardcover in London finish in matt or gloss laminate, spot UV highlights on titles or artwork, foil blocking for a premium look, and embossing on request. If you are after a genuinely hard-cover book in London that will last years of use in a library or classroom, we can talk you through board weights and lamination options that suit your budget. Some clients prefer the older term hardback book in London, and that is exactly the same product, just a different way of saying it.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M21 3 3 21M21 3h-6M21 3v6M8 8l8 8"></path><rect x="2" y="14" width="8" height="8" rx="1"></rect></svg></div>
        <h3>Paper Stock and Book Sizes</h3>
        <p>The paper you choose changes how a book feels as much as how it looks. Heavier, uncoated paper suits novels and memoirs, since it feels substantial without adding too much bulk. Coated paper, either matt or gloss, suits picture books, cookbooks, and anything with photographs or illustrations, since it brings out colour and detail properly.</p>
        <p>Standard trim sizes cover most projects, but we can also work to a custom size if your design needs it. If you are not sure what size suits your book, tell us who will be reading it and how it will be used, and we will suggest something sensible based on similar projects we have printed before.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - READING AGE FORMATS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- reading ages</p>
    <h2>Children’s Book Printing Formats For Every Reading Age Group</h2>
    <p style="margin:14px auto 0;">Children’s books are not all printed the same way. The ideal paper choice, binding style, size, and finish depend on who will be reading the book and how it will be used. We help authors choose printing options that match each stage of a child’s reading journey.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="9" width="8" height="8" rx="1"></rect><rect x="13" y="9" width="8" height="8" rx="1"></rect><rect x="8" y="1" width="8" height="8" rx="1"></rect></svg></div>
        <h3>Ages 0 To 3: Board Books For Early Learners</h3>
        <p>Books for babies and toddlers need to handle repeated reading and little hands turning pages. We recommend sturdy board book formats with thicker pages, durable finishes, and bright colour printing that keeps illustrations clear and engaging.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><path d="m21 15-5-5L5 21"></path></svg></div>
        <h3>Ages 3 To 7: Picture Books With High-Quality Colour Printing</h3>
        <p>Picture books rely heavily on artwork to tell the story. We focus on premium paper stocks, accurate colour reproduction, and finishes that make illustrations stand out while creating a professional book children and parents will enjoy reading together.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h16M4 9h16M4 13h10M4 17h7"></path></svg></div>
        <h3>Ages 5 To 8: Early Readers With Clear Layouts</h3>
        <p>Early readers need a balance between text and visuals. We help authors choose practical formats with readable page layouts, comfortable paper choices, and printing styles that support children gaining confidence with independent reading.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M2 6h7a3 3 0 0 1 3 3v11a2 2 0 0 0-2-2H2V6Z"></path><path d="M22 6h-7a3 3 0 0 0-3 3v11a2 2 0 0 1 2-2h8V6Z"></path></svg></div>
        <h3>Ages 8 To 12: Middle Grade Books With Professional Finishes</h3>
        <p>Middle-grade readers often move towards longer stories and chapter books. We provide paperback and hardback printing options with durable binding, quality paper, and professional finishes suitable for books that are read repeatedly and kept on shelves.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3 2.7 5.5 6.1.9-4.4 4.3 1 6-5.4-2.8L6.6 19.7l1-6L3.2 9.4l6.1-.9L12 3Z"></path></svg></div>
        <h3>Ages 12+: Young Adult Books With A Premium Look</h3>
        <p>Young adult books require a more mature presentation. We help authors select formats, cover finishes, and print styles that reflect the tone of the story while creating a book that appeals to older readers.</p>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE SUPPORT: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The authors, schools, and publishers we print children's books for in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our London Children’s Book Printing Services Support</h2>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors bringing out their first novel, memoir, or picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small independent publishers who need reliable short and medium print runs</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools producing yearbooks, prospectuses, and anthologies of pupil work</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Charities and community groups printing fundraising books or local history projects</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Businesses producing branded books, portfolios, cookbooks, or company histories</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Photographers and artists producing photo books and exhibition catalogues</span></li>
      </ul>
      <p>If your project does not fit neatly into any of these categories, get in touch anyway. Most printing questions have a straightforward answer once we know what you are trying to make.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE A PRINTER: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to ask</p>
      <h2>How to Choose Children’s Book Printing Companies in London</h2>
      <p>There are plenty of printers to choose from, and not all of them do a good job. Before you commit to anyone, including us, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you real printed samples, not just photos on a website?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain paper weights and finishes in plain terms, or just quote you a price with no detail?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they tell you if your file is not set up correctly, rather than printing it as is and letting you find out later?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is there a minimum order quantity, and does it suit the size of your print run?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they give a clear delivery timeframe, and do they stick to it?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can you speak to a real person if something goes wrong, rather than dealing only with an automated system?</span></li>
      </ul>
      <p>A good printer wants your book to come out right. If a company avoids these questions or gives vague answers, treat that as a warning sign.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book printing company in London" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PRINT QUALITY MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Book Printing Quality Makes A Difference</h2>
  </div>
  <div class="container narrow center">
    <p>It is easy to think of printing as the last, boring step after the real work of writing and editing. In practice, it changes how your book is received.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>A book with the wrong paper weight feels flimsy, even if the writing inside is excellent</li>
      <li>Poor binding means pages fall out after a few reads, which is a disaster for a children's book or a school yearbook</li>
      <li>A cheap-looking cover puts readers off before they open the first page</li>
      <li>Inconsistent colour printing can make photographs or illustrations look washed out or muddy</li>
      <li>Getting the trim size wrong can throw off your layout completely, especially with picture books</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>If your project matters to you, whether that is a novel you have worked on for years or a company history for a big anniversary, the print quality is part of the finished product. It deserves the same care as the writing.</p>
  </div>
</section>

<!-- 9 - OUR PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Five-Step Book Printing Process Explained</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Tell Us About Your Project</h3></div>
        <div class="svc-step-body"><p>Send us your manuscript or design file, along with details on quantity, size, and whether you want hardback, paperback, or booklet. Do not worry if you are not sure yet. We can talk through the options on the phone or over email, and we are happy to send you sample papers and finishes before you decide on anything.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Check Your Files</h3></div>
        <div class="svc-step-body"><p>Before anything goes near a printer, we check your files properly. This means looking at resolution, bleed, margins, and colour setup. If anything is likely to cause a problem, such as low-resolution images or text sitting too close to the edge of the page, we tell you and suggest a fix rather than printing it as it stands.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>You Approve a Proof</h3></div>
        <div class="svc-step-body"><p>We send a physical or digital proof for you to check before the full run begins. This is your last chance to catch typos, layout issues, or colour problems before printing starts properly. Take your time with this step. It is far easier to fix a mistake on a single proof copy than after a thousand copies have already been printed.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>We Print Your Run</h3></div>
        <div class="svc-step-body"><p>Once you approve the proof, we move to the full print run. Turnaround depends on quantity, binding type, and finish, and we will always give you a realistic timeframe upfront rather than an optimistic one. If you have a fixed deadline, such as a launch event or a school term date, tell us early so we can plan around it properly.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Delivery or Collection</h3></div>
        <div class="svc-step-body"><p>Finished books are packed carefully and delivered to your address, or you can collect them if that suits you better. Larger runs are usually shrink-wrapped and boxed for storage or distribution, and we can split a delivery across more than one address if that helps, for example, sending some copies direct to a warehouse and the rest to you.</p></div>
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
      <h2>Why Authors Choose <em>Purple Giraffe Press</em> For Printing</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Quote &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>&#10003;</span><h3>Real people, real answers</h3><p>You can call us and speak to someone who actually understands book printing, not a call centre reading from a script.</p></article>
      <article><span>&#10003;</span><h3>Honest file checking</h3><p>We tell you if there is a problem with your file before we print, not after.</p></article>
      <article><span>&#10003;</span><h3>Local to London</h3><p>Being based here means faster turnaround for London-based clients and the option to collect in person.</p></article>
      <article><span>&#10003;</span><h3>Flexible run sizes</h3><p>Whether you need twenty copies or two thousand, we can usually accommodate it.</p></article>
      <article><span>&#10003;</span><h3>Clear communication throughout</h3><p>You will always know what stage your order is at and when to expect it.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's book printing in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Book Printing Costs In London: What Influences Your Price</h2>
      <p>Pricing depends on several things: page count, paper stock, binding type, cover finish, and quantity. Because of this, we do not publish a single flat rate, since it would not reflect what most projects actually cost. A short run of fifty paperbacks and a run of a thousand hardbacks are simply not comparable jobs, and any printer who quotes both the same way is not being straight with you.</p>
      <p>As a general rule, larger quantities bring the cost per copy down, hardback costs more than paperback, and colour printing costs more than black and white. Special finishes like foil blocking or embossing add cost too, but often by less than people assume, since they are usually applied to the cover only rather than every page.</p>
      <p>What we can promise is a clear, itemised quote before you commit to anything. No hidden extras added after the fact. If your budget is tight, tell us, and we will suggest options that keep quality high while bringing the cost down, such as a lighter paper stock or a simpler binding method.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Quote &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready To Turn Your Manuscript Into A <em>Printed Book?</em></h2>
      <p>If you have a manuscript sitting on your laptop waiting to become a real book, get in touch with Purple Giraffe Press today. Send us your file, tell us roughly what you have in mind, and we will come back with honest advice and a clear quote. No pressure, no jargon, just a straightforward conversation about turning your book into something you can hold in your hands.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Quote &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to print your children's book in London" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 18 - FOOTER -->
<?php include 'includes/footer.php'; ?>

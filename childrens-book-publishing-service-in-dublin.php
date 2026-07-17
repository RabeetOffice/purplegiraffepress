<?php
include 'includes/config.php';

$page_title       = 'Dublin Publishing Service for Children\'s Books';
$page_description = 'Turn your children\'s book into a published reality in Dublin. Guided, author-focused publishing services that bring your story to readers everywhere.';
$canonical_path   = 'childrens-book-publishing-service-in-dublin.php';
$breadcrumb_name  = 'Book Publishing in Dublin';
$breadcrumbs = [
    ['name' => 'Home',            'url' => page_url('index.php')],
    ['name' => 'Locations',       'url' => page_url('locations/')],
    ['name' => 'Dublin',          'url' => page_url('locations/dublin.php')],
    ['name' => 'Book Publishing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Dublin?',
    'a' => 'No. While we are based in Dublin and know the Irish market well, we work with authors from all over Ireland and abroad, including writers in London and the rest of the UK.',
  ),
  1 =>
  array (
    'q' => 'Can I submit a picture book if I live in London?',
    'a' => 'Yes. Distance is not a problem. We handle most of the process by email and video call, so authors in London or anywhere else can work with us just as easily as someone based in Dublin.',
  ),
  2 =>
  array (
    'q' => 'How long does the process take from manuscript to finished book?',
    'a' => 'It depends on how much editing and illustration work is needed. A simple project might take a few months. A book that needs a new illustrator and heavier editing will take longer. We will give you a realistic timeline once we have seen your manuscript.',
  ),
  3 =>
  array (
    'q' => 'Do I need a finished manuscript to get started?',
    'a' => 'No. You can send us a draft, even an unfinished one, and we will tell you honestly where it stands and what it needs before you go any further.',
  ),
  4 =>
  array (
    'q' => 'Will I lose the rights to my book?',
    'a' => 'No. Under our hybrid model, you keep more control over your rights than you would with most traditional publishing deals. We will explain exactly what you keep and what we handle before you agree to anything.',
  ),
  5 =>
  array (
    'q' => 'Do you help with marketing after the book is printed?',
    'a' => 'We help with the basics, such as getting your book into shops and schools and planning a launch. We are upfront that we are not a full marketing agency, so if you want a large-scale marketing campaign, we can point you toward specialists who focus on that.',
  ),
  6 =>
  array (
    'q' => 'What if my manuscript is not ready yet?',
    'a' => 'That is completely normal. Many authors come to us with a rough draft. We will tell you honestly what stage it is at and what it needs, whether that is a small polish or a bigger rewrite, before any money changes hands.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Book Publishing</div>
      <h1>Children's Book <em>Publishing Service</em> in <strong>Dublin</strong>: From Manuscript to Bookshelf</h1>
      <p class="lead">Writing a children's book is a big deal. You have spent hours on the story, the characters, maybe even the rhymes. Now you want it printed properly, sold in shops, and read by real children. That is where we come in.</p>
      <p class="lead">Purple Giraffe Press is one of the children's book publishers in Dublin that puts the author first. We are not a huge corporation with a call centre. We are a small, hands on team based right here in Dublin, and we work with parents, teachers, and first time authors every week.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Send Us Your Manuscript</a>
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
      <h2>We sit in the middle</h2>
      <p>If you have been searching online for help with your manuscript, you have probably found a mix of vanity presses, self-publishing platforms, and big houses that will not even open your email. We sit in the middle. We offer real editorial support, real production quality, and a fair deal, without the confusion.</p>
      <p>This page explains exactly what we do, how our process works, and how to get started.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Send Us Your Manuscript &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-publishing.webp" alt="Children's book publishing service in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE DO (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>How We Turn Your Children's Story Into A Book</h2>
    <p style="margin:14px auto 0;">We handle every part of getting a children's book ready for readers. Some authors need help from the very first draft. Others just need printing and distribution sorted. We can step in at any stage.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Hybrid Publishing For Children's Books In Dublin</h3>
        <div class="fc-body">
          <p>Hybrid publishing means you and Purple Giraffe Press share the work and the cost. You keep more control over your story and your rights than you would with a traditional deal, but you still get proper editing, design, and print quality. It suits authors who want a professional finish without waiting years for a traditional publisher to say yes.</p>
          <p>With hybrid publishing, you get:</p>
          <ul>
            <li>A dedicated editor who reads your full manuscript, not just a sample</li>
            <li>Professional cover design and interior layout</li>
            <li>A print run sized to your budget and goals</li>
            <li>Help getting your book into shops, schools, and online stores</li>
            <li>A clear breakdown of costs before you agree to anything</li>
          </ul>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Getting Picture Books Right, Page By Page</h3>
        <div class="fc-body">
          <p>Picture books are their own world. The words and pictures have to work together, and the page count, size, and format all matter more than people expect. We accept picture book submissions in Dublin from illustrators, writers, and author-illustrator teams.</p>
          <p>When you submit a picture book to us, we look at:</p>
          <ul>
            <li>How the story reads out loud, since most picture books are read to children, not by them</li>
            <li>Whether the pacing across the pages actually works</li>
            <li>If the artwork style suits the age group you are writing for</li>
            <li>Whether the length fits what booksellers and schools expect</li>
          </ul>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg></div>
        <h3>Editing And Manuscript Development</h3>
        <div class="fc-body">
          <p>Every manuscript gets a proper read-through before we talk about printing. This might mean small fixes, or it might mean a deeper look at plot, pacing, or character. We tell you honestly what your story needs. We do not just say yes to keep you happy.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r="1.5"></circle><circle cx="17.5" cy="10.5" r="1.5"></circle><circle cx="8.5" cy="7.5" r="1.5"></circle><circle cx="6.5" cy="12.5" r="1.5"></circle><path d="M12 2a10 10 0 0 0 0 20c1.4 0 2.5-1.1 2.5-2.5 0-.6-.2-1.2-.6-1.6-.4-.4-.6-1-.6-1.6 0-1.4 1.1-2.5 2.5-2.5H18a4 4 0 0 0 4-4c0-4.4-4.5-8-10-8Z"></path></svg></div>
        <h3>Illustration And Design Support</h3>
        <div class="fc-body">
          <p>Not every author already has an illustrator. If you need one, we can help you find someone whose style fits your story. If you already have an illustrator, we make sure the final files are print-ready and consistent from page to page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="7" rx="1"></rect></svg></div>
        <h3>Printing And Distribution</h3>
        <div class="fc-body">
          <p>Once the book is ready, we handle the physical side too. That covers paper stock, binding, print quantity, and getting copies into the right hands, whether that is a local bookshop, a school book fair, or an online store.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Choosing The Right Age Group For Your Children's Book</h2>
    <p style="margin:14px auto 0;">Every children's book needs to match the age and reading level of its audience. The language, illustrations, story length, and design all change depending on who the book is written for.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Baby And Toddler Books (Ages 0–3)</h3>
        <div class="fc-body">
          <p>Simple stories with repetition, rhythm, and bright illustrations designed for reading together with parents and carers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Picture Books (Ages 3–7)</h3>
        <div class="fc-body">
          <p>Stories that combine engaging words and artwork to build imagination, emotions, and early reading skills.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"></path></svg></div>
        <h3>Early Readers And Chapter Books (Ages 5–10)</h3>
        <div class="fc-body">
          <p>Books with simpler language and structured storytelling that help children develop confidence as independent readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Middle Grade Books (Ages 8–12)</h3>
        <div class="fc-body">
          <p>Longer stories with deeper characters, adventures, and themes that connect with growing readers.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Choosing the right age group helps us guide the editing, illustration style, formatting, and overall presentation so your book reaches the children it was created for.</p>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin writers, teachers, and illustrators we publish children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping Writers Turn Children's Stories Into Reality</h2>
      <p>We work with a wide range of people, not just seasoned authors. Unlike some of the larger publishing companies for children's books in Dublin, we do not only take on writers who already have an agent or a track record. Our clients include:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time writers with a finished manuscript and no idea what to do next</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and parents who have written a story for their own class or family and want it properly made</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators looking for a publishing partner for their own picture book ideas</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who have been turned down by traditional publishers but still believe in their story</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small business owners who want a branded children's book, for example, a book based on a local charity or community group</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - WHAT MAKES A CHILDREN'S BOOK WORK (list) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what works</p>
    <h2>What Makes A Children's Book Actually Work</h2>
  </div>
  <div class="container narrow center">
    <p>Before we even get to printing, it helps to know what separates a book that sells from one that sits in a box in the attic. In our experience, a few things come up again and again:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>The story has a clear beginning, middle, and end, even in a short picture book</li>
      <li>The language matches the age group, not too simple and not too advanced</li>
      <li>The illustrations support the story rather than just decorating it</li>
      <li>The book feels sturdy enough to survive being read fifty times by a five-year-old</li>
      <li>There is something in it that makes an adult want to read it out loud again</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this is about following a formula. Plenty of brilliant children's books break the rules. But knowing these basics helps you make better decisions about editing, design, and format, and it helps us give you feedback that is actually useful rather than vague.</p>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How To Choose A Children’s Book Publisher Without Getting Burned</h2>
      <p>There are a good few book publishing companies in Dublin, and not all of them are upfront about what you are paying for. Before you sign anything with anyone, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What exactly is included in the price, and what costs extra later</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who owns the rights to the book once it is printed</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you see a sample of the editing and design before paying the full amount</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many print copies do you actually get for your money</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who handles distribution, and is that included or a separate cost</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can you speak to a real person if something goes wrong</span></li>
      </ul>
      <p>A fair publisher will answer all of these clearly, without dodging the question. If a company does not put pricing or rights in writing, treat that as a warning sign.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book publisher in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHY QUALITY MATTERS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Quality Matters For Every Children's Book</h2>
  </div>
  <div class="container narrow center">
    <p>A rushed or poorly made children's book can put readers off, even if the story itself is good. Bad print quality, awkward page layout, or a cover that does not suit the age group can all get in the way of a great story reaching children. We are a publisher of children's books in Dublin deserve the same care as any other book on the shelf, and we treat every project that way.</p>
    <p style="margin-top:14px;">Getting the details right also matters for practical reasons:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Schools and libraries have standards for print quality and binding</li>
      <li>Booksellers judge a book on its cover before anyone reads a single page</li>
      <li>Parents notice when a book feels cheaply made, even if they cannot say exactly why</li>
      <li>A properly finished book opens doors to reviews, events, and repeat sales</li>
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
    <h2>Your Journey From Manuscript To Children's Book</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>You Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>If you have been typing "children's book publisher in Dublin" into a search bar, this is normally where things start. Send us your full story, or as much as you have written so far. Tell us a bit about your goals too, whether that is a small print run for family or a proper push into shops and schools.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Give You Honest Feedback</h3></div>
        <div class="svc-step-body"><p>We read the story properly and tell you where it stands. This might include notes on pacing, structure, or age suitability. We will also tell you if we think the manuscript needs more work before moving forward.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Agree A Plan And A Price</h3></div>
        <div class="svc-step-body"><p>Once we know what your book needs, we put together a clear plan covering editing, design, print run, and distribution. You will see the full cost before you commit to anything.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Editing And Design</h3></div>
        <div class="svc-step-body"><p>Your editor works through the manuscript with you. At the same time, we sort out illustration, if needed, and get the design and layout ready for print.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Proofing</h3></div>
        <div class="svc-step-body"><p>Before anything goes to print, you get to see a foolproof copy. This is your chance to catch anything that needs changing.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Printing And Launch</h3></div>
        <div class="svc-step-body"><p>Once you approve the proof, we print your book and help you plan how it reaches readers, whether that is a launch event, school visits, or getting stock into shops.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Choose <em>Purple Giraffe Press</em> Dublin</h2>
      <p>Not all publishing companies, children's books in Dublin included, treat authors the same way. Here is what sets us apart:</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Straight answers on pricing</h3><p>No confusing packages or hidden add-ons. You know what you are paying for from day one.</p></article>
      <article><span>✓</span><h3>A real editor for your book</h3><p>Not a template checklist, an actual person who reads your story and gives proper feedback.</p></article>
      <article><span>✓</span><h3>Local knowledge</h3><p>We know the Irish market, including schools, libraries, and bookshops, and we use that when planning your print run and distribution.</p></article>
      <article><span>✓</span><h3>You keep more say over your book</h3><p>Our hybrid model means you are involved in decisions, not just handed a finished product.</p></article>
      <article><span>✓</span><h3>No pressure to rush</h3><p>We would rather tell you a manuscript needs more time than push out a book that is not ready.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, written quote for publishing a children's book in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Understanding The Cost Behind Your Children's Book</h2>
      <p>Every project is different, so we do not publish a single flat price. The cost depends on things like the length of your book, whether it needs illustration, how much editing it needs, and your print run size. Once we have read your manuscript and understood your goals, we will give you a clear, written quote with no hidden extras. There is no charge for the initial read and quote.</p>
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
      <h2>Your Children's Story Deserves <em>A Place On Shelves</em></h2>
      <p>If you have a children's book manuscript sitting in a drawer, or you are still working on the final chapters, get in touch. Send us what you have, tell us a bit about your goals, and we will get back to you with honest feedback and a clear next step. There is no pressure and no obligation, just a straightforward conversation about your book.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to publish your children's book in Dublin" loading="lazy" decoding="async">
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

<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Proofreading Services London';
$page_description = 'Before you publish, get your manuscript checked thoroughly. Our London-based proofreaders catch grammar, spelling and punctuation errors with care.';
$canonical_path   = 'childrens-book-proofreading-services-london.php';
$breadcrumb_name  = 'Proofreading in London';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'London',      'url' => page_url('locations/london.php')],
    ['name' => 'Proofreading', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to proofread a children\'s book in London?',
    'a' => 'It depends on the length and condition of the manuscript. A short picture book can often be turned around within a few days, while a longer middle-grade novel may take one to two weeks. We will always give you a clear timeframe with your quote.',
  ),
  1 =>
  array (
    'q' => 'Do you offer proofreading for self-published authors in London?',
    'a' => 'Yes. Many of the authors we work with are self-publishing their first children\'s book and want a professional check before it goes to print or goes live online.',
  ),
  2 =>
  array (
    'q' => 'Can you proofread rhyming picture books?',
    'a' => 'Yes, and we pay close attention to rhythm and rhyme when we do. We always read rhyming text aloud to check that it flows naturally.',
  ),
  3 =>
  array (
    'q' => 'Do I need to live in London to use your service?',
    'a' => 'No. While we are based in London and understand the local market well, we work with authors and publishers by email from anywhere.',
  ),
  4 =>
  array (
    'q' => 'What file formats do you accept?',
    'a' => 'We usually work with Word documents, but we can also proofread PDFs and formatted print files if needed.',
  ),
  5 =>
  array (
    'q' => 'Will you make changes to my story or just fix errors?',
    'a' => 'We only correct spelling, grammar, punctuation, and consistency issues. We do not change your story, characters, or writing style without asking you first.',
  ),
  6 =>
  array (
    'q' => 'How do I get a quote for proofreading children\'s books in London?',
    'a' => 'Simply send us your manuscript, and we will review it and reply with a fixed price and turnaround time, with no obligation to proceed.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Proofreading</div>
      <h1>Children's Book <em>Proofreading in London</em> To Perfect <strong>Every Story Before Publishing</strong></h1>
      <p class="lead">If you have finished writing a children's book, or you are close to finishing, the next question is always the same. Who is going to check it before it goes anywhere near a printer? If you have been searching for children's book proofread services in London, you have probably noticed how many different options are out there, all promising something slightly different.</p>
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
      <!-- <p class="eyebrow script-mark">- what it is</p> -->
      <p>At Purple Giraffe Press, we work with authors, parents, teachers, and small publishers across London to give children's manuscripts a careful final check. We keep the process simple and the pricing honest, so you always know what is happening with your book and what it will cost.</p>
      <p>Children's books need a different kind of proofreading from adult fiction. Sentences are shorter. Rhythm matters more. A missing comma can change how a whole line sounds when read aloud at bedtime. We treat every manuscript with the same care we would want for our own child's bookshelf.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/proofreading.webp" alt="Children's book proofreading services in London at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - PROOFREADING FOR EVERY TYPE OF BOOK (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Expert Proofreading Services For Every Type Of Children's Book</h2>
    <p style="margin:14px auto 0;">Every story needs a slightly different check. A short rhyming picture book needs a proofreader who reads out loud and listens for rhythm. A longer middle-grade novel needs someone who can track small details across dozens of chapters. That is why we do not run a one-size-fits-all process. We match the check to the book.</p>
    <p style="margin:14px auto 0;">Our full proofreading service covers spelling, grammar, punctuation, and consistency throughout, along with a check on formatting and read-aloud flow. Most projects use a mix of the checks below, depending on the type of book.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Books</h3>
        <div class="fc-body">
          <p>Picture books rely on rhythm and simplicity. We check every line for flow, especially if your book rhymes. Rhyming text needs a proofreader who reads it aloud, not just on the page, because a word that looks fine can still throw off the beat.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Early Readers and Chapter Books</h3>
        <div class="fc-body">
          <p>These books are often a child's first step into reading alone. We look closely at repeated words, sentence length, and anything that might confuse a young reader who is still building confidence.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Middle Grade and Young Adult Manuscripts</h3>
        <div class="fc-body">
          <p>Longer manuscripts need a proofreader who can track details across many chapters. We keep notes on names, timelines, and small facts so nothing slips through by chapter twenty.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 4 20 10l-9.5 9.5H4v-6.5L14 4Z" transform="translate(0 0)"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Self-Published and Print-Ready Files</h3>
        <div class="fc-body">
          <p>If you are about to upload a file to a print-on-demand platform or send it to a printer, we do a final pass on the exact file you plan to use, checking layout as well as text.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.6-6.5 8-6.5s8 2.5 8 6.5"></path></svg></div>
        <h3>Board Books for Very Young Readers</h3>
        <div class="fc-body">
          <p>Books for toddlers and pre-schoolers often have very few words, which means every single one carries weight. We check board books with the same care we give longer manuscripts, since a mistake stands out even more when there are only a handful of words on the page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Bilingual and Dual-Language Books</h3>
        <div class="fc-body">
          <p>Some children's books are written in two languages side by side. We proofread the English text carefully and flag any spacing or layout issues that come from working with two languages on the same page.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - LOCAL TEAM: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="A London proofreading team that understands children's stories" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- local team</p>
      <h2>Choose A London Proofreading Team That Understands Children's Stories</h2>
      <p>Working with a local team means you can talk things through by phone at a normal hour, meet in person if you would like to, and get your manuscript checked by someone who understands British spelling, British schools, and the way children actually speak in the UK. Many authors looking for a children's book proofread in London tell us this local understanding is exactly why they wanted a team close to home, rather than sending their story off to someone overseas who might miss small cultural details.</p>
      <p>If you type book proofreading services in London into a search bar, you will get a long list of options, and it is easy to feel stuck before you even start. We try to make the first step easy. Send us your manuscript, tell us roughly what you need, and we will come back with a clear plan rather than a wall of jargon.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 6 - AGE-FOCUSED PROOFREADING (feature cards) -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Age-Focused Proofreading For Every Young Reading Level</h2>
    <p style="margin:14px auto 0;">The way we proofread changes slightly depending on who the book is written for. Before we start, we think about vocabulary, sentence length, and how the text will actually be read.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.6-6.5 8-6.5s8 2.5 8 6.5"></path></svg></div>
        <h3>Ages 0 to 3: Board Books</h3>
        <div class="fc-body">
          <p>For very young children, text is often just a handful of words per page. We check that every single word is spelled correctly and that nothing breaks the simple rhythm these books rely on.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v3"></path></svg></div>
        <h3>Ages 3 to 7: Picture Books</h3>
        <div class="fc-body">
          <p>Picture books are usually read aloud by an adult, so we pay close attention to how sentences sound, not just how they look on the page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 5 to 8: Early Readers</h3>
        <div class="fc-body">
          <p>At this stage, children are often reading alone for the first time. We check that vocabulary stays consistent, and that sentence structure does not suddenly become too difficult partway through the book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 8 to 12: Middle Grade Fiction</h3>
        <div class="fc-body">
          <p>Longer stories at this age rely on consistency across many chapters. We track names, places, and small details so nothing contradicts itself later in the book.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 7 - WHO WE SUPPORT: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Supporting Children's Book Authors Across London And Beyond</h2>
      <p>Our clients are not all the same, and we do not expect them to be. We have worked with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors preparing to self-publish</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents creating a personal keepsake book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who also write their own stories</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers creating classroom reading material</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers with limited in-house staff</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Literary agents who want a clean manuscript before submission</span></li>
      </ul>
      <p>Whatever your reason for writing a book, the process below stays roughly the same.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The children's authors, teachers and publishers we support across London" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children's Book Proofreading Process From Draft To Print</h2>
    <p style="margin:14px auto 0;">Checking a book is not one big task. It is a series of smaller ones, done in order.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You send over your file by email, along with your deadline and anything specific you are worried about. If your book rhymes or uses made-up words, let us know so we can pay extra attention to those parts.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Receive a Clear Quote</h3></div>
        <div class="svc-step-body"><p>We read through your manuscript, or a sample of it for longer books, and send back a fixed price and estimated turnaround time. There is no pressure to commit, and no charge for the quote itself.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Proofread Your Book</h3></div>
        <div class="svc-step-body"><p>Once you approve the quote, we get to work. We proofread using tracked changes, so you can see exactly what has been suggested and why. For rhyming or rhythmic text, we read every page aloud as part of the check.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>You Review the Changes</h3></div>
        <div class="svc-step-body"><p>We send back your manuscript with all suggested corrections marked clearly. You can accept, reject, or ask questions about any change, and we will always explain our reasoning.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Read-Through</h3></div>
        <div class="svc-step-body"><p>If you make any last edits based on our notes, we offer one final read-through to make sure nothing new has slipped in. This last pass is included in the price.</p></div>
      </article>
    </div>
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

<!-- 10 - HOW TO CHOOSE -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what to look for</p>
    <h2>How To Choose The Right Children's Book Proofreader in London</h2>
  </div>
  <div class="container narrow center">
    <p>Not every children's book proofreader in London understands children's books, and picking the wrong fit can waste both time and money. Before you commit to anyone, including us, it is worth asking a few honest questions:</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>Have they proofread children's books before, not just adult fiction?</li>
      <li>Do they read the text aloud, especially if your book rhymes?</li>
      <li>Will they explain their changes rather than just making them?</li>
      <li>Do they give a fixed quote before starting any work?</li>
      <li>Do they understand UK spelling and punctuation conventions?</li>
      <li>Can they work with your file format, whether that is Word, a PDF, or a formatted print file?</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>A good proofreader, whether that is us or someone else, should be happy to answer all of these without getting defensive.</p>
  </div>
</section>

<!-- 11 - WHY PROFESSIONAL PROOFREADING MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Proofreading Matters Before Publishing Your Story</h2>
  </div>
  <div class="container narrow center">
    <p>It is tempting to think proofreading is just a final formality on top of the real work. In practice, it does much more than that:</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>A clean manuscript builds trust with parents and readers before a single review is written</li>
      <li>Consistent spelling and grammar help young readers build reading confidence</li>
      <li>A polished manuscript shows agents and publishers that you take your work seriously</li>
      <li>Catching mistakes before printing avoids costly reprints later on</li>
      <li>Smooth, error-free text lets the story do its job without distraction</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this needs to be expensive or complicated. It just needs someone paying close attention to the details. A rushed proofread often shows up in small ways: a character's name spelled two different ways, a missing comma that changes a sentence's meaning, or a line that trips up the moment it is read aloud. These are exactly the kind of details a careful process is built to catch before the book goes to print.</p>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Trust Our Children's Book <em>Proofreading Services</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children's Publishing Specialists</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children's writing</h3><p>We are not generalists who occasionally look at a picture book. Children's fiction is a core part of what we do.</p></article>
      <article><span>✓</span><h3>We read every manuscript aloud</h3><p>This catches rhythm problems and awkward phrasing that a silent read can miss, especially in rhyming text.</p></article>
      <article><span>✓</span><h3>We are based in London and know the market</h3><p>We understand UK spelling, punctuation, and what the UK children's book market expects.</p></article>
      <article><span>✓</span><h3>We give honest, upfront quotes</h3><p>No vague pricing and no surprise fees once the work is done.</p></article>
      <article><span>✓</span><h3>We keep your voice intact</h3><p>Our job is to polish your writing, not rewrite it. You will still sound like you.</p></article>
      <article><span>✓</span><h3>We stay reachable after delivery</h3><p>If a printer has a question about your file, or you want a quick second look, you can still reach us.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, fixed quote for children's book proofreading in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Children's Book Proofreading Cost And What Influences London Pricing</h2>
      <p>The cost of proofreading a children's book depends on several factors, including word count, how polished the manuscript already is, whether the text rhymes, and how quickly you need it back.</p>
      <p>A short picture book takes far less time to check properly than a forty-thousand-word middle-grade novel, and rhyming text often takes longer than plain prose because it needs to be read aloud carefully. That is why we do not offer a single flat rate that ignores what your book actually needs.</p>
      <p>At Purple Giraffe Press, we believe pricing should be clear and honest. Before starting any work, we read your manuscript, explain what the check will involve, and give you a fixed quote with no hidden extras added later. You will always know the cost before a single change is made.</p>
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
      <h2>Ready To Polish Your Children's Book For <em>Publication Success</em></h2>
      <p>If you have a manuscript sitting on your laptop, or a printed draft on your desk, get in touch and tell us about it. There is no pressure and no obligation. We will read what you send, ask a few sensible questions, and give you an honest view on the timeline and cost. Your story deserves to be read without a single typo getting in the way.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to proofread your children's book" loading="lazy" decoding="async">
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

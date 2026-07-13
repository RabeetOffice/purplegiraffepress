<?php
include 'includes/config.php';

$page_title       = 'Professional Children\'s Book Editors in London';
$page_description = 'Looking for expert editing for your children\'s book? Our London-based editors polish your story\'s language, structure and flow for young readers.';
$canonical_path   = 'childrens-book-editors-in-london.php';
$breadcrumb_name  = 'Editing in London';
$breadcrumbs = [
    ['name' => 'Home',      'url' => page_url('index.php')],
    ['name' => 'Locations', 'url' => page_url('locations/')],
    ['name' => 'London',    'url' => page_url('locations/london.php')],
    ['name' => 'Editing',   'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you edit picture books as well as longer children\'s books?',
    'a' => 'Yes. We work across picture books, early readers, chapter books, and middle-grade fiction. Each format has different rules, and we edit with those differences in mind.',
  ),
  1 =>
  array (
    'q' => 'How long does an edit usually take?',
    'a' => 'It depends on the length of your manuscript and the level of editing needed. We will give you a realistic timeframe as part of your quote, before any work begins.',
  ),
  2 =>
  array (
    'q' => 'Do I need a finished manuscript before I contact you?',
    'a' => 'No. Some writers come to us with a rough first draft, others with a nearly finished book. We can help at either stage.',
  ),
  3 =>
  array (
    'q' => 'Will I get to speak to the person editing my book?',
    'a' => 'Yes. We are happy to talk before, during, or after the edit, either by email or by phone.',
  ),
  4 =>
  array (
    'q' => 'What if I only need a light proofread, not a full edit?',
    'a' => 'That is fine. Tell us what you think your manuscript needs, and we will confirm that after reading it. If a proofread is genuinely all it needs, that is all we will suggest.',
  ),
  5 =>
  array (
    'q' => 'Do you work with authors outside London?',
    'a' => 'Yes. While we are based in London and understand the UK market well, we work with writers by email and video call from anywhere.',
  ),
  6 =>
  array (
    'q' => 'How do you charge for editing work?',
    'a' => 'We give you a fixed quote based on your manuscript\'s length and condition, after reading enough of it to judge the work involved. You will always know the cost before we start.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Editing</div>
      <h1>Polishing Little Stories for <em>Big Imaginations</em>: London <strong>Children's Book Editors</strong></h1>
      <p class="lead">Writing a children's book is not the same as writing for adults. Every word has to earn its place. Every page turn has to matter.</p>
      <p class="lead">If you have written a story for young readers and you are not sure it is ready, you are in the right place.</p>
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
      <h2>Wherever you are in the process, we can help</h2>
      <p>Purple Giraffe Press works with authors across London and beyond who write for children. We edit picture books, early readers, chapter books, and middle-grade fiction. Our job is simple. We help you turn a good draft into a book that reads well, sounds right out loud, and holds a child's attention from start to finish. Search online, and you will find plenty of choice, but few London book editing services that children's authors can trust with a story meant only for young readers, rather than fiction for adults with a young character added in.</p>
      <p>You do not need a finished manuscript to come to us. Some writers arrive with a rough first draft. Others have a polished story that just needs a final check before it goes to a publisher or gets self-published.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="Children's book editors in London polishing a manuscript at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - LEVELS OF EDITING (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Choose the Right Level of Editing for Your Children’s Book</h2>
    <p style="margin:14px auto 0;">Not every manuscript needs the same kind of help. A story with strong bones might just need a copyedit. A story with pacing problems needs something deeper. That is why we break our editing work into clear stages, so you only pay for the work your book actually needs.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Manuscript Assessment</h3>
        <p>This is where we start if you are not sure what your book needs. We read your full manuscript and send back a written report. It covers plot, character, pacing, age suitability, and market fit. No line-by-line changes yet, just honest feedback you can act on.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Developmental Editing</h3>
        <p>This is the big picture work. We look at structure, story arc, character growth, and whether the book actually delivers on its premise. For picture books, this includes checking whether the text leaves enough room for illustrations to do their job. For longer books, we look at chapter pacing and whether the middle of the book sags.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Line Editing</h3>
        <p>Here we go, sentence by sentence. We look at word choice, sentence rhythm, dialogue, and how the story sounds when read aloud. This matters more in children's writing than almost any other genre, because so many of these books are read out loud to a child at bedtime.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Copy Editing</h3>
        <p>This is a close check for grammar, spelling, punctuation, and consistency. Names, timelines, and small details all get checked here. If you only need someone to catch these kinds of errors, a children's book copy editor in London can do this stage on their own, without touching your story or your voice.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Proofreading</h3>
        <p>The final check before publication. We read the finished, formatted manuscript one last time to catch anything that slipped through earlier stages.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHY PICTURE BOOKS NEED A SPECIALIST -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- picture books</p>
    <h2>Why Picture Books Need a Specialist Children’s Editor</h2>
  </div>
  <div class="container narrow center">
    <p>Picture books are their own category. A picture book manuscript is often under a thousand words, but every one of those words has to work harder than in any other kind of writing. There is no room for a flat sentence or a wasted page.</p>
    <p style="margin-top:14px;">Our work in this area focuses on the things that make picture books unique:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Word count and pacing across a 32-page spread</li>
      <li>Rhythm and read aloud quality</li>
      <li>Repetition and patterns that young children respond to</li>
      <li>Leaving space in the text for illustration, rather than describing everything</li>
      <li>Age-appropriate vocabulary and sentence length</li>
      <li>Whether the ending lands and feels earned</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>If you are searching for children's picture book editors in London, you want someone who has actually worked in this format before. Picture book editing is not the same skill as editing a novel. It is closer to editing a poem. Every line matters.</p>
  </div>
</section>

<!-- 6 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="First-time authors, parents and teachers we edit children's books for in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Children’s Book Editing for New, Independent and Published London Authors</h2>
      <p>We edit for a wide range of writers, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors preparing a manuscript for literary agents</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-publishing parents and grandparents writing a story for their own family</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and educators writing books for classroom use</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who already have a book deal and need a professional edit before submission</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who also write and need a second pair of eyes on the text</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Charities and schools producing books for a specific project or cause</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - AGE-APPROPRIATE EDITING (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Age-Appropriate Editing From Board Books to Middle Grade</h2>
    <p style="margin:14px auto 0;">Children's writing is not one single thing. A book for a three-year-old works completely differently from a book for a ten-year-old, and we adjust our approach depending on who your book is actually for.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 0 to 5, Picture Books and Board Books</h3>
        <p>At this age, the words are read aloud by an adult, so rhythm, repetition, and simplicity matter more than plot complexity. We check that your text works when spoken, not just when read silently on the page.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M2 5h7a3 3 0 0 1 3 3v11a3 3 0 0 0-3-3H2V5Z"></path><path d="M22 5h-7a3 3 0 0 0-3 3v11a3 3 0 0 1 3-3h7V5Z"></path></svg></div>
        <h3>Ages 5 to 8, Early Readers</h3>
        <p>These books are often the first stories a child reads independently. Sentence length, vocabulary, and page layout all need careful attention here, since the child is decoding the words themselves.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.5-2 5-2 5s3.5-.5 5-2"></path><path d="M12 15 9 12c.9-2.8 2.4-5.3 4.5-7.4A10 10 0 0 1 21 2c0 2.7-.9 5.4-2.6 7.5-2.1 2.1-4.6 3.6-7.4 4.5Z"></path><path d="M9 12H5l3.5-3.5M12 15v4l3.5-3.5"></path></svg></div>
        <h3>Ages 8 to 12, Middle Grade Fiction</h3>
        <p>At this stage, plot and character depth matter much more. Readers this age want a story with real stakes, humour, and a character they care about. We look closely at pacing across chapters and whether the story earns its ending.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M15 4V2m0 12v-2m-7-5H6m14 0h-2M6.3 5.3 5 4m14.7 1.3L21 4M9 15l-6 6 2 2 6-6m-2-2 2 2m-2-2 3.5-3.5a1.4 1.4 0 0 1 2 0l.01.01a1.4 1.4 0 0 1 0 2L11 15"></path></svg></div>
        <h3>Genre Specific Editing</h3>
        <p>Whether your story is a fantasy adventure, a quiet picture book about feelings, a rhyming story, or a funny school story, we adjust our notes to fit the conventions and expectations of that genre, rather than applying one generic approach to every book.</p>
      </article>
    </div>
  </div>
</section>

<!-- 8 - WHAT TO LOOK FOR: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>What to Look for in a London Children’s Book Editor</h2>
      <p>There are a lot of editors online, and not all of them are right for your book. Before you hire anyone, it is worth asking a few honest questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they actually edited children's books before, or mostly adult fiction?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will the same person work on your book from start to finish?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain their edits, or just make changes without reason?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is their pricing based on a quote for your specific manuscript, or a vague hourly rate with no cap?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they tell you roughly how long the edit will take before you commit?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they read the manuscript aloud, or only on screen? For picture books especially, this matters.</span></li>
      </ul>
      <p>Any editor worth hiring should be happy to answer these questions before you pay anything.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="What to look for when choosing a children's book editor in London" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHAT A PROPER EDIT DOES -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>How Expert Editing Gives Your Children’s Manuscript a Stronger Chance</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of writers think editing is just about fixing typos. It is much bigger than that. Here is what a proper edit actually does for your book:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>It catches pacing problems you cannot see because you already know the story</li>
      <li>It stops publishers and agents from rejecting a book on page one because of an avoidable issue</li>
      <li>It makes read-aloud sessions smoother for parents and teachers</li>
      <li>It sharpens the voice of your main character so young readers connect with them</li>
      <li>It gives you a second, professional opinion before you spend money on printing or illustration</li>
    </ul>
  </div>
</section>

<!-- 10 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>A Simple, Transparent Editing Process for Children’s Authors</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Send your manuscript along with a short note about the age group you are writing for and what stage you think your book is at. If you are not sure, that is fine. Tell us that too.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Send a Quote</h3></div>
        <div class="svc-step-body"><p>We read enough of your manuscript to understand its length and condition, then send you a clear, fixed quote for the level of editing you need. No surprises later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>The Edit Begins</h3></div>
        <div class="svc-step-body"><p>Once you approve the quote, we get to work. You will be told roughly how long it will take before we start.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>You Receive Tracked Changes and Notes</h3></div>
        <div class="svc-step-body"><p>We return your manuscript with tracked changes and comments explaining our thinking, not just red marks with no context. You can see exactly what changed and why.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>A Follow-Up Conversation</h3></div>
        <div class="svc-step-body"><p>We are happy to talk through the edit afterwards, either by email or on a call, so you understand the reasoning and can ask questions.</p></div>
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
      <h2>Why London Children’s Authors Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children’s Book Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only work on children's writing</h3><p>This is not a side service alongside adult fiction editing. Children's books are what we do.</p></article>
      <article><span>✓</span><h3>One editor, start to finish</h3><p>The person who reads your first chapter is the same person who edits your last. Your book is not passed between different people halfway through.</p></article>
      <article><span>✓</span><h3>Clear, upfront quotes</h3><p>You get a fixed price for your manuscript before any work starts, based on its actual length and condition.</p></article>
      <article><span>✓</span><h3>Honest feedback, kindly delivered</h3><p>We tell you what is not working, but we explain why, and we always respect the story you set out to tell.</p></article>
      <article><span>✓</span><h3>Local to London, easy to reach</h3><p>As a London-based service, we understand the UK children's publishing market, from independent picture book publishers to the bigger houses.</p></article>
      <article><span>✓</span><h3>We read your book the way a child will hear it</h3><p>For picture books and early readers especially, we test text out loud, because that is how most of these books get experienced.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, fixed quote for children's book editing in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Children’s Book Editing Cost in London?</h2>
      <p>Pricing depends on the length of your manuscript, its current condition, and which stage of editing you need. A short picture book manuscript costs less than a full assessment of a middle-grade novel, and a copyedit costs less than a full developmental edit.</p>
      <p>We do not publish a flat price list because a manuscript that is close to ready needs far less work than one at an early draft stage, and it would not be fair to charge the same for both. Instead, send us your manuscript, and we will read enough of it to give you a proper, fixed quote with no hidden extras.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 15 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>More Professional Services for Children’s Authors in London</h2>
    <p style="margin:14px auto 0;">What your project includes depends on your goals. We offer a full suite of professional services tailored to the specific needs of children’s literature.</p>
  </div>
  <div class="container">
    <?php $services_only = ['book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'ghostwriting', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Make Your Children’s Book <em>Publication-Ready?</em></h2>
      <p>If you have a children's story sitting on your laptop that you are not quite sure about, send it over. We will read it properly and tell you, honestly, what stage it is at and what it needs. There is no pressure and no obligation. Just a clear, honest read from someone who edits children's books for a living.</p>
      <p>Get in touch today, and let's find out what your story needs.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to edit your children's book" loading="lazy" decoding="async">
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

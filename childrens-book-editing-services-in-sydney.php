<?php
include 'includes/config.php';

$page_title       = 'From Manuscript to Magic | Sydney Editing Service';
$page_description = 'Polish your children\'s book with expert editing in Sydney. Thoughtful, story-focused edits that help your book shine brightly before publishing day.';
$canonical_path   = 'childrens-book-editing-services-in-sydney.php';
$breadcrumb_name  = 'Book Editing in Sydney';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'Sydney',      'url' => page_url('locations/sydney.php')],
    ['name' => 'Book Editing','url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Sydney?',
    'a' => 'No. While we are based in Sydney and love working with local authors, we work with clients from all over Australia by email and video call.',
  ),
  1 =>
  array (
    'q' => 'How long does editing usually take?',
    'a' => 'It depends on the service and how busy we are at the time, but most manuscript assessments take one to two weeks, and full developmental edits can take three to four weeks. We will always give you a timeframe before we start.',
  ),
  2 =>
  array (
    'q' => 'Do I need a finished manuscript before I contact you?',
    'a' => 'Not necessarily. A manuscript assessment can work well even on an early draft. If your story is still rough, we can help you work out what stage it is actually at.',
  ),
  3 =>
  array (
    'q' => 'Can you help me find an illustrator too?',
    'a' => 'We do not provide illustration services ourselves, but we can help prepare a clear brief for an illustrator once your manuscript is edited.',
  ),
  4 =>
  array (
    'q' => 'What age range do you edit for?',
    'a' => 'We work across picture books, early readers, and junior fiction, roughly ages zero to twelve, though picture books make up most of our work.',
  ),
  5 =>
  array (
    'q' => 'Do you offer sample edits before I commit?',
    'a' => 'Yes. We can edit a short sample of your manuscript so you can see our style and feedback before booking a full service.',
  ),
  6 =>
  array (
    'q' => 'Is editing really necessary for a short picture book manuscript?',
    'a' => 'Yes, and often more than people expect. A picture book has so few words that every single one needs to be doing its job properly, and a second set of trained eyes almost always finds something the author has missed.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). streetAddress is left
   out until we have a Sydney address. */
$location_business = [
    'locality'   => 'Sydney',
    'region'     => 'NSW',
    'postalCode' => '2000',
    'country'    => 'AU',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Book Editing</div>
      <h1>Children’s <em>Book Editing</em> in Sydney That Strengthens <strong>Every Story</strong></h1>
      <p class="lead">Writing a story for children looks simple. Getting it right is not. A picture book has to work on every page, out loud, for a child who is listening closely and a parent who is reading it for the tenth time. That is where we come in.</p>
      <p class="lead">Purple Giraffe Press works with authors, illustrators, and small publishers who want their story to land the way it should. We work on picture books, early readers, and junior fiction, and we treat every manuscript like it matters, because to you, it does.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Edit</a>
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
      <p>Our team has spent years reading manuscripts written specifically for young readers, and that focus shapes everything we do. We are not trying to be everything to everyone. We are trying to be the right people for your children's story.</p>
      <p>You do not need a finished, polished draft to talk to us. Some writers come to us with a rough idea and a lot of heart. Others bring a manuscript that has been through five drafts already and just needs a sharp, honest read. Either way, we meet you where you are.</p>
      <p>If you have searched for Sydney book editing services, children's writers will tell you the same thing: not every editor understands this age group. Editing an adult novel and editing a 500-word picture book are two very different jobs. We only take on children's work, so that is where our attention stays.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Edit &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="Children's book editing in Sydney at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHY LOCAL AUTHORS TRUST US -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why us</p>
    <h2>Why Sydney <em>Children’s Authors</em> Trust Our Editing Team</h2>
  </div>
  <div class="container narrow center">
    <p>We are based in Sydney, and we work with local authors face to face, over video call, or entirely by email, whatever suits you best. Being local matters. We understand the Australian schools market, local publishers, and the kind of stories that resonate with Aussie kids and parents.</p>
    <p style="margin-top:14px;">Our editors are not generalists who occasionally edit a children's book on the side. This is the only kind of work we do. That focus means we notice things a general editor might miss, like whether a page turn lands at the right moment, or whether a word is too advanced for a five-year-old to follow along with.</p>
  </div>
</section>

<!-- 5 - EDITING SERVICES (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we can do</p>
    <h2>Editing Services Built for Sydney Children’s Book Authors</h2>
    <p style="margin:14px auto 0;">Picture books are a strange and wonderful format. You have maybe 500 to 1000 words to tell a full story, and every single word has to earn its place. That reality shapes how we approach every manuscript that lands in our inbox.</p>
    <p style="margin:14px auto 0;">We break the work into stages, so you can choose the level of support that suits your budget and your draft, rather than paying for a full service when you only need one part of it.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Manuscript Assessment</h3>
        <div class="fc-body">
          <p>A full read of your story with a written report. We look at pacing, structure, character, and whether the story actually works as a picture book, not just as a nice idea. This is a good starting point if you are not sure what your manuscript needs yet.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Developmental Editing</h3>
        <div class="fc-body">
          <p>This is the big picture work. We look at plot holes, pacing problems, weak endings, and whether the story gives an illustrator enough to work with. For picture books, we also check page turns and rhythm, since these matter as much as the words themselves.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Line Editing</h3>
        <div class="fc-body">
          <p>Here we go, sentence by sentence. We tighten language, fix awkward phrasing, and make sure the read-aloud rhythm actually works. Children's books are often read aloud hundreds of times, so the sound of the sentence matters just as much as the meaning.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Need a Children's Book Copy Editor in Sydney?</h3>
        <div class="fc-body">
          <p>Once the story itself is solid, it still needs a careful final check. This is the stage where we catch grammar slips, spelling errors, inconsistent character names, and formatting issues before the file goes anywhere near a printer or a publisher. It is easy to skip this step when you are keen to finish, but small errors stand out fast in a book that only has a few hundred words on the page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Proofreading</h3>
        <div class="fc-body">
          <p>The last check before publication. We read for typos, layout issues, and anything that slipped through earlier rounds. This is usually the final step before your book goes to print or gets submitted.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - AGE-SPECIFIC EDITING (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Age-Specific Editing for Sydney Children from Birth to Twelve</h2>
    <p style="margin:14px auto 0;">Every age group reads differently, learns differently, and connects with stories in its own way. That is why our editing approach changes depending on who your book is written for. We make sure the language, pacing, sentence structure, and overall reading experience suit the children who will actually be reading or listening to your story.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 0–3: Board Books and First Stories</h3>
        <div class="fc-body">
          <p>Books for babies and toddlers need simple language, repetition, rhythm, and clear emotional moments. We edit with a focus on read-aloud flow, engaging repetition, and age-appropriate vocabulary that keeps the youngest readers interested while supporting early language development.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 3–5: Picture Books</h3>
        <div class="fc-body">
          <p>Picture books rely on a perfect balance between words and illustrations. We refine sentence rhythm, page turns, dialogue, and storytelling so every word supports the illustrations and creates an enjoyable reading experience for both children and parents.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"></circle><path d="m20 20-3.6-3.6"></path></svg></div>
        <h3>Ages 6–8: Early Readers</h3>
        <div class="fc-body">
          <p>Children beginning to read independently need stories that build confidence without feeling too easy. We edit for clear sentence structure, consistent pacing, suitable vocabulary, and engaging characters that encourage young readers to keep turning the pages.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 8–12: Junior Fiction and Middle Grade</h3>
        <div class="fc-body">
          <p>Older children expect stronger plots, believable characters, and deeper emotional connections. Our editing focuses on story structure, character development, dialogue, pacing, and age-appropriate themes while keeping the writing accessible and engaging for independent readers.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 7 - WHO WE SUPPORT: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Authors, illustrators and small publishers we edit for across Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Children’s Authors and Creatives We Support Across Sydney</h2>
      <p>Our clients come from all sorts of backgrounds. We regularly work with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors writing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who also write and need a second set of eyes on the text</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and teachers are turning a story they have told for years into a real book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers who need reliable freelance support</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors preparing a manuscript for submission to agents or publishers</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-publishing authors who want their book to read as well as anything on a bookshop shelf</span></li>
      </ul>
      <p>If you fit into more than one of these groups, that is fine too. Most of our clients do not fall neatly into just one box.</p>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Sydney Children's Book Editor</h2>
      <p>There are a lot of editors out there, and not all of them are the right fit for a children's manuscript. Before you commit to anyone, it is worth asking a few honest questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they actually edited children's books before, or mostly adult fiction?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you speak with the person doing the editing, or only a project manager?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain their pricing clearly before you commit to anything?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they give you a written sample edit so you can see their style first?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand the difference between editing for a five-year-old reader and editing for a ten-year-old reader?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are they upfront about timeframes, or vague about when you will get your manuscript back?</span></li>
      </ul>
      <p>A good editor will answer all of these without hesitation. If someone dodges the questions, that tells you something too.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/proofreading.webp" alt="Choosing a children's book editor in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHAT EDITING ACTUALLY DOES -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>How Expert Editing Makes Your Children’s Story More Effective</h2>
  </div>
  <div class="container narrow center">
    <p>Some authors wonder if editing is really necessary, especially for a short picture book manuscript. Here is what proper editing actually does:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>It catches pacing problems you cannot see because you know the story too well</li>
      <li>It strengthens the emotional beat at the end, which is often what makes a picture book memorable</li>
      <li>It makes sure the language matches the age group you are writing for</li>
      <li>It protects you from embarrassing errors once the book is printed</li>
      <li>It gives illustrators clearer direction, since a tighter manuscript is easier to visualise</li>
      <li>It gives publishers and agents one less reason to say no</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this is about changing your voice or your idea. It is about making sure the story you already have reaches its full potential.</p>
  </div>
</section>

<!-- 10 - IS YOUR MANUSCRIPT READY -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- ready or not</p>
    <h2>Signs Your Children’s Manuscript Is Ready for Editing</h2>
  </div>
  <div class="container narrow center">
    <p>Authors often ask how they will know when their manuscript is actually ready for editing or for submission. There is no single answer, but a few things tend to hold true across strong manuscripts:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>The story has a clear beginning, middle, and end, even in a short format</li>
      <li>There is one main character a young reader can follow and care about</li>
      <li>The language matches the age group, without talking down to the reader</li>
      <li>The ending lands with some kind of emotional payoff, even a small one</li>
      <li>Repetition and rhythm are used on purpose, not by accident</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>You do not need to tick every box before reaching out. Most manuscripts we see are missing at least one of these, and that is exactly what editing is for. The point of a fresh set of eyes is to spot what you cannot see anymore after reading your own story fifty times.</p>
  </div>
</section>

<!-- 11 - PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>A Clear Editing Process from Manuscript to Final Draft</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Email us your draft, along with a short note about where you are and what kind of help you think you need. If you are not sure, that is fine; we can work that out together.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: We Assess the Fit</h3></div>
        <div class="svc-step-body"><p>We read a sample of your work and confirm which service suits your manuscript best. If we think a different level of editing would serve you better, we will say so honestly.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: You Get a Clear Quote</h3></div>
        <div class="svc-step-body"><p>No vague pricing, no surprise invoices. You will know exactly what you are paying before any work begins.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: We Get to Work</h3></div>
        <div class="svc-step-body"><p>Your editor reads closely, takes notes, and works through your manuscript with care. For developmental and line editing, this includes a written report alongside the marked-up manuscript.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: We Talk It Through</h3></div>
        <div class="svc-step-body"><p>You get the chance to ask questions about our feedback. Editing should be a conversation, not a one-way document dropped in your inbox.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Step 6: Final Delivery</h3></div>
        <div class="svc-step-body"><p>You receive your edited manuscript, your report, and any notes needed for the next stage, whether that is illustration, submission, or printing.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 12 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 13 - WHAT MAKES OUR EDITORS DIFFERENT -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>What Makes Our Sydney <em>Children’s Book Editors</em> Different</h2>
      <p>If you are trying to find the best children's book editors in Sydney for your project, the honest answer is that fit matters more than any single credential. We would rather be the right fit for your book than simply the biggest name.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only edit children's books.</h3><p>No adult fiction, no business documents, no distractions. This is our full focus.</p></article>
      <article><span>✓</span><h3>You work with the same editor from start to finish.</h3><p>No handing your manuscript between different people partway through.</p></article>
      <article><span>✓</span><h3>We are upfront about pricing.</h3><p>You will always know what a service costs before you agree to it.</p></article>
      <article><span>✓</span><h3>We give honest feedback, even when it is not what you want to hear.</h3><p>A manuscript improves faster with honesty than with polite vagueness.</p></article>
      <article><span>✓</span><h3>We understand the Australian market.</h3><p>From spelling to cultural references, we know what fits here.</p></article>
      <article><span>✓</span><h3>We are easy to reach.</h3><p>Questions during the process get a real answer, not a template reply.</p></article>
    </div>
  </div>
</section>

<!-- 14 - TESTIMONIALS -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>
<!-- 16 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, written quote for children's book editing in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Children’s Book Editing in Sydney Cost?</h2>
      <p>The cost of children's picture book editing services in Sydney depends on a few things: the length of your manuscript, the level of editing you need, and how many rounds of feedback you want included. A short manuscript assessment costs less than a full developmental edit, and a proofread costs less again.</p>
      <p>We do not publish a flat price list because a 400-word manuscript and a 2000-word early reader are not the same job. What we do promise is a clear, written quote before any work starts, so you always know what you are paying for and why. Get in touch with a sample of your manuscript, and we will give you a straightforward quote within a couple of business days.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- explore more';
$location_services_heading = 'Explore More Services for Sydney Independent Children’s Authors';
$location_services_intro   = 'We built our service list around the real gaps that stop authors from finishing and launching their books. Here is what falls under our roof.';
$location_services_section = 'section figma-cream';
include 'includes/location-services.php';
?>

<!-- 18 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 19 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Make Your <em>Children’s Story</em> Even Stronger?</h2>
      <p>If your story has been sitting in a drawer or on your laptop, waiting for someone to give it an honest read, we would love to help. Send your manuscript through and tell us a little about where you are. There is no pressure and no obligation, just a straightforward conversation about your story and what it needs next.</p>
      <p>Get in touch with Purple Giraffe Press today, and let's get your book ready for the world.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to edit your children's book in Sydney" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 20 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions Sydney authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

<!-- 21 - FOOTER -->
<?php include 'includes/footer.php'; ?>

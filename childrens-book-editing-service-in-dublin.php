<?php
include 'includes/config.php';

$page_title       = 'Dublin Editing Service for Children\'s Book Authors';
$page_description = 'Professional editing for children\'s book authors in Dublin. Polished, story-focused edits that help your book shine and connect with young readers.';
$canonical_path   = 'childrens-book-editing-service-in-dublin.php';
$breadcrumb_name  = 'Editing in Dublin';
$breadcrumbs = [
    ['name' => 'Home',      'url' => page_url('index.php')],
    ['name' => 'Locations', 'url' => page_url('locations/')],
    ['name' => 'Dublin',    'url' => page_url('locations/dublin.php')],
    ['name' => 'Editing',   'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Dublin?',
    'a' => 'No. Most of our clients are in Dublin, but we work with authors anywhere, including London and the rest of the UK. Everything is done by email, so location does not matter.',
  ),
  1 =>
  array (
    'q' => 'Can you help with picture books written in rhyme?',
    'a' => 'Yes. Rhyming picture books need special attention to metre and rhythm, and this is something we pay close attention to during developmental and line editing.',
  ),
  2 =>
  array (
    'q' => 'How long does an edit usually take?',
    'a' => 'It depends on the length of your manuscript and the type of edit. We will give you a clear turnaround date with your quote before any work begins.',
  ),
  3 =>
  array (
    'q' => 'Do you work with authors in dublin who are self-publishing?',
    'a' => 'Yes. We work with self-publishing authors in dublin and across Ireland and the UK. The process is the same wherever you are based, since everything is handled online.',
  ),
  4 =>
  array (
    'q' => 'What if I do not know which type of edit I need?',
    'a' => 'That is very common, and it is fine. Send us your manuscript, and we will recommend the right service, honestly, even if that means a smaller job than you expected.',
  ),
  5 =>
  array (
    'q' => 'Will my story still sound like mine after editing?',
    'a' => 'Yes. Our job is to strengthen your voice, not replace it. Every suggestion is there to serve your story, and you make the final call on every change.',
  ),
  6 =>
  array (
    'q' => 'Do you offer a sample edit before I commit?',
    'a' => 'Yes. We are happy to edit a small sample from your manuscript first, so you can see how we work before deciding to go ahead with the full project.',
  ),
  7 =>
  array (
    'q' => 'Do prices change depending on the length of the book?',
    'a' => 'Yes. A short picture book text is a smaller job than a full-length middle-grade novel, so pricing reflects word count and the type of edit needed, not a single flat rate for every project.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Editing</div>
      <h1><em>Children's Book Editing Service</em> in <strong>Dublin</strong>: Turning Good Stories into Great Ones</h1>
      <p class="lead">You have written a children's book. Maybe it took you three months. Maybe it took you three years. Either way, you know the story in your head is good. The question is whether it reads that way on the page.</p>
      <p class="lead">That gap between what you meant and what you wrote is the most common reason picture books and early reader stories do not land the way authors hoped. It is not a sign that you cannot write. It is a sign you need a second pair of eyes that knows children's books inside and out.</p>
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
      <h2>Manuscripts ready for agents, publishers, or self-publishing</h2>
      <p>Purple Giraffe Press works with authors across Dublin who want their manuscripts ready for agents, publishers, or self-publishing. We look at your story the way a child, a parent, and an editor all would, and we tell you honestly what is working and what needs attention.</p>
      <p>Whether you have a finished draft, a half-written story, or just a strong idea you want turned into something publishable, this page explains exactly what our editing service covers, how it works, and what it costs, so you can decide with confidence.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Edit &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="Children's book editing service in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT THE SERVICE INCLUDES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>What Our Dublin Children’s Book Editing Services Include</h2>
    <p style="margin:14px auto 0;">Not every manuscript needs the same kind of help. A rhyming picture book at the drafting stage needs something different from a finished middle-grade novel that just needs a final polish. That is why we break our Dublin book editing services that children's authors rely on into clear stages, and you can pick the one that matches where your manuscript is right now.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"></circle><path d="m20 20-3.6-3.6"></path></svg></div>
        <h3>Manuscript Assessment</h3>
        <div class="fc-body">
          <p>This is the starting point for most authors. We read your full manuscript and send back a written report covering plot, pacing, character, age-appropriateness, and market fit. You get honest feedback on whether the story works, without a full line-by-line edit yet. It is the cheapest way to find out if your book is close to ready or needs bigger changes.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Developmental Editing</h3>
        <div class="fc-body">
          <p>This is a deep structural edit. We look at the story arc, the logic of the plot, whether the main character actually changes by the end, and whether the pacing suits the age group you are writing for. For picture books, this includes checking the page-turn rhythm, since a good picture book is built around the surprise or reveal on each spread. We give detailed notes and suggested rewrites, chapter by chapter or spread by spread.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L8 18l-4 1 1-4Z"></path><path d="M14 6l4 4"></path></svg></div>
        <h3>Line Editing</h3>
        <div class="fc-body">
          <p>Once the structure is solid, line editing looks at how each sentence reads out loud. Children's books are read aloud far more than adult books, so rhythm, repetition, and word choice matter enormously. We tighten sentences, cut anything clunky, and make sure the voice stays consistent from the first page to the last.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5"></path><path d="M9 13h6M9 17h4"></path></svg></div>
        <h3>Copy Editing</h3>
        <div class="fc-body">
          <p>A children's book copy editor in Dublin checks grammar, punctuation, spelling, and consistency. This includes checking that character names, timeline details, and formatting are the same throughout the book. It is a closer, more technical pass than line editing, and it usually comes near the end of the process.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Proofreading</h3>
        <div class="fc-body">
          <p>The final check before your book goes to print or upload. We look for typos, spacing errors, and small formatting slips that survive every other stage. This is the last set of eyes before readers see the book.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Editing Support For Every Child’s Reading Level</h2>
    <p style="margin:14px auto 0;">Every children’s book requires a different editing approach depending on the age of its readers. We review your manuscript with the right audience in mind, making sure the language, structure, and storytelling style are suitable for the children you want to reach.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Baby And Toddler Books (Ages 0–3)</h3>
        <div class="fc-body">
          <p>Editing focuses on simple words, rhythm, repetition, and read-aloud flow to create stories that young children and parents can enjoy together.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Picture Books (Ages 3–7)</h3>
        <div class="fc-body">
          <p>We focus on pacing, word choice, page-turn moments, and storytelling flow to make sure every sentence supports the illustrations and young readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Early Readers And Chapter Books (Ages 5–10)</h3>
        <div class="fc-body">
          <p>Editing helps improve sentence structure, vocabulary, and clarity while keeping the story engaging for children developing independent reading skills.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Middle Grade Fiction (Ages 8–12)</h3>
        <div class="fc-body">
          <p>We work on deeper character development, plot structure, and age-appropriate themes while ensuring the story remains engaging for younger readers.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Choosing the right editing approach for your target age group helps strengthen your manuscript while keeping your original voice and making your story connect with its intended audience.</p>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin authors, parents, and teachers whose children's books we edit" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Benefits Most From Our Children’s Editing Services</h2>
      <p>Our clients come from all sorts of backgrounds. Some have written before, some are on their first book, and some are not even sure yet if what they have written counts as a proper manuscript. All of that is fine. We work with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors writing their very first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents turning a family story into a keepsake book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and school staff writing books for classroom use</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors preparing a manuscript to send to literary agents</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-publishing authors who want a professional finish before printing</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who also write and need help with the text side of a book</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Children’s Book Editor in Dublin</h2>
      <p>Whether you work with us or someone else, ask any editor these questions before you hand over your manuscript:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they edited children's books before, or mostly adult fiction and non-fiction?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you get a sample edit on a few pages before committing to the full job?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain their edits, or just change things without reasons?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is the price based on your actual word count and the type of edit, or a flat guess?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand read-aloud rhythm, or only written grammar?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you get a written report you can keep and refer back to?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are they clear about turnaround time before you pay anything?</span></li>
      </ul>
      <p>If an editor cannot answer these clearly, that is a warning sign, not a small detail.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing the right children's book editor in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PROFESSIONAL EDITING MATTERS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Editing Makes Children’s Books More Successful</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of authors think editing is just fixing typos. It is much bigger than that. Good editing can be the difference between:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>A story that confuses young readers and one that they follow easily from start to finish</li>
      <li>Text that fights the illustrations and text that leaves the right space for pictures to do their job</li>
      <li>A manuscript that gets rejected by agents in the first page and one that gets read to the end</li>
      <li>A self-published book that looks amateur and one that looks like it belongs on a shop shelf</li>
      <li>Repetitive, flat sentences and ones with real rhythm when read aloud</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this happens by accident. It happens because someone who knows the craft went through the manuscript with care.</p>
    <p style="margin-top:14px;">It is also worth saying what good editing does not do. It does not turn your story into someone else's story. It does not strip out your voice or your sense of humour. A good editor works with what you have already built and helps it stand up straighter, the same way a good photograph still needs the right light and the right angle to show what was already there.</p>
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
    <h2>How Our Children’s Book Editing Process Works Step by Step</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>You Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Send your manuscript along with a short note about your goals. Are you aiming for traditional publishing, self-publishing, or just want a polished story for family? This shapes how we approach the edit.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Recommend the Right Level of Edit</h3></div>
        <div class="svc-step-body"><p>We read enough of your manuscript to tell you honestly which service fits. If your story only needs a copyedit, we will say so. We will not sell you a bigger service than you need.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>You Get a Quote and Timeline</h3></div>
        <div class="svc-step-body"><p>Once we know the word count and the type of edit, we send a clear quote and an expected turnaround date. Nothing starts until you agree to both.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>The Edit Happens</h3></div>
        <div class="svc-step-body"><p>Your editor works through the manuscript, making tracked changes and adding comments that explain the thinking behind each suggestion. You are never left guessing why something was changed.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>You Review and Ask Questions</h3></div>
        <div class="svc-step-body"><p>We send the edited manuscript back with notes. You can ask questions, push back on any suggestion, or ask for clarification. Editing is a conversation, not a one-way instruction.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Final Polish</h3></div>
        <div class="svc-step-body"><p>Once you are happy with the changes, we do a final proofread pass so the manuscript is ready to send out or print.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Dublin Children’s Authors Choose <em>Purple Giraffe Press Editors</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children’s Book Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children's writing, not general fiction</h3><p>Picture books, early readers, and middle grade all work differently from adult novels, and we edit with that in mind every time.</p></article>
      <article><span>✓</span><h3>We explain our edits in plain language</h3><p>You will never get a manuscript back covered in changes with no reasoning behind them.</p></article>
      <article><span>✓</span><h3>Our quotes are based on your actual manuscript</h3><p>No flat rates that do not match the size or complexity of your book.</p></article>
      <article><span>✓</span><h3>We are based in Dublin and understand the local market</h3><p>From Irish schools to local publishers, we know the landscape authors here are working in.</p></article>
      <article><span>✓</span><h3>You keep full ownership and control</h3><p>Every suggestion is exactly that, a suggestion. The final decisions about your story stay with you.</p></article>
    </div>
  </div>
</section>

<!-- 12 - FINDING AN EDITOR IN DUBLIN -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- local expertise</p>
    <h2>Find Trusted Children’s Book Editors Across Dublin Today</h2>
  </div>
  <div class="container narrow center">
    <p>There are a lot of freelance editors out there, and not all of them work in children's writing. If you are searching for the best children's book editors in Dublin, look for a team that reads widely in the genre, understands how children actually respond to stories, and can show you real examples of the kind of editing they do. We are always happy to talk through your project before you commit to anything, so you know exactly what you are getting.</p>
    <p style="margin-top:14px;">Picture books bring their own challenges that a general fiction editor may never have dealt with. Word count is tiny, so every single word has to earn its place. The illustrations carry half the story, so the text has to leave room for them rather than describing everything twice. Experienced children's picture book editors in Dublin know how to read a manuscript with the pictures in mind, even before any artwork exists, and that makes a real difference to how the finished book reads on the shelf.</p>
  </div>
</section>

<!-- 13 - TESTIMONIALS -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 14 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's book editing in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Children’s Book Editing Cost in Dublin?</h2>
      <p>Pricing for children's picture book editing services in Dublin depends on a few things: the word count of your manuscript, the type of edit you need, and how much rework is involved. A short picture book text and a full-length middle-grade manuscript are simply not the same job, so we do not offer one flat price for everything.</p>
      <p>What we can promise is that every quote is based on your actual manuscript, sent to you in writing before any work begins, and explained clearly so you understand what you are paying for. There are no hidden extras added halfway through, and you will never be asked to pay for a bigger service than the one you agreed to at the start.</p>
      <p>If you are trying to work out the likely cost of children's picture book editing services in Dublin, the best way is to send us your manuscript or word count and ask for a quote. A manuscript assessment usually costs less than a full developmental edit, since it is a lighter-touch report rather than a line-by-line rewrite. A copyedit or proofread on a short picture book text tends to be quicker, and therefore cheaper, than the same stages on a longer early reader or middle grade manuscript. There is no charge for a quote and no pressure to go ahead afterwards.</p>
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
      <h2>Ready to Strengthen and Publish Your <em>Children’s Book?</em></h2>
      <p>If you have a children's manuscript sitting on your laptop and you are not sure what it needs, send it over. We will read it, tell you honestly where it stands, and recommend the right next step. No pressure, no jargon, just straightforward feedback from people who care about children's stories as much as you do.</p>
      <p>Get in touch today, and let's talk about your book.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to edit your children's book in Dublin" loading="lazy" decoding="async">
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

<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Editing Built for Australian Authors';
$page_description = 'Children\'s book editing built for Australian authors. We offer clear feedback, honest edits and steady guidance to help your story find its true shape.';
$canonical_path   = 'editing.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you edit picture books, chapter books, and middle grade novels?',
    'a' => 'Yes. We work across all age groups, from picture books through to chapter books, early readers, and middle grade fiction.',
  ),
  1 =>
  array (
    'q' => 'How long does editing take?',
    'a' => 'Turnaround time depends on the length of your manuscript and the type of edit you need. We will give you an estimated timeframe along with your quote.',
  ),
  2 =>
  array (
    'q' => 'Do I need a full developmental edit, or just a proofread?',
    'a' => 'It depends on where your manuscript is at. If you are unsure, send it through and we can recommend the right level of edit based on what the story needs.',
  ),
  3 =>
  array (
    'q' => 'Can you help if English is my second language?',
    'a' => 'Yes. Our copy editing and line editing services include checking grammar, sentence structure, and word choice, which can be especially helpful if English is not your first language.',
  ),
  4 =>
  array (
    'q' => 'Do you work with illustrators as well as writers?',
    'a' => 'Yes. Many of our clients are illustrator authors writing their own text. We are used to working with manuscripts that are designed to sit alongside illustrations.',
  ),
  5 =>
  array (
    'q' => 'Will editing change my writing voice?',
    'a' => 'No. Our aim is to strengthen your story while keeping your voice intact. We will always explain our suggestions so you can decide what feels right for your book.',
  ),
  6 =>
  array (
    'q' => 'Do you offer a sample edit before I commit?',
    'a' => 'We assess a sample of your manuscript before quoting, so you can see how we work before deciding to go ahead with the full edit.',
  ),
  7 =>
  array (
    'q' => 'How do I know if I have found the best childrens book editors for my story?',
    'a' => 'Look for editors with real experience in your age group, a clear process, and honest communication. Ask questions about their approach before you commit, and check that they are willing to explain their feedback rather than just handing over a marked up file.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Editing</div>
      <h1>Children's <em>Book Editing</em> Made for <strong>Australian Authors</strong></h1>
      <p class="lead">Writing a children’s book is not the same as writing for adults. Every word has to work harder. The rhythm has to feel right when read aloud. The plot has to make sense to a five year old or a ten year old, not just to you.</p>
      <p class="lead">At Purple Giraffe Press, we offer children’s book editing services built around this simple fact. We do not treat your manuscript like a business report or a novel for grown ups. We treat it like what it is, a story meant to be read by a child, or read to a child, again and again.</p>
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
      <p class="eyebrow script-mark">- based in australia</p>
      <h2>Wherever your manuscript is, we can help</h2>
      <p>Whether you have a finished picture book manuscript, a chapter book draft, or an early reader that just needs a clean up, our team can help. We are based in Australia and we work with authors, illustrators, and small publishers who want their book to actually work for its young readers.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1517842645767-c639042777db?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="Children's book editing for Australian authors at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE DO (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we do</p>
    <h2>From First Draft to Final Polish: Here's What We Do</h2>
    <p style="margin:14px auto 0;">Our book editing services for children’s books cover every stage of the process, from the first read through to the final proofread. You can book one service on its own, or work through several stages as your manuscript develops. Many authors start with an assessment, then move into a deeper edit once they know where the story needs work. Others just need one specific service, like a proofread before printing. Either way, you choose what fits your manuscript and your budget.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Manuscript Assessment</h3>
        <div class="fc-body">
          <p>Before any line by line work starts, we read your full manuscript and give you an honest, clear report. We look at the story structure, the pacing, the age fit, and whether the plot holds together. You get practical notes you can actually use, not vague praise.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Developmental Editing</h3>
        <div class="fc-body">
          <p>This is big picture editing. We look at character, plot, structure, and voice. If your story sags in the middle, or the ending feels rushed, or a character disappears halfway through, we will flag it and suggest ways to fix it. For picture books, this includes checking the balance between text and the space left for illustrations.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Line Editing</h3>
        <div class="fc-body">
          <p>Here we work sentence by sentence. We check word choice, sentence rhythm, and flow. Children’s books are often read aloud, so we pay close attention to how the text sounds, not just how it reads on the page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Children’s Picture Book Editing</h3>
        <div class="fc-body">
          <p>Picture books are their own art form. The word count is tight, often under a thousand words, and every sentence has to leave room for the pictures to do their job. Our children’s picture book editing services focus on trimming excess words, sharpening the read aloud rhythm, and making sure the text leaves space for illustration rather than repeating what the pictures already show.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Copy Editing</h3>
        <div class="fc-body">
          <p>Once the story and structure are settled, our book copy editor checks grammar, spelling, punctuation, and consistency. We also check that vocabulary and sentence length suit the intended age group, since a copy edit for a board book looks very different to one for a middle grade novel.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Proofreading</h3>
        <div class="fc-body">
          <p>This is the final check before your book goes to print or is uploaded for publishing. We look for typos, layout issues, and small errors that slipped through earlier rounds.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE SUPPORT: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="Writers, illustrators, and publishers Purple Giraffe Press supports" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we support</p>
      <h2>The Writers, Illustrators and Publishers We Support</h2>
      <p>We work with a wide range of writers and creators, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First time authors writing their first picture book or chapter book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who also write the text for their own books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents turning a family story into a keepsake book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers and independent presses</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and educators writing books for classroom use</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self publishing authors preparing a manuscript for print or ebook release</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers looking for children's picture book editing services as part of a wider self publishing plan</span></li>
      </ul>
      <p>No matter where you are in your writing journey, from a rough first draft to a manuscript you think is nearly ready, we can meet you at that stage and help you move forward.</p>
    </div>
  </div>
</section>

<!-- 6 - WHAT MAKES A GREAT EDITOR: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>What Separates Great Children’s Book Editor From an Average One</h2>
      <p>Not every editor is suited to children’s books. A great children’s book editor understands things a general editor might miss. Here is what to look for when comparing your options, whether that is us or someone else:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Experience editing across different age groups, from board books to middle grade</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>An understanding of how text and illustration work together in picture books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A good ear for rhythm and read aloud flow, not just grammar</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Knowledge of age appropriate vocabulary and sentence length</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Respect for your voice as the author, rather than rewriting the story to sound like someone else</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Clear, practical feedback you can actually act on</span></li>
      </ul>
      <p>If you are searching for children’s picture book editors or comparing options for your project, these are the qualities worth asking about before you book. A good conversation with a potential editor, even a short one, will usually tell you whether they understand children’s books or are simply applying general editing rules to a story that needs something more specific.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghost-writing-fold.webp" alt="A skilled children's book editor reviewing a manuscript" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY IT MATTERS (cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Getting It Right Matters So Much for Young Readers</h2>
  </div>
  <div class="container narrow center">
    <p>A children’s book looks simple. That simplicity is deceptive. Getting a short, clear, engaging story right for a young reader takes real skill, and it is easy to get wrong without a trained eye.</p>
    <p style="margin-top:14px;">Here is what a skilled editor is watching for that a general edit often misses:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Read aloud rhythm.</strong> Many children’s books are read aloud by a parent, carer, or teacher. Clunky sentences show up fast when spoken, even if they read fine silently.</li>
      <li><strong>Word count discipline.</strong> Picture books usually need to stay under a set word limit. Every word has to earn its place.</li>
      <li><strong>Age appropriate language.</strong> A word that works for a ten year old might confuse a four year old, and the reverse is true too.</li>
      <li><strong>Illustration space.</strong> In picture books, the text should not describe everything the picture already shows. Good editing leaves room for the pictures to tell part of the story.</li>
      <li><strong>Repetition and pattern.</strong> Young readers often love repeated phrases and predictable patterns. A good editor knows when repetition helps and when it drags.</li>
      <li><strong>Emotional pacing.</strong> Children’s books often need a clear emotional arc in a very short space, without adult length to build it slowly.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This is why generic editing services can fall short. Editing for adults and editing for children draw on different skills, even though both use the same grammar rules.</p>
  </div>
</section>

<!-- 8 - HOW IT WORKS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How It Works Step by Step, From First Hello to Final Files</h2>
    <p style="margin:14px auto 0;">We keep our process simple, so you always know what is happening with your manuscript.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Send through your draft along with a short note about your book. Tell us the intended age group, the word count, and what kind of edit you think you need. If you are not sure which service is right, just ask and we will point you in the right direction.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Quote</h3></div>
        <div class="svc-step-body"><p>We read a sample of your manuscript and send you a clear, upfront quote. You will know the cost and the expected turnaround before any work begins.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Edit Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Once you approve the quote, we get to work. Depending on the service, this might mean a full developmental edit, a line by line pass, or a final proofread.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review the Feedback</h3></div>
        <div class="svc-step-body"><p>You receive your edited manuscript along with clear notes explaining the changes and suggestions. We are happy to answer questions about any of the edits.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Polish</h3></div>
        <div class="svc-step-body"><p>If needed, we can do a final pass once you have made your revisions, so your manuscript is ready for submission, printing, or publishing.</p></div>
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

<!-- 10 - BENEFITS OF A SPECIALIST -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Benefits of Working With a Children’s Book Specialist</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Stronger stories.</strong> A specialist editor helps tighten plot and character so your story holds a child’s attention from start to finish.</li>
      <li><strong>Better read aloud flow.</strong> Your text will sound natural and rhythmic when read out loud, not stiff or awkward.</li>
      <li><strong>Age appropriate writing.</strong> Vocabulary, sentence length, and themes will suit your target age group.</li>
      <li><strong>A polished, professional manuscript.</strong> Whether you are submitting to a publisher or self publishing, a well edited manuscript makes a stronger impression.</li>
      <li><strong>Fewer revision rounds later.</strong> Catching structural and language issues early saves time and stress further down the track.</li>
      <li><strong>Confidence in your finished book.</strong> You will know your manuscript has been checked by people who understand children’s books specifically.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY AUTHORS KEEP COMING BACK -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why they come back</p>
      <h2>Why Authors and Publishers Keep <em>Coming Back</em> to Us</h2>
      <p>Authors and publishers come back to us for a few simple reasons.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children’s books</h3><p>We do not split our attention across every genre. Children’s books are what we know and what we focus on.</p></article>
      <article><span>✓</span><h3>Upfront, honest pricing</h3><p>You will always get a clear quote before we start, with no surprise costs later.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>As a children’s book editor Australia authors and publishers can reach easily, we understand the local publishing landscape and Australian English spelling and style.</p></article>
      <article><span>✓</span><h3>We treat your story with care</h3><p>Your book matters to you, and we take that seriously. We aim to strengthen your voice, not replace it.</p></article>
      <article><span>✓</span><h3>Simple communication</h3><p>No confusing jargon. We explain our feedback in plain terms so you always understand the reasoning behind a suggestion.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="Clear, no obligation quote for children's book editing" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Children’s Picture Book Editing Cost?</h2>
      <p>The cost of children’s picture book editing services depends on a few things, including the length of your manuscript, the type of edit you need, and how much work the story requires. A short picture book manuscript will usually cost less to edit than a full length chapter book or middle grade novel, and a proofread costs less than a full developmental edit.</p>
      <p>Because every manuscript is different, we do not publish a single flat rate. Instead, we read a sample of your work first and send you a clear, no obligation quote. That way you know exactly what you are paying for before you commit to anything, and there are no hidden costs added later.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 14 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Our most popular services</h2>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 15 - CLOSING CTA -->
<?php include 'includes/contact-section.php'; ?>

<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- your manuscript</p>
      <h2>Let's Get Your Manuscript <em>Ready for the World</em></h2>
      <p>If you have a children’s book manuscript sitting on your desk, we would love to take a look. Send it through to Purple Giraffe Press and we will let you know how we can help, along with a clear quote so you know exactly where you stand. Your story deserves an editor who understands what makes a children’s book work.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to help edit your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 16 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

<!-- 17 - FOOTER -->
<?php include 'includes/footer.php'; ?>

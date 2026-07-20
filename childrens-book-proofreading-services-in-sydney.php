<?php
include 'includes/config.php';

$page_title       = 'Polished Pages | Sydney Children\'s Book Proofreading';
$page_description = 'Polish your children\'s book to perfection with expert proofreading in Sydney. Careful, detail-focused edits that make your story shine brightly.';
$canonical_path   = 'childrens-book-proofreading-services-in-sydney.php';
$breadcrumb_name  = 'Proofreading in Sydney';
$breadcrumbs = [
    ['name' => 'Home',         'url' => page_url('index.php')],
    ['name' => 'Locations',    'url' => page_url('locations/')],
    ['name' => 'Sydney',       'url' => page_url('locations/sydney.php')],
    ['name' => 'Proofreading', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only proofread, or do you also edit?',
    'a' => 'We offer proofreading as a stand-alone service, and we also offer developmental editing, line editing, and copyediting if your manuscript needs more work before the final check.',
  ),
  1 =>
  array (
    'q' => 'How long does childrens book proofread in Sydney usually take?',
    'a' => 'Most picture books take a few days. Longer junior fiction or young adult manuscripts usually take one to two weeks, depending on length and how many other jobs are ahead of yours.',
  ),
  2 =>
  array (
    'q' => 'Do you work with authors outside Sydney too?',
    'a' => 'Yes. While we are based in Sydney and understand the local children\'s publishing scene well, we work with authors anywhere in Australia by email.',
  ),
  3 =>
  array (
    'q' => 'How much does it cost to proofread a Children\'s book in Sydney?',
    'a' => 'It depends on the length of your manuscript and whether it includes rhyme or illustrations to check against the text. We provide a free, no-obligation quote once we have seen your file.',
  ),
  4 =>
  array (
    'q' => 'Can you proofread a rhyming picture book?',
    'a' => 'Yes. Rhyming and rhythmic text actually needs more care, not less, since a small change can throw off the whole line when read aloud. We check this specifically as part of proofreading children\'s books in Sydney.',
  ),
  5 =>
  array (
    'q' => 'Do you proofread self-published books as well as traditionally published ones?',
    'a' => 'Yes, both. Many of our clients are self-publishing their first book, while others are preparing a manuscript to submit to a literary agent or publisher.',
  ),
  6 =>
  array (
    'q' => 'What file formats do you accept?',
    'a' => 'Word documents and PDFs both work fine. If your picture book is already laid out with illustrations, send the laid-out file so we can check text against page breaks properly.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Proofreading</div>
      <h1>Sydney <em>Children’s Book Proofreading</em> That Catches <strong>What Authors Miss</strong></h1>
      <p class="lead">You have written a story. You have read it out loud to your kids, your niece, maybe a whole classroom. It made them laugh, or it made them go quiet at the right part. That is the hard bit done.</p>
      <p class="lead">But before that story becomes a real book, it needs one more careful read. Not from you. Not from your partner or your best mate. From someone trained to catch the small errors that slip past even the most careful author, because you already know the story too well to see them.</p>
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
      <h2>The Final Checks That Protect Your Finished Children’s Book</h2>
      <p>That is where we come in. Purple Giraffe Press offers children's book proofread services in Sydney for authors, illustrators, small publishers, and self-publishing parents who want their book to look and read as professionally as anything on a bookshop shelf.</p>
      <p>We only work on children's books. Not novels for adults, not textbooks, not company reports. Children's books, from board books through to junior fiction. That focus matters because a picture book has completely different rules from a chapter book, and a proofreader who mostly works on adult fiction will miss things that jump out to us straight away.</p>
      <p>Proofreading is the final check before publishing. We review spelling, grammar, punctuation, repeated words, and formatting issues. We also check character details, page numbers, and Australian English consistency. Missing words, duplicated text, and inconsistent name spellings are carefully flagged. The aim is to make your finished manuscript clean, accurate, and publication-ready.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/proofreading.webp" alt="Children's book proofreading services in Sydney at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - PROOFREADING BY BOOK TYPE AND READING AGE (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- how we check</p>
    <h2>Proofreading Shaped Around How Children Read and Understand</h2>
    <p style="margin:14px auto 0;">Children’s books change significantly as readers grow, and the proofreading process needs to change with them. A board book may contain only a few words, but every word, sound and page break matters. A middle-grade or young adult manuscript requires closer attention to dialogue, continuity and longer story structures. We tailor every proofread to the reading level, language ability and expectations of the intended audience.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Books Need a Different Eye</h3>
        <div class="fc-body">
          <p>Picture books may be short, but every word matters. We check rhyme, rhythm, punctuation, repeated phrases, and read-aloud flow. We also make sure the text works with the illustrations and page turns. Awkward line breaks or misplaced words can weaken an important moment. Our review helps each page feel smooth, natural, and enjoyable to read aloud.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Junior Fiction and Chapter Books</h3>
        <div class="fc-body">
          <p>Longer books need careful consistency across every chapter. We track character names, ages, locations, timelines and important story details. We also check punctuation, chapter headings and formatting. Small errors can easily appear as a manuscript grows through several drafts. Our proofreading keeps the story organised, consistent and easy for young readers to follow.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Young Adult and Middle Grade</h3>
        <div class="fc-body">
          <p>These manuscripts often include longer plots, dialogue and multiple viewpoints. We check grammar, tense, punctuation and continuity across chapters. We also preserve the author’s voice while removing distracting errors. Character relationships, settings and timelines are reviewed for consistency. The result feels polished, clear and appropriate for older children and teenage readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Ages 0–3: Checking Every Word in Early Learning Books</h3>
        <div class="fc-body">
          <p>Board books and toddler stories rely on simple language, repetition, and familiar sounds. We check that repeated words remain consistent, sentences are easy to read aloud, and early learning concepts are presented clearly. We also review punctuation, page placement, and spelling carefully because even one small error can stand out in a book with very little text.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 3–5: Protecting Rhythm in Picture Book Storytelling</h3>
        <div class="fc-body">
          <p>Picture books for preschool readers need smooth rhythm, clear sentence structure, and strong read-aloud flow. We check punctuation, rhyme, repeated phrases, and page turns to make sure the story sounds natural when spoken. We also confirm that the text matches the illustrations and that no wording creates confusion for children following the story through pictures.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 6–8: Keeping Early Reader Books Clear and Consistent</h3>
        <div class="fc-body">
          <p>Early readers are beginning to read independently, so clarity becomes especially important. We check vocabulary, sentence length, chapter consistency, and punctuation to ensure the text supports growing confidence. We also look for distracting errors, unclear instructions and formatting issues that could interrupt a child’s reading experience.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Ages 8–12: Tracking Details Across Middle-Grade Stories</h3>
        <div class="fc-body">
          <p>Middle-grade manuscripts often include longer plots, larger casts, and more detailed fictional worlds. We track character names, ages, locations, timelines, and story details across every chapter. Dialogue punctuation, tense consistency, and chapter formatting are also reviewed carefully so the manuscript remains polished and easy to follow.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Young Adult Books: Refining Complex Language and Story Continuity</h3>
        <div class="fc-body">
          <p>Young adult manuscripts usually contain more advanced language, layered themes, and multiple character relationships. We proofread for grammar, dialogue, viewpoint consistency, continuity and tone while respecting the author’s individual voice. The final manuscript should feel mature and polished without losing the natural energy expected by teenage readers.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - THE READERS BEHIND THE WORK -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- who we are</p>
    <h2>The Careful Sydney Readers Behind Every Polished Children’s Manuscript</h2>
  </div>
  <div class="container narrow center">
    <p>When you look for a childrens book proofreader in Sydney, you want someone who reads the way your audience will hear it, out loud, at bedtime, or in a classroom circle. That is exactly how we approach every manuscript that comes through our door. We are not generalists who occasionally take on a picture book between adult novels. Children's writing is the only thing we do, so every check is done with a young reader in mind from the very first page.</p>
    <p style="margin-top:14px;">Our proofreaders have backgrounds in early childhood education, primary teaching, and children's publishing. That mix matters. It means we are not just checking spelling, we are checking whether a five-year-old will follow the story, whether a nine-year-old will find the joke funny, and whether a teenager will take the dialogue seriously. Books written for children are still real books, and they deserve the same level of care as anything else on a shelf.</p>
    <p style="margin-top:14px;">Beyond children's titles, we sometimes hear from people simply searching for book proofreading services in Sydney more broadly. If your project is a children's book of any kind, from board book to young adult, you are in the right place. If it is an adult novel or a non-fiction title, we can point you towards a proofreader better suited to that genre.</p>
  </div>
</section>

<!-- 6 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Authors, publishers and teachers we proofread for in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Children’s Book Creators Who Trust Us With Final Checks</h2>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers who need an extra pass before print</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who have written their own text</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and school communities are publishing a class or fundraising book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents turning a bedtime story into a keepsake book for family</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors preparing a manuscript to submit to agents or publishers</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>What to Ask Before Choosing Your Children’s Book Proofreader</h2>
      <p>Not every proofreader is right for every project, and that is true no matter which business you end up going with. Before you hire anyone, it is worth asking:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they proofread children's books specifically, or mostly adult fiction and business documents?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will the same person proofread your whole manuscript, or does it get split between several freelancers?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain their changes, or just hand back a marked-up file with no context?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What is included in the quote, and is there anything that costs extra later?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How do they handle rhyming or rhythmic text, if that applies to your book?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show examples of children's book work they have done before?</span></li>
      </ul>
      <p>A proofreader who cannot answer these clearly is a warning sign, no matter who you end up choosing.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="Questions to ask a children's book proofreader in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY SMALL ERRORS MATTER -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Small Errors Can Weaken an Otherwise Brilliant Book</h2>
  </div>
  <div class="container narrow center">
    <p>It is tempting to skip this step, especially on a tight budget. Here is why that usually costs more in the long run.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Reviews and ratings suffer when readers spot typos, and children's book reviewers do notice</li>
      <li>Errors in a printed book cannot be fixed without reprinting the whole run</li>
      <li>Teachers and librarians are less likely to recommend a book with visible mistakes</li>
      <li>A polished manuscript reads as more professional to agents and publishers</li>
      <li>Small errors compound. One typo might be forgiven. Ten typos make a book feel unfinished</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Proofreading is the cheapest insurance you can buy against a book you will feel embarrassed about later.</p>
    <p style="margin-top:14px;">There is also a practical business reason to get this right. If you are self-publishing, most print-on-demand platforms will not reprint a batch for free once it is approved and errors are found after the fact. If you are submitting to an agent or a publisher, a manuscript full of small errors can read as unpolished, even if the story itself is strong. First impressions matter just as much in publishing as anywhere else.</p>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How We Take Your Manuscript From Finished to Flawless</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Send your file as a Word document or PDF, along with any illustrations if they are already placed in the layout. Let us know the age group you are writing for and whether the manuscript has already been through a structural or line edit.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: We Read It Properly First</h3></div>
        <div class="svc-step-body"><p>Before marking anything, we read the whole manuscript once, cover to cover, the way a young reader or a parent reading aloud would. This helps us catch rhythm and flow issues that a line-by-line check alone would miss.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: The Proofread Itself</h3></div>
        <div class="svc-step-body"><p>We go through the manuscript in detail, tracking every change so you can see exactly what was fixed and why. If your book is a picture book, we check page breaks and text placement against the artwork. If it is a chapter book, we track continuity details across the whole story.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: You Get a Marked-Up File and a Summary</h3></div>
        <div class="svc-step-body"><p>You receive your manuscript back with tracked changes, plus a short summary of any patterns we noticed, in case they are useful for future books.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: A Final Check, If You Need It</h3></div>
        <div class="svc-step-body"><p>If you make further changes based on our notes, we are happy to do one more pass over just those sections before you send the file to print.</p></div>
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

<!-- 11 - WHY SYDNEY AUTHORS TRUST US -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Sydney Children’s Authors <em>Trust Our Final Review</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only do children's books.</h3><p>No adult fiction, no business copy, just picture books, junior fiction, and young adult titles.</p></article>
      <article><span>✓</span><h3>One proofreader from start to finish.</h3><p>Your manuscript is not split between different freelancers halfway through.</p></article>
      <article><span>✓</span><h3>We explain our changes.</h3><p>You get a summary, not just a marked-up file with no context.</p></article>
      <article><span>✓</span><h3>Local knowledge.</h3><p>As a Sydney-based team, we understand Australian spelling, Australian settings, and how Australian schools and libraries assess children's books.</p></article>
      <article><span>✓</span><h3>Clear quotes.</h3><p>You know the cost before we start. No surprise fees halfway through the job.</p></article>
      <article><span>✓</span><h3>Turnaround that fits your deadline.</h3><p>We tell you upfront how long your manuscript will take, based on its length and complexity.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for children's book proofreading in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Shapes Children’s Book Proofreading Costs in Sydney</h2>
      <p>Every manuscript is different, so we do not use a flat, one-size-fits-all rate. Cost depends on word count, whether it is a rhyming picture book (which takes longer to check properly), how many illustrations need to be checked against text placement, and your deadline. Picture book texts are quick to read but slow to check properly, since every word and every line break matters. Longer junior fiction and young adult manuscripts take longer simply because there is more text to go through. We will always give you a clear, upfront quote before any work begins, based on your actual manuscript rather than a guess.</p>
      <p>As a rough guide, a short rhyming picture book text usually costs less overall than a 40,000-word young adult manuscript, simply because there is less to check, even though the per-word attention is closer. Rather than quote a figure that might not suit your project, we ask you to send the manuscript through first. That way, the number you get back reflects your actual book, not an average that may not apply to you.</p>
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
$location_services_heading = 'Additional Support for Every Stage Before and After Proofreading';
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
      <h2>Ready to Give Your Manuscript <em>One Final Careful Read?</em></h2>
      <p>Send us your manuscript, and we will come back to you with a straightforward quote and an honest timeline. No pressure, no jargon, just a clear answer on what your book needs before it goes any further. Get in touch with Purple Giraffe Press today and let us take a look.</p>
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

<!-- 19 - FOOTER -->
<?php include 'includes/footer.php'; ?>

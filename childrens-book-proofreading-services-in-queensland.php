<?php
include 'includes/config.php';

/* Meta title + description -> printed into <head> by includes/header.php. */
$page_title       = 'Children\'s Book Proofreading Rooted in Queensland';
$page_description = 'Polish your children\'s book to perfection with expert proofreading in Queensland. Careful, detail-focused edits that make your story shine brightly.';
$canonical_path   = 'childrens-book-proofreading-services-in-queensland.php';
$breadcrumb_name  = 'Proofreading in Queensland';
$breadcrumbs = [
    ['name' => 'Home',         'url' => page_url('index.php')],
    ['name' => 'Locations',    'url' => page_url('locations/')],
    ['name' => 'Queensland',   'url' => page_url('locations/queensland.php')],
    ['name' => 'Proofreading', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How much does it cost to proofread a children\'s book in Queensland?',
    'a' => 'It depends on your word count, age group, and how complex the manuscript is. Picture books usually cost less than longer chapter books or novels. We always provide a clear quote after reviewing your actual manuscript, rather than a generic flat rate.',
  ),
  1 =>
  array (
    'q' => 'How long does proofreading take?',
    'a' => 'Turnaround time depends on the length of your manuscript and how busy our schedule is at the time. Picture books can often be turned around faster than longer novels. We will confirm a realistic timeframe when we quote your project.',
  ),
  2 =>
  array (
    'q' => 'Do you only work with authors based in Queensland?',
    'a' => 'No, but we have a strong understanding of the Queensland and wider Australian children\'s book market, which is helpful if your book is aimed at local families, schools or libraries.',
  ),
  3 =>
  array (
    'q' => 'Can you proofread a children\'s book written in rhyme?',
    'a' => 'Yes. Rhyming picture books need a proofreader who reads with an ear for rhythm, not just spelling and grammar. We check that the rhyme and beat hold together, as well as checking for errors.',
  ),
  4 =>
  array (
    'q' => 'What is the difference between proofreading and editing?',
    'a' => 'Editing often involves reshaping structure, plot, or characters. Proofreading is the final polish, checking spelling, grammar, punctuation, and consistency once your story is already in its finished form.',
  ),
  5 =>
  array (
    'q' => 'Do you proofread self-published books as well as traditionally published ones?',
    'a' => 'Yes. We work with self-publishing authors, small presses, and traditional publishers across Queensland, and we adjust our approach depending on what stage your manuscript is at.',
  ),
  6 =>
  array (
    'q' => 'Will you change my writing style during proofreading?',
    'a' => 'No. Our aim is to fix errors and inconsistencies, not to rewrite your voice. Any suggestion that goes beyond a straightforward correction will be flagged as a note, so the final decision always stays with you.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). Brisbane is the state
   capital and stands in as the locality for the Queensland-wide pages. */
$location_business = [
    'locality'   => 'Brisbane',
    'region'     => 'QLD',
    'postalCode' => '4000',
    'country'    => 'AU',
];
/* The service-list key is the state, not the locality above. */
$location_city = 'queensland';

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Proofreading</div>
      <h1>Make Sure Your Story Reads Just Right, <em>Children's Book Proofreading Service</em> in <strong>Queensland</strong></h1>
      <p class="lead">Writing a children's book takes heart. It also takes a huge amount of patience. By the time you reach the last page, you have read your own words so many times that your eyes start to skip over mistakes without even noticing them. This happens to every writer, no matter how experienced they are.</p>
      <p class="lead">That is where a fresh set of eyes makes all the difference. At Purple Giraffe Press, we help authors, illustrators, small publishers, and self-publishing parents across Queensland get their manuscript ready, so their story reads cleanly from the first page to the last.</p>
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
      <h2>The Errors Authors Stop Seeing After Too Many Drafts</h2>
      <p>If you have typed “children's book proofread in Queensland” into a search bar recently, you are probably staring down a deadline, a printer quote, or a nagging feeling that your manuscript still has a few slips hiding in it. That feeling is normal. Almost every manuscript we see, no matter how many times the author has checked it, has something worth fixing.</p>
      <p>We know that a picture book, early reader, or middle-grade novel is not just a document. It is something a child will hold, read again and again, and maybe even learn to read from. A stray typo or a missing comma can throw off the rhythm of a sentence, confuse a young reader, or simply look unprofessional next to the beautiful illustrations you have paid for.</p>
      <p>There is no single formula for proofreading a children's manuscript. A board book with twenty words needs a completely different kind of attention than a ninety-thousand-word young adult novel. What stays the same is the standard of care. We slow down, read every page properly, and never assume a manuscript is finished just because it looks tidy on screen.</p>
      <p>We also understand that handing your manuscript to someone else can feel a little exposing, especially if this is your first book. You have poured months, sometimes years, into these pages. Our approach is to treat your work with respect, flag issues clearly, and leave the final creative decisions with you.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/proofreading.webp" alt="Children's book proofreading in Queensland at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE CHECK -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we check</p>
    <h2>Every Detail We Check Before Your Book Moves Forward</h2>
    <p style="margin:14px auto 0;">Proofreading is often misunderstood. Some people think it means a quick spell check. It is much more than that. When we work through your manuscript, we are checking for:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Spelling mistakes, including names, made-up words, and Australian spelling</li>
      <li>Grammar and punctuation errors, from missing commas to incorrect apostrophes</li>
      <li>Consistency in character names, places, and details across the whole story</li>
      <li>Repeated words or awkward phrasing that breaks the flow when read aloud</li>
      <li>Formatting issues such as spacing, chapter breaks, and dialogue punctuation</li>
      <li>Rhyme and rhythm checks for picture books written in verse</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>If you are searching for someone to help with proofreading children's books in Queensland, this is exactly the level of detail we bring to every project. We treat your manuscript the way we would treat our own work, with care and full attention.</p>
  </div>
  <div class="container" style="margin-top:34px;">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Books</h3>
        <div class="fc-body">
          <p>Picture books rely on rhythm as much as meaning. A single extra word can throw off the beat of a page that is meant to be read aloud. We pay close attention to how the text sounds, not just how it looks on the page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Early Readers and Chapter Books</h3>
        <div class="fc-body">
          <p>These books are often a child's first experience of reading longer stories on their own. Clear, consistent spelling and simple, correct sentence structure matter here more than almost anywhere else, since young readers are still learning the rules themselves.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Middle Grade and Young Adult Fiction</h3>
        <div class="fc-body">
          <p>Longer manuscripts need a proofreader who can track details across many chapters. Did the character's eye colour change halfway through? Did a place name get spelled two different ways? We catch these small slips before your reader does.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - PROOFREADING BY AGE GROUP -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>How Proofreading Priorities Change as Young Queensland Readers Develop</h2>
  </div>
  <div class="container narrow center">
    <p>Children’s books cannot all be proofread in the same way. Vocabulary, sentence length, punctuation, repetition, rhythm, and reading difficulty need to suit the age of the intended reader. We review each manuscript according to its target age group, so the language feels clear, natural and appropriate without losing the author’s voice.</p>
  </div>
  <div class="container" style="margin-top:34px;">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 0–3: Simple Words and Read-Aloud Rhythm</h3>
        <div class="fc-body">
          <p>Books for babies and toddlers usually use very few words, which means every word needs to earn its place. We check repetition, sound patterns, sentence rhythm, and clarity so the text is easy for adults to read aloud and simple for young children to follow.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 3–5: Clear Meaning and Playful Language</h3>
        <div class="fc-body">
          <p>Preschool picture books often use humour, rhyme, repeated phrases, and expressive language. We check that the wording is easy to understand, the rhythm remains consistent, and no grammar or punctuation issues interrupt the flow of the story.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Ages 5–7: Support for Children Learning to Read</h3>
        <div class="fc-body">
          <p>Early readers need familiar vocabulary, manageable sentences, and predictable language patterns. We look for words that may be unnecessarily difficult, inconsistent spelling, confusing punctuation, and sentences that could slow down a developing reader.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 7–9: Consistency Across Longer Stories</h3>
        <div class="fc-body">
          <p>As books become longer, continuity becomes more important. We track character names, locations, timelines, chapter details, and repeated information while checking that the language remains suitable for children gaining confidence with independent reading.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Ages 9–12: Polished Language Without Losing Momentum</h3>
        <div class="fc-body">
          <p>Middle-grade readers can handle richer vocabulary and more detailed storytelling, but unclear sentences and continuity mistakes can still pull them out of the story. We proofread closely for grammar, punctuation, consistency, dialogue formatting, and errors across multiple chapters.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Ages 12–18: Mature Writing With Technical Accuracy</h3>
        <div class="fc-body">
          <p>Young adult manuscripts often include complex themes, longer chapters, and more developed character voices. We correct technical errors and inconsistencies while protecting the tone, personality, and emotional depth of the writing.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Not sure which reading level your manuscript suits? We can review its word choice, sentence structure, and overall complexity before proofreading begins, then recommend the most appropriate age range for your intended readers.</p>
  </div>
</section>

<!-- 6 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Authors, parents and small publishers we proofread for in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Authors Who Need Certainty Before Their Book Is Published</h2>
      <p>We proofread for a wide range of people across Queensland, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors preparing to self-publish</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents writing a personal story for their family</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers with limited in-house editing staff</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who also write and need a second opinion on their text</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and school communities are creating class or fundraising books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers preparing a manuscript for submission to agents or publishers</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>What to Check Before Trusting Someone With Your Manuscript in Queensland</h2>
      <p>Not every proofreader understands children's books. Before you hire anyone, it is worth asking a few honest questions.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they proofread children's or picture books before, or mostly adult fiction and non-fiction?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand how rhyme, rhythm, and read-aloud pacing work in picture books?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they track consistency across the whole manuscript, not just check page by page?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain their changes clearly, so you understand why something was fixed?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is their pricing based on your actual word count and manuscript, or a vague flat fee?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they turn your project around in a timeframe that suits your publishing schedule?</span></li>
      </ul>
      <p>Asking these questions before you commit will save you time and money, whether you choose us or someone else.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="Questions to ask a children's book proofreader in Queensland" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY A PROOFREAD IS WORTH IT -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Readers Remember Errors More Than Authors Expect</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of writers wonder if proofreading is really worth the cost. Here is what a proper proofread actually does for your book.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>It protects your reputation as an author, especially if this is your first published book</li>
      <li>It stops small errors from distracting young readers or the adults reading to them</li>
      <li>It gives your manuscript a polished, professional finish before it goes to a printer or publisher</li>
      <li>It can catch continuity mistakes that even a careful author will miss after months of writing</li>
      <li>It saves you money later, since fixing errors after printing is far more expensive than fixing them before printing</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Think of it as the last checkpoint before your book leaves your hands and reaches a child's bookshelf.</p>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Six Careful Stages Between Your Draft and Publication</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: You Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You share your manuscript with us in whatever format it is currently in, whether that is a Word document, a Google Doc, or a formatted PDF from your illustrator or designer.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: We Review the Scope</h3></div>
        <div class="svc-step-body"><p>We look at the word count, the age group, and whether there are any special elements such as rhyme, repeated phrases, or dialogue-heavy sections. This helps us give you an accurate quote and timeframe.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: We Proofread Line by Line</h3></div>
        <div class="svc-step-body"><p>Our proofreader reads through your manuscript carefully, marking spelling, grammar, punctuation, and consistency issues. For rhyming picture books, we also read the text aloud to check that the rhythm holds up.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: You Receive Tracked Changes and Notes</h3></div>
        <div class="svc-step-body"><p>We return your manuscript with tracked changes so you can see exactly what has been suggested. Where something needs your input, such as a stylistic choice, we leave a short note explaining why.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: You Review and Approve</h3></div>
        <div class="svc-step-body"><p>You go through the suggested changes at your own pace. If you have questions about why something was flagged, we are happy to explain our reasoning in plain terms.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Step 6: Final Clean Copy</h3></div>
        <div class="svc-step-body"><p>Once you are happy with the changes, we provide a final, clean version of your manuscript, ready for your designer, illustrator, or printer.</p></div>
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
      <h2><em>Children’s Book Knowledge</em> Behind Every Correction We Suggest in Queensland</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Local understanding.</h3><p>As a book proofreader in Queensland, we understand Australian spelling, tone, and the local publishing landscape, which matters when your book is aimed at Aussie kids and families.</p></article>
      <article><span>✓</span><h3>Genuine attention to detail.</h3><p>We do not skim. Every manuscript gets a proper, focused read, not a rushed once-over.</p></article>
      <article><span>✓</span><h3>Clear communication.</h3><p>You will always know what stage your manuscript is at and why any change was suggested.</p></article>
      <article><span>✓</span><h3>Fair, honest pricing.</h3><p>We quote based on your actual manuscript, not a guess, so there are no surprises.</p></article>
      <article><span>✓</span><h3>Respect for your voice.</h3><p>Proofreading is not rewriting. We fix errors and inconsistencies while keeping your story exactly as you intended it to sound.</p></article>
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
<!-- 14 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for children's book proofreading in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Why Every Queensland Children’s Manuscript Receives Its Own Quote</h2>
      <p>Pricing for book proofreading services in Queensland depends on a few things. These include your total word count, the complexity of the manuscript, whether it is written in rhyme, and how quickly you need it back. A short thirty-two-page picture book will naturally cost less than a full-length middle-grade novel.</p>
      <p>We do not believe in flat, one-size-fits-all pricing, because a two-hundred-word picture book and a forty-thousand-word novel are simply not the same job. Instead, we look at your actual manuscript and give you a clear, upfront quote before any work begins. There are no hidden fees and no surprise charges once the job is done.</p>
      <p>If you want a straight answer, the best way to find out is to send us your manuscript, or at least your word count and age group, and we will get back to you with a proper quote.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 15 - WHAT YOU RECEIVE -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what you get</p>
    <h2>What Your Completed Proofreading Package Will Contain</h2>
  </div>
  <div class="container narrow center">
    <p>When your proofread is finished, you will not just get a pile of red marks and no explanation. You will receive:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>A tracked changes copy showing every suggested correction, so nothing is hidden</li>
      <li>A brief summary of the main patterns we noticed, such as recurring punctuation habits or consistency slips</li>
      <li>Notes on anything that needs your decision, rather than a change we have made without asking</li>
      <li>A clean, final version once you have approved everything, ready to hand to your illustrator, designer, or printer</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This way, you are never left guessing what changed or why. You stay in control of your own manuscript from start to finish, and you walk away with a better understanding of your own writing habits for next time.</p>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- more services';
$location_services_heading = 'Keep Moving Your Book Forward with Other Queensland Services';
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
      <h2>Let Us Find What <em>Your Final Read-Through Missed</em></h2>
      <p>Your story deserves to reach children without a single typo standing in the way of the magic. Whether you have a finished manuscript sitting on your desktop or a picture book almost ready for your illustrator, we would love to take a look.</p>
      <p>Get in touch with Purple Giraffe Press today and send through your manuscript details. We will come back to you with an honest quote and a realistic timeframe, so your book can move forward with confidence.</p>
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
      <h2>Frequently Asked <em>Questions</em></h2>
      <p>Honest answers to the questions Queensland authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

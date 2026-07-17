<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Editing Services in Melbourne, Australia';
$page_description = 'Bring your story to life with expert Children\'s Book Editing Services in Melbourne. Polished pages, happy readers, publisher-ready results guaranteed.';
$canonical_path   = 'childrens-book-editing-services-in-melbourne.php';
$breadcrumb_name  = 'Book Editing in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',       'url' => page_url('index.php')],
    ['name' => 'Locations',  'url' => page_url('locations/')],
    ['name' => 'Melbourne',  'url' => page_url('locations/melbourne.php')],
    ['name' => 'Book Editing','url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'What types of children’s books do you edit in Melbourne?',
    'a' => 'We edit a range of children’s books, including picture books, early readers, chapter books, junior fiction, and short story collections for young readers. If you are unsure where your manuscript fits, we can review it and recommend the right editing approach.',
  ),
  1 =>
  array (
    'q' => 'How do I know which editing service my children’s book needs?',
    'a' => 'It depends on the stage of your manuscript. A newer draft may need deeper feedback on structure, pacing, character, and age suitability, while a nearly finished book may only need copy editing or proofreading. Our Melbourne children’s book editing team can guide you before the work begins.',
  ),
  2 =>
  array (
    'q' => 'Can you edit my children’s book without changing my voice?',
    'a' => 'Yes. The aim is to improve clarity, flow, grammar, and readability while keeping your natural writing style intact. We make the story stronger without taking away your tone or personality.',
  ),
  3 =>
  array (
    'q' => 'Do you help self-publishing authors in Melbourne?',
    'a' => 'Yes. Many of our clients are self-publishing authors who want their children’s book professionally edited before printing, ebook release, or upload to platforms such as Amazon KDP.',
  ),
  4 =>
  array (
    'q' => 'Can you help make my story suitable for the right age group?',
    'a' => 'Yes. We look at language level, sentence length, pacing, themes, and story structure to make sure the book feels suitable for the intended age group.',
  ),
  5 =>
  array (
    'q' => 'Do you edit books written by first-time authors?',
    'a' => 'Yes. We work with many first-time authors in Melbourne and across Australia. We explain the editing process clearly, so you know what has been changed and why.',
  ),
  6 =>
  array (
    'q' => 'What happens after the editing is complete?',
    'a' => 'You will receive your edited manuscript with suggested changes and comments. You can review everything, ask questions, and decide what you would like to accept before moving towards formatting, design, or publication.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). streetAddress omitted
   until we have a Melbourne address. */
$location_business = [
    'locality'   => 'Melbourne',
    'region'     => 'VIC',
    'postalCode' => '3000',
    'country'    => 'AU',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Book Editing</div>
      <h1>Children's <em>Book Editing Services</em> in Melbourne: From First Draft to <strong>Bookshelf-Ready</strong></h1>
      <p class="lead">Before Your Book Goes Anywhere, Give It the Proper Look It Deserves.</p>
      <p class="lead">You have written a children’s book. Maybe it took you months. Maybe it took you years. Either way, you know the story in your head is not quite the story on the page yet.</p>
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
      <h2>Editing that reads the way your story should</h2>
      <p>That is where we come in. Purple Giraffe Press offers children’s book editing services in Melbourne for authors, parents and first-time writers who want their manuscript to read the way it should. We work on picture books, early readers and junior fiction, and we treat every manuscript like it matters, because it does.</p>
      <p>You do not need to be a professional writer to work with us. Some of our clients are teachers. Some are grandparents writing a story for their grandkids. Some are aspiring authors chasing a publishing deal. Whoever you are, our job is the same. We help your story become the best version of itself.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="Children's book editing in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - TYPES OF EDITING (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we can do</p>
    <h2>From a Quick Polish to a Full Rework, Here's What We Can Do For Your Manuscript</h2>
    <p style="margin:14px auto 0;">Editing is not one single thing. A manuscript might need a small tidy-up, or it might need a proper rework from the ground up. We offer a few different types of editing so you only pay for what your story actually needs.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Manuscript Assessment</h3>
        <div class="fc-body">
          <p>Before any editing starts, we read your full manuscript and give you honest feedback. We look at the plot, the characters, the pacing, and whether the story works for its intended age group. You get a clear written report, not just a few scribbled notes.</p>
          <p>This step is often the most useful one, especially for first-time authors. It tells you exactly where your manuscript stands before you spend money on deeper editing. Sometimes a manuscript needs a small polish. Sometimes it needs a bigger rework. Either way, you will know what you are dealing with before you commit to the next stage.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Developmental Editing</h3>
        <div class="fc-body">
          <p>This is the big picture stuff. We look at structure, story arc, character growth, and whether the book actually holds together from start to finish. If something is not working, we tell you why and suggest ways to fix it.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Line Editing</h3>
        <div class="fc-body">
          <p>Here we work sentence by sentence. We look at how the story flows, how the dialogue sounds, and whether the language suits the age group you are writing for. Picture books need rhythm and simplicity. Junior fiction needs a different kind of pacing. We adjust our approach depending on what you are writing.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Copy Editing</h3>
        <div class="fc-body">
          <p>This is where grammar, spelling, punctuation, and consistency get sorted out. If you are after a children’s book copy editor in Melbourne who checks every detail without changing your voice, this is the service for you. We fix the small things so your story reads cleanly, without turning your writing into something it is not.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Proofreading</h3>
        <div class="fc-body">
          <p>The final check before your book goes to print or gets submitted to a publisher. We catch typos, formatting slips and anything that was missed earlier in the process.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Book Specific Editing</h3>
        <div class="fc-body">
          <p>Picture books are their own beast. The words need to work with the pictures, not just sit next to them. Our children’s picture book editing services in Melbourne look at word count, page turns, read aloud rhythm and how well the text leaves room for illustration. A picture book editor needs to think like an illustrator as much as a writer, and that is exactly how we approach it.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - EDITING FOR EVERY AGE -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Editing for Every Age and Stage</h2>
  </div>
  <div class="container narrow center">
    <p>Children’s books are not one category. A board book for a toddler and a junior fiction novel for a ten-year-old need completely different editing approaches. Here is how we think about the main age groups we work with:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Board books and early picture books.</strong> Very few words, big emotional impact. Every word has to count, and the story often relies on repetition and rhythm.</li>
      <li><strong>Picture books.</strong> Usually aimed at three-to eight-year-olds. The text needs to leave space for illustration and work well when read aloud.</li>
      <li><strong>Early readers.</strong> Simple sentences and controlled vocabulary, built to help kids build reading confidence.</li>
      <li><strong>Junior fiction.</strong> Longer stories with more complex plots, aimed at readers roughly eight to twelve years old. Pacing and chapter structure matter more here.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Knowing which category your manuscript fits into helps us edit it the right way, rather than applying a one-size-fits-all approach.</p>
  </div>
</section>

<!-- 6 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Parents, teachers and first-time authors we edit for in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Parents, Teachers, First-Time Authors, We've Edited For All of Them</h2>
      <p>We work with a wide range of people, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors writing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents writing a story for their family</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers creating classroom resources.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-publishing authors preparing a manuscript for release.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers preparing a submission for traditional publishers</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who also write and need editing support for their text</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Good Children’s Book Editor in Melbourne, Australia</h2>
      <p>Not every editor understands children’s books. A general editor might be brilliant with adult fiction but miss what makes a picture book work. Here is what to look for when choosing between children’s picture book editors in Melbourne:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Experience specifically with children’s books, not just general manuscripts</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Understanding of age-appropriate language and reading levels</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Knowledge of how text and illustration work together in picture books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Clear communication about what changes are being suggested and why</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Respect for your voice and your story, not a rewrite in someone else’s style</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Realistic turnaround times and upfront pricing</span></li>
      </ul>
      <p>If you are searching for the best children's book editors in Melbourne, these are the things that actually matter, more than flashy claims or big promises.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/proofreading.webp" alt="Choosing a children's book editor in Melbourne" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY CHILDREN'S EDITING IS DIFFERENT -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why a Children's Book Can't Just Be Edited Like Any Other Manuscript</h2>
  </div>
  <div class="container narrow center">
    <p>Children’s books look simple. They are not. Every word has to earn its place, especially in a picture book where you might only have a few hundred words to tell a whole story.</p>
    <p style="margin-top:14px;">Getting it right involves more than just fixing grammar. It means thinking about:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Whether the vocabulary suits the target age group</li>
      <li>Whether the story can be read aloud without stumbling</li>
      <li>Whether the pacing keeps a child’s attention</li>
      <li>Whether the ending feels satisfying, not rushed</li>
      <li>Whether repetition is used well, since young readers often love a good pattern</li>
      <li>Whether the humour or emotion lands the way it is meant to</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>A children’s book editor who understands these things can turn a good story into one that children actually want to hear again and again. That is the whole point.</p>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>What Happens After You Hit Send, Step by Step</h2>
    <p style="margin:14px auto 0;">We keep things simple, so you always know what is happening with your manuscript.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You send through your manuscript along with a bit of background. Tell us who the book is for, what stage it is at, and what kind of help you think you need.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Quote</h3></div>
        <div class="svc-step-body"><p>We read a sample of your work and give you a clear quote based on the length of your manuscript and the type of editing required. No surprises later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Do the Work</h3></div>
        <div class="svc-step-body"><p>Once you approve the quote, we get started. Depending on the service, this might involve tracked changes, comments, or a written report.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review and Discuss</h3></div>
        <div class="svc-step-body"><p>You receive the edited manuscript, and we talk through the changes together. If you have questions about why something was suggested, we will explain our thinking.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Polish</h3></div>
        <div class="svc-step-body"><p>Once you are happy with the bigger changes, we do a final pass to catch anything small that was missed, so your manuscript is ready for the next step, whether that is submission or printing.</p></div>
      </article>
    </div>
    <p style="margin:26px auto 0; max-width:760px;">Throughout the process, you can always reach out with questions. We would rather you understand every change we suggest than just accept edits you are unsure about. It is your name on the book, so it should always feel like your story.</p>
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

<!-- 11 - WHAT YOU GAIN -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>What You Actually Gain by Hiring a Children's Book Specialist in Melbourne, Australia</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You save time.</strong> A specialist editor spots issues faster because they know what to look for in children’s writing.</li>
      <li><strong>You get honest feedback.</strong> We tell you what is working and what is not, without being harsh about it.</li>
      <li><strong>Your story stays yours.</strong> Good editing sharpens your voice; it does not replace it.</li>
      <li><strong>You avoid common mistakes.</strong> Things like overly complex vocabulary or pacing issues are easy to miss when you have read your own manuscript fifty times.</li>
      <li><strong>You get a manuscript ready for the real world.</strong> Whether you are self-publishing or submitting to a publisher, a well-edited manuscript gives you a better shot.</li>
    </ul>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Choose <em>Purple Giraffe Press</em></h2>
      <p>A few simple things set our Melbourne children’s book editing apart.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise, we do not generalise</h3><p>Children’s books are all we work on, so we understand the specific challenges they bring.</p></article>
      <article><span>✓</span><h3>Upfront pricing, always</h3><p>You get a quote before any work starts, with no hidden costs added later.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>We understand the Australian market, Australian schools and Australian readers.</p></article>
      <article><span>✓</span><h3>We treat your story with care</h3><p>Your manuscript is not just a job to us. We know how much work goes into writing a children’s book.</p></article>
      <article><span>✓</span><h3>Simple, clear communication</h3><p>No jargon, no confusing feedback. Just honest, useful notes you can actually use.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for children's book editing in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Editing a Children's Book in Melbourne Actually Cost?</h2>
      <p>The cost of children's picture book editing services in Melbourne depends on a few things, including the length of your manuscript, the type of editing you need and how much work is involved. A light copy edit on a short picture book will cost less than a full developmental edit on a longer junior fiction manuscript.</p>
      <p>We do not believe in one-size-fits-all pricing. That is why we read your manuscript first and give you a clear, upfront quote before any work begins. You will always know what you are paying for and why, with no hidden extras added along the way.</p>
      <p>If you want Melbourne book editing services for children’s writing that fit your budget, get in touch, and we will talk through your options honestly.</p>
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
      <h2>Your Story Is Ready to Be Read Properly. <em>Are You Ready to Send It?</em></h2>
      <p>Your story is worth doing properly. Whether you need a full developmental edit or just a careful copy edit, Purple Giraffe Press is here to help you get there. Send us your manuscript today and let us help you turn your story into something readers will love.</p>
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
      <p>Honest answers to the questions Melbourne authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

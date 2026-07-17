<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Proofreading Services in Melbourne';
$page_description = 'Expert children\'s book proofreading services in Melbourne. Polish grammar, spelling, punctuation, and flow before publishing. Get your free quote today!';
$canonical_path   = 'childrens-book-proofreading-services-in-melbourne.php';
$breadcrumb_name  = 'Proofreading in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'Melbourne',   'url' => page_url('locations/melbourne.php')],
    ['name' => 'Proofreading', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you proofread picture books as well as chapter books?',
    'a' => 'Yes. We provide children’s book proofreading services in Melbourne for picture books, early readers, chapter books and middle-grade novels. Each manuscript is checked with the right age group, reading level, and storytelling style in mind.',
  ),
  1 =>
  array (
    'q' => 'Will you change my writing style or story?',
    'a' => 'No. Our Melbourne children’s book proofreading service focuses on spelling, grammar, punctuation, consistency and small errors. We do not rewrite your story, change your voice or alter your creative style without your approval.',
  ),
  2 =>
  array (
    'q' => 'Can you proofread a book that has already been designed and laid out?',
    'a' => 'Yes. We can review formatted files, including print-ready PDFs, for both text errors and layout issues. This is ideal for Melbourne authors who already have their children’s book designed and want a final professional check before publishing.',
  ),
  3 =>
  array (
    'q' => 'How long does children’s book proofreading usually take?',
    'a' => 'The timeframe depends on your book’s length, format and level of detail. Once we review your manuscript or PDF, we will provide a clear proofreading timeline and quote for your Melbourne children’s book project.',
  ),
  4 =>
  array (
    'q' => 'Do you offer editing as well as proofreading?',
    'a' => 'Yes, we can discuss editing if your manuscript needs more than a final proofread. Proofreading is the last check for errors, while editing may involve sentence flow, structure, clarity, or story feedback. We can guide Melbourne children’s authors towards the right service for their book.',
  ),
  5 =>
  array (
    'q' => 'What file formats do you accept for proofreading?',
    'a' => 'We can work with Word documents, PDFs, and most common manuscript formats. If you are unsure which file to send, you can share what you have, and our Melbourne book proofreading team will let you know if anything else is needed.',
  ),
  6 =>
  array (
    'q' => 'Do I need to be based in Melbourne to use your proofreading service?',
    'a' => 'No. We proudly support children’s authors in Melbourne, but we also work with writers across Australia through email and secure file sharing. Whether you are local to Melbourne or based elsewhere, we can proofread your children’s book professionally and clearly.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Proofreading</div>
      <h1>Children’s Book <em>Proofreading Services</em> in Melbourne for <strong>Print-Ready Stories</strong></h1>
      <p class="lead">You have written the story. You have edited it, maybe more than once. Now you just need someone to check it over before it goes to print or goes live online. That is where we come in. At Purple Giraffe Press, we offer children's book proofreading in Melbourne for authors, illustrators, and small publishers who want their manuscript checked properly before it reaches readers.</p>
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
      <h2>Proofreading Is The Last Step Before Your Book Is Finished.</h2>
      <p>It is not about changing your story or your voice. It is about catching the small things that slip through, the typo on page twelve, the missing full stop, the character’s name spelled two different ways. These small things matter more in children’s books than almost anywhere else, because kids notice, and so do the adults reading aloud to them.</p>
      <p>We work with picture books, early readers, chapter books and middle-grade novels. Whatever stage your book is at, we can give it a proper final check.</p>
      <p>Some authors come to us with a rough Word document, full of tracked changes from earlier edits. Others arrive with a fully designed PDF, ready to send to the printer, and just want one more set of eyes on it before it goes live. Both are fine. We adjust our process to suit where your manuscript is at, rather than asking you to fit into one fixed way of doing things.</p>
      <p>We also understand that this is often a personal project, not just a job. Many of our clients have spent months, sometimes years, on a single story. By the time it reaches us, they are close to the finish line and just want reassurance that nothing has been missed. That is exactly the kind of care we bring to every manuscript.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/proofreading.webp" alt="Children's book proofreading services in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - PROOFREADING SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>What Our Children’s Book Proofreading Service Includes</h2>
    <p style="margin:14px auto 0;">Our proofreading service covers everything a children’s book needs before it goes to print or gets published online.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Spelling and Grammar Check</h3>
        <div class="fc-body">
          <p>We read through your whole manuscript looking for spelling mistakes, grammar errors, and typos. This includes checking names, made-up words, and any repeated words that should only appear once.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Punctuation and Consistency</h3>
        <div class="fc-body">
          <p>Children’s books often use dialogue, exclamations and rhythm in specific ways. We check that punctuation is used correctly and consistently across the whole book, including quotation marks, commas and full stops.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Layout and Formatting Check</h3>
        <div class="fc-body">
          <p>If your book has already been designed, we check the layout too. This means looking at page breaks, text placement, font consistency, and making sure nothing has shifted or been cut off during formatting.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v3"></path></svg></div>
        <h3>Read Aloud Test</h3>
        <div class="fc-body">
          <p>Because children’s books are often read aloud, we check that the text flows well when spoken. Awkward phrasing or accidental tongue twisters get flagged so you can decide if you want to adjust them.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.6-6.5 8-6.5s8 2.5 8 6.5"></path></svg></div>
        <h3>Age-Appropriate Language Check</h3>
        <div class="fc-body">
          <p>We look at whether the vocabulary and sentence length suit the age group you are writing for. We will not rewrite your book, but we will point out anything that seems out of place for your target readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Cross Check Against Illustrations</h3>
        <div class="fc-body">
          <p>If your book includes illustrations, we check the text against the pictures where possible. This catches small mismatches, like a character wearing a red hat in the picture but a blue one in the text, or a scene description that no longer matches the artwork after changes were made.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 4 20 10l-9.5 9.5H4v-6.5L14 4Z" transform="translate(0 0)"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Front and Back Matter Review</h3>
        <div class="fc-body">
          <p>It is easy to forget the pages that are not part of the main story. We also check the title page, copyright page, dedication, author bio, and any back cover text, since these often get less attention than the story itself but still need to be error-free.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE PROOFREAD FOR: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="The children's authors and publishers we proofread for in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Children’s Authors and Publishers We Proofread For</h2>
      <p>Our clients come from all sorts of backgrounds. Some are experienced authors. Others are writing their first book. We work with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors preparing a book for print or Kindle</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who are also writing the text for their picture books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers with a growing list of titles</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents or grandparents writing a personal or family storybook</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and educators are putting together classroom resources</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers entering their manuscript into a competition or pitching to agents</span></li>
      </ul>
      <p>If you are unsure whether your project fits, just ask us. We are happy to have a chat before you commit to anything.</p>
      <p>We also work with authors who are not based in Melbourne but who like knowing their proofreader understands the local publishing scene and Australian English spelling. Distance is not a problem since almost everything can be handled by email and shared files.</p>
    </div>
  </div>
</section>

<!-- 6 - HOW TO CHOOSE -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what to look for</p>
    <h2>How to Choose the Right Children’s Book Proofreader in Melbourne</h2>
  </div>
  <div class="container narrow center">
    <p>Not every proofreader understands children’s books. A good one for this genre should be able to show a few specific things.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li><strong>Experience with the genre.</strong> They should have actually read and worked on children’s books before, not just adult fiction or business documents.</li>
      <li><strong>An eye for rhythm.</strong> Picture books especially rely on rhythm and repetition. A proofreader needs to notice when that rhythm has been broken by mistake.</li>
      <li><strong>Attention to small details.</strong> Character names, capitalised words, made-up creatures, and places all need to stay consistent from the first page to the last.</li>
      <li><strong>Respect for your voice.</strong> A proofreader should fix errors, not rewrite your story into something else.</li>
      <li><strong>Clear communication.</strong> You should get a clear list of what was changed and why, not a document full of unexplained marks.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>When you are comparing options for book proofreading services in Melbourne, ask to see a sample of past work or a short trial on a few pages. This tells you quickly whether the fit is right.</p>
  </div>
</section>

<!-- 7 - WHY SPECIALIST PROOFREADING MATTERS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Children’s Books Need Specialist Proofreading Before Publishing</h2>
  </div>
  <div class="container narrow center">
    <p>A typo in a business report might go unnoticed. A typo in a children’s book usually gets read aloud, over and over, sometimes hundreds of times if the book does well. That repetition means small errors get noticed fast, by kids, by parents, and by teachers.</p>
    <p style="margin-top:14px;">There are a few reasons proofreading children’s books in Melbourne needs its own kind of care.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li><strong>Read aloud pressure.</strong> Parents and teachers read these books aloud constantly. Awkward sentences or mistakes stand out immediately when spoken.</li>
      <li><strong>Limited word count.</strong> Picture books might only have a few hundred words. Every single word carries more weight, so mistakes are harder to hide.</li>
      <li><strong>Made up words and names.</strong> Fantasy creatures, invented place names, and playful made-up words all need to be spelled the same way every time they appear.</li>
      <li><strong>Illustration and text interaction.</strong> Sometimes the text refers to something in the picture. If the wording changes but the picture does not, it can cause confusion for young readers.</li>
      <li><strong>Trust from parents.</strong> Parents often judge a book’s quality by how polished it feels. A clean, error-free book builds trust and encourages them to look for your next title.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>It is also worth remembering that children’s books often get read again and again, sometimes as bedtime routines that repeat every night for weeks. A mistake that might slip past on a first read becomes obvious by the tenth or twentieth time. Getting the details right from the start saves everyone that discomfort later.</p>
  </div>
</section>

<!-- 8 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Melbourne Children’s Book Proofreading Process</h2>
    <p style="margin:14px auto 0;">We keep the process simple, so you always know what is happening with your manuscript.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You send us your file, whether it is a Word document, a PDF, or a formatted book file ready for print. Let us know the age group and any specific concerns you have.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Quote</h3></div>
        <div class="svc-step-body"><p>We look over your manuscript and give you a clear quote based on word count and the type of check you need. There is no obligation at this stage.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Proofread Your Book</h3></div>
        <div class="svc-step-body"><p>Our proofreader goes through the manuscript carefully, marking errors and inconsistencies using tracked changes or comments, so you can see exactly what has been flagged.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review the Changes</h3></div>
        <div class="svc-step-body"><p>We send the marked-up manuscript back to you. You can accept, reject, or ask questions about any change. Nothing is altered without your say-so.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Check and Delivery</h3></div>
        <div class="svc-step-body"><p>Once you have reviewed everything, we do a final pass to make sure all agreed changes are correctly applied. You receive a clean, print-ready file.</p></div>
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

<!-- 10 - BENEFITS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Benefits of Hiring a Children’s Book Proofreading Specialist</h2>
  </div>
  <div class="container narrow center">
    <p>Choosing someone who focuses on children’s books, rather than a general proofreader, makes a real difference.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li><strong>Fewer surprises after printing.</strong> Catching mistakes now saves money and stress later, especially if your book is already being printed in bulk.</li>
      <li><strong>A more polished final product.</strong> Small fixes add up to a book that feels professional and ready for readers.</li>
      <li><strong>Peace of mind.</strong> You can focus on illustrations, marketing, or your next project, knowing the text has been properly checked.</li>
      <li><strong>Consistency across a series.</strong> If you are writing more than one book with the same characters or world, we can help keep names and details consistent across titles.</li>
      <li><strong>Confidence when pitching.</strong> A clean, error-free manuscript looks more professional to agents, publishers, or competition judges.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Melbourne Children’s Authors Choose <em>Purple Giraffe Press</em></h2>
      <p>There are a few reasons Melbourne authors and small publishers come back to us.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise; we do not generalise</h3><p>Children’s books are our main focus, so we understand the genre’s specific needs.</p></article>
      <article><span>✓</span><h3>Upfront pricing</h3><p>You get a clear quote before any work starts, with no hidden extras added later.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>We understand Australian spelling, phrasing and the local children’s publishing scene.</p></article>
      <article><span>✓</span><h3>We treat your story with care</h3><p>Your voice and your creative choices stay in your hands. We fix errors; we do not rewrite your book.</p></article>
      <article><span>✓</span><h3>Simple communication</h3><p>You will always know what stage your manuscript is at and what happens next.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's book proofreading in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Children’s Book Proofreading Costs in Melbourne</h2>
      <p>Pricing for proofreading depends on a few things. Word count is the biggest factor, since picture books and chapter books need very different amounts of time. Whether the book is a plain text document or a fully designed, laid-out file also changes the amount of work involved. Turnaround time can affect price too, if you need a quicker check than usual.</p>
      <p>Because every manuscript is different, we do not publish a fixed price list. Instead, we ask you to send through your manuscript so we can give you an honest quote based on what your book actually needs. You will always see the price before any work begins, so there are no surprises later.</p>
      <p>If you are working to a tight budget, it is worth telling us upfront. We can talk through what level of check fits your situation, whether that is a full proofread or a lighter pass focused on the areas you are most worried about.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
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
      <h2>Ready for a Professional Children’s Book <em>Proofread?</em></h2>
      <p>If your manuscript is ready for a final check, we would love to help. Send it through to Purple Giraffe Press, and we will take a look and get back to you with a clear quote and timeframe. Your book deserves one last careful read before it reaches its readers, and we are here to give it exactly that.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to proofread your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 18 - FOOTER -->
<?php include 'includes/footer.php'; ?>

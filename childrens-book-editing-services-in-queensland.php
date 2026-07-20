<?php
/* Queensland-wide children's book editing page. Root-level, and it pairs with
   the /locations/queensland.php hub -> the card that links here is registered
   in includes/location-services-data.php under the 'queensland' key. */
include 'includes/config.php';

$page_title       = 'Children\'s Book Editing, Crafted in Queensland';
$page_description = 'Polish your children\'s book with expert editing in Queensland. Thoughtful, story-focused edits that help your book shine brightly before publishing.';
$canonical_path   = 'childrens-book-editing-services-in-queensland.php';
$breadcrumb_name  = 'Book Editing in Queensland';
$breadcrumbs = [
    ['name' => 'Home',       'url' => page_url('index.php')],
    ['name' => 'Locations',  'url' => page_url('locations/')],
    ['name' => 'Queensland', 'url' => page_url('locations/queensland.php')],
    ['name' => 'Book Editing','url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do You Edit Picture Books and Longer Children’s Books?',
    'a' => 'Yes. We provide children’s book editing services across Queensland for picture books, early readers, chapter books, and middle-grade manuscripts for children up to 12 years old. When you send your manuscript, let us know the intended age group so we can assess the language, structure, and reading level correctly.',
  ),
  1 =>
  array (
    'q' => 'How Long Does Children’s Book Editing Usually Take?',
    'a' => 'The timeline depends on your manuscript’s length and the type of editing required. A short picture book assessment may take one to two weeks, while developmental editing for a longer children’s manuscript can take several weeks. Queensland authors receive a clear and realistic timeframe with their written quote before work begins.',
  ),
  2 =>
  array (
    'q' => 'Do You Work With Authors Outside Brisbane?',
    'a' => 'Yes. Purple Giraffe Press works with children’s authors throughout Queensland, including Brisbane, the Gold Coast, Sunshine Coast, Cairns, Townsville, Toowoomba, and regional areas. Our editing process is completed remotely, so you can access the same personalised service wherever you are based.',
  ),
  3 =>
  array (
    'q' => 'Can You Help Queensland Authors Who Speak English as a Second Language?',
    'a' => 'Yes. We support Queensland authors who write in English as a second or additional language. Our editors improve grammar, clarity, sentence flow, and word choice while protecting your original voice, ideas, and cultural perspective. The goal is to make your story clear and natural without making it sound like someone else wrote it.',
  ),
  4 =>
  array (
    'q' => 'Do I Need a Full Edit or Just a Manuscript Assessment?',
    'a' => 'A manuscript assessment is often the best starting point when you are unsure whether your children’s book is ready for detailed editing. We review the story and explain which areas need improvement before you invest in a full edit. Queensland authors can then choose the most suitable service with a clearer understanding of their manuscript’s needs.',
  ),
  5 =>
  array (
    'q' => 'Can I Choose Copy Editing Without Developmental Editing?',
    'a' => 'Yes. If your story, characters, pacing, and structure are already complete, you may only need copy editing. Our Queensland children’s book copy editors can focus on grammar, punctuation, spelling, consistency, and sentence clarity. We review the manuscript first and recommend the right level of editing without suggesting work you do not need.',
  ),
  6 =>
  array (
    'q' => 'Do You Provide Queensland Authors With a Written Quote?',
    'a' => 'Always. We review your manuscript and provide a clear written quote before any editing begins. The quote explains the recommended service, expected timeline, and overall scope of work. There are no hidden fees or unexpected additions, so Queensland authors know exactly what is included before deciding whether to proceed.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Book Editing</div>
      <h1>Turn Good Writing into Great Storytelling, <em>Children's Book Editing</em> in <strong>Queensland</strong></h1>
      <p class="lead">Writing a children’s book takes imagination, patience, and a real understanding of young readers. But finishing the first draft is only the beginning. Before your story reaches families, classrooms, or bookshelves, it needs to be clear, engaging, age-appropriate, and polished from the opening line to the final page.</p>
      <p class="lead">Purple Giraffe Press provides specialist children’s book editing services in Queensland for authors who want their manuscripts to make a lasting impression. From Brisbane and the Gold Coast to Cairns and regional Queensland, we help transform promising drafts into stories children will enjoy, understand, and want to read again.</p>
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
      <p>Children’s books may look simple, but every word carries weight. The language must suit the reader’s age, the pacing must hold their attention, and the story must sound natural when read aloud by a parent, teacher, or child. Our editors carefully review your plot, characters, vocabulary, rhythm, structure, and overall reading experience without taking away the voice that makes your story yours.</p>
      <p>You will not be passed between departments or receive generic feedback copied from a checklist. You will work with an experienced children’s book editor who takes the time to understand your audience, your message, and what you want the book to achieve. We will show you what is already working, explain what needs improvement, and help you shape a manuscript that feels ready for real young readers.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="Children's book editing in Queensland at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT THE EDIT COVERS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we can do</p>
    <h2>Everything Your Children’s Book Edit Should Actually Cover</h2>
    <p style="margin:14px auto 0;">Many first-time authors assume editing is simply about fixing spelling mistakes and punctuation. While those details matter, professional children’s book editing looks at the complete reading experience. We review the story, structure, characters, language, pacing, and suitability for the intended age group. Each editing stage focuses on a different part of the manuscript, helping turn an early draft into a clear, polished, and engaging children’s book.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Manuscript Assessment</h3>
        <div class="fc-body">
          <p>A manuscript assessment gives you a clear and honest overview of your complete story. We review the plot, pacing, characters, structure, target age group, and overall reader experience. You receive a detailed written report explaining what is already working and which areas may need further development. No changes are made directly to your text at this stage, allowing you to understand your manuscript before deciding on the next step.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Developmental Editing</h3>
        <div class="fc-body">
          <p>Developmental editing focuses on the larger elements that shape your story and keep readers engaged. We examine the structure, character development, pacing, conflict, themes, and strength of the ending. For picture books, we also consider page turns and the balance between written content and illustrations. Our feedback helps you strengthen weak areas, remove unnecessary material, and build a story that feels complete, purposeful, and suitable for young readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Children’s Picture Book Editing Services in Queensland</h3>
        <div class="fc-body">
          <p>Picture books require careful editing because every word must serve a clear purpose. Our children’s picture book editors in Queensland review rhythm, vocabulary, page flow, read-aloud quality, and the balance between text and illustrations. We check whether the story can hold a young reader’s attention without becoming confusing or repetitive. The result is a tighter, clearer manuscript that gives both the words and artwork enough space to bring the story to life.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Line Editing</h3>
        <div class="fc-body">
          <p>Line editing improves how each sentence sounds, reads, and connects with the next one. We review word choice, sentence rhythm, repetition, clarity, tone, and consistency throughout the manuscript. Vocabulary is also checked against the intended age group, ensuring the language is neither too difficult nor overly simple. This stage makes your writing smoother and more engaging while protecting the natural voice, personality, and style that make your children’s story uniquely yours.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>The Fine Detail Pass</h3>
        <div class="fc-body">
          <p>Copy editing begins once the story, structure, and major revisions have been completed. We carefully check grammar, punctuation, spelling, capitalisation, formatting, and consistency across the entire manuscript. Our children’s book copy editors in Queensland also review character names, timelines, dialogue styling, and repeated details. This detailed pass removes distracting errors and prepares your manuscript for professional formatting, illustration, publisher submission, or the final stages of self-publishing.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Proofreading</h3>
        <div class="fc-body">
          <p>Proofreading is the final quality check before your children’s book is published, printed, or uploaded online. We look for remaining spelling errors, missing words, punctuation slips, awkward spacing, and small formatting problems. This stage does not involve major rewriting or structural changes because those should already be complete. It provides one final layer of protection, helping ensure your finished book looks accurate, polished, and ready to be confidently shared with readers.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - EDITING BY READING STAGE -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Queensland Editing Support Tailored to Every Child’s Reading Stage</h2>
  </div>
  <div class="container narrow center">
    <p>Children’s books change significantly as readers grow. The vocabulary, sentence length, themes, pacing, and story structure suitable for a toddler will not work for a twelve-year-old. We edit every manuscript according to its intended age group, making sure the story is engaging, understandable, and developmentally appropriate.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Board Books for Ages 0 to 3</strong> Board books need simple words, repetition, rhythm, and clear concepts that young children can understand through both text and illustrations. We make sure every line is short, memorable, and enjoyable when read aloud.</li>
      <li><strong>Picture Books for Ages 3 to 7</strong> Picture books depend on a strong balance between words and illustrations. We review read-aloud rhythm, page-turn moments, vocabulary, character appeal, and whether the story can hold a young child’s attention from beginning to end.</li>
      <li><strong>Early Reader Books for Ages 5 to 8</strong> Early reader books help children develop confidence as independent readers. We check sentence length, word difficulty, repetition, chapter structure, and reading level to ensure the story feels achievable without becoming too simple.</li>
      <li><strong>Chapter Books for Ages 7 to 10</strong> Chapter books need accessible language, shorter chapters, clear story progression, and enough excitement to encourage children to continue reading. We help improve pacing, character development, chapter endings, and overall structure.</li>
      <li><strong>Middle Grade Books for Ages 8 to 12</strong> Middle-grade stories can include more detailed plots, stronger emotional themes, and developed character relationships. We review voice, dialogue, pacing, vocabulary, and story complexity to make sure the manuscript remains suitable and engaging for readers up to twelve years old.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Not sure which age group your manuscript is best suited to? We can assess the language, themes, word count, and story structure, then recommend the most appropriate reader age before editing begins.</p>
  </div>
</section>

<!-- 6 - WHO BENEFITS: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Authors, publishers and educators we edit for across Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Benefits Most From Our Queensland Editing Services</h2>
      <p>We edit for a wide mix of authors and organisations, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing their first children's book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Established authors working on their next release</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers based in Queensland</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and educators are creating custom reading material</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents writing a personal story for their family</span></li>
      </ul>
      <p>You don't need to have any publishing experience to work with us. Most of the authors we work with are doing this for the first time, and that's exactly who this service is built for.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Find the Right Queensland Editor for Your Story</h2>
      <p>Not every editor is right for every book, and children's writing is specialised enough that it pays to ask a few questions before you commit to anyone. Whether you work with us or someone else, here's what's worth checking:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Has the editor actually worked on children's books before, or mostly adult fiction and non-fiction?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you get a written sample edit before paying for the full job?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is the quote based on your actual manuscript, or a rough guess with no detail?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will the same person handle your book from start to finish, or will it move between different editors?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are timelines and revision rounds clearly explained before you sign anything?</span></li>
      </ul>
      <p>If an editor can't answer these clearly, that's worth paying attention to.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/proofreading.webp" alt="Choosing the right children's book editor in Queensland" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY EDITING MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Strong Editing Gives Children’s Stories Greater Impact</h2>
  </div>
  <div class="container narrow center">
    <p>Some authors wonder if editing is really necessary, especially if friends and family have already read the manuscript and loved it. Here's the honest answer: people who love you are not always the best judges of your character.</p>
    <p style="margin-top:14px;">A professional edit does a few things a home read-through can't:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>It catches pacing problems that are hard to see when you already know the story</li>
      <li>It picks up on vocabulary or themes that don't quite suit the intended age group</li>
      <li>It gives you an outside view on whether the ending actually lands</li>
      <li>It prepares your manuscript properly for submission to publishers or for self-publishing</li>
      <li>It protects your reputation as an author, since a poorly edited book is often the reason a reader never picks up your next one</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this means your story isn't good. It means every story, even a great one, benefits from a second set of trained eyes.</p>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>From First Review to Final Manuscript, Here’s Our Process</h2>
    <p style="margin:14px auto 0;">We keep the process simple and clear, so you always know what stage your book is at.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step One: Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You send through your manuscript along with a bit of background. Tell us the age group you're writing for, whether it's a picture book or a longer story, and anything specific you're worried about.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step Two: We Send a Quote</h3></div>
        <div class="svc-step-body"><p>After reading enough of your manuscript to understand the scope, we send a clear quote. No vague ranges, no surprise fees added later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step Three: The Edit Begins</h3></div>
        <div class="svc-step-body"><p>Once you approve the quote, we start work. Depending on what you've asked for, this might mean a manuscript assessment report, a full developmental edit, a line edit, or a copy edit and proofread.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step Four: You Get Detailed Feedback</h3></div>
        <div class="svc-step-body"><p>You'll receive your manuscript back with tracked changes and comments, plus a summary explaining the main points. We're always happy to jump on a call to talk through anything that's not clear.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step Five: Revisions and Final Check</h3></div>
        <div class="svc-step-body"><p>Most projects include a round of revisions, so you can ask questions or push back on anything that doesn't feel right. Once everything is settled, we do a final check before you're ready to publish.</p></div>
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

<!-- 11 - WHY QUEENSLAND AUTHORS TRUST US -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Queensland Children’s Authors Trust <em>Purple Giraffe Press</em></h2>
      <p>There are plenty of editing services out there, so it's fair to ask why authors keep coming back to us.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only work on real books, not templates.</h3><p>Every manuscript gets read properly, cover to cover, before we say a word about it.</p></article>
      <article><span>✓</span><h3>You deal with one person, not a call centre.</h3><p>The same editor stays with your project from start to finish.</p></article>
      <article><span>✓</span><h3>We're upfront about pricing.</h3><p>You'll know the cost before any work begins, based on your actual manuscript.</p></article>
      <article><span>✓</span><h3>We understand the Queensland market.</h3><p>From local schools to independent bookshops, we know what audiences here respond to.</p></article>
      <article><span>✓</span><h3>We're honest, even when it's not what you want to hear.</h3><p>If a chapter isn't working, we'll tell you, and then help you fix it.</p></article>
    </div>
  </div>
</section>

<!-- 12 - WHAT MAKES OUR EDITORS DIFFERENT -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the difference</p>
    <h2>What Makes Our Queensland Children’s Book Editors Truly Different</h2>
  </div>
  <div class="container narrow center">
    <p>That's a big claim, and we don't make it lightly. What we can say honestly is this: we treat every manuscript with the same care we'd want for our own work. We read closely, we explain our reasoning, and we never make changes just to justify a fee. Authors come back to us for their second and third books, and that's the real measure of whether an editing service is doing its job properly.</p>
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
<!-- 15 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, written quote for children's book editing in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Children’s Book Editing Usually Costs Across Queensland</h2>
      <p>One of the questions we're asked most often is about the cost of children's picture book editing services in Queensland. The honest answer is that it depends on your manuscript. A short picture book of four hundred words takes far less time than a full assessment of a longer chapter book, and pricing reflects that.</p>
      <p>We don't believe in flat, one-size-fits-all rates because no two manuscripts need the same amount of work. What we do promise is a clear, written quote before you commit to anything, based on an actual look at your manuscript rather than a guess. There are no hidden add-ons and no surprise invoices halfway through the job.</p>
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
$location_services_heading = 'More Services to Bring Your Children’s Book to Market';
$location_services_intro   = 'We built our service list around the real gaps that stop authors from finishing and launching their books. Here is what falls under our roof.';
$location_services_section = 'section figma-cream';
include 'includes/location-services.php';
?>

<!-- 17 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 18 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Is Your Children’s Book <em>Ready for Young Readers?</em></h2>
      <p>If you've got a manuscript sitting somewhere on your computer, or a picture book idea you've been chipping away at for months, we'd love to have a look. Send it through, tell us a bit about what you're hoping for, and we'll get back to you with honest feedback and a clear quote.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to edit your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 19 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
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

<!-- 20 - FOOTER -->
<?php include 'includes/footer.php'; ?>

<?php
include 'includes/config.php';

$page_title       = 'Dublin Proofreading Service for Children\'s Books';
$page_description = 'Polish your children\'s book to perfection with expert proofreading in Dublin. Careful, detail-focused edits that make your story shine.';
$canonical_path   = 'childrens-book-proofreading-in-dublin.php';
$breadcrumb_name  = 'Proofreading in Dublin';
$breadcrumbs = [
    ['name' => 'Home',         'url' => page_url('index.php')],
    ['name' => 'Locations',    'url' => page_url('locations/')],
    ['name' => 'Dublin',       'url' => page_url('locations/dublin.php')],
    ['name' => 'Proofreading', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Dublin?',
    'a' => 'No. While many of our clients are local, we work with authors across Ireland and further afield, including London and the rest of the UK, all by email and secure file sharing.',
  ),
  1 =>
  array (
    'q' => 'How long does a children\'s book proofread take?',
    'a' => 'It depends on the length of the manuscript. A short picture book might take a few days, while a longer novel can take one to two weeks. We will give you a clear timeline once we see your file.',
  ),
  2 =>
  array (
    'q' => 'Can you proofread a book that has already been formatted for print?',
    'a' => 'Yes. We can proofread a print-ready PDF or a plain manuscript file. If you are further along in the process, just let us know, and we will adjust our approach.',
  ),
  3 =>
  array (
    'q' => 'Do you work with authors in London as well as Dublin?',
    'a' => 'Yes, we regularly proofread manuscripts for authors in London and across the UK. Distance is not an issue since everything is handled online.',
  ),
  4 =>
  array (
    'q' => 'Is proofreading the same as editing?',
    'a' => 'No. Editing looks at bigger issues like story structure and pacing. A book proofreader in Dublin, like our team, focuses on the final layer, spelling, grammar, punctuation, and consistency, once the writing itself is finished.',
  ),
  5 =>
  array (
    'q' => 'What file formats do you accept?',
    'a' => 'We accept Word documents and PDFs. If your file is in another format, get in touch, and we will let you know if we can work with it.',
  ),
  6 =>
  array (
    'q' => 'Do you offer a sample proofread before I commit to the full book?',
    'a' => 'Yes. For longer manuscripts, we are happy to proofread a few sample pages first, so you can see our approach before booking the full project.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). streetAddress is left out
   until we have a Dublin address; D01 is the city-centre postal district. */
$location_business = [
    'locality'   => 'Dublin',
    'region'     => 'Dublin',
    'postalCode' => 'D01',
    'country'    => 'IE',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Proofreading</div>
      <h1>Children's Book <em>Proofreading in Dublin</em>: Making Sure Your Story Reads Just <strong>Right</strong></h1>
      <p class="lead">You have written a children's book. That is no small thing. Now you want it to read well, look right, and be free of the small mistakes that pull young readers, or the adults reading to them, out of the story.</p>
      <p class="lead">That is where we come in. Purple Giraffe Press offers children's book proofreading in Dublin for authors, illustrators, small publishers, and schools. We read every page closely. We check spelling, grammar, punctuation, and layout. We do not rewrite your voice. We just make sure it shines the way you meant it to.</p>
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
      <h2>A clean, correct manuscript matters</h2>
      <p>Whether you are self-publishing your first picture book or finishing the fourth title in a series, a clean, correct manuscript matters. Parents notice typos. Teachers notice them too. And once a book is printed, fixing a mistake is far harder than catching it before it goes to print.</p>
      <p>We work with writers across Dublin and the wider country, and we keep things simple. No jargon, no confusing quotes, no long waits for a reply.</p>
      <p>Not every book proofreading services in Dublin provider understands children's writing specifically. Some treat every manuscript the same, whether it is a business report, a novel for adults, or a picture book for a five-year-old. We do not. Children's books have their own rhythm, their own rules around vocabulary, and their own way of reading aloud. That is the lens we bring to every manuscript that lands in our inbox.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/proofreading.webp" alt="Children's book proofreading in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT PROOFREADING COVERS (list + feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>What Children’s Book Proofreading in Dublin Actually Covers</h2>
    <p style="margin:14px auto 0;">A lot of people mix up proofreading with editing. They are not the same thing. Editing looks at the bigger picture, things like pacing, structure, and whether a scene works. Proofreading is the final check before a book goes to print or goes live. It catches:</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>Spelling mistakes and typos</li>
      <li>Grammar errors and awkward punctuation</li>
      <li>Inconsistent character names or spellings</li>
      <li>Repeated words or missing words</li>
      <li>Formatting issues, like odd spacing or page breaks</li>
      <li>Consistency in style, such as how numbers or dialogue are written</li>
    </ul>
  </div>
  <div class="container" style="margin-top:34px;">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Books</h3>
        <div class="fc-body">
          <p>Picture books are short, but every word carries weight. A single typo on a page with only twelve words stands out fast. We check the text for accuracy, and we also check that it flows well when read aloud, since most picture books are read to a child rather than read alone.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Early Readers and Chapter Books</h3>
        <div class="fc-body">
          <p>These books introduce children to reading on their own. Simple sentences, clear structure, and correct grammar matter more here than almost anywhere else, since young readers are still learning the rules themselves.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Middle Grade Fiction</h3>
        <div class="fc-body">
          <p>Longer stories with more complex plots need a careful, patient read. We keep an eye on continuity too, so a character's eye colour or a sibling's name does not change halfway through the book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.6-6.5 8-6.5s8 2.5 8 6.5"></path></svg></div>
        <h3>Young Adult and Older Children's Fiction</h3>
        <div class="fc-body">
          <p>These books often deal with more grown-up themes and longer chapters. Our children's book proofreader in Dublin checks tone as well as accuracy, making sure the writing stays consistent from the first page to the last.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Non-Fiction and Educational Books for Children</h3>
        <div class="fc-body">
          <p>Fact-based books need extra care. Names, dates, and figures must be correct, and the language needs to stay clear and age-appropriate throughout. We also check that any activities, quizzes, or worksheets included in the book are laid out clearly and are easy for a child to follow.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - COMMON MISTAKES WE CATCH (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we spot</p>
    <h2>Common Children’s Book Mistakes Our Dublin Proofreaders Catch</h2>
  </div>
  <div class="container narrow center">
    <p>After reading a lot of children's books, we notice the same handful of issues coming up again and again. Knowing what to watch for can help you tidy up your own draft before you send it anywhere.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li><strong>Names that change spelling partway through.</strong> A character called Aoife on page three sometimes becomes Aoifê or Eva by page thirty, especially in longer books written over a long stretch of time.</li>
      <li><strong>Tense that slips.</strong> A story that starts in the past tense can drift into the present tense without the author noticing, particularly in dialogue-heavy scenes.</li>
      <li><strong>Repeated words close together.</strong> Young readers notice repetition more than adults do, so a word like "suddenly" appearing three times on one page stands out.</li>
      <li><strong>Rhymes that almost work.</strong> In rhyming picture books, a near rhyme can feel jarring when read aloud, even if it looks fine on the page.</li>
      <li><strong>Punctuation in dialogue.</strong> Speech marks, commas, and capital letters in dialogue trip up a lot of writers, especially across long stretches of back-and-forth conversation.</li>
      <li><strong>Page break issues.</strong> In picture books, a sentence that gets cut awkwardly across a page turn can spoil the pacing of a read-aloud.</li>
    </ul>
  </div>
</section>

<!-- 6 - AGE GROUPS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Proofreading Support For Every Children’s Age Group</h2>
    <p style="margin:14px auto 0;">Every age group has different reading needs. We review children's manuscripts with the intended audience in mind, checking that the language, tone, and writing style are suitable for the readers you want to reach.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Picture Books (Ages 0–7)</h3>
        <div class="fc-body">
          <p>We focus on simple language, smooth storytelling, and read-aloud flow while checking that every word supports the illustrations and young readers' understanding.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Early Readers And Chapter Books (Ages 5–10)</h3>
        <div class="fc-body">
          <p>We check sentence structure, vocabulary, and consistency to ensure the story feels clear and enjoyable for children developing independent reading skills.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Middle Grade Fiction (Ages 8–12)</h3>
        <div class="fc-body">
          <p>Longer stories need careful attention to character details, plot consistency, and age-appropriate themes so young readers can stay engaged.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M7 4v16M17 4v16M3 12h18"></path></svg></div>
        <h3>Young Adult Fiction (Ages 13–18)</h3>
        <div class="fc-body">
          <p>We review tone, language, and storytelling style to make sure the manuscript connects naturally with teenage audiences.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Understanding your target age group helps us provide proofreading that protects your writing style while making sure your book feels right for its intended readers.</p>
  </div>
</section>

<!-- 7 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin authors, publishers, and schools we proofread children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Benefits Most From Children’s Book Proofreading in Dublin</h2>
      <p>We have helped a wide range of people get their books ready:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors preparing a manuscript for print or ebook</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers with children's titles on their list</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who also write and need a second pair of eyes on the text</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents writing a personal story for their family</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and teachers producing books for pupils or as class projects</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Charities and community groups publishing books for young readers</span></li>
      </ul>
      <p>If any of that sounds like you, proofreading children's books in Dublin is exactly what we do, day in and day out. We have read everything from a rhyming picture book about a lost sock to a nine-book fantasy series written for readers aged ten and up, and every manuscript gets the same close attention.</p>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Children's Book Proofreader in Dublin</h2>
      <p>Not every proofreader is the right fit for children's writing. Before you hire anyone, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they worked on children's books before, or only adult fiction and business documents?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand the difference between proofreading and a full edit?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they read the whole book, or just skim for obvious errors?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they give you a written list of changes, or just hand back a marked-up file with no explanation?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they tell you a rough cost and turnaround time before you commit?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they respect your voice as the author, rather than rewriting your style?</span></li>
      </ul>
      <p>A good proofreader will answer these questions clearly and without hesitation. If someone dodges a straight answer, take that as a warning sign.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book proofreader in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHY PROFESSIONAL PROOFREADING MATTERS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Proofreading Matters Before Your Children’s Book Launches</h2>
  </div>
  <div class="container narrow center">
    <p>Some authors think proofreading is a small, final step that can be rushed. It is not. Here is why it matters:</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>A book full of small errors looks unprofessional, even if the story itself is excellent</li>
      <li>Reviewers and booksellers notice mistakes, and it can affect how your book is received</li>
      <li>Once a book is printed, correcting errors means a costly reprint</li>
      <li>Children learning to read pick up on spelling and grammar from what they read, so accuracy matters more here than in most writing</li>
      <li>A clean manuscript gives you confidence when you send it to agents, publishers, or printers</li>
    </ul>
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

<!-- 11 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Children’s Book Proofreading Process From Start to Finish</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>You Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You send your file to us, along with any notes on style, character names, or anything specific you want us to watch for. There is no need to format anything special first. A Word document is easiest for us to work with, but we can also take a PDF if that is what you have.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Give You a Quote and Timeline</h3></div>
        <div class="svc-step-body"><p>We read a sample of your book and give you a clear price and an honest timeframe. No surprises later on. If your deadline is tight, tell us early, and we will let you know if we can accommodate it.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Proofread Line by Line</h3></div>
        <div class="svc-step-body"><p>One of our proofreaders reads through the full manuscript, marking every correction and flagging anything that needs your input, such as an inconsistent detail we cannot fix without knowing your intent. We read slowly and carefully rather than skimming, since children's books often hide small errors in short, simple sentences.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>You Receive a Marked-Up Copy</h3></div>
        <div class="svc-step-body"><p>We return your manuscript with tracked changes and comments, so you can see exactly what we changed and why. You stay in full control of your book. Nothing is altered without you being able to see it and accept or reject it.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>A Final Check</h3></div>
        <div class="svc-step-body"><p>Once you have reviewed our changes, we can do one more pass to make sure everything is correct and ready for print or publishing. This step catches anything that might have been missed while you were making your own edits.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Dublin Children’s Book Authors Choose <em>Purple Giraffe Press</em> for Proofreading</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children's writing</h3><p>We do not treat a picture book the same way we would treat a business report or a novel for adults. Children's books have their own rhythm, and we read with that in mind.</p></article>
      <article><span>✓</span><h3>We are based locally and understand the Dublin market</h3><p>From spelling conventions to the kind of books popular with Irish schools and readers, we bring local knowledge to every project.</p></article>
      <article><span>✓</span><h3>We are upfront about pricing and timelines</h3><p>You will never be left wondering what something costs or when you will hear back from us.</p></article>
      <article><span>✓</span><h3>We respect your voice</h3><p>Our job is to polish your writing, not to change who you are as a writer.</p></article>
      <article><span>✓</span><h3>We offer clear, honest feedback</h3><p>If something is not working, we will tell you plainly, but always with the aim of helping your book succeed.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, honest quote for children's book proofreading in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Children’s Book Proofreading Cost in Dublin?</h2>
      <p>Pricing depends on a few things: the length of your manuscript, how clean the writing already is, and how quickly you need it back. A short picture book with a few hundred words will cost far less than a full middle-grade novel of forty thousand words or more.</p>
      <p>We do not believe in flat, one-size-fits-all pricing because no two manuscripts are the same. A book that has already been through a careful edit will usually need less work and cost less than one that is still rough around the edges. Instead, we ask you to send us your file, and we will read a sample and give you a clear, honest quote with no hidden extras. You will know the full cost before we start any work, and there will be nothing added later that was not agreed at the start.</p>
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
      <h2>Ready to Perfect Your <em>Children’s Book</em> Before Publication?</h2>
      <p>Your story deserves to be read the way you wrote it, without small errors getting in the way. If you are ready for a proofread or just want to ask a few questions first, get in touch with Purple Giraffe Press today. Send us your manuscript, tell us your deadline, and we will take it from there.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to proofread your children's book in Dublin" loading="lazy" decoding="async">
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

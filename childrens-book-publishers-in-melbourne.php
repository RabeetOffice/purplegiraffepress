<?php
include 'includes/config.php';

$page_title       = 'Melbourne Publishing Service for Children\'s Books';
$page_description = 'Turn your children\'s book into a published reality in Melbourne. Guided, author-focused publishing services that bring your story to readers everywhere.';
$canonical_path   = 'childrens-book-publishers-in-melbourne.php';
$breadcrumb_name  = 'Book Publishing in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',            'url' => page_url('index.php')],
    ['name' => 'Locations',       'url' => page_url('locations/')],
    ['name' => 'Melbourne',       'url' => page_url('locations/melbourne.php')],
    ['name' => 'Book Publishing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need an agent to submit my manuscript?',
    'a' => 'No. You can send your manuscript to us directly. We do not require an agent or a formal query letter.',
  ),
  1 =>
  array (
    'q' => 'How long does the assessment process take?',
    'a' => 'We aim to get back to every author within a few weeks of submission, though this can vary depending on how many manuscripts we are reading at the time.',
  ),
  2 =>
  array (
    'q' => 'Is Purple Giraffe Press one of the traditional publishing companies for children\'s books in Melbourne?',
    'a' => 'Not exactly. We use a hybrid model, which means authors have more input and a bigger share of decisions than a fully traditional deal, while still getting professional editing, design and distribution support.',
  ),
  3 =>
  array (
    'q' => 'Can I choose my own illustrator?',
    'a' => 'Yes, if you already have someone in mind, we are happy to work with them. If not, we can suggest illustrators whose style suits your story.',
  ),
  4 =>
  array (
    'q' => 'Do you only publish picture books?',
    'a' => 'No. While we are well known among publishing companies children\'s books in Melbourne authors turn to for picture books, we also publish junior fiction and young adult titles.',
  ),
  5 =>
  array (
    'q' => 'What age groups do you write for?',
    'a' => 'We work across the board, from board books for toddlers through to young adult fiction, with editing adjusted to suit each age group.',
  ),
  6 =>
  array (
    'q' => 'Are you only able to help authors based in Melbourne?',
    'a' => 'Not at all. While we are proudly one of the Melbourne childrens book publishers with strong local ties, we work with authors from all over Australia.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Book Publishing</div>
      <h1>Children's <em>Book Publishers in Melbourne</em>: Giving Your Story a <strong>Real Home</strong></h1>
      <p class="lead">So you have written a children's book. Maybe it started as a bedtime story for your own kids. Maybe it has been sitting in a drawer for years. Either way, you are now looking for a publisher who will take it seriously, and that search can feel confusing fast.</p>
      <p class="lead">There are big houses that only reply to agents. There are print-on-demand sites that will publish anything for a fee, with no editing and no real support. Neither option feels right if you want a proper book, made properly, with people behind it who care about children's stories.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Submit Your Manuscript</a>
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
      <h2>A publishing process built around your book</h2>
      <p>There are plenty of book publishing companies in Melbourne, and telling them apart from the outside is not easy. Some are set up mainly to sell services to authors rather than to sell books to readers. It pays to know the difference before you send your manuscript anywhere.</p>
      <p>Purple Giraffe Press is a children's book publishing house in Melbourne. We work with authors and illustrators to turn manuscripts into real books, sold in real places, with real editorial care along the way. We are not the biggest name in the industry, and we do not pretend to be. What we offer is honest guidance, clear communication, and a publishing process built around your book, not a template.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Submit Your Manuscript &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-publishing.webp" alt="Children's book publishers in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE OFFER (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>From Children’s Book Idea to Professionally Published Story</h2>
    <p style="margin:14px auto 0;">Children's publishing is not one single service. A picture book needs different support from a junior fiction chapter book. Some authors need editing, while others need illustration, design, or distribution help. Every book has its own stage, pace, and publishing needs. Here is how we break the process down from rough draft to finished book.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Hybrid Publishing Path</h3>
        <div class="fc-body">
          <p>Traditional publishing can take years and often ends in a form rejection letter with no feedback. Self-publishing puts every task on your shoulders, from editing to cover design to getting into shops. Our hybrid publishing for children's books in Melbourne sits between the two. It gives authors proper support without making them wait years for a maybe.</p>
          <p>You keep more control and a bigger share of decisions than you would with a traditional deal. We bring the editing, design, print production, and distribution knowledge most authors do not have time to learn from scratch. This suits authors who want a professionally made book with real guidance. It also helps avoid the stress of managing every publishing stage alone.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Picture Book Submissions</h3>
        <div class="fc-body">
          <p>Picture books are their own art form. The words have to work with pictures that do not exist yet. The pacing has to suit a parent reading aloud at bedtime, sometimes for the tenth time that week. That is why the text needs to feel simple, clear, and carefully shaped. A strong picture book leaves space for the illustrator to bring the story to life.</p>
          <p>When you send us picture book submissions in Melbourne, we look at the story arc, word count, and age suitability. We also check whether the text leaves enough room for an illustrator to add meaning through the artwork. Our feedback is honest, even when a manuscript needs more work before it is ready. That way, authors know where the book stands before moving forward.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Manuscript Assessment</h3>
        <div class="fc-body">
          <p>Before anything else, we read your full manuscript carefully. We look at structure, age suitability, voice, and whether the story holds together from first page to last. This helps us understand what is already working and what may need improvement. You receive a written report, not a form letter. The aim is to give you useful direction before the next stage begins.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Editing and Proofreading</h3>
        <div class="fc-body">
          <p>Once a manuscript is accepted, our editors work through it in clear stages. Structural editing comes first, looking at the story shape, pacing, and whether the ending delivers what the opening promises. Line editing then improves sentence flow, word choice, and rhythm for the target age group. Proofreading comes last, catching typos, punctuation slips, and formatting issues before print.</p>
          <p>Each stage is handled by a real person with care. A five-year-old and a ten-year-old need very different sentence rhythms, so the editing must suit the reader. We do not run the manuscript through a spellchecker and call it finished. The goal is to make the book stronger while keeping the author’s voice intact. That balance matters in children’s publishing.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Illustration Support</h3>
        <div class="fc-body">
          <p>Most children's books live or die on the illustrations. We work with illustrators to match the art style to the story tone. This includes managing the brief, reviewing visual direction, and keeping the artwork aligned with the text. The aim is for the pictures and words to feel like one complete reading experience. Good illustration should support the story, not distract from it.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"></path><rect x="7" y="14" width="10" height="7" rx="1"></rect></svg></div>
        <h3>Printing and Distribution</h3>
        <div class="fc-body">
          <p>Once the book is finished, we manage the print run and prepare the files for publication. We also help get copies into distribution channels, including bookshops and online retailers. This gives authors a clearer route from finished manuscript to available book. We also handle practical details like ISBNs and print files that many first-time authors have never dealt with before.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="The Melbourne authors and illustrators we help publish children's books" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Authors We Help Bring Children’s Books to Life in Melbourne</h2>
      <p>If you have been searching for a children's book publisher in Melbourne who will actually read your work properly, that search ends here. Our authors come from all kinds of backgrounds. Common starting points include:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors with a finished or nearly finished manuscript, who are not sure what to do next</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers, librarians, and parents who have written stories for the children in their lives and think other families might enjoy them too</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who have a visual concept but need a writer, or the other way around, and are looking for someone to help pair the two</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who tried traditional submissions and got nowhere, without ever finding out why their manuscript was passed over</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers who tried self-publishing alone and found it more work than expected, from formatting to finding a printer to sorting out distribution</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 6 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Children's Book Publisher Without Getting Burned</h2>
      <p>Not every publisher operates the same way, and some charge a lot for very little. Before you sign anything, with us or anyone else, ask these questions.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What exactly is included in the fee, and what costs extra later</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who owns the rights to the finished book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you get to see and approve the cover and interior design before print</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of editing are included</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if you are not happy with the illustrations</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is there a real person you can call, or only a contact form</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What does the publisher actually do to get the book into shops, beyond listing it online</span></li>
      </ul>
      <p>A publisher who answers these clearly, without dodging, is worth your time. One who gets vague or defensive is a warning sign.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book publisher in Melbourne" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY PROFESSIONAL EDITING MATTERS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Children’s Book Editing Makes the Difference</h2>
  </div>
  <div class="container narrow center">
    <p>Some authors wonder why they cannot just format the manuscript themselves and upload it somewhere cheap. Here is the honest answer.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>A second set of trained eyes catches plot holes and pacing problems the author is too close to see, because after the tenth read-through of your own work, your brain starts filling in gaps that are not actually on the page</li>
      <li>Age-appropriate language and rhythm are harder to get right than they look, especially for younger readers who are hearing the story read aloud rather than reading it themselves</li>
      <li>Poor formatting or a rushed cover can make an otherwise good story look amateurish on a shelf, even when the writing inside is genuinely strong</li>
      <li>Bookshops and libraries are more likely to stock a book that reads and looks professionally made, since they are judging it the same way a customer will</li>
      <li>Illustration and text need to be developed together, not bolted on at the last minute, or the pictures end up fighting the words instead of supporting them</li>
    </ul>
  </div>
</section>

<!-- 8 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Step-by-Step Children’s Book Publishing Process</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You submit your full manuscript along with a short note about the story and who it is for. There is no need for a formal query letter or an agent, and no need to have illustrations ready before you send it through.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Manuscript Assessment</h3></div>
        <div class="svc-step-body"><p>We read the manuscript properly and get back to you with honest feedback. If it needs work before it is ready, we will tell you what and why, rather than sending a generic rejection with no explanation.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Publishing Agreement</h3></div>
        <div class="svc-step-body"><p>If we both want to move forward, we will walk you through the agreement in plain language. No confusing clauses, no pressure to sign on the spot. Take it away, read it properly, and ask questions before you decide.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Editing and Illustration</h3></div>
        <div class="svc-step-body"><p>Your book goes through structural editing, line editing, and proofreading. If illustrations are needed, we coordinate that process alongside the text edits, so both sides of the book develop together rather than one waiting on the other.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Design and Layout</h3></div>
        <div class="svc-step-body"><p>The interior layout and cover design come together, with your input at each stage. You will see draft covers and page layouts before anything is locked in.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Print and Publish</h3></div>
        <div class="svc-step-body"><p>We finalise print files, set up distribution, and get your book ready for sale in shops and online, including sorting out the paperwork most first-time authors have never had to deal with before.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">7</div><h3>Ongoing Support</h3></div>
        <div class="svc-step-body"><p>After launch, we stay in touch about reprints, additional formats, and any future books you want to write. Publishing one book with us does not mean the relationship ends on launch day.</p></div>
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

<!-- 10 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Melbourne Children’s Authors Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Clear, upfront pricing</h3><p>You will know what you are paying for before you commit, with no hidden add-ons that appear later.</p></article>
      <article><span>✓</span><h3>Real editorial feedback</h3><p>We tell you the truth about your manuscript, even when it is not what you were hoping to hear.</p></article>
      <article><span>✓</span><h3>Author involvement at every stage</h3><p>You see and approve the cover, the interior layout, and the illustrations before anything goes to print.</p></article>
      <article><span>✓</span><h3>Small enough to know your name</h3><p>You will deal with the same people throughout, not a different department for every question.</p></article>
      <article><span>✓</span><h3>Melbourne-based, Melbourne understanding</h3><p>As a publisher of children's books in Melbourne, families and schools have come to know that we understand the local bookshop and library scene, and we build that into how we plan distribution.</p></article>
      <article><span>✓</span><h3>Genuine hybrid model</h3><p>You keep more say over your book than a traditional deal usually allows, without carrying the entire workload alone.</p></article>
    </div>
  </div>
</section>

<!-- 11 - TESTIMONIALS -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 12 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 13 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 14 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Publish Your <em>Children’s Book in Melbourne?</em></h2>
      <p>If you have a children's book manuscript sitting on your desktop or in a drawer, we would like to read it. There is no cost to submit and no obligation once we get back to you with feedback. Get in touch with Purple Giraffe Press today and take the first real step toward seeing your story on a shelf, in a shop, in a school library, or in a child's hands at bedtime.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to publish your children's book in Melbourne" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 15 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 16 - FOOTER -->
<?php include 'includes/footer.php'; ?>

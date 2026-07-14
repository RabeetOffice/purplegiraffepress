<?php
include 'includes/config.php';

$page_title       = "London's Ghostwriters for Children's Books";
$page_description = "Have a story idea but need help writing it? Our London-based ghostwriters bring your children's book to life with engaging, age-appropriate storytelling.";
$canonical_path   = 'londons-ghostwriters-for-childrens-books.php';
$breadcrumb_name  = 'Ghostwriting in London';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'London',      'url' => page_url('locations/london.php')],
    ['name' => 'Ghostwriting', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with clients based in London?',
    'a' => 'No. Most of our clients are in London, and we\'re happy to meet in person if that works for you, but we write for authors and families anywhere in the UK.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to ghostwrite a children\'s book?',
    'a' => 'A picture book usually takes a few weeks. A full chapter book or middle-grade novel can take two to four months, depending on length and how many rounds of revision you\'d like.',
  ),
  2 =>
  array (
    'q' => 'Will my name be the only one on the book?',
    'a' => 'Yes. Ghostwriting means we write the book, but you\'re the credited author. That\'s part of the agreement from the start.',
  ),
  3 =>
  array (
    'q' => 'Can you help me find an illustrator in London?',
    'a' => 'We don\'t provide illustration ourselves, but we can point you toward illustrators who work well with the kind of manuscript we produce.',
  ),
  4 =>
  array (
    'q' => 'What if I only have half an idea, not a full story?',
    'a' => 'That\'s normal. Most clients start with a character, a message, or a rough plot. We help shape it into a full story during the outline stage.',
  ),
  5 =>
  array (
    'q' => 'Do you write in British English for London based schools and publishers?',
    'a' => 'Yes. All our writing uses British English spelling and phrasing, which matters if your book is going into local schools or to UK publishers.',
  ),
  6 =>
  array (
    'q' => 'What happens if I\'m not happy with the first draft?',
    'a' => 'Revisions are built into every quote. We\'ll work through changes with you until the manuscript matches what you had in mind.',
  ),
  7 =>
  array (
    'q' => 'Do you know what London schools and libraries look for in a children\'s book?',
    'a' => 'We keep an eye on what London schools and local libraries tend to stock and recommend, and we can write with that in mind if getting into schools is part of your plan. It\'s not a guarantee, but it does shape decisions like vocabulary level and subject matter.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). UK country code and a
   central-London placeholder postcode until we have a real London address. */
$location_business = [
    'locality'   => 'London',
    'region'     => 'London',
    'postalCode' => 'EC1V 2NX',
    'country'    => 'GB',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Ghostwriting</div>
      <h1>London's <em>Ghostwriters for Children's Books</em>, Written with <strong>Heart</strong></h1>
      <p class="lead">You have a story in your head. Maybe it's been there for years. A bedtime tale you tell your kids, a picture book idea scribbled on a napkin, or a full plot for a middle grade adventure that never quite made it onto the page.</p>
      <p class="lead">The problem is time. Or maybe it's confidence with words. Writing a children's book well is harder than it looks. The rhythm has to work when read aloud. The vocabulary has to match the age group. The story has to actually go somewhere.</p>
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
      <h2>This Is Where We Come In</h2>
      <p>Purple Giraffe Press works with parents, teachers, grandparents, and first-time authors right across London who have a great idea but need a professional writer to bring it to life.</p>
      <p>Think of us as the writer behind your book. You keep the credit, the idea, and the rights. We do the hard part. We turn your idea into a manuscript that reads like it was written by someone who does this for a living. Because it was.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghostwriting.webp" alt="Children's book ghostwriting in London at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - EVERY MEMORABLE BOOK: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/ghost-writing-fold.webp" alt="Turning a London author's story idea into a finished manuscript" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- your story idea</p>
      <h2>Every Memorable Children’s Book Begins With a Powerful Story Idea</h2>
      <p>Plenty of people have a brilliant idea for a children's book. Fewer people have the time, or the writing skill, to turn that idea into thirty pages of rhyming picture book text, or forty thousand words of a chapter book that keeps a nine year old turning pages.</p>
      <p>That's exactly the gap our children's ghostwriting services in London are built to fill. We take your idea, your characters, your message, and we write the book around them. You stay involved as much or as little as you like. Some clients want to review every chapter. Others just want a finished manuscript in their inbox in a few months.</p>
      <p>Either way, your name goes on the cover. That's the whole point of ghostwriting. The words are ours. The book is yours.</p>
    </div>
  </div>
</section>

<!-- 5 - DO YOU NEED A GHOSTWRITER: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- how to know</p>
      <h2>Do You Need a Children’s Book Ghostwriter? Here’s How to Know</h2>
      <p>Not everyone comes to us already certain. A lot of people just have a nagging feeling that they've got something worth writing but no idea how to start. If any of the below sounds familiar, it's probably time to have a chat.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>You've told the same story to your kids so many times you know it word for word, but it's never been written down properly</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>You've started a manuscript three or four times and never got past the first few pages</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>You know exactly what happens in the story but writing dialogue or description doesn't come naturally to you</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>You've got a message or a lesson you want a book to carry, but no plot to hang it on yet</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>You work full time and simply don't have the hours a manuscript needs</span></li>
      </ul>
      <p>None of these are reasons to give up on the idea. They're just reasons to bring in someone who writes for a living.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Deciding whether to hire a children's book ghostwriter in London" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 6 - GHOSTWRITING SERVICES (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Complete Children’s Book Ghostwriting Services From Idea to Manuscript</h2>
    <p style="margin:14px auto 0;">Not every children's book is the same, so we don't treat them the same. Here's how we break the work down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Picture Books and Early Readers</h3>
        <p>Picture books look simple. They are not. Every word has to earn its place, because there are so few of them. We write text that matches your illustrations, or works well with an illustrator later, keeps a consistent read-aloud rhythm, and holds a young child's attention from cover to cover.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Chapter Books and Middle Grade Fiction</h3>
        <p>For readers aged seven to twelve, the story needs more. It needs a proper plot, characters kids care about, and pacing that keeps them reading past bedtime. We write full chapter books and middle-grade fiction from your outline, or help build the outline first if you only have a rough idea.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Ebooks for Young Readers</h3>
        <p>Not every book needs to end up in print straight away. If you're planning a digital release, we can write with that format in mind from day one. Clients looking into the best ebook ghostwriting services in London usually want the same quality as a print book, just built for an e-reader instead of a shelf. That means shorter chapters that help pacing, chapter titles that work well in a table of contents, and text that reads cleanly on a small screen. If you're planning to publish through Kindle or another self-publishing platform, we can also flag anything in the manuscript that tends to cause formatting problems later.</p>
      </article>
    </div>
  </div>
</section>

<!-- 7 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="The London storytellers we ghostwrite children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who We Help Bring Their Children’s Book Ideas to Life</h2>
      <p>We work with all sorts of people across London and further afield. Most of our clients fall into one of these groups:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents who want to turn a family story or a made-up bedtime tale into a real book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and school leaders writing a book for their pupils or their wider school community</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Grandparents who want to leave something personal behind for their grandchildren</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors with a strong idea but no experience writing fiction</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small businesses and charities that want a children's book as part of a wider project</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors who need a second or third book written to match their first</span></li>
      </ul>
      <p>If you don't see yourself on this list, get in touch anyway. Most projects don't fit neatly into a category, and we'd rather have a quick conversation than have you rule yourself out based on a bullet point.</p>
    </div>
  </div>
</section>

<!-- 8 - AGE-SPECIFIC GHOSTWRITING (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Age-Specific Children’s Book Ghostwriting For Every Young Reader</h2>
    <p style="margin:14px auto 0;">Children’s books are written differently depending on the age group they are created for. A story for a toddler needs a completely different approach compared to a middle-grade adventure, from vocabulary and sentence structure to character development and storytelling style. Our children’s book ghostwriters understand these differences and create manuscripts that feel natural, engaging, and appropriate for the intended readers.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 0 to 5: Picture Books and Early Childhood Stories</h3>
        <p>For younger readers, every word matters. Picture books rely on simple language, strong emotions, memorable characters, and a rhythm that works when read aloud by parents or carers. We help transform your ideas into engaging stories that capture a child’s imagination while keeping the language suitable for early development.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 5 to 8: Early Readers and First Chapter Books</h3>
        <p>At this stage, children begin building confidence as independent readers. Our ghostwriters focus on clear sentence structures, relatable characters, exciting story progression, and age-appropriate vocabulary that encourages children to continue reading while keeping parents and educators engaged.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Ages 8 to 12: Chapter Books and Middle Grade Fiction</h3>
        <p>Middle-grade readers expect deeper stories, stronger character journeys, and more developed plots. We help create manuscripts with engaging chapters, meaningful themes, humour, adventure, and storytelling that connect with children who are becoming more independent readers.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Genre and Audience-Focused Story Development</h3>
        <p>Every children’s book has its own purpose, whether it is a funny picture book, educational story, fantasy adventure, family tale, or a book with an important message. We adapt our ghostwriting approach around your genre, themes, and target age group to create a manuscript that feels authentic and connects with the right young audience.</p>
      </article>
    </div>
  </div>
</section>

<!-- 9 - HOW TO CHOOSE THE RIGHT GHOSTWRITER: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Children’s Book Ghostwriter in London</h2>
      <p>Searching for cheap ghostwriter services in London will bring up a long list of options, and not all of them are worth your money. Before you hire anyone, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you writing samples in the age group and genre you need?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they offer a sample chapter before you commit to the full project?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is confidentiality and ownership of the manuscript written into a contract?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of revisions are included in the price?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain their process, or just quote a number and a deadline?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if you're not happy with the first draft?</span></li>
      </ul>
      <p>A low price with no clear process usually costs more in the end, through rewrites, delays, or a manuscript you can't actually use.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="Choosing a good children's book ghostwriter in London" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 10 - WHY PROFESSIONAL WRITERS CREATE BETTER STORIES -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Children’s Book Writers Create Better Stories</h2>
  </div>
  <div class="container narrow center">
    <p>A children's book written by someone who knows the craft reads differently. Here's what that actually means in practice:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>The pacing works, so the story doesn't drag in the middle or rush the ending</li>
      <li>The vocabulary matches the age group, so it's neither too babyish nor too hard</li>
      <li>The read aloud rhythm works, which matters more than most people expect for picture books</li>
      <li>The plot holds together, with a proper beginning, middle, and end</li>
      <li>The manuscript is ready for an illustrator, an editor, or a publisher, without a full rewrite first</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Getting these right the first time saves months of back and forth later.</p>
  </div>
</section>

<!-- 11 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children’s Book Ghostwriting Process in London</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>A Free Conversation About Your Idea</h3></div>
        <div class="svc-step-body"><p>We start with a call or a message. Tell us what you have, whether that's a full outline or just a character and a feeling. We'll ask questions to understand what you actually want the book to do.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>A Quote and a Plan</h3></div>
        <div class="svc-step-body"><p>Once we understand the scope, age group, and length, we'll send you a clear quote and a rough timeline. Nothing starts until you're happy with both.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Outline and Sample Chapter</h3></div>
        <div class="svc-step-body"><p>For longer books, we write an outline first, then a sample chapter, so you can see the voice and style before we write the rest.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>The Full Draft</h3></div>
        <div class="svc-step-body"><p>We write the manuscript, checking in at agreed points if you want that. If you'd rather wait for the finished draft, that's fine too.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Revisions</h3></div>
        <div class="svc-step-body"><p>You read the draft and tell us what to change. We revise until it matches what you had in mind.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Final Delivery</h3></div>
        <div class="svc-step-body"><p>You get the finished manuscript, ready for an illustrator, a formatter, or straight to self publishing.</p></div>
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

<!-- 13 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Trust <em>Purple Giraffe Press</em> With Their Children’s Stories</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children’s Book Ghostwriters</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Confidentiality is built in</h3><p>Every project starts with an agreement that protects your idea and your ownership of the finished book.</p></article>
      <article><span>✓</span><h3>You keep full credit</h3><p>Your name goes on the cover. We never ask for public recognition or a writing credit.</p></article>
      <article><span>✓</span><h3>We write in your voice</h3><p>We spend time understanding how you'd tell the story, so the finished book sounds like you, not like a template.</p></article>
      <article><span>✓</span><h3>Clear pricing from the start</h3><p>You'll know the cost before any writing begins, with no surprise charges added later.</p></article>
      <article><span>✓</span><h3>Local to London</h3><p>We understand the London market, from school reading lists to local self publishing routes, and we're easy to meet in person if you'd rather talk face to face.</p></article>
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

<!-- 15 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Complete Book Services to Support Your Children’s Book London</h2>
    <p style="margin:14px auto 0;">What your project includes depends on your goals. We offer a full suite of professional services tailored to the specific needs of children’s literature.</p>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 16 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's book ghostwriting in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Children’s Book Ghostwriting Costs in London Explained Clearly</h2>
      <p>Pricing depends on length, complexity, and how much editing and outlining work is included. A short picture book costs less than a full middle grade novel, and a project that starts from a rough idea takes longer than one with a finished outline already.</p>
      <p>We're often asked about children's book ghostwriting services cost in London before anyone even asks what the book is about. That's understandable, but it's hard to give an honest number without knowing the scope. What we can promise is a clear quote before any work starts, with no hidden extras added halfway through.</p>
      <p>If budget is a concern, say so early. We can often adjust the scope, the length, or the number of revision rounds to fit what you have to spend, without cutting corners on quality. That's part of why people search for children's book affordable ghostwriting services in London and end up talking to us. We'd rather have an honest conversation about budget than lose a good project over a number.</p>
      <p>We'll also tell you honestly if a project is likely to cost more than you expect, before you commit to anything. A rushed timeline, a very long manuscript, or several major rounds of rewrites all add time, and time is what you're paying for. Being upfront about this at the quote stage means there are no awkward conversations halfway through.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 17 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 18 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Turn Your Children’s Book Idea Into <em>Reality?</em></h2>
      <p>If you've got an idea sitting in a notebook, a voice memo, or just in your head, that's enough to start. Send us a message, tell us roughly what you're picturing, and we'll take it from there. No pressure, no obligation, just a conversation about your book.</p>
      <p>Plenty of people sit on a good idea for years because writing feels like too big a task to start alone. It doesn't have to be. Tell us about your idea today, and let's see what it could become.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to ghostwrite your children's book in London" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 19 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions London authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

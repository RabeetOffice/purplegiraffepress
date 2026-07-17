<?php
include 'includes/config.php';

$page_title       = 'Children\'s Ghostwriting Services | Bring Stories Alive';
$page_description = 'Not every parent can write, but every child deserves a book. Try Children\'s Ghostwriting Services built on creativity, care, and heartfelt storytelling.';
$canonical_path   = 'ghostwriting.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need a full manuscript before I contact you?',
    'a' => 'No. Many clients come to us with nothing more than an idea or a rough concept. We help develop it into a full story from there.',
  ),
  1 =>
  array (
    'q' => 'Will the book have my name on it?',
    'a' => 'Yes. You are credited as the author. We work behind the scenes, and the finished manuscript and rights belong to you.',
  ),
  2 =>
  array (
    'q' => 'How long does it take to write a children’s book?',
    'a' => 'It depends on the length and complexity of the project. Picture books are generally quicker than chapter books or series, and we will give you a timeframe as part of your quote.',
  ),
  3 =>
  array (
    'q' => 'Can you write a book based on a true story or family memory?',
    'a' => 'Yes. This is one of our most common requests. We can turn a real family story, a personal memory, or a life event into a children’s story.',
  ),
  4 =>
  array (
    'q' => 'Do you offer affordable ghostwriting services for children\'s books for a smaller budget?',
    'a' => 'Yes. We offer options at different price points, and we are always upfront about what each option includes before you commit to anything.',
  ),
  5 =>
  array (
    'q' => 'Can you help with illustrations too?',
    'a' => 'We focus on the writing itself, but we can advise on how the text will work alongside illustrations, and we are happy to talk through your options.',
  ),
  6 =>
  array (
    'q' => 'What age groups do you write for?',
    'a' => 'We write for toddlers through to early chapter book readers, generally from around two years old up to age ten, depending on the project.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Ghostwriting</div>
      <h1>Children's <em>Ghostwriting Services</em> in Australia | Turn Your Story Idea Into a <strong>Real Book</strong></h1>
      <p class="lead">You have a story in your head. Maybe it is a bedtime tale you have told your kids a hundred times. Maybe it is an idea you have been carrying around for years. You know it is good, but you are not a writer, or you do not have the time to sit down and write a whole book. That is where we come in.</p>
      <p class="lead">Purple Giraffe Press offers children's ghostwriting services for parents, grandparents, teachers, business owners and first-time authors across Australia. We take your idea and turn it into a finished, polished manuscript, ready for publishing or printing. Your name goes on the cover. Your story stays yours.</p>
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
      <h2>Ghostwriting is not just for celebrities</h2>
      <p>We know that trusting someone else with your idea feels like a big step. That is why we keep things simple, honest, and easy to understand from the very first conversation.</p>
      <p>A lot of people think ghostwriting is only for celebrities or business books. It is not. Plenty of the children’s books on shelves today, and plenty of self-published ones online, were written with help from a ghostwriter. There is nothing wrong with getting support to bring your idea to life properly. The story is still yours. We are just the ones putting it into words.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghost-writing-fold.webp" alt="Children's book ghostwriting at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE DO (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we do</p>
    <h2>Here’s Exactly What We Do For You</h2>
    <p style="margin:14px auto 0;">Every project is different, so we break our ghostwriters Australia service into stages that make sense for a children’s book.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Shaping Your Idea Into A Real Story</h3>
        <div class="fc-body">
          <p>If you only have a rough idea, we help you shape it into a proper story. We work out the plot, the characters, the setting, and the lesson or message, if you want one. This stage is about getting the bones of the book right before any real writing starts.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Writing The Whole Book, Start To Finish</h3>
        <div class="fc-body">
          <p>Once the story is mapped out, we write the whole manuscript for you. This includes the text for picture books, chapter books, or early reader stories. We match the word count, reading level, and tone to your target age group, whether that is toddlers, primary schoolers, or tweens.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Turning Your Notes And Drafts Into A Proper Manuscript</h3>
        <div class="fc-body">
          <p>Some clients already have a messy draft, some voice notes, or pages of scribbled ideas. We can take what you have and turn it into a clean, readable manuscript that still sounds like your idea, just polished and structured properly.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Building A Series That Holds Together</h3>
        <div class="fc-body">
          <p>If you are planning more than one book, we can help you build a consistent world, characters, and voice across the whole series. This is common for authors who want a set of books rather than a single title.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Writing With The Illustrations In Mind</h3>
        <div class="fc-body">
          <p>For picture books, we write with illustration in mind. That means leaving room for pictures to do some of the storytelling, and writing text that flows well on each page or spread.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Already Have A Draft? We Can Polish It</h3>
        <div class="fc-body">
          <p>Some clients only need a light touch. If you already have a full draft that just needs tightening up, we can work on it as a smaller project rather than a full rewrite. We will always tell you honestly which approach your manuscript actually needs, rather than pushing you toward the bigger option.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/love-section.webp" alt="Storytellers Purple Giraffe Press loves working with" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>The Kind Of Storytellers We Love Working With</h2>
      <p>Our clients come from all sorts of backgrounds. We regularly work with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents who want to turn a family story into a keepsake book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors who have an idea but no writing experience</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners who want a branded children’s book for marketing or gifts</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and educators building resources for their classroom</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Grandparents who want to pass down a story or family history</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors are already working on a series who need help finishing it</span></li>
      </ul>
      <p>You do not need any writing background to work with us. You just need the idea.</p>
      <p>We have also worked with a small number of independent publishers who need extra writing support for a specific title, and with authors overseas who want an Australian voice and style for a book aimed at an Australian audience.</p>
    </div>
  </div>
</section>

<!-- 6 - WHAT TO LOOK FOR: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>Not All Ghostwriters Are Equal: Here’s What To Look For</h2>
      <p>Not every writer understands children’s books. Writing for kids is its own skill. It is not simply writing a shorter, simpler version of an adult book. Here is what to look for when choosing someone to write for you:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Experience with children’s book pacing, rhythm, and word choice</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A clear process for turning your idea into a full story</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Willingness to show you drafts and take feedback along the way</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Clear contracts about who owns the finished manuscript</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Honest answers about pricing and what it covers before you commit</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A writing sample or example of past work, even if names are kept private</span></li>
      </ul>
      <p>If a writer cannot answer these questions clearly, it is worth asking more before you pay anything.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book ghostwriter with the right experience" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY IT IS HARD (cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Writing For Kids Looks Easy. It Isn’t.</h2>
  </div>
  <div class="container narrow center">
    <p>Children’s books look simple. They are not. A picture book might only have three hundred words, but every single one of those words has to earn its place. Here is what goes into getting it right:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Age-appropriate language.</strong> A four-year-old and a nine-year-old read completely differently. Sentence length, vocabulary, and humour all need to match the reader.</li>
      <li><strong>Rhythm and read-aloud flow.</strong> Many children’s books get read out loud by a parent or teacher. The sentences need to sound good when spoken, not just look good on the page.</li>
      <li><strong>Repetition and pattern.</strong> Young readers often love repeated phrases and patterns. Knowing when to use this and when it gets boring takes practice.</li>
      <li><strong>Room for illustration.</strong> In picture books, the words should not describe everything the picture already shows. Good text leaves space for the art.</li>
      <li><strong>A clear, honest message.</strong> Kids notice when a lesson feels forced. A good children’s story teaches something without lecturing.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This is why generic writers, or cheap ghostwriter services with no background in kids' books, often produce something that reads flat or feels off. It might be grammatically correct, but it will not connect with young readers.</p>
    <p style="margin-top:14px;">We have seen manuscripts that were technically fine but just did not sound like a children’s book. The sentences were too long, the vocabulary was too adult, or the story tried to explain too much instead of showing it. Getting this right is not about talent alone. It comes from actually understanding how kids read, listen, and respond to stories at different ages.</p>
  </div>
</section>

<!-- 8 - HOW IT WORKS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How It Works, From First Chat To Finished Book</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Share Your Idea With Us</h3></div>
        <div class="svc-step-body"><p>Send us your story idea, however rough it is. A paragraph, some notes, or even a voice message is fine. We just need to understand what you are picturing.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Send You A Clear Quote</h3></div>
        <div class="svc-step-body"><p>We look at the scope of the project, the length of the book, and how much development work is needed. Then we send you a clear, upfront quote before any writing begins.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Map Out The Story</h3></div>
        <div class="svc-step-body"><p>For most projects, we start with a short outline or story summary. This gives you a chance to check the direction before we write the full manuscript.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>We Write Your Book</h3></div>
        <div class="svc-step-body"><p>Once you approve the outline, we write the full story. Depending on the project, we may check in partway through with a sample chapter or section.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>You Review, We Refine</h3></div>
        <div class="svc-step-body"><p>You read the finished draft and send through your feedback. We build a round of revisions into every project, so the manuscript can be adjusted until it feels right.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Your Finished Manuscript Lands In Your Hands</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we deliver the final, polished manuscript, ready for editing, illustration, or publishing.</p></div>
      </article>
    </div>
    <p style="margin:26px auto 0; max-width:760px;">Throughout the whole process, you can ask questions and check in whenever you need to. We would rather you feel informed than left waiting in the dark, wondering how your book is coming along.</p>
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

<!-- 10 - WHAT YOU GET WITH A SPECIALIST -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>What You Get When You Hire A Specialist, Not A Generalist</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You save time.</strong> Writing a full manuscript can take months on your own. We handle the heavy lifting.</li>
      <li><strong>You get a professional result.</strong> Your book reads like it was written by someone who understands children’s fiction, because it was.</li>
      <li><strong>You keep ownership.</strong> The finished manuscript and the rights belong to you.</li>
      <li><strong>You get guidance, not just typing.</strong> We help shape a weak idea into a strong story, not just write down what you already have.</li>
      <li><strong>You avoid the blank page problem.</strong> Many people have a great idea but freeze up the moment they try to actually write it. We remove that barrier completely.</li>
      <li><strong>You get support for the whole project.</strong> Whether it is one book or a series, we can stay involved from idea to final draft.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Families And Authors Choose <em>Purple Giraffe Press</em></h2>
      <p>A few simple things keep families and authors coming back to us.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children’s books, not general writing</h3><p>This is not a side service for us. Kids' books are what we focus on, from picture books through to early chapter books.</p></article>
      <article><span>✓</span><h3>We give upfront, honest pricing</h3><p>You will always know the cost before we start, with no surprise fees added later.</p></article>
      <article><span>✓</span><h3>We are based in Australia</h3><p>You are working with a local team that understands the Australian market and Australian schools, libraries, and readers.</p></article>
      <article><span>✓</span><h3>We treat every story with care</h3><p>Whether it is a personal family memory or a business project, we take the same approach: understand the idea, then write it properly.</p></article>
      <article><span>✓</span><h3>We keep communication simple</h3><p>No confusing jargon, no chasing us for updates. You will know where your project is at every step of the way.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear quote for children's book ghostwriting with no hidden add-ons" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Let’s Talk Money: What Ghostwriting Actually Costs</h2>
      <p>Pricing for children's book ghostwriting services depends on a few things: the length of the book, how much story development is needed, whether it is a single title or part of a series, and how many rounds of revision you want built in.</p>
      <p>A short picture book manuscript will usually cost less than a full chapter book or a multi-book series, simply because there is more writing and planning involved in longer projects. We also offer affordable fiction ghostwriting services for authors working with a tighter budget, without cutting corners on quality.</p>
      <p>We always send a clear quote before any work begins, so you know exactly what you are paying for. There are no hidden add-ons and no surprise invoices later in the project.</p>
      <p>We understand that budget is a real factor for most people looking into this kind of service. That is exactly why we walk you through the quote in plain language, so you understand what you are paying for and why, rather than just receiving a number with no explanation.</p>
      <p>If you are also planning to publish as an ebook, ask us about our best ebook ghostwriting services option, which includes formatting suited to digital publishing platforms.</p>
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

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- your story, onto the page</p>
      <h2>Let’s Get Your Story <em>Onto The Page</em></h2>
      <p>You do not need to be a writer to publish a children’s book. You just need an idea and someone who knows how to bring it to life. Get in touch with Purple Giraffe Press today, tell us about your story, and we will send you a free, no-obligation quote.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to ghostwrite your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 18 - FOOTER -->
<?php include 'includes/footer.php'; ?>

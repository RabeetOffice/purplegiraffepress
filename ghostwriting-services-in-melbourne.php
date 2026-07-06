<?php
include 'includes/config.php';

$page_title       = 'Melbourne Ghostwriting Services | Get Your Book Written';
$page_description = 'Hire expert Melbourne ghostwriters to turn your ideas into a polished book, memoir or article. Confidential, professional writing. Get a free quote today.';
$canonical_path   = 'ghostwriting-services-in-melbourne.php';
$breadcrumb_name  = 'Ghostwriting in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'Melbourne',   'url' => page_url('locations/melbourne.php')],
    ['name' => 'Ghostwriting', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need a finished outline before contacting your children’s ghostwriting services in Melbourne?',
    'a' => 'No. Some clients come to us with a full outline, while others only have a rough idea, a personal memory, or a simple concept they want turned into a book. Our Melbourne children’s ghostwriting team can help shape the story and fill in the gaps either way.',
  ),
  1 =>
  array (
    'q' => 'Will the book have my name on it as the author?',
    'a' => 'Yes. Once the manuscript is complete and handed over, it is yours. You are credited as the author, while we work quietly behind the scenes.',
  ),
  2 =>
  array (
    'q' => 'How long does it take to write a children’s book in Melbourne?',
    'a' => 'The timeframe depends on the length of the book, the age group, and how many revisions are needed. Picture books are usually quicker than longer chapter books or children’s novels. We will give you a realistic timeframe once we understand your project.',
  ),
  3 =>
  array (
    'q' => 'Do you only write children’s books?',
    'a' => 'Children’s books are our main focus, but we also offer fiction ghostwriting services in Melbourne for adult stories, young adult books, and longer creative writing projects.',
  ),
  4 =>
  array (
    'q' => 'Can you help with ebooks as well as print books?',
    'a' => 'Yes. If you want your book released as an ebook first, we can prepare your manuscript in a format suited to digital publishing, while also keeping print book options in mind.',
  ),
  5 =>
  array (
    'q' => 'What happens if I don’t like the first draft?',
    'a' => 'That is exactly what the review stage is for. We work through your feedback with you so the story feels right, rather than handing over one draft and walking away.',
  ),
  6 =>
  array (
    'q' => 'Is ghostwriting confidential?',
    'a' => 'Yes. Our Melbourne ghostwriting service is confidential. Your involvement in the project stays private unless you choose to share it, and the agreement between us covers this clearly from the start.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Ghostwriting</div>
      <h1>Melbourne <em>Ghostwriting Services</em> for Children’s Books, Fiction and <strong>Personal Stories</strong></h1>
      <p class="lead">Maybe you have a story for kids stuck in your head and no time to write it. Maybe you tried to write it yourself and got stuck halfway through. Or maybe you just don’t feel confident putting your ideas into proper sentences.</p>
      <p class="lead">That’s what ghostwriters are for.</p>
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
      <h2>You Have The Story. We Have The Pen.</h2>
      <p>Purple Giraffe Press offers children's ghostwriting services in Melbourne for parents, grandparents, teachers, and everyday people who have a story worth telling but need a skilled writer to bring it to life. You share your idea, your characters, your message. We turn it into a finished manuscript with your name on the cover.</p>
      <p>We also work on fiction for older readers, so if your project is not just for children, we can still help.</p>
      <p>There is no such thing as a silly idea here. Some of our best projects started as a two-line pitch scribbled on a napkin, or a bedtime story a parent told their kids for years without ever writing it down. Our job is to listen to what you already have in your head and shape it into a book that reads well from the first page to the last.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghostwriting.webp" alt="Children's book ghostwriting in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - GHOSTWRITING SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Professional Ghostwriting Services in Melbourne</h2>
    <p style="margin:14px auto 0;">Every project is different, so we break our ghostwriting help into clear stages. You can use all of them or just the parts you need.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Story Development</h3>
        <p>We sit down with you and talk through your idea. What is the story about? Who is it for? What do you want the reader to feel at the end? From this chat, we build a simple outline before any writing starts.</p>
        <p>This step matters more than people expect. A rushed outline leads to a messy manuscript later on. We would rather spend an extra day getting the outline right than have to rewrite three chapters after the fact. If you already have characters, names, or a setting in mind, we build around those instead of replacing them with something generic.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Full Manuscript Writing</h3>
        <p>This is the main part of our children's book ghostwriting services in Melbourne. Our writer takes your outline and turns it into a full manuscript, chapter by chapter or page by page, for picture books. You get drafts to read along the way, not just a finished file at the end.</p>
        <p>For picture books, we write with the page turns in mind, since the rhythm of a story changes when a reader has to physically flip a page every ten or fifteen words. For chapter books, we focus on keeping each chapter tight enough to hold a young reader’s attention without losing the thread of the story.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ghostwriters for Melbourne Families and First-Time Authors</h3>
        <p>Some clients just want their memory or family story turned into a picture book for their kids or grandkids. Our ghostwriters in Melbourne handle these personal projects with the same care as any other book.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Fiction Ghostwriting For Older Readers</h3>
        <p>If your project is a novel, a chapter book, or a young adult story, our writers can help there too. We offer affordable fiction ghostwriting services in Melbourne for adults working on their first book or their fifth.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Ebook Writing</h3>
        <p>Not every book needs to go to print straight away. If you want a digital release first, we can format your manuscript to suit ebook platforms. Many clients come to us looking for the best ebook ghostwriting services in Melbourne because they want a fast, simple way to publish and test the market before printing.</p>
        <p>An ebook release is also a good option if you are still deciding whether to go with a traditional publisher, a print-on-demand service, or a small local print run. Getting the manuscript right first means you can make that decision later without any pressure.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE WRITE FOR: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="The Melbourne storytellers we ghostwrite for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Melbourne Ghostwriting Services Are For</h2>
      <p>Our clients come from all sorts of backgrounds. Some have never written anything longer than an email before contacting us, and that is completely fine. We regularly write for:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents who want a personalised story for their own children</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Grandparents turning family memories into a keepsake book.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and school counsellors with an idea for a classroom resource</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small business owners who want a branded children's book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors who have a story but not the writing skills or time</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Aspiring novelists who need help finishing a fiction manuscript</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 6 - HOW TO SPOT A GOOD GHOSTWRITER: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How To Tell If A Ghostwriter Is Actually Good</h2>
      <p>Not every ghostwriter delivers what they promise. Here is what to look for when choosing someone to write your book:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>They ask questions about your story before quoting a price.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>They give you a sample of their writing style.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>They explain their process clearly, step by step.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>They put the agreement in writing, including who owns the finished manuscript.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>They don’t rush you through drafts without a proper review.</span></li>
      </ul>
      <p>A good ghostwriter should feel like a partner in your project, not just someone typing words for cash. If a writer cannot answer basic questions about how they work or what happens if you are not happy with a draft, that is worth noticing before you sign anything.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="Choosing a good children's book ghostwriter in Melbourne" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY IT IS ITS OWN SKILL -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Ghostwriting For Children’s Books Is Its Own Skill</h2>
  </div>
  <div class="container narrow center">
    <p>Writing for kids looks simple. It is not. A children’s book has to work on more than one level at once.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>The vocabulary has to match the age group exactly, not too simple and not too advanced.</li>
      <li>The pacing has to keep young readers interested without long, dragging paragraphs.</li>
      <li>The story often needs to leave room for illustrations to do some of the storytelling.</li>
      <li>The message or lesson, if there is one, needs to feel natural, not forced.</li>
      <li>Read-aloud rhythm matters, since many of these books get read aloud by a parent every night.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>A writer who only works on adult fiction will often miss these details. That is why we keep a team that understands the difference between writing for grown-ups and writing for kids.</p>
    <p style="margin-top:14px;">We have seen manuscripts from other services that read like a shrunk-down adult story, with big words and long sentences dropped into a picture book format. Kids notice when a story does not sound right for them, even if they cannot explain why. Getting this balance right from the first draft saves everyone time later.</p>
  </div>
</section>

<!-- 8 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Process, Step By Step</h2>
    <p style="margin:14px auto 0;">We keep things simple, so you always know what is happening with your book.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Tell Us Your Idea</h3></div>
        <div class="svc-step-body"><p>Send us a short outline of your story, or just a rough idea if that’s all you have. We will ask questions to fill in the gaps, like who your main character is, what age group you are writing for, and what kind of ending you have in mind.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get A Quote</h3></div>
        <div class="svc-step-body"><p>Once we understand your project, we send you a clear quote. No surprise costs added later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Write Your First Draft</h3></div>
        <div class="svc-step-body"><p>Our writer starts on your manuscript. Depending on the size of the project, you may get chapters or sections to review as we go, rather than waiting weeks with no updates.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review And Feedback</h3></div>
        <div class="svc-step-body"><p>You read the draft and tell us what you think. We make changes based on your feedback until the story feels right to you.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Draft And Handover</h3></div>
        <div class="svc-step-body"><p>Once you’re happy, we deliver your final manuscript, ready for illustration, editing, or publishing.</p></div>
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
    <h2>Benefits Of Working With A Specialist Ghostwriter</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You save time.</strong> Writing a full manuscript takes weeks or months. A skilled writer can do it faster while you keep living your life.</li>
      <li><strong>You get a stronger story.</strong> Professional writers know how to structure a book so it actually holds a reader’s attention.</li>
      <li><strong>You keep full ownership.</strong> Once the work is handed over, the manuscript and the credit are yours.</li>
      <li><strong>You avoid rewrites and rework.</strong> A good ghostwriter gets the tone and structure right from the outline stage, so you are not stuck fixing a messy first draft.</li>
      <li><strong>You get an honest, realistic budget.</strong> We quote clearly so there are no shocks halfway through the project.</li>
      <li><strong>You get someone to talk your ideas through with.</strong> Writing alone can feel isolating. Having another person to bounce ideas off often makes the story better than either of you would have written it alone.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Choose <em>Purple Giraffe Press</em></h2>
      <p>A few simple things set our Melbourne children’s book ghostwriting apart.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children’s books</h3><p>This is not a side service for us. It is what we do most of the time, so we understand the age groups, the format, and what makes a picture book actually work.</p></article>
      <article><span>✓</span><h3>Clear pricing from the start</h3><p>You will always get a quote before any writing begins, so you know what to expect.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>We understand Australian spelling, tone, and the kind of stories that resonate with local families.</p></article>
      <article><span>✓</span><h3>We treat your story like it matters</h3><p>Your idea is personal to you. We don’t churn out generic content; we write your book, not a copy of someone else’s.</p></article>
      <article><span>✓</span><h3>Simple, honest communication</h3><p>No confusing jargon, no chasing us for updates. You will know where your project stands at every stage.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for Melbourne ghostwriting" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Melbourne Ghostwriting Cost?</h2>
      <p>Pricing for ghostwriting depends on a few things: the length of the manuscript, how much research or story development is needed, how many rounds of revisions you want, and whether the project is a picture book, a chapter book, or a longer novel.</p>
      <p>We know people searching for children's book ghostwriting services cost in Melbourne want a straight answer, and we understand why. The truth is, a fair price depends on your specific project. That said, we aim to offer children's book affordable ghostwriting services in Melbourne without cutting corners on quality. We are often searched for as a cheap ghostwriter service in Melbourne option, but we never treat “affordable” as an excuse to rush a manuscript or skip proper editing.</p>
      <p>Before any work begins, you will get a clear, itemised quote so you know exactly what you are paying for and why. There is never any pressure to commit before you have seen a number in writing.</p>
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
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready To Get Your <em>Story Written?</em></h2>
      <p>You don’t need to be a professional writer to have a book with your name on it. You just need the right person to help you get the words down.</p>
      <p>Get in touch with Purple Giraffe Press today and tell us about your story idea. We will talk it through with you and send a clear quote, no pressure, no confusing terms.</p>
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

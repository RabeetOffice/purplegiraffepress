<?php
include 'includes/config.php';

$page_title       = 'Dublin Ghostwriting Service for Children\'s Books';
$page_description = 'Bring your children\'s story idea to life with expert ghostwriting in Dublin. Warm, engaging writing that turns your vision into a published book.';
$canonical_path   = 'childrens-book-ghostwriting-services-in-dublin.php';
$breadcrumb_name  = 'Ghostwriting in Dublin';
$breadcrumbs = [
    ['name' => 'Home',         'url' => page_url('index.php')],
    ['name' => 'Locations',    'url' => page_url('locations/')],
    ['name' => 'Dublin',       'url' => page_url('locations/dublin.php')],
    ['name' => 'Ghostwriting', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with clients based in Dublin?',
    'a' => 'No. Most of our clients are in Dublin, but we also work with families and businesses in London and other cities. Everything is handled by phone, video call, and email, so location is not a barrier.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to write a children\'s book?',
    'a' => 'It depends on the length and complexity. A short picture book manuscript can be ready in a few weeks. A longer middle-grade novel takes more time because of the extra planning and revision involved.',
  ),
  2 =>
  array (
    'q' => 'I have very little money to spend. Can you still help?',
    'a' => 'We understand budgets are tight for a lot of families. We are often asked for cheap ghostwriter services in Dublin, and while we cannot compromise on quality, we can adjust the scope of a project, such as word count or number of revisions, to suit a smaller budget.',
  ),
  3 =>
  array (
    'q' => 'Do I need to already have a full story idea?',
    'a' => 'No. Some clients arrive with a single sentence or a feeling they want the book to capture. We will ask questions and help you shape that into a proper outline before any full writing begins.',
  ),
  4 =>
  array (
    'q' => 'Will my name be on the book as the author?',
    'a' => 'Yes. You are the author. We write the manuscript, but the finished book and all rights belong to you.',
  ),
  5 =>
  array (
    'q' => 'Can you help with illustrations too?',
    'a' => 'We do not illustrate books ourselves, but we can point you toward illustrators and explain how illustration notes usually work alongside a manuscript.',
  ),
  6 =>
  array (
    'q' => 'Do you also write for older readers, or is it only children\'s books?',
    'a' => 'Children\'s and middle-grade fiction is our focus, but if you have a project for teens or a related storybook-style project, get in touch, and we can let you know if it is something we can take on.',
  ),
  7 =>
  array (
    'q' => 'Is this service also available for clients in London who want the same kind of story?',
    'a' => 'Yes. Distance is not an issue. We have worked with London-based clients before, and the process runs exactly the same way, just over calls and email instead of in-person meetings.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Ghostwriting</div>
      <h1>Children's Book <em>Ghostwriting Services in Dublin</em> for Parents, Dreamers, and First-Time <strong>Authors</strong></h1>
      <p class="lead">Do you have a story idea sitting in your head but no time or confidence to write it? Maybe you are a parent who wants to turn bedtime stories into a real book. Maybe you run a business and want a picture book that tells your brand's story to little readers. Whatever the reason, Purple Giraffe Press can help.</p>
      <p class="lead">We offer children's ghostwriting services in Dublin for parents, teachers, business owners, and first-time authors. You bring the idea. We bring the writing skill. The book that comes out the other end has your name on the cover, not ours.</p>
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
      <p class="eyebrow script-mark">- who we are</p>
      <h2>A small team that actually reads and cares about children's books</h2>
      <p>Working with ghostwriters in Dublin means you get someone who understands the local market, the local schools, and the local reading culture. We are not a faceless agency based abroad. We are a small team that actually reads and cares about children's books.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghostwriting.webp" alt="Children's book ghostwriting services in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT IS GHOSTWRITING -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what it is</p>
    <h2>What Is Children's Book Ghostwriting?</h2>
  </div>
  <div class="container narrow center">
    <p>Ghostwriting means someone else writes the book, but you own it fully. Your name goes on the cover. You keep all rights. You make the final decisions on the story.</p>
    <p style="margin-top:14px;">A ghostwriter takes your idea, whether it is a full plot, a rough concept, or just a feeling you want the book to give children, and turns it into a finished manuscript. We ask questions, we draft, we revise, and we hand you a polished story ready for print or for an ebook platform.</p>
    <p style="margin-top:14px;">Some clients come to us with a full outline. Others come with a single sentence, like "I want a story about a shy dragon who learns to make friends." Both are fine. Our job is to meet you where you are.</p>
  </div>
</section>

<!-- 5 - SERVICE OPTIONS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Explore Our Complete Children’s Book Ghostwriting Service Options</h2>
    <p style="margin:14px auto 0;">Not every children's book project is the same, so we split our work into clear categories.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Picture Books for Younger Readers</h3>
        <div class="fc-body">
          <p>These are short, simple stories, usually under 1,000 words, meant to be read aloud or shared between a parent and child. We focus on rhythm, repetition, and words that are easy on the tongue for both the reader and the listener.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h16v14H4z"></path><path d="M8 9h8M8 13h5"></path></svg></div>
        <h3>Early Reader and Chapter Books</h3>
        <div class="fc-body">
          <p>For children who are starting to read on their own, we write slightly longer stories with simple sentences, clear chapters, and a plot that keeps young readers turning pages.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Middle Grade Fiction</h3>
        <div class="fc-body">
          <p>For readers aged roughly 8 to 12, we write fuller stories with more complex characters, subplots, and themes like friendship, courage, or family. This is where our affordable fiction ghostwriting services in Dublin really shine, since middle-grade books often need the most planning and structure.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7l9-4 9 4-9 4-9-4Z"></path><path d="M7 10v5c0 1.7 2.2 3 5 3s5-1.3 5-3v-5"></path></svg></div>
        <h3>Educational and Business Storybooks</h3>
        <div class="fc-body">
          <p>Some of our clients are schools, charities, or businesses that want a story that teaches a lesson or introduces a brand to children in a friendly way. We write these with a clear message but without sounding like a lecture.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"></rect><path d="M11 18h2"></path></svg></div>
        <h3>Ebooks and Digital First Titles</h3>
        <div class="fc-body">
          <p>More families and small publishers are choosing digital release first. If you want your book to reach readers through platforms like Amazon Kindle or Apple Books, we can format the writing style and pacing to suit screen reading. Many clients ask us for the best ebook ghostwriting services in Dublin because they want a story that works just as well on a tablet as it does in print.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - AGE GROUPS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Writing Stories For Different Children’s Age Groups</h2>
    <p style="margin:14px auto 0;">Every children's book needs a writing style that matches its readers. The vocabulary, characters, themes, and storytelling approach all change depending on the age group your story is created for. We help shape your idea into a manuscript that feels natural for its intended audience.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Baby And Toddler Stories (Ages 0–3)</h3>
        <div class="fc-body">
          <p>These stories focus on simple language, repetition, rhythm, and gentle ideas that work well for shared reading with parents and carers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Books (Ages 3–7)</h3>
        <div class="fc-body">
          <p>Picture books need engaging characters, memorable storytelling, and a strong read-aloud flow that keeps young children interested from page to page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6h6a3 3 0 0 1 3 3v10a2.5 2.5 0 0 0-2.5-2.5H4Z"></path><path d="M20 6h-6a3 3 0 0 0-3 3v10a2.5 2.5 0 0 1 2.5-2.5H20Z"></path></svg></div>
        <h3>Early Readers And Chapter Books (Ages 5–10)</h3>
        <div class="fc-body">
          <p>These books require clear sentences, age-appropriate vocabulary, and structured storytelling that helps children build confidence as they read independently.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Middle Grade Fiction (Ages 8–12)</h3>
        <div class="fc-body">
          <p>Middle-grade stories allow for deeper characters, bigger adventures, and more developed themes while keeping the language suitable for younger readers.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Choosing the right age group helps us create the correct tone, structure, and storytelling style so your finished book connects with the children it is written for.</p>
  </div>
</section>

<!-- 7 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin parents, teachers, and businesses we ghostwrite children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Benefits Most From Our Children’s Ghostwriting Services?</h2>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents who want to turn a family story into a keepsake book. Maybe it is a story you have told your own kids at bedtime for years and now want on paper for good.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors with a story idea but no writing background. You do not need any writing experience to work with us. That is the whole point of hiring a ghostwriter.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and school staff working on a class project or fundraiser. We can help turn a class idea or a school tradition into a proper printed book.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small businesses that want a branded storybook for younger customers. A gentle, well-written story can introduce a brand to children far better than a leaflet ever could.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Charities that need a story to explain a cause to children. We take a sensitive topic and turn it into language that children can actually understand and connect with.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-publishers who plan to release on Amazon or other ebook stores. If you are going the self-publishing route, we write with that format and audience in mind from the start.</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Children’s Ghostwriter Safely</h2>
      <p>Not every ghostwriter is the right fit for a children's project. Before you hire anyone, ask these questions.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they have samples of children's writing, not just adult fiction or business copy?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you keep full rights to the finished manuscript?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of revision are included before extra charges apply?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who actually writes the book, the person you spoke to or someone else on their team?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is there a clear written agreement before any work starts?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand reading levels and age-appropriate vocabulary?</span></li>
      </ul>
      <p>A good ghostwriter will answer all of these without hesitation. If someone dodges a question or gets vague about rights, that is a warning sign.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book ghostwriter in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHY IT MATTERS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Dublin Children’s Ghostwriting Creates Stronger, Sharper Stories</h2>
  </div>
  <div class="container narrow center">
    <p>Writing for children looks simple from the outside, but it is a specific skill.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Word choice has to match the child's age and reading level, not just sound nice to an adult ear</li>
      <li>Pacing needs to hold attention without being rushed or dragged out</li>
      <li>A story with a weak structure can lose a young reader in the first few pages</li>
      <li>Illustration notes need to line up with the text so an illustrator can actually use them</li>
      <li>A polished manuscript reads better to publishers, printers, and parents alike</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Getting this right the first time saves you from rewrites, wasted printing costs, and a book that does not land the way you hoped.</p>
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
    <h2>How Our Children’s Book Ghostwriting Process Works Step-by-Step</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Free Consultation</h3></div>
        <div class="svc-step-body"><p>We start with a chat about your idea, your goals for the book, and your budget. This can happen over the phone, on a video call, or by email if that suits you better.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Story Outline</h3></div>
        <div class="svc-step-body"><p>Before any full writing starts, we put together a short outline or synopsis. You review it and tell us what to change. Nothing goes to full draft until you are happy with the shape of the story.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>First Draft</h3></div>
        <div class="svc-step-body"><p>Our writer produces a complete first draft based on the approved outline. You get the full manuscript to read through in your own time.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Revisions</h3></div>
        <div class="svc-step-body"><p>You send back your notes, and we make the changes. Most projects include a set number of revision rounds as part of the agreed price.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Manuscript</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we hand over the finished, proofread manuscript. From there, it is ready for an illustrator, a printer, or an ebook upload.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Ongoing Support</h3></div>
        <div class="svc-step-body"><p>Some clients want help with a sequel, a series, or advice on next steps for publishing. We are happy to keep working with you after the first book is done.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Children’s Book Authors Choose <em>Purple Giraffe Press</em> in Dublin</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children's books, not just general copy</h3><p>Many ghostwriting services treat children's books as a side offering. For us, it is a main focus, so the writers we assign actually know the genre.</p></article>
      <article><span>✓</span><h3>You keep full ownership</h3><p>Your name is the author. You hold the rights. We do not make any claim to the finished story.</p></article>
      <article><span>✓</span><h3>Clear pricing from the start</h3><p>We quote based on your project, not a vague hourly rate that grows without warning.</p></article>
      <article><span>✓</span><h3>Local understanding</h3><p>As a team working with Dublin clients, we understand Irish spelling, local references, and the kind of stories that resonate with Irish families and schools.</p></article>
      <article><span>✓</span><h3>Honest communication</h3><p>If your idea needs shaping before it will work as a book, we will tell you early, not after you have paid in full.</p></article>
      <article><span>✓</span><h3>Support beyond the manuscript</h3><p>We can point you toward illustrators and self-publishing platforms if you need that next step, even though that part is outside our own service.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, written quote for children's book ghostwriting in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Do Children’s Book Ghostwriting Services Cost in Dublin?</h2>
      <p>This is one of the most common questions we get, so we will be straight about it. Children's book ghostwriting services cost in Dublin varies quite a lot depending on the length of the book, the complexity of the story, and how many revision rounds you need.</p>
      <p>A short picture book manuscript costs less than a full middle-grade novel with subplots and multiple characters. Educational storybooks for schools or charities often sit somewhere in between, depending on the research needed.</p>
      <p>We do not publish a flat rate on this page because doing so would be misleading. Every project is different. What we can promise is a clear, written quote before any work begins, so you know exactly what you are paying for and what is included.</p>
      <p>If budget is a concern, tell us early. We can often adjust scope, such as a shorter word count or fewer illustration notes, to fit what you have to spend. We aim to be a children's book affordable ghostwriting services in Dublin option for families and small businesses, not just larger publishers with big budgets.</p>
      <p>We also find that being upfront about budget at the start saves everyone time. There is no point in drafting a full quote for a 40,000-word novel when your plan was always a short 500-word picture book. Tell us your rough budget and your rough vision, and we will tell you honestly what fits and what does not.</p>
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
      <h2>Turn Your <em>Children’s Story Idea</em> Into a Finished Book</h2>
      <p>If you have been carrying a story idea around for months or years, this is your sign to finally get it on paper. Send us a message with a rough idea of your book, and we will get back to you with honest advice and a straightforward quote. No pressure, no jargon, just a real conversation about your book.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to ghostwrite your children's book in Dublin" loading="lazy" decoding="async">
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

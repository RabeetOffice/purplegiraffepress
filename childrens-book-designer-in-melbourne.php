<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Designer in Melbourne for Picture Books';
$page_description = 'Purple Giraffe Press, a children\'s book designer in Melbourne, designs picture books with real care, from first layout to the final print ready file.';
$canonical_path   = 'childrens-book-designer-in-melbourne.php';
$breadcrumb_name  = 'Book Design in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',       'url' => page_url('index.php')],
    ['name' => 'Locations',  'url' => page_url('locations/')],
    ['name' => 'Melbourne',  'url' => page_url('locations/melbourne.php')],
    ['name' => 'Book Design', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'What does your children’s book design service in Melbourne include?',
    'a' => 'Our children’s book design service in Melbourne can include illustration, page layout, cover design, typography, print formatting, and ebook preparation, depending on what your book needs.',
  ),
  1 =>
  array (
    'q' => 'Can you design a children’s book from just a written story?',
    'a' => 'Yes. If you already have the story written, we can help turn it into a visually engaging children’s book with suitable illustrations, page structure, and a professional cover.',
  ),
  2 =>
  array (
    'q' => 'Do you create custom illustrations for children’s books?',
    'a' => 'Yes. We create custom children’s book illustrations based on your story, characters, setting, and target age group. The artwork is designed to support the mood and message of the book.',
  ),
  3 =>
  array (
    'q' => 'Can you help make my children’s book look professional for publishing?',
    'a' => 'Yes. Our Melbourne children’s book design team can prepare your book so it looks polished, readable, and suitable for publishing platforms such as Amazon KDP and other print or digital options.',
  ),
  4 =>
  array (
    'q' => 'Do you design children’s book covers separately?',
    'a' => 'Yes. If you only need a children’s book cover, we can design a front cover that suits your story, audience, title, and publishing format.',
  ),
  5 =>
  array (
    'q' => 'Can you help with picture books, activity books, and colouring books?',
    'a' => 'Yes. We work on picture books, colouring books, activity books, storybooks, and other children’s book formats. Each design is created around the age group and purpose of the book.',
  ),
  6 =>
  array (
    'q' => 'How do I start a children’s book design project in Melbourne?',
    'a' => 'You can start by sharing your manuscript, book idea, preferred illustration style, and any examples you like. From there, we can guide you through the next steps and provide a clear quote.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Book Design</div>
      <h1>Children's <em>Book Designer</em> in Melbourne for <strong>Picture Books and Beyond</strong></h1>
      <p class="lead">Writing a children’s book is one thing. Turning it into something a child wants to pick up and read again is another job entirely. That job is design.</p>
      <p class="lead">If you are searching for a children’s book designer in Melbourne, chances are you already have a manuscript, or close to one. Maybe you have a rough idea of what the pages should look like. Maybe you have nothing yet, just words and a hope that someone can bring them to life.</p>
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
      <h2>Turn Your Children’s Book Idea into a Beautifully Designed Page</h2>
      <p>Either way, that is where we come in. Purple Giraffe Press works with authors, parents, teachers, and small publishers across Melbourne to design children’s books that look as good as the story reads. We handle illustration, layout, covers, and everything in between.</p>
      <p>We are not a big agency with a long list of services you will never use. We are a small team that focuses on one thing: children’s books. That means every project gets proper attention, not a rushed template.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-cover-design.webp" alt="Children's book design in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - DESIGN SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Children’s Book Design Services we offer in Melbourne</h2>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Illustration</h3>
        <div class="fc-body">
          <p>Every page tells two stories: the words and the pictures. Our illustrators work closely with your text to create characters and scenes that feel warm, expressive, and right for the age group you are writing for. Whether you need a full set of illustrations for a picture book or a handful of spot images to break up chapters, our book illustration services in Melbourne are built around your story, not a generic style.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Layout and Page Design</h3>
        <div class="fc-body">
          <p>Good layout is something readers never notice, because it works. Text sits where it should. Pictures breathe. Nothing feels cramped or confusing. As a children’s book layout designer, I think about how a page will actually be read aloud or flipped through by small hands, not just how it looks on a screen.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Cover Design</h3>
        <div class="fc-body">
          <p>A cover has one job. It has to make someone stop scrolling or stop walking past a shelf and pick the book up. As a children’s book cover designer in Melbourne, we design covers that suit the story inside, not just a trend that will look dated in two years.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Colouring Book Design</h3>
        <div class="fc-body">
          <p>Colouring books need a different kind of thought. Lines have to be clean and simple enough for small hands, but still interesting enough to hold attention. As a colouring book designer for kids in Melbourne, we build pages that are fun to fill in, whether the book is for retail, a school fundraiser, or a personal project.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"></path><rect x="7" y="14" width="10" height="7" rx="1"></rect></svg></div>
        <h3>KDP and Self-Publishing Formatting</h3>
        <div class="fc-body">
          <p>If you are publishing through Amazon, the technical side matters just as much as the pretty side. Files need to be set up correctly, or your book can end up with awkward margins, blurry images, or rejected uploads. We work as children’s book designers for Amazon KDP in Melbourne, so your print and ebook files are ready to go without back-and-forth guesswork.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE DESIGN FOR: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="The Melbourne authors and publishers we design children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Children’s Book Design Services Are For</h2>
      <p>We design for a wide range of people, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents turning a bedtime story into a keepsake for their child</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and schools are creating classroom or fundraising books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers who need reliable design support</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors with a finished manuscript who need illustrations from scratch</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers who already have illustrations and just need layout and cover work</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 6 - WHAT MAKES A GREAT DESIGNER: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>What Makes a Great Children’s Book Designer in Melbourne?</h2>
      <p>Anyone can open design software. Not everyone understands what makes a children’s book work. Here is what we think separates a solid children’s book designer from someone just filling pages.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>They understand pacing.</strong> A picture book is not a novel. Page turns matter. A good designer knows when to build suspense and when to reveal the picture straight away.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>They design for the age group.</strong> A board book for toddlers needs different fonts, spacing, and colours than a chapter book for eight-year-olds.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>They protect the story.</strong> Design should support the words, not compete with them or drown them out.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>They know print, not just screen.</strong> A cover that looks great on a laptop can print badly if bleed, resolution, or colour settings are wrong.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>They communicate clearly.</strong> You should always know what stage your book is at and what happens next.</span></li>
      </ul>
      <p>If you are trying to work out who the best children’s book designer in Melbourne is for your project, ask to see examples of finished books, not just illustrations on their own. A finished book tells you far more about how someone thinks through a whole project.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-cover-design-fold.webp" alt="Finished children's books designed in Melbourne" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY DESIGN MATTERS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Design Matters in Children’s Books in Melbourne</h2>
  </div>
  <div class="container narrow center">
    <p>Adult books can get away with plain formatting. Children’s books cannot. A child is often looking at pictures before they can read a single word, so the design is doing a huge amount of the storytelling.</p>
    <p style="margin-top:14px;">Some of the things we think about on every project:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Colour choices that suit the mood of the story, not just what looks nice on its own</li>
      <li>Character consistency, so a character looks the same from the first page to the last</li>
      <li>Text placement that never gets swallowed by a background image</li>
      <li>Print safety, keeping text and important details away from the edges of the page</li>
      <li>File setup, so your book prints correctly whether it is done locally or through Amazon KDP</li>
      <li>Readability, choosing fonts that are easy for young or new readers to follow</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Get any of these wrong, and the book can feel confusing or amateurish, even if the story itself is strong. Get them right, and the story gets the chance to shine the way it deserves to.</p>
  </div>
</section>

<!-- 8 - DESIGN PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children’s Book Design Process, Step by Step</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Send through your text and any notes on the style or feel you are picturing. If you already have illustrations, send those too.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Quote</h3></div>
        <div class="svc-step-body"><p>We look at the length of your book, how many illustrations are needed, and what kind of formatting you want. Then we send you a clear quote before any work starts. No surprise costs later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Design and Illustrate</h3></div>
        <div class="svc-step-body"><p>Our team gets to work on illustrations, layout, or both, depending on what you need. You will see drafts along the way, not just a finished product at the end.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review and Adjust</h3></div>
        <div class="svc-step-body"><p>You look over the draft pages and tell us what is working and what needs changing. We make revisions until the book feels right.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Files Delivered</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we deliver print ready and digital files, formatted correctly for print or for platforms like Amazon KDP.</p></div>
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
    <h2>Benefits of Hiring a Specialist Children’s Book Designer in Melbourne</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You get a book that reads well, not just looks nice.</strong> Design choices are made with the story in mind, not just visual trends.</li>
      <li><strong>You save time.</strong> You do not have to learn design software or figure out KDP formatting rules yourself.</li>
      <li><strong>You avoid costly mistakes.</strong> Wrong file setup can mean rejected uploads or bad print quality. We handle that so you do not have to.</li>
      <li><strong>You get consistency.</strong> Characters, colours, and style stay the same from cover to final page.</li>
      <li><strong>You get support, not just a file.</strong> If something needs fixing after delivery, we are here to help.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Choose <em>Purple Giraffe Press</em></h2>
      <p>A few simple things set our Melbourne children’s book design apart.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children’s books</h3><p>This is not a side project for us. It is the only kind of book we design.</p></article>
      <article><span>✓</span><h3>We give upfront pricing</h3><p>You will know the cost before we start, not after.</p></article>
      <article><span>✓</span><h3>We are based in Australia</h3><p>No time zone confusion, no guessing who you are actually working with.</p></article>
      <article><span>✓</span><h3>We treat every story with care</h3><p>Your book is not just another file to us. We want it to turn out the way you imagined it.</p></article>
      <article><span>✓</span><h3>We keep communication simple</h3><p>No jargon, no confusing back and forth. Just clear updates and honest answers.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for children's book design in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does a Children’s Book Designer in Melbourne Cost?</h2>
      <p>Pricing depends on a few things, including how many pages your book has, how many illustrations you need, whether you need a cover, layout, or both, and how much revision work is involved.</p>
      <p>Because every book is different, we do not use a fixed price list. Instead, we look at your project and send you a clear, upfront quote before anything begins. You will always know what you are paying for and why.</p>
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
      <h2>Ready to Design a Children’s Book <em>Kids Will Remember?</em></h2>
      <p>If you have a manuscript sitting on your desktop and no idea how to turn it into a real book, we would love to help. Send us your story and tell us what you are picturing. We will take it from there.</p>
      <p>Get in touch with Purple Giraffe Press today for a free, no-obligation quote.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to design your children's book" loading="lazy" decoding="async">
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

<?php
include 'includes/config.php';

$page_title       = 'Sydney Children’s Design Service for Picture Book';
$page_description = 'Bring your children\'s book to life with beautiful design in Sydney. Creative, story-driven layouts and illustrations that captivate young readers.';
$canonical_path   = 'childrens-book-design-service-in-sydney.php';
$breadcrumb_name  = 'Book Design in Sydney';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'Sydney',      'url' => page_url('locations/sydney.php')],
    ['name' => 'Book Design', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Sydney?',
    'a' => 'No. While we are proud to be a Sydney-based team, we work with authors from all over Australia and beyond. Being local just makes things easier if you would like a face-to-face chat.',
  ),
  1 =>
  array (
    'q' => 'How do I find the best children\'s book designer in Sydney for my specific story?',
    'a' => 'Look at sample work close to your style, ask about their process, and check that they are upfront about pricing and timelines. A good fit matters more than a big portfolio.',
  ),
  2 =>
  array (
    'q' => 'I have never self-published before. Can you still help me?',
    'a' => 'Yes. Plenty of our clients are first-time authors. We walk you through what files you need and why, so you are not left guessing.',
  ),
  3 =>
  array (
    'q' => 'Do you do colouring books as well as picture books?',
    'a' => 'Yes, we design colouring pages for kids as a standalone project or alongside a matching picture book.',
  ),
  4 =>
  array (
    'q' => 'How long does a full picture book take from start to finish?',
    'a' => 'It depends on length and complexity, but we will give you a realistic timeline once we see your manuscript, so you know what to expect before any work starts.',
  ),
  5 =>
  array (
    'q' => 'Can you fix a book that has already been designed but has formatting problems?',
    'a' => 'Often, yes. Send us the files, and we will let you know honestly whether a fix or a fresh start makes more sense.',
  ),
  6 =>
  array (
    'q' => 'Do you offer a children\'s book designer in Sydney for ongoing series work, not just single books?',
    'a' => 'Yes. If you are planning a series, we keep design notes and character references so every book after the first matches the look and feel of the one before it.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). streetAddress is left
   out until we have a Sydney address. */
$location_business = [
    'locality'   => 'Sydney',
    'region'     => 'NSW',
    'postalCode' => '2000',
    'country'    => 'AU',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Book Design</div>
      <h1>Children’s <em>Book Design Service</em> in Sydney That Makes Stories <strong>Unforgettable</strong></h1>
      <p class="lead">Every parent, teacher, or first-time author knows the feeling. You have a story worth telling, but turning words into a real book is a whole different job. The pictures need to feel right. The layout needs to flow. The cover needs to make someone stop scrolling and pick it up.</p>
      <p class="lead">That is where we come in. Purple Giraffe Press works with authors, small publishers, and schools across Sydney to turn manuscripts into finished, print-ready children's books. We handle the design side, so you can focus on the story.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Book Design</a>
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
      <p>We are not a big faceless studio. We are a small, hands-on team that reads your manuscript properly before we pick up a pencil or open a design file. That means the finished book actually matches the story you wrote, not a generic template stretched over your words.</p>
      <p>Whether you need a full picture book illustrated from scratch, a cover that stands out on a shelf, or your files formatted correctly for print or Amazon, we can help. Keep reading to see how it all works.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book Design &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-cover-design.webp" alt="Children's book design service in Sydney at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE DO (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we do</p>
    <h2>Complete Children’s Book Design Services for Sydney Authors</h2>
    <p style="margin:14px auto 0;">Book design is not one job. It is several jobs stitched together, and most authors do not realise how many decisions go into a finished book until they start the process. Here is how we break it down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Full Illustration, From Rough Sketch To Final Art</h3>
        <div class="fc-body">
          <p>If your story needs pictures, we can build them from the ground up. We start with rough sketches so you can see the pacing and characters early, then move to full colour art once you are happy with the direction. As a children's book illustrator in Sydney, I spend real time getting character faces, poses, and backgrounds consistent from the first page to the last. Nothing throws a young reader off faster than a character who looks different every few pages.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Page Layout And Flow</h3>
        <div class="fc-body">
          <p>A book is not just a stack of pretty pictures. Text has to sit in the right place on the page, spacing has to feel balanced, and the story has to move at the right pace from spread to spread. This is where a lot of self-published books fall down, even with great art and great writing. Our layout work covers page order, text placement, font choices that suit the age group, and making sure the reading experience feels smooth from cover to cover.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Cover Design That Gets Picked Up</h3>
        <div class="fc-body">
          <p>Your cover has one job. It has to make someone stop and look, whether that is a parent scrolling online or a kid pulling books off a shelf at the library. We design covers that are bright, clear, and honest about what is inside the book. No bait and switch art that does not match the story. We think carefully about title placement, colour, and the single image that will represent the whole book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Colouring Book Design</h3>
        <div class="fc-body">
          <p>Colouring books need a different skill set from picture books. Lines need to be clean and confident, spacing has to leave room for little hands, and the difficulty level has to suit the age group you are aiming for. We work as a colouring book designer for kids in Sydney, building pages that are fun to colour and simple enough that kids do not give up halfway through.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Formatting For Print And Self Publishing</h3>
        <div class="fc-body">
          <p>Getting a file to actually print correctly or upload cleanly to a self-publishing platform is its own headache. Bleed, margins, trim size, file type, resolution, it all matters. We prepare files properly so they are accepted the first time, without back-and-forth rejections or blurry print runs.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - DESIGN FOR EVERY AGE -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Sydney Age-Specific Children’s Book Design from Birth to Twelve</h2>
  </div>
  <div class="container narrow center">
    <p>Every children's book deserves a design that matches the way its readers think, learn, and interact with stories. A toddler needs bold, simple illustrations, while older children expect richer artwork, more detailed scenes, and layouts that support longer narratives. Our design process adapts to each age group, ensuring every page captures attention and enhances the reading experience.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Ages 0–3: Board Books and First Readers</strong> Books for babies and toddlers need clean layouts, high-contrast colours, simple illustrations, and large, easy-to-follow typography. We design durable, engaging pages that encourage early learning and shared reading between children and parents.</li>
      <li><strong>Ages 3–5: Picture Books</strong> Picture books rely on expressive illustrations, playful page layouts, and colourful visual storytelling. We create designs that work hand-in-hand with your text, helping children stay engaged while supporting read-aloud experiences for families and classrooms.</li>
      <li><strong>Ages 6–8: Early Readers</strong> As children begin reading independently, the balance between text and illustrations becomes increasingly important. We design layouts with readable typography, consistent characters, and illustrations that build confidence without overwhelming young readers.</li>
      <li><strong>Ages 8–12: Junior Fiction and Middle Grade</strong> Older readers expect polished book covers, stronger visual identity, and interiors that feel more mature while remaining age-appropriate. We create professional layouts, chapter styling, typography, and cover designs that appeal to independent readers and stand confidently alongside bestselling middle-grade books.</li>
    </ul>
  </div>
</section>

<!-- 6 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/book-cover-design-fold.webp" alt="Authors, teachers and small publishers we design children's books for in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Children’s Authors, Teachers and Publishers We Work With</h2>
      <p>Our clients come from all over Sydney and beyond, and they rarely fit one single mould. Some have never written a book before. Others have a full series planned out and just need a design partner they can trust for the long run. We work with a wide range of people, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents turning a family story into a keepsake book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers who need overflow design support</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers building custom classroom resources</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who already have a manuscript but no idea where to start on visuals</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers who need their book ready for Amazon or another print-on-demand platform</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Children’s Book Designer in Sydney</h2>
      <p>Not every designer or illustrator is a good fit for every project, and that is fine to admit. Before you hire anyone for your book, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you a full sample spread, not just a single character sketch?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain pricing clearly, or is it vague until halfway through the project?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you get to see rough drafts before final art is locked in?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand the file requirements for the platform you plan to publish on?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are they upfront about turnaround time, and what happens if revisions take longer?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you work in a style close to what you are imagining, or only one look?</span></li>
      </ul>
      <p>If a designer cannot answer these clearly, that is worth noticing before you sign anything.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Choosing the right children's book designer in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY STRONG DESIGN MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Strong Design Makes Children’s Books More Successful</h2>
  </div>
  <div class="container narrow center">
    <p>It is easy to think design is just decoration. It is not. Here is what solid design actually changes:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Kids notice inconsistency fast.</strong> A character that changes shape or colour between pages breaks the story for young readers, even if they cannot explain why.</li>
      <li><strong>Layout affects how a story is read aloud.</strong> Page breaks in the wrong spot can kill a joke or ruin a big reveal.</li>
      <li><strong>A weak cover means fewer people ever open the book.</strong> Most buyers judge a children's book by its cover, quite literally.</li>
      <li><strong>Bad file formatting can ruin a print run.</strong> Wrong bleed or resolution leads to blurry pages or cut-off text, and that costs you money to fix.</li>
      <li><strong>Consistent style builds trust with readers.</strong> If you plan more than one book, a recognisable look helps readers remember and look for your next one.</li>
      <li><strong>Age-appropriate design keeps kids engaged.</strong> A toddler board book and a book for a seven-year-old need completely different layouts, fonts, and pacing. Getting this wrong means kids lose interest fast.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this is about chasing trends. It is about making sure the book works the way it is meant to, for the reader it is actually written for.</p>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Children’s Book Design Process from Start to Finish</h2>
    <p style="margin:14px auto 0;">Getting your book designed with us follows a clear path, from first message to final files.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step One: Tell Us About Your Book</h3></div>
        <div class="svc-step-body"><p>Send us your manuscript, or a rough idea if you are still early in the process. We will ask about your audience age group, your budget, and whether you already have a style in mind. The more you can tell us up front, the fewer rounds of back and forth we need later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step Two: We Send A Quote And Timeline</h3></div>
        <div class="svc-step-body"><p>Once we understand the scope, whether that is a few spot illustrations or a full-length picture book, we send a clear quote and an honest timeline. No surprise costs later. If your budget does not stretch to everything you had in mind, we will tell you honestly what can be trimmed without hurting the final result.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step Three: Rough Drafts First</h3></div>
        <div class="svc-step-body"><p>For illustration and layout work, we always start with rough sketches or a basic layout mockup. You get to give feedback before we move to final art, so there are no expensive surprises at the end. This step is where most of the important decisions happen, long before any final colour or polish is added.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step Four: Revisions</h3></div>
        <div class="svc-step-body"><p>We build in a round of revisions so the book actually matches what you pictured. Small tweaks are normal and expected at this stage. If something still is not sitting right, tell us plainly; that is what this step is for.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step Five: Final Files, Ready To Use</h3></div>
        <div class="svc-step-body"><p>Once everything is approved, we deliver print-ready files or platform-ready files, formatted correctly for wherever you plan to publish. We will also explain what each file is for, so you are not stuck guessing which one goes where.</p></div>
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

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Sydney Children’s Authors Choose <em>Purple Giraffe Press</em></h2>
      <p>At the end of the day, we want you to feel proud handing your book to a reader, not nervous about how it turned out.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We read the whole manuscript first.</h3><p>We do not design off a one-line brief. We want to understand tone, pacing, and characters before we start.</p></article>
      <article><span>✓</span><h3>We are upfront about pricing.</h3><p>You will know the cost before we start work, not halfway through.</p></article>
      <article><span>✓</span><h3>We are local.</h3><p>Being based in Sydney means easier communication, no odd time zones, and a team that understands the local self-publishing scene.</p></article>
      <article><span>✓</span><h3>We keep your style consistent.</h3><p>If you are planning a series, we keep notes on character design so that book two matches book one.</p></article>
      <article><span>✓</span><h3>We do not disappear after delivery.</h3><p>If you spot a small issue after files are sent, we sort it out.</p></article>
      <article><span>✓</span><h3>We explain things in plain language.</h3><p>You should not need a design degree to understand what we are doing to your book, or why.</p></article>
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
<!-- 14 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for children's book design in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Children’s Book Design in Sydney Cost?</h2>
      <p>Pricing depends on the scope of your project. A cover-only job costs less than a full-length illustrated picture book, and colouring book pages are priced differently again depending on page count and detail level. We do not use flat, one-size-fits-all pricing because every manuscript is different. Once we see your project, we will send a clear quote with no hidden extras. Get in touch and tell us what you need, and we will work out a fair price together.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- more services';
$location_services_heading = 'More Services for Sydney Children’s Book Authors';
$location_services_intro   = 'We built our service list around the real gaps that stop authors from finishing and launching their books. Here is what falls under our roof.';
$location_services_section = 'section figma-cream';
include 'includes/location-services.php';
?>

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Turn Your Children’s Story into a <em>Beautiful Book?</em></h2>
      <p>You have already done the hardest part by creating a story worth sharing. Now it needs thoughtful design that helps every page feel clear, engaging, and true to your vision.</p>
      <p>Send us your manuscript or even an early idea, and we will talk you through the best design options for your book. We will explain the process, answer your questions, and provide a clear quote before any work begins.</p>
      <p>No pressure and no confusing design language. Just an honest conversation about your book and how we can help you make it ready for readers.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to design your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 18 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions Sydney authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

<?php
include 'includes/config.php';

$page_title       = 'Crafted | Sydney Children\'s Book Ghostwriting Service';
$page_description = 'Turn your children\'s story idea into a finished book with expert ghostwriting in Sydney. Skilled, author-focused writing tailored to your vision.';
$canonical_path   = 'childrens-book-ghostwriting-services-in-sydney.php';
$breadcrumb_name  = 'Ghostwriting in Sydney';
$breadcrumbs = [
    ['name' => 'Home',         'url' => page_url('index.php')],
    ['name' => 'Locations',    'url' => page_url('locations/')],
    ['name' => 'Sydney',       'url' => page_url('locations/sydney.php')],
    ['name' => 'Ghostwriting', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to write a book with a ghostwriter in Sydney?',
    'a' => 'It depends on the length and complexity of the project. A children\'s picture book might take four to six weeks. A full-length novel or business book can take several months, depending on how quickly feedback comes back to us.',
  ),
  1 =>
  array (
    'q' => 'Do you offer children\'s book ghostwriting services in Sydney for self-publishing authors?',
    'a' => 'Yes. Many of our clients plan to self-publish through platforms like Amazon or local print services. We can write with that end goal in mind from the start.',
  ),
  2 =>
  array (
    'q' => 'How much do children\'s book ghostwriting services cost in Sydney?',
    'a' => 'It depends on the length of the book, how many illustrations or revisions are involved, and how much guidance you can give us at the start. We provide a clear quote after our first conversation, based on your specific project.',
  ),
  3 =>
  array (
    'q' => 'Can I meet with a writer in person if I am based in Sydney?',
    'a' => 'Yes, where possible, we are happy to meet locally for an initial chat. Many clients also prefer video calls, which work just as well for most of the writing process.',
  ),
  4 =>
  array (
    'q' => 'Who owns the finished manuscript?',
    'a' => 'You do. Once the project is complete and paid for, the copyright and the finished manuscript belong entirely to you.',
  ),
  5 =>
  array (
    'q' => 'Will you sign a non-disclosure agreement?',
    'a' => 'Yes. If confidentiality matters to you, we are happy to sign an agreement before any details of your project are shared.',
  ),
  6 =>
  array (
    'q' => 'Do you only write children\'s books, or other genres too?',
    'a' => 'We write across children\'s books, adult fiction, memoirs, ebooks, and business content. If you are not sure whether your project fits, just ask us, and we will let you know honestly.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Ghostwriting</div>
      <h1>You've Got the Story. <em>We've Got the Words,</em> Sydney Children's Book <strong>Ghostwriting Service</strong></h1>
      <p class="lead">Everyone has a story sitting somewhere in the back of their mind. Maybe it is a bedtime tale you tell your kids. Maybe it is a novel you have been meaning to write for ten years. Maybe it is a business book you know would help people, if only you had the time to sit down and write it.</p>
      <p class="lead">That is where we come in. Purple Giraffe Press works with people across Sydney who have a story worth telling but not the time, the skill, or the confidence to write it themselves. We listen to your idea, we ask the right questions, and we turn it into a finished manuscript that sounds like you, not like a robot wrote it.</p>
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
      <p>Finding good ghostwriters in Sydney is not always easy. There are a lot of freelancers online promising the world and delivering very little. We built Purple Giraffe Press to be different. We are upfront about pricing, honest about timelines, and we treat every project, big or small, with the same care.</p>
      <p>Whether you want a picture book for your grandchildren, a novel you have been carrying around in your head, or a short ebook to grow your business, this page will walk you through exactly what we offer and how it works.</p>
      <p>Sydney has a lot of talented writers, but not all of them are set up to work with someone who has never written a book before. You should not need a writing degree to get a book made. You just need a clear idea and a writer who knows how to ask the right questions, listen properly, and turn your answers into something worth reading.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghostwriting.webp" alt="Children's book ghostwriting in Sydney at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - GHOSTWRITING SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Explore Our Complete Range of Sydney Ghostwriting Services</h2>
    <p style="margin:14px auto 0;">Ghostwriting is not a one-size-fits-all service. A children’s picture book requires different skills from a business ebook, while a thriller needs its own structure, pacing and tone. We adapt our writing process to suit the genre, audience, and purpose of each project. Here is a closer look at the main ghostwriting services we provide.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Children’s Ghostwriting Services in Sydney</h3>
        <div class="fc-body">
          <p>We help parents and grandparents turn simple ideas into engaging children’s manuscripts. Whether you have a full storyline or only a character and basic concept, we develop it using age-appropriate language, pacing, and structure. You receive regular drafts and opportunities to provide feedback. Every story is shaped around your chosen age group, publishing goals, and intended format.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Affordable Fiction Ghostwriting Services in Sydney</h3>
        <div class="fc-body">
          <p>We develop fiction projects by carefully planning the plot, characters, tone, and overall direction before writing begins. Each chapter is shared for your review, helping the story remain true to your original vision. We write romance, fantasy, thrillers, crime, and contemporary fiction. We can also complete or improve an existing manuscript without unnecessarily rewriting everything from the beginning.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Best Ebook Ghostwriting Services in Sydney</h3>
        <div class="fc-body">
          <p>We create clear and engaging ebooks for business owners, consultants, coaches, and industry experts. Each project begins with a focused outline that organises your knowledge into practical chapters. We avoid filler and keep the content useful, readable, and relevant to your audience. Existing podcasts, newsletters, presentations, and articles can also be used to capture your natural voice and ideas.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Business and Content Ghostwriting</h3>
        <div class="fc-body">
          <p>We also provide ghostwriting for speeches, articles, blog series, and detailed website content. This service is ideal for business owners who want a consistent and credible written voice but lack the time to create content themselves. We learn your message, audience, and communication style before writing. The final content sounds natural, informative, and aligned with your wider business goals.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE AND READING LEVEL (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Children’s Ghostwriting Tailored to Every Age and Reading Level</h2>
    <p style="margin:14px auto 0;">Not all children's books are written the same way. The language, story structure, pacing, and character development all change depending on who the book is for. When creating a children's manuscript, we always write with a specific age group in mind to make sure the story connects with the right readers.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 0–3: Board Books and Early Learning Stories</h3>
        <div class="fc-body">
          <p>For babies and toddlers, simplicity is everything. These books use very few words, clear repetition, familiar concepts, and engaging rhythms that parents can enjoy reading aloud. We focus on early learning themes, everyday experiences, and memorable characters that young children can recognise and enjoy.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 3–5: Picture Books and Read-Aloud Stories</h3>
        <div class="fc-body">
          <p>Children in this age range love imagination, humour and colourful storytelling. We create picture book manuscripts with simple sentence structures, strong story flow and plenty of opportunities for illustration. These stories are designed to hold attention while encouraging language development and early literacy skills.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 6–8: Early Readers and Chapter Starters</h3>
        <div class="fc-body">
          <p>As children become more confident readers, they are ready for longer stories and stronger character development. We write engaging early reader books with age-appropriate vocabulary, relatable adventures and clear chapter progression that helps build reading confidence without overwhelming young readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Ages 8–12: Middle Grade Fiction</h3>
        <div class="fc-body">
          <p>Middle grade readers are looking for bigger adventures, stronger emotional connections and more developed plots. Whether it is fantasy, mystery, adventure or contemporary fiction, we create stories that balance excitement, humour and meaningful themes while remaining suitable for younger audiences.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Young Adults and Family Audiences</h3>
        <div class="fc-body">
          <p>Some stories sit between middle grade and adult fiction. For authors targeting teenagers or family audiences, we can adjust the tone, themes and complexity to create books that appeal to older readers while remaining accessible and engaging.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="The Sydney storytellers we ghostwrite children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping Sydney Authors Turn Different Ideas Into Published Books</h2>
      <p>Our clients come from all sorts of backgrounds. Some common examples include:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents wanting a personalised children's story</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First time novelists with a plot in their head but no finished draft</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners who want an ebook to build authority in their industry</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Coaches, consultants and speakers turning talks into written content</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Retirees writing a memoir for their family</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Sydney Ghostwriter With Confidence</h2>
      <p>Whether you work with us or someone else, it pays to ask the right questions before you commit. Here is what we think every writer should be willing to answer clearly.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will I see draft chapters, or only the finished product at the end?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who owns the copyright once the book is finished?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if I want changes after the first draft?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is the price fixed, or can it change partway through?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will the writer sign a confidentiality agreement if I ask for one?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they have samples of writing in a similar style or genre to mine?</span></li>
      </ul>
      <p>If a writer cannot answer these clearly, that is worth noticing before you pay anything.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="Choosing the right children's book ghostwriter in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY SKILLED GHOSTWRITING MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Skilled Ghostwriting Makes Your Manuscript Stronger and More Readable</h2>
  </div>
  <div class="container narrow center">
    <p>Plenty of people can string a sentence together. Fewer people can turn a rough idea into a manuscript that holds a reader's attention from start to finish. A trained writer knows how to:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Structure a story so it builds and holds interest</li>
      <li>Match tone and vocabulary to the right audience, especially for younger readers</li>
      <li>Catch plot holes and pacing problems before a reader does</li>
      <li>Turn a messy voice memo or a scattered outline into clean, readable prose</li>
      <li>Edit ruthlessly, cutting anything that does not earn its place on the page</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This is the difference between a manuscript that gets finished and one that sits half-written on a laptop for years.</p>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How Our Sydney Ghostwriting Process Brings Books to Life</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: We Talk About Your Idea</h3></div>
        <div class="svc-step-body"><p>We start with a conversation, over the phone, on video, or in person if you are local. You tell us what you are picturing. We ask questions to understand the story, the audience, and the tone you want.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: We Send You a Plan and a Quote</h3></div>
        <div class="svc-step-body"><p>Based on that conversation, we put together an outline and a clear quote. You will know the scope, the price, and the rough timeline before any writing begins.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: We Write in Stages</h3></div>
        <div class="svc-step-body"><p>We do not disappear for months and reappear with a finished book. We write in sections or chapters and send them to you along the way, so you can flag anything that does not feel right early on.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: You Review, and We Refine</h3></div>
        <div class="svc-step-body"><p>You read each draft and tell us what to adjust. This might be tone, pacing, dialogue, or detail. We make the changes and keep going.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: We Deliver the Final Manuscript</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we hand over the finished manuscript in whatever format you need, ready for printing, self-publishing, or sending to a publisher.</p></div>
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
<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Sydney Authors Trust <em>Purple Giraffe Press</em> With Their Stories</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We put everything in writing.</h3><p>Your quote, your timeline, and your terms are all set out clearly before we start, so there are no surprises later.</p></article>
      <article><span>✓</span><h3>You stay involved the whole way through.</h3><p>You are not handing your idea over and hoping for the best. You see drafts and give feedback at every stage.</p></article>
      <article><span>✓</span><h3>We match our style to your voice.</h3><p>Our job is to sound like you, or like your child, or like your business, not like us.</p></article>
      <article><span>✓</span><h3>We are realistic about time.</h3><p>A good manuscript takes weeks, not days. We would rather tell you the truth upfront than promise something we cannot deliver.</p></article>
      <article><span>✓</span><h3>Confidentiality is standard.</h3><p>Your story is yours. We are happy to sign a confidentiality agreement before we begin any project.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, honest quote for children's book ghostwriting in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Understanding the Cost of Ghostwriting Services in Sydney</h2>
      <p>Pricing for any writing project depends on scope. A sixteen-page picture book is a very different job from an eighty-thousand-word novel, so we do not publish a single flat rate. What we can tell you is how we think about it.</p>
      <p>We know some people search for cheap ghostwriter services in Sydney expecting a bargain, and we understand why. Writing can feel expensive when you are on a tight budget. But the cheapest option is not always the best value. A rushed manuscript full of errors costs you more in the long run, whether that is in reprint fees or in a story that never quite lands the way you imagined it.</p>
      <p>For families who want children's book affordable ghostwriting services in Sydney, we try to keep packages sensible without cutting the quality of the writing itself. Every quote is based on a real conversation about your project, not a guess. We will tell you exactly what is included, what is not, and how many rounds of feedback you get before you agree to anything.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- explore more services';
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
      <h2>Ready to Turn Your Story Into a Finished <em>Manuscript?</em></h2>
      <p>Your story does not need to be fully planned before you contact us. It might be written in a notebook, recorded as a voice note, or still taking shape in your mind. Share your idea with our team, and we will help you understand the next steps, the support you may need, and how your story can become a complete manuscript. No pressure and no confusing publishing language, just an honest conversation about your book.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to ghostwrite your children's book in Sydney" loading="lazy" decoding="async">
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

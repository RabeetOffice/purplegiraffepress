<?php
include 'includes/config.php';

$page_title       = 'Children\'s Fiction Ghostwriter Services London';
$page_description = 'Have a children\'s fiction idea but not sure how to write it? Our London-based ghostwriters turn your concept into an engaging, well-crafted story.';
$canonical_path   = 'childrens-fiction-ghostwriter-services-london.php';
$breadcrumb_name  = 'Fiction Ghostwriter in London';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'London',      'url' => page_url('locations/london.php')],
    ['name' => 'Fiction Ghostwriter', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How do I find a good novel writer for hire in the city?',
    'a' => 'Look for someone who has written fiction before, not just business or marketing content. Ask to see how they handle outlining, feedback, and confidentiality before you commit to anything.',
  ),
  1 =>
  array (
    'q' => 'Are you able to work with fiction ghostwriters online in London, or do we need to meet in person?',
    'a' => 'Most of our work happens by email and video call, so location is not a barrier. Being based in London simply means an in-person meeting is easy to arrange if you would prefer one.',
  ),
  2 =>
  array (
    'q' => 'Will the finished book actually sound like me?',
    'a' => 'Yes. We spend time early on learning your voice and your natural way of telling a story, then write in a style that matches it rather than imposing our own.',
  ),
  3 =>
  array (
    'q' => 'How long does it take to ghostwrite a novel?',
    'a' => 'It depends on length and complexity, but most full-length novels take several months from outline to final manuscript. We give a realistic schedule once we understand your project.',
  ),
  4 =>
  array (
    'q' => 'Do you keep my involvement confidential?',
    'a' => 'Yes. Confidentiality is standard practice, and your name is the one that appears on the finished book unless you decide otherwise.',
  ),
  5 =>
  array (
    'q' => 'Can you help if I have already started writing but got stuck?',
    'a' => 'Yes. We regularly pick up manuscripts partway through, review what exists, and help finish the story from wherever it currently stands.',
  ),
  6 =>
  array (
    'q' => 'What genres do you cover?',
    'a' => 'We write across crime, thriller, action, romance, fantasy, science fiction, and literary fiction, along with short stories and serialised chapters.',
  ),
  7 =>
  array (
    'q' => 'Do I need to live in London to work with you?',
    'a' => 'No. While we are based in London and understand the local market well, plenty of our clients work with us entirely by email and video call from other parts of the UK and beyond.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Fiction Ghostwriter</div>
      <h1>Children’s <em>Fiction Ghostwriter London</em> To Transform Idea Into A Finished Story</h1>
      <p class="lead">You have a story in your head. Maybe you have had it for years. You know the characters, you know how it ends, but you have never found the time or the words to get it all down on paper. This is where a professional writer who works on other people's books can help.</p>
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
      <h2>We Turn Your Idea Into A Full, Polished Novel That Still Sounds Like You, Not Like A Stranger Wrote It</h2>
      <p>At Purple Giraffe Press, we work with people across London who have a story worth telling but not the time, confidence, or writing background to finish it alone.</p>
      <p>Ghostwriting is not about us taking over your story. It is about us doing the writing while you stay in charge of the direction. You bring the idea, the characters, and the world. We bring the structure, the pacing, and the discipline to actually finish the book.</p>
      <p>If you are searching for a fiction ghostwriter for hire in London, you are probably weighing up a few options already. This page explains exactly what we do, how the process works, and what it costs, so you can make a proper decision before you commit to anyone.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghost-writing-fold.webp" alt="Children's fiction ghostwriter in London at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - GHOSTWRITING GENRES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>How Professional Fiction Ghostwriting In London Brings Stories To Life</h2>
    <p style="margin:14px auto 0;">Writing someone else's novel means more than typing up their notes. A good ghostwriter needs to understand plot, pacing, dialogue, and voice, then apply all of that to somebody else's idea without losing what made the idea special in the first place.</p>
    <p style="margin:14px auto 0;">Our process usually starts with long conversations. We ask about your characters, your setting, the tone you want, and the ending you have in mind. From there, we build an outline together before a single chapter is written. This stops the book drifting off course halfway through, which is one of the most common reasons unfinished manuscripts stay unfinished.</p>
    <p style="margin:14px auto 0;">Once the outline is agreed, we write in stages, sending chapters back to you as we go. You read, you comment, and we adjust. Nothing gets locked in without your say-so.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Crime And Thriller Fiction</h3>
        <p>Crime and thriller stories need tight plotting and a clear sense of pace. Clues need to be planted early and paid off later, without giving too much away too soon. We map out the mystery or the threat before writing begins, so the tension builds properly across the whole book.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Action Fiction</h3>
        <p>Some stories live and die on their pacing during big set pieces. Our action fiction ghostwriters in London focus on keeping scenes fast, physical, and easy to follow, even when several characters are moving at once. Good action writing needs short, punchy sentences at the right moments, not long descriptions that slow everything down.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Romance Fiction</h3>
        <p>Romance readers expect strong emotional beats and characters who feel real. We spend extra time on chemistry between characters and on pacing the relationship so it does not feel rushed or forced.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Fantasy And Science Fiction</h3>
        <p>These genres often involve building a whole world from scratch. We keep detailed notes on rules, geography, and history so nothing contradicts itself later, especially across longer series.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Literary And Character-Driven Fiction</h3>
        <p>Some stories are quieter, built around character and voice rather than plot twists. These need a writer who can slow down, notice small details, and let a scene breathe without losing the reader's interest.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Short Stories And Serialised Fiction</h3>
        <p>Not every project is a full novel straight away. We also write short stories and serialised chapters for authors testing an idea, building an audience, or publishing in instalments online.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHY LONDON-BASED: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/ghostwriting.webp" alt="A London-based fiction ghostwriter working on a client's novel" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- local advantage</p>
      <h2>Why Choose A London-Based Fiction Ghostwriter For Your Novel</h2>
      <p>There is a real advantage to working with someone local. You can meet for a coffee and talk through a tricky chapter, rather than only exchanging emails with someone in a different time zone. A local writer also understands British settings, British dialogue, and the small cultural details that make a story feel authentic to a UK reader.</p>
      <p>That said, plenty of our clients never meet us in person at all, and that works just as well. Some people prefer calls, some prefer written notes, and some like to swap a mix of both depending on the stage of the project. We shape the working style around what suits you, not the other way round.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 6 - AGE-FOCUSED WRITING (feature cards) -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Age-Focused Fiction Writing For Every Type Of Young Reader</h2>
    <p style="margin:14px auto 0;">Every children's fiction project needs a different approach depending on the age of the reader. Before we begin writing, we consider vocabulary, sentence structure, themes, pacing, and how children at that stage connect with stories.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 0 To 5: Picture Books And Early Childhood Stories</h3>
        <p>Books for younger children rely heavily on simple language, strong emotions, and memorable moments. We focus on clear storytelling, engaging characters, and sentences that sound natural when read aloud by parents or caregivers.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 5 To 8: Early Readers And First Chapter Books</h3>
        <p>At this stage, children are becoming more independent readers. We create stories with accessible vocabulary, shorter chapters, and a balanced mix of action and description to keep young readers confident and engaged.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 8 To 12: Middle Grade Fiction</h3>
        <p>Middle-grade readers are ready for deeper plots, stronger character development, and more complex themes. We focus on building believable worlds, maintaining consistency across chapters, and creating stories that keep children invested from beginning to end.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Ages 12+: Young Adult Fiction</h3>
        <p>Young adult stories require a stronger emotional connection, relatable characters, and themes that reflect the experiences of older readers. We help shape authentic voices, meaningful conflicts, and engaging narratives that feel relevant to teenage audiences.</p>
      </article>
    </div>
  </div>
</section>

<!-- 7 - WHO WE HELP: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping Different Children’s Authors across London</h2>
      <p>Every client comes to us for a slightly different reason. We have written for:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors with a strong idea but no writing background</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Busy professionals who have a story but no spare time to write it</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small business owners wanting a novel alongside their main work</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Retirees writing the book they always meant to write</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Screenwriters and content creators adapting an idea into prose</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who started a manuscript themselves and got stuck partway through</span></li>
      </ul>
      <p>Whatever your starting point, the process below stays roughly the same.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/premium-nonfiction-services.webp" alt="The London storytellers our children's fiction ghostwriters help" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - HOW TO FIND THE RIGHT GHOSTWRITER: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing the right fiction ghostwriter in London for your story" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to ask</p>
      <h2>How To Find The Right Fiction Ghostwriter For Your Story</h2>
      <p>Not every writer who calls themselves a ghostwriter is right for a novel. Before you commit to anyone, including us, it is worth asking a few honest questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they ghostwritten fiction before, not just business books or articles?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they build a full outline with you before writing any chapters?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they send chapters as they go, or only the finished manuscript at the end?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is confidentiality written into the agreement from the start?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they give a fixed quote before any writing begins?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they match tone and voice to genres you actually read and enjoy?</span></li>
      </ul>
      <p>A ghostwriter worth hiring should answer all of these clearly, without getting defensive or vague.</p>
    </div>
  </div>
</section>

<!-- 9 - WHY PROFESSIONAL GHOSTWRITING CREATES BETTER NOVELS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Fiction Ghostwriting Creates Better Finished Novels</h2>
  </div>
  <div class="container narrow center">
    <p>Writing a novel alone is hard. Most people who start one do not finish it, not because the idea is bad, but because life gets in the way, or the plot stalls halfway through. Working with a professional changes that in a few real ways:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>A finished manuscript exists, rather than a folder of notes and half-written chapters</li>
      <li>Plot holes and pacing problems get caught before readers ever see them</li>
      <li>Your voice and ideas stay central, while someone else carries the writing load</li>
      <li>You get a realistic timeline instead of an open-ended project with no end date</li>
      <li>The finished book is ready to send to agents, publishers, or straight to print</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this requires you to be a trained writer yourself. It just requires a clear idea and someone who knows how to shape it into a proper story.</p>
  </div>
</section>

<!-- 10 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Fiction Ghostwriting Process From Idea To Final Manuscript</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>An Initial Conversation</h3></div>
        <div class="svc-step-body"><p>We start with a call or meeting to talk through your idea, your goals for the book, and your rough timeline. This is free, and there is no pressure to continue afterwards.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Outline And Character Notes</h3></div>
        <div class="svc-step-body"><p>Before any chapters are written, we build a full outline together, along with notes on your main characters. This becomes the map for the whole book.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>A Fixed Quote</h3></div>
        <div class="svc-step-body"><p>Once we know the shape of the project, we give you a clear, fixed price and a realistic delivery schedule based on the length and complexity of the story.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Chapters Delivered In Stages</h3></div>
        <div class="svc-step-body"><p>We write in batches, usually a few chapters at a time, and send them to you for feedback before moving on. This keeps you involved throughout, not just at the very end.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Full Manuscript Review</h3></div>
        <div class="svc-step-body"><p>Once the whole book is drafted, we go through it together, checking pacing, consistency, and anything you want changed.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Final Polish</h3></div>
        <div class="svc-step-body"><p>We carry out a final read-through of the complete manuscript, tidying language and checking that the story holds together from the first page to the last.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - PORTFOLIO CAROUSEL -->
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
      <h2>Why Authors Choose Our <em>Fiction Ghostwriting Services</em> In London</h2>
      <p>We are not a general content agency that occasionally takes on a novel. Fiction is a core part of what we do, and it shows in how we work.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children’s Publishing Specialists</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We build a proper outline first</h3><p>This means fewer stalled projects and a book that holds together from start to finish.</p></article>
      <article><span>✓</span><h3>We keep your voice at the centre</h3><p>The finished book should sound like you, not like a generic writer's style.</p></article>
      <article><span>✓</span><h3>Confidentiality is standard, not an add-on</h3><p>Your name goes on the cover. Our involvement stays private unless you choose otherwise.</p></article>
      <article><span>✓</span><h3>You are involved throughout, not just at the end</h3><p>Regular chapter delivery means no nasty surprises after months of silence.</p></article>
      <article><span>✓</span><h3>We give honest, upfront quotes</h3><p>No vague pricing, and no extra fees appearing once work has started.</p></article>
      <article><span>✓</span><h3>We are reachable by phone and in person</h3><p>Being based in London means you can meet us face to face if that helps you trust the process.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, fixed quote for fiction ghostwriting in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Fiction Ghostwriting Cost In London Today</h2>
      <p>Pricing depends on the length of the book, how much planning work is needed, the genre, and your timeline. A short novella takes far less time than a full-length novel with a detailed fantasy world behind it, so we do not offer one flat number that ignores what your project actually needs.</p>
      <p>We see ourselves as an affordable fiction ghostwriting service in London because we scale the work and the price to the project in front of us, rather than charging a standard fee regardless of size. A shorter, simpler story with one main character costs less than a long series with a large cast and a detailed invented world, and that difference should be reflected honestly in the quote you receive.</p>
      <p>Before any writing begins, we talk through your idea, explain what the project will involve, and give you a fixed quote with nothing hidden or added later. Many authors choose to pay in stages, linked to chapter delivery, rather than one large sum upfront. This keeps the arrangement fair for both sides and means you always know where the project stands financially as well as creatively.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready To Turn Your Fiction Idea Into A <em>Published Book</em></h2>
      <p>If you have an idea sitting in your head, a folder of notes, or half a manuscript you got stuck on, get in touch and tell us about it. Fiction ghostwriting in London does not need to be complicated or overpriced. It just needs a clear plan and a writer who listens.</p>
      <p>There is no pressure and no obligation. We will ask a few sensible questions and give you an honest view on the timeline and cost. Your story is worth finishing properly.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to ghostwrite your fiction novel in London" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 18 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 19 - FOOTER -->
<?php include 'includes/footer.php'; ?>

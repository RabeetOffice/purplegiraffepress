<?php
/* Queensland fiction ghostwriting. The source doc's URL line pointed at the
   plain Queensland ghostwriting page -> that was an error in the doc, so this
   page keeps its own fiction-ghostwriting slug. */
include 'includes/config.php';

$page_title       = 'Children\'s Book Ghostwriting, Crafted in Queensland';
$page_description = 'Turn your children\'s story idea into a finished book with expert ghostwriting in Queensland. Skilled, author-focused writing tailored to your vision.';
$canonical_path   = 'childrens-book-fiction-ghostwriting-services-in-queensland.php';
$breadcrumb_name  = 'Fiction Ghostwriting in Queensland';
$breadcrumbs = [
    ['name' => 'Home',                'url' => page_url('index.php')],
    ['name' => 'Locations',           'url' => page_url('locations/')],
    ['name' => 'Queensland',          'url' => page_url('locations/queensland.php')],
    ['name' => 'Fiction Ghostwriting','url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need a finished idea before I contact a fiction ghostwriter for hire in Queensland?',
    'a' => 'No. Some clients come to us with a full outline. Others have nothing more than a general idea or a feeling about the kind of story they want. We can build a full outline together during our first few conversations.',
  ),
  1 =>
  array (
    'q' => 'Will my book actually sound like it was written by me?',
    'a' => 'Yes. We spend time early on getting to know how you speak and think, and we write in a way that matches your natural voice, not a generic house style.',
  ),
  2 =>
  array (
    'q' => 'How long does it take to ghostwrite a full novel in Queensland?',
    'a' => 'It depends on the length and complexity of the book, but most full-length novels take a number of months from outline to finished manuscript. We will give you a realistic timeline based on your specific project during the first conversation.',
  ),
  3 =>
  array (
    'q' => 'Can I be involved in fiction ghostwriting in Queensland, or is it all handled without my input?',
    'a' => 'You are involved at every major stage, including the outline, regular chapter check-ins, and the final revision round. Nothing gets locked in without your say-so.',
  ),
  4 =>
  array (
    'q' => 'Do you only write for people based in Brisbane, or can regional Queensland clients use this service too?',
    'a' => 'We work with clients across the whole state. Whether you are in Cairns, Townsville, Toowoomba, or a small country town, everything can be managed remotely by call, email, and shared documents.',
  ),
  5 =>
  array (
    'q' => 'What genres do you cover, including fast-paced or adventure-style projects?',
    'a' => 'We cover most fiction genres, including crime, romance, fantasy, thrillers, historical fiction, and fast-paced action stories. Tell us your genre during the first chat, and we will confirm it is a good fit.',
  ),
  6 =>
  array (
    'q' => 'Who owns the finished manuscript once it is written?',
    'a' => 'You do. Every agreement makes clear that you own the finished work, in full, once it is delivered.',
  ),
  7 =>
  array (
    'q' => 'How much does it cost to work with the best fiction ghostwriter in Queensland for my project?',
    'a' => 'Pricing depends on your book\'s length and complexity. We provide a clear, fixed quote after our first conversation, so you know the full cost before any writing starts.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). Brisbane is the state
   capital and stands in as the locality for the Queensland-wide pages. */
$location_business = [
    'locality'   => 'Brisbane',
    'region'     => 'QLD',
    'postalCode' => '4000',
    'country'    => 'AU',
];
/* The service-list key is the state, not the locality above. */
$location_city = 'queensland';

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Fiction Ghostwriting</div>
      <h1>Have a Bedtime Story in Mind but Not the Words? Children's <em>Book Ghostwriting Service</em> <strong>Queensland</strong></h1>
      <p class="lead">Everyone in Queensland seems to have a book in them. Some people have three. The problem is never the idea. It is finding the time, the words, and the confidence to get it onto the page in a way that actually reads well.</p>
      <p class="lead">That is where we come in. Purple Giraffe Press works with writers, business owners, retirees, and dreamers all over Queensland who have a fiction story to tell but need a professional hand to write it. We turn your idea, your notes, or your half-finished manuscript into a finished novel that sounds like it came from you, not from us.</p>
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
      <p>You keep the credit. You keep the rights. You keep the story. We do the heavy lifting of structuring it, writing it, and polishing it until it reads like a proper book.</p>
      <p>If you have been searching for someone to write your novel for you, you have probably already looked at a few options and found a mixed bag of overseas content mills and freelancers with no track record. We wanted to build something different. A local, honest, Queensland-based service that treats fiction writing as a craft, not a shortcut.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghost-writing-fold.webp" alt="Fiction ghostwriting for Queensland authors at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE WRITE (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Complete Fiction Ghostwriting Services for Authors Across Queensland</h2>
    <p style="margin:14px auto 0;">We can step into your story wherever it currently stands, whether you have a single idea, a rough outline, several completed chapters, or a manuscript that stopped halfway. Our role is to understand what you want the book to become and create a clear path towards a finished novel.</p>
    <p style="margin:14px auto 0;">We do more than turn notes into sentences. We work as your writing partner, developing characters, strengthening the plot, solving story gaps, and shaping each chapter into a manuscript readers will want to continue.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Full Novel Ghostwriting</h3>
        <div class="fc-body">
          <p>Bring us your concept, characters, setting, theme, or even a brief description of the story you want to tell. We develop the idea into a complete novel with a clear structure, engaging chapters, believable dialogue, and consistent character development. You receive regular updates and chapter drafts throughout the project, allowing you to stay involved and guide the story without having to write every page yourself.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Genre Fiction and Series Development</h3>
        <div class="fc-body">
          <p>We ghostwrite across crime, romance, fantasy, thrillers, historical fiction, family sagas, and other popular genres. Each manuscript is shaped around the expectations of its intended readers while keeping your original ideas at the centre. For trilogies and longer series, we can plan the wider story arc, character journeys, and major turning points before beginning the first book, helping every instalment connect naturally.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Action Fiction and High-Stakes Stories</h3>
        <div class="fc-body">
          <p>Fast-moving fiction needs more than constant action. It requires controlled pacing, believable danger, clear stakes, and quieter moments that allow readers to connect with the characters. As action fiction ghostwriters in Queensland, we carefully plan confrontations, escapes, discoveries, and turning points so every major scene moves the story forward. The result is an exciting manuscript that maintains tension without allowing action to replace meaningful storytelling.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Manuscript Completion and Rescue</h3>
        <div class="fc-body">
          <p>An unfinished manuscript is not a failed book. We review what you have already written, identify why the story lost momentum, and create a practical plan for completing it. Depending on the draft, we may finish the remaining chapters, strengthen the middle, repair plot gaps, or rewrite inconsistent sections. New material is matched carefully to your existing voice so the completed manuscript feels like one connected story.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Ghostwriting for New Authors</h3>
        <div class="fc-body">
          <p>You do not need writing experience, a detailed outline, or a completed first chapter to begin. We can start with a conversation about your idea, characters, themes, and the type of readers you want to reach. From there, we organise your thoughts into a structured story plan and chapter outline. Once you approve the direction, we begin writing while keeping you involved at every important stage.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - EVERY READING STAGE -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Children’s Fiction Ghostwriting for Every Young Reading Stage</h2>
    <p style="margin:14px auto 0;">Children’s stories need more than age-appropriate vocabulary. The sentence length, chapter structure, humour, themes, pacing and emotional depth must all match the child’s reading stage. Our fiction ghostwriting services in Queensland shape every manuscript around the age group you want to reach.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 0–3: Simple Stories Made for Reading Aloud</h3>
        <div class="fc-body">
          <p>Stories for babies and toddlers need short sentences, repetition, familiar ideas, and a gentle rhythm. We create simple narratives that are easy for adults to read aloud and enjoyable for young children to hear again and again.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 3–5: Playful Stories That Spark Curiosity</h3>
        <div class="fc-body">
          <p>Preschool readers respond to memorable characters, imaginative situations, humour, and clear emotional moments. We write lively stories with easy-to-follow plots, natural repetition, and language that encourages children to join in.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Ages 5–7: First Stories for Independent Young Readers</h3>
        <div class="fc-body">
          <p>Children beginning to read independently need accessible vocabulary, manageable sentences, and a story that moves quickly. We develop early-reader fiction that builds confidence without making the writing feel flat or overly simple.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 7–9: Bigger Adventures for Growing Readers</h3>
        <div class="fc-body">
          <p>Readers aged seven to nine are ready for longer plots, stronger character development, and more detailed story worlds. We create mysteries, adventures, fantasy stories, school fiction, and family tales with clear chapters and steady momentum.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 9–12: Richer Fiction for Confident Young Readers</h3>
        <div class="fc-body">
          <p>Middle-grade readers expect engaging characters, meaningful challenges, and stories that respect their growing understanding of the world. We write layered adventures, fantasy, mystery, humour, and contemporary fiction with stronger themes while keeping the content appropriate for younger audiences.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Not sure which age range best suits your idea? We can review your concept, themes, and intended book length before outlining begins, then recommend the most suitable reading level for your story.</p>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/premium-nonfiction-services.webp" alt="The Queensland storytellers our fiction ghostwriters help" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Benefits Most From Fiction Ghostwriting in Queensland</h2>
      <p>Fiction ghostwriting is not just for busy executives with a memoir on their mind. Our Queensland clients include:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Retirees who have a story from their working life they want turned into fiction</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners who want a novel as a passion project or a personal legacy</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Aspiring authors who have the ideas but not the writing confidence or time</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers with an unfinished manuscript who need help crossing the line</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors wanting a second, third, or tenth book without burning out</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>People wanting to turn a family history or personal experience into a fictional story</span></li>
      </ul>
      <p>If any of that sounds like you, this service was built with you in mind.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Queensland Fiction Ghostwriter You Can Trust</h2>
      <p>There are a lot of people online calling themselves ghostwriters. Some are genuinely skilled. Others are reselling cheap overseas work with a markup. Before you commit to anyone, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you a writing sample in the genre you want, not just a general portfolio?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they offer a contract that clearly states you own the finished work?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will the same person write your whole book, or does it get handed off partway through?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How do they handle revisions, and is there a limit before you get charged extra?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain their process, or just promise a fast turnaround with no details?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are they upfront about pricing, or vague until you have already paid a deposit?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand your genre, or are they generalists who write everything the same way?</span></li>
      </ul>
      <p>A good ghostwriter will answer all of these without hesitation. If someone dodges the questions or gets defensive, treat that as a warning sign.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a fiction ghostwriter in Queensland you can trust" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PROFESSIONAL GHOSTWRITING -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Ghostwriting Creates a Stronger, More Readable Novel</h2>
  </div>
  <div class="container narrow center">
    <p>Plenty of people try to write their own novel and stall halfway. Others finish a draft that never quite reads the way they imagined it. Working with an experienced ghostwriter changes this in a few real ways:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Your story gets proper structure, so it does not sag in the middle or rush the ending</li>
      <li>Dialogue sounds natural instead of stiff, which is one of the hardest things for new writers to get right</li>
      <li>Pacing is managed deliberately, so tension builds instead of fizzling out</li>
      <li>You get an outside eye that can spot plot holes you are too close to the story to notice</li>
      <li>The finished manuscript is publish-ready, whether you are going through a publisher or self-publishing</li>
      <li>You save the months, sometimes years, that a first-time novelist typically spends learning craft through trial and error</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this means your voice disappears. The whole point of good ghostwriting is that the finished book still sounds like you, just with the rough edges smoothed out.</p>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Fiction Ghostwriting Process From First Idea to Final Draft</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: Initial Conversation</h3></div>
        <div class="svc-step-body"><p>We start with a call or a video chat, whichever suits you. This is where you tell us about your story idea, your goals for the book, and your timeline. There is no pressure and no obligation at this stage.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: Outline and Structure</h3></div>
        <div class="svc-step-body"><p>Once we understand the story, we build a full chapter-by-chapter outline. You review it and give feedback before any prose gets written. This step matters because it is far easier to fix a plot problem in an outline than in a finished draft.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: Drafting</h3></div>
        <div class="svc-step-body"><p>We write the book in stages, usually in batches of a few chapters at a time. You get to read as we go, rather than waiting months to see a single word. This keeps you involved and means small issues get caught early rather than late.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: Review and Revision</h3></div>
        <div class="svc-step-body"><p>Once the full draft is done, we go through a structured revision round. You flag anything that does not feel right, and we adjust it. This is built into every project, not offered as a costly extra.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: Final Polish and Delivery</h3></div>
        <div class="svc-step-body"><p>The last stage is a full edit for flow, consistency, and readability. You receive a finished manuscript file ready for publishing, whether that means sending it to a publisher, a literary agent, or straight to self-publishing platforms.</p></div>
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
      <h2>Why Queensland Authors Choose <em>Purple Giraffe Press</em> for Ghostwriting</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>One writer, start to finish.</h3><p>The person who writes your first chapter is the same person who writes your last. Your book will not sound like it was pieced together by different hands.</p></article>
      <article><span>✓</span><h3>Confidentiality is built in.</h3><p>Every project comes with a clear agreement covering ownership and privacy. Your name goes on the cover. Ours does not.</p></article>
      <article><span>✓</span><h3>We are genuinely Queensland-based.</h3><p>We understand local settings, local slang, and the kind of stories Queensland readers connect with, whether your book is set in Brisbane, the Gold Coast, or somewhere fictional entirely.</p></article>
      <article><span>✓</span><h3>Straightforward, quote-based pricing.</h3><p>You will never be left guessing what something costs. We quote based on your book's length and complexity before any work starts.</p></article>
      <article><span>✓</span><h3>We are honest about timelines.</h3><p>We do not promise a finished novel in two weeks. Good fiction takes real time, and we will tell you upfront what a realistic schedule looks like for your project.</p></article>
      <article><span>✓</span><h3>We work as fiction ghostwriters online in Queensland too.</h3><p>Plenty of our clients never meet us in person. Everything can be handled by video call, email, and shared documents, which suits people in regional areas just as well as those in the cities.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, fixed quote for fiction ghostwriting in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Clear, Affordable Fiction Ghostwriting Pricing Without Hidden Costs</h2>
      <p>We know that ghostwriting fiction can sound like an expensive, exclusive service reserved for celebrities and public figures. That is not how we run things.</p>
      <p>Every quote is based on your specific project. A ninety-thousand-word fantasy epic with a built-out world costs differently from a shorter, contemporary novel. We ask about your book length, genre, and how much groundwork you already have, then give you a clear, fixed quote before any writing begins.</p>
      <p>We aim to run an affordable fiction ghostwriting service in Queensland by keeping our process efficient and avoiding unnecessary extras. You pay for the writing and the craft, not for a big agency markup. If your budget is tight, tell us during the first conversation. We will always be upfront about what is realistic within your budget, rather than promising something we cannot deliver.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- explore more';
$location_services_heading = 'Other Queensland Support Beyond Your Fiction Ghostwriting Project';
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
      <h2>Start Turning Your Fiction Idea Into a <em>Finished Novel</em></h2>
      <p>If you have an idea sitting in your head, a manuscript gathering dust, or a story you have always wanted to tell but never had the time to write, get in touch. There is no pressure and no obligation in a first conversation. We will talk through your idea, answer your questions honestly, and give you a realistic sense of cost and timeline.</p>
      <p>Your story deserves to actually get written. Let us help you finish it properly.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to ghostwrite your Queensland novel" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 18 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions Queensland authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

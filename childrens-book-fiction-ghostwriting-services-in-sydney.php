<?php
include 'includes/config.php';

$page_title       = 'Skilled | Sydney Children\'s Book Fiction Ghostwriters';
$page_description = 'Turn your children\'s story idea into a finished book with expert fiction ghostwriting in Sydney. Skilled writing tailored to young readers\' hearts.';
$canonical_path   = 'childrens-book-fiction-ghostwriting-services-in-sydney.php';
$breadcrumb_name  = 'Fiction Ghostwriting in Sydney';
$breadcrumbs = [
    ['name' => 'Home',                 'url' => page_url('index.php')],
    ['name' => 'Locations',            'url' => page_url('locations/')],
    ['name' => 'Sydney',               'url' => page_url('locations/sydney.php')],
    ['name' => 'Fiction Ghostwriting', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need to live in Sydney to use your ghostwriting service?',
    'a' => 'No. While we are based in Sydney and happy to meet clients here in person, we also work with fiction ghostwriters online in Sydney and interstate through video calls, phone, and email, so distance is not a barrier.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to ghostwrite a novel in Sydney?',
    'a' => 'Most full-length novels take between four and nine months from the first outline to final delivery, depending on the length of the book and how quickly you can review draft chapters.',
  ),
  2 =>
  array (
    'q' => 'Will my name be the only one on the finished book?',
    'a' => 'Yes. Ghostwriting means the finished manuscript is yours to publish under your own name. We do not take credit or claim any rights to the story once it is delivered.',
  ),
  3 =>
  array (
    'q' => 'Is this an affordable fiction ghostwriting service in Sydney, or only for big budgets?',
    'a' => 'We work with a range of budgets and always quote based on the actual scope of your project. Shorter books or staged projects can be a practical way to start if budget is a concern.',
  ),
  4 =>
  array (
    'q' => 'What genres of fiction ghostwriting in Sydney do you cover?',
    'a' => 'We cover most genres, including drama, romance, mystery, thriller, and action. If your story sits across more than one genre, that is completely normal and something we plan for in the outline.',
  ),
  5 =>
  array (
    'q' => 'What happens if I am not happy with a chapter?',
    'a' => 'You can ask for changes. Most projects include a set number of revision rounds at each stage, and we would rather adjust a chapter early than have you unhappy with the finished manuscript.',
  ),
  6 =>
  array (
    'q' => 'Can I read chapters as they are written, or only see the finished book?',
    'a' => 'You read and comment on chapters as we go. Nothing is finalised without your feedback, and you can request changes to plot, tone, or pacing throughout the drafting stage.',
  ),
  7 =>
  array (
    'q' => 'Do you offer a written contract for ghostwriting projects?',
    'a' => 'Yes. Every project starts with a written agreement covering price, timeline, revisions, and confidentiality, so both sides know exactly what is agreed before writing begins.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Fiction Ghostwriting</div>
      <h1>From Bedtime Idea to <em>Published Story,</em> Sydney Children's Book <strong>Fiction Ghostwriters</strong> Service</h1>
      <p class="lead">You have a story in your head. Maybe it has been there for years. You know the characters, the twists, even how it ends. But sitting down to write forty thousand words, in your own voice, on top of a job and a family, is a different task altogether.</p>
      <p class="lead">That is where we come in. Purple Giraffe Press works with Sydney writers, first-time authors, and busy professionals who want their fiction written properly, without giving up their evenings for the next two years.</p>
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
      <p>We are not a content mill. We take on a small number of fiction projects at a time, and we sit down with every client before we write a single page. You tell us the story. We shape it into a book you would be proud to put your name on.</p>
      <p>If you have searched around for someone to write your novel for you, you have probably found a mix of freelance sites, overseas agencies, and one-person operations with no real process behind them. We built Purple Giraffe Press to be the steadier option. Local, direct, and easy to reach when you have a question.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghost-writing-fold.webp" alt="Fiction ghostwriting for Sydney authors at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE WRITE (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we can do</p>
    <h2>How Our Sydney Fiction Ghostwriting Service <em>Actually Works</em></h2>
    <p style="margin:14px auto 0;">Ghostwriting fiction in Sydney is not about handing over a napkin sketch of an idea and getting a finished novel back with no input from you. Good ghostwriting is a back-and-forth. You bring the story, the characters, the world. We bring the structure, the pacing, and the discipline to sit down and write it, chapter after chapter, until it is done.</p>
    <p style="margin:14px auto 0;">Most projects follow a similar shape. You share your idea, however rough it is. We ask questions, take notes, and build an outline together. Then we write the manuscript in stages, sending you chapters to read and comment on as we go. Nothing gets locked in without your say-so.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Novels and Full-Length Fiction</h3>
        <div class="fc-body">
          <p>This is the heart of what we do. Whether it is a family drama, a mystery, a romance, or a story that does not fit neatly into one genre, we build a full-length manuscript from your idea. Typical projects run between sixty and one hundred thousand words, though we can work to whatever length suits your story. We spend real time on the early planning stage because a novel that wanders off course in chapter ten is much harder to fix than one that had a clear map from the start.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Series and Multi-Book Projects</h3>
        <div class="fc-body">
          <p>Some writers do not just want one book. They want a series, with the same characters carried across three, four, or more titles. We plan the arc across the whole series before writing begins, so book two does not contradict something set up in book one. This includes keeping a running record of names, timelines, and small details, so a character's age or a street name stays consistent from the first book to the last. For writers hoping to build a following on a self-publishing platform, a well-planned series tends to perform better than a single standalone title, since readers who finish book one already know where to go next.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Action and Thriller Fiction</h3>
        <div class="fc-body">
          <p>If pace and tension are what your story needs, we bring in writers who specialise in this. Our action fiction ghostwriters in Sydney know how to build a chase scene, a fight, or a countdown that keeps a reader turning pages late at night, without it feeling rushed or silly. Action-heavy stories live or die on pacing, so we pay close attention to sentence length and chapter breaks in these projects, not just plot.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Short Story Collections</h3>
        <div class="fc-body">
          <p>Not every project needs to become a full novel. Some clients want a collection of linked short stories based on one theme, setting, or group of characters. We can write each story as a complete standalone piece or connect them through a wider narrative world. This format is also ideal for testing an idea, building an audience, or preparing for a larger future book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Ebook and Self-Publishing Fiction</h3>
        <div class="fc-body">
          <p>If you plan to self-publish through Amazon or another digital platform, we write with online readers in mind. This includes clear chapter breaks, engaging pacing, and a structure that works well on screens. We also prepare the manuscript so it can move smoothly into formatting and upload once the writing is complete. The result is a polished story built for a modern digital reading experience.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WRITTEN FOR THE READER (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Fiction Ghostwriting Shaped Around Your <em>Intended Reader Audience</em></h2>
    <p style="margin:14px auto 0;">Every audience connects with stories in a different way. A novel written for younger readers requires a different tone, pace, and level of complexity than a book written for adults. That is why we shape every fiction project around the people who will ultimately read it. From middle-grade adventures to adult thrillers, we write with the expectations of the target audience in mind.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 8–12: Middle Grade Fiction Full of Adventure and Discovery</h3>
        <div class="fc-body">
          <p>Middle-grade readers enjoy fast-moving stories, memorable characters, and exciting worlds they can escape into. We focus on clear storytelling, strong character development, and age-appropriate themes. Whether the story involves mystery, fantasy, humour, or adventure, the goal is to keep young readers engaged from beginning to end.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Ages 13–17: Young Adult Fiction That Feels Authentic</h3>
        <div class="fc-body">
          <p>Young adult readers expect believable characters, emotional depth, and stories that reflect the challenges of growing up. We create compelling plots, realistic dialogue, and character-driven narratives that connect with teenage audiences. The focus is always on authenticity, pacing, and emotional engagement.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Ages 18–35: Contemporary Fiction for Modern Readers</h3>
        <div class="fc-body">
          <p>Adult fiction often explores more complex relationships, life experiences, and personal challenges. We write stories with deeper themes, stronger character arcs, and more layered storytelling. Whether it is romance, drama, suspense, or commercial fiction, we tailor the manuscript to the expectations of modern readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 35+: Fiction Built Around Richer Characters and Bigger Stories</h3>
        <div class="fc-body">
          <p>Many adult readers enjoy stories with depth, substance, and long-term character development. We create novels that balance engaging plots with meaningful themes and believable relationships. This audience often appreciates strong storytelling, emotional resonance, and characters that feel real long after the final chapter.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Multi-Generational Fiction for Broad Audience Appeal</h3>
        <div class="fc-body">
          <p>Some stories are designed to appeal across multiple age groups rather than one specific audience. In these cases, we balance accessibility with depth, creating books that can be enjoyed by a wide range of readers. This approach is especially effective for family sagas, adventure stories, and crossover fiction.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/premium-nonfiction-services.webp" alt="Sydney writers, professionals and retirees we ghostwrite fiction for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Sydney Fiction Ghostwriting Services Are <em>Designed For</em></h2>
      <p>Our clients come from all sorts of backgrounds. Common ones include:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time writers with a strong idea but no time to write it themselves</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners and professionals who want a novel finished around a demanding job</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Retirees with a lifetime of stories to tell but limited writing experience</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors partway through a manuscript who need help finishing it</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Screenwriters or podcasters who want to turn an existing story into a novel</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a <em>Sydney Fiction Ghostwriter</em></h2>
      <p>Not every ghostwriting service is set up the same way, and it pays to ask a few questions before you commit to anyone. Whoever you are speaking with, it is fair to ask:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will the same writer work on my book from start to finish, or will it be passed between different people?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do I get to read and comment on chapters as they are written, or only at the very end?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who owns the finished manuscript once it is delivered?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is there a written agreement covering confidentiality?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if I am not happy with a chapter? Is there a set number of revisions?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How is the project priced, and what is included in that price?</span></li>
      </ul>
      <p>A good ghostwriter will answer these plainly, without dodging the question. If someone is vague about ownership or confidentiality, treat that as a warning sign.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="What to look for when choosing a fiction ghostwriter in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY A PROFESSIONAL GHOSTWRITER -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Ghostwriting Creates <em>Stronger and More Complete Novels</em></h2>
  </div>
  <div class="container narrow center">
    <p>Writing a novel is hard, even for people who write for a living. A professional ghostwriter brings a few things that are difficult to get any other way:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Structure and pacing are built from years of practice, so the story does not sag in the middle</li>
      <li>An outside eye on plot holes and inconsistent characters before readers ever see them</li>
      <li>The discipline to actually finish a manuscript, rather than it sitting half done in a drawer</li>
      <li>Editing skill layered on top of the writing itself, so what you get back is close to publish-ready</li>
    </ul>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How Our Fiction Ghostwriting <em>Service Works</em></h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step One: A Free Chat About Your Story</h3></div>
        <div class="svc-step-body"><p>We start with a conversation, over the phone or in person if you are Sydney-based. You tell us the idea, however messy it is, and we ask questions to understand the world, the characters, and what you want the finished book to feel like.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step Two: Outline and Agreement</h3></div>
        <div class="svc-step-body"><p>We put together a chapter-by-chapter outline and a written agreement covering price, timeline, revisions, and confidentiality. Nothing is written until you have approved the outline.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step Three: Drafting in Stages</h3></div>
        <div class="svc-step-body"><p>We write the manuscript in batches, usually a handful of chapters at a time, and send them to you for feedback. You can ask for changes to tone, pacing, or plot direction at this stage, while it is still easy to adjust.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step Four: Full Manuscript Review</h3></div>
        <div class="svc-step-body"><p>Once the full draft is done, we go through it again as a whole, checking that the story holds together from beginning to end and fixing anything that reads better in isolation than it does as part of the whole book.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step Five: Final Delivery</h3></div>
        <div class="svc-step-body"><p>You receive the finished manuscript in a clean, formatted document, ready for self-publishing, submission to an agent, or simply for you to hold and read as a finished book.</p></div>
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

<!-- 11 - WHY SYDNEY AUTHORS CHOOSE US -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Sydney Authors Choose <em>Our Fiction Ghostwriting Team</em></h2>
      <p>If you are searching for the best fiction ghostwriter in Sydney for your particular story, the honest answer is that fit matters more than any ranking. We are happy to have a first conversation with no obligation, so you can judge that fit for yourself.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Direct contact with your writer.</h3><p>You are not passed between account managers. You speak with the person actually writing your book.</p></article>
      <article><span>✓</span><h3>Clear, upfront pricing.</h3><p>We quote based on your project, not a vague hourly rate that grows without warning.</p></article>
      <article><span>✓</span><h3>Confidentiality as standard.</h3><p>Every project comes with a written agreement covering ownership and privacy, so your story and your name stay protected.</p></article>
      <article><span>✓</span><h3>A small client list.</h3><p>We take on a limited number of fiction projects at a time, which means more attention on each one, not a queue of dozens of half-finished books.</p></article>
      <article><span>✓</span><h3>Real feedback loops, not a black box.</h3><p>You are never waiting months to find out if the story went the way you wanted. You see chapters as they are written and can steer the story while there is still time to change course.</p></article>
      <article><span>✓</span><h3>Australian voice, understood properly.</h3><p>If your story is set in Sydney, or anywhere in Australia, our writers know the setting, the slang, and the rhythm of how Australians actually talk.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A written quote for fiction ghostwriting in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Do Fiction Ghostwriting Services <em>Cost in Sydney</em></h2>
      <p>Pricing depends on the length of your book, how developed your idea already is, and how much research the story needs. A short novella costs less than an eighty-thousand-word novel with multiple points of view. Rather than quote a flat rate that would not fit most projects, we ask about your story first and put together a written quote based on the actual scope of work. There is no obligation attached to getting that quote.</p>
      <p>We know cost is often the first question, and we would rather give you an honest number for your project than a headline figure that does not hold up once the details come in. Clients looking for a fiction ghostwriter for hire in Sydney on a tighter budget can talk to us about staged payments or a shorter first project to test the working relationship before committing to a full-length novel.</p>
      <p>As a general guide, price is shaped by three things: how long the finished book needs to be, how much of the story is already worked out before we start, and how many rounds of feedback and revision you want built into the process. A novella with a clear plot already in your head will cost less to write than an eighty thousand word novel starting from a single idea and a handful of characters. We are happy to walk through these factors with you before any money changes hands, so there are no surprises partway through.</p>
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
$location_services_heading = 'Additional Services to Support Your Fiction Project';
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
      <h2>Ready to Turn Your Fiction Idea <em>Into a Novel?</em></h2>
      <p>You do not need a finished outline or a polished pitch to get in touch. Most of our clients start with nothing more than an idea and a feeling that it is worth telling properly. Send us a message, tell us a little about your story, and we will set up a time to talk it through.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to ghostwrite your novel" loading="lazy" decoding="async">
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

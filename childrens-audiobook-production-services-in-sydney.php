<?php
include 'includes/config.php';

$page_title       = 'Children\'s Audiobook Production for Sydney Authors';
$page_description = 'Bring your children\'s book to life with expert audiobook production in Sydney. Skilled narration and sound quality tailored to your story\'s genre.';
$canonical_path   = 'childrens-audiobook-production-services-in-sydney.php';
$breadcrumb_name  = 'Audiobook Production in Sydney';
$breadcrumbs = [
    ['name' => 'Home',                 'url' => page_url('index.php')],
    ['name' => 'Locations',            'url' => page_url('locations/')],
    ['name' => 'Sydney',               'url' => page_url('locations/sydney.php')],
    ['name' => 'Audiobook Production', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to produce an audiobook in Sydney with your team?',
    'a' => 'Most books take between four and eight weeks from the first recording session to final delivery. This depends on the length of your book and the narrator\'s availability.',
  ),
  1 =>
  array (
    'q' => 'Do you offer recording for children\'s books in Sydney?',
    'a' => 'Yes. Children\'s books often need a different narration style, and we can help you find a narrator who suits a younger audience or a read-aloud family style.',
  ),
  2 =>
  array (
    'q' => 'Can I use my own narrator instead of one you suggest?',
    'a' => 'Yes. If you already have a narrator, whether that is yourself or someone else, we are happy to work with them and guide the recording process.',
  ),
  3 =>
  array (
    'q' => 'What file formats do I get at the end?',
    'a' => 'You will receive broadcast-quality files suited to major platforms, along with a master copy for your own records.',
  ),
  4 =>
  array (
    'q' => 'Do you help with audiobook cover art too?',
    'a' => 'We can guide you on cover requirements for audio platforms and connect you with designers if you need one, though our core focus is the audio itself.',
  ),
  5 =>
  array (
    'q' => 'Is there a minimum book length you will work with?',
    'a' => 'No. We have worked on short story collections as well as full-length novels. Get in touch, and we will tell you honestly if your project is a good fit.',
  ),
  6 =>
  array (
    'q' => 'Do I need to come into a studio in Sydney, or can we work remotely?',
    'a' => 'Both options are available. Some authors like to sit in on the recording session in person, and others are happy to review recordings remotely and give feedback by email or call. We can set things up either way, depending on what suits you.',
  ),
  7 =>
  array (
    'q' => 'Are you the top choice for producing an audiobook in Sydney?',
    'a' => 'We would rather let our process and communication speak for themselves. Get in touch, ask us the questions listed earlier on this page, and judge for yourself.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Audiobook Production</div>
      <h1>Turn <strong>Your Story</strong> into a Voice Kids Love, <em>Sydney Children's Audiobook</em> Services</h1>
      <p class="lead">Your book is written. Now readers want to listen to it too. More people are choosing audiobooks over paperbacks, and if your book isn't available as one, you are missing a growing part of your audience.</p>
      <p class="lead">At Purple Giraffe Press, we help Sydney authors and publishers turn manuscripts into audiobooks that sound as good as anything on a big platform. We handle the narration, the sound editing, and the distribution, so you don't have to learn a new skill on top of writing your book.</p>
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
      <p>We work with first-time authors, small publishers, and businesses that want to turn reports or training material into audio. Whatever stage you are at, we can help you figure out the best way forward. You do not need to arrive with a finished plan. Plenty of people who contact us are simply curious about what an audiobook would cost or how long it would take, and that is a fine place to start.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/audiobooks.webp" alt="Audiobook production for Sydney authors at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT THE PRODUCTION COVERS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we do</p>
    <h2>Complete Audiobook Production Services From Recording to Distribution</h2>
    <p style="margin:14px auto 0;">Audiobooks are not just a recording of someone reading out loud. There is a lot that happens before and after the microphone turns on. Here is how we break the work down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="3" width="6" height="11" rx="3"></rect><path d="M5 11a7 7 0 0 0 14 0M12 18v3"></path></svg></div>
        <h3>Narration and Voice Casting</h3>
        <div class="fc-body">
          <p>We help you find the right voice for your book. Fiction, memoir, business books, and children's stories all need a different tone and pace. We can source professional narrators based in Sydney, or work with a narrator you already have in mind. If you want to narrate the book yourself, we can guide you through recording it properly.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M10 8.5 16 12l-6 3.5Z"></path></svg></div>
        <h3>Studio Recording</h3>
        <div class="fc-body">
          <p>This is one of our core audio book recording services in Sydney. We record in treated spaces to avoid background noise, echo, and the kind of hiss that makes listeners switch off. Every chapter is recorded in clean takes, with the narrator given time to redo any lines that need it.</p>
          <p>We also keep a record of how each name, place, and term in your book should be pronounced, so there is no guessing partway through a long recording. For books with a lot of characters or technical language, this small step saves a lot of time later and keeps the narration consistent from the first page to the last.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Sound Editing and Mastering</h3>
        <div class="fc-body">
          <p>Raw recordings always need work. We remove mouth noise, breaths, long pauses, and mistakes. Then we balance the levels so the volume stays even from the first chapter to the last. The final file is mastered to meet the technical standards that platforms like Audible and Spotify require.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Publishing and Distribution</h3>
        <div class="fc-body">
          <p>Once your audiobook is finished, it needs to reach listeners. As one of the audiobook publishing services in Sydney, we prepare your files, cover art, and metadata for submission to major platforms. We explain the different distribution routes so you can pick the one that suits your goals, whether that is wide reach or exclusive deals.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Audiobooks and Ebooks Together</h3>
        <div class="fc-body">
          <p>Many authors want their audiobook and ebook to launch at the same time. We offer audiobooks and ebooks services in Sydney, so your print, digital, and audio editions are ready together instead of trickling out over months. This keeps your marketing simple and your readers happy, no matter how they like to read.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Working Across Different Genres</h3>
        <div class="fc-body">
          <p>We record fiction, memoir, self-help, business and finance titles, children's stories, and educational courses. Each genre has its own pace and feel. A thriller needs tension in the delivery. A business book needs clarity and confidence. A children's story needs warmth and a bit of fun in the voice. We match the narrator and editing style to the book rather than using one approach for everything. This is part of why authors tell their friends we are the audiobooks' best service in Sydney for getting the tone right, not just the technical side.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - NARRATION STYLES BY AGE GROUP (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Audiobook Narration Styles for Different Listening Audiences</h2>
    <p style="margin:14px auto 0;">Every audiobook audience listens differently. A children’s picture book requires warmth and energy, while a business title or young adult novel may need a completely different narration style. We match the voice, pacing, and production approach to the age group and listening experience your audience expects.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Ages 0–3: Gentle Narration for Early Learning and Bedtime Stories</h3>
        <div class="fc-body">
          <p>Audiobooks for babies and toddlers benefit from calm, clear narration and a warm delivery style. We focus on simple pacing, friendly voices, and an easy listening experience that works well for parents reading along or children listening independently. The goal is to create a comforting and engaging audio experience.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 3–5: Expressive Storytelling for Picture Book Listeners</h3>
        <div class="fc-body">
          <p>Young children respond well to narration that feels lively, playful, and full of personality. We work with narrators who can bring characters to life while maintaining clear pronunciation and consistent pacing. This helps keep young listeners engaged from beginning to end.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 6–8: Engaging Audio for Early Independent Readers</h3>
        <div class="fc-body">
          <p>As children become more confident readers, they often enjoy listening to stories on their own. We create audiobooks with energetic narration, clear character voices, and strong storytelling flow. The result is an experience that keeps young listeners focused and entertained throughout the story.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Ages 8–12: Dynamic Narration for Middle-Grade Adventures</h3>
        <div class="fc-body">
          <p>Middle-grade books often include larger casts, exciting plots, and richer world-building. We focus on narration that captures emotion, excitement, and character personality without becoming distracting. This helps listeners stay immersed in the story while following every important detail.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 13–17: Modern Audiobooks for Young Adult Audiences</h3>
        <div class="fc-body">
          <p>Young adult listeners expect professional narration that feels authentic and believable. We match each project with a voice that suits the tone of the story, whether it is contemporary fiction, fantasy, romance, or adventure. The focus is on creating an engaging listening experience that feels natural and relatable.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Adult Listeners: Professional Production for Every Genre</h3>
        <div class="fc-body">
          <p>Adult audiobooks cover a wide range of genres, from memoirs and novels to business books and educational content. We tailor narration, editing, and mastering to suit the material and intended audience. The final audiobook is designed to sound polished, professional, and ready for major distribution platforms.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Sydney authors, publishers and businesses we produce audiobooks for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Sydney Audiobook Production Services Help</h2>
      <p>Our audiobook production services in Sydney suit a wide range of people, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Independent authors publishing their first audiobook</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and mid-sized publishers without an in-house studio</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners turning guides, manuals, or courses into audio</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Podcasters or content creators expanding into long-form audio</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who already have an ebook and now want an audio edition</span></li>
      </ul>
      <p>If you are unsure whether your project fits, get in touch, and we will give you an honest answer.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How To Choose An Audiobook Studio in Sydney</h2>
      <p>Not every studio delivers the same quality, and prices can vary a lot for reasons that are not always clear. Before you commit to any provider, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can I hear a sample of a narrator's previous work before booking?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is the price a flat fee, or does it depend on the finished hour count?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who owns the master recording once the project is done?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if I am not happy with the narrator's first attempt at a chapter?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they handle platform submission, or do I need to do that myself?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How long does the whole process usually take from start to finish?</span></li>
      </ul>
      <p>A studio that answers these clearly, without dodging the question, is usually one you can trust.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing an audiobook studio in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PROFESSIONAL PRODUCTION MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Audiobook Production Makes a Difference</h2>
  </div>
  <div class="container narrow center">
    <p>Some authors think any recording will do. In reality, quality affects whether people finish listening at all.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>Poor audio quality is one of the top reasons listeners abandon an audiobook partway through</li>
      <li>A flat or mismatched narrator voice can undersell a great story</li>
      <li>Inconsistent volume between chapters forces listeners to keep adjusting their device</li>
      <li>Files that don't meet a platform's technical specs can get rejected or delayed</li>
      <li>A well-produced audiobook can open your book up to commuters, gym goers, and people with visual impairments who might never buy the print version</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Getting the production right the first time saves you money and protects how your book is received.</p>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How We Turn Your Manuscript Into an Audiobook</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: Free Consultation</h3></div>
        <div class="svc-step-body"><p>We start with a short conversation about your book, your budget, and your goals. This helps us recommend the right package instead of guessing.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: Voice Casting and Sample</h3></div>
        <div class="svc-step-body"><p>We shortlist a few narrators who suit your book's tone. You choose based on a short sample recording, so there are no surprises later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: Full Recording</h3></div>
        <div class="svc-step-body"><p>Once a narrator is confirmed, we schedule the full recording. Longer books are usually split into several sessions to keep quality consistent.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: Editing and Quality Check</h3></div>
        <div class="svc-step-body"><p>Every chapter goes through editing, noise cleanup, and level balancing. We listen back to the whole book before it moves to final approval.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: Your Review</h3></div>
        <div class="svc-step-body"><p>We send you the finished files to review. If anything needs adjusting, we make the changes before final delivery.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Step 6: Publishing</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we prepare the files for whichever platforms you have chosen and guide you through submission.</p></div>
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
      <h2>Why Sydney Authors Choose <em>Purple Giraffe Press</em> for Audiobooks</h2>
      <p>If you are searching for the best service for audiobooks in Sydney, the truth is that "best" depends on what you need. We are upfront about what we can and can't do, and we would rather tell you honestly than overpromise.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Local team, local understanding.</h3><p>We are based here, so scheduling calls and studio time is simple, and we understand the Australian publishing market.</p></article>
      <article><span>✓</span><h3>Clear communication throughout.</h3><p>You will always know what stage your project is at. No long silences while you wonder what is happening.</p></article>
      <article><span>✓</span><h3>Honest pricing.</h3><p>We quote based on your actual book length and needs, not a one-size-fits-all number that ignores your project.</p></article>
      <article><span>✓</span><h3>We treat every project like it matters.</h3><p>Whether it is your first book or your tenth, we give it the same care.</p></article>
      <article><span>✓</span><h3>Australian voices when you want them.</h3><p>If your story is set in Australia or you simply prefer a local accent, we can match you with narrators who sound like home.</p></article>
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
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for audiobook production in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Audiobook Production Cost in Sydney</h2>
      <p>Pricing for audiobook production depends on the length of your book, the narrator you choose, and how much editing is needed. We do not believe in flat rate numbers that ignore these differences, because a fifty thousand word novel and a two hundred page business guide need different amounts of studio time.</p>
      <p>Get in touch with your manuscript length and genre, and we will put together a clear, itemised quote. There is no pressure and no obligation to proceed.</p>
      <p>As a rough guide, the main things that shape your quote are the finished audio length, whether you need a professional narrator or plan to record yourself, how many rounds of edits you expect to need, and which platforms you want the finished book listed on. Two books of a similar word count can still cost differently once you factor in narrator availability and how much cleanup the raw audio needs. We would rather explain this upfront than surprise you with add-on fees later.</p>
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
$location_services_heading = 'Additional Services That Support Your Audiobook Launch';
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
      <h2>Ready to Transform Your Book Into a <em>Professional Audiobook?</em></h2>
      <p>If you have been putting off recording your audiobook because it feels complicated, that is exactly where we come in. Send us your manuscript, tell us a bit about your book, and we will walk you through the rest.</p>
      <p>Among the audiobook services in Sydney, we aim to be the one that makes the process feel manageable, not overwhelming. Reach out today for a free.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to record your audiobook" loading="lazy" decoding="async">
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

<?php
include 'includes/config.php';

$page_title       = 'London\'s Trusted Audiobook Production Experts';
$page_description = 'Turn your book into a professional audiobook with our production experts in London. We handle narration, editing and sound design from start to finish.';
$canonical_path   = 'london-trusted-audiobook-production-experts.php';
$breadcrumb_name  = 'Audiobook Production in London';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'London',      'url' => page_url('locations/london.php')],
    ['name' => 'Audiobook Production', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to produce an audiobook in London?',
    'a' => 'Most books take between six and twelve weeks from casting to finished, published files, depending on length and how many rounds of editing are needed.',
  ),
  1 =>
  array (
    'q' => 'Do I need to be based in London to use your service for the best service for audiobooks in London?',
    'a' => 'No. Most of our authors work with us remotely, by email and phone. Being London-based simply means you\'re welcome to visit the studio or sit in on a session if you\'d like to.',
  ),
  2 =>
  array (
    'q' => 'Can I choose my own narrator instead of one from your list?',
    'a' => 'Yes. If you already have a narrator in mind, we\'re happy to work with them, book the studio, and handle direction and editing around their availability.',
  ),
  3 =>
  array (
    'q' => 'What if my book has multiple characters and needs different voices?',
    'a' => 'We can cast a full ensemble for dialogue-heavy fiction, or use a single skilled narrator who can differentiate characters convincingly. We\'ll advise on which suits your book once we\'ve read it.',
  ),
  4 =>
  array (
    'q' => 'Which platforms will my audiobook actually appear on?',
    'a' => 'That depends on your goals. Most authors go for a mix of Audible, Apple Books, and Spotify, with libraries added through OverDrive if that matters to you. We\'ll talk through the right mix for your genre.',
  ),
  5 =>
  array (
    'q' => 'Do you offer audiobook services for non-fiction and business books, not just novels?',
    'a' => 'Yes. Memoirs, business books, and self-help titles make up a good share of our work and often need a different narration style from fiction, which we factor into casting.',
  ),
  6 =>
  array (
    'q' => 'What happens if I\'m not happy with a recorded chapter?',
    'a' => 'We flag issues during the editing and quality check stage, and re-recording sessions can be arranged before the book is finalised. This is exactly why a written contract covering revisions matters, and we always put one in place upfront.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Audiobook Production</div>
      <h1>From Manuscript to Microphone: London's <em>Audiobook Production Experts</em></h1>
      <p class="lead">Writing a book takes months, sometimes years. Turning it into something people actually want to listen to takes something else entirely: the right voice, the right studio, and a team who understands how audiobooks really get made and sold.</p>
      <p class="lead">Purple Giraffe Press works with authors and publishers across London who want their books heard, not just read. Whether you have a finished manuscript sitting on your laptop or a book that's already selling well in print, we help you turn it into a polished, professional audiobook that sounds like it belongs on the same shelf as the bestsellers.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Audiobook</a>
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
      <h2>We Handle The Parts Most Authors Find Confusing.</h2>
      <p>Choosing the right narrator, booking proper studio time, getting the file specifications right for Audible and other platforms, and making sure the finished recording actually reaches listeners once it's live. If you've been searching for audiobook services in London that cover the whole journey, from script to shelf, this is where you start.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Audiobook &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/audiobooks.webp" alt="Audiobook production experts in London recording a professional audiobook at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE DELIVER (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>What Our London Audiobook Team Actually Delivers</h2>
    <p style="margin:14px auto 0;">We split the work into a few clear parts, so you always know what you're paying for and what stage your book is at.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v3"></path></svg></div>
        <h3>Audio Book Recording Services in London</h3>
        <p>This is where the book becomes a performance. We arrange:</p>
        <ul style="list-style:none; margin:14px 0 0; padding:0; text-align:left; display:grid; gap:10px;">
          <li style="display:flex; gap:10px; align-items:flex-start;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 auto; width:18px; height:18px; margin-top:4px; color:var(--figma-purple-2);"><path d="M20 6 9 17l-5-5"/></svg><span>Professional studio recording, either at our London studio or a partner facility</span></li>
          <li style="display:flex; gap:10px; align-items:flex-start;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 auto; width:18px; height:18px; margin-top:4px; color:var(--figma-purple-2);"><path d="M20 6 9 17l-5-5"/></svg><span>Narrator casting, whether you want one voice or a full cast for dialogue-heavy fiction</span></li>
          <li style="display:flex; gap:10px; align-items:flex-start;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 auto; width:18px; height:18px; margin-top:4px; color:var(--figma-purple-2);"><path d="M20 6 9 17l-5-5"/></svg><span>Directed sessions, so pacing, tone, and character voices stay consistent from chapter one to the end</span></li>
          <li style="display:flex; gap:10px; align-items:flex-start;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 auto; width:18px; height:18px; margin-top:4px; color:var(--figma-purple-2);"><path d="M20 6 9 17l-5-5"/></svg><span>Pronunciation guides for unusual names, places, or technical terms</span></li>
          <li style="display:flex; gap:10px; align-items:flex-start;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 auto; width:18px; height:18px; margin-top:4px; color:var(--figma-purple-2);"><path d="M20 6 9 17l-5-5"/></svg><span>Punch-in fixes and re-reads, so you're not stuck with a mistake baked into the final file</span></li>
        </ul>
        <p style="margin-top:14px;">Every session is supervised by someone who has actually directed audiobooks before. That matters more than people expect. A narrator left alone in a booth will often flatten out over a long book, especially past the halfway point, when fatigue creeps into the pacing without anyone noticing until playback. Direction keeps the energy where it needs to be, chapter after chapter, right through to the final page.</p>
        <p style="margin-top:14px;">We also plan sessions around your book's actual demands rather than a one-size-fits-all schedule. A 60,000-word memoir needs a different studio plan from a 120,000-word fantasy novel with a dozen speaking characters, and treating them the same usually shows up as rushed, uneven audio later on.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c2.5 2.6 3.8 5.7 3.8 9S14.5 18.4 12 21c-2.5-2.6-3.8-5.7-3.8-9S9.5 5.6 12 3Z"></path></svg></div>
        <h3>Audio Book Publishing Services in London</h3>
        <p>Recording the book is only half the job. Once the audio is finished, it needs to reach the platforms where people actually buy and stream audiobooks. We manage:</p>
        <ul style="list-style:none; margin:14px 0 0; padding:0; text-align:left; display:grid; gap:10px;">
          <li style="display:flex; gap:10px; align-items:flex-start;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 auto; width:18px; height:18px; margin-top:4px; color:var(--figma-purple-2);"><path d="M20 6 9 17l-5-5"/></svg><span>Distribution to Audible, Apple Books, Spotify, Kobo, and other major retailers</span></li>
          <li style="display:flex; gap:10px; align-items:flex-start;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 auto; width:18px; height:18px; margin-top:4px; color:var(--figma-purple-2);"><path d="M20 6 9 17l-5-5"/></svg><span>Library and institutional platforms, including OverDrive, for authors who want their book in public libraries</span></li>
          <li style="display:flex; gap:10px; align-items:flex-start;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 auto; width:18px; height:18px; margin-top:4px; color:var(--figma-purple-2);"><path d="M20 6 9 17l-5-5"/></svg><span>Metadata, categories, and keywords, so your book shows up when someone searches for it</span></li>
          <li style="display:flex; gap:10px; align-items:flex-start;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 auto; width:18px; height:18px; margin-top:4px; color:var(--figma-purple-2);"><path d="M20 6 9 17l-5-5"/></svg><span>ISBN guidance for the audio edition, separate from your print or ebook ISBN</span></li>
          <li style="display:flex; gap:10px; align-items:flex-start;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" style="flex:0 0 auto; width:18px; height:18px; margin-top:4px; color:var(--figma-purple-2);"><path d="M20 6 9 17l-5-5"/></svg><span>Basic royalty and reporting guidance, so you understand what to expect from each platform</span></li>
        </ul>
        <p style="margin-top:14px;">We won't pretend every platform pays the same or reaches the same audience. Part of our job is being honest with you about where your book is likely to perform best, based on genre and format.</p>
        <p style="margin-top:14px;">Some authors want to go exclusive with one retailer for better royalty terms and stronger placement in that store's search results. Others would rather be everywhere at once, accepting a smaller cut per sale in exchange for wider reach. Neither approach is wrong. It depends on your goals, your genre, and how much of your audience already listens through a specific app. We'll talk through the trade-offs plainly before you commit either way.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Audio Books, Ebooks Services in London, Together</h3>
        <p>Some authors want to launch both formats at once. Rather than treating your ebook and audiobook as two separate projects, we offer audio books ebooks services in London that keep formatting, cover assets, and metadata consistent across both. That means your book looks and reads as one product, not two rushed jobs stitched together at the last minute.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m10 8 6 4-6 4Z"></path></svg></div>
        <h3>Is there an audiobook service like Netflix in London?</h3>
        <p>We get asked this a lot, usually by authors who've noticed how much listening has shifted towards subscription apps. Audible, Spotify, and Storytel all work a bit like Netflix, in the sense that listeners pay monthly and get access to a large catalogue rather than buying one title at a time.</p>
        <p style="margin-top:14px;">There isn&rsquo;t a single "audiobook Netflix" that owns the whole market. What matters for you as an author is making sure your book is properly set up for whichever subscription platforms suit your genre, with the right keywords, sample length, and cover design to stand out inside a crowded catalogue rather than getting lost in it.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE-FOCUSED PRODUCTION (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- for every age</p>
    <h2>Age-Focused Audiobook Production For Every Listener Group</h2>
    <p style="margin:14px auto 0;">Every audiobook requires a different production approach depending on who it is created for. A children&rsquo;s audiobook needs warmth, expression, and engaging character voices, while adult fiction, memoirs, and non-fiction titles often require a more natural and immersive narration style. We consider the listener&rsquo;s age, attention span, genre expectations, and storytelling needs to create an audiobook experience that feels authentic from the first chapter to the last.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.5-1.4 3-3.1 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.8 0-3 .5-4.5 2C10.5 3.5 9.3 3 7.5 3A5.5 5.5 0 0 0 2 8.5c0 2.4 1.5 4.1 3 5.5l7 7Z"></path></svg></div>
        <h3>Ages 0 To 5: Gentle And Engaging Audiobooks For Young Children</h3>
        <p>For board books and early picture books, narration needs to be warm, expressive, and easy for young listeners to follow. We focus on clear pronunciation, playful pacing, and voices that bring simple stories and characters to life while keeping children engaged throughout shorter listening sessions.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1L12 2Z"></path></svg></div>
        <h3>Ages 5 To 8: Expressive Audiobooks For Early Readers</h3>
        <p>At this stage, children are developing stronger listening skills and beginning to connect with characters and stories independently. We create audiobooks with lively narration, clear storytelling, and carefully controlled pacing to help young listeners follow the plot and enjoy every moment of the journey.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
        <h3>Ages 8 To 12: Character-Driven Audiobooks For Middle Grade Stories</h3>
        <p>Middle-grade fiction often includes longer plots, multiple characters, and more detailed worlds. We focus on professional narration that creates distinct personalities, maintains story momentum, and keeps younger listeners connected through longer chapters and more complex adventures.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3v5ZM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3v5Z"></path></svg></div>
        <h3>Ages 12+: Mature Audiobook Production For Young Adult Stories</h3>
        <p>Young adult audiobooks require a more developed emotional range and a narration style that reflects deeper themes, relationships, and character experiences. We work with voices that feel authentic to teenage audiences while maintaining the professional quality expected across major audiobook platforms.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2Z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7Z"></path></svg></div>
        <h3>Adult Fiction And Non-Fiction: Professional Narration For Every Genre</h3>
        <p>Adult audiobooks require a strong understanding of tone, emotion, and audience expectations. Whether it is a thriller, romance, memoir, business book, or self-help title, we match narration style, pacing, and production quality with the purpose of the book to create a polished listening experience.</p>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The London authors and publishers we create audiobooks for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Authors And Publishers We Create Audiobooks For</h2>
      <p>We work with a wide range of authors and small publishers across London, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Debut authors self-publishing their first book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Established authors moving into audio for the first time</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers without an in-house audio team</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Non-fiction writers, including business books, memoirs, and self-help titles</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Podcasters and content creators turning existing scripts into audiobook form</span></li>
      </ul>
      <p>If your book is finished, or close to it, we can usually find a sensible route into audio, whatever your budget. We also work with authors partway through writing who want to plan the audio edition alongside the print release rather than treating it as an afterthought once the book is already out. Planning both together, even loosely, tends to save time and money later.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE A PROVIDER: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose an Audiobook Provider Without Getting It Wrong</h2>
      <p>This isn't just a sales pitch for us. Before you commit to anyone, including us, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can I hear a full sample of the narrator reading my genre, not just a generic demo reel?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who owns the master recording once the project is finished?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if I'm not happy with the narrator halfway through recording?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is pricing based on finished hours, raw studio hours, or something else entirely?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will the file meet the technical specifications each platform actually requires?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is there a written contract covering rights, royalties, and revisions?</span></li>
      </ul>
      <p>A provider who dodges these questions, or gets vague when you ask them directly, is worth avoiding. A good one will answer plainly, first time.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a trusted audiobook production provider in London" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PROFESSIONAL PRODUCTION MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Production Actually Matters</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of authors think a decent microphone and a quiet room are enough. Sometimes it is, for a short personal project. For a book you're trying to sell, it usually isn't.</p>
    <p style="margin-top:14px;">Listeners are patient with a slow chapter. They are not patient with poor audio quality, inconsistent volume, or a narrator who clearly hasn't read past page one before recording. That's exactly why so many authors end up searching for audio books best audiobook service in London rather than just booking the cheapest studio slot they can find. Production quality is one of the few things listeners actually notice within the first thirty seconds.</p>
    <p style="margin-top:14px;">Getting it right the first time also saves money. Re-recording chapters because of a bad narrator match, or resubmitting files because a platform rejected the specifications costs far more than doing it properly from the start.</p>
    <p style="margin-top:14px;">There's also the question of reviews. Audiobook listeners leave separate reviews for the print or ebook edition, and a large share of them mention narration quality specifically, good or bad. A strong story with weak narration will often pick up lower audio ratings than the same book gets in print, simply because the listening experience lets it down. Treating narration and editing as seriously as the writing itself is usually the difference between the two.</p>
  </div>
</section>

<!-- 9 - OUR PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Audiobook Production Process Explained Step By Step</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Enquiry and Sample</h3></div>
        <div class="svc-step-body"><p>You send us your manuscript, or the section you want narrated. We talk through genre, tone, and whether you want a single narrator or a full cast. If it's useful, we arrange a short paid sample before committing to the whole book.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Casting the Narrator</h3></div>
        <div class="svc-step-body"><p>We put forward a shortlist of narrators who suit your genre and voice the story needs. You listen, you choose. If none of them feel right, we keep looking. This step shouldn't be rushed.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Studio Recording</h3></div>
        <div class="svc-step-body"><p>Recording happens over several sessions, depending on the book's length. A director sits in on the sessions to catch mistakes, inconsistent pacing, or mispronunciations before they become a problem in the edit.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Editing and Quality Check</h3></div>
        <div class="svc-step-body"><p>Every chapter is edited for breaths, mouth noise, pacing, and consistency, then checked against the platform specifications you're aiming for, whether that's Audible's ACX standards or another retailer's requirements.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Publishing and Distribution</h3></div>
        <div class="svc-step-body"><p>Once the audio passes quality control, we handle uploading, metadata, and distribution to your chosen platforms, and confirm everything looks right once it's live.</p></div>
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

<!-- 11 - AUDIOBOOK MARKETING: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- after the launch</p>
      <h2>Best Audio Book Marketing Services in London</h2>
      <p>A finished audiobook that nobody knows exists won't sell many copies. Once your book is live, we help with the marketing side too: sample clips for social media, retailer keyword optimisation, review outreach to audiobook-focused reviewers, and launch timing advice based on your genre.</p>
      <p>If you're after premium audiobook marketing services in London rather than a one-off announcement post, this is the stage where that groundwork gets laid, properly and honestly, without any inflated promises about overnight bestseller status.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Audiobook marketing services in London to help your launch reach listeners" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Audiobook Production Experts</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>&#10003;</span><h3>One point of contact throughout</h3><p>You deal with the same team from your first enquiry to the finished, published file, not a different freelancer at every stage.</p></article>
      <article><span>&#10003;</span><h3>Honest pricing conversations</h3><p>We tell you upfront what drives cost, narrator experience, book length, and how much editing is involved, rather than a flat number that hides what you're actually paying for.</p></article>
      <article><span>&#10003;</span><h3>Local, London-based studio access</h3><p>If you'd like to sit in on sessions or discuss casting in person, that's straightforward to arrange.</p></article>
      <article><span>&#10003;</span><h3>No pressure to over-produce</h3><p>Not every book needs a full cast or elaborate sound design. We'll tell you honestly what your book actually needs, rather than upselling extras it doesn't.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, tailored quote for audiobook production in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Audiobook Production Cost In London?</h2>
      <p>The cost of producing an audiobook depends on several factors, including your book&rsquo;s length, narration style, studio requirements, editing needs, and the level of publishing support you require. Every project is different, so we create a tailored approach based on your goals and the experience you want listeners to have.</p>
      <p>Whether you need a simple professional narration or a complete audiobook production service, we help you understand the options available before moving forward. Our team provides clear guidance on what your project needs without adding unnecessary extras.</p>
      <p>Get in touch to discuss your manuscript and receive a personalised recommendation for your audiobook journey.</p>
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
      <h2>Ready To Transform Your Manuscript Into A Professional <em>Audiobook?</em></h2>
      <p>If you're ready to get your book into audio, or you're still working out whether it's the right time, get in touch. Send us your manuscript or a sample chapter, tell us what you're picturing for the finished audiobook, and we'll talk you through realistic options and timelines. No pressure, no jargon, just a straightforward conversation about what your book needs.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to produce your audiobook in London" loading="lazy" decoding="async">
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

<?php
include 'includes/config.php';

$page_title       = 'Children\'s Audiobooks | Dublin Storytelling Service';
$page_description = 'Discover children\'s audiobooks brought to life in Dublin. Warm, engaging narration that turns bedtime stories into unforgettable listening adventures.';
$canonical_path   = 'childrens-audiobook-service-in-dublin.php';
$breadcrumb_name  = 'Audiobook Production in Dublin';
$breadcrumbs = [
    ['name' => 'Home',                 'url' => page_url('index.php')],
    ['name' => 'Locations',            'url' => page_url('locations/')],
    ['name' => 'Dublin',               'url' => page_url('locations/dublin.php')],
    ['name' => 'Audiobook Production', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to produce an audiobook?',
    'a' => 'Most books take between four and eight weeks from recording to finished, published audio, depending on length and how many rounds of review you need.',
  ),
  1 =>
  array (
    'q' => 'Do you only work with authors based in Dublin, or can you help authors in London too?',
    'a' => 'We work with authors across Ireland and the UK, including London. Recording sessions can be arranged remotely if you can\'t get to our Dublin studio in person.',
  ),
  2 =>
  array (
    'q' => 'Can I choose my own narrator?',
    'a' => 'Yes. We\'ll send you a shortlist of voices that suit your book, and you make the final call before we book any studio time.',
  ),
  3 =>
  array (
    'q' => 'What is the best service for audiobooks in Dublin if I\'ve never published one before?',
    'a' => 'Start with a conversation rather than a booking. A good provider will walk you through the whole process, including narrator choice and platform publishing, before you commit to anything.',
  ),
  4 =>
  array (
    'q' => 'Do you offer a Netflix-style listening experience, or just a plain audio file?',
    'a' => 'We set your audiobook up properly with chapters and platform listings so listeners get a smooth, easy experience, similar to switching on a show and pressing play.',
  ),
  5 =>
  array (
    'q' => 'Can you also handle the ebook version of my book?',
    'a' => 'Yes. If you need both formats to match in tone and structure, we can manage your ebook and audiobook together as one project.',
  ),
  6 =>
  array (
    'q' => 'Do authors in London need to travel to Dublin for recording?',
    'a' => 'No. Most of our London clients work with us entirely over email and video call, and we ship or send finished files digitally once the project is complete.',
  ),
  7 =>
  array (
    'q' => 'Which platforms will my audiobook be available on?',
    'a' => 'We typically publish to Audible, Apple Books, Spotify, and Kobo, and can also prepare a direct-sale file for your own website if you\'d prefer to sell it yourself.',
  ),
  8 =>
  array (
    'q' => 'Do you offer discounts for authors who want both an audiobook and a marketing package?',
    'a' => 'Yes. If you book production and marketing together, we can put together a combined quote that\'s usually better value than booking each separately. Ask us for the details when you get in touch.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Audiobook Production</div>
      <h1>Children's <em>Audiobook Service</em> in <strong>Dublin</strong>: Bedtime Stories Kids Actually Beg For</h1>
      <p class="lead">More people are listening to books than ever before. They listen on the bus, on a run along the Grand Canal, or while doing the washing up. If your book only exists on a page, you are missing all of those readers. That's where we come in.</p>
      <p class="lead">Purple Giraffe Press offers audiobook services in Dublin for authors, small publishers, and businesses who want their words heard, not just read. We handle the whole job, from the first read-through of your script to a finished file ready for Audible, Spotify, or your own website.</p>
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
      <h2>A Clear, Honest Process From Start To Finish</h2>
      <p>We are based here in Dublin, and we know the local voice talent, the local studios, and the local market. You won't be sending your manuscript off to a call centre abroad and hoping for the best. You'll be working with people you can actually meet for a coffee if you want to.</p>
      <p>Whether you have written a novel, a memoir, a business book, or a set of training materials, we can help you turn it into an audiobook that sounds like it was made with care. No upselling you on things you don't need. Just a clear, honest process from start to finish.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Audiobook &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/audiobooks.webp" alt="Children's audiobook service in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - THE CRAFT (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>The Craft Behind An Children’s Audiobook People Love Listening To</h2>
    <p style="margin:14px auto 0;">A lot of people think an audiobook is just someone reading a book out loud into a microphone. There's more to it than that. Good audio takes planning, the right voice, a proper studio, and careful editing afterwards. Here's how we break the work down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v3"></path></svg></div>
        <h3>Recording That Actually Sounds Professional</h3>
        <div class="fc-body">
          <p>This is the heart of the job. We offer audiobook recording services in Dublin using proper studio equipment, not a laptop mic in someone's spare room. A good recording needs:</p>
          <ul>
            <li>A quiet, treated room with no echo or background hum</li>
            <li>A narrator who understands pacing, tone, and character</li>
            <li>Direction during the session, not just a read-and-move-on approach</li>
            <li>Multiple takes were needed, so mistakes don't end up in the final file</li>
          </ul>
          <p>We match your book to a narrator who suits it. A children's story needs a different voice from a business memoir or a thriller. We'll talk you through a few voice options before we book studio time, so you're not stuck with a narrator you're not happy with.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Bringing It All Together</h3>
        <div class="fc-body">
          <p>Recording is only half the job. We also offer audiobook production services in Dublin, which cover everything that happens after the microphone is switched off. This includes:</p>
          <ul>
            <li>Editing out breaths, mouth clicks, coughs, and mistakes</li>
            <li>Levelling the audio so it sounds the same volume throughout</li>
            <li>Adding chapter markers so listeners can jump around easily</li>
            <li>Mastering the file to meet the technical standards that platforms require</li>
          </ul>
          <p>A poorly produced audiobook is easy to spot. The volume jumps between chapters, there are odd pauses, or background noise creeps in. We check every chapter carefully before anything gets sent to you for approval.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c2.5 2.6 3.8 5.7 3.8 9S14.5 18.4 12 21c-2.5-2.6-3.8-5.7-3.8-9S9.5 5.6 12 3Z"></path></svg></div>
        <h3>Getting Your Book Out Into the World</h3>
        <div class="fc-body">
          <p>Once your audiobook is recorded and produced, it needs to actually reach listeners. We provide audiobook publishing services in Dublin, helping you get your finished audio onto the platforms where people actually go looking for their next listen, such as Audible, Apple Books, Spotify and Kobo. We can also prepare files for direct sale on your own website if you'd rather keep more of the profit yourself.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Audio Alongside Your Ebook</h3>
        <div class="fc-body">
          <p>Many authors already have an ebook and want the audio to match it. We handle audiobooks and ebooks services in Dublin too, so your ebook and audiobook stay consistent in tone, cover art and chapter structure. This is useful if you want to launch both formats together or bundle them as one purchase.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12a8 8 0 0 1 16 0"></path><rect x="2" y="12" width="4" height="7" rx="1.6"></rect><rect x="18" y="12" width="4" height="7" rx="1.6"></rect><path d="M20 19v1a3 3 0 0 1-3 3h-3"></path></svg></div>
        <h3>Getting the Voice and Accent Right</h3>
        <div class="fc-body">
          <p>Accent matters more than most authors expect. A story set in Dublin, told in a flat mid-Atlantic accent, can feel oddly off to a listener who knows the city. We keep a pool of narrators with different Irish accents, as well as British and neutral international voices, so your book gets a voice that actually fits its setting and audience. If your readers are mostly in Ireland, a local narrator often makes the book feel more genuine. If you're aiming at a wider international market, we can steer you towards a more neutral tone instead. Either way, you'll hear a sample before anything is locked in, so there are no surprises later.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Choosing The Right Voice For Your Children’s Audiobook Audience</h2>
    <p style="margin:14px auto 0;">Every audiobook needs a voice and style that fits its intended listeners. The narrator, pacing, tone, and delivery all depend on who your book is created for. We help match your audiobook production approach with the right audience.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Children's Audiobooks (Ages 0–12)</h3>
        <div class="fc-body">
          <p>Children's stories often need expressive narration, engaging voices, and a warm delivery that keeps young listeners interested from beginning to end.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Young Adult Audiobooks (Ages 13–18)</h3>
        <div class="fc-body">
          <p>Young adult books require a natural, relatable narration style that connects with teenage listeners while bringing characters and emotions to life.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Adult Fiction And Non-Fiction (Ages 18+)</h3>
        <div class="fc-body">
          <p>Novels, memoirs, business books, and guides need a professional narration style that matches the subject, tone, and expectations of adult listeners.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Choosing the right audience helps us select the ideal narrator, recording style, pacing, and overall audiobook experience so your story reaches listeners in the way it was meant to be heard.</p>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin authors, publishers, and creators we produce audiobooks for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Authors And Creators Bringing Their Words To Audio</h2>
      <p>We work with a wide mix of clients, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Independent authors publishing their first or fifth book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and mid-sized publishers who don't have an in-house studio</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners turning a book, guide or training manual into audio</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Podcasters and content creators who want a polished, book-style audio product</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Nonprofits and organisations recording reports or member materials for accessibility</span></li>
      </ul>
      <p>If you're not sure whether your project fits, just ask us. Chances are we've worked on something similar before.</p>
    </div>
  </div>
</section>

<!-- 7 - CHOOSING A PARTNER -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- choosing a partner</p>
    <h2>Choosing An Audiobook Partner That Understands Your Vision</h2>
  </div>
  <div class="container narrow center">
    <p>Some people type the " best audiobook service in Dublin into a search bar and expect one clear winner to pop up. It doesn't really work that way. The right studio for a children's picture book is not the right studio for a business audiobook or a thriller. What matters more is whether the provider is upfront about pricing, lets you choose your narrator, and keeps you involved at every stage rather than disappearing until the file lands in your inbox.</p>
  </div>
</section>

<!-- 8 - WHY MODERN READERS WANT AUDIO -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it works</p>
    <h2>Why Modern Readers Want Stories They Can Hear</h2>
  </div>
  <div class="container narrow center">
    <p>A good few authors now describe what they want as an audiobook service like Netflix in Dublin. What they usually mean is a smooth, easy way for listeners to find their book, hit play, and keep going without any fuss, much like flicking on a show and getting hooked straight away. We build that kind of listening experience by making sure your audiobook is properly chaptered, easy to sample, and set up correctly on the platforms where binge listeners actually spend their time.</p>
  </div>
</section>

<!-- 9 - QUESTIONS TO ASK: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>Questions To Ask Before Creating Your Children’s Audiobook</h2>
      <p>Not every studio or freelancer offering audio work is worth your money. Before you commit to anyone, ask them:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can I hear a sample of a narrator's voice before booking?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will I get to approve the recording before it's finalised?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if I'm not happy with a chapter?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do you handle publishing to platforms, or just the recording?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is pricing based on my actual word count, or a vague estimate?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who owns the finished audio files once the project is done?</span></li>
      </ul>
      <p>A provider who can't answer these clearly, or who rushes you into signing something, is not one to trust with your book.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's audiobook service in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 10 - WHY AUDIOBOOKS OPEN DOORS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Children’s Audiobooks Are Opening Doors For Authors</h2>
  </div>
  <div class="container narrow center">
    <p>An audiobook isn't just a nice extra. It changes who can access your work and how they experience it.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li><strong>It reaches people who don't have time to sit and read.</strong> Commuters, parents, and busy professionals often listen instead.</li>
      <li><strong>It opens your book up to people with visual impairments or reading difficulties.</strong> Audio removes a real barrier.</li>
      <li>It can bring in a second stream of income from a book you've already written.</li>
      <li><strong>It builds a stronger connection with your reader.</strong> A voice in someone's ear feels more personal than text on a page.</li>
      <li>It helps your book stand out, since plenty of self-published authors still haven't made the jump to audio.</li>
    </ul>
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

<!-- 12 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Your Journey From Manuscript To Finished Children’s Audiobook</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>We Talk About Your Book</h3></div>
        <div class="svc-step-body"><p>We start with a short conversation, or an email if that suits you better, about your manuscript, your budget, and what you want the finished audiobook to sound like.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>You Pick a Narrator</h3></div>
        <div class="svc-step-body"><p>We send you a shortlist of narrator samples that suit your book's tone and genre. You choose the voice that feels right, or ask us for more options.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Record</h3></div>
        <div class="svc-step-body"><p>Studio time is booked, and your narrator records the full manuscript, with direction from our team to keep pacing and tone consistent throughout.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>We Edit and Master</h3></div>
        <div class="svc-step-body"><p>Our editors clean up every chapter, remove mistakes and background noise, and master the audio to the technical standard required by major platforms.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>You Review and Approve</h3></div>
        <div class="svc-step-body"><p>We send you the finished chapters to listen to. If anything needs a small fix, we sort it before final delivery.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>We Publish or Hand Over Your Files</h3></div>
        <div class="svc-step-body"><p>Depending on what you've asked for, we upload your audiobook to your chosen platforms or hand you the finished files ready for you to distribute yourself.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 13 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Bring Their Children’s Stories To <em>Purple Giraffe</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We're local</h3><p>You're dealing with a Dublin-based team, not a call centre in another time zone.</p></article>
      <article><span>✓</span><h3>We explain things plainly</h3><p>No confusing jargon about codecs and loudness units unless you actually want the detail.</p></article>
      <article><span>✓</span><h3>You stay in control</h3><p>You approve the narrator, the sample recording, and the final files before anything is published.</p></article>
      <article><span>✓</span><h3>We keep pricing honest</h3><p>You'll get a quote based on your actual manuscript, not a rough guess.</p></article>
      <article><span>✓</span><h3>We handle the whole job</h3><p>We handle the whole job, from recording through to getting your book listed and ready to sell.</p></article>
    </div>
  </div>
</section>

<!-- 14 - TESTIMONIALS -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 15 - REACHING THE RIGHT LISTENERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- getting heard</p>
    <h2>Helping Your Children’s Audiobook Reach The Right Listeners</h2>
  </div>
  <div class="container narrow center">
    <p>Recording a great audiobook is only useful if people actually find it. A quiet corner of Purple Giraffe Press works on getting your finished audio noticed by the right listeners. If you're after the best audiobook marketing services in Dublin, we can help with things like platform optimisation, review outreach, social clips taken from your recording, and email campaigns aimed at people who already read in your genre.</p>
    <p style="margin-top:14px;">For authors with a bigger launch in mind, we also offer premium audiobook marketing services in Dublin, which go further with a proper release plan, targeted advertising, and coordinated promotion across your ebook, audiobook, and print editions together. We'll talk you through what level of marketing actually makes sense for your book and your budget, rather than selling you everything at once.</p>
  </div>
</section>

<!-- 16 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for a children's audiobook in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Understanding What Shapes Your Children’s Audiobook Cost</h2>
      <p>Every audiobook is different. A 60,000-word novel takes longer to record and edit than a 20,000-word guide, so we can't give you one flat price that fits everyone. Costs generally depend on a few things: how long your manuscript is, whether you need one narrator or several voices for dialogue-heavy fiction, and how much editing and directing time the recording needs. A straightforward nonfiction guide with one narrator is usually quicker and cheaper to produce than a long novel with multiple characters and accents.</p>
      <p>We don't ask you to pay for anything you don't need. If your book is short, your quote reflects that. Once we know your word count, genre, and how many voices you need, we'll put together a clear quote with no hidden extras. Get in touch, and we'll have a figure back to you within a few days.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 17 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 18 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 19 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Let Your Words Be <em>Heard Beyond The Page</em></h2>
      <p>If you've been sitting on a manuscript wondering whether audio is worth it, get in touch with Purple Giraffe Press. Send us your manuscript, tell us a bit about your book, and we'll walk you through what a finished audiobook could sound like. No pressure, no hard sell, just a straight answer about what's involved and what it would cost.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to record your children's audiobook in Dublin" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 20 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 21 - FOOTER -->
<?php include 'includes/footer.php'; ?>

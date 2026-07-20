<?php
include 'includes/config.php';

$canonical_path   = 'childrens-book-audiobook-production-services-in-queensland.php';
$breadcrumb_name  = 'Audiobook Production in Queensland';
$breadcrumbs = [
    ['name' => 'Home',                 'url' => page_url('index.php')],
    ['name' => 'Locations',            'url' => page_url('locations/')],
    ['name' => 'Queensland',           'url' => page_url('locations/queensland.php')],
    ['name' => 'Audiobook Production', 'url' => page_url($canonical_path)],
];

$page_title       = 'Children\'s Audiobook Production, Made in Queensland';
$page_description = 'Bring your children\'s book to life with expert audiobook production in Queensland. Skilled narration and sound quality tailored to your story\'s genre.';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to produce an audiobook in Queensland with Purple Giraffe Press?',
    'a' => 'It depends on the length of your book and the narrator\'s schedule, but most projects take a few weeks from recording start to final files. We will give you a realistic timeline once we have reviewed your manuscript.',
  ),
  1 =>
  array (
    'q' => 'Do I need to be based in Queensland to use your audiobook services?',
    'a' => 'No. While we are proud to offer audiobook services in Queensland and work closely with local authors, we can also work with clients from other states; all recording and reviews happen remotely or in the studio as needed.',
  ),
  2 =>
  array (
    'q' => 'Can I choose my own narrator, or do I have to use one you suggest?',
    'a' => 'You can do either. We can put forward narrators who suit your book, or if you already have someone in mind, we are happy to work with them as long as they meet our recording standards.',
  ),
  3 =>
  array (
    'q' => 'What if I want to narrate my own audiobook?',
    'a' => 'That\'s completely possible. Many memoir and non-fiction authors prefer to narrate their own work. We provide coaching and studio time to help you record a clean, confident version of your book.',
  ),
  4 =>
  array (
    'q' => 'Will my audiobook be available on Audible and Spotify?',
    'a' => 'Yes, we prepare and submit your files to the major platforms, including Audible, Apple Books, and Spotify, based on where you want your book listed.',
  ),
  5 =>
  array (
    'q' => 'Do you also help with the ebook version of my book?',
    'a' => 'Yes. If you want both formats ready together, we can produce your audiobook and ebook side by side, rather than treating them as separate projects.',
  ),
  6 =>
  array (
    'q' => 'What happens if I\'m not happy with a chapter once it\'s recorded?',
    'a' => 'You review the audiobook before it\'s published, and if something isn\'t right, we go back and fix it at that stage. Nothing goes live without your sign-off first.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Audiobook Production</div>
      <h1>Give Your Story a Voice <em>Little Ears Will Love,</em> Children's Audiobook Production, Made in <strong>Queensland</strong></h1>
      <p class="lead">Your book took months, maybe years, to write. It deserves more than sitting quietly on a shelf. More and more readers across Queensland are choosing to listen instead of read, and if your book isn't available as an audiobook, you are missing them.</p>
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
      <p>Purple Giraffe Press helps authors and publishers turn manuscripts into audiobooks that sound warm, clear, and professional. We handle the narration, the editing, and the final files, so your book is ready for Audible, Apple Books, Spotify, and every other major platform.</p>
      <p>Whether you have written a novel, a memoir, a business book, or a children's story, we can help you get it into listeners' ears. We work with independent authors, small publishers, and businesses who want their content heard, not just read.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/audiobooks.webp" alt="Children's audiobook production in Queensland at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE PRODUCE (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we can do</p>
    <h2>Complete Queensland Audiobook Production From Manuscript to Distribution</h2>
    <p style="margin:14px auto 0;">We provide complete audiobook production services in Queensland, managing every stage from the initial manuscript review to the final approved audio files. You will not need to coordinate separate narrators, engineers, editors, and distributors. Our team keeps the entire production process organised under one roof, giving you consistent quality, clear communication and one reliable point of contact throughout your project.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Voice Casting and Professional Narration</h3>
        <div class="fc-body">
          <p>The right narrator helps listeners connect with your characters, message, and overall story. We help you choose a voice that suits your genre, audience and preferred tone, whether your book needs warmth, authority, humour or dramatic energy. Options include a single narrator, a multi-voice cast, or an author-narrated recording with guidance and coaching from our production team.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Professional Audiobook Studio Recording</h3>
        <div class="fc-body">
          <p>Once the narrator is selected, we record your audiobook in controlled studio conditions with experienced sound engineers. This prevents background noise, room echo, and inconsistent volume from affecting the listening experience. Each session is monitored as it happens, allowing mistakes to be corrected early. We also maintain a pronunciation guide for names, locations, and technical terms throughout the recording.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Audiobook Editing, Mixing, and Mastering</h3>
        <div class="fc-body">
          <p>Raw narration needs careful editing before it is ready for listeners or distribution platforms. Our editors remove distracting sounds, loud breaths, repeated lines, and unnatural pauses while keeping the performance smooth and authentic. We balance volume levels across every chapter and master the final files to meet the technical requirements of Audible and other leading audiobook retailers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Audiobook Publishing and Digital Distribution</h3>
        <div class="fc-body">
          <p>Producing a strong audiobook is only valuable when listeners can easily find and purchase it. Our audiobook publishing services in Queensland prepare your completed files for submission to selected retailers, libraries, and streaming platforms. We can also format your audiobook cover, refine the book description, and check every file to ensure it meets the required publishing specifications.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Combined Audiobook and Ebook Packages</h3>
        <div class="fc-body">
          <p>Authors planning a wider release can produce their audiobook and ebook together through one coordinated service. Our audiobook and ebook services in Queensland keep both formats aligned in style, branding and launch timing. We prepare the narrated edition alongside a properly formatted digital book, helping you reach readers who prefer listening as well as those who enjoy reading on their devices.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AUDIO FOR EVERY READING AGE -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Audiobook Production for Every Children’s Reading Age Group</h2>
    <p style="margin:14px auto 0;">Children’s audiobooks need different narration styles, pacing, and production choices depending on the listener’s age. We adapt the voice performance, chapter length, pronunciation, and sound design around the audience your book is written for. This helps the finished audiobook remain clear, engaging, and appropriate for young listeners.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-7-4.35-9-8.5A5.2 5.2 0 0 1 12 7a5.2 5.2 0 0 1 9 5.5C19 16.65 12 21 12 21Z"></path></svg></div>
        <h3>Ages 0–3: Gentle Audio for Babies and Toddlers</h3>
        <div class="fc-body">
          <p>Audiobooks for babies and toddlers need warm narration, simple language, and a calm, steady rhythm. We focus on clear repetition, expressive delivery, and comfortable pacing that supports shared listening with parents or carers. Light music or subtle sound effects can also be included where they add value without overwhelming the story.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 3–5: Playful Audio for Preschool Listeners</h3>
        <div class="fc-body">
          <p>Preschool stories benefit from lively narration, memorable character voices, and clear emotional expression. We help select a narrator who can keep young listeners engaged while making the story easy to follow. Sound effects and music can be used carefully to support imaginative scenes, humour, and repeated moments within the book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Ages 6–8: Clear Audiobooks for Early Independent Readers</h3>
        <div class="fc-body">
          <p>Early reader audiobooks need a balance of energy, clarity, and manageable pacing. We produce narration that supports children following along with the printed or ebook edition while keeping the performance entertaining. Distinct character voices, clear chapter breaks, and accurate pronunciation help young listeners stay connected to the story.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 8–12: Immersive Audio for Middle-Grade Readers</h3>
        <div class="fc-body">
          <p>Middle-grade audiobooks can include deeper characters, longer chapters, and more detailed story worlds. We choose narration styles that build atmosphere, tension, and emotional connection without sounding too young. For adventure, mystery, or fantasy projects, multi-voice narration and subtle sound design can create a more immersive listening experience.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Not sure which narration style suits your target age group? We can review your manuscript, themes, vocabulary, and intended listeners before production begins. Our team will recommend the most suitable narrator, pacing, and audio approach for your children’s book.</p>
  </div>
</section>

<!-- 6 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Queensland authors and publishers we produce audiobooks for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Queensland Audiobook Production Services Are Designed For</h2>
      <p>Our clients are a mixed bunch, and that's exactly how it should be. We've worked with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors publishing their debut novel</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Established writers adding audio to their back catalogue</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers with several titles to produce</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners turning guides, training material, or company stories into audio</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and educators producing children's audio content</span></li>
      </ul>
      <p>If you have a finished manuscript, or one close to finished, we can talk you through what's realistic for your project and your budget.</p>
      <p>We also get asked about series and box sets. If you have more than one book in a series, we can plan recording across the whole set with the same narrator, so listeners get a consistent voice from book one right through to the final instalment. This tends to work out more efficiently than treating each title as a completely separate project, and it keeps the sound of your series consistent for returning listeners.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Pick an Audiobook Producer in Queensland</h2>
      <p>Not every audiobook company operates the same way, and it pays to ask a few questions before you commit. Here's what's worth checking with any provider, not just us:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they let you hear a sample of the narrator before you commit to the full book?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are editing and mastering included, or charged as extras later?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain which platforms your audiobook will be listed on, and how royalties or payment work?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you get to review the finished files before they go live?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is there a clear timeline in writing, so you know roughly when your audiobook will be ready?</span></li>
      </ul>
      <p>A provider who answers these plainly, without dodging, is usually one you can trust with your book.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="What to check before choosing an audiobook producer in Queensland" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY AUDIOBOOKS REACH MORE READERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Audiobooks Help More Readers Discover Your Book</h2>
  </div>
  <div class="container narrow center">
    <p>It's easy to think of an audiobook as a nice extra. In practice, it often changes how many people actually experience your work.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Commuters, tradies, and parents doing school runs often listen instead of read, simply because reading a physical book doesn't fit their day</li>
      <li>Audiobooks open your book up to people with vision impairment or reading difficulties who might never pick up the print version</li>
      <li>A well-produced audiobook can extend the life of an older title, giving it a second release moment</li>
      <li>Listeners often finish audiobooks that they might have put down as a physical book, because listening fits around driving, walking, or housework</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>People sometimes ask us about an audiobook service like Netflix in Queensland, meaning a subscription model where listeners pay monthly and get access to a library of titles. Platforms such as Audible and Spotify already work this way for audiobooks, and part of our publishing process is making sure your book is properly set up to appear inside those subscription catalogues, not just sold as a one-off purchase.</p>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Audiobook Production Process: From Manuscript to Final Launch</h2>
    <p style="margin:14px auto 0;">Getting your book turned into an audiobook doesn't need to be complicated. Here's how it usually goes with us.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You share your finished manuscript, along with any notes on tone, pacing, or characters we should know about. We read through it and let you know if anything needs a small edit before recording, like formatting issues or unclear dialogue tags.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: Choose Your Narrator</h3></div>
        <div class="svc-step-body"><p>We put forward a shortlist of narrators who suit your book, with short voice samples for each. You pick the one that feels right. If you want to narrate it yourself, we can set up coaching sessions instead.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: Recording Begins</h3></div>
        <div class="svc-step-body"><p>Your narrator records in a proper studio setting, with an engineer monitoring every session. We work chapter by chapter, so review can happen along the way rather than all at once at the end.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: Editing and Mastering</h3></div>
        <div class="svc-step-body"><p>Once recording wraps, our editors clean up every chapter and master the full file to meet retailer standards. This is also where we check pacing and consistency across chapters.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: Your Review</h3></div>
        <div class="svc-step-body"><p>You get to listen to the finished audiobook before anything is published. If something needs adjusting, we fix it at this stage, not after launch.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Step 6: Publishing and Launch</h3></div>
        <div class="svc-step-body"><p>Once you're happy, we prepare your files and cover art for distribution and submit them to the platforms you have chosen. We can also advise on listing details like keywords and categories so your book is easier for the right listeners to find.</p></div>
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

<!-- 11 - MARKETING: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Audiobook marketing support for Queensland authors" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- getting heard</p>
      <h2>Smart Audiobook Marketing That Helps More Listeners Find You</h2>
      <p>Recording and publishing your audiobook is a big step, but getting it noticed is its own job. We offer support here too, for authors who want it.</p>
      <p>Our approach to audio books best service in Queensland, thinking doesn't stop at production. We also help with listing optimisation, so your audiobook description and sample clip actually encourage a click. For authors who want more, we can be one of the best audiobook marketing services in Queensland for your launch, including guidance on pricing strategy, review requests, and cross-promotion between your ebook, print, and audio editions.</p>
      <p>Marketing doesn't need to be expensive or complicated to work. Sometimes it's as simple as making sure your sample clip opens with your strongest chapter, or timing your launch around a school holiday period when more people are commuting or travelling. We talk through these small, practical steps with every client, rather than assuming a big paid campaign is the only option.</p>
      <p>Some clients want a lighter touch, just the basics done properly. Others are after our premium audiobook marketing services in Queensland, which include more hands-on support around launch week, listing reviews across platforms, and ongoing check-ins after release to see how the audiobook is performing. We tailor this to what actually suits your book and your budget, rather than selling one fixed package to everyone.</p>
      <p>If you're simply after the best service for audiobooks in Queensland without a big marketing add-on, that's completely fine too. Plenty of our clients just want a well-produced, properly published audiobook and nothing more, and that's a perfectly reasonable way to work with us.</p>
    </div>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Queensland Authors Trust <em>Purple Giraffe Press</em> for Audiobooks</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Straightforward, upfront pricing.</h3><p>No surprise invoices once recording has already started. You know the scope and cost before you sign off.</p></article>
      <article><span>✓</span><h3>One team, one point of contact.</h3><p>You are not passed between five separate freelancers. The same team stays on your project from manuscript to final file.</p></article>
      <article><span>✓</span><h3>Local understanding.</h3><p>We are based here and work with Queensland authors regularly, so we understand the local writing community and what local readers and listeners expect.</p></article>
      <article><span>✓</span><h3>Honest advice, not a hard sell.</h3><p>If audio isn't the right move yet for your book, or if a smaller first run makes more sense, we will tell you that instead of pushing a bigger package.</p></article>
      <article><span>✓</span><h3>Review built into every stage.</h3><p>You are not waiting until the very end to hear how things sound. You get to weigh in as we go.</p></article>
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
<!-- 15 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for audiobook production in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Clear Audiobook Pricing Based on Your Book and Goals</h2>
      <p>Every audiobook is different, so we don't quote a flat rate on this page. Cost depends on things like the length of your manuscript, how many narrators are involved, and whether you want marketing support included. Once we have read your manuscript and understood what you're after, we can give you a clear, itemised quote with no hidden extras. There's no pressure to commit before you have that number in front of you.</p>
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
$location_services_heading = 'Other Services to Support Your Queensland Book Process';
$location_services_intro   = 'We built our service list around the real gaps that stop authors from finishing and launching their books. Here is what falls under our roof.';
$location_services_section = 'section figma-cream';
include 'includes/location-services.php';
?>

<!-- 17 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 18 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Turn Your Book Into an <em>Audiobook?</em></h2>
      <p>If you have a manuscript sitting on your desk, or a finished book that's only ever existed on the page, get in touch. Send it through, tell us a bit about your book, and we will come back with honest advice on what an audiobook version could look like and what it would cost.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to record your children's audiobook" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 19 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 20 - FOOTER -->
<?php include 'includes/footer.php'; ?>

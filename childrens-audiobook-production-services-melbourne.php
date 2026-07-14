<?php
include 'includes/config.php';

$page_title       = 'Children\'s Audiobook Production Services Melbourne';
$page_description = 'Professional children\'s audiobook production services in Melbourne. Expert narration, editing, and mastering to bring young readers\' stories to life.';
$canonical_path   = 'childrens-audiobook-production-services-melbourne.php';
$breadcrumb_name  = 'Audiobook Production in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'Melbourne',   'url' => page_url('locations/melbourne.php')],
    ['name' => 'Audiobook Production', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does children’s audiobook production take in Melbourne?',
    'a' => 'Audiobook production in Melbourne depends on the length of your book, the narrator’s availability, and the level of editing required. Most projects take a few weeks from recording to final delivery. Once we review your manuscript, we will give you a realistic timeline for your Melbourne audiobook project.',
  ),
  1 =>
  array (
    'q' => 'Do I need to have an ebook or print book finished before starting children’s audiobook production in Melbourne?',
    'a' => 'No. You can start audiobook production in Melbourne with just a completed manuscript. Many authors choose to produce their audiobook alongside their print or ebook release, but your book does not need to be published first.',
  ),
  2 =>
  array (
    'q' => 'Can I choose my own narrator for an children’s audiobook in Melbourne?',
    'a' => 'Yes. For Melbourne audiobook projects, we suggest narrators who suit your book’s tone, genre, and audience. We send you voice samples to review, but the final narrator choice is always yours.',
  ),
  3 =>
  array (
    'q' => 'Do you offer an children’s audiobook service like Netflix in Melbourne?',
    'a' => 'Not exactly, but we understand why some Melbourne authors and publishers are interested in subscription-style audiobook models. If you are building a catalogue of titles and want to explore streaming, subscriptions, or ongoing listener access, we can talk you through what may be possible.',
  ),
  4 =>
  array (
    'q' => 'What if I am not happy with my Melbourne audiobook recording?',
    'a' => 'We include review stages during the audiobook production process, so you can flag any concerns before the full project is completed. For Melbourne authors, this means small adjustments can be made early, helping the final recording feel polished, clear, and aligned with your book.',
  ),
  5 =>
  array (
    'q' => 'Do you help with audiobook marketing in Melbourne after production?',
    'a' => 'Yes. We offer audiobook marketing support in Melbourne to help your finished audiobook reach more listeners. This can include launch guidance, audiobook descriptions, sample clip advice, and support with presenting your book across different platforms.',
  ),
  6 =>
  array (
    'q' => 'Can you convert an existing print book into both an audiobook and an ebook in Melbourne?',
    'a' => 'Yes. We regularly help Melbourne authors turn existing print books into audiobooks and ebooks. This gives readers more ways to enjoy your book, whether they prefer listening, reading digitally, or buying a physical copy.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Audiobook Production</div>
      <h1>Turning Storybooks into Listening Adventures: Melbourne <em>Children's Audiobook Production</em></h1>
      <p class="lead">You have written a book. Maybe it took you years. Maybe it is sitting on your desk right now, finished but not yet in the hands of readers who could be listening to it on their commute, at the gym, or before bed.</p>
      <p class="lead">That is where we come in. Purple Giraffe Press helps authors turn their finished manuscripts into audiobooks people actually want to listen to. We offer audiobook services in Melbourne for authors, small publishers, and businesses who want their words spoken clearly and recorded well.</p>
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
      <h2>We Are Not A Big Faceless Studio.</h2>
      <p>We work with you directly, from the first phone call to the final file. You will always know who is working on your book and what stage it is at.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Audiobook &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/audiobooks.webp" alt="Children's audiobook production services in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - AUDIOBOOK SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Complete Children’s Audiobook Production Services in Melbourne</h2>
    <p style="margin:14px auto 0;">Audiobook production has a lot of moving parts. Here is how we break it down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Script and Manuscript Prep</h3>
        <p>Before anyone picks up a microphone, your manuscript needs a once-over. We check pacing, flag anything that reads awkwardly out loud, and prepare a clean script for the narrator to follow. This step catches problems early, before they cost you studio time.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2M12 19v3"></path></svg></div>
        <h3>Professional Voice Recording</h3>
        <p>This is the heart of the job. We offer audiobook recording services in Melbourne with a small pool of trained narrators, so you can choose a voice that actually fits your story. Whether it is fiction, memoir, business, or non-fiction, we match tone and pace to the content, not just to whoever is free that week.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Editing and Sound Cleanup</h3>
        <p>Raw recordings always need work. We remove breath sounds, clicks, and background noise. We balance levels, so listeners are not reaching for the volume dial every few minutes. We also check for consistency across chapters, so the whole book sounds like one project, not ten separate files stitched together.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c2.5 2.6 3.8 5.7 3.8 9S14.5 18.4 12 21c-2.5-2.6-3.8-5.7-3.8-9S9.5 5.6 12 3Z"></path></svg></div>
        <h3>Publishing and Distribution</h3>
        <p>Once your audiobook is recorded and polished, we help you get it out into the world. Our audiobook publishing services in Melbourne cover formatting for platforms like Audible, Apple Books, and Spotify, along with the technical file requirements each one demands. We handle the paperwork side too, so you are not stuck reading platform guidelines at midnight.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Audiobooks and Ebooks, Working Together</h3>
        <p>Many authors want more than one format. We also provide audio books ebooks services in Melbourne, so your readers can choose how they want to experience your book. Some people love the printed page, others want to listen on the way to work, and plenty of readers want both, sitting in their library. Having both formats ready at launch often means a wider audience from day one, and it saves you from managing two separate projects with two separate teams later on.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The authors, publishers, and creators we produce audiobooks for in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Children’s Audiobook Services for Authors, Publishers, and Creators</h2>
      <p>We take on projects from a range of people, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors releasing their debut book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Established authors adding audio to their back catalogue</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners with training material, guides, or company stories</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Podcasters and content creators branching into long-form audio</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Community organisations and non-profits with stories to share</span></li>
      </ul>
      <p>If you are not sure whether your project fits, just ask. We would rather have a quick chat than leave you guessing.</p>
      <p>We also work with authors who have already tried a self-recorded audiobook and were not happy with how it turned out. If that sounds familiar, you are not alone. A lot of people underestimate how much equipment, editing skill, and sheer patience go into a clean, professional recording. Coming to us after a first attempt is common, and we can usually tell you quickly whether the existing recording is worth saving or whether it makes more sense to start again with a trained narrator.</p>
    </div>
  </div>
</section>

<!-- 6 - WHY AUTHORS CHOOSE OUR TEAM: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>Why Authors Choose Our Melbourne Children’s Audiobook Production Team</h2>
      <p>Not every audiobook producer works the same way, and the differences matter more than people expect. When you are comparing options, look for:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A studio that lets you hear a sample of the narrator before committing</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Clear pricing with no surprise add-ons halfway through</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Real editing, not just a raw recording bounced back to you</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Someone who explains the publishing side, not just the recording side</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A team that treats your book like it matters, not like another file on a list</span></li>
      </ul>
      <p>We built our process around these points because we have seen what happens when they are missing. Rushed recordings, muddy audio, and authors left to figure out distribution alone. That is not how we work.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a Melbourne children's audiobook production team" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY PROFESSIONAL PRODUCTION MATTERS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Children’s Audiobook Production Can Make or Break Listener Experience</h2>
  </div>
  <div class="container narrow center">
    <p>A book and an audiobook are not the same experience. Reading lets you set your own pace and picture things your own way. Listening is different. The narrator’s voice, the pauses, the tone, all of that shapes how the story lands.</p>
    <p style="margin-top:14px;">Get it wrong, and even a great book can feel flat in audio form. A narrator who rushes, or reads in a flat monotone, can lose a listener within minutes. Some of the details that matter most:</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>Matching narrator voice to the mood of the book</li>
      <li>Getting pacing right so dialogue feels natural, not stilted</li>
      <li>Handling accents, names, and technical terms consistently</li>
      <li>Keeping audio quality even across long recording sessions</li>
      <li>Making sure chapter breaks and transitions feel smooth to the ear</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This is why audiobook production is its own skill, separate from writing or even reading aloud. It takes practice, the right equipment, and someone paying close attention to detail from start to finish.</p>
    <p style="margin-top:14px;">Fiction and non-fiction bring different challenges too. A novel might need several character voices handled by one narrator, while a business book might need a narrator who can keep technical language sounding natural instead of stiff. A memoir often needs a narrator who can carry real emotion without overdoing it. We think about these differences before recording starts, not after we notice a problem in the finished file.</p>
  </div>
</section>

<!-- 8 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children’s Audiobook Production Process: From Manuscript to Launch</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You share your finished manuscript with us, along with any notes on tone, pacing, or narrator preference. We will ask a few questions to understand what you are after.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Clear Quote</h3></div>
        <div class="svc-step-body"><p>We look at word count, complexity, and your timeline, then send you a straightforward quote. No hidden fees, no vague estimates.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Narrator Selection and Recording</h3></div>
        <div class="svc-step-body"><p>We shortlist narrators who suit your book and send you samples to choose from. Once you have picked one, recording begins.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Editing and Review</h3></div>
        <div class="svc-step-body"><p>We edit the raw recordings, clean up the audio, and send you sections to review along the way. Your feedback shapes the final result.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Delivery and Publishing Support</h3></div>
        <div class="svc-step-body"><p>Once everything is approved, we deliver your finished audiobook files and help you get them onto the platforms of your choice.</p></div>
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
    <h2>Benefits of Hiring a Specialist Children’s Audiobook Production Company</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You save time.</strong> Coordinating narrators, editing audio, and formatting for platforms is a full-time job on its own. We handle it so you can focus on writing your next book.</li>
      <li><strong>You get consistent quality.</strong> Every chapter is checked against the others, so your audiobook does not sound like it was made by five different people.</li>
      <li><strong>You avoid costly mistakes.</strong> Wrong file formats or missed platform requirements can delay a launch by weeks. We know the requirements because we deal with them every day.</li>
      <li><strong>You keep creative control.</strong> You review narrator samples, hear draft recordings, and approve the final product before anything goes live.</li>
      <li><strong>You get honest advice.</strong> If something about your manuscript will not translate well to audio, we will tell you early, not after you have paid for a full recording.</li>
    </ul>
  </div>
</section>

<!-- 11 - AUDIOBOOK MARKETING: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-soft">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- after the launch</p>
      <h2>Children’s Audiobook Marketing Services to Help Your Launch Reach Listeners</h2>
      <p>Recording a great audiobook is only half the job. People still need to find it. We offer some of the best audiobook marketing services in Melbourne for authors who want their launch to actually reach listeners, not just sit unnoticed on a platform.</p>
      <p>This might include help with your audiobook description and sample clip, guidance on where to promote your launch, and advice on timing your release around other marketing efforts like your ebook or print launch. Our premium audiobook marketing services in Melbourne are built around your book specifically, not a generic template we reuse for every client. We look at who your book is actually for, then build a launch plan that speaks to that audience, rather than casting a wide net and hoping something sticks.</p>
      <p>We are also hearing from more authors and small publishers who like the idea of a subscription model for listeners, something where people sign up and get a steady stream of new titles rather than buying one book at a time. If that is a direction you are considering for your catalogue, we can talk through what that would take.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Children's audiobook marketing services in Melbourne" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 12 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Work With <em>Purple Giraffe Press</em> for Children’s Audiobook Production</h2>
      <p>Authors who have worked with us often say we are the best audiobook service in Melbourne for exactly this reason. We keep things personal, even as the project moves through each stage.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise; we do not just generalise</h3><p>Audiobook production is a core part of what we do, not an add-on to a dozen other services.</p></article>
      <article><span>✓</span><h3>Upfront pricing, always</h3><p>You will know the cost before we start, not after.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>You are working with a local team that understands the Australian market and Australian voices.</p></article>
      <article><span>✓</span><h3>We treat your work with care</h3><p>Your book took real effort to write. We do not rush the audio version.</p></article>
      <article><span>✓</span><h3>Communication stays simple</h3><p>You will always know what stage your project is at and who to contact with questions.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's audiobook production in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Children’s Audiobook Production Cost in Melbourne?</h2>
      <p>Pricing depends on a few things: the length of your manuscript, the narrator you choose, how much editing the raw audio needs, and whether you want extra services like ebook formatting or marketing support.</p>
      <p>We do not believe in quoting a number before we have actually looked at your project. Once we have your manuscript and a sense of what you are after, we will send a clear, written quote. You will know exactly what is included before you agree to anything.</p>
      <p>If budget is a concern, tell us early. We can usually suggest ways to adjust the scope, such as recording in stages or holding off on marketing support until after launch, so the project still fits within what you can spend.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 15 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Our most popular services</h2>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Create Your Audiobook With a Melbourne <em>Production Team?</em></h2>
      <p>If your book is ready and you are thinking about audio, get in touch with Purple Giraffe Press. Send us your manuscript, tell us a bit about your book, and we will walk you through what comes next. No pressure, no confusing jargon, just a straightforward conversation about turning your story into something people can listen to.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to produce your children's audiobook" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 18 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 19 - FOOTER -->
<?php include 'includes/footer.php'; ?>

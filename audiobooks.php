<?php
include 'includes/config.php';

$page_title       = 'Children\'s Audiobook Production Services in Australia';
$page_description = 'Professional children\'s audiobook production services in Australia. Expert narration, editing, and mastering to bring young readers\' stories to life.';
$canonical_path   = 'audiobooks.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to produce an children’s audiobook?',
    'a' => 'It depends on the length of your book and the narrator’s schedule, but most projects take a few weeks from recording through to final delivery. We will give you a clear timeline once we see your manuscript, and we will keep you updated at each stage along the way.',
  ),
  1 =>
  array (
    'q' => 'Do I need to choose the narrator myself?',
    'a' => 'No. We suggest narrators who suit your genre and send you a sample recording first, so you can hear the voice before committing to full production.',
  ),
  2 =>
  array (
    'q' => 'Can you help with audiobooks for children’s picture books as well as novels?',
    'a' => 'Yes. We work across genres, including children’s books, fiction, and non-fiction. Each type of book gets a narration style suited to its audience.',
  ),
  3 =>
  array (
    'q' => 'What if I already have an ebook version of my children’s book?',
    'a' => 'That is not a problem. Our audiobooks and ebooks services are designed to complement your existing ebook, giving readers another way to enjoy the same story.',
  ),
  4 =>
  array (
    'q' => 'Do you offer marketing help once the audiobook is finished?',
    'a' => 'Yes. Alongside production, we can talk you through the best audiobook marketing services and premium audiobook marketing services options, so your finished book actually reaches listeners.',
  ),
  5 =>
  array (
    'q' => 'What file formats will I receive at the end?',
    'a' => 'You will receive your finished audiobook in the formats required by major audiobook platforms, with correct chapter markers and consistent sound levels throughout.',
  ),
  6 =>
  array (
    'q' => 'Is this only for authors, or do you work with publishers too?',
    'a' => 'Both. We work with individual authors publishing their first audiobook, as well as publishers and small presses looking to add audio versions across their catalogue. No project is too small or too large for us to take on properly.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Audiobooks</div>
      <h1>From Page to Voice: Children's <em>Audio Book Production</em> in <strong>Australia</strong></h1>
      <p class="lead">You have written a great book. Maybe it is already out as an ebook or in print. But more and more readers want to listen instead of read. They want the story in their ears while they drive, walk the dog, or do the dishes.</p>
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
      <h2>Your book sounds as good as it reads</h2>
      <p>That is where we come in. Purple Giraffe Press turns manuscripts into finished audiobooks for authors, publishers, and small presses across Australia. We handle the recording, editing, and polishing so your book sounds as good as it reads.</p>
      <p>You do not need any technical knowledge. You do not need your own studio or equipment. You just need a story worth telling, and we will help you tell it in sound.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/audiobooks.webp" alt="Children's audiobook production at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE OFFER (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Complete Children’s Audiobook Production Services for Authors in Australia</h2>
    <p style="margin:14px auto 0;">We break the process into clear stages, so you always know what is happening with your book and why.</p>
    <p style="margin:14px auto 0;">Every book is different, so we do not force your story through a rigid template. A picture book needs a different approach to a business memoir, and we adjust our process to suit.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Script and Manuscript Preparation</h3>
        <div class="fc-body">
          <p>Before any recording starts, we look at your manuscript and prepare it for narration. This means checking for anything that reads fine on a page but sounds odd out loud, such as long lists, footnotes, or repeated names. We flag anything that might trip up a narrator and fix it with you before recording day.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M5 21a7 7 0 0 1 14 0"></path></svg></div>
        <h3>Voice Casting and Narrator Selection</h3>
        <div class="fc-body">
          <p>Picking the right voice matters. A children’s picture book needs a warm, playful tone. A thriller needs pace and tension. We help you choose a narrator whose voice fits your story, whether that is one of our regular narrators or a voice you already have in mind.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="3" width="6" height="11" rx="3"></rect><path d="M5 11a7 7 0 0 0 14 0M12 18v3"></path></svg></div>
        <h3>Audio Book Recording Services</h3>
        <div class="fc-body">
          <p>This is the heart of the job. A narrator reads your full manuscript under proper studio conditions, take by take, until every chapter is captured cleanly. We record in quiet, treated spaces so there is no background noise, no echo, and no distractions for the listener.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h3l2-5 3 12 3-9 2 4h5"></path></svg></div>
        <h3>Editing and Sound Cleanup</h3>
        <div class="fc-body">
          <p>Raw recordings always need work. We remove mouth noises, breaths, page turns, and mistakes. We even out volume levels between chapters and fix any pacing issues so the whole book flows smoothly from start to finish.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 21v-7M4 10V3M12 21v-9M12 8V3M20 21v-5M20 12V3M1 14h6M9 8h6M17 16h6"></path></svg></div>
        <h3>Mixing and Mastering</h3>
        <div class="fc-body">
          <p>Once editing is done, we mix and master the final files so they meet the technical standards used by major audio book platforms. This includes correct file formats, consistent loudness levels, and proper chapter markers so listeners can jump between sections with ease.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Audio Book Publishing Services</h3>
        <div class="fc-body">
          <p>Recording is only half the job. We help you get the finished product out into the world, formatted correctly for the platforms your readers actually use, and ready for listeners to find.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>If you are searching for the best service for audio books, the answer usually comes down to trust, sound quality, and clear communication rather than flashy promises.</p>
  </div>
</section>

<!-- 5 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="Authors, publishers, and small presses Purple Giraffe Press produces audiobooks for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Audiobook Services for Authors, Publishers, and Small Presses</h2>
      <p>We work with a wide range of clients, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First time authors turning their debut book into audio</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Publishers with a backlist of titles they want to bring to audio</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Children’s book authors and illustrators</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Non fiction writers, including memoirs and how to guides</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small presses without an in house audio team</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who already publish ebooks and want to add audio to their range</span></li>
      </ul>
      <p>If you already offer your book as an ebook, adding audio is a natural next step, giving readers another format to choose from without taking anything away from what you already have.</p>
      <p>We also hear from people looking for an audio book service like Netflix, somewhere they can trust to deliver good quality content without a confusing process. We understand that comparison. Streaming services made things simple for viewers, and we aim to make audio book production just as simple for authors, from the first phone call through to the finished files.</p>
    </div>
  </div>
</section>

<!-- 6 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Best Audiobook Production Service</h2>
      <p>Not every audio book service does the job properly. Here is what separates a good one from an average one.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Real studio recording, not a rushed home setup. Sound quality is the first thing listeners notice, and the first thing that puts them off if it is poor.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A narrator who fits your genre. The wrong voice can undo a great story.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Careful editing. No unnatural pauses, no leftover noise, no jarring cuts between takes.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Clear file delivery. Files that are ready for the platforms you want to use, not extra work for you to sort out later.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Honest communication. You should always know where your project is up to and what happens next.</span></li>
      </ul>
      <p>We built our process around these points because we have seen what happens when they are skipped. A rushed job can leave you with an audiobook that sounds unfinished, and that is hard to fix after the fact without starting parts of it again.</p>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1478737270239-2f02b77fc618?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="A proper studio microphone set up for audiobook recording" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY AUDIOBOOKS MATTER (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Audiobooks Help Authors Reach More Readers</h2>
  </div>
  <div class="container narrow center">
    <p>Audiobooks are not a small side trend anymore. People listen while commuting, exercising, cooking, or relaxing before bed. For many readers, audio is now their main way of getting through a book at all.</p>
    <p style="margin-top:14px;">This matters for a few reasons:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You reach readers who do not have time to sit and read.</strong> Audio fits into gaps in a busy day.</li>
      <li><strong>You reach people with visual impairments or reading difficulties.</strong> Audio removes a barrier that print and even ebooks cannot.</li>
      <li><strong>You open your book up to a different kind of attention.</strong> A good narrator can bring out emotion and humour that some readers might miss on the page.</li>
      <li><strong>You give your book a longer life.</strong> A book available in three formats, print, ebook, and audio, has more ways to find new readers over time.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Getting this right takes care. A flat, rushed narration can make even a brilliant story fall flat. A thoughtful one can make a simple story unforgettable. Listeners notice pacing, tone, and clarity far more than readers of the printed page, simply because there is nowhere to hide a weak sentence when it is spoken aloud.</p>
  </div>
</section>

<!-- 8 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 9 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Audiobook Production Process, Step by Step</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You send through your finished manuscript, along with any notes on tone, pacing, or characters you have in mind.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Quote and Timeline</h3></div>
        <div class="svc-step-body"><p>We look at the length and style of your book and give you a clear quote and an expected timeline, so there are no surprises.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Narrator Selection and Sample Recording</h3></div>
        <div class="svc-step-body"><p>We suggest narrators who suit your book and send you a short sample so you can hear the fit before full recording begins.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Full Recording and Editing</h3></div>
        <div class="svc-step-body"><p>Once you approve the narrator, we record the full book, then edit and clean up the audio.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Review and Feedback</h3></div>
        <div class="svc-step-body"><p>We send you a draft to listen to. You can flag anything you want changed before we move to final mastering.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Final Delivery</h3></div>
        <div class="svc-step-body"><p>We master the final files and deliver them in the formats you need, ready for publishing.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 10 - BENEFITS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Benefits of Professional Audiobook Production</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You save time.</strong> Recording and editing audio properly takes real skill and real hours. We take that off your plate.</li>
      <li><strong>You get consistent quality.</strong> Every chapter is recorded, edited, and mastered to the same standard.</li>
      <li><strong>You avoid costly mistakes.</strong> Wrong file formats or poor sound quality can get an audiobook rejected by platforms. We handle the technical side so that it does not happen to you.</li>
      <li><strong>You get support with promotion, too.</strong> Recording is not the end of the road. We can also help you plan how to tell people your audiobook exists, including where to list it and how to talk about it online.</li>
      <li><strong>You free up your own time.</strong> Instead of learning sound editing software or chasing narrators yourself, you can focus on writing your next book while we handle the production.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Choose <em>Purple Giraffe Press</em> for Children’s Audiobooks</h2>
      <p>Whatever comparison you use to picture the standard you want, that is exactly what we aim for with every project, professional, polished, and easy for listeners to enjoy.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in books, not general audio work</h3><p>Audiobooks have their own pacing, structure, and listener expectations. That is our focus.</p></article>
      <article><span>✓</span><h3>Upfront, honest pricing</h3><p>You get a clear quote before any work starts, with no hidden extras.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>You can talk to a real person in your own time zone, without long delays.</p></article>
      <article><span>✓</span><h3>We treat every manuscript with care</h3><p>Your story matters to you, and we treat it that way too.</p></article>
      <article><span>✓</span><h3>Simple communication</h3><p>You will always know what stage your project is at and what comes next.</p></article>
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

<!-- 13 - OTHER SERVICES (cards render from the includes/services.php registry, so this
        list stays in step with the live service line-up) -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Other Services for Authors</h2>
    <p style="margin:14px auto 0;">What your project includes depends on your goals. We offer a full suite of professional services tailored to the specific needs of children’s literature.</p>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 14 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear quote for children's audiobook production with no surprises" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Children’s Audiobook Production Cost in Australia?</h2>
      <p>Pricing depends on a few things, including the length of your book, the complexity of the narration, and how many voices are needed for different characters. A short children’s picture book will cost less than a long novel with multiple character voices.</p>
      <p>We do not believe in vague quotes. Before any recording begins, we give you a clear breakdown of costs, so you know exactly what you are paying for. There are no hidden fees added later, and you will never be asked to pay for something you did not agree to upfront.</p>
      <p>If you are comparing us against other audiobook best service providers, we are happy to explain exactly what is included in our quote, so you can compare properly. There are no surprise charges added once recording has started, and any extra work, such as adding a second narrator voice for dialogue, is discussed and agreed with you first.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 15 - CLOSING CTA -->
<?php include 'includes/contact-section.php'; ?>

<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Create a <em>Professional Audiobook?</em></h2>
      <p>If you have a manuscript sitting there waiting for its next chapter, let us help you turn it into something people can listen to anywhere, in the car, on a walk, or curled up on the couch. Get in touch with Purple Giraffe Press today, and let us talk through what your audiobook could sound like. We are happy to answer any questions before you commit to anything.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to produce your children's audiobook" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 16 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

<!-- 17 - FOOTER -->
<?php include 'includes/footer.php'; ?>

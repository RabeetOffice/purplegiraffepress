<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Trailers Australia | Video Stories';
$page_description = 'Bring your children\'s book to life with professional book trailer videos in Australia. Engaging, story-driven trailers that capture young readers\' hearts.';
$canonical_path   = 'childrens-book-trailers.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does a typical book trailer take to make?',
    'a' => 'Most trailers take two to four weeks from approved script to final delivery, depending on animation complexity and how quickly feedback comes back to us.',
  ),
  1 =>
  array (
    'q' => 'Do you work with authors based in London or the UK?',
    'a' => 'Yes. While we’re an Australian studio, all our work is done remotely, so we regularly work with authors in London and across the UK. Time zone differences are easy to manage over email and video calls.',
  ),
  2 =>
  array (
    'q' => 'What length should my book trailer be?',
    'a' => 'Most picture book trailers run between 30 and 90 seconds. Shorter cuts work better for social media, while a slightly longer version suits your website or a bookshop screen. If you’re not sure which length fits your book, we’ll suggest one based on how you plan to use it.',
  ),
  3 =>
  array (
    'q' => 'Can you use my own illustrations, or do I need new artwork?',
    'a' => 'We can usually work with your existing illustrations. If a scene needs extra artwork to animate properly, we’ll flag that early and talk you through the options.',
  ),
  4 =>
  array (
    'q' => 'Do you write the script, or do I need to write it myself?',
    'a' => 'We write the first draft of the script based on your book, then send it to you for approval and changes. You’re never handed a blank page.',
  ),
  5 =>
  array (
    'q' => 'Will the trailer suit London bookshops and UK school events, not just Australian audiences?',
    'a' => 'Yes. We build trailers with a general English-speaking audience in mind, so they work just as well in a London bookshop window or a UK school assembly as they do here in Australia.',
  ),
  6 =>
  array (
    'q' => 'What if I need changes after the first draft?',
    'a' => 'Reasonable revisions are included as part of the process. We’ll talk through exactly what’s included when we send your quote, so there’s no confusion later. If you’re after a bigger change, like a different scene or a new voice actor, we’ll let you know upfront if that affects the cost or timeline.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Children's Book Trailers</div>
      <h1>Children's <em>Book Trailers Australia</em> | Bring Your Story to <strong>Screen</strong></h1>
      <p class="lead">Writing a children’s book takes months, sometimes years. Getting people to notice it can take just as long, if not longer. Bookshops are crowded. Social media feeds move fast. Parents scroll past hundreds of covers before they stop on one.</p>
      <p class="lead">A short video changes that. It stops the scroll. It shows a character’s face, a splash of colour, a moment of magic, before anyone has read a single page. That is the whole idea behind our animated book trailers for kids: give your story a voice and a face, so readers fall for it before they even pick it up.</p>
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
      <p>Purple Giraffe Press builds video trailers for children’s authors, illustrators, and small publishers who want their book seen, not just listed. We handle the script, the animation, the voice work, and the final edit, so you can focus on writing your next book instead of learning video software.</p>
      <p>Most authors we talk to have the same problem. They’ve spent years on the manuscript, found an illustrator, printed copies, and then hit a wall. They post a photo of the cover, share it with family, and hope word of mouth does the rest. It rarely does, not because the book isn’t good, but because a still photo of a cover asks a lot from a stranger’s imagination. A video does some of that imagining for them.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1478720568477-152d9b164e26?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="A projector bringing a children's book story to the screen" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - TRAILER STYLES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- trailer styles</p>
    <h2>Creative Book Trailer Styles Designed Around Your Story</h2>
    <p style="margin:14px auto 0;">Not every book needs the same kind of trailer. A quiet bedtime story needs something soft and slow. A silly rhyming book needs energy and colour. We build the trailer around your book, not the other way round.</p>
    <p style="margin:14px auto 0;">Before we start any animation, we ask you what the book is actually for. A trailer meant to sell copies online needs a different pace from one meant to open a school visit. A trailer for a rhyming picture book about bedtime should feel calm, with soft transitions and a gentle voice. A trailer for an action-packed adventure story should cut faster, with brighter colour and punchier sound. Getting this right at the start saves a lot of back and forth later.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M10 8.5 16 12l-6 3.5Z"></path></svg></div>
        <h3>Animated Scene Trailers</h3>
        <div class="fc-body">
          <p>We take two or three key scenes from your book and animate them properly, with movement, sound, and a short voiceover. This works well for picture books with strong visual moments, like a dragon taking flight or a child jumping into a puddle.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><circle cx="8.5" cy="9.5" r="1.8"></circle><path d="m4 18 5-5 4 4 3-3 4 4"></path></svg></div>
        <h3>Illustrated Teaser Videos</h3>
        <div class="fc-body">
          <p>If a full animation isn’t in the budget, we can build an illustrated children’s book teaser video using your existing artwork. We add gentle motion (a technique called the Ken Burns effect), music, and text, so the illustrations feel alive without a full animation build.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M5 21a7 7 0 0 1 14 0"></path></svg></div>
        <h3>Character Reveal Trailers</h3>
        <div class="fc-body">
          <p>These focus on introducing your main character before the story starts. Great for series books, where readers need to fall in love with a character across multiple titles.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3.5 2"></path></svg></div>
        <h3>Launch and Countdown Trailers</h3>
        <div class="fc-body">
          <p>Short, punchy videos built for the weeks around release day. These are usually 15 to 30 seconds, made for social media, and built to create a sense of “this is coming, get ready.”</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Whichever style suits your book, our team works as your picture book trailer maker from the first sketch of the concept to the final export file, ready for YouTube, Instagram, TikTok, or your own website.</p>
    <p style="margin-top:14px;">We also build a few practical extras alongside the main trailer where it makes sense, such as a shorter cut for social media stories, a silent version with captions for autoplay feeds, and a still frame or two pulled straight from the animation for use on a poster or bookmark. None of this replaces your cover art. It sits alongside it, giving you more than one way to show people your book.</p>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Children’s Book Trailers Created For Every Reader Age Group</h2>
    <p style="margin:14px auto 0;">Children at different stages respond to visuals, storytelling, music, and pacing in different ways. We tailor every book trailer to suit the reading level, interests, and emotional understanding of the book’s intended audience.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Toddlers and Preschoolers: Ages 0 to 3</h3>
        <div class="fc-body">
          <p>For very young children, we create gentle trailers with simple movement, familiar sounds, soft colours, and easy-to-recognise characters. The pacing stays calm, and the visuals remain clear without becoming overwhelming.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Early Picture Book Readers: Ages 4 to 7</h3>
        <div class="fc-body">
          <p>Trailers for this age group use colourful animation, playful characters, simple storytelling, and cheerful music. The focus is on introducing the story in a fun and easy-to-follow way.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Independent and Middle-Grade Readers: Ages 8 to 12</h3>
        <div class="fc-body">
          <p>For older children, we can include adventure, humour, mystery, fantasy, and more detailed scenes. These trailers use stronger storytelling and faster pacing to build curiosity around the book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M7 4v16M17 4v16M3 12h18"></path></svg></div>
        <h3>Young Adult Readers: Ages 13 to 17</h3>
        <div class="fc-body">
          <p>Young adult book trailers use cinematic visuals, emotional storytelling, suspense, atmosphere, and more mature pacing. Each trailer is designed to reflect the book’s genre while connecting naturally with teenage readers.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO CAN BENEFIT: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="Children's authors and illustrators who benefit from a book trailer" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Can Benefit From A Children’s Book Trailer in Australia</h2>
      <p>We work with a wide range of people in children’s publishing, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published picture book authors launching their first title</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Traditionally published authors whose publisher isn’t offering marketing support</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who want to promote their own visual style</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers with several titles to launch each year</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>School and library-focused authors who want a video for events and readings</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors doing a crowdfunding campaign who need a trailer to show backers what they’re funding</span></li>
      </ul>
      <p>If you’ve written a children’s book and you want people to feel something about it before they open the cover, a children’s author video trailer is one of the simplest ways to do that.</p>
      <p>We’ve noticed that authors often assume a trailer is only worth making once a book has already sold well. In our experience, it works the other way around just as often. A good trailer, shared before or right at launch, is one of the reasons a quiet title gets picked up by a bookshop buyer, a librarian, or a parenting page with a decent following. It’s marketing that happens before the sales figures exist, not after.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO FIND THE RIGHT STUDIO: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How To Find The Right Children’s Book Trailer Studio in Australia</h2>
      <p>Not every video company understands children’s books. Many are built for corporate ads or wedding videos, and it shows in the tone, the pacing, and the music choices. Before you hire anyone, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they worked on picture books before? Ask to see actual children’s book samples, not just general animation reels.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they write the script, or do you have to? A good studio should help shape the story into 30 to 60 seconds, not just hand you a blank page.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they match your book’s illustration style? If your book has a hand-drawn, watercolour feel, the trailer shouldn’t look like a slick corporate cartoon.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What’s included in the price? Ask specifically about revisions, voiceover casting, and music licensing, since these are often left out of quotes.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How long does it take? A rushed trailer usually looks rushed. Ask for a realistic timeline, not just the fastest one.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand where the video will be used? A trailer built for a bookshop screen looks different from one built for Instagram Reels.</span></li>
      </ul>
      <p>A studio that’s genuinely set up as a book trailer animation studio Australia-wide should be able to answer all of these without hesitation. If a company can’t show you a single children’s book example, or dodges the question about revisions and pricing, treat that as a warning sign rather than a small detail to overlook.</p>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1492619375914-88005aa9e8fb?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="A book trailer studio editing suite working on an animated children's trailer" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY TRAILERS HELP (list) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Animated Book Trailers Help Stories Get Noticed Faster</h2>
  </div>
  <div class="container narrow center">
    <p>It’s easy to assume a trailer is just a nice extra. In practice, it does a few specific jobs that text and static images can’t do on their own.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>It builds an emotional connection fast.</strong> Music, voice, and movement create a feeling in seconds that a blurb takes a paragraph to build.</li>
      <li><strong>It travels further online.</strong> Social platforms tend to favour video over static posts, so a trailer often reaches more people than a plain announcement.</li>
      <li><strong>It gives you something to share everywhere.</strong> One trailer can go on your website, your email signature, your Instagram, your author newsletter, and your local bookshop’s social pages.</li>
      <li><strong>It supports events and readings.</strong> Schools, libraries, and bookshops love having something to play before an author visit.</li>
      <li><strong>It makes your book feel like a real release, not just another title on a shelf.</strong></li>
      <li><strong>It gives reviewers and bookshops something easy to repost.</strong> A short, well-made video is far more likely to be shared by a third party than a plain text announcement.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This is really what sits behind a proper kids' book marketing video service: it’s not about making something pretty; it’s about giving your book a genuine chance to be noticed in a crowded market. As part of that, we also think about children’s publishing video marketing as a whole, meaning the trailer works alongside your other promotion, not as a one-off piece that gets made and forgotten.</p>
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

<!-- 10 - OUR PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Process For Creating Your Book Trailer in Australia</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Tell Us About Your Book</h3></div>
        <div class="svc-step-body"><p>You send us your manuscript or final book file, along with any illustrations you have. We ask a few questions about tone, age group, and what you want the trailer to achieve. This first conversation usually takes less than half an hour, either by email or a short call.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Write the Concept and Script</h3></div>
        <div class="svc-step-body"><p>We choose the scenes, characters, or moments that will carry the trailer and write a short script. You review and approve this before anything is animated or filmed. This step matters more than people expect. A trailer with a weak script feels flat no matter how good the animation looks, so we don’t rush it.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Animation, Voice, and Sound</h3></div>
        <div class="svc-step-body"><p>Once the script is locked in, we build the visuals, cast a voice if needed, and choose music that suits the book’s mood. This is usually the longest part of the process, and we’ll give you an honest timeframe for it once we know the scope of your project.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review and Revisions</h3></div>
        <div class="svc-step-body"><p>We send you a draft cut. You give feedback, and we make reasonable revisions until the trailer feels right. We’d rather you tell us something feels off than settle for a trailer you’re only half happy with.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Delivery</h3></div>
        <div class="svc-step-body"><p>You receive the finished file in the formats you need, whether that’s a widescreen version for YouTube or a vertical cut for Instagram and TikTok Reels. We’ll also talk you through where each version works best, since a file that looks great on a laptop can crop badly on a phone screen if it’s the wrong shape.</p></div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Throughout the process, we treat every project as one of many video trailers for kids’ picture books we’ve built, which means we already know the common problems (pacing that’s too slow, text on screen for too short a time, music that’s too loud under the voiceover) and we watch for them before you have to.</p>
  </div>
</section>

<!-- 11 - WHY AUSTRALIAN AUTHORS CHOOSE US -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Australian Authors Choose Us For <em>Children’s Book Trailers</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only work in children’s publishing</h3><p>We’re not a general video agency that also happens to do book trailers. This is our main focus.</p></article>
      <article><span>✓</span><h3>You keep creative control</h3><p>You approve the script and the draft cut before anything is finalised.</p></article>
      <article><span>✓</span><h3>We understand illustration styles</h3><p>Whether your book is hand-drawn, digital, or photographic, we match the trailer’s look to your book, not a generic template.</p></article>
      <article><span>✓</span><h3>Clear, upfront pricing</h3><p>No surprise costs added after you’ve already committed.</p></article>
      <article><span>✓</span><h3>We work with authors at every stage</h3><p>From a first self-published title to a full backlist relaunch.</p></article>
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

<!-- 13 - COMPLETE SUPPORT BEYOND BOOK TRAILER CREATION -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- under our roof</p>
    <h2>Complete Support Beyond Book Trailer Creation</h2>
    <p style="margin:14px auto 0;">We built our service list around the real gaps that stop authors from finishing and launching their books. Here is what falls under our roof.</p>
  </div>
  <div class="container">
    <div class="editorial-rows">
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">01</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Publishing</h3></div>
        <div class="er-body"><p>We guide your manuscript from the first draft through to a finished book. This covers formatting, ISBN setup, and preparing your book for release on Amazon KDP and other major platforms. If you are looking for an Amazon self-publishing company that explains each step clearly instead of rushing you through it, this is where we start your journey.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">02</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Editing</h3></div>
        <div class="er-body"><p>Strong editing is what keeps a reader turning pages instead of putting the book down. Our editors review structure, pacing, clarity, and grammar while keeping your voice intact. This makes us one of the more thorough book editing companies working with independent authors. Unlike some professional book editing companies, we keep the same editor on your project from start to finish.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">03</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Book Design</h3></div>
        <div class="er-body"><p>Readers judge a book by its cover, whether we like it or not. Our design team builds covers and interior layouts that look professional on a shelf or on a Kindle screen, matching the tone and genre of your story. From typography to spacing, every detail is chosen with your reader in mind, not just to fill a template.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">04</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Marketing</h3></div>
        <div class="er-body"><p>Finishing a book is only half the job. Getting it read is the other half. Our marketing support includes author branding, targeted ad campaigns, reviewer outreach, and launch planning, built around your book rather than a generic template. Unlike many book marketing companies running the same playbook for every client, we build each plan around your genre and readers.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">05</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Ghostwriting</h3></div>
        <div class="er-body"><p>Some people have a great story but no time or confidence to write it. Our ghostwriting service pairs you with a writer who turns your ideas into a finished manuscript in your voice. If you want a ghostwriting company that will not water down your story, talk to us. As a ghostwriting company UK authors trust, we treat every project with equal care.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">06</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">PR and Publication</h3></div>
        <div class="er-body"><p>We help place your book in front of reviewers, podcasts, and press contacts who cover your genre, so your launch gets more than a quiet release day. Our PR support builds real credibility around your name as an author and puts your story in front of the media and readers most likely to care about it.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">07</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Proofreading and Formatting</h3></div>
        <div class="er-body"><p>A manuscript full of typos or messy formatting can put readers off before they even reach chapter one. Our proofreaders check every line for spelling, punctuation, and consistency, while our formatting team prepares clean, properly structured files for print, eBook, and every major retailer, so your book looks polished inside and out.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">08</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Audiobook Production</h3></div>
        <div class="er-body"><p>Audiobooks open your story up to readers who prefer to listen rather than read. We handle narrator selection, recording, and editing, producing a finished audiobook that matches the tone and pace of your writing. From short stories to full-length novels, we prepare files ready for the major audiobook platforms and streaming services out there.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">09</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Book Trailer</h3></div>
        <div class="er-body"><p>A short, well-made trailer can turn a scroll past your book into a genuine sale. Our team scripts, shoots, or animates a book trailer that captures the mood of your story in under a minute, built for social media, your author website, and use across your wider marketing and launch campaigns.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 14 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Our most popular services</h2>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 15 - CLOSING CTA -->
<?php include 'includes/contact-section.php'; ?>

<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready To Transform Your <em>Children’s Book Into A Video?</em></h2>
      <p>If you’ve got a picture book, a chapter book, or a series ready to launch, don’t let it sit quietly on a shelf. A well-made book launch trailer for children’s authors can be the difference between a book that gets scrolled past and one that gets remembered. Get in touch with Purple Giraffe Press, tell us about your story, and we’ll help you build a trailer that does it justice.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to turn your children's book into a trailer" loading="lazy" decoding="async">
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

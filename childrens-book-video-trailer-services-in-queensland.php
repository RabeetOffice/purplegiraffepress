<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Trailers for Queensland Authors';
$page_description = 'Bring your children\'s book to life with an engaging video trailer made in Queensland. Story-driven trailers that capture young readers\' imagination.';
$canonical_path   = 'childrens-book-video-trailer-services-in-queensland.php';
$breadcrumb_name  = 'Book Trailers in Queensland';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'Queensland',    'url' => page_url('locations/queensland.php')],
    ['name' => 'Book Trailers', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Queensland?',
    'a' => 'Most of our clients are Queensland-based, and we love supporting local children\'s authors and small publishers. That said, we can work remotely with authors from other states too, since most of our process happens over video call and email anyway.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to make a book trailer?',
    'a' => 'Most projects take between three and six weeks from the discovery chat to final delivery. Simpler teaser trailers can move faster, while a full character-led animated trailer with voiceover and music takes a bit longer.',
  ),
  2 =>
  array (
    'q' => 'Do I need finished illustrations before we start?',
    'a' => 'It helps, but it is not essential. Some authors come to us with a finished picture book, others with rough sketches and a strong sense of their character. We can talk through what is possible with what you have.',
  ),
  3 =>
  array (
    'q' => 'Can you make an illustrated children\'s book teaser video if my book is still unpublished?',
    'a' => 'Yes. Many authors use a trailer as part of their pre-launch marketing, before the book is even available to buy. It can be a great way to build interest ahead of release day.',
  ),
  4 =>
  array (
    'q' => 'What if I need videos for more than one book?',
    'a' => 'We work with plenty of Queensland authors and small publishers who need video trailers for kids\' picture books across several titles. We are happy to talk about a package if you have more than one book to promote.',
  ),
  5 =>
  array (
    'q' => 'Do you offer filming as well as animation?',
    'a' => 'Yes. Some authors want a short segment of themselves speaking, blended with animated or illustrated scenes. We can arrange filming as part of your project if that fits your trailer style.',
  ),
  6 =>
  array (
    'q' => 'How much does a trailer cost?',
    'a' => 'Pricing depends on length, style, and how many formats you need. We provide a clear, written quote after our free discovery chat, so you know the cost before agreeing to anything.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Book Trailers</div>
      <h1>Turn Your Book into a Mini Movie, <em>Queensland Children's Book Trailer</em> <strong>Service</strong></h1>
      <p class="lead">Writing a children's book takes months, sometimes years. Getting people to notice it can feel like it takes even longer. A good cover helps. A good blurb helps. But nothing grabs a reader's attention like a short video that shows what your book is really about.</p>
      <p class="lead">That is where our Queensland videobook trailer service comes in. We work with picture book authors, junior fiction writers, and small publishers across the state to turn a manuscript into a short, engaging video that parents, teachers, and librarians actually want to watch and share.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Trailer</a>
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
      <p>Purple Giraffe Press has spent years helping authors get their books ready for the world. We know that a trailer is not just a nice extra. It is often the first thing a bookshop, a school, or a parent sees before they decide to buy. If it looks flat or rushed, that first impression is gone. If it feels warm, fun, and true to your story, people remember it.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Trailer &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Children's book video trailer service for Queensland authors at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHY A TRAILER MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it works</p>
    <h2>Why Every Children’s Book Deserves a Powerful Video Trailer</h2>
  </div>
  <div class="container narrow center">
    <p>A book trailer is a short video, usually between thirty seconds and two minutes, that gives a taste of your story without giving away the ending. Think of it like a movie trailer, but for a picture book or junior novel.</p>
    <p style="margin-top:14px;">For children's books, this matters more than people expect. Kids respond to movement, colour, and sound before they respond to a paragraph of text on a poster. A well-made trailer can:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Show your illustrations in motion, not just as still images</li>
      <li>Introduce your main character in a way that feels alive</li>
      <li>Give teachers a quick, classroom-friendly way to preview your book before reading it aloud</li>
      <li>Give parents a reason to stop scrolling on social media and click through to buy</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>We build every trailer with these outcomes in mind. This is not about flashy effects for the sake of it. It is about animated book trailers for kids in Queensland that feel true to the book and easy for young readers to connect with.</p>
  </div>
</section>

<!-- 5 - TRAILER STYLES (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Explore Our Children’s Book Trailer Styles and Creative Options</h2>
    <p style="margin:14px auto 0;">Every book is different, so we do not force every project into the same template. Below are the main types of trailers we build. Most authors end up wanting a mix of two or three of these, depending on their goals.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M10 8.5 16 12l-6 3.5Z"></path></svg></div>
        <h3>Picture Book Teaser Trailers</h3>
        <div class="fc-body">
          <p>These are short, usually under a minute, and built to show off your illustrations. We animate key spreads from the book, add gentle motion to characters and backgrounds, and pair it with music or narration. This style works well as a picture book trailer maker approach for authors who want something that feels like the book has come to life on screen.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M5 21a7 7 0 0 1 14 0"></path></svg></div>
        <h3>Character-Led Animated Trailers</h3>
        <div class="fc-body">
          <p>Instead of walking through the plot, this style puts your main character front and centre. We might animate a short original scene, not directly from the book, that captures the character's personality. This works well for series books, where you want readers to fall in love with a character before book two or three comes out.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Author Introduction Trailers</h3>
        <div class="fc-body">
          <p>Some authors want their own face and voice in the mix. We can film a short segment of you talking about the book, then blend it with animated or illustrated footage. This is a strong option for a children's author video trailer if you already have a following on social media or you do school visits.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3.5 2"></path></svg></div>
        <h3>Book Launch and Series Trailers</h3>
        <div class="fc-body">
          <p>If you are releasing a new title or the next book in a series, we build trailers specifically timed around your launch date. These are often shared at launch events, in newsletters, and across social media in the days before release. This is our most requested option for a book launch trailer for children's authors who want momentum in that first week.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Short Form Social Trailers</h3>
        <div class="fc-body">
          <p>Not every platform needs a two-minute video. We also cut short vertical versions built for Instagram, TikTok, and Facebook Reels. These are usually fifteen to thirty seconds long and designed to stop the scroll fast.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - AGE GROUPS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Book Trailer Styles for Every Children’s Reading Age Group</h2>
    <p style="margin:14px auto 0;">Children’s book trailers should match the attention span, emotional understanding and interests of their intended readers. We adapt the animation style, pacing, narration, music, and visual detail to suit each age group, helping the finished video feel engaging, clear, and appropriate for children, parents, and educators.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Ages 0–3: Gentle Trailers for Babies and Toddlers</h3>
        <div class="fc-body">
          <p>Trailers for babies and toddlers need soft colours, simple movement, and calm, friendly narration. We use short scenes, familiar objects, and gentle repetition to avoid overwhelming very young viewers. Light music and subtle sound effects can make the trailer feel warm and comforting while keeping the story easy to follow.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 3–5: Playful Trailers for Preschool Picture Books</h3>
        <div class="fc-body">
          <p>Preschool audiences respond well to colourful characters, expressive animation, and cheerful sound. We create playful trailers with clear storytelling, memorable moments, and an easy-to-follow sequence. Character movement, simple narration, and light humour help hold attention while showing parents and teachers what makes the picture book special.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 6–8: Engaging Trailers for Early Reader Books</h3>
        <div class="fc-body">
          <p>Early readers are ready for faster pacing, stronger character personalities, and more adventurous scenes. We create trailers that introduce the central challenge without revealing the ending, using clear voiceover, animated illustrations, and exciting visual transitions. The final video remains simple enough for young viewers while giving them a strong reason to discover the full story.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Ages 8–12: Cinematic Trailers for Middle-Grade Stories</h3>
        <div class="fc-body">
          <p>Middle-grade books can support deeper themes, more detailed story worlds, and greater emotional tension. We use cinematic pacing, atmospheric music, character-focused scenes, and carefully chosen dialogue to create curiosity. Adventure, fantasy, mystery, and contemporary stories can all benefit from a trailer that feels mature without becoming unsuitable for younger audiences.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Not sure which trailer style best suits your readers? We can review your book’s themes, illustrations, story length and target audience before creating the script. Our team will recommend the most suitable pacing, animation, narration and video format for your children’s book.</p>
  </div>
</section>

<!-- 7 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Queensland authors, illustrators and publishers we make book trailers for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Queensland Children’s Book Trailer Service Helps Most</h2>
      <p>Our Queensland videobook trailer service is built for:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published children's authors preparing for a launch</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Traditionally published authors who want extra marketing support that their publisher isn't providing</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent Queensland publishers with a slate of titles to promote</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who want a showreel-style video of their picture book art</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools or literacy programs promoting a locally written book</span></li>
      </ul>
      <p>If you have a finished manuscript, a set of illustrations, or even just rough sketches and a strong idea of your story, we can usually work with what you have.</p>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Book Trailer Provider in Queensland</h2>
      <p>Not every video company understands children's publishing. Before you hire anyone for this kind of work, whether it's us or someone else, it is worth asking:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they made trailers for children's books before, or mostly corporate and product videos?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand pacing for a young audience? A trailer that is too fast or too busy can lose kids in the first five seconds.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they use your actual illustrations, or generic stock animation that doesn't match your book's style?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they offer a script or storyboard before filming or animating, so you can approve the direction early?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What formats do they deliver in? You will likely need at least one square or vertical cut for social media, alongside the main video.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is pricing clear from the start, or do extra costs appear later for revisions and format changes?</span></li>
      </ul>
      <p>A good provider will answer these without hesitation. If someone is vague about their process or unwilling to show past work, that is worth noticing.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book trailer provider in Queensland" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHY TRAILERS STRENGTHEN MARKETING (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Book Trailers Strengthen Your Children’s Book Marketing Results</h2>
  </div>
  <div class="container narrow center">
    <p>It is easy to treat a trailer as an afterthought, something you make once the book is already out and you have spare time. In our experience, that is a missed opportunity. Here is why a proper trailer matters:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>It gives you something shareable.</strong> A blog post about your book is easy to scroll past. A video with movement and sound is far more likely to get watched and shared on social media.</li>
      <li><strong>It supports every other part of your launch.</strong> Use the same trailer on your website, in emails to your mailing list, in your pitch to bookshops, and at school visits.</li>
      <li><strong>It builds trust before someone reads a single page.</strong> Seeing your characters and hearing your story's tone helps a buyer decide this book is worth their child's time.</li>
      <li><strong>It gives teachers and librarians a fast preview.</strong> Busy educators do not always have time to read every new release cover to cover before deciding whether to order it. A short trailer can do that job for them.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This is really what children's story video promotion in Queensland looks like in practice. It is not one video sitting on YouTube. It is a tool you use across every channel where your readers already are.</p>
  </div>
</section>

<!-- 10 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children’s Book Trailer Process From Concept to Delivery</h2>
    <p style="margin:14px auto 0;">We keep our process simple and easy to follow, so you always know what stage your project is at.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: Free Discovery Chat</h3></div>
        <div class="svc-step-body"><p>We start with a short call or email exchange about your book. We ask about your story, your audience, your timeline, and what you are hoping the trailer will achieve. There is no cost and no obligation at this stage.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: Script and Storyboard</h3></div>
        <div class="svc-step-body"><p>Our team drafts a short script and a rough storyboard, showing how the trailer will flow scene by scene. You review this before anything is animated or filmed, so there are no surprises later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: Animation, Filming, or Both</h3></div>
        <div class="svc-step-body"><p>Once the storyboard is approved, we get to work. This might mean animating your illustrations, filming an author introduction, or a combination of both, depending on the style you choose. This is the stage where our book trailer animation studio work really takes shape, turning static art into motion.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: Sound and Voice</h3></div>
        <div class="svc-step-body"><p>We add music, sound effects, and narration if needed. For picture books especially, a warm, well-paced voiceover can make a huge difference to how the trailer feels.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: Review and Revisions</h3></div>
        <div class="svc-step-body"><p>We send you a draft to review. You can request changes to pacing, music, or wording. We build a reasonable number of revision rounds into every project, so you are not paying extra just to get small tweaks made.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Step 6: Delivery in Every Format You Need</h3></div>
        <div class="svc-step-body"><p>Once approved, we deliver your finished trailer in the formats you need, whether that is a widescreen version for YouTube and your website, or vertical cuts for Instagram and TikTok.</p></div>
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
      <h2>Why Queensland Authors Choose <em>Purple Giraffe Press</em> for Trailers</h2>
      <p>There are other video companies out there. Here is what makes working with us different.</p>
      <p>We also support authors well beyond the trailer itself. If you need help getting your manuscript ready, polishing your illustrations, or planning a wider children's publishing video marketing strategy around your launch, our team can talk through those options as part of the same conversation.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children's publishing.</h3><p>This is not a side project for us. We understand pacing, tone, and what makes a young audience pay attention, because children's books are our main focus.</p></article>
      <article><span>✓</span><h3>We work with your actual illustrations and story.</h3><p>We do not reuse generic templates. Every trailer is built around your book's real art and characters.</p></article>
      <article><span>✓</span><h3>You get a script and storyboard before we animate anything.</h3><p>This means fewer surprises and fewer costly changes later in the process.</p></article>
      <article><span>✓</span><h3>We are based in Queensland and understand the local market.</h3><p>From regional bookshops to school library programs, we know where Queensland children's authors are trying to get noticed.</p></article>
      <article><span>✓</span><h3>Clear communication throughout.</h3><p>You will always know what stage your project is at and what happens next.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for a children's book trailer in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Clear Children’s Book Trailer Pricing Without Hidden Extras</h2>
      <p>Every trailer is different, so we do not publish a single flat rate. The cost depends on things like the length of the video, whether you need animation, filming, or both, how much voiceover and original music are involved, and how many formats you need delivered.</p>
      <p>What we can promise is a clear, upfront quote before any work begins. There are no hidden add-ons appearing after the fact. Once we understand your book and your goals in the discovery chat, we will give you a straightforward price so you can decide if it is the right fit for your budget.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 16 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- explore more';
$location_services_heading = 'Explore More Services for Queensland Independent Children’s Authors';
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
      <h2>Ready to Turn Your <em>Children’s Book Into a Trailer?</em></h2>
      <p>If you have a children's book you are proud of, it deserves more than a still image on a shelf. A trailer gives your story a voice and a bit of movement, and gives readers a reason to pick it up.</p>
      <p>Get in touch with Purple Giraffe Press for a free discovery chat about your book.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to make your children's book trailer in Queensland" loading="lazy" decoding="async">
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

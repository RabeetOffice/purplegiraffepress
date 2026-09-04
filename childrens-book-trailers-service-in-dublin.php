<?php
include 'includes/config.php';

$page_title       = 'Dublin Video Trailer Service for Children\'s Books';
$page_description = 'Bring your children\'s book to life with an engaging video trailer made in Dublin. Story-driven trailers that capture young readers\' imagination.';
$canonical_path   = 'childrens-book-trailers-service-in-dublin.php';
$breadcrumb_name  = 'Book Trailers in Dublin';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'Dublin',        'url' => page_url('locations/dublin.php')],
    ['name' => 'Book Trailers', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Dublin?',
    'a' => 'Most of our clients are based in Dublin, but we also work with authors further afield, including London. Everything is delivered digitally, so location is rarely a problem.',
  ),
  1 =>
  array (
    'q' => 'How long does a typical book trailer take to make?',
    'a' => 'Most projects take between one and three weeks from the first read-through to final delivery, depending on length and how many rounds of revisions you need.',
  ),
  2 =>
  array (
    'q' => 'Can you work with a book that has not been published yet?',
    'a' => 'Yes. We often work from early proofs or advance copies so the trailer is ready in time for launch day.',
  ),
  3 =>
  array (
    'q' => 'Do you write a script, or do we need to provide one?',
    'a' => 'We can write the script for you, based on the book itself, or work from a script you already have. Either way, you get to review it before recording starts.',
  ),
  4 =>
  array (
    'q' => 'What if I only need a short clip for social media rather than a full trailer?',
    'a' => 'That is fine. Many of our clients start with a short teaser and add a longer version later if it performs well.',
  ),
  5 =>
  array (
    'q' => 'Do you offer this service to publishers in London as well as Dublin?',
    'a' => 'Yes, we regularly work with London-based authors and small publishers alongside our Dublin clients. All meetings and reviews can be done remotely.',
  ),
  6 =>
  array (
    'q' => 'Can you match a trailer to my existing branding or previous books in a series?',
    'a' => 'Yes. If you have a series with a consistent look, we make sure new trailers match the tone and style of earlier ones so readers recognise the series straight away.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). Real Dublin office
   address, kept in step with SITE_ADDRESS_IE in includes/config.php. */
$location_business = [
    'streetAddress' => 'Canon Hall, North Wall',
    'locality'   => 'Dublin',
    'region'     => 'Dublin',
    'postalCode' => 'D03 WP86',
    'country'    => 'IE',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Book Trailers</div>
      <h1><em>Children's Book Trailers Service</em> in <strong>Dublin</strong>: Turning Your Book into a Mini Movie</h1>
      <p class="lead">You wrote a picture book. You poured months, maybe years, into it. Now it sits on a shelf or a website, waiting for someone to notice it. A still image and a blurb can only do so much for a young audience who grew up watching screens.</p>
      <p class="lead">This is where a short video changes things. A good book trailer gives children a taste of the story, the characters, and the fun in under a minute. It gives parents, teachers, and librarians a reason to stop scrolling and pay attention.</p>
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
      <p>At Purple Giraffe Press, we work with children's authors and small publishers across Dublin to turn picture books into short, warm, engaging videos. We are not a big faceless studio. We are a small team that reads your book properly before we touch a single frame.</p>
      <p>Whether you are self-published or working with a small press, we build videos that respect your story and your budget. No upsells you do not need, just a trailer that does its job.</p>
      <p>We call this simple children's story video promotion in Dublin, but really it is just old-fashioned storytelling, moved onto a screen. The book stays the star of the show. The video is only there to open the door and invite a reader in.</p>
      <p>Parents scroll fast. Teachers are busy. A festival stall gets thirty seconds of someone's attention at most. A short, well-made video gives your book a fair shot at being noticed in that small window, rather than being passed over for something louder.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Trailer &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Children's book trailers service in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - TRAILER STYLES (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Children’s Book Trailer Services Dublin Designed Around Your Story</h2>
    <p style="margin:14px auto 0;">We do not offer one single style of video. Children's books come in all shapes, and so should the trailers that promote them. Here is how we usually break the work down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M10 8.5 16 12l-6 3.5Z"></path></svg></div>
        <h3>Animated Book Trailers For Kids In Dublin</h3>
        <div class="fc-body">
          <p>This is our most requested service. We take the illustrations from your book, add gentle movement, sound, and voice, and turn a static page into a small piece of storytelling. Characters blink, trees sway, waves roll. Nothing over the top, just enough motion to bring the page to life without losing the original art style.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Book Trailer Maker In Dublin, Built Around Your Own Art</h3>
        <div class="fc-body">
          <p>Some authors want their exact illustrations used, frame by frame, rather than a new animated look. We can work directly with your existing artwork, cutting, panning, and layering it so it feels like a moving version of your book rather than something new and disconnected.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M5 21a7 7 0 0 1 14 0"></path></svg></div>
        <h3>A Children's Author Video Trailer In Dublin That Sounds Like You</h3>
        <div class="fc-body">
          <p>Sometimes the best trailer includes you. A short clip of the author reading a line or two, talking about why they wrote the book, or answering a simple question a child might ask. This works well for school visits, festival stalls, and social media.</p>
          <p>We keep these clips short and relaxed. Most authors are not used to being on camera, so we film a few takes, talk you through what to say, and edit out the awkward pauses. You end up with something that sounds like you, not a scripted advert.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Short And Snappy: Teaser Cuts Built For Social Media</h3>
        <div class="fc-body">
          <p>Not every trailer needs to be a minute long. Many authors ask us for a short illustrated children's book teaser video in Dublin format, usually 10 to 20 seconds, sized for Instagram, TikTok, and Facebook. These are built to stop the scroll and drive people towards the full trailer or the book itself.</p>
          <p>We can cut several of these from a single main trailer, so one shoot or animation job gives you months of smaller posts to share, rather than one video that gets used once and forgotten.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Giving Your Big Day The Send Off It Deserves</h3>
        <div class="fc-body">
          <p>Launching a new title needs a bit of ceremony. We build a book launch trailer for children's authors in Dublin that can be shared with press, schools, and bookshops in the run-up to publication, giving your book a proper introduction rather than a quiet release.</p>
          <p>We usually plan these to land a week or two before the official launch date, so there is time for it to travel around before the book itself hits shelves. If you already have a launch event booked, we can time delivery around that date so nothing is rushed.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Children’s Book Trailers Created For Every Young Reader Age Group in Dublin</h2>
    <p style="margin:14px auto 0;">Every children’s book speaks to a different stage of a child’s imagination. We create book trailers that match the reading level, emotions, and interests of your target audience.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Ages 0&ndash;3: Toddlers &amp; Early Learners</h3>
        <div class="fc-body">
          <p>For board books and simple picture books, we create gentle, colourful trailers focused on familiar characters, playful moments and early learning themes that capture parents’ attention.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 4&ndash;7: Picture Book Readers</h3>
        <div class="fc-body">
          <p>Ideal for storybooks, adventure tales and illustrated books. We highlight the characters, emotions, and magical moments that encourage young children and parents to explore the story.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Ages 8&ndash;12: Middle Grade Readers</h3>
        <div class="fc-body">
          <p>For longer stories, fantasy, mysteries, and educational books, we create more engaging trailers that build curiosity, introduce the world of the book, and connect with independent young readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M7 4v16M17 4v16M3 12h18"></path></svg></div>
        <h3>Ages 13+: Young Adult Readers</h3>
        <div class="fc-body">
          <p>For teen-focused stories, we create trailers with a stronger emotional tone, highlighting themes, characters, and conflicts that appeal directly to older readers.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Whether your book is designed for a bedtime story, classroom reading, or independent exploration, we shape the trailer around the children who will connect with it most.</p>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin authors, illustrators, and publishers we make book trailers for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Supporting Children’s Book Dublin Authors, Publishers And Creative Storytellers</h2>
      <p>We have worked with a range of clients connected to children's publishing, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time picture book authors publishing their debut title</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers with a handful of titles a year</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who also write and want to promote their own work</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and literacy charities are producing story content for pupils</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors preparing for book fairs, festivals, or school tours</span></li>
      </ul>
      <p>If you fit into more than one of these, that is fine too. Most of our clients wear a few hats at once.</p>
      <p>We also hear from parents who write privately and want a small kids' book marketing video service in Dublin to share with family and friends, or to send round to their child's school. You do not need to be a full-time author to come to us with a project.</p>
      <p>We have also worked with authors putting together a small print run for a local community group, and with bigger names preparing a wider national push. The size of your print run or your following does not change how carefully we treat the work.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>Choosing The Dublin Children’s Book Trailer Partner For Your Story</h2>
      <p>Not every video company understands children's books. Some are brilliant at corporate ads but have never worked with picture book pacing, rhyme, or read-aloud rhythm. Before you hire anyone, ask them these questions.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they worked on a children's picture book before, or only adult marketing videos?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they read the whole book before starting, or just skim a few pages?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they show you a rough draft or storyboard before building the final video?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of changes are included before extra costs kick in?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they own the rights to any music or voice used, so you are not caught out later?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they deliver different sizes for YouTube, Instagram, and a website homepage?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is the price clear from the start, or full of vague add-ons?</span></li>
      </ul>
      <p>A short conversation with any provider should answer most of these. If they cannot answer clearly, that tells you something too.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book trailer partner in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY TRAILERS MATTER (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>How Children’s Book Trailers Help Stories Reach More Dublin Readers</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of authors assume a trailer is just a nice extra. In practice, it does real, measurable jobs for a book.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>It gives booksellers something easy to share on their own social pages</li>
      <li>It gives teachers a two-minute clip to open a class reading session</li>
      <li>It gives parents a quick way to judge if a story suits their child, before buying</li>
      <li>It gives you something to send to the press and bloggers that is more shareable than a plain email</li>
      <li>It keeps working long after a launch event has finished, sitting on your website or shop page</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Good children's publishing video marketing in Dublin is not about flashy effects. It is about giving your story a second doorway in, for people who might never read a full blurb but will watch thirty seconds of video.</p>
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
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Process From Story To Final Trailer</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>We Read Your Book Properly</h3></div>
        <div class="svc-step-body"><p>Before anything else, we sit down and actually read the book, cover to cover. We are looking for the moments that will work on screen, the page turns, the jokes, the quiet bits.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Talk Through Your Goals</h3></div>
        <div class="svc-step-body"><p>Every author wants something slightly different. Some want a trailer for a launch event. Some want something to run as a paid ad. We ask what you actually need before we suggest a style.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Send A Simple Storyboard</h3></div>
        <div class="svc-step-body"><p>You will see a rough plan, page by page or scene by scene, before we build anything. This is your chance to move things around or say a certain page matters more than we thought.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>We Build The First Draft</h3></div>
        <div class="svc-step-body"><p>Once the storyboard is agreed, we build the full video with animation, sound, and any voice work included. This usually takes one to two weeks, depending on length and detail.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>You Review, And We Adjust</h3></div>
        <div class="svc-step-body"><p>We build in a set number of revision rounds so you can ask for changes without extra stress. Small tweaks, timing changes, or music swaps are part of the normal process.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>We Deliver In The Formats You Need</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we send finished files sized correctly for YouTube, Instagram, TikTok, and your website, so you are not stuck resizing anything yourself.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Children’s Book Authors In Dublin Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only work on children's books</h3><p>We are not a general video agency that also does book trailers on the side. This is the work we focus on.</p></article>
      <article><span>✓</span><h3>We are based locally and understand the Dublin market</h3><p>From bookshop events in the city to school visits around the county, we know how this book trailer animation studio in Dublin fits into the wider Irish children's publishing scene.</p></article>
      <article><span>✓</span><h3>We keep pricing honest and clear</h3><p>You get a written quote before we start, with no surprise charges halfway through.</p></article>
      <article><span>✓</span><h3>We involve you at every stage</h3><p>Nothing goes to final delivery without your sign-off first.</p></article>
      <article><span>✓</span><h3>We respect your original art</h3><p>Illustrators worry, fairly, about their style being flattened or changed. We build every animation around the art you already made, not over the top of it.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for a children's book trailer in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What does a Children’s video book trailer cost in Dublin?</h2>
      <p>Every book trailer is priced by scope rather than a flat fee. A short teaser for social media costs less than a full one-minute animated trailer with voice work and custom sound. Factors that affect price include video length, how many illustrations need animating, whether you want a voice recording included, and how many revision rounds you expect to need.</p>
      <p>We always give a clear written quote before any work begins, based on a short conversation about your book and your goals. There are no hidden extras added on after the fact.</p>
      <p>If your budget is tight, it is worth telling us early on. We can often suggest a smaller starting option, such as a short teaser rather than a full trailer, and build from there once you see how it performs. Many authors start small for a first book and come back for something bigger once a series is underway.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 14 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready To Give Your Book A <em>Proper Introduction</em></h2>
      <p>If your picture book is ready, or almost ready, and you want people to see it before they read it, get in touch. Send us a copy of your book, or just a few sample pages, and tell us a little about your launch plans. We will come back with honest advice on what kind of trailer suits your story, and a clear quote to go with it. No pushy sales calls, just a straight answer on whether we are a good fit for your book.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to make your children's book trailer in Dublin" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 18 - FOOTER -->
<?php include 'includes/footer.php'; ?>

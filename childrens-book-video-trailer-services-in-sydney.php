<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Trailer Videos | Made in Sydney';
$page_description = 'Bring your children\'s book to life with an engaging video trailer made in Sydney. Story-driven trailers that capture young readers\' imagination.';
$canonical_path   = 'childrens-book-video-trailer-services-in-sydney.php';
$breadcrumb_name  = 'Book Trailers in Sydney';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'Sydney',        'url' => page_url('locations/sydney.php')],
    ['name' => 'Book Trailers', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How much does a video book trailer cost in Sydney?',
    'a' => 'It depends on the length of the video, how much animation is involved, and whether you need custom scenes built from scratch. We give every client a clear quote after a short chat about their book.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to make a book trailer?',
    'a' => 'Most projects take between two and four weeks from our first chat to final delivery, depending on how much animation is needed and how quickly script and storyboard approvals come back.',
  ),
  2 =>
  array (
    'q' => 'Do I need finished illustrations before I contact you?',
    'a' => 'Not always. If your book is finished, we animate your existing art. If it is still in progress, we can build simple custom scenes instead, based on your story and characters.',
  ),
  3 =>
  array (
    'q' => 'Can you make a children\'s story video promotion in Sydney for a book that is not out yet?',
    'a' => 'Yes. Pre-release trailers are common and can help build interest with schools, libraries, and bookshops ahead of your official launch date.',
  ),
  4 =>
  array (
    'q' => 'What formats will I receive my finished video in?',
    'a' => 'You will receive your video sized correctly for the platforms you plan to use, which usually means a square or vertical file for social media and a standard widescreen file for YouTube and websites.',
  ),
  5 =>
  array (
    'q' => 'Do you only work with authors based in Sydney?',
    'a' => 'Most of our clients are Sydney-based, but we also work with authors and small publishers from other parts of Australia. Being in Sydney simply means we can meet in person if that suits your project better.',
  ),
  6 =>
  array (
    'q' => 'Can you create video trailers for kids\' picture books in Sydney if I only have a manuscript and no art yet?',
    'a' => 'Yes. We can build a trailer around a simple custom style suited to your story, then update it later once your final illustrations are ready.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Book Trailers</div>
      <h1>Sydney <em>Video Book Trailer Service</em> That Makes Kids <strong>Stop Scrolling</strong> and Start Reading</h1>
      <p class="lead">You wrote a picture book. You poured months, maybe years, into the story and the pictures. Now it sits on a shelf or a website, waiting for someone to notice it.</p>
      <p class="lead">A short video can change that. It shows the story moving. It shows the characters talking, the colours popping, the mood building. For a parent scrolling on their phone at nine at night, that short video is often the difference between &ldquo;maybe later&rdquo; and &ldquo;buy now.&rdquo;</p>
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
      <p>Purple Giraffe Press works with authors, illustrators, and small publishers across Sydney to make short videos that show off children's books the right way. We are not a big generic video agency. We only work on kids' books, so we understand pacing, humour, and the little details that make a young reader lean in.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Trailer &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Children's book video trailer service in Sydney at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT IS INCLUDED (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what's included</p>
    <h2>Everything Included in Your Children’s Book Trailer</h2>
    <p style="margin:14px auto 0;">A book trailer is a short promotional video, usually lasting between thirty seconds and two minutes, that introduces the mood, characters, and central idea of your book without revealing the ending. Think of it as a movie trailer created especially for a picture book or early reader. Wherever possible, we use your original book illustrations and bring them to life through gentle movement. Characters may blink, leaves may sway, or waves may roll. If your artwork is not ready yet, we can create simple custom scenes that match your story.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Every Project Includes</h3>
        <div class="fc-body">
          <p>Every book trailer includes a carefully written script that reflects your book’s voice, reading age and overall message. We add light animation using your illustrations or specially created scenes, depending on what materials are available. Music and sound effects are selected to complement the atmosphere of the story without overpowering it. We also include clear text overlays featuring the book title, author name, and purchasing information. Your completed video will be supplied in a high-quality format suitable for YouTube, Instagram, TikTok, your website and your publisher’s catalogue.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M10 8.5 16 12l-6 3.5Z"></path></svg></div>
        <h3>Picture Book Trailers</h3>
        <div class="fc-body">
          <p>Picture book trailers are one of our main areas of focus. As a picture book trailer maker in Sydney, we understand that tone, pacing and emotion can completely change how a children’s story is received. A gentle bedtime story about a sleepy koala may need soft music and slow movement, while a funny story about a burping dragon requires colour, energy and humour from the opening seconds. We carefully match the pace, animation style, and soundtrack to the age of the reader, the personality of the characters, and the atmosphere of the book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M5 21a7 7 0 0 1 14 0"></path></svg></div>
        <h3>Author and Series Trailers</h3>
        <div class="fc-body">
          <p>Some authors prefer a separate trailer for every book, while others need one video that introduces their complete collection or children’s book series. A children’s author video trailer in Sydney can showcase several covers, characters and themes within one clear and engaging presentation. This format works particularly well for school visits, library talks, author websites, publishing events, and social media profiles. Instead of promoting only one title, the trailer gives viewers a stronger understanding of who you are as an author and what readers can expect from your wider body of work.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Launch and Pre-Order Trailers</h3>
        <div class="fc-body">
          <p>A launch or pre-order trailer can help generate interest before your book officially becomes available. The video can highlight the release date, introduce the main character, and encourage readers, parents, teachers, or librarians to place an early order. This works well as a book launch trailer for children’s authors in Sydney who want to build awareness within schools, libraries, local bookshops and online communities. By sharing the trailer during the weeks leading up to publication, you can create anticipation, strengthen your launch campaign, and give potential readers a memorable first look at the book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Choosing the Right Length and Style</h3>
        <div class="fc-body">
          <p>Not every children’s book needs the same video length or presentation style. A thirty-second teaser is ideal for social media, where parents, teachers, and readers may only have a few moments to stop and watch. A longer trailer of around sixty to ninety seconds provides more time to introduce characters, show several illustrated scenes, and build interest in the storyline. The right option depends on your audience, the complexity of the book, and the platform where the trailer will be shared. We help you choose a format that presents the story clearly without making the video feel rushed.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Creating the Trailer for Your Platform</h3>
        <div class="fc-body">
          <p>We discuss where your book trailer will be used before production begins, as each platform requires a slightly different approach. A video made primarily for Instagram may need a faster opening and vertical layout, while a trailer for an author website or school presentation can develop the story more gradually. We plan the length, dimensions, text placement, and pacing around your chosen platforms from the beginning. This prevents the video from feeling awkward or poorly fitted later. The result is a polished trailer designed to reach your audience effectively wherever you decide to share it.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHY A TRAILER HELPS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it works</p>
    <h2>How Children’s Book Trailers Help Increase Book Visibility</h2>
  </div>
  <div class="container narrow center">
    <p>Picture books are a visual product. A written blurb on an online store cannot show a reader what the art looks like, how the characters move, or how a page turn might land as a small surprise. Video can.</p>
    <p style="margin-top:14px;">Here is what a good trailer does for you:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Gives buyers a real feel for the book.</strong> Parents and teachers can see the art style and hear a snippet of the story before they commit to buying.</li>
      <li><strong>Works across more platforms than text ever could.</strong> The same video can run on Instagram, TikTok, YouTube, a school newsletter, or a library display screen.</li>
      <li><strong>Gives you something to send to the media and bookshops.</strong> A short, polished video is far easier for a journalist or bookshop buyer to watch than it is for them to read a full manuscript.</li>
      <li><strong>Builds trust in your brand as an author.</strong> A well-made trailer signals that you take your work seriously, which matters when you are pitching schools, libraries, or literary agents.</li>
      <li><strong>Extends the life of your book launch.</strong> A trailer can be reused for months after release, at book fairs, in email newsletters, and on your author page.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Working in children's publishing video marketing in Sydney has taught us that trailers work best when they are treated as one part of a bigger push, alongside author visits, social posts, and local bookshop stock, not as a stand-alone fix.</p>
  </div>
</section>

<!-- 6 - TRAILERS BY READING AGE (feature cards) -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Children’s Book Trailers Designed for Every Reading Age Group</h2>
    <p style="margin:14px auto 0;">Every children’s book has its own audience, and the trailer should speak directly to that age group. A toddler’s story needs gentle movement and simple visuals, while an older child’s adventure may need more energy, character moments and a stronger sense of story. We create trailers that match the reading level, tone, and expectations of your intended audience.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 0–3: Gentle Trailers for First Little Stories</h3>
        <div class="fc-body">
          <p>Books for babies and toddlers need simple visuals, calming sounds, and clear storytelling moments. We focus on soft animation, friendly characters, and easy-to-follow scenes that capture attention quickly. The goal is to create a warm introduction that parents and young children can enjoy together.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 3–5: Colourful Trailers for Picture Book Adventures</h3>
        <div class="fc-body">
          <p>Picture book trailers should feel playful, imaginative, and full of personality. We highlight the characters, illustrations, and emotional moments that make young children connect with the story. Bright visuals, engaging movement, and carefully chosen sounds help create a trailer families want to watch and share.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 6–8: Engaging Trailers for Growing Readers</h3>
        <div class="fc-body">
          <p>Early readers respond well to stories with clear characters, exciting moments, and easy-to-follow narratives. We create trailers that showcase the heart of the story while keeping the visuals energetic and inviting. The aim is to encourage curiosity and help children feel excited to explore the book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Ages 8–12: Adventure-Focused Trailers for Middle Grade Books</h3>
        <div class="fc-body">
          <p>Middle-grade stories often include bigger worlds, stronger characters, and more detailed plots. We create trailers that build excitement through atmosphere, character highlights, and memorable scenes. Whether your book is fantasy, mystery, humour, or adventure, we shape the trailer around what will interest young readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Ages 13–17: Modern Trailers for Young Adult Stories</h3>
        <div class="fc-body">
          <p>Young adult books need a more mature visual approach while still capturing the emotion behind the story. We focus on mood, character connections, and themes that appeal to teenage audiences. The final trailer feels polished, engaging, and suited to modern platforms where young readers discover new books.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Family and Multi-Age Books: Reaching Wider Audiences</h3>
        <div class="fc-body">
          <p>Some children’s books are created to be enjoyed by multiple age groups, including parents, siblings and classrooms. For these projects, we balance playful visuals with broader storytelling elements. The trailer is designed to show the book’s wider appeal and encourage different audiences to discover the story.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 7 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Authors, publishers and schools we make book trailers for in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Book Trailer Services for Authors, Publishers, and Schools</h2>
      <p>We work with a mix of people across the children's book world in Sydney and further afield:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published picture book authors getting ready for their first release</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent children's publishers with a list of titles to promote</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who want a video to show off their art style to future clients</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and libraries producing a trailer for a book written by students or staff</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Literary agents who want a polished sample to send to publishers</span></li>
      </ul>
      <p>If you fall outside these groups but still think a trailer would help your project, get in touch. Most rules in this space are more flexible than people expect.</p>
      <p>Some clients come to us with a finished book and a launch date already set. Others come to us early, sometimes before the book is even finished, wanting a video to use for crowdfunding or to show a publisher what the finished product might feel like. Both situations work fine. We simply adjust the process depending on how much finished material you already have.</p>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-soft">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Book Trailer Studio in Sydney</h2>
      <p>Not every video studio understands children's books. Before you hire anyone for this kind of work, ask them:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have you worked on children's or picture books before, or mostly on adult fiction and business videos?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can I see full trailers you have made, not just short clips or a highlight reel?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you write the script, or do I need to supply the words myself?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of changes are included before extra costs kick in?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do you own the rights to any stock music or animation used, so there are no copyright issues after release?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What file formats will I get, and are they sized correctly for Instagram, TikTok, and YouTube?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How long will the whole process take from start to finish?</span></li>
      </ul>
      <p>A studio that answers these clearly and honestly is worth trusting. One who dodges the questions probably has not made many of these videos before.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book trailer studio in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Children’s Book Trailer Creation Process</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: A Short Chat About Your Book</h3></div>
        <div class="svc-step-body"><p>We start with a quick call or email chat. We ask about your book's age group, tone, release date, and any budget in mind. If you already have cover art or sample illustrations, send them through at this point.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: Script and Storyboard</h3></div>
        <div class="svc-step-body"><p>We write a short script and a simple storyboard showing roughly what each scene will look like. You approve this before any animation work begins, so there are no surprises later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: Animation and Sound</h3></div>
        <div class="svc-step-body"><p>Once the script is locked in, we animate your illustrations or build custom scenes, then add music, sound effects, and text. This is where the video really starts to feel alive.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: Review and Changes</h3></div>
        <div class="svc-step-body"><p>We send you a draft video to watch. You can ask for changes to pacing, music, text, or colour. Most projects need one or two rounds of small changes before everyone is happy.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: Final Files and Delivery</h3></div>
        <div class="svc-step-body"><p>Once approved, we deliver your finished video in formats sized for the platforms you actually plan to use it on, whether that is a square version for Instagram, a vertical version for TikTok, or a standard version for YouTube and your website.</p></div>
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
      <h2>Why Sydney Authors and Publishers Choose <em>Purple Giraffe Press</em></h2>
      <p>Our real edge, when we build an illustrated children's book teaser video in Sydney, is patience with the small details that matter in kids' books: getting a character's expression right, timing a joke so it actually lands with a seven-year-old, and choosing music that a parent won't want to mute after ten seconds.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only work on children's books.</h3><p>We are not a general ad agency squeezing your project between a car dealership video and a restaurant promo. Kids' books are all we do.</p></article>
      <article><span>✓</span><h3>You deal with the same person throughout.</h3><p>No handing your project between five different staff members. One point of contact from script to final file.</p></article>
      <article><span>✓</span><h3>Honest timelines.</h3><p>We tell you upfront how long your project will realistically take, and we stick to it.</p></article>
      <article><span>✓</span><h3>Clear, simple pricing.</h3><p>No hidden add-ons dropped on you at the end of the project.</p></article>
      <article><span>✓</span><h3>Local to Sydney.</h3><p>We understand the local children's book scene, from indie bookshops to school library programs, and we can meet in person if that helps.</p></article>
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
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for a children's book trailer in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Children’s Book Trailer Pricing and Project Costs</h2>
      <p>Every book is different, so we do not publish a single flat price. A short trailer for one picture book costs less than a multi-book series trailer with custom animated scenes. Once we know your book's length, art style, and how much animation you want, we will send a clear, itemised quote with no hidden extras.</p>
      <p>A few things tend to change the price:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many scenes and characters need animating</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Whether we are working from finished illustrations or building custom scenes from scratch</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>The final length of the video</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of revisions do you expect to need</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Whether you want extra cut-down versions for different social platforms</span></li>
      </ul>
      <p>Get in touch, and we will talk pricing honestly, based on exactly what your project needs, rather than pushing you toward a package that does not fit.</p>
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
$location_services_heading = 'More Ways We Can Help Your Book';
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
      <h2>Create a Book Trailer That <em>Helps Your Story Get Discovered</em></h2>
      <p>Your story deserves more than a static cover image on a webpage. Reach out to Purple Giraffe Press today for a friendly, no-pressure chat about your book and what a trailer could look like. Send through your book details, your rough release date, and any art you have ready, and we will get back to you with next steps.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to make your children's book trailer" loading="lazy" decoding="async">
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

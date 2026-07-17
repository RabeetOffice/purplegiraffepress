<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Trailers Service in Melbourne';
$page_description = 'Bring your children\'s book to life with engaging video trailers made in Melbourne. Story-driven, creative trailers that capture young readers\' hearts.';
$canonical_path   = 'childrens-book-trailers-service-in-melbourne.php';
$breadcrumb_name  = 'Book Trailers in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'Melbourne',     'url' => page_url('locations/melbourne.php')],
    ['name' => 'Book Trailers', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does a typical book trailer take to make?',
    'a' => 'Most projects take between three and six weeks from the first conversation to final delivery, depending on how much animation is involved and how quickly feedback is turned around.',
  ),
  1 =>
  array (
    'q' => 'Do you only work with authors based in Melbourne, or can you help authors in other cities too?',
    'a' => 'While we are based in Melbourne and know the local scene well, we also work remotely with authors and small publishers in other cities, including a kids\' book marketing video service in Melbourne available to clients further afield, such as those in London.',
  ),
  2 =>
  array (
    'q' => 'Can you make a trailer if my book has not been illustrated yet?',
    'a' => 'Yes. We can work with a rough draft, sample sketches, or commission an original illustration as part of the project, though this will affect the timeline and cost.',
  ),
  3 =>
  array (
    'q' => 'What video formats will I receive at the end?',
    'a' => 'You will receive files suited to your intended platforms, which usually means a square or vertical version for social media and a horizontal version for websites or screens at events.',
  ),
  4 =>
  array (
    'q' => 'Do you offer video trailers for kids\' picture books in Melbourne that are shorter than a minute?',
    'a' => 'Yes. Many clients prefer a short teaser under sixty seconds for social sharing, alongside a longer version for their website or a launch event.',
  ),
  5 =>
  array (
    'q' => 'Is voiceover included in the price?',
    'a' => 'Voiceover is usually included in our standard packages, but the exact inclusions depend on your quote. We are always upfront about what is and is not included before you commit.',
  ),
  6 =>
  array (
    'q' => 'Can you help with a book launch trailer for children\'s authors in Melbourne who are launching internationally, including in London?',
    'a' => 'Yes. We have supported authors with launches that span more than one city, adjusting messaging and event details so the trailer works for each audience, whether the launch is happening in Melbourne, London or somewhere in between.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Book Trailers</div>
      <h1>Turn Pages Into Motion With Creative <em>Children’s Book Trailers Service</em> In <strong>Melbourne</strong></h1>
      <p class="lead">Writing a children's book is hard work. Getting people to notice it is even harder. A good story can sit quietly on a shelf for years if nobody knows it exists. That is where a video trailer comes in.</p>
      <p class="lead">At Purple Giraffe Press, we make short, warm, well-crafted trailers that show off your book in a way words alone cannot. We work with authors, illustrators, and small publishers across Melbourne who want their story to reach real readers, not just sit in a file on their laptop.</p>
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
      <h2>A story worth sharing, brought to the screen</h2>
      <p>You do not need a big budget or a background in marketing to get a trailer that looks professional. You just need a story worth sharing and a team who knows how to bring it to the screen with care. That is exactly what we do.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Trailer &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Children's book trailers service in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - HOW A TRAILER HELPS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it works</p>
    <h2>How A Children’s Book Trailer Helps Your Story Get Noticed</h2>
  </div>
  <div class="container narrow center">
    <p>A book trailer is a short video, usually between thirty seconds and two minutes long, that gives people a taste of your book. Think of it like a movie trailer, but for a picture book or a children's story instead of a film.</p>
    <p style="margin-top:14px;">For children's books specifically, video works differently than it does for adult fiction. Kids respond to movement, colour, sound, and character. A still image of a book cover on social media might get scrolled past in a second. A short animated clip of a character walking through a forest, with music and a bit of narration, tends to stop the scroll.</p>
    <p style="margin-top:14px;">Parents are often the ones deciding what to buy, and they are looking for signals that a book is worth their child's time. A well-made trailer gives them that signal quickly, without them needing to read reviews or sample pages first.</p>
    <p style="margin-top:14px;">It also gives your book a life outside the page. Once a trailer exists, it can be sent to bookshops, shared with school libraries, posted on social media, played at a launch event, or included in a media kit for journalists and reviewers. One piece of video content ends up doing the work of several different marketing tasks.</p>
  </div>
</section>

<!-- 5 - TRAILER STYLES (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Explore Our Melbourne Book Trailer Creation Services For Authors</h2>
    <p style="margin:14px auto 0;">We offer a few different styles of trailer, depending on your book, your budget, and what you are trying to achieve. Every project is built around your actual story and artwork, not a generic template.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M10 8.5 16 12l-6 3.5Z"></path></svg></div>
        <h3>Animated Trailers for Picture Books and Young Readers</h3>
        <div class="fc-body">
          <p>This is our most requested service. We take illustrations from your book or work with an illustrator to create new artwork and bring them to life with gentle motion, sound design, and voiceover. These animated book trailers for kids in Melbourne are built to feel like a small extension of the book itself, not a separate advertisement.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M5 21a7 7 0 0 1 14 0"></path></svg></div>
        <h3>Character and Story Teaser Videos</h3>
        <div class="fc-body">
          <p>Sometimes you don't need a full trailer, just a short teaser that introduces a character or hints at the plot without giving too much away. These are shorter, punchier, and work well for building excitement before a launch date.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Live Action and Author Introduction Videos</h3>
        <div class="fc-body">
          <p>Some authors prefer a simpler approach, where the author appears on camera to introduce the book themselves, paired with page turns or artwork. A children's author video trailer in Melbourne like this suits authors who already have a following and want a more personal connection with their readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3.5 2"></path></svg></div>
        <h3>Launch and Event Trailers</h3>
        <div class="fc-body">
          <p>If you have a book launch, school visit, or festival appearance coming up, we can build a trailer specifically for that event, with dates, venue details, and a clear call to action included.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Publisher and Series Promotion Videos</h3>
        <div class="fc-body">
          <p>For small publishers with more than one title, we can create a broader promotional video that covers a series or a season of new releases, rather than just one book.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - AGE GROUPS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Age-Focused Book Trailers Created For Every Melbourne Reader</h2>
    <p style="margin:14px auto 0;">Children respond differently to pacing, colour, sound, and storytelling as they grow. We shape every Melbourne video book trailer around the book’s target age group, reading level and emotional tone, so the final video feels right for both young readers and the adults choosing books for them.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Babies and Toddlers: Ages 0 to 3</h3>
        <div class="fc-body">
          <p>For very young audiences, we use gentle movement, soft music, clear shapes, and familiar characters. The trailer remains calm, simple, and visually easy to follow without overwhelming the child.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Preschool and Early Picture Book Readers: Ages 4 to 6</h3>
        <div class="fc-body">
          <p>Trailers for preschool readers feature playful animation, bright visuals, and simple story moments. Cheerful sound, expressive characters, and an easy pace help build excitement around the book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Developing Readers: Ages 7 to 9</h3>
        <div class="fc-body">
          <p>For children beginning to read more independently, we use stronger storytelling, humour, adventure, and character-focused scenes. The trailer introduces enough of the plot to create curiosity without revealing the full story.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Middle-Grade Readers: Ages 10 to 12</h3>
        <div class="fc-body">
          <p>Middle-grade book trailers can explore mystery, fantasy, friendship, discovery, and more detailed story worlds. We use energetic editing, atmospheric sound, and engaging visuals that feel exciting without appearing too young.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M7 4v16M17 4v16M3 12h18"></path></svg></div>
        <h3>Teen and Young Adult Readers: Ages 13 to 17</h3>
        <div class="fc-body">
          <p>Young adult trailers use cinematic pacing, deeper emotions, dramatic sound, and more mature visual storytelling. Each trailer is designed around the book’s genre, whether it is fantasy, romance, mystery, adventure, or contemporary fiction.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 7 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Melbourne authors, illustrators, and publishers we make book trailers for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Supporting Authors, Illustrators, and Publishers Across Melbourne</h2>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time picture book authors self-publishing their first title</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Established children's authors preparing for a new release</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who want to promote their own work</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers with limited marketing teams</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and libraries are producing videos for reading programs</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Literary agents helping a client prepare for submission or launch</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Best Children’s Book Trailer Maker</h2>
      <p>Not every video company understands children's books. Before you commit to any picture book trailer maker in Melbourne, including us, it is worth asking a few questions.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they made trailers for children's books before, or mostly corporate and adult content? The pacing, tone, and visual style for kids' content are quite different.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they use your actual illustrations or generic stock footage? A trailer that does not match your book's art style can feel disconnected from the book itself.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What is included in the price? Ask whether voiceover, music licensing, and revisions are part of the quote or extra costs added later.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of feedback do you get? Some studios only allow one small revision. Make sure this is clear before you start.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand where the video will be used? A trailer for Instagram needs different dimensions and pacing than one for a publisher's website or a school assembly.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you previous children's book work? A short portfolio review tells you a lot about whether their style suits your story.</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book trailer maker in Melbourne" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHY TRAILERS ARE CHANGING MARKETING (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Book Trailers Are Changing Children’s Book Marketing in Melbourne</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of authors assume that a good book will simply find its readers over time. In reality, most books need some kind of push, especially in the first few months after release.</p>
    <p style="margin-top:14px;">Here is what a good trailer actually does:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Gives your book a shareable format.</strong> Parents, teachers, and grandparents can share a video far more easily than a book review or a text post.</li>
      <li><strong>Builds excitement before the release date.</strong> A teaser released a few weeks ahead of launch gives people a reason to pre-order or mark the date.</li>
      <li><strong>Works across more places than just your book's page.</strong> The same video can appear on social media, in email newsletters, on a publisher's website, and at in-person events.</li>
      <li><strong>Helps non-readers understand the story quickly.</strong> Not everyone will stop to read a blurb, but most people will watch a short video.</li>
      <li><strong>Supports school and library programs.</strong> Teachers and librarians often use short videos to introduce new titles to a class or reading group.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This kind of children's story video promotion in Melbourne is becoming a normal part of how local authors and small publishers launch new titles, alongside more traditional methods like book signings and press releases.</p>
  </div>
</section>

<!-- 10 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Book Trailer Creation Process From Start To Finish</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>We Talk About Your Book</h3></div>
        <div class="svc-step-body"><p>We start with a conversation about your story, your characters, your target age group, and what you want the trailer to achieve. If you already have a launch date or marketing plan, we work around that.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Put Together a Script and Storyboard</h3></div>
        <div class="svc-step-body"><p>Before any animation begins, we write a short script and sketch out a storyboard. This shows you roughly how the trailer will flow, scene by scene, so there are no surprises later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Build the Animation and Sound</h3></div>
        <div class="svc-step-body"><p>Once the storyboard is approved, we move into animation, voiceover recording, and music selection. This is usually the longest part of the process, and where most of the craft happens.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>You Review and Give Feedback</h3></div>
        <div class="svc-step-body"><p>We send you a draft cut to review. You can request changes to pacing, wording, music, or visuals within the agreed revision rounds.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Delivery</h3></div>
        <div class="svc-step-body"><p>Once you are happy with the trailer, we deliver the final files in the formats you need, whether that is for Instagram, YouTube, your website, or a big screen at a launch event.</p></div>
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
      <h2>Why Melbourne Authors and Publishers Choose <em>Purple Giraffe Press</em></h2>
      <p>As a book trailer animation studio in Melbourne, we have built our whole workflow around small runs of highly personal, story-specific videos, rather than mass-produced templates.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only work on children's and young reader content</h3><p>This is not a side service for us. It is what we focus on, which means we understand pacing, tone, and colour choices that suit young audiences.</p></article>
      <article><span>✓</span><h3>We treat your illustrations with respect</h3><p>If your book already has artwork, we build the trailer around it rather than replacing it with something generic.</p></article>
      <article><span>✓</span><h3>Clear pricing from the start</h3><p>You get a quote that spells out exactly what is included, so there are no surprise costs later.</p></article>
      <article><span>✓</span><h3>Local to Melbourne</h3><p>We understand the local publishing scene, local schools, and local events, which helps when a trailer needs to speak to a Melbourne audience specifically.</p></article>
      <article><span>✓</span><h3>We keep you involved throughout</h3><p>You see the script, the storyboard, and the draft cut before anything is finalised, so you are never surprised by the final result.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for a children's book trailer in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Factors Influence The Cost Of A Book Trailer in Melbourne</h2>
      <p>Pricing depends on the length of the trailer, the amount of animation involved, whether you need original illustrations created, and how many revision rounds you want included. A short teaser will cost less than a fully animated trailer with custom voiceover and original music.</p>
      <p>Rather than list a flat rate that might not suit your project, we prefer to talk through what you need first and give you an honest, itemised quote. There is no obligation attached to asking for a quote.</p>
      <p>If the budget is tight, tell us early. We can often suggest a smaller version of a project, such as a shorter teaser instead of a full trailer, or reusing existing illustrations instead of commissioning new artwork, so you still end up with something usable without stretching your budget further than it needs to go.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 15 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready To Introduce Your <em>Children’s Book To More Readers</em></h2>
      <p>Your story deserves more than a quiet spot on a shelf. If you have a children's book that is ready to meet its readers, we would like to help you get there.</p>
      <p>Get in touch with Purple Giraffe Press and tell us about your book. We will talk through what kind of trailer suits your story, your budget, and your timeline, with no pressure to commit until you are ready.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to make your children's book trailer in Melbourne" loading="lazy" decoding="async">
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

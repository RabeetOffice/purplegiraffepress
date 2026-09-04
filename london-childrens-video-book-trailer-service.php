<?php
include 'includes/config.php';

$page_title       = 'London Children\'s Video Book Trailer Service';
$page_description = 'Bring your children\'s book to life with engaging video trailers made in London. Story-driven, creative trailers that capture young readers\' hearts.';
$canonical_path   = 'london-childrens-video-book-trailer-service.php';
$breadcrumb_name  = 'Book Trailers in London';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'London',        'url' => page_url('locations/london.php')],
    ['name' => 'Book Trailers', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How much does a children\'s book trailer cost in London?',
    'a' => 'Cost depends on the length, style, and complexity of the video. A simple illustration-based trailer costs less than one with full custom animation and original voiceover. We give a clear quote after hearing about your project.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to make a book trailer?',
    'a' => 'Most projects take between three and six weeks from the first call to final delivery, depending on how detailed the animation is and how quickly feedback is given at each stage.',
  ),
  2 =>
  array (
    'q' => 'Do you only work with authors based in London?',
    'a' => 'No. While we are based in London and know the local publishing scene well, we work with authors and publishers from further afield too; all conversations happen easily by call or email.',
  ),
  3 =>
  array (
    'q' => 'Can you use my own illustrator\'s artwork in the trailer?',
    'a' => 'Yes. Wherever possible, we build the trailer around your existing illustrations rather than replacing them with a generic style. This keeps the video feeling like part of your book.',
  ),
  4 =>
  array (
    'q' => 'What if I do not have a voiceover artist for my book?',
    'a' => 'That is fine. We can arrange voiceover as part of the project, or keep the video to text and sound only if you prefer a quieter, more visual trailer.',
  ),
  5 =>
  array (
    'q' => 'Do you offer shorter clips for social media as well as a full trailer?',
    'a' => 'Yes. Many clients ask for a full trailer alongside a few shorter cuts for Instagram or TikTok, which we can put together as part of the same project.',
  ),
  6 =>
  array (
    'q' => 'Is a book trailer worth it for a first-time children\'s author?',
    'a' => 'It can be, especially around a launch event or school visit, but it works best alongside other marketing such as reviews and social media, not as a replacement for them.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). */
$location_business = [
    'streetAddress' => '20 Old Bailey',
    'locality'   => 'London',
    'region'     => 'London',
    'postalCode' => 'EC4M 7EN',
    'country'    => 'GB',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Book Trailers</div>
      <h1>London <em>Children’s Video Book Trailer Service</em> for Children's Authors and <strong>Publishers</strong></h1>
      <p class="lead">Writing a children's book takes months, sometimes years. Getting people to notice it can feel like it takes just as long. A good book trailer is one of the simplest ways to change that. It gives your story a face, a voice, and a bit of movement, and it gives parents, teachers, and booksellers a reason to stop scrolling and pay attention.</p>
      <p class="lead">At Purple Giraffe Press, we make animated book trailers for kids in London that are built around your characters and your story, not a generic template. We work with self-published authors, small publishers, and independent bookshops across the city who want a video that actually looks like their book, not a stock clip with some text over the top.</p>
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

<!-- 3 - WHAT IS INCLUDED: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what it is</p>
      <h2>Everything Included In Our Children’s Book Trailer Creation Service</h2>
      <p>A book trailer is a short video, usually between thirty seconds and two minutes, that gives a taste of your story without giving away the ending. Think of it as a cinema trailer, but for a picture book, chapter book, or middle-grade novel.</p>
      <p>We handle the whole process for you, from the first idea to the finished file ready to upload. Our service includes:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A short creative call to talk through your book, your characters, and your audience</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A simple script and storyboard so you can see the plan before any animation starts</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Custom animation or illustration-based movement, built to match your book's own art style</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Voiceover options, including narration, character voices, or text on screen only</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Music and sound effects that suit the mood of your story</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Two rounds of revisions are included, so you are not stuck with a first draft you do not love</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Final files formatted for YouTube, Instagram, TikTok, Amazon, and your own website</span></li>
      </ul>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Trailer &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Children's book trailer service in London at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - TRAILER STYLES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- trailer styles</p>
    <h2>Book Trailer Styles Designed For Every Type Of Children’s Story</h2>
    <p style="margin:14px auto 0;">Every book is different, so we do not force every project into one style of video. Here is how we usually approach the main types of children's books.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><circle cx="8.5" cy="9.5" r="1.8"></circle><path d="m4 18 5-5 4 4 3-3 4 4"></path></svg></div>
        <h3>Picture Book Trailers</h3>
        <div class="fc-body">
          <p>For younger readers, we lean on the artwork already inside the book. Our illustrated children's book teaser video in London brings the pages to life with gentle movement, like a page turning, a character blinking, or clouds drifting across a sky. This keeps the video feeling like an extension of the book rather than something separate from it. Many of the picture books we work on are quiet, gentle stories, and the trailer needs to reflect that pace rather than rushing through it.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M10 8.5 16 12l-6 3.5Z"></path></svg></div>
        <h3>Chapter Book and Middle Grade Trailers</h3>
        <div class="fc-body">
          <p>Older readers respond well to a bit more pace and a hint of mystery. For these projects, we often mix illustration with short animated scenes and text on screen, giving a sense of adventure without revealing too much of the plot.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M5 21a7 7 0 0 1 14 0"></path></svg></div>
        <h3>Series and Character Introduction Videos</h3>
        <div class="fc-body">
          <p>If you have a series, we can build a short trailer that introduces the world and the main characters, useful for launch events, school visits, or a landing page that sits behind a "meet the characters" button.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="3" width="6" height="11" rx="3"></rect><path d="M5 11a7 7 0 0 0 14 0M12 18v3"></path></svg></div>
        <h3>Author Introduction Clips</h3>
        <div class="fc-body">
          <p>Alongside a trailer for the book itself, some authors like a short personal video too. A children's author video trailer in London can be a lovely way to say hello to readers and parents directly, especially for authors who do school visits or festival appearances around the city. It also gives you something warm and personal to share when a journalist or blogger asks for a quote or a clip ahead of publication day.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Children’s Book Trailers Tailored To Different Reading Age Groups</h2>
    <p style="margin:14px auto 0;">Children’s interests, reading abilities and emotional understanding change as they grow. We tailor every London video book trailer to the book’s intended age group, using suitable animation, language, music and pacing to connect with the right readers.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Babies and Toddlers: Ages 0 to 3</h3>
        <div class="fc-body">
          <p>For very young children, we use gentle movement, soft sound, simple shapes, and familiar characters. The trailer remains calm, colourful, and easy to follow without including too much information at once.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Preschool and Early Picture Book Readers: Ages 4 to 6</h3>
        <div class="fc-body">
          <p>Trailers for preschool audiences include playful animation, expressive characters, cheerful music, and clear story moments. The focus is on creating excitement while keeping the story simple and visually engaging.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Developing Independent Readers: Ages 7 to 9</h3>
        <div class="fc-body">
          <p>For children beginning to read independently, we introduce stronger characters, humour, adventure and slightly more detailed plots. The trailer reveals enough of the story to build curiosity without giving away the ending.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Middle-Grade Readers: Ages 10 to 12</h3>
        <div class="fc-body">
          <p>Middle-grade book trailers can include fantasy, mystery, friendship, discovery, and fast-moving adventures. We use energetic pacing, atmospheric sound, and more detailed visuals that feel exciting without appearing too young.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M7 4v16M17 4v16M3 12h18"></path></svg></div>
        <h3>Teen and Young Adult Readers: Ages 13 to 17</h3>
        <div class="fc-body">
          <p>Young adult trailers use cinematic visuals, deeper emotions, dramatic music, and more mature storytelling. Each video is shaped around the book’s genre, whether it is fantasy, mystery, adventure, romance or contemporary fiction.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The London authors, publishers, and schools we make children's book trailers for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping Authors, Publishers, and Schools Promote Children’s Books in London</h2>
      <p>Our clients come from right across the children's book world in London and further afield. We regularly work with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published children's authors preparing for a book launch</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent children's publishers</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Literary agents supporting a debut author</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Bookshops and libraries are running promotional events</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools producing a video for a book fair or reading week</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who want to showcase their own picture book projects</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How To Choose The Right Children’s Book Trailer Company London</h2>
      <p>Not every video company understands children's books, and that matters more than people expect. Before you commit to anyone, including us, it is worth asking a few honest questions.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Have they made trailers for children's books before, or mostly adult fiction and business videos?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they use your actual book's artwork, or a generic animation style pulled from a library?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of changes are included before extra costs kick in?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain timelines clearly, or leave you guessing?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show examples of the age group your book is aimed at?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is the pricing based on your project, or a flat rate that ignores what your book actually needs?</span></li>
      </ul>
      <p>A trailer maker who understands picture books will ask about your characters and your audience before they ever mention software or animation styles. If a company jumps straight to price without asking about the book, that is usually a sign they treat every project the same way.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's book trailer company in London" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY A TRAILER HELPS (list) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>How A Powerful Book Trailer Helps Children’s Books Get Noticed</h2>
  </div>
  <div class="container narrow center">
    <p>A trailer will not replace a good story, but it can help the right readers find that story in the first place. Here is what a well-made video tends to do for a children's book.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>It gives parents and teachers something to share on social media in seconds, rather than typing out a long description</li>
      <li>It helps booksellers and librarians decide quickly whether a book fits their shelves or reading lists</li>
      <li>It gives a launch event or school visit a strong opening moment</li>
      <li>It turns a book cover, which is mostly still and quiet, into something with sound and movement</li>
      <li>It works as a small piece of children's story video promotion in London that can be reused across a website, email newsletter, and social channels for months after launch</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this replaces reviews, word of mouth, or a strong cover design. A trailer works best as one part of a wider launch plan, not the whole plan on its own. This is especially true for video trailers for kids' picture books in London, where a short, warm clip often fits naturally alongside a bookshop event or a library reading session.</p>
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
    <h2>Our Simple Step-by-Step Children’s Book Trailer Process</h2>
    <p style="margin:14px auto 0;">We keep the process simple and clear, so you always know what stage your project is at.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>A Friendly Chat About Your Book</h3></div>
        <div class="svc-step-body"><p>We start with a short call or email exchange to understand your book, your deadline, and your budget. This is also where we talk honestly about whether a trailer suits your project.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Script and Storyboard</h3></div>
        <div class="svc-step-body"><p>Our team writes a short script and a simple storyboard, showing roughly what each scene will look like. Nothing goes into animation until you have approved this stage.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Animation and Voice Work</h3></div>
        <div class="svc-step-body"><p>Once the storyboard is signed off, we move into animation, along with any voiceover or music. This is usually the longest stage, but we will give you a realistic timeframe from the start.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review and Revisions</h3></div>
        <div class="svc-step-body"><p>We send you a first cut of the trailer. You get two rounds of feedback included in the price, so small changes to pacing, text, or sound can be made without extra cost.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Delivery</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we deliver the finished files in the formats you need, ready for your launch, your website, or your social media channels.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Choose <em>Purple Giraffe Press</em> For London Book Trailers</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only work on children's and young readers' books</h3><p>This is not a side project alongside adult fiction or corporate videos. Every trailer we make is built around the world of children's publishing.</p></article>
      <article><span>✓</span><h3>We match the style of your own book</h3><p>Rather than pushing every client into one house style, we build the trailer around your illustrations, your colour palette, and your characters as they already exist.</p></article>
      <article><span>✓</span><h3>We are upfront about timelines and cost</h3><p>You will get a clear quote before any work begins, and we will tell you honestly if your deadline is tight or your budget needs adjusting.</p></article>
      <article><span>✓</span><h3>We include revisions as standard</h3><p>Two rounds of changes are built into every quote, so you are not charged extra for reasonable feedback.</p></article>
      <article><span>✓</span><h3>We are based in London and understand the local market</h3><p>From school visits to independent bookshops, we know the kind of events and platforms London-based authors and publishers actually use.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for a children's book trailer in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Understanding The Cost Of Creating A Children’s Book Trailer in London</h2>
      <p>The cost of a children’s book trailer depends on the length of the video, the animation style, the number of scenes and the level of creative work involved. Projects using existing illustrations may require a different scope from trailers that need original artwork, character animation, professional voiceover, or custom sound design.</p>
      <p>We do not use one fixed price because every book and marketing goal is different. After learning about your story, target age group, preferred video format, and intended platforms, we provide a clear, itemised quote showing exactly what is included. This allows you to choose a trailer that suits your book and available budget without paying for features you do not need.</p>
      <p>Where necessary, we can also suggest a simpler approach, such as a shorter teaser or illustration-based motion trailer, while still creating a polished and engaging result.</p>
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
      <h2>Turn Your <em>Children’s Book</em> Into An Engaging Visual Experience</h2>
      <p>If you have a children's book coming out and you are wondering whether a trailer is worth it, get in touch. We are happy to have a no-obligation chat about your project, your timeline, and what a trailer could realistically do for your launch. As a picture book trailer maker in London, we would love to help your story find its readers.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to make your children's book trailer in London" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 18 - FOOTER -->
<?php include 'includes/footer.php'; ?>

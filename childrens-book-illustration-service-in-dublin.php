<?php
include 'includes/config.php';

$page_title       = 'Dublin Illustration Service for Children\'s Books';
$page_description = 'Bring your children\'s story to life with beautiful illustrations made in Dublin. Creative, heartfelt artwork that captivates young readers.';
$canonical_path   = 'childrens-book-illustration-service-in-dublin.php';
$breadcrumb_name  = 'Custom Illustrations in Dublin';
$breadcrumbs = [
    ['name' => 'Home',                'url' => page_url('index.php')],
    ['name' => 'Locations',           'url' => page_url('locations/')],
    ['name' => 'Dublin',              'url' => page_url('locations/dublin.php')],
    ['name' => 'Custom Illustrations', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Dublin?',
    'a' => 'No. Most of our clients are in Dublin, but we also work with authors across Ireland and further afield, including clients in London. Everything is handled over email and video call, so location is rarely an issue.',
  ),
  1 =>
  array (
    'q' => 'How long does a full picture book take to illustrate?',
    'a' => 'It depends on the length of the book and how detailed the artwork is, but most full picture books take a few months from character sketches to final files. We will give you a realistic timeline once we have seen your manuscript.',
  ),
  2 =>
  array (
    'q' => 'Can you match a style I have seen in another book?',
    'a' => 'We can take inspiration from a style you like, but we will not directly copy another illustrator\'s work. We use it as a starting point and then develop something that suits your story.',
  ),
  3 =>
  array (
    'q' => 'Do you offer illustration services for children\'s very short stories, not just full books?',
    'a' => 'Yes. Not every project is a full-length book. We take on shorter jobs too, including single illustrations, short stories, and smaller projects for schools or family use.',
  ),
  4 =>
  array (
    'q' => 'Is it more expensive to work with a Dublin-based illustrator compared to someone in London?',
    'a' => 'Not necessarily. Pricing depends on the scope of the project rather than the location. Some clients in London choose to work with us because they prefer dealing with a small, local team over a larger agency.',
  ),
  5 =>
  array (
    'q' => 'What if I am not happy with the illustrations for children\'s books in Dublin that you have sent me?',
    'a' => 'We build revision rounds into every project for exactly this reason. If something is not right, tell us, and we will adjust it. Big changes to direction after final approval may involve an extra cost, which we will always discuss before doing any extra work.',
  ),
  6 =>
  array (
    'q' => 'Do I need to have finished writing my book before contacting you?',
    'a' => 'Not at all. Plenty of clients come to us with an idea rather than a finished manuscript. We are happy to talk things through at whatever stage your story is at.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Custom Illustrations</div>
      <h1>Children's Book Illustration Service in <strong>Dublin</strong> for <em>Authors Who Want Their Story Seen</em></h1>
      <p class="lead">Every good children's book needs two things. A story worth telling, and pictures that make a child want to turn the page. At Purple Giraffe Press, we look after the second part.</p>
      <p class="lead">Maybe you have written a bedtime story for your own kids and want to turn it into something real. Maybe you run a small business in Dublin and need artwork for a book you plan to sell or give away. Maybe you are a teacher, a grandparent, or a first-time author with a story sitting in a notebook. Whatever the reason, you need someone who can draw it properly and understand what makes young readers actually enjoy a book.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Illustrations</a>
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
      <p>That is where we come in. We are a small team based here in Dublin, and we work with parents, authors, schools, and small publishers who want proper illustration for their book. We are not a big faceless agency. You will deal with real people who read your story, ask questions about your characters, and draw pictures that match what you had in your head.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Illustrations &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Children's book illustration service in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - ILLUSTRATION SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Explore Our Complete Children’s Book Illustration Services in Dublin</h2>
    <p style="margin:14px auto 0;">Not every book needs the same kind of artwork, and no two illustration books in Dublin turn out exactly the same way. A board book for toddlers is a different job from a chapter book for eight-year-olds. Here is how we break the work down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Full Picture Book Illustration</h3>
        <div class="fc-body">
          <p>This is our main service. You send us a manuscript, and we illustrate every page from cover to cover. We work out how the pictures and words sit together, plan each spread, and draw characters that stay consistent from the first page to the last.</p>
          <p>Before we draw a single final page, we plan out the whole book on a rough storyboard. This is basically a simple sketch of every page, showing where the text sits and what is happening in each picture. It sounds like an extra step, but it saves a huge amount of back and forth later, because you can spot problems with pacing or layout while everything is still easy to change.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M5 21a7 7 0 0 1 14 0"></path></svg></div>
        <h3>Character Design</h3>
        <div class="fc-body">
          <p>Before any full pages get drawn, we sketch out your main characters. This gives you a chance to see the character, ask for changes, and approve the look before we commit to the full book. Getting this right early saves time and money later.</p>
          <p>We usually offer a few different directions for your main character at this stage, rather than just one option. Maybe your hero looks a bit older in one version, or the colours feel warmer in another. Seeing a couple of choices side by side makes it much easier to say what feels right, even if you cannot quite explain why in words.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="2"></rect><path d="M8 3v18"></path><path d="M12 9h5M12 13h5"></path></svg></div>
        <h3>Cover Art</h3>
        <div class="fc-body">
          <p>The cover is what sells the book, whether it is sitting on a shelf in a shop or showing up as a thumbnail online. We design covers that work at a glance, not just up close.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Digital and Colouring Book Illustration</h3>
        <div class="fc-body">
          <p>Not every project is a printed book. We also illustrate for apps, ebooks, and simple colouring books, using the same care we put into printed work.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Single Illustrations</h3>
        <div class="fc-body">
          <p>Sometimes you just need one or two pictures, maybe for a school project, a family keepsake, or a small print run. We are happy to take on smaller jobs too.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>If you are looking for a book illustrator in Dublin who can handle a project, big or small, this is the range of work we take on.</p>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Creating Illustrations For Every Children’s Age Group</h2>
    <p style="margin:14px auto 0;">The right illustration style depends on the age of your readers. Younger children respond to simple, expressive artwork, while older readers need more detailed visuals that support deeper storytelling. We help create illustrations that match your book’s audience and reading level.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Baby And Toddler Books (Ages 0–3)</h3>
        <div class="fc-body">
          <p>Illustrations for younger children focus on bold colours, simple shapes, friendly characters, and clear visuals that encourage early learning and recognition.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Books (Ages 3–7)</h3>
        <div class="fc-body">
          <p>Picture books need expressive characters, engaging scenes, and artwork that works together with the text to create an enjoyable reading experience.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h7a2 2 0 0 1 2 2v12a2 2 0 0 0-2-2H4Z"></path><path d="M20 5h-7a2 2 0 0 0-2 2v12a2 2 0 0 1 2-2h7Z"></path></svg></div>
        <h3>Early Readers And Chapter Books (Ages 5–10)</h3>
        <div class="fc-body">
          <p>Illustrations support the story by adding personality, helping children follow characters, and making independent reading more engaging.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Middle Grade Books (Ages 8–12)</h3>
        <div class="fc-body">
          <p>Older children's books often require more detailed artwork, stronger character designs, and visuals that match adventure, fantasy, or emotional themes.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Choosing the right illustration approach helps us create artwork that connects with young readers and brings your story to life in the most suitable way.</p>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin authors, parents, schools, and publishers our children's book illustrators work with" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Dublin Children’s Book Illustrators Work With</h2>
      <p>We take on projects from all sorts of people, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors writing their first children's story</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents who want a one-off keepsake book made just for their family</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small Irish publishers who need reliable illustration on a schedule</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and teachers are producing books for classroom use</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Businesses that want a branded storybook for kids</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Anyone who wants to make their own children's book in Dublin, even without any drawing skills themselves</span></li>
      </ul>
      <p>You do not need to be a professional writer or have any experience with publishing. Most of the people who come to us have never worked with an illustrator before, and that is completely fine. We will walk you through it.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Dublin Children’s Book Illustrator</h2>
      <p>Hiring someone to draw your book is a big decision. There are several book illustrators in Dublin, and it is worth being careful about who you choose to work with. Here are some honest questions worth asking any illustrator before you commit:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can I see a full sample of their previous work, not just isolated images?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will the same person draw the whole book, so the style stays consistent?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is pricing clear from the start, or does it change halfway through?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of changes are included before extra charges apply?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who owns the artwork once the book is finished?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if you are not happy with the first drafts?</span></li>
      </ul>
      <p>A good illustrator will answer all of these without hesitation. If someone is vague about pricing or ownership, that is worth noticing early rather than after you have paid a deposit.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing the right children's book illustrator in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PROFESSIONAL ILLUSTRATION MATTERS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Illustration Makes Children’s Books More Engaging</h2>
  </div>
  <div class="container narrow center">
    <p>It is easy to think of pictures as decoration, something added after the real work of writing is done. In children's books, that is not really true. The pictures carry half the story, sometimes more.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Young children read pictures before they read words, so the artwork needs to actually tell the story on its own.</li>
      <li>Consistent character design helps a child recognise and connect with a character across the whole book.</li>
      <li>Good pacing between pictures and text keeps a child turning pages instead of losing interest.</li>
      <li>A strong cover is often the only chance a book gets to catch someone's eye, whether online or on a shelf.</li>
      <li>Poor or rushed artwork can undo a genuinely good story, no matter how well it is written.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Good children's book illustration in Dublin should feel like part of the story, not something bolted on afterwards. This is why we treat illustration as a proper craft, not an afterthought.</p>
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
    <h2>How We Illustrate Your Children’s Book Step by Step</h2>
    <p>We keep the process simple and easy to follow, from your first email to the finished book.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Get in Touch</h3></div>
        <div class="svc-step-body"><p>Send us your manuscript, or even just an idea if you have not written the full story yet. Tell us roughly what age group the book is for and any thoughts you already have about the style.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>A Quick Chat</h3></div>
        <div class="svc-step-body"><p>We will arrange a call or a video chat to talk through your story, your characters, and what you are hoping the finished book will look like. This is also where we answer any questions you have about timelines or cost.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Character Sketches</h3></div>
        <div class="svc-step-body"><p>We draw rough versions of your main characters first. You get to see these before anything else moves forward, and we make changes here rather than later on.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Sample Spread</h3></div>
        <div class="svc-step-body"><p>Once characters are approved, we illustrate one full spread of the book. This shows you exactly how the finished pages will look and feel.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Full Illustration</h3></div>
        <div class="svc-step-body"><p>With the sample approved, we illustrate the rest of the book. We send updates along the way rather than disappearing until the very end.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Review and Final Files</h3></div>
        <div class="svc-step-body"><p>You review the complete set of illustrations, we make any final adjustments, and then we send over print-ready files or digital files, depending on what you need.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Children’s Book Authors Choose <em>Purple Giraffe Press</em> for Illustration in Dublin</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children’s Book Illustrators in Dublin</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Local and easy to reach</h3><p>Being based in Dublin means you can meet us in person if you would rather talk things through face to face than over email.</p></article>
      <article><span>✓</span><h3>One illustrator, start to finish</h3><p>The same person draws your whole book, so the style and characters stay consistent from page one to the last page.</p></article>
      <article><span>✓</span><h3>Clear pricing from the start</h3><p>You will know the cost before any work begins, with no surprise charges added later.</p></article>
      <article><span>✓</span><h3>Room for changes</h3><p>We build a reasonable number of revisions into every project because getting a character right sometimes takes a few tries.</p></article>
      <article><span>✓</span><h3>We listen to the story you actually wrote</h3><p>We do not push our own style onto your book. Our job is to draw the story you have in mind, not the one we might prefer.</p></article>
      <article><span>✓</span><h3>Comfortable with first-time authors</h3><p>Most of our clients have never published a book before. We explain things plainly and never assume you already know the process.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's book illustration in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Determines Children’s Book Illustration Costs in Dublin</h2>
      <p>Pricing depends on the length of the book, the level of detail in the artwork, and how many rounds of revisions you need. A sixteen-page board book with simple artwork costs a lot less than a full-length picture book with detailed, painterly illustrations throughout.</p>
      <p>We do not publish a single flat rate because it would not be honest to pretend every project is the same size. Instead, send us your manuscript or your idea, and we will give you a proper quote based on the actual work involved. There is no charge for this and no obligation to go ahead once you have it.</p>
      <p>A few things tend to affect the final price the most. The number of pages is the obvious one, but the amount of detail per page matters just as much. A busy scene with a full background, several characters, and lots of small elements takes longer than a simple picture with one character against a plain background. Colour work also takes more time than black and white line art. When you send us your manuscript, we will talk through these choices with you so you know exactly what you are paying for and why, rather than just receiving a number with no explanation behind it.</p>
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
      <h2>Ready to See Your <em>Story Illustrated Properly?</em></h2>
      <p>If you have a story that deserves proper artwork, get in touch with us today. Send over your manuscript, or just tell us what you have in mind, and we will talk you through how it could look. No pressure, no jargon, just a straight conversation about your book.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to illustrate your children's book in Dublin" loading="lazy" decoding="async">
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

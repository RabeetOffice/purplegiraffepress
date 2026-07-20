<?php
include 'includes/config.php';

$page_title       = 'Sydney\'s Home for Children\'s Book Illustration';
$page_description = 'Bring your children\'s story to life with beautiful illustrations made in Sydney. Creative, heartfelt artwork that captivates young readers.';
$canonical_path   = 'childrens-book-illustration-services-in-sydney.php';
$breadcrumb_name  = 'Custom Illustrations in Sydney';
$breadcrumbs = [
    ['name' => 'Home',                 'url' => page_url('index.php')],
    ['name' => 'Locations',            'url' => page_url('locations/')],
    ['name' => 'Sydney',               'url' => page_url('locations/sydney.php')],
    ['name' => 'Custom Illustrations', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How much do children\'s book illustrations in Sydney projects usually cost?',
    'a' => 'It depends on page count and detail level. We give a written quote after an initial chat, so you know the full cost before committing to anything.',
  ),
  1 =>
  array (
    'q' => 'Do I need a finished manuscript before contacting a Sydney illustrator?',
    'a' => 'No. Some clients start with just a rough idea. We can help shape the story alongside the artwork if needed.',
  ),
  2 =>
  array (
    'q' => 'How long does a full picture book take to illustrate?',
    'a' => 'Most projects take between eight and sixteen weeks, depending on page count and how many revision rounds are included.',
  ),
  3 =>
  array (
    'q' => 'Can you match the style of an illustrator I have already used?',
    'a' => 'Yes, this is a common request. We look at existing pages and match tone, colour, and line style as closely as possible.',
  ),
  4 =>
  array (
    'q' => 'Do you only work with people based in Sydney, or can I work with you remotely?',
    'a' => 'Most of our clients are local, but we regularly work with authors interstate through video calls and shared online files.',
  ),
  5 =>
  array (
    'q' => 'What if I am not happy with the first character sketches?',
    'a' => 'That is exactly what the revision rounds are for. We expect the first sketches to need tweaking and build that into every quote.',
  ),
  6 =>
  array (
    'q' => 'Can book illustrators in Sydney help with self-publishing as well as illustration?',
    'a' => 'We focus mainly on illustration, but we can point you toward trusted formatting and printing options once your artwork is finished.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Custom Illustrations</div>
      <h1>Sydney <em>Children’s Book Illustrators</em> Turning Stories Into <strong>Visual Worlds</strong></h1>
      <p class="lead">You have a story. Maybe it has been sitting in a notebook for years. Maybe your kids helped you make it up at bedtime. Either way, a good story needs good pictures, and that is where a lot of parents, teachers, and first-time authors get stuck.</p>
      <p class="lead">Purple Giraffe Press works with people across Sydney who want a proper illustration book in Sydney, from a rough sketch through to a finished, printable book. We are not a big faceless studio. You will talk to real people who care about getting your book right.</p>
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
      <p>This page walks you through what we do, how the process works, and what to expect if you want to work with a book illustrator in Sydney who understands both the creative side and the practical side of putting a book together.</p>
      <p>You do not need any experience with publishing or illustration to start. You just need an idea and a bit of patience while we bring it to life.</p>
      <p>Being based here also means we understand the local scene, from school book fairs to small press events around the city, and we know how families and educators in Sydney tend to use these books once they are finished. That local context often shapes small decisions, like how many copies to print first or whether a book suits a classroom read-aloud as well as a bedtime story.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Children's book illustration in Sydney at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT THE CREATIVE WORK COVERS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we can do</p>
    <h2>Inside the Creative Work That Brings Your Story Alive</h2>
    <p style="margin:14px auto 0;">Every book is different, so we break the work into clear stages. You can use all of them or just the parts you need.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.6-6.5 8-6.5s8 2.5 8 6.5"></path></svg></div>
        <h3>Character Design and Concept Art</h3>
        <div class="fc-body">
          <p>Before a single page is illustrated, we focus on developing your characters and visual style. This is where a shy dragon, adventurous rabbit, or playful puppy starts to take shape. We usually provide several concept options so you can explore different directions and choose the one that feels right for your story before moving into the final artwork stage.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M2 4h6a4 4 0 0 1 4 4v12a3 3 0 0 0-3-3H2z"></path><path d="M22 4h-6a4 4 0 0 0-4 4v12a3 3 0 0 1 3-3h7z"></path></svg></div>
        <h3>Full Page Illustration</h3>
        <div class="fc-body">
          <p>Once the character designs are approved, we begin creating the illustrations that bring your story to life. We carefully consider composition, colour, emotion, and storytelling on every page. Each illustration is designed to work alongside the text, helping children connect with the story while creating a visually engaging reading experience.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Illustration Styles for Different Stories</h3>
        <div class="fc-body">
          <p>Every book has its own personality, which is why we work across a variety of illustration styles. From soft watercolour artwork and bold colourful designs to detailed pencil illustrations, we tailor the visuals to suit your story. We are also happy to review reference books or examples that capture the look and feel you have in mind.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="3"></rect><path d="M9 9h.01M15 9h.01"></path><path d="M9 15c.8.8 1.8 1.2 3 1.2s2.2-.4 3-1.2"></path></svg></div>
        <h3>Age-Specific Illustration Approaches</h3>
        <div class="fc-body">
          <p>Children interact with illustrations differently as they grow, so age group plays an important role in our creative decisions. Younger readers often respond best to simple shapes, bright colours and uncluttered scenes. Older children tend to enjoy richer details, more expressive characters, and layered backgrounds that encourage exploration and discovery.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Cover Design</h3>
        <div class="fc-body">
          <p>A book cover has a big job to do. It needs to attract attention, communicate the story’s tone and encourage readers to pick the book up. We create covers that feel visually appealing while remaining appropriate for the genre, age group, and overall style of the book inside.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Style Matching for Existing Projects</h3>
        <div class="fc-body">
          <p>If your project already includes artwork from another illustrator, we can often adapt our approach to match the existing visual style. This helps maintain consistency throughout the book and creates a more professional final product. It is a popular option for authors updating older projects or expanding an existing series.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - FROM IDEA TO FINISHED BOOK -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the journey</p>
    <h2>From Bedtime Idea to a Fully Illustrated Children’s Book, Step by Step</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of people come to us because they want to turn a story into a finished, printed book, but have no idea where to start. That is completely normal, and it is the single most common reason people first get in touch. Here is roughly how a project comes together with us, from the very first email to the moment your finished pages are ready.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>You send us your manuscript or story idea, even a rough draft is fine</li>
      <li>We talk through the age group, the tone, and how many pages you are planning</li>
      <li>We sketch characters and get your feedback before moving further</li>
      <li>We illustrate page by page, sharing drafts as we go</li>
      <li>We finalise files ready for print or for self-publishing platforms</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>You are involved at every stage. Nothing gets locked in without your say-so.</p>
  </div>
</section>

<!-- 6 - PACING: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/love-section.webp" alt="Planning picture book pacing and page turns for a Sydney story" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pacing &amp; layout</p>
      <h2>Building Picture Book Pacing One Page Turn at a Time</h2>
      <p>Some clients already have strong ideas about layout and pacing. Others want us to guide the whole planning process from scratch, working out page counts, spreads, and where the story should turn. Both are fine. We can work from a full manuscript with page breaks marked out, or we can help you figure out where the story should pause, turn a page, or land a punchline.</p>
      <p>This part of the job is more technical than people expect. Page count usually needs to sit within certain ranges for printing to work out affordably, and word placement has to leave enough room for the art to breathe. We handle all of that planning so you do not have to learn the technical side of publishing just to get your book finished.</p>
      <p>Picture books live and die on pacing. A joke that lands on the wrong page loses its punch. A quiet moment that gets rushed feels flat. Part of our job is protecting that rhythm, even when it means suggesting a different page split than what you first imagined.</p>
    </div>
  </div>
</section>

<!-- 7 - ILLUSTRATION BY AGE GROUP (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Illustrations That Change as Young Imaginations Grow and Explore</h2>
    <p style="margin:14px auto 0;">Children of different ages engage with artwork in different ways. A toddler responds to bold colours and simple shapes, while an older child enjoys richer scenes, hidden details and more expressive characters. That is why we adapt our illustration style, page composition, and visual storytelling to suit the age group your book is written for.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 0–3: Big Characters, Bright Colours and Simple Visual Stories</h3>
        <div class="fc-body">
          <p>For babies and toddlers, illustrations need to communicate instantly. We focus on bold shapes, clear expressions, and uncluttered scenes that are easy for young children to recognise and enjoy. Every page is designed to capture attention quickly while supporting early learning and language development.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l2 4.5L19 8l-3.5 3.5L16.5 16 12 13.5 7.5 16l1-4.5L5 8l5-0.5Z"></path><path d="M12 17v4"></path></svg></div>
        <h3>Ages 3–5: Picture Book Artwork That Sparks Curiosity and Wonder</h3>
        <div class="fc-body">
          <p>Children in this age range love colourful worlds, playful characters, and visual surprises. We create illustrations filled with personality, movement, and imagination while keeping the artwork easy to follow. The goal is to encourage repeated reading and create pages children want to explore again and again.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V4H6.5A2.5 2.5 0 0 0 4 6.5v13Z"></path><path d="M4 19.5A2.5 2.5 0 0 0 6.5 22H20v-5"></path></svg></div>
        <h3>Ages 6–8: Richer Worlds for Growing Independent Readers</h3>
        <div class="fc-body">
          <p>As children become more confident readers, they begin paying attention to smaller visual details and stronger storytelling elements. We create more layered illustrations with expressive characters, engaging backgrounds, and scenes that add depth to the written story without overwhelming the page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Ages 8–12: Detailed Illustrations for Bigger Adventures and Stronger Stories</h3>
        <div class="fc-body">
          <p>Middle-grade readers are drawn to exciting worlds, memorable characters, and immersive visual experiences. Whether the story is fantasy, mystery, adventure, or humour, we create illustrations that support more complex storytelling while maintaining the sense of wonder children still love at this age.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Young Adult and Family Titles: Artwork That Balances Emotion and Storytelling</h3>
        <div class="fc-body">
          <p>Books aimed at older readers often require a more refined illustration style. We focus on mood, atmosphere, and character expression to support the story without distracting from it. The result is artwork that feels polished, professional, and suited to a more mature audience.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 8 - WHO WE WORK WITH: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-soft">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Stories We Illustrate and the People Behind Them</h2>
      <p>We work with a wide mix of people, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing a single title</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents turning a bedtime story into a keepsake book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and schools creating class or fundraiser books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small businesses making branded books for kids' events</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who already have a publisher but need illustration support</span></li>
      </ul>
      <p>You do not need to have a finished manuscript. Some clients start with just a title and a rough idea of the plot.</p>
      <p>We have also worked with grandparents putting together a one-off keepsake for a birthday, and with local sporting clubs who wanted a simple illustrated storybook for junior members. The scale of the project does not really matter to us. A sixteen-page personal keepsake gets the same care as a longer commercial title.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/about.webp" alt="Parents, teachers and first-time authors we illustrate for in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - HOW TO CHOOSE: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a book illustrator in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Book Illustrator in Sydney</h2>
      <p>Whether you work with us or someone else, here are honest questions worth asking any illustrator before you commit:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show a portfolio with a similar age group or tone to your book?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain their process clearly, including how many revisions are included?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are timelines and pricing put in writing before work starts?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they own the software and files needed to hand over print-ready art?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you get regular drafts, or only a finished product at the end?</span></li>
      </ul>
      <p>If an illustrator cannot answer these clearly, that is worth noticing before you sign anything.</p>
    </div>
  </div>
</section>

<!-- 10 - WHY ILLUSTRATION MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Powerful Pictures Make Children Remember the Story</h2>
  </div>
  <div class="container narrow center">
    <p>It is tempting to think illustration is just decoration. It is not. Pictures do a huge amount of storytelling work in a children's book, often more than the text itself.</p>
    <p style="margin-top:14px;">Good illustration:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Helps children who cannot read yet follow the story through pictures alone</li>
      <li>Sets the mood before a child even reads the first line</li>
      <li>Makes a book feel worth returning to again and again</li>
      <li>Gives your book a fighting chance next to other titles on a shelf or online store</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Rushed or mismatched art can undercut even a brilliant story. This is why we treat illustration as a proper creative job, not an afterthought tacked on at the end.</p>
  </div>
</section>

<!-- 11 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How Your Story Moves From Sketchbook to Finished Pages</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step One: Initial Chat</h3></div>
        <div class="svc-step-body"><p>We start with a simple conversation about your story, your budget, and your timeline. No pressure, no obligation. This can happen over the phone, over video, or in person if you are based in or around Sydney.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step Two: Quote and Scope</h3></div>
        <div class="svc-step-body"><p>Once we understand what you need, we put together a clear quote covering pages, revisions, and delivery format. You will see exactly what is included before you commit to anything.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step Three: Character and Style Sketches</h3></div>
        <div class="svc-step-body"><p>We sketch your main characters and share a couple of style directions for you to choose from. This is usually the most exciting part for clients, since it is the first time the story starts to feel real on the page.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step Four: Page-by-Page Illustration</h3></div>
        <div class="svc-step-body"><p>We work through the book in batches, usually five to ten pages at a time, so you can give feedback along the way rather than waiting until the very end. This stops small issues turning into big rework later on.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step Five: Revisions</h3></div>
        <div class="svc-step-body"><p>You get a set number of revision rounds built into your quote, so small changes do not blow out your budget. If you want extra rounds beyond what was agreed, we will always tell you the cost before doing the work, never after.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Step Six: Final Files</h3></div>
        <div class="svc-step-body"><p>We hand over print-ready files, along with web-friendly versions if you plan to publish through an online platform. We will also talk you through file formats if you are not sure what your printer or platform needs.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 12 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 13 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Sydney Authors Trust Us to Draw Their <em>Story World</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Local and easy to reach.</h3><p>Being based in Sydney means we can meet in person if that works better for you, or handle everything online if that is easier.</p></article>
      <article><span>✓</span><h3>Clear pricing.</h3><p>You get a quote before work starts, not a surprise invoice at the end.</p></article>
      <article><span>✓</span><h3>Same illustrator throughout.</h3><p>You work with one person or a small, consistent team, not a rotating cast of freelancers.</p></article>
      <article><span>✓</span><h3>Genuine collaboration.</h3><p>We treat your book as your project, not a template we stretch to fit every client.</p></article>
      <article><span>✓</span><h3>No fake promises.</h3><p>We will not tell you that your book is guaranteed to sell thousands of copies. What we will do is give it the best possible visual start.</p></article>
    </div>
  </div>
</section>

<!-- 14 - TESTIMONIALS -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>
<!-- 16 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A written quote for children's book illustration in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Shapes the Cost of Children’s Book Illustration in Sydney</h2>
      <p>Every book is priced individually, based on page count, level of detail, and how many characters need designing. We do not use a single flat rate because a sixteen-page rhyming book and a forty-page adventure story take very different amounts of work. What we can promise is a written quote before any work begins, so you know exactly what you are paying for and when payments are due.</p>
      <p>A few things tend to move the price up or down. Simple, flat colour illustrations with one or two characters cost less than detailed spreads with busy backgrounds and a large cast. Tight deadlines can also affect price, since rushing a book usually means clearing other work to fit yours in. If budget is a concern, tell us early. We can often suggest ways to simplify the brief, such as fewer characters or a shorter page count, without losing the heart of the story.</p>
      <p>We also break payments into stages rather than asking for the full amount upfront. A typical structure is a deposit to begin, a payment once character sketches are approved, and a final payment when the finished files are delivered. This spreads the cost out and gives you a natural checkpoint to review the work at each stage.</p>
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
$location_services_heading = 'Additional Services for Sydney Children’s Book Authors';
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
      <h2>Ready to See Your Story <em>Come Alive in Pictures?</em></h2>
      <p>If you have a story sitting in a drawer or half finished on your laptop, get in touch and tell us about it. There is no cost or obligation for an initial chat, just an honest conversation about what your book needs and whether we are the right fit to help.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to illustrate your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 19 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 20 - FOOTER -->
<?php include 'includes/footer.php'; ?>

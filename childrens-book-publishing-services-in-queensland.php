<?php
/* City service page: Home > Locations > Queensland > Book Publishing. */
include 'includes/config.php';

$page_title       = 'Children\'s Book Publishing Support | Queensland';
$page_description = 'Turn your children\'s book into a published reality in Queensland. Guided, author-focused publishing services that bring your story to readers everywhere.';
$canonical_path   = 'childrens-book-publishing-services-in-queensland.php';
$breadcrumb_name  = 'Book Publishing in Queensland';
$breadcrumbs = [
    ['name' => 'Home',            'url' => page_url('index.php')],
    ['name' => 'Locations',       'url' => page_url('locations/')],
    ['name' => 'Queensland',      'url' => page_url('locations/queensland.php')],
    ['name' => 'Book Publishing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors who already have illustrations?',
    'a' => 'No. Many authors come to us with text only. We can help you find an illustrator whose style fits your story.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to publish a children\'s book in Queensland with your team?',
    'a' => 'It depends on the manuscript and how much editing it needs, but most projects take a few months from first read to final print, not including any waiting time before we start.',
  ),
  2 =>
  array (
    'q' => 'Do you work with authors outside of Brisbane?',
    'a' => 'Yes. We work with authors from all over Queensland, including regional and rural areas. Most of our process happens by email and video call, so location is not a barrier.',
  ),
  3 =>
  array (
    'q' => 'What age groups do you publish for?',
    'a' => 'Mostly picture books for young children and early readers, along with some junior fiction for slightly older kids. If you are not sure which category your story fits, send it through, and we can help you work that out based on length, language, and themes.',
  ),
  4 =>
  array (
    'q' => 'Do I need a literary agent to submit to you?',
    'a' => 'No. You can submit your manuscript directly to us. We do not require an agent.',
  ),
  5 =>
  array (
    'q' => 'What happens if my manuscript is not ready yet?',
    'a' => 'We will tell you honestly. Sometimes that means a few rounds of editing before we move forward, and sometimes it means the story needs more work than we can take on right now. Either way, you get real feedback.',
  ),
  6 =>
  array (
    'q' => 'Do you offer any support after the book is printed?',
    'a' => 'Yes. We talk with authors about local options like school visits, library listings, and community bookshops to help get the book in front of readers.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Book Publishing</div>
      <h1>Your Story Is Ready. Let's Get It Out There, <em>Children's Book Publishing Service</em> in <strong>Queensland</strong></h1>
      <p class="lead">If you have written a children's book and you are not sure what to do next, you are not alone. Many Queensland writers finish a manuscript and then get stuck. They do not know who to send it to, how the process works, or whether their story is even ready.</p>
      <p class="lead">That is where we come in. Purple Giraffe Press works with authors right across Queensland, from Brisbane and the Gold Coast to Cairns and everywhere in between. We help you turn a good story into a real book that kids want to read and parents want to buy.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Publish Your Book</a>
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
      <h2>Complete Children&rsquo;s Book Publishing Support for Queensland Authors</h2>
      <p>We are not a huge, faceless publishing house. We are a small team that genuinely loves children's stories. We read every manuscript that comes in, and we give honest, useful feedback, even if we cannot take your project on.</p>
      <p>A lot of people type something like "children's book publisher in Queensland" into Google late at night, after finishing a draft and not knowing what to do with it next. If that sounds like you, you have landed in the right place. We would rather spend twenty minutes explaining how this all works than leave you guessing.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Publish Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-publishing.webp" alt="Children's book publishing services in Queensland at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - PUBLISHING SUPPORT (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <p style="margin:14px auto 0;">We offer full publishing support for picture books, early reader books, and junior fiction. Whether you have a rhyming story for toddlers or a chapter book for eight-year-olds, we can help you get it into shape and out into the world.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Editing and Story Development</h3>
        <div class="fc-body">
          <p>Before a book goes anywhere near a printer, it needs solid editing. We look at pacing, word choice, repetition, and whether the story actually works when read aloud. Children's books live or die on rhythm and clarity, so this step matters more than people expect.</p>
          <p>We also look closely at the age fit of your language. A word that feels natural to an adult writer can be completely out of reach for a five-year-old listener. Getting this balance right is one of the biggest differences between a manuscript that works in a classroom and one that does not.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="9" cy="9" r="2"></circle><path d="m21 15-3.5-3.5L9 20"></path></svg></div>
        <h3>Illustration Coordination</h3>
        <div class="fc-body">
          <p>Most authors are not illustrators, and that is fine. We help match your story with an illustrator whose style suits the tone of your book. We manage the back and forth between you and the illustrator so the process stays smooth and clear.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Hybrid Publishing Support</h3>
        <div class="fc-body">
          <p>Some authors want more control over their book than a traditional deal offers, but they still want professional guidance. That is why we offer hybrid publishing for children's books in Queensland, a model where you share in the costs and decisions, and we bring the publishing know-how, the editing team, and the printing contacts.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="7"></rect></svg></div>
        <h3>Layout, Design, and Printing</h3>
        <div class="fc-body">
          <p>Once the text and illustrations are ready, we handle the layout, cover design, and print setup. We know how children's books need to look and feel, from paper stock to trim size, and we manage the printing process so you do not have to.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Submission Review</h3>
        <div class="fc-body">
          <p>If you are further along in the process, we also run picture book submissions in Queensland through a clear, structured review. You send us your manuscript and any sample illustrations, and we tell you honestly where it stands and what, if anything, needs work before it is ready.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - EVERY YOUNG AGE GROUP (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Children&rsquo;s Book Publishing Support for Every Young Age Group</h2>
    <p style="margin:14px auto 0;">Children&rsquo;s books must match the language, structure, illustration style and emotional understanding of their intended readers. We help Queensland authors shape each manuscript around the correct age group, ensuring the finished book feels accessible, engaging and suitable for families, schools, libraries and bookshops.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="12" width="8" height="8" rx="1"></rect><rect x="13" y="12" width="8" height="8" rx="1"></rect><rect x="8" y="3" width="8" height="8" rx="1"></rect></svg></div>
        <h3>Ages 0&ndash;3: Board Books for Babies and Toddlers</h3>
        <div class="fc-body">
          <p>Books for babies and toddlers need simple language, strong repetition, and a gentle rhythm that works well when read aloud. We help authors develop short, visual stories with familiar themes, durable formats, and clear page turns that keep very young children engaged.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 3&ndash;5: Picture Books That Encourage Imagination</h3>
        <div class="fc-body">
          <p>Preschool picture books need memorable characters, colourful illustrations, and easy-to-follow stories with clear emotional moments. We refine the pacing, vocabulary, and page structure so children can enjoy the story while parents and educators can read it aloud naturally.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M2 6s2-2 5-2 5 2 5 2v14s-2-2-5-2-5 2-5 2V6Z"></path><path d="M22 6s-2-2-5-2-5 2-5 2v14s2-2 5-2 5 2 5 2V6Z"></path></svg></div>
        <h3>Ages 6&ndash;8: Early Readers That Build Reading Confidence</h3>
        <div class="fc-body">
          <p>Early reader books require accessible vocabulary, manageable sentences, and fast-moving stories that support independent reading. We help organise chapters, illustrations, and text placement so young readers feel challenged without becoming overwhelmed or losing interest in the story.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"></path></svg></div>
        <h3>Ages 8&ndash;12: Middle-Grade Stories With Greater Depth</h3>
        <div class="fc-body">
          <p>Middle-grade readers are ready for longer plots, stronger character development, and more detailed story worlds. We help authors publish adventure, fantasy, mystery, humour, and contemporary fiction with age-appropriate themes, clear structure, and enough depth to keep confident young readers engaged.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Not sure which age group suits your manuscript? We can review your story&rsquo;s word count, vocabulary, themes and format before development begins, then recommend the most suitable reading category for your book.</p>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Queensland authors, parents and illustrators we publish children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Children&rsquo;s Publishing Services Are Designed For</h2>
      <p>Purple Giraffe Press is a good fit for:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors who have never published before</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents, teachers, or grandparents who have written a story for their own kids or students</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who have artwork but need a writer or story structure</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Experienced writers looking for a fresh publishing partner</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who have been knocked back elsewhere and want honest feedback</span></li>
      </ul>
      <p>We work with people at every stage, from a rough idea scribbled on paper to a fully finished manuscript ready for print.</p>
    </div>
  </div>
</section>

<!-- 7 - IS YOUR MANUSCRIPT READY -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- readiness check</p>
    <h2>Is Your Children&rsquo;s Manuscript Ready for Professional Publishing?</h2>
  </div>
  <div class="container narrow center">
    <p>Authors often ask us how to know if their story is ready to send in. There is no perfect checklist, but a few things tend to separate a manuscript that is close from one that needs more time.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>The story has a clear beginning, middle, and end.</strong> Even simple picture books need a shape. If the story wanders without a clear resolution, young readers lose interest fast.</li>
      <li><strong>It reads well out loud.</strong> Children's books get read aloud, often more than once. Clunky sentences and awkward rhythm stand out immediately when spoken.</li>
      <li><strong>The word count suits the age group.</strong> A story for four-year-olds should look very different in length from one for eight-year-olds. If you are unsure, we can help you work this out.</li>
      <li><strong>You have had at least one other person read it.</strong> A trusted friend, a teacher, or a writing group can catch problems you have stopped noticing.</li>
      <li><strong>You know your target reader.</strong> A story written for toddlers reads very differently to one aimed at early primary school kids. Knowing this shapes every editing decision later.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>If your manuscript is missing a few of these things, that is completely normal. Most of what comes across our desk needs some work. That is exactly what the editing stage is for.</p>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE A PUBLISHER: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-soft">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Queensland Children's Book Publisher</h2>
      <p>There are a lot of publishing companies for children's books in Queensland, and not all of them work the same way. Some focus on volume and speed. Others focus on getting each book right, even if that takes a little longer. It helps to know which kind you are dealing with before you commit any money or time.</p>
      <p>More broadly, book publishing companies in Queensland vary a lot in how transparent they are about cost and process. Some are upfront from the first phone call. Others only reveal the full picture once you are already partway through a contract. Before you sign with anyone, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain their fees clearly, with no hidden costs added later?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they give you real feedback on your manuscript, or just a generic rejection?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they show you examples of books they have actually produced?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do you keep your rights, or are you signing them away for good?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will the same person work with you through the whole process, or do you get passed around?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand the children's book market specifically, rather than treating it like adult fiction?</span></li>
      </ul>
      <p>If a publisher cannot answer these questions clearly and honestly, that is worth noticing.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="What to look for in a Queensland children's book publisher" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHY PROFESSIONAL PUBLISHING -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Children&rsquo;s Publishing Creates a Stronger Book</h2>
  </div>
  <div class="container narrow center">
    <p>Self-publishing has its place, and plenty of authors do it well. But working with an experienced children's book team changes the outcome in a few real ways:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Better editing.</strong> A second, trained set of eyes catches problems you cannot see in your own writing.</li>
      <li><strong>Professional illustration.</strong> Matching the right illustrator to the right story is a skill in itself.</li>
      <li><strong>Print quality that holds up.</strong> Children's books get handled roughly. Board strength, paper weight, and binding all matter.</li>
      <li><strong>A finished product that looks like a real book.</strong> Readers, teachers, and bookshops notice the difference between a polished book and a rushed one.</li>
      <li><strong>Guidance on what comes next.</strong> Printing the book is only step one. Knowing how to get it into schools, libraries, or local shops is a separate skill.</li>
    </ul>
  </div>
</section>

<!-- 10 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children&rsquo;s Book Publishing Process: From Manuscript to Print</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Email us your story, along with a short note about your background and what you are hoping for. If you already have sample illustrations, include those too.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: We Read It Properly</h3></div>
        <div class="svc-step-body"><p>We do not skim. Every submission gets read in full, and we take notes on what is working and what needs attention.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: We Talk It Through With You</h3></div>
        <div class="svc-step-body"><p>If we think your story has legs, we set up a call or meeting to talk through options. This is where we explain costs, timelines, and what our involvement would look like.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: Editing and Development</h3></div>
        <div class="svc-step-body"><p>Once you decide to go ahead, we start on editing. This can take a few rounds, depending on how much work the manuscript needs.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: Illustration and Design</h3></div>
        <div class="svc-step-body"><p>We bring in an illustrator if you do not already have one, and then move into layout and cover design.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Step 6: Printing and Delivery</h3></div>
        <div class="svc-step-body"><p>Once everything is approved, we move to print. You will see proofs before anything goes to full production, so there are no surprises.</p></div>
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
      <h2>Why Queensland Authors Choose <em>Purple Giraffe Press</em> for Publishing</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children&rsquo;s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>&#10003;</span><h3>We are honest about your manuscript's chances.</h3><p>We would rather tell you the truth early than take your money and let you down later.</p></article>
      <article><span>&#10003;</span><h3>We specialise in children's books.</h3><p>We are not a general printer or a general publisher who also does kids' books on the side. This is all we do.</p></article>
      <article><span>&#10003;</span><h3>We are based in Queensland and understand the local market.</h3><p>From school book fairs to local libraries, we know what works here.</p></article>
      <article><span>&#10003;</span><h3>You keep clear visibility over costs.</h3><p>No vague quotes, no surprise invoices halfway through.</p></article>
      <article><span>&#10003;</span><h3>We stay involved after publishing.</h3><p>We do not disappear once the book is printed. We help you think through next steps.</p></article>
      <article><span>&#10003;</span><h3>We treat first-time authors with patience.</h3><p>Publishing a book for the first time can feel confusing. We explain things in plain language and never assume you already know the industry jargon.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for publishing a children's book in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Clear Children&rsquo;s Book Publishing Costs Without Hidden Surprises</h2>
      <p>Every project is different, so we do not publish a flat price list. Costs depend on how much editing your manuscript needs, whether you need an illustrator, how many pages your book runs to, and your print run size. A simple story that only needs light editing and a small print run will cost less than a longer book that needs full illustration from scratch and a larger run for schools and shops.</p>
      <p>Once we have read your manuscript, we will give you a clear, itemised quote with no hidden extras. You will know exactly what you are paying for editing, what you are paying for illustration, and what you are paying for printing. There is no pressure to proceed after a quote. Take your time, talk it over with family, and ask as many questions as you need before deciding.</p>
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
$location_services_heading = 'Additional Services for Queensland Children\'s Author Support';
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
      <h2>Ready to Turn Your Children&rsquo;s Story <em>Into a Book?</em></h2>
      <p>If you have a children's story sitting in a drawer, or half finished on your laptop, send it our way. We would love to read it. It does not need to be perfect. It just needs to be yours.</p>
      <p>Get in touch with Purple Giraffe Press today, and let's talk about where your book could go. We will read it properly, tell you the truth about where it stands, and if it is a good fit, we will walk you through every step from there.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to publish your children's book in Queensland" loading="lazy" decoding="async">
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

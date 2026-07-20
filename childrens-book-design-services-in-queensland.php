<?php
include 'includes/config.php';

$canonical_path   = 'childrens-book-design-services-in-queensland.php';
$breadcrumb_name  = 'Book Design in Queensland';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'Queensland',  'url' => page_url('locations/queensland.php')],
    ['name' => 'Book Design', 'url' => page_url($canonical_path)],
];

$page_title       = 'Children\'s Book Design service for Queensland Authors';
$page_description = 'Bring your children\'s book to life with beautiful design in Queensland. Creative, story-driven layouts and illustrations that captivate young readers.';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do You Only Work With Children’s Authors in Queensland?',
    'a' => 'No. While Purple Giraffe Press is based in Queensland, we also work with children’s authors across Australia and overseas. Our Queensland location gives us a strong understanding of local printers, self-publishing options, and the needs of Australian authors.',
  ),
  1 =>
  array (
    'q' => 'How Long Does Children’s Book Design Take in Queensland?',
    'a' => 'The timeline depends on your book’s length, illustration style, and level of detail. Most complete picture book design projects take around six to twelve weeks from the first sketches to the final files. Simpler layouts and colouring books may take less time.',
  ),
  2 =>
  array (
    'q' => 'Can Queensland Authors Start Design Before Manuscript Editing Is Finished?',
    'a' => 'We can discuss your project and begin planning before the manuscript is completely polished. However, we recommend finishing the text edit before final illustrations and page layouts begin. Later story changes can affect the page count, artwork, and overall design.',
  ),
  3 =>
  array (
    'q' => 'Do You Offer Illustration-Only Services for Queensland Authors?',
    'a' => 'Yes. Some Queensland authors only need illustrations, while others require layout, formatting, cover design, or a complete package. We can tailor the service to your project and quote only for the support you actually need.',
  ),
  4 =>
  array (
    'q' => 'Can You Prepare My Queensland Children’s Book for Amazon KDP?',
    'a' => 'Yes. We prepare print-ready files for Amazon KDP using the correct trim size, bleed, margins, and file format. We also check the completed layout carefully to reduce the risk of technical problems during the upload process.',
  ),
  5 =>
  array (
    'q' => 'Can Queensland Authors Order Just a Few Book Illustrations?',
    'a' => 'Absolutely. You do not need to commission artwork for an entire book. We can create a single book cover, character sheet, spot illustrations, replacement artwork, or a small collection of scenes for Queensland authors with smaller projects.',
  ),
  6 =>
  array (
    'q' => 'How Can I Get a Children’s Book Design Quote in Queensland?',
    'a' => 'Send us a brief outline of your book, including the page count, intended age group, illustration requirements, and whether you need layout, formatting, or cover design. We will review the details and provide a clear quote with an estimated project timeline.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Book Design</div>
      <h1>Design That Brings Your Story to Life, <em>Children's Book Design Services</em> in <strong>Queensland</strong></h1>
      <p class="lead">A great children’s book needs more than a strong story. It needs illustrations that hold a child’s attention, a layout that feels easy to follow, and a cover that makes parents want to pick it up. Every visual choice shapes how your book is read, remembered, and enjoyed.</p>
      <p class="lead">Purple Giraffe Press provides children’s book design services across Queensland for authors, self-publishers, teachers, and families who want to turn a finished manuscript into a polished, print-ready book. From character illustration and page layout to cover design and Amazon KDP formatting, we bring every part of your book together with care.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Book Design</a>
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
      <p>Whether you are creating a board book, picture book, early reader, chapter book, or colouring book, we design each page around your story, your age group, and your publishing goals. You will see sketches and drafts throughout the process, so you stay involved without feeling overwhelmed.</p>
      <p>If you are looking for a children’s book designer in Queensland who understands both storytelling and the technical side of publishing, you are in the right place. Keep reading to see how we can help take your book from manuscript to finished design.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book Design &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-cover-design.webp" alt="Children's book design services in Queensland at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE OFFER (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Complete Children’s Book Design Services Available Across Queensland</h2>
    <p style="margin:14px auto 0;">A children’s book needs more than words placed beside attractive pictures. The illustrations, page layout, typography, and cover must work together to support the story. Each visual choice should suit the intended age group and reading experience. Our Queensland book design service brings these elements together in one clear process. Below is a closer look at the design support available for your project.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Character and Story Illustration</h3>
        <div class="fc-body">
          <p>Memorable illustrations help children connect with a story and its characters. As a children’s book illustrator in Queensland, we begin by exploring your story, audience, mood, and visual ideas. We then create character sketches for your review before developing the final artwork. Every scene is designed to feel consistent, expressive, and connected to the written narrative. The finished illustrations will reflect whether your story is playful, gentle, adventurous, educational, or emotional.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M7 8h10M7 12h10M7 16h6"></path></svg></div>
        <h3>Page Layout and Story Flow</h3>
        <div class="fc-body">
          <p>A thoughtful page layout makes a children’s book easier and more enjoyable to follow. As a children’s book layout designer in Queensland, I carefully balance text, illustrations, spacing, and page turns. Important moments are positioned where they can create curiosity, surprise, or emotional impact. We also check margins, gutters, bleed, and image resolution before preparing the final files. This ensures your book reads smoothly and prints correctly through local printers or print-on-demand platforms.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Children’s Book Cover Design</h3>
        <div class="fc-body">
          <p>Your cover needs to capture attention before someone has read a single page. As a children’s book cover designer in Queensland, we create covers that reflect the story’s mood, audience, and central idea. We consider illustration, colour, typography, title placement, and how the design appears at thumbnail size. The front, spine, and back cover are brought together as one consistent visual package. Your finished cover will be suitable for bookshops, online listings, school events, and promotional materials.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m15.5 4.5 4 4L9 19H5v-4L15.5 4.5Z"></path><path d="M13.5 6.5l4 4"></path></svg></div>
        <h3>Children’s Colouring Book Design</h3>
        <div class="fc-body">
          <p>Colouring books require clear artwork, consistent pages, and the right level of detail for the intended age group. As a colouring book designer for kids in Queensland, we turn your concepts into clean and engaging line illustrations. Each page is designed to feel enjoyable without becoming too simple, crowded, or difficult to colour. We also maintain consistent sizing, margins, line weight, and visual style throughout the book. Final files are supplied ready for printing, self-publishing, or uploading to your chosen platform.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5"></path><path d="M9 15l2 2 4-4"></path></svg></div>
        <h3>Amazon KDP Book Formatting</h3>
        <div class="fc-body">
          <p>Amazon KDP has specific technical requirements that every uploaded book file must meet. As a children’s book designer for Amazon KDP in Queensland, we prepare your interior and cover files to the correct specifications. This includes checking trim size, margins, bleed, image quality, page count, and file format. We make sure the finished design remains consistent when printed rather than only looking correct on screen. This reduces upload issues and helps your book reach publication without unnecessary technical delays.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Wider Book Illustration Services</h3>
        <div class="fc-body">
          <p>Our book illustration services in Queensland are also available for authors who do not need a complete book package. We can create individual scenes, character sheets, spot illustrations, educational artwork, trailer graphics, or social media visuals. This gives you the flexibility to commission only the artwork required for your current project. We can also support an existing book series by studying its characters, colours, and established illustration style. Any new artwork is created to sit naturally beside your existing pages and maintain visual consistency.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Age-Appropriate Children’s Book Design for Every Young Reader</h2>
    <p style="margin:14px auto 0;">Children’s book design should change as the reader grows. Illustration detail, page layout, font size, colour choices, and the balance between words and pictures all need to suit the intended age group. We design each book around how children at that reading stage engage with stories.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Board Book Design for Ages 0 to 3</h3>
        <div class="fc-body">
          <p>Board books need bold shapes, clear characters, large illustrations, and very little text on each page. We create simple, sturdy layouts with strong visual contrast, easy-to-recognise objects, and artwork that remains clear at a small trim size.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Picture Book Design for Ages 3 to 7</h3>
        <div class="fc-body">
          <p>Picture books depend on illustrations to carry much of the storytelling. We plan page turns, full spreads, character expressions, text placement, and visual pacing so every scene feels engaging without making the pages crowded or difficult to follow.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h6a3 3 0 0 1 3 3v11a2.5 2.5 0 0 0-2.5-2H4Z"></path><path d="M20 5h-4a3 3 0 0 0-3 3v11a2.5 2.5 0 0 1 2.5-2H20Z"></path></svg></div>
        <h3>Early Reader Design for Ages 5 to 8</h3>
        <div class="fc-body">
          <p>Early readers need layouts that make independent reading feel manageable. We use clear typography, comfortable spacing, shorter text sections, and supportive illustrations that help children understand the story without distracting them from the words.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Chapter Book Design for Ages 7 to 10</h3>
        <div class="fc-body">
          <p>Chapter books usually contain more text with fewer illustrations. We create readable chapter layouts, engaging opening pages, age-appropriate fonts, spot illustrations, and consistent visual details that encourage children to keep reading from one chapter to the next.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Middle Grade Book Design for Ages 8 to 12</h3>
        <div class="fc-body">
          <p>Middle-grade books require a more mature visual style while still feeling inviting to younger readers. We focus on clean interior formatting, strong chapter openings, genre-appropriate cover design, and carefully placed illustrations that complement the story without making it feel too young.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/book-cover-design-fold.webp" alt="Queensland authors, teachers and families we design children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Benefits From Our Queensland Children’s Book Design Services</h2>
      <p>Our clients come from all over Queensland and beyond. We tend to work best with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors writing their first children's book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents or grandparents turning a family story into a keepsake book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and school staff are creating classroom resources</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-publishers planning to sell through Amazon KDP or other platforms</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers who need overflow illustration or layout support</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors with a finished manuscript but no clear picture of the artwork yet</span></li>
      </ul>
      <p>You do not need any design experience. Most of our clients have never worked with an illustrator before, and that is completely normal.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How To Choose the Best Book Designer in Queensland</h2>
      <p>Not every illustrator or designer is the right fit for a children's book. Before you commit to anyone, it is worth asking a few honest questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you a full sample spread, not just a single character drawing?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand print requirements like bleed, trim size, and resolution?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you see draft sketches before final artwork is created?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain how many rounds of changes are included?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they format files correctly for the platform you plan to publish on?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they give you a clear quote before starting, rather than an open-ended hourly rate?</span></li>
      </ul>
      <p>These questions apply whether you work with us or with anyone else. A good designer should be able to answer all of them without hesitation.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Choosing the best children's book designer in Queensland" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PROFESSIONAL DESIGN MATTERS (list) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Design Makes Children’s Books More Successful</h2>
  </div>
  <div class="container narrow center">
    <p>Some authors think the story is all that counts. In truth, design changes how a book is read and remembered.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>A well-paced layout keeps a child's attention from the first page to the last</li>
      <li>Consistent, appealing artwork makes a young reader want to look at every page closely</li>
      <li>A strong cover is often the only reason a stranger picks up your book at all</li>
      <li>Correct file formatting means your book actually prints properly, instead of coming back with cut-off text or blurry images</li>
      <li>Good design gives your book a fair chance next to other books on the same shelf or the same online store</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this replaces a good story. It supports it.</p>
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
    <h2>Our Simple Children’s Book Design Process From Start to Finish</h2>
    <p style="margin:14px auto 0;">We keep the process straightforward, with clear steps and no surprises.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step One: Initial Chat</h3></div>
        <div class="svc-step-body"><p>We start with a short conversation about your manuscript, your age group, your budget, and your timeline. If you already have sample art or reference images you like, send them through. This helps us understand the tone you are after.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step Two: Quote And Plan</h3></div>
        <div class="svc-step-body"><p>Once we understand the scope, whether that is full illustration, layout only, a cover, or a colouring book, we send you a clear quote. No hidden fees, no vague hourly guessing.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step Three: Sketches And Drafts</h3></div>
        <div class="svc-step-body"><p>We create rough sketches for your characters and key scenes first. You review these before anything is finalised, so changes are easy and cheap at this stage.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step Four: Full Artwork And Layout</h3></div>
        <div class="svc-step-body"><p>Once sketches are approved, we move to full colour artwork and complete page layout. You will see the book coming together as a full draft.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step Five: Review And Revisions</h3></div>
        <div class="svc-step-body"><p>You go through the draft and flag anything you want adjusted. We build in a set number of revision rounds, so you have room to fine-tune the details.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Step Six: Final Files And Delivery</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we prepare final print-ready files, formatted for your chosen printer or platform, including KDP if that is your plan.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Queensland Children’s Authors Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Local to Queensland.</h3><p>We understand the Queensland self-publishing and small press scene, and we are easy to reach for a real conversation, not just an email form.</p></article>
      <article><span>✓</span><h3>Clear quotes, no guessing games.</h3><p>You know the cost before we start, based on the actual scope of your project.</p></article>
      <article><span>✓</span><h3>One point of contact.</h3><p>You work with the same person throughout your project, so you never have to repeat yourself or chase updates.</p></article>
      <article><span>✓</span><h3>Comfortable with first timers.</h3><p>Many of our clients have never published a book before. We explain each step in plain language and never assume you already know the industry terms.</p></article>
      <article><span>✓</span><h3>Print and digital ready.</h3><p>We prepare files correctly for physical printing and for digital platforms, including Amazon KDP, so your book works wherever you plan to sell it.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's book design in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Professional Children’s Book Design Cost in Queensland?</h2>
      <p>Every children's book is different, so we do not use a single flat price. A short board book with simple shapes takes far less work than a forty-page picture book with detailed scenes on every spread. Pricing depends on page count, the complexity of the artwork, and whether you need layout, cover design, or both.</p>
      <p>Once we understand your project in our initial chat, we send a clear, itemised quote before any work begins. There are no surprise charges added later.</p>
      <p>If your budget is tight, tell us early. We can often suggest ways to bring costs down, such as a simpler colour palette, fewer full-page scenes, or splitting illustration and layout into separate stages so you can spread the work over time. We would rather adjust the plan than surprise you with a bill that does not match what you expected.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 15 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
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

<!-- 16 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 17 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Transform Your Children’s Story <em>Into a Beautiful Book?</em></h2>
      <p>Your story has already come a long way. Now it is time to give it the design, illustrations, and finishing touches it deserves. Send us your manuscript and tell us a little about what you have in mind. We will listen, guide you through the options, and provide a clear quote based on your book, with no pressure and no industry confusion.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to design your children's book in Queensland" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 18 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 19 - FOOTER -->
<?php include 'includes/footer.php'; ?>

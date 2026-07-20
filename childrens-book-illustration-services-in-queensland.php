<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Illustrations for Queensland Authors';
$page_description = 'Bring your children\'s story to life with beautiful illustrations made in Queensland. Creative, heartfelt artwork that captivates young readers.';
$canonical_path   = 'childrens-book-illustration-services-in-queensland.php';
$breadcrumb_name  = 'Custom Illustrations in Queensland';
$breadcrumbs = [
    ['name' => 'Home',                 'url' => page_url('index.php')],
    ['name' => 'Locations',            'url' => page_url('locations/')],
    ['name' => 'Queensland',           'url' => page_url('locations/queensland.php')],
    ['name' => 'Custom Illustrations', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Queensland?',
    'a' => 'No. While we are based in Queensland and love working with local authors, we illustrate books for clients across Australia. Being local just means faster replies and, if useful, the option to meet in person.',
  ),
  1 =>
  array (
    'q' => 'How long does a full picture book take to illustrate?',
    'a' => 'Most full length picture books take between eight and sixteen weeks, depending on page count and how many revision rounds you use. Simpler projects with fewer spreads can move faster.',
  ),
  2 =>
  array (
    'q' => 'Do I need a finished manuscript before contacting a Queensland illustrator?',
    'a' => 'Not necessarily. A near final draft is ideal, but we can start early conversations with a rough draft or even a strong outline, especially if you are still working through the story.',
  ),
  3 =>
  array (
    'q' => 'Can you match the style of illustrations I already have from another book?',
    'a' => 'We can take inspiration from a style you like, but we will not copy another artist\'s work directly. We will develop original artwork with a similar feel, tone, or colour palette instead.',
  ),
  4 =>
  array (
    'q' => 'What if I do not like the sketches in the first round?',
    'a' => 'That is exactly what the revision rounds are for. Tell us what is not working, whether it is a character\'s expression, a layout, or the overall mood, and we will adjust before moving to colour.',
  ),
  5 =>
  array (
    'q' => 'Do you help with self publishing platforms like Amazon KDP or IngramSpark?',
    'a' => 'Yes. We prepare files to the correct specifications for the major self publishing platforms, so you can upload your book without formatting problems.',
  ),
  6 =>
  array (
    'q' => 'Is there a minimum number of pages for a project?',
    'a' => 'No. We take on small projects, like a single cover illustration or a short set of spot illustrations, as well as full-length picture books.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Custom Illustrations</div>
      <h1>Because Every Story Deserves a Second Look, <em>Children's Book Editing</em> in Queensland</h1>
      <p class="lead">A children’s book can have a wonderful story and still struggle to hold a young reader’s attention if the illustrations do not support it. Characters need to feel consistent, emotions must be easy to understand, and every scene should give children another reason to turn the page.</p>
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
      <p>Purple Giraffe Press creates children’s book illustrations in Queensland for first-time authors, parents, teachers, and independent publishers. From early character sketches and page concepts to full-colour artwork and print-ready files, we shape every illustration around your story, target age group, and publishing goals.</p>
      <p>You do not need a finished visual plan before getting started. Send us your manuscript, rough notes, reference ideas, or even a story that is still taking shape. We will help you develop a clear illustration direction and turn your words into a book that feels complete, engaging, and ready to share with young readers.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Children's book illustrations created in Queensland by Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT THE SERVICE INCLUDES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we include</p>
    <h2>What Our Book Illustrator in Queensland Service Includes</h2>
    <p style="margin:14px auto 0;">Every story is different, so we do not force every project into one package. Instead, we build the artwork around what your book actually needs.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Character Design</h3>
        <div class="fc-body">
          <p>This is where your characters get a face, a personality, and a look that stays consistent from page one to the last page. We sketch a few options first, so you can pick the version that feels right before we move any further.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Spot Illustrations and Full Page Spreads</h3>
        <div class="fc-body">
          <p>Some books need small, simple drawings scattered through the text. Others need full colour, full-page artwork on every spread. We can mix both, depending on your budget and the feel you are going for.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Cover Art and Typography</h3>
        <div class="fc-body">
          <p>The cover is what gets picked up off the shelf or clicked on in an online store. We design cover art that matches the tone of the book, whether that is playful, gentle, adventurous, or funny.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Digital Colouring and Print Ready Files</h3>
        <div class="fc-body">
          <p>Once the artwork is approved, we prepare high resolution files ready for print or digital publishing. This includes bleed, trim marks, and correct colour profiles, so your printer or platform does not send it back with errors.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How Your Story Moves From Manuscript to Finished Artwork</h2>
    <p style="margin:14px auto 0;">We keep the process simple, because writing a book is stressful enough without a confusing workflow on top of it.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step One: Story Chat</h3></div>
        <div class="svc-step-body"><p>We start with a short conversation about your story, your characters, and how you picture the book looking. This can happen over the phone, by email, or in person if you are nearby.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step Two: Rough Sketches</h3></div>
        <div class="svc-step-body"><p>We send through rough black and white sketches for every page or spread. This is the stage to move things around, change a character's expression, or rethink a layout, before any colour goes in.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step Three: Revisions</h3></div>
        <div class="svc-step-body"><p>You get a set number of revision rounds included in your quote. We would rather get it right than rush you into approving something you are not happy with.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step Four: Final Colour Art</h3></div>
        <div class="svc-step-body"><p>Once the sketches are locked in, we move into full colour. This is usually the stage clients enjoy most, watching the book come to life page by page.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step Five: Files and Delivery</h3></div>
        <div class="svc-step-body"><p>We hand over the finished files in the format your printer or publishing platform needs, along with a lower resolution version for your website or social media.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about.webp" alt="Parents, teachers and first-time authors we illustrate books for in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>You Bring the Story. We Help Build the Book.</h2>
      <p>A lot of the people who come to us are not professional authors. They are grandparents writing a story for a new grandchild, teachers building a classroom resource, or parents who want to turn a bedtime story into something real. You do not need any art skills at all to get started. You just need the story in your head, and we handle the rest.</p>
      <p>This is one of the parts of our work we enjoy most. Someone arrives with a few scribbled pages, a voice memo, or a story they have told their kids at bedtime for years, and a few months later, they are holding a printed book with their name on the cover. It does not matter if you have never written anything before. We ask the right questions to pull the story out of your head and onto the page, then build artwork around it.</p>
      <p>We also work with a smaller number of small press publishers and self-publishing authors who need consistent artwork across a whole series, not just a single title. If you are planning more than one book, tell us early. It helps us keep characters, colour palettes, and styles consistent from book one through to book five.</p>
    </div>
  </div>
</section>

<!-- 7 - YOUR INPUT: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- your say</p>
      <h2>Your Ideas Stay Visible in Every Queensland Creative Decision</h2>
      <p>If you already have some ideas about layout, colour, or the general feel of the book, tell us. We are happy to work from a rough sketch, a mood board, or even a few reference images you like. Some clients want to be hands-on at every stage, from thumbnail layouts through to final art. Others would rather send a brief and let us run with it. Both approaches work fine, and we can move between them as the project goes along.</p>
      <p>If you are still deciding on the shape of the book, it helps to think about a few basics first. Is it a rhyming story, or straight prose? Should the illustrations be bright and bold, or soft and muted? Do you want a consistent border or frame on every page, or should the art bleed to the edges? None of these need to be locked in before you contact us, but having a rough idea speeds things up.</p>
      <p>For families and educators who want illustration children's books in Queensland projects handled with care, we keep communication simple and the timeline realistic, so nobody is left wondering what is happening with their book. We check in at every major milestone, rather than disappearing for weeks and reappearing with a surprise.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/love-section.webp" alt="Sharing layout and colour ideas for a Queensland children's book" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - BOOK FORMATS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- book formats</p>
    <h2>Different Books Need Different Ways of Telling Stories Visually</h2>
    <p style="margin:14px auto 0;">Not every children's book needs the same style of artwork, so we tailor the approach to the format you are working with.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Books</h3>
        <div class="fc-body">
          <p>The classic thirty-two-page format, usually with a full colour illustration on every spread. This is the format most first-time authors picture when they imagine their book finished.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Board Books for Toddlers</h3>
        <div class="fc-body">
          <p>Short, sturdy books for the youngest readers. These usually need simple, bold shapes and fewer words per page, since the artwork is doing most of the storytelling.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Early Reader and Chapter Books</h3>
        <div class="fc-body">
          <p>Fewer full colour spreads, but still plenty of black and white or spot illustrations scattered through the chapters to keep young readers engaged as the text gets longer.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Activity and Colouring Books</h3>
        <div class="fc-body">
          <p>Line art designed for kids to colour in themselves, often built around a theme like animals, space, or a school topic. These need a different style of drawing from a standard storybook, with clear outlines and simple details.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 9 - ILLUSTRATION BY AGE GROUP (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Illustration Choices That Grow With Every Reading Stage</h2>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Babies and Toddlers Aged 0–3 Years</h3>
        <div class="fc-body">
          <p>Illustrations for babies and toddlers need to be simple, bold, and easy to understand at a glance. We use clear shapes, strong character expressions, uncluttered backgrounds, and high visual contrast to hold attention during shared reading.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Preschool Readers Aged 3–5 Years</h3>
        <div class="fc-body">
          <p>Preschool picture books benefit from colourful characters, expressive faces, playful environments, and visual details children can discover with every reading. We make sure the artwork supports the words while helping young readers understand the story independently.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Early Readers Aged 5–7 Years</h3>
        <div class="fc-body">
          <p>Children beginning to read independently need illustrations that encourage them without distracting from the text. We create clear, engaging scenes and spot illustrations that support new vocabulary, explain actions, and make longer pages feel manageable.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Growing Readers Aged 7–9 Years</h3>
        <div class="fc-body">
          <p>Books for growing readers often include more text and fewer full-page illustrations. We use expressive black-and-white artwork, chapter-opening images, maps, character moments, and occasional full scenes to maintain interest throughout the story.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Middle Grade Readers Aged 9–12 Years</h3>
        <div class="fc-body">
          <p>Middle-grade illustrations can include greater detail, atmosphere, humour, and emotional depth. We develop artwork that complements longer stories without making the book feel too young, using covers, chapter illustrations, decorative elements, and occasional story scenes.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Young Adult Readers Aged 12–18 Years</h3>
        <div class="fc-body">
          <p>Young adult books usually require a more refined and mature visual direction. We create sophisticated covers, symbolic artwork, maps, chapter graphics, and atmospheric illustrations that reflect the story’s themes without appearing childish.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 10 - WHO IT SUITS -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- who it suits</p>
    <h2>For Anyone Ready to Turn a Story Into Something Real</h2>
  </div>
  <div class="container narrow center">
    <p>Our illustration work suits a wide range of people, including:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>First-time authors self-publishing their first picture book</li>
      <li>Parents turning a family story into a printed keepsake</li>
      <li>Teachers and schools are creating classroom reading material</li>
      <li>Grandparents commissioning a one-off book as a gift</li>
      <li>Small publishers needing a consistent illustrator across a series</li>
      <li>Authors who already have a manuscript and just need the artwork</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY ILLUSTRATIONS MATTER -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Children Read the Pictures Before Reading the Words</h2>
  </div>
  <div class="container narrow center">
    <p>Illustrations are not just decoration. For young readers, the pictures often carry as much of the story as the words do. A child who cannot yet read every word can still follow the plot through the artwork, guess what happens next, and connect with a character's expression on the page.</p>
    <p style="margin-top:14px;">Good illustrations also help with:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Keeping a young reader's attention from the first page to the last</li>
      <li>Making a book feel finished and professional, not homemade</li>
      <li>Giving parents and teachers something to talk through with a child</li>
      <li>Standing out on a shelf or online store next to other titles</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Working with experienced book illustrators in Queensland means your book gets artwork that actually supports the story, rather than art that looks nice on its own but does not fit the pacing or mood of the text.</p>
  </div>
</section>

<!-- 12 - HOW TO CHOOSE: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Questions to ask before hiring a children's book illustrator in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>Seven Questions That Reveal the Right Queensland Illustrator Quickly</h2>
      <p>Whether you work with us or someone else, ask any illustrator these questions before you commit:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can I see a full portfolio, not just a highlight reel of their best three pieces?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many revision rounds are included, and what happens if I need more?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will I own the final artwork and files once the project is finished?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What file formats will I receive, and are they suitable for my printer or platform?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What is the expected turnaround time, and what happens if it runs over?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is pricing based on a fixed quote, or can it change partway through the project?</span></li>
      </ul>
      <p>A trustworthy illustrator will answer all of these clearly, without getting defensive or vague.</p>
    </div>
  </div>
</section>

<!-- 13 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 14 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Trust Us With the Characters They Imagined</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children&rsquo;s Book Illustrators in Queensland</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>&#10003;</span><h3>One artist, start to finish.</h3><p>The same person who sketches your characters also finishes the final colour art, so the style stays consistent across the whole book.</p></article>
      <article><span>&#10003;</span><h3>Clear, honest pricing.</h3><p>You get a quote before any work begins, based on page count and complexity, not a mystery invoice at the end.</p></article>
      <article><span>&#10003;</span><h3>Queensland-based and easy to reach.</h3><p>We understand the local self-publishing and small press scene, and we are easy to get hold of by phone or email.</p></article>
      <article><span>&#10003;</span><h3>No rushed art.</h3><p>We build revision rounds into every quote because a book you are not happy with is not worth printing.</p></article>
      <article><span>&#10003;</span><h3>Print-ready from day one.</h3><p>Every file we deliver is set up correctly for print or digital publishing, so you are not left fixing formatting issues later.</p></article>
    </div>
  </div>
</section>

<!-- 15 - TESTIMONIALS -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 16 - GETTING STARTED -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- no guesswork</p>
    <h2>From First Idea to Finished Art Without the Guesswork</h2>
  </div>
  <div class="container narrow center">
    <p>Reaching out is the hardest part for most people, so we try to make everything after that easy. Send us your manuscript, a rough outline, or even just a paragraph describing your idea. We will reply with honest feedback about what the book might need and a rough idea of cost before you commit to anything.</p>
    <p style="margin-top:14px;">We know that getting quotes for creative work can feel a bit like guesswork, so we try to explain things plainly. You will know roughly how many weeks your project will take, how many rounds of feedback are built in, and what the final files will look like, before any artwork begins. If anything changes along the way, like adding an extra spread or changing the page count, we will tell you how that affects the price before doing the work, not after.</p>
  </div>
</section>
<!-- 18 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's book illustration in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Shapes the Cost of Children’s Book Illustration?</h2>
      <p>Every book is different, so we do not use flat, one size fits all pricing. A short picture book with ten spot illustrations costs less than a full colour, thirty two page picture book with detailed backgrounds on every spread. Once we know your page count, the level of detail you want, and your timeline, we put together a clear, itemised quote. There is never a fee just to ask a question or request a quote.</p>
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
$location_services_heading = 'Other Services Your Book May Need Before Launch';
$location_services_intro   = 'We built our service list around the real gaps that stop authors from finishing and launching their books. Here is what falls under our roof.';
$location_services_section = 'section figma-cream';
include 'includes/location-services.php';
?>

<!-- 20 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 21 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Meet the Characters <em>Living Inside Your Story?</em></h2>
      <p>If you have been sitting on a story, this is your sign to finally get it drawn. Send us a message with a rough idea of your book, and we will get back to you with honest advice and a quote that makes sense for your project. No pressure, just a straightforward chat about your book.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to illustrate your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 22 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 23 - FOOTER -->
<?php include 'includes/footer.php'; ?>

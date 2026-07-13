<?php
include 'includes/config.php';

$page_title       = 'Creative Children\'s Book Illustration Services London';
$page_description = 'Bring your story to life with vibrant, imaginative illustrations. Our London-based artists specialize in beautiful artwork for children\'s books.';
$canonical_path   = 'childrens-book-illustration-service-london.php';
$breadcrumb_name  = 'Illustrations in London';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'London',      'url' => page_url('locations/london.php')],
    ['name' => 'Illustrations', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How much does a children\'s book illustration cost in London?',
    'a' => 'Cost varies depending on page count and style, but we always give a written quote before work starts, so there are no surprises later.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to illustrate a picture book in London?',
    'a' => 'Most full picture books take between eight and sixteen weeks from the style discussion to final files, depending on page count and how quickly feedback comes back to us.',
  ),
  2 =>
  array (
    'q' => 'Do I need to have a finished manuscript before contacting a London illustrator?',
    'a' => 'No. Some clients come with a complete manuscript, others with a rough idea. We can help shape the story alongside the artwork if needed.',
  ),
  3 =>
  array (
    'q' => 'Who owns the illustrations once the book is finished?',
    'a' => 'This is agreed in writing before any work starts, so you know exactly what rights you have to the final artwork.',
  ),
  4 =>
  array (
    'q' => 'Can I meet my illustrator in person in London?',
    'a' => 'Yes, meeting in person is possible for London-based clients, though many projects run perfectly well over email and video calls too.',
  ),
  5 =>
  array (
    'q' => 'Do you only illustrate picture books, or other formats as well?',
    'a' => 'We also work on early reader books, chapter book interiors, and cover art for older children\'s fiction, not just picture books.',
  ),
  6 =>
  array (
    'q' => 'What happens if I do not like the first sketches?',
    'a' => 'Rough layouts are built early, so changes at that stage are simple. We would rather adjust direction early than after final artwork is done.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Illustrations</div>
      <h1><em>Children’s Book Illustration</em> London, Turning Stories Into Magical Worlds</h1>
      <p class="lead">If you have written a story, or you are still turning one over in your head, the next question is always the same. Who is going to draw it? If you are searching for children's book illustrations in London, you have probably already noticed that the choice can feel bigger than it should. There are hundreds of artists online, all with different styles, prices, and ways of working.</p>
      <p class="lead">At Purple Giraffe Press, we work with authors, parents, teachers, and small publishers across London to turn stories into finished, printable books. We keep the process simple and the communication honest, so you always know what is happening with your book and when.</p>
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

<!-- 3 - ILLUSTRATION SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Professional Children’s Book Illustration Services For Every Story Style</h2>
    <p style="margin:14px auto 0;">Every story needs a different look. A gentle bedtime story does not need the same artwork as an adventure story full of monsters and maps. That is why we do not offer one fixed style. Instead, we match the right artist to your story.</p>
    <p style="margin:14px auto 0;">Our full artwork service includes a few core parts, and most projects use a mix of these depending on the book. Over the years, we have produced illustration books in London for picture books, early readers, and short chapter books.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M2 4h6a4 4 0 0 1 4 4v12a3 3 0 0 0-3-3H2z"></path><path d="M22 4h-6a4 4 0 0 0-4 4v12a3 3 0 0 1 3-3h7z"></path></svg></div>
        <h3>Full Picture Book Illustration</h3>
        <p>This is the biggest part of what we do. A full picture book usually needs somewhere between 12 and 32 illustrated pages, depending on length and age group. We plan out the pages together, agree on the style, and then move page by page from rough sketch to finished art.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21c0-4 3.6-6.5 8-6.5s8 2.5 8 6.5"></path></svg></div>
        <h3>Character Design and Development</h3>
        <p>Before any full pages are drawn, we usually spend time getting the main characters right. This means drawing them from a few angles, working out how they will look happy, sad, tired, or excited, and making sure they stay consistent from the first page to the last.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Cover Illustration and Design</h3>
        <p>The cover is often the first thing anyone sees, whether that is a parent in a shop or a reader scrolling online. We treat cover design as its own task, separate from the inside pages, because it has a different job to do. It needs to grab attention fast.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Spot Illustrations and Chapter Art</h3>
        <p>Not every book needs full-colour pages on every spread. For early readers and chapter books, we often use smaller spot illustrations, black-and-white line drawings, or the odd full-page image to break up the text without slowing down the story.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Digital and Traditional Illustration</h3>
        <p>Every book illustrator we work with in London has their own tools and habits. Some draw digitally from the start. Others sketch by hand and then scan and colour their work on a screen. We do not force one method. What matters is the final result and whether it suits your story.</p>
      </article>
    </div>
  </div>
</section>

<!-- 4 - CREATE YOUR OWN PICTURE BOOK: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- your book, your way</p>
      <h2>Create Your Own Picture Children's Book With London Illustration Experts</h2>
      <p>Some clients come to us with a full manuscript and a clear idea. Others come with a rough concept and a few scribbled notes. Both are fine either way. Working with a local team means you can meet face to face if you want to, talk on the phone in a normal time zone, and get artwork made by someone who understands British schools, British seasons, and British everyday life. Many of our clients tell us this local understanding is exactly why they wanted a team close to home rather than sending their story off to a stranger overseas.</p>
      <p>If you type illustration children's in London into a search bar, you will get a long list of options, and it is easy to feel stuck before you even start. We try to make the first step easy. Send us your text, tell us roughly what you imagine, and we will come back with ideas rather than a blank page and a big invoice.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Custom children's book illustration service in London at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 5 - ILLUSTRATION STYLES BY AGE GROUP (feature cards) -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age by age</p>
    <h2>Choosing The Right Illustration Style For Your Child’s Age Group</h2>
    <p style="margin:14px auto 0;">The illustration style should match the age and reading level of your audience. Before creating artwork, we consider how illustrations will support the story, engage young readers, and complement the overall book experience.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="3"></rect><path d="M9 9h.01M15 9h.01"></path><path d="M9 15c.8.8 1.8 1.2 3 1.2s2.2-.4 3-1.2"></path></svg></div>
        <h3>Ages 0–3: Board Books and Early Readers</h3>
        <p>For very young children, illustrations need to be simple, bold, and easy to understand. Bright colours, clear shapes and minimal backgrounds help children recognise characters, objects and emotions while supporting early learning.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 3–7: Picture Books</h3>
        <p>Picture books allow for more detailed scenes and expressive characters. Since these books are often read aloud, illustrations help build the world of the story, create emotion, and make every page turn more engaging.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V4H6.5A2.5 2.5 0 0 0 4 6.5v13Z"></path><path d="M4 19.5A2.5 2.5 0 0 0 6.5 22H20v-5"></path></svg></div>
        <h3>Ages 5–8: Early Readers and Chapter Books</h3>
        <p>At this stage, illustrations support children as they begin reading independently. Artwork is usually lighter, with simple line illustrations or smaller visuals that complement the text without distracting from the story.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l2 4.5L19 8l-3.5 3.5L16.5 16 12 13.5 7.5 16l1-4.5L5 8l5-0.5Z"></path><path d="M12 17v4"></path></svg></div>
        <h3>Ages 8–12: Middle Grade Fiction</h3>
        <p>Older children’s books rely more on storytelling, characters and imagination. Illustrations are often used for covers, chapter openings or key moments to strengthen the book’s theme and overall identity.</p>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about.webp" alt="The London authors, parents, and publishers who need a children's book illustrator" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping Children’s Authors, Parents, and Publishers across London</h2>
      <p>Our clients are not all the same, and we do not expect them to be. We have worked with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents writing a personal story for their own children</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers creating classroom reading material</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers who need reliable freelance illustrators</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Charities and community groups producing books with a message</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners creating a branded storybook as a gift or giveaway</span></li>
      </ul>
      <p>Whatever your reason for making a book, the process below stays roughly the same.</p>
    </div>
  </div>
</section>

<!-- 7 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Children’s Book Illustration Process From Idea To Publication</h2>
    <p style="margin:14px auto 0;">Making a book is not one big task. It is a series of smaller ones, done in order.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Story</h3></div>
        <div class="svc-step-body"><p>You send over your manuscript, or your idea if it is not written yet. We read it properly, not just skim it, so we can ask sensible questions before any drawing starts.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Style and Character Discussion</h3></div>
        <div class="svc-step-body"><p>We talk about style. This might mean looking at other books together, discussing colour and mood, or sketching a few quick character options. This step protects you from paying for a full set of illustrations in a style you do not actually like.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Rough Layouts</h3></div>
        <div class="svc-step-body"><p>Before any final art, we build rough black-and-white layouts for every page. These show where the text sits, where the characters are, and how the story flows visually from page to page. This is the easiest and cheapest point to make big changes.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Final Illustrations</h3></div>
        <div class="svc-step-body"><p>Once the layouts are approved, we move to full colour, final artwork. We usually deliver this in batches rather than all at once, so you can flag anything early rather than after every page is finished.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>File Preparation</h3></div>
        <div class="svc-step-body"><p>When all the art is approved, we prepare final, print-ready files. This includes the correct resolution, bleed, and colour profile for printing, as well as web-friendly versions if you also want an ebook.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Delivery and Support</h3></div>
        <div class="svc-step-body"><p>We hand over the finished files along with a short explanation of what each one is for. If you have questions after delivery, whether that is about printing or file formats, we are still here to help.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 8 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 9 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How To Choose The Right Children’s Book Illustrator in London</h2>
      <p>Not all book illustrators in London work the same way, and picking the wrong fit can waste both time and money. Before you commit to anyone, including us, it is worth asking a few honest questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show a full portfolio, not just their best three images?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain how many rounds of changes are included in the price?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is there a written agreement covering rights, ownership, and use of the artwork?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they give a realistic timeline, rather than promising an unusually fast turnaround?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they show rough layouts before jumping to full colour art?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are they clear about what happens if the project stops halfway through?</span></li>
      </ul>
      <p>A good illustrator, whether that is us or someone else, should be happy to answer all of these without getting defensive.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing the right children's book illustrator in London" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 10 - WHY PROFESSIONAL ILLUSTRATION MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Children’s Book Illustration Makes A Difference</h2>
  </div>
  <div class="container narrow center">
    <p>It is tempting to think illustration is just decoration on top of a story. In practice, it does much more than that:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Illustrations help young readers follow a story before they can read every word themselves</li>
      <li>Consistent character design builds trust and recognition across a whole book or series</li>
      <li>Strong cover art is often the single biggest factor in whether a book gets picked up at all</li>
      <li>Good pacing between text and pictures affects how a story feels when read aloud</li>
      <li>Professional file preparation avoids costly printing mistakes later on</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this needs to be expensive or complicated. It just needs to be done properly, with someone paying attention to the details. A rushed illustration job often shows up in small ways: characters that look slightly different from page to page, colours that do not match between the cover and the inside, or spacing that makes the text hard to read. These are the kind of details a careful process is built to catch before the book ever goes to print.</p>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Children’s Authors Choose <em>Purple Giraffe Press</em> For Illustration</h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We are based in London and understand the market</h3><p>Working with a local team means shared context, easier meetings, and no confusion over time zones or cultural references.</p></article>
      <article><span>✓</span><h3>We match artists to stories, not the other way round</h3><p>We do not push every client towards one house style. We look at your story first and find the right artist for it.</p></article>
      <article><span>✓</span><h3>We show you rough layouts before final art</h3><p>This protects your budget and gives you a real chance to make changes before the expensive stage begins.</p></article>
      <article><span>✓</span><h3>We are upfront about pricing and rights</h3><p>You will always know what is included, what costs extra, and who owns the final artwork.</p></article>
      <article><span>✓</span><h3>We stay reachable after delivery</h3><p>If a printer has a question about your files, or you need a slightly different file format later, you can still reach us.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for a children's book illustration service in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does a Children’s Book Illustration Cost In London?</h2>
      <p>The cost of illustrating a children’s book depends on several factors, including the number of pages, illustration style, level of detail, character development, and the amount of creative support your project requires.</p>
      <p>A simple character illustration project will usually involve a different process compared to a complete picture book with multiple scenes, backgrounds, and consistent artwork across every page. That is why we create personalised quotes based on your story, goals, and the type of book you want to create.</p>
      <p>At Purple Giraffe Press, we believe professional illustration should be transparent and tailored to each author’s needs. Before starting any artwork, we discuss your vision, explain what is included, and provide a clear breakdown of the illustration process so you know exactly what to expect.</p>
      <p>Whether you are creating your first picture book, developing a series, or preparing a children’s book for publishing, our team can help you understand the best approach for your project and guide you from the first idea to the finished artwork.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 14 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Complete Support For Children’s Book Authors</h2>
    <p style="margin:14px auto 0;">What your project includes depends on your goals. We offer a full suite of professional services tailored to the specific needs of children’s literature.</p>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'ghostwriting', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready To Turn Your Children’s Book Idea Into <em>Reality?</em></h2>
      <p>If you have a story sitting on your laptop, or even just in your head, get in touch and tell us about it. There is no pressure and no obligation. We will read what you send, ask a few questions, and give you an honest view on style, timeline, and cost. If you need illustrations for children's books in London, this is a good place to start that conversation.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to illustrate your children's book in London" loading="lazy" decoding="async">
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

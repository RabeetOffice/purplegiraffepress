<?php
include 'includes/config.php';

$page_title       = 'Dublin Design Service for Children\'s Books';
$page_description = 'Bring your children\'s book to life with beautiful design in Dublin. Creative, story-driven layouts and illustrations that captivate young readers.';
$canonical_path   = 'childrens-books-design-services-in-dublin.php';
$breadcrumb_name  = 'Book Design in Dublin';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'Dublin',      'url' => page_url('locations/dublin.php')],
    ['name' => 'Book Design', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with authors based in Dublin?',
    'a' => 'Most of our clients are based in Dublin, but we work with authors and publishers across Ireland too. Everything is handled by email and video call, so location isn\'t really a barrier.',
  ),
  1 =>
  array (
    'q' => 'Can you help authors based in London as well?',
    'a' => 'Yes. While we\'re based in Dublin, our design and illustration work is all done remotely, so authors in London and elsewhere in the UK can use our services just as easily as clients closer to home.',
  ),
  2 =>
  array (
    'q' => 'Do you offer a full package, or just parts of the process?',
    'a' => 'Both. Some clients want the full package, cover, layout, and illustration together. Others just need one part, like a cover redesign or help formatting a file for Amazon KDP. We\'re happy to help with either.',
  ),
  3 =>
  array (
    'q' => 'How long does a typical children\'s book project take?',
    'a' => 'It depends on the scope. A simple layout or cover job can be quick, often a couple of weeks, while a fully illustrated picture book takes longer, since original artwork needs time to get right and usually goes through a few rounds of sketches before final colour. We\'ll give you a realistic timeline once we know what your project involves, and we\'ll flag it early if a deadline you have in mind looks too tight.',
  ),
  4 =>
  array (
    'q' => 'Do I need to have a finished manuscript before I contact you?',
    'a' => 'No. Some authors come to us with a finished manuscript, others with a rough draft or just an idea for a character. We can advise on next steps either way.',
  ),
  5 =>
  array (
    'q' => 'What if I only need a colouring book, not a full story book?',
    'a' => 'That\'s a service on its own. We regularly design colouring books for kids, with clean line art suited to the age group and theme you have in mind.',
  ),
  6 =>
  array (
    'q' => 'Will I own the final artwork and files?',
    'a' => 'Yes. Once your project is complete and paid for, the final files are yours, whether that\'s for print, Kindle upload, or both.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Book Design</div>
      <h1>Children's Books Design Services in <strong>Dublin</strong>: <em>Where Every Page Comes to Life</em></h1>
      <p class="lead">Writing a children's book is only half the job. The other half is making it look like a real book, one that a child wants to pick up, open, and keep coming back to. That's where we come in.</p>
      <p class="lead">Purple Giraffe Press works with authors, small publishers, and self-publishers across Dublin to turn a finished manuscript into a book that looks and feels professional. We handle the cover, the inside pages, the pictures, and the final files you need to print or publish.</p>
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
      <p>Maybe you've written your first picture book, and you're not sure what happens next. Maybe you've been through a few designers already, and you're tired of getting files back that don't feel right for kids. Either way, you don't need to know anything about design software or publishing formats. You just need someone who knows what makes a children's book work and who will explain things plainly along the way.</p>
      <p>We keep things simple, honest, and easy to follow from the first email to the final file. If you're comparing your options and searching for the best children's book designer in Dublin, the main thing to look for is someone who treats your book as its own project, not a template with your title dropped in. That's the approach we take with every author who gets in touch.</p>
      <p>Every book is different, so we don't force your story into a fixed package. We look at what you've got, what you need, and what will actually help a child pick up the book and stay with it to the last page.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book Design &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-cover-design.webp" alt="Children's books design services in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE OFFER (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Complete Children’s Book Design Services for Dublin Authors</h2>
    <p style="margin:14px auto 0;">A children's book has more moving parts than most people expect. The words matter, but so does the size of the text, the space around a picture, the colours on the cover, and whether the whole thing looks right printed on paper or sitting in a Kindle preview. We look after all of it.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Cover Design That Makes Someone Stop Scrolling</h3>
        <div class="fc-body">
          <p>Your cover is doing a job before anyone reads a single word. As a children's book cover designer in Dublin, we build covers that suit the age group, the story, and the shelf (or screen) they'll sit on. We think about the title placement, the main character, the colours, and how the cover reads as a small thumbnail online, not just as a big printed image.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M7 8h10M7 12h10M7 16h6"></path></svg></div>
        <h3>Layout and Page Design</h3>
        <div class="fc-body">
          <p>Getting words and pictures to sit well together on a page sounds easy until you try it yourself. Text that's too small, pictures that crowd the margin, or a page turn that lands in the wrong spot can all pull a child out of the story. Working as a children's book layout designer in Dublin, we set up your pages so the story flows properly from cover to cover, with consistent spacing, readable type, and a layout built for the age group you're writing for.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Illustration Services</h3>
        <div class="fc-body">
          <p>Some clients arrive with a manuscript and nothing else. Others already have a character in mind but need it drawn properly. As a children's book illustrator in Dublin, we can create original artwork for your story, from single character sketches through to a full set of illustrated spreads. We also offer wider book illustration services in Dublin for authors who need supporting art, spot illustrations, or chapter openers rather than a full picture book treatment.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m15.5 4.5 4 4L9 19H5v-4L15.5 4.5Z"></path><path d="M13.5 6.5l4 4"></path></svg></div>
        <h3>Colouring Books for Kids</h3>
        <div class="fc-body">
          <p>Colouring books look simple, but the line work has to be just right. Too thin and it's hard to colour in. Too thick and it looks messy once filled in. Working as a colouring book designer for kids in Dublin, we draw clean, clear line art sized properly for the page, whether that's animals, adventures, seasonal themes, or anything else you have in mind.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5"></path><path d="M9 15l2 2 4-4"></path></svg></div>
        <h3>Formatting for Amazon KDP and Print</h3>
        <div class="fc-body">
          <p>If you're self-publishing, the file has to meet specific technical rules, or it gets bounced back or looks wrong once printed. As a children's book designer for Amazon KDP in Dublin, we prepare your files to the right trim size, bleed, and colour profile, so what you upload is what actually prints, with no surprises when your copies arrive. We also check things that are easy to miss, like margins that are safe for the gutter on a printed spread and text that stays clear of the trim edge, so nothing gets cut off once the book is bound.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE GROUPS (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Designing Children’s Books For Every Age Group</h2>
    <p style="margin:14px auto 0;">The design of a children’s book should match the way each age group reads and interacts with stories. We create covers, illustrations, layouts, and visual elements that suit your readers and help your book make the right impression.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Baby And Toddler Books (Ages 0–3)</h3>
        <div class="fc-body">
          <p>Designs for younger children focus on bold colours, simple illustrations, larger text, and clear visuals that support early learning and shared reading.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Picture Books (Ages 3–7)</h3>
        <div class="fc-body">
          <p>Picture book design combines artwork and text carefully, creating engaging pages where illustrations help tell the story alongside the words.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h6a3 3 0 0 1 3 3v11a2.5 2.5 0 0 0-2.5-2H4Z"></path><path d="M20 5h-4a3 3 0 0 0-3 3v11a2.5 2.5 0 0 1 2.5-2H20Z"></path></svg></div>
        <h3>Early Readers And Chapter Books (Ages 5–10)</h3>
        <div class="fc-body">
          <p>These books need clean layouts, readable fonts, and balanced illustrations that support children as they begin reading independently.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Middle Grade Books (Ages 8–12)</h3>
        <div class="fc-body">
          <p>Older children's books often require more detailed covers, stronger character designs, and layouts that match longer, more complex stories.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Choosing the right design approach for your target age group helps create a book that looks appealing, feels natural to read, and connects with young audiences.</p>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin authors, publishers, and schools we design children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Children’s Book Design Services Are For</h2>
      <p>We work with a wide mix of people, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors publishing their own children's book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers based in Dublin and around Ireland</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and schools producing books for pupils or fundraising projects</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents creating a personal or family storybook</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who need help with layout, even though they can draw</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers who have text but no artwork at all yet</span></li>
      </ul>
      <p>If your project involves a children's book in any form, there's a good chance we can help.</p>
      <p>We've also worked with grandparents putting together a one-off keepsake book for a grandchild, and with small charities producing storybooks for fundraising or awareness campaigns. The size of the print run doesn't matter to us. A single copy for a family gets the same care as a hundred copies going to a shop.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Children’s Book Designer in Dublin</h2>
      <p>Not every designer who says they do children's books actually understands them. Before you hire anyone, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you finished children's books they've actually worked on, not just adult book covers?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand print requirements like bleed, trim size, and colour profiles, or just digital design?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they explain the process in plain terms, or do they use jargon without checking that you understand?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they give you a clear quote up front, based on your actual project?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are they upfront about timelines, and realistic ones at that?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you own the final files once the project is finished?</span></li>
      </ul>
      <p>If a designer can't answer these clearly, that's worth noticing before you pay anything.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing the right children's book designer in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PROFESSIONAL DESIGN MATTERS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Design Makes Children’s Books More Successful</h2>
  </div>
  <div class="container narrow center">
    <p>It's tempting to think design is the last small step after the writing is done. In children's publishing, it's not. A few reasons why it matters:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Children choose books by how they look before anyone reads them the words</li>
      <li>Poor layout can make a story harder to follow, even if the writing is strong</li>
      <li>A rushed or amateur-looking cover can put off parents browsing online</li>
      <li>Print errors, like the wrong bleed or a bad colour profile, can ruin a whole print run</li>
      <li>A book that looks professional gives your story the best chance of actually being read</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Good design doesn't replace good writing. It just makes sure the writing gets a fair chance.</p>
    <p style="margin-top:14px;">Think about the last few children's books you saw in a shop or on a shelf at home. Chances are, the ones you remember had a strong cover and pages that felt like they belonged together, not a mix of different fonts and awkward spacing. That's rarely an accident. Somebody thought about it carefully before it ever reached print.</p>
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
    <h2>How Our Professional Children’s Book Design Process Works</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Tell Us About Your Book</h3></div>
        <div class="svc-step-body"><p>Send us your manuscript, or just an idea of what you're planning. Let us know the age group, whether you need illustrations, and if you're aiming for print, Kindle, or both.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>We Send You a Quote</h3></div>
        <div class="svc-step-body"><p>Once we understand the scope of the project, we send a clear quote and a rough timeline. No pressure, no jargon, just a straightforward breakdown of what's included.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Design and Draft</h3></div>
        <div class="svc-step-body"><p>We start work on your cover, layout, or illustrations, depending on what you've asked for. You'll see draft versions along the way rather than waiting until the very end.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Feedback and Changes</h3></div>
        <div class="svc-step-body"><p>You tell us what's working and what isn't. We make changes based on your notes, not the other way round. This is your book, and the final say is yours.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Files</h3></div>
        <div class="svc-step-body"><p>Once you're happy, we send finished files ready for print or for uploading to your publishing platform of choice, formatted correctly so there are no last-minute surprises.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Dublin Children’s Authors Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only work on books, so we know how kids read them</h3><p>Children's books have different rules from adult ones, and we design with that in mind every time.</p></article>
      <article><span>✓</span><h3>Clear pricing from the start</h3><p>You get a proper quote before any work begins, not a vague estimate that changes later.</p></article>
      <article><span>✓</span><h3>You keep control of your book</h3><p>We show you drafts and take your feedback seriously, rather than delivering one final version and hoping for the best.</p></article>
      <article><span>✓</span><h3>Files built for how you're actually publishing</h3><p>Whether that's a print run through a local printer or a self-published title going up on Amazon, we prepare files to match.</p></article>
      <article><span>✓</span><h3>Straightforward communication</h3><p>No jargon, no long waits for a reply, and no confusion about what stage your project is at.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, written quote for children's book design in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Children’s Book Design Services Typically Cost in Dublin</h2>
      <p>Pricing depends on the size of your project. A short picture book with a handful of illustrations costs less than a longer book with full colour art on every page, and a straightforward layout job costs less than a full illustration commission. We don't publish a flat rate because no two books are the same.</p>
      <p>A few things that affect price include the number of pages, how many illustrations you need, whether artwork is fully original or based on a style you already like, and whether you need both print and digital files or just one. What we do offer is a proper quote, in writing, before you commit to anything, so you know exactly what you're paying for and why. There's no pressure to say yes straight away either. Take the quote away, think it over, and come back with questions if you have any.</p>
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
      <h2>Ready to Give Your <em>Children’s Book Professional Polish?</em></h2>
      <p>If you've got a children's story that needs a proper cover, tidy layout, or original artwork, get in touch and tell us about it. Send over your manuscript, your idea, or even just a few questions, and we'll get back to you with honest advice on the best next step for your book.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to design your children's book in Dublin" loading="lazy" decoding="async">
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

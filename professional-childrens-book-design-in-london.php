<?php
include 'includes/config.php';

$page_title       = 'Professional Children\'s Book Design in London';
$page_description = 'Want your children\'s book to truly stand out? Our London-based designers craft stunning covers, layouts and illustrations with creativity and care.';
$canonical_path   = 'professional-childrens-book-design-in-london.php';
$breadcrumb_name  = 'Book Design in London';
$breadcrumbs = [
    ['name' => 'Home',       'url' => page_url('index.php')],
    ['name' => 'Locations',  'url' => page_url('locations/')],
    ['name' => 'London',     'url' => page_url('locations/london.php')],
    ['name' => 'Book Design', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need to have finished writing my book before contacting you?',
    'a' => 'No. Some clients come to us with a finished manuscript; others are still working on it. We can start planning the design even while the text is being finalised.',
  ),
  1 =>
  array (
    'q' => 'How long does a typical children\'s book design project take?',
    'a' => 'It depends on the length and complexity of the book, but most projects take a few weeks from first sketch to final files. We will give you a realistic timeline once we know the scope of your book.',
  ),
  2 =>
  array (
    'q' => 'Can you work with an illustrator I already have?',
    'a' => 'Yes. If you already have illustrations you love, we can focus purely on layout, cover design, or KDP formatting instead of starting from scratch.',
  ),
  3 =>
  array (
    'q' => 'Do you only design picture books, or other types too?',
    'a' => 'We work on picture books, early reader books, colouring books, and activity books. If you are unsure whether your project fits, just ask us.',
  ),
  4 =>
  array (
    'q' => 'What files will I receive at the end?',
    'a' => 'You will receive print-ready files suitable for your chosen printer or platform, along with web-friendly versions if you need them for digital sales or previews.',
  ),
  5 =>
  array (
    'q' => 'Can you help if I have already tried designing the book myself?',
    'a' => 'Yes. We often step in partway through a project to fix layout issues, tidy up illustrations, or prepare a self-designed book for proper printing or publishing.',
  ),
  6 =>
  array (
    'q' => 'Do you offer revisions if I am not happy with the first draft?',
    'a' => 'Yes. Every quote includes an agreed number of revision rounds, so you have room to ask for changes before the design is finalised.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). UK country code and a
   central-London placeholder postcode until we have a real London address. */
$location_business = [
    'locality'   => 'London',
    'region'     => 'London',
    'postalCode' => 'EC1V 2NX',
    'country'    => 'GB',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Book Design</div>
      <h1>Children&rsquo;s <em>Book Design Services</em> in London That Turn Ideas Into <strong>Magical Reading Experiences</strong></h1>
      <p class="lead">Every children's book starts as an idea in someone's head. Turning that idea into a book that kids want to hold, open, and read again is a different job. It takes the right layout, the right pictures, and a cover that grabs attention on a shelf or a screen.</p>
      <p class="lead">Purple Giraffe Press works with authors, parents, teachers, and small publishers across London who want their book to look as good as the story reads. We handle the design side of things, from the first sketch to the final print-ready file.</p>
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
      <!-- <p class="eyebrow script-mark">- what it is</p> -->
      <!-- <h2>Whatever stage you are at, we can pick up the project and carry it through to something you are proud to publish</h2> -->
      <p>If you have searched for a children's book designer in London before, you have probably noticed how many studios claim to do everything under the sun. We would rather just show you the actual work we do and let you decide for yourself.</p>
      <p>Maybe you have finished writing your story, and now you are stuck on what comes next. Maybe you have tried a template, and it just does not look right. Whatever stage you are at, we can pick up the project and carry it through to something you are proud to publish.</p>
      <p>London has no shortage of design studios, but not many of them focus purely on children's books. That focus matters. Designing a picture book is a different job from designing a business brochure or a website. The pacing is different. The reading age is different. Even the way colour is used has to be thought through, since bright, busy pages work for some age groups and overwhelm others.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-cover-design.webp" alt="Professional children's book design in London by Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - DESIGN SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Everything Your Children&rsquo;s Book Needs From Idea to Print</h2>
  </div>
  <div class="container narrow center" style="margin-bottom:34px;">
    <p>A children's book is not just text on a page. It is pictures, spacing, fonts, colours, and pacing, all working together. Here is how we break the work down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Illustration That Matches Your Story's Tone</h3>
        <p>Good pictures do more than decorate a page. They carry half the story. Our children's book illustrator in London starts with a conversation about your characters, your setting, and the mood you want, whether that is silly and bright or calm and gentle. From there, we sketch, get your feedback, and only move to finished artwork once you are happy with the direction.</p>
        <p>We can illustrate from scratch, work from your rough sketches, or build on a style you already like (without copying anyone else's work directly).</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Cover Design That Stops the Scroll</h3>
        <p>Most books, especially on Amazon, are judged by their cover in under two seconds. As a children's book cover designer in London, we focus on covers that work small (as a thumbnail) just as well as they work large (as a printed book on a shelf). That means bold shapes, clear titles and colours that pop even on a phone screen.</p>
        <p>We usually offer a few cover concepts before settling on one, so you are not stuck with the first idea. We also think about the back cover and spine, since these matter more than people expect once a book is printed and sitting on a shelf next to others.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Page Layout That Reads Well Out Loud</h3>
        <p>A lot of children's books are read aloud, which changes what a good layout looks like. Text needs to sit where a parent's eye finds it easily. Pictures need to support the words, not fight with them. As a children's book layout designer in London, I think about page turns, pacing, and where the eye lands first on every spread.</p>
        <p>We also make sure your layout works for both print and digital formats, so you are not paying twice to fix problems later. This includes checking how the book looks on a tablet or e-reader, not just on a printed page, since more families read together on screens now than in the past.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Colouring Books for Kids</h3>
        <p>Colouring books look simple, but they are their own skill. Lines need to be clean and clear enough for small hands, but the pictures still need to be fun to look at. Our work as a colouring book designer for kids in London covers everything from single character sheets to full themed colouring books with dozens of pages.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M2 4h7a3 3 0 0 1 3 3v13a3 3 0 0 0-3-3H2Z"></path><path d="M22 4h-7a3 3 0 0 0-3 3v13a3 3 0 0 1 3-3h7Z"></path></svg></div>
        <h3>Full Book Illustration Services</h3>
        <p>If you need more than one piece here and there, we offer complete book illustration services in London that cover a whole manuscript from cover to back page, including any spot illustrations, chapter headers, or maps your story might need.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"></path><rect x="7" y="14" width="10" height="7" rx="1"></rect></svg></div>
        <h3>Getting Your Book Ready for Amazon KDP</h3>
        <p>Self-publishing on Amazon comes with its own rules around file types, bleed, margins, and cover templates. As a children's book designer for Amazon KDP in London, we prepare your files to meet these requirements so your book uploads cleanly the first time, without formatting errors bouncing back at you.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE DESIGN FOR: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="The London authors, parents, and publishers we design children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Helping Authors Turn Their Children&rsquo;s Stories Into Books</h2>
      <p>Our clients come from all kinds of backgrounds. We regularly work with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors publishing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents turning a bedtime story into a keepsake for their child</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers creating classroom resources or reading material</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers who need extra design capacity</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors preparing a book for Amazon or print on demand</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Charities and schools producing educational colouring or activity books</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 6 - AGE-APPROPRIATE DESIGN (feature cards) -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every reading stage</p>
    <h2>Age-Appropriate Children&rsquo;s Book Design For Every Reading Stage</h2>
  </div>
  <div class="container narrow center" style="margin-bottom:34px;">
    <p>Children&rsquo;s books are designed differently depending on the age of the reader. A book created for toddlers needs a completely different visual approach compared to a middle-grade story, from illustration style and colour choices to typography, page layout, and overall reading experience. Our children&rsquo;s book designers understand these differences and create designs that support the story while keeping young readers engaged.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3 2.7 5.5 6 .9-4.3 4.2 1 6L12 16.8l-5.4 2.8 1-6L3.3 9.4l6-.9Z"></path></svg></div>
        <h3>Ages 0 to 5: Board Books and Picture Books</h3>
        <p>For younger children, design plays a major role in capturing attention and supporting read-aloud experiences. We focus on bold illustrations, clear page layouts, engaging colours, and balanced text placement that allows children and parents to enjoy every spread together.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M2 4h7a3 3 0 0 1 3 3v13a3 3 0 0 0-3-3H2Z"></path><path d="M22 4h-7a3 3 0 0 0-3 3v13a3 3 0 0 1 3-3h7Z"></path><path d="M12 7v13"></path></svg></div>
        <h3>Ages 5 to 8: Early Readers and Beginning Chapter Books</h3>
        <p>Early readers need designs that encourage confidence and make reading feel enjoyable. We create layouts with readable typography, balanced text placement, supportive illustrations, and a structure that helps children follow the story as they develop independent reading skills.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h12v18l-6-4-6 4Z"></path></svg></div>
        <h3>Ages 8 to 12: Chapter Books and Middle Grade Design</h3>
        <p>Middle-grade readers expect more detailed storytelling with fewer illustrations, meaning the design needs to support longer reading sessions. We focus on clean layouts, consistent chapter styling, engaging cover designs, and visual elements that match the themes and tone of the story.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M15 4V2M15 10V8M11.5 6h2M17.5 6h2"></path><path d="M4 20 13 11l1.8 1.8-9 9L4 20Z"></path><path d="m13 11 1.8 1.8"></path></svg></div>
        <h3>Genre-Specific Children&rsquo;s Book Design</h3>
        <p>Every children&rsquo;s book has its own personality, whether it is a playful picture book, educational resource, fantasy adventure, activity book, or colouring book. We adapt the design approach around your book&rsquo;s genre, target audience, and creative direction to create a finished product that feels unique and professionally crafted.</p>
      </article>
    </div>
  </div>
</section>

<!-- 7 - CHOOSING THE RIGHT DESIGNER: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>Choosing the Right Designer for Your Children&rsquo;s Book in London</h2>
      <p>Picking a designer for your book is a big decision, and it is worth taking your time. Before you commit to anyone, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you a portfolio of finished children's books, not just single illustrations?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain how many rounds of revisions are included?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will they give you the final files in formats you can actually use, such as print-ready PDFs?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they understand print requirements like bleed, margins, and colour profiles, not just screen design?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are they clear about pricing before you start, with no vague promises?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they ask about your target reader's age, since design for a toddler differs a lot from design for a nine-year-old?</span></li>
      </ul>
      <p>If a designer cannot answer these clearly, that is worth noticing before you sign anything. It is your book and your money, so a bit of upfront questioning always pays off later.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="What to look for in a children's book designer in London" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY DESIGN MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Design Makes Your Story More Memorable</h2>
  </div>
  <div class="container narrow center">
    <p>It is tempting to think design is just the final polish on a book. In reality, it shapes how the story is received.</p>
  </div>
  <div class="container" style="margin-top:28px;">
    <ul class="content-list">
      <li><strong>A strong cover gets your book picked up in the first place.</strong> No matter how good the story is, a weak cover means fewer people will ever open the book.</li>
      <li><strong>Clear layout keeps young readers engaged.</strong> Cramped text or awkward page breaks can lose a child's attention fast.</li>
      <li><strong>Consistent illustration builds a world kids want to return to.</strong> Characters that look the same throughout the book feel more real and more memorable.</li>
      <li><strong>Good formatting avoids technical headaches later.</strong> Files that are not set up correctly can cause delays or extra costs when you try to print or publish.</li>
    </ul>
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

<!-- 10 - DESIGN PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Process From Concept to Finished Book</h2>
    <p style="margin-top:14px;">We keep the process simple, so you always know what is happening and when.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>We Talk About Your Book</h3></div>
        <div class="svc-step-body"><p>We start with a conversation, over email or a call, about your story, your goals, and your timeline. This is where we figure out what package or type of work fits your book best.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>You Get a Clear Quote</h3></div>
        <div class="svc-step-body"><p>Once we understand the scope, we send a quote that lays out exactly what is included, how many revisions you get, and what the timeline looks like.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Sketch and Share Early Drafts</h3></div>
        <div class="svc-step-body"><p>Rather than disappearing for weeks, we share rough sketches or layout drafts early on. This means you can steer the direction before we spend time on finished artwork.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>We Refine Based on Your Feedback</h3></div>
        <div class="svc-step-body"><p>You will get a set number of revision rounds built into your quote, so you can ask for changes without worrying about extra costs at every step.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>We Deliver Final, Print-Ready Files</h3></div>
        <div class="svc-step-body"><p>Once you are happy, we hand over the finished files in the formats you need, whether that is for a printer, a publisher, or direct upload to a platform like Amazon KDP.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors and Parents Choose <em>Purple Giraffe Press</em></h2>
      <p>Plenty of clients tell us they were searching for the best children's book designer in London and found it hard to compare studios, since most portfolios online look fairly similar at first glance. Here is what actually sets us apart once you look closer.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children&rsquo;s Book Design Specialists</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children's books, not general graphic design</h3><p>This is what we focus on, so we understand pacing, age-appropriate style, and print requirements specific to this kind of book.</p></article>
      <article><span>✓</span><h3>We are based in London and understand the local self-publishing and small press scene</h3><p>That means fewer time zone headaches and a team that gets back to you during normal working hours.</p></article>
      <article><span>✓</span><h3>We keep you involved at every stage</h3><p>No long silences followed by a surprise final draft. You see the work as it develops.</p></article>
      <article><span>✓</span><h3>We are upfront about pricing and timelines</h3><p>You will know what you are paying and when to expect delivery before any work begins.</p></article>
      <article><span>✓</span><h3>We handle the full journey, not just one piece of it</h3><p>From early sketches to KDP-ready files, we can support the whole design process, or just the part you need help with.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, honest quote for children's book design in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Understanding the Cost of Designing Your Children&rsquo;s Book in London</h2>
      <p>Pricing for book design depends on a few things: how many pages your book has, whether you need full illustration or layout only, how many revision rounds you want, and your timeline. Because of this, we do not publish a single flat rate. Instead, we ask a few questions about your project and send back a clear, honest quote with no hidden extras.</p>
      <p>If you are working to a specific budget, tell us early. We will let you know what is realistic within it, rather than promising something we cannot deliver. It is always better to have that conversation upfront than to discover halfway through a project that the scope does not match the budget.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to See Your Book <em>Come to Life?</em></h2>
      <p>If you have a story that deserves a proper design, get in touch with Purple Giraffe Press. Send us a few details about your book, and we will come back to you with honest advice and a clear quote. No pressure, no jargon, just a straightforward conversation about your book.</p>
      <p>Whether you need a single cover, a full set of illustrations, or help getting your files ready for print or Amazon, we are happy to talk it through and tell you honestly what your book needs.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to design your children's book in London" loading="lazy" decoding="async">
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

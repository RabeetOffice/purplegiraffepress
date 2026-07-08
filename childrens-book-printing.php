<?php
include 'includes/config.php';

$page_title       = 'Book Printing Services Across Australia for Authors';
$page_description = 'Purple Giraffe Press provides book printing services across Australia. Quality prints, simple ordering, and books ready to sell or share with your readers.';
$canonical_path   = 'childrens-book-printing.php';

/* The FAQ content below powers both the accordion on the page and the
   FAQPage schema emitted in the <head> by includes/header.php. */
$page_faqs = [
  ['q' => 'What file format do you need for printing?', 'a' => 'We generally work with print-ready PDF files. If your manuscript is currently in another format, let us know, and we can guide you through what needs to change.'],
  ['q' => 'Can I print a small number of copies rather than hundreds?', 'a' => 'Yes. We can help with smaller print runs, which suit family projects, school booklets, or authors who want to test the market before committing to a larger print order.'],
  ['q' => 'Do you print children’s picture books?', 'a' => 'Yes, we print picture books regularly and can advise on paper and colour options that suit image-heavy pages and repeated handling.'],
  ['q' => 'What is the real difference between hardback and paperback printing?', 'a' => 'Hardback uses a stiff, durable cover, while paperback uses a lighter, flexible cover. Hardback usually costs more to produce but tends to last longer and feels more special for gift copies or keepsake editions.'],
  ['q' => 'Will I see a proof before my full order is printed?', 'a' => 'Yes. We always send a proof copy for you to check before we run your full order, so you get the chance to catch any issues first.'],
  ['q' => 'Do you help with cover design as well as printing?', 'a' => 'We can work with a cover you already have, or offer honest guidance on finishing options like matte or gloss if you are not sure what will suit your book.'],
  ['q' => 'How long does printing usually take?', 'a' => 'Turnaround depends on your format, your print run size, and our current workload at the time. We will give you a clear timeframe as part of your quote, so you know what to expect.'],
];

include 'includes/header.php';
?>

<!-- 1 · HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Children's Book Printing</div>
      <h1>Children’s <em>Book Printing Services</em> That Turn Your Story Into a <strong>Real Book</strong></h1>
      <p class="lead">There is something different about holding a finished book. The weight of it in your hands. The way the cover feels when you open it for the first time. If you have written something, whether it is a children’s story, a family memoir, a poetry collection or a full-length novel, chances are you want to see it printed properly, not just sitting as a file on your computer.</p>
      <p class="lead">That is what we do at Purple Giraffe Press. We have spent years printing books for authors and small publishers right across Australia, and we know that every manuscript deserves to come out looking the way you pictured it. We handle the printing side of things so you do not have to work out file formats, paper types, or binding methods on your own.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Book</a>
        <a class="btn btn-light" href="contact.php" data-quote-open>Get a Free Estimate</a>
      </div>
    </div>
    <div class="svc-hero-form reveal"><?php include 'includes/forms/contact-form.php'; ?></div>
  </div>
</section>

<!-- 2 · LOGO SLIDER -->
<?php include 'includes/logo-slider.php'; ?>

<!-- 3 · INTRO: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what it is</p>
      <h2>Simple, honest, and done properly</h2>
      <p>We keep the process simple and honest. You send us your files, we talk through the options with you in plain language, and we print your book the way you imagined it, not the way that is easiest for us.</p>
      <p>Whether this is your first book or your tenth, we are happy to walk you through what each option actually means before you spend a cent.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/childrens-book-printing.webp" alt="Children's book printing at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 · OUR SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we do</p>
    <h2>Our Book Printing Services in Australia</h2>
    <p style="margin:14px auto 0;">We print books in a few different formats, and each one suits a different kind of project. Here is a straightforward look at what we can do for you.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Paperback Book Printing</h3>
        <p>This option is the most common choice for novels, short story collections and many children’s picture books. It is lighter to hold, cheaper to produce, and easier to send out for reviews or sell at markets, school fairs, and local events. We use good quality paper stock so pages do not feel thin or let text show through from the other side.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Hardback Printing for a Book With More Presence</h3>
        <p>If you want your book to have more presence on a shelf, a hardback book is worth thinking about. A hard-cover book feels more permanent and a little more special, which is why many authors choose this option for gift copies, keepsake editions, or family history projects meant to be kept for years.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Hardbound Book Printing</h3>
        <p>This binding method refers to the way pages are sewn or glued firmly into a solid cover, rather than just stapled or spiral-bound. This gives a hard-back book real strength, so it holds up well to repeated reading, which matters a lot for children’s books that get pulled off the shelf again and again.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"></path><rect x="7" y="14" width="10" height="7" rx="1"></rect></svg></div>
        <h3>Booklet and Small Batch Printing</h3>
        <p>Not every project needs a full print run of hundreds of copies. Sometimes all you need is a booklet hardcover option for a small collection, a school project, or a short run for family and friends. We are happy to help with smaller print jobs too, so you are never stuck ordering far more books than you actually need just to make a print run worthwhile.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Cover Design and Finishing Touches</h3>
        <p>Getting the book cover hardcover finish right, or choosing a simple matte look instead, is often what makes a reader pick your book up in the first place. We can work with a cover design you already have, or help guide you toward finishing options like matte, gloss, or textured coatings that suit your genre, your budget, and the feel you are going for.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 · WHO IT IS FOR: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Authors and publishers our book printing services are for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Book Printing Services Are For</h2>
      <p>We work with a wide range of people, and they all have one thing in common. They want their book done properly, without unnecessary stress.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing their first title</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents printing a personal story to keep in the family</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers who need reliable book printing companies to work with regularly</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and community groups printing booklets or class projects</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators and picture book authors who need accurate, consistent colour printing</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Poets and short story writers printing small batches for readings, launches, or local sales</span></li>
      </ul>
      <p>If you are still working out what you need from books for printing, that is completely fine. We can talk you through your options in plain language, with no confusing jargon.</p>
    </div>
  </div>
</section>

<!-- 6 · HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Book Printing Company</h2>
      <p>Not every printer works the same way, and it pays to know what to look for before you hand over your manuscript.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Check that they print your specific format.</strong> Some printers only do one style well. Make sure they can genuinely handle paperback, hardback, or booklet work, whatever your project needs.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Ask about paper and cover options.</strong> Cheap paper can make even a well-written story look poor once it is printed. Ask what stock choices are actually available to you.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Look for clear, honest communication.</strong> You want someone who answers your questions properly, rather than leaving you guessing about timelines, costs, or what happens next.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Ask if they check your files before printing.</strong> A good printer reviews your manuscript file for issues before the job runs, not after the boxes arrive.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Find out about minimum order sizes.</strong> If you only need a small number of copies, check that the printer can actually manage that without charging as if you ordered a thousand.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Ask to see proof first.</strong> No printer should run your full order without giving you a chance to check a sample copy beforehand.</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/why-purple-giraffe.webp" alt="Choosing the right book printing company" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 · WHY PROFESSIONAL PRINTING (content list) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Book Printing Makes a Difference</h2>
  </div>
  <div class="container narrow center">
    <p>It is easy to assume printing is just the last small step, but quite a lot can go wrong if it is rushed or handled without much care.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Colours can shift.</strong> What looks bright and bold on your screen can print dull, too dark, or slightly off if the file is not set up correctly for print.</li>
      <li><strong>Text can crowd the spine.</strong> Margins need enough room for the binding; otherwise, words near the spine become awkward or impossible to read comfortably.</li>
      <li><strong>Paper choice changes how the book feels.</strong> Thin paper can let text show through from the page behind it, which looks unfinished and cheap.</li>
      <li><strong>Binding affects how long a book lasts.</strong> A poorly bound book can start falling apart after only a few reads, which matters even more with children’s books that get handled roughly.</li>
      <li><strong>Cover finish affects durability.</strong> A cover with no protective coating can mark, scuff, or fade quickly, especially once it has been read a few times.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>We pay close attention to these details because your book is not just another item moving through a machine. It is something you have put real time and effort into, and there is a genuine sense of achievement in finally seeing your books in print, ready to hold and share.</p>
  </div>
</section>

<!-- PRINT SPEC · STANDARD BOOK SIZES -->
<section class="section section-white">
  <div class="container">
    <div class="print-section-head">
      <h2>Standard book sizes</h2>
      <p>Choosing the right trim size is the very first print decision you will make. It shapes illustration layout, production cost, shelf presence, and reader experience.</p>
    </div>
    <div class="print-grid cols-2">
      <article class="print-card reveal">
        <span class="print-badge">Most Popular</span>
        <h3>Standard Picture Book</h3>
        <div class="print-dims"><span class="in">8.5 × 8.5 in</span><span class="mm">216 × 216 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 24-40 pages</span><span class="print-chip age">👶 Ages 3-8</span></div>
        <p class="print-note">Industry standard for picture books on Amazon and in bookshops worldwide.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge gold">Premium</span>
        <h3>Large Square Picture Book</h3>
        <div class="print-dims"><span class="in">10 × 10 in</span><span class="mm">254 × 254 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 24-48 pages</span><span class="print-chip age">👶 Ages 3-8</span></div>
        <p class="print-note">Gives illustrators more canvas space, for a more premium, gift-book feel.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge sky">Unique</span>
        <h3>Landscape Picture Book</h3>
        <div class="print-dims"><span class="in">11 × 8.5 in</span><span class="mm">279 × 216 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 24-40 pages</span><span class="print-chip age">👶 Ages 2-6</span></div>
        <p class="print-note">The wide format lends itself to sweeping landscapes and action sequences.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge mint">Ages 0-3</span>
        <h3>Board Book</h3>
        <div class="print-dims"><span class="in">6 × 6 in</span><span class="mm">152 × 152 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 12-24 thick boards</span><span class="print-chip age">👶 Ages 0-3</span></div>
        <p class="print-note">Each page is a thick laminated board, roughly 3 to 5 mm thick. Completely chew-proof.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge mint">Ages 0-3</span>
        <h3>Classic Board Book</h3>
        <div class="print-dims"><span class="in">7 × 7 in</span><span class="mm">178 × 178 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 12-24 pages</span><span class="print-chip age">👶 Ages 0-3</span></div>
        <p class="print-note">The most common board book size seen in supermarkets and toy stores.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge peach">Ages 5-12</span>
        <h3>Early Reader / Chapter Book</h3>
        <div class="print-dims"><span class="in">6 × 9 in</span><span class="mm">152 × 229 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 48-200 pages</span><span class="print-chip age">👶 Ages 5-12</span></div>
        <p class="print-note">The standard trade paperback format, familiar from school library shelves.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge soft">Activity</span>
        <h3>Activity / Colouring Book</h3>
        <div class="print-dims"><span class="in">8.5 × 11 in</span><span class="mm">216 × 279 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 32-100 pages</span><span class="print-chip age">👶 All ages</span></div>
        <p class="print-note">US Letter size gives children the most space for colouring and activities.</p>
      </article>
    </div>
    <div class="print-callout">
      <span class="emoji" aria-hidden="true">ℹ️</span>
      <p>All sizes above are available through both print-on-demand and offset printing at Purple Giraffe Press. We will recommend the best size for your story and illustration style during your project consultation.</p>
    </div>
  </div>
</section>

<!-- PRINT SPEC · PAPER TYPES -->
<section class="section section-soft">
  <div class="container">
    <div class="print-section-head">
      <h2>Paper types and weights</h2>
      <p>Paper stock has a bigger impact on your book's perceived quality than most authors realise. It affects colour vibrancy, durability, weight, and cost.</p>
    </div>
    <div class="print-stack">
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">📄</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>60 lb (90 gsm) Uncoated Offset</h3><span class="print-tag">Black and white or limited colour</span></div>
            <p class="print-meta"><em>Cream or white, slightly textured, easy on the eyes, like a novel.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Chapter books, early readers, text-heavy novels.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Lowest cost per page</li><li>Lightweight, good for thick books</li><li>Easy for children to write or annotate on</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Not ideal for high-resolution full-colour illustrations</li><li>Limited colour gamut</li></ul></div>
            </div>
          </div>
        </div>
      </article>
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">✨</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>80 lb (120 gsm) Gloss Coated</h3><span class="print-tag">Full CMYK colour, ideal</span></div>
            <p class="print-meta"><em>Smooth and shiny, colours pop with high saturation.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Picture books with vibrant full-colour illustrations.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Exceptional colour reproduction</li><li>Makes illustrations look vivid and professional</li><li>Industry standard for full-colour picture books</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Heavier than uncoated</li><li>Slight glare under direct light</li><li>Slightly higher cost</li></ul></div>
            </div>
          </div>
        </div>
      </article>
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">🎨</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>80 lb (120 gsm) Matte Coated</h3><span class="print-tag">Full CMYK colour, excellent</span></div>
            <p class="print-meta"><em>Smooth but not shiny, a soft premium feel with no glare.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Picture books, premium gift editions.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Excellent colour depth without glare</li><li>Feels luxurious to touch</li><li>Popular for premium and award submissions</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Fingerprints show more easily</li><li>Slightly more expensive than gloss</li></ul></div>
            </div>
          </div>
        </div>
      </article>
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">💎</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>100 lb (150 gsm) Silk / Satin</h3><span class="print-tag">Full CMYK colour, premium</span></div>
            <p class="print-meta"><em>Between gloss and matte, a silky, high-end feel.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Collector editions, gift books, premium picture books.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Premium appearance and touch</li><li>Outstanding colour fidelity</li><li>Impressive durability</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Higher cost per page</li><li>Heavier finished book</li></ul></div>
            </div>
          </div>
        </div>
      </article>
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">🧱</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>Board Stock (280-400 gsm)</h3><span class="print-tag">Full CMYK on laminated surface</span></div>
            <p class="print-meta"><em>Rigid cardboard, extremely durable, cannot be torn easily.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Board books for babies and toddlers.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Survives everything a toddler throws at it</li><li>Laminated for spill and chew resistance</li><li>Safe for ages 0 and up</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Much higher production cost</li><li>Minimum print runs are larger</li><li>Heavier to ship</li></ul></div>
            </div>
          </div>
        </div>
      </article>
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">♻️</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>Recycled / FSC-Certified</h3><span class="print-tag">Full colour, warm white point</span></div>
            <p class="print-meta"><em>Slightly textured cream or natural white, warm and organic.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Eco-conscious authors and publishers.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Environmentally responsible</li><li>FSC chain-of-custody certification available</li><li>Appeals to eco-aware buyers</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Slightly lower colour brightness than gloss</li><li>Small premium in cost</li></ul></div>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- PRINT SPEC · COVERS & BINDING -->
<section class="section section-white">
  <div class="container">
    <div class="print-section-head">
      <h2>Cover types and binding</h2>
      <p>The cover is the first thing a child and parent touch. Your binding choice signals quality, durability, and price before the book is even opened.</p>
    </div>
    <div class="print-grid cols-2">
      <article class="print-card flex reveal">
        <div class="row-head"><span class="emoji" aria-hidden="true">📕</span><h3>Hardcover (Case Bound)</h3></div>
        <p class="print-meta">A rigid board cover wrapped in printed laminated paper. The gold standard for children's picture books. Extremely durable, perceived as premium, and typically priced higher ($14.99 to $24.99).</p>
        <ul class="print-feats">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Gloss or matte lamination over the board</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Rounded or square spine</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Optional spot UV varnish for raised gloss</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Optional foil stamping in gold, silver, or holographic</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Retail standard for picture books ages 0 to 8</span></li>
        </ul>
        <p class="print-cost">💰 Higher cost, premium retail position</p>
      </article>
      <article class="print-card flex reveal">
        <div class="row-head"><span class="emoji" aria-hidden="true">📗</span><h3>Softcover / Trade Paperback</h3></div>
        <p class="print-meta">A flexible printed cover, usually 300 gsm and up with lamination. Lower production cost and lighter weight, common for chapter books, activity books, and budget editions.</p>
        <ul class="print-feats">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Gloss or matte lamination</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Optional spot UV on the title or logo</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Significantly lighter than hardcover</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Standard for chapter and activity books</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Lower retail price point ($7.99 to $14.99)</span></li>
        </ul>
        <p class="print-cost">💰 Lower cost, broader accessibility</p>
      </article>
      <article class="print-card flex reveal">
        <div class="row-head"><span class="emoji" aria-hidden="true">📘</span><h3>Board Book (Casebound Boards)</h3></div>
        <p class="print-meta">Every page is its own thick, rigid laminated board. Interior boards are typically 2 to 4 mm thick greyboard wrapped in printed, laminated paper.</p>
        <ul class="print-feats">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>2 to 4 mm greyboard per page</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Pages glued together in pairs</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Waterproof laminated surface</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Rounded corners for safety (optional)</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Indestructible for toddlers</span></li>
        </ul>
        <p class="print-cost">💰 Higher cost, high minimum quantities</p>
      </article>
      <article class="print-card flex reveal">
        <div class="row-head"><span class="emoji" aria-hidden="true">📓</span><h3>Spiral / Wire-O Bound</h3></div>
        <p class="print-meta">Pages held together with a wire or plastic coil spine. They lay completely flat when open, perfect for activity, workbook, and colouring formats where children write or draw inside.</p>
        <ul class="print-feats">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Lays completely flat when open</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Ideal for activity and colouring books</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Available in plastic or metal coil</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Cover can still be a laminated softcover</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Not standard for retail distribution</span></li>
        </ul>
        <p class="print-cost">💰 Mid-range cost</p>
      </article>
    </div>
  </div>
</section>

<!-- PRINT SPEC · PRINT METHODS -->
<section class="section section-soft">
  <div class="container">
    <div class="print-section-head">
      <h2>Print methods explained</h2>
      <p>Understanding how your book is physically produced helps you make smarter decisions about cost, quality, and distribution.</p>
    </div>
    <div class="print-stack">
      <article class="print-card reveal">
        <div class="row-head"><span class="emoji big" aria-hidden="true">🖨️</span><div><h3>Print-on-Demand (POD)</h3><p class="print-meta">Each book is printed digitally only when an order is placed. Zero upfront inventory cost, and ideal for self-publishing authors.</p></div></div>
        <div class="proscons">
          <div class="pros"><p class="h pro">Advantages</p><ul><li>No minimum order quantity, no inventory risk</li><li>Integrates directly with Amazon KDP and IngramSpark</li><li>Automatic fulfilment, we never touch the books</li><li>Easy to update or edit files at any time</li></ul></div>
          <div class="cons"><p class="h con">Limitations</p><ul><li>Slightly higher cost per unit than offset</li><li>Limited paper and binding options</li><li>Less consistent colour between batches</li></ul></div>
        </div>
        <p class="print-bestfor"><strong>🎯 Best for:</strong> First-time authors, low-volume titles, Amazon self-publishing</p>
      </article>
      <article class="print-card reveal">
        <div class="row-head"><span class="emoji big" aria-hidden="true">🏭</span><div><h3>Offset Lithographic Printing</h3><p class="print-meta">Printing plates are made and ink is applied via rollers. The highest quality output and the lowest per-unit cost at scale, from 500 copies and up.</p></div></div>
        <div class="proscons">
          <div class="pros"><p class="h pro">Advantages</p><ul><li>Superior colour accuracy and consistency</li><li>Significantly lower cost per unit at volume</li><li>Widest choice of paper, finishing, and binding</li><li>Required for bookshop and retail distribution</li></ul></div>
          <div class="cons"><p class="h con">Limitations</p><ul><li>Minimum print run typically 500 to 1,000 copies</li><li>Higher upfront cost</li><li>Longer lead time, 4 to 8 weeks from file approval</li></ul></div>
        </div>
        <p class="print-bestfor"><strong>🎯 Best for:</strong> Authors launching with bookshop distribution, school sales, bulk orders</p>
      </article>
      <article class="print-card reveal">
        <div class="row-head"><span class="emoji big" aria-hidden="true">⚡</span><div><h3>Digital Short-Run</h3><p class="print-meta">Digital printing for small batches of 25 to 500 copies. It bridges the gap between POD and offset, great for event stock, reviewer copies, and school visits.</p></div></div>
        <div class="proscons">
          <div class="pros"><p class="h pro">Advantages</p><ul><li>Low minimum quantities, from 25 copies</li><li>Fast turnaround, 5 to 10 business days</li><li>Better quality than POD for large batches</li><li>No plate setup costs</li></ul></div>
          <div class="cons"><p class="h con">Limitations</p><ul><li>More expensive per unit than offset at high volumes</li><li>Narrower paper weight range than offset</li></ul></div>
        </div>
        <p class="print-bestfor"><strong>🎯 Best for:</strong> Pre-launch reviewer copies, event stock, school visits, gift editions</p>
      </article>
    </div>
  </div>
</section>

<!-- PRINT SPEC · FINISHING -->
<section class="section section-white">
  <div class="container">
    <div class="print-section-head">
      <h2>Finishing and special effects</h2>
      <p>Premium finishing turns a good book into a remarkable one. These touches make books gift-worthy, award-worthy, and shelf-standout worthy.</p>
    </div>
    <div class="print-grid">
      <article class="print-card sm reveal"><h3>Gloss Lamination</h3><p class="print-meta">Shiny protective film over the cover. Makes colours pop and is highly durable.</p></article>
      <article class="print-card sm reveal"><h3>Matte Lamination</h3><p class="print-meta">Soft, non-reflective finish. A premium tactile feel that reduces fingerprints.</p></article>
      <article class="print-card sm reveal"><h3>Spot UV</h3><p class="print-meta">High-gloss varnish applied selectively, for example just the title or a character. Creates striking contrast against matte lamination.</p></article>
      <article class="print-card sm reveal"><h3>Foil Stamping</h3><p class="print-meta">Metallic foil in gold, silver, holographic, or rose gold, applied under heat and pressure. Instantly signals a premium gift book.</p></article>
      <article class="print-card sm reveal"><h3>Embossing / Debossing</h3><p class="print-meta">Raises or indents part of the cover into the board for a 3D tactile effect. Often combined with foil.</p></article>
      <article class="print-card sm reveal"><h3>Rounded Corners</h3><p class="print-meta">Available on board books and some hardcovers. Child-safety compliant and adds a premium finish.</p></article>
      <article class="print-card sm reveal"><h3>Ribbon Markers</h3><p class="print-meta">A fabric ribbon attached inside the spine for bookmarking. Found in premium gift-edition hardcovers.</p></article>
      <article class="print-card sm reveal"><h3>Endpapers</h3><p class="print-meta">The decorative pages glued to the inside of a hardcover's boards. A chance to add illustration detail, often a repeat pattern or map.</p></article>
    </div>
  </div>
</section>

<!-- PRINT SPEC · COMPARISON CHART -->
<section class="section section-soft">
  <div class="container">
    <div class="print-section-head">
      <span class="print-kicker"><span class="lbl">Quick reference</span></span>
      <h2>Book type comparison chart</h2>
      <p>At a glance, the most common specifications for each children's book format.</p>
    </div>
    <div class="print-table-wrap reveal">
      <table class="print-table">
        <thead><tr><th>Book type</th><th>Trim size</th><th>Paper</th><th>Cover</th><th>Pages</th></tr></thead>
        <tbody>
          <tr><td class="type">Board Book</td><td class="trim">6 × 6 in / 7 × 7 in</td><td>280-400 gsm board</td><td>Casebound boards</td><td>12-24</td></tr>
          <tr><td class="type">Picture Book</td><td class="trim">8.5 × 8.5 in</td><td>80 gsm gloss/matte</td><td>Hardcover (standard)</td><td>24-40</td></tr>
          <tr><td class="type">Premium Picture Book</td><td class="trim">10 × 10 in</td><td>100 gsm silk</td><td>Hardcover + foil</td><td>24-48</td></tr>
          <tr><td class="type">Early Reader</td><td class="trim">6 × 9 in</td><td>60 gsm uncoated</td><td>Softcover</td><td>48-100</td></tr>
          <tr><td class="type">Chapter Book</td><td class="trim">6 × 9 in</td><td>60 gsm uncoated</td><td>Softcover</td><td>100-200</td></tr>
          <tr><td class="type">Activity / Colouring</td><td class="trim">8.5 × 11 in</td><td>80 gsm uncoated</td><td>Softcover / Spiral</td><td>32-100</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- PRINT SPEC · CTA -->
<section class="section">
  <div class="container">
    <div class="print-cta reveal">
      <h2>Not sure which print spec is right for you?</h2>
      <p>Every Purple Giraffe Press project includes a dedicated print consultation. We will recommend the perfect size, paper, cover, and method for your story and budget.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Print Quote &rarr;</a>
        <a class="btn btn-light" href="pricing.php">View Packages</a>
      </div>
    </div>
  </div>
</section>

<!-- 8 · PORTFOLIO CAROUSEL (full width) -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 9 · PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Book Printing Process, Step by Step</h2>
    <p style="margin:14px auto 0;">Getting your book printed with us follows a clear, honest path from start to finish.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You send through your finished manuscript file, along with any cover artwork you already have. If you are not sure your file is ready for print, we will let you know exactly what needs adjusting before we go any further.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Straightforward Quote</h3></div>
        <div class="svc-step-body"><p>We look at your page count, your chosen format, and how many copies you need, then send you a clear quote. There are no vague figures and no hidden extras added later on.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Prepare Your Files for Print</h3></div>
        <div class="svc-step-body"><p>Our team sets your book up correctly for printing, checking margins, bleed, colour accuracy, and image quality carefully along the way, so nothing is left to guesswork.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>You Review a Proof Before We Print</h3></div>
        <div class="svc-step-body"><p>We send you a proof copy to check before your full order goes to print. This is your chance to catch anything that needs changing while it still costs nothing to fix.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Printing and Delivery</h3></div>
        <div class="svc-step-body"><p>Once you approve the proof, we run your full print job and get your finished books packed up and ready to send to you.</p></div>
      </article>
    </div>
    <p style="margin:26px auto 0; max-width:760px;">Preparing books for print can feel like a big task if you are doing it for the first time, but breaking it down into these steps makes the whole thing much easier to manage.</p>
  </div>
</section>

<!-- 10 · BENEFITS (content list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Benefits of Using a Specialist Book Printer</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You save time.</strong> You do not need to learn printing terminology or file formats yourself. We handle that side of things so you can focus on your writing.</li>
      <li><strong>You get consistent quality.</strong> Every copy in your print run should look and feel the same as the last, without patchy colour or uneven binding.</li>
      <li><strong>You avoid costly mistakes.</strong> Catching a formatting or colour issue before printing is far cheaper than discovering it after hundreds of copies have already been run.</li>
      <li><strong>You get support with small runs.</strong> You are not forced into ordering far more copies than you need just to make a job worthwhile for the printer.</li>
      <li><strong>You get a finished book that matches your vision.</strong> From paper stock to cover finish, your choices are explained clearly so you can decide what actually suits your project and your budget.</li>
    </ul>
  </div>
</section>

<!-- 11 · WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Choose Purple Giraffe Press for <em>Book Printing</em></h2>
      <p>A few simple things set our printing apart.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We understand books, not just printing machinery</h3><p>As a publishing house, we know what makes a manuscript genuinely ready for print, not just how to run a press.</p></article>
      <article><span>✓</span><h3>Clear pricing from the very start</h3><p>You get a proper quote before any work begins, so there are no unpleasant surprises further down the track.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>You are working with a local team that understands local expectations around turnaround times and everyday communication.</p></article>
      <article><span>✓</span><h3>We treat your manuscript with care</h3><p>Your book is not just another job number on a list to us. It is something you have put real effort into, and we treat it that way.</p></article>
      <article><span>✓</span><h3>Simple, honest communication throughout</h3><p>We explain your options in plain language and answer your questions directly, without brushing you off or overcomplicating things.</p></article>
    </div>
  </div>
</section>

<!-- 12 · TESTIMONIALS -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 13 · COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, honest quote for printing your book" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Book Printing Cost in Australia?</h2>
      <p>The cost of printing a book depends on a handful of factors, including page count, format choice, paper stock, cover finish, and how many copies you actually need. A short paperback run will naturally cost less than a full colour hardbound print job with a larger page count and a bigger print run.</p>
      <p>We do not believe in throwing out prices without knowing the details of your project first. Send us your manuscript details and your printing preferences, and we will put together a proper, honest quote so you know exactly what you are paying for before a single page goes to print.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 14 · TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Our most popular services</h2>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 15 · CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 · CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- your book in print</p>
      <h2>Ready to Print Your Book <em>Professionally?</em></h2>
      <p>You have already done the hard part by writing your book. Now let us help you get it printed properly. Send your manuscript through to Purple Giraffe Press, and we will walk you through your printing options, format by format, so your finished book turns out exactly how you pictured it while you were writing it.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to print your book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 · FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- before you print</p>
      <h2>Printing questions, <em>answered.</em></h2>
      <p>Honest answers to the questions authors ask most before going to print. If yours is not here, a quick consultation will cover it.</p>
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

<!-- 18 · FOOTER -->
<?php include 'includes/footer.php'; ?>

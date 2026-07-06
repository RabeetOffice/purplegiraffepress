<?php
include 'includes/config.php';

$page_title       = 'Book Formatting Services for Children\'s Authors';
$page_description = 'Need your children\'s book formatted and ready to print? Purple Giraffe Press helps Aussie authors turn their manuscript into a real, printed book.';
$canonical_path   = 'book-formatting.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need my illustrations finished before I contact you?',
    'a' => 'Not necessarily. We can start planning your layout with placeholder spacing while your illustrator finishes the artwork, then slot the final images in once they are ready.',
  ),
  1 =>
  array (
    'q' => 'Can you format my book for both print and Amazon KDP?',
    'a' => 'Yes. We can prepare separate files for print on demand, Amazon KDP, and ebook platforms, since each one has slightly different technical requirements.',
  ),
  2 =>
  array (
    'q' => 'How long does formatting take?',
    'a' => 'Turnaround depends on your book’s length and complexity. We will give you a clear timeframe as part of your quote, before any work begins.',
  ),
  3 =>
  array (
    'q' => 'What file formats do you need from me?',
    'a' => 'We can usually work with your manuscript in Word or a similar text format, along with your illustrations as high-resolution image files. If you are unsure what you have, send us what you have, and we will let you know if anything else is needed.',
  ),
  4 =>
  array (
    'q' => 'Do you only work with authors in Victoria?',
    'a' => 'No. While we are happy to support authors looking for a children’s book formatting service in Victoria, we work with authors right across Australia and beyond.',
  ),
  5 =>
  array (
    'q' => 'What if I am not happy with the first draft layout?',
    'a' => 'We include a review stage in our process specifically for this. You can request changes before we finalise your files.',
  ),
  6 =>
  array (
    'q' => 'Can you fix a layout I already started myself?',
    'a' => 'Yes. If you have attempted your own layout and it is not working, send it through, and we can assess what needs adjusting or rebuilding.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Book Formatting</div>
      <h1>Children's <em>Book Formatting Services</em>, From Your First Draft to <strong>Your First Book</strong></h1>
      <p class="lead">You've written a kids' Book. Perhaps it had been months, perhaps even years. Here's where many writers get bogged down: turning that manuscript into a book.</p>
      <p class="lead">Formatting is more than just making pages look neat. It's about spaces, font use, images, page numbers, margins, and many other details that can make the difference between your book being viewed as a true children's book by the pros and a self-written document. This is something that readers recognise, although they may not fully understand why.</p>
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
      <h2>Formatting made for children’s books, not general paperwork</h2>
      <p>We provide the kids' book formatting service, which is created specifically for picture books, early readers, and chapter books at Purple Giraffe Press. We understand how to help children with books. The text must be adjacent to pictures. The font should be "little eye-friendly. The rhythm and rhythm of the various pages should sound correct and appropriate when read aloud by parents.</p>
      <p>When you need a formatting service for children's books that understands children's books not general paperwork you've come to the right place.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="Children's book formatting that turns a manuscript into a printed book" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT'S INCLUDED (editorial rows) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what's included</p>
    <h2>What's Included in Our Formatting Service</h2>
    <p style="margin:14px auto 0;">Formatting a children’s book is different from formatting a novel. Pictures, text placement, trim size, and printing method all affect the final result. Here is how we break the work down.</p>
  </div>
  <div class="container">
    <div class="editorial-rows">
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">01</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Interior Layout and Design</h3></div>
        <div class="er-body">
          <p>This is the heart of our service. We handle interior children’s book formatting services for picture books, board books, and illustrated chapter books. That means:</p>
          <ul class="check-list" style="margin-top:16px;">
            <li>Placing text and illustrations so each page reads clearly</li>
            <li>Choosing fonts that suit the age group and story tone</li>
            <li>Setting consistent margins and spacing throughout the book</li>
            <li>Making sure text does not get lost near the book’s spine or gutter</li>
            <li>Adjusting line breaks so sentences do not split awkwardly across a page.</li>
          </ul>
        </div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">02</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Getting Your Book Amazon Ready</h3></div>
        <div class="er-body"><p>Many of our clients are self-publishing through Amazon. We provide Amazon children's book formatting services that meet KDP’s technical requirements, including correct trim sizes, bleed settings, and file types for both paperback and hardcover options. We check your file against KDP’s specifications before you upload it, so you are not left guessing why a proof got rejected.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">03</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Print Ready Files</h3></div>
        <div class="er-body"><p>If you are printing through a local printer or a print-on-demand service outside of Amazon, we prepare files to that printer’s exact specifications. This includes cover wrap sizing, spine width calculations based on page count, and proper bleed and safety margins.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">04</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Ebook Formatting</h3></div>
        <div class="er-body"><p>For authors who also want a digital version, we format your book for ebook platforms. This includes reflowable text for basic ebook readers or fixed-layout formatting for picture books, where the image and text placement must stay exactly as designed.</p></div>
      </article>
      <article class="editorial-row reveal">
        <div class="er-head"><span class="er-num">05</span><h3 style="font-size:clamp(1.35rem,2.3vw,1.85rem);line-height:1.15;margin:0;">Full Book Layout, Start to Finish</h3></div>
        <div class="er-body"><p>Some authors come to us with a manuscript and illustrations that have never been placed together. Others already have a rough layout that needs fixing. Either way, our children's book formatting layout services cover everything from a blank start to a final, print-ready file.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE FORMAT FOR: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/love-section.webp" alt="Children's book authors Purple Giraffe Press formats books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who We Format Books For</h2>
      <p>We work with a wide range of children’s book authors, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time self-published authors</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors working with an illustrator for the first time.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers who have a finished manuscript but no layout experience</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers who need overflow formatting support</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors revising an older book for a new edition or new platform</span></li>
      </ul>
      <p>You do not need any design background to work with us. Most of our clients have never formatted a book before, and that is completely normal.</p>
    </div>
  </div>
</section>

<!-- 6 - WHAT MAKES THE BEST FIT: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>What Makes a Formatting Service the Best Fit</h2>
      <p>Not every formatting service understands children’s books. A lot of formatters are set up for novels, textbooks, or business documents, and children’s books need a different approach entirely. When you are comparing options, look for:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Experience with picture books specifically, not just general book layout</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A clear process for text and image placement, since this is where most formatting problems happen</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Knowledge of KDP and print-on-demand requirements, so your file is not rejected at the last step.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Willingness to show you a sample or draft before finalising the whole book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Clear pricing and timelines, so you know what you are paying for and when to expect it back.</span></li>
      </ul>
      <p>We built our process around these exact points because we have seen how often authors get let down by generic formatting services that do not understand what a children’s book actually needs.</p>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1524578271613-d550eacf6090?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="Comparing children's book formatting services before choosing one" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY FORMATTING MATTERS (cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Formatting Makes or Breaks a Kids' Book</h2>
  </div>
  <div class="container narrow center">
    <p>It is easy to assume formatting is a small, final step. In children’s books, it is often the difference between a story that flows and one that feels clunky to read aloud.</p>
    <p style="margin-top:14px;">Here is what is really at stake:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Reading rhythm.</strong> Picture books are often read aloud. If text breaks awkwardly across a page turn, it disrupts the rhythm of the story.</li>
      <li><strong>Image and text balance.</strong> Too much text crowding an illustration makes a page feel busy. Too little can leave a page looking empty or unfinished.</li>
      <li><strong>Age-appropriate readability.</strong> Font size, spacing, and even the specific typeface all affect how easily a young reader can follow the text.</li>
      <li><strong>Print quality.</strong> Colours, bleed, and resolution all behave differently in print than they do on a screen. A book that looks fine on your laptop can print with cut-off images or washed-out colours if it is not formatted correctly.</li>
      <li><strong>Platform requirements.</strong> Amazon, IngramSpark, and other platforms each have their own technical rules. Getting these wrong can delay your launch by weeks.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This is why professional children’s book formatting is worth getting right the first time, rather than fixing problems after your book is already live.</p>
  </div>
</section>

<!-- 8 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Formatting Process</h2>
    <p style="margin:14px auto 0;">We keep our process simple and easy to follow, even if this is your first time publishing a book.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Your Manuscript</h3></div>
        <div class="svc-step-body"><p>You send through your finished text and any artwork or illustrations you have. If your illustrations are not ready yet, we can still start planning the layout around placeholder spacing.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Quote</h3></div>
        <div class="svc-step-body"><p>We look at your book’s length, trim size, and complexity, then send you a clear quote and estimated turnaround time. There is no obligation at this stage.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Format Your Book</h3></div>
        <div class="svc-step-body"><p>Our team places your text and images page by page, applying consistent formatting throughout. We pay close attention to page turns, spacing, and how each spread reads as a whole.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>You Review and Approve</h3></div>
        <div class="svc-step-body"><p>We send you a draft to review. You can request changes to spacing, layout, or design choices before we move to the final version.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Receive Your Final Files</h3></div>
        <div class="svc-step-body"><p>Once you are happy with the layout, we deliver your final, print-ready and platform-ready files, formatted for wherever you plan to publish.</p></div>
      </article>
    </div>
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

<!-- 10 - WHY USE A SPECIALIST -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Why Use a Formatting Specialist</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You save time.</strong> Formatting a children’s book properly takes real technical knowledge. Handing it to a specialist means you are not stuck troubleshooting software.</li>
      <li><strong>You avoid rejected files.</strong> Platforms like Amazon KDP reject files that do not meet their specs. We know these requirements and check for them before you submit.</li>
      <li><strong>You get a book that reads well aloud.</strong> Because we understand picture book pacing, we format with read-aloud flow in mind, not just how a page looks on its own.</li>
      <li><strong>You get consistency.</strong> Every page follows the same formatting rules, so your book feels professional and polished from cover to cover.</li>
      <li><strong>You get support, not just a file.</strong> If something needs adjusting after your first proof copy, we are here to help fix it.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY AUTHORS CHOOSE US -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Authors Choose <em>Purple Giraffe Press</em></h2>
      <p>Here is what keeps children’s book authors coming back to us.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children’s books</h3><p>We do not format novels, textbooks, or business reports. Children’s books are our whole focus, so we understand the specific challenges they bring.</p></article>
      <article><span>✓</span><h3>We give upfront pricing</h3><p>You will know your cost before any work begins. No surprise fees added later.</p></article>
      <article><span>✓</span><h3>We are based in Australia</h3><p>We understand local printing options and the requirements of platforms used by Australian authors, and we are happy to help authors in Melbourne, Geelong, or anywhere else in Victoria who are looking for a children’s book formatting service closer to home, as well as authors right across the country.</p></article>
      <article><span>✓</span><h3>We treat every book with care</h3><p>Your story matters to you, and we treat it that way. We do not rush layout work or cut corners on detail.</p></article>
      <article><span>✓</span><h3>We keep communication simple</h3><p>You will always know what stage your book is at and what happens next. No confusing back and forth.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear quote for children's book formatting with no hidden extras" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Children's Book Formatting Cost?</h2>
      <p>Pricing depends on a few factors, including your book’s length, the number of illustrations, how many formats you need (print, ebook, or both), and whether your artwork is already print-ready or needs adjustment.</p>
      <p>Because every children’s book is different, we do not use a flat, one-size-fits-all price. Instead, we look at your specific manuscript and give you a clear quote before any work starts, so children’s book formatting services cost you exactly what you expect, with no hidden extras added later.</p>
      <p>If you are budgeting for your publishing project, feel free to reach out with your manuscript details. We can give you a realistic estimate based on your book, not a generic guess.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 14 - TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Our most popular services</h2>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'book-promotion', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 15 - CLOSING CTA -->
<?php include 'includes/contact-section.php'; ?>

<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready to publish</p>
      <h2>Get Your Book <em>Ready to Publish</em></h2>
      <p>Formatting is the step that turns a manuscript into a real, ready-to-publish book. If you want your children’s book to look as good as the story reads, Purple Giraffe Press is here to help.</p>
      <p>Send us your manuscript and let us know what you need, whether that is print formatting, ebook formatting, or both. We will walk you through the process from there, with no jargon and no pressure.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to format your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 16 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

<!-- 17 - FOOTER -->
<?php include 'includes/footer.php'; ?>

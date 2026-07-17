<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Proofreading Services in Australia';
$page_description = 'Professional children\'s book proofreading services in Australia. We check grammar, spelling, flow and clarity to help your manuscript shine even brighter.';
$canonical_path   = 'proofreading.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to proofread a children’s book?',
    'a' => 'Turnaround time depends on the length of your manuscript and how busy our schedule is at the time. We will give you an estimated timeframe once we have seen your book.',
  ),
  1 =>
  array (
    'q' => 'Do you proofread picture books as well as chapter books?',
    'a' => 'Yes. We work across picture books, early readers, and chapter books, adjusting our approach to suit the age group and format of each one.',
  ),
  2 =>
  array (
    'q' => 'What is the difference between proofreading and editing?',
    'a' => 'Editing looks at the bigger picture, things like plot, structure, and character. Proofreading is the final check for spelling, grammar, punctuation, and consistency once the writing itself is finished.',
  ),
  3 =>
  array (
    'q' => 'Do I need to have my book edited before I send it for proofreading?',
    'a' => 'It helps if your manuscript is already in a finished state. Proofreading works best as the last step, after any bigger structural changes have been made.',
  ),
  4 =>
  array (
    'q' => 'Can you proofread a manuscript that includes illustrations already placed in the text?',
    'a' => 'Yes. We can check text within a laid-out file, including how it sits alongside illustrations and page breaks.',
  ),
  5 =>
  array (
    'q' => 'Will proofreading change my writing style?',
    'a' => 'No. Proofreading is meant to catch errors, not rewrite your voice. Any changes we suggest are aimed at fixing mistakes, not altering how you write.',
  ),
  6 =>
  array (
    'q' => 'Do you offer a sample proofread before I commit to the full manuscript?',
    'a' => 'Get in touch, and we can discuss the best way to give you a feel for our proofreading style before you go ahead with the full project.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Proofreading</div>
      <h1>Australian <em>Proofreading Services</em> for Children's Books That <strong>Get Every Detail Right</strong></h1>
      <p class="lead">You have written your story. Maybe you have already had it edited. The plot works, the characters feel real, and the words flow the way you want them to. But before it goes to print or goes live online, it needs one more careful pass.</p>
      <p class="lead">This is where proofreading comes in. It is the final check. It catches the small things that get missed after months of writing and rewriting, things like a missing full stop, a repeated word, or a typo that slipped past everyone, including you.</p>
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
      <p class="eyebrow script-mark">- built for kids’ books</p>
      <h2>Proofreading made for children’s books</h2>
      <p>At Purple Giraffe Press, we offer children’s book proofread services built specifically for kids’ books. We know how picture books, early readers and chapter books are put together, and we know what small errors look like on a printed page versus a screen. We read every page slowly and carefully, because your book deserves that kind of attention.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/proofreading.webp" alt="Proofreading for children&#039;s books at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE INCLUDE (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what it includes</p>
    <h2>What Our Children’s Book Proofreading Services Include</h2>
    <p style="margin:14px auto 0;">Proofreading is not the same as editing. By the time your manuscript reaches us, we assume the story itself is finished. Our job is to check the details. Here is what that includes.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Spelling and Grammar Checks</h3>
        <div class="fc-body">
          <p>We go through your manuscript line by line, looking for spelling mistakes, grammar slips, and small errors that spellcheck tools often miss. Software cannot tell the difference between “there” and “their” if both are spelled correctly. A human eye can.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Punctuation and Formatting</h3>
        <div class="fc-body">
          <p>Children’s books often use dialogue, short punchy sentences, and playful formatting. We check that punctuation is consistent, that quotation marks are used correctly, and that spacing and line breaks look right on the page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Consistency Checks</h3>
        <div class="fc-body">
          <p>Character names, place names, and small story details need to stay the same from the first page to the last. We track these details and flag anything that changes partway through, like a character’s eye colour switching or a name being spelled two different ways.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Layout and Print-Ready Review</h3>
        <div class="fc-body">
          <p>If your book is heading to print, we also check how the text sits alongside illustrations, page numbers, and chapter headings. We make sure nothing is cut off, squashed, or out of place once the book is laid out.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="14" rx="2"></rect><path d="M8 21h8M12 18v3"></path></svg></div>
        <h3>Digital and Ebook Checks</h3>
        <div class="fc-body">
          <p>If your book is going out as an ebook, we also look at how the text will appear on a screen. Line breaks and spacing can shift when a file is converted to an ebook format, so we check for any awkward breaks or formatting issues that might pop up along the way.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Children's book authors Purple Giraffe Press helps in Australia" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Children’s Book Authors We Help in Australia</h2>
      <p>Our clients come from all sorts of backgrounds, but they all want the same thing: a clean, polished manuscript before it goes out into the world.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents writing a personal story for their children or grandchildren</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers preparing a batch of manuscripts for print</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who also write and need a second set of eyes on the text</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who have already had their book edited and now need a final proofread pass</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers preparing a manuscript before submitting to agents or publishers</span></li>
      </ul>
      <p>No matter which of these describes you, the goal is the same. You want your book to look and read the way you imagined it, without any small errors pulling the reader out of the story.</p>
    </div>
  </div>
</section>

<!-- 6 - WHAT TO LOOK FOR: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>What to Look for in a Children’s Book Proofreader</h2>
      <p>Not every proofreader understands children’s books. A good childrens book proofreader needs a slightly different skill set to someone who proofreads adult novels or business documents. Here is what to look for.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Experience with the age group.</strong> A board book for toddlers reads very differently to a chapter book for eight year olds. The proofreader should understand the reading level they are working with.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>An eye for read-aloud rhythm.</strong> Many children’s books are read aloud. A good proofreader notices when a sentence sounds clunky out loud, even if it is grammatically correct.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Attention to repeated words and rhyme.</strong> Picture books often use repetition and rhyme on purpose. A proofreader needs to know the difference between a stylistic choice and an actual mistake.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Care with illustrations in mind.</strong> Text in a picture book shares the page with artwork. The proofreader should think about how the words sit next to the pictures, not just the words on their own.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>A light touch.</strong> Proofreading should not change your voice as a writer. It should just clean up the small things that get in the way of your story.</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="A children's book proofreader marking corrections on a manuscript" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY SPECIALIST CARE (content list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- specialist care</p>
    <h2>Why Children’s Book Proofreading Needs Specialist Care</h2>
  </div>
  <div class="container narrow center">
    <p>Proofreading children’s books takes more care than people expect. A children’s book usually has far fewer words than a novel, which means every single word carries more weight. One typo on a page with twenty words stands out a lot more than one typo on a page with three hundred.</p>
    <p style="margin-top:14px;">There are other challenges too.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Short text means less room for error.</strong> With so few words per page, mistakes are more noticeable and harder to hide.</li>
      <li><strong>Made-up words need to be checked for consistency.</strong> Many children’s books include invented names or made up words. These need to be spelled the same way every single time.</li>
      <li><strong>Rhyme and rhythm need protecting.</strong> If your book rhymes, a proofreader has to check spelling without accidentally breaking the rhyme or the beat of the sentence.</li>
      <li><strong>Young readers notice everything.</strong> Kids reread their favourite books again and again. A mistake that an adult might skim past will get spotted by a five year old on the third read through.</li>
      <li><strong>Print layout matters just as much as the words.</strong> A word that runs onto the wrong line, or a page number in the wrong spot, can throw off the whole reading experience.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This is why proofreading children’s books is treated as its own specific skill at Purple Giraffe Press, not just a smaller version of proofreading for adult fiction. We take the same care with a thirty page picture book as we would with a much longer manuscript, because every page matters just as much either way.</p>
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

<!-- 9 - PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Simple Children’s Book Proofreading Process</h2>
    <p style="margin:14px auto 0;">We keep our process simple and easy to follow, from the first email to the final file.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Send through your manuscript in a Word document or similar file. Let us know the age group you are writing for and whether the book is heading to print or going digital first.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Clear Quote</h3></div>
        <div class="svc-step-body"><p>We look at your manuscript and give you a straightforward quote based on word count and the state the manuscript is in. There are no surprise costs added later.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Proofread Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Our team reads through your book carefully, checking spelling, grammar, punctuation, and consistency. We track changes so you can see exactly what has been adjusted.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review the Changes</h3></div>
        <div class="svc-step-body"><p>We send back your manuscript with tracked changes and comments. You can accept, reject, or ask questions about anything we have flagged.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Polish and Delivery</h3></div>
        <div class="svc-step-body"><p>Once you are happy with everything, we deliver a clean final file, ready for print or publishing. If anything needs a second look after that, just let us know, and we will sort it out together.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 10 - BENEFITS (content list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Benefits of Hiring a Specialist Children’s Book Proofreader</h2>
  </div>
  <div class="container narrow center">
    <p>Working with a proofreader who understands children’s books, rather than a general proofreading service, makes a real difference.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You get someone who understands your genre.</strong> We know the difference between a stylistic rhyme and a mistake, and we won’t flag things that don’t need fixing.</li>
      <li><strong>Your book gets a fresh set of eyes.</strong> After reading your own manuscript so many times, it is easy to stop seeing the small errors. We catch what you might have missed.</li>
      <li><strong>You save time.</strong> Instead of asking friends or family to check your book, you get a proper, focused proofread from someone experienced in this exact kind of writing.</li>
      <li><strong>You avoid costly reprints.</strong> Catching mistakes before printing is far cheaper and less stressful than reprinting a whole batch of books.</li>
      <li><strong>You get peace of mind.</strong> Knowing your manuscript has had a careful final check lets you send it off with confidence.</li>
      <li><strong>You protect your reputation as an author.</strong> A clean, well presented book reflects well on you, whether it sits on a shelf in a shop or in a school library.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY AUTHORS CHOOSE US -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why they choose us</p>
      <h2>Why Authors Choose Purple Giraffe Press for <em>Proofreading</em></h2>
      <p>There are plenty of general proofreading services out there. Here is why authors choose to work with us specifically for their children’s books.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children’s books</h3><p>This is not a side service for us. Children’s books are what we focus on, and we understand the age groups, formats, and styles involved.</p></article>
      <article><span>✓</span><h3>We offer honest, upfront pricing</h3><p>You will know the cost before we start any work. No hidden fees, no last-minute changes to the quote.</p></article>
      <article><span>✓</span><h3>We are based in Australia</h3><p>As a book proofreader in Australia, we understand local spelling, local publishing standards, and we are easy to reach in your own time zone.</p></article>
      <article><span>✓</span><h3>We treat your story with care</h3><p>Your book has taken time and effort to write. We respect that, and we proofread with a light touch that protects your voice.</p></article>
      <article><span>✓</span><h3>We keep communication simple</h3><p>You will always know where your manuscript is in the process, and you can ask us questions at any point along the way.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="Clear, honest quote for children's book proofreading" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Children’s Book Proofreading Cost in Australia</h2>
      <p>The cost of proofreading a children’s book depends on a few things, including word count, how polished the manuscript already is, and how quickly you need it back. A short picture book with a few hundred words will cost less than a longer chapter book with tens of thousands of words.</p>
      <p>Rather than guess at a price, we look at your actual manuscript first and give you a clear, honest quote before any work begins. That way you know exactly what to expect, with no surprises later.</p>
      <p>If you are still deciding whether proofreading is worth the investment, think about it this way. A printed run of books is expensive to redo. Catching an error before printing costs far less than fixing it after the books are already off the press.</p>
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

<!-- 15 - CONTACT SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- the final check</p>
      <h2>Ready to Proofread Your Children’s Book <em>Before Publishing?</em></h2>
      <p>Your book is close to ready. Let us take care of the final check, so you can send it out into the world knowing it has been read carefully, page by page. Get in touch with Purple Giraffe Press today and send through your manuscript for a straightforward quote.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to proofread your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 18 - FOOTER -->
<?php include 'includes/footer.php'; ?>

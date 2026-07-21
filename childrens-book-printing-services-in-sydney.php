<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Printing for Sydney Authors';
$page_description = 'Turn your children\'s book into a beautifully printed book in Sydney. Quality printing services that bring your story to life on every printed page.';
$canonical_path   = 'childrens-book-printing-services-in-sydney.php';
$breadcrumb_name  = 'Book Printing in Sydney';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'Sydney',        'url' => page_url('locations/sydney.php')],
    ['name' => 'Book Printing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'How long does it take to print a hardback book in Sydney?',
    'a' => 'Most hardback jobs take between two and three weeks from approved proof to finished copies, depending on the size of your run and the binding style chosen. Larger runs or more complex cover finishes can add extra time, so it is worth asking early if you have a fixed deadline such as a launch date.',
  ),
  1 =>
  array (
    'q' => 'Do you offer rush turnaround for last-minute orders?',
    'a' => 'Sometimes, depending on our current workload and the size of your job. If you have a deadline coming up, contact us as early as you can so we can tell you honestly whether it is achievable.',
  ),
  2 =>
  array (
    'q' => 'Do you print small runs, or only large orders?',
    'a' => 'We print both. Some clients only need ten or twenty copies for family or a small launch, while others need several hundred. There is no minimum order that locks you out.',
  ),
  3 =>
  array (
    'q' => 'What file format do you need for printing?',
    'a' => 'A print-ready PDF with correct bleed and margins is ideal. If your file is not quite ready, let us know, and we can talk through what needs adjusting before it goes to print. We would rather spend a few extra minutes checking a file than have you unhappy with the finished result.',
  ),
  4 =>
  array (
    'q' => 'Is a paperback or a hardback better for a first book?',
    'a' => 'It depends on your budget and how you plan to use the book. Paperback printing in Sydney is usually cheaper and suits most novels and non-fiction titles. Hardback suits special editions, gifts, or books you expect people to keep for a long time.',
  ),
  5 =>
  array (
    'q' => 'Can I see a physical sample before committing to a full run?',
    'a' => 'Yes. We recommend a proof copy for every job so you can check paper feel, binding, and print quality before we run the full order.',
  ),
  6 =>
  array (
    'q' => 'Do you deliver anywhere in Sydney, or just certain suburbs?',
    'a' => 'We deliver across the greater Sydney area, and pickup is also available if that suits you better.',
  ),
  7 =>
  array (
    'q' => 'What if I find a mistake after the books are printed?',
    'a' => 'If the error is something we missed during file checking, such as a printing fault, we will discuss a reprint. If the mistake was already in the file you approved at the proof stage, we can advise on the best way to fix it for a reprint at a fair cost.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Book Printing</div>
      <h1>Turn Your Story into a Real, Physical Book, <em>Children's Book Printing</em> for <strong>Sydney</strong></h1>
      <p class="lead">So you have written your book. Or your business needs a run of catalogues, manuals, or booklets. Either way, you now need someone to turn the file on your computer into something you can hold in your hands. That is where we come in.</p>
      <p class="lead">Purple Giraffe Press has been printing books in Sydney for authors, small publishers, schools, and local businesses. We know that a printed book is not just paper and ink. It is the thing your reader picks up first, before they even read a word. If the cover feels cheap or the pages fall apart after a few reads, that first impression is gone.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Print Your Book</a>
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
      <p>We keep things simple. You send us your files, we check them properly, and we print your book the way it was meant to look. No confusing jargon, no hidden costs, and no guessing games about what you are actually paying for.</p>
      <p>Whether you need one proof copy or a few hundred finished books, we treat every job the same way. With care, and with an eye for the small details that make a book feel proper.</p>
      <p>We also know that printing can feel like a foreign world if you have never done it before. Terms like bleed, spine width, and GSM get thrown around as everyone should already know what they mean. Part of our job is explaining these things in plain language, so you understand exactly what you are choosing and why it matters for the finished product.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Print Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/childrens-book-printing.webp" alt="Children's book printing in Sydney at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - PRINTING OPTIONS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Book Printing Options Available for Sydney Authors and Businesses</h2>
    <p style="margin:14px auto 0;">We cover most of what a Sydney-based writer, publisher, or business might need. Below is a breakdown of our main services.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Hardback Books</h3>
        <div class="fc-body">
          <p>Hardback books are ideal for memoirs, premium editions, coffee table books, and titles designed to last for years. They offer a durable finish, a professional appearance, and a strong shelf presence. We provide a range of cover options, including matte, gloss and dust jackets, to suit your book’s style. If you want a publication that feels substantial and makes a lasting impression, hardback is an excellent choice.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Paperback Books</h3>
        <div class="fc-body">
          <p>Paperback printing is the most popular option for novels, non-fiction, self-published books, and short story collections. It provides a professional finish while remaining cost-effective for both small and large print runs. We focus on clean trimming, strong binding, and high-quality cover production that stands up to regular use. For many authors, paperbacks offer the ideal balance between quality, durability, and affordability.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Hardbound and Special Binding</h3>
        <div class="fc-body">
          <p>Some books need something more durable than a paperback, without moving to a full hardback edition. Hardbound and specialty binding options are well suited to journals, business reports, keepsake books, and educational publications. They provide a stronger finish while keeping production costs more manageable. This option offers a practical balance between appearance, durability, and long-term value.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"></path><rect x="7" y="14" width="10" height="7" rx="1"></rect></svg></div>
        <h3>Booklets and Short Print Runs</h3>
        <div class="fc-body">
          <p>Not every project requires a full-length book. We also print booklets, poetry collections, catalogues, training manuals, and promotional publications in smaller quantities. Short-run printing is ideal for events, schools, businesses, and independent authors who only need limited copies. Every project receives the same attention to print quality, binding, and finishing regardless of its size.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Paper Stock and Premium Finish Options</h3>
        <div class="fc-body">
          <p>The paper and finish you choose have a major impact on the final look and feel of your book. We offer uncoated paper for novels, coated stock for colourful publications, and a variety of cover laminates to suit different styles. Our team will recommend the most suitable combination based on your content, budget, and printing goals. Every recommendation is made with readability, durability, and presentation in mind.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Custom Cover Finishing</h3>
        <div class="fc-body">
          <p>A professionally finished cover helps your book stand out before readers even open it. We offer premium finishing options such as matte and gloss lamination, foil detailing, embossing, and textured effects. These features are planned before production begins to ensure the highest quality finish. Whether your book is for retail, gifting, or personal publishing, we help create a cover that leaves a lasting impression.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - PRINTING BY READING AGE (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Book Printing Options for Different Reader Age Groups</h2>
    <p style="margin:14px auto 0;">Books for different age groups need different paper, binding, and finishing choices. A toddler’s board book must handle frequent use, while a young adult novel needs a comfortable layout for longer reading sessions. We recommend printing options based on the reader’s age, how the book will be used, and the overall publishing budget.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"></rect><path d="M12 4v16"></path></svg></div>
        <h3>Ages 0–3: Durable Printing for Board Books</h3>
        <div class="fc-body">
          <p>Books for babies and toddlers need strong pages, rounded corners, and durable finishes. These books are often handled repeatedly, so thicker stock and wipe-clean surfaces are usually the best choice. We also check that colours remain bright and that the binding can withstand regular use. The finished book should feel safe, sturdy, and easy for small hands to hold.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Ages 3–5: Colourful Picture Book Printing</h3>
        <div class="fc-body">
          <p>Picture books rely heavily on illustrations, colour, and page presentation. We recommend paper stock that keeps artwork clear, vibrant, and consistent across every spread. Binding and page thickness are also chosen to support repeated read-aloud use. The result is a bright, engaging book that feels enjoyable for children, parents, and teachers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Ages 6–8: Easy-to-Handle Early Reader Books</h3>
        <div class="fc-body">
          <p>Early reader books need clear text, comfortable spacing, and a lightweight format children can manage independently. Paperback or durable softcover binding often works well for this age group. We also consider page size, paper opacity, and print clarity to support developing reading skills. Every choice is made to keep the book accessible, practical, and easy to follow.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 8–12: Reliable Printing for Middle-Grade Books</h3>
        <div class="fc-body">
          <p>Middle-grade books usually contain longer chapters and more pages, so comfort and durability become important. We recommend paper that is easy on the eyes and binding that holds up to repeated reading. Paperback is often the most practical option, although hardback can suit premium or illustrated editions. The finished book should feel polished without becoming too heavy for younger readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Ages 13–17: Polished Printing for Young Adult Titles</h3>
        <div class="fc-body">
          <p>Young adult books need a finish that feels mature, modern, and suitable for retail. We focus on clean interior layouts, strong cover production, and comfortable paper stock for longer reading sessions. Matte paperback covers are popular, while hardback editions can work well for special releases. The final product should look professional and appeal directly to teenage readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Adult Readers: Flexible Printing for Every Genre</h3>
        <div class="fc-body">
          <p>Adult books can range from novels and memoirs to business titles, poetry, and illustrated publications. We recommend printing specifications based on genre, page count, intended use, and sales goals. Paperback may suit commercial fiction, while hardback can add value to memoirs or premium editions. Each decision is tailored to the book rather than using one standard format for every project.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Sydney authors, schools, and businesses we print books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Uses Our Sydney Book Printing Services</h2>
      <p>We print for a wide range of people and organisations across Sydney, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors self-publishing their debut novel or memoir</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small and independent publishers running short print runs</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Businesses that need manuals, reports, or training booklets</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and community groups printing yearbooks or anthologies</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Poets and short story writers producing limited editions</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Anyone who simply wants a personal book made from family photos or stories</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Book Printer in Sydney</h2>
      <p>Not all book printing companies in Sydney offer the same level of quality or honesty. Before you commit to a printer, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they show you a physical sample of their paper stock and binding, not just a photo?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they explain pricing clearly, including any setup costs, before you pay a deposit?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if there is a printing fault? Do they reprint, refund, or leave it to you?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How long is the actual turnaround time, not the best-case scenario they quote?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can they handle your file format, or will you need to pay someone else to fix it first?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Do they offer a single proof copy before you commit to a full run?</span></li>
      </ul>
      <p>If a printer cannot answer these clearly, that is worth noticing before you hand over your file.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a book printer in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY PRINT QUALITY MATTERS (list) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Book Printing Quality Matters to Your Readers</h2>
  </div>
  <div class="container narrow center">
    <p>Printing might feel like the last step in a long process, but it changes how your book is received.</p>
  </div>
  <div class="container" style="margin-top:24px;">
    <ul class="content-list">
      <li>A book that feels solid in the hand gets treated with more respect by the reader</li>
      <li>Poor binding means pages start falling out after a handful of reads, which reflects badly on you, not just the printer</li>
      <li>A properly proofed print run avoids the embarrassment of typos or layout errors reaching your readers</li>
      <li>Consistent print quality across a run matters if you are selling through bookshops or gift shops, where damaged stock gets returned</li>
      <li>The right paper weight and finish can make a short, simple book feel far more considered than it cost to produce</li>
      <li>If you plan to sell your book, reviewers and readers do notice production quality, and it can affect whether they recommend it to others</li>
    </ul>
  </div>
</section>

<!-- 9 - OUR PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How Our Sydney Book Printing Process Works</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step One: Send Us Your Files</h3></div>
        <div class="svc-step-body"><p>You send through your manuscript or design files, along with any notes on paper stock, binding style, or finish you have in mind. If you are not sure what you need yet, that is fine. We can talk it through with you first.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step Two: We Check Everything Before It Goes Near a Press</h3></div>
        <div class="svc-step-body">
          <p>This is the step a lot of cheaper printers skip. We look over your files for issues that would cause problems once printed, such as low-resolution images, incorrect bleed, or margins that would cut off text. When you send your books for printing in Sydney, we would rather catch a problem now than after five hundred copies are already bound.</p>
          <p>We will also flag anything that looks like a formatting mistake, such as inconsistent chapter headings or a missing page in the sequence. It is a second set of eyes on your work before it becomes permanent.</p>
        </div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step Three: You Approve a Proof</h3></div>
        <div class="svc-step-body"><p>Before we run your full order, you get a proof copy to check. This is your chance to catch anything that needs fixing while it still costs nothing to change.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step Four: Printing and Binding</h3></div>
        <div class="svc-step-body"><p>Once you are happy with the proof, we move to the full print run. Your books for print in Sydney go through binding, trimming, and finishing, whether that is a hardback case, a paperback perfect bind, or a stitched booklet. We keep an eye on quality throughout the run, not just at the start, so copy five hundred looks the same as copy one.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step Five: Delivery or Pickup</h3></div>
        <div class="svc-step-body"><p>Your finished books are packed carefully and either delivered or ready for pickup, depending on what suits you.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 10 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Sydney Authors Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>Straightforward pricing.</h3><p>We quote based on your actual job, not a vague estimate that changes later.</p></article>
      <article><span>✓</span><h3>A proof copy before the full run.</h3><p>You see and approve your book before we commit to the final print.</p></article>
      <article><span>✓</span><h3>Local knowledge.</h3><p>Being based here means we understand the questions Sydney authors and businesses ask us about books on print in Sydney, from paper choices to realistic turnaround times.</p></article>
      <article><span>✓</span><h3>Attention to binding quality.</h3><p>Whether it is a hard-cover book in Sydney or a simple stapled booklet, the binding gets the same level of care.</p></article>
      <article><span>✓</span><h3>Small run friendly.</h3><p>You do not need to print a thousand copies to work with us. We are just as happy printing ten as we are printing a few hundred.</p></article>
      <article><span>✓</span><h3>Honest communication.</h3><p>If something is going to take longer or cost more than expected, we tell you early, not after the fact.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for book printing in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Book Printing Cost in Sydney</h2>
      <p>Every book is different, so we do not publish a flat rate. Pricing depends on things like page count, paper stock, cover style, binding type, and the size of your print run. Once we know these details, we can give you a clear, itemised quote with no surprises added later. Get in touch with your project details, and we will work out the numbers with you.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 14 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- explore more';
$location_services_heading = 'More Services for Sydney Children’s Book Authors';
$location_services_intro   = 'We built our service list around the real gaps that stop authors from finishing and launching their books. Here is what falls under our roof.';
$location_services_section = 'section figma-cream';
include 'includes/location-services.php';
?>

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Print Your Book <em>With Confidence?</em></h2>
      <p>If you have a manuscript sitting on your computer, or a business that needs printed material done right, get in touch with Purple Giraffe Press. Send us your files, tell us what you are picturing, and we will help you work out the rest.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to print your book in Sydney" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 18 - FOOTER -->
<?php include 'includes/footer.php'; ?>

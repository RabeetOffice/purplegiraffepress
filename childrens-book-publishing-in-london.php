<?php
include 'includes/config.php';

$page_title       = 'Leading Children\'s Book Publishing Company in London';
$page_description = 'Looking to publish a children\'s book in London? We offer professional editing, illustration, design and printing services to bring your story to life.';
$canonical_path   = 'childrens-book-publishing-in-london.php';
$breadcrumb_name  = 'Book Publishing in London';
$breadcrumbs = [
    ['name' => 'Home',            'url' => page_url('index.php')],
    ['name' => 'Locations',       'url' => page_url('locations/')],
    ['name' => 'London',          'url' => page_url('locations/london.php')],
    ['name' => 'Book Publishing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need to live in London to work with you?',
    'a' => 'No. Many of our authors are based outside London and work with us by email and video call. Being London-based ourselves just means local authors can also meet in person if they prefer.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to publish a children\'s book with you?',
    'a' => 'It varies with the length and complexity of the story, but most projects take several months from the first edit to a finished, printed book. We will give you a realistic timeline once we have read your manuscript.',
  ),
  2 =>
  array (
    'q' => 'Do you only work with picture books, or other children\'s formats too?',
    'a' => 'We work across picture books, early readers, and older children\'s fiction. Picture books do have their own specific requirements, so we always ask about age range early on.',
  ),
  3 =>
  array (
    'q' => 'What is the difference between hybrid publishing and self-publishing?',
    'a' => 'With self-publishing, you handle or pay for everything yourself directly. With hybrid publishing, you share costs with us in exchange for editorial, design, and production support, while keeping more creative control than a traditional deal usually allows.',
  ),
  4 =>
  array (
    'q' => 'Are there many children\'s book publishers in London to choose from?',
    'a' => 'Yes, London has a good number of publishers working in children\'s books, from large houses to smaller independent teams like ours. It is worth asking each one the vetting questions above before deciding.',
  ),
  5 =>
  array (
    'q' => 'Can you help if my manuscript has already been rejected elsewhere?',
    'a' => 'Yes, this is common. A rejection often has more to do with fit or timing than the quality of the story. We will give you honest feedback on whether the manuscript needs work or simply needs the right route.',
  ),
  6 =>
  array (
    'q' => 'Do you help with illustrations if I cannot draw myself?',
    'a' => 'Yes. Most of our authors are not illustrators. We match your story with an illustrator whose style suits the tone of your book and manage that process for you.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/london.php">London</a> / Book Publishing</div>
      <h1>Children&rsquo;s <em>Book Publishing in London</em> For Authors Ready To Share <strong>Their Stories</strong></h1>
      <p class="lead">You have written a story your child loves at bedtime. Or maybe you have an idea for a picture book that has been sitting in a drawer for years. Either way, you are stuck on what to do next.</p>
      <p class="lead">Getting a children's book published is not simple. There are many book publishing companies in London, so much advice online, and a lot of it contradicts itself. Purple Giraffe Press is here to make that path clearer, especially for authors based in or near London.</p>
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
      <h2>How We Help Transform Your Children&rsquo;s Story Into A Real Book</h2>
      <p>Purple Giraffe Press is a children's book publishing house in London built around one simple goal: helping your story become the best version of itself, on the page and in print.</p>
      <p>We work with parents, teachers, illustrators, and first-time writers who want their story to become a real book. Some of our authors want a traditional deal. Others want more say over their book and are open to a different route. We help you work out which one suits you.</p>
      <p>Purple Giraffe Press supports authors through every stage of getting a children's book ready and out into the world. We do not just look at your manuscript once and send you away. Purple Giraffe Press supports authors through every stage of getting a children's book ready and out into the world. We do not just look at your manuscript once and send you away.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Publish Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-publishing.webp" alt="Children's book publishing services in London at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - PUBLISHING SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <!-- <h2>We stay with you from the first draft through to a finished book.</h2> -->
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Manuscript Assessment And Editing</h3>
        <div class="fc-body">
          <p>Before anything else, your story needs an honest read. We look at pacing, structure, age suitability, and whether the story actually works as a book, not just as an idea. Our editors give clear feedback, not vague praise. If something is not working, we tell you why and how to fix it.</p>
          <p>This stage often takes longer than authors expect, and that is a good thing. A picture book might only run to five hundred words, but every one of those words has to earn its place. A middle-grade story might need whole chapters reworked so the plot holds together for a nine-year-old reader. We would rather spend proper time here than rush a book into print that is not ready.</p>
          <p>We also look closely at reading age. A story pitched at four-year-olds needs short sentences and repetition. A story for eight-to ten-year-olds can carry more plot and longer words. Getting this wrong is one of the most common reasons a manuscript struggles to find its readers, so we flag it early rather than after the book is finished.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Hybrid Publishing For Children's Books In London</h3>
        <div class="fc-body">
          <p>For authors who want more control over their book but still want proper editorial and design support, this approach is one of our main services. It sits between traditional publishing and doing everything alone. You share some of the costs and decisions, and in return, you keep more creative control and a bigger share of the outcome. It suits authors who have a strong vision for their book and want a team behind them rather than in front of them.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Picture Book Submissions</h3>
        <div class="fc-body">
          <p>If you write picture books, the submission stage matters a lot. Picture book submissions in London often fail simply because the format is wrong, the word count is too high, or the story does not leave room for an illustrator to add anything. We help you prepare a submission that gives your story the best chance, whether you are sending it to us or to another publisher.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="9" cy="9" r="2"></circle><path d="m21 15-3.5-3.5L9 20"></path></svg></div>
        <h3>Illustration Coordination</h3>
        <div class="fc-body">
          <p>Not every author is an illustrator, and that is completely normal. We can match your story with an illustrator whose style fits the tone of your book, and we manage that relationship so the images and the text grow together instead of being bolted on at the end.</p>
          <p>We share sample pages with you as the work develops, so you are never waiting until the very end to see how your story looks. If something about the style is not quite right, there is time to say so and adjust it, rather than discovering a problem once the whole book is drawn.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="7"></rect></svg></div>
        <h3>Design, Print, and Formats</h3>
        <div class="fc-body">
          <p>Once the manuscript and artwork are ready, we handle layout, typesetting, and print preparation. We also prepare digital formats where needed, so your book can reach readers on paper and on screen.</p>
          <p>Paper choice, page size, and binding all affect how a picture book feels in a child's hands, and they affect cost too. We talk you through the realistic options rather than pushing you towards the most expensive one, and we explain the trade-offs plainly so you can make an informed choice.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - AGE-FOCUSED PUBLISHING (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Age-Focused Children&rsquo;s Book Publishing For Every Reading Stage</h2>
    <p style="margin:14px auto 0;">Every children&rsquo;s book needs a different publishing approach depending on the age group it is created for. From early board books to middle-grade fiction, we consider vocabulary, storytelling style, illustration needs, page structure, and reader expectations to make sure your book connects with the right audience.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="12" width="8" height="8" rx="1"></rect><rect x="13" y="12" width="8" height="8" rx="1"></rect><rect x="8" y="3" width="8" height="8" rx="1"></rect></svg></div>
        <h3>Ages 0 To 3: Board Books Designed For Early Learning</h3>
        <div class="fc-body">
          <p>Books for the youngest readers rely heavily on simple language, repetition, and strong visual storytelling. We focus on clear layouts, engaging illustrations, durable print choices, and age-appropriate design elements that make the book easy for little hands to explore and enjoy.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 3 To 7: Picture Book Publishing With Strong Visual Storytelling</h3>
        <div class="fc-body">
          <p>Picture books need the perfect balance between words and illustrations. We help shape stories with engaging pacing, memorable characters, and artwork that supports the narrative while creating an enjoyable reading experience for children and parents reading together.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M2 6s2-2 5-2 5 2 5 2v14s-2-2-5-2-5 2-5 2V6Z"></path><path d="M22 6s-2-2-5-2-5 2-5 2v14s2-2 5-2 5 2 5 2V6Z"></path></svg></div>
        <h3>Ages 5 To 8: Early Reader Books With Growing Independence</h3>
        <div class="fc-body">
          <p>Early readers need carefully structured stories that encourage confidence and enjoyment. We focus on suitable vocabulary, readable formatting, balanced text placement, and illustrations that support children as they begin reading more independently.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"></path></svg></div>
        <h3>Ages 8 To 12: Middle Grade Books With Deeper Story Development</h3>
        <div class="fc-body">
          <p>Middle grade readers enjoy longer stories, richer characters, and more complex themes. We help authors develop strong chapter structures, consistent storytelling, and professional formatting that keeps young readers engaged from the first page to the last.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21v-1a7 7 0 0 1 7-7h2a7 7 0 0 1 7 7v1"></path></svg></div>
        <h3>Ages 12+: Young Adult Stories With Mature Themes</h3>
        <div class="fc-body">
          <p>Young adult books require a more developed approach to storytelling, design, and publishing. We help ensure the manuscript, cover design, and overall presentation reflect the expectations of teenage readers while maintaining professional publishing standards.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="The London authors and creators we publish children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Authors And Creators We Help Bring Stories To Life</h2>
      <p>Whether you are searching for a children's book publisher in London for the first time or you have published before, we can usually help. Purple Giraffe Press works with a wide range of people connected to children's books, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors with a single story idea</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents writing a personal or family story</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and school staff creating books for classroom use</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators looking for a text to bring to life</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors with several books already published who want a new approach</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small charities and organisations producing books with a message</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE A PUBLISHER: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How To Choose A Children's Book Publisher across London</h2>
      <p>Picking the wrong one of the many publishing companies for children's books in London can waste months of your time and, in some cases, your money. Before you commit to anyone, ask these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What exactly happens to your manuscript after you sign, and who owns the rights?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Are the costs clearly explained upfront, with nothing added later?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will you see and approve the illustrations, cover, and layout before printing?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Does the publisher have experience with children's books specifically, not just general fiction?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How long does the whole process take from acceptance to a finished book?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can you speak to the same person throughout, or will you be passed between different staff?</span></li>
      </ul>
      <p>A publisher who answers these clearly, without dodging, is usually one worth trusting.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="What to look for in a children's book publishing company in London" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY A REAL PUBLISHING TEAM MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Working With A Real Publishing Team Changes The Outcome</h2>
  </div>
  <div class="container narrow center">
    <p>Writing the story is only part of the job. The rest is craft, and it is easy to underestimate.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>A second, experienced eye catches pacing problems a parent or friend will not spot.</li>
      <li>Proper editing stops good ideas from being let down by weak execution.</li>
      <li>Professional design makes the difference between a book that looks self-made and one that looks like something from a shop shelf.</li>
      <li>Guidance on formats and print means your book actually reaches readers, rather than sitting as a file on a laptop.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>None of this replaces your story. It protects it.</p>
    <p style="margin-top:14px;">Think about the last children's book you bought in a shop. The paper felt right, the text sat well on the page, and the pictures matched the tone of the writing. None of that happens by accident. It is the result of decisions made by people who do this work every day. Skipping that stage rarely saves money in the long run, because a book that does not look finished tends to be treated as unfinished, however good the story inside it is.</p>
  </div>
</section>

<!-- 9 - OUR PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How It Works, Step By Step</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Story</h3></div>
        <div class="svc-step-body"><p>You send your manuscript, or even just an outline if it is still early. We read it properly, not just skim it.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Initial Feedback Call</h3></div>
        <div class="svc-step-body"><p>We talk you through what is working, what needs attention, and which route (traditional style support or hybrid) fits your goals and budget.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Editing And Development</h3></div>
        <div class="svc-step-body"><p>Your editor works with you on structure, language, and pacing. This is usually the longest stage and the most important one.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Illustration And Design</h3></div>
        <div class="svc-step-body"><p>If your book needs illustration, we bring in an artist suited to your story. Layout and cover design happen alongside this. We keep you updated at each stage rather than disappearing for months and reappearing with a finished product you have had no say in.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Proofing And Approval</h3></div>
        <div class="svc-step-body"><p>You see full proofs before anything is printed. Nothing goes to print without your sign-off.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Print And Launch</h3></div>
        <div class="svc-step-body"><p>Your book is printed and made available in the formats agreed at the start, with guidance on getting it in front of readers.</p></div>
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
      <h2>Why Authors Choose <em>Purple Giraffe Press</em></h2>
      <p>Many families searching for a publisher for children's books in London can say the same thing: they want someone who answers questions plainly and does not disappear once a contract is signed. That is what we try to be.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Children&rsquo;s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>&#10003;</span><h3>Honest feedback from the start</h3><p>We tell you what a story needs, even when that is not what you were hoping to hear.</p></article>
      <article><span>&#10003;</span><h3>Clear costs</h3><p>You know what you are paying for before you agree to anything, with no hidden extras added halfway through.</p></article>
      <article><span>&#10003;</span><h3>A team that knows children's books</h3><p>We do not treat a picture book the same way we would treat an adult novel. Age, reading level and illustration all shape our advice.</p></article>
      <article><span>&#10003;</span><h3>One point of contact</h3><p>You deal with the same editor from the first read to the final proof, so nothing gets lost between people.</p></article>
      <article><span>&#10003;</span><h3>London-based, easy to reach</h3><p>Being close by means meetings, calls, and manuscript reviews can happen without long delays.</p></article>
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

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 14 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for publishing a children's book in London" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Understanding The Cost Of Publishing A Children&rsquo;s Book</h2>
      <p>Every manuscript is different, so we do not publish a single fixed price. The cost depends on the length of your book, how much editing it needs, whether illustration is required, and which publishing route you choose. After your initial read, we give you a clear, itemised quote so you know exactly what you are paying for before you agree to anything.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready To Talk About <em>Your Story</em></h2>
      <p>If you have a children's book you want to see through to a finished, printed copy, get in touch with Purple Giraffe Press. Send us your manuscript or just a short outline, and we will give you honest, practical feedback on where it stands and what comes next.</p>
      <p>There is no pressure to sign up on the first call. We would rather you make the right decision for your story than a quick one.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to publish your children's book in London" loading="lazy" decoding="async">
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

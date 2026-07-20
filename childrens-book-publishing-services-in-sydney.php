<?php
include 'includes/config.php';

$page_title       = 'With Expert Care | Sydney Children\'s Book Publishing';
$page_description = 'Turn your children\'s book into a published reality in Sydney. Guided, author-focused publishing services that bring your story to readers near you.';
$canonical_path   = 'childrens-book-publishing-services-in-sydney.php';
$breadcrumb_name  = 'Book Publishing in Sydney';
$breadcrumbs = [
    ['name' => 'Home',            'url' => page_url('index.php')],
    ['name' => 'Locations',       'url' => page_url('locations/')],
    ['name' => 'Sydney',          'url' => page_url('locations/sydney.php')],
    ['name' => 'Book Publishing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only publish authors who live in Sydney?',
    'a' => 'No. Most of our authors are based in and around Sydney, but we\'ve worked with writers from other parts of Australia too. Being local just makes meetings and events easier to arrange.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to hear back after I submit my manuscript?',
    'a' => 'We aim to reply within six to eight weeks. Popular submission periods can take a little longer, but we won\'t leave you waiting indefinitely without an update.',
  ),
  2 =>
  array (
    'q' => 'Is Purple Giraffe Press a good fit if I\'ve been rejected by other publishers before?',
    'a' => 'Often, yes. Rejection from one publisher doesn\'t mean your story isn\'t right for another. We judge each submission on its own, not on where else it\'s been sent.',
  ),
  3 =>
  array (
    'q' => 'Do I need an illustrator before I submit my picture book?',
    'a' => 'No. Many authors submit a text-only manuscript. If we take it on, we\'ll help match you with an illustrator from our network.',
  ),
  4 =>
  array (
    'q' => 'What areas of Sydney do you meet authors in?',
    'a' => 'We\'re happy to meet in the CBD, the inner west, or the northern suburbs, whatever suits you best. We also do calls for anyone further out.',
  ),
  5 =>
  array (
    'q' => 'Are you one of the children\'s book publishers in Sydney that does hybrid deals?',
    'a' => 'Yes. Alongside traditional publishing, we offer a hybrid model where you contribute to production costs and keep more control and a larger share of earnings.',
  ),
  6 =>
  array (
    'q' => 'What happens if my book doesn\'t sell well?',
    'a' => 'We\'ll talk this through honestly before you sign anything, including print run size and realistic expectations, so you\'re never caught off guard by how the book performs.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/sydney.php">Sydney</a> / Book Publishing</div>
      <h1>Become a Published Children's Author, Start to Finish, <em>Sydney Children's Book Publishing</em> <strong>Service</strong></h1>
      <p class="lead">Every great children’s book starts with an idea, but turning that idea into a finished book can feel overwhelming. Maybe your manuscript has been waiting in a drawer, or perhaps you have already shared it with publishers and never received the response you hoped for. That journey is common for many children’s authors, and it does not mean your story is not worth sharing.</p>
      <p class="lead">At Purple Giraffe Press, we believe good stories deserve a clearer path to publication. We were created to help Sydney authors bring their children’s books to life through thoughtful publishing support, honest guidance and a process that keeps authors involved at every stage. From picture books and early readers to junior fiction, we help transform ideas into books families can enjoy.</p>
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
      <p>Unlike traditional publishing routes that can involve long waiting periods and limited communication, we focus on building genuine relationships with the authors we work with. We take the time to understand your story, provide meaningful feedback and connect you with the right editing, illustration, design and publishing support needed to create a high-quality children’s book.</p>
      <p>Based in Sydney, we understand the local publishing landscape and the needs of Australian authors, schools and families. Whether you are a first-time writer or an experienced storyteller, our team works closely with you to create a book that reflects your vision and connects with young readers.</p>
      <p>We intentionally publish a focused selection of children’s books so every project receives the attention it deserves. When you work with Purple Giraffe Press, your story is not just another manuscript in a queue. It becomes a project we carefully develop, refine, and prepare for the readers it was written for.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Publish Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/book-publishing.webp" alt="Children's book publishing services in Sydney at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - HOW WE HELP (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>How We Help Sydney Authors Publish Children’s Books</h2>
    <p style="margin:14px auto 0;">We publish children’s books from the first idea through to the finished product. Our team supports every stage, including editing, illustration, design, printing, and distribution. Whether you are creating your first book or building a collection, we help turn your story into a professionally published title.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>What Makes a Children’s Picture Book Ready for Publishing</h3>
        <div class="fc-body">
          <p>Picture books are one of our key areas of publishing. We look for stories with a clear idea, strong read-aloud potential, and themes that connect with young children. A great picture book leaves space for illustrations to add another layer to the storytelling.</p>
          <p>We do not require a fully illustrated manuscript before you submit. A strong written story is enough to begin the conversation. If accepted, we can connect you with an illustrator from our trusted network or work alongside an illustrator you have already chosen.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>A Flexible Publishing Path for Children’s Book Authors</h3>
        <div class="fc-body">
          <p>Our hybrid publishing model gives authors more control while still providing professional publishing support. You contribute towards production costs while keeping greater ownership and a larger share of your book’s earnings. We manage editing, design, printing, and distribution as part of the process.</p>
          <p>This approach works well for authors who already have an audience or want to publish sooner than traditional routes allow. Whether you are a teacher, parent, or storyteller with a community behind your idea, hybrid publishing can help bring your book into the hands of readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Junior Fiction and Middle Grade Books</h3>
        <div class="fc-body">
          <p>We also publish longer stories for readers aged eight to twelve. These books need stronger structure, engaging characters, and careful pacing to keep young readers interested. Our team focuses on developmental editing, helping improve the plot, character journeys, and overall flow before the final manuscript is prepared.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Illustration and Design Support</h3>
        <div class="fc-body">
          <p>Many authors come to us with a strong story but need help creating the visual side of their book. We work with experienced illustrators who understand children’s publishing and match artwork to the tone of your story. From character development to final page design, we help create a complete and polished children’s book.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - EVERY READING STAGE (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Children’s Book Publishing Built Around Every Reading Stage</h2>
    <p style="margin:14px auto 0;">Every children’s book audience is different, and the publishing process needs to reflect that. A toddler’s picture book requires a different approach from a middle-grade adventure or junior fiction title. We consider the reader’s age, reading ability and expectations when developing each book, from editing and illustration through to design and final production.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="12" width="8" height="8" rx="1"></rect><rect x="13" y="12" width="8" height="8" rx="1"></rect><rect x="8" y="3" width="8" height="8" rx="1"></rect></svg></div>
        <h3>Ages 0–3: Publishing Gentle Stories for Early Learners</h3>
        <div class="fc-body">
          <p>Books for babies and toddlers rely on simple language, strong visuals, and durable formats. We help create books that are easy for parents to read aloud and enjoyable for young children to explore. From board book considerations to illustration style, every detail is planned around early learning and first reading experiences.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Ages 3–5: Bringing Picture Books to Life for Young Children</h3>
        <div class="fc-body">
          <p>Picture books need a careful balance between storytelling, artwork, and page design. We focus on creating engaging layouts, expressive illustrations and stories that hold a child’s attention. Whether it is a bedtime story, educational book, or imaginative adventure, we help shape books families want to read again and again.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M2 6s2-2 5-2 5 2 5 2v14s-2-2-5-2-5 2-5 2V6Z"></path><path d="M22 6s-2-2-5-2-5 2-5 2v14s2-2 5-2 5 2 5 2V6Z"></path></svg></div>
        <h3>Ages 6–8: Creating Books for Growing Independent Readers</h3>
        <div class="fc-body">
          <p>Early readers are beginning to explore stories more independently, so structure and readability become important. We support authors with clear storytelling, age-appropriate language, and engaging illustrations. Our publishing process helps create books that encourage confidence while keeping young readers interested from the first page to the last.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"></path></svg></div>
        <h3>Ages 8–12: Publishing Bigger Stories for Middle-Grade Readers</h3>
        <div class="fc-body">
          <p>Middle-grade books require stronger characters, deeper plots, and more developed storytelling. We work on structure, pacing, editing, and design to ensure the final book feels polished and engaging. Whether it is fantasy, adventure, humour, or a school-based story, we help prepare books that connect with older children.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M4 21v-1a7 7 0 0 1 7-7h2a7 7 0 0 1 7 7v1"></path></svg></div>
        <h3>Ages 13–17: Developing Young Adult Books With Greater Depth</h3>
        <div class="fc-body">
          <p>Young adult readers expect stories with emotional depth, relatable characters, and more complex themes. We help authors refine their manuscripts while maintaining their unique voice and vision. From editing and design to final publication, we create books that feel authentic and appealing to teenage audiences.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Multi-Age Children’s Books: Reaching Families and Wider Audiences</h3>
        <div class="fc-body">
          <p>Some stories are written to be enjoyed by multiple generations, from children reading independently to families sharing the experience together. We help position these books with the right balance of storytelling, illustration, and presentation. The goal is to create a book that connects with readers beyond one specific age group.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section figma-cream">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Sydney authors and creators we publish children's books for" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Authors and Creators We Help Bring Stories Forward</h2>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors who have never published before</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers, parents, and grandparents with a story they've been telling for years</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators looking for a publisher to pair with their artwork</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who've been rejected elsewhere and want honest feedback, not silence</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Schools and community groups wanting to publish a collaborative book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors with a finished manuscript who just don't know what to do next</span></li>
      </ul>
      <p>Most of the people who come to us aren't professional writers. They're a nurse who wrote a story to help her own kids through a hard time, a grandad who's been telling the same tale at bedtime for a decade, or a teacher who noticed her class needed a book that didn't exist yet. You don't need a writing degree or an agent to work with us. You need a story worth telling and the patience to work through a proper editing process.</p>
    </div>
  </div>
</section>

<!-- 7 - HOW TO CHOOSE A PUBLISHER: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose a Children's Publisher in Sydney</h2>
      <p>There are more than a few children's book publishers in Sydney, and they don't all work the same way. Before you sign anything, ask any publisher these questions:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who owns the rights to the book once it's published, and for how long?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What exactly will I pay for, and what happens if the book doesn't sell?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will I see the illustrations before they're finalised?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many books actually get printed, and where will they be sold?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can I talk to another author you've published before?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is there a written contract, and can I take it away to read properly first?</span></li>
      </ul>
      <p>Any publisher who gets awkward about these questions is telling you something. A publisher confident in what they offer will answer all of them plainly.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="What to look for in a children's book publisher in Sydney" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 8 - WHY THE RIGHT PUBLISHER MATTERS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Choosing the Right Publisher Shapes Your Book’s Future</h2>
  </div>
  <div class="container narrow center">
    <p>Plenty of book publishing companies in Sydney focus mainly on adult fiction, memoirs, or business titles, and treat children's books as an afterthought. Not all publishing companies for children's books in Sydney put the same level of care into a young reader's title as they would into a novel aimed at adults, and that gap shows in the final product. Children's books need their own kind of care, from the way the text sits on the page to how the book survives being handled by small hands.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>The words and pictures have to work together.</strong> A children's book editor needs to think about pacing across a page turn, not just grammar.</li>
      <li><strong>Printing quality matters more than people expect.</strong> Board books, glossy pages, and binding all affect whether a book survives being read two hundred times by a toddler.</li>
      <li><strong>Distribution to schools and libraries is different from getting a novel onto a bookshop shelf.</strong> It needs its own contacts and process.</li>
      <li>Illustration style shapes how a child remembers the story, sometimes more than the words do.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Get any of this wrong and a lovely story ends up as a forgettable book. Get it right, and it becomes something a family reads for years.</p>
  </div>
</section>

<!-- 9 - OUR PROCESS (steps) -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>From Manuscript Submission to Published Children’s Book</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: You Send Us Your Manuscript</h3></div>
        <div class="svc-step-body"><p>Send your manuscript through our submissions form, along with a short note about your story and who it's for. We read every submission ourselves.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: We Give You Real Feedback</h3></div>
        <div class="svc-step-body"><p>If your story has potential but isn't quite there, we'll tell you honestly, and we'll usually point to what needs work. If it's not right for us, we'll say that too, quickly, so you're not left waiting for months.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: We Talk Through Your Options</h3></div>
        <div class="svc-step-body"><p>If we want to publish your book, we'll sit down with you (in person or over a call) and walk through the publishing model that suits your book, timeline, and budget.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: Editing and Illustration</h3></div>
        <div class="svc-step-body"><p>Your manuscript goes through structural and line editing. If it needs illustration, we brief an illustrator and keep you involved at each stage, from rough sketches to final art.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: Design, Print, and Proofing</h3></div>
        <div class="svc-step-body"><p>We design the layout, choose paper and binding, and send you a proof copy before anything goes to full print. Nothing gets printed in bulk until you've approved it.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Step 6: Launch and Distribution</h3></div>
        <div class="svc-step-body"><p>We get your book into the hands of bookshops, schools, and libraries, and help you plan a launch if you'd like one. We also give you guidance on events, school visits, and local media.</p></div>
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
      <h2>Why Sydney Authors Trust Our <em>Children’s Publishing Process</em></h2>
      <p>We're one of a small number of publishing companies children's books in Sydney, authors describe as easy to actually talk to. That's not an accident. It's how we built the business.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>&#10003;</span><h3>We actually read your manuscript.</h3><p>No submission disappears into an inbox with no reply.</p></article>
      <article><span>&#10003;</span><h3>We're local.</h3><p>As a publisher of children's books in Sydney, authors can visit in person; we're not a call centre in another country.</p></article>
      <article><span>&#10003;</span><h3>We're honest about cost.</h3><p>You'll know exactly what you're paying for before you commit to anything.</p></article>
      <article><span>&#10003;</span><h3>We keep you involved.</h3><p>You see illustrations, layouts, and proofs before anything is final, not after.</p></article>
      <article><span>&#10003;</span><h3>We know the local market.</h3><p>We understand which Sydney schools, bookshops, and festivals are worth targeting for a children's book.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, written quote for publishing a children's book in Sydney" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Shapes the Cost of Publishing a Children’s Book</h2>
      <p>Every book is different, so we don't quote a flat price on this page. A simple picture book with one illustrator costs less than a longer junior fiction title with a full design overhaul. Once we've read your manuscript, we'll give you a clear, written quote that breaks down editing, illustration, design, and print costs, so there are no surprises later.</p>
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
$location_services_heading = 'More Services for Sydney Children’s Book Authors';
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
      <h2>Ready to Bring Your <em>Children’s Story Into Print?</em></h2>
      <p>If you've got a children's story sitting in a drawer, or half finished on your laptop, send it through. There's no charge to submit, and you'll hear back from a real person, not an automated rejection. Get in touch with Purple Giraffe Press today, and let's see where your story can go.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to publish your children's book in Sydney" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 18 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 19 - FOOTER -->
<?php include 'includes/footer.php'; ?>

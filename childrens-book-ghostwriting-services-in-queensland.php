<?php
include 'includes/config.php';

/* Page meta (title, description, canonical) feeds <head> via includes/header.php. */
$page_title       = 'Queensland Writers for Children\'s Ghostwriting';
$page_description = 'Turn your children\'s story idea into a finished book with expert ghostwriting in Queensland. Skilled, author-focused writing tailored to your vision.';
$canonical_path   = 'childrens-book-ghostwriting-services-in-queensland.php';
$breadcrumb_name  = 'Ghostwriting in Queensland';
$breadcrumbs = [
    ['name' => 'Home',         'url' => page_url('index.php')],
    ['name' => 'Locations',    'url' => page_url('locations/')],
    ['name' => 'Queensland',   'url' => page_url('locations/queensland.php')],
    ['name' => 'Ghostwriting', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need to have the whole story worked out before I contact you?',
    'a' => 'No. Some clients come to us with a full plot, others with just a single idea or character. We help build the story out from wherever you are starting.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to write a children\'s book in Queensland with your team?',
    'a' => 'It depends on the length and complexity, but most picture book projects take a few weeks, while longer chapter books can take a couple of months, including revision rounds.',
  ),
  2 =>
  array (
    'q' => 'Can I stay anonymous as the author?',
    'a' => 'Yes. Ghostwriting means the finished manuscript is credited to you, or to whichever name you choose, once it is complete.',
  ),
  3 =>
  array (
    'q' => 'Do you only work with clients based in Queensland, or can anyone use your service?',
    'a' => 'While many of our clients are based across Queensland, we work with authors from other states too. Our process works well over phone and video calls either way.',
  ),
  4 =>
  array (
    'q' => 'What if I am not happy with the sample pages?',
    'a' => 'That is exactly why we write samples first. We will revise the sample based on your feedback before moving on to the full manuscript.',
  ),
  5 =>
  array (
    'q' => 'Will I own the rights to my book once it is finished?',
    'a' => 'Yes. Once the project is complete and paid for, the rights to the manuscript transfer to you.',
  ),
  6 =>
  array (
    'q' => 'Do you help with illustration or publishing after the manuscript is done?',
    'a' => 'We focus on the manuscript itself, but we are happy to point you toward trusted next steps for illustration, printing, or publishing once your writing is finished.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/queensland.php">Queensland</a> / Ghostwriting</div>
      <h1>Let Your Story Be Written by Someone Who Gets Kids, <em>Children's Ghostwriting Services</em> in <strong>Queensland</strong></h1>
      <p class="lead">You already have the heart of a children’s book. It might be a bedtime story your family loves, a character you cannot stop thinking about, or an important lesson you want to share with young readers. The difficult part is turning that idea into a complete story with the right structure, language, pacing, and emotional impact.</p>
      <p class="lead">Purple Giraffe Press provides professional children’s ghostwriting services in Queensland for parents, grandparents, teachers, first-time authors, and organisations with a story worth telling. You do not need writing experience or a finished outline. Whether you have a few notes, an unfinished draft, or only an idea in your head, we can help you shape it into a polished children’s book manuscript.</p>
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
      <p>Our writers take the time to understand your vision, intended age group, characters, and the message behind your story. From developing the plot and choosing age-appropriate language to writing sample pages and completing the full manuscript, we guide you through every stage while keeping your ideas and voice at the centre of the book.</p>
      <p>Some authors come to us with the entire story planned. Others bring a memory, family tradition, classroom idea, or single character. Both are strong places to begin. Through thoughtful questions, careful listening, and clear collaboration, we turn what you have into a story young readers will want to hear again and again.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghostwriting.webp" alt="Children's book ghostwriting in Queensland at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT THE SERVICE INCLUDES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we can do</p>
    <h2>What Our Queensland Children’s Ghostwriting Service Includes for Authors</h2>
    <p style="margin:14px auto 0;">Our children’s ghostwriting service supports you from the first idea through to a complete and polished manuscript. You do not need a finished plot, detailed characters, or previous writing experience. We guide you through each stage while keeping your original message and vision at the centre of the story.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Story Idea and Concept Development</h3>
        <div class="fc-body">
          <p>We begin by discussing your idea, even if it is only a character, memory, lesson, or simple story theme. Our writer asks clear questions to understand what you want young readers to feel and learn. We then shape those early thoughts into a focused concept that can support a complete children’s book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Character and Setting Creation</h3>
        <div class="fc-body">
          <p>Memorable characters help children connect with a story and stay interested from beginning to end. We develop each character’s personality, goals, challenges, and role within the book. We also create a setting that feels believable, engaging, and suitable for the world your story is trying to build.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Plot and Story Structure</h3>
        <div class="fc-body">
          <p>A strong children’s book needs a clear beginning, middle, and ending that young readers can easily follow. We organise your ideas into a structured plot with a central problem, meaningful events, and a satisfying resolution. Every scene is planned to move the story forward without making it feel rushed or confusing.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Age-Appropriate Language and Tone</h3>
        <div class="fc-body">
          <p>The vocabulary and sentence structure must match the reading level of your intended audience. We adjust the language, tone, rhythm, and amount of detail for toddlers, early readers, or middle-grade children. This keeps the book easy to understand without making the writing feel overly simple or repetitive.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Sample Pages and Writing Direction</h3>
        <div class="fc-body">
          <p>Before writing the full manuscript, we can prepare sample pages that show how your story will sound. This allows you to review the voice, tone, pacing, and overall writing style at an early stage. Your feedback helps us agree on the right direction before the rest of the manuscript is developed.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Complete Manuscript Writing</h3>
        <div class="fc-body">
          <p>Once the concept and writing style are approved, we develop the complete manuscript based on the agreed outline. We focus on natural storytelling, engaging dialogue, emotional flow, and smooth transitions between scenes. The manuscript is written carefully, so it feels consistent from the opening line to the final page.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Feedback and Manuscript Revisions</h3>
        <div class="fc-body">
          <p>You remain involved throughout the writing process and can share feedback at agreed stages of the project. We revise sections that need changes to the tone, characters, wording, pacing, or story direction. This collaborative process helps ensure the finished manuscript reflects the book you originally imagined.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Final Manuscript Preparation</h3>
        <div class="fc-body">
          <p>After the revisions are complete, we carefully review the manuscript for clarity, consistency, grammar, and overall flow. You receive a clean and organised final document that is ready for the next stage of production. It can then move forward to illustration, editing, book design, formatting, or publishing.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHAT CAPTIVATES YOUNG READERS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>What Makes a Queensland Children’s Book Captivate Young Readers</h2>
  </div>
  <div class="container narrow center">
    <p>Before we get into the different formats we write, it helps to explain what separates a story that holds a child's attention from one that gets put down after a page or two. A few things matter more than people expect:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>The reading level has to match the age group exactly. A word that feels normal to an adult can stop a six-year-old reader in their tracks.</li>
      <li>The story needs a clear problem the main character has to solve, even in a simple picture book.</li>
      <li>Repetition and rhythm matter, especially for younger readers who like predicting what comes next.</li>
      <li>The ending needs to feel earned, not rushed, even in a 500-word picture book text.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>These are the sorts of details we build into every manuscript, regardless of the format or age group.</p>
  </div>
</section>

<!-- 6 - FORMATS BY AGE GROUP (feature cards) -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- age &amp; stage</p>
    <h2>Children’s Book Ghostwriting Services for Every Queensland Age Group</h2>
    <p style="margin:14px auto 0;">Children's books are not all the same, and neither is our approach. We offer children's book ghostwriting services in Queensland across several formats, so whatever stage of life your reader is at, we can match the writing to suit.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Picture Books (Ages 2 to 6)</h3>
        <div class="fc-body">
          <p>Picture books rely on rhythm, repetition, and simple, clear language. We write text that works alongside illustrations, leaving room for the pictures to tell part of the story too. If you already have an illustrator in mind, we can write to fit their style. If not, we can point you toward the next steps once your manuscript is ready.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Early Readers and Junior Fiction (Ages 6 to 9)</h3>
        <div class="fc-body">
          <p>At this stage, kids are building reading confidence. We write short chapters, simple sentence structures, and stories with a clear beginning, middle, and end. We keep vocabulary at the right level without making the story feel dumbed down.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path></svg></div>
        <h3>Middle Grade Chapter Books (Ages 9 to 12)</h3>
        <div class="fc-body">
          <p>Middle-grade readers want more complex plots, real emotional stakes, and characters they can relate to. We write longer chapter books in this category, with attention to pacing so young readers stay hooked from one chapter to the next.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Educational and Values-Based Stories</h3>
        <div class="fc-body">
          <p>Many of our Queensland clients come to us wanting a book that teaches something, whether it is a life lesson, a family value, or a school topic. We write these stories so the lesson comes through the plot naturally, rather than feeling like a lecture.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 7 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Parents, teachers and first-time authors we ghostwrite for in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Queensland Children’s Ghostwriting Services Are Designed For</h2>
      <p>Our clients come from all sorts of backgrounds. We regularly work with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Parents and grandparents who want to turn a bedtime story into a keepsake book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors who have an idea but no writing background</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Teachers and school staff are creating classroom resources or fundraising books</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small business owners who want a branded children's book for marketing or community work</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Community groups and charities that want a story that reflects local culture or history</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section section-soft">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Right Queensland Children’s Ghostwriter</h2>
      <p>Not every ghostwriting service is the same, and it pays to ask a few questions before you commit to one, whether that is us or someone else. Here is what we think matters most:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask if the writer specialises in children's books, or if they write everything from resumes to novels. Specialisation usually means better results.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask how many rounds of revision are included, and what happens if you are not happy with the first draft.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask who owns the rights to the finished manuscript. With a proper ghostwriting agreement, the rights should transfer to you.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask for a sample of previous work, or a short sample chapter written specifically for your idea.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask about confidentiality. Your idea should stay private unless you choose to share it.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Ask for a clear, written quote before any work begins, so there are no surprises later.</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/editing.webp" alt="Choosing a children's ghostwriter in Queensland" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - WHY PROFESSIONAL GHOSTWRITING -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Why Professional Children’s Ghostwriting Creates Stronger, More Engaging Stories</h2>
  </div>
  <div class="container narrow center">
    <p>Writing a children's book sounds simple until you actually try it. Getting the tone right for a five-year-old is a completely different skill from writing for a nine-year-old, and small mistakes in pacing or vocabulary can lose a young reader fast.</p>
    <p style="margin-top:14px;">A professional writer brings:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>An understanding of reading levels and how vocabulary should shift by age group</li>
      <li>Experience structuring a story so it holds a child's attention from start to finish</li>
      <li>An outside perspective that can spot plot holes or pacing issues you might miss</li>
      <li>The ability to turn a rough idea, even just a few sentences, into a full manuscript</li>
      <li>A finished product that is ready for the next step, whether that is illustration, self-publishing, or submission to a publisher</li>
    </ul>
  </div>
</section>

<!-- 10 - PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How Our Queensland Children’s Ghostwriting Process Works Step by Step</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Step 1: Free Initial Chat</h3></div>
        <div class="svc-step-body"><p>We start with a conversation about your idea, your goals for the book, and your budget. There is no pressure and no cost for this first chat.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Step 2: Story Outline</h3></div>
        <div class="svc-step-body"><p>Once we understand your idea, we put together a simple outline covering the main plot points, characters, and structure. You review this before we start writing, so we are both on the same page.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Step 3: Sample Pages</h3></div>
        <div class="svc-step-body"><p>We write a short sample so you can see and hear the voice of the book. This is your chance to give feedback before the full manuscript is written.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Step 4: Full Manuscript</h3></div>
        <div class="svc-step-body"><p>Once you are happy with the sample, we will write the complete manuscript. You will get updates at agreed points, rather than radio silence until the end.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Step 5: Revisions</h3></div>
        <div class="svc-step-body"><p>We include revision rounds so the final manuscript matches what you had in mind. We want you to be genuinely happy with the result, not just finished with the process.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Step 6: Final Delivery</h3></div>
        <div class="svc-step-body"><p>You receive the finished manuscript, along with the rights to it, ready for the next stage, such as illustration or publishing.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 11 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>
<!-- 13 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Queensland Children’s Authors Choose <em>Purple Giraffe Press</em></h2>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We only write for young readers.</h3><p>This is not a side project for us. Children's and young reader content is our entire focus, so our writers understand pacing, tone, and vocabulary for each age group.</p></article>
      <article><span>✓</span><h3>Clear, upfront pricing.</h3><p>You get a written quote before any work starts, based on your specific project, not a guess.</p></article>
      <article><span>✓</span><h3>Your idea stays yours.</h3><p>We work under clear agreements so the rights to your finished manuscript belong to you.</p></article>
      <article><span>✓</span><h3>Real communication throughout.</h3><p>You will hear from us at each stage of the process, not just at the very end.</p></article>
      <article><span>✓</span><h3>Local understanding.</h3><p>Being based in Queensland, we understand the local schools, bookshops, and community groups our clients are often writing for.</p></article>
    </div>
  </div>
</section>

<!-- 14 - TESTIMONIALS -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 15 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, written quote for children's book ghostwriting in Queensland" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Children's Book Ghostwriting Cost in Queensland?</h2>
      <p>This is one of the most common questions we get asked, and the honest answer is that it depends on the project. A short picture book manuscript takes less time than a full middle-grade chapter book, so the cost will differ between them.</p>
      <p>Rather than quote a flat rate that might not suit your project, we ask about your idea first and then give you a clear, written quote based on:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>The length and complexity of the story</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>The age group and reading level</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of revision would you like included</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Turnaround time, since a rushed project can cost more than one with a flexible deadline</span></li>
      </ul>
      <p>If you are comparing children's book ghostwriting services cost in Queensland across different providers, we recommend asking each one for a written quote with the same details listed above, so you are comparing like with like.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php
/* The doc's services-roundup heading now introduces the city cards: the
   generic includes/services.php grid was removed so this page shows one
   set of service cards, not two. */
$location_services_eyebrow = '- explore more services';
$location_services_heading = 'Other Services for Queensland Children’s Book Authors';
$location_services_intro   = 'We built our service list around the real gaps that stop authors from finishing and launching their books. Here is what falls under our roof.';
$location_services_section = 'section figma-cream';
include 'includes/location-services.php';
?>

<!-- 17 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 18 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Turn Your <em>Children’s Book Idea</em> Into Reality?</h2>
      <p>Your story might be written in a notebook, saved in a document, or still taking shape in your mind. Wherever you are in the process, Purple Giraffe Press is here to listen. Get in touch for a friendly, no-pressure chat about your idea and the support you may need to turn it into a real children’s book. The conversation is completely free, with no cost or obligation.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to ghostwrite your children's book" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 19 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently Asked <em>Questions</em></h2>
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

<!-- 20 - FOOTER -->
<?php include 'includes/footer.php'; ?>

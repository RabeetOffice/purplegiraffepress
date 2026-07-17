<?php
include 'includes/config.php';

$page_title       = 'Fiction Ghostwriter Services for New Authors, Australia';
$page_description = 'Professional fiction ghostwriter services for new authors in Australia. We help bring your story ideas to life with expert writing and guidance.';
$canonical_path   = 'fiction-ghostwriting.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I own the rights to my ghostwritten novel?',
    'a' => 'Yes. Once the project is complete and paid for, full rights and authorship belong to you. We sign confidentiality agreements as standard.',
  ),
  1 =>
  array (
    'q' => 'How long does it take to ghostwrite a novel?',
    'a' => 'It depends on length and genre, but most full-length novels take a few months from the first sample chapter to the final draft. We’ll give you a realistic timeline once we understand your project.',
  ),
  2 =>
  array (
    'q' => 'Can I stay anonymous as the author?',
    'a' => 'Yes. Ghostwriting is confidential by design. We never disclose our involvement in a project unless you tell us it’s fine to do so.',
  ),
  3 =>
  array (
    'q' => 'What if I only have an idea and no outline?',
    'a' => 'That’s fine. Many clients come to us with just a concept. We can help develop it into a proper outline before writing begins.',
  ),
  4 =>
  array (
    'q' => 'Do you write in genres like action or thriller fiction?',
    'a' => 'Yes. We cover most fiction genres, including romance, mystery, fantasy, and fast-paced action stories, and we’ll match you with a writer experienced in your genre.',
  ),
  5 =>
  array (
    'q' => 'What happens if I don’t like the sample chapter?',
    'a' => 'We’ll revise it based on your feedback until the voice and style feel right. We don’t move on to the full manuscript until you’re happy.',
  ),
  6 =>
  array (
    'q' => 'Is this a good option if I’ve never written a book before?',
    'a' => 'Yes. Most of our clients aren’t professional writers. You just need the story idea. We handle the writing side.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Fiction Ghostwriting</div>
      <h1>Fiction <em>Ghostwriter Support</em> for the Story You Have Been <strong>Carrying for Years</strong></h1>
      <p class="lead">Maybe you’ve had a novel in your head for years. Maybe you’ve started and stopped a manuscript three times. Maybe you just don’t have the time to sit down and write 80,000 words, even though the story is clear in your mind.</p>
      <p class="lead">That’s where a fiction ghostwriter comes in. You bring the idea, the characters, the world you’ve imagined. We bring the writing skill and the hours it takes to turn that idea into a finished, readable book.</p>
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
      <h2>Your story stays yours</h2>
      <p>At Purple Giraffe Press, we work with people looking for a fiction ghostwriter for hire who will take their vision seriously, not water it down or turn it into something generic. Your name goes on the cover. Your story stays yours. We just do the heavy lifting of getting it onto the page.</p>
      <p>We know that handing your story over to someone else can feel strange at first. It’s a personal thing, and it’s normal to wonder whether another writer can really capture what you’re picturing in your head. That’s why we spend time upfront getting to know your characters, your world, and the tone you’re after, before a single chapter is written. The goal is always the same. When you read the finished book, it should feel like the story you imagined, just written out properly.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghost-writing-fold.webp" alt="Fiction ghostwriting at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE DO (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we do</p>
    <h2>Fiction Ghostwriting Services Built Around Your Story, Genre, and Voice</h2>
    <p style="margin:14px auto 0;">Every fiction project is different, so we don’t force your book into a fixed package. Here’s how we usually help.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Full Manuscript Ghostwriting</h3>
        <div class="fc-body">
          <p>You give us your idea, whether that’s a rough concept, a few chapters you’ve already written, or a detailed outline. We turn it into a complete manuscript, chapter by chapter, in your voice and style. You’ll see chapters as we go, so you can flag anything that doesn’t feel right early on, rather than waiting until the whole book is done.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Genre Specific Writing</h3>
        <div class="fc-body">
          <p>We write across most fiction genres, including romance, mystery, thriller, fantasy, and action fiction. Ghostwriters are part of our team too, for stories that need pace, tension, and strong plotting. Tell us your genre, and we’ll match you with a writer who reads and understands that space.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path></svg></div>
        <h3>Co-Writing and Story Development</h3>
        <div class="fc-body">
          <p>Some clients have a strong idea but need help shaping it into a proper plot. We can work with you to build out characters, structure, and pacing before the actual writing begins.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Rewriting and Finishing Existing Drafts</h3>
        <div class="fc-body">
          <p>Started a manuscript but got stuck halfway? We can pick up where you left off, matching your existing tone and finishing the story. This is one of the more common requests we get. A lot of writers get eighty per cent of the way through a book and then lose momentum, or hit a plot problem they can’t quite solve on their own. We read through what you’ve already written, work out where the story needs to go, and finish it in a way that feels like one continuous book, not two different writers stitched together.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Series and Multi-Book Projects</h3>
        <div class="fc-body">
          <p>If you’re planning a trilogy or an ongoing series, we can work with you across multiple books, keeping characters, timelines, and world details consistent from one book to the next. We keep detailed notes on names, dates, and backstory as we go, so book three still lines up with something you mentioned in book one.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Editing Support Alongside Writing</h3>
        <div class="fc-body">
          <p>If you’d rather write parts of the book yourself but want help polishing the rest, we can slot in wherever it’s useful. Some clients write a rough first pass and want us to smooth out the pacing and dialogue. Others write half the book and want us to finish the second half. We’re happy to work around whatever setup suits you.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO HIRES: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Authors, creators, and storytellers who hire a fiction ghostwriter" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Hires a Fiction Ghostwriter? Authors, Creators, and Storytellers</h2>
      <p>Our fiction ghostwriting clients come from all kinds of backgrounds. We regularly work with:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors who have a story but not the writing time or confidence</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners and public figures who want a novel alongside their other work</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Aspiring novelists who tried writing solo and got stuck</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Screenwriters or podcasters who want their story adapted into a novel</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors are already working with fiction ghostwriters online who want a second opinion or a fresh writer</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Series authors who need help keeping up with reader demand for new books</span></li>
      </ul>
      <p>You don’t need any writing experience to work with us. You just need the story.</p>
    </div>
  </div>
</section>

<!-- 6 - HOW TO PICK: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Pick the Best Fiction Ghostwriter for Your Book</h2>
      <p>Not every ghostwriter suits every story. Before you hire someone, it helps to know what actually makes a good fit. Look for:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A writer who has read and written in your genre before, not just fiction in general</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Someone willing to send you sample chapters before you commit to the full project</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A clear contract that spells out ownership, confidentiality, and payment terms</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Realistic turnaround times, not promises of a finished novel in two weeks</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Willingness to work with your outline or ideas, rather than replacing them with their own</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Open communication throughout the project, not silence until the final draft lands</span></li>
      </ul>
      <p>We’re happy to be judged against this list. If a ghostwriter can’t answer these questions clearly, that’s worth noticing before you sign anything.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing the best fiction ghostwriter for your novel" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY IT TAKES SKILL (content list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Fiction Ghostwriting Takes Storytelling Skill, Not Just Grammar</h2>
  </div>
  <div class="container narrow center">
    <p>Writing a novel isn’t just about correct sentences. It’s about holding a whole story together for tens of thousands of words while keeping it consistent, engaging, and true to your original idea. A few things make fiction writing genuinely hard to get right:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Voice consistency.</strong> A ghostwriter has to write in a way that sounds like you, or like the narrator you’ve imagined, from the first page to the last.</li>
      <li><strong>Plot structure.</strong> Every subplot needs to connect back to the main story, and pacing has to build properly instead of dragging or rushing.</li>
      <li><strong>Character depth.</strong> Readers need to believe in the people on the page, which means motivations, flaws, and growth all need to make sense.</li>
      <li><strong>Genre expectations.</strong> Romance readers, thriller readers, and fantasy readers all expect different things. A ghostwriter needs to understand those expectations to satisfy them.</li>
      <li><strong>Continuity.</strong> Names, timelines, physical details, and backstory all need to stay consistent across a full manuscript or across an entire series.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This is why we treat fiction ghostwriting as a craft, not a quick writing job. Getting these details right is what separates a book people finish from one they put down halfway through.</p>
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
    <h2>Our Fiction Ghostwriting Process: From Story Idea to Final Manuscript</h2>
    <p style="margin:14px auto 0;">We keep the process simple, so you always know what’s happening with your book.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Tell Us Your Story</h3></div>
        <div class="svc-step-body"><p>Send us your idea, outline, notes, or existing chapters. Even a rough concept is enough to start a conversation.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Clear Quote</h3></div>
        <div class="svc-step-body"><p>We look at the scope of your project, including genre, length, and how much material you already have, and give you a straightforward quote before any writing starts.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Sample Chapter</h3></div>
        <div class="svc-step-body"><p>For most projects, we write a short sample chapter first. This lets you check the voice and style before we commit to the full manuscript.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Writing and Regular Check-Ins</h3></div>
        <div class="svc-step-body"><p>Once you approve the sample, we start writing. Depending on the project, we’ll send you chapters in batches so you can give feedback along the way rather than waiting until the very end.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Final Draft and Handover</h3></div>
        <div class="svc-step-body"><p>Once the manuscript is complete and you’re happy with it, we hand over the final files. The finished book and all rights to it belong to you.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 10 - BENEFITS (content list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Benefits of Working With a Specialist Novel Writer</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You save time.</strong> Writing a novel can take a year or more on your own. A dedicated ghostwriter can move faster because writing is their full-time focus.</li>
      <li><strong>You get a finished product.</strong> No more half-written manuscripts sitting in a drawer. You get a complete, polished novel.</li>
      <li><strong>You keep creative control.</strong> You approve the outline, the sample chapter, and every batch of chapters along the way.</li>
      <li><strong>You get genre expertise.</strong> Working with a writer who already understands your genre means fewer rewrites and a stronger final draft.</li>
      <li><strong>You stay anonymous if you want to.</strong> Ghostwriting is confidential by nature. Nobody needs to know we were involved unless you choose to say so.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Choose Purple Giraffe Press for Fiction Ghostwriting in <em>Australia</em></h2>
      <p>A few simple things make us a good fit for your novel.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in fiction, not everything at once</h3><p>Our writers focus on storytelling, not marketing copy or technical writing, so their skills stay sharp for exactly this kind of work.</p></article>
      <article><span>✓</span><h3>Upfront pricing, no surprises</h3><p>You’ll know the cost before we start, not halfway through your manuscript.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>As an Australian team offering fiction ghostwriting Australia-wide, we understand local publishing norms and are easy to reach in your own time zone.</p></article>
      <article><span>✓</span><h3>We treat your story with care</h3><p>Your idea isn’t just a job to us. We take the time to understand what you’re trying to say with your book, not just the plot points but the feeling you want readers to walk away with.</p></article>
      <article><span>✓</span><h3>Simple, honest communication</h3><p>You’ll always know what stage your manuscript is at and what happens next. No long silences, no chasing us for updates.</p></article>
      <article><span>✓</span><h3>We’re realistic about timelines</h3><p>We won’t promise a finished novel in a fortnight. Good fiction takes proper time to write, and we’ll tell you honestly how long yours is likely to take.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, written quote for fiction ghostwriting with no surprises" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Fiction Ghostwriting Cost in Australia?</h2>
      <p>Pricing for a ghostwritten novel depends on a few things: the length of the book, the genre, how much planning or outlining is needed, and how many rounds of feedback you want built into the process. A short novella costs less than a full-length series with three books.</p>
      <p>We know that cost is often the first question people ask, so we aim to be an affordable fiction ghostwriting service without cutting corners on quality. Rather than quote a number that might not fit your project, we’ll ask a few questions about your book and send you a clear, written quote before any work begins. There’s no pressure to proceed after that quote. It’s simply so you know exactly what you’re paying for.</p>
      <p>Most quotes are broken down by stage, so you can see what you’re paying for the sample chapter, the main manuscript, and any revision rounds. If your budget is tight, tell us up front. We can sometimes adjust the scope, such as a shorter novel or fewer feedback rounds, to bring the project closer to what you can spend, without pretending a big project can be done for a small budget.</p>
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

<!-- 15 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 16 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- start your novel</p>
      <h2>Ready to Hire a Fiction Ghostwriter and <em>Start Your Novel?</em></h2>
      <p>If you’ve got a story in your head and you’re ready to see it as a finished book, we’d love to hear about it. Send us a message with a short description of your idea, and we’ll get back to you with next steps. Purple Giraffe Press is here to help you turn your story into a novel you can actually hold in your hands.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to ghostwrite your novel" loading="lazy" decoding="async">
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

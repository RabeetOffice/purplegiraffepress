<?php
include 'includes/config.php';

$page_title       = 'Children\'s Fiction Ghostwriter | Based in Dublin';
$page_description = 'Turn your children\'s story idea into a finished book with expert fiction ghostwriting in Dublin. Warm, engaging writing tailored to young readers.';
$canonical_path   = 'childrens-book-fiction-ghostwriter-in-dublin.php';
$breadcrumb_name  = 'Fiction Ghostwriting in Dublin';
$breadcrumbs = [
    ['name' => 'Home',                 'url' => page_url('index.php')],
    ['name' => 'Locations',            'url' => page_url('locations/')],
    ['name' => 'Dublin',               'url' => page_url('locations/dublin.php')],
    ['name' => 'Fiction Ghostwriting', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need a full manuscript idea before I contact you?',
    'a' => 'No. Many clients start with just a premise or a main character. We help you build the plot and structure together during the early stages.',
  ),
  1 =>
  array (
    'q' => 'Do you only work with clients in Dublin, or can you help authors in London too?',
    'a' => 'We work with clients across Ireland and the UK, including London. Most communication happens by video call and email, so location isn\'t a barrier.',
  ),
  2 =>
  array (
    'q' => 'How long does it take to ghostwrite a novel?',
    'a' => 'Most full-length novels take between four and eight months, depending on length and how quickly feedback comes back to us during the drafting stage.',
  ),
  3 =>
  array (
    'q' => 'Will the book actually sound like me and not like the ghostwriter?',
    'a' => 'Yes. That\'s the point of the sample chapter stage. We match your voice and adjust it based on your feedback before writing the rest of the book.',
  ),
  4 =>
  array (
    'q' => 'Is my story kept confidential?',
    'a' => 'Yes. Every client signs a confidentiality agreement before we begin, and your story details are never shared or discussed outside the project.',
  ),
  5 =>
  array (
    'q' => 'Can London-based authors get the same pricing as Dublin clients?',
    'a' => 'Yes. Pricing is based on the scope of the project, not location, so authors in London and Dublin are quoted on the same basis.',
  ),
  6 =>
  array (
    'q' => 'What happens if I\'m not happy with the first draft?',
    'a' => 'Your agreement includes a set number of revision rounds. We work through your feedback chapter by chapter until the manuscript matches what you had in mind.',
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
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/dublin.php">Dublin</a> / Fiction Ghostwriting</div>
      <h1>Children's <em>Fiction Book Ghostwriter</em> <strong>Dublin</strong> for Those Who Have a Story but Not the Words</h1>
      <p class="lead">You have a story in your head. Maybe you've had it for years. You know the characters, you know how it ends, but you've never had the time or the confidence to get it all down on paper. That's where we come in.</p>
      <p class="lead">Purple Giraffe Press works with people all over Dublin who have a novel in them but need a professional writer to help bring it out. Ghostwriting fiction in Dublin is what we do every day, and we treat every project like it's our own book, even though your name goes on the cover.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Novel</a>
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
      <p>Whether you want a gritty thriller, a family saga, a romance, or something that doesn't fit neatly into any genre, we sit down with you first and listen. Then we write. You stay in the driver's seat the whole way through, and we handle the parts that usually stop people from finishing a book: structure, pacing, dialogue, and getting words on the page every single week.</p>
      <p>If you've been putting off writing your novel because life keeps getting in the way. Most people who reach out to us have tried to write the book themselves at some point. Some got a few chapters in and lost momentum. Others have never written more than a diary entry but have carried a story around in their head for years. There's no wrong starting point. What matters is that you have something worth telling, and you'd rather have a professional shape it properly than let it sit unfinished.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Novel &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghost-writing-fold.webp" alt="Children's fiction book ghostwriter in Dublin at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - HOW GHOSTWRITING ACTUALLY WORKS -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>How A Children’s Fiction Book Ghostwriter Turns Your Ideas Into A Complete Story</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of people picture ghostwriting as handing over a rough idea and getting a finished book back a week later. That's not how it works, and honestly, you should be wary of anyone who promises that.</p>
    <p style="margin-top:14px;">Here's the real process. You bring the story, the characters, the world, and the themes that matter to you. We bring the craft: how to open a chapter so people keep reading, how to write dialogue that sounds like real people talking, how to pace a plot so it doesn't sag in the middle.</p>
    <p style="margin-top:14px;">You'll be involved at every stage. Most clients send us voice notes, rough chapter outlines, or even just a few pages of notes scribbled on a phone. We turn that into a proper manuscript, chapter by chapter, checking in with you regularly so the book still sounds like your story, not ours.</p>
    <p style="margin-top:14px;">Some clients want heavy involvement, reading every chapter as it's written and sending back notes. Others prefer to check in every few weeks and let us get on with it. Neither approach is wrong. We ask early on how much input you want, and we shape the working pattern around that answer rather than forcing everyone through the same process.</p>
    <p style="margin-top:14px;">One thing we always insist on, no matter how hands-off a client wants to be: you read and approve the sample chapter and the outline before full writing begins. Skipping that step is how projects go wrong, and we've seen it happen with other services, which is why we won't cut that corner.</p>
  </div>
</section>

<!-- 5 - GENRE SERVICES (feature cards) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Professional Children’s Fiction Book Ghostwriting Services Designed Around Your Story</h2>
    <p style="margin:14px auto 0;">Every novel is different, so we break our fiction ghostwriter for hire in Dublin service into a few clear categories. This helps you know exactly what you're paying for and what to expect at each stage.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"></circle><path d="m20 20-3.6-3.6"></path></svg></div>
        <h3>Thriller and Crime Fiction</h3>
        <div class="fc-body">
          <p>Fast pacing, tight plotting, and a reason to turn the page. If you've got a detective, a conspiracy, or a crime that needs solving, we work with you to build a plot that holds together and doesn't give the ending away too soon.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 4 14h6l-1 8 9-12h-6Z"></path></svg></div>
        <h3>Action Fiction</h3>
        <div class="fc-body">
          <p>Some stories need momentum from page one. Our action fiction ghostwriters in Dublin know how to write chase scenes, fights, and high-stakes moments that read fast without becoming confusing or repetitive. We also make sure the quieter chapters in between still carry weight, so the book doesn't feel like one long action scene.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20s-7-4.4-7-9a4 4 0 0 1 7-2.6A4 4 0 0 1 19 11c0 4.6-7 9-7 9Z"></path></svg></div>
        <h3>Romance and Family Drama</h3>
        <div class="fc-body">
          <p>Character work matters most here. We spend extra time on relationships, backstory, and the small emotional beats that make readers care whether two people end up together or whether a family finds its way back to each other.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5.5A2.5 2.5 0 0 1 6.5 3H19v16H6.5A2.5 2.5 0 0 0 4 21.5Z"></path><path d="M9 8h6M9 12h5"></path></svg></div>
        <h3>Literary and General Fiction</h3>
        <div class="fc-body">
          <p>For stories that lean more on voice, theme, and atmosphere than plot twists. This is often the hardest type of book to ghostwrite well, because it depends so much on tone. We do a longer sample chapter up front for this category so you can hear your own voice coming through before we commit to the full manuscript.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Series and Multi-Book Projects</h3>
        <div class="fc-body">
          <p>If you're planning more than one book, we can map out a series arc together first, so book one sets up book two properly instead of painting you into a corner.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 6 - AGE GROUPS (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- every age group</p>
    <h2>Writing Fiction For The Right Age Group</h2>
    <p style="margin:14px auto 0;">Every fiction book needs a clear audience. The writing style, characters, themes, and level of complexity all change depending on who the story is created for. We help shape your ideas into a manuscript that connects with the readers you want to reach.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Children's Fiction (Ages 6–12)</h3>
        <div class="fc-body">
          <p>Children's stories need engaging characters, imaginative worlds, and age-appropriate language that keeps young readers interested while supporting their reading journey.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"></circle><path d="M5 21a7 7 0 0 1 14 0"></path></svg></div>
        <h3>Young Adult Fiction (Ages 13–18)</h3>
        <div class="fc-body">
          <p>Young adult novels often explore identity, relationships, challenges, and personal growth with a writing style that feels authentic to teenage readers.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Adult Fiction (Ages 18+)</h3>
        <div class="fc-body">
          <p>Adult novels allow for deeper themes, complex characters, and more developed storytelling across genres such as thrillers, romance, literary fiction, and family dramas.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Understanding your target age group helps us develop the right voice, structure, pacing, and storytelling approach so your finished novel feels natural for its intended readers.</p>
  </div>
</section>

<!-- 7 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="The Dublin authors our children's fiction book ghostwriting service helps" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Dublin Children’s Fiction Book Ghostwriting Service Helps Authors Become</h2>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors who have never written a book before but have a strong story</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners and professionals who want to write fiction as a side project</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>People with a family story or life experience they want turned into a novel</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors who started a manuscript, got stuck, and need someone to finish it</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published writers who want a second or third book written faster than they can manage alone</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 8 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Best Children’s Fiction Book Ghostwriter in Dublin</h2>
      <p>This is a big decision, so it's worth being careful, whoever you end up working with. Ask any ghostwriter these questions before you sign anything:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Can I read a sample chapter written in my story's style before I commit to the full project?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Who owns the copyright once the book is finished? (It should be you, in full.)</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Will the same writer work on the whole book, or does it get passed between different people?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>How many rounds of changes are included in the price?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>What happens if I want to pause the project halfway through?</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Is there a written contract that covers confidentiality and payment terms?</span></li>
      </ul>
      <p>A good ghostwriter will answer all of these without hesitating. If someone dodges the copyright question or won't put anything in writing, walk away.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing a children's fiction book ghostwriter in Dublin" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 9 - COMMON MISTAKES (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- good to know</p>
    <h2>Common Children’s Fiction Book Writing Mistakes That Prevent Authors From Finishing Books</h2>
  </div>
  <div class="container narrow center">
    <p>Before you start any project, whether with us or on your own, it helps to know where most unfinished manuscripts go wrong:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Starting to write before the plot is worked out.</strong> This is the single biggest cause of a stalled book. Writers get thirty thousand words in and realise the story doesn't hold together.</li>
      <li><strong>Trying to include too many ideas at once.</strong> A novel needs one strong central thread. Side plots should support it, not compete with it.</li>
      <li><strong>Writing in isolation for months without feedback.</strong> By the time some writers show anyone their draft, small problems have become big ones.</li>
      <li><strong>Underestimating how long a full novel actually takes.</strong> A typical novel runs sixty to ninety thousand words. Written alone, alongside a full-time job, that can take years.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>We build our whole process around avoiding these traps, which is part of why the sample chapter and outline stages exist before we write a single full chapter.</p>
  </div>
</section>

<!-- 10 - WHY A PROFESSIONAL CHANGES THE OUTCOME (list) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Working With a Professional Children’s Book Ghostwriter Changes the Outcome</h2>
  </div>
  <div class="container narrow center">
    <p>Plenty of people start a novel. Far fewer finish one. The gap usually comes down to a few things a ghostwriter is trained to handle:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Structure.</strong> Knowing where a scene should end and the next should begin, so the book keeps moving.</li>
      <li><strong>Pacing.</strong> Balancing action, dialogue, and description so no section drags.</li>
      <li><strong>Consistency.</strong> Keeping track of characters, timelines, and details across 60,000 or 80,000 words, which is much harder than it sounds once you're deep into a manuscript.</li>
      <li><strong>Accountability.</strong> A weekly deadline and someone expecting pages from you does more for a stalled book than motivation ever will.</li>
    </ul>
  </div>
</section>

<!-- 11 - WORKING ONLINE WITH LOCAL CLIENTS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- local and online</p>
    <h2>How Children’s Fiction Book Ghostwriters Online in Dublin Work With Local Clients</h2>
  </div>
  <div class="container narrow center">
    <p>Most of our work happens online, by video call, phone, or email, which suits people with busy jobs and families. That said, we're based in Dublin and understand the city, so if you'd rather meet in person for the first conversation, that's not a problem either.</p>
    <p style="margin-top:14px;">Working online doesn't mean less contact. You'll still get regular check-ins, draft chapters as they're finished, and a chance to give feedback before we move on to the next section.</p>
  </div>
</section>

<!-- 12 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Step-by-Step Children’s Fiction Book Ghostwriting Process Explained Clearly</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Initial Conversation</h3></div>
        <div class="svc-step-body"><p>We start with a free call to hear your story idea, talk through genre, length, and timeline, and answer any questions you have about the process.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Sample Chapter</h3></div>
        <div class="svc-step-body"><p>We write a short sample chapter based on your notes so you can see how your voice and story come through before agreeing to the full project.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Outline and Agreement</h3></div>
        <div class="svc-step-body"><p>Once you're happy with the sample, we build a chapter-by-chapter outline together and put a written agreement in place covering price, timeline, revisions, and copyright.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Writing and Check-Ins</h3></div>
        <div class="svc-step-body"><p>We write in batches, usually a few chapters at a time, and send them to you for feedback. You can request changes at each stage rather than waiting until the whole book is done.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Full Draft and Revisions</h3></div>
        <div class="svc-step-body"><p>Once the full manuscript is complete, we go through an agreed number of revision rounds together until you're happy with the final version.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Final Delivery</h3></div>
        <div class="svc-step-body"><p>You receive the finished manuscript, formatted and ready for the next step, whether that's self-publishing, sending to an agent, or printing copies for family and friends.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 13 - PORTFOLIO CAROUSEL -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 14 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Children’s Book Authors Choose <em>Purple Giraffe Press</em> For Fiction Writing</h2>
      <p>If you're trying to find the best fiction ghostwriter in Dublin for your particular story, the honest answer is that it depends on fit. Read a sample chapter from anyone you're considering, including us, before you decide.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>One writer, start to finish</h3><p>The same person who writes your sample chapter writes the whole book, so the voice stays consistent.</p></article>
      <article><span>✓</span><h3>Full confidentiality</h3><p>Every project is covered by a non-disclosure agreement, and we never discuss client details or story ideas with anyone.</p></article>
      <article><span>✓</span><h3>You keep full copyright</h3><p>The finished book belongs to you, completely, the moment it's paid for.</p></article>
      <article><span>✓</span><h3>Clear, upfront pricing</h3><p>No hidden fees added halfway through the project.</p></article>
      <article><span>✓</span><h3>Realistic timelines</h3><p>We'd rather tell you a project will take four months than promise six weeks and deliver something rushed.</p></article>
    </div>
  </div>
</section>

<!-- 15 - TESTIMONIALS -->
<section class="section section-white">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 16 - COST: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-soft">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for children's fiction book ghostwriting in Dublin" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>Understanding The Cost Of Children’s Fiction Book Ghostwriting In Dublin</h2>
      <p>Every book is priced differently depending on length, genre, and how much research or plotting is involved. A short novel takes less time than a 100,000-word series opener with a detailed world to build.</p>
      <p>Because of that, we don't publish a flat rate. Instead, we treat this as an affordable fiction ghostwriting service in Dublin by quoting per project once we understand your story, your target word count, and your timeline. You'll get a clear, itemised quote after the first call, with no pressure to commit on the spot.</p>
      <p>As a general guide, shorter novels and novellas cost less than a full-length series opener with a large cast and detailed world-building. Genre matters too. A tightly plotted thriller with a simpler cast can sometimes cost less than a literary novel that needs several drafts to get the voice right. We'll always explain what's driving the price before you agree to anything, so there are no surprises halfway through.</p>
      <p>Payment is usually split across the project rather than paid upfront in one go, tied to milestones like the sample chapter, the halfway point, and final delivery. This protects you as much as it protects us.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- 17 - OTHER SERVICES IN THIS CITY (dynamic, excludes current page) -->
<?php include 'includes/location-services.php'; ?>

<!-- 18 - CONTACT FORM SECTION -->
<?php include 'includes/contact-section.php'; ?>

<!-- 19 - CLOSING CTA -->
<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready To Turn Your <em>Fiction Idea Into Reality?</em></h2>
      <p>You don't need a finished outline or a perfect pitch to get started. A rough idea, a few notes, or even just a strong opening scene is enough for us to begin the conversation. Get in touch with Purple Giraffe Press today, and let's talk about the book only you can write.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to ghostwrite your children's fiction book in Dublin" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 20 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
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

<!-- 21 - FOOTER -->
<?php include 'includes/footer.php'; ?>

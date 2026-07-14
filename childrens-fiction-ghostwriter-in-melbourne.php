<?php
include 'includes/config.php';

$page_title       = 'Children\'s Fiction Ghostwriter in Melbourne';
$page_description = 'Professional children\'s fiction ghostwriter in Melbourne. Bring your story idea to life with expert, engaging writing for young readers. Free quote!';
$canonical_path   = 'childrens-fiction-ghostwriter-in-melbourne.php';
$breadcrumb_name  = 'Fiction Ghostwriter in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',        'url' => page_url('index.php')],
    ['name' => 'Locations',   'url' => page_url('locations/')],
    ['name' => 'Melbourne',   'url' => page_url('locations/melbourne.php')],
    ['name' => 'Fiction Ghostwriter', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do I need a finished outline before hiring a children’s fiction ghostwriter in Melbourne?',
    'a' => 'No. You can contact our Melbourne fiction ghostwriting team with a full outline, a rough idea, or even just the beginning of a story concept. We help shape your idea into a clear structure before the writing begins.',
  ),
  1 =>
  array (
    'q' => 'How long does a fiction ghostwriting project take in Melbourne?',
    'a' => 'The timeline depends on the length, genre, and complexity of your novel. Most full-length fiction ghostwriting projects take a few months from outline to final draft. Once we understand your story, we will give you a realistic Melbourne-based project timeline.',
  ),
  2 =>
  array (
    'q' => 'Can a Melbourne children’s fiction ghostwriter write in my personal voice?',
    'a' => 'Yes. Our fiction ghostwriters work closely with you to understand your tone, style, characters, and storytelling preferences. The goal is to make the finished manuscript feel natural, personal, and true to your voice.',
  ),
  3 =>
  array (
    'q' => 'Can I hire Melbourne fiction ghostwriters online from anywhere in Australia?',
    'a' => 'Yes. Although our fiction ghostwriting services are targeted towards authors in Melbourne, we also work with writers across Australia through phone calls, video meetings, and email. You do not need to be based in Melbourne to start your project with us.',
  ),
  4 =>
  array (
    'q' => 'Who owns the rights to my ghostwritten fiction manuscript?',
    'a' => 'You do. Once your fiction ghostwriting project is complete and paid for, the finished manuscript belongs to you. You keep full ownership of your story, characters, and final book.',
  ),
  5 =>
  array (
    'q' => 'What fiction genres do your Melbourne children’s ghostwriters write?',
    'a' => 'Our Melbourne fiction ghostwriters work across many genres, including thriller, romance, fantasy, drama, action, mystery, literary fiction, and contemporary fiction. Once we know your genre, we can match you with a writer suited to your story.',
  ),
  6 =>
  array (
    'q' => 'Can I request revisions during my fiction ghostwriting project?',
    'a' => 'Yes. Revisions are included as part of our fiction ghostwriting process. We build feedback stages into the project so you can review the manuscript, request changes, and make sure the final draft reflects the story you had in mind.',
  ),
  7 =>
  array (
    'q' => 'Is my story kept confidential when working with a Melbourne ghostwriter?',
    'a' => 'Yes. Your story, ideas, and identity are treated with complete confidentiality. If needed, we can also put a confidentiality agreement in place before your Melbourne fiction ghostwriting project begins.',
  ),
);

/* City LocalBusiness schema (see includes/header.php). streetAddress omitted
   until we have a Melbourne address. */
$location_business = [
    'locality'   => 'Melbourne',
    'region'     => 'VIC',
    'postalCode' => '3000',
    'country'    => 'AU',
];

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Fiction Ghostwriter</div>
      <h1>Your Imagination, Our Words: Melbourne's <em>Children's Fiction Ghostwriting</em> Service</h1>
      <p class="lead">You have a story in your head. Maybe it has been there for years. A plot, a character, a world that feels real to you, even if it is not on paper yet.</p>
      <p class="lead">Not everyone has the time or the writing skill to turn that idea into a full novel. That is where we come in.</p>
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
      <!-- <h2>We Handle The Writing. You Keep The Idea, The Credit, And The Finished Book.</h2> -->
      <p>Purple Giraffe Press works with people across Melbourne who want their fiction written properly, from the first chapter to the last page. We handle the writing. You keep the idea, the credit, and the finished book.</p>
      <p>Whether you are working on a crime thriller, a family drama, a romance, or a fantasy series, our team can help you get it done. We have been doing ghostwriting fiction in Melbourne for authors, business owners, and first-time writers who just want their story told well.</p>
      <p>Some clients come to us with a single idea and nothing else written down. Others already have a rough draft sitting in a folder, half finished and stuck. Both are fine starting points. We meet you where you are and build from there.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/ghost-writing-fold.webp" alt="Children's fiction ghostwriter in Melbourne at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - GHOSTWRITING SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Children’s Fiction Ghostwriting Services in Melbourne Built Around Your Story</h2>
    <p style="margin:14px auto 0;">Our fiction ghostwriting service covers every stage of writing a novel. You do not need a finished outline or even a full plot. You just need the idea.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Story Development</h3>
        <p>We sit down with you and talk through your idea. We ask questions about your characters, your setting, and where you want the story to go. From there, we build a clear outline before any writing starts.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path></svg></div>
        <h3>Full Manuscript Writing</h3>
        <p>Once the outline is approved, we write the full manuscript. This includes dialogue, pacing, description, and structure. We match your voice and tone as closely as we can, so the finished book still feels like it came from you.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path></svg></div>
        <h3>Genre Specific Writing</h3>
        <p>Different genres need different skills. A slow, emotional family saga reads nothing like a fast-paced thriller. Our writers work across many genres, and we also offer action fiction ghostwriters in Melbourne for clients who want fast-paced plots, strong stakes, and tight pacing throughout.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path></svg></div>
        <h3>Editing and Polishing</h3>
        <p>After the first draft, we go back through the manuscript to tighten the writing, fix pacing issues, and check for consistency. This step makes sure the book reads smoothly from start to finish.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Series and Sequel Planning</h3>
        <p>If you are planning more than one book, we can help map out a series so each book connects properly and no plot threads get lost along the way.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle></svg></div>
        <h3>Cover Concept and Blurb Support</h3>
        <p>Once your manuscript is done, you still need a way to describe it to readers. We can help draft a back cover blurb and talk through cover concepts, so your finished book is ready to publish, not just ready to read.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/premium-nonfiction-services.webp" alt="The Melbourne storytellers our children's fiction ghostwriters help" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who Our Melbourne Children's Fiction Ghostwriters Help</h2>
      <p>We work with a wide range of people who want a novel written but do not want to do the writing themselves, or simply do not have the time to sit down and finish it alone. This includes:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors with a strong idea but no writing background</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Business owners who want a fiction book to build their profile</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Aspiring novelists who are short on time</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>People with a personal story they want to turn into a fictional novel</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers who have started a manuscript but got stuck partway through</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Anyone who wants a professional to handle the heavy lifting of writing</span></li>
      </ul>
      <p>You do not need any writing experience to work with us. You just need your idea and a willingness to give us feedback along the way.</p>
    </div>
  </div>
</section>

<!-- 6 - HOW TO CHOOSE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Choose the Best Children’s Fiction Ghostwriter in Melbourne</h2>
      <p>Fiction ghostwriting is a personal thing. You are handing someone your idea and trusting them to do it justice. So it makes sense to be careful about who you choose.</p>
      <p>Here is what to look for when you are trying to find the best fiction ghostwriter in Melbourne for your project:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A clear process, from first chat to final draft</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writing samples that show real range across genres</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Honest answers about timelines and cost</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A contract that protects your ownership of the finished work</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Someone who listens to your idea instead of pushing their own</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Clear communication throughout the project, not just at the start</span></li>
      </ul>
      <p>At Purple Giraffe Press, we are upfront about all of this from the first conversation. No surprises, no vague promises.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/what-to-look-for.webp" alt="Choosing the best children's fiction ghostwriter in Melbourne" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY PROFESSIONAL GHOSTWRITING MAKES YOUR NOVEL STRONGER -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Children’s Fiction Ghostwriting Can Make Your Novel Stronger</h2>
  </div>
  <div class="container narrow center">
    <p>Writing a novel is harder than most people expect. A good story needs more than just an idea. It needs structure, pacing, character growth, and a voice that stays consistent for eighty thousand words or more.</p>
    <p style="margin-top:14px;">This is why professional fiction ghostwriting in Melbourne exists. Many people have brilliant ideas but do not have the time, training, or confidence to turn them into a full-length novel. A skilled ghostwriter can take that raw idea and shape it into something readers will actually want to finish.</p>
    <p style="margin-top:14px;">Some of the specific challenges a good ghostwriter needs to manage include:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Keeping the plot consistent across many chapters</li>
      <li>Writing dialogue that sounds natural for each character</li>
      <li>Balancing description with pacing, so the story does not drag</li>
      <li>Matching the tone the client wants, whether that is dark, light, funny, or serious</li>
      <li>Avoiding plot holes and continuity mistakes</li>
      <li>Building toward an ending that actually pays off the story</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>Getting all of this right takes practice. It is not something most people can do well on their first attempt, which is exactly why so many writers choose to bring in outside help.</p>
    <p style="margin-top:14px;">There is also the simple issue of time. Writing a full-length novel alongside a job, a business, or a family is hard. Most first-time writers underestimate how long it takes, then lose momentum halfway through. Bringing in a ghostwriter means the book actually gets finished, instead of sitting as a half-written file for years.</p>
  </div>
</section>

<!-- 8 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Melbourne Children’s Fiction Ghostwriting Process: From Idea to Final Manuscript</h2>
    <p style="margin:14px auto 0;">We keep our process simple and clear, so you always know what is happening with your book.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Send Us Your Idea</h3></div>
        <div class="svc-step-body"><p>Tell us about your story. This can be a full outline, a rough idea, or just a few notes scribbled on your phone. There is no wrong way to start, and no idea is too rough to bring to us.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Quote</h3></div>
        <div class="svc-step-body"><p>We look at the scope of your project, including length, genre, and complexity, then give you a clear quote before any writing begins. You will know the cost upfront, with nothing hidden.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Outline and Approval</h3></div>
        <div class="svc-step-body"><p>We build a full outline of your novel and send it to you for approval. This is your chance to adjust the plot, add in details, or change direction before we start writing a single chapter.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>We Write the Manuscript</h3></div>
        <div class="svc-step-body"><p>Once the outline is locked in, we start writing. We usually deliver the manuscript in sections, so you can read as we go rather than waiting months for a finished file to land in your inbox.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Review and Revisions</h3></div>
        <div class="svc-step-body"><p>You read through each section and let us know what you think. We make changes based on your feedback until the story matches your vision, not just ours.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Final Polish and Delivery</h3></div>
        <div class="svc-step-body"><p>Once the full manuscript is approved, we do a final edit for pacing, grammar, and consistency, then deliver your finished novel, ready for you to publish or share as you choose.</p></div>
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

<!-- 10 - BENEFITS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Benefits of Hiring a Specialist Children’s Fiction Ghostwriter in Melbourne</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Save time:</strong> Writing a novel can take years on your own, especially alongside a job or family. A dedicated writer can get it done in a fraction of that time.</li>
      <li><strong>Get a stronger story:</strong> Experienced writers know how to structure a plot, build tension, and pace a novel so it actually holds together from start to finish.</li>
      <li><strong>Keep full ownership:</strong> The finished manuscript belongs to you, and your name goes on the cover if that is what you want.</li>
      <li><strong>Avoid the blank page problem:</strong> You do not need to know how to start a chapter, build a scene, or fix a plot hole. We handle that part.</li>
      <li><strong>Work at your own pace:</strong> You give feedback when it suits you, not on a rigid daily schedule, and you stay involved as much or as little as you like.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Melbourne Authors Choose <em>Purple Giraffe Press</em> for Children’s Fiction Ghostwriting</h2>
      <p>If you are looking for a fiction ghostwriter for hire in Melbourne who takes your project seriously, we would love to hear about your story.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in fiction</h3><p>We do not spread ourselves across every type of writing. Fiction is our focus, so we understand pacing, character, and story structure properly, not just grammar and spelling.</p></article>
      <article><span>✓</span><h3>Clear pricing from the start</h3><p>You get a quote before we begin, so there are no surprise costs partway through your project.</p></article>
      <article><span>✓</span><h3>Based in Australia</h3><p>We understand Australian English, local references, and the expectations of Australian readers, so your book will not sound out of place.</p></article>
      <article><span>✓</span><h3>We treat your story with care</h3><p>Your idea matters to us. We do not rush the process or cut corners to save time, even under a tight deadline.</p></article>
      <article><span>✓</span><h3>Simple communication</h3><p>You will always know what stage your book is at and what happens next, without having to chase us for updates.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, itemised quote for a Melbourne children's fiction ghostwriter" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does a Children’s Fiction Ghostwriter Cost in Melbourne?</h2>
      <p>Pricing for a ghostwritten novel depends on a few things, including the length of the book, the genre, how much planning is already done, and how many rounds of revision you need.</p>
      <p>We know that cost is a real concern for many writers, so we aim to offer an affordable fiction ghostwriting service in Melbourne without cutting corners on quality. Every project gets a clear, upfront quote before any writing starts, so you know exactly what you are paying for.</p>
      <p>We are happy to talk through your budget and figure out what is realistic for your project, whether you are writing a short novella or a full-length novel. If your budget is tight, tell us early. We can often adjust the scope, the length, or the number of revision rounds to fit what you can spend, without cutting the quality of the writing itself.</p>
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
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Hire a Melbourne Fiction Ghostwriter for <em>Your Novel?</em></h2>
      <p>You do not need a finished manuscript or even a full outline to get started. You just need the idea and a bit of time to talk it through with us.</p>
      <p>Get in touch with Purple Giraffe Press today, and let us help you turn your fiction idea into a finished novel you can be proud of.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to ghostwrite your fiction novel" loading="lazy" decoding="async">
    </div>
  </div>
</section>

<!-- 17 - FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- good to know</p>
      <h2>Frequently asked <em>questions.</em></h2>
      <p>Honest answers to the questions Melbourne authors ask us most. If yours is not here, a quick consultation will cover it.</p>
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

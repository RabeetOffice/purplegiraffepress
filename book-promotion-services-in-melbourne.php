<?php
include 'includes/config.php';

$page_title       = 'Melbourne Book Promotion Services | Sell More Books';
$page_description = 'Get real results with book promotion services in Melbourne. We help authors reach readers, build a following and get their book seen where it matters.';
$canonical_path   = 'book-promotion-services-in-melbourne.php';
$breadcrumb_name  = 'Book Marketing in Melbourne';
$breadcrumbs = [
    ['name' => 'Home',          'url' => page_url('index.php')],
    ['name' => 'Locations',     'url' => page_url('locations/')],
    ['name' => 'Melbourne',     'url' => page_url('locations/melbourne.php')],
    ['name' => 'Book Marketing', 'url' => page_url($canonical_path)],
];

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you only work with children’s books in Melbourne?',
    'a' => 'Children’s books are our main focus, but we also support other genres, including fiction and non-fiction titles from Melbourne-based authors.',
  ),
  1 =>
  array (
    'q' => 'I have not published yet. Can you still help with book marketing in Melbourne?',
    'a' => 'Yes. We can help Melbourne authors plan their marketing before launch, so they are ready to promote their book from day one instead of starting from scratch after publication.',
  ),
  2 =>
  array (
    'q' => 'Do you guarantee a certain number of book sales in Melbourne?',
    'a' => 'No one can honestly guarantee sales or bestseller status. What we can guarantee is a clear Melbourne-focused book marketing plan, honest communication, and real effort behind every campaign.',
  ),
  3 =>
  array (
    'q' => 'Can you help Melbourne authors with reviews on Amazon?',
    'a' => 'Yes. Review outreach is part of our Kindle and Amazon-focused work for Melbourne authors, since reviews play a big part in how books are ranked and discovered.',
  ),
  4 =>
  array (
    'q' => 'How long does a typical book marketing campaign run in Melbourne?',
    'a' => 'This depends on your goals. Some Melbourne authors want a short launch push over a few weeks. Others prefer ongoing support over several months. We will talk through what suits your book.',
  ),
  5 =>
  array (
    'q' => 'Do you only work with authors in Melbourne?',
    'a' => 'Most of our clients are based in Melbourne or Victoria, but we are happy to talk to authors from other parts of Australia too.',
  ),
  6 =>
  array (
    'q' => 'What information do Melbourne authors need to get started?',
    'a' => 'Just your book details, a link to your listing if it is live, and a sense of what you are hoping to achieve. From there, we can put together a Melbourne-focused book marketing plan and a quote.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="locations/">Locations</a> / <a href="locations/melbourne.php">Melbourne</a> / Book Marketing</div>
      <h1><em>Book Promotion Services</em> in Melbourne That Get Your Book <strong>Noticed</strong></h1>
      <p class="lead">Writing a book takes months, sometimes years. Getting people to actually read it takes something different. It takes a plan, a bit of strategy, and someone who understands how books actually sell.</p>
      <p class="lead">At Purple Giraffe Press, we help authors and publishers in Melbourne get their books in front of the right readers. Whether you have written a picture book, a junior fiction series, or a self-published title on Amazon, we can help you build a promotion plan that fits your book and your budget.</p>
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
      <h2>Give Your Book a Stronger Launch With Melbourne Book Marketing Support</h2>
      <p>We are not a huge marketing agency that treats every book the same way. We work closely with each author, so the plan we build actually matches the story you have written and the readers you are trying to reach.</p>
      <p>Melbourne has a strong reading culture, with local bookshops, school communities, and writers' groups that genuinely support new authors. That is a real advantage if you know how to use it. A lot of authors simply do not have the time to chase this on top of writing, editing, and everything else that comes with getting a book out into the world. That is where we come in.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/marketing-publicity.webp" alt="Book promotion and marketing for Melbourne authors at Purple Giraffe Press" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - MARKETING SERVICES (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>Book Promotion and Marketing Services We Offer in Melbourne</h2>
    <p style="margin:14px auto 0;">Every book is different, so we build our support around what your book actually needs. Some authors only need help in one area, like getting reviews on Amazon. Others want a fuller campaign that covers social media, local outreach, and their online presence all at once. Here is how we break it down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Children's Book Promotion</h3>
        <p>Picture books and junior fiction need a different approach from adult titles. Parents, teachers, librarians, and gift buyers all look for different things. Our children's book promotion services in Melbourne cover social media content, school and library outreach, review requests, and simple campaigns that introduce your book to the people who buy books for kids.</p>
        <p>We also think about the small details that matter for this age group, like how your book cover reads at a small size online, whether your book description speaks to parents as well as children, and which age group or reading level your book actually suits. Getting these details right makes every other part of your promotion work harder for you.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Kindle and Amazon Promotion</h3>
        <p>If your book is on Kindle or listed on Amazon, visibility matters more than almost anything else. Our Kindle book promotion services in Melbourne include keyword and category checks, listing improvements, review outreach, and short promotional pushes timed around your launch or a relaunch. We also offer Amazon children's book promotion services in Melbourne for authors who want their picture books or junior titles to show up higher in search results and category rankings on the platform.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Author Website and Online Presence</h3>
        <p>A lot of readers will look you up before they buy your book. We can help set up or tidy up an author page, social profiles, and a simple online home for your work, so your online book promotion services in Melbourne actually have somewhere solid to point people towards.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="3" width="6" height="11" rx="3"></rect><path d="M5 11a7 7 0 0 0 14 0M12 18v3"></path></svg></div>
        <h3>Local and Media Outreach</h3>
        <p>We also help with the practical side of promotion in Melbourne itself. That includes contacting local bookshops, arranging school visits or story time sessions, reaching out to local press, and finding community events where your book fits naturally.</p>
        <p>If you are launching a picture book, a small local launch event can also make a real difference. It gives you a reason to invite your community, get some photos, and create content you can use online afterwards. We can help you plan one of these if it suits your book.</p>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Ongoing Marketing Support</h3>
        <p>Some authors want a one-off launch push. Others want steady support over several months. We offer both, and we are upfront about what each option involves before you commit to anything.</p>
        <p>A launch week can generate a burst of attention, but book sales are often a slower, steadier game. Many authors find that a mix of an initial push, followed by smaller ongoing activity, works better than one big campaign that fades after a fortnight.</p>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE HELP: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="assets/images/custom-illustrations.webp" alt="Authors and publishers we help promote books across Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Authors and Publishers We Help Across Melbourne</h2>
      <p>We work with a wide range of authors and small publishers, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>First-time authors publishing their first children's book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors selling on Amazon or Kindle</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small independent publishers with a handful of titles</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors relaunching an older book that never got the attention it deserved</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Writers who have finished a manuscript and want a plan before they publish</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators and author-illustrator teams promoting picture books</span></li>
      </ul>
      <p>If you fall into one of these groups, or somewhere close to it, we can likely help. If you are not sure where you fit, get in touch and tell us about your book. We will be honest with you if we think another kind of support suits you better.</p>
    </div>
  </div>
</section>

<!-- 6 - HOW TO PICK: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Pick the Best Book Promotion Services in Melbourne</h2>
      <p>There are a lot of marketing options out there, and not all of them are worth your money. Here are a few things worth checking before you choose someone to help promote your book.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Do they understand your genre?</strong> A children's book needs a different plan from a thriller or a business book.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Are they upfront about pricing?</strong> You should know roughly what you are paying for before any work begins.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Do they explain their plan in plain language?</strong> If you cannot understand what they are doing for you, that is a warning sign.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Do they set realistic expectations?</strong> No one can promise a bestseller. Be wary of anyone who does.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span><strong>Do they focus on your actual goals?</strong> Some authors want sales. Others want reviews, or visibility in schools, or a stronger online presence. A good marketing partner asks what you want first.</span></li>
      </ul>
      <p>We built our approach around these same questions because we think every author deserves that kind of honesty.</p>
    </div>
    <figure class="svc-media reveal"><img src="assets/images/about-us.webp" alt="Comparing book promotion services in Melbourne" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY MARKETING MATTERS -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Professional Book Marketing Matters for Melbourne Authors</h2>
  </div>
  <div class="container narrow center">
    <p>A lot of first-time authors assume that once a book is finished or published, the hard part is over. In reality, marketing is often the part that decides whether a book finds readers at all.</p>
    <p style="margin-top:14px;">Here is why it matters so much:</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Bookshops and platforms are crowded.</strong> Thousands of new titles appear every month, and readers cannot find your book if it is buried in search results or sitting quietly on a shelf.</li>
      <li><strong>Reviews build trust.</strong> New readers often decide based on reviews, so getting early, honest reviews matters more than most authors realise.</li>
      <li><strong>Children's books rely on adult buyers.</strong> Parents, grandparents, teachers, and librarians make the purchase, even though the book is written for a child. Your marketing needs to speak to them too.</li>
      <li><strong>Momentum fades quickly.</strong> A launch week burst of attention can disappear fast if there is no follow-up plan behind it.</li>
      <li><strong>Amazon and Kindle rankings reward activity.</strong> Sales, reviews, and search visibility all feed into each other, so a small early push can make a real difference to long-term visibility.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>This is exactly the gap we try to fill for authors who write great books but do not have the time, tools, or experience to promote them well.</p>
  </div>
</section>

<!-- 8 - PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Melbourne Book Marketing Process, Step by Step</h2>
    <p style="margin:14px auto 0;">We keep our process simple, so you always know what stage you are at.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Tell Us About Your Book</h3></div>
        <div class="svc-step-body"><p>Send us details about your book, your goals, and where it is available. This might be a link to your Amazon listing, a copy of the book, or just a description if it has not launched yet.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Clear Plan and Quote</h3></div>
        <div class="svc-step-body"><p>We look at your book and your goals, then put together a promotion plan with a clear quote. You will know exactly what is included before you say yes.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Get to Work</h3></div>
        <div class="svc-step-body"><p>Once you approve the plan, we start on the agreed activities. This might include content creation, outreach, listing improvements, or a mix of everything, depending on what we agreed.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Regular Check-Ins</h3></div>
        <div class="svc-step-body"><p>We keep you updated as work progresses, so you are never left wondering what is happening with your promotion.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Review and Next Steps</h3></div>
        <div class="svc-step-body"><p>At the end of the agreed period, we review what worked, share any results we can measure, and talk through whether ongoing support makes sense for your book.</p></div>
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
    <h2>Benefits of Working With a Melbourne Book Marketing Specialist</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>Save time.</strong> You get to keep writing, while we handle the promotion side.</li>
      <li><strong>Avoid costly mistakes.</strong> Marketing your own book without experience can waste money on things that do not work.</li>
      <li><strong>Get a plan built for your genre.</strong> Children's books, fiction, and non-fiction all need different approaches.</li>
      <li><strong>Access practical local knowledge.</strong> We understand the Melbourne book scene, from local bookshops to community events.</li>
      <li><strong>Stay in control.</strong> You approve the plan before anything happens, so there are no surprises.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Choose <em>Purple Giraffe Press</em> for Book Marketing in Melbourne</h2>
      <p>If you are looking for book promotion services for authors in Melbourne who will actually take the time to understand your book, we would love to help.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise, we do not generalise</h3><p>Our background is in children's books, so we understand what makes them sell.</p></article>
      <article><span>✓</span><h3>We are upfront about pricing</h3><p>You will always know what you are paying for before we start.</p></article>
      <article><span>✓</span><h3>We are based in Australia</h3><p>That means local knowledge, local hours, and no confusing time zone delays.</p></article>
      <article><span>✓</span><h3>We treat every book with care</h3><p>Your book is not just a product to us. It matters to you, so it matters to us too.</p></article>
      <article><span>✓</span><h3>We keep things simple</h3><p>No jargon, no confusing reports full of numbers that mean nothing. Just clear updates in plain language.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear, upfront quote for book marketing in Melbourne" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>What Does Book Marketing Cost?</h2>
      <p>Pricing depends on what your book needs. A small social media push for a single title costs less than an ongoing campaign that includes outreach, listing work, and review building over several months.</p>
      <p>We do not believe in one-size-fits-all pricing because no two books need the same plan. Once we understand your book and your goals, we will put together a clear quote, so you know the cost before anything begins.</p>
      <p>If budget is a concern, tell us. We can often scale a plan up or down to suit what you have available, which is part of why we are known for affordable children's book promotion services in Melbourne that still get real results.</p>
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
      <h2>Ready to Promote Your Book in Melbourne and <em>Reach More Readers?</em></h2>
      <p>Your book took real work to write. It deserves a proper chance to be found, read, and loved. Get in touch with Purple Giraffe Press today, and let us build a promotion plan that fits your book, your budget, and your goals.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to promote your children's book" loading="lazy" decoding="async">
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

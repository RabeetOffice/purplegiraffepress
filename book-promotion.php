<?php
include 'includes/config.php';

$page_title       = 'Children’s Book Promotion Services That Get Results';
$page_description = 'Get your children’s book seen and loved. Purple Giraffe Press offers honest, affordable promotion for authors on Amazon, Kindle, and beyond.';
$canonical_path   = 'book-promotion.php';

/* The FAQ content powers both the accordion below and the FAQPage schema in <head>. */
$page_faqs = array (
  0 =>
  array (
    'q' => 'Do you work with authors outside Australia?',
    'a' => 'Yes. While we are based in Australia and understand the local market well, we work with children’s authors from other countries too, including those selling mainly on Amazon and Kindle.',
  ),
  1 =>
  array (
    'q' => 'Can you guarantee my book will become a bestseller?',
    'a' => 'No, and you should be careful of anyone who promises this. We can build a strong, honest promotion plan, but sales depend on many factors, including the book itself and the market at the time.',
  ),
  2 =>
  array (
    'q' => 'Do you write fake reviews or buy fake engagement?',
    'a' => 'No. We only help you reach real readers and real reviewers. Fake reviews can get your book removed from Amazon, so we avoid them completely.',
  ),
  3 =>
  array (
    'q' => 'My book is only on Kindle. Can you still help?',
    'a' => 'Yes. Many of our clients are Kindle-only authors. We can work on your Kindle listing, categories, pricing strategy, and outreach to Kindle readers.',
  ),
  4 =>
  array (
    'q' => 'How long does a promotion campaign take to show results?',
    'a' => 'It varies by book and plan. Some changes, like a stronger listing, can help within weeks. Building reviews and steady sales usually takes longer, often a few months of consistent work.',
  ),
  5 =>
  array (
    'q' => 'Do I need a big marketing budget to get started?',
    'a' => 'No. We build plans to suit different budgets, and some services, like listing optimisation, can be done as a single, smaller job rather than a large ongoing campaign.',
  ),
  6 =>
  array (
    'q' => 'What age groups do you work with?',
    'a' => 'We work across the children’s range, from picture books for young children through to early chapter books and middle grade titles.',
  ),
);

include 'includes/header.php';
?>

<!-- 1 - HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Book Promotion</div>
      <h1>Children's <em>Book Promotion Services</em> That Turn Stories Into <strong>Bestsellers</strong></h1>
      <p class="lead">Writing a children’s book takes months, sometimes years. Then it goes online, and nothing happens. No sales. No reviews. No one is talking about it.</p>
      <p class="lead">This is one of the most common problems authors face. It is not because the book is bad. It is because promotion is a different skill from writing, and most authors are never taught it.</p>
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
      <p class="eyebrow script-mark">- now let’s get it read</p>
      <h2>You Wrote a Great Book. Now Let’s Get It Read.</h2>
      <p>At Purple Giraffe Press, we work with children’s authors and illustrators across Australia to help their books get in front of the right readers. We understand picture books, chapter books, and early readers, and we know what parents, teachers, and librarians look for before they buy.</p>
      <p>If you are searching for children's book promotion services that actually understand the children’s market, you are in the right place. We work with authors based in Sydney, Melbourne, Brisbane, Perth, and every state and territory, offering children's book promotion services Australia-wide for authors who work with us mostly online.</p>
      <p>You do not need to be a big-name author, and you do not need a huge marketing budget. You just need a plan that fits your book. That is what we help you build, step by step, without confusing jargon or empty promises.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Start Your Book &rarr;</a></div>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="Children's book promotion that gets books in front of the right readers" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 4 - WHAT WE OFFER (feature cards) -->
<section class="section section-soft">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- what we offer</p>
    <h2>What We Offer: Our Full Range of Promotion Services</h2>
    <p style="margin:14px auto 0;">Book promotion is not one thing. It is a mix of listing work, outreach, content, and small campaigns that build up over time. Some authors need everything on this list. Others just need one or two services fixed properly. We start by figuring out what your book actually needs, rather than selling you a package you do not need. Here is how we break it down.</p>
  </div>
  <div class="container">
    <div class="feature-grid">
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Amazon and Kindle Listing Optimisation</h3>
        <div class="fc-body">
          <p>Your book’s listing is often the first thing a reader or parent sees. We check your title, subtitle, description, categories, and keywords, then rewrite what needs fixing. This falls under Amazon children's book promotion services and covers both the print and Kindle versions of your book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path></svg></div>
        <h3>Kindle Promotion Campaigns</h3>
        <div class="fc-body">
          <p>If your book is on Kindle, we can run Kindle book promotion services that include price promotion timing, Kindle category placement, and coordinated pushes during free or discounted days. We also help you understand Kindle Unlimited and how page reads affect your ranking.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path></svg></div>
        <h3>Review Building Support</h3>
        <div class="fc-body">
          <p>Reviews help readers trust a book they have never seen before. We help you build a genuine plan to reach reviewers, bloggers and early readers who are a real fit for children’s books. We never buy or fake reviews. We only help you find real people who want to read your book.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path></svg></div>
        <h3>Social Media and Content Support</h3>
        <div class="fc-body">
          <p>Many parents and teachers discover books through social media, not through search. We can create simple, warm content around your book, including sample pages, author posts, and launch graphics, so your book has a presence beyond the bookshop shelf.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path></svg></div>
        <h3>Email and Newsletter Outreach</h3>
        <div class="fc-body">
          <p>If you have a mailing list or want to start one, we help you write launch emails and reader updates that do not feel pushy. A short, friendly email often does more than a big ad spend.</p>
        </div>
      </article>
      <article class="feature-card reveal">
        <div class="icon" aria-hidden="true"><svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="3" width="6" height="11" rx="3"></rect><path d="M5 11a7 7 0 0 0 14 0M12 18v3"></path></svg></div>
        <h3>Local and Online Media Outreach</h3>
        <div class="fc-body">
          <p>We reach out to book bloggers, parenting websites, local newspapers, and podcasts on your behalf, pitching your story in a way that fits their audience. This is part of our wider book promotion and marketing services and works well alongside listing and review work.</p>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5 - WHO WE WORK WITH: LEFT IMAGE / RIGHT TEXT -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1587616211892-f743fcca64f9?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="Children's authors at every stage that Purple Giraffe Press works with" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- who we help</p>
      <h2>Who We Work With: Authors at Every Stage</h2>
      <p>We work with a wide range of children’s authors, including:</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Self-published authors releasing their first picture book</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors with a backlist of books that need a fresh push</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Illustrators who write and illustrate their own stories</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Small publishers with a children’s list</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors re-launching a book after a cover or format change.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Authors preparing for a school visit, book week, or local launch event</span></li>
      </ul>
      <p>Whatever stage you are at, we can build a promotion plan around your book, your budget, and your goals. Some clients come to us before their book is even published, wanting help with pre-launch buzz. Others come to us years after publication, once they realise their book has quietly stopped selling and needs a fresh look.</p>
    </div>
  </div>
</section>

<!-- 6 - HOW TO SPOT A GOOD SERVICE: LEFT TEXT / RIGHT IMAGE -->
<section class="section figma-cream">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what to look for</p>
      <h2>How to Tell If a Book Promotion Service Is Actually Good</h2>
      <p>There are a lot of promotional services online, and not all of them are worth your money. Some focus on flashy numbers that look good on paper but do not lead to real readers. Before you choose one, it helps to know what a genuinely useful service looks like.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>They explain what they are doing and why, in plain language.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>They do not promise guaranteed bestseller status or instant sales.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>They understand the difference between adult fiction marketing and children’s book marketing.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>They focus on real readers, not fake numbers or bot traffic.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>They are upfront about pricing before any work starts.</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>They give you a clear plan, not just a list of services.</span></li>
      </ul>
      <p>If a company cannot explain its process simply, that is usually a warning sign.</p>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&amp;fit=crop&amp;w=1100&amp;q=72" alt="Comparing children's book promotion services before choosing one" loading="lazy" decoding="async"></figure>
  </div>
</section>

<!-- 7 - WHY PROMOTION MATTERS (list) -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- why it matters</p>
    <h2>Why Promotion Matters More for Children’s Books</h2>
  </div>
  <div class="container narrow center">
    <p>Children’s books are not sold the same way as adult books. A parent buying a picture book is often buying on trust, based on the cover, the blurb, a recommendation, or a school reading list. This changes how promotion should work.</p>
  </div>
  <div class="container">
    <ul class="content-list">
      <li>Parents want to know a book is safe, age-appropriate, and well-made before they buy it</li>
      <li>Teachers and librarians look for books with a clear purpose or theme.</li>
      <li>Reviews from other parents carry more weight than reviews from strangers.</li>
      <li>Series and character-based books need consistent branding across every listing.</li>
      <li>Illustration quality needs to show clearly in thumbnails and previews, not just the text.</li>
    </ul>
  </div>
  <div class="container narrow center" style="margin-top:34px;">
    <p>A promotion plan that ignores these details will struggle, no matter how good the book is. This is why generic online book promotion services often fall short for children’s authors. They are built for a different kind of reader, usually adult fiction readers who buy on impulse rather than parents who buy on trust.</p>
    <p style="margin-top:14px;">Children’s books also tend to sell over a longer period than adult books. A picture book might sell steadily for years, especially if it finds its way onto school reading lists or into libraries. This means promotion is not just about a big launch week. It is about building a solid foundation that keeps working long after the initial excitement fades.</p>
  </div>
</section>

<!-- 8 - OUR PROCESS (steps) -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Our Process, Step by Step: How It All Works</h2>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Tell Us About Your Book</h3></div>
        <div class="svc-step-body"><p>Send us your book details, including the age group, format, and where it is currently listed. We also ask what you have already tried, so we do not repeat work.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Get a Clear Plan and Quote</h3></div>
        <div class="svc-step-body"><p>We put together a promotion plan that fits your book and your budget, with a straightforward quote. There is no pressure to buy more than you need.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>We Get to Work</h3></div>
        <div class="svc-step-body"><p>Depending on your plan, this may include listing updates, outreach, content creation, or a Kindle campaign. We keep you updated as work progresses.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Review and Adjust</h3></div>
        <div class="svc-step-body"><p>We check in with you to see what is working and what needs a small change. Promotion is rarely a one-shot job. Small adjustments often make the biggest difference.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Ongoing Support</h3></div>
        <div class="svc-step-body"><p>Some authors want a single campaign. Others want ongoing support around each new release or seasonal push. We work either way, based on what suits you.</p></div>
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

<!-- 10 - BENEFITS OF A SPECIALIST -->
<section class="section section-white">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- the payoff</p>
    <h2>Benefits of Working With a Children’s Book Specialist</h2>
  </div>
  <div class="container">
    <ul class="content-list">
      <li><strong>You save time.</strong> Instead of guessing what to try next, you get a plan built for your genre.</li>
      <li><strong>You avoid costly mistakes.</strong> Wrong categories, weak descriptions, and mismatched keywords quietly cost sales every day they stay wrong.</li>
      <li><strong>You reach the right readers.</strong> Parents, teachers, and gift buyers are a very specific audience, and general marketing often misses them.</li>
      <li><strong>You get honest advice.</strong> We tell you what is realistic for your book, not just what sounds good.</li>
      <li><strong>You build something lasting.</strong> Good listings, real reviews, and steady content keep working long after a single campaign ends.</li>
      <li><strong>You get support that fits your book, not a generic template.</strong> A rhyming picture book and a middle-grade adventure need different approaches, and we treat them that way.</li>
    </ul>
  </div>
</section>

<!-- 11 - WHY CHOOSE PURPLE GIRAFFE PRESS -->
<section class="section figma-lavender why-section">
  <div class="container why-layout">
    <div class="why-copy">
      <p class="eyebrow script-mark">- why choose us</p>
      <h2>Why Choose <em>Purple Giraffe Press</em> for Your Book</h2>
      <p>If you are comparing the best book promotion services for your genre, the biggest difference is usually whether the team actually understands children’s publishing. That is where we focus.</p>
      <div class="founder-mini">
        <img src="assets/images/mascot.webp" alt="Small Purple Giraffe Press mascot">
        <span><strong>The Purple Giraffe Press Team</strong><small>Australian Children’s Publisher</small></span>
      </div>
      <div class="button-row"><a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
    <div class="benefit-grid">
      <article><span>✓</span><h3>We specialise in children’s books, not everything</h3><p>We do not try to promote every genre. Children’s books are what we know, so our advice is specific, not generic.</p></article>
      <article><span>✓</span><h3>We are upfront about pricing</h3><p>You get a clear quote before any work begins, with no hidden extras added later.</p></article>
      <article><span>✓</span><h3>We are based in Australia</h3><p>We understand the local market, local schools, local bookshops, and how Australian parents shop for books, alongside the global Amazon and Kindle audience.</p></article>
      <article><span>✓</span><h3>We treat every book with care</h3><p>Whether it is your first picture book or your tenth chapter book, we take the time to understand the story before we promote it.</p></article>
      <article><span>✓</span><h3>We keep communication simple</h3><p>You will always know what we are doing, why we are doing it, and what it costs.</p></article>
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
    <figure class="svc-media reveal"><img src="assets/images/pricing.webp" alt="A clear quote for children's book promotion with no surprises" loading="lazy" decoding="async"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- pricing</p>
      <h2>How Much Does Children’s Book Promotion Cost?</h2>
      <p>Pricing depends on what your book needs. A simple listing review costs less than a full campaign with outreach, content, and ongoing support. Some authors only need a one-off fix. Others want a longer plan across several months.</p>
      <p>We know cost is a real concern for most authors, especially those self-funding their books. That is why we offer affordable children's book promotion services built around clear, single services you can add as needed, rather than one expensive bundle. You will always get a full quote before we start, so there are no surprises.</p>
      <p>We are also happy to talk through what to prioritise if your budget is tight. Sometimes a small fix, like a stronger book description or better categories, makes more difference than a large campaign. We will always tell you honestly where your money is best spent, even if that means recommending less work, not more.</p>
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
      <p class="eyebrow script-mark">- ready when you are</p>
      <h2>Ready to Get Your Book <em>in Front of Readers?</em></h2>
      <p>Your book deserves more than a quiet launch. If you want book promotion services for authors who understand children’s publishing, get in touch with Purple Giraffe Press today. Tell us about your book, and we will help you build a plan that fits your story, your readers, and your budget.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="assets/images/mascot.webp" alt="Purple Giraffe Press mascot ready to promote your children's book" loading="lazy" decoding="async">
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

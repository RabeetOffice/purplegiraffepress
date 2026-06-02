<?php
include 'includes/config.php';

$page_title       = 'Children\'s Book Printing Services | Purple Giraffe Press';
$page_description = 'Quality children\'s book printing: board books, paperback, and hardcover, with the right paper, sturdy binding, and a physical proof before your full run.';
$canonical_path   = 'childrens-book-printing.php';

/* The FAQ content below powers both the accordion on the page and the
   FAQPage schema emitted in the <head> by includes/header.php. */
$page_faqs = [
  ['q' => 'Can you print board books?', 'a' => 'Yes. We print board books, paperbacks, and hardcovers, and we will recommend the format that fits your story and reader age.'],
  ['q' => 'Do I get to see a proof first?', 'a' => 'Always. You approve a physical printed proof before we run the full quantity, so there are no surprises.'],
  ['q' => 'What is the minimum print run?', 'a' => 'We can arrange both short runs and larger quantities, and will recommend what fits your launch and budget.'],
  ['q' => 'Can you print in color throughout?', 'a' => 'Yes. Full color interiors are standard for picture books, and we tune the printing to keep your art warm and true.'],
  ['q' => 'Do you offer hardcover with a dust jacket?', 'a' => 'Yes. We print paperback, board books, and hardcovers with or without a jacket.'],
];

include 'includes/header.php';
?>

<!-- 1 · HERO WITH SIDE FORM -->
<section class="svc-hero">
  <div class="sparkles" aria-hidden="true"></div>
  <div class="container svc-hero-grid">
    <div class="svc-hero-copy">
      <div class="breadcrumbs"><a href="index.php">Home</a> / <a href="services.php">Services</a> / Children's Book Printing</div>
      <h1>Printing <em>built</em> for <strong>little hands</strong></h1>
      <p class="lead">Children's books get loved hard. We help you print on the right paper, with sturdy binding and rich color, and you approve a physical proof before any full run.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Start Your Book</a>
        <a class="btn btn-light" href="contact.php" data-quote-open>Get a Free Estimate</a>
      </div>
    </div>
    <div class="svc-hero-form reveal"><?php include 'includes/forms/contact-form.php'; ?></div>
  </div>
</section>

<!-- 2 · LOGO SLIDER -->
<?php include 'includes/logo-slider.php'; ?>

<!-- 3 · LEFT TEXT / RIGHT IMAGE -->
<section class="section section-white">
  <div class="container svc-split">
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- what it is</p>
      <h2>The format and finish your story deserves</h2>
      <p class="lead">A children's book is a physical object that gets carried, dropped, and read a hundred times. The paper, binding, and finish matter as much as the art on the page.</p>
      <p>We help you choose the right format, from board books for toddlers to hardcovers for gifting, and send a real printed proof before any full run.</p>
      <ul class="svc-points">
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Board, paperback, or hardcover guidance</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>Durable paper and binding for real use</span></li>
        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6 9 17l-5-5"/></svg><span>A physical proof before any full run</span></li>
      </ul>
    </div>
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?auto=format&fit=crop&w=1000&q=80" alt="Children's book printing at Purple Giraffe Press" loading="lazy"></figure>
  </div>
</section>

<!-- 4 · PORTFOLIO CAROUSEL (full width) -->
<section class="section figma-cream catalog-section">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- our catalog</p>
    <h2>Stories we have brought to life</h2>
  </div>
  <?php $portfolio_mode = 'marquee'; include 'includes/portfolio.php'; ?>
</section>

<!-- 5 · SIX STEPS -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- how it works</p>
    <h2>Your Children's Book Printing journey, step by step</h2>
    <p class="lead" style="margin:14px auto 0;">Here is exactly how your project moves from first hello to finished book, one clear step at a time.</p>
    <div class="svc-steps">
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">1</div><h3>Specify</h3></div>
        <div class="svc-step-body"><p>We choose the format, paper, and finish that suit your story and reader. Board, paperback, and hardcover each have their place. We weigh durability, feel, and budget together. The right choice protects both your art and your wallet.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">2</div><h3>Prepare files</h3></div>
        <div class="svc-step-body"><p>We check your files meet print requirements for colour and bleed. Catching issues now avoids costly reprints later. We confirm resolution, margins, and trim. Your files leave correct and print ready.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">3</div><h3>Proof</h3></div>
        <div class="svc-step-body"><p>A real physical proof of your book is produced. You see and feel the actual object, not a screen. Colour, paper, and binding can finally be judged in your hands. This is the moment surprises get caught.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">4</div><h3>Approve</h3></div>
        <div class="svc-step-body"><p>You review the printed sample and approve it before the run. Nothing prints in volume until you are happy. We note any final adjustments together. Your sign off protects the whole order.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">5</div><h3>Print</h3></div>
        <div class="svc-step-body"><p>We run the full order on quality stock with accurate colour. Your art stays warm and true to the proof. Binding is built to survive real use. The result is a book made to be loved hard.</p></div>
      </article>
      <article class="svc-step reveal">
        <div class="svc-step-head"><div class="num">6</div><h3>Fulfill</h3></div>
        <div class="svc-step-body"><p>Books are prepared for shipping or onward distribution. We make sure they are packed to arrive in great shape. You decide where the copies go. The finished books are ready to reach readers.</p></div>
      </article>
    </div>
  </div>
</section>

<!-- 6 · RIGHT TEXT / LEFT IMAGE -->
<section class="section section-white">
  <div class="container svc-split media-first">
    <figure class="svc-media reveal"><img src="https://images.unsplash.com/photo-1519682337058-a94d519337bc?auto=format&fit=crop&w=1000&q=80" alt="Purple Giraffe Press children's book printing" loading="lazy"></figure>
    <div class="svc-copy reveal">
      <p class="eyebrow script-mark">- why purple giraffe</p>
      <h2>Made to survive a thousand bedtimes</h2>
      <p class="lead">Children's books are handled hard. We help you choose paper, binding, and finish that hold up to daily love.</p>
      <p>You approve a real printed proof before the full run, so the book in your hands is the book you imagined.</p>
      <div class="button-row"><a class="btn btn-primary" href="contact.php" data-quote-open>Get a Free Estimate &rarr;</a></div>
    </div>
  </div>
</section>

<!-- PRINT SPEC · STANDARD BOOK SIZES -->
<section class="section section-white">
  <div class="container">
    <div class="print-section-head">
      <h2>Standard book sizes</h2>
      <p class="lead">Choosing the right trim size is the very first print decision you will make. It shapes illustration layout, production cost, shelf presence, and reader experience.</p>
    </div>
    <div class="print-grid cols-2">
      <article class="print-card reveal">
        <span class="print-badge">Most Popular</span>
        <h3>Standard Picture Book</h3>
        <div class="print-dims"><span class="in">8.5 × 8.5 in</span><span class="mm">216 × 216 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 24-40 pages</span><span class="print-chip age">👶 Ages 3-8</span></div>
        <p class="print-note">Industry standard for picture books on Amazon and in bookshops worldwide.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge gold">Premium</span>
        <h3>Large Square Picture Book</h3>
        <div class="print-dims"><span class="in">10 × 10 in</span><span class="mm">254 × 254 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 24-48 pages</span><span class="print-chip age">👶 Ages 3-8</span></div>
        <p class="print-note">Gives illustrators more canvas space, for a more premium, gift-book feel.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge sky">Unique</span>
        <h3>Landscape Picture Book</h3>
        <div class="print-dims"><span class="in">11 × 8.5 in</span><span class="mm">279 × 216 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 24-40 pages</span><span class="print-chip age">👶 Ages 2-6</span></div>
        <p class="print-note">The wide format lends itself to sweeping landscapes and action sequences.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge mint">Ages 0-3</span>
        <h3>Board Book</h3>
        <div class="print-dims"><span class="in">6 × 6 in</span><span class="mm">152 × 152 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 12-24 thick boards</span><span class="print-chip age">👶 Ages 0-3</span></div>
        <p class="print-note">Each page is a thick laminated board, roughly 3 to 5 mm thick. Completely chew-proof.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge mint">Ages 0-3</span>
        <h3>Classic Board Book</h3>
        <div class="print-dims"><span class="in">7 × 7 in</span><span class="mm">178 × 178 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 12-24 pages</span><span class="print-chip age">👶 Ages 0-3</span></div>
        <p class="print-note">The most common board book size seen in supermarkets and toy stores.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge peach">Ages 5-12</span>
        <h3>Early Reader / Chapter Book</h3>
        <div class="print-dims"><span class="in">6 × 9 in</span><span class="mm">152 × 229 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 48-200 pages</span><span class="print-chip age">👶 Ages 5-12</span></div>
        <p class="print-note">The standard trade paperback format, familiar from school library shelves.</p>
      </article>
      <article class="print-card reveal">
        <span class="print-badge soft">Activity</span>
        <h3>Activity / Colouring Book</h3>
        <div class="print-dims"><span class="in">8.5 × 11 in</span><span class="mm">216 × 279 mm</span></div>
        <div class="print-chips"><span class="print-chip">📖 32-100 pages</span><span class="print-chip age">👶 All ages</span></div>
        <p class="print-note">US Letter size gives children the most space for colouring and activities.</p>
      </article>
    </div>
    <div class="print-callout">
      <span class="emoji" aria-hidden="true">ℹ️</span>
      <p>All sizes above are available through both print-on-demand and offset printing at Purple Giraffe Press. We will recommend the best size for your story and illustration style during your project consultation.</p>
    </div>
  </div>
</section>

<!-- PRINT SPEC · PAPER TYPES -->
<section class="section section-soft">
  <div class="container">
    <div class="print-section-head">
      <h2>Paper types and weights</h2>
      <p class="lead">Paper stock has a bigger impact on your book's perceived quality than most authors realise. It affects colour vibrancy, durability, weight, and cost.</p>
    </div>
    <div class="print-stack">
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">📄</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>60 lb (90 gsm) Uncoated Offset</h3><span class="print-tag">Black and white or limited colour</span></div>
            <p class="print-meta"><em>Cream or white, slightly textured, easy on the eyes, like a novel.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Chapter books, early readers, text-heavy novels.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Lowest cost per page</li><li>Lightweight, good for thick books</li><li>Easy for children to write or annotate on</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Not ideal for high-resolution full-colour illustrations</li><li>Limited colour gamut</li></ul></div>
            </div>
          </div>
        </div>
      </article>
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">✨</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>80 lb (120 gsm) Gloss Coated</h3><span class="print-tag">Full CMYK colour, ideal</span></div>
            <p class="print-meta"><em>Smooth and shiny, colours pop with high saturation.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Picture books with vibrant full-colour illustrations.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Exceptional colour reproduction</li><li>Makes illustrations look vivid and professional</li><li>Industry standard for full-colour picture books</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Heavier than uncoated</li><li>Slight glare under direct light</li><li>Slightly higher cost</li></ul></div>
            </div>
          </div>
        </div>
      </article>
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">🎨</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>80 lb (120 gsm) Matte Coated</h3><span class="print-tag">Full CMYK colour, excellent</span></div>
            <p class="print-meta"><em>Smooth but not shiny, a soft premium feel with no glare.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Picture books, premium gift editions.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Excellent colour depth without glare</li><li>Feels luxurious to touch</li><li>Popular for premium and award submissions</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Fingerprints show more easily</li><li>Slightly more expensive than gloss</li></ul></div>
            </div>
          </div>
        </div>
      </article>
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">💎</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>100 lb (150 gsm) Silk / Satin</h3><span class="print-tag">Full CMYK colour, premium</span></div>
            <p class="print-meta"><em>Between gloss and matte, a silky, high-end feel.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Collector editions, gift books, premium picture books.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Premium appearance and touch</li><li>Outstanding colour fidelity</li><li>Impressive durability</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Higher cost per page</li><li>Heavier finished book</li></ul></div>
            </div>
          </div>
        </div>
      </article>
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">🧱</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>Board Stock (280-400 gsm)</h3><span class="print-tag">Full CMYK on laminated surface</span></div>
            <p class="print-meta"><em>Rigid cardboard, extremely durable, cannot be torn easily.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Board books for babies and toddlers.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Survives everything a toddler throws at it</li><li>Laminated for spill and chew resistance</li><li>Safe for ages 0 and up</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Much higher production cost</li><li>Minimum print runs are larger</li><li>Heavier to ship</li></ul></div>
            </div>
          </div>
        </div>
      </article>
      <article class="print-card reveal">
        <div class="row-head">
          <span class="emoji" aria-hidden="true">♻️</span>
          <div style="flex:1;">
            <div class="print-rowtop"><h3>Recycled / FSC-Certified</h3><span class="print-tag">Full colour, warm white point</span></div>
            <p class="print-meta"><em>Slightly textured cream or natural white, warm and organic.</em></p>
            <p class="print-meta"><strong>Best for:</strong> Eco-conscious authors and publishers.</p>
            <div class="proscons">
              <div class="pros"><p class="h pro">Pros</p><ul><li>Environmentally responsible</li><li>FSC chain-of-custody certification available</li><li>Appeals to eco-aware buyers</li></ul></div>
              <div class="cons"><p class="h con">Watch-outs</p><ul><li>Slightly lower colour brightness than gloss</li><li>Small premium in cost</li></ul></div>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- PRINT SPEC · COVERS & BINDING -->
<section class="section section-white">
  <div class="container">
    <div class="print-section-head">
      <h2>Cover types and binding</h2>
      <p class="lead">The cover is the first thing a child and parent touch. Your binding choice signals quality, durability, and price before the book is even opened.</p>
    </div>
    <div class="print-grid cols-2">
      <article class="print-card flex reveal">
        <div class="row-head"><span class="emoji" aria-hidden="true">📕</span><h3>Hardcover (Case Bound)</h3></div>
        <p class="print-meta">A rigid board cover wrapped in printed laminated paper. The gold standard for children's picture books. Extremely durable, perceived as premium, and typically priced higher ($14.99 to $24.99).</p>
        <ul class="print-feats">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Gloss or matte lamination over the board</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Rounded or square spine</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Optional spot UV varnish for raised gloss</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Optional foil stamping in gold, silver, or holographic</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Retail standard for picture books ages 0 to 8</span></li>
        </ul>
        <p class="print-cost">💰 Higher cost, premium retail position</p>
      </article>
      <article class="print-card flex reveal">
        <div class="row-head"><span class="emoji" aria-hidden="true">📗</span><h3>Softcover / Trade Paperback</h3></div>
        <p class="print-meta">A flexible printed cover, usually 300 gsm and up with lamination. Lower production cost and lighter weight, common for chapter books, activity books, and budget editions.</p>
        <ul class="print-feats">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Gloss or matte lamination</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Optional spot UV on the title or logo</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Significantly lighter than hardcover</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Standard for chapter and activity books</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Lower retail price point ($7.99 to $14.99)</span></li>
        </ul>
        <p class="print-cost">💰 Lower cost, broader accessibility</p>
      </article>
      <article class="print-card flex reveal">
        <div class="row-head"><span class="emoji" aria-hidden="true">📘</span><h3>Board Book (Casebound Boards)</h3></div>
        <p class="print-meta">Every page is its own thick, rigid laminated board. Interior boards are typically 2 to 4 mm thick greyboard wrapped in printed, laminated paper.</p>
        <ul class="print-feats">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>2 to 4 mm greyboard per page</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Pages glued together in pairs</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Waterproof laminated surface</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Rounded corners for safety (optional)</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Indestructible for toddlers</span></li>
        </ul>
        <p class="print-cost">💰 Higher cost, high minimum quantities</p>
      </article>
      <article class="print-card flex reveal">
        <div class="row-head"><span class="emoji" aria-hidden="true">📓</span><h3>Spiral / Wire-O Bound</h3></div>
        <p class="print-meta">Pages held together with a wire or plastic coil spine. They lay completely flat when open, perfect for activity, workbook, and colouring formats where children write or draw inside.</p>
        <ul class="print-feats">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Lays completely flat when open</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Ideal for activity and colouring books</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Available in plastic or metal coil</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Cover can still be a laminated softcover</span></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg><span>Not standard for retail distribution</span></li>
        </ul>
        <p class="print-cost">💰 Mid-range cost</p>
      </article>
    </div>
  </div>
</section>

<!-- PRINT SPEC · PRINT METHODS -->
<section class="section section-soft">
  <div class="container">
    <div class="print-section-head">
      <h2>Print methods explained</h2>
      <p class="lead">Understanding how your book is physically produced helps you make smarter decisions about cost, quality, and distribution.</p>
    </div>
    <div class="print-stack">
      <article class="print-card reveal">
        <div class="row-head"><span class="emoji big" aria-hidden="true">🖨️</span><div><h3>Print-on-Demand (POD)</h3><p class="print-meta">Each book is printed digitally only when an order is placed. Zero upfront inventory cost, and ideal for self-publishing authors.</p></div></div>
        <div class="proscons">
          <div class="pros"><p class="h pro">Advantages</p><ul><li>No minimum order quantity, no inventory risk</li><li>Integrates directly with Amazon KDP and IngramSpark</li><li>Automatic fulfilment, we never touch the books</li><li>Easy to update or edit files at any time</li></ul></div>
          <div class="cons"><p class="h con">Limitations</p><ul><li>Slightly higher cost per unit than offset</li><li>Limited paper and binding options</li><li>Less consistent colour between batches</li></ul></div>
        </div>
        <p class="print-bestfor"><strong>🎯 Best for:</strong> First-time authors, low-volume titles, Amazon self-publishing</p>
      </article>
      <article class="print-card reveal">
        <div class="row-head"><span class="emoji big" aria-hidden="true">🏭</span><div><h3>Offset Lithographic Printing</h3><p class="print-meta">Printing plates are made and ink is applied via rollers. The highest quality output and the lowest per-unit cost at scale, from 500 copies and up.</p></div></div>
        <div class="proscons">
          <div class="pros"><p class="h pro">Advantages</p><ul><li>Superior colour accuracy and consistency</li><li>Significantly lower cost per unit at volume</li><li>Widest choice of paper, finishing, and binding</li><li>Required for bookshop and retail distribution</li></ul></div>
          <div class="cons"><p class="h con">Limitations</p><ul><li>Minimum print run typically 500 to 1,000 copies</li><li>Higher upfront cost</li><li>Longer lead time, 4 to 8 weeks from file approval</li></ul></div>
        </div>
        <p class="print-bestfor"><strong>🎯 Best for:</strong> Authors launching with bookshop distribution, school sales, bulk orders</p>
      </article>
      <article class="print-card reveal">
        <div class="row-head"><span class="emoji big" aria-hidden="true">⚡</span><div><h3>Digital Short-Run</h3><p class="print-meta">Digital printing for small batches of 25 to 500 copies. It bridges the gap between POD and offset, great for event stock, reviewer copies, and school visits.</p></div></div>
        <div class="proscons">
          <div class="pros"><p class="h pro">Advantages</p><ul><li>Low minimum quantities, from 25 copies</li><li>Fast turnaround, 5 to 10 business days</li><li>Better quality than POD for large batches</li><li>No plate setup costs</li></ul></div>
          <div class="cons"><p class="h con">Limitations</p><ul><li>More expensive per unit than offset at high volumes</li><li>Narrower paper weight range than offset</li></ul></div>
        </div>
        <p class="print-bestfor"><strong>🎯 Best for:</strong> Pre-launch reviewer copies, event stock, school visits, gift editions</p>
      </article>
    </div>
  </div>
</section>

<!-- PRINT SPEC · FINISHING -->
<section class="section section-white">
  <div class="container">
    <div class="print-section-head">
      <h2>Finishing and special effects</h2>
      <p class="lead">Premium finishing turns a good book into a remarkable one. These touches make books gift-worthy, award-worthy, and shelf-standout worthy.</p>
    </div>
    <div class="print-grid">
      <article class="print-card sm reveal"><h3>Gloss Lamination</h3><p class="print-meta">Shiny protective film over the cover. Makes colours pop and is highly durable.</p></article>
      <article class="print-card sm reveal"><h3>Matte Lamination</h3><p class="print-meta">Soft, non-reflective finish. A premium tactile feel that reduces fingerprints.</p></article>
      <article class="print-card sm reveal"><h3>Spot UV</h3><p class="print-meta">High-gloss varnish applied selectively, for example just the title or a character. Creates striking contrast against matte lamination.</p></article>
      <article class="print-card sm reveal"><h3>Foil Stamping</h3><p class="print-meta">Metallic foil in gold, silver, holographic, or rose gold, applied under heat and pressure. Instantly signals a premium gift book.</p></article>
      <article class="print-card sm reveal"><h3>Embossing / Debossing</h3><p class="print-meta">Raises or indents part of the cover into the board for a 3D tactile effect. Often combined with foil.</p></article>
      <article class="print-card sm reveal"><h3>Rounded Corners</h3><p class="print-meta">Available on board books and some hardcovers. Child-safety compliant and adds a premium finish.</p></article>
      <article class="print-card sm reveal"><h3>Ribbon Markers</h3><p class="print-meta">A fabric ribbon attached inside the spine for bookmarking. Found in premium gift-edition hardcovers.</p></article>
      <article class="print-card sm reveal"><h3>Endpapers</h3><p class="print-meta">The decorative pages glued to the inside of a hardcover's boards. A chance to add illustration detail, often a repeat pattern or map.</p></article>
    </div>
  </div>
</section>

<!-- PRINT SPEC · COMPARISON CHART -->
<section class="section section-soft">
  <div class="container">
    <div class="print-section-head">
      <span class="print-kicker"><span class="lbl">Quick reference</span></span>
      <h2>Book type comparison chart</h2>
      <p class="lead">At a glance, the most common specifications for each children's book format.</p>
    </div>
    <div class="print-table-wrap reveal">
      <table class="print-table">
        <thead><tr><th>Book type</th><th>Trim size</th><th>Paper</th><th>Cover</th><th>Pages</th></tr></thead>
        <tbody>
          <tr><td class="type">Board Book</td><td class="trim">6 × 6 in / 7 × 7 in</td><td>280-400 gsm board</td><td>Casebound boards</td><td>12-24</td></tr>
          <tr><td class="type">Picture Book</td><td class="trim">8.5 × 8.5 in</td><td>80 gsm gloss/matte</td><td>Hardcover (standard)</td><td>24-40</td></tr>
          <tr><td class="type">Premium Picture Book</td><td class="trim">10 × 10 in</td><td>100 gsm silk</td><td>Hardcover + foil</td><td>24-48</td></tr>
          <tr><td class="type">Early Reader</td><td class="trim">6 × 9 in</td><td>60 gsm uncoated</td><td>Softcover</td><td>48-100</td></tr>
          <tr><td class="type">Chapter Book</td><td class="trim">6 × 9 in</td><td>60 gsm uncoated</td><td>Softcover</td><td>100-200</td></tr>
          <tr><td class="type">Activity / Colouring</td><td class="trim">8.5 × 11 in</td><td>80 gsm uncoated</td><td>Softcover / Spiral</td><td>32-100</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- PRINT SPEC · CTA -->
<section class="section">
  <div class="container">
    <div class="print-cta reveal">
      <h2>Not sure which print spec is right for you?</h2>
      <p>Every Purple Giraffe Press project includes a dedicated print consultation. We will recommend the perfect size, paper, cover, and method for your story and budget.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Print Quote &rarr;</a>
        <a class="btn btn-light" href="pricing.php">View Packages</a>
      </div>
    </div>
  </div>
</section>

<!-- 7 · TESTIMONIALS -->
<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow script-mark">- author love</p>
    <h2>Authors who said yes, and never looked back</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<!-- 8 · TOP 6 SERVICES -->
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>Our most popular services</h2>
  </div>
  <div class="container">
    <?php $services_only = ['editing', 'book-cover-design', 'marketing-publicity', 'book-publishing', 'custom-illustrations', 'author-websites']; include 'includes/services.php'; ?>
  </div>
</section>

<!-- 9 · FAQ (two-column, native accordion; FAQPage schema in head via $page_faqs) -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- before you print</p>
      <h2>Printing questions, <em>answered.</em></h2>
      <p>Honest answers to the questions authors ask most before going to print. If yours is not here, a quick consultation will cover it.</p>
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

<!-- 10 · FOOTER -->
<?php include 'includes/footer.php'; ?>

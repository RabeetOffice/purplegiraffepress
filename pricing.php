<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Pricing & Instant Estimate | Purple Giraffe Press Publishing';
$page_description = 'Get an instant baseline estimate for your children\'s book, then compare publishing packages. Flat fees, 100% author royalties.';
$canonical_path = 'pricing.php';

/* ---------------------------------------------------------------------------
   Package comparison data. Edit prices/names here and the included-features
   matrix below — true = included, false = not included, or a string for a
   value (e.g. revision rounds, author copies). Column order is fixed:
   Standard, Professional, Illustrated, All-Inclusive, Traditional.
--------------------------------------------------------------------------- */
$packages = [
    ['name' => 'Standard',      'price' => '$1,574', 'was' => '$1,749'],
    ['name' => 'Professional',  'price' => '$2,699', 'was' => '$2,999'],
    ['name' => 'Illustrated',   'price' => '$2,699', 'was' => '$2,999'],
    ['name' => 'All-Inclusive', 'price' => '$5,579', 'was' => '$6,199', 'popular' => true],
    ['name' => 'Traditional',   'price' => '$7,199', 'was' => '$7,999'],
];

$feature_groups = [
    'Project Management' => [
        ['Support with a project manager', [true, true, true, true, true]],
        ['Access to help centre & portal', [true, true, true, true, true]],
        ['Full copyright ownership',       [true, true, true, true, true]],
        ['100% net royalties',             [true, true, true, true, true]],
    ],
    'Editing' => [
        ["Editor's feedback report",   [true,  true,  true,  true,  true]],
        ['Editorial consultation',     [false, false, false, true,  true]],
        ['Substantive edit',           [false, true,  false, true,  true]],
        ['Copy editing',               [false, true,  false, true,  true]],
        ['Post-layout proofread',      [false, false, false, true,  true]],
        ['Project coaching',           [false, false, false, false, true]],
    ],
    'Design & Formatting' => [
        ['Cover design & interior layout', [true, true, true, true, true]],
        ['Revision rounds',                ['2', '3', '3', 'Unlimited', 'Unlimited']],
        ['Image insertions',               ['10', '20', false, '30', '50']],
    ],
    'Illustrations' => [
        ['Custom illustrations', [false, false, 'Full colour', 'Full colour', 'Full colour']],
    ],
    'Publishing & Distribution' => [
        ['Paperback distribution',      [true,  true, true, true, true]],
        ['Hardcover distribution',      [false, true, true, true, true]],
        ['Kindle eBook distribution',   [true,  true, true, true, true]],
        ['Print-on-demand availability',[true,  true, true, true, true]],
        ['ISBN included',               [false, true, true, true, true]],
        ['Amazon Look Inside',          [false, true, true, true, true]],
    ],
    'Author Copies' => [
        ['Paperback author copies', ['1', '3', '3', '5', '10']],
        ['Hardcover author copies', [false, false, '1', '2', '5']],
    ],
    'Marketing' => [
        ['Book marketing workshop',   [false, false, false, true,  true]],
        ['Marketing consultation',    [false, false, false, true,  true]],
        ['Author website',            [false, false, false, false, true]],
        ['Book backgrounder',         [false, false, false, true,  true]],
        ['Custom marketing strategy', [false, false, false, false, true]],
        ['Marketing bundle',          [false, false, false, false, true]],
    ],
];
$pill_tones = ['pt-pill-1', 'pt-pill-2', 'pt-pill-3', 'pt-pill-4', 'pt-pill-5'];

/* Inline line-icons for the estimate calculator option cards. */
function calc_icon($name) {
    $p = [
        'board'   => '<rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 4v16"/>',
        'picture' => '<rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="8.5" cy="9.5" r="1.6"/><path d="m21 16-4.5-4.5L7 21"/>',
        'early'   => '<path d="M12 7v13"/><path d="M3 5.5A1.5 1.5 0 0 1 4.5 4H11v14H4.5A1.5 1.5 0 0 0 3 19.5Z"/><path d="M21 5.5A1.5 1.5 0 0 0 19.5 4H13v14h6.5A1.5 1.5 0 0 1 21 19.5Z"/>',
        'chapter' => '<path d="M5 3h11a2 2 0 0 1 2 2v16l-5-3-5 3V5a2 2 0 0 0-2-2Z"/><path d="M5 3a2 2 0 0 0-2 2v13"/>',
        'middle'  => '<path d="m12 3 9 5-9 5-9-5 9-5Z"/><path d="m3 12 9 5 9-5"/><path d="m3 16.5 9 5 9-5"/>',
        'len1'    => '<path d="M14 3v5h5"/><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"/>',
        'len2'    => '<path d="M14 3v5h5"/><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"/><path d="M9 13h6M9 17h4"/>',
        'len3'    => '<rect x="7" y="7" width="13" height="13" rx="2"/><path d="M4 16V5a2 2 0 0 1 2-2h9"/>',
        'len4'    => '<path d="M5 4h13a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z"/><path d="M8 4v17"/>',
        'illnone' => '<path d="M4 7V5h16v2"/><path d="M12 5v14"/><path d="M9 19h6"/>',
        'illspot' => '<rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="9" cy="9" r="1.8"/><path d="m21 15-4-4L7 21"/>',
        'illfull' => '<path d="m12 3 1.8 5.5L19 10l-5.2 1.5L12 17l-1.8-5.5L5 10l5.2-1.5Z"/><path d="m19 14 .8 2.2L22 17l-2.2.8L19 20l-.8-2.2L16 17l2.2-.8Z"/>',
    ];
    return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">'
        . ($p[$name] ?? $p['picture']) . '</svg>';
}

$page_faqs = [
  ["q" => "How much does it cost to publish a children's book?", "a" => "It depends entirely on what your book needs. A full service path covering editing, illustration, design, printing, and distribution is a bigger investment than a single job like formatting and upload. We price every project around your manuscript and your goals, not a fixed one size fits all fee. The consultation is free and includes a clear, honest breakdown."],
  ["q" => "How do your fees work?", "a" => "We charge flat, upfront fees for the services you choose, agreed before any work begins. There are no hidden costs and no surprise invoices later. You always know exactly what you are paying for and why."],
  ["q" => "Do I really keep 100% of my royalties?", "a" => "Yes. Royalties paid by retail platforms go directly to you, in full, forever. We earn from the flat production fees for our work, not from an ongoing share of your sales. Your book keeps earning for you, not for us."],
  ["q" => "Do you offer payment plans?", "a" => "Yes. Qualified projects can be split into interest free installments, commonly three or six payments, with work beginning after the first deposit. We want the cost to be manageable rather than a barrier to publishing your book."],
  ["q" => "What is included in a full publishing package?", "a" => "A complete package typically includes editing, custom illustration, cover and interior design, print and ebook file setup, ISBN, distribution, and launch support. We tailor exactly what is included to your book, so you are not paying for things you do not need."],
  ["q" => "Why do prices vary so much between books?", "a" => "Illustration is the biggest factor. A 32 page full colour picture book needs far more original art than a text driven chapter book, so it costs more to produce. Length, format, and the services you choose all play a part too."],
  ["q" => "Is the instant estimate my final price?", "a" => "No, it is a friendly starting point based on a few quick details. Your exact quote depends on your manuscript, the artwork, and the services you choose. Send us your project for a precise, no obligation proposal."],
  ["q" => "Can I start with one service and add more later?", "a" => "Yes. You can begin with a single service, such as editing or a cover, and add others whenever you are ready. There is no obligation to buy a full package, and your earlier work carries straight into the next stage."],
];
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Pricing</div>
      <h1>What will your book <em>cost?</em></h1>
      <p class="lead">Answer three quick questions for an instant baseline estimate, then compare packages. Flat fees, and you keep 100% of your royalties.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot beside a book pricing calculator">
  </div>
</section>

<!-- ============== INSTANT ESTIMATE CALCULATOR ============== -->
<section class="section section-white pricing-calc-section">
  <div class="container">
    <div class="calc-card reveal" id="bookCalc">
      <span class="calc-glow" aria-hidden="true"></span>

      <ol class="calc-steps" aria-hidden="true">
        <li class="calc-step is-active" data-step-dot="1"><span>1</span></li>
        <li class="calc-bar"><i></i></li>
        <li class="calc-step" data-step-dot="2"><span>2</span></li>
        <li class="calc-bar"><i></i></li>
        <li class="calc-step" data-step-dot="3"><span>3</span></li>
      </ol>

      <div class="calc-stage">
        <!-- Step 1: book type -->
        <div class="calc-panel is-active" data-step="1">
          <h3 class="calc-q">What kind of book are you making?</h3>
          <div class="calc-options" data-group="type">
            <button type="button" class="calc-opt" aria-pressed="false" data-label="Board Book"   data-amount="1200"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('board'); ?></span><span class="calc-opt-label">Board Book</span><span class="calc-opt-sub">Ages 0-3</span></button>
            <button type="button" class="calc-opt" aria-pressed="false" data-label="Picture Book" data-amount="2200"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('picture'); ?></span><span class="calc-opt-label">Picture Book</span><span class="calc-opt-sub">Ages 3-6</span></button>
            <button type="button" class="calc-opt" aria-pressed="false" data-label="Early Reader" data-amount="1800"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('early'); ?></span><span class="calc-opt-label">Early Reader</span><span class="calc-opt-sub">Ages 5-8</span></button>
            <button type="button" class="calc-opt" aria-pressed="false" data-label="Chapter Book" data-amount="2400"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('chapter'); ?></span><span class="calc-opt-label">Chapter Book</span><span class="calc-opt-sub">Ages 7-10</span></button>
            <button type="button" class="calc-opt" aria-pressed="false" data-label="Middle Grade" data-amount="2800"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('middle'); ?></span><span class="calc-opt-label">Middle Grade</span><span class="calc-opt-sub">Ages 8-12</span></button>
          </div>
        </div>

        <!-- Step 2: length -->
        <div class="calc-panel" data-step="2">
          <h3 class="calc-q">Roughly how long is it?</h3>
          <div class="calc-options" data-group="length">
            <button type="button" class="calc-opt" aria-pressed="false" data-label="Up to 32 pages"   data-amount="0"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('len1'); ?></span><span class="calc-opt-label">Up to 32</span><span class="calc-opt-sub">pages</span></button>
            <button type="button" class="calc-opt" aria-pressed="false" data-label="33 to 100 pages"  data-amount="600"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('len2'); ?></span><span class="calc-opt-label">33 to 100</span><span class="calc-opt-sub">pages</span></button>
            <button type="button" class="calc-opt" aria-pressed="false" data-label="101 to 200 pages" data-amount="1200"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('len3'); ?></span><span class="calc-opt-label">101 to 200</span><span class="calc-opt-sub">pages</span></button>
            <button type="button" class="calc-opt" aria-pressed="false" data-label="Over 200 pages"   data-amount="2000"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('len4'); ?></span><span class="calc-opt-label">Over 200</span><span class="calc-opt-sub">pages</span></button>
          </div>
        </div>

        <!-- Step 3: illustrations -->
        <div class="calc-panel" data-step="3">
          <h3 class="calc-q">Will it need illustrations?</h3>
          <div class="calc-options" data-group="illus">
            <button type="button" class="calc-opt" aria-pressed="false" data-label="No illustrations"        data-amount="0"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('illnone'); ?></span><span class="calc-opt-label">Text only</span><span class="calc-opt-sub">No illustrations</span></button>
            <button type="button" class="calc-opt" aria-pressed="false" data-label="Spot illustrations"      data-amount="1000"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('illspot'); ?></span><span class="calc-opt-label">Spot art</span><span class="calc-opt-sub">A few per chapter</span></button>
            <button type="button" class="calc-opt" aria-pressed="false" data-label="Full-page illustrations" data-amount="3500"><span class="calc-opt-ic" aria-hidden="true"><?php echo calc_icon('illfull'); ?></span><span class="calc-opt-label">Full-page art</span><span class="calc-opt-sub">Every spread</span></button>
          </div>
        </div>

        <!-- Step 4: result -->
        <div class="calc-panel calc-result" data-step="4">
          <div class="calc-result-badge" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
          </div>
          <p class="calc-result-label">Your estimated range</p>
          <div class="calc-range"><span id="calcMin">$0</span> <span class="calc-dash">&ndash;</span> <span id="calcMax">$0</span></div>
          <p class="calc-basis" id="calcBasis"></p>

          <form class="calc-lead" action="<?php echo e(asset('form-submission.php')); ?>" method="post">
            <input type="hidden" name="form_type" value="estimate">
            <input type="hidden" name="source_page" value="<?php echo e($_SERVER['REQUEST_URI'] ?? ''); ?>">
            <span class="hp-field" aria-hidden="true"><label>Leave this field empty<input type="text" name="pgp_hp" tabindex="-1" autocomplete="off"></label></span>
            <input type="hidden" name="book_type" id="calcBookType">
            <input type="hidden" name="length" id="calcLength">
            <input type="hidden" name="illustrations" id="calcIllus">
            <input type="hidden" name="estimate" id="calcEstimate">
            <p class="calc-lead-label">Want this emailed with a detailed proposal?</p>
            <div class="calc-lead-row">
              <input type="email" name="email" required placeholder="you@email.com" aria-label="Your email address">
              <button class="btn btn-sun" type="submit">Send my estimate <span aria-hidden="true">&rarr;</span></button>
            </div>
            <p class="calc-fineprint">A friendly starting point, not a final quote. We&apos;ll reply within one business day. No spam, ever.</p>
          </form>
          <button type="button" class="calc-restart">Start over</button>
        </div>
      </div>

      <div class="calc-nav">
        <button type="button" class="calc-back" aria-label="Go back a step"><span aria-hidden="true">&larr;</span> Back</button>
        <span class="calc-hint">Pick an option to continue</span>
      </div>
    </div>
  </div>
</section>

<!-- ============== PACKAGE COMPARISON TABLE ============== -->
<section class="section section-soft" id="packages">
  <div class="container">
    <div class="section-heading center">
      <p class="eyebrow script-mark">- choose your path</p>
      <h2>Compare our <em>publishing packages.</em></h2>
      <p>Exactly the right support for your story, at a flat fee. Listed prices include a <strong>10% launch discount</strong>.</p>
    </div>

    <p class="pt-swipe-hint">Swipe to compare all packages <span aria-hidden="true">&rarr;</span></p>
    <div class="pricing-table-wrap reveal">
      <table class="pricing-table">
        <thead>
          <tr>
            <th class="pt-corner" scope="col"><span>What's included</span></th>
            <?php foreach ($packages as $i => $p): ?>
              <th class="pt-pkg<?php echo !empty($p['popular']) ? ' is-popular' : ''; ?>" scope="col">
                <?php if (!empty($p['popular'])): ?><span class="pt-pop">★ Most loved</span><?php endif; ?>
                <span class="pt-pill <?php echo e($pill_tones[$i] ?? ''); ?>"><?php echo e($p['name']); ?></span>
                <span class="pt-price"><?php echo e($p['price']); ?></span>
                <span class="pt-was"><?php echo e($p['was']); ?></span>
              </th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($feature_groups as $cat => $rows): ?>
            <tr class="pt-cat"><td colspan="<?php echo count($packages) + 1; ?>"><?php echo e($cat); ?></td></tr>
            <?php foreach ($rows as $row): ?>
              <?php [$label, $cells] = $row; ?>
              <tr class="pt-row">
                <td class="pt-feature"><?php echo e($label); ?></td>
                <?php foreach ($cells as $i => $cell): ?>
                  <td class="pt-cell<?php echo !empty($packages[$i]['popular']) ? ' is-popular' : ''; ?>">
                    <?php if ($cell === true): ?>
                      <span class="pt-yes" title="Included"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"></path></svg></span>
                    <?php elseif ($cell === false): ?>
                      <span class="pt-no" title="Not included">&ndash;</span>
                    <?php else: ?>
                      <span class="pt-txt"><?php echo e($cell); ?></span>
                    <?php endif; ?>
                  </td>
                <?php endforeach; ?>
              </tr>
            <?php endforeach; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="center" style="margin-top: 34px;">
      <a class="btn btn-primary" href="<?php echo e(MAIN_CTA_LINK); ?>" data-quote-open>Not sure which fits? Ask us <span aria-hidden="true">&rarr;</span></a>
    </div>
  </div>
</section>

<!-- ============== FAQ ============== -->
<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- pricing questions</p>
      <h2>Fees and royalties, <em>made clear.</em></h2>
      <p>Honest answers about what publishing costs and how our fees work. If yours is not here, the free consultation will cover it.</p>
      <a class="btn btn-sun" href="<?php echo e(MAIN_CTA_LINK); ?>" data-quote-open>Get a Free Quote &rarr;</a>
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

<script>
/* Instant estimate calculator: 3-question wizard -> price range. */
(function () {
  var calc = document.getElementById('bookCalc');
  if (!calc) return;
  var panels = calc.querySelectorAll('.calc-panel');
  var dots   = calc.querySelectorAll('[data-step-dot]');
  var bars   = calc.querySelectorAll('.calc-bar');
  var backBtn = calc.querySelector('.calc-back');
  var hint    = calc.querySelector('.calc-hint');
  var state = { 1: null, 2: null, 3: null };
  var current = 1;

  function show(step) {
    current = step;
    panels.forEach(function (p) { p.classList.toggle('is-active', +p.getAttribute('data-step') === step); });
    dots.forEach(function (d) {
      var n = +d.getAttribute('data-step-dot');
      d.classList.toggle('is-active', n === step && step < 4);
      d.classList.toggle('is-done', n < step || step === 4);
    });
    bars.forEach(function (b, i) { b.classList.toggle('is-fill', (i + 1) < step || step === 4); });
    backBtn.style.visibility = (step > 1 && step < 4) ? 'visible' : 'hidden';
    if (hint) hint.style.display = step < 4 ? '' : 'none';
  }

  function money(n) { return '$' + n.toLocaleString('en-US'); }

  function compute() {
    var total = (state[1].amount || 0) + (state[2].amount || 0) + (state[3].amount || 0);
    var min = Math.round(total * 0.9 / 10) * 10;
    var max = Math.round(total * 1.1 / 10) * 10;
    calc.querySelector('#calcMin').textContent = money(min);
    calc.querySelector('#calcMax').textContent = money(max);
    calc.querySelector('#calcBasis').textContent =
      'Based on a ' + state[1].label + ' (' + state[2].label.toLowerCase() + ') with ' + state[3].label.toLowerCase() + '.';
    // Carry the selections into the lead form so the emailed estimate has context.
    var setv = function (id, v) { var el = calc.querySelector(id); if (el) el.value = v; };
    setv('#calcBookType', state[1].label);
    setv('#calcLength', state[2].label);
    setv('#calcIllus', state[3].label);
    setv('#calcEstimate', money(min) + ' – ' + money(max));
  }

  calc.querySelectorAll('.calc-opt').forEach(function (opt) {
    opt.addEventListener('click', function () {
      var group = opt.closest('.calc-options');
      group.querySelectorAll('.calc-opt').forEach(function (o) { o.classList.remove('is-sel'); o.setAttribute('aria-pressed', 'false'); });
      opt.classList.add('is-sel');
      opt.setAttribute('aria-pressed', 'true');
      var step = +opt.closest('.calc-panel').getAttribute('data-step');
      state[step] = { label: opt.getAttribute('data-label'), amount: +opt.getAttribute('data-amount') };
      if (step < 3) {
        setTimeout(function () { show(step + 1); }, 170);
      } else {
        compute();
        setTimeout(function () { show(4); }, 170);
      }
    });
  });

  backBtn.addEventListener('click', function () { if (current > 1 && current < 4) show(current - 1); });

  var restart = calc.querySelector('.calc-restart');
  if (restart) restart.addEventListener('click', function () {
    state = { 1: null, 2: null, 3: null };
    calc.querySelectorAll('.calc-opt.is-sel').forEach(function (o) { o.classList.remove('is-sel'); o.setAttribute('aria-pressed', 'false'); });
    show(1);
  });

  show(1);
})();
</script>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

<?php
/**
 * FAQ accordion. Reads $page_faqs (preferred) or $faqs: ['q' => ..., 'a' => ...].
 *
 * Two layouts:
 *   $faq_mode = 'column'  Compact heading + accordion, for inside a content
 *                         column (single blog post).
 *   $faq_mode = 'wide'    Two-column promo + accordion section (blog listing).
 *                         Default.
 *
 * Optional copy overrides (reset after use): $faq_eyebrow, $faq_heading
 * (may contain <em>), $faq_lede.
 */
$faq_items = $page_faqs ?? ($faqs ?? []);
if (empty($faq_items)) { $faq_mode = null; return; }
$faq_mode = $faq_mode ?? 'wide';

if ($faq_mode === 'column'):
    $faq_heading = $faq_heading ?? 'Frequently asked <em>questions.</em>';
?>
<section class="blog-col-block blog-col-faq reveal" aria-label="Frequently asked questions">
  <h2 class="blog-col-title"><?php echo $faq_heading; ?></h2>
  <div class="svc-faq-list">
    <?php foreach ($faq_items as $fi => $faq): ?>
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
</section>
<?php
    $faq_mode = $faq_heading = null;
    return;
endif;

/* wide mode (blog listing) */
$faq_eyebrow = $faq_eyebrow ?? '- reader questions';
$faq_heading = $faq_heading ?? 'Frequently asked <em>questions.</em>';
$faq_lede    = $faq_lede ?? 'Quick answers to the questions this story tends to raise. For anything else, a free consultation will cover it.';
?>
<section class="section section-soft">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark"><?php echo $faq_eyebrow; ?></p>
      <h2><?php echo $faq_heading; ?></h2>
      <p><?php echo e($faq_lede); ?></p>
      <a class="btn btn-sun" href="<?php echo e(asset(MAIN_CTA_LINK)); ?>" data-quote-open>Book a Free Chat &rarr;</a>
    </div>
    <div class="svc-faq-list">
      <?php foreach ($faq_items as $fi => $faq): ?>
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
<?php $faq_eyebrow = $faq_heading = $faq_lede = $faq_mode = null; ?>

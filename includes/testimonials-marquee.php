<?php
/* Home-page testimonials marquee: two rows scrolling in opposite directions.
   Pure CSS animation (no JS). Each row's cards are duplicated once so the
   loop is seamless (the track scrolls exactly one copy width). */
require_once __DIR__ . '/testimonials-data.php';
$half = (int) ceil(count($testimonials) / 2);
$rowA = array_slice($testimonials, 0, $half);
$rowB = array_slice($testimonials, $half);
?>
<div class="t-marquee" role="region" aria-label="What authors say about Purple Giraffe Press">
  <div class="t-row">
    <div class="t-track t-track--ltr">
      <?php for ($d = 0; $d < 2; $d++): foreach ($rowA as $i => $t): ?>
        <?php echo pgp_testimonial_card($t, $i, 't-card--marquee'); ?>
      <?php endforeach; endfor; ?>
    </div>
  </div>
  <div class="t-row">
    <div class="t-track t-track--rtl">
      <?php for ($d = 0; $d < 2; $d++): foreach ($rowB as $i => $t): ?>
        <?php echo pgp_testimonial_card($t, $i + $half, 't-card--marquee'); ?>
      <?php endforeach; endfor; ?>
    </div>
  </div>
</div>

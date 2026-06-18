<?php
/* Service-page testimonials: a handful of cards. Grid on desktop, a swipeable
   slider on tablet/mobile (the .mobile-swiper hook in main.js). Cards + data
   come from the shared source so there is one place to edit testimonials. */
require_once __DIR__ . '/testimonials-data.php';
$slice = array_slice($testimonials, 0, 6);
?>
<div class="testimonial-grid t-swiper mobile-swiper swiper">
  <div class="swiper-wrapper">
    <?php foreach ($slice as $i => $t): ?>
      <div class="swiper-slide"><?php echo pgp_testimonial_card($t, $i, 'reveal'); ?></div>
    <?php endforeach; ?>
  </div>
  <div class="swiper-pagination"></div>
</div>
<div class="center t-slider-trustpilot"><?php echo pgp_trustpilot_badge(); ?></div>

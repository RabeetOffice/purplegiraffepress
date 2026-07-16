<?php
/* "Other services in this city" section for a per-city service page.
 *
 * The city is taken from $location_city if set, otherwise derived from the
 * $location_business['locality'] the page already declares (see header.php), so
 * a typical city service page needs no extra setup beyond including this file.
 *
 * Renders every service for that city except the page you are on (matched by
 * file name against $canonical_path), so the London Book Design page shows the
 * other London services and never links Book Design back to itself. Same for
 * every other city. Data comes from includes/location-services-data.php. */

require_once __DIR__ . '/location-services-data.php';

$__loc_city = $location_city
    ?? (isset($location_business['locality']) ? strtolower(trim($location_business['locality'])) : '');
$__loc = pgp_location_services($__loc_city);

if ($__loc && !empty($__loc['services'])):
    $__loc_current = !empty($canonical_path)
        ? basename($canonical_path)
        : (isset($_SERVER['SCRIPT_NAME']) ? basename($_SERVER['SCRIPT_NAME']) : '');
    $__loc_cards = [];
    foreach ($__loc['services'] as $__s) {
        if (basename($__s['href']) === $__loc_current) { continue; }  // drop the current service
        $__loc_cards[] = $__s;
    }
    $__loc_label = $__loc['label'];
    if (!empty($__loc_cards)):
?>
<section class="section figma-cream">
  <div class="container section-heading center">
    <p class="eyebrow script-mark">- explore more</p>
    <h2>More Children's Book Services in <?php echo e($__loc_label); ?></h2>
    <p style="margin:14px auto 0;">Whatever stage your book is at, our <?php echo e($__loc_label); ?> team can help. Explore the other services we offer children's authors near you.</p>
  </div>
  <div class="container">
    <div class="services-grid mobile-swiper swiper">
      <div class="swiper-wrapper">
        <?php $__i = 0; foreach ($__loc_cards as $__s): $__a = $__s['accent'];
          $__style = sprintf('--accent:%s;--accent-2:%s;--accent-ink:%s;--i:%d;', $__a[0], $__a[1], $__a[2], $__i); ?>
        <article class="service-card swiper-slide reveal" style="<?php echo e($__style); ?>">
          <span class="service-shine" aria-hidden="true"></span>
          <span class="service-num" aria-hidden="true"><?php echo sprintf('%02d', $__i + 1); ?></span>
          <div class="service-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><?php echo $__s['icon']; ?></svg>
          </div>
          <h3><?php echo e($__s['title']); ?></h3>
          <p><?php echo e($__s['short']); ?></p>
          <a class="card-link" href="<?php echo e(asset($__s['href'])); ?>">
            <span class="card-link-label">Learn more</span>
            <span class="card-link-arrow" aria-hidden="true">&rarr;</span>
            <span class="sr-only"> about <?php echo e($__s['title']); ?> in <?php echo e($__loc_label); ?></span>
          </a>
        </article>
        <?php $__i++; endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<?php
    endif;
endif;
?>

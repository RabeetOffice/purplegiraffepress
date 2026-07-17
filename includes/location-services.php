<?php
/* "Other services in this city" section — used by the city hubs
 * (/locations/<city>.php) AND by every per-city service page, so there is one
 * card renderer to maintain as the network of city pages grows.
 *
 * The city is taken from $location_city if set, otherwise derived from the
 * $location_business['locality'] the page already declares (see header.php), so
 * a typical city service page needs no extra setup beyond including this file.
 *
 * Data comes from includes/location-services-data.php — add a service there and
 * every hub and service page for that city picks it up automatically.
 *
 * It renders at most $location_services_limit cards (default 6, matching the
 * six-card block the main service pages use), and always drops the page you are
 * on (matched by file name against $canonical_path), so the Melbourne Book
 * Design page shows OTHER Melbourne services and never links back to itself.
 *
 * Optional overrides, set before including:
 *   $location_services_limit   int    how many cards (0 = no limit)
 *   $location_services_eyebrow string the small script-mark line
 *   $location_services_heading string the <h2>
 *   $location_services_intro   string the paragraph under the <h2>
 *   $location_services_section string the <section> class (band background)
 */

require_once __DIR__ . '/location-services-data.php';

$__loc_city = $location_city
    ?? (isset($location_business['locality']) ? strtolower(trim($location_business['locality'])) : '');
$__loc = pgp_location_services($__loc_city);

if ($__loc && !empty($__loc['services'])):
    $__loc_current = !empty($canonical_path)
        ? basename($canonical_path)
        : (isset($_SERVER['SCRIPT_NAME']) ? basename($_SERVER['SCRIPT_NAME']) : '');

    /* Start the list at the service AFTER the one you are reading and wrap
       around. Two reasons this beats always slicing the first six:
         - every service page shows a different six, so all of a city's pages
           get linked from somewhere instead of the tail never being reachable;
         - a service added to the data file shows up on its neighbours' pages
           straight away, rather than sitting past the cut forever.
       The current page is skipped, so a page never links back to itself. */
    $__loc_all = array_values($__loc['services']);
    $__loc_total = count($__loc_all);
    $__loc_start = 0;
    foreach ($__loc_all as $__idx => $__s) {
        if (basename($__s['href']) === $__loc_current) { $__loc_start = $__idx + 1; break; }
    }
    $__loc_cards = [];
    for ($__k = 0; $__k < $__loc_total; $__k++) {
        $__s = $__loc_all[($__loc_start + $__k) % $__loc_total];
        if (basename($__s['href']) === $__loc_current) { continue; }  // drop the current service
        $__loc_cards[] = $__s;
    }

    /* Cap the block so it stays a tidy row of cards rather than the full list. */
    $__loc_limit = isset($location_services_limit) ? (int) $location_services_limit : 6;
    if ($__loc_limit > 0) {
        $__loc_cards = array_slice($__loc_cards, 0, $__loc_limit);
    }

    $__loc_label = $__loc['label'];
    $__loc_eyebrow = $location_services_eyebrow ?? '- explore more services';
    $__loc_heading = $location_services_heading ?? ("More Children's Book Services in " . $__loc_label);
    $__loc_intro   = $location_services_intro
        ?? ("Whatever stage your book is at, our " . $__loc_label . " team can help. Explore the other services we offer children's authors near you.");
    $__loc_section = $location_services_section ?? 'section figma-cream';

    /* A single card would otherwise sit alone against the left edge, so centre
       that one case. Every other count is handled by the last-row fill in
       style.css (2 -> one full row, 4 -> two rows of 2, 13 -> 3/3/3/2/2), which
       is why there is no column juggling here — an inline grid-template-columns
       would fight those span rules. */
    $__loc_n = count($__loc_cards);
    $__loc_grid = $__loc_n === 1 ? 'grid-template-columns:minmax(0,400px);justify-content:center;' : '';

    if (!empty($__loc_cards)):
?>
<section class="<?php echo e($__loc_section); ?>">
  <div class="container section-heading center">
    <p class="eyebrow script-mark"><?php echo e($__loc_eyebrow); ?></p>
    <h2><?php echo e($__loc_heading); ?></h2>
    <p style="margin:14px auto 0;"><?php echo e($__loc_intro); ?></p>
  </div>
  <div class="container">
    <div class="services-grid mobile-swiper swiper">
      <div class="swiper-wrapper" style="<?php echo e($__loc_grid); ?>">
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

/* Reset the per-page overrides so a later include on the same page (or a
   different city block) starts from the defaults again. */
$location_services_limit = $location_services_eyebrow = $location_services_heading
    = $location_services_intro = $location_services_section = null;
?>

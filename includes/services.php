<?php
/* Service card grid (home + services hub + the "popular services" block on
   each service page). Self-contained: the card list lives here, while the
   full content of each service lives inside its own page file.

   Set $services_only (array of slugs) before including to render just that
   curated set, in order. */

if (!function_exists('service_icon')) {
    function service_icon($name) {
        $icons = [
            'book'    => '<path d="M5 4h6a4 4 0 0 1 4 4v12H8a3 3 0 0 1-3-3V4Z"></path><path d="M19 4h-4a4 4 0 0 0-4 4v12h5a3 3 0 0 0 3-3V4Z"></path>',
            'paint'   => '<path d="M4 17l4.5-6 4 5 3.5-5 4 6H4Z"></path><circle cx="8" cy="7" r="2"></circle>',
            'edit'    => '<path d="m14 4 6 6-9.5 9.5H4v-6.5L14 4Z"></path><path d="m13 5 6 6"></path>',
            'pen'     => '<path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"></path><path d="m14 6 4 4"></path>',
            'check'   => '<rect x="3" y="3" width="18" height="18" rx="4"></rect><path d="M20 6 9 17l-5-5"></path>',
            'cover'   => '<rect x="5" y="3" width="14" height="18" rx="2"></rect><path d="M9 3v18"></path>',
            'spark'   => '<path d="M12 2l1.6 5.5L19 9l-4.7 3.4L16 18l-4-3.3L8 18l1.7-5.6L5 9l5.4-1.5Z"></path>',
            'doc'     => '<path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"></path><path d="M14 3v5h5M9 13h6M9 17h6"></path>',
            'printer' => '<path d="M6 9V3h12v6"></path><path d="M6 18H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-2"></path><rect x="7" y="14" width="10" height="7" rx="1"></rect>',
            'screen'  => '<rect x="3" y="4" width="18" height="13" rx="2"></rect><path d="M8 21h8M12 17v4"></path>',
            'mic'     => '<rect x="9" y="3" width="6" height="11" rx="3"></rect><path d="M5 11a7 7 0 0 0 14 0M12 18v3"></path>',
            'compass' => '<circle cx="12" cy="12" r="9"></circle><path d="m15 9-2 5-4 1 2-5 4-1Z"></path>',
            'globe'   => '<circle cx="12" cy="12" r="9"></circle><path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18"></path>',
            'play'    => '<circle cx="12" cy="12" r="9"></circle><path d="M10 8.5 16 12l-6 3.5Z"></path>',
        ];
        return $icons[$name] ?? $icons['book'];
    }
}

$service_cards = [
    'book-publishing'             => ['title' => 'Book Publishing Management',             'icon' => 'book',    'accent' => ['#7b35d0', '#52208f', '#ffffff'], 'short' => "We take care of the logistics, ISBNs, and platform registrations so you don’t have to learn the technicalities from scratch"],
    'custom-illustrations'        => ['title' => 'Custom Illustrations',        'icon' => 'paint',   'accent' => ['#f7c948', '#f7a324', '#4a2e00'], 'short' => "We match you with an artist who understands your characters and work through sketches together before any final painting begins"],
    'editing'                     => ['title' => 'Editing',                     'icon' => 'edit',    'accent' => ['#4fd1b0', '#19b890', '#053a2c'], 'short' => "We sharpen your pacing and clarity while keeping your unique voice at the centre of the story"],
    'ghostwriting'                => ['title' => 'Ghostwriting',                'icon' => 'pen',     'accent' => ['#9b8cff', '#6f5bdc', '#1b1147'], 'short' => "If you have a great idea but need help with the words, we can draft the story with you in a voice that remains authentically yours"],
    'proofreading'                => ['title' => 'Proofreading',                'icon' => 'check',   'accent' => ['#5ec6a8', '#19b890', '#053a2c'], 'short' => "A meticulous final pass to catch the tiny errors that software often misses before the files are sent to print"],
    'book-formatting'             => ['title' => 'Book Formatting',             'icon' => 'doc',     'accent' => ['#5fd0c4', '#1fb5a6', '#043a34'], 'short' => "We turn your manuscript and artwork into clean, print-ready and platform-ready files, formatted specifically for children’s books"],
    'book-cover-design'           => ['title' => 'Book Cover Design',           'icon' => 'cover',   'accent' => ['#ff9f7d', '#ff7a59', '#4a1500'], 'short' => "We create front, back, and spine layouts that grab a reader’s attention. Unlike many publishing companies for children’s books, we show you enuinely different options rather than just colour swaps"],
    'book-promotion'              => ['title' => 'Book Promotion',              'icon' => 'spark',   'accent' => ['#6ec8ff', '#3aa0ff', '#042a4a'], 'short' => "Honest, affordable promotion that gets your children’s book seen and loved on Amazon, Kindle, and beyond"],
    'fiction-ghostwriting'        => ['title' => 'Fiction Ghostwriting', 'icon' => 'spark',   'accent' => ['#c9b4ef', '#7a3dd1', '#2a0f52'], 'short' => "You bring the idea, the characters, and the world. We bring the writing skill and the hours to turn it into a finished novel in your voice"],
    'childrens-book-printing'     => ['title' => "Children’s Book Printing",     'icon' => 'printer', 'accent' => ['#ffd36e', '#f7a324', '#4a2e00'], 'short' => "From small digital runs to large offset orders, we manage the quality of the physical book, checking paper weight and colour accuracy"],
    'author-websites'             => ['title' => 'Author Websites',             'icon' => 'screen',  'accent' => ['#f08fe4', '#d957c9', '#4a0640'], 'short' => "We build clean, functional sites that help readers and event organisers find you easily"],
    'audiobooks'                  => ['title' => 'Audiobooks',                  'icon' => 'mic',     'accent' => ['#7fd0ff', '#2f8fe6', '#042a4a'], 'short' => "We coordinate professional narration and mastering to reach families who prefer to listen during commutes or at bedtime"],
    'childrens-book-trailers'     => ['title' => "Children’s Book Trailers",    'icon' => 'play',    'accent' => ['#9be7c4', '#3bbf86', '#053a2c'], 'short' => "Animated trailers that give your story a voice and a face, so readers fall for it before they even pick it up"],
    'distribution'                => ['title' => 'Distribution',                'icon' => 'globe',   'accent' => ['#8ab6ff', '#4f7dff', '#0a1f55'], 'short' => "Get your book onto shelves and screens worldwide, from major retailers to schools and libraries."],
];

$svc_list = $service_cards;
if (!empty($services_only) && is_array($services_only)) {
    $svc_list = [];
    foreach ($services_only as $only_slug) {
        if (isset($service_cards[$only_slug])) {
            $svc_list[$only_slug] = $service_cards[$only_slug];
        }
    }
}

/* Never link a service card back to the page you are already on. When this
   block renders on a service page, drop that page's own card and backfill with
   the next service not already listed, so the row stays the same size. On the
   home page and services hub the current slug matches no service, so nothing
   changes. */
$current_service_slug = !empty($canonical_path)
    ? basename($canonical_path, '.php')
    : (isset($_SERVER['SCRIPT_NAME']) ? basename($_SERVER['SCRIPT_NAME'], '.php') : '');
if ($current_service_slug !== '' && isset($svc_list[$current_service_slug])) {
    unset($svc_list[$current_service_slug]);
    foreach ($service_cards as $slug => $card) {
        if ($slug === $current_service_slug || isset($svc_list[$slug])) {
            continue;
        }
        $svc_list[$slug] = $card;
        break;
    }
}

/* Show only the first N services (e.g. the top 6 on the home page). The full
   list always lives on services.php. */
if (!empty($services_limit) && $services_limit > 0) {
    $svc_list = array_slice($svc_list, 0, (int) $services_limit, true);
}
?>
<div class="services-grid mobile-swiper swiper">
  <div class="swiper-wrapper">
    <?php $index = 0; foreach ($svc_list as $slug => $service): ?>
      <?php
        $accent = $service['accent'];
        $card_style = sprintf('--accent:%s;--accent-2:%s;--accent-ink:%s;--i:%d;', $accent[0], $accent[1], $accent[2], $index);
      ?>
      <article class="service-card swiper-slide reveal" id="card-<?php echo e($slug); ?>" style="<?php echo e($card_style); ?>">
        <span class="service-shine" aria-hidden="true"></span>
        <span class="service-num" aria-hidden="true"><?php echo sprintf('%02d', $index + 1); ?></span>
        <div class="service-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <?php echo service_icon($service['icon']); ?>
          </svg>
        </div>
        <h3><?php echo e($service['title']); ?></h3>
        <p><?php echo e($service['short']); ?></p>
        <a class="card-link" href="<?php echo e($slug); ?>.php">
          <span class="card-link-label">Learn more</span>
          <span class="card-link-arrow" aria-hidden="true">&rarr;</span>
          <span class="sr-only"> about <?php echo e($service['title']); ?></span>
        </a>
      </article>
    <?php $index++; endforeach; ?>
  </div>
  <div class="swiper-pagination"></div>
</div>
<?php $services_only = $services_limit = null; ?>

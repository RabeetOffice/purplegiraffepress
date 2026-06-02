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
        ];
        return $icons[$name] ?? $icons['book'];
    }
}

$service_cards = [
    'book-publishing'             => ['title' => 'Book Publishing',             'icon' => 'book',    'accent' => ['#7b35d0', '#52208f', '#ffffff'], 'short' => "Full service publishing from manuscript to launch, with ISBN, print and ebook setup, and global distribution, while you keep 100% of royalties."],
    'custom-illustrations'        => ['title' => 'Custom Illustrations',        'icon' => 'paint',   'accent' => ['#f7c948', '#f7a324', '#4a2e00'], 'short' => "Hand crafted illustrations built around your characters, world, and your reader's age, from first sketches to final spreads."],
    'editing'                     => ['title' => 'Editing',                     'icon' => 'edit',    'accent' => ['#4fd1b0', '#19b890', '#053a2c'], 'short' => "Developmental and line editing that strengthens pacing, voice, clarity, and the read aloud rhythm kids respond to."],
    'ghostwriting'                => ['title' => 'Ghostwriting',                'icon' => 'pen',     'accent' => ['#9b8cff', '#6f5bdc', '#1b1147'], 'short' => "Have a story in your head but not on the page? Our ghostwriters turn your idea into a finished manuscript in your voice."],
    'proofreading'                => ['title' => 'Proofreading',                'icon' => 'check',   'accent' => ['#5ec6a8', '#19b890', '#053a2c'], 'short' => "A meticulous final check for typos, spacing, and consistency once your book is laid out, so it goes to print clean."],
    'book-cover-design'           => ['title' => 'Book Cover Design',           'icon' => 'cover',   'accent' => ['#ff9f7d', '#ff7a59', '#4a1500'], 'short' => "Covers kids reach for, designed to shine in print, in online thumbnails, and on the bookstore shelf."],
    'marketing-publicity'         => ['title' => 'Marketing & Publicity',       'icon' => 'spark',   'accent' => ['#6ec8ff', '#3aa0ff', '#042a4a'], 'short' => "Reviewer outreach, library and school positioning, podcasts, and social launch support to help your book find readers."],
    'premium-nonfiction-services' => ['title' => 'Premium Nonfiction Services', 'icon' => 'doc',     'accent' => ['#c9b4ef', '#7a3dd1', '#2a0f52'], 'short' => "Specialist support for nonfiction and educational children's books, from fact checking to clear, age right explanation."],
    'childrens-book-printing'     => ['title' => "Children's Book Printing",     'icon' => 'printer', 'accent' => ['#ffd36e', '#f7a324', '#4a2e00'], 'short' => "Durable, beautiful printing in the formats kids love, from board books to hardcovers, with a proof before any run."],
    'author-websites'             => ['title' => 'Author Websites',             'icon' => 'screen',  'accent' => ['#f08fe4', '#d957c9', '#4a0640'], 'short' => "A storybook feel website to showcase your book, grow your mailing list, and connect with families and schools."],
    'audiobooks'                  => ['title' => 'Audiobooks',                  'icon' => 'mic',     'accent' => ['#7fd0ff', '#2f8fe6', '#042a4a'], 'short' => "Warm, professionally narrated audiobook editions that bring your story to life for listening families."],
    'book-coaching'               => ['title' => 'Book Coaching',               'icon' => 'compass', 'accent' => ['#9be7c4', '#3bbf86', '#053a2c'], 'short' => "One on one guidance for authors who want to write the book themselves, with expert feedback at every stage."],
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

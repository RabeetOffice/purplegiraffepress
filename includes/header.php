<?php
/* On the live site, clean ".php" out of every internal link in the page
   output (see pgp_clean_html_links). No-op on localhost. */
if (defined('CLEAN_URLS') && CLEAN_URLS && function_exists('pgp_clean_html_links')) {
    ob_start('pgp_clean_html_links');
}
$current_page = basename($_SERVER['PHP_SELF']);
/* True on the blog listing and any single post, which live under /blogs/.
   basename() alone collides (blogs/index.php -> "index.php"), so detect the
   section from the request path for nav highlighting. */
$in_blog = strpos(str_replace('\\', '/', $_SERVER['PHP_SELF']), '/blogs/') !== false;
$page_title = $page_title ?? SITE_NAME . ' - ' . SITE_TAGLINE;
$page_description = $page_description ?? "Purple Giraffe Press is an independent Australian children's book publisher, established in 2008. We publish picture books, chapter books, and middle grade stories that children return to again and again.";
$canonical_path = $canonical_path ?? $current_page;
$canonical_url = page_url($canonical_path);

$breadcrumb_name = $breadcrumb_name ?? trim(ucwords(str_replace(['-', '.php'], [' ', ''], $current_page)));
/* A page may pre-define a full $breadcrumbs trail (e.g. blog posts need
   Home / Blog / Title). Otherwise build the default two-level trail. */
if (empty($breadcrumbs) || !is_array($breadcrumbs)) {
    $breadcrumbs = [
        ['name' => 'Home', 'url' => page_url('index.php')],
    ];
    if ($current_page !== 'index.php') {
        $breadcrumbs[] = ['name' => $breadcrumb_name, 'url' => $canonical_url];
    }
}

$local_address_parts = explode(',', SITE_ADDRESS);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script>document.documentElement.classList.add('js');</script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo e($page_title); ?></title>
  <meta name="description" content="<?php echo e($page_description); ?>">
  <link rel="canonical" href="<?php echo e($canonical_url); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500;600;700&family=Fraunces:opsz,wght,SOFT,WONK@9..144,400..900,40..100,0..1&family=Fredoka:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Bootstrap 5 (loaded first so custom styles win) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- Swiper slider -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>?v=<?php echo filemtime(__DIR__ . '/../assets/css/style.css'); ?>">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "<?php echo e(SITE_NAME); ?>",
    "url": "<?php echo e(page_url('')); ?>",
    "logo": "<?php echo e(page_url(SITE_LOGO)); ?>",
    "description": "<?php echo e($page_description); ?>",
    "email": "<?php echo e(SITE_EMAIL); ?>",
    "telephone": "<?php echo e(SITE_PHONE); ?>",
    "sameAs": <?php echo json_encode(array_values($social_links)); ?>
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "<?php echo e(SITE_NAME); ?>",
    "image": "<?php echo e(page_url(SITE_MASCOT)); ?>",
    "url": "<?php echo e(page_url('')); ?>",
    "telephone": "<?php echo e(SITE_PHONE); ?>",
    "email": "<?php echo e(SITE_EMAIL); ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo e(trim($local_address_parts[0] ?? SITE_ADDRESS)); ?>",
      "addressLocality": "Melbourne",
      "addressRegion": "VIC",
      "postalCode": "3065",
      "addressCountry": "AU"
    },
    "openingHours": "Mo-Fr 09:00-17:00"
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": <?php
      $crumb_schema = [];
      foreach ($breadcrumbs as $index => $crumb) {
          $crumb_schema[] = [
              '@type' => 'ListItem',
              'position' => $index + 1,
              'name' => $crumb['name'],
              'item' => $crumb['url'],
          ];
      }
      echo json_encode($crumb_schema, JSON_UNESCAPED_SLASHES);
    ?>
  }
  </script>
  <?php if (!empty($page_faqs) && is_array($page_faqs)): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": <?php
      $faq_schema = [];
      foreach ($page_faqs as $faq) {
          $faq_schema[] = [
              '@type' => 'Question',
              'name' => $faq['q'],
              'acceptedAnswer' => [
                  '@type' => 'Answer',
                  'text' => $faq['a'],
              ],
          ];
      }
      echo json_encode($faq_schema, JSON_UNESCAPED_SLASHES);
    ?>
  }
  </script>
  <?php endif; ?>
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>
  <header class="site-header" id="siteHeader">
    <div class="nav-shell">
      <a class="brand" href="<?php echo e(asset('index.php')); ?>" aria-label="<?php echo e(SITE_NAME); ?> home">
        <img src="<?php echo e(asset(SITE_LOGO)); ?>" alt="<?php echo e(SITE_NAME); ?> logo">
      </a>
      <nav class="main-nav" aria-label="Main navigation">
        <?php foreach ($nav_menu as $label => $link): ?>
          <?php if ($label === 'Services'): ?>
            <div class="nav-dropdown">
              <a href="<?php echo e(asset($link)); ?>" class="nav-dropdown-toggle <?php echo $current_page === $link ? 'active' : ''; ?>" aria-haspopup="true" aria-expanded="false">
                <?php echo e($label); ?>
                <span aria-hidden="true">▾</span>
              </a>
              <div class="nav-dropdown-menu" aria-label="Services submenu">
                <div class="nav-dropdown-scroll">
                  <a href="<?php echo e(asset('book-publishing.php')); ?>">Book Publishing</a>
                  <a href="<?php echo e(asset('custom-illustrations.php')); ?>">Custom Illustrations</a>
                  <a href="<?php echo e(asset('editing.php')); ?>">Editing</a>
                  <a href="<?php echo e(asset('ghostwriting.php')); ?>">Ghostwriting</a>
                  <a href="<?php echo e(asset('proofreading.php')); ?>">Proofreading</a>
                  <a href="<?php echo e(asset('book-cover-design.php')); ?>">Book Cover Design</a>
                  <a href="<?php echo e(asset('marketing-publicity.php')); ?>">Marketing &amp; Publicity</a>
                  <a href="<?php echo e(asset('premium-nonfiction-services.php')); ?>">Premium Nonfiction Services</a>
                  <a href="<?php echo e(asset('childrens-book-printing.php')); ?>">Children's Book Printing</a>
                  <a href="<?php echo e(asset('author-websites.php')); ?>">Author Websites</a>
                  <a href="<?php echo e(asset('audiobooks.php')); ?>">Audiobooks</a>
                  <a href="<?php echo e(asset('book-coaching.php')); ?>">Book Coaching</a>
                  <a href="<?php echo e(asset('distribution.php')); ?>">Distribution</a>
                </div>
              </div>
            </div>
          <?php else: ?>
            <?php $is_active = $in_blog ? ($link === 'blogs/') : ($current_page === $link); ?>
            <a href="<?php echo e(asset($link)); ?>" class="<?php echo $is_active ? 'active' : ''; ?>"><?php echo e($label); ?></a>
          <?php endif; ?>
        <?php endforeach; ?>
      </nav>
      <div class="nav-actions">
        <a class="nav-phone" href="tel:<?php echo e(preg_replace('/[^0-9]/', '', SITE_PHONE)); ?>"><?php echo e(SITE_PHONE); ?></a>
        <a class="btn btn-primary" href="<?php echo e(asset(MAIN_CTA_LINK)); ?>" data-quote-open><?php echo e(MAIN_CTA_TEXT); ?></a>
        <button class="menu-toggle" id="menuToggle" type="button" aria-label="Open menu" aria-expanded="false">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>
  <!-- Mobile menu lives outside <header> so its position:fixed anchors to the
       viewport (the header's backdrop-filter would otherwise trap it). -->
  <div class="mobile-panel" id="mobilePanel">
    <?php foreach ($nav_menu as $label => $link): ?>
      <?php if ($label === 'Services'): ?>
        <a href="<?php echo e(asset($link)); ?>"><?php echo e($label); ?></a>
        <div class="mobile-submenu">
          <a href="<?php echo e(asset('book-publishing.php')); ?>">Book Publishing</a>
          <a href="<?php echo e(asset('custom-illustrations.php')); ?>">Custom Illustrations</a>
          <a href="<?php echo e(asset('editing.php')); ?>">Editing</a>
          <a href="<?php echo e(asset('ghostwriting.php')); ?>">Ghostwriting</a>
          <a href="<?php echo e(asset('proofreading.php')); ?>">Proofreading</a>
          <a href="<?php echo e(asset('book-cover-design.php')); ?>">Book Cover Design</a>
          <a href="<?php echo e(asset('marketing-publicity.php')); ?>">Marketing &amp; Publicity</a>
          <a href="<?php echo e(asset('premium-nonfiction-services.php')); ?>">Premium Nonfiction Services</a>
          <a href="<?php echo e(asset('childrens-book-printing.php')); ?>">Children's Book Printing</a>
          <a href="<?php echo e(asset('author-websites.php')); ?>">Author Websites</a>
          <a href="<?php echo e(asset('audiobooks.php')); ?>">Audiobooks</a>
          <a href="<?php echo e(asset('book-coaching.php')); ?>">Book Coaching</a>
          <a href="<?php echo e(asset('distribution.php')); ?>">Distribution</a>
        </div>
      <?php else: ?>
        <a href="<?php echo e(asset($link)); ?>"><?php echo e($label); ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
    <a class="btn btn-primary" href="<?php echo e(asset(MAIN_CTA_LINK)); ?>" data-quote-open><?php echo e(MAIN_CTA_TEXT); ?></a>
  </div>
  <main id="main">

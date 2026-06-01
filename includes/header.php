<?php
$current_page = basename($_SERVER['PHP_SELF']);
$page_title = $page_title ?? SITE_NAME . ' - ' . SITE_TAGLINE;
$page_description = $page_description ?? "Purple Giraffe Press is a boutique children's book publisher helping authors write, illustrate, edit, and globally distribute award-winning kids' books while keeping 100% of their royalties.";
$canonical_path = $canonical_path ?? $current_page;
$canonical_url = page_url($canonical_path);

$breadcrumb_name = $breadcrumb_name ?? trim(ucwords(str_replace(['-', '.php'], [' ', ''], $current_page)));
$breadcrumbs = [
    ['name' => 'Home', 'url' => page_url('index.php')],
];
if ($current_page !== 'index.php') {
    $breadcrumbs[] = ['name' => $breadcrumb_name, 'url' => $canonical_url];
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
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo filemtime(__DIR__ . '/../assets/css/style.css'); ?>">
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
      "addressLocality": "Portland",
      "addressRegion": "OR",
      "postalCode": "97214",
      "addressCountry": "US"
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
      <a class="brand" href="index.php" aria-label="<?php echo e(SITE_NAME); ?> home">
        <img src="<?php echo e(SITE_LOGO); ?>" alt="<?php echo e(SITE_NAME); ?> logo">
      </a>
      <nav class="main-nav" aria-label="Main navigation">
        <?php foreach ($nav_menu as $label => $link): ?>
          <?php if ($label === 'Services'): ?>
            <div class="nav-dropdown">
              <a href="<?php echo e($link); ?>" class="nav-dropdown-toggle <?php echo $current_page === $link ? 'active' : ''; ?>" aria-haspopup="true" aria-expanded="false">
                <?php echo e($label); ?>
                <span aria-hidden="true">▾</span>
              </a>
              <div class="nav-dropdown-menu" aria-label="Services submenu">
                <div class="nav-dropdown-scroll">
                  <a href="book-publishing.php">Book Publishing</a>
                  <a href="custom-illustrations.php">Custom Illustrations</a>
                  <a href="editing.php">Editing</a>
                  <a href="ghostwriting.php">Ghostwriting</a>
                  <a href="proofreading.php">Proofreading</a>
                  <a href="book-cover-design.php">Book Cover Design</a>
                  <a href="marketing-publicity.php">Marketing &amp; Publicity</a>
                  <a href="premium-nonfiction-services.php">Premium Nonfiction Services</a>
                  <a href="childrens-book-printing.php">Children's Book Printing</a>
                  <a href="author-websites.php">Author Websites</a>
                  <a href="audiobooks.php">Audiobooks</a>
                  <a href="book-coaching.php">Book Coaching</a>
                  <a href="distribution.php">Distribution</a>
                </div>
              </div>
            </div>
          <?php else: ?>
            <a href="<?php echo e($link); ?>" class="<?php echo $current_page === $link ? 'active' : ''; ?>"><?php echo e($label); ?></a>
          <?php endif; ?>
        <?php endforeach; ?>
      </nav>
      <div class="nav-actions">
        <a class="nav-phone" href="tel:<?php echo e(preg_replace('/[^0-9]/', '', SITE_PHONE)); ?>"><?php echo e(SITE_PHONE); ?></a>
        <a class="btn btn-primary" href="<?php echo e(MAIN_CTA_LINK); ?>"><?php echo e(MAIN_CTA_TEXT); ?></a>
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
        <a href="<?php echo e($link); ?>"><?php echo e($label); ?></a>
        <div class="mobile-submenu">
          <a href="book-publishing.php">Book Publishing</a>
          <a href="custom-illustrations.php">Custom Illustrations</a>
          <a href="editing.php">Editing</a>
          <a href="ghostwriting.php">Ghostwriting</a>
          <a href="proofreading.php">Proofreading</a>
          <a href="book-cover-design.php">Book Cover Design</a>
          <a href="marketing-publicity.php">Marketing &amp; Publicity</a>
          <a href="premium-nonfiction-services.php">Premium Nonfiction Services</a>
          <a href="childrens-book-printing.php">Children's Book Printing</a>
          <a href="author-websites.php">Author Websites</a>
          <a href="audiobooks.php">Audiobooks</a>
          <a href="book-coaching.php">Book Coaching</a>
          <a href="distribution.php">Distribution</a>
        </div>
      <?php else: ?>
        <a href="<?php echo e($link); ?>"><?php echo e($label); ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
    <a class="btn btn-primary" href="<?php echo e(MAIN_CTA_LINK); ?>"><?php echo e(MAIN_CTA_TEXT); ?></a>
  </div>
  <main id="main">

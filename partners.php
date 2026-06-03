<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Distribution Partners | Purple Giraffe Press Publishing';
$page_description = 'Purple Giraffe Press distributes children\'s books through global, US, Australian, and UK & European retail, library, and distribution partners.';
$canonical_path = 'partners.php';

/* Real brand logos via Google's favicon service. Falls back to a globe icon
   for domains it cannot resolve. Pass a bare domain (e.g. "waterstones.com"). */
function favicon($domain, $size = 128) {
    return 'https://t1.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=http://'
        . $domain . '&size=' . (int) $size;
}

/* Initials for the monogram fallback used when a brand has no favicon. */
function mono_initials($name) {
    $skip = ['ltd', 'the', 'and', 'co', 'inc', 'of'];
    $out = '';
    foreach (preg_split('/\s+/', $name) as $w) {
        $clean = trim($w, ".,&");
        if ($clean === '' || in_array(strtolower($clean), $skip, true)) continue;
        $out .= mb_strtoupper(mb_substr($clean, 0, 1));
        if (mb_strlen($out) >= 2) break;
    }
    return $out !== '' ? $out : mb_strtoupper(mb_substr($name, 0, 1));
}

/* Partners grouped by region. Each: name, domain (for the favicon), optional desc. */
$partner_groups = [
    'Global Distribution' => [
        ['name' => 'Amazon KDP',    'domain' => 'amazon.com',  'desc' => 'Global distribution network'],
        ['name' => 'IngramSpark',   'domain' => 'ingramspark.com', 'desc' => 'Premium print-on-demand'],
        ['name' => 'Apple Books',   'domain' => 'apple.com',       'desc' => 'Digital reading platform'],
        ['name' => 'Rakuten Kobo',  'domain' => 'kobo.com',        'desc' => 'Global eBook & audiobook retailer'],
    ],
    'United States Focus' => [
        ['name' => 'Barnes & Noble',     'domain' => 'barnesandnoble.com'],
        ['name' => 'Walmart.com',        'domain' => 'walmart.com'],
        ['name' => 'Target',             'domain' => 'target.com'],
        ['name' => 'Library of Congress','domain' => 'loc.gov'],
    ],
    'Australia & New Zealand Focus' => [
        ['name' => 'Amazon AU',     'domain' => 'amazon.com.au',   'desc' => "Australia's largest online retailer"],
        ['name' => 'Booktopia',     'domain' => 'booktopia.com.au', 'desc' => 'Leading Australian online bookstore'],
        ['name' => 'Fishpond',      'domain' => 'fishpond.com.au',  'desc' => 'Millions of books shipped globally'],
        ['name' => 'The Nile',      'domain' => 'thenile.com.au',   'desc' => 'Premium Australian book distributor'],
        ['name' => 'James Bennett', 'domain' => 'bennett.com.au',   'desc' => 'Library & educational supplier'],
        ['name' => 'ALS',           'domain' => 'www.alslib.com',    'desc' => 'Australian Library Services'],
        ['name' => 'Peter Pal',     'domain' => 'peterpal.com.au',  'desc' => 'Library supplier of ANZ'],
    ],
    'United Kingdom & Europe Focus' => [
        ['name' => 'Adlibris',            'domain' => 'adlibris.com'],
        ['name' => 'Agapea',              'domain' => 'agapea.com'],
        ['name' => 'Amazon.co.uk',        'domain' => 'amazon.co.uk'],
        ['name' => 'Aphrohead',           'domain' => 'aphrohead.com'],
        ['name' => 'Blackwell',           'domain' => 'blackwells.co.uk'],
        ['name' => 'Books Express',       'domain' => 'booksexpress.com'],
        ['name' => 'Designarta Books',    'domain' => 'designarta.co.uk',        'mono' => true],
        ['name' => 'Eden Interactive Ltd','domain' => 'edeninteractive.co.uk',   'mono' => true],
        ['name' => 'Foyles',              'domain' => 'foyles.co.uk'],
        ['name' => 'Gardners',            'domain' => 'gardners.com'],
        ['name' => 'Mallory International','domain' => 'malloryinternational.co.uk', 'mono' => true],
        ['name' => 'Paperback Shop Ltd',  'domain' => 'paperbackshop.co.uk'],
        ['name' => 'Superbookdeals',      'domain' => 'superbookdeals.com'],
        ['name' => 'Book Community Ltd',  'domain' => 'bookcommunity.co.uk',     'mono' => true],
        ['name' => 'Waterstones',         'domain' => 'waterstones.com'],
        ['name' => 'Wrap Distribution',   'domain' => 'wrapdistribution.com',    'mono' => true],
    ],
];
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Partners</div>
      <h1>Where your book <em>reaches readers.</em></h1>
      <p class="lead">We distribute through trusted retail, library, and wholesale partners across the globe, the US, Australia &amp; New Zealand, and the UK &amp; Europe.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot waving to publishing partners">
  </div>
</section>

<section class="section section-white">
  <div class="container">
    <?php foreach ($partner_groups as $group_title => $partners): ?>
      <div class="partner-group">
        <h2 class="partner-group-title"><?php echo e($group_title); ?></h2>
        <div class="partner-grid">
          <?php foreach ($partners as $p): ?>
            <article class="partner-card reveal">
              <span class="partner-logo">
                <?php if (!empty($p['mono'])): ?>
                  <span class="partner-mono" aria-hidden="true"><?php echo e(mono_initials($p['name'])); ?></span>
                <?php else: ?>
                  <img src="<?php echo e(favicon($p['domain'])); ?>" alt="<?php echo e($p['name']); ?> logo" width="52" height="52" loading="lazy" decoding="async">
                <?php endif; ?>
              </span>
              <h3><?php echo e($p['name']); ?></h3>
              <?php if (!empty($p['desc'])): ?><p><?php echo e($p['desc']); ?></p><?php endif; ?>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

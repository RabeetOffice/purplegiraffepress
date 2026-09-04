  </main>
  <?php
  if (!function_exists('footer_svg_icon')) {
      function footer_svg_icon($name) {
          $icons = [
              'instagram' => '<rect x="3" y="3" width="18" height="18" rx="5.4" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="12" r="4.1" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="17.2" cy="6.8" r="1.15" fill="currentColor"/>',
              'facebook' => '<path fill="currentColor" d="M13.6 21v-7h2.3l.4-2.9h-2.7V9.1c0-.8.3-1.4 1.5-1.4h1.3V5.1C16.1 5 15.3 5 14.4 5c-2 0-3.4 1.2-3.4 3.6v2.5H8.6V14H11v7h2.6Z"/>',
              'tiktok' => '<path fill="currentColor" d="M14.1 3c.3 2 1.6 3.5 3.6 3.8v2.6c-1.2 0-2.4-.4-3.4-1.1v5.4c0 2.7-2.1 4.7-4.7 4.7S5 18.4 5 15.7s2.1-4.7 4.7-4.7c.3 0 .6 0 .9.1v2.7c-.3-.1-.6-.2-.9-.2-1.2 0-2.1 1-2.1 2.1s.9 2.1 2.1 2.1 2.1-.9 2.1-2.2V3h2.3Z"/>',
              'youtube' => '<path fill="currentColor" d="M21.6 8.2c-.2-.9-.8-1.5-1.7-1.7C18.3 6 12 6 12 6s-6.3 0-7.9.5c-.9.2-1.5.8-1.7 1.7C2 9.8 2 12 2 12s0 2.2.4 3.8c.2.9.8 1.5 1.7 1.7C5.7 18 12 18 12 18s6.3 0 7.9-.5c.9-.2 1.5-.8 1.7-1.7.4-1.6.4-3.8.4-3.8s0-2.2-.4-3.8ZM10 15V9l5.2 3L10 15Z"/>',
              'linkedin' => '<path fill="currentColor" d="M6.7 8.9H4V20h2.7V8.9ZM5.3 3.6a1.6 1.6 0 1 0 0 3.2 1.6 1.6 0 0 0 0-3.2ZM20 13.3c0-2.9-1.6-4.7-4-4.7-1.3 0-2.3.6-2.9 1.6l-.1-1.3h-2.7l.1 2.3V20h2.7v-6.2c0-1.3.8-2.2 1.9-2.2 1.2 0 1.8.8 1.8 2.2V20H20v-6.7Z"/>',
              'x' => '<path fill="currentColor" d="M17.8 3.5h2.9l-6.4 7.3 7.5 9.7h-5.9l-4.6-6-5.3 6H3.1l6.8-7.8L2.7 3.5h6l4.2 5.5 4.9-5.5Zm-1 15.3h1.6L7.9 5.1H6.2l10.6 13.7Z"/>',
              'pinterest' => '<path fill="currentColor" d="M12 3a9 9 0 0 0-3.3 17.4c-.1-.8-.2-2 0-2.8l1.2-4.9s-.3-.6-.3-1.5c0-1.4.8-2.4 1.8-2.4.8 0 1.2.6 1.2 1.4 0 .8-.5 2.1-.8 3.2-.2 1 .5 1.8 1.5 1.8 1.7 0 3.1-1.9 3.1-4.5 0-2.4-1.7-4-4.1-4-2.8 0-4.4 2.1-4.4 4.2 0 .9.3 1.8.7 2.3l.1.3-.3 1.1c0 .2-.1.3-.3.2-1.2-.6-2-2.4-2-3.9 0-3.2 2.3-6.1 6.6-6.1 3.5 0 6.2 2.5 6.2 5.8 0 3.4-2.2 6.2-5.2 6.2-1 0-2-.5-2.3-1.1l-.6 2.4c-.2.9-.8 2-1.2 2.6A9 9 0 1 0 12 3Z"/>',
              'phone' => '<path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" d="M6 3.5h3l1.4 4.8-2 1.4a12 12 0 0 0 5.9 5.9l1.4-2 4.8 1.4v3a2 2 0 0 1-2.1 2A16.5 16.5 0 0 1 4 5.6 2 2 0 0 1 6 3.5Z"/>',
              'mail' => '<rect x="3" y="5" width="18" height="14" rx="2.4" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="m4.2 7 7.8 5.6L19.8 7" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>',
              'pin' => '<path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" d="M12 21s7-5.4 7-11a7 7 0 1 0-14 0c0 5.6 7 11 7 11Z"/><circle cx="12" cy="10" r="2.4" fill="none" stroke="currentColor" stroke-width="1.7"/>',
              'clock' => '<circle cx="12" cy="12" r="8.4" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M12 7.4V12l3 1.9" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>',
              'globe' => '<circle cx="12" cy="12" r="8.4" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M3.6 12h16.8M12 3.6c2.4 2.3 2.4 14.5 0 16.8M12 3.6c-2.4 2.3-2.4 14.5 0 16.8" fill="none" stroke="currentColor" stroke-width="1.5"/>',
          ];
          $key = strtolower($name);
          return $icons[$key] ?? $icons['globe'];
      }
  }
  ?>
  <footer class="site-footer">
    <span class="footer-glow" aria-hidden="true"></span>
    <span class="footer-sparkles" aria-hidden="true"></span>
    <div class="container footer-grid">
      <div class="footer-brand">
        <a class="footer-logo" href="<?php echo e(asset('index.php')); ?>" aria-label="<?php echo e(SITE_NAME); ?> home">
          <img src="<?php echo e(asset(SITE_LOGO)); ?>" alt="<?php echo e(SITE_NAME); ?> logo">
          <span><?php echo e(SITE_NAME); ?></span>
        </a>
        <p class="footer-tagline"><?php echo e(SITE_NAME); ?> publishing since <?php echo e(SITE_FOUNDED_YEAR); ?>. Stories that spark curiosity, build empathy, and reflect the world children actually live in.</p>
        <?php include __DIR__ . '/forms/newsletter-form.php'; ?>
        <div class="social-links">
          <?php foreach ($social_links as $label => $url): ?>
            <a href="<?php echo e($url); ?>" target="_blank" rel="noopener" aria-label="<?php echo e($label); ?>" title="<?php echo e($label); ?>">
              <svg viewBox="0 0 24 24" aria-hidden="true"><?php echo footer_svg_icon($label); ?></svg>
            </a>
          <?php endforeach; ?>
        </div>
        <?php require_once __DIR__ . '/testimonials-data.php'; /* provides pgp_trustpilot_badge() */ ?>
        <?php if (function_exists('pgp_trustpilot_badge')): ?>
          <div class="footer-trustpilot" style="margin-top:16px;"><?php echo pgp_trustpilot_badge(); ?></div>
        <?php endif; ?>
      </div>
      <nav class="footer-col" aria-label="Services">
        <h2>Services</h2>
        <ul>
          <?php foreach ($footer_menu_services as $label => $link): ?>
            <li><a href="<?php echo e(asset($link)); ?>"><?php echo e($label); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>
      <nav class="footer-col" aria-label="Company">
        <h2>Company</h2>
        <ul>
          <?php foreach ($footer_menu_company as $label => $link): ?>
            <li><a href="<?php echo e(asset($link)); ?>"><?php echo e($label); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>
      <div class="footer-col footer-contact">
        <h2>Contact</h2>
        <ul class="footer-contact-list">
          <li class="footer-phone-row">
            <span class="footer-phones">
              <?php /* The country chip doubles as the row icon, so every phone
                       line sits in the same left column as the rows below. */ ?>
              <?php foreach (site_phones() as $phone): ?>
                <a href="tel:<?php echo e(tel_href($phone['number'])); ?>"><span class="contact-icon contact-chip"><?php echo e($phone['short']); ?></span><span><?php echo e($phone['number']); ?></span></a>
              <?php endforeach; ?>
            </span>
          </li>
          <li>
            <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><?php echo footer_svg_icon('mail'); ?></svg></span>
            <a href="mailto:<?php echo e(SITE_EMAIL); ?>"><?php echo e(SITE_EMAIL); ?></a>
          </li>
          <?php /* Street addresses live in the office strip under this grid. */ ?>
          <li class="footer-abn">
            <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><?php echo footer_svg_icon('globe'); ?></svg></span>
            <span><a href="https://keystonepublishinggroup.com/" target="_blank" rel="nofollow noopener"><b>Keystone Publishing Group Pty Ltd ABN:</b></a> <a href="https://abr.business.gov.au/ABN/View?id=21697806447" target="_blank" rel="nofollow noopener">21 697 806 447</a></span>
          </li>
          <li>
            <span class="contact-icon" aria-hidden="true"><svg viewBox="0 0 24 24"><?php echo footer_svg_icon('clock'); ?></svg></span>
            <span><?php echo e(SITE_HOURS); ?></span>
          </li>
        </ul>
      </div>
    </div>
    <?php /* Office strip: one card per country we hold an address for. Edit the
             addresses in the admin (Site Settings) or site_offices() in
             includes/config.php. */ ?>
    <?php $footer_offices = site_offices(); ?>
    <?php if ($footer_offices): ?>
    <div class="footer-offices">
      <div class="container">
        <h2 class="footer-offices-title">Our offices</h2>
        <ul class="footer-offices-grid">
          <?php foreach ($footer_offices as $office): ?>
          <li class="footer-office">
            <?php echo site_flag($office['flag'], 'ft'); ?>
            <div class="footer-office-body">
              <h3><?php echo e($office['region']); ?><small><?php echo e($office['label']); ?></small></h3>
              <?php if (trim((string) $office['map']) !== ''): ?>
                <a class="footer-office-address" href="<?php echo e($office['map']); ?>" target="_blank" rel="noopener"><?php echo e($office['address']); ?></a>
              <?php else: ?>
                <p class="footer-office-address"><?php echo e($office['address']); ?></p>
              <?php endif; ?>
              <?php if (trim((string) $office['phone']) !== ''): ?>
                <a class="footer-office-phone" href="tel:<?php echo e(tel_href($office['phone'])); ?>"><?php echo e($office['phone']); ?></a>
              <?php endif; ?>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <?php endif; ?>
    <div class="footer-bottom">
      <div class="container footer-bottom-inner">
        <p><?php echo e(COPYRIGHT_TEXT); ?></p>
        <div class="footer-legal">
          <?php foreach ($legal_menu as $label => $link): ?>
            <a href="<?php echo e(asset($link)); ?>"><?php echo e($label); ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </footer>
  <?php include __DIR__ . '/quote-popup.php'; ?>
  <?php include __DIR__ . '/live-chat.php'; ?>
  <script>window.PGP_RC_SITE_KEY=<?php echo json_encode(defined('RECAPTCHA_SITE_KEY') ? RECAPTCHA_SITE_KEY : '', JSON_UNESCAPED_SLASHES); ?>;</script>
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script defer src="<?php echo e(asset_min('assets/js/main.js')); ?>"></script>
  <?php
  /* Custom footer scripts from the admin Developer page. Injected on every
     environment (so they can be tested locally); only the analytics/tracking
     IDs are restricted to the live site. */
  $__foot_raw = (string) pgp_setting('script_footer', '');
  if (trim($__foot_raw) !== '') {
      echo "<!-- Custom footer scripts (admin Developer page) -->\n" . $__foot_raw . "\n";
  }
  ?>
</body>
</html>
<?php
/* Flush the live clean-URL output buffer started in header.php. */
if (defined('CLEAN_URLS') && CLEAN_URLS && ob_get_level() > 0) {
    ob_end_flush();
}
?>

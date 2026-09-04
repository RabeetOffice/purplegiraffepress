<?php
/* Reusable "get in touch" band: a contact-detail panel plus the standard
   contact form. Included right before the CTA on every page (via
   includes/cta.php on content pages, and directly on the service pages).

   The form is given a unique $form_id_prefix so its field ids never collide
   with the hero form that already sits at the top of each service page. */
?>
<section class="section section-soft contact-section">
  <div class="container contact-grid">
    <div class="info-card reveal">
      <p class="eyebrow script-mark">- get in touch</p>
      <h2>Tell us about <em>your book.</em></h2>
      <p class="info-lead">Share your idea or manuscript and we will come back within one business day with a friendly, no-pressure plan and a free estimate.</p>
      <ul class="check-list">
        <?php foreach (site_phones() as $phone): ?>
          <li><a href="tel:<?php echo e(tel_href($phone['number'])); ?>"><span class="phone-region"><?php echo e($phone['short']); ?></span><?php echo e($phone['number']); ?></a></li>
        <?php endforeach; ?>
        <li><a href="mailto:<?php echo e(SITE_EMAIL); ?>"><?php echo e(SITE_EMAIL); ?></a></li>
        <?php /* One line per office: Australia links to the Google listing, the
                 rest are plain addresses. See site_offices() in config. */ ?>
        <?php foreach (site_offices() as $office): ?>
          <li>
            <?php if (trim((string) $office['map']) !== ''): ?>
              <a href="<?php echo e($office['map']); ?>" target="_blank" rel="noopener"><span class="phone-region"><?php echo e($office['short']); ?></span><?php echo e($office['address']); ?></a>
            <?php else: ?>
              <span class="phone-region"><?php echo e($office['short']); ?></span><?php echo e($office['address']); ?>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
        <li><?php echo e(SITE_HOURS); ?></li>
      </ul>
    </div>
    <?php
      $form_heading    = 'Send us a message';
      $form_sub        = 'We usually reply within one business day.';
      $form_id_prefix  = 'contact-section-';
      $form_type_value = 'contact';
      include __DIR__ . '/forms/contact-form.php';
    ?>
  </div>
</section>

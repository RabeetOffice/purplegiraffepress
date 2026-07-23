<?php /* Lead-capture contact form shown directly above every CTA. */ ?>
<?php include __DIR__ . '/contact-section.php'; ?>

<section class="cta-band">
  <div class="container cta-layout">
    <div>
      <p class="eyebrow script-mark" style="color : var(--purple-600)">- your turn</p>
      <h2>Ready to publish <em>your story?</em></h2>
      <p>Tell us about your book in 60 seconds. We&apos;ll come back with a free, no-pressure consultation and a real plan.</p>
      <div class="button-row">
        <a class="btn btn-sun" href="<?php echo e(asset('contact.php')); ?>" data-quote-open>Get a Free Consultation →</a>
        <a class="cta-call" href="tel:<?php echo e(preg_replace('/[^0-9+]/', '', SITE_PHONE)); ?>">or call <strong><?php echo e(SITE_PHONE); ?></strong></a>
      </div>
    </div>
    <div class="cta-mascot">
      <img src="<?php echo e(asset(SITE_MASCOT)); ?>" alt="Purple giraffe mascot holding a cheerful publishing pose">
    </div>
  </div>
</section>

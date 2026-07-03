<?php
/* Quote / consultation popup. Included once in the footer so it is available
   on every page. Open it from any element with data-quote-open, or by calling
   the global openQuotePopup() in JavaScript. */
?>
<div class="quote-popup" id="quotePopup" aria-hidden="true">
  <div class="quote-popup-overlay" data-quote-close></div>
  <div class="quote-popup-dialog" role="dialog" aria-modal="true" aria-label="Request a free quote">
    <button class="quote-popup-close" type="button" data-quote-close aria-label="Close popup">&times;</button>
    <?php
      $form_heading    = 'Request your free quote';
      $form_sub        = 'Tell us about your book and we will reply within one business day.';
      $form_id_prefix  = 'q-';
      $form_type_value = 'popup';   // tags the lead as a popup submission for the admin inbox
      include __DIR__ . '/forms/contact-form.php';
    ?>
  </div>
</div>

<form class="newsletter" action="<?php echo e(asset('form-submission.php')); ?>" method="post">
  <input type="hidden" name="form_type" value="newsletter">
  <input type="hidden" name="source_page" value="<?php echo e($_SERVER['REQUEST_URI'] ?? ''); ?>">
  <span class="hp-field" aria-hidden="true"><label>Company<input type="text" name="company" tabindex="-1" autocomplete="off"></label></span>
  <label class="sr-only" for="newsletter-email">Email address</label>
  <input id="newsletter-email" type="email" name="email" placeholder="Enter your email" required>
  <button type="submit">Subscribe</button>
</form>

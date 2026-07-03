<?php
/** 403 page - shown when a logged-in user opens a module they cannot access. */
if (!defined('PGP_ADMIN')) { http_response_code(404); exit; }
$home = admin_home_url();
admin_layout_start('No access', '');
?>
<div class="adm-empty adm-forbidden">
  <div class="adm-empty-glyph" aria-hidden="true">🦒</div>
  <h1>That page is not yours to roam</h1>
  <p>Your account does not have access to this section. If you think it should, ask a site administrator to update your role.</p>
  <a class="adm-btn adm-btn-primary" href="<?php echo e($home); ?>">Back to my home</a>
</div>
<?php admin_layout_end(); ?>

<?php
/**
 * Testimonials manager: add / edit / reorder / delete the entries in
 * includes/testimonials-data.php. Writes are surgical - untouched entries
 * stay byte-identical - and PHP-linted before anything replaces the live file.
 */

require_once __DIR__ . '/includes/auth.php';
$user = admin_require_module('testimonials');
require_once __DIR__ . '/includes/content-store.php';
require_once __DIR__ . '/includes/layout.php';

/* -------------------------------------------------------------- POST (PRG) */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    admin_verify_csrf();

    $action = (string) ($_POST['action'] ?? '');
    $items  = adm_testimonials_read();

    $quote  = trim(strip_tags((string) ($_POST['quote'] ?? '')));
    $author = trim(strip_tags((string) ($_POST['author'] ?? '')));
    $rating = (int) ($_POST['rating'] ?? 5);
    $index  = (int) ($_POST['index'] ?? -1);

    switch ($action) {

        case 'add': {
            if ($quote === '' || $author === '') {
                admin_flash('err', 'Both the quote and the author name are needed.');
                break;
            }
            if ($rating < 1 || $rating > 5) {
                admin_flash('err', 'The rating must be between 1 and 5 stars.');
                break;
            }
            /* Newest testimonial first so fresh praise leads. */
            array_unshift($items, ['quote' => $quote, 'author' => $author, 'rating' => $rating]);
            [$ok, $msg] = adm_testimonials_write($items);
            admin_flash($ok ? 'ok' : 'err', $ok ? 'Testimonial added - it is live everywhere testimonials appear.' : $msg);
            break;
        }

        case 'update': {
            if (!isset($items[$index])) {
                admin_flash('err', 'That testimonial no longer exists.');
                break;
            }
            if ($quote === '' || $author === '') {
                admin_flash('err', 'Both the quote and the author name are needed.');
                break;
            }
            if ($rating < 1 || $rating > 5) {
                admin_flash('err', 'The rating must be between 1 and 5 stars.');
                break;
            }
            $items[$index]['quote']  = $quote;
            $items[$index]['author'] = $author;
            $items[$index]['rating'] = $rating;
            [$ok, $msg] = adm_testimonials_write($items);
            admin_flash($ok ? 'ok' : 'err', $ok ? 'Testimonial updated.' : $msg);
            break;
        }

        case 'delete': {
            if (!isset($items[$index])) {
                admin_flash('err', 'That testimonial no longer exists.');
                break;
            }
            array_splice($items, $index, 1);
            [$ok, $msg] = adm_testimonials_write($items);
            admin_flash($ok ? 'ok' : 'err', $ok ? 'Testimonial deleted.' : $msg);
            break;
        }

        case 'move': {
            $dir  = ($_POST['dir'] ?? '') === 'up' ? -1 : 1;
            $swap = $index + $dir;
            if (!isset($items[$index]) || !isset($items[$swap])) {
                admin_flash('err', 'Cannot move that testimonial any further.');
                break;
            }
            [$items[$index], $items[$swap]] = [$items[$swap], $items[$index]];
            [$ok, $msg] = adm_testimonials_write($items);
            admin_flash($ok ? 'ok' : 'err', $ok ? 'Order updated.' : $msg);
            break;
        }

        default:
            admin_flash('err', 'Unknown action.');
    }

    admin_redirect('testimonials.php');
}

/* --------------------------------------------------------------------- GET */

$items = adm_testimonials_read();

admin_layout_start('Testimonials', 'testimonials');
?>

<div class="adm-page-head">
  <div>
    <h1>Testimonials</h1>
    <p class="adm-sub">These power the home marquee, the service sliders and the testimonials page.</p>
  </div>
  <div class="adm-page-actions">
    <button class="adm-btn adm-btn-primary" data-modal-open="addTestimonialModal">Add testimonial</button>
  </div>
</div>

<?php if (!$items): ?>
  <section class="adm-card adm-empty">
    <p>No testimonials found. If the list should not be empty, the data file could not be parsed - nothing will be overwritten until it can be.</p>
  </section>
<?php endif; ?>

<?php $last = count($items) - 1; ?>
<div class="adm-grid cols-2">
<?php foreach ($items as $i => $t): ?>
  <?php $rating = max(1, min(5, (int) $t['rating'])); ?>
  <article class="adm-card adm-testimonial">
    <div class="adm-stars" aria-label="Rated <?php echo $rating; ?> out of 5">
      <?php echo str_repeat('<span class="adm-star">&#9733;</span>', $rating); ?><?php echo str_repeat('<span class="adm-star adm-star-off">&#9734;</span>', 5 - $rating); ?>
    </div>
    <blockquote class="adm-quote">&ldquo;<?php echo e($t['quote']); ?>&rdquo;</blockquote>
    <p class="adm-quote-author">&mdash; <strong><?php echo e($t['author']); ?></strong></p>

    <div class="adm-row-actions">
      <button type="button" class="adm-btn adm-btn-ghost" data-modal-open="editTestimonial<?php echo (int) $i; ?>">Edit</button>
      <form method="post" action="testimonials.php" class="adm-inline-form">
        <?php echo admin_csrf_field(); ?>
        <input type="hidden" name="action" value="move">
        <input type="hidden" name="index" value="<?php echo (int) $i; ?>">
        <input type="hidden" name="dir" value="up">
        <button type="submit" class="adm-btn adm-btn-ghost" <?php echo $i === 0 ? 'disabled' : ''; ?> aria-label="Move up">&uarr;</button>
      </form>
      <form method="post" action="testimonials.php" class="adm-inline-form">
        <?php echo admin_csrf_field(); ?>
        <input type="hidden" name="action" value="move">
        <input type="hidden" name="index" value="<?php echo (int) $i; ?>">
        <input type="hidden" name="dir" value="down">
        <button type="submit" class="adm-btn adm-btn-ghost" <?php echo $i === $last ? 'disabled' : ''; ?> aria-label="Move down">&darr;</button>
      </form>
      <form method="post" action="testimonials.php" class="adm-inline-form">
        <?php echo admin_csrf_field(); ?>
        <input type="hidden" name="action" value="delete">
        <input type="hidden" name="index" value="<?php echo (int) $i; ?>">
        <button type="submit" class="adm-btn adm-btn-danger" data-confirm="Delete this testimonial? It disappears from the marquee, sliders and testimonials page.">Delete</button>
      </form>
    </div>
  </article>
<?php endforeach; ?>
</div>

<!-- ------------------------------------------------------------- modals -->
<div class="adm-modal" id="addTestimonialModal" hidden>
  <div class="adm-modal-card is-wide">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&times;</button>
    <h2>Add testimonial</h2>
    <form method="post" action="testimonials.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="add">
      <div class="adm-field">
        <label for="t-quote">Quote</label>
        <textarea id="t-quote" name="quote" rows="4" required placeholder="What did the author say about working with us?"></textarea>
      </div>
      <div class="adm-field-row">
        <div class="adm-field">
          <label for="t-author">Author</label>
          <input id="t-author" name="author" type="text" required placeholder="e.g. Jamie Brook">
        </div>
        <div class="adm-field">
          <label for="t-rating">Rating</label>
          <select id="t-rating" name="rating">
            <?php for ($r = 5; $r >= 1; $r--): ?>
              <option value="<?php echo $r; ?>"><?php echo $r; ?> star<?php echo $r > 1 ? 's' : ''; ?></option>
            <?php endfor; ?>
          </select>
        </div>
      </div>
      <div class="adm-modal-foot">
        <button type="button" class="adm-btn adm-btn-light" data-modal-close>Cancel</button>
        <button type="submit" class="adm-btn adm-btn-primary">Add testimonial</button>
      </div>
    </form>
  </div>
</div>

<?php foreach ($items as $i => $t): ?>
  <?php $rating = max(1, min(5, (int) $t['rating'])); ?>
<div class="adm-modal" id="editTestimonial<?php echo (int) $i; ?>" hidden>
  <div class="adm-modal-card is-wide">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&times;</button>
    <h2>Edit testimonial</h2>
    <form method="post" action="testimonials.php">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="update">
      <input type="hidden" name="index" value="<?php echo (int) $i; ?>">
      <div class="adm-field">
        <label for="t-quote-<?php echo (int) $i; ?>">Quote</label>
        <textarea id="t-quote-<?php echo (int) $i; ?>" name="quote" rows="4" required><?php echo e($t['quote']); ?></textarea>
      </div>
      <div class="adm-field-row">
        <div class="adm-field">
          <label for="t-author-<?php echo (int) $i; ?>">Author</label>
          <input id="t-author-<?php echo (int) $i; ?>" name="author" type="text" required value="<?php echo e($t['author']); ?>">
        </div>
        <div class="adm-field">
          <label for="t-rating-<?php echo (int) $i; ?>">Rating</label>
          <select id="t-rating-<?php echo (int) $i; ?>" name="rating">
            <?php for ($r = 5; $r >= 1; $r--): ?>
              <option value="<?php echo $r; ?>" <?php echo $r === $rating ? 'selected' : ''; ?>><?php echo $r; ?> star<?php echo $r > 1 ? 's' : ''; ?></option>
            <?php endfor; ?>
          </select>
        </div>
      </div>
      <div class="adm-modal-foot">
        <button type="button" class="adm-btn adm-btn-light" data-modal-close>Cancel</button>
        <button type="submit" class="adm-btn adm-btn-primary">Save changes</button>
      </div>
    </form>
  </div>
</div>
<?php endforeach; ?>

<?php admin_layout_end(); ?>

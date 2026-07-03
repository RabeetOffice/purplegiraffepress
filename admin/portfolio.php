<?php
/**
 * Portfolio manager: the published books shown in the home-page carousel and
 * on the full portfolio page. Edits includes/data/portfolio-data.php
 * surgically (untouched entries keep their exact bytes). Covers are optional:
 * without an upload the site derives the cover from the Amazon ASIN.
 */

require_once __DIR__ . '/includes/auth.php';
$user = admin_require_module('portfolio');
require_once __DIR__ . '/includes/content-store.php';
require_once __DIR__ . '/includes/layout.php';

/** Cover the ADMIN list should show for a book - same logic as the site. */
function adm_portfolio_display_cover(array $b): string {
    if (($b['cover'] ?? '') !== '') {
        return '../' . $b['cover'];
    }
    if (preg_match('~/dp/([A-Z0-9]{10})~i', (string) ($b['amazon_link'] ?? ''), $m)) {
        return 'https://m.media-amazon.com/images/P/' . strtoupper($m[1]) . '.01._SCLZZZZZZZ_SX500_.jpg';
    }
    return '../assets/images/mascot.webp';
}

/* -------------------------------------------------------------- POST (PRG) */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    admin_verify_csrf();

    $action = (string) ($_POST['action'] ?? '');
    $items  = adm_portfolio_read();

    $category = trim(strip_tags((string) ($_POST['category'] ?? '')));
    if ($category === '') $category = 'Children Book';
    $author = trim(strip_tags((string) ($_POST['author'] ?? '')));
    $title  = trim(strip_tags((string) ($_POST['title'] ?? '')));
    $link   = trim((string) ($_POST['amazon_link'] ?? ''));
    $index  = (int) ($_POST['index'] ?? -1);

    $hasUpload = isset($_FILES['cover'])
        && is_array($_FILES['cover'])
        && ($_FILES['cover']['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_NO_FILE;

    switch ($action) {

        case 'add':
        case 'update': {
            if ($action === 'update' && !isset($items[$index])) {
                admin_flash('err', 'That book no longer exists.');
                break;
            }
            if ($title === '' || $author === '' || $link === '') {
                admin_flash('err', 'Title, author and the Amazon link are all needed.');
                break;
            }
            if (!preg_match('~^https://www\.amazon\.[a-z.]+/~', $link)) {
                admin_flash('err', 'The Amazon link must start with https://www.amazon.com/ (or another Amazon storefront).');
                break;
            }

            $cover = $action === 'update' ? (string) ($items[$index]['cover'] ?? '') : '';
            if ($action === 'update' && !empty($_POST['remove_cover'])) {
                $cover = '';
            }
            if ($hasUpload) {
                [$ok, $res] = admin_upload_image_webp($_FILES['cover'], 'assets/images/portfolio', admin_slugify($title));
                if (!$ok) {
                    admin_flash('err', $res);
                    break;
                }
                $cover = $res;
            }

            if ($action === 'add') {
                /* New books go to the TOP so the latest work shows first. */
                array_unshift($items, [
                    'category'    => $category,
                    'author'      => $author,
                    'title'       => $title,
                    'amazon_link' => $link,
                    'cover'       => $cover,
                ]);
            } else {
                $items[$index]['category']    = $category;
                $items[$index]['author']      = $author;
                $items[$index]['title']       = $title;
                $items[$index]['amazon_link'] = $link;
                $items[$index]['cover']       = $cover;
            }

            [$ok, $msg] = adm_portfolio_write($items);
            admin_flash($ok ? 'ok' : 'err', $ok
                ? ($action === 'add' ? 'Book added to the portfolio.' : 'Book updated.')
                : $msg);
            break;
        }

        case 'delete': {
            if (!isset($items[$index])) {
                admin_flash('err', 'That book no longer exists.');
                break;
            }
            array_splice($items, $index, 1);
            [$ok, $msg] = adm_portfolio_write($items);
            admin_flash($ok ? 'ok' : 'err', $ok ? 'Book removed from the portfolio.' : $msg);
            break;
        }

        case 'move': {
            $dir  = ($_POST['dir'] ?? '') === 'up' ? -1 : 1;
            $swap = $index + $dir;
            if (!isset($items[$index]) || !isset($items[$swap])) {
                admin_flash('err', 'Cannot move that book any further.');
                break;
            }
            [$items[$index], $items[$swap]] = [$items[$swap], $items[$index]];
            [$ok, $msg] = adm_portfolio_write($items);
            admin_flash($ok ? 'ok' : 'err', $ok ? 'Order updated.' : $msg);
            break;
        }

        default:
            admin_flash('err', 'Unknown action.');
    }

    admin_redirect('portfolio.php');
}

/* --------------------------------------------------------------------- GET */

$items = adm_portfolio_read();

admin_layout_start('Portfolio', 'portfolio');
?>

<div class="adm-page-head">
  <div>
    <h1>Portfolio</h1>
    <p class="adm-sub">The published books in the home-page carousel and on the portfolio page.</p>
  </div>
  <div class="adm-page-actions">
    <button class="adm-btn adm-btn-primary" data-modal-open="addBookModal">Add book</button>
  </div>
</div>

<?php if (!$items): ?>
  <section class="adm-card adm-empty">
    <p>No books found. If the list should not be empty, the data file could not be parsed - nothing will be overwritten until it can be.</p>
  </section>
<?php endif; ?>

<?php $last = count($items) - 1; ?>
<div class="adm-book-grid">
<?php foreach ($items as $i => $b): ?>
  <article class="adm-card adm-book">
    <img class="adm-book-cover" src="<?php echo e(adm_portfolio_display_cover($b)); ?>" alt="Cover of <?php echo e($b['title']); ?>" loading="lazy">
    <span class="adm-chip"><?php echo ($b['cover'] ?? '') !== '' ? 'custom cover' : 'amazon cover'; ?></span>
    <h3 class="adm-book-title"><?php echo e($b['title']); ?></h3>
    <p class="adm-book-author"><?php echo e($b['author']); ?> &middot; <?php echo e($b['category']); ?></p>
    <a class="adm-book-link" href="<?php echo e($b['amazon_link']); ?>" target="_blank" rel="noopener">View on Amazon &#8599;</a>

    <div class="adm-row-actions">
      <button type="button" class="adm-btn adm-btn-ghost" data-modal-open="editBook<?php echo (int) $i; ?>">Edit</button>
      <form method="post" action="portfolio.php" class="adm-inline-form">
        <?php echo admin_csrf_field(); ?>
        <input type="hidden" name="action" value="move">
        <input type="hidden" name="index" value="<?php echo (int) $i; ?>">
        <input type="hidden" name="dir" value="up">
        <button type="submit" class="adm-btn adm-btn-ghost" <?php echo $i === 0 ? 'disabled' : ''; ?> aria-label="Move up">&uarr;</button>
      </form>
      <form method="post" action="portfolio.php" class="adm-inline-form">
        <?php echo admin_csrf_field(); ?>
        <input type="hidden" name="action" value="move">
        <input type="hidden" name="index" value="<?php echo (int) $i; ?>">
        <input type="hidden" name="dir" value="down">
        <button type="submit" class="adm-btn adm-btn-ghost" <?php echo $i === $last ? 'disabled' : ''; ?> aria-label="Move down">&darr;</button>
      </form>
      <form method="post" action="portfolio.php" class="adm-inline-form">
        <?php echo admin_csrf_field(); ?>
        <input type="hidden" name="action" value="delete">
        <input type="hidden" name="index" value="<?php echo (int) $i; ?>">
        <button type="submit" class="adm-btn adm-btn-danger" data-confirm="Remove this book from the portfolio? The uploaded cover file (if any) stays on the server.">Delete</button>
      </form>
    </div>
  </article>
<?php endforeach; ?>
</div>

<!-- ------------------------------------------------------------- modals -->
<div class="adm-modal" id="addBookModal" hidden>
  <div class="adm-modal-card is-wide">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&times;</button>
    <h2>Add book</h2>
    <form method="post" action="portfolio.php" enctype="multipart/form-data">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="add">
      <div class="adm-field-row">
        <div class="adm-field">
          <label for="p-title">Title</label>
          <input id="p-title" name="title" type="text" required placeholder="e.g. Tilly's Rainbow Adventure">
        </div>
        <div class="adm-field">
          <label for="p-author">Author</label>
          <input id="p-author" name="author" type="text" required placeholder="e.g. Jessica Schoettle">
        </div>
      </div>
      <div class="adm-field-row">
        <div class="adm-field">
          <label for="p-category">Category</label>
          <input id="p-category" name="category" type="text" value="Children Book">
        </div>
        <div class="adm-field">
          <label for="p-link">Amazon link</label>
          <input id="p-link" name="amazon_link" type="url" required placeholder="https://www.amazon.com/dp/XXXXXXXXXX/">
        </div>
      </div>
      <div class="adm-field">
        <label for="p-cover">Cover image</label>
        <input id="p-cover" class="adm-drop-style" name="cover" type="file" accept="image/*">
        <p class="adm-help">Optional &mdash; without an upload the Amazon cover is used automatically.</p>
      </div>
      <div class="adm-modal-foot">
        <button type="button" class="adm-btn adm-btn-light" data-modal-close>Cancel</button>
        <button type="submit" class="adm-btn adm-btn-primary">Add book</button>
      </div>
    </form>
  </div>
</div>

<?php foreach ($items as $i => $b): ?>
<div class="adm-modal" id="editBook<?php echo (int) $i; ?>" hidden>
  <div class="adm-modal-card is-wide">
    <button type="button" class="adm-modal-close" data-modal-close aria-label="Close">&times;</button>
    <h2>Edit book</h2>
    <form method="post" action="portfolio.php" enctype="multipart/form-data">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="update">
      <input type="hidden" name="index" value="<?php echo (int) $i; ?>">
      <div class="adm-field">
        <label for="p-title-<?php echo (int) $i; ?>">Title</label>
        <input id="p-title-<?php echo (int) $i; ?>" name="title" type="text" required value="<?php echo e($b['title']); ?>">
      </div>
      <div class="adm-field">
        <label for="p-author-<?php echo (int) $i; ?>">Author</label>
        <input id="p-author-<?php echo (int) $i; ?>" name="author" type="text" required value="<?php echo e($b['author']); ?>">
      </div>
      <div class="adm-field">
        <label for="p-category-<?php echo (int) $i; ?>">Category</label>
        <input id="p-category-<?php echo (int) $i; ?>" name="category" type="text" value="<?php echo e($b['category']); ?>">
      </div>
      <div class="adm-field">
        <label for="p-link-<?php echo (int) $i; ?>">Amazon link</label>
        <input id="p-link-<?php echo (int) $i; ?>" name="amazon_link" type="url" required value="<?php echo e($b['amazon_link']); ?>">
      </div>
      <div class="adm-field">
        <label for="p-cover-<?php echo (int) $i; ?>">Replace cover</label>
        <input id="p-cover-<?php echo (int) $i; ?>" class="adm-drop-style" name="cover" type="file" accept="image/*">
        <p class="adm-help">Optional &mdash; without an upload the Amazon cover is used automatically.</p>
      </div>
      <?php if (($b['cover'] ?? '') !== ''): ?>
        <label class="adm-check">
          <input type="checkbox" name="remove_cover" value="1">
          Remove the uploaded cover and go back to the Amazon one
        </label>
      <?php endif; ?>
      <div class="adm-modal-foot">
        <button type="button" class="adm-btn adm-btn-light" data-modal-close>Cancel</button>
        <button type="submit" class="adm-btn adm-btn-primary">Save changes</button>
      </div>
    </form>
  </div>
</div>
<?php endforeach; ?>

<?php admin_layout_end(); ?>

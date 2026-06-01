<?php require __DIR__ . '/data/portfolio-data.php'; ?>
<?php
$portfolio_mode = $portfolio_mode ?? 'carousel';

if (!function_exists('pgp_book_card_inner')) {
    function pgp_book_card_inner(array $book): string
    {
        $alt = $book['title'] . ' by ' . $book['author'];
        ob_start(); ?>
        <a class="book-cover-link" href="<?php echo e($book['amazon_link']); ?>" target="_blank" rel="noopener" aria-label="<?php echo e($alt); ?> on Amazon">
          <span class="book-cover-frame">
            <img src="<?php echo e($book['image']); ?>" alt="<?php echo e($alt); ?>" loading="lazy">
          </span>
        </a>
        <span class="book-cat"><?php echo e($book['category']); ?></span>
        <h3><?php echo e($book['title']); ?></h3>
        <p class="book-author">by <?php echo e($book['author']); ?></p>
        <?php
        return ob_get_clean();
    }
}
?>
<?php if ($portfolio_mode === 'grid'): ?>
<div class="portfolio-controls">
  <?php if (count($portfolioCategories) > 1): ?>
  <div class="genre-tabs" role="tablist" aria-label="Filter books by genre">
    <?php foreach ($portfolioTabs as $slug => $label): ?>
      <button type="button" class="genre-tab<?php echo $slug === 'all' ? ' active' : ''; ?>" data-filter="<?php echo e($slug); ?>"><?php echo e($label); ?></button>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <label class="portfolio-search">
    <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="7" fill="none" stroke="currentColor" stroke-width="1.8"/><path d="m20 20-3.2-3.2" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    <input type="search" id="portfolioSearch" placeholder="Search by title or author" aria-label="Search books">
  </label>
</div>
<div class="portfolio-books portfolio-books-grid" id="portfolioGrid">
  <?php foreach ($portfolioItems as $book): ?>
    <article class="book-card reveal" data-category="<?php echo e($book['category_slug']); ?>" data-search="<?php echo e(strtolower($book['title'] . ' ' . $book['author'])); ?>">
      <?php echo pgp_book_card_inner($book); ?>
    </article>
  <?php endforeach; ?>
</div>
<p class="portfolio-empty" hidden>No books match your search yet. Try another genre or keyword.</p>
<?php elseif ($portfolio_mode === 'marquee'): ?>
<div class="catalog-marquee">
  <span class="catalog-sparkles" aria-hidden="true"></span>
  <div class="catalog-track portfolio-marquee swiper" role="region" aria-label="Books we have published">
    <div class="swiper-wrapper">
      <?php foreach ($portfolioItems as $book): ?>
        <article class="book-card swiper-slide">
          <?php echo pgp_book_card_inner($book); ?>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php else: ?>
<div class="portfolio-swiper swiper">
  <div class="swiper-wrapper">
    <?php foreach ($portfolioItems as $book): ?>
      <article class="book-card swiper-slide">
        <?php echo pgp_book_card_inner($book); ?>
      </article>
    <?php endforeach; ?>
  </div>
  <div class="swiper-pagination"></div>
  <button class="swiper-button-prev" type="button" aria-label="Previous books"></button>
  <button class="swiper-button-next" type="button" aria-label="Next books"></button>
</div>
<?php endif; ?>

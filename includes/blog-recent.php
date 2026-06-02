<?php
/**
 * Full-width "more articles" carousel. Used below single posts and on the
 * home page. Images lazy-load with a skeleton placeholder.
 *
 * Optional overrides (set before including; reset afterwards):
 *   $recent_limit    int     How many posts to show. Default 6.
 *   $recent_exclude  string  Slug to exclude (defaults to $current_slug).
 *   $recent_eyebrow  string  Small label above the heading.
 *   $recent_heading  string  Heading HTML (may contain <em>).
 */
require_once __DIR__ . '/blog-data.php';

$recent_limit   = $recent_limit   ?? 6;
$recent_exclude = $recent_exclude ?? ($current_slug ?? null);
$recent_eyebrow = $recent_eyebrow ?? '- keep reading';
$recent_heading = $recent_heading ?? 'More from <em>the blog.</em>';

$recent_posts = blog_get_recent($recent_limit, $recent_exclude);
if (empty($recent_posts)) { $recent_limit = $recent_exclude = $recent_eyebrow = $recent_heading = null; return; }
?>
<section class="section figma-lavender notes-section blog-more">
  <div class="container section-heading split-heading">
    <div>
      <p class="eyebrow script-mark"><?php echo $recent_eyebrow; ?></p>
      <h2><?php echo $recent_heading; ?></h2>
    </div>
    <a class="text-link" href="<?php echo e(blog_index_url()); ?>">All articles &rarr;</a>
  </div>
  <div class="container">
    <div class="blog-recent-swiper swiper">
      <div class="swiper-wrapper">
        <?php foreach ($recent_posts as $rp): ?>
          <?php $rp_tone = blog_category_tone($rp['category'] ?? null); ?>
          <article class="note-card swiper-slide">
            <a class="note-art <?php echo e($rp_tone); ?><?php echo !empty($rp['image']) ? ' has-img' : ''; ?>" href="<?php echo e(blog_post_url($rp['slug'])); ?>" aria-label="<?php echo e($rp['title']); ?>">
              <?php if (!empty($rp['image'])): ?>
                <img src="<?php echo e($rp['image']); ?>" alt="<?php echo e($rp['title']); ?>" loading="lazy" decoding="async">
              <?php endif; ?>
            </a>
            <p class="note-category"><?php echo e($rp['category'] ?? 'Story'); ?></p>
            <h3><a href="<?php echo e(blog_post_url($rp['slug'])); ?>"><?php echo e($rp['title']); ?></a></h3>
            <p><?php echo e($rp['excerpt']); ?></p>
            <a href="<?php echo e(blog_post_url($rp['slug'])); ?>">Read more &rarr;</a>
          </article>
        <?php endforeach; ?>
      </div>
      <div class="blog-recent-controls">
        <button class="blog-recent-prev" type="button" aria-label="Previous articles"><span aria-hidden="true">&larr;</span></button>
        <div class="swiper-pagination"></div>
        <button class="blog-recent-next" type="button" aria-label="More articles"><span aria-hidden="true">&rarr;</span></button>
      </div>
    </div>
  </div>
</section>
<?php $recent_limit = $recent_exclude = $recent_eyebrow = $recent_heading = null; /* reset for independence */ ?>

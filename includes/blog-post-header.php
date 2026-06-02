<?php
/**
 * Banner (breadcrumb, category chip, title, meta) + hero cover for a single
 * blog post. Expects: $post (array).
 */
if (!isset($post) || !is_array($post)) return;
$tone = blog_category_tone($post['category'] ?? null);
?>
<section class="banner blog-post-banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs">
        <a href="<?php echo e(asset('index.php')); ?>">Home</a> /
        <a href="<?php echo e(blog_index_url()); ?>">Blog</a> /
        <span><?php echo e($post['category'] ?? 'Story'); ?></span>
      </div>
      <?php if (!empty($post['category'])): ?>
        <span class="blog-chip blog-chip-lg"><?php echo e($post['category']); ?></span>
      <?php endif; ?>
      <h1><?php echo e($post['title']); ?></h1>
      <div class="blog-meta blog-meta-center">
        <span>By <?php echo e($post['author'] ?? SITE_NAME . ' Editorial'); ?></span>
        <span class="blog-dot" aria-hidden="true">&middot;</span>
        <span><?php echo e(blog_format_date($post['date'])); ?></span>
        <span class="blog-dot" aria-hidden="true">&middot;</span>
        <span><?php echo e($post['read'] ?? '5 min read'); ?></span>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <figure class="blog-hero-cover <?php echo e($tone); ?>">
    <?php if (!empty($post['image'])): ?>
      <img src="<?php echo e(asset($post['image'])); ?>" alt="<?php echo e($post['title']); ?>" loading="eager" decoding="async">
    <?php endif; ?>
    <span class="blog-hero-glyph" aria-hidden="true"><?php echo e($post['glyph'] ?? '★'); ?></span>
  </figure>
</div>

<?php include 'includes/config.php'; ?>
<?php
$page_title = "Meet Our Children's Book Illustrators | Purple Giraffe Press";
$page_description = 'Meet the illustrators Purple Giraffe Press pairs with authors, from whimsical watercolour to cinematic 3D, bright cartoon, and classic pencil and ink.';
$canonical_path = 'artists.php';
/* Hidden page: kept in code and reachable by direct URL, but unlinked across the
   site and excluded from search engines (see includes/header.php robots meta). */
$page_noindex = true;

/* Decorative motif shown on the artwork panel when no sample image is set. */
function artist_motif(string $key): string {
    $p = [
        'watercolor' => '<path d="M12 3s6 7 6 11a6 6 0 0 1-12 0c0-4 6-11 6-11Z"/>',
        '3d'         => '<path d="m12 2 9 5v10l-9 5-9-5V7l9-5Z"/><path d="m3 7 9 5 9-5"/><path d="M12 12v10"/>',
        'cute'       => '<path d="M12 21s-7-4.6-9.5-9A5.2 5.2 0 0 1 12 6a5.2 5.2 0 0 1 9.5 6C19 16.4 12 21 12 21Z"/>',
        'jungle'     => '<circle cx="12" cy="12" r="4"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3M4.9 4.9l2.1 2.1M17 17l2.1 2.1M19.1 4.9 17 7M7 17l-2.1 2.1"/>',
        'animation'  => '<path d="M12 2 15 8.5 22 9.3l-5 4.7L18.2 21 12 17.5 5.8 21 7 14 2 9.3l7-0.8Z"/>',
        'pencil'     => '<path d="M3 21s4-1 7-4l9-9-3-3-9 9c-3 3-4 7-4 7Z"/><path d="m14 6 4 4"/>',
    ];
    return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">'
        . ($p[$key] ?? $p['watercolor']) . '</svg>';
}

/* Illustrators. Add a sample image with 'art' => '...url...' to replace the
   gradient artwork panel; otherwise a themed panel + motif is shown. */
$illustrators = [
    ['name' => 'Misra Karahan', 'role' => 'Lead Illustrator',    'style' => 'Whimsical Watercolour', 'motif' => 'watercolor', 'accent' => '#3aa0ff', 'avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=200&h=200', 'bio' => 'Misra specialises in breathtaking, soft, emotionally evocative watercolour worlds. Her gentle strokes are perfect for bedtime stories, magical forests, and classic fairy-tale aesthetics.'],
    ['name' => 'David Miles',   'role' => 'Senior Illustrator',  'style' => 'Cinematic 3D CGI',      'motif' => '3d',         'accent' => '#f97316', 'avatar' => 'https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?auto=format&fit=crop&q=80&w=200&h=200', 'bio' => 'David brings stories to life with immense depth, rich textures, and dramatic lighting reminiscent of premium animated movies. Incredible for sci-fi, fantasy, and action-packed storytelling.'],
    ['name' => 'Pip Meadow',    'role' => 'Illustrator',         'style' => 'Bright & Bubbly Cute',  'motif' => 'cute',       'accent' => '#22b06b', 'avatar' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=200&h=200', 'bio' => 'Pip is the master of adorable characters and vibrant colours. If you need cute animals, expressive eyes, and highly engaging details that kids love to point at, Pip is your match.'],
    ['name' => 'Ben Carter',    'role' => 'Illustrator',         'style' => 'Vibrant Jungle Adventure', 'motif' => 'jungle',  'accent' => '#ec4899', 'avatar' => 'https://images.unsplash.com/photo-1531384441138-2736e62e0919?auto=format&fit=crop&q=80&w=200&h=200', 'bio' => 'Ben creates incredibly loud, fun, and energetic scenes packed with laughter. His work thrives in stories driven by humour, animals, and bright, bold, saturated colour palettes.'],
    ['name' => 'Lucy Chen',     'role' => 'Character Designer',  'style' => '2D Digital Animation',  'motif' => 'animation',  'accent' => '#8b5cf6', 'avatar' => 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&q=80&w=200&h=200', 'bio' => "Lucy's artwork mirrors the flawless style of modern animated shows. Very vivid, expressive, and universally beloved by young readers transitioning into chapter books."],
    ['name' => 'Charles Oak',   'role' => 'Classic Illustrator', 'style' => 'Classic Pencil & Ink',  'motif' => 'pencil',     'accent' => '#4b5563', 'avatar' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&q=80&w=200&h=200', 'bio' => 'Charles produces timeless, detailed, and evocative line art. Perfect for historical tales, mysteries, and classic literature aesthetics reminiscent of the golden age of publishing.'],
];
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Artists</div>
      <h1>Illustrators who know how <em>stories feel.</em></h1>
      <p class="lead">We match each manuscript with artists who understand character, emotion, page turns, and the magic of read-aloud books.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot holding an artist palette">
  </div>
</section>

<section class="section section-white">
  <div class="container">
    <div class="illus-grid">
      <?php foreach ($illustrators as $a): ?>
        <article class="illus-card reveal" style="--ac: <?php echo e($a['accent']); ?>;">
          <div class="illus-art">
            <?php if (!empty($a['art'])): ?>
              <img src="<?php echo e($a['art']); ?>" alt="<?php echo e($a['style'] . ' artwork by ' . $a['name']); ?>" loading="lazy" decoding="async">
            <?php else: ?>
              <span class="illus-motif" aria-hidden="true"><?php echo artist_motif($a['motif']); ?></span>
            <?php endif; ?>
            <span class="illus-style"><?php echo e($a['style']); ?></span>
          </div>
          <div class="illus-head">
            <span class="illus-photo"><img src="<?php echo e($a['avatar']); ?>" alt="<?php echo e($a['name']); ?>" loading="lazy" decoding="async"></span>
            <div class="illus-id">
              <h3><?php echo e($a['name']); ?></h3>
              <p class="illus-role"><?php echo e($a['role']); ?></p>
            </div>
          </div>
          <p class="illus-bio"><?php echo e($a['bio']); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container split-grid">
    <div>
      <p class="eyebrow script-mark">- for artists</p>
      <h2>Interested in illustrating <em>with us?</em></h2>
      <p>We love artists who can translate a manuscript into expressive characters, clear page turns, and artwork families want to revisit.</p>
    </div>
    <div class="card">
      <h3>Send a portfolio</h3>
      <p>Share a portfolio link, your preferred age category, typical timeline, and a few sample spreads or character studies.</p>
      <a class="btn btn-primary" style="margin-top: 22px;" href="contact.php" data-quote-open>Contact the art team</a>
    </div>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

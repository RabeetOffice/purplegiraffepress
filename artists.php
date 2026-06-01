<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Artists - Purple Giraffe Press';
$page_description = 'Meet the kinds of illustrators and artists Purple Giraffe Press pairs with children\'s book authors for custom artwork.';
$canonical_path = 'artists.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Artists</div>
      <h1>Illustrators who know how stories feel.</h1>
      <p class="lead">We match each manuscript with artists who understand character, emotion, page turns, and the magic of read-aloud books.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot holding an artist palette">
  </div>
</section>

<section class="section section-white">
  <div class="container center">
    <p class="eyebrow">Creative team</p>
    <h2>Illustration styles for every kind of adventure</h2>
    <div class="artist-grid">
      <article class="artist-card reveal"><div class="artist-avatar">M</div><h3>Mira Santos</h3><p>Soft watercolor-style picture book scenes with warm family emotion.</p></article>
      <article class="artist-card reveal"><div class="artist-avatar">J</div><h3>Jon Bell</h3><p>Bold character-driven spreads for funny early readers and classroom books.</p></article>
      <article class="artist-card reveal"><div class="artist-avatar">A</div><h3>Asha Reed</h3><p>Whimsical fantasy worlds, gentle textures, and expressive animal characters.</p></article>
      <article class="artist-card reveal"><div class="artist-avatar">L</div><h3>Luca Chen</h3><p>Clean digital art with bright shapes, movement, and strong cover impact.</p></article>
      <article class="artist-card reveal"><div class="artist-avatar">N</div><h3>Nora Hale</h3><p>Cozy bedtime palettes, soft skies, and tender character moments.</p></article>
      <article class="artist-card reveal"><div class="artist-avatar">T</div><h3>Tomi Brooks</h3><p>Energetic linework for adventure, humor, and expressive chapter book art.</p></article>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container split-grid">
    <div>
      <p class="eyebrow">For artists</p>
      <h2>Interested in illustrating with us?</h2>
      <p class="lead">We love artists who can translate a manuscript into expressive characters, clear page turns, and artwork families want to revisit.</p>
    </div>
    <div class="card">
      <h3>Send a portfolio</h3>
      <p>Share a portfolio link, your preferred age category, typical timeline, and a few sample spreads or character studies.</p>
      <a class="btn btn-primary" style="margin-top: 22px;" href="contact.php">Contact the art team</a>
    </div>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

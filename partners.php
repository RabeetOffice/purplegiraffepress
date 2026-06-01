<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Partners - Purple Giraffe Press';
$page_description = 'Purple Giraffe Press works with publishing, distribution, review, school, library, and creative partners to support children\'s book authors.';
$canonical_path = 'partners.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Partners</div>
      <h1>Publishing works best with good company.</h1>
      <p class="lead">Our partner network helps books move from polished files to readers, reviewers, classrooms, and shelves.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot waving to publishing partners">
  </div>
</section>

<section class="section section-white">
  <div class="container center">
    <p class="eyebrow">Network</p>
    <h2>Partners that support the journey</h2>
    <div class="partner-grid">
      <article class="partner-card reveal"><div class="partner-mark">A</div><h3>Amazon</h3><p>Retail availability and print-on-demand access for independent authors.</p></article>
      <article class="partner-card reveal"><div class="partner-mark">B</div><h3>Barnes & Noble</h3><p>Reader-facing discovery and retail presence for polished book listings.</p></article>
      <article class="partner-card reveal"><div class="partner-mark">I</div><h3>IngramSpark</h3><p>Distribution paths used by bookstores, schools, libraries, and global retailers.</p></article>
      <article class="partner-card reveal"><div class="partner-mark">K</div><h3>Kirkus Reviews</h3><p>Review pathways and credibility support for select book launches.</p></article>
      <article class="partner-card reveal"><div class="partner-mark">G</div><h3>Goodreads</h3><p>Reader community visibility and author profile support.</p></article>
      <article class="partner-card reveal"><div class="partner-mark">L</div><h3>Libraries</h3><p>Metadata and outreach materials that help librarians understand the book.</p></article>
      <article class="partner-card reveal"><div class="partner-mark">S</div><h3>Schools</h3><p>Classroom-friendly positioning for readings, visits, and educator materials.</p></article>
      <article class="partner-card reveal"><div class="partner-mark">P</div><h3>Podcasts</h3><p>Children's book conversations, launch interviews, and audience-building support.</p></article>
    </div>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

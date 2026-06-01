<?php include 'includes/config.php'; ?>
<?php
$page_title = 'About Us - Purple Giraffe Press';
$page_description = 'Meet Purple Giraffe Press, a boutique children\'s book publisher built for authors who want premium creative support and 100% royalties.';
$canonical_path = 'about-us.php';
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / About Us</div>
      <h1>Small press care. Big story energy.</h1>
      <p class="lead">Purple Giraffe Press exists for children's authors who want a real creative partner, not a cold production line.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot smiling beside the about page title">
  </div>
</section>

<section class="section section-white">
  <div class="container split-grid">
    <div>
      <p class="eyebrow">Our story</p>
      <h2>We help tender, funny, brave children's books reach real readers.</h2>
      <p class="lead">We're not a factory. We're a small, focused team that takes on a handful of stories at a time and treats every one like our own.</p>
      <p>From first manuscript notes to finished files, we help authors shape books with warmth, rhythm, beautiful artwork, and a publishing path they can actually understand.</p>
    </div>
    <div class="card reveal">
      <h3>Maya Okafor</h3>
      <p class="eyebrow" style="margin-top: 4px;">Founder & Publisher</p>
      <p>"Children's books look simple on the shelf, but every page needs rhythm, intention, warmth, and trust. We built Purple Giraffe Press to give authors that kind of care."</p>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow">What we stand for</p>
    <h2>A publishing model made for authors</h2>
    <div class="values-grid">
      <article class="value-card reveal"><div class="icon">A</div><h3>Author Ownership</h3><p>You keep your copyright, characters, rights, and royalties.</p></article>
      <article class="value-card reveal"><div class="icon">B</div><h3>Beautiful Craft</h3><p>Editing, illustration, and design are handled by people who understand children's books.</p></article>
      <article class="value-card reveal"><div class="icon">C</div><h3>Clear Guidance</h3><p>We explain the process plainly so publishing feels exciting instead of overwhelming.</p></article>
      <article class="value-card reveal"><div class="icon">D</div><h3>Reader Joy</h3><p>Every decision points back to children, families, classrooms, and storytime.</p></article>
    </div>
  </div>
</section>

<section class="section section-white">
  <div class="container center">
    <p class="eyebrow">Testimonials</p>
    <h2>Authors remember the care</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

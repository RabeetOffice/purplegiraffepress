<?php
$GLOBALS['asset_base'] = '../';
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/blog-data.php';

$current_slug = 'why-diverse-stories-matter-in-childrens-books';
$post = blog_get_post($current_slug);

$page_title       = $post['title'] . ' | ' . SITE_NAME . ' Blog';
$page_description = $post['excerpt'] ?? '';
$canonical_path   = blog_post_path($current_slug);
$canonical_url    = page_url($canonical_path);
$share_url        = $canonical_url;
$breadcrumbs = [
    ['name' => 'Home', 'url' => page_url('index.php')],
    ['name' => 'Blog', 'url' => page_url('blogs/')],
    ['name' => $post['title'], 'url' => $canonical_url],
];

$page_faqs = [
    ['q' => 'What is meant by mirrors and windows in children\'s books?', 'a' => 'Mirrors are books in which a child sees their own life reflected, affirming that they belong in stories. Windows are books that show a life unlike the reader\'s, building understanding and empathy. A healthy reading diet includes both.'],
    ['q' => 'Do you work with sensitivity readers?', 'a' => 'Where a story draws on a culture or experience outside the author\'s own, we engage sensitivity readers so that details ring true and characters are written with care and accuracy.'],
    ['q' => 'I want to write about my own culture. Is there a place for that?', 'a' => 'Absolutely. Authentic, specific stories rooted in lived experience are exactly what we seek out. We would warmly encourage you to submit through our submissions page.'],
];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/blog-schema.php';
require __DIR__ . '/../includes/blog-post-header.php';
?>

<section class="section section-white blog-single">
  <div class="container blog-layout">
    <div class="blog-main">
    <article class="blog-content">

<p>There is a well-known idea in children's literature that books should be both mirrors and windows. A mirror that lets a child see themselves and know they belong in stories. A window that lets them look into a life unlike their own and understand it a little better. Both matter, and getting them right is a question of craft as much as conscience.</p>

<h2>Every child deserves a mirror</h2>
<p>When a child never finds a character who looks like them, lives like them or loves like them, the quiet message is that stories are not really for them. When they do, something settles. They belong here. For a publisher this is not an add-on. It shapes which manuscripts we seek out, which authors we champion, and the worlds our illustrators build.</p>

<h2>Windows build empathy</h2>
<p>Reading about a life different from your own is one of the most powerful things a book can do, especially early. A child who walks beside a character from another culture, family or ability for the length of a story carries a little of that understanding into the playground and beyond. Empathy is not lectured into children. It is practised, page by page, in the safe rehearsal space of a good story.</p>

<h2>Representation is craft, not box-ticking</h2>
<p>Done badly, diversity becomes a checklist, a token character with no inner life. Done well, it is simply good writing: specific, rounded characters whose backgrounds are part of who they are rather than the whole of it. We work closely with authors and, where it matters, sensitivity readers, so that the details ring true and the characters feel like people, not lessons.</p>

<h2>Australian stories, and the wider world</h2>
<p>We are proudly Australian, and we love stories that sound like the children who live here, from the bush and the reef to city apartments and country towns. Alongside those, we champion stories that travel across cultures and continents. A catalogue that holds both is richer for every reader. It is part of why we give books back to <a href="<?php echo e(asset('distribution.php')); ?>">schools and libraries</a> across the country.</p>

<ul>
<li>Mirrors tell a child they belong in stories.</li>
<li>Windows let a child understand another life.</li>
<li>Specific, rounded characters beat tokens every time.</li>
<li>Local voices and global stories enrich one shelf.</li>
</ul>

<p>If you are writing a story drawn from your own background or community, we would love to read it. Our <a href="<?php echo e(asset('submissions.php')); ?>">submissions</a> page is open, and our note on <a href="<?php echo e(blog_post_url('submitting-your-childrens-manuscript')); ?>">what publishers look for</a> will help you send it with confidence.</p>

      <?php require __DIR__ . '/../includes/blog-inline-cta.php'; ?>
      </article>

      <?php $faq_mode = 'column'; require __DIR__ . '/../includes/blog-faq.php'; ?>
      <?php require __DIR__ . '/../includes/blog-author.php'; ?>
    </div>

    <?php require __DIR__ . '/../includes/blog-sidebar.php'; ?>
  </div>
</section>

<?php require __DIR__ . '/../includes/blog-recent.php'; ?>
<?php require __DIR__ . '/../includes/cta.php'; ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>

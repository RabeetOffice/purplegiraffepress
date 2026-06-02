<?php
$GLOBALS['asset_base'] = '../';
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/blog-data.php';

$current_slug = 'what-makes-a-childrens-book-illustration-work';
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
    ['q' => 'Do I choose the illustrator for my book?', 'a' => 'Pairing is collaborative. We propose illustrators whose style suits your story, share samples, and refine the match with you. The goal is a partnership that lifts your words rather than simply decorating them.'],
    ['q' => 'How long does illustration take?', 'a' => 'A full picture book typically takes several months, moving through character design, rough sketches for every spread, then final art. Good illustration is unhurried work, and the schedule reflects that.'],
    ['q' => 'Can my book mix illustration styles?', 'a' => 'Usually a single, consistent style serves a picture book best, because it holds the world together. There are exceptions for deliberate effect, but consistency is what lets young readers settle into the story.'],
];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/blog-schema.php';
require __DIR__ . '/../includes/blog-post-header.php';
?>

<section class="section section-white blog-single">
  <div class="container blog-layout">
    <div class="blog-main">
    <article class="blog-content">

<p>Ask a child why they love a book and they will often point at the pictures. Ask an art director the same question and the answer is more surprising: the best illustrations are not the prettiest, they are the ones that tell the story the words cannot. Here is what we look for when we pair an illustrator with a manuscript.</p>

<h2>Pictures should add, not echo</h2>
<p>If the text says the boy was nervous and the picture shows a nervous boy, the spread is doing one job twice. The art that works adds something new: the friendly dog he has not noticed yet, the storm building outside the window, the small detail that lets the reader know more than the character does. This gap between word and image is where a picture book breathes.</p>

<h2>Character you can read in a single line</h2>
<p>A great illustrated character is instantly legible. You know how they feel from the tilt of the shoulders or the set of the eyebrows, even at the back of a classroom. Consistency matters too. Across thirty pages the character must stay unmistakably themselves while moving, growing and feeling. That is far harder than it looks, and it is the heart of the craft.</p>

<h2>Pace set by the page</h2>
<p>Illustrators are quiet directors. A busy, detailed spread slows the reader down to explore. A spare, white page speeds them up or holds a beat of silence. A wordless spread can deliver the emotional climax better than any sentence. When we plan a book, we think about this rhythm spread by spread, so the art paces the story the way music paces a film.</p>

<h2>Style in service of the story</h2>
<p>There is no single right style. Soft watercolour, bold vector, scratchy ink, warm collage, each can be perfect for the right book and wrong for another. The question is never which style is best, it is which style this story needs. A tender bedtime tale and a riotous comedy call for very different brushes, and matching the two is the job our <a href="<?php echo e(asset('custom-illustrations.php')); ?>">studio</a> loves most.</p>

<ul>
<li>Show what the words leave out.</li>
<li>Keep characters legible and consistent.</li>
<li>Use detail and space to control pace.</li>
<li>Choose a style that serves this story.</li>
</ul>

<p>For authors, the lesson is freeing: you do not need to describe everything. Leave room for an artist to surprise you. If you are early in the journey, our piece on <a href="<?php echo e(blog_post_url('how-to-write-a-picture-book-children-love')); ?>">writing a picture book children love</a> explains how to write text that gives illustration space to shine.</p>

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

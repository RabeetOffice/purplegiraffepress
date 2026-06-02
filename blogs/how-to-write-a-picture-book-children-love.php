<?php
$GLOBALS['asset_base'] = '../';
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/blog-data.php';

$current_slug = 'how-to-write-a-picture-book-children-love';
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

/* Per-post FAQs power both the accordion and FAQPage schema in <head>. */
$page_faqs = [
    ['q' => 'How long should a picture book be?', 'a' => 'Most modern picture books run between 400 and 700 words across roughly 12 to 14 illustrated spreads. Shorter is usually stronger, because the illustrations carry a large share of the storytelling.'],
    ['q' => 'Do I need to find my own illustrator before submitting?', 'a' => 'No. In fact we ask authors not to. Pairing the right illustrator with a manuscript is part of what a publisher does, and submitting text alone keeps your story open to the best creative match.'],
    ['q' => 'Should my picture book rhyme?', 'a' => 'Only if the rhyme is effortless and the meter never forces an awkward word. Strong rhyme is delightful, but weak rhyme is the most common reason a promising manuscript is set aside. Many beloved picture books are written in prose.'],
    ['q' => 'How do I know if my manuscript is ready?', 'a' => 'Read it aloud to a child and watch their attention. If they ask for the page to be turned and want it again at the end, you are close. A professional editorial assessment can pinpoint what a final draft still needs.'],
];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/blog-schema.php';
require __DIR__ . '/../includes/blog-post-header.php';
?>

<section class="section section-white blog-single">
  <div class="container blog-layout">
    <div class="blog-main">
    <article class="blog-content">

<p>Every publisher has a shelf of manuscripts that are almost there. The idea is lovely, the heart is real, and yet the story does not quite ask to be read a second time. The picture books children return to again and again are rarely the cleverest ones. They are the ones built with a few quiet craft decisions that most first drafts miss.</p>

<h2>Write for the lap, not the page</h2>
<p>A picture book is read aloud, usually by a tired adult, usually at the end of a long day. That changes everything. Sentences need to land on the breath. Rhythm matters more than vocabulary. Before you submit anything, read your manuscript out loud, standing up, in the voice you would use with a real child. The places where you stumble are the places to cut.</p>
<p>Length is part of this. Most modern picture books sit between 400 and 700 words. If your draft is longer, it is almost always carrying explanation that the pictures will do better.</p>

<h2>Trust the illustrator to carry half the story</h2>
<p>The biggest shift for new writers is learning to leave room. A picture book is a duet between words and art. If your text says the dog was muddy and grinning, the illustration has nothing left to add. Say less. Let the page turn surprise the reader. Our <a href="<?php echo e(asset('custom-illustrations.php')); ?>">illustration team</a> often tells authors that the best manuscripts feel a little bare on the page, because they are written to be completed by pictures.</p>

<h2>Earn the page turn</h2>
<p>The page turn is the heartbeat of a picture book. Each spread should end with a small question that the next one answers: what happens now, what is behind the door, will she dare. Map your story across twelve to fourteen spreads and check that every turn pulls the reader forward. If two spreads could swap places without anyone noticing, the structure is not working yet.</p>

<h2>Give the ending a small turn</h2>
<p>Children are far more sophisticated readers than we give them credit for. The endings that stay with them are not neat morals. They are a final image or line that turns the story slightly, with warmth or wit, so the last page feels inevitable and surprising at once. Save your best line for here.</p>

<ul>
<li>Read it aloud until it is smooth on the tongue.</li>
<li>Cut anything the pictures can show.</li>
<li>End each spread on a reason to turn the page.</li>
<li>Land the final line with feeling, not a lecture.</li>
</ul>

<p>None of this is about talent you either have or do not. It is craft, and craft can be learned, draft by draft. When you are ready for honest, encouraging feedback, our <a href="<?php echo e(asset('editing.php')); ?>">editors</a> work with picture book writers at every stage, from a single shaky idea to a manuscript ready to submit.</p>

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

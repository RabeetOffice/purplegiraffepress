<?php
$GLOBALS['asset_base'] = '../';
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/blog-data.php';

$current_slug = 'submitting-your-childrens-manuscript';
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
    ['q' => 'How long does it take to hear back after submitting?', 'a' => 'At Purple Giraffe Press most submissions are reviewed within two to three weeks. If your project is a fit, we will reach out with next steps or a tailored publishing plan.'],
    ['q' => 'Should I submit illustrations with my picture book?', 'a' => 'Unless you are a professional illustrator submitting as an author-illustrator, send the text alone. Pairing the right illustrator is part of the publisher\'s role, and text-only submissions keep that flexibility open.'],
    ['q' => 'Do I keep the rights to my story?', 'a' => 'Yes. You retain ownership of your manuscript, characters and copyright. Our agreements are author-friendly and built around long-term creative control.'],
    ['q' => 'What should my cover note include?', 'a' => 'Keep it short: a one-line pitch, the intended age group, the approximate word count, and a sentence about you. Let the manuscript itself do the persuading.'],
];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/blog-schema.php';
require __DIR__ . '/../includes/blog-post-header.php';
?>

<section class="section section-white blog-single">
  <div class="container blog-layout">
    <div class="blog-main">
    <article class="blog-content">

<p>Sending a manuscript out into the world is an act of courage. You have lived with this story, and now a stranger will read it cold. Understanding what an editor actually does with your pages takes some of the mystery, and some of the fear, out of the process. Here is the honest version.</p>

<h2>The first page is the audition</h2>
<p>Editors read a great many submissions, so the opening has to work hard. We are not looking for fireworks, we are looking for control: a voice that feels assured, a world we step into easily, a reason to turn the page. Long preambles and throat-clearing are the most common stumble. Start where the story actually starts.</p>

<h2>Know your reader and your shelf</h2>
<p>One of the clearest signals of a professional submission is that the author knows who the book is for. A picture book that is secretly for adults, or a chapter book that drifts between five and twelve year olds, is hard to place. Be clear about the age group, the format, and roughly where your book would sit on the shelf. Our note on <a href="<?php echo e(blog_post_url('choosing-the-right-book-for-your-childs-age')); ?>">choosing books by age</a> doubles as a useful map of the categories.</p>

<h2>Polish, but do not over-explain</h2>
<p>Send your cleanest draft. Typos and clumsy formatting suggest the work is not finished. At the same time, resist the urge to attach pages of explanation about themes and intentions. Let the story speak. A short, warm cover note with a one-line pitch, the age group, the word count, and a sentence about you is all most editors want alongside the manuscript.</p>

<h2>What a yes really means</h2>
<p>When we say yes, we are not saying the manuscript is finished. We are saying we believe in it enough to invest in editing, illustration, design and distribution. What follows is a partnership: rounds of editorial notes, a careful illustrator pairing, and a launch plan. If you would like to see how that journey works end to end, our <a href="<?php echo e(asset('book-publishing.php')); ?>">book publishing</a> page lays out each stage.</p>

<ul>
<li>Open where the story truly begins.</li>
<li>Be clear about age group, format and length.</li>
<li>Submit a clean draft and a short, friendly note.</li>
<li>Expect a yes to be the start of the work, not the end.</li>
</ul>

<h2>If you hear no</h2>
<p>Most published authors collected rejections first. A no often means not right for this list, this season, or this editor, rather than not good. Keep the faith, keep revising, and keep submitting. When you are ready to send your story to us, our <a href="<?php echo e(asset('submissions.php')); ?>">submissions</a> page explains exactly what to include and what happens next.</p>

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

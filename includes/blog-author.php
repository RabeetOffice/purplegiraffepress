<?php
/**
 * "About the Author" card, rendered inside the post's main content column.
 * Expects: $post (array) with an 'author' key.
 */
if (!isset($post) || !is_array($post)) return;

$author_name = trim($post['author'] ?? SITE_NAME . ' Editorial');

$author_profiles = [
    'Maya Holloway' => [
        'role' => 'Senior Editor',
        'bio'  => 'Maya has spent fifteen years editing books for young readers, from first picture books to middle grade adventures. A former primary teacher, she cares most about stories that read beautifully out loud and respect how clever children really are.',
    ],
    'Tom Beddoe' => [
        'role' => 'Art Director',
        'bio'  => 'Tom leads the Purple Giraffe Press illustration studio. He pairs authors with the right artists, art directs every spread, and believes the best picture book art tells the half of the story the words leave out.',
    ],
    'Purple Giraffe Press Editorial' => [
        'role' => 'The Editorial Team',
        'bio'  => 'The editorial team at Purple Giraffe Press brings together editors, illustrators, designers and former teachers. We share practical guidance drawn from years of helping authors take a children\'s book from a shaky first idea to a finished story children return to again and again.',
    ],
];

$profile = $author_profiles[$author_name] ?? $author_profiles['Purple Giraffe Press Editorial'];

$author_initials = '';
foreach (preg_split('/\s+/', $author_name) as $part) {
    if ($part !== '') { $author_initials .= mb_substr($part, 0, 1); }
}
$author_initials = mb_strtoupper(mb_substr($author_initials, 0, 2));
?>
<section class="blog-col-block blog-author-block reveal" aria-label="About the author">
  <div class="blog-author">
    <div class="blog-author-avatar" aria-hidden="true"><?php echo e($author_initials); ?></div>
    <div class="blog-author-body">
      <p class="eyebrow">About the Author</p>
      <h3 class="blog-author-name"><?php echo e($author_name); ?> <span class="blog-author-role"><?php echo e($profile['role']); ?></span></h3>
      <p class="blog-author-bio"><?php echo e($profile['bio']); ?></p>
    </div>
  </div>
</section>

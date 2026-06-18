<?php
/* =================================================================
   TESTIMONIALS DATA — Purple Giraffe Press
   Single source of truth for testimonials. Used by:
     - includes/testimonials-marquee.php (home page, two-row marquee)
     - includes/testimonials.php          (service-page slider)
     - testimonials.php                    (dedicated page, grid)

   Real reviews collected from the brand's Trustpilot profile. Each entry:
     quote  => the review text
     author => reviewer name
     meta   => reviewer location (shown as the sub-line)
     rating => star rating out of 5 (defaults to 5 if omitted)
================================================================= */

$testimonials = [
    ['quote' => "Writing the book wasn't the difficult part. The real frustration came afterward, when I tried formatting it myself. Every adjustment seemed to create another problem somewhere else in the document. After reaching a breaking point I contacted Purple Giraffe Press for their book writing and formatting service. The finished manuscript looked clean and consistent from beginning to end, with page layout, chapter headings, and spacing all feeling professional.", 'author' => 'Jamie Brook', 'meta' => 'United States', 'rating' => 5],
    ['quote' => "The day my book was released, I expected at least a few weeks of excitement and visibility. Instead, after friends and family purchased copies, things became surprisingly quiet. I quickly realized that publishing a book and getting people to notice it were two completely different challenges.", 'author' => 'M Baint', 'meta' => 'United States', 'rating' => 4],
    ['quote' => "I had tried promoting my book on my own with very little success. Purple Giraffe Press stepped in with a clear plan and helped improve my online visibility. I appreciated their practical advice and consistent communication throughout the campaign.", 'author' => 'Porter Zoe', 'meta' => 'United States', 'rating' => 4],
    ['quote' => "Great so far!", 'author' => 'Lisa', 'meta' => 'Australia', 'rating' => 5],
    ['quote' => "I'm extremely sensitive to audio quality, so I noticed every little issue in the sample recording. A few sections needed adjustments, but the production team handled the revisions without any pushback. The final version sounded clean and professional!", 'author' => 'Tracy', 'meta' => 'United States', 'rating' => 5],
    ['quote' => "Purple Giraffe Press is amazing. Their attention to detail and dedication to bringing my story to life was outstanding. I couldn't have asked for a better experience. Special thanks to Julia K for her invaluable help, and Mirsa for the breathtaking illustrations.", 'author' => 'Daniel Lunceford', 'meta' => 'United States', 'rating' => 5],
    ['quote' => "Working with Purple Giraffe Press has been an absolute pleasure. They provided excellent advice and support throughout the publishing process. Shaun Rickelton, the project manager, ensured everything ran smoothly, and Mirsa's illustrations brought a magical touch to the book.", 'author' => 'Philip Toole', 'meta' => 'United States', 'rating' => 5],
    ['quote' => "I had a wonderful experience working with Purple Giraffe Press. Their team was incredibly supportive and they brought my vision to life beautifully. The process was smooth from start to finish, and I especially appreciated the guidance I received from Julia K. The illustrations, led by Mirsa, were simply stunning.", 'author' => 'Pickering Feest', 'meta' => 'United States', 'rating' => 5],
];

if (!function_exists('pgp_testimonial_card')) {
    /** Render one testimonial card (shared across marquee, slider, and grid). */
    function pgp_testimonial_card(array $t, int $i = 0, string $extraClass = ''): string {
        $palette = ['#3b82f6', '#22b07d', '#7b35d0', '#f97316', '#14b8a6', '#ec4899', '#6366f1', '#e0556e'];
        $color   = $palette[$i % count($palette)];
        $author  = trim((string) ($t['author'] ?? ''));
        $initial = $author !== '' ? mb_strtoupper(mb_substr($author, 0, 1)) : '?';
        $cls     = 't-card' . ($extraClass !== '' ? ' ' . $extraClass : '');

        $rating  = (int) ($t['rating'] ?? 5);
        $rating  = max(1, min(5, $rating));
        $stars   = str_repeat('&#9733;', $rating) . str_repeat('&#9734;', 5 - $rating);
        $subline = $t['meta'] ?? $t['book'] ?? '';

        return '<article class="' . $cls . '">'
            . '<div class="t-stars" aria-label="Rated ' . $rating . ' out of 5">' . $stars . '</div>'
            . '<blockquote class="t-quote">&ldquo;' . e($t['quote'] ?? '') . '&rdquo;</blockquote>'
            . '<div class="t-foot">'
            . '<span class="t-avatar" aria-hidden="true" style="background:' . e($color) . '">' . e($initial) . '</span>'
            . '<span class="t-meta"><strong>' . e($author) . '</strong><small>' . e($subline) . '</small></span>'
            . '</div>'
            . '</article>';
    }
}

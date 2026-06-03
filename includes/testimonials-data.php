<?php
/* =================================================================
   TESTIMONIALS DATA — Purple Giraffe Press
   Single source of truth for testimonials. Used by:
     - includes/testimonials-marquee.php (home page, two-row marquee)
     - includes/testimonials.php          (service-page slider)
     - testimonials.php                    (dedicated page, grid)

   NOTE: these are sample/placeholder testimonials with fictional
   author + book names. Replace with real client testimonials.
================================================================= */

$testimonials = [
    ['quote' => 'Who knew publishing could be this much fun? They handle the heavy lifting so I can focus on making kids laugh.', 'author' => 'Marcus Bramble', 'book' => 'The Pigeon Who Lost His Bus Pass'],
    ['quote' => 'A truly exceptional design team. They understand that negative space and timing are everything in a picture book.', 'author' => 'Jonah Clay', 'book' => 'The Hat That Wandered Off'],
    ['quote' => 'Purple Giraffe Press brings an unforgettable, vibrant quality to everything they touch. Total professionals.', 'author' => 'Dana Santiago', 'book' => 'The Adventures of Little Beacon'],
    ['quote' => 'The editing team helped me refine my rhymes without losing the charm. It is now a bedtime favourite across the country.', 'author' => 'Maria Rossi', 'book' => 'The Sleepy Little Owl'],
    ['quote' => 'Translating a classic song into a new book was tough, but their audio and design teams rocked it completely.', 'author' => 'Selina Jaury', 'book' => 'Ms. Macdonald Had a Farm'],
    ['quote' => 'An incredibly empowering experience. They give you the tools to succeed and you keep your rights.', 'author' => 'Vashti Harlow', 'book' => 'Little Leaders, Big Dreams'],
    ['quote' => 'I kept one hundred percent of my royalties. I still cannot quite believe it.', 'author' => 'Theo Marigold', 'book' => 'Bee and the Big Sunflower Day'],
    ['quote' => 'They treated my story like it was the only one in the world. Every single page feels alive.', 'author' => 'Amara Lewis', 'book' => 'The Giraffe Who Could Touch the Moon'],
    ['quote' => 'A boutique experience from top to bottom. My book is now sitting in school libraries everywhere.', 'author' => 'Priya Kapoor', 'book' => "Olive's Very Unusual Hat"],
    ['quote' => 'My first book and they never once made me feel like a beginner. Patient, kind, and genuinely brilliant.', 'author' => 'Daniel Okonkwo', 'book' => 'Football Boots and Fairy Tales'],
    ['quote' => 'The illustrations took my breath away. My daughter asked who had painted her dreams.', 'author' => 'Hannah Boon', 'book' => "The Lighthouse Keeper's Cat"],
    ['quote' => 'Funny, fast, and completely stress free. The proofs were flawless on the very first pass.', 'author' => 'Lucas Fenn', 'book' => "Robots Don't Eat Broccoli"],
    ['quote' => 'Gentle, thoughtful editors who respect how clever children really are. A pure joy to work with.', 'author' => 'Ingrid Solberg', 'book' => "Snow Bear's Quiet Morning"],
    ['quote' => 'Bright, bold, and beautiful. The printed book looks like a treasure. Highly recommended.', 'author' => 'Owen Pratt', 'book' => "The Earthworm's Big Day Out"],
    ['quote' => 'They championed my bilingual edition when other presses said no. I am forever grateful.', 'author' => 'Carmen Vidal', 'book' => "Abuela's Magic Kitchen"],
    ['quote' => 'From manuscript to launch day they were right beside me. I never felt lost for a second.', 'author' => 'Nadia Frost', 'book' => 'The Girl Who Painted Storms'],
    ['quote' => 'The cover design sold the book before anyone had read a single word. Pure magic.', 'author' => 'Sam Whitfield', 'book' => 'Captain Custard and the Cloud Pirates'],
    ['quote' => 'Distribution was the part I dreaded most. They made it effortless and now I am in forty countries.', 'author' => 'Bel Ortega', 'book' => "Tilly's Tiny Telescope"],
    ['quote' => 'Three rounds of edits and every one made the story stronger. These people genuinely care.', 'author' => 'Reuben Marsh', 'book' => 'The Dragon Who Was Afraid of Marshmallows'],
    ['quote' => 'Warm, professional, and wildly creative. Working with them felt like coming home.', 'author' => 'Esme Lindqvist', 'book' => 'Goodnight, Little Wombat'],
];

if (!function_exists('pgp_testimonial_card')) {
    /** Render one testimonial card (shared across marquee, slider, and grid). */
    function pgp_testimonial_card(array $t, int $i = 0, string $extraClass = ''): string {
        $palette = ['#3b82f6', '#22b07d', '#7b35d0', '#f97316', '#14b8a6', '#ec4899', '#6366f1', '#e0556e'];
        $color   = $palette[$i % count($palette)];
        $author  = trim((string) ($t['author'] ?? ''));
        $initial = $author !== '' ? mb_strtoupper(mb_substr($author, 0, 1)) : '?';
        $cls     = 't-card' . ($extraClass !== '' ? ' ' . $extraClass : '');

        return '<article class="' . $cls . '">'
            . '<div class="t-stars" aria-label="Rated 5 out of 5">' . str_repeat('&#9733;', 5) . '</div>'
            . '<blockquote class="t-quote">&ldquo;' . e($t['quote'] ?? '') . '&rdquo;</blockquote>'
            . '<div class="t-foot">'
            . '<span class="t-avatar" aria-hidden="true" style="background:' . e($color) . '">' . e($initial) . '</span>'
            . '<span class="t-meta"><strong>' . e($author) . '</strong><small>' . e($t['book'] ?? '') . '</small></span>'
            . '</div>'
            . '</article>';
    }
}

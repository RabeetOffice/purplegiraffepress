<?php
$testimonials = [
    [
        'quote' => 'They treated my story like it was the only one in the world.',
        'body' => 'My editor pushed me harder than I thought possible, and the illustrations made the whole book feel alive.',
        'author' => 'Amara Lewis',
        'book' => 'The Giraffe Who Could Touch the Moon',
        'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=160&q=80',
    ],
    [
        'quote' => "I kept 100% of my royalties. I still can't believe it.",
        'body' => "Other presses wanted half my earnings. Purple Giraffe Press wanted my best story and supported me all the way.",
        'author' => 'Theo Marigold',
        'book' => 'Bee & the Big Sunflower Day',
        'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=160&q=80',
    ],
    [
        'quote' => 'A boutique experience, top to bottom.',
        'body' => 'From the first call, I felt like a real partner. The design is stunning and my book is now in school libraries.',
        'author' => 'Priya Kapoor',
        'book' => "Olive's Very Unusual Hat",
        'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=160&q=80',
    ],
];
?>
<div class="testimonial-grid mobile-swiper swiper">
  <div class="swiper-wrapper">
    <?php foreach ($testimonials as $testimonial): ?>
      <article class="testimonial-card swiper-slide reveal">
        <div class="stars" aria-label="Five star rating">★★★★★</div>
        <blockquote><?php echo e($testimonial['quote']); ?></blockquote>
        <p><?php echo e($testimonial['body']); ?></p>
        <div class="testimonial-author">
          <img class="testimonial-photo" src="<?php echo e($testimonial['image']); ?>" alt="<?php echo e($testimonial['author']); ?>">
          <div>
            <strong><?php echo e($testimonial['author']); ?></strong>
            <small><?php echo e($testimonial['book']); ?></small>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
  <div class="swiper-pagination"></div>
</div>

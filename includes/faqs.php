<?php
$all_faq_items = [
    [
        'category' => 'general',
        'q' => 'How does the publishing process work at Purple Giraffe Press?',
        'a' => 'Once your manuscript is accepted, we pair you with an editor, match you with a children\'s illustrator, design the book cover and interior, prepare print and ebook files, set up distribution, and coordinate a launch plan.',
    ],
    [
        'category' => 'general',
        'q' => 'Do I keep the rights to my book and characters?',
        'a' => 'Yes. You retain ownership of your manuscript, characters, copyright, and publishing rights. Our agreements are author-friendly and built around long-term creative control.',
    ],
    [
        'category' => 'pricing',
        'q' => 'How can authors keep 100% of royalties?',
        'a' => 'We charge flat production fees for services such as editing, illustration, design, setup, and marketing support. After publication, royalties from platforms are paid directly to you.',
    ],
    [
        'category' => 'pricing',
        'q' => 'Do you offer payment plans?',
        'a' => 'Yes. Qualified projects can use interest-free payment plans split into three or six installments, with work beginning after the first deposit.',
    ],
    [
        'category' => 'submissions',
        'q' => 'What kinds of manuscripts are you accepting?',
        'a' => 'We focus on picture books, early readers, and middle grade chapter books for children. We are not currently accepting adult fiction or young adult projects.',
    ],
    [
        'category' => 'submissions',
        'q' => 'How long does review take?',
        'a' => 'Most submissions are reviewed within two to three weeks. If the project is a fit, we will contact you with next steps or a customized publishing estimate.',
    ],
    [
        'category' => 'general',
        'q' => 'Can you help with schools and libraries?',
        'a' => 'Yes. We can set up global distribution through book channels used by retailers, schools, and libraries, and we can prepare outreach materials for educators and librarians.',
    ],
];

$selected_category = $faq_category ?? 'all';
$filtered_faqs = array_values(array_filter($all_faq_items, function ($item) use ($selected_category) {
    return $selected_category === 'all' || $item['category'] === $selected_category;
}));

if (!empty($load_faqs_only)) {
    $page_faqs = $filtered_faqs;
    return;
}
?>
<div class="faq-list">
  <?php foreach ($filtered_faqs as $index => $faq): ?>
    <article class="faq-item reveal">
      <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-<?php echo $index; ?>">
        <span><?php echo e($faq['q']); ?></span>
        <span aria-hidden="true">+</span>
      </button>
      <div class="faq-answer" id="faq-<?php echo $index; ?>">
        <p><?php echo e($faq['a']); ?></p>
      </div>
    </article>
  <?php endforeach; ?>
</div>

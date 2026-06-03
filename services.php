<?php include 'includes/config.php'; ?>
<?php
$page_title = "Children's Book Services | Purple Giraffe Press Publishing";
$page_description = 'Children\'s book publishing services including editing, illustration, cover design, formatting, global distribution, marketing, and author websites.';
$canonical_path = 'services.php';
$page_faqs = [
  ["q" => "What publishing services does Purple Giraffe Press offer?", "a" => "We cover the full journey: manuscript editing, ghostwriting, custom illustration, cover design, proofreading, children's book printing, audiobooks, distribution, marketing and publicity, author websites, book coaching, and complete book publishing. You can take the whole path or pick the single piece you need."],
  ["q" => "Can I choose just one service instead of a full package?", "a" => "Yes. Many authors come to us for one specific thing, such as editing or a cover, and nothing more. We are happy to do a single service well. If you later decide you want help with the rest, we are here for that too."],
  ["q" => "How do I know which services my book actually needs?", "a" => "That is exactly what the free consultation is for. We look at your manuscript and your goals, then recommend only what genuinely helps your book. We will never push services you do not need, because a clear and honest plan serves you better in the long run."],
  ["q" => "Do you offer editing and proofreading as separate services?", "a" => "Yes. Editing improves the writing itself, from structure and pacing down to word choice. Proofreading is the final check for typos and errors once the book is laid out. They do different jobs, and many authors use both for a polished result."],
  ["q" => "What if I have an idea but cannot write it myself?", "a" => "That is what our ghostwriting service is for. You share the idea, the characters, and the feeling you want, and our writers turn it into a finished manuscript in your voice. Your name goes on the cover, and the work is entirely yours."],
  ["q" => "Can you create the illustrations for my story?", "a" => "Yes. Our illustrators design characters and full page artwork built around your story and your reader's age. You approve the style and every spread as it develops. The art is created for your book alone, never recycled."],
  ["q" => "Do you help with marketing after the book is finished?", "a" => "We do. Our marketing and publicity service covers press materials, reviewer outreach, school and library positioning, and launch support. A finished book still needs to find readers, and we help make that happen."],
  ["q" => "Will you handle printing and getting the book into stores?", "a" => "Yes. We guide format, paper, and binding, send you a physical proof, then run the print. We also set up distribution so your book is available to retailers, schools, and libraries in print and ebook."],
  ["q" => "Do you produce audiobooks for children's titles?", "a" => "We do. We match your story with the right narrator, record and master clean studio audio, and deliver it to the major listening platforms. Audiobooks let families enjoy your story in the car, at bedtime, and on the move."],
  ["q" => "How do the services fit together if I want everything done?", "a" => "We sequence them into one calm path: editing first, then illustration and design, then printing or ebook setup, then distribution and marketing. You get a single point of contact and a clear timeline, so the whole thing feels guided rather than scattered."],
];
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Services</div>
      <h1>Full-service publishing for children's authors.</h1>
      <p class="lead">Choose one creative service or build a complete publishing path from manuscript to launch.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot surrounded by publishing service ideas">
  </div>
</section>

<section class="section section-white">
  <div class="container center">
    <?php $services_detail = true; include 'includes/services.php'; ?>
  </div>
</section>

<section class="section section-soft">
  <div class="container center">
    <p class="eyebrow">Author experience</p>
    <h2>Creative support with a calm process</h2>
    <?php include 'includes/testimonials.php'; ?>
  </div>
</section>

<section class="section section-white">
  <div class="container svc-faq-grid">
    <div class="svc-faq-left reveal">
      <p class="eyebrow script-mark">- questions</p>
      <h2>Our services, <em>explained.</em></h2>
      <p>Answers to what authors ask most about what we do and how it all fits together. If yours is not here, just ask.</p>
      <a class="btn btn-sun" href="contact.php" data-quote-open>Book a Free Consultation &rarr;</a>
    </div>
    <div class="svc-faq-list">
      <?php foreach ($page_faqs as $fi => $faq): ?>
        <details class="svc-faq-item"<?php echo $fi === 0 ? ' open' : ''; ?>>
          <summary>
            <span class="qnum"><?php echo str_pad($fi + 1, 2, '0', STR_PAD_LEFT); ?></span>
            <span class="qtxt"><?php echo e($faq['q']); ?></span>
            <span class="toggle" aria-hidden="true">+</span>
          </summary>
          <div class="answer"><p><?php echo e($faq['a']); ?></p></div>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/cta.php'; ?>
<?php include 'includes/footer.php'; ?>

<?php include 'includes/config.php'; ?>
<?php
$page_title = "Manuscript Submissions | Purple Giraffe Press";
$page_description = "Submit your children's book manuscript to Purple Giraffe Press. See our 2026 submission windows, what we look for from authors and illustrators, and how to send your work.";
$canonical_path = 'submissions.php';

/*
 * Submission windows are recurring (month, day) pairs. Statuses and years are
 * worked out automatically from the current date, so a window flips to "Closed"
 * once its deadline passes, the next one becomes "Now Open", and the year rolls
 * forward on its own. No manual edits needed each season.
 */
$window_md = [
    [1, 31],   // 31 Jan
    [5, 29],   // 29 May
    [8, 28],   // 28 Aug
    [11, 27],  // 27 Nov
];

$tz  = new DateTimeZone('Australia/Brisbane');
$now = new DateTime('now', $tz);
$base_year = (int) $now->format('Y');

// Build a chronological list spanning last year through two years ahead, so there
// is always a recently closed window before "now" and enough upcoming ones after.
$all_windows = [];
for ($y = $base_year - 1; $y <= $base_year + 2; $y++) {
    foreach ($window_md as $md) {
        $all_windows[] = new DateTime(sprintf('%04d-%02d-%02d 23:59:59', $y, $md[0], $md[1]), $tz);
    }
}

// "Now Open" is the first window whose 11:59 PM deadline has not yet passed.
$open_index = count($all_windows) - 1;
foreach ($all_windows as $i => $dt) {
    if ($dt >= $now) { $open_index = $i; break; }
}

// Display one closed window, the open window, then the next two upcoming ones.
$start_index = max(0, $open_index - 1);
$submission_dates = [];
for ($k = 0; $k < 4; $k++) {
    $idx = $start_index + $k;
    if (!isset($all_windows[$idx])) break;
    if ($idx < $open_index) {
        $state = 'closed';   $status = 'Closed';
    } elseif ($idx === $open_index) {
        $state = 'open';     $status = 'Now Open';
    } else {
        $state = 'upcoming'; $status = 'Upcoming';
    }
    $submission_dates[] = [
        'status' => $status,
        'state'  => $state,
        'date'   => $all_windows[$idx]->format('j M Y'),
    ];
}
$open_window_label = $all_windows[$open_index]->format('j M Y');

$author_points = [
    'Your completed manuscript, or the first three chapters if it is a chapter book.',
    'A strong pitch: a few sentences about your book, the intended readership, the hook, comparable titles, and what makes it unique.',
    'Consider how your manuscript flows across a 24 or 32-page picture book, or a 10 to 12-spread board book.',
    'We accept submissions with and without illustration notes.',
    'A short biography about yourself and any prior writing experience.',
];

$illustrator_points = [
    'A PDF of your portfolio, and a link to your website or Instagram.',
    'Show us how you illustrate character, movement, emotion, world building, and landscape.',
    'Include examples of the mediums you work with, such as watercolour, digital, or pencil.',
    'Tell us what type of books you would like to work on with us.',
    'A short biography about yourself and your illustrating experience.',
];

$submission_tips = [
    'We are looking for bright, fun, quality books with humour and heart.',
    'We love original fiction and non-fiction with big emotions, big ideas, and creative problem-solving.',
    'Be prepared to collaborate on marketing and publicising the finished product.',
    'We do not accept unsolicited short stories or poetry at this time.',
    'Only successful submissions will be contacted. Due to volume, we cannot respond to every applicant.',
];

function sub_mail_icon() {
    return '<svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5.5" width="18" height="13" rx="2.2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="m4.5 7.7 7.5 5.1 7.5-5.1" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>';
}
?>
<?php include 'includes/header.php'; ?>

<section class="banner">
  <div class="container banner-inner">
    <div>
      <div class="breadcrumbs"><a href="index.php">Home</a> / Submissions</div>
      <p class="eyebrow script-mark">- Manuscript Submissions</p>
      <h1>Submit Your Story</h1>
      <p class="lead">We open our doors to unsolicited manuscript submissions on select dates throughout the year. Please read our submission guidelines carefully before sending your work.</p>
      <p class="sub-status">Submissions are currently <span class="status-pill open"><span class="dot" aria-hidden="true"></span> Open</span>. Our next window closes <?php echo e($open_window_label); ?> at 11:59 PM AEST.</p>
    </div>
    <img src="<?php echo e(SITE_MASCOT); ?>" alt="Purple giraffe mascot holding a manuscript submission">
  </div>
</section>

<section class="section section-white">
  <div class="container">
    <div class="card submission-dates-card">
      <div class="sub-card-head">
        <span class="sub-badge" aria-hidden="true">
          <svg viewBox="0 0 24 24"><rect x="3.5" y="5" width="17" height="15" rx="2.5" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M3.5 9.5h17" stroke="currentColor" stroke-width="1.7"/><path d="M8 3.5v3M16 3.5v3" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
        </span>
        <div>
          <h2>2026 Submission Dates</h2>
          <p>Submissions received after 11:59 PM AEST will not be assessed.</p>
        </div>
      </div>
      <div class="sub-date-grid">
        <?php foreach ($submission_dates as $d): ?>
          <div class="sub-date is-<?php echo e($d['state']); ?>">
            <span class="sub-date-status"><span class="dot" aria-hidden="true"></span> <?php echo e($d['status']); ?></span>
            <span class="sub-date-day"><?php echo e($d['date']); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
      <p class="sub-note"><strong>Please note:</strong> Due to the overwhelming volume of submissions received, we can only respond to successful applications. We appreciate every submission and the time you have invested in your work. Good luck!</p>
    </div>
  </div>
</section>

<section class="section section-soft">
  <div class="container narrow center">
    <p class="eyebrow script-mark">- Submission Criteria</p>
    <h2>What we publish</h2>
    <p class="lead">Purple Giraffe Press is an independent children&apos;s book publisher specialising in picture books, board books, chapter books, activity books, and non-fiction for young readers. We publish bright, imaginative titles that spark joy and learning.</p>
  </div>
  <div class="container submit-blocks">
    <article class="card submit-block">
      <div class="sub-card-head">
        <span class="sub-badge" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M12 6.4C10.4 5 8 4.6 4.6 5.1V18c3.4-.5 5.8-.1 7.4 1.3 1.6-1.4 4-1.8 7.4-1.3V5.1C16 4.6 13.6 5 12 6.4Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><path d="M12 6.4v12.9" fill="none" stroke="currentColor" stroke-width="1.6"/></svg>
        </span>
        <div>
          <h3>Picture Book &amp; Board Book Authors</h3>
          <p>We are looking for manuscripts that combine humour, heart, and imagination for readers from babies to young adults.</p>
        </div>
      </div>
      <p class="looking-label">We&apos;re looking for</p>
      <ol class="looking-list">
        <?php foreach ($author_points as $i => $point): ?>
          <li class="looking-item">
            <span class="looking-num"><?php echo $i + 1; ?></span>
            <p><?php echo e($point); ?></p>
          </li>
        <?php endforeach; ?>
      </ol>
      <div class="submit-cta">
        <span class="mail-ic" aria-hidden="true"><?php echo sub_mail_icon(); ?></span>
        <div>
          <strong>Ready to submit your manuscript?</strong>
          <span class="muted">When you are ready to submit, please email us at:</span>
          <a class="email" href="mailto:<?php echo e(SITE_EMAIL); ?>"><?php echo e(SITE_EMAIL); ?></a>
        </div>
      </div>
    </article>

    <article class="card submit-block gold">
      <div class="sub-card-head">
        <span class="sub-badge gold" aria-hidden="true">
          <svg viewBox="0 0 24 24"><path d="M12 3.5a8.5 8.5 0 1 0 0 17c1.3 0 2-.9 2-1.8 0-.5-.3-.9-.3-1.5 0-.8.6-1.4 1.5-1.4H17a4 4 0 0 0 4-4c0-4.4-4-7.8-9-7.8Z" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/><circle cx="7.6" cy="11.4" r="1.1" fill="currentColor"/><circle cx="9.8" cy="7.6" r="1.1" fill="currentColor"/><circle cx="14.4" cy="7.6" r="1.1" fill="currentColor"/></svg>
        </span>
        <div>
          <h3>Illustrators &amp; Designers</h3>
          <p>We work with a diverse range of artists. Whether you specialise in watercolour, digital, 3D, or pencil, we want to see your voice.</p>
        </div>
      </div>
      <p class="looking-label">We&apos;re looking for</p>
      <ol class="looking-list">
        <?php foreach ($illustrator_points as $i => $point): ?>
          <li class="looking-item">
            <span class="looking-num"><?php echo $i + 1; ?></span>
            <p><?php echo e($point); ?></p>
          </li>
        <?php endforeach; ?>
      </ol>
      <div class="submit-cta">
        <span class="mail-ic" aria-hidden="true"><?php echo sub_mail_icon(); ?></span>
        <div>
          <strong>Ready to share your portfolio?</strong>
          <span class="muted">When you are ready to submit, please email us at:</span>
          <a class="email" href="mailto:<?php echo e(SITE_EMAIL); ?>"><?php echo e(SITE_EMAIL); ?></a>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="section section-white">
  <div class="container narrow center">
    <p class="eyebrow script-mark">- Tips Before You Submit</p>
    <h2>A few things to keep in <em>mind.</em></h2>
  </div>
  <div class="container">
    <ul class="tips-grid">
      <?php foreach ($submission_tips as $tip): ?>
        <li class="tip-card">
          <span class="tip-tick" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
          </span>
          <p><?php echo e($tip); ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<section class="section section-soft">
  <div class="container">
    <div class="not-ready reveal">
      <p class="eyebrow script-mark">- Not quite ready to submit?</p>
      <h2>We can help you <em>get there.</em></h2>
      <p>That is okay. Our team of expert book coaches and editors can help you polish your manuscript before the submission window opens.</p>
      <div class="button-row center-row">
        <a class="btn btn-sun" href="contact.php" data-quote-open>Get a Free Estimate</a>
        <a class="btn btn-light" href="book-coaching.php">Explore book coaching →</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-white meet-illustrators">
  <div class="container narrow center">
    <p class="eyebrow script-mark">- Our artists</p>
    <h2>Meet Our <em>Illustrators</em></h2>
    <p class="lead">Browse the artists behind our books and the many styles they bring to the page, from watercolour and pencil to bold digital worlds.</p>
    <div class="button-row center-row">
      <a class="btn btn-primary" href="artists.php">View Our Illustrators →</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

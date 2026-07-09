<?php
/**
 * Dashboard: a friendly at-a-glance view of the things this site actually
 * has - blog posts, form submissions, portfolio books and testimonials.
 * Every stat/card only renders when the logged-in user's role can access
 * that module, so nobody sees numbers they can't act on.
 */

require_once __DIR__ . '/includes/auth.php';
$user = admin_require_module('dashboard');
require_once __DIR__ . '/includes/post-store.php';
require_once __DIR__ . '/includes/leads-db.php';

/* content-store.php is being added separately; load it only if present. */
$cs = __DIR__ . '/includes/content-store.php';
if (is_file($cs)) { require_once $cs; }

$canPosts        = admin_can('posts', $user);
$canSubs         = admin_can('submissions', $user);
$canPortfolio    = admin_can('portfolio', $user);
$canTestimonials = admin_can('testimonials', $user);

/* ------------------------------------------------------------- post stats */

$postIndex = $canPosts ? post_admin_index() : [];
$published = 0;
$drafts    = 0;
foreach ($postIndex as $p) {
    if (($p['status'] ?? '') === 'published') { $published++; } else { $drafts++; }
}

/* ------------------------------------------------------------- lead stats */

$leadsOk    = $canSubs && adm_leads_available();
$leadCounts = $leadsOk ? adm_leads_counts() : ['total' => 0, 'last7' => 0, 'last30' => 0, 'unread' => 0];
$freshLeads = $leadsOk ? adm_leads_query('', '', '', 1, 6)['rows'] : [];

/* --------------------------------------------------------- content counts */

$portfolioCount   = ($canPortfolio && function_exists('adm_portfolio_read')) ? count(adm_portfolio_read()) : null;
$testimonialCount = ($canTestimonials && function_exists('adm_testimonials_read')) ? count(adm_testimonials_read()) : null;

function dash_type_chip(string $ft): string {
    $map = [
        'contact'    => 'chip-purple',
        'enquiry'    => 'chip-gold',
        'newsletter' => 'chip-gray',
        'estimate'   => 'chip-green',
        'quote'      => 'chip-amber',
    ];
    return $map[strtolower($ft)] ?? 'chip-gray';
}

function dash_date(string $dt, string $fmt = 'd M Y'): string {
    $ts = strtotime($dt);
    return $ts ? date($fmt, $ts) : $dt;
}

admin_layout_start('Dashboard', 'dashboard');
?>

<div class="adm-page-head">
  <div>
    <h1>Dashboard</h1>
    <p class="adm-page-sub">G'day! Here's how <?php echo e(SITE_NAME); ?> is looking today.</p>
  </div>
</div>

<div class="adm-grid cols-4">
  <?php if ($canPosts): ?>
    <div class="adm-stat">
      <span class="adm-stat-num"><?php echo (int) $published; ?></span>
      <span class="adm-stat-label">Published posts</span>
      <span class="adm-stat-trend"><?php echo (int) $drafts; ?> draft<?php echo $drafts === 1 ? '' : 's'; ?> in the wings</span>
    </div>
  <?php endif; ?>

  <?php if ($canSubs): ?>
    <div class="adm-stat">
      <span class="adm-stat-num"><?php echo $leadsOk ? (int) $leadCounts['last7'] : '&mdash;'; ?></span>
      <span class="adm-stat-label">Leads, last 7 days</span>
      <span class="adm-stat-trend"><?php echo $leadsOk ? (int) $leadCounts['total'] . ' all time' : 'Database not reachable here'; ?></span>
    </div>
  <?php endif; ?>

  <?php if ($canPortfolio): ?>
    <div class="adm-stat">
      <span class="adm-stat-num"><?php echo $portfolioCount === null ? '&mdash;' : (int) $portfolioCount; ?></span>
      <span class="adm-stat-label">Portfolio books</span>
      <span class="adm-stat-trend">Stories on the shelf</span>
    </div>
  <?php endif; ?>

  <?php if ($canTestimonials): ?>
    <div class="adm-stat">
      <span class="adm-stat-num"><?php echo $testimonialCount === null ? '&mdash;' : (int) $testimonialCount; ?></span>
      <span class="adm-stat-label">Testimonials</span>
      <span class="adm-stat-trend">Kind words from authors</span>
    </div>
  <?php endif; ?>
</div>

<div class="adm-grid cols-2">
  <?php if ($canPosts): ?>
    <div class="adm-card">
      <div class="adm-page-head">
        <h2>Latest articles</h2>
        <div class="adm-page-actions">
          <a class="adm-btn adm-btn-primary adm-btn-sm" href="post-edit.php">New post</a>
        </div>
      </div>
      <?php if (!$postIndex): ?>
        <div class="adm-empty">
          <div class="adm-empty-glyph" aria-hidden="true">&#9998;</div>
          <p>No articles yet. The first one is always the most fun to write.</p>
        </div>
      <?php else: ?>
        <div class="adm-table-wrap">
          <table class="adm-table">
            <tbody>
              <?php foreach (array_slice($postIndex, 0, 5) as $post): ?>
                <?php
                  $slug   = (string) ($post['slug'] ?? '');
                  $title  = (string) (($post['registry']['title'] ?? '') !== '' ? $post['registry']['title'] : $slug);
                  $status = (string) ($post['status'] ?? 'draft');
                  $date   = (string) ($post['registry']['date'] ?? '');
                ?>
                <tr>
                  <td><a href="post-edit.php?slug=<?php echo e(rawurlencode($slug)); ?>"><?php echo e($title); ?></a></td>
                  <td><span class="adm-chip <?php echo $status === 'published' ? 'chip-green' : 'chip-amber'; ?>"><?php echo e($status); ?></span></td>
                  <td><?php echo $date !== '' ? e(dash_date($date)) : '&mdash;'; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if ($canSubs): ?>
    <div class="adm-card">
      <div class="adm-page-head">
        <h2>Fresh enquiries</h2>
        <div class="adm-page-actions">
          <a class="adm-btn adm-btn-light adm-btn-sm" href="submissions.php">Open inbox</a>
        </div>
      </div>
      <?php if (!$leadsOk): ?>
        <p class="adm-help">The leads database is not reachable from this environment (normal on localhost without MySQL). Submissions still reach your inbox by email.</p>
      <?php elseif (!$freshLeads): ?>
        <div class="adm-empty">
          <div class="adm-empty-glyph" aria-hidden="true">&#128235;</div>
          <p>No enquiries yet. When someone fills in a form on the site, it lands here.</p>
        </div>
      <?php else: ?>
        <div class="adm-table-wrap">
          <table class="adm-table">
            <tbody>
              <?php foreach ($freshLeads as $row): ?>
                <tr>
                  <td><a href="submissions.php?view=<?php echo (int) $row['id']; ?>"><?php echo e($row['name'] !== '' ? $row['name'] : 'No name given'); ?></a></td>
                  <td><span class="adm-chip <?php echo e(dash_type_chip((string) $row['form_type'])); ?>"><?php echo e($row['form_type']); ?></span></td>
                  <td><?php echo e(dash_date((string) $row['created_at'], 'd M Y H:i')); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</div>

<div class="adm-card">
  <p class="adm-help">A little note from the giraffe: blog pages are indexable, and publishing or unpublishing here also updates the blog list in sitemap.xml automatically.
  No extra steps needed - your article goes live for readers and search engines at the same time.</p>
</div>

<?php admin_layout_end(); ?>

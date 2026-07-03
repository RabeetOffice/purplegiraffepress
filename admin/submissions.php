<?php
/**
 * Submissions inbox: read-only view over the site's `leads` table with
 * search/filter/pagination, per-lead read/star flags (JSON state, never the
 * DB), a full detail view and a filtered CSV export.
 */

require_once __DIR__ . '/includes/auth.php';
$user = admin_require_module('submissions');
require_once __DIR__ . '/includes/leads-db.php';

/* ------------------------------------------------------------- filters */

$q    = trim((string) ($_GET['q'] ?? ''));
$type = trim((string) ($_GET['type'] ?? ''));
$flag = (string) ($_GET['flag'] ?? '');
if (!in_array($flag, ['', 'starred', 'unread'], true)) $flag = '';
$page = max(1, (int) ($_GET['page'] ?? 1));
$view = max(0, (int) ($_GET['view'] ?? 0));
$per  = 25;

/** Build a submissions.php URL from filter params (empties dropped). */
function sub_url(array $params): string {
    $params = array_filter($params, static function ($v) {
        return $v !== '' && $v !== null && $v !== 0;
    });
    $qs = http_build_query($params);
    return 'submissions.php' . ($qs !== '' ? '?' . $qs : '');
}

$filters = ['q' => $q, 'type' => $type, 'flag' => $flag];
if ($page > 1) $filters['page'] = $page;
$currentUrl = sub_url($filters + ['view' => $view]);        // POST target keeps context

/* ----------------------------------------------------- POST (before output) */

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    admin_verify_csrf();
    $action = (string) ($_POST['action'] ?? '');

    if ($action === 'export') {
        // Export the CURRENT filter across all pages, capped at 5000 rows.
        $res = adm_leads_query($q, $type, $flag, 1, 5000);
        adm_leads_csv($res['rows']);
        exit;
    }

    $map = [
        'mark_read'   => ['read', true],
        'mark_unread' => ['read', false],
        'star'        => ['star', true],
        'unstar'      => ['star', false],
    ];
    $id = (int) ($_POST['id'] ?? 0);
    if ($id > 0 && isset($map[$action])) {
        adm_lead_mark($id, $map[$action][0], $map[$action][1]);
    }

    // Back to where the admin was. Marking unread from the detail view goes
    // back to the list, otherwise the detail view would re-mark it read.
    $back = $filters;
    if ($view > 0 && $action !== 'mark_unread') $back['view'] = $view;
    admin_redirect(sub_url($back));
}

/* ------------------------------------------------------------------ data */

$available = adm_leads_available();
$counts    = $available ? adm_leads_counts() : ['total' => 0, 'last7' => 0, 'last30' => 0, 'unread' => 0];
$formTypes = $available ? adm_leads_form_types() : [];

$lead = null;
if ($available && $view > 0) {
    $lead = adm_leads_get($view);
    if ($lead) {
        adm_lead_mark($view, 'read', true);                 // opening it reads it
    }
}

$result = ['rows' => [], 'total' => 0];
if ($available && !$lead) {
    $result = adm_leads_query($q, $type, $flag, $page, $per);
}
$totalPages = max(1, (int) ceil($result['total'] / $per));

/** Chip class for a form type. */
function sub_type_chip(string $ft): string {
    $map = [
        'popup'      => 'chip-purple',
        'contact'    => 'chip-purple',
        'enquiry'    => 'chip-gold',
        'newsletter' => 'chip-gray',
        'estimate'   => 'chip-green',
        'quote'      => 'chip-amber',
    ];
    return $map[strtolower($ft)] ?? 'chip-gray';
}

/** Friendly, human label for a form type (what the visitor actually used). */
function sub_type_label(string $ft): string {
    $map = [
        'popup'      => 'Popup quote form',
        'quote'      => 'Quote form',
        'contact'    => 'Contact form',
        'enquiry'    => 'Publishing enquiry',
        'newsletter' => 'Newsletter signup',
        'estimate'   => 'Instant estimate',
        'website'    => 'Website form',
    ];
    return $map[strtolower($ft)] ?? ucwords(str_replace(['_', '-'], ' ', $ft ?: 'Website form'));
}

/** Turn a stored page_url into a short, readable page name. */
function sub_page_name(string $url): string {
    $url = trim($url);
    if ($url === '') return 'Unknown page';
    $path = parse_url($url, PHP_URL_PATH);
    if (!is_string($path) || $path === '' || $path === '/') return 'Home page';
    $path = trim($path, '/');
    $path = preg_replace('~\.php$~', '', $path);
    $path = preg_replace('~^form-submission$~', 'a form', $path);
    return ucwords(str_replace(['-', '/'], [' ', ' · '], $path));
}

function sub_date(string $dt): string {
    $ts = strtotime($dt);
    return $ts ? date('d M Y H:i', $ts) : $dt;
}

admin_layout_start('Submissions', 'submissions');
?>

<div class="adm-page-head">
  <div>
    <h1>Submissions</h1>
    <p class="adm-page-sub">Every form submission the website has collected, in one tidy inbox.</p>
  </div>
  <?php if ($available && !$lead): ?>
  <div class="adm-page-actions">
    <form method="post" action="<?php echo e($currentUrl); ?>">
      <?php echo admin_csrf_field(); ?>
      <input type="hidden" name="action" value="export">
      <button type="submit" class="adm-btn adm-btn-light">Export CSV</button>
    </form>
  </div>
  <?php endif; ?>
</div>

<?php if (!$available): ?>

  <div class="adm-card">
    <div class="adm-empty">
      <div class="adm-empty-glyph" aria-hidden="true">&#9993;</div>
      <p>The leads database is not reachable from this environment (normal on localhost without MySQL). Submissions still reach your inbox by email.</p>
    </div>
  </div>

<?php elseif ($lead): ?>

  <?php
    $isStarred = !empty(adm_lead_state((int) $lead['id'])['star']);
    $subject   = 'Re: your ' . (string) $lead['form_type'] . ' enquiry - ' . SITE_NAME;
    $mailto    = 'mailto:' . rawurlencode((string) $lead['email']) . '?subject=' . rawurlencode($subject);

    $labels = [
        'created_at'      => 'Received',
        'form_type'       => 'Form type',
        'name'            => 'Name',
        'email'           => 'Email',
        'phone'           => 'Phone',
        'book_type'       => 'Book type',
        'length'          => 'Manuscript length',
        'illustrations'   => 'Illustrations',
        'estimate'        => 'Instant estimate',
        'budget'          => 'Budget',
        'package'         => 'Package',
        'nda_requested'   => 'NDA requested',
        'message'         => 'Message',
        'manuscript_file' => 'Manuscript file',
        'page_url'        => 'Opened on page',
        'ip_address'      => 'IP address',
        'user_agent'      => 'Browser',
        'recaptcha_score' => 'reCAPTCHA score',
        'email_sent'      => 'Email notification',
    ];
  ?>

  <p><a class="adm-btn adm-btn-light adm-btn-sm" href="<?php echo e(sub_url($filters)); ?>">&larr; Back to inbox</a></p>

  <div class="adm-card">
    <div class="adm-page-head">
      <div>
        <h2>Lead #<?php echo (int) $lead['id']; ?> &middot; <?php echo e($lead['name'] !== '' ? $lead['name'] : 'No name given'); ?></h2>
        <p class="adm-page-sub">
          <span class="adm-chip <?php echo e(sub_type_chip((string) $lead['form_type'])); ?>"><?php echo e(sub_type_label((string) $lead['form_type'])); ?></span>
          &nbsp;<?php echo e(sub_date((string) $lead['created_at'])); ?>
        </p>
      </div>
      <div class="adm-page-actions">
        <?php if ((string) $lead['email'] !== ''): ?>
          <a class="adm-btn adm-btn-primary" href="<?php echo e($mailto); ?>">Reply by email</a>
        <?php endif; ?>
        <form method="post" action="<?php echo e($currentUrl); ?>">
          <?php echo admin_csrf_field(); ?>
          <input type="hidden" name="id" value="<?php echo (int) $lead['id']; ?>">
          <input type="hidden" name="action" value="<?php echo $isStarred ? 'unstar' : 'star'; ?>">
          <button type="submit" class="adm-btn adm-btn-light"><?php echo $isStarred ? 'Unstar' : 'Star'; ?></button>
        </form>
        <form method="post" action="<?php echo e($currentUrl); ?>">
          <?php echo admin_csrf_field(); ?>
          <input type="hidden" name="id" value="<?php echo (int) $lead['id']; ?>">
          <input type="hidden" name="action" value="mark_unread">
          <button type="submit" class="adm-btn adm-btn-light">Mark unread</button>
        </form>
      </div>
    </div>

    <?php
      $ft      = (string) $lead['form_type'];
      $isPopup = strtolower($ft) === 'popup';
      $pageNm  = sub_page_name((string) ($lead['page_url'] ?? ''));
      $pageUrl = (string) ($lead['page_url'] ?? '');
      $pageOk  = preg_match('~^https?://~i', $pageUrl);
    ?>
    <div class="adm-lead-origin">
      <span class="adm-lead-origin-ico" aria-hidden="true"><?php echo $isPopup ? '&#128241;' : '&#128231;'; ?></span>
      <div>
        <strong>How this lead arrived</strong>
        <p>
          Came in through the <strong><?php echo e(sub_type_label($ft)); ?></strong><?php if ($isPopup): ?>, which opens as a popup over the page<?php endif; ?>.
          Opened on the <strong><?php echo e($pageNm); ?></strong><?php if ($pageOk): ?> (<a href="<?php echo e($pageUrl); ?>" target="_blank" rel="noopener noreferrer">view page</a>)<?php endif; ?>.
          <?php if ((int) ($lead['email_sent'] ?? 0) === 1): ?>A notification email was sent.<?php else: ?>The email notification did not send (the lead is still saved here).<?php endif; ?>
        </p>
      </div>
    </div>

    <dl class="adm-lead-detail">
      <?php foreach ($labels as $key => $label): ?>
        <?php
          $val = $lead[$key] ?? null;
          // Booleans always render; everything else only when non-empty.
          if ($key !== 'nda_requested' && $key !== 'email_sent') {
              if ($val === null || trim((string) $val) === '') continue;
          }
        ?>
        <dt><?php echo e($label); ?></dt>
        <dd>
          <?php if ($key === 'nda_requested'): ?>
            <?php echo !empty($val) ? 'Yes' : 'No'; ?>
          <?php elseif ($key === 'email_sent'): ?>
            <?php echo !empty($val) ? 'Sent' : 'Not sent'; ?>
          <?php elseif ($key === 'message'): ?>
            <?php echo nl2br(e($val)); ?>
          <?php elseif ($key === 'email'): ?>
            <a href="mailto:<?php echo e($val); ?>"><?php echo e($val); ?></a>
          <?php elseif ($key === 'page_url'): ?>
            <?php
              /* The leads table is entirely attacker-supplied. Only ever render
                 page_url as a live link when it is a real http(s)/relative URL;
                 a javascript:/data: value would run in the admin origin on click,
                 so those are shown as inert escaped text. */
              $pu = (string) $val;
              $linkable = preg_match('~^https?://~i', $pu)
                  || ($pu !== '' && $pu[0] === '/' && strncmp($pu, '//', 2) !== 0);
            ?>
            <?php if ($linkable): ?>
              <a href="<?php echo e($pu); ?>" target="_blank" rel="noopener noreferrer"><?php echo e($pu); ?></a>
            <?php else: ?>
              <?php echo e($pu); ?>
            <?php endif; ?>
          <?php elseif ($key === 'created_at'): ?>
            <?php echo e(sub_date((string) $val)); ?>
          <?php else: ?>
            <?php echo e($val); ?>
          <?php endif; ?>
        </dd>
      <?php endforeach; ?>
    </dl>
  </div>

<?php else: ?>

  <div class="adm-grid cols-3">
    <div class="adm-stat">
      <span class="adm-stat-num"><?php echo (int) $counts['total']; ?></span>
      <span class="adm-stat-label">Total submissions</span>
      <span class="adm-stat-trend"><?php echo (int) $counts['last30']; ?> in the last 30 days</span>
    </div>
    <div class="adm-stat">
      <span class="adm-stat-num"><?php echo (int) $counts['last7']; ?></span>
      <span class="adm-stat-label">Last 7 days</span>
      <span class="adm-stat-trend">Fresh enquiries this week</span>
    </div>
    <div class="adm-stat">
      <span class="adm-stat-num"><?php echo (int) $counts['unread']; ?></span>
      <span class="adm-stat-label">Unread</span>
      <span class="adm-stat-trend">Waiting for a first look</span>
    </div>
  </div>

  <div class="adm-toolbar">
    <form method="get" action="submissions.php" class="adm-filter-form">
      <input type="search" class="adm-search" name="q" value="<?php echo e($q); ?>" placeholder="Search name, email, phone or message">
      <select name="type" aria-label="Form type">
        <option value="">All types</option>
        <?php foreach ($formTypes as $ft): ?>
          <option value="<?php echo e($ft); ?>"<?php echo $ft === $type ? ' selected' : ''; ?>><?php echo e(sub_type_label($ft)); ?></option>
        <?php endforeach; ?>
      </select>
      <select name="flag" aria-label="Flag">
        <option value="">All</option>
        <option value="unread"<?php echo $flag === 'unread' ? ' selected' : ''; ?>>Unread</option>
        <option value="starred"<?php echo $flag === 'starred' ? ' selected' : ''; ?>>Starred</option>
      </select>
      <button type="submit" class="adm-btn adm-btn-light adm-btn-sm">Filter</button>
    </form>
  </div>

  <?php if (!$result['rows']): ?>

    <div class="adm-card">
      <div class="adm-empty">
        <div class="adm-empty-glyph" aria-hidden="true">&#128235;</div>
        <p><?php echo ($q !== '' || $type !== '' || $flag !== '') ? 'Nothing matches those filters. Try widening the search.' : 'No submissions yet. When someone fills in a form on the site, it lands here.'; ?></p>
      </div>
    </div>

  <?php else: ?>

    <div class="adm-card">
      <div class="adm-table-wrap">
        <table class="adm-table">
          <thead>
            <tr>
              <th aria-label="Star"></th>
              <th>Received</th>
              <th>Form</th>
              <th>Page</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Message</th>
              <th>Score</th>
              <th>Emailed</th>
              <th aria-label="Actions"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result['rows'] as $row): ?>
              <?php
                $rid    = (int) $row['id'];
                $st     = adm_lead_state($rid);
                $isRead = !empty($st['read']);
                $isStar = !empty($st['star']);
              ?>
              <tr>
                <td>
                  <form method="post" action="<?php echo e($currentUrl); ?>">
                    <?php echo admin_csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo $rid; ?>">
                    <input type="hidden" name="action" value="<?php echo $isStar ? 'unstar' : 'star'; ?>">
                    <button type="submit" class="adm-star<?php echo $isStar ? ' is-on' : ''; ?>" title="<?php echo $isStar ? 'Unstar' : 'Star'; ?>" aria-label="<?php echo $isStar ? 'Unstar' : 'Star'; ?>">&#9733;</button>
                  </form>
                </td>
                <td><?php echo e(sub_date((string) $row['created_at'])); ?></td>
                <td><span class="adm-chip <?php echo e(sub_type_chip((string) $row['form_type'])); ?>"><?php echo e(sub_type_label((string) $row['form_type'])); ?></span></td>
                <td><?php echo e(sub_page_name((string) ($row['page_url'] ?? ''))); ?></td>
                <td><?php echo $isRead ? e($row['name']) : '<strong>' . e($row['name']) . '</strong>'; ?></td>
                <td><?php if ((string) $row['email'] !== ''): ?><a href="mailto:<?php echo e($row['email']); ?>"><?php echo e($row['email']); ?></a><?php endif; ?></td>
                <td><?php echo e($row['phone']); ?></td>
                <td><?php echo e(mb_strimwidth(trim((string) ($row['message'] ?? '')), 0, 60, '…', 'UTF-8')); ?></td>
                <td><?php echo $row['recaptcha_score'] !== null ? e(number_format((float) $row['recaptcha_score'], 2)) : '&mdash;'; ?></td>
                <td><?php echo !empty($row['email_sent']) ? '&#10003;' : '&mdash;'; ?></td>
                <td><a class="adm-btn adm-btn-light adm-btn-sm" href="<?php echo e(sub_url($filters + ['view' => $rid])); ?>">View</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <?php if ($totalPages > 1): ?>
      <div class="adm-toolbar">
        <?php if ($page > 1): ?>
          <a class="adm-btn adm-btn-light adm-btn-sm" href="<?php echo e(sub_url(['q' => $q, 'type' => $type, 'flag' => $flag, 'page' => $page - 1])); ?>">&larr; Newer</a>
        <?php endif; ?>
        <span class="adm-help">Page <?php echo (int) $page; ?> of <?php echo (int) $totalPages; ?></span>
        <?php if ($page < $totalPages): ?>
          <a class="adm-btn adm-btn-light adm-btn-sm" href="<?php echo e(sub_url(['q' => $q, 'type' => $type, 'flag' => $flag, 'page' => $page + 1])); ?>">Older &rarr;</a>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  <?php endif; ?>

<?php endif; ?>

<?php admin_layout_end(); ?>

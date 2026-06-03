<?php
/* =================================================================
   FORM SUBMISSION HANDLER — Purple Giraffe Press
   Receives POST from the site forms, emails the lead to support@,
   and redirects to thank-you.php (success) or back to the form page
   with ?form_status=<code> (error).

   Wired forms (form_type):
     - includes/forms/contact-form.php          (quote)
     - includes/forms/publishing-enquiry-form.php (enquiry, may attach a file)
     - includes/forms/newsletter-form.php       (newsletter)
================================================================= */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/smtp-mailer.php';
require_once __DIR__ . '/includes/nda-pdf.php';
require_once __DIR__ . '/includes/lead-store.php';

// Session carries the NDA payload across the redirect to thank-you.php so the
// download link can regenerate the PDF without putting the lead's details in a URL.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Redirect to a site page using a ROOT-RELATIVE path, resolved for the current
 * environment + URL style. Works at the web root (live -> /thank-you/) and in a
 * localhost subdirectory (-> /brands/.../thank-you.php). Root-relative on
 * purpose: the form posts to the trailing-slash endpoint /form-submission/, so
 * a bare relative target like "thank-you.php" would wrongly resolve under it.
 */
function site_redirect(string $page): void {
    // Split off any ?query so clean_path only transforms the path portion.
    $query = '';
    if (($q = strpos($page, '?')) !== false) {
        $query = substr($page, $q);
        $page  = substr($page, 0, $q);
    }
    $base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
    header('Location: ' . $base . '/' . clean_path($page) . $query);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    site_redirect('index.php');
}

/* ----------------------------- helpers ----------------------------- */

function field_value(string $key): string {
    $v = $_POST[$key] ?? '';
    if (is_array($v)) return implode(', ', array_map('trim', $v));
    return trim((string) $v);
}

function client_ip(): string {
    foreach (['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'] as $k) {
        if (empty($_SERVER[$k])) continue;
        $v = trim((string) $_SERVER[$k]);
        if ($k === 'HTTP_X_FORWARDED_FOR') $v = trim(explode(',', $v)[0]);
        return $v;
    }
    return '';
}

/** Success → thank-you.php; anything else → back to the form with a status. */
function redirect_back(string $status): void {
    if ($status === 'success') {
        site_redirect('thank-you.php');
    }
    $target = field_value('source_page') ?: ($_SERVER['HTTP_REFERER'] ?? 'index.php');
    $target = trim($target) ?: 'index.php';
    $sep = strpos($target, '?') !== false ? '&' : '?';
    header('Location: ' . $target . $sep . 'form_status=' . rawurlencode($status) . '#form');
    exit;
}

/* ----------------------- manuscript upload ------------------------ */

function ms_whitelist(): array { return ['doc','docx','pdf','txt','rtf','odt','pages']; }
function ms_blocked(): array {
    return ['php','phtml','phar','php3','php4','php5','php7','php8','pht','html','htm','xhtml','svg',
            'jsp','asp','aspx','exe','dll','msi','jar','bat','cmd','com','sh','bash','js','vbs','wsf',
            'hta','reg','scr','ps1','pl','py','rb','cgi','htaccess'];
}

function ms_magic_ok(string $path, string $ext): bool {
    $h = @file_get_contents($path, false, null, 0, 16);
    if ($h === false || $h === '') return false;
    switch ($ext) {
        case 'pdf':  return strncmp($h, '%PDF-', 5) === 0;
        case 'docx': case 'odt': case 'pages':
            return strncmp($h, "PK\x03\x04", 4) === 0 || strncmp($h, "PK\x05\x06", 4) === 0 || strncmp($h, "PK\x07\x08", 4) === 0;
        case 'doc':  return strncmp($h, "\xD0\xCF\x11\xE0\xA1\xB1\x1A\xE1", 8) === 0;
        case 'rtf':  return strncmp($h, '{\\rtf', 5) === 0;
        case 'txt':
            $s = (string) @file_get_contents($path, false, null, 0, 4096);
            return strpos($s, "\0") === false;
    }
    return false;
}

function handle_manuscript_upload(string $field): array {
    if (!isset($_FILES[$field]) || (int) ($_FILES[$field]['error'] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_NO_FILE) {
        return ['ok' => false, 'reason' => 'no-file'];
    }
    $f   = $_FILES[$field];
    $err = (int) $f['error'];
    if ($err === UPLOAD_ERR_INI_SIZE || $err === UPLOAD_ERR_FORM_SIZE) return ['ok' => false, 'reason' => 'too-large'];
    if ($err !== UPLOAD_ERR_OK) return ['ok' => false, 'reason' => 'upload-error'];

    $size = (int) ($f['size'] ?? 0);
    if ($size <= 0 || $size > 20 * 1024 * 1024) return ['ok' => false, 'reason' => 'too-large'];
    $tmp = (string) ($f['tmp_name'] ?? '');
    if (!is_uploaded_file($tmp)) return ['ok' => false, 'reason' => 'not-uploaded'];

    $raw = (string) ($f['name'] ?? '');
    if ($raw === '' || strlen($raw) > 255 || strpos($raw, "\0") !== false || preg_match('#[/\\\\:]#', $raw)) {
        return ['ok' => false, 'reason' => 'bad-filename'];
    }
    $clean = basename(preg_replace('/[\x00-\x1F\x7F]/', '', $raw));
    $parts = explode('.', strtolower($clean));
    array_shift($parts);
    foreach ($parts as $p) {
        if (in_array($p, ms_blocked(), true)) return ['ok' => false, 'reason' => 'forbidden-extension'];
    }
    $ext = strtolower(pathinfo($clean, PATHINFO_EXTENSION));
    if (!in_array($ext, ms_whitelist(), true)) return ['ok' => false, 'reason' => 'bad-extension'];
    if (!ms_magic_ok($tmp, $ext)) return ['ok' => false, 'reason' => 'bad-signature'];
    if (in_array($ext, ['txt', 'rtf'], true)) {
        $head = (string) @file_get_contents($tmp, false, null, 0, 8192);
        if (preg_match('/<\?php\b|<\?=|<script\b|eval\s*\(|base64_decode\s*\(|system\s*\(|shell_exec\s*\(/i', $head)) {
            return ['ok' => false, 'reason' => 'suspicious-content'];
        }
    }
    $stem = preg_replace('/[^A-Za-z0-9._\- ]+/', '_', pathinfo($clean, PATHINFO_FILENAME));
    $stem = trim(preg_replace('/\s+/', ' ', $stem));
    $stem = substr($stem, 0, 60) ?: 'manuscript';
    return ['ok' => true, 'path' => $tmp, 'name' => $stem . '.' . $ext, 'size' => $size];
}

/* ------------------------- lead → email --------------------------- */

function lead_form_label(string $t): string {
    return [
        'quote'      => 'Quote Popup',
        'enquiry'    => 'Publishing Enquiry',
        'newsletter' => 'Newsletter Signup',
        'estimate'   => 'Instant Estimate',
        'contact'    => 'Contact Form',
    ][$t] ?? ucwords(str_replace('_', ' ', $t ?: 'Website'));
}

function lead_field_labels(): array {
    return [
        'name'            => 'Full Name',
        'email'           => 'Email',
        'phone'           => 'Phone',
        'book_type'       => 'Book Type',
        'length'          => 'Length',
        'illustrations'   => 'Illustrations',
        'estimate'        => 'Estimated Range',
        'budget'          => 'Budget',
        'package'         => 'Package',
        'nda'             => 'NDA Requested',
        'message'         => 'Message',
        'manuscript_file' => 'Manuscript Attached',
    ];
}

function lead_visible_rows(array $lead): array {
    $rows = [];
    foreach (lead_field_labels() as $k => $label) {
        $v = trim((string) ($lead[$k] ?? ''));
        if ($v === '') continue;
        $rows[] = ['key' => $k, 'label' => $label, 'value' => $v];
    }
    return $rows;
}

function build_lead_text(array $lead): string {
    $lines = [
        'New ' . lead_form_label($lead['form_type']) . ' — ' . SITE_NAME,
        'Received: ' . date('j F Y, H:i'),
        str_repeat('=', 56), '',
    ];
    foreach (lead_visible_rows($lead) as $r) $lines[] = $r['label'] . ': ' . $r['value'];
    $lines[] = '';
    if (!empty($lead['page_url']))   $lines[] = 'Submitted from: ' . $lead['page_url'];
    if (!empty($lead['ip_address'])) $lines[] = 'IP: ' . $lead['ip_address'];
    return implode("\r\n", $lines);
}

function build_lead_html(array $lead): string {
    $brand   = e(SITE_NAME);
    $purple  = '#52208f';
    $purple2 = '#7b35d0';
    $gold    = '#f7c948';
    $ink     = '#24143a';
    $muted   = '#685b79';
    $bodyBg  = '#faf7ff';
    $line    = '#efe7fb';

    $source  = e(lead_form_label($lead['form_type']));
    $name    = e($lead['name'] ?: 'A new visitor');
    $when    = e(date('j F Y, H:i'));

    $rows = '';
    foreach (lead_visible_rows($lead) as $r) {
        $label = e($r['label']);
        $val   = e($r['value']);
        if ($r['key'] === 'email') {
            $val = '<a href="mailto:' . $val . '" style="color:' . $purple . ';font-weight:600;text-decoration:none;">' . $val . '</a>';
        } elseif ($r['key'] === 'phone') {
            $tel = e(preg_replace('/[^0-9+]/', '', $r['value']));
            $val = '<a href="tel:' . $tel . '" style="color:' . $purple . ';font-weight:600;text-decoration:none;">' . $val . '</a>';
        } elseif ($r['key'] === 'message') {
            $val = nl2br($val);
        }
        $rows .= '<tr>'
            . '<td style="padding:13px 18px;border-bottom:1px solid ' . $line . ';font-size:12px;color:' . $muted . ';font-weight:700;text-transform:uppercase;letter-spacing:.5px;width:170px;vertical-align:top;">' . $label . '</td>'
            . '<td style="padding:13px 18px;border-bottom:1px solid ' . $line . ';font-size:15px;color:' . $ink . ';line-height:1.55;vertical-align:top;">' . $val . '</td>'
            . '</tr>';
    }
    if ($rows === '') $rows = '<tr><td style="padding:18px;color:' . $muted . ';">No fields submitted.</td></tr>';

    $replyCta = '';
    if (filter_var($lead['email'] ?? '', FILTER_VALIDATE_EMAIL)) {
        $replyCta = '<table role="presentation" cellspacing="0" cellpadding="0" border="0" style="margin:24px auto 0;"><tr>'
            . '<td style="border-radius:999px;background:' . $gold . ';">'
            . '<a href="mailto:' . e($lead['email']) . '" style="display:inline-block;padding:13px 30px;color:' . $ink . ';text-decoration:none;font-size:14px;font-weight:800;">Reply to ' . e($lead['name'] ?: 'lead') . '</a>'
            . '</td></tr></table>';
    }

    $meta = [];
    if (!empty($lead['page_url']))   $meta[] = 'Page: ' . e($lead['page_url']);
    if (!empty($lead['ip_address'])) $meta[] = 'IP: ' . e($lead['ip_address']);
    $metaHtml = $meta ? '<p style="margin:0;font-size:12px;color:' . $muted . ';line-height:1.7;">' . implode(' &nbsp;&middot;&nbsp; ', $meta) . '</p>' : '';

    return <<<HTML
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>New lead &mdash; {$brand}</title></head>
<body style="margin:0;padding:0;background:{$bodyBg};font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Arial,sans-serif;color:{$ink};">
<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background:{$bodyBg};padding:32px 16px;"><tr><td align="center">
  <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="max-width:600px;width:100%;background:#fff;border-radius:18px;overflow:hidden;box-shadow:0 10px 40px rgba(82,32,143,.14);">
    <tr><td style="background:linear-gradient(135deg,{$purple},{$purple2});padding:24px 32px;">
      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0"><tr>
        <td style="color:#fff;font-size:13px;font-weight:800;letter-spacing:1.4px;text-transform:uppercase;">New Lead</td>
        <td align="right" style="color:rgba(255,255,255,.8);font-size:12px;">{$brand}</td>
      </tr></table>
    </td></tr>
    <tr><td style="padding:32px 32px 16px;">
      <h1 style="margin:0 0 6px;font-size:23px;line-height:1.25;color:{$ink};font-weight:800;">{$name} just got in touch</h1>
      <p style="margin:0;font-size:14px;color:{$muted};">via <strong style="color:{$purple};">{$source}</strong> &nbsp;&middot;&nbsp; {$when}</p>
    </td></tr>
    <tr><td style="padding:0 32px 8px;">
      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="border:1px solid {$line};border-radius:12px;overflow:hidden;">{$rows}</table>
    </td></tr>
    <tr><td style="padding:0 32px 26px;text-align:center;">{$replyCta}</td></tr>
    <tr><td style="padding:16px 32px 26px;border-top:1px solid {$line};">{$metaHtml}</td></tr>
  </table>
  <p style="margin:18px auto 0;max-width:600px;font-size:11px;color:#9b8fb0;">Sent automatically by {$brand}.</p>
</td></tr></table>
</body></html>
HTML;
}

/* ---------------------------- process ----------------------------- */

// Honeypot: real users never fill this hidden field. Pretend success for bots.
if (field_value('company') !== '' || field_value('website_url') !== '') {
    redirect_back('success');
}

// reCAPTCHA v3 — drop confirmed bots before doing any real work. We only BLOCK on
// a definitive bad signal from Google (invalid token or a score below threshold).
// A missing token (JS off / blocked) or a network/Google error is allowed through
// — the honeypot is the baseline, and we never want a transient outage to cost a
// real enquiry. Blocked submissions are silently dropped (pretend success).
// Skipped on localhost: the keys are domain-registered for the live site, so local
// tokens would fail verification and wrongly block testing.
require_once __DIR__ . '/includes/recaptcha.php';
$rcToken = field_value('recaptcha_token');
$rcScore = null;
if (!IS_LOCAL && $rcToken !== '') {
    $rc = recaptcha_verify($rcToken, client_ip(), defined('RECAPTCHA_MIN_SCORE') ? RECAPTCHA_MIN_SCORE : 0.5);
    $rcScore = $rc['score'] ?? null;
    if (!$rc['ok'] && in_array($rc['reason'], ['low-score', 'not-success'], true)) {
        error_log('[recaptcha] blocked (' . $rc['reason'] . ', score=' . ($rc['score'] ?? 'n/a') . ')');
        redirect_back('success');
    }
}

$formType = field_value('form_type') ?: 'website';

$firstName = field_value('first_name') ?: field_value('firstName');
$lastName  = field_value('last_name')  ?: field_value('lastName');
$name      = field_value('name') ?: trim($firstName . ' ' . $lastName);
$message   = field_value('message') ?: field_value('about') ?: field_value('notes');
$ndaRequested = field_value('nda') !== '';
$nda       = $ndaRequested ? 'Yes — include an NDA in the reply' : '';

$lead = [
    'form_type'  => $formType,
    'name'       => $name,
    'email'      => field_value('email'),
    'phone'      => field_value('phone') ?: field_value('number'),
    'book_type'  => field_value('book_type'),
    'length'     => field_value('length'),
    'illustrations' => field_value('illustrations'),
    'estimate'   => field_value('estimate'),
    'budget'     => field_value('budget'),
    'package'    => field_value('package'),
    'nda'        => $nda,
    'message'    => $message,
    'page_url'   => field_value('source_page') ?: ($_SERVER['HTTP_REFERER'] ?? ''),
    'ip_address' => client_ip(),
];

// Validation. Newsletter only needs a valid email; other forms need a name too.
if (!filter_var($lead['email'], FILTER_VALIDATE_EMAIL)) {
    redirect_back('invalid');
}
if (!in_array($formType, ['newsletter', 'estimate'], true) && $lead['name'] === '') {
    redirect_back('invalid');
}

// Optional manuscript attachment (publishing enquiry).
$attachments = [];
$upload = handle_manuscript_upload('manuscript');
if (($upload['ok'] ?? false) === true) {
    $attachments[] = ['path' => $upload['path'], 'name' => $upload['name']];
    $lead['manuscript_file'] = sprintf('%s · %s KB', $upload['name'], number_format($upload['size'] / 1024, 1));
} elseif (($upload['reason'] ?? 'no-file') !== 'no-file') {
    $status = match ($upload['reason']) {
        'too-large' => 'file-too-large',
        'forbidden-extension', 'suspicious-content' => 'file-blocked',
        default     => 'invalid-file',
    };
    redirect_back($status);
}

// NDA: when requested, generate a pre-populated Mutual NDA PDF, attach it to the
// lead email, and stash the details in the session so thank-you.php can offer the
// same document for download. Regenerated on demand from $_SESSION (no file kept).
$ndaTmp = null;
if ($ndaRequested && $lead['name'] !== '') {
    $ndaData = ['name' => $lead['name'], 'email' => $lead['email'], 'date' => date('F j, Y')];
    $ndaTmp  = tempnam(sys_get_temp_dir(), 'pgpnda');
    if ($ndaTmp !== false && @file_put_contents($ndaTmp, pgp_generate_nda_pdf($ndaData)) !== false) {
        $attachments[] = ['path' => $ndaTmp, 'name' => pgp_nda_filename($lead['name'])];
        $lead['nda']   = 'Yes — signed NDA generated and attached';
    } else {
        $ndaTmp = null;
    }
    $_SESSION['pgp_nda'] = $ndaData;
} else {
    // No NDA this time — clear any leftover so a stale one can't be downloaded.
    unset($_SESSION['pgp_nda']);
}

// Send.
if ($formType === 'newsletter') {
    $subject = 'New newsletter signup — ' . SITE_NAME;
} elseif ($formType === 'estimate') {
    $subject = 'New instant estimate — ' . ($lead['book_type'] ?: SITE_NAME);
} else {
    $subject = sprintf('New %s: %s', lead_form_label($formType), $lead['name'] ?: $lead['email']);
}

$sent = send_lead_mail(
    $LEAD['recipients'] ?? [SMTP_FROM_EMAIL],
    $subject,
    build_lead_text($lead),
    build_lead_html($lead),
    $lead['email'],
    $attachments
);
if (!$sent) {
    error_log('[lead] mail send failed for ' . $lead['email']);
}

// Persist the lead to the database (independent of the email — a DB hiccup is
// logged inside lead_store() and never blocks the submission).
lead_store($lead, $sent, $rcScore);

// The NDA download regenerates from $_SESSION, so the temp copy is no longer needed.
if ($ndaTmp !== null && is_file($ndaTmp)) {
    @unlink($ndaTmp);
}

// Land on thank-you. Flag the NDA in the URL so its "ready" card shows — and keeps
// showing on refresh (the card is gated on ?nda=1 plus the saved session payload).
site_redirect(!empty($_SESSION['pgp_nda']) ? 'thank-you.php?nda=1' : 'thank-you.php');

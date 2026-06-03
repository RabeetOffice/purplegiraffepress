<?php
/* =================================================================
   NDA DOWNLOAD — Purple Giraffe Press
   Streams the recipient's pre-populated Mutual NDA as a PDF download.
   The lead's details are read from the session (set by
   form-submission.php) and the document is regenerated on demand, so
   nothing is stored on disk between requests.
================================================================= */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/nda-pdf.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$nda = $_SESSION['pgp_nda'] ?? null;

// No NDA in this session (direct hit, expired, or never requested) — send them home.
if (!is_array($nda) || trim((string) ($nda['name'] ?? '')) === '') {
    header('Location: ' . rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/') . '/' . clean_path('index.php'));
    exit;
}

$pdf      = pgp_generate_nda_pdf($nda);
$filename = pgp_nda_filename((string) $nda['name']);

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Length: ' . strlen($pdf));
header('Cache-Control: private, no-store, max-age=0');
header('Pragma: no-cache');

echo $pdf;
exit;

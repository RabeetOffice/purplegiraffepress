<?php
/**
 * Admin helpers: locked/atomic file IO, backups, slugs, read time,
 * PHP lint gate and the shared WebP image uploader.
 *
 * Every write to a LIVE site file must go through admin_replace_site_file()
 * so a timestamped backup always exists and the write is atomic.
 */

if (!defined('PGP_ADMIN')) { http_response_code(404); exit; }

define('ADMIN_DIR', dirname(__DIR__));
define('ADMIN_DATA_DIR', ADMIN_DIR . '/data');
define('ADMIN_BACKUP_DIR', ADMIN_DATA_DIR . '/backups');

/* ---------------------------------------------------------------- JSON IO */

function admin_json_read(string $path, $fallback = []) {
    if (!is_file($path)) return $fallback;
    $fh = @fopen($path, 'rb');
    if (!$fh) return $fallback;
    flock($fh, LOCK_SH);
    $raw = stream_get_contents($fh);
    flock($fh, LOCK_UN);
    fclose($fh);
    $data = json_decode((string) $raw, true);
    return is_array($data) ? $data : $fallback;
}

function admin_json_write(string $path, $data): bool {
    $dir = dirname($path);
    if (!is_dir($dir)) { @mkdir($dir, 0775, true); }
    $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    if ($json === false) return false;
    $fh = @fopen($path, 'cb');
    if (!$fh) return false;
    $ok = flock($fh, LOCK_EX)
        && ftruncate($fh, 0)
        && rewind($fh)
        && fwrite($fh, $json) !== false
        && fflush($fh);
    flock($fh, LOCK_UN);
    fclose($fh);
    return (bool) $ok;
}

/* ------------------------------------------------------------- file writes */

/**
 * Atomic write: temp file in the same directory, then rename over the target.
 * Windows rename() will not overwrite an existing file, so unlink first.
 */
function admin_atomic_write(string $path, string $content): bool {
    $dir = dirname($path);
    if (!is_dir($dir)) { @mkdir($dir, 0775, true); }
    $tmp = @tempnam($dir, '.adm');
    if ($tmp === false) return false;
    if (@file_put_contents($tmp, $content, LOCK_EX) === false) {
        @unlink($tmp);
        return false;
    }
    if (DIRECTORY_SEPARATOR === '\\' && is_file($path)) {
        @unlink($path);
    }
    if (!@rename($tmp, $path)) {
        @unlink($tmp);
        return false;
    }
    return true;
}

/** Copy $path into data/backups/<name>.<timestamp>.bak and keep the last 20. */
function admin_backup_file(string $path): void {
    if (!is_file($path)) return;
    if (!is_dir(ADMIN_BACKUP_DIR)) { @mkdir(ADMIN_BACKUP_DIR, 0775, true); }
    $name = basename($path);
    @copy($path, ADMIN_BACKUP_DIR . '/' . $name . '.' . date('Ymd-His') . '.bak');

    $all = glob(ADMIN_BACKUP_DIR . '/' . $name . '.*.bak') ?: [];
    if (count($all) > 20) {
        sort($all); // timestamped names sort oldest first
        foreach (array_slice($all, 0, count($all) - 20) as $old) {
            @unlink($old);
        }
    }
}

/** Backup then atomically replace a live site file. */
function admin_replace_site_file(string $path, string $content): bool {
    admin_backup_file($path);
    return admin_atomic_write($path, $content);
}

/* ---------------------------------------------------------------- strings */

function admin_slugify(string $text): string {
    $text = strtolower(trim($text));
    if (function_exists('iconv')) {
        $t = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text);
        if ($t !== false) $text = $t;
    }
    $text = preg_replace("~['\x{2019}]~u", '', $text);
    $text = preg_replace('~[^a-z0-9]+~', '-', $text);
    return trim((string) $text, '-');
}

/** Escape for a single-quoted PHP string literal. */
function admin_php_sq(string $s): string {
    return str_replace(['\\', "'"], ['\\\\', "\\'"], $s);
}

/** Escape for a double-quoted PHP string literal. */
function admin_php_dq(string $s): string {
    return addcslashes($s, "\\\"\$");
}

/**
 * Reading time from body text. Tokens are \S+ runs (numbers count as words),
 * ~210 wpm, minimum 3 minutes. Must match the live JS counter in admin.js.
 */
function admin_read_time_minutes(string $html): int {
    $text = html_entity_decode(strip_tags($html), ENT_QUOTES, 'UTF-8');
    $count = preg_match_all('~\S+~u', $text);
    return max(3, (int) ceil(($count ?: 0) / 210));
}

function admin_read_time_label(int $minutes): string {
    return $minutes . ' min read';
}

/* ---------------------------------------------------------------- PHP lint */

/**
 * Lint PHP source with `php -l` before it ever replaces a live file.
 * Returns true when the code parses, or when exec is unavailable (degrade to
 * trust rather than blocking publishing on restrictive hosts).
 */
function php_check_syntax_string(string $code): bool {
    if (!function_exists('exec')) return true;
    $disabled = array_map('trim', explode(',', (string) ini_get('disable_functions')));
    if (in_array('exec', $disabled, true)) return true;

    $tmp = @tempnam(sys_get_temp_dir(), 'lint');
    if ($tmp === false) return true;
    @file_put_contents($tmp, $code);
    $out = [];
    $rc  = 1;
    @exec('php -l ' . escapeshellarg($tmp) . ' 2>&1', $out, $rc);
    @unlink($tmp);
    return $rc === 0;
}

/* ------------------------------------------------------------ image upload */

/**
 * Shared hardened image uploader. MIME-sniffs the file (never trusts the
 * extension), requires a real parseable image, caps size, and re-encodes to
 * WebP via GD (max 1920px wide) - re-encoding also destroys any payload hidden
 * inside a valid image. Without GD the original bytes are kept but the name is
 * still forced to an image extension.
 *
 * @param array  $file    one entry from $_FILES
 * @param string $relDir  site-root-relative target dir, e.g. 'assets/images/blog'
 * @param string $hint    preferred file name (slugified), no extension
 * @return array [true, '<relDir>/<name>'] or [false, 'error message']
 */
function admin_upload_image_webp(array $file, string $relDir, string $hint, int $maxBytes = 8388608): array {
    if (!isset($file['tmp_name']) || $file['error'] !== UPLOAD_ERR_OK) {
        return [false, 'Upload failed. Please try again.'];
    }
    if ($file['size'] > $maxBytes) {
        return [false, 'Image is too large (max ' . round($maxBytes / 1048576) . ' MB).'];
    }

    $mime = '';
    if (function_exists('finfo_open')) {
        $fi = finfo_open(FILEINFO_MIME_TYPE);
        if ($fi) {
            $mime = (string) finfo_file($fi, $file['tmp_name']);
            finfo_close($fi);
        }
    }
    $allowed = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp', 'image/gif' => 'gif'];
    if (!isset($allowed[$mime])) {
        return [false, 'Only JPG, PNG, WebP or GIF images are allowed.'];
    }
    $info = @getimagesize($file['tmp_name']);
    if ($info === false || $info[0] < 1 || $info[1] < 1) {
        return [false, 'That file is not a readable image.'];
    }

    $relDir = trim(str_replace('\\', '/', $relDir), '/');
    if ($relDir === '' || strpos($relDir, '..') !== false) {
        return [false, 'Invalid upload directory.'];
    }
    $absDir = SITE_ROOT . '/' . $relDir;
    if (!is_dir($absDir) && !@mkdir($absDir, 0775, true)) {
        return [false, 'Could not create the upload directory.'];
    }
    admin_upload_dir_htaccess($absDir);

    $name = admin_slugify($hint !== '' ? $hint : pathinfo((string) $file['name'], PATHINFO_FILENAME));
    if ($name === '') $name = 'image-' . date('Ymd-His');

    $gdOk = function_exists('imagecreatefromstring') && function_exists('imagewebp');
    if ($gdOk) {
        $img = @imagecreatefromstring((string) file_get_contents($file['tmp_name']));
        if (!$img) return [false, 'That image could not be processed.'];
        $w = imagesx($img);
        $h = imagesy($img);
        if ($w > 1920) {
            $nw = 1920;
            $nh = (int) round($h * (1920 / $w));
            $dst = imagecreatetruecolor($nw, $nh);
            imagealphablending($dst, false);
            imagesavealpha($dst, true);
            imagecopyresampled($dst, $img, 0, 0, 0, 0, $nw, $nh, $w, $h);
            imagedestroy($img);
            $img = $dst;
        } else {
            imagepalettetotruecolor($img);
            imagealphablending($img, false);
            imagesavealpha($img, true);
        }
        $abs = $absDir . '/' . $name . '.webp';
        $ok  = @imagewebp($img, $abs, 82);
        imagedestroy($img);
        if (!$ok) return [false, 'Could not save the converted image.'];
        return [true, $relDir . '/' . $name . '.webp'];
    }

    // No GD: keep original bytes, force a safe image extension.
    $ext = $allowed[$mime];
    $abs = $absDir . '/' . $name . '.' . $ext;
    if (!@move_uploaded_file($file['tmp_name'], $abs)) {
        return [false, 'Could not move the uploaded file.'];
    }
    return [true, $relDir . '/' . $name . '.' . $ext];
}

/** Drop a .htaccess into an upload dir that disables script execution. */
function admin_upload_dir_htaccess(string $absDir): void {
    $ht = $absDir . '/.htaccess';
    if (is_file($ht)) return;
    $rules = "# Uploaded media only - never execute scripts here.\n"
        . "<IfModule mod_php.c>\n  php_flag engine off\n</IfModule>\n"
        . "AddType text/plain .php .phtml .php3 .php4 .php5 .php7 .php8 .phps .pht .cgi .pl .py .sh\n"
        . "<FilesMatch \"\\.(php\\d?|phtml|phps|pht|cgi|pl|py|sh)$\">\n  Require all denied\n</FilesMatch>\n";
    @file_put_contents($ht, $rules);
}

/* ------------------------------------------------------------------- misc */

function admin_redirect(string $to): void {
    header('Location: ' . $to);
    exit;
}

function admin_flash(string $key, ?string $msg = null): ?string {
    if ($msg !== null) {
        $_SESSION['adm_flash'][$key] = $msg;
        return null;
    }
    $out = $_SESSION['adm_flash'][$key] ?? null;
    unset($_SESSION['adm_flash'][$key]);
    return $out;
}

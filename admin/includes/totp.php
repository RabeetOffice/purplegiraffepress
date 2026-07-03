<?php
/**
 * Minimal RFC 6238 TOTP (HMAC-SHA1, 30s period, 6 digits) with RFC 4648
 * base32 helpers. No dependencies. Verified against the RFC test vectors.
 */

if (!defined('PGP_ADMIN')) { http_response_code(404); exit; }

function totp_base32_encode(string $bin): string {
    $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
    $out = '';
    $bits = 0;
    $value = 0;
    for ($i = 0, $n = strlen($bin); $i < $n; $i++) {
        $value = ($value << 8) | ord($bin[$i]);
        $bits += 8;
        while ($bits >= 5) {
            $out .= $alphabet[($value >> ($bits - 5)) & 31];
            $bits -= 5;
        }
    }
    if ($bits > 0) {
        $out .= $alphabet[($value << (5 - $bits)) & 31];
    }
    return $out;
}

function totp_base32_decode(string $b32): string {
    $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
    $b32 = strtoupper(preg_replace('~[^A-Za-z2-7]~', '', $b32));
    $out = '';
    $bits = 0;
    $value = 0;
    for ($i = 0, $n = strlen($b32); $i < $n; $i++) {
        $pos = strpos($alphabet, $b32[$i]);
        if ($pos === false) continue;
        $value = ($value << 5) | $pos;
        $bits += 5;
        if ($bits >= 8) {
            $out .= chr(($value >> ($bits - 8)) & 255);
            $bits -= 8;
        }
    }
    return $out;
}

function totp_new_secret(int $bytes = 20): string {
    return totp_base32_encode(random_bytes($bytes));
}

function totp_code(string $b32secret, ?int $time = null, int $period = 30, int $digits = 6): string {
    $key = totp_base32_decode($b32secret);
    $counter = (int) floor(($time ?? time()) / $period);
    $bin = pack('N*', 0) . pack('N*', $counter); // 64-bit big-endian
    $hash = hash_hmac('sha1', $bin, $key, true);
    $offset = ord(substr($hash, -1)) & 0x0F;
    $trunc = (
        ((ord($hash[$offset]) & 0x7F) << 24) |
        ((ord($hash[$offset + 1]) & 0xFF) << 16) |
        ((ord($hash[$offset + 2]) & 0xFF) << 8) |
        (ord($hash[$offset + 3]) & 0xFF)
    );
    return str_pad((string) ($trunc % (10 ** $digits)), $digits, '0', STR_PAD_LEFT);
}

/** Verify a user-entered code, accepting a +/-1 period clock drift window. */
function totp_verify(string $b32secret, string $code, ?int $time = null, int $window = 1): bool {
    $code = preg_replace('~\D~', '', $code);
    if (strlen($code) !== 6) return false;
    $time = $time ?? time();
    for ($i = -$window; $i <= $window; $i++) {
        if (hash_equals(totp_code($b32secret, $time + ($i * 30)), $code)) {
            return true;
        }
    }
    return false;
}

/** otpauth:// URI for authenticator apps (QR enrolment). */
function totp_uri(string $b32secret, string $account, string $issuer): string {
    return 'otpauth://totp/' . rawurlencode($issuer . ':' . $account)
        . '?secret=' . rawurlencode($b32secret)
        . '&issuer=' . rawurlencode($issuer)
        . '&algorithm=SHA1&digits=6&period=30';
}

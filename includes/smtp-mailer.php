<?php
/* =================================================================
   SMTP MAILER — Purple Giraffe Press
   Self-contained SMTP client (no external library). Talks to Gmail
   over STARTTLS (587) or SSL (465), authenticates with AUTH LOGIN,
   and sends a multipart/alternative message (text + HTML) with
   optional file attachments.

   Public API:
     send_lead_mail($to, $subject, $textBody, $htmlBody, $replyTo, $attachments): bool

   Config comes from these constants (defined in includes/config.php):
     SMTP_HOST, SMTP_PORT, SMTP_SECURE ('tls'|'ssl'),
     SMTP_USER, SMTP_PASS, SMTP_FROM_EMAIL, SMTP_FROM_NAME
================================================================= */

if (!function_exists('smtp_setting')) {
    function smtp_setting(string $key, $fallback = '') {
        $c = strtoupper($key);
        return defined($c) ? constant($c) : $fallback;
    }
}

if (!function_exists('smtp_encode_header')) {
    /* RFC 2047 encode a header value if it contains non-ASCII. */
    function smtp_encode_header(string $text): string {
        if (preg_match('/[^\x20-\x7E]/', $text)) {
            return '=?UTF-8?B?' . base64_encode($text) . '?=';
        }
        return $text;
    }
}

if (!function_exists('send_lead_mail')) {
    /**
     * @param string|array $to          One or more recipient addresses.
     * @param array        $attachments Each: ['path' => absolute, 'name' => filename].
     */
    function send_lead_mail($to, string $subject, string $textBody, string $htmlBody, string $replyTo = '', array $attachments = []): bool {
        $host   = (string) smtp_setting('smtp_host', 'smtp.gmail.com');
        $port   = (int)    smtp_setting('smtp_port', 587);
        $secure = strtolower((string) smtp_setting('smtp_secure', 'tls'));
        $user   = (string) smtp_setting('smtp_user', '');
        $pass   = str_replace(' ', '', (string) smtp_setting('smtp_pass', '')); // app passwords have no spaces
        $from   = (string) smtp_setting('smtp_from_email', $user);
        $fromNm = (string) smtp_setting('smtp_from_name', 'Website');

        $recipients = array_values(array_filter(array_map('trim', (array) $to)));
        if (empty($recipients)) $recipients = array_filter([$from]);
        if (empty($recipients) || $user === '' || $pass === '') {
            error_log('[smtp] missing recipients or credentials');
            return false;
        }

        $domain = substr(strrchr($from, '@') ?: '@localhost', 1) ?: 'localhost';

        /* XAMPP frequently ships without a configured CA bundle, which would make
           TLS peer verification fail. We disable verification so dev sending works;
           the channel is still encrypted. */
        $ctx = stream_context_create(['ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ]]);

        $remote = ($secure === 'ssl' ? 'ssl://' : 'tcp://') . $host . ':' . $port;
        $errno = 0; $errstr = '';
        $conn = @stream_socket_client($remote, $errno, $errstr, 25, STREAM_CLIENT_CONNECT, $ctx);
        if (!$conn) {
            error_log("[smtp] connect failed to $remote: $errno $errstr");
            return false;
        }
        stream_set_timeout($conn, 25);

        $read = function () use ($conn): array {
            $data = '';
            while (($line = fgets($conn, 600)) !== false) {
                $data .= $line;
                if (strlen($line) < 4 || $line[3] === ' ') break; // last line of a (possibly multiline) reply
            }
            return [(int) substr(ltrim($data), 0, 3), $data];
        };
        $put = function (string $line) use ($conn) { fwrite($conn, $line . "\r\n"); };

        $fail = function (string $why) use ($conn): bool {
            error_log('[smtp] ' . $why);
            @fwrite($conn, "QUIT\r\n");
            @fclose($conn);
            return false;
        };

        [$code] = $read();                       if ($code !== 220) return $fail("greeting: $code");
        $put('EHLO ' . $domain); [$code] = $read(); if ($code !== 250) return $fail("EHLO: $code");

        if ($secure === 'tls') {
            $put('STARTTLS'); [$code] = $read(); if ($code !== 220) return $fail("STARTTLS: $code");
            $crypto = STREAM_CRYPTO_METHOD_TLS_CLIENT;
            if (defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) $crypto |= STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT;
            if (!@stream_socket_enable_crypto($conn, true, $crypto)) return $fail('TLS handshake failed');
            $put('EHLO ' . $domain); [$code] = $read(); if ($code !== 250) return $fail("EHLO(2): $code");
        }

        $put('AUTH LOGIN');             [$code] = $read(); if ($code !== 334) return $fail("AUTH: $code");
        $put(base64_encode($user));     [$code] = $read(); if ($code !== 334) return $fail("AUTH user: $code");
        $put(base64_encode($pass));     [$code] = $read(); if ($code !== 235) return $fail("AUTH pass: $code (check the app password)");

        $put('MAIL FROM:<' . $from . '>'); [$code] = $read(); if ($code !== 250) return $fail("MAIL FROM: $code");
        foreach ($recipients as $rcpt) {
            $put('RCPT TO:<' . $rcpt . '>'); [$code] = $read();
            if ($code !== 250 && $code !== 251) return $fail("RCPT $rcpt: $code");
        }

        $put('DATA'); [$code] = $read(); if ($code !== 354) return $fail("DATA: $code");

        /* ---- Build the MIME message ---- */
        $altB = 'alt_' . bin2hex(random_bytes(10));
        $mixB = 'mix_' . bin2hex(random_bytes(10));
        $eol  = "\r\n";

        $headers  = 'From: ' . smtp_encode_header($fromNm) . ' <' . $from . '>' . $eol;
        $headers .= 'To: ' . implode(', ', $recipients) . $eol;
        if ($replyTo !== '' && filter_var($replyTo, FILTER_VALIDATE_EMAIL)) {
            $headers .= 'Reply-To: ' . $replyTo . $eol;
        }
        $headers .= 'Subject: ' . smtp_encode_header($subject) . $eol;
        $headers .= 'Date: ' . date('r') . $eol;
        $headers .= 'Message-ID: <' . bin2hex(random_bytes(12)) . '@' . $domain . '>' . $eol;
        $headers .= 'MIME-Version: 1.0' . $eol;

        $altBody  = '--' . $altB . $eol;
        $altBody .= 'Content-Type: text/plain; charset=UTF-8' . $eol;
        $altBody .= 'Content-Transfer-Encoding: base64' . $eol . $eol;
        $altBody .= chunk_split(base64_encode($textBody !== '' ? $textBody : strip_tags($htmlBody))) . $eol;
        $altBody .= '--' . $altB . $eol;
        $altBody .= 'Content-Type: text/html; charset=UTF-8' . $eol;
        $altBody .= 'Content-Transfer-Encoding: base64' . $eol . $eol;
        $altBody .= chunk_split(base64_encode($htmlBody)) . $eol;
        $altBody .= '--' . $altB . '--' . $eol;

        $valid = array_values(array_filter($attachments, function ($a) {
            return !empty($a['path']) && is_file($a['path']) && is_readable($a['path']);
        }));

        if (empty($valid)) {
            $headers .= 'Content-Type: multipart/alternative; boundary="' . $altB . '"' . $eol;
            $body = $altBody;
        } else {
            $headers .= 'Content-Type: multipart/mixed; boundary="' . $mixB . '"' . $eol;
            $body  = '--' . $mixB . $eol;
            $body .= 'Content-Type: multipart/alternative; boundary="' . $altB . '"' . $eol . $eol;
            $body .= $altBody . $eol;
            foreach ($valid as $a) {
                $name = preg_replace('/[\r\n"]/', '', (string) ($a['name'] ?? basename($a['path'])));
                $data = (string) file_get_contents($a['path']);
                $body .= '--' . $mixB . $eol;
                $body .= 'Content-Type: application/octet-stream; name="' . $name . '"' . $eol;
                $body .= 'Content-Transfer-Encoding: base64' . $eol;
                $body .= 'Content-Disposition: attachment; filename="' . $name . '"' . $eol . $eol;
                $body .= chunk_split(base64_encode($data)) . $eol;
            }
            $body .= '--' . $mixB . '--' . $eol;
        }

        fwrite($conn, $headers . $eol . $body . $eol . '.' . $eol);
        [$code] = $read();
        $put('QUIT');
        @fclose($conn);

        if ($code !== 250) {
            error_log("[smtp] message not accepted: $code");
            return false;
        }
        return true;
    }
}

<?php
/* =================================================================
   reCAPTCHA v3 VERIFICATION — Purple Giraffe Press
   Server-side check of a v3 token against Google's siteverify API.
   Self-contained: uses cURL when available, otherwise a stream
   context (same lenient-TLS approach as smtp-mailer.php so it works
   on a stock XAMPP without a CA bundle).

   recaptcha_verify($token, $ip, $minScore): array
     => ['ok' => bool, 'score' => float|null, 'reason' => string]
   'ok' is true only when Google confirms success AND score >= $minScore.
================================================================= */

if (!function_exists('recaptcha_http_post')) {
    function recaptcha_http_post(string $url, string $body): ?string {
        if (function_exists('curl_init')) {
            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => $body,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CONNECTTIMEOUT => 5,
                CURLOPT_TIMEOUT        => 8,
                CURLOPT_SSL_VERIFYPEER => false, // XAMPP often ships without a CA bundle
                CURLOPT_SSL_VERIFYHOST => 0,
            ]);
            $res = curl_exec($ch);
            $bad = ($res === false) || curl_errno($ch);
            curl_close($ch);
            return $bad ? null : (string) $res;
        }
        $ctx = stream_context_create([
            'http' => [
                'method'  => 'POST',
                'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
                'content' => $body,
                'timeout' => 8,
            ],
            'ssl' => ['verify_peer' => false, 'verify_peer_name' => false],
        ]);
        $res = @file_get_contents($url, false, $ctx);
        return $res === false ? null : (string) $res;
    }
}

if (!function_exists('recaptcha_verify')) {
    function recaptcha_verify(string $token, string $ip = '', float $minScore = 0.5): array {
        $secret = defined('RECAPTCHA_SECRET_KEY') ? (string) RECAPTCHA_SECRET_KEY : '';
        if ($secret === '') return ['ok' => false, 'score' => null, 'reason' => 'no-secret'];
        if ($token === '')  return ['ok' => false, 'score' => null, 'reason' => 'no-token'];

        $body = http_build_query(array_filter([
            'secret'   => $secret,
            'response' => $token,
            'remoteip' => $ip,
        ]));

        $raw = recaptcha_http_post('https://www.google.com/recaptcha/api/siteverify', $body);
        if ($raw === null) return ['ok' => false, 'score' => null, 'reason' => 'request-failed'];

        $data = json_decode($raw, true);
        if (!is_array($data)) return ['ok' => false, 'score' => null, 'reason' => 'bad-response'];

        $score = isset($data['score']) ? (float) $data['score'] : null;
        if (empty($data['success']))             return ['ok' => false, 'score' => $score, 'reason' => 'not-success'];
        if ($score !== null && $score < $minScore) return ['ok' => false, 'score' => $score, 'reason' => 'low-score'];
        return ['ok' => true, 'score' => $score, 'reason' => 'ok'];
    }
}

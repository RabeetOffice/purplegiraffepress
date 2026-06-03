<?php
/* =================================================================
   NDA PDF GENERATOR — Purple Giraffe Press
   Self-contained PDF writer (no external library, same ethos as the
   hand-rolled smtp-mailer.php). Produces a one-page Mutual NDA,
   pre-populated with the recipient's name and the effective date.

   Uses the PDF "standard 14" Helvetica fonts (no font embedding, so
   the output stays tiny — a few KB). Word-wrapping uses the real
   Adobe Helvetica / Helvetica-Bold AFM character widths so lines
   never overflow the page margins.

   Public API:
     pgp_generate_nda_pdf(array $data): string   // returns raw PDF bytes
       $data['name'] — recipient full name (required-ish; falls back)
       $data['date'] — effective date string (defaults to today)
================================================================= */

if (!function_exists('pgp_nda_widths')) {
    /**
     * Adobe AFM character widths (units per 1000 em) for codes 32..126,
     * plus 169 (©). These let us measure text accurately for wrapping
     * and centering without embedding any font data.
     */
    function pgp_nda_widths(bool $bold): array {
        static $cache = [];
        $k = $bold ? 'b' : 'r';
        if (isset($cache[$k])) return $cache[$k];

        // Codes 32 (space) .. 126 (~), in order.
        $reg = '278 278 355 556 556 889 667 191 333 333 389 584 278 333 278 278 '
             . '556 556 556 556 556 556 556 556 556 556 278 278 584 584 584 556 '
             . '1015 667 667 722 722 667 611 778 722 278 500 667 556 833 722 778 '
             . '667 778 722 667 611 722 667 944 667 667 611 278 278 278 469 556 '
             . '333 556 556 500 556 556 278 556 556 222 222 500 222 833 556 556 '
             . '556 556 333 500 278 556 500 722 500 500 500 334 260 334 584';
        $bld = '278 333 474 556 556 889 722 238 333 333 389 584 278 333 278 278 '
             . '556 556 556 556 556 556 556 556 556 556 333 333 584 584 584 611 '
             . '975 722 722 722 722 667 611 778 722 278 556 722 611 833 722 778 '
             . '667 778 722 667 611 722 667 944 667 667 611 333 278 333 584 556 '
             . '333 556 611 556 611 556 333 611 611 278 278 556 278 889 611 611 '
             . '611 611 389 556 333 611 556 778 556 556 500 389 280 389 584';

        $vals = preg_split('/\s+/', trim($bold ? $bld : $reg));
        $w = [];
        foreach ($vals as $i => $v) { $w[32 + $i] = (int) $v; }
        $w[169] = 737; // © (WinAnsi 0xA9)
        $cache[$k] = $w;
        return $w;
    }
}

if (!function_exists('pgp_text_width')) {
    /** Width of $s in points at the given size/weight. */
    function pgp_text_width(string $s, float $size, bool $bold): float {
        $w = pgp_nda_widths($bold);
        $total = 0;
        $len = strlen($s);
        for ($i = 0; $i < $len; $i++) {
            $total += $w[ord($s[$i])] ?? 556;
        }
        return $total * $size / 1000.0;
    }
}

if (!function_exists('pgp_wrap_text')) {
    /** Greedy word-wrap to $maxWidth (points). Returns an array of lines. */
    function pgp_wrap_text(string $text, float $size, bool $bold, float $maxWidth): array {
        $words = preg_split('/\s+/', trim($text));
        $lines = [];
        $cur = '';
        foreach ($words as $word) {
            if ($word === '') continue;
            $try = $cur === '' ? $word : $cur . ' ' . $word;
            if ($cur === '' || pgp_text_width($try, $size, $bold) <= $maxWidth) {
                $cur = $try;
            } else {
                $lines[] = $cur;
                $cur = $word;
            }
        }
        if ($cur !== '') $lines[] = $cur;
        return $lines ?: [''];
    }
}

if (!function_exists('pgp_pdf_str')) {
    /** Escape a string for a PDF literal ( ... ). */
    function pgp_pdf_str(string $s): string {
        return strtr($s, [
            '\\' => '\\\\', '(' => '\\(', ')' => '\\)',
            "\r" => '\\r', "\n" => '\\n',
        ]);
    }
}

if (!function_exists('pgp_generate_nda_pdf')) {
    function pgp_generate_nda_pdf(array $data): string {
        $name = trim((string) ($data['name'] ?? ''));
        if ($name === '') $name = 'The Recipient';
        $date = trim((string) ($data['date'] ?? date('F j, Y')));

        /* ---- Page geometry (A4, points) ---- */
        $PW = 595.28; $PH = 841.89;
        $ml = 60.0; $mr = 60.0;
        $contentW = $PW - $ml - $mr;
        $top = 800.0; $bottom = 96.0;

        /* ---- Brand colours (PDF "r g b" fill triplets) ---- */
        $cPurple = '0.322 0.125 0.561'; // #52208f
        $cInk    = '0.145 0.071 0.247'; // #25123f
        $cBody   = '0.231 0.196 0.302';
        $cMuted  = '0.451 0.404 0.541';
        $cRule   = '0.847 0.792 0.937';

        $pages = [];
        $buf = '';
        $y = $top;

        /* ---- Low-level emitters (operate on $buf / $y) ---- */
        $put = function (float $x, float $yy, string $str, bool $bold, float $size, string $color, float $tracking = 0.0) use (&$buf) {
            $buf .= sprintf(
                "BT /%s %s Tf %s rg %s Tc 1 0 0 1 %.2f %.2f Tm (%s) Tj ET\n",
                $bold ? 'F2' : 'F1', rtrim(rtrim(sprintf('%.2f', $size), '0'), '.'),
                $color, rtrim(rtrim(sprintf('%.2f', $tracking), '0'), '.'),
                $x, $yy, pgp_pdf_str($str)
            );
        };
        $putCentered = function (string $str, bool $bold, float $size, float $yy, string $color, float $tracking = 0.0) use ($put, $PW) {
            $tw = pgp_text_width($str, $size, $bold) + $tracking * max(0, strlen($str) - 1);
            $put(($PW - $tw) / 2.0, $yy, $str, $bold, $size, $color, $tracking);
        };
        $hline = function (float $x1, float $yy, float $x2, string $color, float $w) use (&$buf) {
            $buf .= sprintf("%s RG %.2f w %.2f %.2f m %.2f %.2f l S\n", $color, $w, $x1, $yy, $x2, $yy);
        };
        $break = function (float $needed) use (&$buf, &$pages, &$y, $top, $bottom) {
            if ($y - $needed < $bottom) {
                $pages[] = $buf;
                $buf = '';
                $y = $top;
            }
        };

        /* ---- Header ---- */
        $putCentered('MUTUAL NON-DISCLOSURE AGREEMENT', true, 19, $y, $cPurple);
        $y -= 22;
        $putCentered('STANDARD MUTUAL CONFIDENTIALITY TERMS', false, 8.5, $y, $cMuted, 2.0);
        $y -= 16;
        $hline($ml, $y, $PW - $mr, $cRule, 1.0);
        $y -= 26;

        /* ---- Body content ---- */
        $blocks = [
            ['kv', '1. EFFECTIVE DATE:', $date],
            ['h', '2. PARTIES:'],
            ['p', 'This Agreement is between Purple Giraffe Press ("Company") and the undersigned individual/entity: ' . $name . ' ("Recipient").'],
            ['h', '3. DEFINITION OF CONFIDENTIAL INFORMATION:'],
            ['p', '"Confidential Information" means all non-public, proprietary, or confidential information including, but not limited to, manuscripts, story ideas, character designs, illustrations, business plans, and financial information, whether disclosed orally or in writing.'],
            ['h', '4. NON-DISCLOSURE OBLIGATIONS:'],
            ['p', 'The Recipient agrees: (i) to use the Confidential Information solely for the purpose of evaluating a potential publishing relationship; (ii) to hold and maintain the Confidential Information in the strictest confidence; and (iii) not to disclose such information to any third party without prior written consent.'],
            ['h', '5. EXCLUSIONS:'],
            ['p', "Confidential Information does not include information that: (a) is or becomes generally available to the public other than as a result of a disclosure by Recipient; (b) was within Recipient's possession prior to its being furnished; or (c) becomes available to Recipient on a non-confidential basis from a source other than Company."],
            ['h', '6. TERM & GOVERNING LAW:'],
            ['p', 'The obligations of this Agreement shall survive for a period of three (3) years from the Effective Date. This Agreement shall be governed by and construed in accordance with the laws of the State of New York and Victoria, Australia.'],
            ['h', '7. NO WARRANTY:'],
            ['p', 'All Confidential Information is provided "as is". Neither party makes any warranties, express or implied, regarding its accuracy or completeness.'],
        ];

        $lh = 13.5;   // body line height
        foreach ($blocks as $b) {
            if ($b[0] === 'kv') {
                $break(20);
                $y -= 4;
                $label = $b[1];
                $put($ml, $y, $label, true, 10.5, $cInk);
                $lw = pgp_text_width($label, 10.5, true);
                $put($ml + $lw + 5, $y, $b[2], false, 10.5, $cBody);
                $y -= 22;
            } elseif ($b[0] === 'h') {
                $break(30);
                $y -= 4;
                $put($ml, $y, $b[1], true, 10.5, $cInk);
                $y -= 16;
            } else { // p
                $lines = pgp_wrap_text($b[1], 10, false, $contentW);
                foreach ($lines as $line) {
                    $break($lh);
                    $put($ml, $y, $line, false, 10, $cBody);
                    $y -= $lh;
                }
                $y -= 8; // paragraph gap
            }
        }

        /* ---- Signature block ---- */
        $break(120);
        $y -= 10;
        $hline($ml, $y, $PW - $mr, $cRule, 0.8);
        $y -= 24;
        $col = $ml + 250;
        $sigW = 200;
        $put($ml, $y, 'FOR COMPANY:', true, 9, $cMuted);
        $put($col, $y, 'FOR RECIPIENT:', true, 9, $cMuted);
        $y -= 30;
        // Shrink a long recipient name so it never spills past its signature column.
        $sigSize = 12.0;
        $nameW = pgp_text_width($name, $sigSize, false);
        if ($nameW > $sigW) $sigSize = max(8.0, 12.0 * $sigW / $nameW);
        $put($ml, $y, 'Purple Giraffe Team', false, 12, $cInk);
        $put($col, $y, $name, false, $sigSize, $cInk);
        $y -= 8;
        $hline($ml, $y, $ml + $sigW, $cRule, 0.8);
        $hline($col, $y, $col + $sigW, $cRule, 0.8);
        $y -= 13;
        $put($ml, $y, 'Authorized Signature (Digital)', false, 8, $cMuted);
        $put($col, $y, 'Electronic Consent via Webhook', false, 8, $cMuted);

        /* ---- Footer (pinned near the bottom of the page) ---- */
        $hline($ml, 70, $PW - $mr, $cRule, 0.8);
        $putCentered("\xA9 Purple Giraffe Press. This is a legally-binding Mutual Non-Disclosure Agreement.", false, 8, 56, $cMuted);
        $putCentered('Generated ' . date('F j, Y') . '   -   purplegiraffepress.com', false, 7.5, 44, $cMuted);

        $pages[] = $buf;

        /* ---- Assemble the PDF objects ---- */
        $nPages = count($pages);
        $pageObj0 = 5;                 // page objects:    5 .. 5+nPages-1
        $contentObj0 = 5 + $nPages;    // content streams: after the page objects

        $kids = [];
        for ($i = 0; $i < $nPages; $i++) $kids[] = ($pageObj0 + $i) . ' 0 R';

        $objs = [];
        $objs[1] = '<< /Type /Catalog /Pages 2 0 R >>';
        $objs[2] = '<< /Type /Pages /Kids [' . implode(' ', $kids) . '] /Count ' . $nPages
                 . sprintf(' /MediaBox [0 0 %.2f %.2f]', $PW, $PH)
                 . ' /Resources << /Font << /F1 3 0 R /F2 4 0 R >> >> >>';
        $objs[3] = '<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica /Encoding /WinAnsiEncoding >>';
        $objs[4] = '<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica-Bold /Encoding /WinAnsiEncoding >>';
        for ($i = 0; $i < $nPages; $i++) {
            $objs[$pageObj0 + $i] = '<< /Type /Page /Parent 2 0 R /Contents ' . ($contentObj0 + $i) . ' 0 R >>';
            $stream = $pages[$i];
            $objs[$contentObj0 + $i] = '<< /Length ' . strlen($stream) . " >>\nstream\n" . $stream . 'endstream';
        }

        $maxObj = $contentObj0 + $nPages - 1;
        $pdf = "%PDF-1.4\n%\xE2\xE3\xCF\xD3\n";
        $offsets = [];
        for ($n = 1; $n <= $maxObj; $n++) {
            $offsets[$n] = strlen($pdf);
            $pdf .= $n . " 0 obj\n" . $objs[$n] . "\nendobj\n";
        }
        $xref = strlen($pdf);
        $size = $maxObj + 1;
        $pdf .= "xref\n0 " . $size . "\n0000000000 65535 f \n";
        for ($n = 1; $n <= $maxObj; $n++) {
            $pdf .= sprintf("%010d 00000 n \n", $offsets[$n]);
        }
        $pdf .= "trailer\n<< /Size " . $size . " /Root 1 0 R >>\nstartxref\n" . $xref . "\n%%EOF";
        return $pdf;
    }
}

if (!function_exists('pgp_nda_filename')) {
    /** Safe download filename for a recipient, e.g. NDA_PurpleGiraffe_Henry_Woods.pdf */
    function pgp_nda_filename(string $name): string {
        $slug = preg_replace('/[^A-Za-z0-9]+/', '_', $name);
        $slug = trim($slug, '_');
        if ($slug === '') $slug = 'Recipient';
        $slug = substr($slug, 0, 60);
        return 'NDA_PurpleGiraffe_' . $slug . '.pdf';
    }
}

<?php
/**
 * Content store: surgical read/write for the three data-driven site files
 * managed from the admin studio:
 *
 *   - includes/testimonials-data.php  ($testimonials array)
 *   - includes/data/portfolio-data.php ($portfolioItems array_map literal)
 *   - includes/blog-author.php        ($author_profiles map)
 *
 * The rules mirror the blog registry writer in post-store.php: only the target
 * array literal region is ever rebuilt (bracket-depth scan with atomic string
 * literals), every byte outside the region stays identical, and untouched
 * entries are written back from their stored raw block byte for byte. The
 * whole file is PHP-linted before admin_replace_site_file() runs; any parse
 * doubt fails closed with nothing written.
 */

if (!defined('PGP_ADMIN')) { http_response_code(404); exit; }

require_once __DIR__ . '/post-store.php';

define('SITE_TESTIMONIALS_FILE', SITE_ROOT . '/includes/testimonials-data.php');
define('SITE_PORTFOLIO_FILE', SITE_ROOT . '/includes/data/portfolio-data.php');
define('SITE_AUTHORS_FILE', SITE_ROOT . '/includes/blog-author.php');

/* ========================================================== region plumbing */

/**
 * Load $path and isolate one [ ... ] literal region. $findOpen receives the
 * whole file and must return the offset of the region's '[' (or null).
 * Returns prefix (up to and including '['), inner, suffix (from ']') and the
 * file's newline style - or null when the format is not recognised.
 */
function adm_region_parse(string $path, callable $findOpen): ?array {
    $code = @file_get_contents($path);
    if ($code === false) return null;
    $open = $findOpen($code);
    if (!is_int($open) || $open < 0 || ($code[$open] ?? '') !== '[') return null;
    $region = pgp_scan_bracket_region($code, $open);
    if ($region === null) return null;
    [$openPos, $closePos] = $region;
    $inner = substr($code, $openPos + 1, $closePos - $openPos - 1);
    return [
        'prefix' => substr($code, 0, $openPos + 1),
        'inner'  => $inner,
        'suffix' => substr($code, $closePos),
        'eol'    => strpos($inner, "\r\n") !== false ? "\r\n" : "\n",
    ];
}

/** Rebuild the region from raw entry blocks, lint the file, then replace it. */
function adm_region_write(string $path, array $parsed, array $blocks, string $label): array {
    $eol   = $parsed['eol'];
    $inner = $blocks ? ($eol . implode($eol, $blocks) . $eol) : $eol;
    $code  = $parsed['prefix'] . $inner . $parsed['suffix'];

    if (!php_check_syntax_string($code)) {
        return [false, 'The regenerated ' . $label . ' failed PHP lint - nothing was written.'];
    }
    if (!admin_replace_site_file($path, $code)) {
        return [false, 'Could not write ' . $label . ' (permissions?).'];
    }
    return [true, 'ok'];
}

/**
 * Split a region's inner text into top-level [ ... ], entry blocks. Each raw
 * block keeps its leading indentation and trailing comma. Anything at the top
 * level besides whitespace/commas and entries means a layout this parser does
 * not understand - fail closed by returning null.
 */
function adm_split_bracket_entries(string $inner): ?array {
    $blocks = [];
    $len = strlen($inner);
    $i = 0;
    while ($i < $len) {
        $c = $inner[$i];
        if ($c === '[') {
            $reg = pgp_scan_bracket_region($inner, $i);
            if ($reg === null) return null;
            [$s, $e] = $reg;
            $end = $e;
            if (isset($inner[$end + 1]) && $inner[$end + 1] === ',') $end++;
            $lineStart = $s;
            while ($lineStart > 0 && ($inner[$lineStart - 1] === ' ' || $inner[$lineStart - 1] === "\t")) {
                $lineStart--;
            }
            $blocks[] = substr($inner, $lineStart, $end - $lineStart + 1);
            $i = $end + 1;
            continue;
        }
        if ($c === "'" || $c === '"') return null;
        $i++;
    }
    return $blocks;
}

/**
 * Split a region's inner text into top-level 'Key' => [ ... ], blocks
 * (the $author_profiles shape). Returns [['name','raw','fields'], ...]
 * or null when the layout is not recognised.
 */
function adm_split_keyed_entries(string $inner): ?array {
    $entries = [];
    $len = strlen($inner);
    $i = 0;
    while ($i < $len) {
        $c = $inner[$i];
        if ($c === "'" || $c === '"') {
            $keyStart = $i;
            $q = $c;
            $j = $i + 1;
            while ($j < $len) {
                if ($inner[$j] === '\\') { $j += 2; continue; }
                if ($inner[$j] === $q) break;
                $j++;
            }
            if ($j >= $len) return null;
            $keyLit = substr($inner, $keyStart, $j - $keyStart + 1);

            $k = $j + 1;
            while ($k < $len && ctype_space($inner[$k])) $k++;
            if (substr($inner, $k, 2) !== '=>') return null;
            $k += 2;
            while ($k < $len && ctype_space($inner[$k])) $k++;
            if (($inner[$k] ?? '') !== '[') return null;

            $reg = pgp_scan_bracket_region($inner, $k);
            if ($reg === null) return null;
            $end = $reg[1];
            if (isset($inner[$end + 1]) && $inner[$end + 1] === ',') $end++;

            $lineStart = $keyStart;
            while ($lineStart > 0 && ($inner[$lineStart - 1] === ' ' || $inner[$lineStart - 1] === "\t")) {
                $lineStart--;
            }
            $entries[] = [
                'name'   => pgp_decode_literal($keyLit),
                'raw'    => substr($inner, $lineStart, $end - $lineStart + 1),
                'fields' => pgp_parse_entry_fields(substr($inner, $reg[0], $reg[1] - $reg[0] + 1)),
            ];
            $i = $end + 1;
            continue;
        }
        if ($c === '[') return null;
        $i++;
    }
    return $entries;
}

/* ============================================================ testimonials */

/** Parse one testimonial raw block into its fields. */
function adm_testimonial_from_raw(string $raw): array {
    $f = pgp_parse_entry_fields($raw);
    $rating = 5;
    if (preg_match("~'rating'\\s*=>\\s*(\\d+)~", $raw, $m)) {
        $rating = (int) $m[1];
    }
    return [
        'quote'  => (string) ($f['quote'] ?? ''),
        'author' => (string) ($f['author'] ?? ''),
        'rating' => max(1, min(5, $rating)),
        '_raw'   => $raw,
    ];
}

function adm_testimonials_parse(): ?array {
    $parsed = adm_region_parse(SITE_TESTIMONIALS_FILE, function (string $code): ?int {
        $marker = '$testimonials = [';
        $pos = strpos($code, $marker);
        return $pos === false ? null : $pos + strlen($marker) - 1;
    });
    if ($parsed === null) return null;
    $blocks = adm_split_bracket_entries($parsed['inner']);
    if ($blocks === null) return null;
    $parsed['items'] = array_map('adm_testimonial_from_raw', $blocks);
    return $parsed;
}

/** All testimonials, in file order. Each: quote, author, rating, _raw. */
function adm_testimonials_read(): array {
    $parsed = adm_testimonials_parse();
    return $parsed === null ? [] : $parsed['items'];
}

/** Render one testimonial entry in the house one-line style. */
function adm_testimonial_render(array $t): string {
    $rating = max(1, min(5, (int) ($t['rating'] ?? 5)));
    return "    ['quote' => \"" . admin_php_dq((string) ($t['quote'] ?? ''))
        . "\", 'author' => '" . admin_php_sq((string) ($t['author'] ?? ''))
        . "', 'rating' => " . $rating . '],';
}

/** Replace the $testimonials region with $items; untouched entries keep bytes. */
function adm_testimonials_write(array $items): array {
    $parsed = adm_testimonials_parse();
    if ($parsed === null) {
        return [false, 'Could not parse includes/testimonials-data.php - the file was left untouched.'];
    }
    $blocks = [];
    foreach ($items as $t) {
        $raw = (string) ($t['_raw'] ?? '');
        if ($raw !== '') {
            $p = adm_testimonial_from_raw($raw);
            if ($p['quote'] === (string) ($t['quote'] ?? '')
                && $p['author'] === (string) ($t['author'] ?? '')
                && $p['rating'] === max(1, min(5, (int) ($t['rating'] ?? 5)))) {
                $blocks[] = $raw;
                continue;
            }
        }
        $blocks[] = adm_testimonial_render($t);
    }
    return adm_region_write(SITE_TESTIMONIALS_FILE, $parsed, $blocks, 'includes/testimonials-data.php');
}

/* =============================================================== portfolio */

/** Parse one portfolio raw block into its fields. */
function adm_portfolio_from_raw(string $raw): array {
    $f = pgp_parse_entry_fields($raw);
    return [
        'category'    => (string) ($f['category'] ?? ''),
        'author'      => (string) ($f['author'] ?? ''),
        'title'       => (string) ($f['title'] ?? ''),
        'amazon_link' => (string) ($f['amazon_link'] ?? ''),
        'cover'       => (string) ($f['cover'] ?? ''),
        '_raw'        => $raw,
    ];
}

function adm_portfolio_parse(): ?array {
    $parsed = adm_region_parse(SITE_PORTFOLIO_FILE, function (string $code): ?int {
        /* The literal array is the SECOND argument of array_map: locate the
           closure's "}, [" and scan from that '['. */
        $map = strpos($code, '$portfolioItems = array_map');
        if ($map === false) return null;
        $pos = strpos($code, '}, [', $map);
        return $pos === false ? null : $pos + 3;
    });
    if ($parsed === null) return null;
    $blocks = adm_split_bracket_entries($parsed['inner']);
    if ($blocks === null) return null;
    $parsed['items'] = array_map('adm_portfolio_from_raw', $blocks);
    return $parsed;
}

/** All books, in file order. Each: category, author, title, amazon_link, cover, _raw. */
function adm_portfolio_read(): array {
    $parsed = adm_portfolio_parse();
    return $parsed === null ? [] : $parsed['items'];
}

/** Render one portfolio entry; 'cover' is inserted only when present. */
function adm_portfolio_render(array $b): string {
    $cover = (string) ($b['cover'] ?? '');
    $coverPart = $cover !== '' ? "'cover' => '" . admin_php_sq($cover) . "', " : '';
    return "    ['category' => '" . admin_php_sq((string) ($b['category'] ?? ''))
        . "', 'author' => '" . admin_php_sq((string) ($b['author'] ?? ''))
        . "', 'title' => \"" . admin_php_dq((string) ($b['title'] ?? ''))
        . "\", " . $coverPart
        . "'amazon_link' => '" . admin_php_sq((string) ($b['amazon_link'] ?? '')) . "'],";
}

/** Replace the portfolio literal with $items; untouched entries keep bytes. */
function adm_portfolio_write(array $items): array {
    $parsed = adm_portfolio_parse();
    if ($parsed === null) {
        return [false, 'Could not parse includes/data/portfolio-data.php - the file was left untouched.'];
    }
    $blocks = [];
    foreach ($items as $b) {
        $raw = (string) ($b['_raw'] ?? '');
        if ($raw !== '') {
            $p = adm_portfolio_from_raw($raw);
            $same = true;
            foreach (['category', 'author', 'title', 'amazon_link', 'cover'] as $key) {
                if ($p[$key] !== (string) ($b[$key] ?? '')) { $same = false; break; }
            }
            if ($same) { $blocks[] = $raw; continue; }
        }
        $blocks[] = adm_portfolio_render($b);
    }
    return adm_region_write(SITE_PORTFOLIO_FILE, $parsed, $blocks, 'includes/data/portfolio-data.php');
}

/* ================================================================= authors */

/** Parse one author raw block back into [name, role, bio], or null. */
function adm_author_from_raw(string $raw): ?array {
    $entries = adm_split_keyed_entries($raw);
    if (!is_array($entries) || count($entries) !== 1) return null;
    $e = $entries[0];
    return [
        'name' => $e['name'],
        'role' => (string) ($e['fields']['role'] ?? ''),
        'bio'  => (string) ($e['fields']['bio'] ?? ''),
    ];
}

function adm_authors_parse(): ?array {
    $parsed = adm_region_parse(SITE_AUTHORS_FILE, function (string $code): ?int {
        $marker = '$author_profiles = [';
        $pos = strpos($code, $marker);
        return $pos === false ? null : $pos + strlen($marker) - 1;
    });
    if ($parsed === null) return null;
    $entries = adm_split_keyed_entries($parsed['inner']);
    if ($entries === null) return null;
    $profiles = [];
    foreach ($entries as $e) {
        $profiles[$e['name']] = [
            'role' => (string) ($e['fields']['role'] ?? ''),
            'bio'  => (string) ($e['fields']['bio'] ?? ''),
            '_raw' => $e['raw'],
        ];
    }
    $parsed['profiles'] = $profiles;
    return $parsed;
}

/** All author profiles keyed by name. Each: role, bio, _raw. */
function adm_authors_read(): array {
    $parsed = adm_authors_parse();
    return $parsed === null ? [] : $parsed['profiles'];
}

/** Render one author profile block in the house multi-line style. */
function adm_author_render(string $name, array $d, string $eol): string {
    return "    '" . admin_php_sq($name) . "' => [" . $eol
        . "        'role' => '" . admin_php_sq((string) ($d['role'] ?? '')) . "'," . $eol
        . "        'bio'  => '" . admin_php_sq((string) ($d['bio'] ?? '')) . "'," . $eol
        . '    ],';
}

/** Replace the $author_profiles region; untouched entries keep bytes. */
function adm_authors_write(array $profiles): array {
    $parsed = adm_authors_parse();
    if ($parsed === null) {
        return [false, 'Could not parse includes/blog-author.php - the file was left untouched.'];
    }
    $blocks = [];
    foreach ($profiles as $name => $d) {
        $name = (string) $name;
        $raw  = (string) ($d['_raw'] ?? '');
        if ($raw !== '') {
            $p = adm_author_from_raw($raw);
            if ($p !== null
                && $p['name'] === $name
                && $p['role'] === (string) ($d['role'] ?? '')
                && $p['bio'] === (string) ($d['bio'] ?? '')) {
                $blocks[] = $raw;
                continue;
            }
        }
        $blocks[] = adm_author_render($name, $d, $parsed['eol']);
    }
    return adm_region_write(SITE_AUTHORS_FILE, $parsed, $blocks, 'includes/blog-author.php');
}

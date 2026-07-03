<?php
/**
 * Read-only reader for the site's `leads` table (written by
 * includes/lead-store.php on every form submission). The admin NEVER writes
 * to that table; per-lead read/star flags live in a small JSON state file in
 * ADMIN_DATA_DIR instead, so the site's lead pipeline stays untouched.
 *
 * Degrades gracefully: on localhost without MySQL running every function
 * returns an empty/sane fallback and nothing is ever thrown to the page.
 */

if (!defined('PGP_ADMIN')) { http_response_code(404); exit; }

/** Column order used for listings and the CSV export. */
function adm_leads_columns(): array {
    return [
        'id', 'form_type', 'name', 'email', 'phone', 'book_type', 'length',
        'illustrations', 'estimate', 'budget', 'package', 'nda_requested',
        'message', 'manuscript_file', 'page_url', 'ip_address', 'user_agent',
        'recaptcha_score', 'email_sent', 'created_at',
    ];
}

/* ------------------------------------------------------------- connection */

/** Shared read-only PDO handle, or null when the DB is unreachable. */
function adm_leads_pdo(): ?PDO {
    static $tried = false;
    static $pdo   = null;
    if ($tried) return $pdo;
    $tried = true;

    $host = defined('DB_HOST') ? (string) DB_HOST : '127.0.0.1';
    $port = defined('DB_PORT') ? (int) DB_PORT : 3306;
    $name = defined('DB_NAME') ? (string) DB_NAME : '';
    $user = defined('DB_USER') ? (string) DB_USER : 'root';
    $pass = defined('DB_PASS') ? (string) DB_PASS : '';
    if ($name === '') return null;

    try {
        $pdo = new PDO(
            "mysql:host=$host;port=$port;dbname=$name;charset=utf8mb4",
            $user,
            $pass,
            [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
                PDO::ATTR_TIMEOUT            => 3,
            ]
        );
    } catch (PDOException $e) {
        // Normal on localhost with MySQL off - degrade, never break the page.
        error_log('[adm-leads] connect failed: ' . $e->getMessage());
        $pdo = null;
    }
    return $pdo;
}

/** True when we can actually read the leads table. */
function adm_leads_available(): bool {
    static $ok = null;
    if ($ok !== null) return $ok;
    $pdo = adm_leads_pdo();
    if (!$pdo) return $ok = false;
    try {
        $pdo->query('SELECT 1 FROM leads LIMIT 1');
        $ok = true;
    } catch (PDOException $e) {
        error_log('[adm-leads] table check failed: ' . $e->getMessage());
        $ok = false;
    }
    return $ok;
}

/* ----------------------------------------------------------------- queries */

/** Distinct form types actually present, for the filter dropdown. */
function adm_leads_form_types(): array {
    $pdo = adm_leads_pdo();
    if (!$pdo) return [];
    try {
        $rows = $pdo->query('SELECT DISTINCT form_type FROM leads ORDER BY form_type')->fetchAll(PDO::FETCH_COLUMN);
        return array_values(array_filter(array_map('strval', $rows ?: []), static function ($v) {
            return $v !== '';
        }));
    } catch (PDOException $e) {
        error_log('[adm-leads] form types failed: ' . $e->getMessage());
        return [];
    }
}

/**
 * Filtered, paginated listing. Newest first.
 *
 * @param string $search   LIKE against name/email/phone/message
 * @param string $formType exact form_type filter ('' = all)
 * @param string $flag     '' | 'starred' | 'unread' (from the JSON state file)
 * @return array{rows: array, total: int}
 */
function adm_leads_query(string $search, string $formType, string $flag, int $page, int $per = 25): array {
    $empty = ['rows' => [], 'total' => 0];
    $pdo   = adm_leads_pdo();
    if (!$pdo) return $empty;

    $where = [];
    $args  = [];

    if ($search !== '') {
        // Escape LIKE wildcards with an explicit '=' escape char (avoids any
        // backslash/sql_mode ambiguity). Positional params: EMULATE_PREPARES
        // is off, so a named placeholder cannot be reused.
        $like = '%' . str_replace(['=', '%', '_'], ['==', '=%', '=_'], $search) . '%';
        $where[] = "(name LIKE ? ESCAPE '=' OR email LIKE ? ESCAPE '=' OR phone LIKE ? ESCAPE '=' OR message LIKE ? ESCAPE '=')";
        array_push($args, $like, $like, $like, $like);
    }

    if ($formType !== '') {
        $where[] = 'form_type = ?';
        $args[]  = $formType;
    }

    if ($flag === 'starred' || $flag === 'unread') {
        /*
         * Read/star flags live in leads-state.json, not in the DB (the leads
         * table is never written by the admin). Trade-off chosen: translate
         * the state file into an int id list and keep filtering + pagination
         * in SQL via IN()/NOT IN(). The state file is small (bounded by how
         * many leads an admin has read/starred), so the IN list stays short;
         * the alternative of fetching every row and filtering in PHP would
         * read the whole table on each page view.
         */
        $stateKey = $flag === 'starred' ? 'star' : 'read';
        $ids = [];
        foreach (adm_leads_state_all() as $sid => $st) {
            if (is_array($st) && !empty($st[$stateKey]) && (int) $sid > 0) {
                $ids[] = (int) $sid;
            }
        }
        $ids = array_values(array_unique($ids));
        if ($flag === 'starred') {
            if (!$ids) return $empty;                       // nothing starred yet
            $where[] = 'id IN (' . implode(',', $ids) . ')';
        } elseif ($ids) {
            $where[] = 'id NOT IN (' . implode(',', $ids) . ')'; // unread = not marked read
        }
    }

    $whereSql = $where ? ' WHERE ' . implode(' AND ', $where) : '';
    $page     = max(1, $page);
    $per      = max(1, $per);
    $offset   = ($page - 1) * $per;

    try {
        $stmt = $pdo->prepare('SELECT COUNT(*) FROM leads' . $whereSql);
        $stmt->execute($args);
        $total = (int) $stmt->fetchColumn();

        $stmt = $pdo->prepare(
            'SELECT * FROM leads' . $whereSql .
            ' ORDER BY created_at DESC, id DESC LIMIT ' . (int) $per . ' OFFSET ' . (int) $offset
        );
        $stmt->execute($args);
        return ['rows' => $stmt->fetchAll() ?: [], 'total' => $total];
    } catch (PDOException $e) {
        error_log('[adm-leads] query failed: ' . $e->getMessage());
        return $empty;
    }
}

/** One lead by id, or null. */
function adm_leads_get(int $id): ?array {
    $pdo = adm_leads_pdo();
    if (!$pdo || $id < 1) return null;
    try {
        $stmt = $pdo->prepare('SELECT * FROM leads WHERE id = ? LIMIT 1');
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return is_array($row) ? $row : null;
    } catch (PDOException $e) {
        error_log('[adm-leads] get failed: ' . $e->getMessage());
        return null;
    }
}

/** Headline numbers for the stats cards. Unread uses the JSON state file. */
function adm_leads_counts(): array {
    $out = ['total' => 0, 'last7' => 0, 'last30' => 0, 'unread' => 0];
    $pdo = adm_leads_pdo();
    if (!$pdo) return $out;
    try {
        $out['total']  = (int) $pdo->query('SELECT COUNT(*) FROM leads')->fetchColumn();
        $out['last7']  = (int) $pdo->query('SELECT COUNT(*) FROM leads WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)')->fetchColumn();
        $out['last30'] = (int) $pdo->query('SELECT COUNT(*) FROM leads WHERE created_at >= DATE_SUB(NOW(), INTERVAL 30 DAY)')->fetchColumn();

        $readIds = [];
        foreach (adm_leads_state_all() as $sid => $st) {
            if (is_array($st) && !empty($st['read']) && (int) $sid > 0) {
                $readIds[] = (int) $sid;
            }
        }
        if ($readIds) {
            // Count only read-marks that still point at real rows.
            $readCount = (int) $pdo->query(
                'SELECT COUNT(*) FROM leads WHERE id IN (' . implode(',', array_unique($readIds)) . ')'
            )->fetchColumn();
            $out['unread'] = max(0, $out['total'] - $readCount);
        } else {
            $out['unread'] = $out['total'];
        }
    } catch (PDOException $e) {
        error_log('[adm-leads] counts failed: ' . $e->getMessage());
    }
    return $out;
}

/* -------------------------------------------------- read/star state (JSON) */

function adm_leads_state_path(): string {
    return ADMIN_DATA_DIR . '/leads-state.json';
}

/** Whole state map: {"<id>": {"read":true,"star":true}, ...}. */
function adm_leads_state_all(): array {
    return admin_json_read(adm_leads_state_path(), []);
}

/** Flags for one lead, e.g. ['read' => true, 'star' => true] (may be empty). */
function adm_lead_state(int $id): array {
    $all = adm_leads_state_all();
    $st  = $all[$id] ?? [];
    return is_array($st) ? $st : [];
}

/** Set or clear one flag ('read' | 'star') for one lead. */
function adm_lead_mark(int $id, string $key, bool $val): void {
    if ($id < 1 || !in_array($key, ['read', 'star'], true)) return;
    $all = adm_leads_state_all();
    $st  = isset($all[$id]) && is_array($all[$id]) ? $all[$id] : [];
    if ($val) {
        $st[$key] = true;
    } else {
        unset($st[$key]);
    }
    if ($st) {
        $all[$id] = $st;
    } else {
        unset($all[$id]);                                   // keep the file tidy
    }
    admin_json_write(adm_leads_state_path(), $all);
}

/* -------------------------------------------------------------- CSV export */

/** Stream the given rows as a CSV download (UTF-8 BOM so Excel behaves). */
function adm_leads_csv(array $rows): void {
    $cols = adm_leads_columns();
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="leads-' . date('Ymd-His') . '.csv"');
    header('Cache-Control: no-store');

    $out = fopen('php://output', 'wb');
    if (!$out) return;
    fwrite($out, "\xEF\xBB\xBF");                           // BOM for Excel
    fputcsv($out, $cols);
    foreach ($rows as $row) {
        $line = [];
        foreach ($cols as $c) {
            $line[] = isset($row[$c]) ? (string) $row[$c] : '';
        }
        fputcsv($out, $line);
    }
    fclose($out);
}

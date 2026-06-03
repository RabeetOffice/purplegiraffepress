<?php
/* =================================================================
   LEAD STORE — Purple Giraffe Press
   Persists every form submission to a MySQL/MariaDB `leads` table,
   alongside the email notification. Self-provisioning: creates the
   database and table on first use if they don't exist (works on a
   stock XAMPP root account). Fail-safe: any DB problem is logged and
   swallowed so it never blocks the form / the visitor's redirect.

   Public API:
     lead_store(array $lead, bool $emailSent, ?float $score): bool

   Config constants (config.php): DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS
================================================================= */

if (!function_exists('lead_table_ddl')) {
    function lead_table_ddl(): string {
        return "CREATE TABLE IF NOT EXISTS leads (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            form_type VARCHAR(40) NOT NULL DEFAULT '',
            name VARCHAR(160) NOT NULL DEFAULT '',
            email VARCHAR(190) NOT NULL DEFAULT '',
            phone VARCHAR(60) NOT NULL DEFAULT '',
            book_type VARCHAR(120) NOT NULL DEFAULT '',
            length VARCHAR(120) NOT NULL DEFAULT '',
            illustrations VARCHAR(120) NOT NULL DEFAULT '',
            estimate VARCHAR(160) NOT NULL DEFAULT '',
            budget VARCHAR(120) NOT NULL DEFAULT '',
            package VARCHAR(120) NOT NULL DEFAULT '',
            nda_requested TINYINT(1) NOT NULL DEFAULT 0,
            message TEXT NULL,
            manuscript_file VARCHAR(255) NOT NULL DEFAULT '',
            page_url VARCHAR(255) NOT NULL DEFAULT '',
            ip_address VARCHAR(45) NOT NULL DEFAULT '',
            user_agent VARCHAR(255) NOT NULL DEFAULT '',
            recaptcha_score DECIMAL(3,2) NULL,
            email_sent TINYINT(1) NOT NULL DEFAULT 0,
            created_at DATETIME NOT NULL,
            INDEX idx_email (email),
            INDEX idx_created (created_at),
            INDEX idx_form_type (form_type)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
    }
}

if (!function_exists('lead_db')) {
    /** Returns a ready PDO (db + table ensured), or null if the DB is unavailable. */
    function lead_db(): ?PDO {
        static $tried = false;
        static $conn  = null;
        if ($tried) return $conn;
        $tried = true;

        $host = defined('DB_HOST') ? (string) DB_HOST : '127.0.0.1';
        $port = defined('DB_PORT') ? (int) DB_PORT : 3306;
        $name = defined('DB_NAME') ? (string) DB_NAME : '';
        $user = defined('DB_USER') ? (string) DB_USER : 'root';
        $pass = defined('DB_PASS') ? (string) DB_PASS : '';
        if ($name === '') return null;

        $opts = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            PDO::ATTR_TIMEOUT            => 5,
        ];

        try {
            $conn = new PDO("mysql:host=$host;port=$port;dbname=$name;charset=utf8mb4", $user, $pass, $opts);
        } catch (PDOException $e) {
            // Database may not exist yet — try to create it (XAMPP root can).
            try {
                $root = new PDO("mysql:host=$host;port=$port;charset=utf8mb4", $user, $pass, $opts);
                $safe = str_replace('`', '', $name);
                $root->exec("CREATE DATABASE IF NOT EXISTS `$safe` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
                $conn = new PDO("mysql:host=$host;port=$port;dbname=$name;charset=utf8mb4", $user, $pass, $opts);
            } catch (PDOException $e2) {
                error_log('[lead-db] connect failed: ' . $e2->getMessage());
                $conn = null;
                return null;
            }
        }

        try {
            $conn->exec(lead_table_ddl());
        } catch (PDOException $e) {
            error_log('[lead-db] ensure table failed: ' . $e->getMessage());
        }
        return $conn;
    }
}

if (!function_exists('lead_store')) {
    function lead_store(array $lead, bool $emailSent = false, ?float $score = null): bool {
        $pdo = lead_db();
        if (!$pdo) return false;

        $cut = static function ($v, int $n): string {
            return mb_substr(trim((string) $v), 0, $n);
        };

        try {
            $stmt = $pdo->prepare(
                "INSERT INTO leads
                 (form_type,name,email,phone,book_type,length,illustrations,estimate,budget,package,
                  nda_requested,message,manuscript_file,page_url,ip_address,user_agent,recaptcha_score,email_sent,created_at)
                 VALUES
                 (:form_type,:name,:email,:phone,:book_type,:length,:illustrations,:estimate,:budget,:package,
                  :nda_requested,:message,:manuscript_file,:page_url,:ip_address,:user_agent,:recaptcha_score,:email_sent,:created_at)"
            );
            $stmt->execute([
                ':form_type'       => $cut($lead['form_type'] ?? '', 40),
                ':name'            => $cut($lead['name'] ?? '', 160),
                ':email'           => $cut($lead['email'] ?? '', 190),
                ':phone'           => $cut($lead['phone'] ?? '', 60),
                ':book_type'       => $cut($lead['book_type'] ?? '', 120),
                ':length'          => $cut($lead['length'] ?? '', 120),
                ':illustrations'   => $cut($lead['illustrations'] ?? '', 120),
                ':estimate'        => $cut($lead['estimate'] ?? '', 160),
                ':budget'          => $cut($lead['budget'] ?? '', 120),
                ':package'         => $cut($lead['package'] ?? '', 120),
                ':nda_requested'   => !empty($lead['nda']) ? 1 : 0,
                ':message'         => trim((string) ($lead['message'] ?? '')),
                ':manuscript_file' => $cut($lead['manuscript_file'] ?? '', 255),
                ':page_url'        => $cut($lead['page_url'] ?? '', 255),
                ':ip_address'      => $cut($lead['ip_address'] ?? '', 45),
                ':user_agent'      => $cut($_SERVER['HTTP_USER_AGENT'] ?? '', 255),
                ':recaptcha_score' => $score,
                ':email_sent'      => $emailSent ? 1 : 0,
                ':created_at'      => date('Y-m-d H:i:s'),
            ]);
            return true;
        } catch (PDOException $e) {
            error_log('[lead-db] insert failed: ' . $e->getMessage());
            return false;
        }
    }
}

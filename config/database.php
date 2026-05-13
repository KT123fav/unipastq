<?php
// config/database.php
// Database configuration for XAMPP

define('DB_HOST', 'localhost');
define('DB_USER', 'root');        // XAMPP default username
define('DB_PASS', '');              // XAMPP default password (empty)
define('DB_NAME', 'unipastq');

/**
 * Get PDO database connection
 * Uses singleton pattern to reuse connection
 */
function getDB() {
    static $pdo = null;
    if ($pdo === null) {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
            $pdo = new PDO($dsn, DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            die("<div style='padding:20px;background:#fee2e2;color:#991b1b;border-radius:8px;margin:20px;font-family:sans-serif;'>
                <h3>Database Connection Error</h3>
                <p>" . htmlspecialchars($e->getMessage()) . "</p>
                <p><strong>Please ensure:</strong></p>
                <ol>
                    <li>XAMPP MySQL is running</li>
                    <li>Database 'unipastq' has been created</li>
                    <li>Username/password in config/database.php are correct</li>
                </ol>
            </div>");
        }
    }
    return $pdo;
}
?>
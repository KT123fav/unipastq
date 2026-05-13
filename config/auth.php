<?php
// config/auth.php
// Authentication and session management

session_start();

/**
 * Check if user is logged in
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

/**
 * Redirect to login if not authenticated
 */
function requireAuth() {
    if (!isLoggedIn()) {
        $_SESSION['redirect_after_login'] = $_SERVER['REQUEST_URI'];
        header('Location: ' . getBaseUrl() . 'login.php');
        exit;
    }
}

/**
 * Get current logged-in user data
 */
function getCurrentUser() {
    if (!isLoggedIn()) return null;
    $db = getDB();
    $stmt = $db->prepare("SELECT id, full_name, email, matric_number, department, level, created_at, last_login FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    return $stmt->fetch();
}

/**
 * Log out user and destroy session
 */
function logout() {
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 3600, '/');
    }
    session_destroy();
    header('Location: ' . getBaseUrl() . 'login.php');
    exit;
}

/**
 * Get base URL for the application
 */
function getBaseUrl() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $script = $_SERVER['SCRIPT_NAME'] ?? '';
    $dir = dirname($script);

    // Compare with forward slash, double backslash (escaped), and dot
    if ($dir === '/' || $dir === '\\' || $dir === '.') {
        $dir = '';
    }

    return $protocol . '://' . $host . $dir . '/';
}

/**
 * Get relative path from current file to root
 */
function getRootPath() {
    $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
    $depth = substr_count($scriptDir, '/') - 1;
    return str_repeat('../', max(0, $depth));
}

/**
 * Log download activity
 */
function logDownload($userId, $courseCode, $pdfFilename) {
    try {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO download_logs (user_id, course_code, pdf_filename) VALUES (?, ?, ?)");
        $stmt->execute([$userId, $courseCode, $pdfFilename]);
    } catch (PDOException $e) {
        error_log("Download log failed: " . $e->getMessage());
    }
}

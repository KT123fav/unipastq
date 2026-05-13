<?php
/**
 * @var PDO $db
 * @var array|null $user
 */
require_once 'config/database.php';
require_once 'config/auth.php';
requireAuth();


$user = getCurrentUser();
if (!$user) {
    logout();
}

// Get download history
try {
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM download_logs WHERE user_id = ? ORDER BY downloaded_at DESC LIMIT 10");
    $stmt->execute([$user['id']]);
    $downloads = $stmt->fetchAll();
} catch (PDOException $e) {
    $downloads = [];
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | UniPastQ</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">📚 Uni<span>PastQ</span></a>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#courses">Courses</a></li>
                <li><a href="profile.php">My Profile</a></li>
                <li><a href="logout.php" class="logout-link">Logout (<?php echo htmlspecialchars($_SESSION['user_name'] ?? 'User'); ?>)</a></li>
            </ul>
            <button class="theme-toggle" onclick="toggleTheme()">🌙</button>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="index.php">Home</a> / My Profile
    </div>

    <!-- Profile Content -->
    <div class="container">
        <div class="profile-card">
            <div class="profile-header">
                <div class="profile-avatar">
                    <?php echo strtoupper(substr($user['full_name'], 0, 1)); ?>
                </div>
                <h2><?php echo htmlspecialchars($user['full_name']); ?></h2>
                <p><?php echo htmlspecialchars($user['email']); ?></p>
            </div>

            <div class="profile-details">
                <div class="profile-row">
                    <span class="profile-label">Matric Number</span>
                    <span class="profile-value"><?php echo htmlspecialchars($user['matric_number']); ?></span>
                </div>
                <div class="profile-row">
                    <span class="profile-label">Department</span>
                    <span class="profile-value"><?php echo htmlspecialchars($user['department']); ?></span>
                </div>
                <div class="profile-row">
                    <span class="profile-label">Level</span>
                    <span class="profile-value"><?php echo htmlspecialchars($user['level']); ?> Level</span>
                </div>
                <div class="profile-row">
                    <span class="profile-label">Member Since</span>
                    <span class="profile-value"><?php echo date('F j, Y', strtotime($user['created_at'])); ?></span>
                </div>
                <div class="profile-row">
                    <span class="profile-label">Last Login</span>
                    <span class="profile-value"><?php echo $user['last_login'] ? date('F j, Y g:i A', strtotime($user['last_login'])) : 'Never'; ?></span>
                </div>
            </div>
        </div>

        <?php if (!empty($downloads)): ?>
        <div class="profile-card" style="margin-top: 2rem;">
            <h3 style="margin-bottom: 1rem; color: var(--primary);">Recent Downloads</h3>
            <div class="profile-details">
                <?php foreach ($downloads as $dl): ?>
                <div class="profile-row">
                    <span class="profile-label"><?php echo htmlspecialchars($dl['course_code']); ?></span>
                    <span class="profile-value"><?php echo htmlspecialchars($dl['pdf_filename']); ?> 
                        <small style="color: var(--text-light);">(<?php echo date('M j, Y', strtotime($dl['downloaded_at'])); ?>)</small>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p> UniPastQ — Department of Computer Science, Faculty of Computing</p>
    </footer>

    <script>
        function toggleTheme() {
            const html = document.documentElement;
            const current = html.getAttribute('data-theme');
            const next = current === 'light' ? 'dark' : 'light';
            html.setAttribute('data-theme', next);
            localStorage.setItem('theme', next);
        }
        const saved = localStorage.getItem('theme');
        if (saved) document.documentElement.setAttribute('data-theme', saved);
    </script>

</body>
</html>
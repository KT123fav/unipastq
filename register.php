<?php
/**
 * @var PDO $db
 */
require_once 'config/database.php';
require_once 'config/auth.php';


// Redirect if already logged in
if (isLoggedIn()) {
    header('Location: index.php');
    exit;
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $matric = trim($_POST['matric_number'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';
    $level = $_POST['level'] ?? '300';

    // Validation
    if (empty($fullName) || empty($email) || empty($matric) || empty($password)) {
        $error = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } elseif (strlen($password) < 6) {
        $error = 'Password must be at least 6 characters.';
    } elseif ($password !== $confirmPassword) {
        $error = 'Passwords do not match.';
    } else {
        try {
            $db = getDB();

            // Check if email or matric exists
            $stmt = $db->prepare("SELECT id FROM users WHERE email = ? OR matric_number = ?");
            $stmt->execute([$email, $matric]);

            if ($stmt->fetch()) {
                $error = 'Email or Matric Number already registered.';
            } else {
                // Hash password and insert
                $hash = password_hash($password, PASSWORD_BCRYPT);
                $stmt = $db->prepare("INSERT INTO users (full_name, email, matric_number, password_hash, level) VALUES (?, ?, ?, ?, ?)");

                if ($stmt->execute([$fullName, $email, $matric, $hash, $level])) {
                    $success = 'Registration successful! You can now log in.';
                } else {
                    $error = 'Registration failed. Please try again.';
                }
            }
        } catch (PDOException $e) {
            $error = 'Database error: ' . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | UniPastQ</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="auth-page">

    <div class="auth-container">
        <div class="logo-center">
            <a href="index.php">📚 Uni<span>PastQ</span></a>
        </div>

        <div class="auth-card">
            <h2>Create Account</h2>
            <p class="subtitle">Join UniPastQ to access past questions</p>

            <?php if ($error): ?>
                <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
            <?php endif; ?>

            <form method="POST" action="" novalidate>
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" id="full_name" name="full_name" placeholder="John Doe" required
                           value="<?php echo htmlspecialchars($_POST['full_name'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="john@student.edu.ng" required
                           value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label for="matric_number">Matric Number</label>
                    <input type="text" id="matric_number" name="matric_number" placeholder="CSC/2022/001" required
                           value="<?php echo htmlspecialchars($_POST['matric_number'] ?? ''); ?>">
                </div>

                <div class="form-group">
                    <label for="level">Level</label>
                    <select id="level" name="level">
                        <option value="100" <?php echo ($_POST['level'] ?? '300') === '100' ? 'selected' : ''; ?>>100 Level</option>
                        <option value="200" <?php echo ($_POST['level'] ?? '300') === '200' ? 'selected' : ''; ?>>200 Level</option>
                        <option value="300" <?php echo ($_POST['level'] ?? '300') === '300' ? 'selected' : ''; ?>>300 Level</option>
                        <option value="400" <?php echo ($_POST['level'] ?? '300') === '400' ? 'selected' : ''; ?>>400 Level</option>
                        <option value="500" <?php echo ($_POST['level'] ?? '300') === '500' ? 'selected' : ''; ?>>500 Level</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Min. 6 characters" required minlength="6">
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Repeat password" required>
                </div>

                <button type="submit" class="auth-btn">Create Account</button>
            </form>

            <div class="auth-footer">
                Already have an account? <a href="login.php">Log in</a>
            </div>
        </div>
    </div>

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
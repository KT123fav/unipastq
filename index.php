<?php
/**
 * @var bool $isLoggedIn
 * @var string $userName
 */
require_once 'config/auth.php';
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniPastQ - Faculty of Computing</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">📚 Uni<span>PastQ</span></a>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#courses">Courses</a></li>
                <?php if (isLoggedIn()): ?>
                    <li><a href="profile.php">My Profile</a></li>
                    <li><a href="logout.php" class="logout-link">Logout (<?php echo htmlspecialchars($_SESSION['user_name'] ?? 'User'); ?>)</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Sign Up</a></li>
                <?php endif; ?>
            </ul>
            <button class="theme-toggle" onclick="toggleTheme()" title="Toggle dark mode">🌙</button>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <h1>Past Questions Archive</h1>
        <p class="subtitle">Faculty of Computing — Find exam questions by course code</p>
        <div class="search-box">
            <input type="text" placeholder="Search course code (e.g., CSC 301)..." id="searchInput">
            <button onclick="searchCourse()">Search</button>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="index.php">Home</a> / Faculty of Computing / Department of Computer Science
    </div>

    <!-- Department Header -->
    <div class="dept-header">
        <h2>Department of Computer Science</h2>
        <p>Browse past questions for all Computer Science courses</p>
    </div>

    <!-- Course Grid -->
    <div class="container" id="courses">
        <div class="course-grid">

            <!-- CSC 301 -->
            <a href="courses/csc301.php" class="course-card">
                <span class="course-code">CSC 301</span>
                <h3 class="course-title">Introduction to Java Programming Language</h3>
                <div class="course-meta">
                    <span>📄 4 sets</span>
                    <span>📅 2022-2024</span>
                </div>
                <div class="questions-preview">
                    <span class="year-tag">2024</span>
                    <span class="year-tag">2023</span>
                    <span class="year-tag">2022</span>
                </div>
            </a>

            <!-- CSC 303 -->
            <a href="courses/csc303.php" class="course-card">
                <span class="course-code">CSC 303</span>
                <h3 class="course-title">Database Management System</h3>
                <div class="course-meta">
                    <span>📄 5 sets</span>
                    <span>📅 2022-2024</span>
                </div>
                <div class="questions-preview">
                    <span class="year-tag">2024</span>
                    <span class="year-tag">2023</span>
                    <span class="year-tag">2022</span>
                </div>
            </a>

            <!-- CSC 307 -->
            <a href="courses/csc307.php" class="course-card">
                <span class="course-code">CSC 307</span>
                <h3 class="course-title">Operating System</h3>
                <div class="course-meta">
                    <span>📄 3 sets</span>
                    <span>📅 2022-2024</span>
                </div>
                <div class="questions-preview">
                    <span class="year-tag">2024</span>
                    <span class="year-tag">2023</span>
                    <span class="year-tag">2022</span>
                </div>
            </a>

            <!-- CSC 309 -->
            <a href="courses/csc309.php" class="course-card">
                <span class="course-code">CSC 309</span>
                <h3 class="course-title">Data Structure and Algorithm</h3>
                <div class="course-meta">
                    <span>📄 4 sets</span>
                    <span>📅 2022-2024</span>
                </div>
                <div class="questions-preview">
                    <span class="year-tag">2024</span>
                    <span class="year-tag">2023</span>
                    <span class="year-tag">2022</span>
                </div>
            </a>

            <!-- CSC 311 -->
            <a href="courses/csc311.php" class="course-card">
                <span class="course-code">CSC 311</span>
                <h3 class="course-title">System Analysis and Design</h3>
                <div class="course-meta">
                    <span>📄 3 sets</span>
                    <span>📅 2022-2024</span>
                </div>
                <div class="questions-preview">
                    <span class="year-tag">2024</span>
                    <span class="year-tag">2023</span>
                    <span class="year-tag">2022</span>
                </div>
            </a>

            <!-- CSC 315 -->
            <a href="courses/csc315.php" class="course-card">
                <span class="course-code">CSC 315</span>
                <h3 class="course-title">Introduction to C Programming Language</h3>
                <div class="course-meta">
                    <span>📄 4 sets</span>
                    <span>📅 2022-2024</span>
                </div>
                <div class="questions-preview">
                    <span class="year-tag">2024</span>
                    <span class="year-tag">2023</span>
                    <span class="year-tag">2022</span>
                </div>
            </a>

        </div>

        <!-- How to Add New Courses -->
        <!-- <div class="info-box" id="contribute">
            <h3>➕ How to Add a New Course</h3>
            <p>To add a new course (e.g., <code>CSC 320</code>):</p>
            <p>1. Create a new file: <code>courses/csc320.php</code></p>
            <p>2. Copy the structure from any existing course page</p>
            <p>3. Add a new card above in <code>index.php</code> linking to it</p>
            <p>4. Update course code, title, and question sets</p>
        </div> -->
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p> UniPastQ — Department of Computer Science, Faculty of Computing</p>
        <p>Built for students, by students</p>
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

        function searchCourse() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const cards = document.querySelectorAll('.course-card');
            cards.forEach(card => {
                const code = card.querySelector('.course-code').textContent.toLowerCase();
                const title = card.querySelector('.course-title').textContent.toLowerCase();
                if (code.includes(input) || title.includes(input)) {
                    card.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    card.style.borderColor = 'var(--secondary)';
                    setTimeout(() => card.style.borderColor = '', 2000);
                }
            });
        }

        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') searchCourse();
        });
    </script>

</body>
</html>
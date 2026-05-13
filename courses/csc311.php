<?php
/**
 * @var PDO $db
 */
require_once '../config/database.php';
require_once '../config/auth.php';
requireAuth();
 // Must be logged in to view course pages
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSC 311 - System Analysis and Design | UniPastQ</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="../index.php" class="logo">📚 Uni<span>PastQ</span></a>
            <ul class="nav-links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../index.php#courses">Courses</a></li>
                <li><a href="../profile.php">My Profile</a></li>
                <li><a href="../logout.php" class="logout-link">Logout (<?php echo htmlspecialchars($_SESSION['user_name'] ?? 'User'); ?>)</a></li>
            </ul>
            <button class="theme-toggle" onclick="toggleTheme()">🌙</button>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="../index.php">Home</a> / 
        <a href="../index.php">Computer Science</a> / 
        CSC 311
    </div>

    <!-- Course Detail -->
    <div class="course-detail">

        <!-- Course Hero -->
        <div class="course-hero">
            <span class="course-code">CSC 311</span>
            <h1>System Analysis and Design</h1>
            <p class="course-desc">Study of system development methodologies, requirements gathering, modeling techniques (DFD, UML), feasibility analysis, and software design principles.</p>

            <div class="course-stats">
                <div class="stat">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Question Sets</div>
                </div>
                <div class="stat">
                    <div class="stat-number">2</div>
                    <div class="stat-label">Years</div>
                </div>
                <div class="stat">
                    <div class="stat-number">2024</div>
                    <div class="stat-label">Latest</div>
                </div>
            </div>
        </div>

        <!-- Question Sets -->

        <!-- Set 1 -->
        <div class="question-set">
            <div class="set-header">
                <div>
                    <div class="set-title">2024 Second Semester — Semester Examination</div>
                    <div class="set-meta">
                        <span class="badge badge-semester">Second Semester</span>
                        <span class="badge badge-exam">Semester Examination</span>
                        <span>⏱️ 2 hours</span>
                        <span>📝 5 questions</span>
                    </div>
                </div>
            </div>

            <div class="set-actions">
                <button class="btn btn-primary btn-sm" onclick="togglePreview(this)">👁️ Preview</button>
                <a href="../pdfs/csc311_2024_semester.pdf" class="btn btn-outline btn-sm" download="csc311_2024_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) Define System Analysis and System Design. Explain the relationship between them. (6 marks)<br>(b) Describe the System Development Life Cycle (SDLC) and its six phases. (9 marks)</li>
                        <li>(a) What is feasibility study? Explain the four types of feasibility (technical, economic, operational, and schedule). (10 marks)<br>(b) Why is feasibility study important before starting a software project? (5 marks)</li>
                        <li>A university wants to develop an online examination system. As a system analyst:<br>(a) Identify at least six stakeholders and their roles. (6 marks)<br>(b) List and describe five functional requirements. (5 marks)<br>(c) List and describe three non-functional requirements. (4 marks)</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Set 2 -->
        <div class="question-set">
            <div class="set-header">
                <div>
                    <div class="set-title">2024 Second Semester — C.A. Test</div>
                    <div class="set-meta">
                        <span class="badge badge-semester">Second Semester</span>
                        <span class="badge badge-ca">C.A. Test</span>
                        <span>⏱️ 45 minutes</span>
                        <span>📝 3 questions</span>
                    </div>
                </div>
            </div>

            <div class="set-actions">
                <button class="btn btn-primary btn-sm" onclick="togglePreview(this)">👁️ Preview</button>
                <a href="../pdfs/csc311_2024_ca.pdf" class="btn btn-outline btn-sm" download="csc311_2024_ca.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>Explain the following fact-finding techniques used in system analysis: (a) Interview (b) Questionnaire (c) Observation (d) Document Review. State when each is most appropriate. (12 marks)</li>
                        <li>Draw a Data Flow Diagram (DFD) for a library management system showing at least three processes, two external entities, and two data stores. Use appropriate leveling. (10 marks)</li>
                        <li>Differentiate between the following:<br>(a) Logical DFD and Physical DFD<br>(b) Context Diagram and Level 0 DFD<br>(c) Structured Analysis and Object-Oriented Analysis (8 marks)</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Set 3 -->
        <div class="question-set">
            <div class="set-header">
                <div>
                    <div class="set-title">2023 Second Semester — Semester Examination</div>
                    <div class="set-meta">
                        <span class="badge badge-semester">Second Semester</span>
                        <span class="badge badge-exam">Semester Examination</span>
                        <span>⏱️ 2 hours</span>
                        <span>📝 6 questions</span>
                    </div>
                </div>
            </div>

            <div class="set-actions">
                <button class="btn btn-primary btn-sm" onclick="togglePreview(this)">👁️ Preview</button>
                <a href="../pdfs/csc311_2023_semester.pdf" class="btn btn-outline btn-sm" download="csc311_2023_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) What is a Use Case Diagram? Explain its components with examples. (8 marks)<br>(b) Draw a Use Case Diagram for an ATM system showing at least five use cases and two actors. (7 marks)</li>
                        <li>(a) Explain the concept of modular design. What are the benefits of modularity? (7 marks)<br>(b) Describe coupling and cohesion. Why is low coupling and high cohesion desirable? (8 marks)</li>
                    </ol>
                </div>
            </div>
        </div>


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

        function togglePreview(btn) {
            const box = btn.closest('.question-set').querySelector('.preview-box');
            const isHidden = box.style.display === 'none';
            box.style.display = isHidden ? 'block' : 'none';
            btn.textContent = isHidden ? '🙈 Hide Preview' : '👁️ Preview';
        }
    </script>

</body>
</html>
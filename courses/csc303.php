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
    <title>CSC 303 - Database Management System | UniPastQ</title>
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
        CSC 303
    </div>

    <!-- Course Detail -->
    <div class="course-detail">

        <!-- Course Hero -->
        <div class="course-hero">
            <span class="course-code">CSC 303</span>
            <h1>Database Management System</h1>
            <p class="course-desc">Introduction to database concepts, relational model, SQL, normalization, ER modeling, transaction management, and database design principles.</p>

            <div class="course-stats">
                <div class="stat">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Question Sets</div>
                </div>
                <div class="stat">
                    <div class="stat-number">3</div>
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
                <a href="../pdfs/csc303_2024_semester.pdf" class="btn btn-outline btn-sm" download="csc303_2024_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) Define a Database Management System (DBMS) and explain its advantages over file-based systems. (8 marks)<br>(b) Explain the three-schema architecture of DBMS with a diagram. (7 marks)</li>
                        <li>(a) What is normalization? Explain 1NF, 2NF, and 3NF with examples. (12 marks)<br>(b) Why is normalization important in database design? (3 marks)</li>
                        <li>Consider the following relational schema:<br>Student(matricNo, name, deptCode, level)<br>Department(deptCode, deptName, faculty)<br>Course(courseCode, courseTitle, creditUnit)<br>Write SQL queries to:<br>(a) List all students in the Computer Science department. (5 marks)<br>(b) Find the total number of students in each department. (5 marks)<br>(c) Update the level of all 300-level students to 400. (5 marks)</li>
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
                <a href="../pdfs/csc303_2024_ca.pdf" class="btn btn-outline btn-sm" download="csc303_2024_ca.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>Differentiate between the following database models: (a) Hierarchical (b) Network (c) Relational. State when each is most appropriate. (9 marks)</li>
                        <li>Explain the ACID properties of a transaction with suitable examples. (10 marks)</li>
                        <li>Write SQL statements to create a table 'Employee' with appropriate constraints (Primary Key, NOT NULL, CHECK, FOREIGN KEY). (6 marks)</li>
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
                <a href="../pdfs/csc303_2023_semester.pdf" class="btn btn-outline btn-sm" download="csc303_2023_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) Define the following terms: entity, attribute, relationship, and cardinality. (8 marks)<br>(b) Draw an ER diagram for a university library system showing at least four entities and their relationships. (7 marks)</li>
                        <li>Explain the following SQL commands with examples: SELECT, INSERT, UPDATE, DELETE, DROP, and ALTER. (15 marks)</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Set 4 -->
        <div class="question-set">
            <div class="set-header">
                <div>
                    <div class="set-title">2023 Second Semester — C.A. Test</div>
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
                <a href="../pdfs/csc303_2023_ca.pdf" class="btn btn-outline btn-sm" download="csc303_2023_ca.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>What is a primary key? Differentiate between primary key and foreign key with examples. (8 marks)</li>
                        <li>Explain the concept of indexing in databases. What are the advantages and disadvantages? (10 marks)</li>
                        <li>Write an SQL query to find the second highest salary from an 'Employee' table. (7 marks)</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Set 5 -->
        <div class="question-set">
            <div class="set-header">
                <div>
                    <div class="set-title">2022 Second Semester — Semester Examination</div>
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
                <a href="../pdfs/csc303_2022_semester.pdf" class="btn btn-outline btn-sm" download="csc303_2022_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) What is data independence? Explain logical and physical data independence. (8 marks)<br>(b) Describe the functions of a Database Administrator (DBA). (7 marks)</li>
                        <li>Explain the different types of JOIN operations in SQL (INNER, LEFT, RIGHT, FULL) with examples. (15 marks)</li>
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
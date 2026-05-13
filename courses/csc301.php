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
    <title>CSC 301 - Introduction to Java Programming Language | UniPastQ</title>
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
        CSC 301
    </div>

    <!-- Course Detail -->
    <div class="course-detail">

        <!-- Course Hero -->
        <div class="course-hero">
            <span class="course-code">CSC 301</span>
            <h1>Introduction to Java Programming Language</h1>
            <p class="course-desc">Fundamentals of Java programming including OOP concepts, data types, control structures, classes, objects, inheritance, polymorphism, and exception handling.</p>

            <div class="course-stats">
                <div class="stat">
                    <div class="stat-number">4</div>
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
                <a href="../pdfs/csc301_2024_semester.pdf" class="btn btn-outline btn-sm" download="csc301_2024_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) Explain the concept of Object-Oriented Programming and state its four main principles. (8 marks)<br>(b) Differentiate between a class and an object in Java with appropriate examples. (7 marks)</li>
                        <li>(a) Write a Java program to calculate the factorial of a number using recursion. (10 marks)<br>(b) Explain the difference between 'while' and 'do-while' loops in Java. (5 marks)</li>
                        <li>(a) What is exception handling? Write a Java program that handles division by zero using try-catch blocks. (10 marks)<br>(b) List and explain five built-in exception classes in Java. (5 marks)</li>
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
                <a href="../pdfs/csc301_2024_ca.pdf" class="btn btn-outline btn-sm" download="csc301_2024_ca.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>Define the following terms in Java: (a) JVM (b) JDK (c) JRE (d) Bytecode (8 marks)</li>
                        <li>Write a Java program to find the largest of three numbers using if-else statements. (10 marks)</li>
                        <li>Explain method overloading with two suitable examples. (7 marks)</li>
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
                <a href="../pdfs/csc301_2023_semester.pdf" class="btn btn-outline btn-sm" download="csc301_2023_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) Describe the Java program execution process from source code to output. (7 marks)<br>(b) What are the differences between primitive and reference data types in Java? (8 marks)</li>
                        <li>Write a Java class 'Student' with private fields (name, matricNo, gpa), constructor, getters, setters, and a method to display student details. (15 marks)</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Set 4 -->
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
                <a href="../pdfs/csc301_2022_semester.pdf" class="btn btn-outline btn-sm" download="csc301_2022_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) Explain the concept of inheritance in Java and its types. (8 marks)<br>(b) Differentiate between method overloading and method overriding. (7 marks)</li>
                        <li>Write a Java program that reads 10 integers from the user, stores them in an array, and prints the sum and average. (15 marks)</li>
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
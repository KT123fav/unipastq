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
    <title>CSC 315 - Introduction to C Programming Language | UniPastQ</title>
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
        CSC 315
    </div>

    <!-- Course Detail -->
    <div class="course-detail">

        <!-- Course Hero -->
        <div class="course-hero">
            <span class="course-code">CSC 315</span>
            <h1>Introduction to C Programming Language</h1>
            <p class="course-desc">Fundamentals of C programming including variables, data types, control structures, functions, arrays, pointers, strings, structures, and file handling.</p>

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
                <a href="../pdfs/csc315_2024_semester.pdf" class="btn btn-outline btn-sm" download="csc315_2024_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) Explain the structure of a C program. Identify and describe the essential components. (7 marks)<br>(b) Differentiate between 'printf()' and 'scanf()' functions with examples. (5 marks)<br>(c) What are the rules for naming identifiers in C? (3 marks)</li>
                        <li>(a) Explain the following data types in C: int, float, char, double, and void. State their typical sizes. (8 marks)<br>(b) What is type casting? Write a program to demonstrate implicit and explicit type casting. (7 marks)</li>
                        <li>(a) Write a C program to check whether a number is prime or not. (8 marks)<br>(b) Explain the difference between 'break' and 'continue' statements with examples. (7 marks)</li>
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
                <a href="../pdfs/csc315_2024_ca.pdf" class="btn btn-outline btn-sm" download="csc315_2024_ca.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>Explain the following operators in C with examples: (a) Arithmetic (b) Relational (c) Logical (d) Bitwise (e) Assignment (10 marks)</li>
                        <li>Write a C program using a 'for' loop to print the following pattern:<br>*<br>**<br>***<br>****<br>***** (10 marks)</li>
                        <li>(a) What is a function? Explain the difference between built-in and user-defined functions. (5 marks)<br>(b) Write a C function to calculate the factorial of a number using iteration. (5 marks)</li>
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
                <a href="../pdfs/csc315_2023_semester.pdf" class="btn btn-outline btn-sm" download="csc315_2023_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) What is an array? Explain one-dimensional and two-dimensional arrays with examples. (8 marks)<br>(b) Write a C program to find the largest element in an array of 10 integers. (7 marks)</li>
                        <li>(a) Explain the concept of pointers in C. What is pointer arithmetic? (7 marks)<br>(b) Write a C program to swap two numbers using pointers. (5 marks)<br>(c) Differentiate between call by value and call by reference with examples. (5 marks)</li>
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
                <a href="../pdfs/csc315_2022_semester.pdf" class="btn btn-outline btn-sm" download="csc315_2022_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) What is a string in C? How are strings stored in memory? (5 marks)<br>(b) Write a C program to reverse a string without using library functions. (7 marks)<br>(c) Explain the following string functions: strcpy(), strcat(), strcmp(), strlen(). (6 marks)</li>
                        <li>(a) What is a structure in C? How does it differ from an array? (5 marks)<br>(b) Define a structure 'Student' with fields: name, matricNo, age, and gpa. Write a program to read and display details of 5 students. (10 marks)</li>
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
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
    <title>CSC 309 - Data Structure and Algorithm | UniPastQ</title>
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
        CSC 309
    </div>

    <!-- Course Detail -->
    <div class="course-detail">

        <!-- Course Hero -->
        <div class="course-hero">
            <span class="course-code">CSC 309</span>
            <h1>Data Structure and Algorithm</h1>
            <p class="course-desc">Study of fundamental data structures (arrays, linked lists, stacks, queues, trees, graphs) and algorithms (sorting, searching, graph traversal) with complexity analysis.</p>

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
                <a href="../pdfs/csc309_2024_semester.pdf" class="btn btn-outline btn-sm" download="csc309_2024_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) Define data structure and algorithm. Explain the relationship between them. (6 marks)<br>(b) Analyze the time complexity of the following code snippets using Big-O notation:<br>for(i=0; i<n; i++) {<br>    for(j=0; j<n; j++) {<br>        sum = sum + arr[i][j];<br>    }<br>} (5 marks)<br>(c) Differentiate between time complexity and space complexity. (4 marks)</li>
                        <li>(a) Explain the concept of a linked list. Differentiate between singly linked list, doubly linked list, and circular linked list. (8 marks)<br>(b) Write an algorithm to insert a node at the beginning of a singly linked list. (7 marks)</li>
                        <li>(a) What is a stack? Explain the PUSH and POP operations with diagrams. (7 marks)<br>(b) Convert the following infix expression to postfix using a stack: (A + B) * (C - D) / E. Show all steps. (8 marks)</li>
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
                <a href="../pdfs/csc309_2024_ca.pdf" class="btn btn-outline btn-sm" download="csc309_2024_ca.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>Explain the following sorting algorithms with examples: (a) Bubble Sort (b) Selection Sort (c) Insertion Sort. State their time complexities. (12 marks)</li>
                        <li>(a) What is a binary search tree (BST)? (3 marks)<br>(b) Construct a BST by inserting the following values in order: 50, 30, 70, 20, 40, 60, 80. (5 marks)<br>(c) Write the in-order, pre-order, and post-order traversals of the resulting tree. (5 marks)</li>
                        <li>Explain the concept of hashing. What are collision resolution techniques? Describe chaining and open addressing. (10 marks)</li>
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
                <a href="../pdfs/csc309_2023_semester.pdf" class="btn btn-outline btn-sm" download="csc309_2023_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) What is a queue? Explain the enqueue and dequeue operations. (6 marks)<br>(b) Differentiate between linear queue and circular queue. (5 marks)<br>(c) Write an algorithm to implement a queue using two stacks. (4 marks)</li>
                        <li>(a) Explain Dijkstra's shortest path algorithm with a suitable example. (10 marks)<br>(b) What is the time complexity of Dijkstra's algorithm? When does it fail? (5 marks)</li>
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
                <a href="../pdfs/csc309_2022_semester.pdf" class="btn btn-outline btn-sm" download="csc309_2022_semester.pdf">📥 Download PDF</a>
            </div>

            <div class="preview-box" style="display: none;">
                <h4>Question Preview</h4>
                <div class="question-text">
                    <ol>
                        <li>(a) Define recursion and iteration. Compare their advantages and disadvantages. (7 marks)<br>(b) Write a recursive function to calculate the Fibonacci sequence. Trace the execution for n=5. (8 marks)</li>
                        <li>Explain the following graph traversal algorithms with examples: (a) Breadth-First Search (BFS) (b) Depth-First Search (DFS). State their applications. (15 marks)</li>
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
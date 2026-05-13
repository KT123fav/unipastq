# UniPastQ - University Past Questions Archive

**Department of Computer Science, Faculty of Computing**

A complete PHP + MySQL web application for university past examination questions with user authentication, PDF downloads, and responsive design.

---

## Project Structure

```
unipastq/
├── config/
│   ├── database.php          # Database connection (PDO)
│   └── auth.php              # Authentication & session management
├── css/
│   └── styles.css            # All styles (responsive, dark mode, auth pages)
├── courses/
│   ├── csc301.php            # Introduction to Java (protected)
│   ├── csc303.php            # Database Management System (protected)
│   ├── csc307.php            # Operating System (protected)
│   ├── csc309.php            # Data Structure & Algorithm (protected)
│   ├── csc311.php            # System Analysis & Design (protected)
│   └── csc315.php            # Introduction to C Programming (protected)
├── pdfs/
│   └── [23 PDF files]        # Downloadable question papers
├── database.sql              # MySQL setup script
├── index.php                 # Homepage (public)
├── login.php                 # Login page
├── register.php              # Registration page
├── logout.php                # Logout handler
├── profile.php               # User profile (protected)
└── README.md                 # This file
```

---

## Setup Instructions (XAMPP)

### Step 1: Install XAMPP
1. Download and install XAMPP from https://www.apachefriends.org/
2. Start Apache and MySQL from the XAMPP Control Panel

### Step 2: Create Database
1. Open your browser and go to http://localhost/phpmyadmin
2. Click Import tab
3. Select the database.sql file from this project
4. Click Go to import

OR manually run the SQL in database.sql

### Step 3: Install Project
1. Extract this ZIP file
2. Copy the unipastq folder to C:\xampp\htdocs\ (Windows) or /opt/lampp/htdocs/ (Linux)
3. Ensure the folder structure matches the project structure above

### Step 4: Access the Site
- Homepage: http://localhost/unipastq/
- Register: http://localhost/unipastq/register.php
- Login: http://localhost/unipastq/login.php

---

## Features

| Feature | Description |
|---------|-------------|
| User Registration | Create account with name, email, matric number, level |
| Secure Login | Password hashing with bcrypt |
| Session Management | PHP sessions with secure logout |
| Protected Content | Course pages require login |
| PDF Downloads | Real downloadable PDF question papers |
| Question Preview | View questions before downloading |
| User Profile | View account details and download history |
| Dark Mode | Toggle between light and dark themes |
| Responsive Design | Works on mobile, tablet, desktop |
| Search | Find courses by code or name |

---

## Authentication Flow

```
Visitor -> Homepage (public)
    |
    v
Click Course -> Redirects to Login (if not logged in)
    |
    v
Register / Login -> Session created
    |
    v
Access Course Pages + Download PDFs
    |
    v
Logout -> Session destroyed
```

---

## How to Add a New Course

### 1. Create the Course Page

Copy any file from courses/ (e.g., csc301.php) -> rename to csc320.php

Update these sections:
- Course code: CSC 320
- Course title: Web Development
- Course description
- Question sets (copy/paste/modify blocks)

### 2. Add to Homepage

Open index.php, find <div class="course-grid">, add a new course card.

### 3. Generate PDFs (Optional)

Create PDF files in pdfs/ folder and link them in the course page.

---

## Technologies Used

| Technology | Purpose |
|------------|---------|
| PHP 7.4+ | Server-side scripting |
| MySQL | Database (via XAMPP) |
| PDO | Database abstraction |
| HTML5 | Structure |
| CSS3 | Styling (Grid, Flexbox, Variables) |
| JavaScript | Interactivity (dark mode, previews) |

---

## Configuration

Edit config/database.php if your XAMPP settings differ:

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');     // Change if different
define('DB_PASS', '');          // Change if you set a password
define('DB_NAME', 'unipastq');
```

---

## Built For

CSC 320 - Web Development
Department of Computer Science
Faculty of Computing

---

Built for students, by students.

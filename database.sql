-- ============================================
-- UniPastQ Database Setup
-- Run this in phpMyAdmin to create the database
-- ============================================

-- Create database
CREATE DATABASE IF NOT EXISTS unipastq 
    CHARACTER SET utf8mb4 
    COLLATE utf8mb4_unicode_ci;

USE unipastq;

-- ============================================
-- Users Table
-- ============================================
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    matric_number VARCHAR(20) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    department VARCHAR(50) DEFAULT 'Computer Science',
    level VARCHAR(10) DEFAULT '300',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login TIMESTAMP NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ============================================
-- Download Logs Table
-- ============================================
CREATE TABLE IF NOT EXISTS download_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    course_code VARCHAR(10) NOT NULL,
    pdf_filename VARCHAR(100) NOT NULL,
    downloaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ============================================
-- Insert Sample Test User (Optional)
-- Email: test@student.edu.ng
-- Password: test123
-- ============================================
-- Uncomment below to add a test user immediately
/*
INSERT INTO users (full_name, email, matric_number, password_hash, level) 
VALUES (
    'Test Student', 
    'test@student.edu.ng', 
    'CSC/2022/001', 
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
    '300'
);
*/

-- ============================================
-- Verification Queries
-- ============================================
-- Check tables were created
SHOW TABLES;

-- Check users table structure
DESCRIBE users;

-- Check download_logs table structure  
DESCRIBE download_logs;

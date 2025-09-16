<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'dgt_project');
define('DB_USER', 'root');
define('DB_PASS', '');

// Create database connection
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Initialize session
session_start();

// Check if user is logged in
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

// Redirect if not logged in
function require_login() {
    if (!is_logged_in()) {
        header("Location: ../index.php");
        exit();
    }
}

// Check user role
function has_role($role) {
    return isset($_SESSION['role']) && $_SESSION['role'] === $role;
}

// Redirect if user doesn't have required role
function require_role($role) {
    if (!has_role($role)) {
        header("Location: ../unauthorized.php");
        exit();
    }
}
?>
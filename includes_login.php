<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $role = trim($_POST['role']);
    
    // Demo authentication - in a real application, you would verify against database
    $valid_users = [
        'admin' => ['password' => 'password123', 'role' => 'admin'],
        'creator' => ['password' => 'password123', 'role' => 'creator'],
        'user' => ['password' => 'password123', 'role' => 'user']
    ];
    
    if (isset($valid_users[$username]) && 
        $valid_users[$username]['password'] === $password && 
        $valid_users[$username]['role'] === $role) {
        
        // Set session variables
        $_SESSION['user_id'] = $username;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        
        // Redirect to appropriate dashboard
        if ($role === 'admin') {
            header("Location: ../admin/dashboard.php");
        } else if ($role === 'creator') {
            header("Location: ../templates/creator.php");
        } else {
            header("Location: ../templates/user.php");
        }
        exit();
    } else {
        header("Location: ../index.php?error=invalid_credentials");
        exit();
    }
}
?>
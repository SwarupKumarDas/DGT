<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: admin/dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGT Project - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="login-page">
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h1>DGT Project</h1>
                <p>Document Generation Tool</p>
            </div>
            <form action="includes/login.php" method="POST" class="login-form">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="role" class="form-label">Login As</label>
                    <select id="role" name="role" class="form-control" required>
                        <option value="admin">Administrator</option>
                        <option value="creator">Template Creator</option>
                        <option value="user">Template User</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <div class="demo-credentials">
                <h3>Demo Credentials:</h3>
                <p>Username: <strong>admin</strong> | Password: <strong>password123</strong></p>
                <p>Username: <strong>creator</strong> | Password: <strong>password123</strong></p>
                <p>Username: <strong>user</strong> | Password: <strong>password123</strong></p>
            </div>
        </div>
    </div>
</body>
</html>
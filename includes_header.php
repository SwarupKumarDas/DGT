<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - DGT Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>DGT</h2>
                <p>Document Generation Tool</p>
            </div>
            <div class="sidebar-menu">
                <a href="../admin/dashboard.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
                    <i class="fas fa-home"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
                <a href="../admin/departments.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'departments.php' ? 'active' : ''; ?>">
                    <i class="fas fa-building"></i>
                    <span class="menu-text">Departments</span>
                </a>
                <a href="../admin/review_queue.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'review_queue.php' ? 'active' : ''; ?>">
                    <i class="fas fa-tasks"></i>
                    <span class="menu-text">Review Queue</span>
                </a>
                <a href="../admin/audit_logs.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'audit_logs.php' ? 'active' : ''; ?>">
                    <i class="fas fa-history"></i>
                    <span class="menu-text">Audit Logs</span>
                </a>
                <a href="../templates/creator.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'creator.php' ? 'active' : ''; ?>">
                    <i class="fas fa-edit"></i>
                    <span class="menu-text">Template Editor</span>
                </a>
                <a href="../templates/gallery.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : ''; ?>">
                    <i class="fas fa-file-alt"></i>
                    <span class="menu-text">Templates</span>
                </a>
                <a href="../exports/export.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'export.php' ? 'active' : ''; ?>">
                    <i class="fas fa-download"></i>
                    <span class="menu-text">Exports</span>
                </a>
                <a href="../includes/logout.php" class="menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="menu-text">Logout</span>
                </a>
            </div>
        </div>
<?php
require_once '../includes/config.php';
require_login();
require_role('admin');

$page_title = "Admin Dashboard";
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="header">
        <h1>Admin Dashboard</h1>
        <div class="user-info">
            <div class="user-avatar"><?php echo strtoupper(substr($_SESSION['username'], 0, 2)); ?></div>
            <div>
                <div><?php echo ucfirst($_SESSION['username']); ?></div>
                <small>Administrator</small>
            </div>
        </div>
    </div>

    <!-- Dashboard Cards -->
    <div class="dashboard-cards">
        <div class="card">
            <div class="card-icon bg-primary">
                <i class="fas fa-building"></i>
            </div>
            <h3>8</h3>
            <p>Departments</p>
        </div>
        <div class="card">
            <div class="card-icon bg-success">
                <i class="fas fa-file-alt"></i>
            </div>
            <h3>24</h3>
            <p>Approved Templates</p>
        </div>
        <div class="card">
            <div class="card-icon bg-warning">
                <i class="fas fa-tasks"></i>
            </div>
            <h3>5</h3>
            <p>Pending Reviews</p>
        </div>
        <div class="card">
            <div class="card-icon bg-danger">
                <i class="fas fa-users"></i>
            </div>
            <h3>42</h3>
            <p>Active Users</p>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="content-section">
        <div class="section-header">
            <h2>Recent Activities</h2>
            <button class="btn btn-light">View All</button>
        </div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Action</th>
                        <th>Object</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sarah Johnson</td>
                        <td>Created</td>
                        <td>Employment Contract Template</td>
                        <td>10 minutes ago</td>
                    </tr>
                    <tr>
                        <td>Michael Chen</td>
                        <td>Submitted</td>
                        <td>Offer Letter for Review</td>
                        <td>25 minutes ago</td>
                    </tr>
                    <tr>
                        <td>You</td>
                        <td>Approved</td>
                        <td>NDA Template</td>
                        <td>1 hour ago</td>
                    </tr>
                    <tr>
                        <td>Lisa Rodriguez</td>
                        <td>Downloaded</td>
                        <td>Signed Contract (PDF)</td>
                        <td>2 hours ago</td>
                    </tr>
                    <tr>
                        <td>Robert Smith</td>
                        <td>Updated</td>
                        <td>HR Department Permissions</td>
                        <td>3 hours ago</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pending Reviews -->
    <div class="content-section">
        <div class="section-header">
            <h2>Pending Reviews</h2>
            <button class="btn btn-light">View All</button>
        </div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Template Name</th>
                        <th>Department</th>
                        <th>Submitted By</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Offer Letter - Senior Developer</td>
                        <td>Engineering</td>
                        <td>Michael Chen</td>
                        <td>2023-06-15</td>
                        <td>
                            <button class="btn btn-success btn-sm">Approve</button>
                            <button class="btn btn-danger btn-sm">Reject</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Updated Privacy Policy</td>
                        <td>Legal</td>
                        <td>James Wilson</td>
                        <td>2023-06-14</td>
                        <td>
                            <button class="btn btn-success btn-sm">Approve</button>
                            <button class="btn btn-danger btn-sm">Reject</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Marketing Report Q2</td>
                        <td>Marketing</td>
                        <td>Emily Parker</td>
                        <td>2023-06-14</td>
                        <td>
                            <button class="btn btn-success btn-sm">Approve</button>
                            <button class="btn btn-danger btn-sm">Reject</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
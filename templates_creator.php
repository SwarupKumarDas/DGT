<?php
require_once '../includes/config.php';
require_login();
require_role('creator');

$page_title = "Template Creator Workspace";
include '../includes/header.php';
include '../includes/sidebar.php';
?>

<div class="main-content">
    <div class="header">
        <h1>Template Creator Workspace</h1>
        <div class="user-info">
            <div class="user-avatar"><?php echo strtoupper(substr($_SESSION['username'], 0, 2)); ?></div>
            <div>
                <div><?php echo ucfirst($_SESSION['username']); ?></div>
                <small>Template Creator</small>
            </div>
        </div>
    </div>

    <!-- Template Editor Preview -->
    <div class="content-section">
        <div class="section-header">
            <h2>Template Editor</h2>
            <div>
                <button class="btn btn-primary">Save Draft</button>
                <button class="btn btn-success">Submit for Review</button>
            </div>
        </div>
        
        <div class="tabs">
            <div class="tab active" onclick="switchTab('edit-tab')">Edit</div>
            <div class="tab" onclick="switchTab('preview-tab')">Preview</div>
            <div class="tab" onclick="switchTab('variables-tab')">Variables</div>
        </div>
        
        <div id="edit-tab" class="tab-content active">
            <div class="form-group">
                <label class="form-label">Template Title</label>
                <input type="text" class="form-control" value="Employment Contract">
            </div>
            
            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="2">Standard employment contract for full-time employees</textarea>
            </div>
            
            <div class="form-group">
                <label class="form-label">Department</label>
                <select class="form-control">
                    <option>Human Resources</option>
                    <option>Engineering</option>
                    <option>Marketing</option>
                    <option>Legal</option>
                </select>
            </div>
            
            <div class="form-group">
                <label class="form-label">Template Content</label>
                <div class="template-editor">
                    <h1>EMPLOYMENT AGREEMENT</h1>
                    <p>This Employment Agreement (the "Agreement") is made and effective as of <span class="variable-badge">{{start_date}}</span> between <span class="variable-badge">{{company_name}}</span> and <span class="variable-badge">{{employee_name}}</span>.</p>
                    <h2>Position</h2>
                    <p>The Employee shall serve as <span class="variable-badge">{{job_title}}</span>.</p>
                    <h2>Compensation</h2>
                    <p>The Employee will be paid a base salary of <span class="variable-badge">{{salary}}</span> per year, payable in accordance with the Company's standard payroll practices.</p>
                </div>
            </div>
        </div>
        
        <div id="preview-tab" class="tab-content">
            <div class="template-editor">
                <h1>EMPLOYMENT AGREEMENT</h1>
                <p>This Employment Agreement (the "Agreement") is made and effective as of [start_date] between [company_name] and [employee_name].</p>
                <h2>Position</h2>
                <p>The Employee shall serve as [job_title].</p>
                <h2>Compensation</h2>
                <p>The Employee will be paid a base salary of [salary] per year, payable in accordance with the Company's standard payroll practices.</p>
            </div>
        </div>
        
        <div id="variables-tab" class="tab-content">
            <div class="form-group">
                <label class="form-label">Available Variables</label>
                <div>
                    <span class="variable-badge">company_name</span>
                    <span class="variable-badge">employee_name</span>
                    <span class="variable-badge">job_title</span>
                    <span class="variable-badge">start_date</span>
                    <span class="variable-badge">salary</span>
                    <span class="variable-badge">department</span>
                    <span class="variable-badge">manager_name</span>
                    <span class="variable-badge">address</span>
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Add New Variable</label>
                <div class="form-inline">
                    <input type="text" class="form-control" placeholder="Variable name" style="width: 200px; display: inline-block;">
                    <button class="btn btn-primary">Add Variable</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
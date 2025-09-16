        <!-- Modal for Department Management -->
        <div class="modal" id="departmentModal">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Add New Department</h3>
                    <button class="modal-close" onclick="closeModal('departmentModal')">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Department Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Manager</label>
                        <select class="form-control">
                            <option>Select a manager</option>
                            <option>John Doe</option>
                            <option>Sarah Johnson</option>
                            <option>Michael Chen</option>
                        </select>
                    </div>
                    <button class="btn btn-success">Create Department</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/script.js"></script>
</body>
</html>
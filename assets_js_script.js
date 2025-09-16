// Tab switching functionality
function switchTab(tabId) {
    // Hide all tab contents
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Show selected tab content
    document.getElementById(tabId).classList.add('active');
    
    // Update tab active states
    document.querySelectorAll('.tab').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Activate the clicked tab
    event.currentTarget.classList.add('active');
}

// Modal control functions
function openModal(modalId) {
    document.getElementById(modalId).style.display = 'flex';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

// Close modal if clicked outside
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = 'none';
    }
}

// Toggle sidebar on mobile
function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
}

// Add variable to template
function addVariable(variable) {
    const templateEditor = document.querySelector('.template-editor');
    templateEditor.innerHTML += ` <span class="variable-badge" contenteditable="false">{{${variable}}}</span> `;
}

// Initialize the application
document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners to variable badges
    document.querySelectorAll('.variable-badge').forEach(badge => {
        badge.addEventListener('click', function() {
            const variable = this.textContent.replace('{{', '').replace('}}', '');
            addVariable(variable);
        });
    });
    
    // Handle form submissions
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // In a real application, you would handle form submission with AJAX or let it submit normally
            alert('Form submitted! In a real application, this would be processed.');
        });
    });
});
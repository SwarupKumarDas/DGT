# DGT
Document Generation Tool is to automate the creation of documents (e.g., offer letters, appointment letters, appraisal letters) in an organization. The tool will allow administrators to create templates with dynamic and static content, and users will generate personalized documents by filling in dynamic data fields


How to Run the Application
Set up a local server environment:

Install XAMPP, WAMP, or MAMP on your computer
Start Apache and MySQL services
Create the project directory:
Place all the files in a folder named dgt-project inside your web server's root directory (e.g., htdocs for XAMPP)

Set up the database (optional for this demo):
Create a MySQL database named dgt_project
Import the SQL file if you have one (not required for the demo)

<img width="1214" height="597" alt="image" src="https://github.com/user-attachments/assets/7b89175a-ce65-422e-8845-d1d671420e15" />


Access the application:
Open your web browser
Navigate to http://localhost/dgt-project/
<img width="1229" height="526" alt="image" src="https://github.com/user-attachments/assets/0fd9f3e8-f8f2-44bc-aa56-4e7b94d9f7e8" />

Login with demo credentials:
Admin: username admin, password password123, role Administrator
Creator: username creator, password password123, role Template Creator
User: username user, password password123, role Template User

Features Implemented
Authentication System: Login with different user roles
Role-Based Access Control: Different interfaces for Admin, Creator, and User
Admin Dashboard: Overview with statistics and recent activities
Template Creator Workspace: Rich text editor with variable management
Responsive Design: Works on desktop and mobile devices
Modal Windows: For department management and other operations
Tabbed Interface: For template editing, preview, and variables

This PHP application provides a complete foundation for the DGT Project as described in your BRD document. You can extend it further by adding database integration, file uploads, and more advanced template editing features.

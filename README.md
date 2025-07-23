# sports_management_system
The Sports Management System is a comprehensive web-based application developed using PHP, MySQL, JavaScript, HTML, and CSS. It is designed to manage the core operations of a sports academy or club by providing distinct interfaces for administrators and coaches. The system facilitates the management of players, teams, training sessions, and performance tracking through a secure and user-friendly platform.

Key Features
User Authentication – Secure login and registration for Admin and Coach roles

Admin Dashboard – Manage coaches, players, teams, and generate performance reports

Coach Dashboard – View assigned teams, schedule training, and upload performance records

Interactive Dashboard – Real-time statistics and visual reports using Chart.js

Modular Codebase – Reusable components (header, footer, database configuration)

Responsive Design – Built with Bootstrap for cross-device compatibility

Normalized Database – Efficient and relational structure using MySQL

User Roles
Admin
Create, update, and delete players, teams, and coaches

View and manage training schedules

Generate statistical reports and monitor performance

Coach
Access assigned teams

Schedule and manage training sessions

Upload and review player performance

Technology Stack
Frontend: HTML, CSS (Bootstrap), JavaScript

Backend: PHP

Database: MySQL

Visualization: Chart.js

Setup Instructions
Install XAMPP or WAMP and ensure Apache and MySQL services are running

Copy the sports-management folder into the htdocs directory

Open phpMyAdmin, create a database (e.g., sports_db)

Import the provided sports_db.sql file into the database

Open your browser and navigate to:

arduino
Copy
Edit
http://localhost/sports-management/
A PHP-based Sports Management System with login roles for Admin and Coach. Built with PHP, MySQL, Bootstrap, and Chart.js.

## Features
- Admin and Coach login
- Player statistics dashboard
- Session-based authentication
- Chart.js integration

## Installation
1. Import `sports_db.sql` in PHPMyAdmin.
2. Place the folder in `htdocs/`.
3. Run `http://localhost/sports-management`

## Users
- Admin: `admin / admin123`
- Coach: `coach / coach123`

## Technologies Used
- PHP, MySQL, HTML, CSS, JavaScript

## Setup
1. Import `sports_db.sql`
2. Configure DB in `includes/db.php`
3. Run `index.php`

# Faculty Corner

Faculty Corner is a PHP and MySQL-based web application designed to manage and maintain faculty academic records in a centralized system. The application provides dedicated modules for Research Papers, Faculty Participation in events, and IPR/Patent records, allowing faculty members to store, view, update, and manage their academic achievements efficiently.

## Features

### Research Paper Management

* Add research paper details
* Store publication information
* Upload research paper PDFs
* Manage author details
* Edit and delete records
* View all submitted research papers

### Faculty Participation Management

* Record faculty participation in conferences, workshops, seminars, and FDPs
* Upload certificates
* Store event details
* Edit and delete participation records
* View participation history

### IPR & Patent Management

* Add patent and intellectual property records
* Upload supporting documents
* Track patent details
* Edit and delete records
* View all submitted patents

### Dashboard

* Centralized dashboard for accessing all modules
* Simple faculty login using Faculty ID
* User-friendly interface

## Technology Stack

### Frontend

* HTML5
* CSS3
* JavaScript

### Backend

* PHP

### Database

* MySQL

## Project Structure

```text
Faculty-Corner/
│
├── index.php
├── dashboard.php
├── check_id.php
├── db_connect.php
│
├── css/
├── js/
├── images/
│
├── research_paper/
│   ├── rp_input.php
│   ├── rp_output.php
│   ├── rp_edit.php
│   ├── rp_delete.php
│   ├── rp_view.php
│   └── pdf/
│
├── faculty_participation/
│   ├── fp_input.php
│   ├── fp_output.php
│   ├── fp_edit.php
│   ├── fp_delete.php
│   ├── fp_view.php
│   └── certificate/
│
└── ipr_patent/
    ├── ipr_input.php
    ├── ipr_output.php
    ├── ipr_edit.php
    ├── ipr_delete.php
    ├── ipr_view.php
    └── pdf/
```

## Installation

### Prerequisites

* XAMPP / WAMP / LAMP
* PHP 7.x or later
* MySQL Server
* Web Browser

### Setup Steps

1. Clone or download the repository.

```bash
git clone https://github.com/your-username/Faculty-Corner.git
```

2. Move the project folder into the web server directory.

For XAMPP:

```text
htdocs/Faculty-Corner
```

3. Create a MySQL database.

```sql
CREATE DATABASE faculty_corner;
```

4. Import the database schema and tables.

5. Configure database connection in `db_connect.php`.

```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faculty_corner";
```

6. Start Apache and MySQL.

7. Open the application:

```text
http://localhost/Faculty-Corner
```

## Usage

1. Enter Faculty ID on the login page.
2. Access the Dashboard.
3. Choose one of the available modules:

   * Research Paper
   * Faculty Participation
   * IPR Patent
4. Add, edit, delete, or view records.
5. Upload supporting PDF documents and certificates where required.

## Database

The application uses MySQL tables to store:

* Faculty Information
* Research Paper Details
* Faculty Participation Records
* Patent/IPR Records
* Uploaded Documents Metadata

## Future Enhancements

* Authentication and role-based access control
* Faculty profile management
* Search and filtering functionality
* Data export to Excel/PDF
* Email notifications
* Responsive mobile interface
* Analytics and reporting dashboard

## License

This project is licensed under the MIT License.

## Author

Developed as a Faculty Academic Record Management System for managing:

* Research Publications
* Faculty Participation Activities
* IPR and Patent Records

---

Faculty Corner simplifies academic record management by providing a centralized digital platform for faculty achievements and documentation.

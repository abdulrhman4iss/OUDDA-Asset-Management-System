
# OUDDA | عُدّة
## Smart Asset & Equipment Management System

OUDDA is a smart web-based system designed to manage and track assets and equipment in universities, schools, laboratories, and organizations.

The system uses QR codes to simplify asset identification, tracking, and management throughout the asset lifecycle.

## Main Features

- **Asset Management:** Register, update, and track assets and equipment.
- **QR Code Tracking:** Identify assets quickly using QR codes.
- **Location Management:** Organize assets by buildings, rooms, and locations.
- **Borrowing & Returns:** Manage equipment borrowing and return operations.
- **Maintenance Management:** Record maintenance requests, faults, and repairs.
- **Asset Lifecycle:** Track asset history and status.
- **User Management:** Manage users and access permissions.
- **Reports & Statistics:** Generate reports about assets, borrowing, and maintenance.

## Technologies Used

- PHP
- Laravel
- MySQL
- HTML
- CSS
- JavaScript

## Project Purpose

The main goal of OUDDA is to improve asset management efficiency, reduce equipment loss, organize borrowing operations, and provide accurate information about assets and their maintenance history.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/abdulrhman4iss/OUDDA-Asset-Management-System.git
   ```

2. Navigate to the project directory:

   ```bash
   cd OUDDA-Asset-Management-System
   ```

3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Create your environment file:

   ```bash
   cp .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Configure your MySQL database in the `.env` file.

7. Run database migrations:

   ```bash
   php artisan migrate
   ```

8. Start the development server:

   ```bash
   php artisan serve
   ```

## License

This project is developed for academic and educational purposes.

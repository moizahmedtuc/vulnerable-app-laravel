# Laravel Vulnerable Application

This repository contains a Laravel application that is intentionally vulnerable to a mass assignment vulnerability. It includes a basic user registration flow that demonstrates the vulnerability. This application is intended for educational purposes to understand and learn about the security implications of mass assignment vulnerabilities.

## Prerequisites

Before you begin, ensure you have met the following requirements:
* For windows: You have XAMPP or WampServer installed, or you can use PHP's built-in server if you have PHP 7.4 or above installed.
* You have Composer installed, which is necessary for managing PHP dependencies.
* You have SQLite installed for the database (or you can configure another database system if you prefer).

## Setup PHP Environment on Windows

1. **Install XAMPP/WampServer**

   - Download and install XAMPP or WampServer.

2. **Start the PHP Environment**

   - Launch XAMPP/WampServer and start the Apache and MySQL services.
   - If using XAMPP, you can place the Laravel application in the `htdocs` directory.
   - If using WampServer, you can place it in the `www` directory.

   Alternatively, if you have PHP installed on your machine, you can use PHP's built-in server by navigating to your project directory and running:

```bash
php -S localhost:8000 -t public
```

This will start a development server at `http://localhost:8000`.

## Setup

To set up the Laravel Vulnerable Application, follow these steps:

1. **Clone the Repository**

```bash
git clone https://github.com/yourusername/yourrepository.git
```

2. **Install Dependencies**

Navigate to the project directory and install Composer dependencies:

```bash
cd yourrepository
```
```bash
composer install
```

3. **Environment Configuration**

Copy the `.env.example` file to a new file named `.env`:

```bash
cp .env.example .env
```

Then generate the application key:

```bash
php artisan key:generate
```

4. **Database Configuration**

For SQLite (simple setup):

Create a new SQLite database file:

```bash
touch database/database.sqlite
```

Update the `.env` file to use SQLite:

```bash
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/your/project/database/database.sqlite
```

For other databases (MySQL, PostgreSQL, etc.), update the `.env` file with the respective database connection details.

5. **Run Migrations**

Run the database migrations:

```bash
php artisan migrate
```

6. **Start the Server**

Start the Laravel development server:

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`.

## Usage

To use the Laravel Vulnerable Application, you can navigate to `http://localhost:8000/register` to access the registration form and create a new user.

## Warning

This application contains intentional Mass assignment vulnerability. Do not deploy this application in a production environment or any publicly accessible server. It should only be used in a controlled, secure environment for educational purposes.

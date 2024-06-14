How to install the news project on your machine?

Requirements
------------------
1. Composer: Ensure Composer is installed on the machine. Composer is a dependency manager for PHP.
2. PHP: Make sure PHP is installed (version 7.3 or higher is recommended).
    I have used PHP 8.2.12
3. Database: Ensure a database system (like MySQL, PostgreSQL, SQLite, etc.) is installed and configured.
4. Web Server: Install a web server like Apache or Nginx, or use PHP's built-in server for development purposes.

I have used XAMPP 3.3.0
XAMPP is a software package that includes several components, including a web server. XAMPP stands for Cross-Platform (X), Apache (A), MySQL (M), PHP (P), and Perl (P). It is a popular solution stack package that provides a complete development environment for PHP-based applications. Here's a breakdown of its components:

Apache: The web server component of XAMPP. Apache is one of the most widely used web servers and is responsible for serving web pages to users.
MySQL/MariaDB: The database component. MySQL is a relational database management system, while MariaDB is an open source and forever-free MySQL alternative that offers greater efficiency, enhanced database performance and is often included in newer versions of XAMPP.
PHP: The server-side scripting language.
Perl: Another scripting language included in XAMPP.
phpMyAdmin: A web-based tool for managing MySQL/MariaDB databases.

Laravel Project Installation using XAMPP
-------------------------------------------------

If you want to install a Laravel project using XAMPP, follow these steps:

Step 1: Install XAMPP
Download XAMPP from the official website: XAMPP Download.
Install XAMPP by running the installer and following the instructions.

Step 2: Set Up the Laravel Project
Clone the Laravel Project: Place your Laravel project in the htdocs directory of your XAMPP installation (usually C:\xampp\htdocs on Windows).
cd C:\xampp\htdocs
git clone https://github.com/username/repository.git
cd repository
OR
Place Your Laravel Project
Copy Laravel Project: Paste your Laravel project into the xampp/htdocs directory. For example, if your project is named news, it should be located at C:\xampp\htdocs\news.

Step 3: Start XAMPP
Open the XAMPP Control Panel.
Start the Apache and MySQL services.

Step 4: Install Composer
Download and Install Composer: You can download Composer from here(https://getcomposer.org/).
Verify Installation: Open a command prompt and type composer to verify that Composer is installed correctly.

Step 5: Install Laravel Dependencies
a) Open Command Prompt: Navigate to your project directory in htdocs. For example:
    cd C:\xampp\htdocs\news
b) Install Dependencies: Run Composer to install all dependencies.
    composer install

Step 6: Set Up Environment Configuration
 a) Copy .env.example to .env:
      cp .env.example .env

 b) Edit .env File: Open the .env file in a text editor and set up your environment variables, especially the database settings. For example:
     DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
   DB_PORT=3306
  DB_DATABASE=your_database_name
 DB_USERNAME=root
 DB_PASSWORD=

Step 7: Generate Application Key
Generate Key: Run the following Artisan command to generate the application key.
php artisan key:generate

Step 8: Set Up the Database
Create a Database: Use phpMyAdmin (accessible from the XAMPP Control Panel) to create a new database for your Laravel project.
Run Migrations: Apply the database migrations.
php artisan migrate

Step 9: Set Directory Permissions
Set Permissions: Ensure that the storage and bootstrap/cache directories are writable by the web server.
chmod -R 775 storage
chmod -R 775 bootstrap/cache

Step 10: Access the Laravel Project
Start Laravel Development Server: 
C:\xampp\htdocs\news>php artisan serve








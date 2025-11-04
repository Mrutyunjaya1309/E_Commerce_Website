# E-Commerce Website (Gallery)

A small PHP-based gallery/e-commerce project containing registration, login, and product image details. This repository contains a simple PHP application that uses MySQL (or MariaDB) for storing user data and product details.

## Contents

- `index.php` — main listing / gallery page
- `details.php` — show item details
- `about.php` — about page
- `login.php` / `logout.php` — authentication pages
- `register.php` — user registration
- `db_connect.php` — database connection (edit credentials here)
- `style.css` — styles
- `images/` — image assets

## Prerequisites

- PHP 7.4+ (or compatible)
- MySQL / MariaDB
- A web server (Apache, Nginx) or PHP built-in server for local testing

## Setup (local)

1. Copy the project to your web server document root or open a terminal in the project folder.

2. Configure database credentials in `db_connect.php`. Example variables to look for:

```php
// db_connect.php
// Update hostname, username, password and database name
$servername = "localhost";
$username = "your_db_user";
$password = "your_db_password";
$dbname = "your_database";
```

3. Create the database and tables required by the app. The repo does not include a SQL dump; create a `users` and `products` table (or adapt to your schema). Example (simple):

```sql
CREATE DATABASE gallery_db;
USE gallery_db;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255)
);

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  description TEXT,
  image VARCHAR(255),
  price DECIMAL(10,2)
);
```

4. Run the app locally using PHP built-in server (for development):

```powershell
cd C:\Users\mrutyunjaya\Desktop\gallery
php -S localhost:8000
```

Then open http://localhost:8000 in your browser.

## Notes

- Update `db_connect.php` with your DB credentials before first use.
- This project currently uses `master` as the primary branch. You can rename to `main` if desired.

## Contributing

Small improvements, bug fixes, and documentation updates are welcome. Open a pull request on the GitHub repository.

## License

No license specified. Add a LICENSE file if you want to make the project's license explicit.

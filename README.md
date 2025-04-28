# Product CRUD Application (Laravel)

## Requirements
- PHP >= 8.0
- Composer
- MySQL (or any database server)
- Laravel

## Setup Instructions

1. **Clone the project** (if you haven't yet):
   ```bash
   git clone your-repository-url
   cd your-project-folder

2. Install dependencies: Install all project dependencies using Composer:
composer install
3. Copy the .env file: Duplicate the example environment configuration file:
4. Set up the database:

- Create a new database called product (or any other name) in your MySQL or database server.

- Configure the .env file: Open the .env file and update the database settings:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=product  # Your database name
DB_USERNAME=root      # Your database username
DB_PASSWORD=          # Your database password (if applicable)
5. Run migrations and seed the database: This will create the necessary tables and insert initial product data:

6. php artisan migrate --seed
7. Start the development server: Once everything is set up, start the Laravel development server:
php artisan serve
This will start the server at http://localhost:8000.

Access the application:
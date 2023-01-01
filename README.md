# This laravel blog is created as a learning project
It does not include a complete authentication and authorization.

# Requirements
1. PHP 8 and above
2. Laravel 9
3. Composer
4. Xampp 

# Instructions
After it is cloned,
1. rename .env.example to .env
2. Run $ composer install
3. Run $ php artisan key:generate 
4. Open .env file and find DB_DATABASE="dbname" then mark dbname
5. Open xampp and run MySQL server.
6. In MySQL Server, create a database which is obtained by DB_DATABASE
7. Enter Repo folder and run $ php artisan migrate:freash --seed
8. At Last, start Laravel Blog by $ php artisan serve




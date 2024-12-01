# Simple Laravel 11 CRUD Application
Learn how to develop a simple Laravel 11 CRUD application, 

## Installation 
Make sure that you have setup the environment properly. You will need minimum PHP 8.2, MySQL/MariaDB, and composer.

- Download the project (or clone using GIT)
- Copy `.env.example` into `.env` and configure your database credentials
- Go to the project's root directory using terminal window/command prompt
- Run `composer install`
- Set the application key by running `php artisan key:generate --ansi`
- Run migrations `php artisan migrate`
- Run Seeder Command `php artisan db:seed --class=ProductSeeder`
- Start local server by executing `php artisan serve`
- Visit here [http://127.0.0.1:8000/products](http://127.0.0.1:8000/products) to test the application


## Commands
### Install Laravel
```base
composer install
```

### Migrate
```base
php artisan migrate
```

### Seed Product Data
```base
php artisan db:seed --class=ProductSeeder
```

### Start Server
```base
php artisan serve
````
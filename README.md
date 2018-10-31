# Simple MVC

## Description

This repository is a simple PHP MVC structure for an Hackathon

It uses some cool vendors/libraries such as FastRouter (fast request php router), Twig and PHP_CodeSniffer soon.

## Steps

1. Clone the repos from Github.
2. Run `composer install`.
3. Create *app/db.php* from *app/db.php.dist* file and add your DB parameters. Don't delete the *.dist* file, it must be kept.
```php
define('APP_DB_HOST', 'your_db_host');
define('APP_DB_NAME', 'your_db_name');
define('APP_DB_USER', 'your_db_user_wich_is_not_root');
define('APP_DB_PWD', 'your_db_password');
```
4. Run the internal PHP webserver with `php -S localhost:8000 -t public/`. The option `-t` with `public` as parameter, mean your localhost will target the `/public` folder.
5. Go to `localhost:8000` with your favorite browser.

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

# Bonbondex

Application comparable à un pokédex, mais pour des bonbons

## Objectif pédagogique

Hackathon, réalisé à la Wild Code School d'Orléans, afin
de mettre en pratique les différentes notions vues pendant la formation :
* Architecture MVC
* Composer, POO, Twig
* Méthode Scrum / Agile

et découvrir l'utilisation des API

* Durée du projet : 30 heures

### Langages
* HTML 5
* CSS 3
* Bootstrap 4
* PHP 7

### Versioning
* Git

### Outils
* PhpStorm
 
### Contributeurs

* Rémy Ducry - [GamerPsy](https://github.com/GamerPsy)
* Younes Youssefi - [assoufiy](https://github.com/assoufiy)
* Julien Montigny - [Julomontiti](https://github.com/Julomontiti)
* Nicolas Francois - [NicoFrancois](https://github.com/NicoFrancois)
* Thomas Coumes - [ThomasCms](https://github.com/ThomasCms)

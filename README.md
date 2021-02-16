# About Laravel-Fighters

Laravel-Fighters is a simple application that let's you list your favourite Street Fighter characters.

## Requirements

This app was built with:

- [PHP v7](https://www.php.net/downloads.php#v7.4.15)
- [Composer v2](https://getcomposer.org/)
## Setup

As a standard [Laravel](https://laravel.com/), you'll need to:

- Install dependencies: `composer install`
- Configure database: Laravel supports many options, by default this project uses [MySQL](https://www.mysql.com/). For details on how to configure the database check [this tutorial](https://laravel.com/docs/8.x/database).
- Run database migrations: `php artisan migrate`
## Testing

This projects includes some basic unit test using [PHPUnit](https://phpunit.de/) and code linting provided by [phplint](https://github.com/overtrue/phplint).

The can be executed via `./vendor/bin/phpunit` and `./vendor/bin/phplint`.

## Running

To start the application run `php artisan serve` and visit `http://127.0.0.1:8000`
# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Paquete para uso de mas comandos de laravel en lumen
composer require flipbox/lumen-generator

Agregar la siguiente linea al archivo bootstrap/app.php

$app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);


## Comandos comunes de Lumen

## Install
composer create-project --prefer-dist laravel/lumen blog

## Launch App o create virtualhost in xampp
php -S localhost:8000 -t public

## Configuration
Set configurarion key as random string from 32 characters long in .env file php 

## Database Commands
## Modelos
php artisan make:model NombreDelModelo -m (para que cree la migraci??n correspondiente)

## Migraciones
php artisan migrate
php artisan migrate --force
php artisan migrate:refresh

Refresh the database and run all database seeds...
php artisan migrate:refresh --seed

Eliminar todas las tablas y luego realiza la migraci??n
php artisan migrate:fresh
 
php artisan migrate:fresh --seed

## Seeders
php artisan make:seeder NombreSeeder

## Factories
php artisan make:factory CategoryFactory

## Uso del FileSystem para almacenar imagenes

Instalamos las dependencias que no nos provee Lumen

composer require league/flysystem
composer require league/flysystem-aws-s3-v3   //almacenamiento en la nube

Crear nuestro archivo /config/filesystems.php // seguimos el ejemplo de laravel

Modificar el archivo /bootstrap/app.php. Lo primero es que en la secci??n de Register Container Bindings agregamos

$app->singleton('filesystem', function ($app) {
    return $app->loadComponent(
        'filesystems',
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        'filesystem'
    );
});

En el mismo archivo, buscamos Register Service Providers y agregamos

$app->configure('filesystems');
$app->register(Illuminate\Filesystem\FilesystemServiceProvider::class);

## Helpers
Muchos de los helpers de laravel no existen en Lumen por ejemplo public_path()
se pueden incluir creando un archivo helpers.php dentro de la carpeta App.

"autoload": {
   "files": [
      "app/helpers.php"
   ],
   ....
  }
},

Finalmente ejecutamos el comando
composer dump-autoload

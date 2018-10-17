# davidVueCommerce

Este repositorio es una experiencia de E-commerce desarrollado con Laravel 5.x y Vue.JS, internamente adopta controles y características nativas del framework Laravel y su alta acoplación con Vue.JS. Integra además el SDK en PHP de Paypal en su versión 2.x (beta)

## Paypal Setup

Es importantísimo crear o tener una cuenta en paypal para poder registrar un Proyecto en modo sandbox, además de
crear usuarios buyers y sellers para interactuar con las ventas de los productos el E-commerce

Los valores del proyecto (ClientID y Client Secret) deberán estar incluídos en el archivo en entornos de Laravel bajo los identificadores `PAYPAL_CLIENT_ID` y `PAYPAL_CLIENT_SECRET` respectivamente

## Paquetes usados

NodeJS

  - axios
  - laravel Mix
  - VueJS
  - VueX

PHP

  - laravel/framework
  - laravelcollective/html
  - paypal/rest-api-sdk-php

## Global Env

  - Renombra el archivo `.env.example` por `.env` y ingresa tus credenciales

## Uso

   - Clona o descarga el ZIP del proyecto
   - Teniendo en cuenta un entorno de desarroollo LAMP configurado, instala las dependencias PHP con composer `composer install`
   - Teniendo en cuenta tener instalado NodeJS en su equipo, instale la dependencias de Node con NPM `npm install`
   - Correr las migraciones y setups de la base de datos, `ver archivo .env` para luego `php artisan migrate`

## Creditos

 - [David E Lares S](https://twitter.com/@davidlares3)

## License

 - [MIT](https://opensource.org/licenses/MIT)

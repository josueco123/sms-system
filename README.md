<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Desarrollo LPDP SMS
Sistema que permita ingresar a los usuarios registrados para gestionar (registrar, actualizar y eliminar) y generar un archivo filtrado con los números de teléfono de los clientes que pueden recibir mensajes SMS. 

## Tecnologías

- Laravel 9.19 (php),

## Instalación

- Clonar el repositorio 
    ```
    https://github.com/josueco123/sms-system.git
    ```
- Configurar las credenciales  de la base de datos deben estar en un archivo .env. Este archivo debe crearse en la carpeta principal del proyecto ejemplo
    ```
    C:/..../sms-system/.env
    ```
    - ejemplo de los campos para este archivo:
        ```
        APP_NAME='juridico app'
        APP_ENV={YOUR ENVIROMENT(ej: local)}
        APP_KEY={YOUR APP KEY}
        APP_DEBUG={true/false}
        APP_URL=http://localhost
        APP_URL_FRONT={YOUR FRONT URL}

        LOG_CHANNEL=stack
        LOG_LEVEL={LEVEL OF DEBUG}

        DB_CONNECTION={TYPE OF DATABASE}
        DB_HOST={YOUR HOST}
        DB_PORT={PORT DEPPENDING ON TYPE OF DB}
        DB_DATABASE={NAME OF DATABASE}
        DB_USERNAME={DATABASE USERNAME}
        DB_PASSWORD={DATABASE PASSWORD}

        API_KEY_MAIL={YOUR API KEY MAIL}
        ```
- Despues se deben instalar las dependencias necesarias para el funconamiento con los siguiente comandos:
    ```
    composer install    
    ```
 - Una vez se conectado con la base de datos, se deben ejecutar las migraciones:
    ```
    php artisan migrate
    ```
- Al finalizar las migraciones del aplicativo, si desean poblar la base de datos con valores para la tabla de blacklist ejecutar los seeders con el siguiente comando:
    ```
    php artisan db:seed --class=BlacklistSeeder
    ```

## Ejecutar el aplicativo

```bash
# server for php
$ php artisan serve

#  development for scripts
$ npm run dev
```

## Contacto

- Author - Josue Hurtado
- LinkeedIn - [link](https://www.linkedin.com/in/josueco/)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

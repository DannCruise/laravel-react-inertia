# CRUD Laravel + React + Inertia    (LaraReactCars)

## CRUD con login en Laravel 9 y React

CRUD en una sola vista, se usa el sistema de autenticación Laravel Breeze. 

- Se utiliza <b>Laravel 9</b> y <b>React</b> con <b>Inertia.js</b>.

- No se utiliza bootstrap, en esta ocasión se usa <b>Tailwind</b> que ya viene con Laravel

- Se utilizan los componentes que ya trae la instalación.

- Se crean 2 componentes, uno para select y otro para botón de editar

- Se utiliza Factory para crear 10 registros iniciales en B.D.


Instalación:

1) Crear una base de datos mysql

2) Clonar o descargar el proyecto en el directorio de tu servidor web

3) Acceder mediante terminal a la carpeta del proyecto

4) Ejecutar:  <b>Composer install</b>

5) Crear el archivo .env con los comandos: <b> cp .env.example .env</b>

6) Generar la API key ejecutando: <b> php artisan key:generate </b>

7) En el archivo .env colocar el nombre de la base de datos

8) Para ejecutar las migraciones: <b>php artisan migrate --seed</b>

9) Ejecutar <b>npm install</b> para las dependencias de node.js

10 Ejecutar <b>php artisan serve</b> para visualizarlo en el navegador o puedes usar Laragon, xammp, etc.

## Tabla Cars
- id 
- make
- model
- color


## Video de explicación

Si quieres ver el video en donde se explica el ejercicio paso a paso  [te comparto el siguiente enlace](https://youtu.be/bxX15LL_zE4)
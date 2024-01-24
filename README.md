<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre Pizzeria-Brenda

Una página web para la Pizzería Brenda de Chipiona.

Su funcionalidad principal es proporcionar una página web para dar a conocer la Pizzería Brenda de Chipiona y poder hacer los pedidos online.

Objetivos: Realizar pedidos a domicilio, ofrecer los diferentes productos y promociones de la pizzería, y ofrecer la oportunidad de opinar y hacer sugerencias sobre los diferentes platos.

Casos de uso: Personalizar pizzas y diferentes platos (burgers, pasta y complementos) con los ingredientes deseados. Pagar los pedidos a través de la página. Recibir el pedido a domicilio a una hora establecida. Reservar mesa para un día y hora concretos. Presupuestos para reuniones, cumpleaños, etc… Ver información detallada sobre los componentes de cada plato y sus posibles alérgenos. Iniciar sesión y registrarse en la página para: Dar valoraciones, sugerencias, comentarios y quejas acerca de los diferentes productos de la carta, consultar pedidos anteriores o entregar su currículum.

Sus elementos de innovación son: Crear un personaje animado que actúe como asistente virtual, con el que el usuario podrá interactuar mediante una conversación de chat automatizada. Para cada página de los platos que hay en la carta, habrá una sección para las opiniones, valoraciones y comentarios de los clientes. Se dará la opción de traducir toda la página web al inglés con un sólo paso. Se utilizará el Framework de Laravel 10.

## Cómo desplegar la aplicación web


### 1. INSTALACIÓN DE PHP


    sudo add-apt-repository ppa:ondrej/php\
    sudo apt-get update\
    sudo apt install php8.1 php8.1-amqp php8.1-cgi php8.1-cli php8.1-common php8.1-curl php8.1-fpm php8.1-gd php8.1-igbinary php8.1-intl php8.1-mbstring php8.1-opcache php8.1-pgsql php8.1-readline php8.1-redis php8.1-sqlite3 php8.1-xml php8.1-zip\
    sudo update-alternatives --config php\
(Seleccionar la opción correspondiente a php8.1. De esta forma, se evita que se creen conflictos si ya hay instalada otra versión de PHP.)

    sudo nano /etc/php/8.1/cli/php.ini
(También se puede usar vim: sudo vim /etc/php/8.1/cli/php.ini)

	- Cambiar las siguientes líneas a estos valores:
		error_reporting = E_ALL
		display_errors = On
		display_startup_errors = On
		date.timezone = 'UTC' --> 974.1


### 2. INSTALACIÓN DE COMPOSER


- Descargar el instalador:
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

- Verificar el hash SHA-384 del instalador:
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

- Ejecutar el instalador:
php composer-setup.php

- Eliminar el instalador:
php -r "unlink('composer-setup.php');"

- Extender globalmente el ámbito de Composer al sistema de rutas:
sudo mv composer.phar /usr/local/bin/composer


### 3. INSTALACIÓN DE GITHUB CLI


type -p curl >/dev/null || (sudo apt update && sudo apt install curl -y)
curl -fsSL https://cli.github.com/packages/githubcli-archive-keyring.gpg | sudo dd of=/usr/share/keyrings/githubcli-archive-keyring.gpg \
&& sudo chmod go+r /usr/share/keyrings/githubcli-archive-keyring.gpg \
&& echo "deb [arch=$(dpkg --print-architecture) signed-by=/usr/share/keyrings/githubcli-archive-keyring.gpg] https://cli.github.com/packages stable main" | sudo tee /etc/apt/sources.list.d/github-cli.list > /dev/null \
&& sudo apt update \
&& sudo apt install gh -y


### 4. INSTALACIÓN DE POSTGRESQL


sudo apt-get update

sudo apt install postgresql


### 5. INSTALAR APLICACIÓN Y PREPARAR LA BASE DE DATOS


Hacer un fork al repositorio de la aplicación en https://github.com/marcolorenzo17/Pizzeria-Brenda-9-23

Clonar ese fork con: git clone [ url_fork_del_repositorio ]

composer dump-autoload

composer install

npm install

npm run dev

sudo cp .env.example .env

Editar las siguientes líneas del archivo .env:

	DB_CONNECTION=pgsql
	DB_HOST=127.0.0.1
	DB_PORT=5432
	DB_DATABASE=laravel
	DB_USERNAME=laravel
	DB_PASSWORD=laravel

sudo -u postgresql psql

\c template1

CREATE EXTENSION pgcrypto;

\q

sudo -u postgres createdb laravel

sudo -u postgres createuser -P laravel

php artisan key:generate

php artisan migrate
(SI OCURRE ALGÚN ERROR AL MIGRAR: php artisan migrate:fresh)

php artisan db:seed
(SI NO SE HA HECHO SEED DE Database\Seeders\RoleSeeder: php artisan db:seed --class=RoleSeeder)

php artisan storage:link

Crear una cuenta en Stripe

Crear una cuenta en Cloudinary

Poner datos de la cuenta de Stripe en el .env

Poner datos de la cuenta de Cloudinary en el .env

php artisan serve

Ir a localhost:8000 en el navegador

Aplicación lista (en teoría)


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

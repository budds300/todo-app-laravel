<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker). 

Clone the repository

```console
    git clone https://github.com/lawrence615/todo-app.git
```

Switch to the repo folder

```console
    cd todo-app
```

Install all the dependencies using composer

```console
    composer install
```

Copy the example env file and make the required configuration changes in the .env file

```console
    cp .env.example .env
```

Generate a new application key

```console
    php artisan key:generate
```

Run the database migrations (**Set the database connection in .env before migrating**)

    
```console
    php artisan migrate
```

Start the local development server

```console
    php artisan serve
```

You can now access the server at http://localhost:8000

**TL;DR command list**

```console
    git clone https://github.com/lawrence615/todo-app.git
    cd todo-app
    composer install
    cp .env.example .env
    php artisan key:generate
```
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

```console
    php artisan migrate
    php artisan serve
```



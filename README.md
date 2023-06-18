# Bibliotheca

A simple CRUD Web Application for storing books data using [Laravel 10](https://laravel.com/docs/10.x).

## Requirements

1. Install php 8.1 - 8.2
2. Install composer
3. Install Node and NPM

## How to run

Clone the repository

    git clone https://github.com/remunata/bibliotheca.git

Switch to the repo folder

    cd bibliotheca

Install the dependencies using composer

    composer install

Install the frontend dependencies using npm

    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations

    php artisan migrate

Build Vite

    npm run build

Link storage folder to public folder

    php artisan storage:link

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

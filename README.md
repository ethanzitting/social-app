# Laravel Boilerplate
[![Laravel Forge Site Deployment Status](https://img.shields.io/endpoint?url=https%3A%2F%2Fforge.laravel.com%2Fsite-badges%2F8668f2a1-6574-4533-8f64-84216286e1fb&style=flat)](https://social.ethanzitting.com)
![Build Status](https://app.chipperci.com/projects/72c56888-4139-4b21-9c19-c9ff1738e3e4/status/main)

Requirements:
- Docker Desktop

Installation:
- Clone this repository with:
  - `git clone git@github.com:ethanzitting/social-app.git`
- Enter the root directory with:
  - `cd social-app`
- Install backend dependencies with the following:
    ```
    docker run --rm \
       -u "$(id -u):$(id -g)" \
       -v "$(pwd):/var/www/html" \
       -w /var/www/html \
       laravelsail/php82-composer:latest \
       composer install --ignore-platform-reqs
    ```
- Copy .env.example to .env with:
  - `cp .env.example .env`
- Add Pusher api keys to the newly created .env file.
- Start the docker containers with:
  - `sail up -d`
- Run any database migrations with:
  - `sail artisan migrate`
- Install the front end dependencies with:
  - `sail npm install`
- Start vite to generate the manifest and enable hot reloading with:
  - `sail npm run dev`
- Visit the app in a browser at: http://localhost:80

Stack:
- Laravel
- MySQL
- Blade
- AlpineJS
- TailwindCSS

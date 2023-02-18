# Laravel Boilerplate
[![Laravel Forge Site Deployment Status](https://img.shields.io/endpoint?url=https%3A%2F%2Fforge.laravel.com%2Fsite-badges%2F8668f2a1-6574-4533-8f64-84216286e1fb&style=flat)](https://testing.ethanzitting.com)
![Build Status](https://app.chipperci.com/projects/ae563710-4d44-4b44-857e-900a37f7ade5/status/main)

Requirements:
- Docker Desktop

Installation:
- Clone this repository.
- cd into it
- Install dependencies with the following:
```
docker run --rm \
   -u "$(id -u):$(id -g)" \
   -v "$(pwd):/var/www/html" \
   -w /var/www/html \
   laravelsail/php82-composer:latest \
   composer install --ignore-platform-reqs
```
- copy .env.example to .env
- run `sail up -d`
- `sail npm install`
- `sail npm run dev` to generate vite manifest
- run migrations with `sail artisan migrate`
- visit: http://localhost:80

Stack:
- Laravel
- MySQL
- Blade
- AlpineJS
- TailwindJS
- PicoCSS
- TailwindCSS

## BeeFlix

### Prerequisite

1. PHP development environment (>=8.1)
2. Composer
3. NodeJS (>=16)

### Setup

1. Clone this repository (`https://github.com/MichaelStan27/BeeFlix`)
2. Install all project dependencies (`npm install && composer install`)
3. Configure `.env` file
4. Sets APP_KEY value in `.env` file (`php artisan key:generate`)
5. Run database migration and seeder (`php artisan migrate --seed`)
6. Build project assets (`npm run dev`)
7. Preview project (`php artisan serve`)

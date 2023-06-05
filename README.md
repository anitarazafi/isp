# ISP Web application with laravel
### Requirements:
- php 8.1
- laravel 10.0

## Clone repository:
```
git clone https://github.com/anitarazafi/isp
```

## Copy .env.example to your .env file

## Run composer install
```
composer install
```

## Generate API key:
```
php artisan key:generate
```

## Configure database:
- Database name: **isp**

## Migrate:
```
php artisan migrate
```

## Seed database with role ids:
```
php artisan db:seed --class=RoleSeeder
```
## Start the application:
```
php artisan serve
```

## Configure mail server
- Default: SMTP

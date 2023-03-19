# REBIKE Web Application
REBIKE is a bike service application where user can call a REBIKE Mechanic to repair their bike.

## Requirement
To run this project, you will need:
1. [NodeJS](https://nodejs.org/en/download/current/)
2. [Composer](https://getcomposer.org/download/)
3. [MySQL](https://www.phpmyadmin.net/downloads/)

## Configuration
Make sure to create a mySQL database with the name `rebike-webapp`. This database name can be found in `.env`

## Installation
Step 1 - Initiate Composer and NPM
```
composer install
npm install
```

Step 2 - Migrate Database
```
php artisan migrate:fresh --seed
```

Step 3 - Link Laravel Storage to Public
```
php artisan storage:link
```

Step 4 - Start Laravel
```
php artisan serve
```

## Customization
You should add additional styling inside of `resources/sass/app.scss`. If you created an additional .scss file inside of `resources/sass` directory, dont forget to import that file to `resources/sass/app.scss`:
```scss
@import 'custom';
```

After you add styling to resources/sass/app.scss, you should run `npm run sass` before starting the laravel.

## Credits
This website was made by
- Aradhana Indra Daniswara - 2401955132
- Irvan Wijaya - 2401960782
- Jasson Laurent - 2401961551
- Vincentius Marco Melandri - 2401959175




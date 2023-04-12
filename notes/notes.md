###  Employee APPLICATION
            Pa$$w0rd!  
## SETUP APPLICATION
        https://techvblogs.com/blog/how-to-install-bootstrap-5-in-laravel-9-with-vite
    - install the application via command
    https://github.com/laravel/ui
        . composer require laravel/ui
        . php artisan ui bootstrap --auth
        . npm install && npm run dev 
        . npm run build
        . npm install
    - Error 
        Uncaught ReferenceError: require is not defined at app.mmmmm.js
    - Solution: In bootstrap.j
            import loadash from 'lodash'
            window._ = loadash
    - Install the Lodash
        npm i lodash



### INSTALL VUE 3 IN  VITE
        https://techvblogs.com/blog/how-to-install-vue-3-in-laravel-9-with-vite
    - Install the vue js
        php artisan ui vue

###  INSTALL DASHBOARD INTO VITE
    - Create a Layout/main.blade.php
    - Attach some files to resources folder
         assests/admin/vendor,js,css
    - Install the npm
        npm install
### FIX IMAGES PATH AND WHERE TO STORE IT
    - We put our images in public folder
         public/assets/admin
    - {{ asset('') }}

## CREATE A EMPLOYEE MODEL AND MIGRATION
    - php artisan make:model Employee -m

## CREATE A COUNTRY MODEL AND MIGRATION
    - php artisan make:model Country  -m

## CREATE A STATE MODEL AND MIGRATION
    - php artisan make:model State  -m

## CREATE A CITY MODEL AND MIGRATION
    - php artisan make:model City  -m

## CREATE A DEPARTMENT MODEL AND MIGRATION
    - php artisan make:model City  -m

## MIGRATE
    php artisan migrate

## MODIFY USER REGISTRATION
    - Objective is modify the user registrationn migration 
        .username 
        .last_name 
        .first_name 

    - Objective is modify the Employee registrationn migration 
            last_name
            first_name
            middle_name
            birthdate
            date_hired
            address
            zip_code

            department_id
            country_id
            'state_id
            city_id
    - Objective is modify the Countries registrationn migration 
            name
            country_code
    - Objective is modify the States registrationn migration 
            name
            country_id
    - Objective is modify the Cities registrationn migration 
            name
            state_id
    - Objective is modify the Departments registrationn migration 
            name
    
    - Run migration fresh
            php artisan migrate:fresh --seed

    - Modify the User Form , add more field
        .  resources/views/auth/register.blade.php
    - Modify the Register Controller , add more field
        .  app/Http/Controllers/Auth/RegisterController.php
    - TEST APPLICATION NOT PASSED
            General error: 1364 Field 'username' doesn't have a default value
    - SOLUTION
            Add the Massigment in user model
    - Dispay the name on layaout
            resources/views/layouts/app.blade.php
             {{ Auth::user()->username }}

## ADD BOOTSTRAP ADMIN DASHBOARD
    - Objectives is to add the side bar menu and header .
    - Theme on https://startbootstrap.com/theme/sb-admin-2
        . open the sourcee code https://github.com/startbootstrap/startbootstrap-sb-admin-2
    - create a new layouts/main.blade.php and paste the codee
    - Add the fontawesome cdn
        https://cdnjs.com/libraries/font-awesome
    - Go to home page and extend to layouts/main instead of layouts/app
        @extends('layouts.app') -> @extends('layouts.main')

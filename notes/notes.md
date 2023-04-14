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

##  FIX LOGIN ATTEMPTS
    - Ojective is to implement the logout 
    - Open the app.blade.php and copy the logout funnctionality and paste into master.blade.php
    - Three ((3) failed attempt will lock the users for 5min
        . open app/Http/Controllers/Auth/LoginController.php
                    protected $maxAttempts = 3;
                    protected $decayMinutes = 5;
    
## CREATE  USER MANAGEMENT
     . CRUD for User
        php artisan make:controller Admin/UserController --resource --model=User
    . Add the route web users
    .Add the link to the master layout  to display users
    . Create a folder for views/admin/users
     . Change password
     . Search User by username and email
        .Role and Permissionn CRUD

## CREATE UPDATE AND DELETE USERS
    - Objectives is  create , update and delete the users in dashboard
    - Copy from the register blade and paste into create
    - Create a logic in sstore method 
    - Create a request 
        php artisan make:request Admin/UserStoreRequest
        php artisan make:request Admin/UserUpdateRequest
    - Use the logic into UserController store
    - Add the buttoon to edit
    - Logic tto delete 

## CHANGE USERS PASSWORD
    - Ojectives is to change the user password and implememntte the search
    - Add the form in index page to search 
    - Add the Request $request in index method of UserController and implement the search
    - Change the password , add inside the edit page
    - Make Controller  ChangePassword
        php artisan make:controller Admin/ChangePasswordController
    - Register web route 

## CREATE A COUNTRIES
    - Objectives is to create the countries
    - Create the Country Controller
            php artisan make:controller Admin/CountryController --resource --model=Country
    - Add the web index for countries
    - Add route name in master.blade.php
    - Add the UI for index,create, edit 
    - Add the all logic inside the controller
    - Make a request
        php artisan make:request Admin/CountryStoreRequest
    - Add the mass assigment to country
    - Add the search funnctionality in index page and index() in country controller

## EDIT AND DELETE COUNTRIES
    - Objective is to bee able to delete the country
    - CRUD DONE

## STATE CRUD
    - Objective is to create the State CRUD
    - Make a controller
        php artisan make:controller Admin/StateController --resource --model=State
    - Add route
    - Add to master blade route
    - Create a State CRUD   UI
    - Implemenet the logic into StateController
    - Add Mass Assigment into state
    - Add the Relationship
        1 : Many Relationship  
        Country has many states
        States belongs to Country
    - Create UI for country
    - Add the select UI and pass all the countries in the create() method
    - Create  request for StoreStateRequest
        php artisan make:request Admin/StateStoreRequest
        php artisan make:request Admin/StateUpdateRequest
    - Add the Edit form and logic 
    - Add the functionallity to delete
    - Addd the search functionality on index


## CITY CRUD
    - Objective is to create the City CRUD
    - Make a controller
        php artisan make:controller Admin/CityController --resource --model=State
    - Add route in web file
    - Add to master blade route
    - Create a CITY CRUD   UI
    - Implement the logic into CityController
    - Add Mass Assigment into City Model
    - Add the Relationship
        1 : Many Relationship  
        State has many states
        Cities belongs to State
    - Create UI for country
    - Add the select UI and pass all the countries in the create() method
    - Create  request for StoreCityRequest
        php artisan make:request Admin/CityStoreRequest
        php artisan make:request Admin/CityUpdateRequest
    - Add the Edit form and logic 
    - Add the functionallity to delete

## DEPARTMENT CRUD
    - Objective is to create the Department CRUD
    - Make a controller
        php artisan make:controller Admin/DepartmentController --resource --model=Department
    - Add route in web file
    - Add to master blade route
    - Create a DEPARTMENT CRUD   UI
    - Implement the logic into DepartmentController
    - Add Mass Assigment into Department Model
    - Create UI for country
    - Add the select UI and pass all the Department in the create() method
    - Create  request for StoreDepartmentRequest
        php artisan make:request Admin/DepartmentStoreRequest
        php artisan make:request Admin/DepartmentUpdateRequest
    - Add the Edit form and logic 
    - Add the functionallity to delete

## EMPLOYEE CRUD PART 1
    - Objective is to create employee management system with vue js.
    - CRUD with vue.js
    - Search Features
    - Displayy list of employees with search and filters
    - Create and update employee
    - START
    - Create an API for Employee Controller
        php artisan make:controller API/EmployeeController --resource --model=Employee

    - Register the file in weeb route
            Route::get('{any}' , function (){
                return view('employees.index');
            })->where('{any}','.*');
    - Create a folder views/Employees/index , copy from countries index.blade.php
    - Add the the component in the  views/Employees/index
    - open the master and add the route
    - Add the vue router
            npm install vue-router
    - import vue-router inside app.js

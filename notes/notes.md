###  Employee APPLICATION
            Pa$$w0rd!  
## SETUP APPLICATION
        https://dev.to/tanzimibthesam/how-to-install-vuevue-routertailwind-with-laravel-9vite-47ec
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
        https://dev.to/tanzimibthesam/how-to-install-vuevue-routertailwind-with-laravel-9vite-47ec
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
                . CRUD with vue.js
                . Search Features
                . Display list of employees with search and filters
                . Create and update employee
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
    - create a folder router/index.js and define the logic
        .DEFINE ALL COMPONENETS
    - Import the index.js in app.jss
    - Open the Components/Employees/Index
    - Open the  views/Employees/index.blade  and remove the example compoonent
        attach the employee-index componenents
    
    NB:   This components <employees-index></employees-index> is registered in app.js as GC
           
## EMPLOYEE CRUD PART 2 WITH VUE JS
        https://router.vuejs.org/guide/
    - The objectives here is to use the vue router , when youu click a create button 
        will take u to create.vue UI
        Example :  http://employee-application.test/employees/create
    - Inorder to be able to navigate to we should use 
            <router-view></router-view>
    - You can pass the above in the views/employees/index.blade.php
        Remove the <employees-index></employees-index> 
        Replace with <router-view></router-view>

            NB
                app.use(router)
                must before then
                app.mount('#app')
    - Now we should use the router-link inorder to navigate
        Remove <a href="#" class="btn btn-primary mb-2">Create</a>
        Replace <router-link :to="{ name: 'EmployeesCreate' }"></<router-link >
    - TEST IF CREATE WORKS - PASSED
    - Add the form into Create.vue , copy from state create
        . Add all the fields corespondence with database
        . for date we gonna use https://www.npmjs.com/package/vue3-datepicker
                npm i vue3-datepicker
        . import into the Create.vue components
                import Datepicker from '../src/datepicker/Datepicker.vue'

    - To create an api's for Country, State, Department, City
        Example:  php artisan make:controller API/CityController
    - Add the logic to  get all counttries in CREATE.VUE file using vue
    - TEST - PASSED

### EMPLOYEE CRUD DEPENDET DROPDOWN
    - Objectives is dipslay all the countries in Craate.vue UI in dropdown
    - Loop through the v-for in country to display all countries
    - Add form:{} as object and pass the fields corresponnding with database .
    - Add the v-model in country inputs
        e.g 
            v-model="form.country_id"
            @change="getStates()"
        . create the getStates() method in Create.vue
    - Add all logic into all controllers 
    - Add the methods in Create.vue file
    - Loop tthrough to each City, State, Departments and country
    - TEST PASSED

## EMPLOYEES STORE - CRUD
    - Objective is to be able to sstore employees information intoo databbase.
    - Add the v-model to all the fields inn Create.vue file.
        e.g  v-model="form.date_hired"
    - Add the submitt inn form
    - Add the api route for emplyeess 
    - create a request
        php artisan make:request API/EmploymentStoreRequest
    - Add mass assigment on employee Model
    - TEST - FAILED
        SQLSTATE[22007]: Invalid datetime format: 1292 Incorrect date value: '2023-04-06T23:00:00.000Z' for column 'birthdate' 
    - SOLUTION
            . install moments.js
            https://momentjs.com/
            .npm install moment --save
        . import moment from 'moment';

    - TESTED PASSED

## EMPLOYEES DISPLAY AND DELETE
    https://router.vuejs.org/guide/essentials/named-routes.html
    - Objective is to be able to display all the employees in index.vue 
    - Make a resouce for employee
            https://laravel.com/docs/10.x/eloquent-resources
            php artisan make:resource API/EmployeeResource
            .Add fields
    - Open the index() in API/EmployeeCoontroller and add logic
    - Open the Index.vue 
    - Add the relationship in Employee Model
    -  Loop through to display all employee
    - TEST PASSED
    - Add the functionality to edit the employeee
        . add the router link on anchor tag
            <a href="#" class="btn btn-success">Edit</a> TO
            <router-link :to="{name:EmployeesEdit, params: {id: employee.id} }" class="btn btn-success"></router-link>
        .Test to see if u can navigate 
            [Vue warn]: Property "EmployeesEdit" was accessed during render but is not defined on instance. 
            SOLUTION : name: 'EmployeesEdit'
        . add the buttton to delete the employee
        . add the logic to delete employee in index page
        .  Add the route file
        .  








    












    

<?php


use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web index for your application. These
| index are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class );
Route::resource('countries', CountryController::class );
Route::resource('states', StateController::class );
Route::resource('cities', CityController::class );
Route::resource('departments', DepartmentController::class );

Route::post('users/{user}/change-password', [ChangePasswordController::class, 'changePassword'])->name('users.change.password');

Route::get('{any}' , function (){
    return view('admin.employees.index');
})->where('any','.*');

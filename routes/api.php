<?php

use App\Http\Controllers\API\CountryController;
use App\Http\Controllers\API\StateController;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\CityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API index for your application. These
| index are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employees/countries',          [CountryController::class,      'countries']);
Route::get('/employees/{country}states',    [StateController::class,        'states']);
Route::get('/employees/departments',        [DepartmentController::class,   'departments']);
Route::get('/employees/{state}/cities',     [CityController::class,         'cities']);

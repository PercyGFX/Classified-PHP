<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\vehicleads;
use App\Http\Controllers\apicontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//index page

Route::get('/', [UserController::class, 'index']);


// SMS OTP login routes

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/login', [UserController::class, 'userlogin']);

Route::get('/logout', [UserController::class, 'logout'])->name('logout');


//vehicle ads routes

Route::get('/sellvehicle', [vehicleads::class, 'sellvehicle'])->name('sellvehicle');

Route::post('/sellvehicle', [vehicleads::class, 'savesellvehicle']);

Route::get('/viewvehicle/{id}', [vehicleads::class, 'viewvehicle']);


//vehicle ads api routes

Route::get('/api/v1/getallvehicles/', [apicontroller::class, 'getallvehicles']);
Route::post('/api/v1/postvehicle/', [apicontroller::class, 'postvehicle']);
Route::get('/api/v1/getCsrfToken/', [apicontroller::class, 'getCsrfToken']);







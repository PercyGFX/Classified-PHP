<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\vehicleads;


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

Route::get('/', function () {
    return view('index');
});


// SMS OTP login routes

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/login', [UserController::class, 'userlogin']);

Route::get('/logout', [UserController::class, 'logout'])->name('logout');


//vehicle ads routes

Route::get('/sellvehicle', [vehicleads::class, 'sellvehicle'])->name('sellvehicle');

Route::post('/sellvehicle', [vehicleads::class, 'savesellvehicle']);

Route::get('/viewvehicle/{id}', [vehicleads::class, 'viewvehicle']);




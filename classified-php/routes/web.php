<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



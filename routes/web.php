<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route("home");
});

Route::get('/home',[AuthController::class,"index"])->name("home");

Route::get('/showFormLogin',[AuthController::class,"showFormLogin"])->name("home.showFormLogin");
Route::post('/login',[AuthController::class,"login"])->name("home.login");

Route::get('/logout',[AuthController::class,"logout"])->name("home.logout");

Route::get('/register',[AuthController::class,"showFormRegister"])->name("home.showFormRegister");
Route::post('/register',[AuthController::class,"register"])->name("home.register");

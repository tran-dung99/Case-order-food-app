<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;
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
    return view('auth.login');
});
Route::middleware("auth")->group(function(){
    Route::prefix('/foods')->group(function(){
        Route::get('/',[FoodController::class,"index"])->name("foods.index");
        Route::get('/detail/{id}',[FoodController::class,"show"])->name("foods.detail");
        Route::get('/com',[FoodController::class,"getByCom"])->name("foods.getByCom");
        Route::get('/pho',[FoodController::class,"getByPho"])->name("foods.getByPho");
        Route::get('/douong',[FoodController::class,"getByDouong"])->name("foods.getByDouong");
    });
    Route::get('/logout',[AuthController::class,"Logout"])->name("logout");
});

Route::get('/showFormLogin',[AuthController::class,"showFormLogin"])->name("auth.login");
Route::post('/login',[AuthController::class,"login"])->name("login");


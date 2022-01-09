<?php

use App\Http\Controllers\FoodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/search',[FoodController::class,"search"])->name("food.search");

Route::prefix('/home')->group(function() {
    Route::get('/',[FoodController::class,"index"])->name("home");
    Route::get('/rice',[FoodController::class,"getByRice"])->name("home");
    Route::get('/noodle',[FoodController::class,"getByNoodle"])->name("home");
    Route::get('/drink',[FoodController::class,"getByDrink"])->name("home");
    Route::get('/all',[FoodController::class,"getAll"])->name("home");
    Route::get('/detail/{id}',[FoodController::class,"show"])->name("home");
});

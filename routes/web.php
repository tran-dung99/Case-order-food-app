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


Route::get('/admin',function(){
    return view("backend.layout.master");
})->name("admin");
Route::get('/home',[FoodController::class,"index"])->name("home");
Route::get('/showFormLogin',[AuthController::class,"showFormLogin"])->name("home.showFormLogin");
Route::post('/login',[AuthController::class,"login"])->name("home.login");

Route::get('/logout',[AuthController::class,"logout"])->name("home.logout");

Route::get('/register',[AuthController::class,"showFormRegister"])->name("home.showFormRegister");
Route::post('/register',[AuthController::class,"register"])->name("home.register");


Route::prefix('/admin/foods')->group(function(){
    Route::get('/',[\App\Http\Controllers\Admin\FoodController::class,"index"])->name("foods.index");
    Route::get('/delete/{id}',[\App\Http\Controllers\Admin\FoodController::class,"destroy"])->name("foods.delete");
    Route::get('/detail/{id}',[\App\Http\Controllers\Admin\FoodController::class,"show"])->name("foods.detail");
    Route::get('/showFormCreate',[\App\Http\Controllers\Admin\FoodController::class,"create"])->name("foods.showFormCreate");
    Route::post('/create',[\App\Http\Controllers\Admin\FoodController::class,"store"])->name("foods.create");
    Route::get('/showFormUpdate/{id}',[\App\Http\Controllers\Admin\FoodController::class,"edit"])->name("foods.showFormUpdate");
    Route::post('/update',[\App\Http\Controllers\Admin\FoodController::class,"update"])->name("foods.update");
});

Route::prefix('/restaurants')->group(function (){
    Route::get('/showFormCreate',[\App\Http\Controllers\Admin\RestaurantController::class,"create"])->name("restaurants.showFormCreate");
    Route::post('/create',[\App\Http\Controllers\Admin\RestaurantController::class,"store"])->name("restaurants.create");
});

Route::prefix('/categories')->group(function (){
    Route::get('/showFormCreate',[\App\Http\Controllers\admin\CategoryController::class,"create"])->name("categories.showFormCreate");
    Route::post('/create',[\App\Http\Controllers\admin\CategoryController::class,"store"])->name("categories.create");
});

Route::prefix("/categories")->group(function(){
    Route::get("/index",[\App\Http\Controllers\admin\CategoryController::class,"index"])->name("categories.index");
    Route::get("/store",[\App\Http\Controllers\admin\CategoryController::class,"store"])->name("categories.store");
    Route::get("/showFormUpdate/{id}",[\App\Http\Controllers\admin\CategoryController::class,"edit"])->name("categories.showFormUpdate");
    Route::post("/update",[\App\Http\Controllers\admin\CategoryController::class,"update"])->name("categories.update");
});



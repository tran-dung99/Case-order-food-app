<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\UserController;
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

Route::get('/',[FoodController::class,"index"])->name("home");
Route::get('/showFormLogin',[AuthController::class,"showFormLogin"])->name("home.showFormLogin");
Route::post('/login',[AuthController::class,"login"])->name("home.login");
Route::get('/logout',[AuthController::class,"logout"])->name("home.logout");
Route::get('/register',[AuthController::class,"showFormRegister"])->name("home.showFormRegister");
Route::post('/register',[AuthController::class,"register"])->name("home.register");



Route::get('/master',[AdminController::class,"index"])->name("master");

Route::get('/showFormLoginAdmin',[AdminController::class,"showFormLoginAdmin"])->name("admin.showFormLogin");
Route::post('/loginAdmin',[AdminController::class,"loginAdmin"])->name("admin.login");
Route::get('/logoutAdmin',[AdminController::class,"logoutAdmin"])->name("admin.logout");
Route::get('/registerAdmin',[AdminController::class,"showFormRegisterAdmin"])->name("admin.showFormRegister");
Route::post('/registerAdmin',[AdminController::class,"registerAdmin"])->name("admin.register");

Route::prefix('users')->group(function (){
    Route::get('/',[UserController::class,"index"])->name("users.list");
    Route::get('/{id}/detail',[UserController::class,"show"])->name("users.show");
    Route::get('/{id}/update',[UserController::class,"edit"])->name("users.edit");
    Route::post('/{id}/update',[UserController::class,"update"])->name("users.update");
    Route::get('/create',[UserController::class,"create"])->name("users.create");
    Route::post('/create',[UserController::class,"store"])->name("users.store");
});


Route::get('/admin',function (){
    return view('backend.user.list');
})->name("admin.web");



//Giỏ hàng
Route::prefix('/foods')->group(function(){
    Route::get('/{id}/foodmark',[FoodController::class,'addToFavorite'])->name('foods.addToFavorite');
    Route::get('/favorite',[FoodController::class,'showFavoriteList'])->name('foods.showFavoriteList');
    Route::get('/{id}/deleteFavorite',[FoodController::class,"deleteFavorite"])->name("deleteFavorite");
    Route::get('/{id}/deleteFavorite2',[FoodController::class,"deleteFavorite2"])->name("deleteFavorite2");

});


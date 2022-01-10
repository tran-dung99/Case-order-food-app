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


//Trang web customer
Route::get('/home', [FoodController::class, "index"])->name("home");

Route::get('/', [FoodController::class, "index"])->name("home");
Route::get('/showFormLogin', [AuthController::class, "showFormLogin"])->name("home.showFormLogin");
Route::post('/login', [AuthController::class, "login"])->name("home.login");
Route::get('/logout', [AuthController::class, "logout"])->name("home.logout");
Route::get('/register', [AuthController::class, "showFormRegister"])->name("home.showFormRegister");
Route::post('/register', [AuthController::class, "register"])->name("home.register");


Route::prefix('/admin/foods')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\FoodController::class, "index"])->name("foods.index");
    Route::get('/delete/{id}', [\App\Http\Controllers\Admin\FoodController::class, "destroy"])->name("foods.delete");
    Route::get('/detail/{id}', [\App\Http\Controllers\Admin\FoodController::class, "show"])->name("foods.detail");
    Route::get('/showFormCreate', [\App\Http\Controllers\Admin\FoodController::class, "create"])->name("foods.showFormCreate");
    Route::post('/create', [\App\Http\Controllers\Admin\FoodController::class, "store"])->name("foods.create");
    Route::get('/showFormUpdate/{id}', [\App\Http\Controllers\Admin\FoodController::class, "edit"])->name("foods.showFormUpdate");
    Route::post('/update', [\App\Http\Controllers\Admin\FoodController::class, "update"])->name("foods.update");
    Route::get('/list', [\App\Http\Controllers\Admin\FoodController::class, "listFoodForAdmin"])->name("foods.list");
});


Route::get('/admin/login', [AdminController::class, "showFormLoginAdmin"])->name("admin.showFormLogin");
Route::post('/admin/login', [AdminController::class, "loginAdmin"])->name("admin.login");
Route::get('/admin/logout', [AdminController::class, "logoutAdmin"])->name("admin.logout");
Route::get('/registerAdmin', [AdminController::class, "showFormRegisterAdmin"])->name("admin.showFormRegister");
Route::post('/registerAdmin', [AdminController::class, "registerAdmin"])->name("admin.register");


//Route::get('/master',[AdminController::class,"index"])->name("master");

Route::middleware("auth")->group(function () {
    Route::prefix("/admin")->group(function () {
        Route::prefix("/users")->group(function () {
            Route::get('/', [UserController::class, "index"])->name("users.list");
            Route::get('/{id}/detail', [UserController::class, "show"])->name("users.show");
            Route::get('/{id}/update', [UserController::class, "edit"])->name("users.edit");
            Route::post('/{id}/update', [UserController::class, "update"])->name("users.update");
        });
        Route::prefix("restaurants")->group(function () {
            Route::get("/", [\App\Http\Controllers\Admin\RestaurantController::class, "index"])->name("restaurants.index");
            Route::get("/showFormCreat", [\App\Http\Controllers\Admin\RestaurantController::class, "create"])->name("restaurants.showFormCreate");
            Route::post("/create", [\App\Http\Controllers\Admin\RestaurantController::class, "store"])->name("restaurants.create");
            Route::get("/update.form/{id}", [\App\Http\Controllers\Admin\RestaurantController::class, "edit"])->name("restaurants.showFormUpdate");
            Route::post("/update",[\App\Http\Controllers\Admin\RestaurantController::class,"update"])->name("restaurants.update");
            Route::get("/restaurant.list",[\App\Http\Controllers\Admin\RestaurantController::class,"listForAdmin"])->name("restaurants.list");
        });
        Route::prefix("/categories")->group(function () {
            Route::get("/list", [\App\Http\Controllers\admin\CategoryController::class, "index"])->name("categories.index");
            Route::get('/showFormCreate', [\App\Http\Controllers\admin\CategoryController::class, "create"])->name("categories.showFormCreate");
            Route::post('/create', [\App\Http\Controllers\admin\CategoryController::class, "store"])->name("categories.create");
            Route::get("/showFormUpdate/{id}", [\App\Http\Controllers\admin\CategoryController::class, "edit"])->name("categories.showFormUpdate");
            Route::post("/update", [\App\Http\Controllers\admin\CategoryController::class, "update"])->name("categories.update");
        });
    });
});


Route::prefix('users')->group(function (){
    Route::get('/',[UserController::class,"index"])->name("users.list");
    Route::get('/{id}/detail',[UserController::class,"show"])->name("users.show");
    Route::get('/{id}/update',[UserController::class,"edit"])->name("users.edit");
    Route::post('/{id}/update',[UserController::class,"update"])->name("users.update");
    Route::get('/create',[UserController::class,"create"])->name("users.create");
    Route::post('/create',[UserController::class,"store"])->name("users.store");
});


//Giỏ hàng
Route::prefix('/foods')->group(function(){
    Route::get('/{id}/foodmark',[FoodController::class,'addToFavorite'])->name('foods.addToFavorite');
    Route::get('/favorite',[FoodController::class,'showFavoriteList'])->name('foods.showFavoriteList');
    Route::get('/{id}/deleteFavorite',[FoodController::class,"deleteFavorite"])->name("deleteFavorite");
    Route::get('/{id}/deleteFavorite2',[FoodController::class,"deleteFavorite2"])->name("deleteFavorite2");

});




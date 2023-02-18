<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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



Route::get('/',[HomeController::class,'index']);
Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/user-create',[AuthController::class,'usercreate']);
Route::post('/user-login',[AuthController::class,'userlogin']);
Route::middleware(['authenticate'])->group(function () {
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/logout',[AdminController::class,'logout']);
});
Route::group(['prefix' => 'banner', 'middleware' => ['authenticate']], function(){
    Route::get('/view-banner',[AdminController::class,'banner_list'])->name('banner.viewbanner');
    Route::get('/add-banner',[AdminController::class,'add_banner'])->name('banner.addbanner');
    Route::post('/save-banner-data',[AdminController::class,'save_banner_data'])->name('save.banner');
    Route::get('/edit-banner/{id}',[AdminController::class,'edit_banner']);
    Route::post('/update-banner/{id}',[AdminController::class,'update_banner']);
    Route::get('/delete/{id}',[AdminController::class,'delete_banner']);
});
Route::group(['prefix' => 'location', 'middleware' => ['authenticate']], function(){
    Route::get('/view-location',[AdminController::class,'location_list'])->name('location.viewlocation');
    Route::get('/edit-location/{id}',[AdminController::class,'edit_location']);
    Route::post('/update-location/{id}',[AdminController::class,'update_location']);
});
Route::group(['prefix' => 'product', 'middleware' => ['authenticate']], function(){
    Route::get('/view-product',[AdminController::class,'product_list'])->name('product.viewproduct');
    Route::get('/add-product',[AdminController::class,'add_product'])->name('product.addproduct');
    Route::post('/save-product-data',[AdminController::class,'save_product_data'])->name('save.product');
    Route::get('/edit-product/{id}',[AdminController::class,'edit_product']);
    Route::post('/update-product/{id}',[AdminController::class,'update_product']);
    Route::get('/delete/{id}',[AdminController::class,'delete_product']);
});





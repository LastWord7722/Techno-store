<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Main\MainController;

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


// MAIN
Route::get('/', [MainController::class, 'index'])->name('main');

//ADMIN
Route::group(['prefix'=> 'admin', 'namespace' => 'admin',],function(){

    //Brand
    Route::group(['prefix' => 'brand', 'namespace'=>'brand'], function (){
        Route::get('/', [BrandController::class, 'index'])->name('admin.brand.index');
    });

    //CATEGORY
    Route::group(['prefix' => 'category', 'namespace'=> 'category'], function (){
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
    });

    //PRODUCT
    Route::group(['prefix' => 'product', 'namespace' => 'product'], function (){
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
    });

});
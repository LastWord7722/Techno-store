<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Main\MainController;
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


// MAIN
Route::get('/', [MainController::class, 'index'])->name('main');

//ADMIN
Route::group(['prefix'=> 'admin', 'namespace' => 'admin',],function(){

    //Brand
    Route::group(['prefix' => 'brand', 'namespace'=>'brand'], function (){

        Route::get('/', [BrandController::class, 'index'])->name('admin.brand.index');
        Route::get('/create', [BrandController::class, 'create'])->name('admin.brand.create');
        Route::POST('/', [BrandController::class, 'store'])->name('admin.brand.store');
        Route::get('/{brand}/show',[BrandController::class,'show'])->name('admin.brand.show');
        Route::get('/{brand}/edit',[BrandController::class,'edit'])->name('admin.brand.edit');
        Route::PATCH('/{brand}',[BrandController::class,'update'])->name('admin.brand.update');
        Route::delete('/{brand}',[BrandController::class,'destroy'])->name('admin.brand.destroy');
    });

    //CATEGORY
    Route::group(['prefix' => 'category', 'namespace'=> 'category'], function (){

        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::POST('/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}/show',[CategoryController::class,'show'])->name('admin.category.show');
        Route::get('/{category}/edit',[CategoryController::class,'edit'])->name('admin.category.edit');
        Route::PATCH('/{category}',[CategoryController::class,'update'])->name('admin.category.update');
        Route::delete('/{category}',[CategoryController::class,'destroy'])->name('admin.category.destroy');
    });

    //PRODUCT
    Route::group(['prefix' => 'product', 'namespace' => 'product'], function (){

        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::POST('/', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/{product}/show',[ProductController::class,'show'])->name('admin.product.show');
        Route::get('/{product}/edit',[ProductController::class,'edit'])->name('admin.product.edit');
        Route::PATCH('/{product}',[ProductController::class,'update'])->name('admin.product.update');
        Route::delete('/{product}',[ProductController::class,'destroy'])->name('admin.product.destroy');
    });

});
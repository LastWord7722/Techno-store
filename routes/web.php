<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Main\BasketController;
use App\Http\Controllers\Main\CommentController;
use App\Http\Controllers\Main\FilterBrandController;
use App\Http\Controllers\Main\FilterCategoryController;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Main\PersonalController;
use App\Http\Controllers\PayPal\PayPalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

//PAYPAL
route::get('/createOrder/',[PayPalController::class,'createOrder'])->name('createOrder');

route::get('/basketProcessPayPal/',[PayPalController::class,'basketProcessPayPal'])->name('basketProcessPayPal');

route::get('/processPaypal/{product}',[PayPalController::class,'processPaypal'])->name('processPaypal');
route::get('/processSuccess',[PayPalController::class,'processSuccess'])->name('processSuccess');
route::get('/processCancel',[PayPalController::class,'processCancel'])->name('processCancel');

// MAIN
Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/{product}', [MainController::class, 'show'])->name('main.show');

//comment
Route::post('/{product}/store',[CommentController::class, 'store'])->name('comment.main.store');
Route::delete('/{comment}/destroy',[CommentController::class, 'destroy'])->name('comment.main.destroy');

//basket
Route::group(['prefix' => 'basket'],function(){
Route::get('/place',[BasketController::class, 'basket'])->name('basket.index');
Route::post('/add/{id}',[BasketController::class,'addCard'])->name('addCard');
Route::post('/remove/{id}',[BasketController::class,'removeCard'])->name('removeCard');
Route::post('/minus/{id}',[BasketController::class,'minusProduct'])->name('minusProduct');
});

//filter
//brand
Route::group(['prefix'=> 'brand/b', 'namespace' => 'main'],function() {
    Route::get('/', [FilterBrandController::class, 'index'])->name('main.index.brand');
    Route::get('/{brands}', [FilterBrandController::class, 'getProductBrand'])->name('main.show.brand');
});

//category
Route::group(['prefix'=> 'category/c', 'namespace' => 'main'],function() {
    Route::get('/', [FilterCategoryController::class, 'index'])->name('main.index.category');
    Route::get('/{categories}', [FilterCategoryController::class, 'getProductCategory'])->name('main.show.category');
});


//Personal
Route::group(['prefix' => 'personal/{user}', 'middleware' => 'auth'], function(){
    Route::get('/',[PersonalController::class, 'index'])->name('personal.index');
});

//ADMIN
Route::group(['prefix'=> 'admin', 'namespace' => 'admin', 'middleware' => 'admin'],function(){

    Route::get('/main', [AdminMainController::class, 'index'])->name('admin.index');
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






Route::get('/home/1', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

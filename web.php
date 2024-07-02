<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(ProductController::class)->group(function():void{
     Route::get('/products','list')->name('products-list');
     Route::get('/products/{product}','view')->name('product-view');
});
 
Route::controller(CategoryController::class)->group(function():void{
    Route::get('/categories','list')->name('categories-list');
    Route::get('/categories/{category}','view')->name('categories-view');
});
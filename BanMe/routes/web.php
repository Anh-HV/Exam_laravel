<?php

use App\Http\Controllers\ProductsController;
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

Route::prefix('/')->group(function(){
    Route::get('/',[ProductsController::class,'indexUser'])->name('list-user.product');
});

Route::prefix('product')->group(function(){
    Route::get('/',[ProductsController::class,'index'])->name('list.product');
    Route::get('store',[ProductsController::class,'store'])->name('store.product');
    Route::post('create',[ProductsController::class,'create'])->name('create.product');
    Route::get('delete/{product_id}',[ProductsController::class,'delete'])->name('delete.product');
    Route::get('search',[ProductsController::class,'search'])->name('search.product');


});

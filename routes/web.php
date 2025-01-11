<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FirebaseTestController;

Route::get('/', function () {
    return view('dashboard');
});


Route::controller(ProductController::class)->group(function () {
    Route::get('/add-product', 'add');
    Route::post('/store-product', 'store');
    Route::get('product', 'product')->name('product');
    Route::get('/edit-product', 'edit');
    Route::post('/edit-product/{id}', 'update')->name('update');

});

Route::get('/test-firebase', [FirebaseTestController::class, 'testConnection']);

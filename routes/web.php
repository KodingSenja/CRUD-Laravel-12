<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    // untuk menampilkan daftar product
Route::get('products', [ProductController::class, 'index'])
    ->name('products.index');

    // untuk menampilkan form tambah product
Route::get('products/create', [ProductController::class, 'create'])
    ->name('products.create');

    // untuk menyimpan data product baru
Route::post('products', [ProductController::class, 'store'])
    ->name('products.store');

    // untuk menampilkan form edit product  
Route::get('products/{id}/edit', [ProductController::class, 'edit'])
    ->name('products.edit');

    // untuk mengupdate data product
Route::put('products/{id}', [ProductController::class, 'update'])
    ->name('products.update');  

Route::delete('products/{id}', [ProductController::class, 'destroy'])
    ->name('products.destroy');
        

Route::get('helloproduct', function() {
    return view('hellow_product');
});
<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sales', function () {
    return view('sales');
});

  Route::get('/stock', function () {
    return view('stock');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/customers', function () {
    return view('customers');
});

Route::resource('products', ProductController::class);

Route::resource('categories', CategoryController::class);

<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login']);


Route::get('/forgot', function () {
    return view('auth.forgot');
});
Route::get('/reset_pass', function () {
    return view('auth.reset_pass');
});


Route::middleware('level:admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.home');
    });

    Route::get('/products', [ProductsController::class, 'list']);

   
});




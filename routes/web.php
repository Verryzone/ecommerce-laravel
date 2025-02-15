<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// Route::middleware('ceklgn')->group(function () {
    Route::get('/public', function () {
        return view('public.home');
    });

// });


Route::middleware('guest')->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    });
    Route::post('/register', [AuthController::class, 'register']);
    
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/forgot', function () {
        return view('auth.forgot');
    });
    Route::get('/reset_pass', function () {
        return view('auth.reset_pass');
    });
});


Route::middleware('level:admin')->group(function () {
    
    Route::prefix('management')->name('management.')->group(function () {
        Route::get('/dashboard', function () {
            return view('pages.home');
        })->name('dashboard');
        
        Route::prefix('products')->name('products.')->group(function () {
            Route::get('/', [ProductsController::class, 'list'])->name('list');
            Route::post('/add', [ProductsController::class, 'add'])->name('add');
            Route::delete('/delete', [ProductsController::class, 'delete'])->name('delete');
        });
    });



   
});




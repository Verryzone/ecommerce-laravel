<?php

use App\Http\Controllers\Api\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('products')->name('products.')->group(function () {
    Route::get('/{id}', [ProductsController::class, 'show'])->name('show');
    Route::put('/{id}', [ProductsController::class, 'update'])->name('update');
});
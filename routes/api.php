<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/v1'], function () {
    Route::post('order-checkout', [OrdersController::class, 'orderCheckout'])->name('orderCheckout');
    Route::get('products', [ProductsController::class, 'index'])->name('getProducts');
});

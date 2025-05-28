<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return "Please navigate to a specific route, e.g., /customer/CUST-001/John-Doe/123-Main-St";
});

Route::get('/customer/{customerId}/{name}/{address}', [OrderController::class, 'customer']);
Route::get('/item/{itemNo}/{name}/{price}', [OrderController::class, 'item']);
Route::get('/order/{customerId}/{name}/{orderNo}/{date}', [OrderController::class, 'order']);
Route::get('/orderDetails/{transNo}/{orderNo}/{itemId}/{name}/{price}/{qty}', [OrderController::class, 'orderDetails']);
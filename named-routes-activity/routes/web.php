<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

// Homepage Route
Route::get('/', function () {
    return view('home');
})->name('home');

// Route for the Customer view, named 'customer.show'
Route::get('/customer-page', [ViewController::class, 'showCustomer'])->name('customer.show');

// Route for the Item view, named 'item.show'
Route::get('/item-page', [ViewController::class, 'showItem'])->name('item.show');

// Route for the Order view, named 'order.show'
Route::get('/order-page', [ViewController::class, 'showOrder'])->name('order.show');

// Route for the Order Details view, named 'orderDetails.show'
Route::get('/order-details-page', [ViewController::class, 'showOrderDetails'])->name('orderDetails.show');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;



Route::get('/customer/{customerId}/{name}/{address}', [OrderController::class, 'showCustomer'])->name('customer.show.param');


Route::get('/item/{itemNo}/{name}/{price}', [OrderController::class, 'showItem'])->name('item.show.param');


Route::get('/order/{customerId}/{name}/{orderNo}/{date}', [OrderController::class, 'showOrder'])->name('order.show.param');


Route::get('/orderDetails/{transNo}/{orderNo}/{itemId}/{name}/{price}/{qty}', [OrderController::class, 'showOrderDetails'])->name('order.details.show.param');
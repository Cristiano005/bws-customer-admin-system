<?php

use App\Http\Controllers\Customer\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CustomerController::class, 'index']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::delete('/customer/delete/{customer:id}', [CustomerController::class, 'destroy']);
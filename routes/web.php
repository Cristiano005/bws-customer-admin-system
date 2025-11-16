<?php

use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/customers/create', [CustomerController::class, 'create']);
Route::get('/customers/{customer:id}/edit', [CustomerController::class, 'edit']);
Route::post('/customer/store', [CustomerController::class, 'store']);
Route::put('/customers/{customer:id}', [CustomerController::class, 'update']);
Route::delete('/customer/delete/{customer:id}', [CustomerController::class, 'destroy']);
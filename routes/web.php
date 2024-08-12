<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/total_order', [CustomerController::class, 'totalorder']);
Route::get('/spender', [CustomerController::class, 'topSpender']);

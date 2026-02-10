<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);

Route::get('/product/{product}', [ProductController::class, 'show']);

Route::get('/create', [ProductController::class, 'create']);
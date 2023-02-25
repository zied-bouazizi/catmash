<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Show home page
Route::get('/', [HomeController::class, 'index']);

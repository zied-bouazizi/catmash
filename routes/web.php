<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

// Show home page
Route::get('/', [HomeController::class, 'index'])->name('catmash.home');

// Show vote page
Route::get('/voter', [VoteController::class, 'index'])->name('catmash.vote');

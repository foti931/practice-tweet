<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/sample/{id}", [\App\Http\Controllers\Sample\IndexController::class, 'showId']);

Route::get("/sample", [\App\Http\Controllers\Sample\IndexController::class, 'show']);

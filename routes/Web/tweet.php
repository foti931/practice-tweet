<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get("/tweet", \App\Http\Controllers\Tweet\IndexController::class)
    ->name('tweet.index');

Route::middleware('auth')->group(function (){
    // get
    Route::get("/tweet/edit/{tweetId}", \App\Http\Controllers\Tweet\Update\IndexController::class)
        ->name('tweet.update.index');

    //put
    Route::put("/tweet/edit/{tweetId}", \App\Http\Controllers\Tweet\Update\PutController::class)
        ->name('tweet.update.update');

    //post
    Route::post('/tweet/create', \App\Http\Controllers\Tweet\CreateController::class)
        ->name('tweet.create');

    // delete
    Route::delete("/tweet/delete/{tweetId}", \App\Http\Controllers\Tweet\DeleteController::class)
        ->name('tweet.delete');
});


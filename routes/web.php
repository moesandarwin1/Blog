<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
Route::group(['prefix'=>'backend','as'=>'backend.'], function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

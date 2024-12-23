<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog');
Route::get('/blog_post/{id}', [App\Http\Controllers\BlogController::class, 'blogPost'])->name('blog_post');
Route::group(['middleware'=>['auth','role:Super Admin|Admin'],'prefix'=>'backend','as'=>'backend.'], function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('posts',App\Http\Controllers\Admin\PostController::class);
    Route::resource('categories',App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('users',App\Http\Controllers\Admin\UserController::class);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

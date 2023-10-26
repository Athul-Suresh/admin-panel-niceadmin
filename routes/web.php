<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::view('/','welcome');

Auth::routes();

Route::middleware(['auth'])->prefix('admin/')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::resource('user', UserController::class);
    
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DramaController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DramaController as AdminDramaController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dramas', [DramaController::class, 'index'])->name('dramas.index');

Route::get('/dramas/{slug}', [DramaController::class, 'show'])->name('dramas.show');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('login', [AuthController::class, 'showLogin']);
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('auth:admin')->group(function () {

        Route::get('dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('dramas', AdminDramaController::class);
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Cached routes for better performance
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('cache.headers:public;max_age=3600');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/content', [AdminController::class, 'storeContent'])->name('admin.content.store');
    Route::put('/content/{id}', [AdminController::class, 'updateContent'])->name('admin.content.update');
    Route::delete('/content/{id}', [AdminController::class, 'deleteContent'])->name('admin.content.delete');
    Route::get('/content/{id}', [AdminController::class, 'getContent'])->name('admin.content.get');
    Route::patch('/content/{id}/toggle', [AdminController::class, 'toggleContent'])->name('admin.content.toggle');
});
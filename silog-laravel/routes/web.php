<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BoardMemberController;
use App\Http\Controllers\InfoController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/direksi-komisaris', [BoardMemberController::class, 'index'])->name('direksi-komisaris');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/news/{slug}', [InfoController::class, 'show'])->name('news.show');
Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');
Route::get('/profil', function () {
    return view('profil');
})->name('profil');
Route::get('/visi-misi', function () {
    return view('visi-misi');
})->name('visi-misi');

// Custom Admin Routes
Route::prefix('admin-panel')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/content/{id}', [AdminController::class, 'getContent'])->name('admin.content.get');
    Route::post('/content', [AdminController::class, 'storeContent'])->name('admin.content.store');
    Route::put('/content/{id}', [AdminController::class, 'updateContent'])->name('admin.content.update');
    Route::delete('/content/{id}', [AdminController::class, 'deleteContent'])->name('admin.content.delete');
    Route::patch('/content/{id}/toggle', [AdminController::class, 'toggleContent'])->name('admin.content.toggle');
});

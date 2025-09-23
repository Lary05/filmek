<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Kezdő oldal - Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Movies CRUD
Route::prefix('movies')->group(function () {
    Route::get('/', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/create', [MovieController::class, 'create'])->name('movies.create');
    Route::post('/', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/{movie}', [MovieController::class, 'show'])->name('movies.show');
    Route::get('/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
    Route::put('/{movie}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');

    // Galéria
    Route::get('/gallery', [MovieController::class, 'gallery'])->name('movies.gallery');
});

// Actors CRUD
Route::prefix('actors')->group(function () {
    Route::get('/', [ActorController::class, 'index'])->name('actors.index');
    Route::get('/create', [ActorController::class, 'create'])->name('actors.create');
    Route::post('/', [ActorController::class, 'store'])->name('actors.store');
    Route::get('/{actor}', [ActorController::class, 'show'])->name('actors.show');
    Route::get('/{actor}/edit', [ActorController::class, 'edit'])->name('actors.edit');
    Route::put('/{actor}', [ActorController::class, 'update'])->name('actors.update');
    Route::delete('/{actor}', [ActorController::class, 'destroy'])->name('actors.destroy');
});

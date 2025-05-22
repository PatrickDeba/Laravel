<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;


// Ruta de inicio opcional
Route::get('/', function () {
    return redirect('/authors'); // redirige al listado de autores
});

// Rutas resource para CRUDs
Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);
Route::resource('reviews', ReviewController::class);

Route::post('books/{book}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::delete('reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
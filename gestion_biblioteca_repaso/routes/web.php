<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/autores', function () {
    return redirect()->route('autores.index');
});
Route::get('/libros', function () {
    return redirect()->route('libros.index');
});
Route::get('/opiniones', function () {
    return redirect()->route('opiniones.index');
});

// Definición de rutas para los recursos
Route::get('/autores/add', [AuthorController::class, 'add'])->name('autores.add');
Route::get('/libros/add', [BookController::class, 'add'])->name('libros.add');
Route::get('/opiniones/add', [ReviewController::class, 'add'])->name('opiniones.add');


Route::resource('autores', AuthorController::class);
Route::resource('libros', BookController::class);
Route::resource('opiniones', ReviewController::class);

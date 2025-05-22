<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\CursoController;

// Ruta de inicio opcional
Route::get('/', function () {
    return redirect('/alumnos'); // redirige al listado de alumnos
});

// CRUD básico
Route::resource('alumnos', AlumnoController::class);
Route::resource('profesores', ProfesorController::class);
Route::resource('cursos', CursoController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

Route::get('/', function () {
    return view('inicio');
})->name('Inicio');

Route::get('/teams', [TeamController::class, 'index'])->name('IndexTeam');
Route::get('/players', [PlayerController::class, 'index'])->name('IndexPlayer');

Route::get('/teams/add', [TeamController::class, 'add'])->name('AñadirTeam');
Route::post('/teams/stores', [TeamController::class, 'store'])->name('StoreTeam');

Route::get('/teams/edit/{id}', [TeamController::class, 'edit'])->name('EditarTeam');
Route::put('/team/update/{id}',[TeamController::class, 'update'])->name('UpdateTeam');

Route::delete('/teams/destroy/{id}', [TeamController::class, 'destroy'])->name('BorrarTeam');

Route::get('/players/ver{player}', [PlayerController::class, 'show'])->name('VerDetalles');




<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return Inertia::render('Formulari');
});


Route::get('/usuari/{dni}/validar', [UserController::class, 'validarDni']);
Route::get('/usuari/{dni}/', [UserController::class, 'cargarPerfil']);



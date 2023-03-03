<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('propietarios', App\Http\Controllers\PropietariosController::class);
Route::resource('mascotas', App\Http\Controllers\MascotasController::class);

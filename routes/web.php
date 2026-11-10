<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductoController;

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/prueba', [ProductoController::class, 'storePrueba']);
Route::get('/crear-prueba', [ProductoController::class, 'storePrueba']);

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalculadoraController;

Route::get('/', [CalculadoraController::class, 'index']);
Route::post('/calcular', [CalculadoraController::class, 'calcular']);


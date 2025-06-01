<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeSaludoController; // Asegúrate de importar el controlador

// Ruta para mostrar un saludo repetido
Route::get('/saludo-repetido/{veces}', [MensajeSaludoController::class, 'saludoRepetido']); 
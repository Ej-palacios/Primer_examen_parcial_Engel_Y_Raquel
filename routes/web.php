<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return redirect()->route('cursos.index');
});

Route::prefix('cursos')->group(function () {
    Route::get('/', [CursoController::class, 'index'])->name('cursos.index');
    Route::get('/crear', [CursoController::class, 'create'])->name('cursos.create');
    Route::get('/{nombre}/{duracion}/{categoria}', [CursoController::class, 'show'])->name('cursos.show');
    Route::get('/{nombre}/{duracion}/{categoria}/editar', [CursoController::class, 'edit'])->name('cursos.edit');
});
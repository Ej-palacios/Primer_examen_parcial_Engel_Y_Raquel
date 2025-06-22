<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('cursos.index');
    }

    public function show($nombre, $duracion, $categoria)
    {
        $duracionHoras = $duracion * 4;
        
        return view('cursos.show', [
            'nombre' => $nombre,
            'duracion' => $duracion,
            'categoria' => $categoria,
            'duracionHoras' => $duracionHoras
        ]);
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function edit($nombre, $duracion, $categoria)
    {
        return view('cursos.edit', [
            'nombre' => $nombre,
            'duracion' => $duracion,
            'categoria' => $categoria
        ]);
    }
}
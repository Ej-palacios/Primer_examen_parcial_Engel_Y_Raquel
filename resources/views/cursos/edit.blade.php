@extends('layouts.app')

@section('title', 'Editar Curso')

@section('content')
    <x-titulo>Editar: {{ $nombre }}</x-titulo>
    
    <div class="card minimal-card">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Curso</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ ucfirst($nombre) }}">
                </div>
                
                <div class="mb-3">
                    <label for="duracion" class="form-label">Duración (semanas)</label>
                    <input type="number" class="form-control" id="duracion" name="duracion" value="{{ $duracion }}">
                </div>
                
                <div class="mb-4">
                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" value="{{ ucfirst(str_replace('-', ' ', $categoria)) }}">
                </div>
                
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('cursos.show', ['nombre' => $nombre, 'duracion' => $duracion, 'categoria' => $categoria]) }}" 
                       class="btn btn-outline-secondary btn-minimal">
                        Cancelar
                    </a>
                    <button type="submit" class="btn btn-primary btn-minimal">
                        Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
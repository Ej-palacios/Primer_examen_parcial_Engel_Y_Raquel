@extends('layouts.app')

@section('title', 'Crear Nuevo Curso')

@section('content')
    <x-titulo>Nuevo Curso</x-titulo>
    
    <div class="card minimal-card">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Curso</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Laravel desde cero">
                </div>
                
                <div class="mb-3">
                    <label for="duracion" class="form-label">Duración (semanas)</label>
                    <input type="number" class="form-control" id="duracion" name="duracion" min="1" placeholder="Ej: 4">
                </div>
                
                <div class="mb-4">
                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ej: Desarrollo Web">
                </div>
                
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('cursos.index') }}" class="btn btn-outline-secondary btn-minimal">
                        Cancelar
                    </a>
                    <button type="submit" class="btn btn-primary btn-minimal">
                        Guardar Curso
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
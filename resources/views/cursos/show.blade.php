@extends('layouts.app')

@section('title', $nombre)

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <x-titulo>{{ $nombre }}</x-titulo>
        
        <div class="d-flex gap-2">
            <a href="{{ route('cursos.edit', ['nombre' => $nombre, 'duracion' => $duracion, 'categoria' => $categoria]) }}" 
               class="btn btn-outline-secondary btn-professional">
                <i class="fas fa-edit me-2"></i> Editar
            </a>
            <a href="{{ route('cursos.index') }}" class="btn btn-outline-primary btn-professional">
                <i class="fas fa-arrow-left me-2"></i> Volver
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-8">
            <div class="professional-card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                            <h2 class="h4 mb-2">{{ $nombre }}</h2>
                            <span class="badge bg-primary rounded-pill mb-3">
                                {{ ucfirst(str_replace('-', ' ', $categoria)) }}
                            </span>
                        </div>
                        @if($duracionHoras < 20)
                            <span class="badge-professional badge-short">Curso Corto</span>
                        @elseif($duracionHoras >= 20 && $duracionHoras <= 32)
                            <span class="badge-professional badge-medium">Curso Medio</span>
                        @else
                            <span class="badge-professional badge-long">Curso Largo</span>
                        @endif
                    </div>
                    
                    <div class="mb-4">
                        <h5 class="h6 text-uppercase text-muted mb-3">Detalles del Curso</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <strong><i class="fas fa-clock me-2 text-primary"></i> Duración:</strong> 
                                {{ $duracion }} semanas ({{ $duracionHoras }} horas)
                            </li>
                            <li class="mb-2">
                                <strong><i class="fas fa-tags me-2 text-primary"></i> Categoría:</strong> 
                                {{ ucwords(str_replace('-', ' ', $categoria)) }}
                            </li>
                            <li>
                                <strong><i class="fas fa-calendar-alt me-2 text-primary"></i> Intensidad:</strong> 
                                4 horas por semana
                            </li>
                        </ul>
                    </div>
                    
                    <div class="border-top pt-3">
                        <h5 class="h6 text-uppercase text-muted mb-3">Descripción</h5>
                        <p class="mb-0">Este curso ofrece una formación completa en {{ str_replace('-', ' ', $categoria) }}, 
                        con un enfoque práctico y basado en proyectos reales. Ideal para profesionales que buscan 
                        mejorar sus habilidades en esta área.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="professional-card">
                <div class="card-header">
                    Resumen
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span>Completado</span>
                            <span>{{ min(100, ($duracion * 10)) }}%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-primary" 
                                 style="width: {{ min(100, ($duracion * 10)) }}%"></div>
                        </div>
                    </div>
                    
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-chart-line me-2 text-primary"></i>
                            Nivel: {{ $duracion > 5 ? 'Avanzado' : ($duracion > 3 ? 'Intermedio' : 'Básico') }}
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-certificate me-2 text-primary"></i>
                            Certificado: Sí
                        </li>
                        <li>
                            <i class="fas fa-users me-2 text-primary"></i>
                            Estudiantes: {{ $duracion * 25 }}
                        </li>
                    </ul>
                    
                    <button class="btn btn-primary btn-professional w-100 mt-3">
                        <i class="fas fa-book-open me-2"></i> Inscribirse
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
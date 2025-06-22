@extends('layouts.app')

@section('title', 'Catálogo de Cursos')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-5">
        <x-titulo>Catálogo de Cursos</x-titulo>
        <a href="{{ route('cursos.create') }}" class="btn btn-primary btn-professional">
            <i class="fas fa-plus me-2"></i> Nuevo Curso
        </a>
    </div>
    
    <div class="row g-4">
        <div class="col-lg-4 col-md-6">
            <div class="professional-card h-100 hover-scale">
                <div class="card-header">
                    Laravel Avanzado
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-light text-dark rounded-pill">5 semanas</span>
                        <span class="badge bg-primary rounded-pill">Desarrollo Web</span>
                    </div>
                    <p class="text-muted mb-4">Domina Laravel con este curso intensivo que cubre desde los fundamentos hasta técnicas avanzadas.</p>
                    <a href="{{ route('cursos.show', ['nombre' => 'laravel', 'duracion' => 5, 'categoria' => 'desarrollo-web']) }}" 
                       class="btn btn-outline-primary btn-professional w-100">
                        Ver detalles
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="professional-card h-100 hover-scale">
                <div class="card-header">
                    Vue.js Moderno
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-light text-dark rounded-pill">3 semanas</span>
                        <span class="badge bg-success rounded-pill">Frontend</span>
                    </div>
                    <p class="text-muted mb-4">Aprende Vue 3 con Composition API, Pinia y las mejores prácticas para desarrollo frontend moderno.</p>
                    <a href="{{ route('cursos.show', ['nombre' => 'vue', 'duracion' => 3, 'categoria' => 'frontend']) }}" 
                       class="btn btn-outline-primary btn-professional w-100">
                        Ver detalles
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="professional-card h-100 hover-scale">
                <div class="card-header">
                    Python para Data Science
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-light text-dark rounded-pill">8 semanas</span>
                        <span class="badge bg-info rounded-pill">Data Science</span>
                    </div>
                    <p class="text-muted mb-4">Curso completo de ciencia de datos con Python, Pandas, NumPy y Scikit-learn.</p>
                    <a href="{{ route('cursos.show', ['nombre' => 'python', 'duracion' => 8, 'categoria' => 'data-science']) }}" 
                       class="btn btn-outline-primary btn-professional w-100">
                        Ver detalles
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
<nav class="navbar navbar-expand-lg navbar-dark bg-dark-light shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="{{ route('cursos.index') }}">
      <span class="bg-primary rounded p-2 me-2 d-flex align-items-center justify-content-center">
        <i class="fas fa-graduation-cap"></i>
      </span>
      <span class="fw-bold">GestorCursos</span>
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
            aria-controls="navbarContent" aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link py-2 px-3 rounded {{ request()->routeIs('cursos.index') ? 'active' : '' }}" 
             href="{{ route('cursos.index') }}">
            <i class="fas fa-list me-1"></i> Cursos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link py-2 px-3 rounded {{ request()->routeIs('cursos.create') ? 'active' : '' }}" 
             href="{{ route('cursos.create') }}">
            <i class="fas fa-plus-circle me-1"></i> Nuevo Curso
          </a>
        </li>
      </ul>
      
      <div class="d-flex">
        <div class="input-group input-group-dark">
          <span class="input-group-text bg-dark-lighter border-0">
            <i class="fas fa-search"></i>
          </span>
          <input type="text" class="form-control bg-dark-lighter border-0 text-light" 
                 placeholder="Buscar cursos..." aria-label="Buscar">
        </div>
      </div>
    </div>
  </div>
</nav>

<style>
  .navbar {
    padding: 0.75rem 0;
  }
  
  .nav-link {
    position: relative;
    margin: 0 0.25rem;
  }
  
  .nav-link:hover {
    background: rgba(108, 92, 231, 0.1);
  }
  
  .nav-link.active {
    background: rgba(108, 92, 231, 0.2);
    color: var(--primary) !important;
  }
  
  .nav-link.active::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 50%;
    height: 2px;
    background: var(--primary);
    border-radius: 2px;
  }
  
  .input-group-dark .form-control,
  .input-group-dark .input-group-text {
    color: var(--light);
  }
  
  .input-group-dark .form-control:focus {
    box-shadow: 0 0 0 0.25rem rgba(108, 92, 231, 0.25);
    border-color: var(--primary);
  }
</style>
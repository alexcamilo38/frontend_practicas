<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #3229a9;">
    <div class="container-fluid px-4">

        <!-- LOGO Y NOMBRE -->
        <div class="navbar-brand d-flex align-items-center">

            <a href="{{ url('/') }}" class="text-decoration-none">
                <span class="text-white fw-bold">Sistema de Gestión</span>
            </a>
        </div>

        <!-- BOTÓN MÓVIL -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- CONTENIDO -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-lg-center gap-2 ms-lg-3">
                

                <!-- MENÚ ADMINISTRACIÓN (Siempre visible) -->
                <li class="nav-item dropdown" id="adminDropdownNav">
                    <a class="btn btn-light dropdown-toggle text-dark fw-medium px-3" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Administración
                    </a>
                    <ul class="dropdown-menu shadow-sm border-0 mt-2">
                        <li><a class="dropdown-item py-2" href="{{ route('profesors.index') }}">Lista profesores</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('modulos.index') }}">Lista modulos</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('alumnos.index') }}">Lista alumnos</a></li>
                        
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>


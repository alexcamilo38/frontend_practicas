@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">

        <div class="card shadow-lg border-0 rounded-5">

            <div class="card-header text-white" style="background-color: #39A900;">
                <h3 class="mb-0">Actualizar alumnos</h3>
            </div>

            <div class="card-body">

                <form action="{{ route('alumnos.update', $alumnos['id']) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">
                            Nombre del alumnos
                        </label>

                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ old('nombre', $alumnos['nombre']) }}" placeholder="Ingrese el nombre del alumnos">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">
                            Apellido del alumno
                        </label>

                        <input type="text" class="form-control" id="apellido" name="apellido"
                            value="{{ old('apellido', $alumnos['apellido']) }}"
                            placeholder="Ingrese el apellido del profesor">
                    </div>

                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label fw-bold">
                            Fecha de Nacimiento
                        </label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"
                            value="{{ old('fecha_nacimiento', $alumnos['fecha_nacimiento']) }}">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">
                            Expediente
                        </label>

                        <input type="text" class="form-control" id="expediente" name="expediente"
                            value="{{ old('expediente', $alumnos['expediente']) }}"
                            placeholder="Ingrese el expediente del alumno">
                    </div>

                    <div class="mb-4">
                                <label for="modulo_id" class="form-label text-muted small fw-bold text-uppercase tracking-wider">modulo asociado</label>
                                <select name="modulo_id" id="modulo_id" class="form-select form-select-lg bg-light border-0 rounded-3 text-dark fw-medium" required>
                                    @foreach($modulos as $modulo)
                                    <option value="{{ $modulo['id'] }}" {{ old('modulo_id', $alumnos['modulo_id']) == $alumnos['id'] ? 'selected' : '' }}>
                                        {{ $modulo['nombre'] }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">
                            Volver
                        </a>

                        <button type="submit" class="btn text-white" style="background-color: #143084;">
                            Actualizar alumnos
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection

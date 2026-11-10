@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-dark"> Lista de alumnos</h1>
            <a href="{{ route('alumnos.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nueva alumnos
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header text-white encabezado-tabla" style="background-color: #25c72f;">
                <h5 class="mb-0">alumnos Registradas</h5>
            </div>

            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                @endif

                <table id="idalumno" class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>apellido</th>
                            <th>fecha_nacimiento</th>
                            <th>expediente</th>
                            <th>modulo_id</th>
                            <th>Imagen</th>
                            <th class="text-center">Acciones</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($alumnos as $alumnos)
                            <tr>

                                <td>{{ $alumnos['id'] }}</td>

                                <td class="fw-semibold">
                                    {{ $alumnos['nombre'] }}
                                </td>
                                <td class="fw-semibold">
                                    {{ $alumnos['apellido'] }}
                                </td>
                                <td class="fw-semibold">
                                    {{ $alumnos['fecha_nacimiento'] }}
                                </td>
                                <td class="fw-semibold">
                                    {{ $alumnos['expediente'] }}
                                </td>
                                <td>{{ $alumnos['modulo_id'] ?? 'N/A' }}</td>
                                <td>
                                    <img src="{{ $alumnos['imagen_url'] }}" alt="{{ $alumnos['nombre'] }}" width="100">
                                </td>

                                <td class="text-center">

                                    <a href="{{ route('alumnos.show', $alumnos['id']) }}" class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>
                                    <a href="{{ route('alumnos.edit', $alumnos['id']) }}" class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('alumnos.destroy', $alumnos['id']) }}" method="POST" class="d-inline">

                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Eliminar
                                        </button>

                                    </form>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>
@endsection

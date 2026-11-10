@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold text-dark"> Lista de modulo</h1>
            <a href="{{ route('modulos.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Nuevo modulo
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header text-white encabezado-tabla" style="background-color: #25c72f;">
                <h5 class="mb-0">modulos Registrados</h5>
            </div>

            <div class="card-body">

                <table id="idmodulo" class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th class="text-center">Acciones</th>

                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($modulos as $modulo)
                            <tr>

                                <td>{{ $modulo['id'] }}</td>

                                <td class="fw-semibold">
                                    {{ $modulo['codigo'] }}
                                </td>

                                <td class="fw-semibold">
                                    {{ $modulo['nombre'] }}
                                </td>
                                
                                <td class="text-center">

                                    <a href="{{ route('modulos.show', $modulo['id']) }}" class="btn btn-info btn-sm me-1">
                                        Mostrar
                                    </a>
                                    <a href="{{ route('modulos.edit', $modulo['id']) }}" class="btn btn-warning btn-sm me-1">
                                        Editar
                                    </a>

                                    <form action="{{ route('modulos.destroy', $modulo['id']) }}" method="POST" class="d-inline">

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
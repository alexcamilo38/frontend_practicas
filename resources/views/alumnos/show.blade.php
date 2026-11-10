@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">

    <div class="card shadow-lg border-0">

        <div class="card-header bg-success  text-white">
            <h3 class="mb-0">
                {{ $alumnos['nombre'] }}
            </h3>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">ID</label>
                    <div class="form-control bg-light">
                        {{ $alumnos['id'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Nombre</label>
                    <div class="form-control">
                        {{ $alumnos['nombre'] }}
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">apellido</label>
                    <div class="form-control">
                        {{ $alumnos['apellido'] }}
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">fecha_nacimiento</label>
                    <div class="form-control">
                        {{ $alumnos['fecha_nacimiento'] }}
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="fw-bold">expediente</label>
                    <div class="form-control">
                        {{ $alumnos['expediente'] }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Modulos</label>
                    <div class="form-control">
                        {{ $alumnos['modulo_id'] }}
                    </div>
                </div>

            </div>

            <hr class="my-4">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Fecha de creación</label>
                    <div class="form-control text-muted">
                        {{ \Carbon\Carbon::parse($alumnos['created_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="fw-bold">Última actualización</label>
                    <div class="form-control text-muted">
                        {{ \Carbon\Carbon::parse($alumnos['updated_at'])->format('d/m/Y H:i') }}
                    </div>
                </div>

            </div>

            <div class="mt-4 text-end">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
            </div>

        </div>

    </div>

</div>
@endsection
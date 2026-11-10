@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Registrar Profesor</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('profesors.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Nombre
                            </label>
                            <input
                                type="text"
                                name="nombre"
                                class="form-control"
                                placeholder="Ingrese el nombre del profesor">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Apellido
                            </label>
                            <input
                                type="text"
                                name="apellido"
                                class="form-control"
                                placeholder="Ingrese el apellido del profesor">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Telefono
                            </label>
                            <input
                                type="tel"
                                name="telefono"
                                class="form-control"
                                placeholder="Ingrese el numero de telefono">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Cedula
                            </label>
                            <input
                                type="text"
                                name="cedula"
                                class="form-control"
                                placeholder="Ingrese el numero de cedula">
                        </div>
                          
                        <button type="submit" class="btn btn-success">
                            Enviar Formulario
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
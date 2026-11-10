@extends('layouts.app')

@section('content')

<div class="container mt-5 mb-5">

    <div class="card shadow-lg border-0 rounded-5">

        <div class="card-header text-white" style="background-color: #39A900;">
            <h3 class="mb-0">Actualizar Área</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('profesors.update', $profesors['id']) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">
                        Nombre del Profesor
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        id="nombre"
                        name="nombre"
                        value="{{ old('nombre', $profesors['nombre']) }}"
                        placeholder="Ingrese el nombre del profesor">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">
                        Apellido del profesor
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        id="apellido"
                        name="apellido"
                        value="{{ old('apellido', $profesors['apellido']) }}"
                        placeholder="Ingrese el apellido del profesor">
                </div>

                {{-- Correo Electrónico --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Telefono
                            </label>
                            <input
                                type="tel"
                                name="telefono"
                                class="form-control"
                                value="{{ old('telefono', $profesors['telefono']) }}"
                                placeholder="Ingrese el telefono">
                        </div>

                        {{-- Número de Celular --}}
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Número de cedula
                            </label>
                            <input
                                type="text"
                                name="cedula"
                                class="form-control"
                                value="{{ old('cedula', $profesors['cedula']) }}"
                                placeholder="Ingrese el número de cedula">
                        </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">
                        Volver
                    </a>

                    <button type="submit" class="btn text-white" style="background-color: #143084;">
                        Actualizar Área
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>

@endsection
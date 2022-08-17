@extends('tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nuevo Mantenimiento</h3>

    <a href="{{ route('mantenimiento.index') }}" class="btn btn-link">Lista Mantenimientos</a>
    <a href="{{ route('gerente.indexAdmin') }}" class="btn btn-link">Index</a>

    <form action="{{ route('mantenimiento.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="tipoMantenimiento" class="form-label">Tipo de Mantenimiento</label><br>
                <input type="text" name="tipo_Mantenimiento" class="form-control" id="tipoMantenimiento"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="DiagMantenimiento" class="form-label">Diagnostico del Mantenimiento</label><br>
                <input type="text" name="diagnostico_Manteni" class="form-control" id="DiagMantenimiento"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="fechaInicio" class="form-label">Fecha Inicio</label><br>
                <input type="date" name="fecha_Inicio" class="form-control" id="fechaInicio"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="fechaFin" class="form-label">Fecha Fin</label><br>
                <input type="date" name="fecha_Fin" class="form-control" id="fechaFin"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="estadoMan" class="form-label">Estado</label><br>
                <select name="estado_Mantenimiento" id="estadoMan" class="form-select">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select><br>
            </div>

            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>

        </div>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
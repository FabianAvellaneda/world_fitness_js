@extends('tema.app')

@section('title', "Registrar")

@section('contenido')
    <h3>Nueva valoracion fisica</h3>

    <form action="{{ route('valoracion_fisica.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="tipoMantenimiento" class="form-label">Peso</label><br>
                <input type="text" name="peso" class="form-control" id="tipoMantenimiento"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="DiagMantenimiento" class="form-label">Estatura</label><br>
                <input type="text" name="estatura" class="form-control" id="DiagMantenimiento"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="descripmed" class="form-label">Descripcion Medidas</label><br>
                <input type="textarea" name="descripcion_Medidas" class="form-control" id="descripmed"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="imc" class="form-label">IMC</label><br>
                <input type="text" name="imc" class="form-control" id="imc"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="fechaVal" class="form-label">Fecha Valoracion</label><br>
                <input type="date" name="fecha_Valoracion" class="form-control" id="fechaVal"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="estadoVal" class="form-label">Estado</label><br>
                <select name="estado_Valoracion" id="estadoVal" class="form-select">
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
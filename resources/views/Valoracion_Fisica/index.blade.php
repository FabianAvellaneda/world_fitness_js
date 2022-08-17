@extends('tema.app')

@section('title', "Listado de Usuarios")

@section('contenido')
    <h3>Listado de Usuarios</h3>
    
    <div class="col-sm-12">
        <a href="{{ route('valoracion_fisica.create') }}" class="btn btn-link">Nueva valoracion</a>
        <a href="{{ route('valoracion_fisica.index') }}" class="btn btn-link">Lista Valoraciones</a>
        <a href="{{ route('gerente.indexAdmin') }}" class="btn btn-link">Index</a>
    </div>
    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Peso
                </th>
                <th>
                    Estatura
                </th>
                <th>
                    Descripcion Medidas
                </th>
                <th>
                    IMC
                </th>
                <th>
                    Fecha Valoracion
                </th>
                <th>
                    Estado
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($valoracion_fisica as $valoracion_fisica)
            <tr>
                <td>
                    {{ $valoracion_fisica->id }}
                </td>
                <td>
                    {{ $valoracion_fisica->peso }}
                </td>
                <td>
                    {{ $valoracion_fisica->estatura }}
                </td>
                <td>
                    {{ $valoracion_fisica->descripcion_Medidas }}
                </td>
                <td>
                    {{ $valoracion_fisica->imc }}
                </td>
                <td>
                    {{ $valoracion_fisica->fecha_Valoracion }}
                </td>
                <td>
                    {{ $valoracion_fisica->estado_Valoracion() }}
                </td>
                <td>
                    <form action="{{ route('valoracion_fisica.destroy', $valoracion_fisica) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                    <a href="{{ route('valoracion_fisica.edit', $valoracion_fisica) }}" >Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
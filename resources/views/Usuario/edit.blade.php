@extends('tema.app')

@section('title', "Editar")

@section('contenido')
    <h3>Editar Usuario</h3>
    <div class="col-sm-12">
    <a href="{{ route('usuario.create') }}" class="btn btn-link">Crear Usuario</a>
        <a href="{{ route('usuario.index') }}" class="btn btn-link">Lista Usuarios</a>
        <a href="{{ route('gerente.indexAdmin') }}" class="btn btn-link">Index</a>
            </div>

    <form action="{{ route('usuario.update', $usuario) }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <input type="hidden" name="id" class="form-control"><br><br>
                <label for="user" class="form-label">Usuario</label><br>
                <input type="text" name="user" class="form-control" id="user" value="{{ old('user', $usuario->user) }}"><br><br>
            </div>

            <div class="col-sm-12">
                <label for="Contra" class="form-label">Contraseña</label><br>
                <input type="text" name="password" class="form-control" id="Contra" value="{{ old('password', $usuario->password) }}"><br><br>
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
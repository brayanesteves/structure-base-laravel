@extends('theme.halconbit.base')

@section('content')
    <div class="container">
        <h1>Listado de estudiantes:</h1>
        <a href="{{ route('estudiante.create') }}" class="btn btn-primary">Registrar estudiante</a>
        
        @if(Session::has('messageSuccessful'))
        <div class="alert alert-info my-5">
            {{ Session::get('messageSuccessful') }}
        </div>
        @endif

        @if(Session::has('messageUpdateSuccessful'))
        <div class="alert alert-info my-5">
            {{ Session::get('messageUpdateSuccessful') }}
        </div>
        @endif

        @if(Session::has('messageDeleteSuccessful'))
        <div class="alert alert-danger my-5">
            {{ Session::get('messageDeleteSuccessful') }}
        </div>
        @endif

        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Correo electrónico</th>
                <th>Cursos asociados</th>
                <th>Acciones</th>
            </thead>

            <tbody>
                @forelse($estudiantes as $details)
                <tr>                    
                    <td>{{ $details->name }}</td>
                    <td>{{ $details->lastname }}</td>
                    <td>{{ $details->age }}</td>
                    <td>{{ $details->email }}</td>
                    <td></td>
                    <td>
                        <a href="{{ route('estudiante.edit', $details) }}" class="btn btn-primary">Editar</a> | 
                        <form class="d-inline" action="{{ route('estudiante.destroy', $details) }}" action="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">No hay registros</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
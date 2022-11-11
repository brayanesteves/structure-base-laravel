@extends('theme.halconbit.base')

@section('content')
    <div class="container">
        <h1>Listado de cursos:</h1>
        <a href="{{ route('course.create') }}" class="btn btn-primary">Registrar curso</a>
        
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
                <th>Horario</th>
                <th>Fecha de inicio</th>
                <th>Fecha fin</th>
                <th>Acciones</th>
            </thead>

            <tbody>
                @forelse($course as $details)
                <tr>                    
                    <td>{{ $details->name }}</td>
                    <td>{{ $details->schedule }}</td>
                    <td>{{ $details->init_date }}</td>
                    <td>{{ $details->end_date }}</td>
                    <td>
                        <a href="{{ route('course.edit', $details) }}" class="btn btn-primary">Editar</a> | 
                        <form class="d-inline" action="{{ route('course.destroy', $details) }}" action="POST">
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
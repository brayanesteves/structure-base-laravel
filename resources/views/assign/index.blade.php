@extends('theme.halconbit.base')

@section('content')
    <div class="container">
        <h1>Listado de cursos asignados:</h1>
        <a href="{{ route('assign.create') }}" class="btn btn-primary">Asignar cursos</a>
        
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
                <th>Nombre del estudiante</th>
                <th>Nombre del curso</th>
                <th>Acciones</th>
            </thead>

            <tbody>
                @forelse($studentsAssign_LeftJoin as $details)
                <tr>                    
                    <td>{{ $details->name }}. {{ $details->lastname }}</td>
                    <td>{{ $details->name_curso }}</td>
                    <td></td>
                    <td>
                        
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
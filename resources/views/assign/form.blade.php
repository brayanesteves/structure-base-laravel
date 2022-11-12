@extends('theme.halconbit.base')

@section('content')
    <div class="container">
        @if(isset($estudiante))
        <h1>Actualizar el curso al estudiante</h1>
        @else
        <h1>Asignar curso al estudiante</h1>
        @endif

        @if(isset($studentsAssign_LeftJoin))
        <form action="{{ route('assign.update', $studentsAssign_LeftJoin->id) }}" method="POST">
        @method('PUT')
        @else
        <form action="{{ route('assign.store') }}" method="POST">
        @endif
            @csrf
            <div class="mb-3">
                <label for="reference_estudiante" class="form-label">Nombre:</label>
                <select class="form-select" name="reference_estudiante" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @forelse($estudiantes as $details)
                    <option value="{{ $details->id }}">{{ $details->name }}. {{ $details->lastname }}</option>
                    @empty
                    <option selected>No option</option>
                    @endforelse
                </select>
            </div>

            <div class="mb-3">
                <label for="reference_curso" class="form-label">Cursos:</label>
                <select class="form-select" name="reference_curso" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @forelse($course as $details)
                    <option value="{{ $details->id }}">{{ $details->name }}</option>
                    @empty
                    <option selected>No option</option>
                    @endforelse
                </select>
            </div>

            @if(isset($estudiante))
            <button type="submit" class="btn btn-primary">Actualizar</button>
            @else
            <button type="submit" class="btn btn-primary">Registrar</button>
            @endif
        </form>
    </div>
@endsection
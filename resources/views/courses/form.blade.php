@extends('theme.halconbit.base')

@section('content')
    <div class="container">
        @if(isset($course))
        <h1>Actualizar datos del curso</h1>
        @else
        <h1>Registrar curso</h1>
        @endif

        @if(isset($course))
        <form action="{{ route('course.update', $course->id) }}" method="POST">
        @method('PUT')
        @else
        <form action="{{ route('course.store') }}" method="POST">
        @endif
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" name="name" class="form-control" @if(isset($course)) value="{{ $course->name }}" @endif placeholder="Escriba el nombre del course....." />
                <p class="form-text">Escriba el nombre del curso.</p>
                @error('name')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="schedule" class="form-label">Horario:</label>
                <input type="text" name="schedule" class="form-control" @if(isset($course)) value="{{ $course->schedule }}" @endif placeholder="Escriba el horario del curso....." />
                <p class="form-text">Escriba el horario.</p>
                @error('schedule')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="init_date" class="form-label">Fecha de inicio:</label>
                <input type="text" name="init_date" class="form-control" @if(isset($course)) value="{{ $course->init_date }}" @endif placeholder="Escriba la fecha de inicio....." />
                <p class="form-text">Escriba la fecha de inicio.</p>
                @error('init_date')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">Fecha final:</label>
                <input type="text" name="end_date" class="form-control" @if(isset($course)) value="{{ $course->end_date }}" @endif placeholder="Escriba la fecha fin....." />
                <p class="form-text">Escriba la fecha final.</p>
                @error('end_date')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            @if(isset($course))
            <button type="submit" class="btn btn-primary">Actualizar</button>
            @else
            <button type="submit" class="btn btn-primary">Registrar</button>
            @endif
        </form>
    </div>
@endsection
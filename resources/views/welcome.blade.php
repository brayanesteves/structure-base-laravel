@extends('theme.halconbit.base')

@section('content')
    <div class="container">
        <h1>Hello, World!</h1>
        <a href="{{ route('estudiante.index') }}" class="btn btn-primary">Estudiante</a>
        <a href="{{ route('course.index') }}" class="btn btn-primary">Cursos</a>
        <a href="{{ route('assign.index') }}" class="btn btn-primary">Asignar cursos</a>
    </div>
@endsection
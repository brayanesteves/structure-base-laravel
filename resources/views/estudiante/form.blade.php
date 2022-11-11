@extends('theme.halconbit.base')

@section('content')
    <div class="container">
        @if(isset($estudiante))
        <h1>Actualizar datos del estudiante</h1>
        @else
        <h1>Registrar estudiante</h1>
        @endif

        @if(isset($estudiante))
        <form action="{{ route('estudiante.update', $estudiante->id) }}" method="POST">
        @method('PUT')
        @else
        <form action="{{ route('estudiante.store') }}" method="POST">
        @endif
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" name="name" class="form-control" @if(isset($estudiante)) value="{{ $estudiante->name }}" @endif placeholder="Escriba el nombre del estudiante....." />
                <p class="form-text">Escriba el nombre del estudiante.</p>
                @error('name')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Apellido:</label>
                <input type="text" name="lastname" class="form-control" @if(isset($estudiante)) value="{{ $estudiante->lastname }}" @endif placeholder="Escriba el apellido del estudiante....." />
                <p class="form-text">Escriba el apellido del estudiante.</p>
                @error('lastname')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Edad:</label>
                <input type="number" name="age" class="form-control" @if(isset($estudiante)) value="{{ $estudiante->age }}" @endif placeholder="Escriba la edad del estudiante....." />
                <p class="form-text">Escriba la edad del estudiante.</p>
                @error('age')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico:</label>
                <input type="text" name="email" class="form-control" @if(isset($estudiante)) value="{{ $estudiante->email }}" @endif placeholder="Escriba el correo electrónico del estudiante....." />
                <p class="form-text">Escriba el correo electrónico del estudiante.</p>
                @error('email')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            @if(isset($estudiante))
            <button type="submit" class="btn btn-primary">Actualizar</button>
            @else
            <button type="submit" class="btn btn-primary">Registrar</button>
            @endif
        </form>
    </div>
@endsection
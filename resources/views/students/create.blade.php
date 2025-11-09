@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white shadow-md rounded p-6">
    <h1 class="text-2xl font-bold mb-4">Registrar Estudiante</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-semibold mb-1">Nombre</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded p-2" required>
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Correo</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded p-2" required>
            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Carrera</label>
            <select name="career_id" class="w-full border rounded p-2" required>
                <option value="">Seleccione una carrera</option>
                @foreach($careers as $career)
                    <option value="{{ $career->id }}">{{ $career->name }}</option>
                @endforeach
            </select>
            @error('career_id') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Semestre</label>
            <input type="number" name="semester" min="1" max="12" class="w-full border rounded p-2" required>
            @error('semester') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex justify-between">
            <a href="{{ route('students.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Volver</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
        </div>
    </form>
</div>
@endsection

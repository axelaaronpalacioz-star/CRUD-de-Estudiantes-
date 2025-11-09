@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white shadow-md rounded p-6">
    <h1 class="text-2xl font-bold mb-4">Editar Carrera</h1>

    <form action="{{ route('careers.update', $career->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nombre</label>
            <input type="text" name="name" class="w-full border rounded p-2" value="{{ old('name', $career->name) }}" required>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-between">
            <a href="{{ route('careers.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Volver</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Actualizar</button>
        </div>
    </form>
</div>
@endsection

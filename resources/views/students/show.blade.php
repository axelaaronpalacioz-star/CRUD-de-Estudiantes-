@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4 text-center text-blue-700">Detalles del Estudiante</h1>

    <div class="border rounded-lg p-4 space-y-3">
        <div>
            <span class="font-semibold">ID:</span>
            <span>{{ $student->id }}</span>
        </div>
        <div>
            <span class="font-semibold">Nombre:</span>
            <span>{{ $student->name }}</span>
        </div>
        <div>
            <span class="font-semibold">Correo Electrónico:</span>
            <span>{{ $student->email }}</span>
        </div>
        <div>
            <span class="font-semibold">Carrera:</span>
            <span>{{ $student->career->name }}</span>
        </div>
        <div>
            <span class="font-semibold">Semestre:</span>
            <span>{{ $student->semester }}</span>
        </div>
        <div>
            <span class="font-semibold">Fecha de registro:</span>
            <span>{{ $student->created_at->format('d/m/Y') }}</span>
        </div>
    </div>

    <div class="mt-6 flex justify-between">
        <a href="{{ route('students.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
            Volver
        </a>
        <a href="{{ route('students.edit', $student->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
            Editar
        </a>
    </div>
</div>
@endsection

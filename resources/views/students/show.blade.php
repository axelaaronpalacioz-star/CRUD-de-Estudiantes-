@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6 mt-10">
    <h1 class="text-2xl font-bold mb-4 text-gray-800 border-b pb-2">Detalles del Estudiante</h1>

    <div class="space-y-4 mt-4">
        <div>
            <span class="block font-semibold text-gray-700">ID:</span>
            <span class="text-lg text-gray-900">{{ $student->id }}</span>
        </div>
        <div>
            <span class="block font-semibold text-gray-700">Nombre:</span>
            <span class="text-lg text-gray-900">{{ $student->name }}</span>
        </div>
        <div>
            <span class="block font-semibold text-gray-700">Correo Electrónico:</span>
            <span class="text-lg text-gray-900">{{ $student->email }}</span>
        </div>
        <div>
            <span class="block font-semibold text-gray-700">Carrera:</span>
            <span class="text-lg text-gray-900">{{ $student->career->name }}</span>
        </div>
        <div>
            <span class="block font-semibold text-gray-700">Semestre:</span>
            <span class="text-lg text-gray-900">{{ $student->semester }}</span>
        </div>
        <div>
            <span class="block font-semibold text-gray-700">Fecha de Registro:</span>
            <span class="text-lg text-gray-900">{{ $student->created_at->format('d/m/Y') }}</span>
        </div>
    </div>

    <div class="mt-6 flex justify-between">
        <a href="{{ route('students.index') }}" class="bg-slate-500 text-white px-4 py-2 rounded hover:bg-slate-600 transition-colors">Volver</a>
        <a href="{{ route('students.edit', $student->id) }}" class="bg-lime-500 text-white px-4 py-2 rounded hover:bg-lime-600 transition-colors">Editar</a>
    </div>
</div>
@endsection
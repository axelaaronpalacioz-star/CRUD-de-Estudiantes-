@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Lista de Estudiantes</h1>
        <a href="{{ route('students.create') }}" class="bg-cyan-500 text-white px-4 py-2 rounded hover:bg-cyan-700">Nuevo Estudiante</a>
    </div>

    <table class="min-w-full bg-white shadow rounded-lg">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Nombre</th>
                <th class="py-2 px-4">Correo</th>
                <th class="py-2 px-4">Carrera</th>
                <th class="py-2 px-4">Semestre</th>
                <th class="py-2 px-4 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr class="border-t">
                <td class="py-2 px-4">{{ $student->id }}</td>
                <td class="py-2 px-4">{{ $student->name }}</td>
                <td class="py-2 px-4">{{ $student->email }}</td>
                <td class="py-2 px-4">{{ $student->career->name }}</td>
                <td class="py-2 px-4">{{ $student->semester }}</td>
                <td class="py-2 px-4 text-center space-x-2">
                    <a href="{{ route('students.show', $student->id) }}" class="bg-green-600 text-white px-2 py-1 rounded hover:bg-green-700">Ver</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Editar</a>
                    <form action="{{ route('students.delete', $student->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('¿Eliminar estudiante?')" class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Lista de Carreras</h1>
        <a href="{{ route('careers.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Nueva Carrera</a>
    </div>

    <table class="min-w-full bg-white shadow rounded-lg">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Nombre</th>
                <th class="py-2 px-4 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($careers as $career)
            <tr class="border-t">
                <td class="py-2 px-4">{{ $career->id }}</td>
                <td class="py-2 px-4">{{ $career->name }}</td>
                <td class="py-2 px-4 text-center space-x-2">
                    <a href="{{ route('careers.edit', $career->id) }}" class="bg-yellow-400 text-white px-2 py-1 rounded hover:bg-yellow-500">Editar</a>
                    <form action="{{ route('careers.delete', $career->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600" onclick="return confirm('¿Eliminar carrera?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

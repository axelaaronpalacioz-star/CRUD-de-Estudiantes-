<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Estudiantes</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-cyan-800 text-white p-4 flex justify-between">
        <div class="font-bold text-lg">CRUD de Estudiantes</div>
        <div class="space-x-4">
            <a href="{{ route('students.index') }}" class="hover:underline">Estudiantes</a>
            <a href="{{ route('careers.index') }}" class="hover:underline">Carreras</a>
        </div>
    </nav>

    <main class="p-6">
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear estudiante</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-lg bg-white p-8 rounded-2xl shadow">

        <h1 class="text-2xl font-bold mb-6 text-gray-800">
            Crear estudiante
        </h1>

        <form action="{{ route('students.store') }}" method="POST" class="space-y-4">

            @csrf

            <input type="text"
                   name="nombre"
                   class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none"
                   placeholder="Nombre">

            <input type="text"
                   name="apellido"
                   class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none"
                   placeholder="Apellido">

            <input type="date"
                   name="fecha_nacimiento"
                   class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none">

            <input type="email"
                   name="correo_electronico"
                   class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none"
                   placeholder="Correo">

            <input type="text"
                   name="telefono"
                   class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none"
                   placeholder="Teléfono">

            <input type="text"
                   name="grado"
                   class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-blue-500 outline-none"
                   placeholder="Grado">

            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition">
                Guardar
            </button>

        </form>

    </div>

</body>
</html>
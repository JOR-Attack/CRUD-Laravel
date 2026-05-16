<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estudiantes</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen">

    <div class="max-w-7xl mx-auto p-8">

        <div class="flex items-center justify-between mb-6">

            <div>
                <h1 class="text-3xl font-bold text-gray-800">
                    Lista de estudiantes
                </h1>

                <p class="text-gray-500 mt-1">
                    Gestión de estudiantes
                </p>
            </div>

            <a
                href="{{ route('students.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow transition"
            >
                + Crear estudiante
            </a>

        </div>

        <div class="bg-white rounded-2xl shadow overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-50 border-b">

                    <tr class="text-left text-gray-600 text-sm uppercase">

                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Nombre</th>
                        <th class="px-6 py-4">Apellido</th>
                        <th class="px-6 py-4">Nacimiento</th>
                        <th class="px-6 py-4">Correo</th>
                        <th class="px-6 py-4">Teléfono</th>
                        <th class="px-6 py-4">Grado</th>
                        <th class="px-6 py-4">Acciones</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($students as $student)

                    <tr class="border-b hover:bg-gray-50 transition">

                        <td class="px-6 py-4">
                            {{ $student->id }}
                        </td>

                        <td class="px-6 py-4 font-medium text-gray-800">
                            {{ $student->nombre }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $student->apellido }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $student->fecha_nacimiento }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $student->correo_electronico }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $student->telefono }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $student->grado }}
                        </td>

                        <td class="px-6 py-4">

                            <div class="flex gap-2">

                                <a
                                    href="{{ route('students.edit', $student->id) }}"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-lg text-sm transition"
                                >
                                    Editar
                                </a>

                                <form
                                    action="{{ route('students.destroy', $student->id) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm transition"
                                    >
                                        Eliminar
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="8" class="text-center py-10 text-gray-500">
                            No hay estudiantes registrados
                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</body>
</html>
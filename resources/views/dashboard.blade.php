<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Sistema de Empleados Públicos del Área de Salud en el Táchira</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#f8f9fa] text-[#2c3e50]">
    <nav class="bg-gradient-to-r from-[#1e3c72] to-[#2a5298] p-[1.2rem_2rem] flex justify-between items-center shadow-[0_2px_8px_rgba(0,0,0,0.1)]" role="navigation" aria-label="Navegación principal">
        <h1 class="text-white text-[1.3rem] font-semibold">Sistema de Gestión de Empleados Públicos - Área de Salud Táchira</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="px-[1.5rem] py-[0.6rem] bg-white/15 text-white border border-white/30 rounded-[6px] cursor-pointer transition-all duration-300 text-[0.9rem] font-medium hover:bg-white/25 hover:-translate-y-px">Cerrar Sesión</button>
        </form>
    </nav>

    <div class="max-w-[1200px] mx-8 my-8 lg:mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-[0_2px_8px_rgba(0,0,0,0.08)] mb-8 border-l-4 border-[#28a745]">
            <h2 class="text-[#1e3c72] mb-2 text-[1.5rem] font-semibold">Bienvenido, {{ session('user.email') ?? 'Usuario' }}</h2>
            <p class="text-[#5a6c7d] text-base">Sistema de gestión de nómina de empleados públicos del área de salud</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-8 rounded-lg shadow-[0_2px_8px_rgba(0,0,0,0.08)] border-l-4 border-[#1e3c72] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_4px_12px_rgba(0,0,0,0.12)]">
                <h3 class="text-[#5a6c7d] text-[0.9rem] font-medium mb-2 uppercase tracking-wider">Total Trabajadores</h3>
                <div class="text-[2.5rem] font-bold text-[#1e3c72]">{{ $trabajadores->count() }}</div>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-[0_2px_8px_rgba(0,0,0,0.08)] border-l-4 border-[#1e3c72] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_4px_12px_rgba(0,0,0,0.12)]">
                <h3 class="text-[#5a6c7d] text-[0.9rem] font-medium mb-2 uppercase tracking-wider">Departamentos</h3>
                <div class="text-[2.5rem] font-bold text-[#1e3c72]">{{ $trabajadores->pluck('departamento')->unique()->count() }}</div>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-[0_2px_8px_rgba(0,0,0,0.08)] border-l-4 border-[#1e3c72] transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_4px_12px_rgba(0,0,0,0.12)]">
                <h3 class="text-[#5a6c7d] text-[0.9rem] font-medium mb-2 uppercase tracking-wider">Cargos</h3>
                <div class="text-[2.5rem] font-bold text-[#1e3c72]">{{ $trabajadores->pluck('descripcion_cargo')->unique()->count() }}</div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-[0_2px_8px_rgba(0,0,0,0.08)]">
            <h2 class="text-[#1e3c72] mb-6 text-[1.5rem] font-semibold border-b-2 border-[#e0e0e0] pb-4">Nómina de Trabajadores</h2>
            <table class="w-full border-collapse" role="table" aria-label="Tabla de trabajadores">
                <thead>
                    <tr class="bg-[#f8f9fa]">
                        <th class="p-4 text-left text-[#2c3e50] font-semibold text-[0.9rem] uppercase tracking-wider border-b border-[#e8e8e8]">Cédula</th>
                        <th class="p-4 text-left text-[#2c3e50] font-semibold text-[0.9rem] uppercase tracking-wider border-b border-[#e8e8e8]">Nombre Completo</th>
                        <th class="p-4 text-left text-[#2c3e50] font-semibold text-[0.9rem] uppercase tracking-wider border-b border-[#e8e8e8]">Cargo</th>
                        <th class="p-4 text-left text-[#2c3e50] font-semibold text-[0.9rem] uppercase tracking-wider border-b border-[#e8e8e8]">Departamento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trabajadores as $trabajador)
                        <tr class="hover:bg-[#f8f9fa] even:bg-[#fafafa] even:hover:bg-[#f8f9fa] border-b border-[#e8e8e8]">
                            <td class="p-4">{{ $trabajador->cedula }}</td>
                            <td class="p-4">{{ $trabajador->nombrescompleto }}</td>
                            <td class="p-4">{{ $trabajador->descripcion_cargo }}</td>
                            <td class="p-4">{{ $trabajador->departamento }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-center mt-12 p-6 text-[#7f8c8d] text-[0.85rem] border-t border-[#e0e0e0]">
            <p>Gobierno del Estado Táchira • Sistema de Gestión de Empleados Públicos • Área de Salud</p>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Sistema de Empleados Públicos del Área de Salud en el Táchira</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center p-5 bg-linear-to-br from-[#1e3c72] to-[#2a5298]">
    <div class="w-full max-w-125">
        <div class="text-center mb-8 text-white">
            <h1 class="text-[1.8rem] font-semibold mb-2.5 leading-[1.3]">Sistema de Gestión de Empleados Públicos</h1>
            <p class="text-[0.95rem] opacity-90">Área de Salud en el Táchira</p>
        </div>

        <div class="bg-white p-10 rounded-lg shadow-[0_8px_32px_rgba(0,0,0,0.15)] w-full">
            @if($errors->any())
                <div class="text-[#c0392b] bg-[#fadbd8] p-3 rounded mb-6 text-[0.9rem] border-l-4 border-[#c0392b]" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <div class="bg-[#d4edda] text-[#155724] p-3 rounded mb-6 text-[0.85rem] border-l-4 border-[#28a745]">
                <strong class="block mb-1">Credenciales de prueba:</strong>
                Email: admin@example.com<br>
                Contraseña: password
            </div>

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-[#2c3e50] font-medium text-[0.95rem]">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required autofocus autocomplete="email"
                        class="w-full p-[14px_16px] border-2 border-[#e0e0e0] rounded-md text-base bg-[#fafafa] transition-all duration-300 hover:border-[#1e3c72] focus:outline-none focus:border-[#1e3c72] focus:shadow-[0_0_0_3px_rgba(30,60,114,0.1)] focus:bg-white">
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 text-[#2c3e50] font-medium text-[0.95rem]">Contraseña</label>
                    <input type="password" id="password" name="password" required autocomplete="current-password"
                        class="w-full p-[14px_16px] border-2 border-[#e0e0e0] rounded-md text-base bg-[#fafafa] transition-all duration-300 hover:border-[#1e3c72] focus:outline-none focus:border-[#1e3c72] focus:shadow-[0_0_0_3px_rgba(30,60,114,0.1)] focus:bg-white">
                </div>

                <button type="submit" class="w-full p-4 bg-[#1e3c72] text-white border-none rounded-md text-base font-semibold cursor-pointer transition-all duration-300 hover:bg-[#2a5298] hover:-translate-y-px active:translate-y-0">Iniciar Sesión</button>
            </form>
        </div>

        <div class="text-center mt-5 text-white text-[0.8rem] opacity-80">
            Sistema accesible • Diseño inclusivo
        </div>
    </div>
</body>
</html>

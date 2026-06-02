<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function show(): View
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validación de los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cedula' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Aquí iría la lógica para guardar el usuario en la base de datos
        // Por ahora, solo redirigimos al login con un mensaje de éxito

        return redirect()->route('login')->with('success', 'Registro exitoso. Por favor inicia sesión.');
    }
}

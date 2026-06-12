<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Register extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validación de los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cedula' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);
        // creacion usuario
        $user=User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'cedula' => $validated['cedula'],
            'password' => Hash::make($validated['password']),
        ]);
        //logear el usuario
        Auth::login($user);

        return redirect('/home')->with('success', 'Registro exitoso. Bienvenido a la aplicación.');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{   

    public function show()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        // Validar que el usuario envíe los datos obligatorios
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Auth::attempt busca el email y verifica la contraseña automáticamente
        if (Auth::attempt($credentials)) {
            // Regenerar la sesión por seguridad (evita fijación de sesiones)
            $request->session()->regenerate();

            // Redireccionar al home
            return redirect()->intended('home')->with('success', 'Has iniciado sesión exitosamente.');
        }

        // 3. Si las credenciales fallan, regresar con un error
        return back()->withErrors([
            'email' => 'El correo o la contraseña no coinciden con nuestros registros.',
        ])->onlyInput('email'); // Mantiene el email escrito en el formulario
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Validación simple sin base de datos
        if ($credentials['email'] === 'admin@example.com' && $credentials['password'] === 'password') {
            Session::put('authenticated', true);
            Session::put('user', ['email' => $credentials['email'], 'name' => 'Juan Pérez']);
            return redirect()->route('inicio');
        }

        return back()->withErrors([
            'email' => 'Credenciales incorrectas',
        ]);
    }

    public function logout()
    {
        Session::forget('authenticated');
        Session::forget('user');
        return redirect()->route('login');
    }
}

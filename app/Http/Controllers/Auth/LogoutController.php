<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // 1. Cierra la sesión en el guard de autenticación
        Auth::logout();

        // 2. Invalida la sesión del usuario en el servidor
        $request->session()->invalidate();

        // 3. Regenera el token CSRF para evitar ataques maliciosos
        $request->session()->regenerateToken();

        // 4. Redirige limpiamente a la ruta de login
        return redirect('/')->with('success', 'Has cerrado sesión exitosamente.');
    }
}
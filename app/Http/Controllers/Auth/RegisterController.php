<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;




class RegisterController extends Controller
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
            'cedula' => 'required|integer|exists:datos_trabajador,cedula',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'cedula.exists' => 'La cédula no está registrada en los datos de trabajadores.',
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





        return redirect('/salarios')->with('success', 'Registro exitoso. Bienvenido a la aplicación.');
    }
     public function store(Request $request): RedirectResponse
    {
        $order = Order::findOrFail($request->order_id);

        // Ship the order...

        Mail::to($request->user())->send(new OrderShipped($order));

        return redirect('/orders');
    }
}

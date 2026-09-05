<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\DatosTrabajador;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function show(): View{
    $user = Auth::user();

    $trabajador = DatosTrabajador::where('cedula', $user->cedula)->first();


    return view('home', compact('user', 'trabajador'));
    }
}

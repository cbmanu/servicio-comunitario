<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class InicioController extends Controller
{
    public function show(): View
    {
        return view('inicio');
    }
}

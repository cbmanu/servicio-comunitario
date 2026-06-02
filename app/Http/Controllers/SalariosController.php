<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class SalariosController extends Controller
{
    public function show(): View
    {
        return view('salarios');
    }
}

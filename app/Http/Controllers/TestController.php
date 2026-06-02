<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function index()
    {
        if (!Session::get('authenticated')) {
            return redirect()->route('login');
        }

    //Consulta de pruebas
    $trabajadores=DB::table('datos_trabajador')->get();

        return view('dashboard',compact('trabajadores'));
    }
}

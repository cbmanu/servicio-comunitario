<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
    //Consulta de pruebas
    $trabajadores=DB::table('datos_trabajador')->get();

        return view('home',compact('trabajadores'));
    }
}

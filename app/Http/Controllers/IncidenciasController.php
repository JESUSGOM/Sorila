<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencias;

class IncidenciasController extends Controller
{
    public function index()
    {
        $inci = Incidencias::all();
        return view('incidencia',['Incidencias'=>$inci]);
    }
}

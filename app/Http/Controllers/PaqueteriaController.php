<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paqueteria;

class PaqueteriaController extends Controller
{
    public function index()
    {
        $paquetes = Paqueteria::all();
        return view('paqueteria',['mispaquetes'=>$paquetes]);
    }
}


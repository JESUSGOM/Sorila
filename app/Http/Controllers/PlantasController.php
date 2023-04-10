<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plantas;

class PlantasController extends Controller
{
    public function index()
    {
        $laPlanta = Plantas::all();
        return view('planta',['plantas'=>$laPlanta]);
    }
}

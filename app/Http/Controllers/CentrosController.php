<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centros;

class CentrosController extends Controller
{
    public function index()
    {
        $centro = Centros::all();
        return view('centros',['elCentro'=>$centro]);
    }
}

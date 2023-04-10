<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Telefono;

class TelefonoController extends Controller
{
    public function index()
    {
        $telefonos = Telefono::all();
        return view('telefono',['telefonos'=>$telefonos]);
    }




}

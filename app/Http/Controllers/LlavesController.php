<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Llaves;

class LlavesController extends Controller
{
    public function index()
    {
        $llaves = Llaves::all();
        return view('llaves',['Llaveros'=>$llaves]);
    }
}

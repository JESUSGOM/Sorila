<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retposto;

class RetpostoController extends Controller
{
    public function index()
    {
        $elResposto = Retposto::all();
        return view('retposto',['retposto'=>$elResposto]);
    }
}


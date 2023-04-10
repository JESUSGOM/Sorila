<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movadoj;

class MovadojController extends Controller
{
    public function index(){
        $movimientos = Movadoj::all();
        return view('movadoj',['Movimientos'=>$movimientos]);
    }
}

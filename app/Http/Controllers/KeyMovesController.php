<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeyMoves;

class KeyMovesController extends Controller
{
    public function index()
    {
        $keymo = KeyMoves::all();
        return view('km',['KeyMoves'=>$keymo]);
    }
}

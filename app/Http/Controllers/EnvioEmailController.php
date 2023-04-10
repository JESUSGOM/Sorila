<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnvioEmail;

class EnvioEmailController extends Controller
{
    public function index(){
        $enem = EnvioEmail::all();
        return view('envioemail',['envioemails'=>$enem]);
    }
}

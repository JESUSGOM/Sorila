<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teoefonos;

class TelefonoController extends Controller
{
    public function index(){
        $telefono = Telefono::all();
        return view('telefono',['Telefonos'=>$telefono]);
    }

    public function storeTelefono(Request $request)
    {
        $telefono = new Telefono;
    }

    public function view($telid){
        $telefono = Telefonos::find($telid);

    }
}

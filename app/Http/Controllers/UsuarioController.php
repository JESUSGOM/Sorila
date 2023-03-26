<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuarioController extends Controller
{
    public function index(){
        //return "Bienvenido a la web que listara los usuarios";
        $usuarios = Usuario::all();
        //dd($usuarios);
        return view('usuario',['Usuarios'=>$usuarios]);
    }

    public function create(){

        return view('create');
    }

    public function help($nombre, $apellido=null){
        $date = Now();
        return view('show',['nombres'=>$nombre,'apellidos'=>$apellido,'fecha'=>$date]);
    }

    public function buscoDni($dni){
        $usuario = Usuario::find($dni);
        
        return view('consultarUsuario',['usuDni'=>$dni]);
    }
}

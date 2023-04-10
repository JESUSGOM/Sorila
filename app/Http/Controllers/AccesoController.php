<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Centros;

class AccesoController extends Controller
{
    public function index()
    {
        return view('iniciamos');
    }

    public function store(Request $request)
    {
        //echo $request;
        //echo "<br>";
        //echo $request->usuario;
        $buscoUsuario = $request->usuario;
        //echo "<br>";
        //echo "la clave es = ";
        //echo $request->clave;
        $buscoClave = $request->clave;
        $busclClave = strtoupper($buscoClave);
        //echo "<br>";
        $esteUsuario = Usuario::find($buscoUsuario);
        if($esteUsuario->UsuClave == $busclClave){
            //echo "<br>";
            //echo "Usuario Encontrado ";
            //echo "<br>";
            //echo $esteUsuario->UsuNombre;
            $esNombre = $esteUsuario->UsuNombre;
            //echo "<br>";
            //echo $esteUsuario->UsuApellidoUno;
            $esApellidoUno = $esteUsuario->UsuApellidoUno;
            //echo "<br>";
            //echo $esteUsuario->UsuApellidoDos;
            $esApellidoDos = $esteUsuario->UsuApellidoDos;
            //echo "<br>";
            //echo $esteUsuario->UsuClave;
            $esClave = $esteUsuario->UsuClave;
            //echo "<br>";
            //echo $esteUsuario->UsuCentro;
            $esSuCentro = $esteUsuario->UsuCentro;
            //echo "<br>";
            //echo $esteUsuario->UsuTipo;
            $esSuTipo = $esteUsuario->UsuTipo;
            $elCentroEs = Centros::find($esSuCentro);
            $espacio = " ";
            $coma = ", ";
            $denomino = $elCentroEs->CenDen;

            $arreglo = ['denomino' => $denomino, 'dniusu'=> $buscoUsuario,
                        'apellidoUno' => $esApellidoUno, 'apellidoDos' => $esApellidoDos,
                        'nombre' => $esNombre, 'numeroCentro' => $esSuCentro,
                        'tipoUsu' => $esSuTipo];
            //echo "<br>";
            //echo $elCentroEs->CenDen;
            $textoCabecera = "<b>$elCentroEs->CenDen Usuario-> </b> .$buscoUsuario $espacio
            $esApellidoUno $espacio $esApellidoDos $coma $esNombre ";
            //echo "<br>";
            //echo $textoCabecera;
            //echo "<br>";
            if($esSuTipo == "U"){
                return view('principalU', ['textoCabecera'=>$textoCabecera, 'elArreglo'=> $arreglo]);
            }
            if($esSuTipo == "T"){
                return view('principalT', $arreglo);
            }
            if($esSuTipo == "A"){
                return view('principalA', $arreglo);
            }
            if($esSuTipo == "P"){
                return view('principalP', $arreglo);
            }
        } else {
            echo "<br>";
            echo "Usuario y/o Contraseña no Válidos";
            return redirect()->back();
        }


    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "Usuarios";
    protected $primaryKey = "UsuDni";
    public $incrementing = false;

    public function obtenerUsuarios()
    {
        $todosLosUsuarios = Usuarios::get()->toArray();
    }

    public function buscarUsuario($dni)
    {
        $usuarioEncontrado = Usuarios::get()->
    }
}

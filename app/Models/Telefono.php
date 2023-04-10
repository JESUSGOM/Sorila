<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;
    protected $table = "Telefonos";
    protected $primaryKey = "TelId";

    public function obtenerTelefonos()
    {
        $todosLosTelefonos = Telefono::get()->toArray();
    }
}

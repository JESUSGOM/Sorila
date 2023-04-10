<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paqueteria extends Model
{
    use HasFactory;
    protected $table = "Paqueteria";
    protected $primaryKey = "PktId";
    public $incrementing = true;

    public function obtenerPaqueteria(){
        $todosLosPaquetes = Paqueteria::get()->toArray();

    }
}

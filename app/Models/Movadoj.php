<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movadoj extends Model
{
    use HasFactory;
    protected $table = "Movadoj";
    protected $primaryKey = "MovOrden";
    public $incrementing = true;

    public function obtenerMovadoj()
    {
        $todosLosMovimientos =Movadoj::get()->toArray();
    }
}

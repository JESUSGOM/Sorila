<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantas extends Model
{
    use HasFactory;
    protected $table = "Plantas";
    protected $primaryKey = "PltId";

    public function obtenerPlanta()
    {
        $todasLasPlantas = Plantas::get()->toArray();
    }
}

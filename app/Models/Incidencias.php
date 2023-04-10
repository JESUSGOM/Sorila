<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencias extends Model
{
    use HasFactory;
    protected $table = "Incidencias";
    protected $primaryKey = "IncId";

    public function index()
    {
        $todasLasIncidencias = Incidencias::get()->toArray();
    }
}

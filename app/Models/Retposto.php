<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retposto extends Model
{
    use HasFactory;
    protected $table = "Retposto";
    protected $primaryKey = "RptId";

    public function obtenerRetpoosto()
    {
        $todosLosResposto = Retposto::get()->toArray();
    }
}

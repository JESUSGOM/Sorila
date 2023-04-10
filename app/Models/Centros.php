<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centros extends Model
{
    use HasFactory;
    protected $table = "Centros";
    protected $primaryKey = "CenId";

    public function index(){
        $todasLasLlaves = Centros::get()->toArray();
    }

}

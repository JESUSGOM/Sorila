<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llaves extends Model
{
    use HasFactory;
    protected $table = "Llaves";
    protected $primaryKey = "LlvOrden";

    public function index(){
        $todasLasLlaves = Llaves::get()->toArray();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyMoves extends Model
{
    use HasFactory;
    protected $table = "KeyMoves";
    protected $primaryKey = "KeyOrden";

    public function index(){
        $todasLasKeyMov = KeyMoves::get()->toArray();
    }

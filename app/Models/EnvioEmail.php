<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnvioEmail extends Model
{
    use HasFactory;
    protected $table = "EnvioEmail";
    protected $primaryKey = "EnEmId";

    public function index()
    {
        $todosLosEmail = EnvioEmail::get()->toArray();
    }
}

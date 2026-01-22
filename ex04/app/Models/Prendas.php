<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prendas extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio'
    ];
}

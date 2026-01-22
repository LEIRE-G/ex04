<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prendas extends Model
{
    protected $table = 'prendas';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio'
    ];
}

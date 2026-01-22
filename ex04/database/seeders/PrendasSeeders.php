<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrendasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //crear 3 prendas 
        Prenda::create ([
            'nombre' => 'Camiseta',
            'descripcion' => 'Camiseta manga corta blanca',
            'precio' => 10.99
        ]);
        Prenda::create ([
            'nombre' => 'Pantalones',
            'descripcion' => 'Pantalones vaqueros azules',
            'precio' => 25.99
        ]);
        Prenda::create ([
            'nombre' => 'Chaqueta', 
            'descripcion' => 'Chaqueta de borreguito',
            'precio' => 42.99
        ]);
    }
}

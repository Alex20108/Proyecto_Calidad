<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria')->insert([
            ['Nombre' => 'Electrónica', 'Estado' => true],
            ['Nombre' => 'Ropa', 'Estado' => true],
            ['Nombre' => 'Hogar', 'Estado' => true],
            ['Nombre' => 'Deportes', 'Estado' => true],
            ['Nombre' => 'Juguetes', 'Estado' => true],
            ['Nombre' => 'Libros', 'Estado' => true],
            ['Nombre' => 'Accesorios', 'Estado' => true],
            ['Nombre' => 'Computación', 'Estado' => true],
            ['Nombre' => 'Belleza', 'Estado' => true],
            ['Nombre' => 'Automotriz', 'Estado' => true],
        ]);
    }
}

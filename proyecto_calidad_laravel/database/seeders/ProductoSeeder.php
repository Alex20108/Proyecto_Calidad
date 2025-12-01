<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                DB::table('producto')->insert([
            [
                'Nombre' => 'Smartphone X100',
                'Precio' => 1200000,
                'Material' => 'Vidrio y Aluminio',
                'Descripcion' => 'Teléfono inteligente de alta gama.',
                'ID_Categoria' => 1, // Electrónica
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Camiseta Deportiva',
                'Precio' => 45000,
                'Material' => 'Algodón',
                'Descripcion' => 'Camiseta cómoda para entrenamiento.',
                'ID_Categoria' => 2, // Ropa
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Silla de Madera',
                'Precio' => 150000,
                'Material' => 'Madera Natural',
                'Descripcion' => 'Silla resistente para comedor.',
                'ID_Categoria' => 3, // Hogar
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Balón de Fútbol Pro',
                'Precio' => 90000,
                'Material' => 'Cuero Sintético',
                'Descripcion' => 'Balón profesional aprobado para torneos.',
                'ID_Categoria' => 4, // Deportes
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Carro RC Turbo',
                'Precio' => 180000,
                'Material' => 'Plástico ABS',
                'Descripcion' => 'Carro a control remoto de alta velocidad.',
                'ID_Categoria' => 5, // Juguetes
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Libro: Aprende Laravel',
                'Precio' => 65000,
                'Material' => 'Papel',
                'Descripcion' => 'Guía completa para aprender Laravel desde cero.',
                'ID_Categoria' => 6, // Libros
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Gorra Classic',
                'Precio' => 30000,
                'Material' => 'Tela Sintética',
                'Descripcion' => 'Gorra ajustable unisex.',
                'ID_Categoria' => 7, // Accesorios
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Mouse Gamer RGB',
                'Precio' => 80000,
                'Material' => 'Plástico y LED RGB',
                'Descripcion' => 'Mouse gamer con 6 botones programables.',
                'ID_Categoria' => 8, // Computación
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Crema Facial Hidratante',
                'Precio' => 25000,
                'Material' => 'Base Natural',
                'Descripcion' => 'Crema hidratante para uso diario.',
                'ID_Categoria' => 9, // Belleza
                'Estado' => 1,
            ],
            [
                'Nombre' => 'Aceite para Motor 5W-30',
                'Precio' => 38000,
                'Material' => 'Lubricante',
                'Descripcion' => 'Aceite premium para motores de automóvil.',
                'ID_Categoria' => 10, // Automotriz
                'Estado' => 1,
            ],
        ]);
    }
}

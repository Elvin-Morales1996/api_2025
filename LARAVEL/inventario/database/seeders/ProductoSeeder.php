<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crea 5 productos de ejemplo
        Productos::create([
            'name' => 'Laptop Gamer',
            'description' => 'Potente laptop para juegos con tarjeta gráfica de última generación.',
            'unit_price' => 1200.00,
            'stock' => 15,
        ]);

        Productos::create([
            'name' => 'Teclado Mecánico RGB',
            'description' => 'Teclado con switches mecánicos y retroiluminación RGB personalizable.',
            'unit_price' => 75.50,
            'stock' => 50,
        ]);

        Productos::create([
            'name' => 'Mouse Inalámbrico Ergonómico',
            'description' => 'Mouse cómodo para largas sesiones de trabajo, con conectividad inalámbrica.',
            'unit_price' => 30.25,
            'stock' => 100,
        ]);

        Productos::create([
            'name' => 'Monitor Curvo 27 pulgadas',
            'description' => 'Monitor con pantalla curva ideal para inmersión en juegos y multimedia.',
            'unit_price' => 350.00,
            'stock' => 20,
        ]);

        Productos::create([
            'name' => 'Auriculares con Cancelación de Ruido',
            'description' => 'Auriculares de alta fidelidad con tecnología de cancelación activa de ruido.',
            'unit_price' => 150.00,
            'stock' => 35,
        ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\Proveedores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           //name, email, phone
         // Crea 5 productos de ejemplo
        Proveedores::create([
            'name' => 'Laptop Gamer',
            'email' => 'laptopgamer@example.com',
            'phone' => '123-456-7890',
        ]);

        Proveedores::create([
            'name' => 'Teclado Mecánico RGB',
            'email' => 'tecladomecanico@example.com',
            'phone' => '123-456-7891',
        ]);

        Proveedores::create([
            'name' => 'Mouse Inalámbrico Ergonómico',
            'email' => 'mouseergonomico@example.com',
            'phone' => '123-456-7892',
        ]);

        Proveedores::create([
            'name' => 'Auriculares con Cancelación de Ruido',
            'email' => 'auriculares@example.com',
            'phone' => '123-456-7894',
        ]);

        Proveedores::create([
            'name' => 'Auriculares con Cancelación de Ruido',
            'email' => 'auricularescancelacion@example.com',
            'phone' => '123-456-7894',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Productos;
use App\Models\Proveedores;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProductoSeeder::class); // Agrega esta línea
        $this->call(ProveedoresSeeder::class); // Agrega esta línea
        // User::factory(10)->create();
        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}

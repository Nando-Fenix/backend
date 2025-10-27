<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Producto::create([
            'nombre' => 'Camiseta deportiva',
            'precio' => 85.90

        ]);

        Producto::create([
            'nombre' => 'Pantalón urban fit',
            'precio' => 120.50

        ]);

        Producto::create([
            'nombre' => 'Zapatillas running',
            'precio' => 299.99

        ]);

        Producto::create([
            'nombre' => 'Chaqueta impermeable',
            'precio' => 250.00

        ]);

        Producto::create([
            'nombre' => 'Gorra con visera',
            'precio' => 49.90

        ]);

        Producto::create([
            'nombre' => 'Calcetines deportivos',
            'precio' => 15.00

        ]);

        Producto::create([
            'nombre' => 'Short entrenamiento',
            'precio' => 70.25

        ]);

        Producto::create([
            'nombre' => 'Sudadera algodón premium',
            'precio' => 180.80

        ]);

        Producto::create([
            'nombre' => 'Mochila táctica',
            'precio' => 220.00

        ]);

        Producto::create([
            'nombre' => 'Botella térmica 1L',
            'precio' => 35.50

        ]);

    }
}

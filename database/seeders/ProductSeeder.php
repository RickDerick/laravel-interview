<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample product.',
            'price' => 19.99,
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'Another sample product.',
            'price' => 29.99,
        ]);
        Product::create([
            'name' => 'Sample Product 3',
            'description' => 'Yet another sample product.',
            'price' => 39.99,
        ]);

    }
}

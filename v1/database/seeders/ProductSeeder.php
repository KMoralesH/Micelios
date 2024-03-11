<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(2)->create([
            'category_id' => '1',
            'product_name' => 'Honda 10w40',
        ]);

        Product::factory(2)->create([
            'category_id' => '2',
            'product_name' => 'Motor Toyota',
        ]);
    }
}

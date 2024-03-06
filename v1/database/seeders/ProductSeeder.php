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
        Product::factory()->create([
            'product_name' => 'Honda 10w40',
            'product_price_buy' => 4500,
            'product_price_sail' => (4500 * 2.50),
            'product_stock' => 10
        ]);
    }
}

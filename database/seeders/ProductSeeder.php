<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [];

        for ($i = 1; $i <= 50; $i++) {
            $products[] = [
                'code' => 'PROD-' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'name' => 'Product ' . $i,
                'quantity' => rand(10, 100),
                'price' => rand(100, 1000),
                'description' => 'Description for Product ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('products')->insert($products);
    }
}

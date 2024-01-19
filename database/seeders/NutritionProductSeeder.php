<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NutritionProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products=Product::all();

        foreach ($products as $product) {
            $product->nutritions()->attach([
                1 => ['percentage' => 10],
                2 => ['percentage' => 10],
                3 => ['percentage' => 10],
                4 => ['percentage' => 10],
                5 => ['percentage' => 10],
                6 => ['percentage' => 10],
                7 => ['percentage' => 10],
                8 => ['percentage' => 10],

            ]);
        }
    }
}

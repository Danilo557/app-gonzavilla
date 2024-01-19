<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Feature;
use App\Models\Line;
use App\Models\Nutrition;
use App\Models\Product;
use App\Models\Size;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name'=>'yolo',
            'email'=>'yolo@yolo.com',
            'password'=> bcrypt('123456789')
        ]);
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        $this->call(LineSeeder::class);
        Category::factory(5)->create();
        Subcategory::factory(10)->create();
        Feature::factory(5)->create();
        Nutrition::factory(8)->create();
        Size::factory(8)->create();

        $this->call(ProductSeeder::class);
        $this->call(NutritionProductSeeder::class);

    }
}

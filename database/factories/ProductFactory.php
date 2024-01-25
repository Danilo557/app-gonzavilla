<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Feature;
use App\Models\Line;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name= $this->faker->unique()->words(5, true);
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'description'=>$this->faker->text(2000),
            'suggested_use'=>$this->faker->text(2000),
            'ingredients'=>$this->faker->text(2000),
            'line_id'=> Line::all()->random()->id,
            'category_id'=> Category::all()->random()->id,
            'subcategory_id'=> SubCategory::all()->random()->id,
            'feature_id'=> Feature::all()->random()->id,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Line;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Line>
 */
class LineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name= $this->faker->unique()->words(3, true);
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'status'=>$this->faker->randomElement([Line::BORRADOR,Line::PUBLICADO]),
        ];
    }
}

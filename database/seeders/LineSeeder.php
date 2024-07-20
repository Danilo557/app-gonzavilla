<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Line;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Nucleos',
            'Rooster',
            'Chicken',
            'Hen',
            'Sheep',
            'Pig',
            'Bovine',
            'Bull',
            'Milk',
            'Horse',
            'Rabbit',
            'Turkey',
            'Deer',

        ];

        foreach ($names as $name) {
            Line::create(['name' => $name, 'slug' => Str::slug($name)]);
        }

        $lines=Line::all();

        foreach ($lines as $line) {
            

            Image::factory(4)->create([
                'imageable_id' => $line->id,
                'imageable_type' => Line::class
            ]);
        }
    }
}

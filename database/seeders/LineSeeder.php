<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Line;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Line::factory(5)->create()->each(function(Line $line){
            Image::factory(4)->create([
                'imageable_id'=>$line->id,
                'imageable_type'=>Line::class
            ]);
        });
    }
}

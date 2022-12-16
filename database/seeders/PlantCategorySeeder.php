<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlantCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plant_categories')->insert([
            'name' => 'Tomate',
            'description' => 'El tomate es bueno',
            'water_period' => '3'
        ]);

        DB::table('plant_categories')->insert([
            'name' => 'Patata',
            'description' => 'La patata es bueno',
            'water_period' => '4'
        ]);

        DB::table('plant_categories')->insert([
            'name' => 'Amapola',
            'description' => 'La amapola esta buena',
            'water_period' => '5'
        ]);

        DB::table('plant_categories')->insert([
            'name' => 'Rosa',
            'description' => 'La rosa esta buena',
            'water_period' => '4'
        ]);



    }
}

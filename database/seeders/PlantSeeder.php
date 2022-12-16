<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants')->insert([
            'name' => null,
            'water_date' => null,
            'category_id' => '1',
            'garden_id' => '1'
        ]);
        DB::table('plants')->insert([
            'name' => null,
            'water_date' => null,
            'category_id' => '2',
            'garden_id' => '1'
        ]);
        DB::table('plants')->insert([
            'name' => null,
            'water_date' => null,
            'category_id' => '3',
            'garden_id' => '1'
        ]);
        DB::table('plants')->insert([
            'name' => null,
            'water_date' => null,
            'category_id' => '1',
            'garden_id' => '2'
        ]);
        DB::table('plants')->insert([
            'name' => null,
            'water_date' => null,
            'category_id' => '2',
            'garden_id' => '2'
        ]);
        DB::table('plants')->insert([
            'name' => null,
            'water_date' => null,
            'category_id' => '3',
            'garden_id' => '2'
        ]);

        DB::table('plants')->insert([
            'name' => null,
            'water_date' => null,
            'category_id' => '1',
            'garden_id' => '3'
        ]);
        DB::table('plants')->insert([
            'name' => null,
            'water_date' => null,
            'category_id' => '2',
            'garden_id' => '3'
        ]);
        DB::table('plants')->insert([
            'name' => null,
            'water_date' => null,
            'category_id' => '3',
            'garden_id' => '3'
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GardenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gardens')->insert([
            'name' => 'Huerto 1',
            'user_id' => '1'
        ]);
        DB::table('gardens')->insert([
            'name' => 'Huerto 1',
            'user_id' => '2'
        ]);
        DB::table('gardens')->insert([
            'name' => 'Huerto 1',
            'user_id' => '3'
        ]);

    }
}

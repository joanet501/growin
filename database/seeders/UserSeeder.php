<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'joan',
            'email' => 'joan@example.com',
            'password' => Hash::make('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => 'miguel angel',
            'email' => 'miguelangel@example.com',
            'password' => Hash::make('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => 'arjun',
            'email' => 'arjun@example.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}

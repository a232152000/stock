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
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'jeff',
            'email' => 'a232152000@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => '2023-03-25 14:15:00',
            'updated_at' => '2023-03-25 14:15:00'
        ]);
    }
}

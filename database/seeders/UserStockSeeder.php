<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_stocks')->insert([
            [
                'user_id' => 1,
                'stock_id' => 1,
                'created_at' => '2023-05-06 13:25:00',
                'updated_at' => '2023-05-06 13:25:00'
            ],
            [
                'user_id' => 1,
                'stock_id' => 2,
                'created_at' => '2023-05-06 13:25:00',
                'updated_at' => '2023-05-06 13:25:00'
            ]
        ]);
    }
}

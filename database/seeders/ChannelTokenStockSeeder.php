<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelTokenStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('channel_token_stocks')->insert([
            [
                'id' => 1,
                'channel_token_id' => 1,
                'stock_id' => 1,
                'created_at' => '2023-03-25 14:15:00',
                'updated_at' => '2023-03-25 14:15:00'
            ],
            [
                'id' => 2,
                'channel_token_id' => 1,
                'stock_id' => 2,
                'created_at' => '2023-03-25 14:15:00',
                'updated_at' => '2023-03-25 14:15:00'
            ]
        ]);
    }
}

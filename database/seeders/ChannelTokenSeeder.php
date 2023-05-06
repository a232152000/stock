<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelTokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('channel_tokens')->insert([
            'user_id' => 1,
            'token' => 'U55cfec471cde3a870a91c5c372258fd1',
            'channel' => 'line',
            'created_at' => '2023-03-25 14:15:00',
            'updated_at' => '2023-03-25 14:15:00'
        ]);
    }
}

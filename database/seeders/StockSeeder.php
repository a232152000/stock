<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stocks')->insert([
            [
                'id' => 1,
                'code' => '0050',
                'ex' => 'tse',
                'n' => '元大台灣50',
                'nf' => '元大台灣卓越50證券投資信託基金',
                'z' => 118.05,
                'o' => 118,
                'h' => 118.15,
                'l' => 117.7,
                'y' => 119.15,
                'final_at' => '2022-08-10 10:54:10',
                'created_at' => '2023-03-25 14:15:00',
                'updated_at' => '2023-03-25 14:15:00'
            ],
            [
                'id' => 2,
                'code' => '00881',
                'ex' => 'tse',
                'n' => '國泰台灣5G+',
                'nf' => '國泰台灣5G PLUS ETF證券投資信託基金',
                'z' => 14.75,
                'o' => 14.74,
                'h' => 14.76,
                'l' => 14.69,
                'y' => 14.86,
                'final_at' => '2022-08-10 10:54:10',
                'created_at' => '2023-03-25 14:15:00',
                'updated_at' => '2023-03-25 14:15:00'
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    public function run(): void
    {
        for ($trx = 1; $trx <= 10; $trx++) {

            for ($i = 1; $i <= 3; $i++) {

                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $trx,
                    'barang_id' => rand(1,10),
                    'harga' => rand(1000,50000),
                    'jumlah' => rand(1,5),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

            }
        }
    }
}
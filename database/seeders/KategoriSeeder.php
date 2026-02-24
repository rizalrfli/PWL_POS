<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            ['kategori_kode'=>'KTG01','kategori_nama'=>'Makanan','created_at'=>now(),'updated_at'=>now()],
            ['kategori_kode'=>'KTG02','kategori_nama'=>'Minuman','created_at'=>now(),'updated_at'=>now()],
            ['kategori_kode'=>'KTG03','kategori_nama'=>'Snack','created_at'=>now(),'updated_at'=>now()],
            ['kategori_kode'=>'KTG04','kategori_nama'=>'Elektronik','created_at'=>now(),'updated_at'=>now()],
            ['kategori_kode'=>'KTG05','kategori_nama'=>'ATK','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
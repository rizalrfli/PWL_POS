<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_barang')->insert([
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Beras Premium 5kg',
                'harga_jual' => 68000,
                'harga_beli' => 60000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Gula Pasir 1kg',
                'harga_jual' => 16000,
                'harga_beli' => 14000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Air Mineral 600ml',
                'harga_jual' => 5000,
                'harga_beli' => 3500,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Teh Botol 350ml',
                'harga_jual' => 6000,
                'harga_beli' => 4500,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Keripik Kentang',
                'harga_jual' => 12000,
                'harga_beli' => 9000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Coklat Batang',
                'harga_jual' => 13000,
                'harga_beli' => 10000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Lampu LED 10W',
                'harga_jual' => 28000,
                'harga_beli' => 23000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Stop Kontak 4 Lubang',
                'harga_jual' => 35000,
                'harga_beli' => 30000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Pulpen Hitam',
                'harga_jual' => 4000,
                'harga_beli' => 2500,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Buku Tulis 40 Lembar',
                'harga_jual' => 6000,
                'harga_beli' => 4500,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
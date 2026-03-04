<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            [
                'supplier_kode'    => 'SUP001',
                'supplier_nama'    => 'PT Sumber Makmur',
                'supplier_alamat'  => 'Jl. Raya Malang No. 10, Malang',
                'supplier_telepon' => '0341-123456',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'supplier_kode'    => 'SUP002',
                'supplier_nama'    => 'CV Maju Bersama',
                'supplier_alamat'  => 'Jl. Diponegoro No. 55, Surabaya',
                'supplier_telepon' => '031-654321',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'supplier_kode'    => 'SUP003',
                'supplier_nama'    => 'UD Jaya Abadi',
                'supplier_alamat'  => 'Jl. Pemuda No. 7, Semarang',
                'supplier_telepon' => '024-789012',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'supplier_kode'    => 'SUP004',
                'supplier_nama'    => 'PT Berkah Sentosa',
                'supplier_alamat'  => 'Jl. Sudirman No. 100, Jakarta',
                'supplier_telepon' => '021-345678',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'supplier_kode'    => 'SUP005',
                'supplier_nama'    => 'CV Nusantara Jaya',
                'supplier_alamat'  => 'Jl. Ahmad Yani No. 30, Bandung',
                'supplier_telepon' => '022-901234',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
        ]);
    }
}

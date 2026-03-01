<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'barang_id' => $i,
                'kategori_id' => ceil($i / 3), // Membagi rata ke 5 kategori
                'barang_kode' => 'BRG' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'barang_nama' => 'Barang Ke-' . $i,
                'harga_beli' => 1000 * $i,
                'harga_jual' => 1200 * $i,
            ];
        }
        DB::table('m_barang')->insert($data);
    }
}

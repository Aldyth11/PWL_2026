<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat 10 Transaksi Penjualan
        for ($i = 1; $i <= 10; $i++) {
            $penjualan_id = DB::table('t_penjualan')->insertGetId([
                'user_id' => 1,
                'pembeli' => 'Pelanggan ' . $i,
                'penjualan_kode' => 'TRX' . $i,
                'penjualan_tanggal' => now(),
            ]);

            // Buat 3 Detail Barang per Transaksi
            for ($j = 1; $j <= 3; $j++) {
                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => rand(1, 15),
                    'harga' => 15000,
                    'jumlah' => rand(1, 5),
                ]);
            }
        }
    }
}

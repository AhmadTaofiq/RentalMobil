<?php

namespace Database\Seeders;

use App\Models\Penyewa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penyewa::create([
            'nik_user' => '12345678',
            'plat_mobil' => 'D 2918 UDX',
            'tgl_peminjaman' => '2021-10-23',
            'tgl_pengembalian' => '2021-10-26',
            'total_hari' => '3',
            'total_harga' => 'Rp 600,000',
            'transaksi_pembayaran' => 'Cash',
        ]);
    }
}

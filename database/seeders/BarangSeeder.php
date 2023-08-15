<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'plat_mobil' => 'D 15 UDX',
            'jenis_kendaraan' => 'Mobil',
            'merek' => 'Honda',
            'model' => 'Sedan',
            'warna' => 'hitam glossy',
            'kapasitas_penumpang' => '8',
            'harga_sewa' => 'Rp 200.000 / Hari',
        ]);
    }
}

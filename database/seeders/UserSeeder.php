<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nik_user' => '12345678',
            'nama_lengkap' => 'Ahmad Taofiq Permana',
            'jenis_kelamin' => 'Laki-Laki',
            'nomor_tlp' => '0856713123',
            'alamat_lengkap' => 'Margaasih, Jl JatiLuhur',
            'foto_ktp' => 'image',
            'foto_sim' => 'image',
            'email' => 'ahmad@gmail.com',
            'password' => 'ahmad123',
            'confirm_password' => 'ahmad123',
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->integer('nik_user');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->integer('nomor_tlp');
            $table->string('alamat_lengkap');
            $table->string('foto_ktp');
            $table->string('foto_sim');
            $table->string('email');
            $table->string('password');
            $table->string('confirm_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};

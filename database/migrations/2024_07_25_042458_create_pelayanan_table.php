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
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pelayanan');
            $table->string('kode_pelayanan');
            $table->string('nama');
            $table->string('nik');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('tempat_tgl_lahir');
            $table->string('no_wa');
            $table->string('pekerjaan');
            $table->string('tempat_tinggal');
            $table->string('keperluan');
            $table->string('tujuan');
            $table->text('keterangan_lain')->nullable();
            $table->string('mengetahui')->default('Kepala Desa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelayanan');
    }
};
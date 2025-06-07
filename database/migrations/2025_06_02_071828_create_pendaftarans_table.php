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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 250);
            $table->integer('no_induk');
            $table->integer('NISN');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat', 250);
            $table->string('nama_ayah', 250);
            $table->string('nama_ibu', 250);
            $table->string('pekerjaan_ayah', 250);
            $table->string('pekerjaan_ibu', 250);
            $table->string('alamat_ibu', 250);
            $table->string('alamat_ayah', 250);
            $table->integer('no_telp');
            $table->string('jenjang_pendidikan');
            $table->string('kategori_santri');
            // $table->string('akte');
            // $table->string('kk')->nullable();
            // $table->string('ijazah')->nullable();
            // $table->string('ktp')->nullable();
            // $table->string('bpjs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};

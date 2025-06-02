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
            $table->integer('noInduk');
            $table->integer('NISN');
            $table->date('tanggalLahir');
            $table->string('jenisKelamin', 250);
            $table->string('alamat', 250);
            // $table->string('namaAyah', 250);
            // $table->string('namaIbu', 250);
            // $table->string('pekerjaanAyah', 250);
            // $table->string('pekerjaanIbu', 250);
            // $table->string('alamataIbu', 250);
            // $table->string('alamataAyah', 250);
            // $table->integer('noTelp');
            // $table->string('jenjangPendidikan', 250);
            // $table->boolean('akte')->default(false);
            // $table->boolean('kk')->default(false);
            // $table->boolean('ijazah')->default(false);
            // $table->boolean('ktp')->default(false);
            // $table->boolean('bpjs')->default(false);
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

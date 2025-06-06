<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable =['nama','no_induk','NISN','tanggal_lahir','jenis_kelamin','alamat','nama_ayah','nama_ibu','pekerjaan_ayah','pekerjaan_ibu','alamat_ayah','alamat_ibu','no_telp','jenjang_pendidikan','kategori_santri','akte','kk','ijazah','ktp','bpjs' ];
}

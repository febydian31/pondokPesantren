<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
    protected $fillable =['nama', 'email', 'no_telp','nominal','metode_pdembayaran', 'pesan'];
}

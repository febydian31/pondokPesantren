<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'name', 'no_telp', 'nominal', 'message','category'
    ];
}

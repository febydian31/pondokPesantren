<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable =['day', 'time', 'activity','mentor', 'location'];
}

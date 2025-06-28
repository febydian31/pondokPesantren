<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['date', 'title', 'content', 'image', 'slug'];

    
}

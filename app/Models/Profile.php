<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    protected $fillable = [
        'history',
        'vision',
        'mission',
        'programs',
        'donations',
        'social_media',
        'organizational_structure',
        'ig', 'fb', 'email', 'wa', 'location', 'tiktok','vidio'
    ];

    protected $casts = [
        'history' => 'array',
        'vision' => 'array',
        'mission' => 'array',
        'programs' => 'array',
        'donations' => 'array',
        'social_media' => 'array',
    ];
}


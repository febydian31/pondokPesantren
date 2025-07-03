<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'no_induk', 'nisn', 'birth', 'gender', 'address',
        'father_name', 'mother_name', 'father_address', 'mother_address',
        'father_job', 'mother_job', 'no_telp', 'education_level',
        'student_category'
    ];
}

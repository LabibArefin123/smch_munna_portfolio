<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sex',
        'phone',
        'age',
        'description',
        'image',
        'recommended',
        'recommended_doctor',
        'recommendation_information',
    ];

    protected $casts = [
        'recommended' => 'boolean',
    ];
}

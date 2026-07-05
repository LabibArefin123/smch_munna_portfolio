<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientDescriptionImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}

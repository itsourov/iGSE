<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeterReading extends Model
{
    use HasFactory;
    protected $fillable = [
        'electricity_day',
        'electricity_night',
        'gas',
        'date',
        'user_id',

    ];

    // Relationship To User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentPrice extends Model
{
    use HasFactory;
    protected $fillable = [
        'electricity_day',
        'electricity_night',
        'gas',
        'standing_charge',

    ];
}
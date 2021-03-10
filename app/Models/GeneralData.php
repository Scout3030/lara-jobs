<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralData extends Model
{
    use HasFactory;

    protected $fillable = [
        'footer_text', 'social_network', 'phone_number', 'email', 'address'
    ];

    protected $casts = [
        'social_network' => 'array'
    ];
}

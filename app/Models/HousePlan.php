<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HousePlan extends Model
{
    protected $fillable = [
        'title', 'type', 'location', 'price', 'bedrooms', 'bathrooms', 'size',
        'status', 'description', 'features', 'images', 'contact',
    ];
    
    protected $casts = [
        'features' => 'array',
        'images' => 'array',
    ];
}

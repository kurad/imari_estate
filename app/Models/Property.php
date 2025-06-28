<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title', 'type', 'location', 'price', 'bedrooms', 'bathrooms', 'size',
        'status', 'description', 'features', 'neighborhood', 'images', 'contact', 'created_by', 'video_link'
    ];
    
    protected $casts = [
        'features' => 'array',
        'images' => 'array',
    ];
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected $fillable = [
        'section', 'title', 'subtitle', 'content', 'image', 'data', 'order', 'is_active'
    ];

    protected $casts = [
        'data' => 'array',
        'is_active' => 'boolean'
    ];
}

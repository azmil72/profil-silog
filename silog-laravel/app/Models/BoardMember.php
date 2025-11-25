<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{
    protected $fillable = [
        'name',
        'position',
        'type',
        'profile',
        'image',
        'experiences',
        'educations',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'experiences' => 'array',
        'educations' => 'array',
        'is_active' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeDireksi($query)
    {
        return $query->where('type', 'direksi');
    }

    public function scopeKomisaris($query)
    {
        return $query->where('type', 'komisaris');
    }
}

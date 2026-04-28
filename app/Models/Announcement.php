<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//clickable announcement
use Illuminate\Support\Str;

class Announcement extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'is_active',
        'is_featured',
        'published_at',
        'expires_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'expires_at' => 'datetime',
    ];

    // clicable announcement



}
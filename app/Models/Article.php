<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $fillable = [
    'title',
    'slug',
    'content',
    'image',
    'is_published',
    'published_at',
    'user_id',
];

public function user()
{
    return $this->belongsTo(User::class);
}

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['slug', 'title', 'excerpt', 'body', 'published_at'];

    protected $casts = [
        'published_at' => 'date',
    ];
}

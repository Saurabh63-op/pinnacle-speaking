<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'slug', 'title', 'icon', 'short', 'long', 'duration', 'audience', 'outcomes',
    ];

    protected $casts = [
        'outcomes' => 'array',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected array $fillable = [
        'title',
        'body',
        'is_public',
        'published_at',
    ];

    protected array $casts = [
        'is_public' => 'bool',
        'published_at' => 'datetime',
    ];
}

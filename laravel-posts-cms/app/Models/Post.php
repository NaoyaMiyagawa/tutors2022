<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'is_public',
        'published_at',
    ];

    protected $casts = [
        'is_public' => 'bool',
        'published_at' => 'datetime',
    ];

    /**
     * Scope ｜ 公開状態
     * @return Builder
     */
    public function scopePublic(Builder $query): Builder
    {
        return $query->where('is_public', true);
    }

    /**
     * Scope ｜ 公開記事一覧取得
     * @return Builder
     */
    public function scopePublicList(Builder $query): Builder
    {
        return $query
            ->public()
            ->latest('published_at')
            ->paginate(10);
    }

    /**
     * Scope ｜ 公開記事をIDで取得
     * @return Builder
     */
    public function scopePublicFindById(Builder $query, int $id): Builder
    {
        return $query->public()->findOrFail($id);
    }
}

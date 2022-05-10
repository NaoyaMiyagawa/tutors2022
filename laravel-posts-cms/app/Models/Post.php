<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Pagination\LengthAwarePaginator;

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
     * boot
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();

        // 保存時user_idをログインユーザーに設定
        self::saving(function ($post) {
            $post->user_id = \Auth::id();
        });
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * 公開日を年月日で表示
     * @return string
     */
    public function getPublishedFormatAttribute(): string
    {
        return $this->published_at->format('Y年m月d日');
    }

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
     * @return LengthAwarePaginator
     */
    public function scopePublicList(Builder $query): LengthAwarePaginator
    {
        return $query
            ->public()
            ->latest('published_at')
            ->paginate(10);
    }

    /**
     * Scope ｜ 公開記事をIDで取得
     * @return Post
     */
    public function scopePublicFindById(Builder $query, int $id): Post
    {
        return $query->public()->findOrFail($id);
    }
}

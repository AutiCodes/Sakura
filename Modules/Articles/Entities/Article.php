<?php

namespace Modules\Articles\Entities;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Articles\Entities\Category;
use Modules\News\Enums\ArticleStatusEnum;

class Article extends Model
{
    use HasFactory;
    protected $table = "sk_articles";

    protected $fillable = [
      'id',
      'author_id',
      'category',
      'publish_date',
      'title',
      'content',
      'image',
      'slug',                  
      'status'
    ];

    public function categories(): BelongsToMany
    {
      return $this->belongsToMany(Category::class, 'sk_article_categorys');
    }

    /**
     * Scope a query to only include published articles.
     * 
     * @param Builder $query
     * @return Builder
     */
    public function scopePublished(Builder $query): Builder
    {
      return $query->where('status', ArticleStatusEnum::PUBLISHED);
    }

    /**
     * Define the key on which articles should be routed with implicit model binding.
     */
    public function getRouteKeyName(): string
    {
      return 'slug';
    }
}
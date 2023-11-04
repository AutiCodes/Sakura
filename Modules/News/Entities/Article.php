<?php

namespace Modules\News\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\News\Entities\Category;

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
      'slug',                  
    ];

    public function categories(): BelongsToMany
    {
      return $this->belongsToMany(Category::class, 'sk_article_categorys');
    }
    
}

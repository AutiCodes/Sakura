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
    public $timestamps = false;

    protected $fillable = [
      'id',
      'author_id',
      'category',
      'publish_date',
      'title',
      'content',
      'slug',                  
    ];

    public static function updateArticleViewCount($articleSlug, $currentViewCount)
    {
      $article = Article::where('slug', $articleSlug)->first();
      $article->view_count = $currentViewCount + 1;
      $article->save();
    }

    public function categories(): BelongsToMany
    {
      return $this->belongsToMany(Category::class, 'sk_article_categorys');
    }
    
}

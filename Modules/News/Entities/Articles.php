<?php

namespace Modules\News\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\News\Entities\categorys;

class articles extends Model
{
    use HasFactory;
    protected $table = "sk_articles";
    public $timestamps = false;

    protected $fillable = [
      'author_id',
      'category_1',
      'category_2',
      'publish_date',
      'title',
      'content',
      'slug',                  
    ];

    public function category() 
    {
      return $this->belongsTo(categorys::class, 'category_1');
    }

    public function secondCategory()
    {
      return $this->belongsTo(categorys::class, 'category_2');
    }

    public static function updateArticleViewCount($articleSlug, $currentViewCount)
    {
      $article = articles::where('slug', $articleSlug)->first();
      $article->view_count = $currentViewCount + 1;
      $article->save();
    }
}

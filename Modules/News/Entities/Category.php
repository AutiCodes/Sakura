<?php

namespace Modules\News\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\News\Entities\Article;

class Category extends Model
{
  use HasFactory;
  protected $table = 'sk_categorys';

  protected $fillable = [
    'category_id',
    'name',
    'slug'
  ];

  public function articles(): BelongsToMany
  {
    return $this->belongsToMany(Article::class, 'sk_article_categorys');
  }
}

<?php

namespace Modules\News\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\News\Entities\categorys;

class articles extends Model
{
    use HasFactory;
    protected $table = "sk_articles";

    protected $fillable = [
      'author_id',
      'category_1',
      'category_2',
      'category_3',
      'category_4',
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
}

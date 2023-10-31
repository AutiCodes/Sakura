<?php

namespace Modules\News\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorys extends Model
{
    use HasFactory;
    protected $table = 'sk_categorys';

    protected $fillable = [
      'category_id',
      'name',
      'slug'
    ];
}

<?php

namespace Modules\Pages\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Articles\Entities\Category;

class Page extends Model
{
    use HasFactory;

    protected $table = 'sk_pages';

    protected $fillable = [
        'id',
        'author_id',
        'title',
        'content',
        'slug',
        'status'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'sk_page_categorys');
    }
}
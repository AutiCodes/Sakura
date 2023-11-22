<?php

namespace Modules\AdminPanel\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\News\Entities\Article;

class Media extends Model
{
    use HasFactory;

    protected $table = 'sk_media';

    protected $fillable = [
        'name',
        'size',
        'uploaded_for',
        'uploaded_by',
        'dimensions'
    ];
}

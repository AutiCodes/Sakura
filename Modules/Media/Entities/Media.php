<?php

namespace Modules\Media\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Articles\Entities\Article;
use Modules\Users\Entities\User;

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

    public function users(): BelongsToMany
    {
        $this->belongsToMany(User::class,'sk_media_user');
    }
}

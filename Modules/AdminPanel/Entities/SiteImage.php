<?php

namespace Modules\AdminPanel\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteImage extends Model
{
    use HasFactory;
    protected $table = 'sk_site_images';
    protected $fillable = [
        'author_id',
        'type',
        'image_location'
    ];
}

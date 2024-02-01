<?php

namespace Modules\SiteEdit\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteText extends Model
{
    use HasFactory;
    protected $table = 'sk_site_text';
    
    protected $fillable = [
        'author_id',
        'type',
        'content'
    ];
}

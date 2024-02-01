<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    
    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\RoleFactory::new();
    }
}

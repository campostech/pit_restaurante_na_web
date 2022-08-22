<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\StatusScope;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new StatusScope);
    }
}

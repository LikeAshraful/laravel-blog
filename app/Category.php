<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->hasMany('App\Post');
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}

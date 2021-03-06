<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public function category(){
        return $this->belongsTo('App\Category');
    }
    
    public function comment(){
        return $this->hasMany('App\Comment');
    }
    
    public function tag(){
        return $this->belongsToMany('App\Tag');
    }
    
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    
    
}

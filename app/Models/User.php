<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function post()
    {
        return $this->hasMany('App\Post');
    }


    public function isAdmin()
    {

        if ($this->role->name == "administrator" && $this->is_active == 1) {

            return true;
        }

        return false;
    }

    public function isAuthor()
    {
        if ($this->role->name == "author" && $this->is_active == 1) {
            return true;
        }
        return false;
    }

    public function scopeAuthor($query)
    {
        return $query->where('role_id', 2);
    }

    public function scopeIsActive($query)
    {
        return $query->where('is_active', 1);
    }
}

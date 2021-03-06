<?php

namespace App\models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

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

 function role()
      Return $this->belongsTo(role::class);
}
}
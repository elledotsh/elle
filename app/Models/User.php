<?php

namespace App\Models;

use Elluminate\Models\BaseModel;

class User extends BaseModel
{
    protected $hidden = [
        'password'
    ];

    public function endpoints() : array
    {
        return [
            'index' => $this->hasIndexRoute(),
            'show' => $this->hasShowRoute(),
        ];
    }

    public function relationships() : array
    {
        return [
            'posts' => $this->hasMany(Post::class),
        ];
    }
}
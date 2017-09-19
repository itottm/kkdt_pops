<?php

namespace App;

use Illuminate\Database\Eloquent\User;
use Illuminate\Database\Eloquent\Model;

class Pop extends Model
{
    protected $fillable = [
        'title',
        'author',
        'isbn'
    ];
}

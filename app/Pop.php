<?php

namespace App;

use Illuminate\Database\Eloquent\User;

class Pop extends Model
{
    protected $fillable = [
        'title',
        'author',
        'isbn'
    ];
}

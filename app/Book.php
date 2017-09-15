<?php

namespace App;

use Illuminate\Database\Eloquent\User;

class Book extends Model
{
    protected $fillable = [
        'image',
        'book_id',
        'user_id'
    ];
}

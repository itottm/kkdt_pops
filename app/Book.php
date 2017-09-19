<?php

namespace App;

use Illuminate\Database\Eloquent\User;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'image',
        'book_id',
        'user_id'
    ];
}

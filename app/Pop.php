<?php

namespace App;

use App\Book;
use App\Transformers\PopTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\User;
use Illuminate\Database\Eloquent\Model;

class Pop extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'image',
        'book_id',
        'user_id'
    ];

    public $transformer = PopTransformer::class;

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}

<?php

namespace App;

use App\Pop;
use App\Scopes\BookScope;
use App\Http\Controllers\Controller;
use App\Transformers\BookTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\User;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'title',
        'author',
        'isbn'
    ];

    public $transformer = BookTransformer::class;

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope(new BookScope);
//    }

    public function pops()
    {
        return $this->hasMany(Pop::class);
    }
}

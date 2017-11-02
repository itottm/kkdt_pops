<?php

namespace App\Transformers;

use App\Book;
use League\Fractal\TransformerAbstract;

class BookTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param Book $book
     * @return array
     */
    public function transform(Book $book)
    {
        return [
            'identifier' => (int)$book->id,
            'title' => (string)$book->title,
            'author' => (string)$book->author,
            'isbn' => (int)$book->isbn,
            'creationDate' => (string)$book->created_at,
            'lastChange' => (string)$book->updated_at,
            'deletedDate' => isset($book->deleted_at) ? (string) $book->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identifier' => 'id',
            'title' => 'title',
            'author' => 'author',
            'isbn' => 'isbn',
            'creationDate' => 'created_at',
            'lastChange' => 'updated_at',
            'deletedDate' => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}

<?php

namespace App\Transformers;

use App\Pop;
use League\Fractal\TransformerAbstract;

class PopTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param Pop $pop
     * @return array
     */
    public function transform(Pop $pop)
    {
        return [
            'identifier' => (int)$pop->id,
            'image' => (string)$pop->image,
            'book_id' => (string)$pop->book_id,
            'user_id' => (string)$pop->user_id,
            'creationDate' => (string)$pop->created_at,
            'lastChange' => (string)$pop->updated_at,
            'deletedDate' => isset($pop->deleted_at) ? (string) $pop->deleted_at : null,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'identifier' => 'id',
            'image' => 'image',
            'book_id' => 'book_id',
            'user_id' => 'user_id',
            'creationDate' => 'created_at',
            'lastChange' => 'updated_at',
            'deletedDate' => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}

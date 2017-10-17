<?php

namespace App;

use App\HeadOffice;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\User;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name'
    ];

    public function headOffice()
    {
        return $this->belongsTo(HeadOffice::class);
    }
}

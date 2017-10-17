<?php

namespace App;

use App\Store;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\User;
use Illuminate\Database\Eloquent\Model;

class HeadOffice extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'head_office_id'
    ];


    public function stores()
    {
        return $this->hasMany(Store::class);
    }
}

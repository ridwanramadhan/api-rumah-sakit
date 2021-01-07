<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'province';

    protected $hidden = ['created_at', 'updated_at'];

    // public function kota()
    // {
    //     return $this->hasMany('App\City', 'id');
    // }
}

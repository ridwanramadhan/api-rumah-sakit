<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';

    protected $hidden = ['created_at', 'updated_at'];

    // public function provinsi()
    // {
    //     return $this->belongsTo('App\Province', 'id_provinsi');
    // }
}

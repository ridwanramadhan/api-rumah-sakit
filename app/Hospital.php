<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospital';

    protected $hidden = ['created_at', 'updated_at'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumnos extends Model
{
    //use SoftDeletes;
    //protected $data = ['delete_at'];
    protected $table = 'alumnos';

}

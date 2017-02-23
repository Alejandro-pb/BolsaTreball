<?php

namespace TSFI;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresas extends Model
{
    //use SoftDeletes;
    //protected $data = ['delete_at'];
    protected $table = 'Empresa';
    protected $primaryKey = "IdEmpresa";
}

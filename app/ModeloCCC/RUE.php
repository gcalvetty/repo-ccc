<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUE extends Model
{
    //
    protected $fillable = [
        'codigo',
        'nombre', 
        'distrito',
        'dependencia',
        'inicial',
        'primaria',
        'secundaria'
    ];
}


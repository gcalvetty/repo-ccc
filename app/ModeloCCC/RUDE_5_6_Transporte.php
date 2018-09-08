<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUDE_5_6_Transporte extends Model
{
    //
    protected $table = 'rude_5_6_transporte';
    protected $primaryKey = 'trs_id';
    /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
}

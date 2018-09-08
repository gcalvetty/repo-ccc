<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUDE_5_3_SerBasicos extends Model
{
    protected $table = 'rude_5_3_serbasicos';
    protected $primaryKey = 'ser_id';
    /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
}

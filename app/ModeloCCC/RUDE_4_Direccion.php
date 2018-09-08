<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUDE_4_Direccion extends Model
{
    protected $table = 'rude_4_direccion';
    protected $primaryKey = 'dir_id';
    /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
}

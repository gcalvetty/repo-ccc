<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUDE_5_4_Actividades extends Model
{
    protected $table = 'rude_5_4_actividades';
    protected $primaryKey = 'act_id';
    /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
}

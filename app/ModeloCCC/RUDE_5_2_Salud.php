<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUDE_5_2_Salud extends Model
{
    protected $table = 'rude_5_2_salud';
    protected $primaryKey = 'sal_id';
    /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
}

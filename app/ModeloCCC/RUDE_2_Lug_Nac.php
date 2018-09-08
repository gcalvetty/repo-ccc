<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUDE_2_Lug_Nac extends Model
{
    protected $table = 'rude_2_lug_nac';
    protected $primaryKey = 'ln_id';
    /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
}

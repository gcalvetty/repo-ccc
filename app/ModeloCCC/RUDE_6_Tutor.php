<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUDE_6_Tutor extends Model
{
    protected $table = 'rude_6_tutor';
    protected $primaryKey = 'tut_id';
    /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
}

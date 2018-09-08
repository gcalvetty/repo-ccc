<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUDE_5_1_Idioma extends Model
{
    protected $table = 'rude_5_1_idioma';
    protected $primaryKey = 'idi_id';
    /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
}

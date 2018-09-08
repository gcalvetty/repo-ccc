<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUDE_5_5_Internet extends Model
{
    protected $table = 'rude_5_5_internet';
    protected $primaryKey = 'int_id';
    /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
}

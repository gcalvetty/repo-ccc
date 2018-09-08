<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUDE extends Model
{
    protected $table = 'rude';
    protected $primaryKey = 'rude_id';
    
    
    public function getRouteKeyName() {
        return 'user_id';
    }
            
            
    /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
    
}
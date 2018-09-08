<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class RUDE_1_Gestion extends Model
{
    protected $table = 'rude_1_gestion';
    protected $primaryKey = 'gst_id';
    /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
    
    /*
     * Buscar X Nombre
     */
    public function scopebusXnivel($q, $value) {
        return $q
                ->from('rude_1_gestion as g')
                ->when($value, function($q)use($value) {            
        });        
    }
   
}

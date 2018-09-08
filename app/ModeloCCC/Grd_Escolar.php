<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class Grd_Escolar extends Model
{
    protected $table = 'grd_escolar';
    protected $primaryKey = 'grd_id';
    
    
    /*
     * Relaciones
     */
    public function Nivel(){
       return $this->belongsTo(Grd_Nivel::class);  
    } 
    
 
   
}

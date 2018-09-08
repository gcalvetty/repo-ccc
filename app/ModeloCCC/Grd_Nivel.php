<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class Grd_Nivel extends Model
{
    protected $table = 'grd_nivel';
    protected $primaryKey = 'grd_nivel_id';
    
    /*
     * Relaciones
     * // hasMany ('Modelo', 'foreign_key', 'local_key')  
     */
    public function Cursos(){
       return $this->hasMany(Grd_Escolar::class,'grd_orden'); 
    }    
    
    
}

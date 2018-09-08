<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class cccavatar extends Model
{
    use Notifiable;
    //
    protected $table = 'avatar';
    protected $primaryKey = 'av_id';
    
    /**
     * @var array
     */
    protected $fillable = [
        'nombre', 'ape_paterno', 'ape_materno', 'fec_nac', 'email', 'password', 'tipo_Usu', 'activo'
    ];
    
     /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
    
    
}

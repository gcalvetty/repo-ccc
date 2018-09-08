<?php

namespace sis_ccc\ModeloCCC;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use Notifiable;
    //
    protected $table = 'perfil';
    protected $primaryKey = 'user_id';
    
    /**
     * @var array
     */
    protected $fillable = [
        'per_ci', 'per_fec_nac', 'per_sexo',
        'per_telf', 'per_cel', 'per_dir',
        'per_avatar',
    ];  
    
    
     /*
     * Relaciones
     */
    public function User(){
        return $this->belongsTo('User');
    }
}

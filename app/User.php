<?php

namespace sis_ccc;
use Carbon\Carbon;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


// use sis_ccc\Notifications\MyResetPassword;


class User extends \TCG\Voyager\Models\User {

    use Notifiable;
    use FormAccessible;

    
     /**
     * Obtener la fecha de nacimiento del usuario.     
     */
    public function getDateOfBirthAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }

    /**
     * Obtenga la fecha de nacimiento del usuario para los formularios.
     */
    public function formDateOfBirthAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * The attributes that are mass assignable.     
     */
    protected $fillable = [
        'nombre', 'ape_paterno', 'ape_materno', 'fec_nac', 'email', 'password', 'tipo_Usu', 'activo'
    ];

    /**
     * The attributes that should be hidden for arrays.     
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /*
     * Sobrescribe el envío del email
     */
    
    public function sendPasswordResetNotification($token)
        {            
            session(['tokenGUI' => $token]); 
            
            //$this->notify(new MyResetPassword($token));
        }
  

    /*
     * Relaciones
     */
    public function t_Rude() {
        return $this->hasOne(ModeloCCC\RUDE::class);
    }
    public function t1_Gestion() {
        return $this->hasOne(ModeloCCC\RUDE_1_Gestion::class);
    }
    public function t2_Nacimiento() {
        return $this->hasOne(ModeloCCC\RUDE_2_Lug_Nac::class);
    }
    public function t4_Direccion() {
        return $this->hasOne(ModeloCCC\RUDE_4_Direccion::class);
    }
    public function t5_1_Idioma() {
        return $this->hasOne(ModeloCCC\RUDE_5_1_Idioma::class);
    }
    public function t5_2_Salud() {
        return $this->hasOne(ModeloCCC\RUDE_5_2_Salud::class);
    }
    public function t5_3_SerBasicos() {
        return $this->hasOne(ModeloCCC\RUDE_5_3_SerBasicos::class);
    }
    public function t5_4_Actividades() {
        return $this->hasOne(ModeloCCC\RUDE_5_4_Actividades::class);
    }
    public function t5_5_Internet() {
        return $this->hasOne(ModeloCCC\RUDE_5_5_Internet::class);
    }
    public function t5_6_Transporte() {
        return $this->hasOne(ModeloCCC\RUDE_5_6_Transporte::class);
    }
    public function t6_Tutor() {
        return $this->hasOne(ModeloCCC\RUDE_6_Tutor::class);
    }   
    
    public function t7_Avatar(){
        return $this->hasMany(ModeloCCC\cccavatar::class);
        
    }
    
    /*
     * Relacion Perfil
     */
     public function t8_Perfil(){
         return $this->hasOne(ModeloCCC\Perfil::class);
     }

    /*
     * Buscar X Nombre
     */
    public function scopebusXnom($q, $value) {
        $q->when($value, function($q)use($value) {
            return $q->where('nombre', 'like', '%' . $value . '%');
        });
    }
    /* 
     * Bucar X Tipo de Usuario 
     */
    public function sopebusXtip($q, $value){
        $q->when($value,function($q)use($value){
            return $q->where('tipo_Usu','=',$value);
        });
    }
}

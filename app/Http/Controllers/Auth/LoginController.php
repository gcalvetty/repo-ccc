<?php

namespace sis_ccc\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use sis_ccc\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function redirectPath() {         
        $user = Auth::user()->tipo_Usu;       
        $rutAcs = array('SuperAdm' => 'admin', 
                        'Admtr' => 'administracion',
                        'Cont' => 'contador', 
                        'Dir' => 'direccion', 
                        'Prof' => 'profesor', 
                        'Secr' => 'secretaria',
                        'Insc' => 'inscripcion',
                        'Rege' => 'regente',
                        'Psico' => 'psico',
                        'Est_ccc' => 'estudiante', 
                        'Tut_ccc' => 'tutor',);
        
        foreach ($rutAcs as $usu => $ruta ) {            
            if ($user == $usu) {                  
                session()->put('Ruta-Acceso', $ruta);                                
                return $ruta;
            }
        }  
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }
}

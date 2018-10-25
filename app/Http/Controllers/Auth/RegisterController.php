<?php

namespace sis_ccc\Http\Controllers\Auth;

use sis_ccc\User;
use Validator;
use sis_ccc\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
// --- gecn use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use sis_ccc\Mail\activar_cuenta as ActCuenta;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
          
        $vGECN = Validator::make($data, [
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',            
            'name'      => 'required',
            'ape1'      => 'required',
            'ape2'      => 'required',              
            'tipo_Usu'      => 'required|in:Admtr,Cont,JPer,Dir,Prof,Secr,Rege,Est_ccc,Tut_ccc'            
        ]); 
        
        return $vGECN;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \sis_ccc\User
     */
    protected function create(array $data)
    {
        
        $vGECN = User::create([
            'nombre'        => $data['name'],
            'ape_paterno'   => $data['ape1'],
            'ape_materno'   => $data['ape2'],
            'email'         => $data['email'],
            'password'      => Hash::make($data['password']),            
            'tipo_Usu'      => $data['tipo_Usu'],            
            'activo'        => 'si',
            'verf_token'    => str_random(40),
            'rememberToken' => '',
        ]);        
        return $vGECN;
        
    }
    public function register(Request $request)
    {
       
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard($user);

        return redirect($this->redirectPath());
    }
    
    
}

<?php

namespace sis_ccc\Providers;

use sis_ccc\ModeloCCC\RUDE;
use sis_ccc\ModeloCCC\Nota; 

use sis_ccc\Policies\EstuPolicy;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'sis_ccc\Model' => 'sis_ccc\Policies\ModelPolicy',
        RUDE::class => EstuPolicy::class,
        Nota::class => EstuPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        /*
         * Super Usuario
         */
        Gate::before(function ($user){
            if($user->email == 'gcalvetty@gmail.com'){                
                return true;
            }
        });        
        /*
         * Intranet
         */
        
        Gate::define('usu_ccc', function ($user) {           
            return $user->tipo_Usu == "SuperAdm" ;
        });
        
        
        Gate::define('usu_admtr', function ($user) { 
            
            return $user->tipo_Usu == "Admtr";
        });               
                
        Gate::define('usu_cont', function ($user) {
            return $user->tipo_Usu == "Cont";
        });

        Gate::define('usu_dir', function ($user) {
            return $user->tipo_Usu == "Dir";
        });

        Gate::define('usu_prof', function ($user) {
            return $user->tipo_Usu == "Prof";
        });

        Gate::define('usu_secr', function ($user) {
            return $user->tipo_Usu == "Secr";
        });
        
        Gate::define('usu_insc', function ($user) {
            return $user->tipo_Usu == "Insc";
        });

        Gate::define('usu_rege', function ($user) {
            return $user->tipo_Usu == "Rege";
        });
        
        Gate::define('usu_psico', function ($user) {
            return $user->tipo_Usu == "Psico";
        });
        
        
        /*
         * Extranet
         */
        
        Gate::define('usu_estu',function ($user){
            return $user->tipo_Usu == "Est_ccc";
        });
        
        Gate::define('usu_tut',function ($user){
            return $user->tipo_Usu == "Tut_ccc";
        });
    }

}

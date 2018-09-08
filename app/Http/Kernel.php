<?php

namespace sis_ccc\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Auth\Middleware\Authorize;
use sis_ccc\Http\Middleware\TrimStrings;

class Kernel extends HttpKernel {

    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        TrimStrings::class,
        
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \sis_ccc\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \sis_ccc\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            
        ],
        'api' => [
            'throttle:60,1',
            'bindings',
        ],
        /*
         * Intranet
         */
          'Grp_ccc'   => ['web','auth',Authorize::class.':usu_ccc'],
          'Grp_Admtr' => ['web','auth',Authorize::class.':usu_admtr'],
          'Grp_Dir'  =>  ['web','auth',Authorize::class.':usu_dir'],
          'Grp_Prof'  => ['web','auth',Authorize::class.':usu_prof'],
          'Grp_Cont'  => ['web','auth',Authorize::class.':usu_cont'],
          'Grp_Secr'  => ['web','auth',Authorize::class.':usu_secr'],
          'Grp_Insc'  => ['web','auth',Authorize::class.':usu_insc'],
          'Grp_Rege'  => ['web','auth',Authorize::class.':usu_rege'],          
          'Grp_Psi'   => ['web','auth',Authorize::class.':usu_psico'],
                
        /*
         * Extranet
         */
        'Grp_Estu' => ['web','auth',Authorize::class.':usu_estu'],
        'Grp_Tut' => ['web','auth',Authorize::class.':usu_tut'],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \sis_ccc\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];

}

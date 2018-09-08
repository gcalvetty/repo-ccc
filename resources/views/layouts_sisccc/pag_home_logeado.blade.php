<div class="container ns panel-body">
    <div class="row">
        @if (true)
        <div class="logeado col-lg-10 col-xs-push-1">
            <h1>Usuario, Logeado!!!</h1>            
            <p><a class="btn btn-primary btn-lg" href="{{ session('Ruta-Acceso') }}" role="button"><i class="fa fa-desktop" aria-hidden="true"></i> @lang('auth.dashbord')</a></p>
        </div>
        @else
        <div class="logeado col-lg-10 col-xs-push-1">
            <h1>Usuario, Logeado222!!!</h1>                        
        </div>        
        @endif
    </div><!-- /row -->
</div><!-- Container --> 
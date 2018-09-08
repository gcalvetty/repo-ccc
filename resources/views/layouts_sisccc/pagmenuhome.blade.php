<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container menu-home">
        <div class="navbar-header">
            <div class="pull-left image">
            <img src="/imagenes/logo-ccc.png">
            </div>
            <a class="navbar-brand home-tit" href="{{ url('/') }}">
            <b>Sistema Educativo</b> - "{{ config('app.name', 'CCC-SIS') }}" </a>
        </div>

        <div class="menuGECN collapse navbar-collapse" id="app-navbar-collapse">                    
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @can('usu_adm')
                <li><a href="{{ route('acceder') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> @lang('auth.login')</a></li>
                <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> @lang('auth.register')</a></li>
                @endcan
                
            </ul>
            <ul class=" nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())               
                <li><a href="{{ route('acceder') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> @lang('auth.login')</a></li> 
                
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->ape_paterno .' '. Auth::user()->nombre }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li class="">
                            <a href="{{ session('Ruta-Acceso') }}"><i class="fa fa-desktop" aria-hidden="true"></i> @lang('auth.dashbord')
                            </a>

                            <form id="logout-form" action="{{ route('cerrar-acceso') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li class="">
                            <a href="{{ route('cerrar-acceso') }}"
                               onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> @lang('auth.logout')
                            </a>

                            <form id="logout-form" action="{{ route('cerrar-acceso') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>                        
                    </ul>
                </li>
                @endif
            </ul>
            
        </div>
    </div>
</nav>
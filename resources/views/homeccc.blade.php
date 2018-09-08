<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name')}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">       

        <!-- Favicon -->        
        <link rel="apple-touch-icon" sizes="76x76" href="/imagenes/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/imagenes/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/imagenes/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/imagenes/favicon/manifest.json">
        <link rel="mask-icon" href="/imagenes/favicon/safari-pinned-tab.svg" color="#385c27">
        <meta name="msapplication-TileColor" content="#7cba5f">
        <meta name="theme-color" content="#7cba5f">
        <meta name="google-site-verification" content="TMCJ84VbGNP_H5cHT4uBHnMKj0lKeK0yYNPNw1wBgXU" />
        <title>{{ config('app.name', 'CCC-SIS') }}</title>

        <!-- Styles -->
        <link href="/dist/css/AdminLTE.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/sisccc.css" rel="stylesheet">     


        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
    </head>
    <body>       
        <div class="navbar-wrapper">
            <div class="container">
                {!! Html::menuHome() !!}  
            </div>
        </div> 
        @if (Auth::guest()) 
        <div class="home-cont1">
            <?php if ((date("m") >= 1) and ( date("m") < 3)) { $hommar = "home-cont1" ?>
                @component('layouts_sisccc.pag_home_inscripcion')

                @endcomponent
            <?php } else { $hommar = "home-cont3" ?> 
                
            <?php } ?>
        </div>
        <div class="{{ $hommar }}">                                
            @component('layouts_sisccc.pag_home_invitado')

            @endcomponent
        </div>
        @component('layouts_sisccc.pag_home_footer')

        @endcomponent            
        @else
        <div class="home-cont2">                                  
            @component('layouts_sisccc.pag_home_logeado')

            @endcomponent
        </div>
        @component('layouts_sisccc.pag_home_footer') 

        @endcomponent

        @endif
        <!-- jQuery 3.1.1 -->
        <script src="/jquery/jquery-3.1.1.min.js"></script>    
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

        <!-- DataTables -->
        <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="/plugins/fastclick/fastclick.js"></script>

        <!-- Bootstrap 3.3.6 -->
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="/dist/js/app.min.js"></script>
        <script src="/dist/js/ccc-escritorio.js"></script>
    </body>
</html>

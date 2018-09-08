<!DOCTYPE html>
<html lang="es"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>{{ config('app.name')}} | @yield('titulo')</title>        
        <!-- Favicon -->        
        <link rel="apple-touch-icon" sizes="76x76" href="/imagenes/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/imagenes/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/imagenes/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/imagenes/favicon/manifest.json">
        <link rel="mask-icon" href="/imagenes/favicon/safari-pinned-tab.svg" color="#385c27">
        <meta name="msapplication-TileColor" content="#7cba5f">
        <meta name="theme-color" content="#7cba5f">
        <meta name="google-site-verification" content="TMCJ84VbGNP_H5cHT4uBHnMKj0lKeK0yYNPNw1wBgXU" />
        <!-- Styles -->

        <link href="{{ elixir('/css/app.css') }}" rel="stylesheet">
        <link href="{{ elixir('/css/sisccc.css') }}" rel="stylesheet">       

        @if((Route::current()->getName() == 'rude-d.edit')or
        (Route::current()->getName() == 'rude-ins.edit')or
        (Route::current()->getName() == 'rude-s.edit'))
        @include('layouts_sisccc.partials.pagsis_edit_css')
        @endif        

        <link href="/dist/css/AdminLTE.css" rel="stylesheet">          
        <link href="/dist/css/skins/_all-skins.css" rel="stylesheet">

        <link href="/css/multiple-select.css" rel="stylesheet" type="text/css"/>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
    </head>
    <body class="sidebar-mini skin-green wysihtml5-supported sidebar-collapse"> 

        <div class="wrapper" id="docentes">
            @if (Auth::guest())       		
            @else     
            {!! Html::menuccc() !!}
            @endif


            @yield('sis_menu_lateral')

            @yield('sis_contenido')

            @yield('menu-configuracion')            

        </div>      
        <!-- jQuery 3.1.1 -->
        <script src="/jquery/jquery-3.1.1.min.js"></script>    
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>


        <!-- Bootstrap 3.3.6 -->
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="/dist/js/app.min.js"></script>
        <script src="/dist/js/ccc-escritorio.js"></script>
        <script src="/jquery/toastr.js" type="text/javascript"></script>

        <script src="/jquery/multiple-select.js" type="text/javascript"></script>
        <script>
            $("select").multipleSelect({
                multiple: true,
                multipleWidth: 55
            });

            $('#DocenteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var idDoc = button.data('iddoc')
                var nomDoc = button.data('nomdoc')

                var modal = $(this)
                modal.find('.Doc').text(nomDoc)
                modal.find('.modal-body input.DocId').val(idDoc)
            });
            
            $(document).ready(function () {
                @if(session('success'))        
                    toastr.info('Se Guardo el Registro.', 'Reporte', {timeOut: 3000})
                @endif
            });

        </script>
    </body>
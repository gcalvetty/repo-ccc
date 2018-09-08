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
        <link href="{{ elixir('/css/sisccc-contador.css') }}" rel="stylesheet"> 
        <link href="/dist/css/AdminLTE.css" rel="stylesheet">          
        <link href="/dist/css/skins/_all-skins.css" rel="stylesheet">
        <!-- DataTables -->
        <link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
        <!-- js Vendor - Axions - AppCCC -->
        
        
        
    </head>
    <body class="sidebar-mini skin-green wysihtml5-supported"> 

        <div class="wrapper">
            @if (Auth::guest())       		
            @else     
            {!! Html::menuccc() !!} <!-- creamos el sub-menu -->
            @endif
            @yield('sis_menu_lateral')
            @yield('sis_contenido')
            @yield('menu-configuracion')

        </div>   
        
        <script src="{{ asset("js/app.js") }}" ></script> 
        <script src="{{ asset("js/app-tabla.js") }}" ></script> 
        
        <!-- Bootstrap 3.3.6 -->
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="/dist/js/app.min.js"></script>
        <script src="/dist/js/ccc-escritorio.js"></script> 
        
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
            

new Vue({
    el: "#contador_crud",
    created: function () {
        this.getAlum();
    },
    data: {
        listado: [],
        errors: [],
    },
    mounted: function () { //cuando se cargo la pagina
        $(".desbot").hide();
    },
    methods: {
        getAlum: function () {
            var urlAlum = "contador/bloquear";            
            axios.get(urlAlum).then(response => {
                this.listado = response.data;
            });
            },        
        ActAlm: function () {},
        bloqAlm: function (AlumId) {            
            var url = "contador/bloquear/alumno/"+AlumId+"/blodes/1";
            $("#" + AlumId + " .desbot.btndesbloq" + AlumId).show();
            $("#" + AlumId + " .actbot.btnbloq" + AlumId).hide();
            
            $("#" + AlumId + " .actbot.btndesbloq" + AlumId).show();
            $("#" + AlumId + " .desbot.btnbloq" + AlumId).hide();
            axios.get(url).then(response => {
                toastr.success('Alumno Bloqueado');
            });            
        },
        desbloqAlm: function (AlumId) {             
            var url = "contador/bloquear/alumno/" + AlumId+"/blodes/2";
            $("#" + AlumId + " .actbot.btnbloq" + AlumId).show();
            $("#" + AlumId + " .desbot.btndesbloq" + AlumId).hide();
            
            $("#" + AlumId + " .actbot.btndesbloq" + AlumId).hide();
            $("#" + AlumId + " .desbot.btnbloq" + AlumId).show();
            axios.get(url).then(response => {
                toastr.success('Alumno DesBloqueado');                
            });
        }
    } 
}); 
        </script>
    </body>
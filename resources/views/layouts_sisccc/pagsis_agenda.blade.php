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

        <link href="/dist/css/AdminLTE.css" rel="stylesheet">          
        <link href="/dist/css/skins/_all-skins.css" rel="stylesheet">
        <!-- DataTables -->
        <link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Scripts -->

        <!-- fullCalendar 2.2.5-->
        <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.min.css">
        <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.print.css" media="print">

        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
    </head>
    <body class="sidebar-mini skin-green wysihtml5-supported"> 

        <div class="wrapper">
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

        <!-- DataTables -->
        <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="/plugins/fastclick/fastclick.js"></script>


        <!-- Bootstrap 3.3.6 -->
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="/jquery/vue.js"></script>
        <script src="/jquery/axios.js"></script>
        <script src="/jquery/toastr.js" type="text/javascript"></script>

        @if((Route::current()->getName() == 'Secr.agenda'))
        <script>
            
            new Vue({
                el: "#Secr_agenda",
                created: function () {
                    this.getAct();
                },
                data: {
                    listado: [],
                    tar_materia: '',
                    tar_desc: '',                    
                    errors: []
                },
                mounted: function () { //cuando se cargo la pagina

                },
                methods: {
                    getAct: function () {
                        /*
                        var urlAct = "actividad/mostrar";
                        axios.get(urlAct).then(response => {
                            this.listado = response.data;
                        });
                        */
                    },
                    crearEvento: function () {
                        /*
                        var urlGuaAct = "actividad";
                        axios.post(urlGuaAct, {
                            Materia: this.tar_materia,
                            Tarea: this.tar_desc
                        }).then(response => {
                            this.getAct();
                            this.tar_materia = '';
                            this.tar_desc = '';
                            this.errors = '';
                            toastr.success('Tarea Guardada');
                        }).catch(error => {
                            this.errors = error.response.data
                        });
                        */
                    },

                }
            });


        </script>

        @endif    


        <!-- fullCalendar 2.2.5 -->
        <script src='/plugins/fullcalendar/moment.min.js'></script>        
        <script src="/plugins/fullcalendar/fullcalendar.min.js"></script>        
        
        <!-- Page specific script -->
        <script>
            function confCalendario(){
                var initialLocaleCode = 'es';
                $('#calendario').fullCalendar({
                    header: {
                    left: false,                    
                    center: 'title',
                    right: false
                    },                    
                    locale: initialLocaleCode,
                    buttonIcons: false,
                    weekNumbers: false,
                    navLinks: false, 
                    editable: false,
                    eventLimit: false,
                    events: [],
                    color: 'yellow',
                    textColor: 'black'
                });
            };
            confCalendario();
           
        </script>
    </body>
<!DOCTYPE html>
<html lang="es"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>">
        <title><?php echo e(config('app.name')); ?> | <?php echo $__env->yieldContent('titulo'); ?></title>        
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

        <link href="<?php echo e(elixir('/css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(elixir('/css/sisccc.css')); ?>" rel="stylesheet">       

        <link href="/dist/css/AdminLTE.css" rel="stylesheet">          
        <link href="/dist/css/skins/_all-skins.css" rel="stylesheet">
        <!-- DataTables -->
        <link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Scripts -->

        <!-- datagrip -->
        <link href="/css/jquery-ui.css" rel="stylesheet" type="text/css" >
        <!-- fullCalendar 2.2.5-->               
        <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.min.css">
        <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.print.css" media="print">

        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
    </head>
    <body class="sidebar-mini skin-green wysihtml5-supported sidebar-collapse">         
        <div class="wrapper">
            <?php if(Auth::guest()): ?>       		
            <?php else: ?>     
            <?php echo Html::menuccc(); ?>

            <?php endif; ?>
            <?php echo $__env->yieldContent('sis_menu_lateral'); ?>
            <?php echo $__env->yieldContent('sis_contenido'); ?>
            <?php echo $__env->yieldContent('menu-configuracion'); ?>            
        </div>      
        <!-- jQuery 3.1.1 -->
        <script src="/jquery/jquery-3.1.1.min.js"></script> 
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

        <!-- Bootstrap 3.3.6 -->
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="/dist/js/app.min.js"></script>
        <script src="/dist/js/ccc-escritorio.js"></script>
        <script src="/jquery/vue.js"></script>
        <script src="/jquery/axios.js"></script>
        <script src="/jquery/toastr.js" type="text/javascript"></script>

        <!-- fullCalendar 2.2.5 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="/plugins/fullcalendar/fullcalendar.min.js"></script>
        <!-- Page specific script -->

        <?php if(Route::current()->getName() == 'Prof.actividades'): ?>                  
        <script src="/jquery/ccc-profesor-actividad.js" type="text/javascript"></script>        
        <?php endif; ?>   
        <?php if((Route::current()->getName() == 'Prof.cuadSegui')or
            (Route::current()->getName() == 'Rege.Reg')or
            (Route::current()->getName() == 'Psico.Reg')
            ): ?> 
        <!-- TextArea -->
        <script src="/jquery/ckeditor/ckeditor.js"></script>
        <script src="/jquery/ckeditor/js/sample.js"></script>    
        <script>
            new Vue({
                el: "#Prof_Seguimiento",
                created: function () {
                    this.getAct();
                },
                data: {
                    listado: [],
                    tar_desc: '',
                    fini: '',
                    errors: []
                },
                mounted: function () { //cuando se cargo la pagina

                },
                methods: {
                    getAct: function () {
                        var urlAct = "cuaderno/mostrar";
                        axios.get(urlAct).then(response => {
                            this.listado = response.data;
                        });
                    },
                    crearSeguimiento: function () {
                        var urlGuaAct = "cuaderno/guardar";
                        this.tar_desc = CKEDITOR.instances.editor.getData();

                        axios.post(urlGuaAct, {
                            Seguimiento: this.tar_desc
                        }).then(response => {
                            this.getAct();
                            this.tar_desc = '';
                            this.errors = '';
                            toastr.info('Seguimiento Guardado!!!');
                        }).catch(error => {
                            this.errors = error.response.data
                        });

                    },
                    eliminarSeguimiento: function (tarea) {
                        var urlAct = "cuaderno/borrar/" + tarea.pc_id;

                        axios.delete(urlAct).then(response => {
                            this.getAct();
                            toastr.warning('Seguimiento Eliminado!!!' + response.data);
                        })
                    },

                }
            });
            $(document).ready(function () {
                initSample();
            });
        </script>
        
        <?php endif; ?>

    </body>
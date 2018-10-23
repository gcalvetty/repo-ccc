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

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
    </head>
    <body class="sidebar-mini skin-green wysihtml5-supported"> 

        <div class="wrapper" id="docentes">
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
        <script src="/jquery/moment.js" type="text/javascript"></script>
        <script src="/jquery/vue.js" type="text/javascript"></script>        
        <script src="/jquery/vee-validate.js" type="text/javascript"></script>              
        <script src="/jquery/vue-datepicker/vuejs-datepicker.min.js" type="text/javascript"></script>
     
       
        <script src="/jquery/toastr.js" type="text/javascript"></script>
        <!-- TextArea -->
        <script src="/jquery/ckeditor/ckeditor.js"></script>          
        <script src="/jquery/ckeditor/js/sample.js"></script>
        <script type="module">
            import esGECN from '/jquery/vue-datepicker/es.js';            
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
            const config = {
                errorBagName: 'errors',
                delay: 1000,
                messages: null,
                strict: true
            };
            /* ----- */
            Vue.use(VeeValidate, config);                
            const app = new Vue({
                el: '#Comportamiento',
                components: {
                    vuejsDatepicker
                },
   
                validator: null,
                data() {
                    return {
                        // -------------
                        TB:0,tarSel:{},tarSel2:"",
                        moSel:"",moSelDes:"",
                        ttarClass:"",
                        ttar:{ tar:0, tarAct:0, mem:0  },
                        
                        tT:{ ts:[ 
                                <?php
                                foreach($ListaComp as $TipComp){
                                if ($TipComp->regt_tt_id == 1){
                                echo "{id:".$TipComp->regt_id.",txt:'".$TipComp->regt_descripcion."'},";    
                                }
                                }
                                ?>
                                ],
                             tb:[ 
                                <?php
                                foreach($ListaComp as $TipComp){
                                if ($TipComp->regt_tt_id == 2){
                                echo "{id:".$TipComp->regt_id.",txt:'".$TipComp->regt_descripcion."'},";    
                                }
                                }
                                ?>
                                ], 
                             ta:[
                            <?php
                                foreach($ListaComp as $TipComp){
                                if ($TipComp->regt_tt_id == 3){
                                echo "{id:".$TipComp->regt_id.",txt:'".$TipComp->regt_descripcion."'},";    
                                }
                                }
                                ?>
                        ] , 
                             tr:[
                            <?php
                                foreach($ListaComp as $TipComp){
                                if ($TipComp->regt_tt_id == 4){
                                echo "{id:".$TipComp->regt_id.",txt:'".$TipComp->regt_descripcion."'},";    
                                }
                                }
                                ?>
                                ],
                           },    
                        fec: "",                                                
                        observacion: "",
                        es: esGECN,
                        state: {
                            date: new Date(<?php echo date("Y,n-1,d"); ?>),                          
                            disabledDates:{ days:[0] }
                        },
                    }
                },
                methods: {
                    // --------------                    
                    validateBeforeSubmit(e) {                    
                            this.$validator.validateAll();
                            if (this.errors.any()) {
                                e.preventDefault();
                            }                    
                    },
                    customFormatter(date) {
                        return moment(date).format('D/MM/YYYY');
                    },
                    cambTar:function(opcSel){                               
                               this.ttar.tar = opcSel;
                               if(this.ttar.tar == 1) this.tarSel = this.tT.ts;
                               if(this.ttar.tar == 2) this.tarSel = this.tT.tb;
                               if(this.ttar.tar == 3) this.tarSel = this.tT.ta;
                               if(this.ttar.tar == 4) this.tarSel = this.tT.tr;                               
                           },
                    cambMem:function(event){                        
                                this.ttar.mem = event.target.value;
                                this.ttar.tarAct = this.ttar.tar;
                           },
                           
                    cambMem2:function(opc,txt){                        
                                this.ttar.mem = opc;
                                this.ttar.tarAct = this.ttar.tar;
                                this.moSel = this.cambTar2(this.ttar.tar);
                                this.moSelDes = txt;
                           },       
                    cambTar2:function(opc){
                        if(opc == 1) {this.ttarClass="panel-primary"; return "Sin Tarjeta"};
                        if(opc == 2) {this.ttarClass="panel-info"; return "Tarjeta Blanca"};
                        if(opc == 3) {this.ttarClass="panel-warning"; return "Tarjeta Amarilla"};
                        if(opc == 4) {this.ttarClass="panel-danger"; return "Tarjeta Roja"};                        
                    },       
                    iniVal:function(event){
                        
                        this.ttar.tar=0;this.ttar.tarAct=0;this.ttar.mem=0;
                        toastr.warning('Se cancelo', 'Mensaje', {timeOut: 2000})
                    }       
                }
            });
            $('#EstudianteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var idAlm = button.data('idalm')
                var nomAlm = button.data('nomalm')
                var modal = $(this)
                modal.find('.Alm').text(nomAlm)
                modal.find('input.AlmId').val(idAlm)
            });

            $(document).ready(function () {
                initSample();
                        <?php if(session('success')): ?>
                toastr.info('Se Guardo el Registro.', 'Reporte', {timeOut: 3000})
                <?php endif; ?>
            });
        </script>
    </body>
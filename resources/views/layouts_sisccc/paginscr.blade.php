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

        <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
        <!-- CSRF Token -->

        <!-- Favicon -->        
        <link rel="apple-touch-icon" sizes="76x76" href="/imagenes/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/imagenes/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/imagenes/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/imagenes/favicon/manifest.json">
        <link rel="mask-icon" href="/imagenes/favicon/safari-pinned-tab.svg" color="#385c27">
        <meta name="msapplication-TileColor" content="#7cba5f">
        <meta name="theme-color" content="#7cba5f">
        <title>{{ config('app.name', 'CCC-SIS') }}</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/sisccc.css" rel="stylesheet">
        <link href="/css/sisccc-insc.css" rel="stylesheet">

        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css"> 
        
    </head>
    <body>
        <div class="navbar-wrapper">
            <div class="container">
                {!! Html::menuHome() !!} 
            </div>
        </div> 
        
        @yield('sis_contenido')        

        <!-- Webpack -->        
        <script src="/jquery/jquery-3.1.1.min.js" type="text/javascript"></script>                        
        <script src="/jquery/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="/jquery/moment.js" type="text/javascript"></script>
        <script src="/jquery/vue.js" type="text/javascript"></script>        
        <script src="/jquery/vee-validate.js" type="text/javascript"></script>
        
        <!-- Vue variables -->
        <script src="/jquery/ccc-inscripcion.js"></script>
        <script>
           
const app = new Vue({    
    el: '#app',
    validator: null, // private reference
    data() {
        return {
            // -------------
            ape_paterno: "{{ old('ape_paterno') }}",    
            ape_materno: "{{ old('ape_materno') }}",    
            nombre: "{{ old('nombre') }}",
            cod_rude: "{{ old('cod_rude') }}",
            // -------------
            pais: "{{ old('pais') }}",   
            departamento: "{{ old('departamento') }}",   
            provincia: "{{ old('provincia') }}",  
            localidad: "{{ old('localidad') }}",
            // -------------
            tip_doc: "{{ old('tip_doc') }}",    
            num_doc: "{{ old('num_doc') }}", 
            fec_nac: "{{ old('fec_nac') }}",    
            sexo: "{{ old('sexo') }}",
            
            // -------------
            ofc_num: "{{ old('ofc_num') }}",    
            lib_num: "{{ old('lib_num') }}",    
            par_num: "{{ old('par_num') }}",    
            fol_num: "{{ old('fol_num') }}",
            rue_num:"{{ old('rue_num') }}",
            rue_nom:"{{ old('rue_nom') }}",
            
            // -------------
            optCurso: "{{ old('optCurso') }}",

            // -------------
            dir_prov: "{{ old('dir_prov') }}",   
            municipio: "{{ old('municipio') }}",  
            loc_comn: "{{ old('loc_comn') }}",
            zn_villa: "{{ old('zn_villa') }}",   
            av_calle: "{{ old('av_calle') }}",   
            telf: "{{ old('telf') }}",
            cel: "{{ old('cel') }}",
            num_viv: "{{ old('num_viv') }}",
            
            // -------------
            idi_est:"{{ old('idi_est') }}", 
            idihab1_est:"{{ old('idihab1_est') }}", 
            idihab2_est:"{{ old('idihab2_est') }}", 
            idihab3_est:"{{ old('idihab3_est') }}",
            
            // -------------
            pert_est:"{{ old('pert_est') }}",    
            pert_est_otro:"{{ old('pert_est_otro') }}",
            
            // -------------
            exit_salud_est:"{{ old('exit_salud_est') }}",  
            vec_salud_est:"{{ old('vec_salud_est') }}",   
            disc_est:"{{ old('disc_est') }}",
            dis1:"2",    
            dis2:"2", 
            dis3:"2",   
            discp:"{{ old('discp') }}",
            discp_otro:"{{ old('discp_otro') }}",
            
            //--------------
            ser_agua:"{{ old('ser_agua') }}",    
            elec_est:"{{ old('elec_est') }}",        
            water_est:"{{ old('water_est') }}",            
            
            // -------------
            trab_est:"{{ old('trab_est') }}",    
            dia_trab_est:"{{ old('dia_trab_est') }}",    
            rec_pag_est:"{{ old('rec_pag_est') }}",
            
            // -------------
            internet_est:"{{ old('internet_est') }}", 
            frec_inter_est:"{{ old('frec_inter_est') }}",
            
            transp_esp:"{{ old('transp_esp') }}", 
            trans_otro_est:"{{ old('trans_otro_est') }}", 
            transp_tiempo:"{{ old('transp_tiempo') }}",
            
            // -------------
            ci_tut:"{{ old('ci_tut') }}", 
            ape_tut:"{{ old('ape_tut') }}", 
            nom_tut:"{{ old('nom_tut') }}", 
            idim_tut:"{{ old('idim_tut') }}",
            
            ocp_tut:"{{ old('ocp_tut') }}",
            grd_tut:"{{ old('grd_tut') }}", 
            paren_tut:"{{ old('paren_tut') }}", 
            
            // -------------
            ci_madre:"{{ old('ci_madre') }}",
            ape_madre:"{{ old('ape_madre') }}", 
            nom_madre:"{{ old('nom_madre') }}", 
            idim_madre:"{{ old('idim_madre') }}", 
            ocp_madre:"{{ old('ocp_madre') }}", 
            grd_madre:"{{ old('grd_madre') }}",            
            
            
            // ---- Condicionales ----
            disSel:"{{ old('disSel') }}",
        }
    },
    methods: {
        tipDoc: function () {
            auxtxt = "";
            if (this.tip_doc == "")
            {
                this.num_doc = "";
                auxtxt = "Número ...";

            } else {
                auxtxt = "Número de " + this.tip_doc;
            }
            num_doc.setAttribute("placeholder", auxtxt);
        },
        
        // --------------
        validateBeforeSubmit(e) {
            this.$validator.validateAll();
            if (this.errors.any()) {
                e.preventDefault();
            }
        }
    }
});    
</script>
</body>
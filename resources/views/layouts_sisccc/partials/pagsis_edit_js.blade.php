<!-- Webpack -->        
            
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
            ape_paterno: "{{ $alm['ape_paterno'] }}",    
            ape_materno: "{{ $alm['ape_materno'] }}",    
            nombre: "{{ $alm['nombre'] }}",
            cod_rude: "{{ $rude['cod_rude'] }}",
            // -------------
            pais: "{{ $lug_nac['ln_pais'] }}",   
            departamento: "{{ $lug_nac['ln_depa'] }}",   
            provincia: "{{ $lug_nac['ln_prov'] }}",  
            localidad: "{{ $lug_nac['ln_loc'] }}",
            
            // -------------
            ofc_num: "{{ $lug_nac['cn_oficialia'] }}",    
            lib_num: "{{ $lug_nac['cn_numlibro'] }}",    
            par_num: "{{ $lug_nac['cn_numpartida'] }}",    
            fol_num: "{{ $lug_nac['cn_numfolio'] }}",
            rue_num:"{{ $rude['rue_num'] }}",
            rue_nom:"{{ $rude['rue_nom'] }}",
            
            // -------------
            tip_doc: "{{ $rude['tip_doc'] }}",    
            num_doc: "{{ $rude['num_doc'] }}", 
            fec_nac: "{{ $rude['fec_nac'] }}",    
            sexo: "{{ $rude['sexo'] }}",
            
            // -------------
            optCurso: {{ $gestion['gst_grd_escolar'] }},
            gst_aula: "{{ $gestion['gst_aula'] }}",

            // -------------
            dir_prov: "{{ $dir['dir_prv'] }}",   
            municipio: "{{ $dir['dir_mun'] }}",  
            loc_comn: "{{ $dir['dir_loc'] }}",
            zn_villa: "{{ $dir['dir_zon'] }}",   
            av_calle: "{{ $dir['dir_calle_ave'] }}",   
            telf: "{{ $dir['dir_telf'] }}",
            cel: "{{ $dir['dir_cel'] }}",
            num_viv: "{{ $dir['dir_num_viv'] }}",
            
            // -------------
            idi_est:"{{ $idioma['idi_habl'] }}", 
            idihab1_est:"{{ $idioma['idi_habl1'] }}", 
            idihab2_est:"{{ $idioma['idi_habl2'] }}", 
            idihab3_est:"{{ $idioma['idi_habl3'] }}",
            
            // -------------
            pert_est:"{{ $idioma['idi_nacion'] }}",    
            pert_est_otro:"{{ $idioma['idi_nacion2'] }}",
            
            // -------------
            exit_salud_est:"{{ $salud['sal_centro'] }}",  
            vec_salud_est:"{{ $salud['sal_frec'] }}",   
            disc_est:"",
            dis1:"{{ $salud['sal_disc1'] }}",    
            dis2:"{{ $salud['sal_disc2'] }}", 
            dis3:"{{ $salud['sal_disc3'] }}",   
            discp:"{{ $salud['sal_adq'] }}",
            discp_otro:"{{ $salud['sal_discOtro'] }}",
            
            //--------------
            ser_agua:"{{ $serBas['ser_agua'] }}",    
            elec_est:"{{ $serBas['ser_energia'] }}",        
            water_est:"{{ $serBas['ser_letrina'] }}",            
            
            // -------------
            trab_est:"{{ $activ['act_realizada'] }}",    
            dia_trab_est:"{{ $activ['act_diastrab'] }}",    
            rec_pag_est:"{{ $activ['recpago'] }}",
            
            // -------------
            internet_est:"{{ $net['int_lug'] }}", 
            frec_inter_est:"{{ $net['int_frecuencia'] }}",
            
            transp_esp:"{{ $transp['trs_como'] }}", 
            trans_otro_est:"{{ $transp['trs_otro'] }}", 
            transp_tiempo:"{{ $transp['trs_tiempo'] }}",
            
            // -------------
            ci_tut:"{{ $tutor['ci_tut'] }}", 
            ape_tut:"{{ $tutor['ape_tut'] }}", 
            nom_tut:"{{ $tutor['nom_tut'] }}", 
            idim_tut:"{{ $tutor['idim_tut'] }}",
            
            ocp_tut:"{{ $tutor['ocp_tut'] }}",
            grd_tut:"{{ $tutor['grd_tut'] }}", 
            paren_tut:"{{ $tutor['paren_tut'] }}", 
            
            // -------------
            ci_madre:"{{ $tutor['ci_madre'] }}",
            ape_madre:"{{ $tutor['ape_madre'] }}", 
            nom_madre:"{{ $tutor['nom_madre'] }}", 
            idim_madre:"{{ $tutor['idim_madre'] }}", 
            ocp_madre:"{{ $tutor['ocp_madre'] }}", 
            grd_madre:"{{ $tutor['grd_madre'] }}",            
            
            
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
import esGECN from '/jquery/vue-datepicker/es.js';  
        
           
const config = {
    errorBagName: 'errors',
    delay: 1000,
    messages: null,
    strict: true
};
Vue.use(VeeValidate, config);
const app = new Vue({
    el: '#Secr_actividad',
    components: {
                    vuejsDatepicker,                    
                },
    validator: null,
    created: function () {
        this.getAct();
    },
    data() {
        return {
            com_tit: "",            
            listado: "",
            fec: "", 
            date2:"",                                                           
            es: esGECN,
            state: {
                date: '',                          
                disabledDates:{ days:[0] },                
            },
        }
    },
    methods: {
        getAct: function () {
            var urlAct = "cal_actividad/mostrar";            
            axios.get(urlAct).then(response => {
                this.listado = response.data;                
            });
        },
        customFormatter(date) {
                        return moment(date).format('DD/MM/YYYY');
                    },
        crearActividad: function () {
            var urlGuaCom = "acc_calactividad";
            var fecGECN = moment(String(this.fec)).format('D/MM/YYYY');
            axios.post(urlGuaCom, {
                act_tit: this.com_tit,                
                act_fec: fecGECN
            }).then(response => {
                this.getAct();
                this.com_tit = '';                
                this.fec = '';
                toastr.info('Actividad Guardada!!!');
            }).catch(error => {
                this.errors = error.response.data
            });
            
        },
        eliminarComunicado: function (com) {            
            var urlAct = "acc_calactividad/" + com.act_id;
            axios.delete(urlAct).then(response => {
                this.getAct();
                toastr.warning('Actividad Eliminada!!!' + response.data);
            })            
        },
        // --------------
        validateBeforeSubmit(e) {
           /* 
           var valFec = this.$validator.validateAll()
           toastr.warning("->"+valFec);
           return;
           */
            this.$validator.validateAll();
            if (this.errors.any()) {
                e.preventDefault();
            } else {
                this.crearActividad();
            }

        }
    }
});
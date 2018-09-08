const config = {
    errorBagName: 'errors',
    delay: 1000,
    messages: null,
    strict: true
};
Vue.use(VeeValidate, config);
const app = new Vue({
    el: '#Secr_actividad',
    validator: null,
    created: function () {
        this.getAct();
    },
    data() {
        return {
            com_tit: "",
            com_fec: "",
            listado: ""
        }
    },
    methods: {
        getAct: function () {
            var urlAct = "cal_actividad/mostrar";            
            axios.get(urlAct).then(response => {
                this.listado = response.data;
                
            });
        },
        crearActividad: function () {
            var urlGuaCom = "acc_calactividad";
            axios.post(urlGuaCom, {
                act_tit: this.com_tit,                
                act_fec: this.com_fec
            }).then(response => {
                this.getAct();
                this.com_tit = '';
                this.com_fec = '';
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
            this.$validator.validateAll();
            if (this.errors.any()) {
                e.preventDefault();
            } else {
                this.crearActividad();
            }

        }
    }
});
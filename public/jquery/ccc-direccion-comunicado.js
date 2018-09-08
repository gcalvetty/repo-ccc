const config = {
    errorBagName: 'errors',
    delay: 1000,
    messages: null,
    strict: true
};
Vue.use(VeeValidate, config);
const app = new Vue({
    el: '#Dir_comunicado',
    validator: null,
    created: function () {
        this.getAct();
    },
    data() {
        return {
            // ------------- 
            com_para: "",
            com_tit: "",
            com_desc: "",
            com_fec: "",
            listado: ""

        }
    },
    methods: {
        getAct: function () {
            var urlAct = "comunicado/mostrar";            
            axios.get(urlAct).then(response => {
                this.listado = response.data;
                
            });
        },
        crearComunicado: function () {
            var urlGuaCom = "acc_comunicado";
            axios.post(urlGuaCom, {
                com_tipo: this.com_para,
                com_tit: this.com_tit,
                com_desc: this.com_desc,
                com_fec: this.com_fec
            }).then(response => {
                this.getAct();
                this.com_para = '';
                this.com_tit = '';
                this.com_desc = '';
                this.com_fec = '';
                toastr.info('Comunicado Guardado!!!');
            }).catch(error => {
                this.errors = error.response.data
            });
            
        },
        eliminarComunicado: function (com) {            
            var urlAct = "acc_comunicado/" + com.com_id;
            axios.delete(urlAct).then(response => {
                this.getAct();
                toastr.warning('Comunicado Eliminado!!!' + response.data);
            })            
        },
        // --------------
        validateBeforeSubmit(e) {
            this.$validator.validateAll();
            if (this.errors.any()) {
                e.preventDefault();
            } else {
                this.crearComunicado();
            }

        }
    }
});
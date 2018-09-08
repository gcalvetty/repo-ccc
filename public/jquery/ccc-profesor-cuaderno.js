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
            toastr.info(''+CKEDITOR.instance('CCC').getData());
            /*
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
             */
        },
        eliminarSeguimiento: function (tarea) {
            var urlAct = "cuaderno/borrar/" + tarea.tar_id;            
            axios.delete(urlAct).then(response => {
                this.getAct();
                toastr.warning('Seguimiento Eliminado!!!' + response.data);
            })
        },

    }
});
$(document).ready(function(){
    //CKEDITOR.replace('CCC'); 
    initSample(); 
});



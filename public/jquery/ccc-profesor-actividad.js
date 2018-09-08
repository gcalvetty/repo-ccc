new Vue({
    el: "#Prof_actividades",
    created: function () {
        this.getAct();
    },
    data: {
        listado: [],
        tar_cur_tit: '',
        tar_mat_tit: '',
        tar_materia: '',
        tar_desc: '',
        fini: '',
        errors: []
    },
    mounted: function () { //cuando se cargo la pagina

    },
    methods: {
        getAct: function () {
            var urlAct = "actividad/mostrar";
            axios.get(urlAct).then(response => {
                this.listado = response.data;
            });
        },
        crearTarea: function () {
            var urlGuaAct = "actividad";
            var cadena = this.tar_materia;
            var res = cadena.split(',');
            this.tar_cur_tit = res[0];
            this.tar_materia = res[1];
            this.tar_mat_tit = $("#tar_m option:selected").text();

            //toastr.success('Tarea Guardada:'+this.tar_mat_tit+' - '+this.tar_materia);
            axios.post(urlGuaAct, {
                Curso: this.tar_cur_tit,
                Materia: this.tar_materia,
                Mat_Tit: this.tar_mat_tit,
                Tarea: this.tar_desc
            }).then(response => {
                this.getAct();
                this.tar_materia = '';
                this.tar_desc = '';
                this.errors = '';
                toastr.info('Tarea Guardada!!!');
            }).catch(error => {
                this.errors = error.response.data
            });
        },
        eliminarTarea: function (tarea) {
            var urlAct = "actividad/" + tarea.tar_id;
            
            axios.delete(urlAct).then(response => {
                this.getAct();
                toastr.warning('Tarea Eliminada!!!' + response.data);
            })
        },

    }
});

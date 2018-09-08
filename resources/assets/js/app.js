/*
 * Aqui Programamos para SISCCC
 */



new Vue({
    el: "#contador_crud",
    created: function () {
        this.getAlum();
    },
    data: {
        listado: [],
        errors: [],
    },
    mounted: function () { //cuando se cargo la pagina
        $(".desbot").hide();
    },
    methods: {
        getAlum: function () {
            var urlAlum = "contador/bloquear";            
            axios.get(urlAlum).then(response => {
                this.listado = response.data;
            });
            },        
        ActAlm: function () {},
        bloqAlm: function (AlumId) {            
            var url = "contador/bloquear/alumno/"+AlumId+"/blodes/1";
            $("#" + AlumId + " .desbot.btndesbloq" + AlumId).show();
            $("#" + AlumId + " .actbot.btnbloq" + AlumId).hide();
            
            $("#" + AlumId + " .actbot.btndesbloq" + AlumId).show();
            $("#" + AlumId + " .desbot.btnbloq" + AlumId).hide();
            axios.get(url).then(response => {
                toastr.success('Alumno Bloqueado');
            });            
        },
        desbloqAlm: function (AlumId) {             
            var url = "contador/bloquear/alumno/" + AlumId+"/blodes/2";
            $("#" + AlumId + " .actbot.btnbloq" + AlumId).show();
            $("#" + AlumId + " .desbot.btndesbloq" + AlumId).hide();
            
            $("#" + AlumId + " .actbot.btndesbloq" + AlumId).hide();
            $("#" + AlumId + " .desbot.btnbloq" + AlumId).show();
            axios.get(url).then(response => {
                toastr.success('Alumno DesBloqueado');                
            });
        }
    } 
}); 


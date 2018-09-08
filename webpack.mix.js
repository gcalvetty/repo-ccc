const { mix } = require('laravel-mix');
// let mix = require('laravel-mix');

mix.scripts([
   'resources/assets/js/jquery-3-1-1-min.js',
   'resources/assets/js/jquery-ui.min.js',
   'resources/assets/js/vue.js',
   'resources/assets/js/axios.js',
   'resources/assets/js/toastr.js',
   'resources/assets/js/app.js'   
], 'public/js/app.js')
   .styles([
   'resources/assets/css/sisccc-inscripcion.css',
   'resources/assets/css/ionicons.min.css',
   'resources/assets/css/font-awesome.css',
   'resources/assets/css/animate.css',
   'resources/assets/css/toastr.css'
], 'public/css/sisccc.css');

/*-- DataTables --*/
mix.scripts([
   'resources/assets/plugins/datatables/jquery.dataTables.min.js',
   'resources/assets/plugins/datatables/dataTables.bootstrap.min.js',
   'resources/assets/plugins/slimScroll/jquery.slimscroll.min.js',
   'resources/assets/plugins/fastclick/fastclick.js'   
], 'public/js/app-tabla.js');

const elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');

elixir(function(mix) {
    mix.version("public/css/app.css");
});


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir(mix => {
    mix.sass(['app.scss','sisccc.scss'])
            .webpack('app.js')
            .styles([                               
                'sisccc-inscripcion.css',
                'ionicons.min.css',
                'font-awesome.css',
                'animate.css'
            ],'public/css/sisccc.css').version('public/css/sisccc.css');
});

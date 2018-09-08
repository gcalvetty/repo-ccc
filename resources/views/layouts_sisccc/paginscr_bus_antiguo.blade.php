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
        <link href="{{ asset("css/app.css") }}" rel="stylesheet">
        <link href="{{ asset("css/sisccc.css") }}" rel="stylesheet">        

    </head>
    <body> 
        <div class="navbar-wrapper">
            <div class="container">
                {!! Html::menuHome() !!} 
            </div>
        </div> 

        @yield('sis_contenido')        

        <script src="{{ asset("jquery/jquery-3.1.1.min.js") }}" ></script> 
        <script src="{{ asset("js/app-tabla.js") }}" ></script> 
        
        <!-- Bootstrap 3.3.6 -->
        <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("dist/js/app.min.js") }}"></script>
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>    
        

        
    </body>
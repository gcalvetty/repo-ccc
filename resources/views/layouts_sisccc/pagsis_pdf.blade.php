<!DOCTYPE html>
<html lang="es"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>{{ config('app.name')}} | @yield('titulo')</title>        

        <!-- Styles -->        
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap_repo.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/sisccc-pdf.css') }}">       
    </head>
    <body> 
        @yield('sis_contenido')
    </body>
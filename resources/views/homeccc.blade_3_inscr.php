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

        <!-- Favicon -->        
        <link rel="apple-touch-icon" sizes="76x76" href="/imagenes/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/imagenes/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/imagenes/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/imagenes/favicon/manifest.json">
        <link rel="mask-icon" href="/imagenes/favicon/safari-pinned-tab.svg" color="#385c27">
        <meta name="msapplication-TileColor" content="#7cba5f">
        <meta name="theme-color" content="#7cba5f">
        <meta name="google-site-verification" content="TMCJ84VbGNP_H5cHT4uBHnMKj0lKeK0yYNPNw1wBgXU" />
        <title>{{ config('app.name', 'CCC-SIS') }}</title>

        <!-- Styles -->
        <link href="/dist/css/AdminLTE.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/sisccc.css" rel="stylesheet">     


        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?>
        </script>
    </head>
    <body>
        <div class="navbar-wrapper">
            <div class="container">
                {!! Html::menuHome() !!}  
            </div>
        </div>        
        <!-- Informacion para cel. peq-->
        <div class="container visible-xs-block inscripcion">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="/imagenes/banner-inscripcion/pre2.jpg" alt="Pre-Inscripción">
                    <div class="caption">
                        <h4>Iniciamos Inscripciones</h4>
                        <p>Recibimos Solicitud a nuestra unidad educativa</p>
                        <p><a class="btn btn-lg btn-primary" href="{{route('inscr-ccc')}}" role="button">Reserva de Inscripción</a></p>
                    </div>
                </div>
            </div>
        </div>
        @if (Auth::guest()) 
        <div class="home-cont1">
            
        @include('layouts_sisccc.pag-home-cont1')
        </div>
        @endif
        
        @include('layouts_sisccc.pagfooter-home')         
    </body>
</html>

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

        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
        <link href="/css/app.css" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]) ;?>
        </script>




        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;

                height: 100vh;
                margin: 0;
            }

            .title {
                font-size: 84px;
                text-align: center;
            }

        </style>
    </head>
    <body>
        @if (Auth::guest()) 
        {!! Html::menuHome() !!}
        @endif
        @can('usu_adm')
        {!! Html::menu('siscccConfig.menuAdm') !!}
        @endcan
        @can('usu_admtr')
        {!! Html::menu('siscccConfig.menuAdmtr') !!}
        @endcan
        @can('usu_dir')
        {!! Html::menu('siscccConfig.menuDir') !!}
        @endcan
        @can('usu_prof')
        {!! Html::menu('siscccConfig.menuProf') !!}
        @endcan
        @can('usu_cont')
        {!! Html::menu('siscccConfig.menuCont') !!}
        @endcan
        @can('usu_secr')
        {!! Html::menu('siscccConfig.menuSecr') !!}
        @endcan
        @can('usu_rege')
        {!! Html::menu('siscccConfig.menuReg') !!}
        @endcan
        @can('usu_estu')
        {!! Html::menu('siscccConfig.menuEstu_ccc') !!}
        @endcan
        @can('usu_tut')
        {!! Html::menu('siscccConfig.menuTut_ccc') !!}
        @endcan
        <div class="container">
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        {{ config('app.name')}}
                    </div>
                    @if (Auth::guest())    
                    <div class="panel panel-default">
                        <div class="panel-heading">Extranet</div>
                        <div class="panel-body">                           
                            {!! Html::menuopc('siscccConfig.menuExtranet') !!}
                        </div>
                    </div>  
                    <div class="panel panel-default">
                        <div class="panel-heading">Intranet</div>
                        <div class="panel-body">
                            {!! Html::menuopc('siscccConfig.menuIntranet1') !!}
                            <hr/>                            
                            {!! Html::menuopc('siscccConfig.menuIntranet2') !!}
                        </div>    
                    </div>
                    @endif
                </div>
            </div>
        </div>    
        <!-- Scripts -->
        <script src="/js/app.js"></script>    
    </body>
</html>

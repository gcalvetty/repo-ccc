<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name')); ?></title>

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


        <title><?php echo e(config('app.name', 'CCC-SIS')); ?></title>

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
        <?php if(Auth::guest()): ?> 
        <?php echo Html::menuHome(); ?>

        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usu_adm')): ?>
        <?php echo Html::menu('siscccConfig.menuAdm'); ?>

        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usu_admtr')): ?>
        <?php echo Html::menu('siscccConfig.menuAdmtr'); ?>

        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usu_dir')): ?>
        <?php echo Html::menu('siscccConfig.menuDir'); ?>

        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usu_prof')): ?>
        <?php echo Html::menu('siscccConfig.menuProf'); ?>

        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usu_cont')): ?>
        <?php echo Html::menu('siscccConfig.menuCont'); ?>

        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usu_secr')): ?>
        <?php echo Html::menu('siscccConfig.menuSecr'); ?>

        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usu_rege')): ?>
        <?php echo Html::menu('siscccConfig.menuReg'); ?>

        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usu_estu')): ?>
        <?php echo Html::menu('siscccConfig.menuEstu_ccc'); ?>

        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usu_tut')): ?>
        <?php echo Html::menu('siscccConfig.menuTut_ccc'); ?>

        <?php endif; ?>
        <div class="container">
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        <?php echo e(config('app.name')); ?>

                    </div>
                    <?php if(Auth::guest()): ?>    
                    <div class="panel panel-default">
                        <div class="panel-heading">Extranet</div>
                        <div class="panel-body">                           
                            <?php echo Html::menuopc('siscccConfig.menuExtranet'); ?>

                        </div>
                    </div>  
                    <div class="panel panel-default">
                        <div class="panel-heading">Intranet</div>
                        <div class="panel-body">
                            <?php echo Html::menuopc('siscccConfig.menuIntranet1'); ?>

                            <hr/>                            
                            <?php echo Html::menuopc('siscccConfig.menuIntranet2'); ?>

                        </div>    
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>    
        <!-- Scripts -->
        <script src="/js/app.js"></script>    
    </body>
</html>

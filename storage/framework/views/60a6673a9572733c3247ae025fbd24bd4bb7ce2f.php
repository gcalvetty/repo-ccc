<!DOCTYPE html>
<html lang="es"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>">
        <title><?php echo e(config('app.name')); ?> | <?php echo $__env->yieldContent('titulo'); ?></title>        

        <!-- Styles -->        
        <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap_repo.css')); ?>"> 
        <link rel="stylesheet" href="<?php echo e(asset('css/sisccc-pdf.css')); ?>">       

        <!-- DataTables -->
        <link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
    </head>
    <body> 
        <?php echo $__env->yieldContent('sis_contenido'); ?>
    </body>
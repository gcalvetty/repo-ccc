<?php $__env->startSection('titulo','Estudiante'); ?>
<?php $__env->startSection('usuccc'); ?>
<?php echo e($usuactivo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('usuico'); ?>
<i class="fa fa-graduation-cap fa-2x"></i>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('usuico-peq'); ?>
<i class="fa fa-graduation-cap fa-lg"></i>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sis_menu_lateral'); ?>
<?php echo $__env->make('layouts_estudiante.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<?php $__env->stopSection(); ?>	

<?php $__env->startSection('sis_contenido'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">    	
    <!-- Content Header (Page header) -->
    <section class="content-header">      
        <h1>
            Escritorio            
        </h1>
        <ol class="breadcrumb">
            <li><a href="/estudiante/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Escritorio</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <section class="col-lg-8 col-md-8 col-sm-12 col-md-push-2 col-lg-push-2 connectedSortable ui-sortable">
                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-binoculars"></i>
                        <h3 class="box-title">Actividades</h3>
                    </div>
                    <div class="box-body">    
                        <div id="calendario"></div>
                    </div>    
                </div> 
            </section>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <?php echo Html::footer('siscccConfig.pie'); ?>

</footer>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sis_actividad'); ?>
    <?php $__currentLoopData = $ListaC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Comu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $date = date_create($Comu->com_fec);
            $fecha = date_format($date, 'Y, m, d');
        ?>
        {
            title: '<?php echo e($Comu->com_titulo); ?>',
            start: new Date(<?php echo e($fecha); ?>),            
            backgroundColor: "#333", //red
            borderColor: "#f56954" //red
        },                                    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <?php $__currentLoopData = $ListaA; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $date = date_create($Act->act_fec);
            $fecha = date_format($date, 'Y, m, d');
        ?>
        {
            title: '<?php echo e($Act->act_titulo); ?>',
            start: new Date(<?php echo e($fecha); ?>),            
            backgroundColor: "#f56954", //red
            borderColor: "#f56954" //red
        },                                    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<!-- Control Sidebar -->
<?php echo $__env->make('layouts_sisccc.pagsis_estudiante_actividad', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('titulo','Estudiante | Comportamiento'); ?>
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
            <li><a href="<?php echo e(route("Escritorio")); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Comportamiento</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <section class="col-lg-12 connectedSortable ui-sortable">
                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-binoculars"></i>
                        <h3 class="box-title">Comportamiento</h3>
                    </div>
                    <div class="box-body">    
                        <div class="tarea">
                            <table id="example1" class="table table-condensed table-hover table-striped">
                                <thead>
                                    <tr>                                
                                        <th>#</th>
                                        <th class="col-lg-2">Fecha</th>
                                        <th class="col-lg-2">Comportamiento</th>                                        
                                        <th class="col-lg-7">Observación</th>                                
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cont = 1 ?>
                                    <?php $__currentLoopData = $comp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                    $tipTar = "";
                                    $tipMen = "";
                                    switch ($Alumno->tiptarj) {
                                        case "Sin Tarjeta":
                                            $tipMem = "Sin Tarjeta";
                                            $tipTar = "success";
                                            break;
                                        case "Tarjeta Blanca":
                                            $tipMem = "Tarjeta Blanca";
                                            $tipTar = "info";
                                            break;
                                        case "Tarjeta Amarilla":
                                            $tipMem = "Tarjeta Amarilla";
                                            $tipTar = "warning";
                                            break;
                                        case "Tarjeta Roja":
                                            $tipMem = "Tarjeta Roja";
                                            $tipTar = "danger";
                                            break;
                                    }
                                    ?>
                                    <tr class="<?php echo e($tipTar); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo e($tipMem); ?>">
                                        <td class="col-md-1">
                                            <span class="label label-<?php echo e($tipTar); ?>">
                                                <span class="glyphicon glyphicon-tag <?php echo e($tipTar); ?>" aria-hidden="true"></span> 
                                            </span>
                                        </td>
                                        <td class="col-md-2"><?php echo e(sis_ccc\libreriaCCC\fncCCC::getDateAttribute($Alumno->fec)); ?></td>                                          
                                        <td class="col-md-4" style="text-align:left;">
                                            <?php echo e($Alumno->tipcomp); ?></td>                                        
                                        <td class="col-md-5 text-md-justify"><p class="text-justify"><?php echo e(strip_tags($Alumno->obser)); ?></p></td>
                                    </tr>                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                </tbody>                 
                            </table>
                        </div>
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





<?php echo $__env->make('layouts_sisccc.pagsis_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
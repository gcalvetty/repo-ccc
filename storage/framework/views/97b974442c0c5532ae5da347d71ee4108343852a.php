<?php $__env->startSection('titulo','Estudiante | Tareas'); ?>
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
            <li class="active">Tarea</li>
        </ol>
    </section>

    <!-- Main content -->    

    <section class="content">
        <div class="row">
            <section class="col-lg-12 connectedSortable ui-sortable">
                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-tasks"></i>
                        <h3 class="box-title">Tareas</h3>
                    </div>
                    <div class="box-body">    
                        <div class="tarea">
                            <table id="example1" class="table table-condensed table-hover table-striped">
                                <thead>
                                    <tr>                                
                                        <th>#</th>
                                        <th class="col-lg-2">Fecha</th>
                                        <th class="col-lg-3">Materia</th>
                                        <th class="col-lg-7">Descripción</th>                                
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cont = 1 ?>
                                    <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>                   
                                        <td><?php echo e($cont++); ?></td> 
                                        <td><?php echo e($Alumno->tar_fec_ini); ?></td> 
                                        <td><?php echo e($Alumno->tar_materia); ?></td>
                                        <td class="tar_desc"><?php echo e($Alumno->tar_desc); ?></td>                                                               
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
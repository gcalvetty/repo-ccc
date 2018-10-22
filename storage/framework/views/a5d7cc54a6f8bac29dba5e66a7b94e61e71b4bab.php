<?php $__env->startSection('titulo','Regente'); ?>	
<?php $__env->startSection('usuccc'); ?>
<?php echo e($usuactivo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('usuico'); ?>
<i class="fa fa-cubes fa-2x"></i>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('usuico-peq'); ?>
<i class="fa fa-cubes fa-lg"></i>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sis_menu_lateral'); ?>
<?php echo $__env->make('layouts_regente.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('sis_contenido'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">    	
    <!-- Content Header (Page header) -->
    <section class="content-header">      
        <h1>
            Escritorio:
            <small>Comportamiento</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/direccion/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Escritorio</li>
        </ol>
    </section>    

    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Comportamiento Escolar - Lista de Alumnos</h3>                        
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Comportamiento</th>
                                    <th>Curso</th>
                                    <th>Alumno</th> 
                                    <th>Tarjeta</th> 
                                    <th>Observacion</th>
                                    <th>Fecha</th>
                                    <th>Eliminar</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $Lista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $tipTar = "";
                                switch ($Alumno->tiptarj) {
                                    case "Sin Tarjeta":
                                        $tipTar = "success";
                                        break;
                                    case "Tarjeta Blanca":
                                        $tipTar = "info";
                                        break;
                                    case "Tarjeta Amarilla":
                                        $tipTar = "warning";
                                        break;
                                    case "Tarjeta Roja":
                                        $tipTar = "danger";
                                        break;
                                }
                                ?>
                                <tr class="<?php echo e($tipTar); ?>">
                                    <td><?php echo e($Alumno->id); ?></td>  
                                    <td><?php echo e($Alumno->tipcomp); ?></td>
                                    <td><?php echo e($Alumno->curso); ?> </td>
                                    <td><?php echo e($Alumno->nombre); ?> <?php echo e($Alumno->ape_paterno); ?> <?php echo e($Alumno->ape_materno); ?> </td>                                    
                                    <td><?php echo e($Alumno->tiptarj); ?></td>
                                    <td><?php echo html_entity_decode($Alumno->obser) ?></td>
                                    <td><?php echo e($Alumno->fec); ?></td>
                                    <td>
                                        <button type="button" class="btn btn-danger" 
                                                data-toggle="modal" 
                                                data-target=".bs-example-modal-lg"
                                                data-idalm="<?php echo e($Alumno->id); ?>"
                                                data-nomalm=" <?php echo e($Alumno->nombre); ?> <?php echo e($Alumno->ape_paterno); ?> <?php echo e($Alumno->ape_materno); ?>">
                                            <i class="fa fa-trash"></i></button>
                                    </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="EstudianteModal">
        <div class="modal-dialog" role="document" id="Comportamiento">            
            <form v-on:submit="validateBeforeSubmit" class="form-horizontal" role="form" action="<?php echo e(route('Rege.delCom')); ?>">    
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Desea elimar el Registro del Alumn@: <span class="Alm"></span></h4>
                    </div>
                    <input class="AlmId" id="AlmId" name="AlmId" value="" hidden="true">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>                        
                        <?php echo Form::submit('Aceptar', ['class' => 'btn btn-danger']);; ?>

                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <?php echo Html::footer('siscccConfig.pie'); ?>

</footer>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu-configuracion'); ?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home">1</i></a></li>      
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Actividades Recientes</h3>
        </div>
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_sisccc.pagsis_regente_comportamiento', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
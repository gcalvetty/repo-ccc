<?php $__env->startSection('titulo','Secretaría'); ?>	
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
<?php echo $__env->make('layouts_secretaria.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>		

<?php $__env->startSection('sis_alm_inscritos'); ?>
<?php echo $__env->make('layouts_sisccc.partials.pagsis_alm_insc', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sis_contenido'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">    	
    <!-- Content Header (Page header) -->
    <section class="content-header">      
        <h1>
            Escritorio
            <small>Bienvenido!!!</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('Secr.Reg')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Escritorio</li>
        </ol>
        <?php if(Session::has('MensajeElim')): ?>
        <p class="alert alert-success" transition="fade"><?php echo e(Session::get('MensajeElim')); ?></p>           <?php endif; ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php if(isset($CantAlm)): ?>
        <?php echo $__env->yieldContent('sis_alm_inscritos'); ?>
        <?php endif; ?>
        <div class="row">
            <section class="col-lg-6 connectedSortable ui-sortable">
                <div class="box box-warning">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-comments-o"></i>
                        <h3 class="box-title">Comunicados</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>                                         
                                    <th>Titulo</th>
                                    <th>Descripción</th> 
                                    <th>Fecha</th>                                                                          
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $ListaC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Comu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($Comu->com_id); ?></td>  
                                    <td><?php echo e($Comu->com_titulo); ?></td>
                                    <td><?php echo e($Comu->com_desc); ?></td>                                    
                                    <td><?php echo e($Comu->com_fec); ?></td> 
                                </tr>                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <section class="col-lg-6 connectedSortable ui-sortable">

                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">Actividades</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>                                         
                                    <th>Titulo</th>                                     
                                    <th>Fecha</th>                                                                          
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $ListaA; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($Act->act_id); ?></td>  
                                    <td><?php echo e($Act->act_titulo); ?></td>                                    
                                    <td><?php echo e($Act->act_fec); ?></td> 
                                </tr>                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Lista de Alumnos</h3>
                        <div class="box-tools">
                            <form method="GET" action="<?php echo e(route('Dir.Reg')); ?>">
                                <div class="input-group input-group-sm" style="width: 270px;">
                                    <input name="buscar" class="form-control pull-right" placeholder="Buscar Alumno por Nombre" type="text" value="<?php echo e(Request::get('buscar','')); ?>">

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>        
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Curso</th>
                                    <th>Alumno</th>   
                                    <th>Editar</th>
                                    <th>Imprimir</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $Lista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($Alumno->id); ?></td>  
                                    <td><?php echo e($Alumno->curso); ?> - <?php echo e($Alumno->aula); ?></td>
                                    <td><?php echo e($Alumno->ape_paterno); ?> <?php echo e($Alumno->ape_materno); ?> <?php echo e($Alumno->nombre); ?></td>

                                    <td style="text-aling:center">
                                        <a href="<?php echo e(route('rude-s.edit', ['alumno' => $Alumno->id])); ?>"><i class="fa fa-pencil-square-o   fa-lg" aria-hidden="true"></i></a>
                                    </td>    
                                    <?php if($Alumno->estado == "No Inscrito"): ?>
                                    <td>
                                        <a href="#" target="_blank" class="btn btn-large disabled"><i class="fa fa-print" aria-hidden="true"></i></a>
                                    </td>
                                    <?php else: ?>
                                    <td>
                                        <a href="<?php echo e(route('rude-s.imprimir', ['alumno' => $Alumno->id])); ?>" target="_blank"><i class="fa fa-print  fa-lg" aria-hidden="true"></i></a>
                                    </td>
                                    <?php endif; ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                </tr>

                                </tfoot>
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

<?php echo $__env->make('layouts_sisccc.pagsis', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
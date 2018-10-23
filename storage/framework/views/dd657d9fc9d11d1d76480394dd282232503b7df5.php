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
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-6 col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Reporte RUDE</h3>
                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>     
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3><i class="fa fa-address-book-o" aria-hidden="true"> RUDE - C.C.C.</i></h3>
                            </div>
                            <div class="panel-body"> 
                                <div class="list-group">
                                    <a href="<?php echo e(route('rep.rude')); ?>" class="list-group-item">
                                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>RUDE - Col. Cristiano Colcapirhua</b>
                                    </a>                   
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Reporte de Alumnos por Nivel</h3>
                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>     
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">                        
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3><i class="fa fa-address-book-o" aria-hidden="true"> Tareas Designadas por Curso</i></h3>
                            </div>


                            <div class="panel-body"> 
                                <div class="list-group"> 
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <nav aria-label="Page navigation ">
                                                <h4>Sección</h4>
                                                <ul class="pagination">                                            
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "1"])); ?>">
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> 1ro</a></li>
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "2"])); ?>">
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> 2do</a></li>                                                    
                                                </ul>
                                            </nav>
                                        </li>

                                        <li class="list-group-item">
                                            <nav aria-label="Page navigation ">
                                                <h4>Primaria</h4>
                                                <ul class="pagination">                                            
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "3"])); ?>">
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> 1ro</a></li>
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "4"])); ?>">
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> 2do</a></li>
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "5"])); ?>">
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> 3ro</a></li>
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "6"])); ?>">
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> 4to</a></li>
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "7"])); ?>">
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> 5to</a></li>                                            
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "8"])); ?>">
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> 6to</a></li>                                            

                                                </ul>
                                            </nav>
                                        </li>

                                        <li class="list-group-item">
                                            <nav aria-label="Page navigation ">
                                                <h4>Secundaria</h4>
                                                <ul class="pagination">                                            
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "9"])); ?>"> 
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i>1ro</a></li>
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "10"])); ?>"> 
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i>2do</a></li>
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "11"])); ?>"> 
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i>3ro</a></li>
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "12"])); ?>"> 
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i>4to</a></li>
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "13"])); ?>"> 
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i>5to</a></li>                                            
                                                    <li><a href="<?php echo e(route('rep.TareaAlum', ['curso' => "14"])); ?>"> 
                                                            <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i>6to</a></li>                                            
                                                </ul>
                                            </nav>
                                        </li>                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>                   

                    <!-- /.box-body -->
                </div>


            </div>
            <div class="col-md-6  col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Reporte de Alumnos por Nivel</h3>
                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>     
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">                        
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3><i class="fa fa-address-book-o" aria-hidden="true"> Lista de Alumnos - Reportes - Descargar</i></h3>
                            </div>


                            <div class="panel-body"> 
                                <div class="list-group">
                                    <a href="<?php echo e(route('rep.secrAlumnos', ['nivel' => 4])); ?>" class="list-group-item">
                                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>Taller Inicial</b>
                                    </a>
                                    <a href="<?php echo e(route('rep.secrAlumnos', ['nivel' => 1])); ?>" class="list-group-item">                        
                                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>Inicial / Sección</b>
                                    </a>
                                    <a href="<?php echo e(route('rep.secrAlumnos', ['nivel' => 2])); ?>" class="list-group-item">
                                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>Primaria</b>
                                    </a>
                                    <a href="<?php echo e(route('rep.secrAlumnos', ['nivel' => 3])); ?>" class="list-group-item">
                                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>Secundaria</b>
                                    </a>                    
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                 <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Reporte de Apoyo</h3>
                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>     
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">                        
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3><i class="fa fa-address-book-o" aria-hidden="true"> Reportes</i></h3>
                            </div>


                            <div class="panel-body"> 
                                <div class="list-group">                                    
                                    <a href="<?php echo e(route('rep.Regencia')); ?>" class="list-group-item">                        
                                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>Regencia</b>
                                    </a>
                                    <a href="<?php echo e(route('rep.Comunicado')); ?>" class="list-group-item hidden">
                                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>Comunicados</b>
                                    </a>
                                    <a href="<?php echo e(route('rep.Psicologico')); ?>" class="list-group-item">
                                        <i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i> <b>Psicolog@</b>
                                    </a>                    
                                </div>
                            </div>
                        </div>

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
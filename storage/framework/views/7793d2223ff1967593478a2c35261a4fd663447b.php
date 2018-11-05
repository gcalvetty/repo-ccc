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
            <li><a href="/dirección/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Escritorio</li>
        </ol>
    </section>

    <!-- Main content -->    
    <?php if($VerCont=="Inscrito"): ?>
    <section class="content">
        <div class="row">
            <section class="col-lg-6 connectedSortable ui-sortable">
                <div class="box box-warning">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-comments-o"></i>
                        <h3 class="box-title">Comunicado - Estudiantes</h3>
                    </div>
                    <div class="box-body">
                        <div class="tarea">
                            <table class="table table-condensed table-hover table-striped">
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
                                        <td class="col-md-1"><?php echo e($Comu->com_id); ?></td>  
                                        <td class="col-md-4"><?php echo e($Comu->com_titulo); ?></td>
                                        <td class="col-md-4 text-justify"><?php echo e($Comu->com_desc); ?></td>                                    
                                        <td class="col-md-3"><?php echo e($Comu->com_fec); ?></td> 
                                    </tr>                                
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                                </tbody>
                            </table>
                        </div>
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
                        <div class="tarea">
                            <table class="table table-condensed table-hover table-striped">
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
                                        <td class="col-md-1"><?php echo e($Act->act_id); ?></td>  
                                        <td class="col-md-8"><?php echo e($Act->act_titulo); ?></td>                                    
                                        <td class="col-md-3"><?php echo e($Act->act_fec); ?></td> 
                                    </tr>                                
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>


        </div>    
        <div class="row">
            <section class="col-lg-6 connectedSortable ui-sortable">
                <div class="box box-success">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-tasks"></i>
                        <h3 class="box-title">Tareas</h3>
                    </div>
                    <div class="box-body">    
                        <div class="tarea">
                            <table class="table table-condensed table-hover table-striped">
                                <thead>
                                    <tr>                                
                                        <th>#</th>
                                        <th>Fecha</th>
                                        <th>Materia</th>
                                        <th>Descripción</th>                                
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cont = 1 ?>
                                    <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>                   
                                        <td class="col-md-1"><?php echo e($cont++); ?></td> 
                                        <td class="col-md-2"><?php echo e($Alumno->tar_fec_ini); ?></td> 
                                        <td class="col-md-3"><?php echo e($Alumno->tar_materia); ?></td>
                                        <td class="col-md-6 tar_desc text-justify"><?php echo e($Alumno->tar_desc); ?></td>                                                               
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td  class="verReg" colspan="4">
                                            <a href="<?php echo e(route("est.Tareas")); ?>">Ver Todas las Tareas <i class="fa fa-angle-double-right"></i></a>
                                        </td>
                                    </tr>                 
                                    </tfoot>                 
                            </table>
                        </div>
                    </div>    
                </div> 
            </section>
            <section class="col-lg-6 connectedSortable ui-sortable ">
                <div class="box box-info">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-binoculars"></i>
                        <h3 class="box-title">Comportamiento</h3>

                    </div>
                    <div class="box-body">    
                        <div class="tarea">
                            <table class="table table-condensed table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Fecha</th>
                                        <th>Comportamiento</th>
                                        <th>Observación</th>                                
                                    </tr>
                                </thead>
                                <tbody>                                    
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
                                        <td class="col-md-5 text-md-justify"><?php echo e(strip_tags($Alumno->obser)); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                                    <tr>
                                        <td class="verReg" colspan="5">
                                            <a href="<?php echo e(route("est.Compor")); ?>">Ver Todos las llamadas de Atención <i class="fa fa-angle-double-right"></i></a>
                                        </td>
                                    </tr>                 
                                </tbody>                 
                            </table>
                        </div>
                    </div> 
                </div> 
            </section>


        </div>

        <!-- Default box -->        
        <div class="box-body hidden">
            <section id="download">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Libreta Escolar</h3>
                                <span class="label label-primary pull-right"><i class="fa fa-html5"></i></span>
                            </div><!-- /.box-header -->
                            <?php if(( $libreta =='libreta.pdf') || ($libreta == '')): ?>
                            <div class="alert alert-danger" role="alert">            
                                <p>No tienen acceso para ver la libreta escolar del 3er Parcial!!!</p>                        
                            </div><!-- /.box-body -->
                            <?php else: ?>
                            <div class="box-body">            
                                <p>Puedes Vizualizar la libreta del estudiante ingresando a este enlace.</p>            
                                <a href="<?php echo e(route('libreta')); ?>" class="btn btn-primary" target="_blank"><i class="fa fa-download"></i> Ver Libreta</a>
                            </div><!-- /.box-body -->
                            <?php endif; ?>
                        </div><!-- /.box -->
                    </div><!-- /.col -->    
                </div><!-- /.row -->  
            </section>
        </div>
        <!-- /.box-body -->
    </section>
    <?php else: ?>
    <?php echo $__env->yieldContent('est_pago'); ?>
    <?php endif; ?>
</div>

<!-- /.content -->

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <?php echo Html::footer('siscccConfig.pie'); ?>

</footer>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('est_pago'); ?>
<section class="content">
    <div id="contador_crud" class="row">
        <div class="col-xs-12">

            <div class="box">                   
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-yellow" >
                            <h1 class="widget-user-desc">Pensiones Adeudadas!!!</h1>
                            <h3 class="widget-user-username" ><?php echo e($usuactivo); ?></h3> 

                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="/imagenes/avatar/user-ccc-peq.png" alt="User Avatar">
                        </div>
                        <div class="box-footer">
                            <div class="row">                                    
                                <!-- /.col -->
                                <div class="col-md-12 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">Consultar por Facebook</h5>
                                        <div class="col-sm-12  fb-comments" data-href="https://www.facebook.com/pg/ColegioCristianoColcapirhuaOficial" data-numposts="5"></div>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <div class="col-md-12">
                                    <div class="bs-example" data-example-id="simple-alerts"> 

                                        <div class="alert alert-danger" role="alert">                                                
                                            <p><i class="fa fa-2x fa-exclamation-triangle"> Debe pasar a cancelar sus deudas pendiente!!! - </i>
                                                <i class="fa fa-2x fa-phone-square"> 4 - 4372143</i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>   
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts_sisccc.pagsis_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
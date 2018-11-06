<?php $__env->startSection('titulo','Reporte'); ?>	

<?php $__env->startSection('sis_contenido'); ?>
<div class="container">
    <section class="cabeceraRepo row">        
        <table>
            <tr>
                <td class="logoRepo col-md-3">
                    <img src="<?php echo e(asset('imagenes/logo-ccc.png')); ?>">                                        
                </td>
                <td class="col-md-9" style="text-align: center;"> 
                    <h2>Reporte de Comportamiento</h2>
                </td>
            </tr>
        </table>
    </section>

    <section class="cuerpoRepo row">
        <div class="panel panel-success">        
            <div class="panel-heading"><h3><b><?php echo e($alumno); ?></b></h3></div>
            <div class="panel-body">                           
                <table class="table table-condensed table-hover table-striped">
                    <thead>
                        <tr>                            
                            <th>Tarjeta</th>
                            <th>Fecha</th>                    
                            <th>Comportamiento</th>
                            <th>Observación</th>                                
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo e($cont=0); ?>

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
                        <tr class="<?php echo e($tipTar); ?>" role="alert">                                                                                                                                                                             
                            <td class="col-md-4">
                                <div class="alert-<?php echo e($tipTar); ?>" role="alert">
                                    <b><?php echo e($tipMem); ?></b>
                                </div>
                            </td>
                            <td class="col-md-2">                        
                                <?php echo e(sis_ccc\libreriaCCC\fncCCC::getDateAttribute($Alumno->fec)); ?>

                            </td>                                          
                            <td class="col-md-2" style="text-align:left;">
                                <?php echo e($Alumno->tipcomp); ?></td>                                        
                            <td class="col-md-4 text-md-justify">
                                <?php echo e(strip_tags($Alumno->obser)); ?>

                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                  
                    </tbody>                 
                </table> 
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">

</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts_sisccc.pagsis_pdf', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Alumnos Inscritos por Area - Gestión <?php echo e($Gestion); ?></h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>                
        </div>
    </div>
    <div class="box-body">
        <div class="row AlmInsc">
            
            <?php $__currentLoopData = $CantAlm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clave => $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($clave!="totalAlum"): ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">                    
                    <?php if($clave=='seccion'): ?>
                    <span class="info-box-icon bg-green-active">
                        <i class="fa fa-sign-language" aria-hidden="true"></i>
                    </span>
                    <?php endif; ?>
                    <?php if($clave=='primaria'): ?>
                    <span class="info-box-icon bg-blue-active">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </span>
                    <?php endif; ?>
                    <?php if($clave=='secundaria'): ?>
                    <span class="info-box-icon bg-aqua-active">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </span>
                    <?php endif; ?>
                    <?php if($clave=='taller'): ?>
                    <span class="info-box-icon bg-maroon-active">
                        <i class="fa fa-child" aria-hidden="true"></i>
                    </span>
                    <?php endif; ?> 
                    <?php if($clave!='totalAlum'): ?>
                    <div class="info-box-content">
                        <span class="info-box-text tit_sec"><?php echo e($clave); ?></span>                  
                        <?php $__currentLoopData = $valor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clav2 => $valor2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="info-box-text">
                            <?php if($clav2=='F'): ?>                        
                            <i class="fa fa-female SexF" aria-hidden="true"></i><?php echo e(" : ".$valor2); ?>

                            <?php endif; ?>
                            <?php if($clav2=='M'): ?>                        
                            <i class="fa fa-male SexM" aria-hidden="true"></i><?php echo e(" : ".$valor2); ?>

                            <?php endif; ?>
                            <?php if($clav2=='Total'): ?>                        
                            <div class="total">
                                <?php echo e($valor2); ?>

                            </div>    
                            <?php endif; ?>
                        </span>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div>
                    <?php endif; ?>
                </div>            
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </div>
    </div>
    <!-- /.box-body -->
</div>


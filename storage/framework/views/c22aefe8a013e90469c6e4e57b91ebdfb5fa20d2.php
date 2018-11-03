<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php echo $__env->yieldContent('usuico'); ?>
            </div>
            <div class="pull-left info">
                <p><?php echo $__env->yieldContent('usuccc'); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
            </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menú del Director</li>
            <li class="active">
                <a href="<?php echo e(route('Dir.Reg')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Escritorio</span>            
                </a>
            </li>
            
            <li>
                <a href="<?php echo e(route('Dir.Doc')); ?>">
                    <i class="fa fa-id-card-o"></i> <span>Plantel Docente</span>                    
                </a>
            </li> 
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Alumnos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php $__currentLoopData = $Niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                         
                    <li>
                        <a href="<?php echo e(route('Dir.Reg')); ?>/nivel/<?php echo e($Nivel->grd_nivel_id); ?>"> <?php echo e($Nivel->grd_nivel_nombre); ?>

                            <span class="pull-right-container">
                                <small class="label pull-right bg-green">(<?php echo e(count($Nivel->Cursos)); ?>)</small>
                            </span>
                        </a> 
                    </li>                            
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>             
            
            <li>
                <a href="<?php echo e(route('Dir.com')); ?>">
                    <i class="fa fa-comments-o"></i> <span>Comunicado</span>                    
                </a>
            </li> 
            
           
              
            <li class="hidden">
                <a href="<?php echo e(route('Dir.agenda')); ?>">
                    <i class="fa fa-calendar"></i><span>Agenda</span>
                    
                </a>
            </li>
            
            <li>
                <a href="<?php echo e(route('Dir.actividades')); ?>">
                    <i class="fa  fa-calendar-check-o"></i> <span>Calendario de Actividades</span>                    
                </a>
            </li> 
            
            <li class="hidden">
                <a href="<?php echo e(route('register')); ?>">
                    <i class="fa  fa-user-plus"></i> <span>Crear Nuevo Usuario</span>                                        
                </a>
            </li> 
            
             <li  class="hidden">
                <a href="<?php echo e(route('Dir.lib')); ?>">
                  <i class="fa fa-file-text"></i> <span>Libretas</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-green">subir</small>
                  </span>
                </a>
              </li>
            

            
        </ul>
    </section>
    <!-- /.sidebar -->

</aside>    
	

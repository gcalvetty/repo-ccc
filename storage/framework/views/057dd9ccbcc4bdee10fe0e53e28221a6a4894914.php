
<?php $__env->startSection('sis_menu_lateral'); ?>
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
            <li class="header">Menú de Administración</li>
            <li class="active">
                <a href="<?php echo e(route('Admtr.Reg')); ?>">
                    <i class="fa fa-th"></i> <span>Escritorio</span>            
                </a>
            </li>            
            <li class="treeview">                
                <a href="#">
                    <i class="fa fa-id-card-o"></i> <span>Plante Docente</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php $__currentLoopData = $Niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                         
                    <li>
                        <a href="<?php echo e(route('Admtr.Reg')); ?>/profesores/nivel/<?php echo e($Nivel->grd_nivel_id); ?>"> <?php echo e($Nivel->grd_nivel_nombre); ?>                            
                        </a> 
                    </li>                            
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-graduation-cap"></i> <span>Alumnos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php $__currentLoopData = $Niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                         
                    <li>
                        <a href="<?php echo e(route('Admtr.Reg')); ?>/alumnos/nivel/<?php echo e($Nivel->grd_nivel_id); ?>"> <?php echo e($Nivel->grd_nivel_nombre); ?>

                            <span class="pull-right-container">
                                <small class="label pull-right bg-green">(<?php echo e(count($Nivel->Cursos)); ?>)</small>
                            </span>
                        </a> 
                    </li>                            
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </li>        
            <li class="hidden">
                <a href="<?php echo e(route('Admtr.agenda')); ?>">
                    <i class="fa fa-calendar"></i><span>Agenda</span>

                </a>
            </li>

            <li>
                <a href="<?php echo e(route('Admtr.actividades')); ?>">
                    <i class="fa  fa-calendar-check-o"></i> <span>Calendario de Actividades</span> 
                </a>
            </li>                              
        </ul>
    </section>
    <!-- /.sidebar -->

</aside>    
<?php $__env->stopSection(); ?>	
